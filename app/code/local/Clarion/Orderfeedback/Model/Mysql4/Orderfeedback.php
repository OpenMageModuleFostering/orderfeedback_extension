<?php

class Clarion_Orderfeedback_Model_Mysql4_Orderfeedback extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the orderfeedback_id refers to the key field in your database table.
        $this->_init('orderfeedback/orderfeedback', 'orderfeedback_id');
    }
}