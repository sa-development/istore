<?php
App::uses('AppModel', 'Model');
/**
 * FuelInvoice Model
 *
 * @property FuelSupplier $FuelSupplier
 * @property Station $Station
 * @property FuelInvoiceItem $FuelInvoiceItem
 */
class FuelInvoice extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'invoice';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fuel_supplier_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'invoice' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'invoice_date' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'total_invoice' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'terms' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'payment_method_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select payment method.',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'station_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'status' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'vendor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PaymentMethod' => array(
			'className' => 'PaymentMethod',
			'foreignKey' => 'payment_method_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FuelInvoiceItem' => array(
			'className' => 'FuelInvoiceItem',
			'foreignKey' => 'fuel_invoice_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	
	public function afterSave($options = array()) {
		$payBillData = array();
		if (isset($this->data['FuelInvoice']) && !empty($this->data['FuelInvoice']) && $this->data['FuelInvoice']['status'] == 'approved') {
			$payBillData['Paybill']['fuel_invoice_id']  =  $this->data['FuelInvoice']['id'];
			$payBillData['Paybill']['due_date'] 		=  $this->data['FuelInvoice']['invoice_date'];
			$payBillData['Paybill']['vendor_id'] 		=  $this->data['FuelInvoice']['vendor_id'];
			$payBillData['Paybill']['amt_due'] 			=  $this->data['FuelInvoice']['total_invoice'];
			$payBillData['Paybill']['disc_used'] 		=  '';
			$payBillData['Paybill']['credit_used'] 		=  '';
			$payBillData['Paybill']['amount_to_pay'] 	= $this->data['FuelInvoice']['total_invoice'];
			$payBillData['Paybill']['bills_ref_no'] 	= $this->data['FuelInvoice']['invoice'];
			//$payBillData['Paybill']['discount'] 		=  0;
			//$payBillData['Paybill']['number_of_credit'] =  0;
			//$payBillData['Paybill']['total_credit_available'] =  0;
			//$payBillData['Paybill']['payment_date'] 	= $this->data['FuelInvoice']['payment_date'];
			$payBillData['Paybill']['paymen_method'] 	= $this->data['FuelInvoice']['payment_method_id'];
			//$payBillData['Paybill']['payment_to'] 		= $this->data['FuelInvoice']['payment_to'];
			//$payBillData['Paybill']['payment_from'] 	= $this->data['FuelInvoice']['payment_from'];
			//$payBillData['Paybill']['ending_balance'] 	= $this->data['FuelInvoice']['ending_balance'];
			
			App::import('model','Paybill');
			
			//$this->loadModel('Paybill');
			
			$Paybill = new Paybill();
			
			$Paybill->create($payBillData);
			
			
			$Paybill->save($payBillData);
			
			//print_r($payBillData);exit;
		}
		
		return true;
	}


}
