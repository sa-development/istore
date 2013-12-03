<?php
App::uses('AppModel', 'Model');
/**
 * Plus Model
 *
 * @property Station $Station
 */
class Plus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'plus';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'pcode';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	
	public $validate = array(
		'upc' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter UPC number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter description text',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'department' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter department number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter price',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'SellUnit' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter SellUnit',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
