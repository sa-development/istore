<?php
App::uses('AppController', 'Controller');
/**
 * Corporations Controller
 *
 * @property Corporation $Corporation
 */
class CorporationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Corporation->recursive = 0;
		$this->paginate = array('conditions' => array('Corporation.user_id' =>  $this->Session->read('Auth.User.id')));
		$this->set('corporations', $this->paginate('Corporation'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Corporation->id = $id;
		if (!$this->Corporation->exists()) {
			throw new NotFoundException(__('Invalid corporation'));
		}
		$this->set('corporation', $this->Corporation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	//$this->layout='ajax';
	//print_r($this->data());exit;
		if ($this->request->is('post')) {
		
		$this->request->data['Corporation']['user_id'] = $this->Session->read('Auth.User.id');
			$this->Corporation->create();
			if ($this->Corporation->save($this->request->data)) {
				$this->Session->setFlash(__('The corporation has been saved'));
				$this->redirect(array('action' => 'index'));
				//$this->render('/Elements/thickbox');
			} else {
				$this->Session->setFlash(__('The corporation could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Corporation->Country->find('list');
		$states = $this->Corporation->State->find('list', array('fields' => array('id', 'default_name')));
		$this->set(compact('countries', 'states'));
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
		$this->Corporation->id = $id;
		if (!$this->Corporation->exists()) {
			throw new NotFoundException(__('Invalid corporation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Corporation']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->Corporation->save($this->request->data)) {
				$this->Session->setFlash(__('The corporation has been saved'));
				$this->redirect(array('action' => 'index'));
				//$this->render('/Elements/thickbox');
			} else {
				$this->Session->setFlash(__('The corporation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Corporation->read(null, $id);
		}
		$countries = $this->Corporation->Country->find('list');
		$states = $this->Corporation->State->find('list', array('fields' => array('id', 'default_name')));
		$this->set(compact('countries', 'states'));
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
		$this->Corporation->id = $id;
		if (!$this->Corporation->exists()) {
			throw new NotFoundException(__('Invalid corporation'));
		}
		if ($this->Corporation->delete()) {
			$this->Session->setFlash(__('Corporation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Corporation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
