<?php

namespace App\Decoder;

interface DecoderInterface
{
    public function decode(DecoderModelInterface $data);
}