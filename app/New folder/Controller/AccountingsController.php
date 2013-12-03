<?php
App::uses('AppController', 'Controller');
/**
 * Accountings Controller
 *
 * @property Accounting $Accounting
 */
class AccountingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Accounting->recursive = 0;
		$this->set('accountings', $this->paginate());
		$this->set('accountTypes', $this->Accounting->AccountType->find('list'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		$this->set('accounting', $this->Accounting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accounting->create();
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		}
		$corporations = $this->Accounting->Corporation->find('list');
		$stations = $this->Accounting->Station->find('list');
		$accountTypes = $this->Accounting->AccountType->find('list');
		$users = $this->Accounting->User->find('list');
		
        $this->set('userId', $this->Session->read('Auth.User.id'));
		$this->set(compact('corporations', 'stations', 'accountTypes', 'users'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Accounting->read(null, $id);
		}
		$corporations = $this->Accounting->Corporation->find('list');
		$stations = $this->Accounting->Station->find('list');
		$accountTypes = $this->Accounting->AccountType->find('list');
		$users = $this->Accounting->User->find('list');
		$this->set('userId', $this->Session->read('Auth.User.id'));
		$this->set(compact('corporations', 'stations', 'accountTypes', 'users'));
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
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		if ($this->Accounting->delete()) {
			$this->Session->setFlash(__('Accounting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accounting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Accounting->recursive = 0;
		$this->set('accountings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		$this->set('accounting', $this->Accounting->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Accounting->create();
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		}
		$corporations = $this->Accounting->Corporation->find('list');
		$stations = $this->Accounting->Station->find('list');
		$accountTypes = $this->Accounting->AccountType->find('list');
		$users = $this->Accounting->User->find('list');
		$this->set(compact('corporations', 'stations', 'accountTypes', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accounting->save($this->request->data)) {
				$this->Session->setFlash(__('The accounting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Accounting->read(null, $id);
		}
		$corporations = $this->Accounting->Corporation->find('list');
		$stations = $this->Accounting->Station->find('list');
		$accountTypes = $this->Accounting->AccountType->find('list');
		$users = $this->Accounting->User->find('list');
		$this->set(compact('corporations', 'stations', 'accountTypes', 'users'));
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
		$this->Accounting->id = $id;
		if (!$this->Accounting->exists()) {
			throw new NotFoundException(__('Invalid accounting'));
		}
		if ($this->Accounting->delete()) {
			$this->Session->setFlash(__('Accounting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accounting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
