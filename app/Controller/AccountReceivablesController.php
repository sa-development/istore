<?php
App::uses('AppController', 'Controller');
/**
 * AccountReceivables Controller
 *
 * @property AccountReceivable $AccountReceivable
 */
class AccountReceivablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountReceivable->recursive = 0;
		$this->set('accountReceivables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		$this->set('accountReceivable', $this->AccountReceivable->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountReceivable->create();
			if ($this->AccountReceivable->save($this->request->data)) {
				$this->Session->setFlash(__('The account receivable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account receivable could not be saved. Please, try again.'));
			}
		}
		$users = $this->AccountReceivable->User->find('list');
		$corporations = $this->AccountReceivable->Corporation->find('list');
		$stations = $this->AccountReceivable->Station->find('list');
		$this->set(compact('users', 'corporations', 'stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountReceivable->save($this->request->data)) {
				$this->Session->setFlash(__('The account receivable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account receivable could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountReceivable->read(null, $id);
		}
		$users = $this->AccountReceivable->User->find('list');
		$corporations = $this->AccountReceivable->Corporation->find('list');
		$stations = $this->AccountReceivable->Station->find('list');
		$this->set(compact('users', 'corporations', 'stations'));
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
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		if ($this->AccountReceivable->delete()) {
			$this->Session->setFlash(__('Account receivable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account receivable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AccountReceivable->recursive = 0;
		$this->set('accountReceivables', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		$this->set('accountReceivable', $this->AccountReceivable->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AccountReceivable->create();
			if ($this->AccountReceivable->save($this->request->data)) {
				$this->Session->setFlash(__('The account receivable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account receivable could not be saved. Please, try again.'));
			}
		}
		$users = $this->AccountReceivable->User->find('list');
		$corporations = $this->AccountReceivable->Corporation->find('list');
		$stations = $this->AccountReceivable->Station->find('list');
		$this->set(compact('users', 'corporations', 'stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountReceivable->save($this->request->data)) {
				$this->Session->setFlash(__('The account receivable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account receivable could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountReceivable->read(null, $id);
		}
		$users = $this->AccountReceivable->User->find('list');
		$corporations = $this->AccountReceivable->Corporation->find('list');
		$stations = $this->AccountReceivable->Station->find('list');
		$this->set(compact('users', 'corporations', 'stations'));
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
		$this->AccountReceivable->id = $id;
		if (!$this->AccountReceivable->exists()) {
			throw new NotFoundException(__('Invalid account receivable'));
		}
		if ($this->AccountReceivable->delete()) {
			$this->Session->setFlash(__('Account receivable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account receivable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
