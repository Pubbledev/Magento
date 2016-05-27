<?php
/**
 * Pubble_Messenger
 *
 * @category  Pubble
 * @package   Pubble_Messenger
 * @author    Pubble <ross@pubble.io>
 * @copyright 2016 Pubble (http://www.pubble.io)
 * @version   1.1.2
 */

/**
 * Pubble_Messenger_Helper_Data
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Helper
 */
class Pubble_Messenger_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Determine whether the module is enabled via admin configuration.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('pubble/messenger/enabled');
    }
    
    /**
     * Get the configuration setting for App Id.
     *
     * @return int
     */
    public function getAppId()
    {
        return Mage::getStoreConfig('pubble/messenger/app_id');
    }
    
    /**
     * Get the configuration setting for Identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return Mage::getStoreConfig('pubble/messenger/identifier');
    }
}
