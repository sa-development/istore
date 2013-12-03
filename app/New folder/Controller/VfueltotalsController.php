<?php
App::uses('AppController', 'Controller');
/**
 * Vfueltotals Controller
 *
 * @property Vfueltotal $Vfueltotal
 */
class VfueltotalsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$station = $this->params->query['station'];
		$this->Vfueltotal->recursive = 0;
		$this->paginate = array(
							'conditions' => array('Vfueltotal.station_id' => $station),
							'limit' 	 => 100,
							'order' 	 => array('Vfueltotal.periodBeginDate' => 'desc'),
						);
						
		$this->loadModel('Prodcode');
		
		$prodcodeList = $this->Prodcode->find('list', array('station_id' => $station));
		
		$this->set('vfueltotals', $this->paginate());
		$this->set(compact('prodcodeList', 'station'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		$this->set('vfueltotal', $this->Vfueltotal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vfueltotal->create();
			if ($this->Vfueltotal->save($this->request->data)) {
				$this->Session->setFlash(__('The vfueltotal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vfueltotal could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vfueltotal->save($this->request->data)) {
				$this->Session->setFlash(__('The vfueltotal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vfueltotal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vfueltotal->read(null, $id);
		}
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
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		if ($this->Vfueltotal->delete()) {
			$this->Session->setFlash(__('Vfueltotal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vfueltotal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Vfueltotal->recursive = 0;
		$this->set('vfueltotals', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		$this->set('vfueltotal', $this->Vfueltotal->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Vfueltotal->create();
			if ($this->Vfueltotal->save($this->request->data)) {
				$this->Session->setFlash(__('The vfueltotal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vfueltotal could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vfueltotal->save($this->request->data)) {
				$this->Session->setFlash(__('The vfueltotal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vfueltotal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vfueltotal->read(null, $id);
		}
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
		$this->Vfueltotal->id = $id;
		if (!$this->Vfueltotal->exists()) {
			throw new NotFoundException(__('Invalid vfueltotal'));
		}
		if ($this->Vfueltotal->delete()) {
			$this->Session->setFlash(__('Vfueltotal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vfueltotal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
