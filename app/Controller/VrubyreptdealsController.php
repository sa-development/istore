<?php
App::uses('AppController', 'Controller');
/**
 * Vrubyreptdeals Controller
 *
 * @property Vrubyreptdeal $Vrubyreptdeal
 */
class VrubyreptdealsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vrubyreptdeal->recursive = 0;
		$this->set('vrubyreptdeals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vrubyreptdeal->id = $id;
		if (!$this->Vrubyreptdeal->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptdeal'));
		}
		$this->set('vrubyreptdeal', $this->Vrubyreptdeal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vrubyreptdeal->create();
			if ($this->Vrubyreptdeal->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptdeal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptdeal could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Vrubyreptdeal->Station->find('list');
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
		$this->Vrubyreptdeal->id = $id;
		if (!$this->Vrubyreptdeal->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptdeal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vrubyreptdeal->save($this->request->data)) {
				$this->Session->setFlash(__('The vrubyreptdeal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vrubyreptdeal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vrubyreptdeal->read(null, $id);
		}
		$stations = $this->Vrubyreptdeal->Station->find('list');
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
		$this->Vrubyreptdeal->id = $id;
		if (!$this->Vrubyreptdeal->exists()) {
			throw new NotFoundException(__('Invalid vrubyreptdeal'));
		}
		if ($this->Vrubyreptdeal->delete()) {
			$this->Session->setFlash(__('Vrubyreptdeal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vrubyreptdeal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
