<?php
App::uses('AppController', 'Controller');
/**
 * ProductOperations Controller
 *
 * @property ProductOperation $ProductOperation
 */
class ProductOperationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductOperation->recursive = 0;
		$this->set('productOperations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductOperation->id = $id;
		if (!$this->ProductOperation->exists()) {
			throw new NotFoundException(__('Invalid product operation'));
		}
		$this->set('productOperation', $this->ProductOperation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductOperation->create();
			if ($this->ProductOperation->save($this->request->data)) {
				$this->Session->setFlash(__('The product operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product operation could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductOperation->Product->find('list');
		$operations = $this->ProductOperation->Operation->find('list');
		$this->set(compact('products', 'operations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductOperation->id = $id;
		if (!$this->ProductOperation->exists()) {
			throw new NotFoundException(__('Invalid product operation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductOperation->save($this->request->data)) {
				$this->Session->setFlash(__('The product operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product operation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductOperation->read(null, $id);
		}
		$products = $this->ProductOperation->Product->find('list');
		$operations = $this->ProductOperation->Operation->find('list');
		$this->set(compact('products', 'operations'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProductOperation->id = $id;
		if (!$this->ProductOperation->exists()) {
			throw new NotFoundException(__('Invalid product operation'));
		}
		if ($this->ProductOperation->delete()) {
			$this->Session->setFlash(__('Product operation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product operation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
