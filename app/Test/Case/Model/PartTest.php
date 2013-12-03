<?php
App::uses('Part', 'Model');

/**
 * Part Test Case
 *
 */
class PartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.part',
		'app.kitpart',
		'app.product',
		'app.customer',
		'app.customer_contact',
		'app.kit',
		'app.product_operation',
		'app.operation',
		'app.department',
		'app.user',
		'app.user_group',
		'app.work_order',
		'app.mfgpart'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Part = ClassRegistry::init('Part');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Part);

		parent::tearDown();
	}

}
