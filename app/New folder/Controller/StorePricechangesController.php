<?php
App::uses('AppController', 'Controller');
/**
 * StorePricechanges Controller
 *
 * @property StorePricechange $StorePricechange
 */
class StorePricechangesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StorePricechange->recursive = 0;
		$this->set('storePricechanges', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		$this->set('storePricechange', $this->StorePricechange->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StorePricechange->create();
			if ($this->StorePricechange->save($this->request->data)) {
				$this->Session->setFlash(__('The store pricechange has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pricechange could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StorePricechange->Vendor->find('list');
		$categories = $this->StorePricechange->Category->find('list');
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
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StorePricechange->save($this->request->data)) {
				$this->Session->setFlash(__('The store pricechange has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pricechange could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StorePricechange->read(null, $id);
		}
		$vendors = $this->StorePricechange->Vendor->find('list');
		$categories = $this->StorePricechange->Category->find('list');
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
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		if ($this->StorePricechange->delete()) {
			$this->Session->setFlash(__('Store pricechange deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store pricechange was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StorePricechange->recursive = 0;
		$this->set('storePricechanges', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		$this->set('storePricechange', $this->StorePricechange->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StorePricechange->create();
			if ($this->StorePricechange->save($this->request->data)) {
				$this->Session->setFlash(__('The store pricechange has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pricechange could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StorePricechange->Vendor->find('list');
		$categories = $this->StorePricechange->Category->find('list');
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
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StorePricechange->save($this->request->data)) {
				$this->Session->setFlash(__('The store pricechange has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pricechange could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StorePricechange->read(null, $id);
		}
		$vendors = $this->StorePricechange->Vendor->find('list');
		$categories = $this->StorePricechange->Category->find('list');
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
		$this->StorePricechange->id = $id;
		if (!$this->StorePricechange->exists()) {
			throw new NotFoundException(__('Invalid store pricechange'));
		}
		if ($this->StorePricechange->delete()) {
			$this->Session->setFlash(__('Store pricechange deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store pricechange was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
