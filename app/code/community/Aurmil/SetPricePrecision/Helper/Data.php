<?php

/**
 * @author     Aurélien Millet
 * @link       https://github.com/aurmil/
 */
class Aurmil_SetPricePrecision_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getCalculablePrecision()
    {
        return (int)Mage::getStoreConfig('catalog/price/precision');
    }
    
    public function getDisplayablePrecision()
    {
        return $this->getCalculablePrecision();
    }
}
