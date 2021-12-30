<?php

namespace Phpactor\Flow\Element;

use Phpactor\Flow\Element;
use Phpactor\Flow\Range;
use Phpactor\Flow\Type;
use Phpactor\Flow\Type\UndefinedType;
use Phpactor\TextDocument\ByteOffsetRange;

class UnmanagedElement extends Element
{
    public function __construct(
        private string $nodeType,
        private ByteOffsetRange $range,
        private array $children
    )
    {
    }

    /**
     * {@inheritDoc}
     */
    public function children(): array
    {
        return $this->children;
    }

    public function range(): ByteOffsetRange
    {
        return $this->range;
    }
}
