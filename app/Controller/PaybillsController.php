<?php
App::uses('AppController', 'Controller');
/**
 * Paybills Controller
 *
 * @property Paybill $Paybill
 */
class PaybillsController extends AppController {

	public $layout = 'accounting_view';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->loadModel('Ledger');
		if(!empty($this->data)) {
		
			$this->Paybill->create();
			$this->Paybill->save($this->data);
			$this->loadModel('Entry');
			
			//Credit to vendor 
			$accdata = array(
				'Entry' => array(
						'entry_type' => 2,
						'EntryItem' => array(
							array(
								'date'  	 => strtotime("now"),
								'ledger_id'  => $this->data['account_debit'],
								'amount'  	 => $this->data['amount_to_pay'],
								'dc' => 'C'
								),
							array(
								'ledger_id'  => $this->data['group_id'],
								'amount'  	 => $this->data['amount_to_pay'],
								'dc' => 'D'
							),
						),
				)
			);
			$this->Entry->create();
			$this->Entry->saveAssociated($accdata, array('deep' => true));
		}
		
		$groupList = $this->Ledger->find('list', array('conditions' => array('Ledger.group_id' => 19)));

		$this->loadModel('PaymentMethod');
        $paymentMethods = $this->PaymentMethod->find('list', array('fields' => array('id', 'name')));		
		
		$this->loadModel('Station');
		$stations = $this->Station->find('list', array('fields' => array('id', 'name')));
		 
        $this->set(compact('stations', 'paymentMethods'));
		
		$this->Paybill->recursive = 0;
		
		$this->paginate = array('conditions' => array('Paybill.status' => '2'));
		$this->set('paybills', $this->paginate('Paybill'));
		$this->set('groupList', $groupList);
	}	
	
	
	public function payable() {
		$this->loadModel('Ledger');
		if(!empty($this->data)) {
			//print_r($this->data);
			
			
			$this->data = array('Paybill' => $this->data);
			$data 		= $this->data;
			$amountprevious = $this->Paybill->find('all', array('Paybill.id', $data['Paybill']['id']));
			
			
			
			if ($data['Paybill']['amount'] < $data['Paybill']['amt_due']) {				
				$data['Paybill']['partial_invoice'] = 1;
				$data['Paybill']['paybill_amount'] 	= $data['Paybill']['amt_due'] - $data['Paybill']['amount'];
			} else {
				$data['Paybill']['paybill_amount'] 	= $data['Paybill']['amt_due'];
			}
			
			$this->Paybill->create();
			
			$this->Paybill->save($data['Paybill']);
			
			if ($data['Paybill']['amount'] == $data['Paybill']['amt_due']) {
				die('full');
			}
			
			die('partial');
		}
		
		$groupList = $this->Ledger->find('list', array('conditions' => array('Ledger.group_id' => 19)));

		$this->loadModel('PaymentMethod');
        $paymentMethods = $this->PaymentMethod->find('list', array('fields' => array('id', 'name')));		
		
		$this->loadModel('Station');
		$stations = $this->Station->find('list', array('fields' => array('id', 'name')));
		 
        $this->set(compact('stations', 'paymentMethods'));
		
		$this->Paybill->recursive = 0;
		
		$this->paginate = array('conditions' => array('OR' => array('Paybill.status' => 1, 'partial_invoice' => 1)));
		
		$this->set('paybills', $this->paginate('Paybill'));
		$this->set('groupList', $groupList);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Paybill->id = $id;
		if (!$this->Paybill->exists()) {
			throw new NotFoundException(__('Invalid paybill'));
		}
		$this->set('paybill', $this->Paybill->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paybill->create();
			if ($this->Paybill->save($this->request->data)) {
				$this->Session->setFlash(__('The paybill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paybill could not be saved. Please, try again.'));
			}
		}
		$storeInvoices = $this->Paybill->StoreInvoice->find('list');
		$fuelInvoices = $this->Paybill->FuelInvoice->find('list');
		$vendors = $this->Paybill->Vendor->find('list');
		$this->set(compact('storeInvoices', 'fuelInvoices', 'vendors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Paybill->id = $id;
		if (!$this->Paybill->exists()) {
			throw new NotFoundException(__('Invalid paybill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paybill->save($this->request->data)) {
				$this->Session->setFlash(__('The paybill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paybill could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Paybill->read(null, $id);
		}
		$storeInvoices = $this->Paybill->StoreInvoice->find('list');
		$fuelInvoices = $this->Paybill->FuelInvoice->find('list');
		$vendors = $this->Paybill->Vendor->find('list');
		$this->set(compact('storeInvoices', 'fuelInvoices', 'vendors'));
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
		$this->Paybill->id = $id;
		if (!$this->Paybill->exists()) {
			throw new NotFoundException(__('Invalid paybill'));
		}
		if ($this->Paybill->delete()) {
			$this->Session->setFlash(__('Paybill deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Paybill was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
