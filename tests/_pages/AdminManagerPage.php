<?php
/**
 * @package     RedMEMBER2
 * @subpackage  Page Class
 * @copyright   Copyright (C) 2012 - 2014 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Class AdminManagerPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.4
 */
class AdminManagerPage
{
    public static $allExtensionPages = array (
        'Users Manager' => '/administrator/index.php?option=com_redmember&view=rmadminusers',
        'Groups Manager' => '/administrator/index.php?option=com_redmember&view=rmadmingroups',
        'Access Manager' => '/administrator/index.php?option=com_redmember&view=rmadminlevels',
        'Organization Manager' => '/administrator/index.php?option=com_redmember&view=rmadminorganizations',
        'Tabs Manager' => '/administrator/index.php?option=com_redmember&view=rmadmintabs',
        'Membership Manager' => '/administrator/index.php?option=com_redmember&view=rmadminmemberships',
        'Membership Orders Manager' => '/administrator/index.php?option=com_redmember&view=rmadminmembershiporders',
        'Custom Fields Manager' => '/administrator/index.php?option=com_redmember&view=rmadminfields',
        'Vat Groups Manager' => '/administrator/index.php?option=com_redmember&view=rmadminvatgroups',
        'Vat Rates Manager' => '/administrator/index.php?option=com_redmember&view=rmadminvatrates',
        'Templates Manager' => '/administrator/index.php?option=com_redmember&view=rmadmintemplates',
        'Forum Section Manager' => '/administrator/index.php?option=com_redmember&view=rmadminforumsections',
        'Forum Categories Manager' => '/administrator/index.php?option=com_redmember&view=rmadminforumcategories',
        'Forum Threads Manager' => '/administrator/index.php?option=com_redmember&view=rmadminforumthreads',
        'Forum Posts Manager' => '/administrator/index.php?option=com_redmember&view=rmadminforumposts',
        'Folder Category Manager' => '/administrator/index.php?option=com_redmember&view=rmadminfoldercategories',
        'Folder Manager' => '/administrator/index.php?option=com_redmember&view=rmadminfolders',
        'Messages Manager' => '/administrator/index.php?option=com_redmember&view=rmadminmessages',
        'Mail Templates Manager' => '/administrator/index.php?option=com_redmember&view=rmadminmails',
        'News Letter Manager' => '/administrator/index.php?option=com_redmember&view=rmadminnewsletters',
        'NewsLetter Subscriptions Manager' => '/administrator/index.php?option=com_redmember&view=rmadminnewslettersubscriptions',
        'Search Forms Manager' => '/administrator/index.php?option=com_redmember&view=rmadminsearchforms',
        'Search Manager' => '/administrator/index.php?option=com_redmember&view=rmadminsearch'
    );
}
