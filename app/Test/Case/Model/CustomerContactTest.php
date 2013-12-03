<?php
App::uses('CustomerContact', 'Model');

/**
 * CustomerContact Test Case
 *
 */
class CustomerContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_contact',
		'app.customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerContact = ClassRegistry::init('CustomerContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerContact);

		parent::tearDown();
	}

}
