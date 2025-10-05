<?php
declare(strict_types=1);

namespace App\Modules\ExampleInternalService\Responses\Dto;

class ExampleResponseDto
{
    public function __construct(
        public int $id,
        public string $title,
        public string $body,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            (int) $data['id'],
            (string) $data['title'],
            (string) $data['body'],
        );
    }
}
