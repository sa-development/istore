<?php
App::uses('AppController', 'Controller');
/**
 * Prodcodes Controller
 *
 * @property Prodcode $Prodcode
 */
class ProdcodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prodcode->recursive = 0;
		$this->set('prodcodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		$this->set('prodcode', $this->Prodcode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prodcode->create();
			if ($this->Prodcode->save($this->request->data)) {
				$this->Session->setFlash(__('The prodcode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prodcode could not be saved. Please, try again.'));
			}
		}
		
		$this->loadModel('Station');
		$stations = $this->Station->find('list');
		$this->set(compact('stations','stationId'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prodcode->save($this->request->data)) {
				$this->Session->setFlash(__('The prodcode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prodcode could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Prodcode->read(null, $id);
		}
		
		$this->loadModel('Station');
		$stations = $this->Station->find('list');
		$this->set(compact('stations','stationId'));
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
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		if ($this->Prodcode->delete()) {
			$this->Session->setFlash(__('Prodcode deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prodcode was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Prodcode->recursive = 0;
		$this->set('prodcodes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		$this->set('prodcode', $this->Prodcode->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Prodcode->create();
			if ($this->Prodcode->save($this->request->data)) {
				$this->Session->setFlash(__('The prodcode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prodcode could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prodcode->save($this->request->data)) {
				$this->Session->setFlash(__('The prodcode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prodcode could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Prodcode->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Prodcode->id = $id;
		if (!$this->Prodcode->exists()) {
			throw new NotFoundException(__('Invalid prodcode'));
		}
		if ($this->Prodcode->delete()) {
			$this->Session->setFlash(__('Prodcode deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prodcode was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
