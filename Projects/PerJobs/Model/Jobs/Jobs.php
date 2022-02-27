<?php

namespace PHP\Projects\PerJobs\Model\Jobs;

class Jobs
{
    public array $jobs;

    public function __construct(string $jobs)
    {
        $this->jobs[] = $jobs;
    }

    public function jobsVerification(string $job): bool
    {
        if (array_search($job, $this->jobs)) {
            return true;
        } else {
            return false;
        }
    }
}
