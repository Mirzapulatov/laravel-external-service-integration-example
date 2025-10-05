<?php

namespace App\Modules\ExampleInternalService\Requests;

abstract class RequestAbstract implements RequestInterface
{
    protected const METHOD_GET = 'GET';
    protected const METHOD_POST = 'POST';
    protected const METHOD_PUT = 'PUT';
    protected const METHOD_DELETE = 'DELETE';

    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getEndpoint(): string
    {
        return '';
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getQuery(): array
    {
        return [];
    }

    public function getBody(): array
    {
        return [];
    }
}
