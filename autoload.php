<?php

namespace Hartenthaler\Webtrees\Module\RelationIsDescriptorAddon;

use Composer\Autoload\ClassLoader;

$loader = new ClassLoader();
$loader->addPsr4('Hartenthaler\\Webtrees\\Module\\RelationIsDescriptorAddon\\', __DIR__);
$loader->register();
