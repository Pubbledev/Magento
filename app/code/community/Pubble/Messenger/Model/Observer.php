<?php
/**
 * Pubble_Messenger
 *
 * @category  Pubble
 * @package   Pubble_Messenger
 * @author    Pubble <ross@pubble.io>
 * @copyright 2016 Pubble (http://www.pubble.io)
 * @version   1.1.0
 */

/**
 * Pubble_Messenger_Model_Observer
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Model
 */
class Pubble_Messenger_Model_Observer
{
    /**#@+
     * Block parameters
     * @var string
     */
    const BLOCK_NAME     = 'pubble_messenger/script';
    const BLOCK_ALIAS    = 'pubble.messenger.script';
    const BLOCK_TEMPLATE = 'pubble/messenger/script.phtml';
    const BLOCK_TARGET   = 'before_body_end';
    /**#@-*/
    
    /**
     * Add Pubble script to the footer.
     *
     * The observer will return the Pubble_Messenger_Block_Script class if
     * everything goes as expected. It will return itself if the extension
     * is disabled via configuration. And it will return false in the case
     * of an exception being thrown.
     *
     * @return mixed
     */
    public function addPubbleBeforeBodyEnd()
    {
        if (! $this->_getHelper()->isEnabled()) {
            return $this;
        }
        
        try {
            /** @var Mage_Core_Model_Layout $layout */
            /** @var Pubble_Messenger_Block_Script $pubble */
            $layout = Mage::app()->getLayout();
            $pubble = $layout->createBlock(self::BLOCK_NAME, self::BLOCK_ALIAS);
            $pubble->setTemplate(self::BLOCK_TEMPLATE);
            $layout->getBlock(self::BLOCK_TARGET)->append($pubble);
            
            return $pubble;
        } catch (Exception $e) {
            Mage::logException($e);
            return false;
        }
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
