<?php

namespace App\Decoder\CSV;

use App\Decoder\Decoder;
use App\Decoder\DecoderModelInterface;

class CsvDecoder extends Decoder
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