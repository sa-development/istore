<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session',
		'RequestHandler',
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
		$this->Session->write('CI_Session.userdata.name', 'satishsatish');
		//print_r();exit;
		
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		
        /* "Normally, the AuthComponent remembers what controller/action pair you
          were trying to get to before you were asked to authenticate yourself.
          Upon a successful authentication you will be redirected to your original
          destination. However, you can force people to go to a specific
          controller/action pair if needed." */
        //$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'index');

        $this->set('current_user', $this->Auth->User('username'));
        $this->set('current_user_superadmin', $this->Auth->User('superadmin'));

        if ($this->Auth->User('superadmin') != "") {
            
            $this->Auth->allow('*');
        } else if ($this->Auth->User('Group.name') == "Merchant") {
            $this->Auth->allow('*');
        } else {
            $this->Auth->allow('login', 'logout','feed', 'update');
        }
		
		$allowedControllers = array('posrequesters', 'site');
		
		if (in_array($this->params['controller'], $allowedControllers)&& $this->params['action'] == 'index') {
			$this->Auth->allow('index');
		}
		
		if (in_array($this->params['controller'], $allowedControllers)&& $this->params['action'] == 'pinger') {
			$this->Auth->allow('pinger');
		}

        if (isset($this->params['admin'])) {
            $this->layout = 'admin';
        }
		
		//Code To redirect to HOme page
		$userId = $this->Session->read('Auth.User.id');
		if(!$userId) {
			//Redirect to home page
			//$this->redirect( 'site' );
		}
		
		if (isset($this->params['named']['BeginDate']) && isset($this->params['named']['EndDate'])) {
			$this->Session->write('Auth.User.BeginDate', $this->params['named']['BeginDate']);
			$this->Session->write('Auth.User.EndDate', $this->params['named']['EndDate']);
		}
    }

    function fetchPLUS($stationId) {
        $word = new COM("word.application") or die("Unable to instantiate Word");
        exit;
        $TMP_URL = 'http://dev1.phpcodes.us/app/webroot/sapphireData/vPLUs.xml?121qa';
        $this->_doRequest($TMP_URL);
    }

    function _doRequest($url) {
        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // grab URL and pass it to the browser
        $response = curl_exec($ch);

        //var_dump($response);exit;

        $obj = simplexml_load_string($response);

        print_r($obj);
        exit;

        // close cURL resource, and free up system resources
        curl_close($ch);
    }
	
	//To save js multi-pal row data 
	function preparedDataForSaveAll($modelName)
	{
		$items = array();
		foreach($this->request->data[$modelName] as $attribute => $values) {
			foreach($values as $key => $value) {
				$items[$modelName][$key][$attribute] = $value;
			}
		}
		return $items;
	}
	
	function prepareCondition($model, $station, $type){
		$conditions = array(
			$model.'.station_id' 	=> $station,
			$model.'.periodType'=> $type
		);
		
		if ($beginDate = $this->Session->read('Auth.User.BeginDate')) {
			$conditions[$model.'.periodBeginDate >='] = $beginDate;
		}
		if ($endDate = $this->Session->read('Auth.User.EndDate')) {
			$conditions[$model.'.periodEndDate <='] = $endDate;
		}
		return $conditions;
	}
	
	
	function _addAccountEntry($entry_type=2, $credited, $debited, $amount)
	{		
		$this->loadModel('Entry');	
		
		//Credit to vendor 
		$accdata = array(
			'Entry' => array(
					'entry_type' => $entry_type,
					'EntryItem' => array(
						array(
							'date'  	 => strtotime("now"),
							'ledger_id'  => $credited,
							'amount'  	 => $amount,
							'dc' => 'C'
							),
						array(
							'date'  	 => strtotime("now"),
							'ledger_id'  => $debited,
							'amount'  	 => $amount,
							'dc' => 'D'
						),
					),
			)
		);
		$this->Entry->create();
		$this->Entry->saveAssociated($accdata, array('deep' => true));
	}

}
