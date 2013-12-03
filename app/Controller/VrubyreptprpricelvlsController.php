<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptprpricelvls Controller
 *
 * @property Vrubyreptprpricelvl $Vrubyreptprpricelvl
 */
class VrubyreptprpricelvlsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptprpricelvl->recursive = 0;
		$this->set('vrubyreptprpricelvls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptprpricelvl->id = $id;
		if (!$this->Vrubyreptprpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptprpricelvl'));
		}
		$this->set('vrubyreptprpricelvl', $this->Vrubyreptprpricelvl->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptprpricelvl->create();
			if ($this->Vrubyreptprpricelvl->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptprpricelvl has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptprpricelvl could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptprpricelvl->Station->find('list');
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
		$this->Vrubyreptprpricelvl->id = $id;
		if (!$this->Vrubyreptprpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptprpricelvl'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptprpricelvl->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptprpricelvl has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptprpricelvl could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptprpricelvl->read(null, $id);
		}
		$stations = $this->Vrubyreptprpricelvl->Station->find('list');
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
		$this->Vrubyreptprpricelvl->id = $id;
		if (!$this->Vrubyreptprpricelvl->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptprpricelvl'));
		}
		if ($this->Vrubyreptprpricelvl->delete()) {
			$this->Session->setFlash(__('Vrubyreptprpricelvl deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptprpricelvl was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
