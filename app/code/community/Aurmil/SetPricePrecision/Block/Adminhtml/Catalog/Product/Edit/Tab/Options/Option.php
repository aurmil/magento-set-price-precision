<?php

class Aurmil_SetPricePrecision_Block_Adminhtml_Catalog_Product_Edit_Tab_Options_Option extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Option
{
    public function getPriceValue($value, $type)
    {
        $precision = Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision();
        if ($type == 'percent') {
            return number_format($value, $precision, null, '');
        } elseif ($type == 'fixed') {
            return number_format($value, $precision, null, '');
        }
    }
}
