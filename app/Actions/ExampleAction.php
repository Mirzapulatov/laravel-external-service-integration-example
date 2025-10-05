<?php
declare(strict_types=1);

namespace App\Actions;

use App\Modules\ExampleInternalService\ExampleInternalService;
use App\Modules\ExampleInternalService\Requests\ExampleRequest;

class ExampleAction
{
    public function __construct(private ExampleInternalService $internalService)
    {
    }

    public function execute()
    {
        $request = new ExampleRequest();
        $request->id = $data['id'];
        $request->title = $data['title'];
        $request->body = $data['body'];
        $result = $this->internalService->publishPost($request);
        ...
    }
}
