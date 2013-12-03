<?php
App::uses('AppController', 'Controller');
/**
 * FuelTypes Controller
 *
 * @property FuelType $FuelType
 */
class FuelTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuelType->recursive = 0;
		$this->set('fuelTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		$this->set('fuelType', $this->FuelType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuelType->create();
			if ($this->FuelType->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel type could not be saved. Please, try again.'));
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
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelType->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelType->read(null, $id);
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
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		if ($this->FuelType->delete()) {
			$this->Session->setFlash(__('Fuel type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FuelType->recursive = 0;
		$this->set('fuelTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		$this->set('fuelType', $this->FuelType->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FuelType->create();
			if ($this->FuelType->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel type could not be saved. Please, try again.'));
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
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelType->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelType->read(null, $id);
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
		$this->FuelType->id = $id;
		if (!$this->FuelType->exists()) {
			throw new NotFoundException(__('Invalid fuel type'));
		}
		if ($this->FuelType->delete()) {
			$this->Session->setFlash(__('Fuel type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
