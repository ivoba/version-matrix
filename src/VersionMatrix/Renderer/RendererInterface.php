<?php

namespace VersionMatrix\Renderer;

use VersionMatrix\Entity\Matrix;

interface RendererInterface
{

    public function render(Matrix $matrix);
}