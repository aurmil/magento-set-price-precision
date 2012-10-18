<?php

class Aurmil_SetPricePrecision_Model_Directory_Currency
extends Mage_Directory_Model_Currency
{
    public function format($price, $options=array(), $includeContainer = true, $addBrackets = false)
    {
        return $this->formatPrecision($price, Mage::getStoreConfig('catalog/price/precision'), $options, $includeContainer, $addBrackets);
    }
}
