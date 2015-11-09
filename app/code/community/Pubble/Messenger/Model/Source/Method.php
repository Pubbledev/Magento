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
 * Pubble_Messenger_Model_Source_Method
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Model
 */
class Pubble_Messenger_Model_Source_Method
{
    /**
     * Provide the methods as options to the select box.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            Pubble_Messenger_Helper_Data::METHOD_COPYPASTE   => $this->_getHelper()->__('Copy & Paste'),
            Pubble_Messenger_Helper_Data::METHOD_CREDENTIALS => $this->_getHelper()->__('Credentials'),
        );
    }
    
    /**
     * Get an instance of the Pubble Data helper.
     *
     * @return Pubble_Messenger_Helper_Data
     */
    private function _getHelper()
    {
        return Mage::helper('pubble_messenger');
    }
}
