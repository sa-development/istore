<?php
App::uses('AppController', 'Controller');
/**
 * Vendors Controller
 *
 * @property Vendor $Vendor
 */
class VendorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Vendor->recursive = 0;
		$this->set('vendors', $this->paginate());
		$this->set('states', $this->Vendor->State->find('list', array('fields' => array('id', 'default_name'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$this->set('vendor', $this->Vendor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	 //$this->layout='ajax';

		$this->loadModel('Ledger');
		$groupList = $this->Ledger->find('list', array('conditions' => array('Ledger.group_id' => 24)));
		
		//print_r($groupList);exit;

		if ($this->request->is('post')) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor has been saved'));
				//$this->render('/Elements/thickbox');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Vendor->User->find('list');
		$states = $this->Vendor->State->find('list', array('fields' => array('id', 'default_name')));
		$stations = $this->Vendor->Station->find('list');
		$vendorsTypes = $this->Vendor->VendorsType->find('list');
		$userId = $this->Session->read('Auth.User.id');
		$this->set(compact('users', 'states', 'stations', 'vendorsTypes', 'userId', 'groupList'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vendor->save($this->request->data)) {
				//$this->Session->setFlash(__('The vendor has been saved'));
				$this->render('/Elements/thickbox');
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vendor->read(null, $id);
		}
		$users = $this->Vendor->User->find('list');
		$states = $this->Vendor->State->find('list', array('fields' => array('id', 'default_name')));
		$stations = $this->Vendor->Station->find('list');
		$vendorsTypes = $this->Vendor->VendorsType->find('list');
		$userId = $this->Session->read('Auth.User.id');
		$this->set(compact('users', 'states', 'stations', 'vendorsTypes', 'userId'));
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
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this->Vendor->delete()) {
			$this->Session->setFlash(__('Vendor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vendor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Vendor->recursive = 0;
		$this->set('vendors', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$this->set('vendor', $this->Vendor->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Vendor->User->find('list');
		$states = $this->Vendor->State->find('list', array('fields' => array('id', 'default_name')));
		$stations = $this->Vendor->Station->find('list');
		$vendorsTypes = $this->Vendor->VendorsType->find('list');
		$this->set(compact('users', 'states', 'stations', 'vendorsTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vendor->read(null, $id);
		}
		$users = $this->Vendor->User->find('list');
		$states = $this->Vendor->State->find('list', array('fields' => array('id', 'default_name')));
		$stations = $this->Vendor->Station->find('list');
		$vendorsTypes = $this->Vendor->VendorsType->find('list');
		$this->set(compact('users', 'states', 'stations', 'vendorsTypes'));
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
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this->Vendor->delete()) {
			$this->Session->setFlash(__('Vendor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vendor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
