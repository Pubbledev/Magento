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
     * @param  string $appId
     * @param  string $identifier
     * @return EcomDev_PHPUnit_Mock_Proxy
     */
    protected function getMockDataHelper($enabled = 0, $appId = '123456', $identifier = '123456')
    {
        $helper = $this->getHelperMock('pubble_messenger', array(
            'isEnabled', 'getAppId', 'getIdentifier',
        ), false, array(), null, false);

        $helper->expects($this->any())->method('isEnabled')->will($this->returnValue($enabled));
        $helper->expects($this->any())->method('getAppId')->will($this->returnValue($appId));
        $helper->expects($this->any())->method('getIdentifier')->will($this->returnValue($identifier));

        return $helper;
    }
}
