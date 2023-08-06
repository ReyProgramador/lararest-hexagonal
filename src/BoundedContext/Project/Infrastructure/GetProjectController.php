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
        $userId = (int)$request->id;

        $getUserUseCase = new GetUserUseCase($this->repository);
        $user           = $getUserUseCase->__invoke($userId);

        return $user;
    }
}
