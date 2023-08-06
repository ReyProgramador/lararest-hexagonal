<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Domain\Contracts;

use Src\BoundedContext\Project\Domain\Project;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmail;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmailVerifiedDate;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectId;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectName;

interface ProjectRepositoryContract
{
    public function find(ProjectId $id): ?Project;

    // public function findByCriteria(ProjectName $ProjectName, ProjectEmail $ProjectEmail): ?Project;

    // public function save(Project $Project): void;

    // public function update(ProjectId $ProjectId, Project $Project): void;

    // public function delete(ProjectId $id): void;
}
