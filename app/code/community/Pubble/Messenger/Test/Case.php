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
 * Pubble_Messenger_Test_Case
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Test
 */
abstract class Pubble_Messenger_Test_Case extends EcomDev_PHPUnit_Test_Case
{
    /**
     * Get an instance of a mock data helper.
     *
     * @param  int    $enabled
     * @param  int    $method
     * @param  bool   $usingCredentials
     * @param  bool   $usingCopyPaste
     * @param  string $appId
     * @param  string $identifier
     * @param  string $code
     * @return EcomDev_PHPUnit_Mock_Proxy
     */
    protected function getMockDataHelper(
        $enabled = 0,
        $method = 2,
        $usingCredentials = false,
        $usingCopyPaste = true,
        $appId = '123456',
        $identifier = '123456',
        $code = ''
    ) {
        $helper = $this->getHelperMock('studioforty9_recaptcha', array(
            'isEnabled', 'getMethod', 'isMethodCredentials', 'isMethodCopyPaste', 
            'getAppId', 'getIdentifier', 'getCode'
        ), false, array(), null, false);

        $helper->expects($this->any())->method('isEnabled')->will($this->returnValue($enabled));
        $helper->expects($this->any())->method('getMethod')->will($this->returnValue($method));
        $helper->expects($this->any())->method('isMethodCredentials')->will($this->returnValue($usingCredentials));
        $helper->expects($this->any())->method('isMethodCopyPaste')->will($this->returnValue($usingCopyPaste));
        $helper->expects($this->any())->method('getAppId')->will($this->returnValue($appId));
        $helper->expects($this->any())->method('getIdentifier')->will($this->returnValue($identifier));
        $helper->expects($this->any())->method('getCode')->will($this->returnValue($code));

        return $helper;
    }
}
