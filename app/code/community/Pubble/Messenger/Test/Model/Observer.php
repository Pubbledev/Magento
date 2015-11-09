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
 * Pubble_Messenger_Test_Model_Observer
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Test
 */
class Pubble_Messenger_Test_Model_Observer extends Pubble_Messenger_Test_Case
{
    /** @var Pubble_Messenger_Model_Observer */
    protected $model;

    /**
     * Set up the model and call the parent setUp() method.
     */
    public function setUp()
    {
        $this->model = new Pubble_Messenger_Model_Observer();
        parent::setUp();
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group model
     * @group observer
     */
    public function it_returns_early_when_disabled_via_configuration()
    {
        $helper = $this->getMockDataHelper(0);
        $this->replaceByMock('helper', 'pubble_messenger', $helper);
        
        $layout = Mage::app()->getLayout();
        $layout->addBlock('core/text_list', 'before_body_end');
        
        $obj = $this->model->addPubbleBeforeBodyEnd();
        
        $this->assertInstanceOf('Pubble_Messenger_Model_Observer', $obj);
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group model
     * @group observer
     */
    public function it_returns_the_pubble_block_with_the_correct_parameters_set()
    {
        $html = '<code>goes here</code>';
        $helper = $this->getMockDataHelper(1, 2, false, true, '123456', '123456', $html);
        $this->replaceByMock('helper', 'pubble_messenger', $helper);
        
        $layout = Mage::app()->getLayout();
        $layout->addBlock('core/text_list', 'before_body_end');
        
        $obj = $this->model->addPubbleBeforeBodyEnd();
        
        $this->assertInstanceOf('Pubble_Messenger_Block_Script', $obj);
        $this->assertEquals('pubble.messenger.script', $obj->getBlockAlias());
        $this->assertEquals('pubble/messenger/script.phtml', $obj->getTemplate());
        $this->assertEquals($html, $obj->toHtml());
    }
}
