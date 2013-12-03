<?php
App::uses('AppModel', 'Model');
/**
 * Part Model
 *
 * @property Kitpart $Kitpart
 * @property Mfgpart $Mfgpart
 */
class Part extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'part_no';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Kitpart' => array(
			'className' => 'Kitpart',
			'foreignKey' => 'part_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Mfgpart' => array(
			'className' => 'Mfgpart',
			'foreignKey' => 'part_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
