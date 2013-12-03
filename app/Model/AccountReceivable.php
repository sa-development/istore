<?php
App::uses('AppModel', 'Model');
/**
 * AccountReceivable Model
 *
 * @property User $User
 * @property Corporation $Corporation
 * @property Station $Station
 */
class AccountReceivable extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'payee';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Corporation' => array(
			'className' => 'Corporation',
			'foreignKey' => 'corporation_id',
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
