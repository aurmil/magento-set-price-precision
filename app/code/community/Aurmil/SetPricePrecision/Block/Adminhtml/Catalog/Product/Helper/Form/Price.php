<?php

class Aurmil_SetPricePrecision_Block_Adminhtml_Catalog_Product_Helper_Form_Price extends Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Price
{
    public function getEscapedValue($index = null)
    {
        $value = $this->getValue();

        if (!is_numeric($value)) {
            return null;
        }

        return number_format($value, Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision(), null, '');
    }
}
