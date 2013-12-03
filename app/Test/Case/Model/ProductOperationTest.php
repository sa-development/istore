<?php
App::uses('ProductOperation', 'Model');

/**
 * ProductOperation Test Case
 *
 */
class ProductOperationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_operation',
		'app.product',
		'app.operation',
		'app.department',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductOperation = ClassRegistry::init('ProductOperation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductOperation);

		parent::tearDown();
	}

}
