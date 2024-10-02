# Projet Site Hôtel :

## 1 - User Stories - Définir des critères d’acceptations définissant ce que la fonctionnalité doit accomplir :

### US1 : Gérer les établissements

En tant qu'administrateur, je veux pouvoir gérer les établissements (créer, modifier, supprimer) pour maintenir à jour la liste des hôtels.
Description : L'administrateur est un employé du groupe Hôtel Clair de Lune chargé du maintien de l'application web. Chaque établissement comporte un nom, une ville, une adresse, et une description.

### US2 : Gérer les gérants.

En tant qu'administrateur, je veux pouvoir gérer les gérants des hôtels (créer, modifier, supprimer) afin de leur permettre de gérer leurs établissements.
Description : Un gérant est responsable de son propre établissement. Chaque gérant a un nom, un prénom, une adresse e-mail et un mot de passe sécurisé.

### US3 : Gérer les suites

En tant que gérant, je veux pouvoir gérer les suites de mon hôtel (créer, modifier, supprimer) pour permettre leur réservation par les clients.
Description: Chaque suite comprend un titre, une image principale, une description, un prix et une galerie d'images. Le prix d'une suite est fixe, quelle que soit la période de réservation.

### US4 : Consulter les établissements et les suites

En tant que client, je veux pouvoir consulter les établissements et les suites disponibles afin de réserver une chambre.
Description : Tout visiteur du site peut accéder à une page listant les établissements du groupe Hôtel Clair de Lune. Chaque établissement possède une page dédiée où sont listées les suites avec leurs informations détaillées.

### US5 : Réserver une suite

En tant que client, je veux pouvoir réserver une suite en ligne en sélectionnant l'établissement, la suite et les dates de séjour.
Description : La page de réservation permet aux clients de sélectionner un établissement, une suite, une date de début et une date de fin de séjour. Le client peut savoir si la suite est disponible ou non pour les dates sélectionnées. Si le client souhaite finaliser la réservation, il doit créer un compte ou se connecter avec un nom, un prénom, une adresse e-mail et un mot de passe sécurisé.

### US6 : Voir et annuler ses réservations

En tant que client, je veux pouvoir consulter mes réservations et annuler celles qui respectent les conditions d’annulation.
Description : Une fois connecté, un client peut consulter ses réservations en cours ou passées. Il peut également annuler une réservation, à condition que l'annulation soit faite au moins 3 jours avant la date du séjour.

### US7 : Contacter un établissement

En tant que visiteur, je veux pouvoir contacter un établissement pour poser une question ou commander un service supplémentaire.
Description : Un formulaire de contact est disponible pour permettre aux visiteurs ou clients de poser des questions ou demander des services supplémentaires. Les sujets disponibles incluent : "Je souhaite poser une réclamation", "Je souhaite commander un service supplémentaire", "Je souhaite en savoir plus sur une suite", "J’ai un souci avec cette application". Les messages sont directement envoyés à l'administrateur.

## 2 - Classement des user stories par priorité :

US1/US2/US3 : Sont liées au crud donc à part la partie dashboard qui servira de support visuel, les fonctionnalités seront déjà réalisées en même temps que le crud

US4 : Pareil, cette fonctionnalité sera associée aux routes show et index des établissements et suites

US7 : Formulaire de contact basique 

US5/US6 : Sont liés à la table de jointure réservation (à vérifier si il s’agit bien d’une table de jointure) entre user et suite

## 3 – Wireframe

https://www.figma.com/design/nVMrtK93MSkj830CX2hEzN/H%C3%B4tel-clair-de-lune?node-id=0-1&t=0Fog8ARZBQR6qdse-1
