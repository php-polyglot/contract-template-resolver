<?php

declare(strict_types=1);

namespace Polyglot\Contract\TemplateResolver;

interface TemplateResolver
{
    /**
     * @param string $template
     * @param array<string, mixed> $parameters
     * @param string $locale
     * @return string
     */
    public function resolve(string $template, array $parameters, string $locale): string;
}
