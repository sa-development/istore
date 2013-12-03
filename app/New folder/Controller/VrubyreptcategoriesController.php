<?php

App::uses('AppController', 'Controller');

/**
 * Vrubyreptcategories Controller
 *
 * @property Vrubyreptcategory $Vrubyreptcategory
 */
class VrubyreptcategoriesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Vrubyreptcategory->recursive = 0;
        $station = $this->params->query['station'];
        //$this->paginate = array('conditions' => array('Vrubyreptcategory.station_id' => $station), 'order' =>  array('Vrubyreptcategory.id' => 'desc'));
		
		$this->paginate = array(
							'conditions' => array('Vrubyreptcategory.station_id' => $station),
							'limit' 	 => 100,
							'order' 	 => array('Vrubyreptcategory.periodBeginDate' => 'desc'),
						);
						
        $this->loadModel('Prodcode');
        $prodcodeList = $this->Prodcode->find('list', array('station_id' => $station));
        $this->set(compact('prodcodeList', 'station'));
        
        $this->set('vrubyreptcategories', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        $this->set('vrubyreptcategory', $this->Vrubyreptcategory->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Vrubyreptcategory->create();
            if ($this->Vrubyreptcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptcategory has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptcategory could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Vrubyreptcategory->Station->find('list');
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
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vrubyreptcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptcategory has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptcategory could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vrubyreptcategory->read(null, $id);
        }
        $stations = $this->Vrubyreptcategory->Station->find('list');
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
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        if ($this->Vrubyreptcategory->delete()) {
            $this->Session->setFlash(__('Vrubyreptcategory deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vrubyreptcategory was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Vrubyreptcategory->recursive = 0;
        $this->set('vrubyreptcategories', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        $this->set('vrubyreptcategory', $this->Vrubyreptcategory->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Vrubyreptcategory->create();
            if ($this->Vrubyreptcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptcategory has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptcategory could not be saved. Please, try again.'));
            }
        }
        $stations = $this->Vrubyreptcategory->Station->find('list');
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
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vrubyreptcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The vrubyreptcategory has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vrubyreptcategory could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vrubyreptcategory->read(null, $id);
        }
        $stations = $this->Vrubyreptcategory->Station->find('list');
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
        $this->Vrubyreptcategory->id = $id;
        if (!$this->Vrubyreptcategory->exists()) {
            throw new NotFoundException(__('Invalid vrubyreptcategory'));
        }
        if ($this->Vrubyreptcategory->delete()) {
            $this->Session->setFlash(__('Vrubyreptcategory deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vrubyreptcategory was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
