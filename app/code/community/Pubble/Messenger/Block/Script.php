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
    protected $_url = '//www.pubble.io/resources/javascript/QAInit.js';
    
    /**
     * Render the javascript to initialize the pubble messenger.
     *
     * @return string
     */
    public function render()
    {
        return ($this->isCopyPaste()) ? $this->renderCode() : $this->renderCredentials();
    }
    
    /**
     * Is the configuration method set to 'Copy & Paste'?
     *
     * @return bool
     */
    protected function isCopyPaste()
    {
        return $this->_getHelper()->isMethodCopyPaste();
    }
    
    /**
     * Render the copy and pasted code.
     *
     * @return string
     */
    protected function renderCode()
    {
        return $this->_getHelper()->getCode();
    }
    
    /**
     * Render the tag to fetch the pubble javascript library code.
     *
     * @return string
     */
    protected function renderJsUrl()
    {
        return sprintf('<script type="text/javascript" src="%s"></script>', $this->_url);
    }
    
    /**
     * Render the javascript to initialize the pubble messenger.
     *
     * @return string
     */
    protected function renderJsScript()
    {
        $appId = $this->_getHelper()->getAppId();
        $identifier = $this->_getHelper()->getIdentifier();
        
        $html = sprintf(
            '<script type="text/javascript">var lpQA = lpQA({appID: "%s", identifier: "%s"});</script>',
            $appId,
            $identifier
        );

        return $html;
    }
    
    /**
     * Render the javascript using credential variables.
     *
     * @return string
     */
    protected function renderCredentials()
    {
        return sprintf("%s\n%s", $this->renderJsUrl(), $this->renderJsScript());
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
