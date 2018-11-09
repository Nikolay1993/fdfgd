<?php

class Mage_Contacts_Model_Source_Status
{

    const MAN_GENDER = 0;
    const WOMAN_GENDER = 1;

    const NEW_STATUS = 0;
    const TREATED_STATUS = 1;

    const YES = 1;
    const NO = 0;

    public function getGender()
    {
        $genders = (array(
            self::MAN_GENDER => Mage::helper('mywork')->__('Man'),
            self::WOMAN_GENDER => Mage::helper('mywork')->__('Woman'),
        ));

        return $genders ;
    }

    public function getStatuses()
    {
        $statuses = (array(
            self::NEW_STATUS => Mage::helper('mywork')->__('New'),
            self::TREATED_STATUS => Mage::helper('mywork')->__('Treated'),
        ));

        return $statuses ;
    }

    public function getNotified()
    {
        $notified = (array(
            self::YES => Mage::helper('mywork')->__('Yes'),
            self::NO => Mage::helper('mywork')->__('No'),
        ));

        return $notified ;
    }

}