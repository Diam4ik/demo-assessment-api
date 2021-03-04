<?php

namespace App\Decoder\CSV\Model;

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
