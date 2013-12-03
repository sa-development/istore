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
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
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
		
		if ($this->params['controller'] == 'posrequesters' && $this->params['action'] == 'index') {
			$this->Auth->allow('index');
		}

        if (isset($this->params['admin'])) {
            $this->layout = 'admin';
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

}
