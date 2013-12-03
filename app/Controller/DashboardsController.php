<?php

class DashboardsController extends AppController {

    var $name = 'Dashboards';
    var $components = array('Auth', 'Security', 'Cookie');
    var $helpers = array('Html', 'Time');

    function isAuthorized() {
        switch ($this->action) {
            //case 'admin_reports':
            case 'admin_xxxxx':
                if ($this->Auth->user('role') == 'admin') {
                    return true;
                } else {
                    return false;
                }
                break;
            default:
                return true;
                break;
        }
    }

    function index() {
        $this->set('full_name', $this->Auth->user('full_name'));
        //$last_login = $this->Cookie->read('User.last_login');
        $this->set('last_login', $this->Auth->user('last_login'));
        
        $this->loadModel('Station');
        $stationList = $this->Station->find('list', array('Station.user_id' => $this->Session->read('Auth.User.id')));

        $this->set('stationList', $stationList);
    }

    function admin_index() {
        $this->set('full_name', $this->Auth->user('full_name'));
        //$last_login = $this->Cookie->read('User.last_login');
        $this->set('last_login', $this->Auth->user('last_login'));
    }

    function admin_reports() {
        
    }
	
	public function feedback() {

	}

}

?>
