<?php
App::uses('AppController', 'Controller');
class GasolineController extends AppController {

	public $uses = array();
	
	public function setStation()
	{
		$this->loadModel('Station');
		$stationId = null;
		
		/*if (isset($this->params->query['station'])) {
            $stationId = $this->params->query['station'];
        }
		
		if(!$stationId) {
			
		}
		
		$station = $this->Station->findById($stationId);*/
		
		$station = $this->Session->read('Station');
		$this->set('station', $station);
	}
	
	
	public function salescompetitors_gas_prices() {
		$this->setStation();
	}
	
	public function salesdaily_sales_comparison($start, $end = null) {	
	
		if(!$end) {
			//var_dump($start);
			$strArr = explode('-', $start);
			$end = ($strArr[0]-1).'-'.$strArr[1].'-'.$strArr[2];
		}
		
		if(isset($this->params->query['start'])) $start = $this->params->query['start'];
		if(isset($this->params->query['end']))  $end = $this->params->query['end'];
		
		$sql = "SELECT
					station_id,periodEndDate, currency, SUM(fuelVolume), SUM(fuelMoney) 
				FROM `vfueltotals` 
				WHERE
					periodType='DAILY' AND
					periodEndDate = '".$start."' AND
					fuelingPositionId=8
					GROUP BY station_id";
					
		
		$this->loadModel('Vfueltotal');
		$data = $this->Vfueltotal->query($sql);
		$this->set('startData', $data);
		
		$sql = "SELECT
					station_id,periodEndDate, currency, SUM(fuelVolume), SUM(fuelMoney) 
				FROM `vfueltotals` 
				WHERE
					periodType='DAILY' AND
					periodEndDate = '".$end."' AND
					fuelingPositionId=8
					GROUP BY station_id";
		$endData = $this->Vfueltotal->query($sql);
		$this->set('endData', $endData);

		
		$this->set(compact('start', 'end'));
		$this->setStation();
	}
	
	public function salesfuel_margins() {
	

	}
	
	public function salesfuel_sales_comparison() {

	}
	
	public function salesfuel_margins_consolidated($start, $end = null) {
	
		if(!$end) {
			//var_dump($start);
			$strArr = explode('-', $start);
			$end = ($strArr[0]-1).'-'.$strArr[1].'-'.$strArr[2];
		}
		
		if(isset($this->params->query['start'])) $start = $this->params->query['start'];
		if(isset($this->params->query['end']))  $end = $this->params->query['end'];
		
		
		$sql = "SELECT
					station_id, SUM(`gallons delivered`), SUM(`cost per gallon`)
					FROM `fuel_invoice_items` 
				WHERE
					fuel_invoice_id IN (
						SELECT id FROM `fuel_invoices`
							WHERE 
								station_id=4 AND 
								status='approved' AND
								created = '".$end."')";
	
		//$this->loadModel('Vfueltotal');
		//$data = $this->Vfueltotal->query($sql);
		//print_r($data);
		//exit;
		$this->setStation();
	}
	
	public function salesgas_sales_comparison() {

	}
	
	public function salesgasoline_prices() {

	}
	
	public function salesgasoline_prices_management() {

	}
	
	public function salesgasoline_projection() {

	}
	
	public function salesgasoline_rebate() {

	}

	public function salesgasoline_sales_detailed() {

	}
	
	public function salesgasoline_sales_history() {

	}
	
	public function saleskerosene() {

	}
	
	public function salesopis_wholesale() {

	}
	
	public function salespacific_pride_sales() {

	}
	
	public function salesrebate_counter() {

	}
	
	public function salessales_history() {

	}

	public function purchasefuel_bols() {

	}
	public function purchasegasoline_purchases() {

	}
	
	public function purchasekerosene() {

	}
	
	public function purchasetodays_gas_orders() {

	}
	
	public function purchaseorder_gasoline() {

	}

	
}
