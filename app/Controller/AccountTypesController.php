<?php
App::uses('AppController', 'Controller');
/**
 * AccountTypes Controller
 *
 * @property AccountType $AccountType
 */
class AccountTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountType->recursive = 0;
		$this->set('accountTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		$this->set('accountType', $this->AccountType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountType->create();
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
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
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountType->read(null, $id);
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
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		if ($this->AccountType->delete()) {
			$this->Session->setFlash(__('Account type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AccountType->recursive = 0;
		$this->set('accountTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		$this->set('accountType', $this->AccountType->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AccountType->create();
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccountType->read(null, $id);
		}
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
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		if ($this->AccountType->delete()) {
			$this->Session->setFlash(__('Account type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
