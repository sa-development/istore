<?php
App::uses('AppController', 'Controller');
/**
 * StockItems Controller
 *
 * @property StockItem $StockItem
 */
class StockItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StockItem->recursive = 0;
		$this->set('stockItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StockItem->id = $id;
		if (!$this->StockItem->exists()) {
			throw new NotFoundException(__('Invalid stock item'));
		}
		$this->set('stockItem', $this->StockItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StockItem->create();
			if ($this->StockItem->save($this->request->data)) {
				$this->Session->setFlash(__('The stock item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stock item could not be saved. Please, try again.'));
			}
		}
		$mfgParts = $this->StockItem->MfgPart->find('list');
		$this->set(compact('mfgParts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StockItem->id = $id;
		if (!$this->StockItem->exists()) {
			throw new NotFoundException(__('Invalid stock item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StockItem->save($this->request->data)) {
				$this->Session->setFlash(__('The stock item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stock item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StockItem->read(null, $id);
		}
		$mfgParts = $this->StockItem->MfgPart->find('list');
		$this->set(compact('mfgParts'));
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
		$this->StockItem->id = $id;
		if (!$this->StockItem->exists()) {
			throw new NotFoundException(__('Invalid stock item'));
		}
		if ($this->StockItem->delete()) {
			$this->Session->setFlash(__('Stock item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Stock item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
