<?php

namespace App\Twill\Capsules\Menus\Http\Controllers;

use App\Twill\Capsules\Base\ModuleController;

class MenuController extends ModuleController
{
    protected $moduleName = 'menus';

    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => false, //we treat menus as published by default, setting this to false disallows the us for changing publish status
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => true,
        'editInModal' => false,
    ];
}
