<?php
App::uses('Operation', 'Model');

/**
 * Operation Test Case
 *
 */
class OperationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operation',
		'app.department',
		'app.user',
		'app.product',
		'app.product_operation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Operation = ClassRegistry::init('Operation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Operation);

		parent::tearDown();
	}

}
