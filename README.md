# Magento - Set Price Precision extension

## Overview
For some reason, you may need to change the number of decimals (precision) used when displaying prices in front office of your store.

This extension allows you to set the precision you want.

## Compatibility
Tested on Magento CE 1.6 - 1.9

## Notes
* Free and open source
* Fully configurable
* Bundled with English and French translations

## Installation
Just download the "app" folder and paste it into the root directory of your Magento application. It will be merged with the existing "app" folder.

No Magento files will be modified but following classes will be overridden:

* Mage\_Core\_Model\_Locale
* Mage\_Directory\_Model\_Currency
* Mage\_Sales\_Model\_Order

## Usage
In __System > Configuration > Catalog > Catalog > Price__, this extension adds a new option: __Price Precision__

![](http://2.bp.blogspot.com/-4lObp8MYMhE/UIFNsM6d5ZI/AAAAAAAALM8/_5qEZsH0Q4k/s1600/precision.png)

* Set "2" (default value) to stay with the Magento basic behavior
* Set a different value between 0 and 4 to change the price precision. 0 means no decimals will be displayed.

__Avoiding side effect:__

If __Price Precision__ is changed in __default scope__, it will affect __admininstration area__ in some ways. For instance, in __Sales > Orders__ management, __Order Totals section__ will be affected.

To avoid this behavior, let __Price Precision__ unchanged (value = "2") in __default scope __and change its value in __website scope__, for each website you have (or in __"store view" scope__ if needed).

__Incomplete case:__

On product detail page of a configurable product, there are drop-down lists (one per attribute), to choose product options. Some options may vary the final price. In this case, the price difference is written into the option label (e.g.: +€50.00 or -$20.00). For these prices, the number of decimals is hard-coded in configurable.js and product.js files. This case is not managed by this extension.

## Changelog
### 2.0
* handle every product type
* handle orders
* fix admin display in "website" or "store view" mode

### 1.0
* initial release
