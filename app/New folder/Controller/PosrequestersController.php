<?php

App::uses('AppController', 'Controller');

/**
 * Posrequesters Controller
 *
 * @property Posrequester $Posrequester
 */
class PosrequestersController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($stationId) {

        $this->Posrequester->recursive = 0;
        //$rdata = $this->Posrequester->find('all', array('conditions' => array('station_id'=> $stationId, 'active' => 1)));
		
		$rdata = $this->Posrequester->find('all', array('conditions' => array('station_id'=> $stationId)));
		
        $posReq = ' <?xml version="1.0" encoding="UTF-8"?>';
        $posReq = '<requests>';

        foreach ($rdata as $ky => $value) {
            $posReq .= '<request>';
            $posReq .= '<cmdUrl>'.$value['Posrequester']['cmd_url'].'</cmdUrl>';
            $posReq .= '<cmd>'.$value['Posrequester']['cmd'].'</cmd>';
            $posReq .= '<data><![CDATA['.$value['Posrequester']['data'].' ]]></data>';
            $posReq .= '</request>';
        }

        $posReq .= '</requests>';
        header("Content-type: text/xml; charset=utf-8");
        echo $posReq;
		
		// Change status
		if (!empty($rdata)) {
			foreach($rdata as $k => $val){
				$data = $val;
				$data['Posrequester']['status'] =  'SEND_POS';
				$data['Posrequester']['active'] =  0;
				$this->Posrequester->create();
				$this->Posrequester->save($data);
			}
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
            $this->Posrequester->create();
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        }
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
            $this->Posrequester->create();
            if ($this->Posrequester->save($this->request->data)) {
                $this->Session->setFlash(__('The posrequester has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The posrequester could not be saved. Please, try again.'));
            }
        }
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

}
