<?php
/**
 * unit-test:/unit/formjs/action.php
 *
 * @creation  2018-08-03
 * @version   1.0
 * @package   unit-test
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
Nav::Set('test-1', ['no'=>1], false);
Nav::Set('test-2', ['no'=>2], false);
Nav::Set('test-3', ['no'=>3], false);
Nav::Set('test-4', ['no'=>4], false);
Nav::Set('test-5', ['no'=>5], false);
Nav::Out();

//	...
if(!Unit::Load('formjs')){
	return;
}

//	...
include( ConvertPath('unit:/formjs/test.php') );
