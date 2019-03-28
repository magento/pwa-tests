# pwa-test

## Selenium Setup
1. Download latest stable Chrome driver http://chromedriver.chromium.org/  and unzip.
2. Download latest selenium standalone server https://www.seleniumhq.org/download/
3. Install Java
4. Put Chrome driver and Selenium server in one directory and run selenium server ex : 'java -jar selenium-server-standalone-3.14.0.jar'

## MFTF Setup
1. Clone pwa-tests repository
2. Run `composer install`
3. Run `vendor/bin/mftf build:project`

## Running Tests
1. Run Sample Tests:
    * `vendor/bin/mftf run:test SamplePwaTest`
    * `vendor/bin/mftf run:test FlipKartSampleTest`
    * `vendor/bin/mftf run:group veniaTheme`
        - Other Venia Groups:
            * `veniaStorefront`
            * `veniaMainMenu`
            * `veniaCategory`
            * `veniaProduct`
            * `veniaShoppingCart`
