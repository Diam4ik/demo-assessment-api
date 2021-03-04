<?php

namespace App\Encoder\JSON\Model;

use App\Encoder\EncoderModelInterface;

class Question implements EncoderModelInterface
{
    private $text;
    private $createdAt;
    private $choices;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }
}
