#!/bin/sh

FROM prooph/composer:7.2

WORKDIR /usr/src/app

COPY ./ ./

RUN composer install 



#ENV admin_username=admin
#ENV admin_password=123123q
#ENV storefront_info=STOREFRONT_URL=https://magento-venia.now.sh/
#ENV base_url=https://release-dev-231-npzdaky-zddsyhrdimyra.us-4.magentosite.cloud/
#
#RUN sed -i  "s/Magento_Framework,Magento_ConfigurableProductWishlist,Magento_ConfigurableProductCatalogSearch/Pwa/" dev/tests/acceptance/.env && \
#    sed -i  "s,http://devdocs.magento.com/,$base_url," dev/tests/acceptance/.env && \
#    sed -i  "s,MAGENTO_ADMIN_USERNAME=admin,MAGENTO_ADMIN_USERNAME=$admin_username," dev/tests/acceptance/.env && \
#    sed -i  "s,123123q,$admin_password," dev/tests/acceptance/.env && \
#    echo $storefront_info >> dev/tests/acceptance/.env

RUN vendor/bin/mftf build:project


