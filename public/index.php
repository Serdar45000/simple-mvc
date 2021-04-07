<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 14:01
 */

use App\Wcs\Hello;

require_once __DIR__ . '/../vendor/autoload.php';

$hello = new Hello();
echo $hello->talk();