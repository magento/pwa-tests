# pwa-test

## Selenium Setup
1. Download latest stable Chrome driver http://chromedriver.chromium.org/  and unzip.
2. Download latest selenium standalone server https://www.seleniumhq.org/download/
3. Install Java
4. Put Chrome driver and Selenium server in one directory and run selenium server ex : `java -jar selenium-server-standalone-3.14.0.jar`

## MFTF Setup
1. Clone pwa-tests repository
2. Run `composer install`
3. Copy .env file and update the variables. To copy `cp dev/tests/acceptance/.env.dist dev/tests/acceptance/.env`
3. Run `vendor/bin/mftf build:project`

## Running Tests
1. Running Tests: Examples-
    * `vendor/bin/mftf run:test CreateAccount`
    * `vendor/bin/mftf run:group PWA`
      
