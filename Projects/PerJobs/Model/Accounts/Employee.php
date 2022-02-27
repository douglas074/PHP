<?php

namespace PHP\Projects\PerJobs\Model\Accounts;

use PHP\Projects\PerJobs\Model\CPF;
use PHP\Projects\PerJobs\Model\Jobs\Jobs;

class Employee extends User
{
    protected CPF $cpf;
    protected Jobs $typejob;

    public function __construct(
        string $name,
        string $email,
        string $pass,
        int $age,
        CPF $cpf,
        Jobs $job
    ) {
        parent::__construct($name, $email, $pass, $age);
        $this->cpf = $cpf;
        $this->typejob = $job;
    }
}
