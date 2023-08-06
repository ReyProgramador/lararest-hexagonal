<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Application;

use Src\BoundedContext\Project\Domain\Contracts\ProjectRepositoryContract;
use Src\BoundedContext\Project\Domain\Project;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectId;

final class GetProjectUseCase
{
    private $repository;

    public function __construct(ProjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $ProjectId): ?Project
    {
        $id = new ProjectId($ProjectId);

        $Project = $this->repository->find($id);

        return $Project;
    }
}
