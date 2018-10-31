<?php

class My_Work_Model_Source_Status
{

    const PROCESSING = 0;
    const CANCELED = 1;
    const APPROVED = 2;

//    public function toOptionArray()
//    {
//        return array(
//          array('value' => self::PROCESSING, 'label' => Mage::helper('mywork')->__('processing')),
//          array('value' => self::CANCELED, 'label' => Mage::helper('mywork')->__('canceled')),
//          array('value' => self::APPROVED, 'label' => Mage::helper('mywork')->__('approved'))
//        );
//    }
//
//    public function toArray()
//    {
//        return array(
//            self::PROCESSING, 'label' => Mage::helper('mywork')->__('processing'),
//            self::CANCELED, 'label' => Mage::helper('mywork')->__('canceled'),
//            self::APPROVED, 'label' => Mage::helper('mywork')->__('approved'),
//        );
//    }

    public function getStatuses()
    {
        $statuses = (array(
            self::PROCESSING => Mage::helper('mywork')->__('processing'),
            self::CANCELED => Mage::helper('mywork')->__('canceled'),
            self::APPROVED => Mage::helper('mywork')->__('approved'),
        ));

        return $statuses ;
    }

}