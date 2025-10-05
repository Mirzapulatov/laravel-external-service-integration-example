<?php

namespace App\Modules\ExampleInternalService\Requests;

class ExampleRequest extends RequestAbstract
{
    public string $id;
    public string $title;
    public string $body;

    public function getMethod(): string
    {
        return self::METHOD_PUT;
    }

    public function getEndpoint(): string
    {
        return "/api/posts/{$this->id}";
    }

    public function getBody(): array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
