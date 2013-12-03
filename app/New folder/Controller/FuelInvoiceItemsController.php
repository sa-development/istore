<?php
App::uses('AppController', 'Controller');
/**
 * FuelInvoiceItems Controller
 *
 * @property FuelInvoiceItem $FuelInvoiceItem
 */
class FuelInvoiceItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuelInvoiceItem->recursive = 0;
		$this->set('fuelInvoiceItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		$this->set('fuelInvoiceItem', $this->FuelInvoiceItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuelInvoiceItem->create();
			if ($this->FuelInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice item could not be saved. Please, try again.'));
			}
		}
		$fuelTypes = $this->FuelInvoiceItem->FuelType->find('list');
		$fuelInvoices = $this->FuelInvoiceItem->FuelInvoice->find('list');
		$stations = $this->FuelInvoiceItem->Station->find('list');
		$this->set(compact('fuelTypes', 'fuelInvoices', 'stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoiceItem->read(null, $id);
		}
		$fuelTypes = $this->FuelInvoiceItem->FuelType->find('list');
		$fuelInvoices = $this->FuelInvoiceItem->FuelInvoice->find('list');
		$stations = $this->FuelInvoiceItem->Station->find('list');
		$this->set(compact('fuelTypes', 'fuelInvoices', 'stations'));
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
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		if ($this->FuelInvoiceItem->delete()) {
			$this->Session->setFlash(__('Fuel invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FuelInvoiceItem->recursive = 0;
		$this->set('fuelInvoiceItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		$this->set('fuelInvoiceItem', $this->FuelInvoiceItem->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FuelInvoiceItem->create();
			if ($this->FuelInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice item could not be saved. Please, try again.'));
			}
		}
		$fuelTypes = $this->FuelInvoiceItem->FuelType->find('list');
		$fuelInvoices = $this->FuelInvoiceItem->FuelInvoice->find('list');
		$stations = $this->FuelInvoiceItem->Station->find('list');
		$this->set(compact('fuelTypes', 'fuelInvoices', 'stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoiceItem->read(null, $id);
		}
		$fuelTypes = $this->FuelInvoiceItem->FuelType->find('list');
		$fuelInvoices = $this->FuelInvoiceItem->FuelInvoice->find('list');
		$stations = $this->FuelInvoiceItem->Station->find('list');
		$this->set(compact('fuelTypes', 'fuelInvoices', 'stations'));
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
		$this->FuelInvoiceItem->id = $id;
		if (!$this->FuelInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice item'));
		}
		if ($this->FuelInvoiceItem->delete()) {
			$this->Session->setFlash(__('Fuel invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
