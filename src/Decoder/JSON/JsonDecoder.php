<?php

namespace App\Decoder\JSON;

use App\Decoder\Decoder;
use App\Decoder\DecoderModelInterface;

class JsonDecoder extends Decoder
{
    public function decode(DecoderModelInterface $data)
    {
        return $data->serialize();
    }

    public function setData($data)
    {
        // TODO: Implement setData() method.
    }

    public function getData($data)
    {
        // TODO: Implement getData() method.
    }
}