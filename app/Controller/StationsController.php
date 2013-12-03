<?php

App::uses('AppController', 'Controller');

/**
 * Stations Controller
 *
 * @property Station $Station
 */
class StationsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Station->recursive = 0;
        $this->paginate = array('conditions' => array('Station.user_id' => $this->Session->read('Auth.User.id')));
        $this->set('stations', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }

        $this->set('station', $this->Station->read(null, $id));
        $stationId = $id;
        $this->set(compact('stationId'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
	//$this->layout='ajax';
        if ($this->request->is('post')) {
            $this->Station->create();
            if ($this->Station->save($this->request->data)) {
                $this->Session->setFlash(__('The station has been saved'));
                $this->redirect(array('action' => 'index'));
			  // $this->render('/Elements/thickbox');
            } else {
                $this->Session->setFlash(__('The station could not be saved. Please, try again.'));
            }
        }
		
		$states = $this->Station->State->find('list', array('fields' => array('id', 'default_name')));
        $corporations = $this->Station->Corporation->find('list', array('conditions' => array('Corporation.user_id' => $this->Session->read('Auth.User.id'))));
        $businessTypes = $this->Station->BusinessType->find('list');
        $countries = $this->Station->Country->find('list');
		
        //$stores = $this->Station->Store->find('list', array('fields' => array('id', 'name')));
        $users = $this->Station->User->find('list');
        $userId = $this->Session->read('Auth.User.id');
        $this->set(compact('corporations', 'users', 'userId','businessTypes','countries','states'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
	//$this->layout='ajax';
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Station->save($this->request->data)) {
                $this->Session->setFlash(__('The station has been saved'));
                $this->redirect(array('action' => 'index'));
				//$this->render('/Elements/thickbox');
            } else {
                $this->Session->setFlash(__('The station could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Station->read(null, $id);
        }
		
		$states = $this->Station->State->find('list', array('fields' => array('id', 'default_name')));
        $corporations = $this->Station->Corporation->find('list', array('conditions' => array('Corporation.user_id' => $this->Session->read('Auth.User.id'))));
        $businessTypes = $this->Station->BusinessType->find('list');
        $countries = $this->Station->Country->find('list');

       // $stores = $this->Station->Store->find('list', array('fields' => array('id', 'name')));
        $users = $this->Station->User->find('list');
        $userId = $this->Session->read('Auth.User.id');
        $stationId = $id;
        $this->set(compact('stores', 'users', 'userId', 'stationId','states','countries','businessTypes','corporations'));
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
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }
        if ($this->Station->delete()) {
            $this->Session->setFlash(__('Station deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Station was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Station->recursive = 0;
        $this->set('stations', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }
        $this->set('station', $this->Station->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Station->create();
            if ($this->Station->save($this->request->data)) {
                $this->Session->setFlash(__('The station has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station could not be saved. Please, try again.'));
            }
        }
        $businessTypes = $this->Station->BusinessTypy->find('list');
        $users = $this->Station->User->find('list');
        $userId = $this->Session->read('Auth.User.id');
        $this->set(compact('businessTypes', 'users', 'userId'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Station->save($this->request->data)) {
                $this->Session->setFlash(__('The station has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Station->read(null, $id);
        }
        $businessTypes = $this->Station->BusinessTypy->find('list');
        $users = $this->Station->User->find('list');
        $userId = $this->Session->read('Auth.User.id');
        $this->set(compact('businessTypes', 'users', 'userId'));
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
        $this->Station->id = $id;
        if (!$this->Station->exists()) {
            throw new NotFoundException(__('Invalid station'));
        }
        if ($this->Station->delete()) {
            $this->Session->setFlash(__('Station deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Station was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function posview() {

    }

    public function department() {

    }

}
