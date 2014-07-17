<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import('BxDolStudioInstaller');

class VndTestInstaller extends BxDolStudioInstaller 
{
    function __construct($aConfig) 
    {
        parent::__construct($aConfig);
    }    
}

/** @} */ 
