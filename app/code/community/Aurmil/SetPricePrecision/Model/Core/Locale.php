<?php

/**
 * @author     Aurélien Millet
 * @link       https://github.com/aurmil/
 */
class Aurmil_SetPricePrecision_Model_Core_Locale extends Mage_Core_Model_Locale
{
    public function getJsPriceFormat()
    {
        $result = parent::getJsPriceFormat();

        if (isset($result['precision'])) {
            $precision = Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision();
            $diff = $result['precision'] - $precision;

            $result['precision'] -= $diff;

            if (isset($result['requiredPrecision'])) {
                $result['requiredPrecision'] -= $diff;
            }
        }

        return $result;
    }
}
