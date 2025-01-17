<?php

namespace Phpactor\Flow\Element;

use Phpactor\Flow\Element;
use Phpactor\Flow\Range;

class NamespaceDefinitionElement extends Element
{
    public function __construct(private Range $range)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function children(): array
    {
        return [];
    }

    public function range(): Range
    {
        return $this->range;
    }
}
