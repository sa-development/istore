<?php

App::uses('AppController', 'Controller');

/**
 * Uploadinvoices Controller
 *
 * @property Uploadinvoice $Uploadinvoice
 */
class UploadinvoicesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Uploadinvoice->recursive = 0;
        $this->set('uploadinvoices', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        $this->set('uploadinvoice', $this->Uploadinvoice->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            if ($this->data['Uploadinvoice']['file']['error'] == '0') {
                if (file_exists('files/uploads/' . $this->data['Uploadinvoice']['file']['name'])) {
                    $this->Session->setFlash('A file called ' . $this->data['Uploadinvoice']['file']['name'] . ' already exists');
                } else {
                    move_uploaded_file($this->data['Uploadinvoice']['file']['tmp_name'], 'files/uploads/' . $this->data['Uploadinvoice']['file']['name']);
                }
				$this->request->data['Uploadinvoice']['file'] = $this->data['Uploadinvoice']['file']['name'];
				$this->request->data['Uploadinvoice']['user_id'] = $this->Session->read('Auth.User.id');
				//print_r($this->request->data);exit;	
                $this->Uploadinvoice->save($this->request->data);
                $this->redirect(array('action' => 'index'));
            } else {
				$this->Session->setFlash(__('The uploadinvoice could not be saved. Please, try again.'));
			}
        } 
        $users = $this->Uploadinvoice->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Uploadinvoice->save($this->request->data)) {
                $this->Session->setFlash(__('The uploadinvoice has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The uploadinvoice could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Uploadinvoice->read(null, $id);
        }
        $users = $this->Uploadinvoice->User->find('list');
        $this->set(compact('users'));
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
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        if ($this->Uploadinvoice->delete()) {
            $this->Session->setFlash(__('Uploadinvoice deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Uploadinvoice was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Uploadinvoice->recursive = 0;
        $this->set('uploadinvoices', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        $this->set('uploadinvoice', $this->Uploadinvoice->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Uploadinvoice->create();
            if ($this->Uploadinvoice->save($this->request->data)) {
                $this->Session->setFlash(__('The uploadinvoice has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The uploadinvoice could not be saved. Please, try again.'));
            }
        }
        $users = $this->Uploadinvoice->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Uploadinvoice->save($this->request->data)) {
                $this->Session->setFlash(__('The uploadinvoice has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The uploadinvoice could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Uploadinvoice->read(null, $id);
        }
        $users = $this->Uploadinvoice->User->find('list');
        $this->set(compact('users'));
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
        $this->Uploadinvoice->id = $id;
        if (!$this->Uploadinvoice->exists()) {
            throw new NotFoundException(__('Invalid uploadinvoice'));
        }
        if ($this->Uploadinvoice->delete()) {
            $this->Session->setFlash(__('Uploadinvoice deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Uploadinvoice was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
