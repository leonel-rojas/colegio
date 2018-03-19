<?php
App::uses('AppModel', 'Model');
/**
 * Mesesyear Model
 *
 * @property Mesespago $Mesespago
 */
class Mesesyear extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mesespago' => array(
			'className' => 'Mesespago',
			'foreignKey' => 'mesesyear_id',
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
