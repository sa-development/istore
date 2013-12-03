<?php
App::uses('AppModel', 'Model');
/**
 * FuelInvoiceItem Model
 *
 * @property FuelType $FuelType
 * @property FuelInvoice $FuelInvoice
 * @property Station $Station
 */
class FuelInvoiceItem extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'amount';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FuelType' => array(
			'className' => 'FuelType',
			'foreignKey' => 'fuel_type_id',
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
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
