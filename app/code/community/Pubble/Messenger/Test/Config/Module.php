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
 * Pubble_Messenger_Test_Config_Module
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Test
 */
class Pubble_Messenger_Test_Config_Module extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function module_is_in_correct_code_pool()
    {
        $this->assertModuleCodePool('community');
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function module_version_is_correct()
    {
        $this->assertModuleVersion('1.1.0');
    }

    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function block_are_configured()
    {
        $this->assertBlockAlias('pubble_messenger/script', 'Pubble_Messenger_Block_Script');
    }

    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function models_are_configured()
    {
        $this->assertModelAlias('pubble_messenger/observer', 'Pubble_Messenger_Model_Observer');
        $this->assertModelAlias('pubble_messenger/source_method', 'Pubble_Messenger_Model_Source_Method');
    }

    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function helpers_are_configured()
    {
        $this->assertHelperAlias('pubble_messenger/data', 'Pubble_Messenger_Helper_Data');
    }

    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function access_granted_for_config_acl()
    {

        $this->assertConfigNodeValue(
            'adminhtml/acl/resources/admin/children/system/children/config/children/pubble/title',
            'Pubble Messenger Settings'
        );
    }

    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group config
     */
    public function config_has_controller_action_generate_blocks_after_observer_defined()
    {
        $this->assertEventObserverDefined(
            'frontend',
            'controller_action_layout_generate_blocks_after',
            'Pubble_Messenger_Model_Observer',
            'addPubbleBeforeBodyEnd'
        );
    }
}
