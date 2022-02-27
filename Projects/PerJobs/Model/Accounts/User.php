<?php

namespace PHP\Projects\PerJobs\Model\Accounts;

class User
{
    protected string $name;
    protected string $email;
    protected string $pass;
    protected int $age;
    protected bool $typeUser;
    protected string $warning;

    public function __construct(string $name, string $email, string $pass, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;

        if ($this->passVerification($pass)) {
            $this->pass = $pass;
        } else {
            $this->warning = "erro ao criar senha";
        }
    }

    public function getNome(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function changeName(string $name): void
    {
        $this->name = $name;
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
    }

    public function changeAge(int $age): void
    {
        $this->age = $age;
    }

    public function changePass(string $pass): ?string
    {
        if ($this->pass == $pass) {
            return "A nova senha não pode ser igual a antiga";
        }
        if ($this->passVerification($pass) == true) {
            $this->pass = $pass;
        }
    }

    public function passVerification(string $pass): bool
    {
        if (
            preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $pass)
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function nameVerification(string $name): void
    {
        if (strlen($name) < 6) {
            echo "Seu nome é muito curto, acredito que não seja esse o verdadeiro....";
        } else {
            $this->name = ucwords($name);
        }
    }
}
