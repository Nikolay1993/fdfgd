<?php

class My_Work_Block_Adminhtml_Work_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'mywork';
        $this->_controller = 'adminhtml_work';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('mywork');
        $model = Mage::registry('current_work');

        if ($model->getId()) {
            return $helper->__("Edit Data item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add Data item");
        }
    }

}