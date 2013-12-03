<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyrepttanks Controller
 *
 * @property Vrubyrepttank $Vrubyrepttank
 */
class VrubyrepttanksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyrepttank->recursive = 0;
		$this->set('vrubyrepttanks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyrepttank->id = $id;
		if (!$this->Vrubyrepttank->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttank'));
		}
		$this->set('vrubyrepttank', $this->Vrubyrepttank->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyrepttank->create();
			if ($this->Vrubyrepttank->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyrepttank has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyrepttank could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyrepttank->Station->find('list');
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
		$this->Vrubyrepttank->id = $id;
		if (!$this->Vrubyrepttank->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttank'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyrepttank->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyrepttank has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyrepttank could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyrepttank->read(null, $id);
		}
		$stations = $this->Vrubyrepttank->Station->find('list');
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
		$this->Vrubyrepttank->id = $id;
		if (!$this->Vrubyrepttank->exists()) {
			throw new NotFoundException(__('Invalid vrubyrepttank'));
		}
		if ($this->Vrubyrepttank->delete()) {
			$this->Session->setFlash(__('Vrubyrepttank deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyrepttank was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
