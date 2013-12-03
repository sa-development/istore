<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyrepttierproducts Controller
 *
 * @property Vrubyrepttierproduct $Vrubyrepttierproduct
 */
class VrubyrepttierproductsController extends AppController {

	public function index() {
		$this->Vrubyrepttierproduct->recursive = 0;
		$this->set('vrubyrepttierproducts', $this->paginate());
	}
	
}
