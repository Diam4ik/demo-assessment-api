<?php

namespace App\Decoder\JSON\Model;

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
