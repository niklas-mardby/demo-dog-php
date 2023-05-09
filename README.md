# demo-dog-php

A demo of OOP in PHP for beginners with PHP and OOP (and a smidge of MVC).

Comments and assignments in swedish.

## Övningar

### 1. Lägg till breed

Alla hundar ska få en ras (eng breed). Uppdatera Dog-klassen så den lagrar en sträng breed per hund. Uppdatera konstruktorn samt getInfo. Uppdatera $myDogs = new DogHotell… så varje hund får en ras. Ngt mer som behöver uppdateras? Testkör och se att utskriften till HTML får med varje hunds ras.

### 2. Lägg till vikt

Alla hundar ska få en vikt. Uppdatera så att vi både lagrar och visar denna nya info. Vikt behöver vara ett decimaltal.

### 3. Lägg till höjd

Alla hundar ska få en höjd. Uppdatera så att vi både lagrar och visar denna nya info. Höjd behöver vara ett decimaltal. Kommentera att detta är mankhöjden i cm.

### 4. Lägg till fler hundar

Utöka din array av hundar med tre till. Visas alla när du öppnar sidan i webbläsaren? Visas all info om alla hunder, inklusive de nya breed, vikt och höjd?

### 5. Skriv ut alla hundnamn

Längst ner i body-taggen lägger vi till följande:

    <h1>&#128054; My Dogs by Name &#128054;</h1>
    <ul>
    <?php
        foreach($myDogs->getDogs() as $dog) {
            echo $render->renderDogName($dog);
        }
    ?>
    </ul>

Notera att vi här anropar en ny metod renderDogName och tanken är att denna metoden ska skriva ut en li-tagg med hundens namn. För att lyckas med detta behövs ytterligare en ny metod getName i Dog-klassen.

Skriv dessa nya metoder så att vi får en utskrift med bara hundarnas namn listade.
