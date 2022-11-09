<?php

class Dog
{
    private string $name;
    private string $sex;

    public const MALE = 'male';
    public const FEMALE = 'female';

    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother = null, ?Dog $father = null) //string $mother, string $father
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName (): string
    {
        return $this->name;
    }

    public function getSex (): string
    {
        return $this->sex;
    }

    public function getMother (): ?Dog
    {
        return $this->mother;
    }

    public function getFather (): ?Dog
    {
        return $this->father;
    }

    public function sameMothers (Dog $dog): bool
    {
        if ($dog->getMother() === null || $this->getMother()) {
            return false;
        }
        return $dog->getMother()->getName() === $this->getMother()->getName();
    }
}

$sparky = new Dog('Sparky', Dog::MALE);
$sam = new Dog('Sam', Dog::MALE);
$lady = new Dog('Lady', Dog::FEMALE);
$molly = new Dog('Molly', Dog::FEMALE);
$buster = new Dog('Buster', Dog::MALE, $lady, $sparky);
$rocky = new Dog('Rocky', Dog::MALE, $molly, $buster);
$max = new Dog('Max', Dog::MALE, $lady, $rocky);
$coco = new Dog('Coco', Dog::FEMALE, $molly, $sam);

$dogs = [
    $sparky,
    $sam,
    $lady,
    $molly,
    $max,
    $coco,
    $rocky,
    $buster,
];

foreach ($dogs as $dog) {
    echo "{$dog->getName()}, {$dog->getSex()}";
    echo PHP_EOL;

    if ($dog->getMother() !== null || $dog->getFather() !== null) {
        echo "{$dog->getName()} has {$dog->getMother()->getName()} as mother, and {$dog->getFather()->getName()} as father." . PHP_EOL;
    }
}

