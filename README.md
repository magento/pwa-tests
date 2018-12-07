# pwa-test

## Setup
1. `composer install`
2. `vendor/bin/mftf build:project`

## Running Tests
`vendor/bin/mftf run:test -f SamplePwaTest`

The `-f` flag is required to bypass Magento module resolution.
