<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Infrastructure\Repositories;

use App\Models\Project as EloquentProjectModel;
use Src\BoundedContext\Project\Domain\Contracts\ProjectRepositoryContract;
use Src\BoundedContext\Project\Domain\Project;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmail;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmailVerifiedDate;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectId;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectName;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectPassword;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectRememberToken;

final class EloquentProjectRepository implements ProjectRepositoryContract
{
    private $eloquentProjectModel;

    public function __construct()
    {
        $this->eloquentProjectModel = new EloquentProjectModel;
    }

    public function find(ProjectId $id): ?Project
    {
        $Project = $this->eloquentProjectModel->findOrFail($id->value());

        print_r($Project);

        exit;

        // Return Domain Project model
        return new Project(
            new ProjectId($Project->clientCompanyName)           
        );

        // return new Project(
        //     new ProjectName($Project->name),
        //     new ProjectEmail($Project->email),
        //     new ProjectEmailVerifiedDate($Project->email_verified_at),
        //     new ProjectPassword($Project->password),
        //     new ProjectRememberToken($Project->remember_token)
        // );
    }

    // public function findByCriteria(ProjectName $name, ProjectEmail $email): ?Project
    // {
    //     $Project = $this->eloquentProjectModel
    //         ->where('name', $name->value())
    //         ->where('email', $email->value())
    //         ->firstOrFail();

    //     // Return Domain Project model
    //     return new Project(
    //         new ProjectName($Project->name),
    //         new ProjectEmail($Project->email),
    //         new ProjectEmailVerifiedDate($Project->email_verified_at),
    //         new ProjectPassword($Project->password),
    //         new ProjectRememberToken($Project->remember_token)
    //     );
    // }

    // public function save(Project $Project): void
    // {
    //     $newProject = $this->eloquentProjectModel;

    //     $data = [
    //         'name'              => $Project->name()->value(),
    //         'email'             => $Project->email()->value(),
    //         'email_verified_at' => $Project->emailVerifiedDate()->value(),
    //         'password'          => $Project->password()->value(),
    //         'remember_token'    => $Project->rememberToken()->value(),
    //     ];

    //     $newProject->create($data);
    // }

    // public function update(ProjectId $id, Project $Project): void
    // {
    //     $ProjectToUpdate = $this->eloquentProjectModel;

    //     $data = [
    //         'name'  => $Project->name()->value(),
    //         'email' => $Project->email()->value(),
    //     ];

    //     $ProjectToUpdate
    //         ->findOrFail($id->value())
    //         ->update($data);
    // }

    // public function delete(ProjectId $id): void
    // {
    //     $this->eloquentProjectModel
    //         ->findOrFail($id->value())
    //         ->delete();
    // }
}
