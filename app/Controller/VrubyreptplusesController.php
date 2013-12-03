<?php

App::uses('AppController', 'Controller');

/**
 * Vrubyreptpluses Controller
 *
 * @property Vrubyreptplus $Vrubyreptplus
 */
class VrubyreptplusesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Vrubyreptplus->recursive = 0;

        $station = $this->params->query['station'];
        //$this->paginate = array('conditions' => array('Vrubyreptplus.station_id' => $station), 'order' =>  array('Vrubyreptplus.id' => 'desc'));
		
		$this->paginate = array(
							'conditions' => array('Vrubyreptplus.station_id' => $station),
							'limit' 	 => 100,
							'order' 	 => array('Vrubyreptplus.periodBeginDate' => 'desc'),
						);
						
        $this->loadModel('Prodcode');
        $prodcodeList = $this->Prodcode->find('list', array('station_id' => $station));
        $this->set(compact('prodcodeList', 'station'));

        $this->set('vrubyreptpluses', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        $this->set('vrubyreptplus', $this->Vrubyreptplus->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Vrubyreptplus->create();
            if ($this->Vrubyreptplus->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptplus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptplus could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Vrubyreptplus->Station->find('list');
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
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vrubyreptplus->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptplus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptplus could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vrubyreptplus->read(null, $id);
        }
        $stations = $this->Vrubyreptplus->Station->find('list');
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
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        if ($this->Vrubyreptplus->delete()) {
            $this->Session->setFlash(__('Vrubyreptplus deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vrubyreptplus was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Vrubyreptplus->recursive = 0;
        $this->set('vrubyreptpluses', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        $this->set('vrubyreptplus', $this->Vrubyreptplus->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Vrubyreptplus->create();
            if ($this->Vrubyreptplus->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptplus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptplus could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Vrubyreptplus->Station->find('list');
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
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vrubyreptplus->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptplus has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptplus could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vrubyreptplus->read(null, $id);
        }
        $stations = $this->Vrubyreptplus->Station->find('list');
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
        $this->Vrubyreptplus->id = $id;
        if (!$this->Vrubyreptplus->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptplus'));
        }
        if ($this->Vrubyreptplus->delete()) {
            $this->Session->setFlash(__('Vrubyreptplus deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vrubyreptplus was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
