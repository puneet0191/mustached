<?php
/**
 * @package     mustached
 * @subpackage  Cept
 * @copyright   2014 mustached.org
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
