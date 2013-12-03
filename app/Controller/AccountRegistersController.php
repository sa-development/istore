<?php
App::uses('AppController', 'Controller');
/**
 * AccountRegisters Controller
 *
 * @property AccountRegister $AccountRegister
 */
class AccountRegistersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountRegister->recursive = 0;
		$this->set('accountRegisters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		$this->set('accountRegister', $this->AccountRegister->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountRegister->create();
			if ($this->AccountRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The account register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account register could not be saved. Please, try again.'));
			}
		}
		$accountings = $this->AccountRegister->Accounting->find('list');
		$users = $this->AccountRegister->User->find('list');
		$this->set(compact('accountings', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The account register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account register could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountRegister->read(null, $id);
		}
		$accountings = $this->AccountRegister->Accounting->find('list');
		$users = $this->AccountRegister->User->find('list');
		$this->set(compact('accountings', 'users'));
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
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		if ($this->AccountRegister->delete()) {
			$this->Session->setFlash(__('Account register deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account register was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AccountRegister->recursive = 0;
		$this->set('accountRegisters', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		$this->set('accountRegister', $this->AccountRegister->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AccountRegister->create();
			if ($this->AccountRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The account register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account register could not be saved. Please, try again.'));
			}
		}
		$accountings = $this->AccountRegister->Accounting->find('list');
		$users = $this->AccountRegister->User->find('list');
		$this->set(compact('accountings', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The account register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account register could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountRegister->read(null, $id);
		}
		$accountings = $this->AccountRegister->Accounting->find('list');
		$users = $this->AccountRegister->User->find('list');
		$this->set(compact('accountings', 'users'));
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
		$this->AccountRegister->id = $id;
		if (!$this->AccountRegister->exists()) {
			throw new NotFoundException(__('Invalid account register'));
		}
		if ($this->AccountRegister->delete()) {
			$this->Session->setFlash(__('Account register deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account register was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
