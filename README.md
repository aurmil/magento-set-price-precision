# Magento - Set Price Precision extension

## Overview
For some reasons, you may need to change the number of decimals (precision) used when displaying prices.

This extension allows you to set the precision you want.

## Compatibility
Tested on Magento CE 1.6.2.0 and 1.7.0.2

## Notes
* Free and open source
* Fully configurable
* Bundled with English and French translations

## Installation
Just download the "app" folder and paste it into the root directory of your Magento application. It will be merged with the existing "app" folder.

No Magento files will be modified but class "Mage_Directory_Model_Currency" will be extended.

## Usage
In __System > Configuration > Catalog > Catalog > Price__, this extension adds a new option: __Price Precision__

![](http://2.bp.blogspot.com/-4lObp8MYMhE/UIFNsM6d5ZI/AAAAAAAALM8/_5qEZsH0Q4k/s1600/precision.png)
* Set "2" to stay with the Magento basic behavior
* Set a different value between 0 and 4 to change the price precision. 0 means no decimals will be displayed.

## Changelog
### 1.0
* initial release
