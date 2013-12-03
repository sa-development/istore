<?php
/**
 * WorkOrderFixture
 *
 */
class WorkOrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'work_order_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'total_qty' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'qty_complete' => array('type' => 'integer', 'null' => false, 'default' => null),
		'release_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'due_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'high_priority' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'prototype' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'rework' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'work_order_no' => array('column' => 'work_order_no', 'unique' => 1),
			'Product_Id' => array('column' => 'product_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'work_order_no' => 'Lorem ip',
			'product_id' => 1,
			'total_qty' => 1,
			'qty_complete' => 1,
			'release_date' => '2012-08-05',
			'due_date' => '2012-08-05',
			'high_priority' => 1,
			'prototype' => 1,
			'rework' => 1
		),
	);

}
