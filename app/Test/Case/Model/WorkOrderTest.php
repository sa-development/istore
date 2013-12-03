<?php
App::uses('WorkOrder', 'Model');

/**
 * WorkOrder Test Case
 *
 */
class WorkOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.work_order',
		'app.product',
		'app.customer',
		'app.customer_contact',
		'app.kitpart',
		'app.part',
		'app.mfgpart',
		'app.product_operation',
		'app.operation',
		'app.department',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WorkOrder = ClassRegistry::init('WorkOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WorkOrder);

		parent::tearDown();
	}

}
