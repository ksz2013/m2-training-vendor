# m2-training-vendor

### Installation

```sh
$ composer config repositories.koncz-m2-trainig-vendor git git@github.com:ksz2013/m2-training-vendor.git
$ composer require koncz/m2-koncz-hello:dev-master
```

Manually:

Copy the zip into app/code/Training/Vendor directory


#### After installation by either means, enable the extension by running following commands:

```sh
$ php bin/magento module:enable Training_Vendor --clear-static-content
$ php bin/magento setup:upgrade
```