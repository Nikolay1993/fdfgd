<?php

class My_Work_Block_List extends Mage_Core_Block_Template
{

    public function getCollectionTb()
    {
        $tb = Mage::getModel('mywork/work')->getCollection();
        $tb->addFieldToFilter('status',array('eq'=>My_Work_Model_Source_Status::APPROVED));
        $tb->setOrder('created', 'DESC');
        return $tb;
    }

}