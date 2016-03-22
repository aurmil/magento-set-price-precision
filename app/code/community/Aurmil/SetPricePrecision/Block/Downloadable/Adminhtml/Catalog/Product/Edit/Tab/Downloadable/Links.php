<?php

class Aurmil_SetPricePrecision_Block_Downloadable_Adminhtml_Catalog_Product_Edit_Tab_Downloadable_Links extends Mage_Downloadable_Block_Adminhtml_Catalog_Product_Edit_Tab_Downloadable_Links
{
    public function getPriceValue($value)
    {
        return number_format($value, Mage::helper('aurmil_setpriceprecision')->getCalculablePrecision(), null, '');
    }
}
