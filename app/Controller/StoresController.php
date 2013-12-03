<?php

App::uses('AppController', 'Controller');

/**
 * Stores Controller
 *
 * @property Store $Store
 */
class StoresController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Store->recursive = 0;
        $this->set('stores', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Store->id = $id;
        if (!$this->Store->exists()) {
            throw new NotFoundException(__('Invalid store'));
        }
        $this->set('store', $this->Store->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Store->create();
            if ($this->Store->save($this->request->data)) {
                $this->Session->setFlash(__('The store has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The store could not be saved. Please, try again.'));
            }
        }

        //$languages = $this->Employee->Store->find('list');
        $states = $this->Store->State->find('list', array('fields' => array('id', 'default_name')));
        $corporations = $this->Store->Corporation->find('list', array('conditions' => array('Corporation.user_id' => $this->Session->read('Auth.User.id'))));
        $businessTypes = $this->Store->BusinessType->find('list');
        $countries = $this->Store->Country->find('list');
        //$empforms = $this->Employee->Empform->find('list');
        $this->set(compact('states', 'corporations', 'countries', 'businessTypes'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Store->id = $id;
        if (!$this->Store->exists()) {
            throw new NotFoundException(__('Invalid store'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Store->save($this->request->data)) {
                $this->Session->setFlash(__('The store has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The store could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Store->read(null, $id);
        }

        $states = $this->Store->State->find('list', array('fields' => array('id', 'default_name')));
        $corporations = $this->Store->Corporation->find('list', array('conditions' => array('Corporation.user_id' => $this->Session->read('Auth.User.id'))));
        $businessTypes = $this->Store->BusinessType->find('list');
        $countries = $this->Store->Country->find('list');
        //$empforms = $this->Employee->Empform->find('list');
        $this->set(compact('states', 'corporations', 'countries', 'businessTypes'));
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
        $this->Store->id = $id;
        if (!$this->Store->exists()) {
            throw new NotFoundException(__('Invalid store'));
        }
        if ($this->Store->delete()) {
            $this->Session->setFlash(__('Store deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Store was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
