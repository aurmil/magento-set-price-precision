<?php

class Aurmil_SetPricePrecision_Block_Adminhtml_Tax_Rate_Grid_Renderer_Data extends Mage_Adminhtml_Block_Tax_Rate_Grid_Renderer_Data
{
    protected function _getValue (Varien_Object $row)
    {
        $data = parent::_getValue($row);
        if (intval($data) == $data) {
            return (string) number_format($data, Mage::helper('aurmil_setpriceprecision')->getDisplayablePrecision());
        }
        if (!is_null($data)) {
            return $data * 1;
        }
        return $this->getColumn()->getDefault();
    }
}
