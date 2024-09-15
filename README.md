   # task1 

 ## Technologies
  <ul>
    <li>PHP 8.2 / 8.3</li>
    <li>phpunit/phpunit 10</li>
  </ul>

 ## Structure the script:

    task1/
    ├── src/
    │   ├── Animal.php
    │   ├── Carnivore.php
    │   ├── Herbivore.php
    │   ├── Omnivore.php
    │   ├── HasFur.php
    │   ├── Tiger.php
    │   ├── Elephant.php
    │   ├── Fox.php
    │   ├── Rabbit.php
    │   └── Zoo.php  
    ├── tests/
    │   └── ZooTest.php
    ├── public/
    │   └── index.php
    ├── composer.json
    └── vendor/

 ## Run script by cli and browser:

    $ composer dump-autoload
    $ php public/index.php

    and browser: 

    localhost:<path-to-script>/task1/public/

 ## Run tests:

    install tests:
    composer require --dev phpunit/phpunit ^10

    run:
    ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ZooTest.php


   # task2

1. SQL query creating schema (Zapytanie SQL tworzące schemat):

    -- Tabela autorów
    CREATE TABLE autorzy (
        id SERIAL PRIMARY KEY,
        imie VARCHAR(100) NOT NULL,
        nazwisko VARCHAR(100) NOT NULL
    );

    -- Tabela książek
    CREATE TABLE ksiazki (
        id SERIAL PRIMARY KEY,
        tytul VARCHAR(255) NOT NULL,
        rok_publikacji INT CHECK (rok_publikacji > 0),
        isbn VARCHAR(13) UNIQUE NOT NULL,
        autor_id INT REFERENCES autorzy(id) ON DELETE CASCADE
    );

    -- Tabela recenzji
    CREATE TABLE recenzje (
        id SERIAL PRIMARY KEY,
        ocena INT CHECK (ocena BETWEEN 1 AND 10) NOT NULL,
        tresc TEXT,
        ksiazka_id INT REFERENCES ksiazki(id) ON DELETE CASCADE
    );


2. A query that returns the names and surnames of authors along with the number of books they have written
    (Zapytanie zwracające imiona i nazwiska autorów wraz z liczbą napisanych przez nich książek)

    SELECT a.imie, a.nazwisko, COUNT(k.id) AS liczba_ksiazek
    FROM autorzy a
    LEFT JOIN ksiazki k ON a.id = k.autor_id
    GROUP BY a.id, a.imie, a.nazwisko
    ORDER BY liczba_ksiazek DESC;


3. A query that creates a perspective (view) containing 5 authors whose average ratings of all books are the highest
    (Zapytanie tworzące perspektywę (widok) zawierający 5-ciu autorów, których średnia ocen wszystkich książek jest najwyższa)

    CREATE VIEW top_autorzy AS
    SELECT a.imie, a.nazwisko, AVG(r.ocena) AS srednia_ocen
    FROM autorzy a
    JOIN ksiazki k ON a.id = k.autor_id
    JOIN recenzje r ON k.id = r.ksiazka_id
    GROUP BY a.id, a.imie, a.nazwisko
    ORDER BY srednia_ocen DESC
    LIMIT 5;
