<?php

declare(strict_types=1);

namespace Src\BoundedContext\Project\Domain\ValueObjects;

final class ProjectName
{
    private $value;

    public function __construct(string $name)
    {
        $this->value = $name;
    }

    public function value(): string
    {
        return $this->value;
    }
}
