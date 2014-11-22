<?php
/**
 * @package     mustached
 * @subpackage  Page Class
 * @copyright   Copyright (C) 2014 mustached.org All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

//An example of Page Object using Joomla's extension Manager Page, Page class for any of the page's could be build similar way

/**
 * Class ExtensionManagerPage
 *
 * @since  1.4
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 */
class ExtensionManagerPage
{
	// Include url of current page
	public static $URL = '/administrator/index.php?option=com_installer';

	public static $extensionDirectoryPath = "#install_directory";

	public static $installButton = "//input[contains(@onclick,'Joomla.submitbutton3()')]";

	public static $installSuccessMessage = "Installing component was successful.";

	public static $installDemoContent = "#install-demo-content";

	public static $demoDataInstallSuccessMessage = "Sample data successfully installed";

}
