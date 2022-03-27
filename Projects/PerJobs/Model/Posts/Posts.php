<?php

namespace PHP\Projects\PerJobs\Model\Posts;

class Posts
{
    protected string $description;
    protected int $typeJob;
    protected string $warning;

    public function __construct(string $description, int $typeJob)
    {
        $this->verificationDescription($description);
        $this->typeJob = $typeJob;
    }

    public function __destruct()
    {
        $this->warning = "Post excluído.";
    }

    public function verificationDescription(string $description): bool
    {
        if (strlen($description) <= 30) {
            $this->warning = "Sua descrição é curta demais, por favor disserte mais...";
            return false;
        } else {
            $this->description = $description;
            return true;
        }
    }

    public function editDescription(string $description): bool
    {
        if ($description == $this->description) {
            $this->warning = "A nova descrição não pode ser igual a anterior...";
            return false;
        }

        if ($this->verificationDescription($description)) {
            $this->description = $description;
            return true;
        }
    }
}
