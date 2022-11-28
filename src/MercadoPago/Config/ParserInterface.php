<?php

namespace MercadoPago\Config;

/**
 * Interface ParserInterface.
 */
interface ParserInterface
{
    /**
     * @param $path
     *
     * @return mixed
     */
    public function parse($path);

    /**
     * @return mixed
     */
    public function getSupportedExtensions();
}
