<?php

namespace PHP\Projects\PerJobs\Service;

class NewPost
{
    protected string $description;
    protected int $typeJob;
    protected string $warning;

    public function __construct(string $description, int $typeJob)
    {
        $this->verificationDescription($description);
        $this->typeJob = $typeJob;
    }

    public function verificationDescription(string $description): void
    {
        if (strlen($description) <= 30) {
            $this->warning = "Sua descrição é curta demais, por favor disserte mais...";
        } else {
            $this->description = $description;
        }
    }
}
