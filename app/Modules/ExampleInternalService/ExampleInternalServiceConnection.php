<?php

namespace App\Modules\ExampleInternalService;

use App\Modules\ExampleInternalService\Exceptions\ExampleInternalException;
use App\Modules\ExampleInternalService\Requests\RequestInterface;
use GuzzleHttp\ClientInterface;

class ExampleInternalServiceConnection
{
    public function __construct(private ClientInterface $client)
    {
    }

    /**
     * @throws ExampleInternalException
     */
    public function request(RequestInterface $request): array
    {
        $response = $this->client->request($request->getMethod(), $request->getEndpoint(), [
           'headers' => $request->getHeaders(),
           'query' => $request->getQuery(),
           'json' => $request->getBody(),
        ]);

        if ($response->getStatusCode() >= 400) {
            throw new ExampleInternalException('Bad status code response', $response->getStatusCode());
        }

        $responseData = json_decode($response->getBody()->getContents(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ExampleInternalException('Fail parse bitrix response');
        }

        return $responseData;
    }
}
