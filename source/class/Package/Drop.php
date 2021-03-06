<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Drop extends Package
{
    public function __construct()
    {

        parent::__construct();

        $this->addFrontPackage(
           new Tether()
        );

        $this->addCSSFile('vendor/drop/dist/css/drop-theme-basic.min.css', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/drop/dist/css/drop-theme-arrows-bounce-dark.min.css', self::RESOURCE_PRIORITY_REQUIRE);

        $this->addCSSFile('vendor/drop/dist/css/drop-theme-arrows.css', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/drop/dist/css/extras/drop-twitter-bootstrap.min.css', self::RESOURCE_PRIORITY_REQUIRE);

        $this->addJavascriptFile('vendor/drop/dist/js/drop.min.js', self::RESOURCE_PRIORITY_REQUIRE);
    }
}



