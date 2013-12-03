<?php
App::uses('AppController', 'Controller');
/**
 * CustomerContacts Controller
 *
 * @property CustomerContact $CustomerContact
 */
class CustomerContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerContact->recursive = 0;
		$this->set('customerContacts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerContact->id = $id;
		if (!$this->CustomerContact->exists()) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		$this->set('customerContact', $this->CustomerContact->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerContact->create();
			if ($this->CustomerContact->save($this->request->data)) {
				$this->Session->setFlash(__('The customer contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer contact could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomerContact->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerContact->id = $id;
		if (!$this->CustomerContact->exists()) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerContact->save($this->request->data)) {
				$this->Session->setFlash(__('The customer contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer contact could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerContact->read(null, $id);
		}
		$customers = $this->CustomerContact->Customer->find('list');
		$this->set(compact('customers'));
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
		$this->CustomerContact->id = $id;
		if (!$this->CustomerContact->exists()) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		if ($this->CustomerContact->delete()) {
			$this->Session->setFlash(__('Customer contact deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer contact was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
