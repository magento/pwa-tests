# pwa-test

## Setup
1. `composer install`
2. `vendor/bin/mftf build:project`

## Running Tests
1. Ensure you have Selenium Standalone Server running.
2. Run Sample Tests:
    * `vendor/bin/mftf run:test SamplePwaTest`
    * `vendor/bin/mftf run:test FlipKartSampleTest`
    * `vendor/bin/mftf run:group veniaTheme`
        - Other Venia Groups:
            * `veniaStorefront`
            * `veniaCategory`
            * `veniaProduct`
            * `veniaShoppingCart`