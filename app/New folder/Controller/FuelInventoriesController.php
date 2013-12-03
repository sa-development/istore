<?php
App::uses('AppController', 'Controller');
/**
 * FuelInventories Controller
 *
 * @property FuelInventory $FuelInventory
 */
class FuelInventoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuelInventory->recursive = 0;
		$this->set('fuelInventories', $this->paginate());
		$this->loadModel('Station');
        $stations = $this->Station->find('list', array('fields' => array('id', 'name')));
        $this->set(compact('stations', 'station_id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		$this->set('fuelInventory', $this->FuelInventory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuelInventory->create();
			if ($this->FuelInventory->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel inventory could not be saved. Please, try again.'));
			}
		}
		$stations = $this->FuelInventory->Station->find('list');
		
		$fuelTypes = $this->FuelInventory->FuelType->find('list');
		
		$this->set(compact('stations', 'fuelTypes'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInventory->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel inventory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInventory->read(null, $id);
		}
		$stations = $this->FuelInventory->Station->find('list');
		$this->set(compact('stations'));
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
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		if ($this->FuelInventory->delete()) {
			$this->Session->setFlash(__('Fuel inventory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel inventory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FuelInventory->recursive = 0;
		$this->set('fuelInventories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		$this->set('fuelInventory', $this->FuelInventory->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FuelInventory->create();
			if ($this->FuelInventory->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel inventory could not be saved. Please, try again.'));
			}
		}
		$stations = $this->FuelInventory->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInventory->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel inventory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInventory->read(null, $id);
		}
		$stations = $this->FuelInventory->Station->find('list');
		$this->set(compact('stations'));
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
		$this->FuelInventory->id = $id;
		if (!$this->FuelInventory->exists()) {
			throw new NotFoundException(__('Invalid fuel inventory'));
		}
		if ($this->FuelInventory->delete()) {
			$this->Session->setFlash(__('Fuel inventory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel inventory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
