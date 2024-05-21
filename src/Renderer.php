<?php

namespace Thedomeffm\DevTools;

use Twig\Environment as Twig;
use Twig\Loader\FilesystemLoader;

class Renderer
{
    public function render(RenderOptions $options): void
    {
        $this->validate($options);

        $twig = new Twig(new FilesystemLoader($options->templateDirectory));

        $html = $twig->render($options->template, $options->context);

        file_put_contents($options->outputDirectory . '/' . $options->outputFile, $html);
    }

    private function validate(RenderOptions $options): void
    {
        if (!file_exists($options->outputDirectory)) {
            throw new \RuntimeException('Output directory does not exist');
        }
    }
}
