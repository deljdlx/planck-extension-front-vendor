<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Cropper extends Package
{
    public function __construct()
    {
        $this->addFrontPackage(new JQuery());
        $this->addJavascriptFile('vendor/jquery-cropper/dist/jquery-cropper.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/jquery-cropper/dist/cropper.css', self::RESOURCE_PRIORITY_INCLUDE);

        parent::__construct();


    }
}



