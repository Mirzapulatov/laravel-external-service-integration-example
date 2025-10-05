<?php

namespace App\Modules\ExampleInternalService;

use App\Modules\ExampleInternalService\Requests\RequestAbstract;
use App\Modules\ExampleInternalService\Responses\Dto\ExampleResponseDto;

class ExampleInternalService
{
    public function __construct(private ExampleInternalServiceConnection $connection)
    {
    }

    /**
     * @throws Exceptions\ExampleInternalException
     */
    public function publishPost(RequestAbstract $request): ExampleResponseDto
    {
        $result = $this->connection->request($request);

        return ExampleResponseDto::fromArray($result);
    }
}
