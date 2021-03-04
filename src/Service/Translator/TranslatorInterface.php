<?php

namespace App\Service\Translator;

interface TranslatorInterface
{
    /**
     * @param string $string
     * @return string|null
     */
    public function translate(string $string): ?string;

    /**
     * @param string $string
     * @param string|null $target
     * @param string $source
     * @return string|null
     */
    public function translateFromTo(string $string, string $target, ?string $source = 'en'): ?string;
}
