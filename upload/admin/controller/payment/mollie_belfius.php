<?php
require_once(dirname(__FILE__) . "/mollie/base.php");

class ControllerPaymentMollieBelfius extends ControllerPaymentMollieBase
{
	const MODULE_NAME = MollieHelper::MODULE_NAME_BELFIUS;
}
