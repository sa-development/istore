<?php
App::uses('AppModel', 'Model');
/**
 * EntryItem Model
 *
 * @property Entry $Entry
 * @property Ledger $Ledger
 */
class EntryItem extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entry' => array(
			'className' => 'Entry',
			'foreignKey' => 'entry_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ledger' => array(
			'className' => 'Ledger',
			'foreignKey' => 'ledger_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
