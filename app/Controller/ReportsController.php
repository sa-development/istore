<?php

class ReportsController extends AppController {

    var $uses = array();

    public function index($stationId = null) {
        $this->loadModel('Station');
        $stations = $this->Station->find('list', array('fields' => array('id', 'name')));
        if (isset($this->params->query['station'])) {
            $stationId = $this->params->query['station'];
			$this->Session->write('Station', $this->Station->findById($stationId));
        }
		
		
		$stationId = $this->Session->read('Station.Station.id');
		
		
		
        $this->set(compact('stations', 'stationId'));
    }

    public function view($stationId=null, $cmd=null) {
		$this->layout = 'ajax';
        /*$this->loadModel('StationCmd');
        $configData = $this->StationCmd->find('first', array('conditions' => array('station_id' => $stationId, 'cmd' => 'vrubyrept')));
        $dataObject = simplexml_load_string(str_replace(':', '', $configData['StationCmd']['data']));*/
		
		
    }

}