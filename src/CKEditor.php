<?php

namespace Omaicode\CKEditor;

use Omaicode\Admin\Extension;

class CKEditor extends Extension
{
    public $name = 'ckeditor';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';
}
