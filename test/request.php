<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

check_logged();

bx_import('BxDolRequest');
BxDolRequest::processAsAction($GLOBALS['aModule'], $GLOBALS['aRequest']);

/** @} */
