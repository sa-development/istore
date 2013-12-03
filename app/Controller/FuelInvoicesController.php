<?php
App::uses('AppController', 'Controller');
/**
 * FuelInvoices Controller
 *
 * @property FuelInvoice $FuelInvoice
 */
class FuelInvoicesController extends AppController {

	public $layout = 'accounting_view';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'accounting_view';
		
		$this->FuelInvoice->recursive = 0;
		$this->set('fuelInvoices', $this->paginate());
		
		$this->loadModel('Station');
		$this->loadModel('PaymentMethod');
        $paymentMethods = $this->PaymentMethod->find('list', array('fields' => array('id', 'name')));		
		$stations = $this->Station->find('list', array('fields' => array('id', 'name')));
		 
        $this->set(compact('stations', 'station_id', 'paymentMethods', 'payment_method_id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		
		$this->set('fuelType', $this->getFuelType());		
		$this->set('fuelInvoice', $this->FuelInvoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		
			$items = array();
			foreach($this->request->data['FuelInvoiceItem'] as $key => $fItem) {
				if($fItem['amount'] && $fItem['tank'] && $fItem['cost per gallon']) {
					$items['FuelInvoiceItem'][] = $fItem;
				}
			}
			$this->request->data['FuelInvoiceItem'] = $items['FuelInvoiceItem'];
			
			
			$this->FuelInvoice->create();
			if ($this->FuelInvoice->saveAll($this->request->data)) {
				
				/*****Insert in Account Payable table if status is approve********/
					if($this->request->data['FuelInvoice']['status'] == "approved"):
						
						//Add Accounting
						$this->_addEntry();
						
						$this->request->data['FuelInvoice']['invoice_id'] = $this->FuelInvoice->getLastInsertId(); 						
						$this->addAccount($this->request->data);
					endif;
					
				/************* END *************/
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				
				$this->render('/Elements/thickbox');
				
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->FuelInvoice->Vendor->find('list');
		
		$stations = $this->FuelInvoice->Station->find('list');
		
		$fuelTypes = $this->FuelInvoice->FuelInvoiceItem->FuelType->find('list');
		
		$paymentMethods = $this->FuelInvoice->PaymentMethod->find('list');
		
		$this->loadModel('Ledger');
		
		$groupList = $this->Ledger->find('list', array('conditions' => array('Ledger.group_id' => 24)));
		
		$groupListCR = $this->Ledger->find('list', array('conditions' => array('Ledger.group_id' => 8)));
		
		$this->set(compact('vendors', 'stations', 'fuelTypes', 'paymentMethods', 'groupList'));
	}
	
	
	function _addEntry()
	{
		if(!empty($this->data)) {
			$this->loadModel('Entry');	
			$this->loadModel('Vendor');
			
			$this->Vendor->recursive = -1;
			$vData = $this->Vendor->find('first', array('conditions' => array('Vendor.id' => $this->data['FuelInvoice']['vendor_id'])));		
			
			//Credit to vendor 
			$accdata = array(
				'Entry' => array(
						'entry_type' => 2,
						'date'		=> date("Y-m-d"),
						'EntryItem' => array(
							array(
								'date'  	 => strtotime("now"),
								'ledger_id'  => $vData['Vendor']['group_id'],
								'amount'  	 => $this->data['FuelInvoice']['total_invoice'],
								'dc' => 'C'
								),
							array(
								'ledger_id'  => $this->data['FuelInvoice']['debited_from'],
								'amount'  	 => $this->data['FuelInvoice']['total_invoice'],
								'dc' => 'D'
							),
						),
				)
			);
			
			$this->Entry->create();
			$this->Entry->saveAssociated($accdata, array('deep' => true));
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
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
				
			$items = array();
			foreach($this->request->data['FuelInvoiceItem'] as $key => $fItem) {
				if($fItem['amount'] && $fItem['tank'] && $fItem['cost per gallon']) {
					$items['FuelInvoiceItem'][] = $fItem;
				}
			}
			$this->request->data['FuelInvoiceItem'] = $items['FuelInvoiceItem'];
			
		//echo "<pre>";
		//print_r($this->request->data); exit;
			if ($this->FuelInvoice->saveAll($this->request->data)) {
			
			     /*****Insert in Account table if status is approve********/
					if($this->request->data['FuelInvoice']['status'] == "approved"):
						$this->request->data['FuelInvoice']['invoice_id'] = $this->FuelInvoice->id; 						
						$this->addAccount($this->request->data);
					endif;
					
				/************* END *************/
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->render('/Elements/thickbox');
				
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoice->read(null, $id);
		}
		
		$vendors = $this->FuelInvoice->Vendor->find('list');
		
		//print_r($vendors);exit;
		
		
		$stations = $this->FuelInvoice->Station->find('list');
		
		$fuelTypes = $this->FuelInvoice->FuelInvoiceItem->FuelType->find('list');
		
		$paymentMethods = $this->FuelInvoice->PaymentMethod->find('list');
		
		$this->set(compact('vendors', 'stations', 'fuelTypes', 'paymentMethods'));
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
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->FuelInvoice->delete()) {
			$this->Session->setFlash(__('Fuel invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FuelInvoice->recursive = 0;
		$this->set('fuelInvoices', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		$this->set('fuelInvoice', $this->FuelInvoice->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FuelInvoice->create();
			if ($this->FuelInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->FuelInvoice->Supplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		$this->set(compact('suppliers', 'stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoice->read(null, $id);
		}
		$suppliers = $this->FuelInvoice->Supplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		$this->set(compact('suppliers', 'stations'));
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
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->FuelInvoice->delete()) {
			$this->Session->setFlash(__('Fuel invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	function getFuelType(){
		$this->loadModel('FuelType');
		return $this->FuelType->find('list');
	}
	
	function addAccount($records){
		
		$this->loadModel('AccountPayable');
		$data['AccountPayable']['vendor_id'] 	 = $records['FuelInvoice']['vendor_id'];
		$data['AccountPayable']['invoice_id'] 	 = $records['FuelInvoice']['invoice_id'];
		$data['AccountPayable']['ref_no'] 	     = $records['FuelInvoice']['invoice'];
		$data['AccountPayable']['amount_due'] 	 = $records['FuelInvoice']['total_invoice'];
		$data['AccountPayable']['account_type']  = 'f';
		$data['AccountPayable']['user_id'] 	     =  $this->Session->read('Auth.User.id');
		$data['AccountPayable']['created'] 		 = date("Y-m-d");
		$this->AccountPayable->save($data);		
		
	}
}
