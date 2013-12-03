<?php
App::uses('AppModel', 'Model');
/**
 * Mfgpart Model
 *
 * @property Part $Part
 */
class Mfgpart extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'mfg_part_no';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Part' => array(
			'className' => 'Part',
			'foreignKey' => 'part_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
