<?php
App::uses('AppModel', 'Model');
/**
 * Paybill Model
 *
 * @property StoreInvoice $StoreInvoice
 * @property FuelInvoice $FuelInvoice
 * @property Vendor $Vendor
 */
class Paybill extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vendor_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'StoreInvoice' => array(
			'className' => 'StoreInvoice',
			'foreignKey' => 'store_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FuelInvoice' => array(
			'className' => 'FuelInvoice',
			'foreignKey' => 'fuel_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'vendor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
