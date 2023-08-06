<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\Project\Application\GetProjectUseCase;
use Src\BoundedContext\Project\Infrastructure\Repositories\EloquentProjectRepository;

final class GetProjectController
{
    private $repository;

    public function __construct(EloquentProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $ProjectId = (int)$request->id;

        $getProjectUseCase = new GetProjectUseCase($this->repository);
        $Project           = $getProjectUseCase->__invoke($ProjectId);

        return $Project;
    }
}
