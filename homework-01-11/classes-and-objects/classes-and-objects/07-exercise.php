<?php

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(string $name, string $sex) //string $mother, string $father
    {
        $this->name = $name;
        $this->sex = $sex;
//        $this->mother = $mother;
//        $this->father = $father;
    }

    public function getName (): string
    {
        return $this->name;
    }

    public function getSex (): string
    {
        return $this->sex;
    }

    public function getMother (): string
    {
        return $this->mother;
    }

    public function getFather (): string
    {
        return $this->father;
    }
}

$dogTest = [
    new Dog('Max', 'male'),
    new Dog('Rocky', 'male'),
    new Dog('Sparky', 'male'),
    new Dog('Buster', 'male'),
    new Dog('Sam', 'male'),
    new Dog('Lady', 'female'),
    new Dog('Molly', 'female'),
    new Dog('Coco', 'female')
];

