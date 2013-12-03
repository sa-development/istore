<?php
App::uses('AppController', 'Controller');
/**
 * FuelSuppliers Controller
 *
 * @property FuelSupplier $FuelSupplier
 */
class FuelSuppliersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuelSupplier->recursive = 0;
		$this->set('fuelSuppliers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelSupplier->id = $id;
		if (!$this->FuelSupplier->exists()) {
			throw new NotFoundException(__('Invalid fuel supplier'));
		}
		$this->set('fuelSupplier', $this->FuelSupplier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuelSupplier->create();
			if ($this->FuelSupplier->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel supplier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel supplier could not be saved. Please, try again.'));
			}
		}
		$stations = $this->FuelSupplier->Station->find('list');
		$users = $this->FuelSupplier->User->find('list');
		$this->set(compact('stations', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FuelSupplier->id = $id;
		if (!$this->FuelSupplier->exists()) {
			throw new NotFoundException(__('Invalid fuel supplier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelSupplier->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel supplier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel supplier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelSupplier->read(null, $id);
		}
		$stations = $this->FuelSupplier->Station->find('list');
		$users = $this->FuelSupplier->User->find('list');
		$this->set(compact('stations', 'users'));
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
		$this->FuelSupplier->id = $id;
		if (!$this->FuelSupplier->exists()) {
			throw new NotFoundException(__('Invalid fuel supplier'));
		}
		if ($this->FuelSupplier->delete()) {
			$this->Session->setFlash(__('Fuel supplier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel supplier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
