<?php

use PHP\Projects\PerJobs\Model\Accounts\Employee;
use PHP\Projects\PerJobs\Model\Accounts\Employer;
use PHP\Projects\PerJobs\Model\CPF;
use PHP\Projects\PerJobs\Model\Jobs\Jobs;
use PHP\Projects\PerJobs\Model\Jobs\CompanyJobs;
use PHP\Projects\PerJobs\Service\NewPost;

require_once 'Autoload.php';


echo "====================";

$teste = new NewPost('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1);

var_dump($teste);
