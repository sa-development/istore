<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptnetworks Controller
 *
 * @property Vrubyreptnetwork $Vrubyreptnetwork
 */
class VrubyreptnetworksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptnetwork->recursive = 0;
		$this->set('vrubyreptnetworks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptnetwork->id = $id;
		if (!$this->Vrubyreptnetwork->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptnetwork'));
		}
		$this->set('vrubyreptnetwork', $this->Vrubyreptnetwork->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptnetwork->create();
			if ($this->Vrubyreptnetwork->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptnetwork has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptnetwork could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptnetwork->Station->find('list');
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
		$this->Vrubyreptnetwork->id = $id;
		if (!$this->Vrubyreptnetwork->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptnetwork'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptnetwork->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptnetwork has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptnetwork could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptnetwork->read(null, $id);
		}
		$stations = $this->Vrubyreptnetwork->Station->find('list');
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
		$this->Vrubyreptnetwork->id = $id;
		if (!$this->Vrubyreptnetwork->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptnetwork'));
		}
		if ($this->Vrubyreptnetwork->delete()) {
			$this->Session->setFlash(__('Vrubyreptnetwork deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptnetwork was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
