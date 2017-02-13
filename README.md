# Queen Attack with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/13/2017

#### By Sarah Leahy , Benjamin T. Seaver

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Benjamin T. Seaver

## License
* MIT

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - Queen class: coordinates properties, empty constructor and canAttack() methods.
* Phase 3 - Build Test cases and implement Queen methods
* Assumption: Assume Queen position of e4 see Algebraic notation
* See https://en.wikipedia.org/wiki/Algebraic_notation_(chess)

| Behavior - What does canAttack() return?          | Input    | Output  |
|---------------------------------------------------|----------|---------|
| Coordinates of opposing piece                     | h2       | F |
|                                                   | e8       | T |
|                                                   | a4       | T |
|                                                   | b7       | T |
|                                                   | c5       | F |
|                                                   | h1       | T |
|                                                   | c2       | T |
|                                                   | e6       | T |




* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5- Twig template with a a form that accepts a coordinates for the queen and opposing piece.
* Phase 6- Output if the queen can attack the piece entered.


* End specifications
