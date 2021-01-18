#Symfony CV Application
The "Symfony CV Application" is a reference application created to show how to develop applications following the Symfony Best Practices.

###Présentation
Dans cette application les fonctionnalités seront celle d'un CV en ligne classique, avec un formulaire de contact.
###Requirements
PHP 7.2.9 or higher;
PDO-SQLite PHP extension enabled;
and the usual Symfony application requirements.
###Installation
Téléchergez Symfony pour installer le symfony binary sur votre ordinateur et lance cette commande:

$ symfony new --demo my_project
Alternativement, tu peux utiliser composer:

$ composer create-project symfony/symfony-demo my_project
###Usage
Il n'y a pas besoin de configurer quelque chose pour lancer l'application. Si vous avez installé Symfony binary, lancez cette commande:

$ cd my_project/
$ symfony serve
Vous pouvez accèdez à cette application sur l'url (https://localhost:8000 by default).


###Tests
Executez cette commande pour lancer les tests:

$ cd my_project/
$ ./bin/phpunit