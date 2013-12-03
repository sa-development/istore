<?php
App::uses('AppModel', 'Model');
/**
 * StockItem Model
 *
 * @property MfgPart $MfgPart
 */
class StockItem extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'warehouse' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'on_hand' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mfg_part_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'MfgPart' => array(
			'className' => 'MfgPart',
			'foreignKey' => 'mfg_part_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
