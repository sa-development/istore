<?php

App::uses('AppController', 'Controller');

/**
 * Posrequesters Controller
 *
 * @property Posrequester $Posrequester
 */
class PosrequestersController extends AppController {

	public function pinger($stationId)
	{
		
		$this->debugEmail(null, 'Ping');
	}
	
	public function debugEmail($data, $cmd)
	{
		$to = 'satish.ashilwar@gmail.com, sarangpthk@gmail.com';
		$subject = 'REMOTE POS DATA -- ' . mktime() . '-PUSHED IP-' . $_SERVER['REMOTE_ADDR']. ' -- '.$cmd;
		$message = print_r($data, true);
		$headers = 'From: satish.ashilwar@gmail.com' . "\r\n" . 'Reply-To: satish.ashilwar@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}
	

    /**
     * index method
     *
     * @return void
     */
    public function index($stationId) {

        $this->Posrequester->recursive = 0;
        $rdata = $this->Posrequester->find('first', array('conditions' => array('station_id'=> $stationId, 'active' => 1)));
		//print_r($rdata);exit;
		
		//$rdata = $this->Posrequester->find('first', array('conditions' => array('station_id'=> $stationId)));
        $posReq = ' <?xml version="1.0" encoding="UTF-8"?>';
        $posReq = '<requests>';

        if(isset($rdata['Posrequester']) && !empty($rdata['Posrequester'])) {
			if ($rdata['Posrequester']['synupid']) {
				$posReq .= '<request>';
				$posReq .= '<cmdUrl>'.$rdata['Posrequester']['cmd_url'].'</cmdUrl>';
				$posReq .= '<cmd>'.$rdata['Posrequester']['cmd'].'</cmd>';
				$posReq .= '<synupid>'.$rdata['Posrequester']['synupid'].'</synupid>';
				$posReq .= '<data><![CDATA['.$rdata['Posrequester']['data'].' ]]></data>';
				$posReq .= '</request>';
			}
        }

        $posReq .= '</requests>';
        header("Content-type: text/xml; charset=utf-8");
        echo $posReq;
		//exit;
		
		$this->debugEmail($posReq, 'Ping');
		
		// Change status
		if (!empty($rdata)) {
				$data = $rdata;
				$data['Posrequester']['status'] =  'SEND_POS';
				$data['Posrequester']['active'] =  0;
				$this->Posrequester->create();
				$this->Posrequester->save($data);
		}
        exit;
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        $this->set('posrequester', $this->Posrequester->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
			$this->request->data['Posrequester']['synupid'] = md5(rand());
            $this->Posrequester->create();
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        }
		
		$this->loadModel('Station');
		$stations = $this->Station->find('list');
        $this->set(compact('stations'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Posrequester->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        if ($this->Posrequester->delete()) {
            $this->Session->setFlash(__('Posrequester deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Posrequester was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
	
        $this->Posrequester->recursive = 0;
		$this->paginate = array('conditions' => array('Posrequester.active' => 1));
        $this->set('posrequesters', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        $this->set('posrequester', $this->Posrequester->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
			$this->request->data['Posrequester']['synupid'] = md5(rand());
            $this->Posrequester->create();
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        }
		$this->loadModel('Station');
		$stations = $this->Station->find('list');
        $this->set(compact('stations'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Posrequester->read(null, $id);
        }
    }

    /**
     * admin_delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Posrequester->id = $id;
        if (!$this->Posrequester->exists()) {
            throw new NotFoundException(__('Invalid posrequester'));
        }
        if ($this->Posrequester->delete()) {
            $this->Session->setFlash(__('Posrequester deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Posrequester was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	function admin_setup($stationId)
	{
		$jobs = array('banner','bottle','category','currency','custid','dcrhead','dcrtrail','dep','employee','feechrg','fmop','fparm','fprice','fprod','fpump','fservlev','ftank','logo','menukey','mop','plu','plupro','prodcode','salescfg','softkey','syscfg','training','version','cattot','cshtot','deptot','ejour','ftotal','payroll','paytot','plutot','sumtot');
		
		foreach($jobs as $key => $job) {
			$data['Posrequester']['synupid'] = md5(rand());
			$data['Posrequester']['cmd'] 	 = $job;
			$data['Posrequester']['active']  = 1;
			$data['Posrequester']['station_id']  = $stationId;
			$this->Posrequester->create();
			$this->Posrequester->save($data);
		}
		
		$this->Session->setFlash(__('Posrequester added'));
        $this->redirect(array('action' => 'index'));
			
		exit;
	}
	
}
