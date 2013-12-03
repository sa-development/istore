<?php
App::uses('AppController', 'Controller');
/**
 * Mfgparts Controller
 *
 * @property Mfgpart $Mfgpart
 */
class MfgpartsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mfgpart->recursive = 0;
		$this->set('mfgparts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mfgpart->id = $id;
		if (!$this->Mfgpart->exists()) {
			throw new NotFoundException(__('Invalid mfgpart'));
		}
		$this->set('mfgpart', $this->Mfgpart->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mfgpart->create();
			if ($this->Mfgpart->save($this->request->data)) {
				$this->Session->setFlash(__('The mfgpart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfgpart could not be saved. Please, try again.'));
			}
		}
		$parts = $this->Mfgpart->Part->find('list');
		$this->set(compact('parts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Mfgpart->id = $id;
		if (!$this->Mfgpart->exists()) {
			throw new NotFoundException(__('Invalid mfgpart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mfgpart->save($this->request->data)) {
				$this->Session->setFlash(__('The mfgpart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfgpart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mfgpart->read(null, $id);
		}
		$parts = $this->Mfgpart->Part->find('list');
		$this->set(compact('parts'));
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
		$this->Mfgpart->id = $id;
		if (!$this->Mfgpart->exists()) {
			throw new NotFoundException(__('Invalid mfgpart'));
		}
		if ($this->Mfgpart->delete()) {
			$this->Session->setFlash(__('Mfgpart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mfgpart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
