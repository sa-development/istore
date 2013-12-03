<?php
App::uses('AppController', 'Controller');
/**
 * StoreSpoilages Controller
 *
 * @property StoreSpoilage $StoreSpoilage
 */
class StoreSpoilagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StoreSpoilage->recursive = 0;
		$this->set('storeSpoilages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		$this->set('storeSpoilage', $this->StoreSpoilage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StoreSpoilage->create();
			if ($this->StoreSpoilage->save($this->request->data)) {
				$this->Session->setFlash(__('The store spoilage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store spoilage could not be saved. Please, try again.'));
			}
		}
		$categories = $this->StoreSpoilage->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreSpoilage->save($this->request->data)) {
				$this->Session->setFlash(__('The store spoilage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store spoilage could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreSpoilage->read(null, $id);
		}
		$categories = $this->StoreSpoilage->Category->find('list');
		$this->set(compact('categories'));
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
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		if ($this->StoreSpoilage->delete()) {
			$this->Session->setFlash(__('Store spoilage deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store spoilage was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StoreSpoilage->recursive = 0;
		$this->set('storeSpoilages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		$this->set('storeSpoilage', $this->StoreSpoilage->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StoreSpoilage->create();
			if ($this->StoreSpoilage->save($this->request->data)) {
				$this->Session->setFlash(__('The store spoilage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store spoilage could not be saved. Please, try again.'));
			}
		}
		$categories = $this->StoreSpoilage->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreSpoilage->save($this->request->data)) {
				$this->Session->setFlash(__('The store spoilage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store spoilage could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreSpoilage->read(null, $id);
		}
		$categories = $this->StoreSpoilage->Category->find('list');
		$this->set(compact('categories'));
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
		$this->StoreSpoilage->id = $id;
		if (!$this->StoreSpoilage->exists()) {
			throw new NotFoundException(__('Invalid store spoilage'));
		}
		if ($this->StoreSpoilage->delete()) {
			$this->Session->setFlash(__('Store spoilage deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store spoilage was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
