<?php

declare(strict_types=1);

namespace MoeMizrak\LaravelOpenrouter\DTO;

/**
 * ResponseData is the general response DTO which consists of:
 * - id
 * - provider
 * - model
 * - object
 * - created
 * - choices (DTO object)
 * - usage (DTO object)
 *
 * Class ResponseData
 * @package MoeMizrak\LaravelOpenrouter\DTO
 */
final class ResponseData extends DataTransferObject
{
    /**
     * @inheritDoc
     */
    public function __construct(
        public string $id,

        public string $model,

        public string $object,

        public int $created,

        public ?string $provider = null,

        public ?array $choices = null,

        public ?UsageData $usage = null,

        public ?array $citations = null,
    ) {
        parent::__construct(...func_get_args());
    }

}
