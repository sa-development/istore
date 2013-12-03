<?php
App::uses('AppController', 'Controller');
/**
 * AccountPayables Controller
 *
 * @property AccountPayable $AccountPayable
 */
class AccountPayablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountPayable->recursive = 0;
		$this->set('accountPayables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		$this->set('accountPayable', $this->AccountPayable->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountPayable->create();
			if ($this->AccountPayable->save($this->request->data)) {
				$this->Session->setFlash(__('The account payable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account payable could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->AccountPayable->Vendor->find('list');
		$users = $this->AccountPayable->User->find('list');
		$this->set(compact('vendors', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountPayable->save($this->request->data)) {
				$this->Session->setFlash(__('The account payable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account payable could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountPayable->read(null, $id);
		}
		$vendors = $this->AccountPayable->Vendor->find('list');
		$users = $this->AccountPayable->User->find('list');
		$this->set(compact('vendors', 'users'));
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
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		if ($this->AccountPayable->delete()) {
			$this->Session->setFlash(__('Account payable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account payable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AccountPayable->recursive = 0;
		$this->set('accountPayables', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		$this->set('accountPayable', $this->AccountPayable->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AccountPayable->create();
			if ($this->AccountPayable->save($this->request->data)) {
				$this->Session->setFlash(__('The account payable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account payable could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->AccountPayable->Vendor->find('list');
		$users = $this->AccountPayable->User->find('list');
		$this->set(compact('vendors', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountPayable->save($this->request->data)) {
				$this->Session->setFlash(__('The account payable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account payable could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountPayable->read(null, $id);
		}
		$vendors = $this->AccountPayable->Vendor->find('list');
		$users = $this->AccountPayable->User->find('list');
		$this->set(compact('vendors', 'users'));
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
		$this->AccountPayable->id = $id;
		if (!$this->AccountPayable->exists()) {
			throw new NotFoundException(__('Invalid account payable'));
		}
		if ($this->AccountPayable->delete()) {
			$this->Session->setFlash(__('Account payable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account payable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
