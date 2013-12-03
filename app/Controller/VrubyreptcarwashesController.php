<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptcarwashes Controller
 *
 * @property Vrubyreptcarwash $Vrubyreptcarwash
 */
class VrubyreptcarwashesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptcarwash->recursive = 0;
		$this->set('vrubyreptcarwashes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptcarwash->id = $id;
		if (!$this->Vrubyreptcarwash->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptcarwash'));
		}
		$this->set('vrubyreptcarwash', $this->Vrubyreptcarwash->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptcarwash->create();
			if ($this->Vrubyreptcarwash->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptcarwash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptcarwash could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptcarwash->Station->find('list');
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
		$this->Vrubyreptcarwash->id = $id;
		if (!$this->Vrubyreptcarwash->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptcarwash'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptcarwash->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptcarwash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptcarwash could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptcarwash->read(null, $id);
		}
		$stations = $this->Vrubyreptcarwash->Station->find('list');
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
		$this->Vrubyreptcarwash->id = $id;
		if (!$this->Vrubyreptcarwash->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptcarwash'));
		}
		if ($this->Vrubyreptcarwash->delete()) {
			$this->Session->setFlash(__('Vrubyreptcarwash deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptcarwash was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
