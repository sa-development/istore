<?php
App::uses('AppController', 'Controller');
/**
 * StoreInvoices Controller
 *
 * @property StoreInvoice $StoreInvoice
 */

class StoreInvoicesController extends AppController {

var $methodPayments = array('cheque' => 'By Cheque', 'MO' => 'Money Order', 'OT' => 'Online Transfer', 'Cash' => 'By Cash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StoreInvoice->recursive = 0;
		$this->set('storeInvoices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		$this->set('storeInvoice', $this->StoreInvoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StoreInvoice->create();
			if ($this->StoreInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->methodPayments;
		$stations = $this->StoreInvoice->Station->find('list');
		$this->set(compact('vendors', 'methodPayments', 'stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreInvoice->read(null, $id);
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->methodPayments;
		$stations = $this->StoreInvoice->Station->find('list');
		$this->set(compact('vendors', 'methodPayments', 'stations'));
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
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		if ($this->StoreInvoice->delete()) {
			$this->Session->setFlash(__('Store invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StoreInvoice->recursive = 0;
		$this->set('storeInvoices', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		$this->set('storeInvoice', $this->StoreInvoice->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StoreInvoice->create();
			if ($this->StoreInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->methodPayments;
		$stations = $this->StoreInvoice->Station->find('list');
		$this->set(compact('vendors', 'methodPayments', 'stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreInvoice->read(null, $id);
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->methodPayments;
		$stations = $this->StoreInvoice->Station->find('list');
		$this->set(compact('vendors', 'methodPayments', 'stations'));
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
		$this->StoreInvoice->id = $id;
		if (!$this->StoreInvoice->exists()) {
			throw new NotFoundException(__('Invalid store invoice'));
		}
		if ($this->StoreInvoice->delete()) {
			$this->Session->setFlash(__('Store invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
