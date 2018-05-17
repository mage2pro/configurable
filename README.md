Updates the description for a configurable product according to the selected simple product.

## How to install
```
composer require mage2pro/configurable:*
bin/magento setup:upgrade
rm -rf pub/static/* && bin/magento setup:static-content:deploy en_US <additional locales, e.g.: de_DE
rm -rf var/di var/generation generated/code && bin/magento setup:di:compile
```
If you have problems with these commands, please check the [detailed instruction](https://mage2.pro/t/263).