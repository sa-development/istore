<?php
App::uses('AppController', 'Controller');
/**
 * Kitparts Controller
 *
 * @property Kitpart $Kitpart
 */
class KitpartsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kitpart->recursive = 0;
		$this->set('kitparts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Kitpart->id = $id;
		if (!$this->Kitpart->exists()) {
			throw new NotFoundException(__('Invalid kitpart'));
		}
		$this->set('kitpart', $this->Kitpart->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kitpart->create();
			if ($this->Kitpart->save($this->request->data)) {
				$this->Session->setFlash(__('The kitpart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitpart could not be saved. Please, try again.'));
			}
		}
		$products = $this->Kitpart->Product->find('list');
		$parts = $this->Kitpart->Part->find('list');
		$this->set(compact('products', 'parts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Kitpart->id = $id;
		if (!$this->Kitpart->exists()) {
			throw new NotFoundException(__('Invalid kitpart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Kitpart->save($this->request->data)) {
				$this->Session->setFlash(__('The kitpart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kitpart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Kitpart->read(null, $id);
		}
		$products = $this->Kitpart->Product->find('list');
		$parts = $this->Kitpart->Part->find('list');
		$this->set(compact('products', 'parts'));
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
		$this->Kitpart->id = $id;
		if (!$this->Kitpart->exists()) {
			throw new NotFoundException(__('Invalid kitpart'));
		}
		if ($this->Kitpart->delete()) {
			$this->Session->setFlash(__('Kitpart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kitpart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
