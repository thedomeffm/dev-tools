<?php

namespace Thedomeffm\DevTools;

class RenderOptions
{
    public function __construct(
        public readonly string $outputDirectory,
        public readonly string $outputFile,
        public readonly string $templateDirectory,
        public readonly string $template,
        public readonly array $context = [],
    ) {}
}