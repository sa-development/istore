<?php
App::uses('AppController', 'Controller');
/**
 * StorePurches Controller
 *
 * @property StorePurch $StorePurch
 */
class StorePurchesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StorePurch->recursive = 0;
		$this->set('storePurches', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		$this->set('storePurch', $this->StorePurch->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		$spitems = array();
		    /* function preparedDataForSaveAll is declare in AppController & use to save multi-pal data received. */
		    $spitems = $this->preparedDataForSaveAll('StorePurch');
			
		    $this->request->data['StorePurch'] = $spitems['StorePurch'];
			$this->StorePurch->create();
           if ($this->StorePurch->saveAll($this->request->data['StorePurch'])) {	
				$this->Session->setFlash(__('The store purch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store purch could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StorePurch->Vendor->find('list');
		$categories = $this->StorePurch->Category->find('list');
		$this->set(compact('vendors', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StorePurch->save($this->request->data)) {
				$this->Session->setFlash(__('The store purch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store purch could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StorePurch->read(null, $id);
		}
		$vendors = $this->StorePurch->Vendor->find('list');
		$categories = $this->StorePurch->Category->find('list');
		$this->set(compact('vendors', 'categories'));
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
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		if ($this->StorePurch->delete()) {
			$this->Session->setFlash(__('Store purch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store purch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StorePurch->recursive = 0;
		$this->set('storePurches', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		$this->set('storePurch', $this->StorePurch->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StorePurch->create();
			if ($this->StorePurch->save($this->request->data)) {
				$this->Session->setFlash(__('The store purch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store purch could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StorePurch->Vendor->find('list');
		$categories = $this->StorePurch->Category->find('list');
		$this->set(compact('vendors', 'categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StorePurch->save($this->request->data)) {
				$this->Session->setFlash(__('The store purch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store purch could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StorePurch->read(null, $id);
		}
		$vendors = $this->StorePurch->Vendor->find('list');
		$categories = $this->StorePurch->Category->find('list');
		$this->set(compact('vendors', 'categories'));
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
		$this->StorePurch->id = $id;
		if (!$this->StorePurch->exists()) {
			throw new NotFoundException(__('Invalid store purch'));
		}
		if ($this->StorePurch->delete()) {
			$this->Session->setFlash(__('Store purch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store purch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
