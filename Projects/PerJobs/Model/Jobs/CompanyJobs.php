<?php

namespace PHP\Projects\PerJobs\Model\Jobs;

class CompanyJobs
{
    protected Jobs $companyJobs;

    public function __construct(string $jobs)
    {
        $this->companyJobs = new Jobs($jobs);
    }
}
