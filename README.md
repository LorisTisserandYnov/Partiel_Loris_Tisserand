Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?
La première méthode est d'utiliser une balise echo, la seconde méthode est d'utiliser une syntaxe NOWDOC.

Quelle est la différence entre include, include_once, require et require_once ?
si "include" inclu un autre fichier sur lesquels il peut avoir des erreurs, il n'envera qu'une notification.
"include_once" n'everra les information de cette autre fichier qu'une seule fois même si on écrit "include_once".
"require" lui est plus tatillons, il bloquera toute la page si toutes les condition ne sont pas remplit, ou si il y a des erreurs de syntaxe.
"require_once" n'everra les information de cette autre fichier qu'une seule fois même si on écrit "require_once".

Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?
"$_SESSION" si il n'est pas présent il est impossible d'utiliser les sessions.

Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO ?
DSN sont les initial de Data Source Name, c'est une chaine de caractères qui contient la description de la base sur laquelle on souhaite se connecter.

Quelle est la différence entre une requête préparée et une requête non préparée ?
il me semble que la différence est que la requête non préparée est plus exploitable pour un pirate pour executer des commandes.

Quelle est la différence entre la méthode GET et la méthode POST ?
GET est utiliser pour obtenir des données, et POST pour transmettre des données.

11h28: ne pouvant accéder ni a mes BDD ni à mon localhost pour des raison qui me dépasse, je suis au regret que tout le codde que vous verrais sera fait de tête, il est très probable que rien ne marche et je m'en excuse d'avance.

11h55: ne pouvant toujours pas accéder au ressource il m'est dificile de crée des rôles.

12h07: pour le reste de ce partiel je ne peut malheuresement pas continué, je suis consient que le problème viens de moi, je sais que vous vouliez que nous vous interropons pour vous poser des question mais je suis trop mal à l'aise pour avoir ce genre d'idée, veulliez accepter mes plus plates excuses.

12h16: pour le localhost je tape dans le terminal : '$ php -S localhost:8000', puis dans mon navigateur je tape 'locahost:8000' mais ça ne me renvois qu'une erreur 404.