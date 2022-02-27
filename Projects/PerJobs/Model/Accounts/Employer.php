<?php

namespace PHP\Projects\PerJobs\Model\Accounts;

use PHP\Projects\PerJobs\Model\CPF;
use PHP\Projects\PerJobs\Model\Jobs\CompanyJobs;

class Employer extends User
{
    protected string $cnpj;
    protected CPF $cpf;
    protected bool $typeUser;
    protected CompanyJobs $companyJobs;

    public function __construct(
        string $name,
        string $email,
        string $pass,
        float $age,
        int $typeUser,
        ?CPF $aux,
        CompanyJobs $job
    ) {
        parent::__construct($name, $email, $pass, $age);

        if ($typeUser == 1) {
            $this->cnpj = $aux;
            $this->typeUser = $typeUser;
        } else {
            $this->cpf = $aux;
            $this->typeUser = $typeUser;
        }
        $this->companyJobs = $job;
    }
}
