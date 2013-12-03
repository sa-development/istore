<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyrepttaxes Controller
 *
 * @property Vrubyrepttax $Vrubyrepttax
 */
class VrubyrepttaxesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyrepttax->recursive = 0;
		$this->set('vrubyrepttaxes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyrepttax->id = $id;
		if (!$this->Vrubyrepttax->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttax'));
		}
		$this->set('vrubyrepttax', $this->Vrubyrepttax->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyrepttax->create();
			if ($this->Vrubyrepttax->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyrepttax has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyrepttax could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyrepttax->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vrubyrepttax->id = $id;
		if (!$this->Vrubyrepttax->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyrepttax->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyrepttax has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyrepttax could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyrepttax->read(null, $id);
		}
		$stations = $this->Vrubyrepttax->Station->find('list');
		$this->set(compact('stations'));
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
		$this->Vrubyrepttax->id = $id;
		if (!$this->Vrubyrepttax->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttax'));
		}
		if ($this->Vrubyrepttax->delete()) {
			$this->Session->setFlash(__('Vrubyrepttax deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyrepttax was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
