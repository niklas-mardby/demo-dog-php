<?php

// datadriven applikation om hundar, dvs info om hundar och kunna visa upp denna info

// lagra info om en hund, en klass Dog
// lagra info om alla hundar, dvs en array av Dog-objekt

// visa info om en Dog resp flera, visa info = output HTML, klass RenderDog
// =============================================================================

// DEL 1: Vår data och funktionalitet

class Dog {
    // egenskap = en variabel inne i ett objekt
    private $name = "";
    private $color = "";
    private $age = 0;

    // konstruktor
    function __construct(string $name, string $color, int $age) {
        $this->name = $name; // i JS this.name = name
        $this->color = $color;
        $this->age = $age;
    }

    // metod = funktion inne i objekt
    function getInfo(): string {
        return "Name: {$this->name}, Color: {$this->color}, Age: {$this->age}";
    }
}

class DogHotell {
    private $dogs = [];

    function __construct($dogs) {
        $this->dogs = $dogs;
    }

    function getDogs() {
        return $this->dogs;
    }
}

class RenderDog {

    function renderDogInfo(Dog $dog): string {
        return "<p>{$dog->getInfo()}</p>";
    }

}

// DEL 2: Vår app

//$testDog = new Dog("Pluto","orange", 12);
$myDogs = new DogHotell([
    new Dog("Pluto","orange", 12),
    new Dog("Pricken","svart-vit", 3),
    new Dog("Lady","beige", 5),
    new Dog("Fox","red", 4)
]);

$render = new RenderDog();

// DEL 3: Vår output = echo HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo-dog-php</title>
</head>
<body>
    
    <h1>My Dog</h1>
    <?php
        //echo "<p>Name: {$testDog->name} </p>";
        //echo "<p>Color: {$testDog->color} </p>";

        foreach($myDogs->getDogs() as $dog) {
            echo $render->renderDogInfo($dog);
        }
    ?>

</body>
</html>