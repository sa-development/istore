<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptslpricelvls Controller
 *
 * @property Vrubyreptslpricelvl $Vrubyreptslpricelvl
 */
class VrubyreptslpricelvlsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptslpricelvl->recursive = 0;
		$this->set('vrubyreptslpricelvls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptslpricelvl->id = $id;
		if (!$this->Vrubyreptslpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptslpricelvl'));
		}
		$this->set('vrubyreptslpricelvl', $this->Vrubyreptslpricelvl->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptslpricelvl->create();
			if ($this->Vrubyreptslpricelvl->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptslpricelvl has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptslpricelvl could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptslpricelvl->Station->find('list');
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
		$this->Vrubyreptslpricelvl->id = $id;
		if (!$this->Vrubyreptslpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptslpricelvl'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptslpricelvl->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptslpricelvl has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptslpricelvl could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptslpricelvl->read(null, $id);
		}
		$stations = $this->Vrubyreptslpricelvl->Station->find('list');
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
		$this->Vrubyreptslpricelvl->id = $id;
		if (!$this->Vrubyreptslpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptslpricelvl'));
		}
		if ($this->Vrubyreptslpricelvl->delete()) {
			$this->Session->setFlash(__('Vrubyreptslpricelvl deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptslpricelvl was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
