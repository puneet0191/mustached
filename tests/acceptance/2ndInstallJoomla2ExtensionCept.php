<?php
/**
 * @package     mustached
 * @subpackage  Cept
 * @copyright   2014 mustached.org
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
$scenario->group('Joomla2');
$I = new AcceptanceTester\LoginSteps($scenario);

$I->wantTo('Install Extension');
$I->doAdminLogin();
$I = new AcceptanceTester\InstallExtensionJoomla2Steps($scenario);

$I->installExtension('EXTENSION_NAME');
$I->wantTo('Install EXTENSION_NAME demo data');
$I->installSampleData();
