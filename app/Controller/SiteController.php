<?php
class SiteController extends AppController {
	public function index() {
		$this->layout = 'site';
	}

	public function site_home() {
		$this->layout = 'site';
	}

}