<?php

namespace App\Decoder\JSON\Model;

use App\Decoder\DecoderModelInterface;

class Question implements DecoderModelInterface
{
    private $text;
    private $createdAt;
    private $choices;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }
}
