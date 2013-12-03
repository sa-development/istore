<?php
App::uses('FuelType', 'Model');

/**
 * FuelType Test Case
 *
 */
class FuelTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fuel_type',
		'app.fuel_inventory',
		'app.station',
		'app.store',
		'app.corporation',
		'app.country',
		'app.competitor',
		'app.business_type',
		'app.state',
		'app.employee',
		'app.language',
		'app.employee_traning',
		'app.empform',
		'app.employees_empform',
		'app.use',
		'app.corporation_user',
		'app.user',
		'app.group',
		'app.department',
		'app.fuel_invoice_item',
		'app.fuel_invoice',
		'app.supplier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FuelType = ClassRegistry::init('FuelType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FuelType);

		parent::tearDown();
	}

}
