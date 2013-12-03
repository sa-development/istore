<?php

App::uses('AppController', 'Controller');

/**
 * Vrubyreptdepartments Controller
 *
 * @property Vrubyreptdepartment $Vrubyreptdepartment
 */
class VrubyreptdepartmentsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($string='') {
		$requestData = explode('/', $string);

		$this->layout = 'ajax';
        $station = $requestData[0];
		
		if(isset($requestData[4])) {
			$type 	 = $requestData[4];
		} else {
			$type 	 = 'DAILY';
		}
		
		//$type 	 = $requestData[4];
		
		$start = $end = $shift = null;
		
		if(isset($this->params->query['start'])) $start = $this->params->query['start'];
		if(isset($this->params->query['end']))  $end = $this->params->query['end'];
		if(isset($this->params->query['shift']))  $shift = $this->params->query['shift'];
		
        $this->Vrubyreptdepartment->recursive = 0;
        //$this->paginate = array('conditions' => array('Vrubyreptdepartment.station_id' => $station));
		
		
		//var_dump($type);exit;
		$this->paginate = array(
							'conditions' => $this->prepareCondition('Vrubyreptdepartment', $station, $type),
							'limit' 	 => 1000,
							'order' 	 => array('Vrubyreptdepartment.periodBeginDate' => 'desc'),
						);
        $this->set('vrubyreptdepartments', $this->paginate());
        $this->set(compact('prodcodeList', 'station'));
    }
	

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Vrubyreptdepartment->id = $id;
        if (!$this->Vrubyreptdepartment->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptdepartment'));
        }
        $this->set('vrubyreptdepartment', $this->Vrubyreptdepartment->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Vrubyreptdepartment->create();
            if ($this->Vrubyreptdepartment->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptdepartment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptdepartment could not be saved. Please, try again.'));
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
        $this->Vrubyreptdepartment->id = $id;
        if (!$this->Vrubyreptdepartment->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptdepartment'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vrubyreptdepartment->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptdepartment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptdepartment could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vrubyreptdepartment->read(null, $id);
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
        $this->Vrubyreptdepartment->id = $id;
        if (!$this->Vrubyreptdepartment->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptdepartment'));
        }
        if ($this->Vrubyreptdepartment->delete()) {
            $this->Session->setFlash(__('Vrubyreptdepartment deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vrubyreptdepartment was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
