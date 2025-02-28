<?php

  require_once dirname(__FILE__) . '/../../index.php';

  $config->set('ACCESS_TOKEN', 'TEST-6295877106812064-042916-6cead5bc1e48af95ea61cc9254595865__LC_LA__-202809963');

  $preapproval_data = new MercadoPago\Preapproval();

  $preapproval_data->payer_email = 'my_customer@my-site.com';
  $preapproval_data->back_url = 'http://www.my-site.com';
  $preapproval_data->reason = 'Monthly subscription to premium package';
  $preapproval_data->external_reference = 'OP-1234';
  $preapproval_data->auto_recurring = [
    'frecuency' => 1,
    'frequency_type' => 'months',
        'transaction_amount' => 60,
        'currency_id' => 'ARS',
        'start_date' => '2014-12-10T14:58:11.778-03:00',
        'end_date' => '2015-06-10T14:58:11.778-03:00',
  ];

  $preapproval_data->save();

  echo var_dump($preapproval_data);
