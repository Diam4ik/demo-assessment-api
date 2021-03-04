<?php

namespace App\Encoder\JSON\Model;

use App\Encoder\EncoderModelInterface;

class Choice implements EncoderModelInterface
{
    private $id;
    private $text;
    private $question;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }
}
