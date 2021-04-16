<?php

class Person
{

    public string $name;
    public string $lastName;
    public int $age = 0;
    public ?string $address = '';
    public ?string $phone = '';


    public function __construct()
    {

        $this->setName(name: '');
        $this->lastName = ''; //
        $this->phone = '34544433';
    }

    public function getName(): string

    {

        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getlastName(): string

    {

        return $this->lastName;
    }

    public function setlastName(string $lastName): void
    {

        $this->lastName = $lastName;
    }

    public function getAge(): int
    {

        return $this->age = $age;
    }

    public function setAge(int $age): void
    {

        $this->age = $age;
    }

    public function getAddress(): ?string

    {
        return $this->address;
    }
    public function setAddress(string $Address): void
    {

        return $this->address = $address;
    }

    public function getPhone(): ?string
    {

        return $this->phone;
    }

    public function setPhone(?string $Phone): void
    {
        $this->Phone = $Phone;
    }
}

$person = new Person();
echo $person->getName();
