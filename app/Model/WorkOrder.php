<?php
App::uses('AppModel', 'Model');
/**
 * WorkOrder Model
 *
 * @property Product $Product
 */
class WorkOrder extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'work_order_no';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
