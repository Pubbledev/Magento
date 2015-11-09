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
 * Pubble_Messenger_Test_Block_Script
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Test
 */
class Pubble_Messenger_Test_Block_Script extends Pubble_Messenger_Test_Case
{
    /** @var Pubble_Messenger_Block_Script */
    protected $block;
    
    /** @var string */
    protected $script = "<script type=\"text/javascript\" src=\"//www.pubble.io/resources/javascript/QAInit.js\"></script>\n<script type=\"text/javascript\">var lpQA = lpQA({appID: \"123456\", identifier: \"123456\"});</script>";

    /**
     * Set up the block and call the parent setUp() method.
     */
    public function setUp()
    {
        $this->block = new Pubble_Messenger_Block_Script();
        parent::setUp();
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group block
     */
    public function it_uses_code_when_copypaste_method_was_chosen_via_configuration()
    {
        $helper = $this->getMockDataHelper(1, 2, false, true, '', '', $this->script);
        $this->replaceByMock('helper', 'pubble_messenger', $helper);
        
        $code = $this->block->render();
        $this->assertEquals($this->script, $code);
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group block
     */
    public function it_uses_variables_when_credentials_method_was_chosen_via_configuration()
    {
        $helper = $this->getMockDataHelper(1, 1, true, false, '123456', '123456');
        $this->replaceByMock('helper', 'pubble_messenger', $helper);
        
        $code = $this->block->render();
        $this->assertEquals($this->script, $code);
    }
}
