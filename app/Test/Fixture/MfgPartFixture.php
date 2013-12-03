<?php
/**
 * MfgpartFixture
 *
 */
class MfgpartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'mfgr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pref' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'mfg_part_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'mfg_part_no' => array('column' => 'mfg_part_no', 'unique' => 1),
			'part_id' => array('column' => 'part_id', 'unique' => 0)
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
			'mfgr' => 'Lorem ipsum dolor sit amet',
			'pref' => 1,
			'mfg_part_no' => 'Lorem ipsum dolor sit amet',
			'part_id' => 1
		),
	);

}
