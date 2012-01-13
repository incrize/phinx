<?php
/*
 * This file is part of the Phinx package.
 *
 * (c) Rob Morgan <rob@robmorgan.id.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (file_exists($file = __DIR__.'/../src/Phinx/autoload.php')) {
    require_once $file;
} elseif (file_exists($file = __DIR__.'/../src/Phinx/autoload.php.dist')) {
    require_once $file;
}