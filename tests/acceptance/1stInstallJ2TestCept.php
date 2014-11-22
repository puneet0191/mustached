<?php
/**
 * @package     mustached
 * @subpackage  Cept Class
 * @copyright   Copyright (C) 2014 mustached.org All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Before executing this tests configuration.php is removed at tests/_groups/InstallationGroup.php
$scenario->group('installationJ2');
$scenario->group('Joomla2');

// Load the Step Object Page
$I = new AcceptanceTester\InstallJoomla2LanguageSteps($scenario);

$I->wantTo('Execute Joomla Installation');
$I->selectLanguage();
$I = new AcceptanceTester\InstallJoomla2DatabaseSteps($scenario);
$I->setupDatabaseConnection();
$I = new AcceptanceTester\InstallJoomla2SiteConfigurationSteps($scenario);
$I->setupConfiguration();
$I = new AcceptanceTester\LoginSteps($scenario);

$I->wantTo('Execute Log in at Joomla Administrator');
$I->doAdminLogin();
$I = new AcceptanceTester\InstallExtensionJ2Steps($scenario);

$I->wantTo('Install Joomla Extension');
$I->installExtension('EXTENSION_NAME');  //Name of the extension which we want to install in Joomla
$I->wantTo('Install Demo Data for the Extension');
$I->installSampleData();

