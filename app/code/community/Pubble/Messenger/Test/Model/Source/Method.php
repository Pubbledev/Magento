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
 * Pubble_Messenger_Test_Model_Source_Method
 *
 * @category   Pubble
 * @package    Pubble_Messenger
 * @subpackage Test
 */
class Pubble_Messenger_Test_Model_Source_Method extends Pubble_Messenger_Test_Case
{
    /** @var Pubble_Messenger_Model_Source_Method */
    protected $model;

    /**
     * Set up the model and call the parent setUp() method.
     */
    public function setUp()
    {
        $this->model = new Pubble_Messenger_Model_Source_Method();
        parent::setUp();
    }
    
    /**
     * @test
     * @group pubble
     * @group pubble_messenger
     * @group model
     * @group source_model
     */
    public function it_returns_the_correct_method_values()
    {
        $options = $this->model->toOptionArray();
        
        $this->assertInternalType('array', $options);
        $this->assertArrayHasKey(Pubble_Messenger_Helper_Data::METHOD_CREDENTIALS, $options);
        $this->assertArrayHasKey(Pubble_Messenger_Helper_Data::METHOD_COPYPASTE, $options);
    }
}
