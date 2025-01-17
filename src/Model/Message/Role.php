<?php

declare(strict_types=1);

namespace PhpLlm\LlmChain\Model\Message;

enum Role: string
{
    case System = 'system';
    case Assistant = 'assistant';
    case User = 'user';
    case ToolCall = 'tool';
}
