<?php

App::uses('AppController', 'Controller');

/**
 * Stations Controller
 *
 * @property Station $Station
 */
class PricebooksController extends AppController {

    var $uses = array('Station');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $stations = $this->Station->find('list');
        $this->set(compact('stations'));
    }

    public function fetchItems() {

    }

    public function plulist($stationId) {
        if ($stationId) {
            $posData = $this->fetchPLUS($stationId);
        }
    }
	
	public function checkcmd($stationId){
		$data = $this->Station->read(null, $id);
		
		header('Content-Type: text/xml');
		$output = "<root><name>new</name></root>";
		print ($output);
		exit;
	}
	
	public function department() {
		$this->loadModel('Department');
		
		$this->Department->recursive = 0;

        $this->set('departments', $this->paginate('Department'));
	}
	
	public function plu() {
		$this->loadModel('Plus');
		
		$this->Plus->recursive = 0;

        $this->set('pluses', $this->paginate('Plus'));
	}
	
	public function categories() {
		$this->loadModel('Category');
		
		$this->Category->recursive = 0;

        $this->set('categories', $this->paginate('Category'));
	}
	
	public function procodes() {
		$this->loadModel('Prodcode');
		
		$this->Prodcode->recursive = 0;

        $this->set('prodcodes', $this->paginate('Prodcode'));
	}


}