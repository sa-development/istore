<?php
App::uses('Kitpart', 'Model');

/**
 * Kitpart Test Case
 *
 */
class KitpartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kitpart = ClassRegistry::init('Kitpart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kitpart);

		parent::tearDown();
	}

}
