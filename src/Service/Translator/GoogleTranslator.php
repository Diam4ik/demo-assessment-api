<?php

namespace App\Service\Translator;

use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleTranslator extends GoogleTranslate implements TranslatorInterface
{
    /**
     * @inheritDoc
     */
    public function translateFromTo(string $string, string $target, ?string $source = 'en'): ?string
    {
        return self::trans($string, $target, $source);
    }
}