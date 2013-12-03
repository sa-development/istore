<?php

App::uses('AppController', 'Controller');

/**
 * Pluses Controller
 *
 * @property Plus $Plus
 */
class PlusesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {

        $stationId = $this->params->query['station'];

        $this->_updateConfigData($stationId);

        $this->Plus->recursive = 0;
        $this->set('pluses', $this->paginate());
        $this->set(compact('stationId'));
    }

    function _updateConfigData($stationId) {
        $this->loadModel('StationCmd');
        $configData = $this->StationCmd->find('first', array('conditions' => array('station_id' => $stationId, 'cmd' => 'vPLUs')));
        if (isset($configData['StationCmd']['data']) && $configData['StationCmd']['data']) {
            $dataObject = @simplexml_load_string(str_replace(':', '', $configData['StationCmd']['data']));
            if(is_object($dataObject))
            $this->_updatePLUs($dataObject->domainPLU, $configData);
        }
    }

    function _updatePLUs($plus, $configData) {
        $this->loadModel('Plus');
        $categoryData = array();
        //print_r($configData);exit;
        foreach ($plus as $key => $plu) {

            $updateData = array();
            $updateData['upc'] = (string) $plu->upc;
            $updateData['upcModifier'] = (string) $plu->upcModifier;
            $updateData['description'] = (string) $plu->description;
            $updateData['department'] = (string) $plu->department;
            $updateData['fee'] = (string) $plu->fee;
            $updateData['pcode'] = (string) $plu->pcode;
            $updateData['price'] = (string) $plu->price;
            $updateData['SellUnit'] = (string) $plu->SellUnit;

            // flags taxRates
            $updateData['station_id'] = $configData['StationCmd']['station_id'];

            $plusId = $this->Plus->field('Plus.id', $updateData);
            if ($plusId > 0) {
                $updateData['id'] = $plusId;
            }
            $updateData['sync_id'] = $configData['StationCmd']['sync_id'];
            $categoryData[] = $updateData;
        }
        $this->Plus->saveAll($categoryData);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        $this->set('plus', $this->Plus->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $stationId = null;
		if(isset($this->params->query['station'])) {
			$stationId = $this->params->query['station'];
		}
        if ($this->request->is('post')) {
            $stationId = $this->request->data['Plus']['station_id'];
            $this->Plus->create();
            $this->_preparePOSRequest();
            if ($this->Plus->save($this->request->data)) {
                $this->Session->setFlash(__('The plus has been saved'));

                $this->redirect(array('action' => 'index','action' => 'index', '?' => array('station' => $stationId)));
            } else {
                $this->Session->setFlash(__('The plus could not be saved. Please, try again.'));
            }
        }

        $this->loadModel('Department');
        $stations = $this->Plus->Station->find('list');
        $department = $this->Department->find('list', array('fields' => array('sysid', 'name')));
        
        $this->loadModel('Prodcode');
        $prodcode = $this->Prodcode->find('list', array('fields' => array('sysid', 'name')));
        $this->set(compact('stations', 'department', 'prodcode', 'stationId'));
    }

    function  _preparePOSRequest(){
        if ($this->request->is('post')) {
             $pdata = $this->request->data['Plus'];
             $requestData['Posrequester']['station_id'] = $pdata['station_id'];
             $requestData['Posrequester']['cmd'] = 'uPLUs';
			 
			 if ($pdata['upcModifier'] == ''){
				$pdata['upcModifier'] = '000';
			 }

             $this->loadModel('Station');
             $stationData = $this->Station->read(null, $pdata['station_id']);
             $ip = $stationData['Station']['ip_address'];
             $requestData['Posrequester']['cmd_url'] = "http://$ip/cgi-bin/CGIPLULink?";

             $xml = '<?xml version="1.0" encoding="UTF-8"?>';
             $xml .= '<domain:PLUs xmlns:domain="urn:vfi-sapphire:np.domain.2001-07-01">';
             $xml .= '<domain:PLU>';
             $xml .= '<upc>'.$pdata['upc'].'</upc>';
             $xml .= '<upcModifier>'.($pdata['upcModifier']).'</upcModifier>';
             $xml .= '<description>'.$pdata['description'].'</description>';
             $xml .= '<department>'.$pdata['department'].'</department>';
             $xml .= '<fee>'.$pdata['fee'].'</fee>';
	     $xml .= '<pcode>'.$pdata['pcode'].'</pcode>';
             $xml .= '<price>'.$pdata['price'].'</price>';
             $xml .= '<SellUnit>'.$pdata['SellUnit'].'</SellUnit> ';
             $xml .= '</domain:PLU>';
             $xml .= '</domain:PLUs>';

             $requestData['Posrequester']['data'] = $xml;
             $requestData['Posrequester']['active'] = 1;

             $this->loadModel('Posrequester');
             $this->Posrequester->create();
             $this->Posrequester->save($requestData);
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
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Plus->save($this->request->data)) {
                $this->Session->setFlash(__('The plus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The plus could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Plus->read(null, $id);
        }
        $stations = $this->Plus->Station->find('list');
        $this->set(compact('stations'));
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
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        if ($this->Plus->delete()) {
            $this->Session->setFlash(__('Plus deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Plus was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Plus->recursive = 0;
        $this->set('pluses', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        $this->set('plus', $this->Plus->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Plus->create();
            if ($this->Plus->save($this->request->data)) {
                $this->Session->setFlash(__('The plus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The plus could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Plus->Station->find('list');
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
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Plus->save($this->request->data)) {
                $this->Session->setFlash(__('The plus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The plus could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Plus->read(null, $id);
        }
        $stations = $this->Plus->Station->find('list');
        $this->set(compact('stations'));
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
        $this->Plus->id = $id;
        if (!$this->Plus->exists()) {
            throw new NotFoundException(__('Invalid plus'));
        }
        if ($this->Plus->delete()) {
            $this->Session->setFlash(__('Plus deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Plus was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	function update($station)
	{
		$xml = '<?xml version="1.0" encoding="UTF-8"?>';
		$xml = '<error>empty</error>';
		if ($station) {
			$this->Plus->recursive = -1;
			$data = $this->Plus->find('all', array('conditions' => array('station_id' => $station, 'update_POS' => '1')));
			
			$domainXML = '';
			foreach($data as $key => $plu){
				$domainXML .= $this->_getUpdateNode($plu['Plus']);
			}
			
			if ($domainXML != '') {
				$xml = '<?xml version="1.0" encoding="UTF-8"?>';
				$xml .= '<domain:PLUs xmlns:domain="urn:vfi-sapphire:np.domain.2001-07-01">';
				$xml .= $domainXML;
				$xml .= '</domain:PLUs>';
			}
		}
		
		header("Content-type: text/xml; charset=utf-8");
		echo $xml;
		exit;
	}
	
	function _getUpdateNode($pdata)
	{
		$xml = '';
		if($pdata['upc'] && $pdata['description']  && $pdata['department'] && $pdata['pcode'] && $pdata['price'] && $pdata['SellUnit']) {
		 $xml = '<domain:PLU>';
		 $xml .= '<upc>'.$pdata['upc'].'</upc>';
		 $xml .= '<upcModifier>000</upcModifier>';
		 $xml .= '<description>'.$pdata['description'].'</description>';
		 $xml .= '<department>'.$pdata['department'].'</department>';
		 $xml .= '<fee>'.$pdata['fee'].'</fee>';
		 $xml .= '<pcode>'.$pdata['pcode'].'</pcode>';
		 $xml .= '<price>'.$pdata['price'].'</price>';
		 $xml .= '<SellUnit>'.$pdata['SellUnit'].'</SellUnit> ';
		 $xml .= '</domain:PLU>';
		}
		
		return $xml;
	}

}
