<?php
/**
 * This file is part of a FireGento e.V. module.
 *
 * This FireGento e.V. module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_AdminMonitoring
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2014 FireGento Team (http://www.firegento.com)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 */

/**
 * Class FireGento_AdminMonitoring_Test_Block_Adminhtml_History_View_Detail
 */
class FireGento_AdminMonitoring_Test_Block_Adminhtml_History_View_Detail extends EcomDev_PHPUnit_Test_Case_Controller
{
    /**
     * @var FireGento_AdminMonitoring_Block_Adminhtml_History_View_Detail
     */
    protected $_block;

    /**
     * Set up test class
     */
    protected function setUp()
    {
        parent::setUp();

        /* @var $history FireGento_AdminMonitoring_Model_History */
        $history = Mage::getModel('firegento_adminmonitoring/history');
        Mage::register('current_history', $history, true);

        $this->_block = self::app()->getLayout()->createBlock('firegento_adminmonitoring/adminhtml_history_view_detail');
    }

    /**
     * Tear down test class
     */
    protected function tearDown()
    {
        Mage::unregister('current_history');
    }

    /**
     * Test model instance
     */
    public function testInstance()
    {
        $this->assertInstanceOf(
            'FireGento_AdminMonitoring_Block_Adminhtml_History_View_Detail',
            $this->_block
        );
    }
}
