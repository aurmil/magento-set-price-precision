<?php

/**
 * @author     Aurélien Millet
 * @link       https://github.com/aurmil/
 */
class Aurmil_SetPricePrecision_Model_Directory_Currency extends Mage_Directory_Model_Currency
{
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        return $this->formatPrecision(
            $price,
            Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision(),
            $options,
            $includeContainer,
            $addBrackets
        );
    }
}
