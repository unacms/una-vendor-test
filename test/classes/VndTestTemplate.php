<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import ('BxDolModuleTemplate');

class VndTestTemplate extends BxDolModuleTemplate 
{    
	function __construct(&$oConfig, &$oDb) 
    {
	    parent::__construct($oConfig, $oDb);
    }    
}

/** @} */
