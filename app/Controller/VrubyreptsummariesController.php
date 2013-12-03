<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptsummaries Controller
 *
 * @property Vrubyreptsummary $Vrubyreptsummary
 */
class VrubyreptsummariesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptsummary->recursive = 0;
		$this->set('vrubyreptsummaries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptsummary->id = $id;
		if (!$this->Vrubyreptsummary->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptsummary'));
		}
		$this->set('vrubyreptsummary', $this->Vrubyreptsummary->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptsummary->create();
			if ($this->Vrubyreptsummary->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptsummary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptsummary could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptsummary->Station->find('list');
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
		$this->Vrubyreptsummary->id = $id;
		if (!$this->Vrubyreptsummary->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptsummary'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptsummary->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptsummary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptsummary could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptsummary->read(null, $id);
		}
		$stations = $this->Vrubyreptsummary->Station->find('list');
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
		$this->Vrubyreptsummary->id = $id;
		if (!$this->Vrubyreptsummary->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptsummary'));
		}
		if ($this->Vrubyreptsummary->delete()) {
			$this->Session->setFlash(__('Vrubyreptsummary deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptsummary was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
