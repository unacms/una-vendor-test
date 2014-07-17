<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import('BxDolModule');

class VndTestModule extends BxDolModule 
{
    function __construct(&$aModule) 
    {
        parent::__construct($aModule);
    }

    function serviceTest () 
    {
        return str_repeat(_t('_vnd_test_phrase'), getParam('vnd_test_repeat_times'));
    }
}

/** @} */
