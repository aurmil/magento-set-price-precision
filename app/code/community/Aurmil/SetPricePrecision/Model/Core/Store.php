<?php

class Aurmil_SetPricePrecision_Model_Core_Store extends Mage_Core_Model_Store
{
    public function roundPrice($price)
    {
        return round($price, Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision());
    }
}
