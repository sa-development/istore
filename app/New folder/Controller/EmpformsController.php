<?php
App::uses('AppController', 'Controller');
/**
 * Empforms Controller
 *
 * @property Empform $Empform
 */
class EmpformsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empform->recursive = 0;
		$this->set('empforms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Empform->id = $id;
		if (!$this->Empform->exists()) {
			throw new NotFoundException(__('Invalid empform'));
		}
		$this->set('empform', $this->Empform->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empform->create();
			if ($this->Empform->save($this->request->data)) {
				$this->Session->setFlash(__('The empform has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empform could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Empform->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Empform->id = $id;
		if (!$this->Empform->exists()) {
			throw new NotFoundException(__('Invalid empform'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empform->save($this->request->data)) {
				$this->Session->setFlash(__('The empform has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empform could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Empform->read(null, $id);
		}
		$employees = $this->Empform->Employee->find('list');
		$this->set(compact('employees'));
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
		$this->Empform->id = $id;
		if (!$this->Empform->exists()) {
			throw new NotFoundException(__('Invalid empform'));
		}
		if ($this->Empform->delete()) {
			$this->Session->setFlash(__('Empform deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empform was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
