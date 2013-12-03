<?php
App::uses('AppModel', 'Model');
/**
 * StationPlulist Model
 *
 * @property Station $Station
 */
class StationPlulist extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'domain';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
