# Pierre, Paul et... Jacquot s'organisent !

## La fonction include

La fonction Php <i>include</i> permet d'inclure le code d'un fichier Php dans un autre.<br>
Le fichier à inclure peut contenir du code Php et/ou du code Html.<br> 
Voyez comment cela fonctionne avec les fichiers index.php, titre.php et fonctions.php.<br>
Remarque : include 'nom_du_fichier.php' renverra une erreur de type warning (ne bloquant pas le script) si le fichier nom_du_fichier.php n'existe pas.<br>
Autre remarque : il existe une variante include_once qui fait la même chose mais ne peut charger qu'une seule fois le même fichier (contrairement à include).<br>

## A vous de jouer maintenant
Ici, vous allez utiliser la fonction include pour séparer le code d'une page Html en plusieurs fichiers.<br>

### DRY Jacquot !
Jacques (dit Jacquot) présente la maquette de son nouveau site à son équipe (composée de Pierre et de Paul). Le code se trouve dans le dossier ppj.<br>
Seules les pages d'accueil (index.html), de contact (contact.html) et A propos (about.html) ont été créées.<br>
Ses collègues approuvent mais quelque chose les dérange un peu dans l'architecture du site : ils trouvent qu'une grande partie du code est répétée.<br>
Si on doit modifier le moindre élément, il faut passer sur toutes les pages. De plus, le travail étant réparti sur les membres de l'équipe, il faut avertir tout le monde lors de modifications, même mineures.<br>
Pierre ;-) prend les choses en main et décide de réorganiser le code de manière à supprimer totalement le code dupliqué.<br>
Il souhaite notamment :<br>
<ul>
    <li>Renommer chaque fichier .html en .php.</li>
    <li>Diviser les différentes parties du thème en fichiers php (pour inclure chaque partie dans les pages correspondantes). Identifier toutes les parties communes à toutes les pages. On peut par exemple créer un fichier menu.php contenant le code de la balise nav.</li>
    <li>Ranger tout cela dans un dossier template (pourquoi pas avec des sous-dossiers pour chaque page...).</li>
    <li>Créer une variable pour le chemin du dossier template (ben oui, si on le renomme, il faut changer le chemin de tous les liens sinon).</li>
    <li>Créer une variable pour le chemin du dossier images.</li>
    <li>Mettre le css à sa place.</li>
    <li>Créer une variable php pour le chemin du fichier css (ça aussi, ça peut bouger !).</li>
</ul>
Conseil : vous pouvez placer toutes ces variables dans un fichier config/config.php à inclure dans chaque page. Ces variables sont en fait des constantes que vous pouvez définir avec la fonction <i>define</i>.<br>

### ça bouge (eh oui !)
L'équipe décide de renommer le dossier images en img. Félicitez-vous d'avoir créé une variable et apportez LA modification nécessaire.<br>
Le titre (title) doit être modifié en "Pierre, Paul et Jacquot". Placez-le dans une variable et adaptez le code en conséquence.<br>
Autre chose...<br>
Bien évidemment, il reste des pages à coder...<br>
Les liens de menu existent déjà.<br>
Pour la page "Nos produits" :<br>
<ul>
    <li>Sur la moitié de la largeur de la page (voir page de contact), placez 3 rangées de 3 produits (image+texte en dessous). Vous pouvez utiliser les images existantes. Attention, il faut que cela reste responsive !</li>
</ul>
Pour la page "Blog" :<br>
<ul>
    <li>Sur la moitié de la largeur de la page (voir page de contact again), placez 3 articles avec titre (h1) + texte (p => lorem ipsum).</li>
</ul>
Utilisez la structure de votre application pour ne pas vous répéter.<br>
L'équipe décide que ce serait mieux si l'image du logo était circulaire (comme celle de la page d'accueil)...vous souriez !<br>
Il faut renommer le lien de menu "About" en "A propos".<br>
Listez les opérations à effectuer pour créer une nouvelle page.<br>
On décide de créer un dossier "assets" qui contiendra les dossiers "css" et "images". Comment gérez-vous ça ?<br>
Votre équipe se réjouit car elle tient là une architecture qu'elle va pouvoir réutiliser...vous allez boire un café...

### Des questions, des remarques ?
On en parle...