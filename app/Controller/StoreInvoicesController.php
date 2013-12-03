<?php
App::uses('AppController', 'Controller');
/**
 * StoreInvoices Controller
 *
 * @property StoreInvoice $StoreInvoice
 */

class StoreInvoicesController extends AppController {

public $layout = 'accounting_view';

//var $methodPayments = array('0' => 'By Cheque', 'MO' => 'Money Order', 'OT' => 'Online Transfer', 'Cash' => 'By Cash');

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
			
			// Removed unwanted data from invoice items model object
			$items = array();
			foreach($this->request->data['StoreInvoiceItem'] as $key => $fItem) {
				if(isset($fItem['item_name']) && $fItem['item_name'] && isset($fItem['case_QTY']) && $fItem['case_QTY']) {
					$items['StoreInvoiceItem'][] = $fItem;
				}
			}
			//print_r($this->request->data);
			if(isset($items['StoreInvoiceItem'])) {
				$this->request->data['StoreInvoiceItem'] = $items['StoreInvoiceItem'];
			} else {
				$this->request->data['StoreInvoiceItem'] = array();
			}
			
			$this->StoreInvoice->create();
			if ($this->StoreInvoice->saveAll($this->request->data)) {
			 /*****Insert in Account Payable table if status is approve********/
					if($this->request->data['StoreInvoice']['status'] == "approved"):
						$this->request->data['StoreInvoice']['invoice_id'] = $this->StoreInvoice->getLastInsertId(); 						
						$this->addAccount($this->request->data);
					endif;
					
				/************* END *************/
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->StoreInvoice->PaymentMethod->find('list');
		$stations = $this->StoreInvoice->Station->find('list');
		$this->loadModel('Vrubyreptcategory');
		$categories = $this->Vrubyreptcategory->find('list');
		
		$this->loadModel('Vrubyreptplu');
		$vrubyreptplus = $this->Vrubyreptplu->find('list');
		
		//print_r($vrubyreptplus);exit;
		
		$this->set(compact('vendors', 'methodPayments', 'stations', 'categories', 'vrubyreptplus'));
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
			/*****Insert in Account Payable table if status is approve********/
					if($this->request->data['StoreInvoice']['status'] == "approved"):
						$this->request->data['StoreInvoice']['invoice_id'] = $this->StoreInvoice->id; 						
						$this->addAccount($this->request->data);
					endif;
					
				/************* END *************/
				$this->Session->setFlash(__('The store invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreInvoice->read(null, $id);
		}
		$vendors = $this->StoreInvoice->Vendor->find('list');
		$methodPayments = $this->StoreInvoice->PaymentMethod->find('list');
		$stations = $this->StoreInvoice->Station->find('list');
		$this->loadModel('Vrubyreptcategory');
		$categories = $this->Vrubyreptcategory->find('list');
		
		$this->loadModel('Vrubyreptplu');
		$vrubyreptplus = $this->Vrubyreptplu->find('list');
		
		//print_r($vrubyreptplus);exit;
		
		$this->set(compact('vendors', 'methodPayments', 'stations', 'categories', 'vrubyreptplus'));
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
		$methodPayments = $this->StoreInvoice->PaymentMethod->find('list');
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
		$methodPayments = $this->StoreInvoice->PaymentMethod->find('list');
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
	
	function addAccount($records) {
		$this->loadModel('AccountPayable');
		$data['AccountPayable']['vendor_id'] 	 = $records['StoreInvoice']['vendor_id'];
		$data['AccountPayable']['invoice_id'] 	 = $records['StoreInvoice']['invoice_id'];
		$data['AccountPayable']['ref_no'] 	     = $records['StoreInvoice']['invoice'];
		$data['AccountPayable']['amount_due'] 	 = $records['StoreInvoice']['total'];
		$data['AccountPayable']['account_type']  = 's';
		$data['AccountPayable']['user_id'] 	     =  $this->Session->read('Auth.User.id');
		$data['AccountPayable']['created'] 		 = date("Y-m-d");
		$this->AccountPayable->save($data);		
		
	}
	
	public function paybills() {
		$this->StoreInvoice->recursive = 0;
		$conditions = array('conditions' => array('StoreInvoice.status' => 'approved'));
		$storeInvoices = $this->StoreInvoice->find('all', $conditions);
		
		$this->loadModel('FuelInvoice');
		$conditions = array('conditions' => array('FuelInvoice.status' => 'approved'));
		$fuelInvoices = $this->FuelInvoice->find('all', $conditions);
		
		$this->set(compact('storeInvoices', 'fuelInvoices'));
	}

}
