<?php

namespace App\Modules\ExampleInternalService\Requests;

interface RequestInterface
{
    public function getMethod(): string;

    public function getEndpoint(): string;

    public function getHeaders(): array;

    public function getQuery(): array;

    public function getBody(): array;
}
