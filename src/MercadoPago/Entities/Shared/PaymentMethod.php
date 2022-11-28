<?php

namespace MercadoPago;

use MercadoPago\Annotation\Attribute;
use MercadoPago\Annotation\RequestParam;
use MercadoPago\Annotation\RestMethod;

/**
 * @RestMethod(resource="/v1/payment_methods", method="list")
 * @RequestParam(param="access_token")
 */
class PaymentMethod extends Entity
{
    /**
     * @Attribute(primaryKey = true)
     * @var
     */
    protected $id;

    /**
     * @Attribute(type = "string")
     * @var
     */
    protected $name;
}
