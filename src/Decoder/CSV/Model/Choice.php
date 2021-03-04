<?php

namespace App\Decoder\CSV\Model;

use App\Decoder\DecoderModelInterface;

class Choice implements DecoderModelInterface
{
    private $id;
    private $text;
    private $question;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }
}
