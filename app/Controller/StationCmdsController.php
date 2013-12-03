<?php

App::uses('AppController', 'Controller');

/**
 * StationCmds Controller
 *
 * @property StationCmd $StationCmd
 */
class StationCmdsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($stationId) {
        $this->StationCmd->recursive = 0;
        $this->paginate = array('conditions' => array('StationCmd.station_id' => $stationId));
        $this->set('stationCmds', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        $this->set('stationCmd', $this->StationCmd->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->StationCmd->create();
            if ($this->StationCmd->save($this->request->data)) {
                $this->Session->setFlash(__('The station cmd has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station cmd could not be saved. Please, try again.'));
            }
        }
        $stations = $this->StationCmd->Station->find('list');
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
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->StationCmd->save($this->request->data)) {
                $this->Session->setFlash(__('The station cmd has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station cmd could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->StationCmd->read(null, $id);
        }
        $stations = $this->StationCmd->Station->find('list');
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
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        if ($this->StationCmd->delete()) {
            $this->Session->setFlash(__('Station cmd deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Station cmd was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->StationCmd->recursive = 0;
        $this->set('stationCmds', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        $this->set('stationCmd', $this->StationCmd->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->StationCmd->create();
            if ($this->StationCmd->save($this->request->data)) {
                $this->Session->setFlash(__('The station cmd has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station cmd could not be saved. Please, try again.'));
            }
        }
        $stations = $this->StationCmd->Station->find('list');
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
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->StationCmd->save($this->request->data)) {
                $this->Session->setFlash(__('The station cmd has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The station cmd could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->StationCmd->read(null, $id);
        }
        $stations = $this->StationCmd->Station->find('list');
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
        $this->StationCmd->id = $id;
        if (!$this->StationCmd->exists()) {
            throw new NotFoundException(__('Invalid station cmd'));
        }
        if ($this->StationCmd->delete()) {
            $this->Session->setFlash(__('Station cmd deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Station cmd was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function admin_adddefault($stationId) {
        $stations = $this->StationCmd->Station->read(null, $stationId);
        $cgicmdUrl = $stations['Station']['ip_address'] . "/cgi-bin/CGILink?cmd=validate&user=" . $stations['Station']['user_name'] . "&passwd=" . $stations['Station']['password'];

        $dafaultData[] = array(
            'station_id' => $stationId,
            'cmd_url' => $stations['Station']['ip_address'] . "/cgi-bin/CGILink?cmd=vAppInfo",
        );

        $dafaultData[] = array(
            'station_id' => $stationId,
            'cmd_url' => $stations['Station']['ip_address'] . "/cgi-bin/CGILink?cmd=vAppInfo",
        );
    }

    public function feed() {
		$this->layout = 'ajax';
        if ($_GET['station_id'] > 0 && $_GET['cmd'] != '') {
            $data['StationCmd']['data'] = @file_get_contents('php://input');
            $data['StationCmd']['station_id'] = $_GET['station_id'];
            $data['StationCmd']['cmd_url'] = $_GET['cmd'];
            $data['StationCmd']['cmd'] = $_GET['cmd'];

            if (isset($_GET['reptname']))
                $data['StationCmd']['reptname'] = $_GET['reptname'];
            if (isset($_GET['period']))
                $data['StationCmd']['period'] = $_GET['period'];
            if (isset($_GET['filename']))
                $data['StationCmd']['filename'] = $_GET['filename'];

            if ($data['StationCmd']['cmd'] == 'vfueltotals') {
                $this->_updateVfueltotals($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'gemcom') {
                $this->updateGemcom($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }

            if ($data['StationCmd']['cmd'] == 'vrubyreptdepartment') {
                $this->_vrubyreptdepartment($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }

            if ($data['StationCmd']['cmd'] == 'vrubyreptplu') {
                $this->_vrubyreptplu($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
            
            if ($data['StationCmd']['cmd'] == 'vrubyreptcategory') {
                $this->_vrubyreptcategory($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }

            if ($data['StationCmd']['cmd'] == 'vrubyreptcashAcc') {
                $this->_vrubyreptcashAcc($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vposcfg') {
                $this->_vposcfg($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vposcfg') {
                $this->_vposcfg($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptnetwork') {
                $this->vrubyreptnetwork($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptdeal') {
                $this->vrubyreptdeal($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptsummary') {
                $this->vrubyreptsummary($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptcarWash') {
                $this->vrubyreptcarWash($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptprPriceLvl') {
                $this->vrubyreptprPriceLvl($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyreptslPriceLvl') {
                $this->vrubyreptslPriceLvl($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyrepttank') {
                $this->vrubyrepttank($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyrepttax') {
                $this->vrubyrepttax($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
			if ($data['StationCmd']['cmd'] == 'vrubyrepttierproduct') {
                $this->vrubyrepttierproduct($data);
				$this->debugEmail($data, $data['StationCmd']['cmd']);
                return;
            }
			
            $condition = array('station_id' => $_GET['station_id'], 'cmd_url' => $_GET['cmd']);
            if ($data['StationCmd']['reptname'])
                $condition['reptname'] = $data['StationCmd']['reptname'];
            if ($data['StationCmd']['period'])
                $condition['period'] = $data['StationCmd']['period'];
            if ($data['StationCmd']['filename'])
                $condition['filename'] = $data['StationCmd']['filename'];

            // check duplicate record for same cmd
            $id = $this->StationCmd->field('StationCmd.id', $condition);
            if ($id > 0) {
                $data['StationCmd']['id'] = $id;
            }
			
			

            $this->StationCmd->create();
            $this->StationCmd->save($data);
        }
        die('success');
    }
	
	public function debugEmail($data, $cmd)
	{
		$to = 'satish.ashilwar@gmail.com';
		$subject = 'REMOTE POS DATA -- ' . mktime() . '-PUSHED IP-' . $_SERVER['REMOTE_ADDR']. ' -- '.$cmd;
		$message = print_r($data, true);
		$headers = 'From: satish.ashilwar@gmail.com' . "\r\n" . 'Reply-To: satish.ashilwar@gmail.com, sarangpthk@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}
	
	
	public function updateGemcom($data){
		
		$xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->synupid) {
			$this->loadModel('Posrequester');
			$rdata = $this->Posrequester->find('first', array('conditions' => array('synupid'=> $xmlobj->synupid)));
			
			// Change status
			if (!empty($rdata)) {
				$data['Posrequester']['status'] =  'PULL_FROM_POS';
				$data['Posrequester']['id'] =  $rdata['Posrequester']['id'];
				$data['Posrequester']['data'] =  (string)$xmlobj->posdata;
				$data['Posrequester']['active'] =  0;
				$this->Posrequester->create();
				$this->Posrequester->save($data);
			}
		}
	}

    public function _updateVfueltotals($data) {
        $xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vfueltotal');

            foreach ($xmlobj->fpDispenserData as $fpkey => $fpdata) {
                $updateData['Vfueltotal'] = (array) $fpdata;
                $updateData['Vfueltotal']['uom'] = (string) $fpdata->fuelVolume['uom'];
                $updateData['Vfueltotal']['currency'] = (string) $fpdata->fuelMoney['currency'];
                $updateData['Vfueltotal']['name2'] = (string) $fpdata->productNumber['name'];


                $updateData['Vfueltotal']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vfueltotal']['periodEndDate'] = $periodEndDate;
                $updateData['Vfueltotal']['periodType'] = $periodType;

                $updateData['Vfueltotal']['name'] = (string) $fpdata->productNumber['name'];
                $updateData['Vfueltotal']['station_id'] = $stationId;


                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'name' => $pname,
                    'periodEndDate' => $periodEndDate,
                );
                $id = $this->Vfueltotal->field('Vfueltotal.id', $condition);
                if ($id > 0) {
                    $updateData['Vfueltotal']['id'] = $id;
                }

                $this->Vfueltotal->create();
                $this->Vfueltotal->save($updateData);
            }
        }
    }



	public function _vposcfg($data) {
        $xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->categories) {
            $this->_updateCategories($xmlobj->categories, $data);
        }
    }
	
	
	function _updateCategories($categories, $configData) {
        $this->loadModel('Category');
        $categoryData = array();
        //print_r($configData);exit;
        foreach ($categories->category as $key => $category) {
            $updateData = array();
            $updateData['name'] = (string) $category['name'];
            $updateData['sysid'] = (string) $category['sysid'];
            $updateData['station_id'] = $configData['StationCmd']['station_id'];
            $categoryId = $this->Category->field('Category.id', $updateData);
            if ($categoryId > 0) {
                $updateData['id'] = $categoryId;
            }
            //$updateData['sync_id'] = $configData['StationCmd']['sync_id'];
            $categoryData[] = $updateData;
        }
		//print_r($categoryData);exit;
        $this->Category->saveAll($categoryData);
    }
	
	
    public function _vrubyreptcategory($data) {
        $xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();

        //print_r($xmlobj);exit;
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptcategory');

            foreach ($xmlobj->totals as $fpkey => $fpdata) {
                foreach ($fpdata->categoryInfo as $key => $pdata) {
                    $updateData['Vrubyreptcategory'] = array();
                    $updateData['Vrubyreptcategory']['periodBeginDate'] = $periodBeginDate;
                    $updateData['Vrubyreptcategory']['periodEndDate'] = $periodEndDate;
                    $updateData['Vrubyreptcategory']['periodType'] = $periodType;

                    $updateData['Vrubyreptcategory']['totalitemCount'] = (string) $fpdata->total->itemCount;
                    $updateData['Vrubyreptcategory']['totalitemnetSales'] = (string) $fpdata->total->netSales;
                    $updateData['Vrubyreptcategory']['totalpercentOfSales'] = (string) $fpdata->total->percentOfSales;

                    $updateData['Vrubyreptcategory']['vscashiername'] = (string) $fpdata->vscashier->name;
                    $updateData['Vrubyreptcategory']['vscashiersysid'] = (string) $fpdata->vscashier->sysid;

                    $updateData['Vrubyreptcategory']['station_id'] = $stationId;


                    $updateData['Vrubyreptcategory']['name'] = (string) $pdata->vscategoryBase->name;
                    $updateData['Vrubyreptcategory']['salePrice'] = (string) $pdata->salePrice;
                    $updateData['Vrubyreptcategory']['originalPrice'] = (string) $pdata->ovspluBaseriginalPrice;
                    $updateData['Vrubyreptcategory']['netsalecount'] = (string) $pdata->netSales->count;
                    $updateData['Vrubyreptcategory']['netsaleamount'] = (string) $pdata->netSales->amount;
                    $updateData['Vrubyreptcategory']['netsaleitemCount'] = (string) $pdata->netSales->itemCount;
                    $updateData['Vrubyreptcategory']['percentOfSales'] = (string) $pdata->netSales->percentOfSales;

                    
                    $condition = array(
                        'station_id' => $stationId,
                        'periodBeginDate' => $periodBeginDate,
                        'periodEndDate' => $periodEndDate,
                        'name' => $updateData['Vrubyreptcategory']['name'],
                    );
                    $id = $this->Vrubyreptcategory->field('Vrubyreptcategory.id', $condition);
                    if ($id > 0) {
                        $updateData['Vrubyreptcategory']['id'] = $id;
                    }

                    $this->Vrubyreptcategory->create();
                    $this->Vrubyreptcategory->save($updateData);
                }
            }
        }
    }


    public function _vrubyreptplu($data) {
        $xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();

        //print_r($xmlobj);exit;
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptplus');

            foreach ($xmlobj->totals as $fpkey => $fpdata) {
                foreach ($fpdata->pluInfo as $key => $pdata) {
                    $updateData['Vrubyreptplus'] = array();
                    $updateData['Vrubyreptplus']['periodBeginDate'] = $periodBeginDate;
                    $updateData['Vrubyreptplus']['periodEndDate'] = $periodEndDate;
                    $updateData['Vrubyreptplus']['periodType'] = $periodType;

                    $updateData['Vrubyreptplus']['totalitemCount'] = (string) $fpdata->total->itemCount;
                    $updateData['Vrubyreptplus']['totalitemnetSales'] = (string) $fpdata->total->netSales;
                    $updateData['Vrubyreptplus']['totalpercentOfSales'] = (string) $fpdata->total->percentOfSales;

                    $updateData['Vrubyreptplus']['vscashiername'] = (string) $fpdata->vscashier->name;
                    $updateData['Vrubyreptplus']['vscashiersysid'] = (string) $fpdata->vscashier->sysid;

                    $updateData['Vrubyreptplus']['station_id'] = $stationId;

                    $updateData['Vrubyreptplus']['upc'] = (string) $pdata->vspluBase->upc;
                    $updateData['Vrubyreptplus']['modifier'] = (string) $pdata->vspluBase->modifier;
                    $updateData['Vrubyreptplus']['name'] = (string) $pdata->vspluBase->name;
                    $updateData['Vrubyreptplus']['salePrice'] = (string) $pdata->salePrice;
                    $updateData['Vrubyreptplus']['originalPrice'] = (string) $pdata->originalPrice;
                    $updateData['Vrubyreptplus']['netsalecount'] = (string) $pdata->netSales->count;
                    $updateData['Vrubyreptplus']['netsaleamount'] = (string) $pdata->netSales->amount;
                    $updateData['Vrubyreptplus']['netsaleitemCount'] = (string) $pdata->netSales->itemCount;
                    $updateData['Vrubyreptplus']['percentOfSales'] = (string) $pdata->netSales->percentOfSales;

                    $condition = array(
                        'station_id' => $stationId,
                        'periodBeginDate' => $periodBeginDate,
                        'periodEndDate' => $periodEndDate,
                        'upc' => $updateData['Vrubyreptplus']['upc'],
                    );
                    $id = $this->Vrubyreptplus->field('Vrubyreptplus.id', $condition);
                    if ($id > 0) {
                        $updateData['Vrubyreptplus']['id'] = $id;
                    }

                    $this->Vrubyreptplus->create();
                    $this->Vrubyreptplus->save($updateData);
                }
            }
        }
    }

    public function _vrubyreptdepartment($data) {
        $xml = $data['StationCmd']['data'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptdepartment');

            foreach ($xmlobj->totals->deptInfo as $fpkey => $fpdata) {
                $updateData['Vrubyreptdepartment'] = (array) $fpdata;
                $updateData['Vrubyreptdepartment']['vsdeptBasename'] = (string) $fpdata->vsdeptBase->name;
                $updateData['Vrubyreptdepartment']['netSalesamount'] = (string) $fpdata->netSales->amount;
                $updateData['Vrubyreptdepartment']['netSalesitemCount'] = (string) $fpdata->netSales->itemCount;

                $updateData['Vrubyreptdepartment']['refundsamount'] = (string) $fpdata->netSales->refunds;
                $updateData['Vrubyreptdepartment']['discountstotal'] = (string) $fpdata->discounts->total;

                $updateData['Vrubyreptdepartment']['discountspromotions'] = (string) $fpdata->discounts->promotions;
                $updateData['Vrubyreptdepartment']['discountmanualDiscountsamount'] = (string) $fpdata->discounts->manualDiscounts->amount;

                $updateData['Vrubyreptdepartment']['grossSales'] = (string) $fpdata->grossSales;
                $updateData['Vrubyreptdepartment']['percentOfSales'] = (string) $fpdata->percentOfSales;


                $updateData['Vrubyreptdepartment']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vrubyreptdepartment']['periodEndDate'] = $periodEndDate;
                $updateData['Vrubyreptdepartment']['periodType'] = $periodType;

                $updateData['Vrubyreptdepartment']['name'] = (string) $fpdata->productNumber['name'];
                $updateData['Vrubyreptdepartment']['station_id'] = $stationId;

                $updateData['Vrubyreptdepartment']['negativeitemCount'] = (string) $fpdata->negative->itemCount;
                $updateData['Vrubyreptdepartment']['negativegrossSales'] = (string) $fpdata->negative->grossSales;
                $updateData['Vrubyreptdepartment']['negativerefunds'] = (string) $fpdata->negative->refunds;
                $updateData['Vrubyreptdepartment']['negativediscounts'] = (string) $fpdata->negative->discounts;
                $updateData['Vrubyreptdepartment']['negativenetSales'] = (string) $fpdata->negative->netSales;

                $updateData['Vrubyreptdepartment']['other'] = (string) $fpdata->other->netSales;
                $updateData['Vrubyreptdepartment']['othergrossSales'] = (string) $fpdata->other->grossSales;
                $updateData['Vrubyreptdepartment']['otherrefunds'] = (string) $fpdata->other->refunds;
                $updateData['Vrubyreptdepartment']['otherdiscounts'] = (string) $fpdata->other->discounts;
                $updateData['Vrubyreptdepartment']['othernetSales'] = (string) $fpdata->other->netSales;

                $updateData['Vrubyreptdepartment']['total'] = (string) $fpdata->total->netSales;
                $updateData['Vrubyreptdepartment']['totalgrossSales'] = (string) $fpdata->total->grossSales;
                $updateData['Vrubyreptdepartment']['totalrefunds'] = (string) $fpdata->total->refunds;
                $updateData['Vrubyreptdepartment']['totaldiscounts'] = (string) $fpdata->total->discounts;
                $updateData['Vrubyreptdepartment']['totalnetSales'] = (string) $fpdata->total->netSales;
                $updateData['Vrubyreptdepartment']['totalpercentOfSales'] = (string) $fpdata->total->percentOfSales;



                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'vsdeptBasename' => (string) $fpdata->vsdeptBase->name,
                    'periodEndDate' => $periodEndDate,
                );
                $id = $this->Vrubyreptdepartment->field('Vrubyreptdepartment.id', $condition);
                if ($id > 0) {
                    $updateData['Vrubyreptdepartment']['id'] = $id;
                }

                $this->Vrubyreptdepartment->create();
                $this->Vrubyreptdepartment->save($updateData);
            }
        }
    }

    public function processreports($station, $cmd) {
        $this->StationCmd->recursive = -1;
        $Sdata = $this->StationCmd->find('all', array('conditions' => array('station_id' => $station, 'cmd' => $cmd)));


        $fiterData = array();
        foreach ($Sdata as $key => $data) {
            $xml = str_replace(':', '', $data['StationCmd']['data']);
            $xmlobj = @simplexml_load_string($xml);

            if (is_object($xmlobj) && $xmlobj->vsperiod) {
                $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
                $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
                $pname = (string) $xmlobj->vsperiod['name'];

                foreach ($xmlobj->fpDispenserData as $fpkey => $fpdata) {
                    $fuelingPositionId = (string) $fpdata->fuelingPositionId;
                    $productNumber = (string) $fpdata->productNumber;
                    $fuelVolume = (string) $fpdata->fuelVolume;
                    $fuelMoney = (string) $fpdata->fuelMoney;
                    $productID = (string) $fpdata->productID;
                    $fuelingPointStatus = (string) $fpdata->fuelingPointStatus;
                    if (isset($fiterData[$periodBeginDate][$productID])) {
                        $fiterData[$periodBeginDate]['fuelVolume'] += $fuelVolume;
                        $fiterData[$periodBeginDate]['fuelMoney'] += $fuelMoney;
                    } else {
                        $fiterData[$periodBeginDate]['fuelingPositionId'] = $fuelingPositionId;
                        $fiterData[$periodBeginDate]['productNumber'] = $productNumber;
                        $fiterData[$periodBeginDate]['fuelVolume'] = $fuelVolume;
                        $fiterData[$periodBeginDate]['fuelMoney'] = $fuelMoney;
                        $fiterData[$periodBeginDate]['productID'] = $productID;
                        $fiterData[$periodBeginDate]['fuelingPointStatus'] = $fuelingPointStatus;
                    }
                }
            }
        }


        print_r($fiterData);
        exit;
    }
	
	
	public function vrubyrepttierproduct($data = null) {
        $xml = $data['StationCmd']['data'];
		$filename = $data['StationCmd']['filename'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));

        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyrepttierproduct');
//print_r($xmlobj);
            foreach ($xmlobj->totals->tierProductInfo->productInfo as $fpkey => $fpdata) {
                //$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
				$updateData['Vrubyrepttierproduct']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vrubyrepttierproduct']['periodEndDate'] = $periodEndDate;
                $updateData['Vrubyrepttierproduct']['periodType'] = $periodType;
				
				 $updateData['Vrubyrepttierproduct']['productInfoname'] = (string)$fpdata->fuelfuelProdBase->name;
				 $updateData['Vrubyrepttierproduct']['fuelInfocount'] = (string)$fpdata->fuelInfo->count;
				 $updateData['Vrubyrepttierproduct']['fuelInfoamount'] = (string)$fpdata->fuelInfo->amount;
				 $updateData['Vrubyrepttierproduct']['fuelInfovolume'] = (string)$fpdata->fuelInfo->volume;
				 $updateData['Vrubyrepttierproduct']['filename'] = (string)$filename;
				 $updateData['Vrubyrepttierproduct']['station_id'] = $stationId;
				
				//print_r($updateData);exit;

                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'productInfoname' => (string) $fpdata->fuelfuelProdBase->name,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
                );
                $id = $this->Vrubyrepttierproduct->field('Vrubyrepttierproduct.id', $condition);
                
				if ($id > 0) {
                    $updateData['Vrubyrepttierproduct']['id'] = $id;
                }

                $this->Vrubyrepttierproduct->create();
                $this->Vrubyrepttierproduct->save($updateData);
            }
        }
    }
	
	
	public function vrubyrepttax($data = null) {
        $xml = $data['StationCmd']['data'];
		$filename = $data['StationCmd']['filename'];
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));

        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyrepttax');
//print_r($xmlobj);
            foreach ($xmlobj->totals->taxInfo as $fpkey => $fpdata) {
                //$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
				$updateData['Vrubyrepttax']['station_id'] = $stationId;
				$updateData['Vrubyrepttax']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vrubyrepttax']['periodEndDate'] = $periodEndDate;
                $updateData['Vrubyrepttax']['periodType'] = $periodType;
				
				 $updateData['Vrubyrepttax']['actualTaxRate'] = (string)$fpdata->actualTaxRate;
				 $updateData['Vrubyrepttax']['taxableSales'] = (string)$fpdata->taxableSales;
				 $updateData['Vrubyrepttax']['nonTaxableSales'] = (string)$fpdata->nonTaxableSales;
				 $updateData['Vrubyrepttax']['salesTax'] = (string)$fpdata->salesTax;
				 $updateData['Vrubyrepttax']['refundTax'] = (string)$fpdata->refundTax;
				 $updateData['Vrubyrepttax']['netTax'] = (string)$fpdata->netTax;
				 $updateData['Vrubyrepttax']['vrubyrepttaxName'] = (string)$fpdata->vstaxrateBase->name;
				 $updateData['Vrubyrepttax']['taxRate'] = (string)$fpdata->vstaxrateBase->taxRate;
				 
				 
				 
				 if($xmlobj->byRegister && $xmlobj->byRegister && isset($xmlobj->byRegister->taxInfo[(int)(int)$fpkey])) {
				 //print_r($xmlobj->byRegister);exit;
					 $updateData['Vrubyrepttax']['byRegister_totals_actualTaxRate'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->actualTaxRate;
					 $updateData['Vrubyrepttax']['byRegister_taxableSales'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->taxableSales;
					 $updateData['Vrubyrepttax']['byRegister_nonTaxableSales'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->nonTaxableSales;
					 $updateData['Vrubyrepttax']['byRegister_salesTax'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->salesTax;
					 $updateData['Vrubyrepttax']['byRegister_refundTax'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->refundTax;
					 $updateData['Vrubyrepttax']['byRegister_netTax'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->netTax;
					 $updateData['Vrubyrepttax']['byRegister_name'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->vstaxrateBase->name;
					 $updateData['Vrubyrepttax']['byRegister_taxRate'] = (string)$xmlobj->byRegister->taxInfo[(int)$fpkey]->vstaxrateBase->taxRate;
				 }

				 if($xmlobj->byCashier && $xmlobj->byCashier->taxInfo && isset($xmlobj->byCashier->taxInfo[(int)$fpkey])) {
					 $updateData['Vrubyrepttax']['byCashier_totals_actualTaxRate'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->actualTaxRate;
					 $updateData['Vrubyrepttax']['byCashier_taxableSales'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->taxableSales;
					 $updateData['Vrubyrepttax']['byCashier_nonTaxableSales'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->nonTaxableSales;
					 $updateData['Vrubyrepttax']['byCashier_salesTax'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->salesTax;
					 $updateData['Vrubyrepttax']['byCashier_refundTax'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->refundTax;
					 $updateData['Vrubyrepttax']['byCashier_netTax'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->netTax;
					 $updateData['Vrubyrepttax']['byCashier_name'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->vstaxrateBase->name;
					 $updateData['Vrubyrepttax']['byCashier_taxRate'] = (string)$xmlobj->byCashier->taxInfo[(int)$fpkey]->vstaxrateBase->taxRate;
				 }
				
				//print_r($updateData);exit;

                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'vrubyrepttaxName' => (string) $fpdata->vstaxrateBase->name,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
                );
                $id = $this->Vrubyrepttax->field('Vrubyrepttax.id', $condition);
                
				if ($id > 0) {
                    $updateData['Vrubyrepttax']['id'] = $id;
                }

                $this->Vrubyrepttax->create();
                $this->Vrubyrepttax->save($updateData);
            }
        }
    }
	
	
	public function vrubyrepttank($data = null) {
        $xml = $data['StationCmd']['data'];
		
$xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<pd:tankPd xmlns:vs="urn:vfi-sapphire:vs.2001-10-01" xmlns:fuel="urn:vfi-sapphire:fuel.2001-10-01" xmlns:base="urn:vfi-sapphire:base.2001-10-01" xmlns:pd="urn:vfi-sapphire:pd.2002-05-21" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><vs:period sysid="2" periodType="DAILY" name="DAILY" periodSeqNum="811" periodBeginDate="2013-07-19T23:57:04-04:00" periodEndDate="2013-07-20T23:29:00-04:00"/><vs:site>A</vs:site><pd:constituentPeriods><vs:period sysid="1" periodType="SHIFT" name="SHIFT" periodSeqNum="811" isFirst="true" isLast="true" periodBeginDate="2013-07-19T23:57:04-04:00" periodEndDate="2013-07-20T23:29:00-04:00"/></pd:constituentPeriods><totals><tankTotal><fuel:fuelTank sysid="5">PREM</fuel:fuelTank><fuelInfo><count>12</count><amount>159.52</amount><volume>40.904</volume></fuelInfo></tankTotal><tankTotal><fuel:fuelTank sysid="4">UNLD</fuel:fuelTank><fuelInfo><count>142</count><amount>3380.29</amount><volume>962.858</volume></fuelInfo></tankTotal><total><count>154</count><amount>3539.81</amount><volume>1003.762</volume></total></totals></pd:tankPd>
XML;
		$filename = $data['StationCmd']['filename'];
	
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = 2;//$data['StationCmd']['station_id'];
            $this->loadModel('Vrubyrepttank');

            foreach ($xmlobj->totals->tankTotal as $fpkey => $fpdata) {
                //$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
				$updateData['Vrubyrepttank']['station_id'] = $stationId;
				$updateData['Vrubyrepttank']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vrubyrepttank']['periodEndDate'] = $periodEndDate;
                $updateData['Vrubyrepttank']['periodType'] = $periodType;
				
				 $updateData['Vrubyrepttank']['fuelfuelTank'] = (string)$fpdata->fuelfuelTank;
				 $updateData['Vrubyrepttank']['fuelInfocount'] = (string)$fpdata->fuelInfo->count;
				 $updateData['Vrubyrepttank']['fuelInfoamount'] = (string)$fpdata->fuelInfo->amount;
				 $updateData['Vrubyrepttank']['fuelInfovolume'] = (string)$fpdata->fuelInfo->volume;
				 $updateData['Vrubyrepttank']['filename'] = (string)$filename;
				
				//print_r($updateData);exit;
				

                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'fuelfuelTank' => (string) $fpdata->fuelfuelTank,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
                );
                $id = $this->Vrubyrepttank->field('Vrubyrepttank.id', $condition);
                
				if ($id > 0) {
                    $updateData['Vrubyrepttank']['id'] = $id;
                }

                $this->Vrubyrepttank->create();
                $this->Vrubyrepttank->save($updateData);
            }
        }
    }
	
	
	public function vrubyreptslPriceLvl($data = null) {
        //$xml = $data['StationCmd']['data'];
		//$filename = $data['StationCmd']['filename'];
		
		$xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
		
		//print_r($xmlobj);exit;

        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('VrubyreptslPriceLvl');
//print_r($xmlobj);
            foreach ($xmlobj->totals->slPriceLvlInfo->priceLvlInfo as $fpkey => $fpdata) {
                //$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
				$updateData['VrubyreptslPriceLvl']['station_id'] = $stationId;
				$updateData['VrubyreptslPriceLvl']['periodBeginDate'] = $periodBeginDate;
                $updateData['VrubyreptslPriceLvl']['periodEndDate'] = $periodEndDate;
                $updateData['VrubyreptslPriceLvl']['periodType'] = $periodType;
				
				//$updateData['vrubyreptslPriceLvl']['fuelfuelSvcLevelBase'] = $$xmlobj->totals->slPriceLvlInfo->fuelfuelSvcLevelBase->name;
				 $updateData['VrubyreptslPriceLvl']['name'] = (string)$fpdata->fuelfuelPriceLevel->name;
				 $updateData['VrubyreptslPriceLvl']['fuelInfocount'] = (string)$fpdata->fuelInfo->count;
				 $updateData['VrubyreptslPriceLvl']['fuelInfoamount'] = (string)$fpdata->fuelInfo->amount;
				 $updateData['VrubyreptslPriceLvl']['fuelInfovolume'] = (string)$fpdata->fuelInfo->volume;
				 $updateData['VrubyreptslPriceLvl']['filename'] = (string)$filename;
				
				//print_r($updateData);exit;

                $condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'name' => (string) $fpdata->fuelfuelPriceLevel->name,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
                );
                $id = $this->VrubyreptslPriceLvl->field('VrubyreptslPriceLvl.id', $condition);
                
				if ($id > 0) {
                    $updateData['VrubyreptslPriceLvl']['id'] = $id;
                }

                $this->VrubyreptslPriceLvl->create();
                $this->VrubyreptslPriceLvl->save($updateData);
            }
        }
    }

	
	public function vrubyreptprPriceLvl($data = null) {
        $xml = $data['StationCmd']['data'];
	
		$filename = $data['StationCmd']['filename'];
	
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
		
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptprpricelvl');
			
            foreach ($xmlobj->totals->slPriceLvlInfo as $fpkey => $fpdata) {
                //$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
				$updateData['Vrubyreptprpricelvl']['station_id'] = $stationId;
				$updateData['Vrubyreptprpricelvl']['periodBeginDate'] = $periodBeginDate;
                $updateData['Vrubyreptprpricelvl']['periodEndDate'] = $periodEndDate;
                $updateData['Vrubyreptprpricelvl']['periodType'] = $periodType;
				
				//$updateData['vrubyreptslPriceLvl']['fuelfuelSvcLevelBase'] = $$xmlobj->totals->slPriceLvlInfo->fuelfuelSvcLevelBase->name;
				 $updateData['Vrubyreptprpricelvl']['name'] = (string)$fpdata->fuelfuelProdBase->name;
				 
				 foreach($fpdata->priceLvlInfo as $key => $fpd) {
					 $type = strtolower((string)$fpd->fuelfuelPriceLevel->name). '_';
					 $updateData['Vrubyreptprpricelvl'][$type.'fuelInfocount'] = (string)$fpd->fuelInfo->count;
					 $updateData['Vrubyreptprpricelvl'][$type.'fuelInfoamount'] = (string)$fpd->fuelInfo->amount;
					 $updateData['Vrubyreptprpricelvl'][$type.'fuelInfovolume'] = (string)$fpd->fuelInfo->volume;
				 }
				 
				$updateData['Vrubyreptprpricelvl']['subtotal'] = (string)$fpdata->subtotal->count;
				$updateData['Vrubyreptprpricelvl']['subtotal_amount'] = (string)$fpdata->subtotal->amount;
				$updateData['Vrubyreptprpricelvl']['subtotal_volume'] = (string)$fpdata->subtotal->volume;
								
				$condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'name' => (string) $fpdata->fuelfuelPriceLevel->name,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
                );
                $id = $this->Vrubyreptprpricelvl->field('Vrubyreptprpricelvl.id', $condition);
                
				if ($id > 0) {
                    $updateData['Vrubyreptprpricelvl']['id'] = $id;
                }

                $this->Vrubyreptprpricelvl->create();
                $this->Vrubyreptprpricelvl->save($updateData);
            }
        }
    }
	
	
	public function vrubyreptcarWash($data = null) {
        $xml = $data['StationCmd']['data'];

		$filename = $data['StationCmd']['filename'];
	
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
		
		//print_r($xmlobj);exit;

        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('VrubyreptcarWash');
//print_r($xmlobj);

			//$updateData['VrubyreptcarWash']['station_id'] = $stationId;
			$updateData['VrubyreptcarWash']['station_id'] = $stationId;
			$updateData['VrubyreptcarWash']['periodBeginDate'] = $periodBeginDate;
			$updateData['VrubyreptcarWash']['periodEndDate'] = $periodEndDate;
			$updateData['VrubyreptcarWash']['periodType'] = $periodType;
			$updateData['VrubyreptcarWash']['coinRevenue'] = (string)$xmlobj->coinRevenue;
			$updateData['VrubyreptcarWash']['tokenRevenue'] = (string)$xmlobj->tokenRevenue;
			$updateData['VrubyreptcarWash']['washesUsed'] = (string)$xmlobj->washesUsed;
			$updateData['VrubyreptcarWash']['netSales'] = (string)$xmlobj->netSales->total;
			$updateData['VrubyreptcarWash']['grossSales'] = (string)$xmlobj->netSales->grossSales;
			$updateData['VrubyreptcarWash']['grossSales'] = (string)$xmlobj->grossSales;
			$updateData['VrubyreptcarWash']['paidTicketsCount'] = (string)$xmlobj->paidTickets->count;
			$updateData['VrubyreptcarWash']['paidTicketsAmount'] = (string)$xmlobj->paidTickets->amount;
			$updateData['VrubyreptcarWash']['freeTicketsCount'] = (string)$xmlobj->freeTickets->count;
			$updateData['VrubyreptcarWash']['freeTicketsAmount'] = (string)$xmlobj->freeTickets->amount;
			$updateData['VrubyreptcarWash']['fleetTicketsCount'] = (string)$xmlobj->fleetTickets->count;
			$updateData['VrubyreptcarWash']['fleetTicketsAmount'] = (string)$xmlobj->fleetTickets->amount;
			
			$discounts = 0;
            foreach ($xmlobj->discounts as $fpkey => $fpdata) {
				$discounts += (float)$fpdata->amount;
			}
			
			foreach ($xmlobj->netSales->mopInfo as $fpkey => $fpdata) {
				$updateData['VrubyreptcarWash'][(string)$fpdata->name.'amount'] = (string)$fpdata->amount;
				$updateData['VrubyreptcarWash'][(string)$fpdata->name.'count'] = (string)$fpdata->count;
			}
			
			$updateData['VrubyreptcarWash']['discounts'] = $discounts;
			
			$condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
             );
			$id = $this->VrubyreptcarWash->field('VrubyreptcarWash.id', $condition);

			
			if ($id > 0) {
				$updateData['VrubyreptcarWash']['id'] = $id;
			}

			$this->VrubyreptcarWash->create();
            $this->VrubyreptcarWash->save($updateData);
            
        }
    }
	
	
	public function vrubyreptsummary($data = null) {
        $xml = $data['StationCmd']['data'];

		$filename = $data['StationCmd']['filename'];
	
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
        $updateData = array();
		
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            
			$this->loadModel('Vrubyreptsummary');

			$updateData['VrubyreptcarWash']['station_id'] = $stationId;
			$updateData['VrubyreptcarWash']['filename '] = $filename;
			
			$updateData['Vrubyreptsummary']['periodBeginDate'] = $periodBeginDate;
			$updateData['Vrubyreptsummary']['periodEndDate'] = $periodEndDate;
			$updateData['Vrubyreptsummary']['periodType'] = $periodType;
			$updateData['Vrubyreptsummary']['netSales'] = (string)$xmlobj->totals->summaryInfo->mopTotals->netSales;
			$updateData['Vrubyreptsummary']['cancelRefund'] = (string)$xmlobj->totals->summaryInfo->mopTotals->cancelRefund->total;
			
			$updateData['Vrubyreptsummary']['totalPaymentOut'] = (string)$xmlobj->totals->summaryInfo->totalPaymentOut;
			$updateData['Vrubyreptsummary']['totalPaymentIn'] = (string)$xmlobj->totals->summaryInfo->totalPaymentIn;
			$updateData['Vrubyreptsummary']['totalToAccountFor'] = (string)$xmlobj->totals->summaryInfo->totalToAccountFor;
			$updateData['Vrubyreptsummary']['totalRefundTaxes'] = (string)$xmlobj->totals->summaryInfo->totalRefundTaxes;
			$updateData['Vrubyreptsummary']['totalSalesTaxes'] = (string)$xmlobj->totals->summaryInfo->totalSalesTaxes;
			$updateData['Vrubyreptsummary']['totalTaxes'] = (string)$xmlobj->totals->summaryInfo->totalTaxes;
			$updateData['Vrubyreptsummary']['totalIncludedTaxes'] = (string)$xmlobj->totals->summaryInfo->totalIncludedTaxes;
			$updateData['Vrubyreptsummary']['itemCount'] = (string)$xmlobj->totals->summaryInfo->itemCount;
			$updateData['Vrubyreptsummary']['customerCount'] = (string)$xmlobj->totals->summaryInfo->customerCount;
			$updateData['Vrubyreptsummary']['noSaleCount'] = (string)$xmlobj->totals->summaryInfo->noSaleCount;
			$updateData['Vrubyreptsummary']['drawerViolations'] = (string)$xmlobj->totals->summaryInfo->drawerViolations;
			$updateData['Vrubyreptsummary']['loginOverrides'] = (string)$xmlobj->totals->summaryInfo->loginOverrides;
			$updateData['Vrubyreptsummary']['fuelSales'] = (string)$xmlobj->totals->summaryInfo->fuelSales;
			$updateData['Vrubyreptsummary']['fuelDiscounts'] = (string)$xmlobj->totals->summaryInfo->fuelDiscounts;
			$updateData['Vrubyreptsummary']['merchSales'] = (string)$xmlobj->totals->summaryInfo->merchSales;
			$updateData['Vrubyreptsummary']['totalDiscounts'] = (string)$xmlobj->totals->summaryInfo->totalDiscounts->amount;
			$updateData['Vrubyreptsummary']['totalDiscountscount'] = (string)$xmlobj->totals->summaryInfo->totalDiscounts->count;
			
			$updateData['Vrubyreptsummary']['payIncount'] = (string)$xmlobj->totals->summaryInfo->payIn->count;
			$updateData['Vrubyreptsummary']['payIn'] = (string)$xmlobj->totals->summaryInfo->payIn->amount;
			
			$updateData['Vrubyreptsummary']['payOut'] = (string)$xmlobj->totals->summaryInfo->payOut->amount;
			$updateData['Vrubyreptsummary']['payOutcount'] = (string)$xmlobj->totals->summaryInfo->payOut->count;
			
			$updateData['Vrubyreptsummary']['safeDrop'] = (string)$xmlobj->totals->summaryInfo->safeDrop->total->amount;
			$updateData['Vrubyreptsummary']['safeDropcount'] = (string)$xmlobj->totals->summaryInfo->safeDrop->total->count;
			
			$updateData['Vrubyreptsummary']['xmldata'] = str_replace(':', '', $xml);

			//print_r($updateData);exit;
			$condition = array(
                    'station_id' => $stationId,
                    'periodBeginDate' => $periodBeginDate,
                    'periodEndDate' => $periodEndDate,
					'periodType' => $periodType,
            );
			
			$id = $this->Vrubyreptsummary->field('Vrubyreptsummary.id', $condition);
			
			if ($id > 0) {
				$updateData['Vrubyreptsummary']['id'] = $id;
			}

			$this->Vrubyreptsummary->create();
            $this->Vrubyreptsummary->save($updateData);
            
        }
    }
	
	
	public function vrubyreptdeal($data = null) {
        $xml = $data['StationCmd']['data'];
		$filename = $data['StationCmd']['filename'];

        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
		
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptdeal');
		
			//$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
			$updateData['Vrubyreptdeal']['station_id'] = $stationId;
			$updateData['Vrubyreptdeal']['station_id'] = $filename;
			$updateData['Vrubyreptdeal']['periodBeginDate'] = $periodBeginDate;
			$updateData['Vrubyreptdeal']['periodEndDate'] = $periodEndDate;
			$updateData['Vrubyreptdeal']['periodType'] = $periodType;
			
			$updateData['Vrubyreptdeal']['count'] = (string)$xmlobj->totals->total->count;
			$updateData['Vrubyreptdeal']['amount'] = (string)$xmlobj->totals->total->amount;
			$updateData['Vrubyreptdeal']['itemCount'] = (string)$xmlobj->totals->total->itemCount;
			
			//print_r($updateData);exit;
			
			$condition = array(
				'station_id' => $stationId,
				'periodBeginDate' => $periodBeginDate,
				'periodEndDate' => $periodEndDate,
				'periodType' => $periodType,
			);
			$id = $this->Vrubyreptdeal->field('Vrubyreptdeal.id', $condition);
			
			if ($id > 0) {
				$updateData['Vrubyreptdeal']['id'] = $id;
			}

			$this->Vrubyreptdeal->create();
			$this->Vrubyreptdeal->save($updateData);
            
        }
    }
	
	
	public function vrubyreptnetwork($data = null) {
        $xml = $data['StationCmd']['data'];
		$filename = $data['StationCmd']['filename'];
		
        $xmlobj = SimpleXml_load_string(str_replace(':', '', $xml));
		
        $updateData = array();
        if (is_object($xmlobj) && $xmlobj->vsperiod) {
            $periodBeginDate = substr((string) $xmlobj->vsperiod['periodBeginDate'], 0, 10);
            $periodEndDate = substr((string) $xmlobj->vsperiod['periodEndDate'], 0, 10);
            $pname = (string) $xmlobj->vsperiod['name'];
            $periodType = (string) $xmlobj->vsperiod['periodType'];

            $stationId = $data['StationCmd']['station_id'];
            $this->loadModel('Vrubyreptnetwork');
		
			//$updateData['Vrubyrepttierproduct'] = (array) $fpdata;
			$updateData['Vrubyreptnetwork']['periodBeginDate'] = $periodBeginDate;
			$updateData['Vrubyreptnetwork']['periodEndDate'] = $periodEndDate;
			$updateData['Vrubyreptnetwork']['periodType'] = $periodType;
			
			foreach ($xmlobj->totals->cardInfo as $fpkey => $fpdata) {
				$updateData['Vrubyreptnetwork']['station_id'] = $stationId;
				$updateData['Vrubyreptnetwork']['filename']  = $filename;
				$updateData['Vrubyreptnetwork']['cardNumber'] = (string)$fpdata->cardNumber;
				$updateData['Vrubyreptnetwork']['cardName'] = (string)$fpdata->cardName;
				$updateData['Vrubyreptnetwork']['cardCharges'] = (string)$fpdata->cardCharges->amount;
				$updateData['Vrubyreptnetwork']['cardChargescount'] = (string)$fpdata->cardCharges->count;
				$updateData['Vrubyreptnetwork']['cardCorrections'] = (string)$fpdata->cardCorrections->amount;
				$updateData['Vrubyreptnetwork']['cardCorrectionscount'] = (string)$fpdata->cardCorrections->count;
				$updateData['Vrubyreptnetwork']['cardCorrectionscount'] = (string)$fpdata->cardCorrections->count;
			
			$updateData['Vrubyreptnetwork']['xmldata'] = str_replace(':', '', $xml);
			
			$condition = array(
				'station_id' => $stationId,
				'periodBeginDate' => $periodBeginDate,
				'periodEndDate' => $periodEndDate,
				'periodType' => $periodType,
			);
			$id = $this->Vrubyreptnetwork->field('Vrubyreptnetwork.id', $condition);
			
			if ($id > 0) {
				$updateData['Vrubyreptdeal']['id'] = $id;
			}

			$this->Vrubyreptnetwork->create();
			$this->Vrubyreptnetwork->save($updateData);
			}
        }
    }	
	

}