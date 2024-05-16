<?php

namespace MoeMizrak\LaravelOpenrouter\Types;

/**
 * This class keeps role types it can be possible to get.
 * No validation for the role parameter will be performed because it may differ for various models.
 *
 * Class RoleType
 * @package MoeMizrak\LaravelOpenrouter\Types
 */
class RoleType
{
    /**
     * User role : Represents the input or messages from the user interacting with the assistant.
     *
     * @var string
     */
    const USER = 'user';

    /**
     * Assistant role : Represents the output or responses generated by the AI assistant.
     *
     * @var string
     */
    const ASSISTANT = 'assistant';

    /**
     * System role : Provides instructions or context to guide the assistant's behavior.
     *
     * @var string
     */
    const SYSTEM = 'system';

    /**
     * Function role : Messages with instructions, commands, or requests that trigger specific actions or behaviors from the assistant.
     *
     * @var string
     */
    const FUNCTION = 'function';

    /**
     * Tool role : Messages providing utilities or resources to enhance the conversation or assist the user in achieving their objectives.
     *
     * @var string
     */
    const TOOL = 'tool';
}