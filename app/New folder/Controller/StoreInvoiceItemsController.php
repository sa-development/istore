<?php
App::uses('AppController', 'Controller');
/**
 * StoreInvoiceItems Controller
 *
 * @property StoreInvoiceItem $StoreInvoiceItem
 */
class StoreInvoiceItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StoreInvoiceItem->recursive = 0;
		$this->set('storeInvoiceItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		$this->set('storeInvoiceItem', $this->StoreInvoiceItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StoreInvoiceItem->create();
			if ($this->StoreInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice item could not be saved. Please, try again.'));
			}
		}
		$storeInvoices = $this->StoreInvoiceItem->StoreInvoice->find('list');
		$categories = $this->StoreInvoiceItem->Category->find('list');
		$this->set(compact('storeInvoices', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreInvoiceItem->read(null, $id);
		}
		$storeInvoices = $this->StoreInvoiceItem->StoreInvoice->find('list');
		$categories = $this->StoreInvoiceItem->Category->find('list');
		$this->set(compact('storeInvoices', 'categories'));
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
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		if ($this->StoreInvoiceItem->delete()) {
			$this->Session->setFlash(__('Store invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StoreInvoiceItem->recursive = 0;
		$this->set('storeInvoiceItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		$this->set('storeInvoiceItem', $this->StoreInvoiceItem->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StoreInvoiceItem->create();
			if ($this->StoreInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice item could not be saved. Please, try again.'));
			}
		}
		$storeInvoices = $this->StoreInvoiceItem->StoreInvoice->find('list');
		$categories = $this->StoreInvoiceItem->Category->find('list');
		$this->set(compact('storeInvoices', 'categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreInvoiceItem->save($this->request->data)) {
				$this->Session->setFlash(__('The store invoice item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store invoice item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreInvoiceItem->read(null, $id);
		}
		$storeInvoices = $this->StoreInvoiceItem->StoreInvoice->find('list');
		$categories = $this->StoreInvoiceItem->Category->find('list');
		$this->set(compact('storeInvoices', 'categories'));
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
		$this->StoreInvoiceItem->id = $id;
		if (!$this->StoreInvoiceItem->exists()) {
			throw new NotFoundException(__('Invalid store invoice item'));
		}
		if ($this->StoreInvoiceItem->delete()) {
			$this->Session->setFlash(__('Store invoice item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store invoice item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
