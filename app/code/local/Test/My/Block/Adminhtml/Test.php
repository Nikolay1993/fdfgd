<?php


class Test_My_Block_Adminhtml_Test extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('testmy');
        $this->_blockGroup = 'testmy';
        $this->_controller = 'adminhtml_test';

        $this->_headerText = $helper->__('Test Management');
        $this->_addButtonLabel = $helper->__('Add User');
    }

}