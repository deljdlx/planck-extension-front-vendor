<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class JQueryUI extends Package
{
    public function __construct()
    {


        $this->addFrontPackage(new JQuery());


        $this->addJavascriptFile('vendor/jquery-ui/jquery-ui.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/jquery-ui/jquery-ui.css', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/jquery-ui/jquery-ui.theme.css', self::RESOURCE_PRIORITY_REQUIRE);

        parent::__construct();

    }
}



