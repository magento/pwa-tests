# pwa-test

## EZ Setup

1. Install dependencies. If this fails, install `php` and link through brew.

`composer install`

1. Install and open docker. Once open, log in.

`brew cask install docker` and `open /Applications/Docker.app`

2. Run/download selenium+chrome. 

`docker run -d -p 4444:4444 selenium/standalone-chrome`

3. Build the project to generate scaffold.

`vendor/bin/mftf build:project`

4. Set your `.env` file as desired.

```
MAGENTO_BASE_URL=<backend url>
MAGENTO_BACKEND_NAME=admin
MAGENTO_ADMIN_USERNAME=xxxxxx
MAGENTO_ADMIN_PASSWORD=xxxxx
BROWSER=chrome
MODULE_WHITELIST=Pwa
STOREFRONT_URL=<test URL>
WAIT_TIMEOUT=30
```

## Alternative setup

### Selenium Setup
1. Download latest stable Chrome driver http://chromedriver.chromium.org/  and unzip.
2. Download latest selenium standalone server https://www.seleniumhq.org/download/
3. Install Java
4. Put Chrome driver and Selenium server in one directory and run selenium server ex : `java -jar selenium-server-standalone-3.14.0.jar`

### MFTF Setup
1. Clone pwa-tests repository
2. Run `composer install`
3. Run `vendor/bin/mftf setup:env` to generate .env file under dev/tests/acceptance and update variable values
4. Run `vendor/bin/mftf build:project`

## Running Tests
1. Running Tests: Examples-
    * `vendor/bin/mftf run:test CreateAccount`
    * `vendor/bin/mftf run:group PWA`

## See output

1. Install Allure

`brew install allure`

2. `allure serve dev/tests/acceptance/tests/_output/allure-results/`

