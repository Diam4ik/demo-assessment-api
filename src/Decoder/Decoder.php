<?php

namespace App\Decoder;

abstract class Decoder implements DecoderInterface
{
    abstract public function setData($data);

    abstract public function getData($data);
}