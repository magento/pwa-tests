# pwa-test (Deprecated)

## Deprecation Information

This repository has been deprecated as all tests have been moved to [PWA-Studio repository](https://github.com/magento/pwa-studio/tree/develop/venia-integration-tests) integration tests and converted to [Cypress](https://www.cypress.io/) tests. 

PWA-Studio integration test documentation: https://github.com/magento/pwa-studio/blob/develop/venia-integration-tests/README.md

<del>

## EZ Setup

1. Ensure you are on the `sampledata_develop` branch

2. Install dependencies. If this fails, install `php` and link through brew.

`composer install`

3. Install and open docker. Once open, log in.

`brew cask install docker` and `open /Applications/Docker.app`

4. Run/download selenium+chrome.

`docker run -d -p 4444:4444 selenium/standalone-chrome`

5. Build the project to generate scaffold.

`vendor/bin/mftf build:project`

6. Set your `dev/tests/acceptance/.env` file as desired.

```
MAGENTO_BASE_URL=<backend url>
MAGENTO_BACKEND_NAME=admin
MAGENTO_ADMIN_USERNAME=xxxxxx
MAGENTO_ADMIN_PASSWORD=xxxxx
BROWSER=chrome
MODULE_ALLOWLIST=Pwa
STOREFRONT_URL=<test URL>
WAIT_TIMEOUT=30
```

## Alternative setup

### Selenium Setup

1. Download latest stable Chrome driver http://chromedriver.chromium.org/ and unzip.
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
   - Single test: `vendor/bin/mftf run:test CreateAccount`
   - All tests: `vendor/bin/mftf run:group PWA`

## See output

Allure is a web-based interface that can give more information about how / where / when a test failed.

1. Install Allure

`brew install allure`

2. Run `allure serve dev/tests/acceptance/tests/_output/allure-results/`
