# Duitku

Accept credit and debit cards, e-wallets, bank transfers, and send bulk payments via a single integration in Indonesia.

## Install the Gateway

1. You can install the gateway via composer:

    ```
    composer require blesta/duitku
    ```

2. OR upload the source code to a /components/gateways/nonmerchant/duitku/ directory within
your Blesta installation path.

    For example:

    ```
    /var/www/html/blesta/components/gateways/nonmerchant/duitku/
    ```

    But before upload must be run this :
    ```
    composer install
    ```
    Add this code into duitku.php
    ```
    require_once dirname(__FILE__) . DS . 'vendor' . DS . 'autoload.php';
    ```

3. Log in to your admin Blesta account and navigate to
> Settings > Payment Gateways

4. Find the Duitku gateway and click the "Install" button to install it

5. You're done!
