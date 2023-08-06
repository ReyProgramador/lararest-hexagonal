<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Domain;

use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmail;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectEmailVerifiedDate;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectName;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectPassword;
use Src\BoundedContext\Project\Domain\ValueObjects\ProjectRememberToken;

final class Project
{
    private $name;
    private $email;
    private $emailVerifiedDate;
    private $password;
    private $rememberToken;

    public function __construct(
        ProjectName $name,
        ProjectEmail $email,
        ProjectEmailVerifiedDate $emailVerifiedDate,
        ProjectPassword $password,
        ProjectRememberToken $rememberToken
    )
    {
        $this->name              = $name;
        $this->email             = $email;
        $this->emailVerifiedDate = $emailVerifiedDate;
        $this->password          = $password;
        $this->rememberToken     = $rememberToken;
    }

    public function name(): ProjectName
    {
        return $this->name;
    }

    public function email(): ProjectEmail
    {
        return $this->email;
    }

    public function emailVerifiedDate(): ProjectEmailVerifiedDate
    {
        return $this->emailVerifiedDate;
    }

    public function password(): ProjectPassword
    {
        return $this->password;
    }

    public function rememberToken(): ProjectRememberToken
    {
        return $this->rememberToken;
    }

    public static function create(
        ProjectName $name,
        ProjectEmail $email,
        ProjectEmailVerifiedDate $emailVerifiedDate,
        ProjectPassword $password,
        ProjectRememberToken $rememberToken
    ): Project
    {
        $Project = new self($name, $email, $emailVerifiedDate, $password, $rememberToken);

        return $Project;
    }
}
