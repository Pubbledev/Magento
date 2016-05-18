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
 * Pubble_Messenger_Block_Script
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Block
 */
class Pubble_Messenger_Block_Script extends Mage_Core_Block_Template
{
    /**
     * The pubble javascript library code URL.
     * @var string
     */
    protected $_url = '//d2dfzm19238yrf.cloudfront.net/javascript/loader.js';
    
    /**
     * Render the javascript to initialize the pubble messenger.
     *
     * @return string
     */
    public function render()
    {
        $appId = $this->_getHelper()->getAppId();
        $identifier = $this->_getHelper()->getIdentifier();

        return sprintf(
            '<div class="pubble-app" data-app-id="%s" data-app-identifier="%s"></div><script type="text/javascript" src="%s" defer></script>',
            $appId, $identifier, $this->_url
        );
    }
    
    /**
     * Get an instance of the Pubble Data helper.
     *
     * @return Pubble_Messenger_Helper_Data
     */
    protected function _getHelper()
    {
        return Mage::helper('pubble_messenger');
    }
}
