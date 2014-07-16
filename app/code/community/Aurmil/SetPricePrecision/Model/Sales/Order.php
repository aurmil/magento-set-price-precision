<?php

class Aurmil_SetPricePrecision_Model_Sales_Order
extends Mage_Sales_Model_Order
{
    public function formatPrice($price, $addBrackets = false)
    {
        return $this->formatPricePrecision(
            $price, 
            (int)Mage::getStoreConfig('catalog/price/precision'), 
            $addBrackets
        );
    }
}
