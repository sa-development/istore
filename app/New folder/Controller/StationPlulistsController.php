<?php
App::uses('AppController', 'Controller');
/**
 * StationPlulists Controller
 *
 * @property StationPlulist $StationPlulist
 */
class StationPlulistsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StationPlulist->recursive = 0;
		$this->set('stationPlulists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		$this->set('stationPlulist', $this->StationPlulist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StationPlulist->create();
			if ($this->StationPlulist->save($this->request->data)) {
				$this->Session->setFlash(__('The station plulist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station plulist could not be saved. Please, try again.'));
			}
		}
		$stations = $this->StationPlulist->Station->find('list');
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
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StationPlulist->save($this->request->data)) {
				$this->Session->setFlash(__('The station plulist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station plulist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StationPlulist->read(null, $id);
		}
		$stations = $this->StationPlulist->Station->find('list');
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
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		if ($this->StationPlulist->delete()) {
			$this->Session->setFlash(__('Station plulist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Station plulist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StationPlulist->recursive = 0;
		$this->set('stationPlulists', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		$this->set('stationPlulist', $this->StationPlulist->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StationPlulist->create();
			if ($this->StationPlulist->save($this->request->data)) {
				$this->Session->setFlash(__('The station plulist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station plulist could not be saved. Please, try again.'));
			}
		}
		$stations = $this->StationPlulist->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StationPlulist->save($this->request->data)) {
				$this->Session->setFlash(__('The station plulist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station plulist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StationPlulist->read(null, $id);
		}
		$stations = $this->StationPlulist->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->StationPlulist->id = $id;
		if (!$this->StationPlulist->exists()) {
			throw new NotFoundException(__('Invalid station plulist'));
		}
		if ($this->StationPlulist->delete()) {
			$this->Session->setFlash(__('Station plulist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Station plulist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
