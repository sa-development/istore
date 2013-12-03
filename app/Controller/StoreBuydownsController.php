<?php
App::uses('AppController', 'Controller');
/**
 * StoreBuydowns Controller
 *
 * @property StoreBuydown $StoreBuydown
 */
class StoreBuydownsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StoreBuydown->recursive = 0;
		$this->set('storeBuydowns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		$this->set('storeBuydown', $this->StoreBuydown->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
			if ($this->request->is('post')) { 
			$items = array();
				/* function preparedDataForSaveAll is declare in AppController & use to save multi-pal data received. */
		        $items = $this->preparedDataForSaveAll('StoreBuydown');
				$this->request->data['StoreBuydown'] = $items['StoreBuydown'];
			    $this->StoreBuydown->create();
				   // if(isset($fItem['item_name']) && $fItem['item_name'] && isset($fItem['qty']) && $fItem['qty']) {
					
					if ($this->StoreBuydown->saveAll($this->request->data['StoreBuydown'])) {
					//print_r($this->request->data);exit;
					$this->Session->setFlash(__('The store buydown has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {
					$this->Session->setFlash(__('The store buydown could not be saved. Please, try again.'));
					}
					
					//}
				 
			 			
		}
		$vendors = $this->StoreBuydown->Vendor->find('list');
		$categories = $this->StoreBuydown->Category->find('list');
		$this->loadModel('Vrubyreptplu');
		$vrubyreptplus = $this->Vrubyreptplu->find('list');
		$this->set(compact('vendors', 'categories','vrubyreptplus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreBuydown->save($this->request->data)) {
				$this->Session->setFlash(__('The store buydown has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store buydown could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreBuydown->read(null, $id);
		}
		$vendors = $this->StoreBuydown->Vendor->find('list');
		$categories = $this->StoreBuydown->Category->find('list');
		$this->loadModel('Vrubyreptplu');
		$vrubyreptplus = $this->Vrubyreptplu->find('list');
		$this->set(compact('vendors', 'categories','vrubyreptplus'));
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
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		if ($this->StoreBuydown->delete()) {
			$this->Session->setFlash(__('Store buydown deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store buydown was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StoreBuydown->recursive = 0;
		$this->set('storeBuydowns', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		$this->set('storeBuydown', $this->StoreBuydown->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StoreBuydown->create();
			if ($this->StoreBuydown->save($this->request->data)) {
				$this->Session->setFlash(__('The store buydown has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store buydown could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->StoreBuydown->Vendor->find('list');
		$categories = $this->StoreBuydown->Category->find('list');
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
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StoreBuydown->save($this->request->data)) {
				$this->Session->setFlash(__('The store buydown has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store buydown could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StoreBuydown->read(null, $id);
		}
		$vendors = $this->StoreBuydown->Vendor->find('list');
		$categories = $this->StoreBuydown->Category->find('list');
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
		$this->StoreBuydown->id = $id;
		if (!$this->StoreBuydown->exists()) {
			throw new NotFoundException(__('Invalid store buydown'));
		}
		if ($this->StoreBuydown->delete()) {
			$this->Session->setFlash(__('Store buydown deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Store buydown was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
