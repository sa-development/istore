<?php
App::uses('AppController', 'Controller');
/**
 * Inventories Controller
 *
 * @property Inventory $Inventory
 */
class InventoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($station_id=null) {
		$station_id = null;
        if (isset($this->params->query['station_id'])) {
            $station_id = $this->params->query['station_id'];
        }
        $this->set(compact('stations', 'station_id'));
		
		if($station_id) {
			$this->setInitializedData($station_id);
			$this->Inventory->recursive = 0;
			
			$this->paginate = array('conditions' => array('Inventory.station_id' => $station_id));
			$this->set('inventories', $this->paginate());
		}
		
		$this->loadModel('Station');
        $stations = $this->Station->find('list', array('fields' => array('id', 'name')));
        $this->set(compact('stations', 'station_id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		$this->set('inventory', $this->Inventory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($station_id=null) {
		$categoryName =  $this->request->data['name'];
		$quantity =  $this->request->data['quantity'];
		
		$id = $this->Inventory->field('Inventory.id', array('Inventory.name' => $categoryName));
		$data['Inventory'] = $this->request->data; ;
		$data['Inventory']['station_id'] = $station_id;
		
		$this->Inventory->create();
		if ($id) {
			$data['Inventory']['id'] = $id;
		}
		
		//print_r($data);exit;
		if (!$this->Inventory->save($data)) {
			$errors = $this->Inventory->validationErrors;
			print_r($errors);
			die('errror');
		}
		echo 'sucess';exit;
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edits($id = null) {
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inventory->save($this->request->data)) {
				$this->Session->setFlash(__('The inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inventory->read(null, $id);
		}
		$stations = $this->Inventory->Station->find('list');
		$departments = $this->Inventory->Department->find('list');
		$this->set(compact('stations', 'departments'));
	}
	
	
	public function edit($id = null) {
	
		if(isset($this->params->params['named'])) {
			$this->Inventory->recursive = -1;
			$previouData 	= $this->Inventory->find('first', array('conditions' => array('Inventory.id' => $id)));
			$modifiedData 	= am($previouData['Inventory'], $this->params->params['named']);
			
			$modifiedData = $this->processData($modifiedData);
			$this->request->data['Inventory'] = $modifiedData;
		}
		
		$this->Inventory->id = $id;
		if (isset($this->request->data['Inventory'])) {
			if ($this->Inventory->save($this->request->data)) {
				echo json_encode($this->request->data['Inventory']);
			} else {
				echo 'The inventory could not be saved. Please, try again';
			}
		}
		exit;
	}
	
	
	public function processData($modifiedData)
	{
		// SET the calculation
		$modifiedData['ending_inventory'] = ($modifiedData['book_inventory'] + $modifiedData['puchase']) - $modifiedData['sales'];
		$modifiedData['short_over'] = $modifiedData['ending_inventory'] - $modifiedData['physical_inventory'];
		$modifiedData['spoilage'] 	= $modifiedData['short_over'] * $modifiedData['per_unit_cost'];
		return $modifiedData;
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
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		if ($this->Inventory->delete()) {
			$this->Session->setFlash(__('Inventory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inventory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Inventory->recursive = 0;
		$this->set('inventories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		$this->set('inventory', $this->Inventory->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Inventory->create();
			if ($this->Inventory->save($this->request->data)) {
				$this->Session->setFlash(__('The inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventory could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Inventory->Station->find('list');
		$departments = $this->Inventory->Department->find('list');
		$this->set(compact('stations', 'departments'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inventory->save($this->request->data)) {
				$this->Session->setFlash(__('The inventory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inventory->read(null, $id);
		}
		$stations = $this->Inventory->Station->find('list');
		$departments = $this->Inventory->Department->find('list');
		$this->set(compact('stations', 'departments'));
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
		$this->Inventory->id = $id;
		if (!$this->Inventory->exists()) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		if ($this->Inventory->delete()) {
			$this->Session->setFlash(__('Inventory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inventory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function setInitializedData($station_id)
	{
		$Categories = $this->Inventory->Category->find('all');
		
		$gridData = array();
		
		
		$this->loadModel('Vrubyreptcategory');
		$this->loadModel('Category');
		
		$this->Category->recursive = -1;
		$categoryList = $this->Category->find('all', array('conditions' => array('Category.station_id' =>  $station_id)));
		
		foreach($categoryList as $key => $category) {
			$this->Vrubyreptcategory->recursive = -1;
			$categoryReportData = $this->Vrubyreptcategory->find('first', array(
				'conditions' => array('station_id' => $station_id, 'Vrubyreptcategory.name' => $category['Category']['name']),
				'order DESC' => 'Vrubyreptcategory.id',
			));
			
			if(!empty($categoryReportData)) {
				$this->Inventory->recursive = -1;
				$inventoryData = $this->Inventory->find('first', array('conditions' => array('name' => $categoryReportData['Vrubyreptcategory']['name'], 'station_id' => $station_id)));
				
				$categoryData = array(
									'station_id' => $station_id,
									'category_id' =>$categoryReportData['Vrubyreptcategory']['id'],
									'name' => $categoryReportData['Vrubyreptcategory']['name'],
									'purchase' => null,
									'sales' => $categoryReportData['Vrubyreptcategory']['totalitemnetSales'],
									'book_inventory' => $categoryReportData['Vrubyreptcategory']['totalitemCount'],
									'last_physical' => $categoryReportData['Vrubyreptcategory']['periodEndDate'],
								);
				if(!empty($inventoryData)) {
					// Set Empty row
					$inventoryData['Inventory']['name'] = $categoryReportData['Vrubyreptcategory']['name'];
					
					$gridData['Inventory'][] = am($inventoryData['Inventory'], $categoryData);
				} else {
					$gridData['Inventory'][] =  $categoryData;
				}
			}
			
		}
		if(isset($gridData['Inventory'])) {
			$this->Inventory->saveAll($gridData['Inventory']);
		}
	}
	
	public function getGridData($station_id)
	{
		$Categories = $this->Inventory->Category->find('all');
		
		$gridData = array();
		
		
		$this->loadModel('Vrubyreptcategory');
		$this->loadModel('Category');
		
		$this->Category->recursive = -1;
		$categoryList = $this->Category->find('all', array('conditions' => array('Category.station_id' =>  $station_id)));
		
		$gridData['total'] = count($categoryList);
		foreach($categoryList as $key => $category) {
			$this->Vrubyreptcategory->recursive = -1;
			$categoryReportData = $this->Vrubyreptcategory->find('first', array(
				'conditions' => array('station_id' => $station_id, 'Vrubyreptcategory.name' => $category['Category']['name']),
				'order DESC' => 'Vrubyreptcategory.id',
			));
			
			if(!empty($categoryReportData)) {
				$this->Inventory->recursive = -1;
				$inventoryData = $this->Inventory->find('first', array('conditions' => array('name' => $categoryReportData['Vrubyreptcategory']['name'], 'station_id' => $station_id)));
				
				$categoryData = array(
									'name' => $categoryReportData['Vrubyreptcategory']['name'],
									'purchase' => null,
									'sales' => $categoryReportData['Vrubyreptcategory']['totalitemnetSales'],
									'book_inventory' => $categoryReportData['Vrubyreptcategory']['totalitemCount'],
									'last_physical' => $categoryReportData['Vrubyreptcategory']['periodEndDate'],
								);
				if(!empty($inventoryData)) {
					// Set Empty row
					$inventoryData['Inventory']['name'] = $categoryReportData['Vrubyreptcategory']['name'];
					
					$gridData['rows'][] = am($inventoryData['Inventory'], $categoryData);
				} else {
					$gridData['rows'][] =  $categoryData;
				}
			}
			
		}
		
		
		echo json_encode($gridData);
		exit;
		echo '{"total":"352","rows":[{"id":"30171","firstname":"1","lastname":"2","phone":"8","email":""},{"id":"30172","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30173","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30174","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30175","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30176","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30177","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30179","firstname":"1","lastname":"8","phone":"3","email":""},{"id":"30180","firstname":"1","lastname":"2","phone":"3","email":""},{"id":"30181","firstname":"1","lastname":"2","phone":"3","email":""}]}';
		exit;
	}
}
