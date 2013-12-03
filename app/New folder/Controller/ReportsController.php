<?php

class ReportsController extends AppController {

    var $uses = array();

    public function index() {
        $this->loadModel('Station');
        $stations = $this->Station->find('list', array('fields' => array('id', 'name')));

        $station_id = null;
        if (isset($this->params->query['station_id'])) {
            $station_id = $this->params->query['station_id'];
        }
        $this->set(compact('stations', 'station_id'));
    }

    public function view($stationId, $cmd) {
        $this->loadModel('StationCmd');
        $configData = $this->StationCmd->find('first', array('conditions' => array('station_id' => $stationId, 'cmd' => 'vrubyrept')));
        $dataObject = simplexml_load_string(str_replace(':', '', $configData['StationCmd']['data']));
        print_r($dataObject);exit;
    }

}