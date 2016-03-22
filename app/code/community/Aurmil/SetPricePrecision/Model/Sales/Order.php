<?php

/**
 * @author     Aurélien Millet
 * @link       https://github.com/aurmil/
 */
class Aurmil_SetPricePrecision_Model_Sales_Order extends Mage_Sales_Model_Order
{
    public function formatPrice($price, $addBrackets = false)
    {
        return $this->formatPricePrecision(
            $price,
            Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision(),
            $addBrackets
        );
    }
}
