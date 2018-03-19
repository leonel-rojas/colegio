<?php
App::uses('AppModel', 'Model');
/**
 * Mesespago Model
 *
 * @property Mesesyear $Mesesyear
 * @property Tarjeta $Tarjeta
 * @property Ingreso $Ingreso
 */
class Mesespago extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mesesyear_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tarjeta_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'condicion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Mesesyear' => array(
			'className' => 'Mesesyear',
			'foreignKey' => 'mesesyear_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tarjeta' => array(
			'className' => 'Tarjeta',
			'foreignKey' => 'tarjeta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ingreso' => array(
			'className' => 'Ingreso',
			'foreignKey' => 'ingreso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
