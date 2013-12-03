<?php
App::uses('StockItem', 'Model');

/**
 * StockItem Test Case
 *
 */
class StockItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stock_item',
		'app.mfgpart',
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
		'app.work_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StockItem = ClassRegistry::init('StockItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StockItem);

		parent::tearDown();
	}

}
