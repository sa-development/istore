<?php
App::uses('Mfgpart', 'Model');

/**
 * Mfgpart Test Case
 *
 */
class MfgpartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfgpart',
		'app.part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfgpart = ClassRegistry::init('Mfgpart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfgpart);

		parent::tearDown();
	}

}
