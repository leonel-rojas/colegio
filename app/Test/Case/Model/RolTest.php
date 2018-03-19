<?php
App::uses('Rol', 'Model');

/**
 * Rol Test Case
 */
class RolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rol',
		'app.user',
		'app.persona',
		'app.alumno',
		'app.representant',
		'app.profesion',
		'app.trabajador',
		'app.cargo',
		'app.egreso',
		'app.tipoegreso',
		'app.trabajadors_egreso',
		'app.ingreso',
		'app.periodo',
		'app.inscripcion',
		'app.curso',
		'app.seccion',
		'app.turno',
		'app.tarjeta',
		'app.mesespago',
		'app.mesesyear',
		'app.bitacora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rol = ClassRegistry::init('Rol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rol);

		parent::tearDown();
	}

}
