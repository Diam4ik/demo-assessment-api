<?php

namespace App\Encoder;

use App\Model\ModelInterface;

interface EncoderInterface
{
    public function encode(ModelInterface $modelData): EncoderModelInterface;
}