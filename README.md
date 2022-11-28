[![Latest Stable Version](https://poser.pugx.org/prismalms/laravel-mercadopago/v/stable)](https://packagist.org/packages/prismalms/laravel-mercadopago)
[![Total Downloads](https://poser.pugx.org/prismalms/laravel-mercadopago/downloads)](https://packagist.org/packages/prismalms/laravel-mercadopago)
[![License](https://poser.pugx.org/prismalms/laravel-mercadopago/license)](https://packagist.org/packages/prismalms/laravel-mercadopago)

**No more doctrine/common and doctrine/annotations issues when using Laravel Framework.**

## Disclaimers
The current release of the application is in active development by the official mainteners (MercadoPago). Expect delayed updates here.

This is not an official MercadoPago package. We only fixed some compatibility issues that the official maintener ignore. This package is not formally supported and the code is available as-is with no guarantees.

## Mercado Pago SDK for PHP

This library provides developers with a simple set of bindings to the Mercado Pago API.

### PHP Versions Supported:

The SDK supports PHP 5.6 or major

### Installation 

#### Using Composer

1. Download Composerif not already installed
2. Go to your project directory and run `composer require prismalms/laravel-mercadopago` on the command line.
3. Thats all, you have Mercado Pago SDK installed.

### Quick Start 

1. You have to require the library from your Composer vendor folder.

  ```php
  require __DIR__  . '/vendor/autoload.php';
  ```

2. Setup your credentials or major

  You have two types of credentials:

  * **For API or custom checkout:**
    ```php
    MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");      // On Production
    MercadoPago\SDK::setAccessToken("YOUR_TEST_ACCESS_TOKEN"); // On Sandbox
    ```
  * **For Web-checkout:**
    ```php
    MercadoPago\SDK::setClientId("YOUR_CLIENT_ID");
    MercadoPago\SDK::setClientSecret("YOUR_CLIENT_SECRET");
    ```

3. Using resource objects.

  You can interact with all the resources available in the public API, to this each resource is represented by classes according to the following diagram:
  
  ![sdk resource structure](https://user-images.githubusercontent.com/864790/34393059-9acad058-eb2e-11e7-9987-494eaf19d109.png)
  
  **Sample**
  
```php
  <?php
  
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");

    $payment = new MercadoPago\Payment();

    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "larue.nienow@hotmail.com"
    );

    $payment->save();

    echo $payment->status;
```
