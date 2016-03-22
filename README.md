# Magento - Set Price Precision extension

## Overview

For some reason, you may need to change the number of decimals (precision) used when displaying prices in front office of your store.

This extension allows you to set the precision you want.

## Compatibility

Tested on Magento CE 1.6 - 1.9

## Notes

* Free and open source
* Fully configurable
* Bundled with English, French and German (thanks to Thomas Klosinsky) translations

## Installation

No Magento files will be modified but following classes will be extended and some of their methods overridden:

* Mage\_Adminhtml\_Block\_Catalog\_Product\_Helper\_Form\_Price
* Mage\_Adminhtml\_Block\_Catalog\_Product\_Edit\_Tab\_Options\_Option
* Mage\_Adminhtml\_Block\_Tax\_Rate\_Grid\_Renderer\_Data
* Mage\_Core\_Model\_Locale
* Mage\_Core\_Model\_Store
* Mage\_Directory\_Model\_Currency
* Mage\_Downloadable\_Block\_Adminhtml\_Catalog\_Product\_Edit\_Tab\_Downloadable\_Links
* Mage\_Sales\_Model\_Order

### Manually

* Download the latest version of this module [here](https://github.com/aurmil/magento-set-price-precision/archive/master.zip)
* Unzip it
* Move the "app" folder into the root directory of your Magento application, it will be merged with the existing "app" folder

### With modman

* ```$ modman clone git@github.com:aurmil/magento-set-price-precision.git```

### With composer

* Adapt the following "composer.json" file into yours:

```
{
    "require": {
        "aurmil/magento-set-price-precision": "dev-master"
    },
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages.firegento.com"
        },
        {
            "type": "vcs",
            "url": "git://github.com/aurmil/magento-set-price-precision"
        }
    ],
    "extra": {
        "magento-root-dir": "./"
    }
}
```

* Install or update your composer project dependencies

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

### 2.1

* ensure prices can be set with given precision

### 2.0

* handle every product type
* handle orders
* fix admin display in "website" or "store view" mode

### 1.0

* initial release
