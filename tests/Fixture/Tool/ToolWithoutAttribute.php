<?php

declare(strict_types=1);

namespace PhpLlm\LlmChain\Tests\Fixture\Tool;

final class ToolWithoutAttribute
{
    /**
     * @param string $text   The text given to the tool
     * @param int    $number A number given to the tool
     */
    public function __invoke(string $text, int $number): string
    {
        return sprintf('%s says "%d".', $text, $number);
    }
}
