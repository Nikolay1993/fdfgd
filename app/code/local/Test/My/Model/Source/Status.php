<?php

class Test_My_Model_Source_Status
{

    const PROCESSING = 0;
    const CANCELED = 1;
    const APPROVED = 2;

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