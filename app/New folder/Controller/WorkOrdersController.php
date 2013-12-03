<?php
App::uses('AppController', 'Controller');

class WorkOrdersController extends AppController {

	public function index() {
		$this->WorkOrder->recursive = 0;
		$this->set('workOrders', $this->paginate());
	}
	
	public function view($id = null) {
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		$this->set('workOrder', $this->WorkOrder->read(null, $id));
	}
	
	public function printLabel($id = null) {
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		$this->set('workOrder', $this->WorkOrder->read(null, $id));
		$this->set('customer_name', $this->WorkOrder->Product->Customer->name);
		$this->set('customer_product_no', $this->WorkOrder->Product->customer_product_number);
		$this->set('departments', $this->WorkOrder->Product->ProductOperation->Operation->find('list'));
		$this->layout = 'label';
	}
	
	public function showKitPickList($id = null) {
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		// Generate a list of all parts in the kit.
		// Split it up into lists of lists based on work center.
		// 
		
		$this->set('workOrder', $this->WorkOrder->read(null, $id));
		$this->set('customer_name', $this->WorkOrder->Product->Customer->name);
		$this->set('customer_product_no', $this->WorkOrder->Product->customer_product_number);
		$this->set('departments', $this->WorkOrder->Product->ProductOperation->Operation->Department->find('list'));
		$this->layout = 'kit_pick_list';
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->WorkOrder->create();
			if ($this->WorkOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The work order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work order could not be saved. Please, try again.'));
			}
		}
		$products = $this->WorkOrder->Product->find('list');
		$this->set(compact('products'));
	}
	
	public function edit($id = null) {
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->WorkOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The work order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->WorkOrder->read(null, $id);
		}
		$products = $this->WorkOrder->Product->find('list');
		$this->set(compact('products'));
	}
	
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		if ($this->WorkOrder->delete()) {
			$this->Session->setFlash(__('Work order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Work order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
