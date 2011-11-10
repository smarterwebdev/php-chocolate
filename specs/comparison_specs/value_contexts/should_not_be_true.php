<?php
/* $Id: should_not_be_true.php 66 2007-10-28 19:50:20Z dreamscape $ */
/**
 * @package PackageName
 * @subpackage SubPackageName
 * @name name
 */



class value_should_not_be_true extends a_context
{

	public function should_fail_when_actual_is_true()
	{
		$this->value(true)->should_not_be->true->should_fail;
	}

	public function should_pass_when_actual_is_a_string()
	{
		$this->value('1')->should_not_be->true;
	}

	public function should_pass_when_actual_is_a_float()
	{
		$this->value(1.0)->should_not_be->true;
	}

	public function should_pass_when_actual_is_an_array()
	{
		$this->value(array(true))->should_not_be->true;
	}

	public function should_pass_when_actual_is_an_integer()
	{
		$this->value(1)->should_not_be->true;
	}

	public function should_pass_when_actual_is_an_object()
	{
		$this->value(new stdClass)->should_not_be->true;
	}

	public function should_pass_when_actual_is_null()
	{
		$this->value(null)->should_not_be->true;
	}

	public function should_pass_when_actual_is_false()
	{
		$this->value(false)->should_not_be->true;
	}

	public function should_provide_message_on_failure()
	{
		$context = $this->stub('a_context');
		$value = $context->value(true);
		$value->should_not_be->true;
		$this->value($value->do_comparison())->should_be->exactly(
			'Did not expect type boolean true'
		);
	}

}