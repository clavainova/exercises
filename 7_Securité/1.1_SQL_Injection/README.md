# SECURITE. Injection SQL

## Préparations

Récupérez et installez le site à protéger :

- le dossier [site](site) contient les fichiers du site, à télécharger sur votre serveur
- le script [security.sql](security.sql) vous permet de créer la base de données et son jeu de test
- renseignez les infos de connexion dans [site/config/config.php](site/config/config.php).

## Hackez le site !

La page index.html contient une page d'accueil d'un site classique contenant un formulaire de recherche.

Effectuez les manipulations du document [manipulations.pdf](manipulations.pdf) afin de comprendre la logique des hackeurs pour tenter détourner un accès à votre base de données ...

## Protégez le site :-)

Etudiez la manière dont est construite la requête en base de données et proposez vos solutions pour corriger cette faille d'injection SQL (il en existe plusieurs ...)

On en parle ?