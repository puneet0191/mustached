<?php
/**
 * @package     RedShop
 * @subpackage  Cept
 * @copyright   Copyright (C) 2012 - 2014 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
$scenario->group('Joomla3');
$I = new AcceptanceTester\LoginSteps($scenario);

$I->wantTo('Install Extension');
$I->doAdminLogin();
$config = $I->getConfig();
$className = 'AcceptanceTester\InstallExtension' . $config['env'] . 'Steps';
$I = new $className($scenario);

$I->installExtension('EXTENSION_NAME');
$I->wantTo('Install demo data for EXTENSION');
$I->installSampleData();
