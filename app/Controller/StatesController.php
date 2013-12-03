<?php
App::uses('AppController', 'Controller');
/**
 * States Controller
 *
 * @property State $State
 */
class StatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->State->recursive = 0;
		$this->set('states', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->State->id = $id;
		if (!$this->State->exists()) {
			throw new NotFoundException(__('Invalid state'));
		}
		$this->set('state', $this->State->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->State->create();
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.'));
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->State->id = $id;
		if (!$this->State->exists()) {
			throw new NotFoundException(__('Invalid state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->State->read(null, $id);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
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
		$this->State->id = $id;
		if (!$this->State->exists()) {
			throw new NotFoundException(__('Invalid state'));
		}
		if ($this->State->delete()) {
			$this->Session->setFlash(__('State deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('State was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
}
