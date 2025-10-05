<?php

declare(strict_types=1);

namespace App\Modules\SupportServer\Exceptions;

class SupportApiException extends \Exception
{
    private array $data;

    public const LEVEL_WARNING = 'Warning';

    public const LEVEL_ERROR = 'Error';

    public const DEFAULT_TITLE = 'Ошибка';

    public const DEFAULT_LEVEL = self::LEVEL_ERROR;

    public string $level = self::DEFAULT_LEVEL;

    public string $title = self::DEFAULT_TITLE;

    public function __construct(string $message = '', int $status_code = 502, array $data = [])
    {
        $this->data = $data;
        parent::__construct($message, $status_code);
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setLevel(string $value): self
    {
        $this->level = $value;

        return $this;
    }

    public function getLevel(): string
    {
        return $this->level;
    }
}
