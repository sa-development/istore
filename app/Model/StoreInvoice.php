<?php
App::uses('AppModel', 'Model');
/**
 * StoreInvoice Model
 *
 * @property Vendor $Vendor
 * @property MethodPayment $MethodPayment
 * @property Station $Station
 * @property StoreInvoiceItem $StoreInvoiceItem
 */
class StoreInvoice extends AppModel {

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
		'vendor_id' => array(
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
		'method_payment_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'docuement' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
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
		'zero_leading_UPCs' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'PaymentMethod' => array(
			'className' => 'PaymentMethod',
			'foreignKey' => 'method_payment_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'StoreInvoiceItem' => array(
			'className' => 'StoreInvoiceItem',
			'foreignKey' => 'store_invoice_id',
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
		//print_r($this->data);exit;
		if (isset($this->data['StoreInvoice']) && !empty($this->data['StoreInvoice']) && $this->data['StoreInvoice']['status'] == 'approved') {
			//$payBillData['Paybill']['fuel_invoice_id']  =  $this->data['StoreInvoice']['id'];
			$payBillData['Paybill']['due_date'] 		=  $this->data['StoreInvoice']['invoice_date'];
			$payBillData['Paybill']['vendor_id'] 		=  $this->data['StoreInvoice']['vendor_id'];
			$payBillData['Paybill']['amt_due'] 			=  $this->data['StoreInvoice']['total'];
			$payBillData['Paybill']['disc_used'] 		=  '';
			$payBillData['Paybill']['credit_used'] 		=  '';
			$payBillData['Paybill']['amount_to_pay'] 	= $this->data['StoreInvoice']['total'];
			$payBillData['Paybill']['bills_ref_no'] 	= $this->data['StoreInvoice']['invoice'];
			//$payBillData['Paybill']['discount'] 		=  0;
			//$payBillData['Paybill']['number_of_credit'] =  0;
			//$payBillData['Paybill']['total_credit_available'] =  0;
			//$payBillData['Paybill']['payment_date'] 	= $this->data['StoreInvoice']['payment_date'];
			$payBillData['Paybill']['paymen_method'] 	= $this->data['StoreInvoice']['method_payment_id'];
			//$payBillData['Paybill']['payment_to'] 		= $this->data['StoreInvoice']['payment_to'];
			//$payBillData['Paybill']['payment_from'] 	= $this->data['StoreInvoice']['payment_from'];
			//$payBillData['Paybill']['ending_balance'] 	= $this->data['StoreInvoice']['ending_balance'];
			
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
