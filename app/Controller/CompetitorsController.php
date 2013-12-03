<?php
App::uses('AppController', 'Controller');
/**
 * Competitors Controller
 *
 * @property Competitor $Competitor
 */
class CompetitorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Competitor->recursive = 0;
		$this->set('competitors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Competitor->id = $id;
		if (!$this->Competitor->exists()) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		$this->set('competitor', $this->Competitor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	//$this->layout='ajax';
		if ($this->request->is('post')) {
			$this->Competitor->create();
			if ($this->Competitor->save($this->request->data)) {
				$this->Session->setFlash(__('The competitor has been saved'));
				$this->redirect(array('action' => 'index'));
				//$this->render('/Elements/thickbox');
			} else {
				$this->Session->setFlash(__('The competitor could not be saved. Please, try again.'));
			}
		}
		$businessTypes = $this->Competitor->BusinessType->find('list');
		$countries = $this->Competitor->Country->find('list');
		$states = $this->Competitor->State->find('list', array('fields' => array('id', 'default_name')));
		$this->set(compact('businessTypes', 'countries', 'states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	//$this->layout='ajax';
		$this->Competitor->id = $id;
		if (!$this->Competitor->exists()) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Competitor->save($this->request->data)) {
				$this->Session->setFlash(__('The competitor has been saved'));
				$this->redirect(array('action' => 'index'));
				//$this->render('/Elements/thickbox');
			} else {
				$this->Session->setFlash(__('The competitor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Competitor->read(null, $id);
		}
		$businessTypes = $this->Competitor->BusinessType->find('list');
		$countries = $this->Competitor->Country->find('list');
		$states = $this->Competitor->State->find('list', array('fields' => array('id', 'default_name')));
		$this->set(compact('businessTypes', 'countries', 'states'));
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
		$this->Competitor->id = $id;
		if (!$this->Competitor->exists()) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		if ($this->Competitor->delete()) {
			$this->Session->setFlash(__('Competitor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Competitor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
