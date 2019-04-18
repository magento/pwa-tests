# pwa-test

## Get to know MFTF
https://devdocs.magento.com/mftf/docs/introduction.html

## Selenium Setup
1. Download latest stable Chrome driver http://chromedriver.chromium.org/  and unzip.
2. Download latest selenium standalone server https://www.seleniumhq.org/download/
3. Install Java
4. Put Chrome driver and Selenium server in one directory and run selenium server ex : `java -jar selenium-server-standalone-3.14.0.jar`

## MFTF Setup
1. Clone pwa-tests repository
2. Run `composer install`
3. Run `vendor/bin/mftf setup:env` to generate .env file under dev/tests/acceptance and update variable values
4. Add new variable STOREFRONT_URL with value, Example: STOREFRONT_URL=https://venia.pwa.com
5. Update MODULE_WHITELIST variable value to Pwa, Example: MODULE_WHITELIST=Pwa
3. Run `vendor/bin/mftf build:project`

## Running Tests
1. Running Tests: Examples-
    * `vendor/bin/mftf run:test CreateAccount`
    * `vendor/bin/mftf run:group PWA`
       
Note - If you run MFTF test it will wait for 60 seconds before proceeding to next step. We have open bug for this. Quick fix is to comment
vendor/magento/magento2-functional-testing-framework/src/Magento/FunctionalTestingFramework/Module/MagentoWebDriver.php  line # 378 function waitForPageLoad

// $this->waitForAjaxLoad($timeout);              
