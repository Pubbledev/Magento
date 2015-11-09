<?php
/**
 * Pubble_Messenger
 *
 * @category  Pubble
 * @package   Pubble_Messenger
 * @author    Pubble <ross@pubble.io>
 * @copyright 2015 Pubble (http://www.pubble.io)
 * @version   1.0.0
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
    /**#@+
     * Configuration Method Types
     * @var int
     */
    const METHOD_CREDENTIALS = 1;
    const METHOD_COPYPASTE   = 2;
    /**#@-*/
    
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
     * Get the method configuration type.
     *
     * @return int
     */
    public function getMethod()
    {
        return (int) Mage::getStoreConfig('pubble/messenger/method');
    }
    
    /**
     * Determine if the method type is 'credentials'.
     *
     * @return bool
     */
    public function isMethodCredentials()
    {
        return ($this->getMethod() === static::METHOD_CREDENTIALS);
    }
    
    /**
     * Determine if the method type is 'copy and paste'.
     *
     * @return bool
     */
    public function isMethodCopyPaste()
    {
        return ($this->getMethod() === static::METHOD_COPYPASTE);
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
    
    /**
     * Get the copy and pasted code from Pubble saved in the configuration.
     *
     * @return int
     */
    public function getCode()
    {
        return Mage::getStoreConfig('pubble/messenger/code');
    }
}
