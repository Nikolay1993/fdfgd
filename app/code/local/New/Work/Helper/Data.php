<?php

class New_Work_Helper_Data extends Mage_Contacts_Helper_Data
{
    /**
     * Get emails for "Contact us" page
     *
     * @return mixed
     */
    public function getContactEmails()
    {
        $allowedEmails = array();
        $emails = Mage::getStoreConfig('trans_email');

        foreach ($emails as $email) {
            if (isset($email['contact_us']) && $email['contact_us'] == 1) {
                $allowedEmails[] = $email;
            }
        }

        return $allowedEmails;
    }
}