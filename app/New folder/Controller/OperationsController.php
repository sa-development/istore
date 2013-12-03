<?php
App::uses('AppController', 'Controller');
/**
 * Operations Controller
 *
 * @property Operation $Operation
 */
class OperationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Operation->recursive = 0;
		$this->set('operations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$this->set('operation', $this->Operation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Operation->create();
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		}
		$departments = $this->Operation->Department->find('list');
		$products = $this->Operation->Product->find('list');
		$this->set(compact('departments', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Operation->read(null, $id);
		}
		$departments = $this->Operation->Department->find('list');
		$products = $this->Operation->Product->find('list');
		$this->set(compact('departments', 'products'));
	}

/**
 * delete method
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
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->Operation->delete()) {
			$this->Session->setFlash(__('Operation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
