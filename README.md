Application de gestion des contacts YouContact
==============================================

*Assigné   Tayeb SOUINI

>Contexte du projet

Vous êtes un fullstack développeur chez l'entreprise YouContact et votre mission est la création d'une application web pour la gestion des contacts.


Vous devez créer un site Web où les utilisateurs peuvent créer un compte, puis se connecter pour gérer une liste privée de contacts. Le site Web utilisera des bases de données pour stocker les données de connexion des utilisateurs, ainsi que pour stocker les contacts de chaque utilisateur.

**Les pages:

La page d'accueil :
-------------------
​

une barre de navigation horizontale en haut de la page, avec le titre du site Web à gauche et le bouton de connexion à droite. Après une connexion réussie, le bouton de connexion est remplacé par le nom d'utilisateur, qui renvoie à la page Profil, à la page Contacts et à la page Déconnexion. Le contenu est un message avec deux liens d'appel à l'action : S'inscrire et Se connecter.
​

Page de connexion :
-------------------
​

La connexion est basée sur le nom d'utilisateur et le mot de passe, le contenu est donc un simple formulaire de connexion, avec des champs pour le nom d'utilisateur et le mot de passe, et un bouton de connexion. La dernière phrase est un lien d'appel à l'action "S'inscrire". Après s'être connecté, l'utilisateur est redirigé vers la page Profil.

​

Page d'inscription :
--------------------
​

Le contenu est le formulaire d'inscription, avec les entrées suivantes : Nom d'utilisateur Mot de passe Vérification du mot de passe Le nom d'utilisateur doit comporter au moins trois caractères et être uniquement alphanumérique. Le mot de passe doit comporter au moins six caractères et doit être vérifié par un deuxième mot de passe lors de l'inscription. Toute erreur de formulaire doit être affichée sous l'entrée d'où proviennent les données, Les comptes enregistrés doivent également conserver la date d'inscription. Après s'être inscrit, l'utilisateur est redirigé vers la page Profil.

​

Page profil :
-------------
​

Cette page contiendra une salutation, les données du profil et l'heure de connexion à la session. Alors que le nom d'utilisateur et la date d'inscription sont stockés dans la base de données, l'heure de connexion à la session peut être stockée dans la session actuelle.

​

Page Contacts :
---------------
​

Le contenu est divisé en deux : la liste des contacts et le formulaire d'ajout/modification de contacts.

La liste des contacts énumère les enregistrements de contact, chaque enregistrement ayant les liens Modifier et Supprimer. Si la liste est vide, affichez le message approprié au lieu de rendre la table vide.

Le formulaire de contact aura les noms de champs suivants :

Nom : obligatoire ; au moins deux caractères Téléphone : facultatif ; ne doit autoriser que +-() 1234567890 E-mail : obligatoire ; doit être validé Adresse : facultative ; 255 caractères maximum Les messages d'erreur relatifs aux données non valides doivent être placés sous les entrées d'où proviennent les données.

En accédant à la page Contacts, le formulaire est prêt à être utilisé pour créer de nouveaux contacts. Dès que l'on clique sur le bouton "Modifier" d'un contact, les informations relatives au contact sont complétées dans le formulaire ; l'envoi du formulaire met à jour le contact existant.

Lorsqu'un utilisateur authentifié accède à la page d'accueil, à la page de connexion ou à la page d'inscription, il est redirigé vers la page Profil.

Le titre de la page par défaut est Liste des contacts.