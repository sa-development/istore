<?php
App::uses('Kit', 'Model');

/**
 * Kit Test Case
 *
 */
class KitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kit',
		'app.product',
		'app.customer',
		'app.customer_contact',
		'app.kit_part',
		'app.part',
		'app.mfg',
		'app.mfg_part',
		'app.product_operation',
		'app.operation',
		'app.department',
		'app.user',
		'app.user_group',
		'app.work_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kit = ClassRegistry::init('Kit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kit);

		parent::tearDown();
	}

}
