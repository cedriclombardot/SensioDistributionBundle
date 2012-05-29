#!/usr/bin/env php
<?php

/*
 * This file is part of the Symfony Standard Edition.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!$appDir = realpath(__DIR__.'/../../../../../../../../commons')) {
    exit('Looks like you don\'t have a standard layout.');
}

require_once $appDir.'/autoload.php';

\Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::doBuildBootstrap($appDir);
