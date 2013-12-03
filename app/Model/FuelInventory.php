<?php
App::uses('AppModel', 'Model');
/**
 * FuelInventory Model
 *
 * @property FuelType $FuelType
 * @property Station $Station
 */
class FuelInventory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sales';


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
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
