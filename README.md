# Studio Raz Unicode URL 
Magento 2 module to save UTF-8 characheters  allowing categories and products UTF-8 URL keys
and convert url Vietnamese characheters to English characheters example: url-có-ký-tự-đặc-biệt to url-co-ky-tu-dac-biet
## Installation
Install this module within Magento 2 using composer:

    composer require magiccart/magento2-unicode-url

After this, enable the module as usual:

    bin/magento module:enable SR_UnicodeUrl
    bin/magento setup:upgrade
    bin/magento cache:clean
