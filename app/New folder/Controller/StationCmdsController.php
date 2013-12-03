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
		$headers = 'From: satish.ashilwar@gmail.com' . "\r\n" . 'Reply-To: satish.ashilwar@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
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

}
