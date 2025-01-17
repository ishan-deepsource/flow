<?php

namespace Phpactor\Flow\Resolver;

use Microsoft\PhpParser\Node;
use Microsoft\PhpParser\Node\Expression\ParenthesizedExpression;
use Phpactor\Flow\Element;
use Phpactor\Flow\ElementResolver;
use Phpactor\Flow\Element\ParenthesizedExpressionElement;
use Phpactor\Flow\Frame;
use Phpactor\Flow\Interpreter;
use Phpactor\Flow\Util\NodeBridge;

class ParenthesizedExpressionResolver implements ElementResolver
{
    public function resolve(Interpreter $interpreter, Frame $frame, Node $node): Element
    {
        assert($node instanceof ParenthesizedExpression);

        $expression = $interpreter->interpret($frame, $node->expression);

        return new ParenthesizedExpressionElement(
            NodeBridge::rangeFromNode($node),
            $expression,
            $expression->type(),
        );
    }
}
