Objectifs du Workshop :

Comprendre les principes fondamentaux de la programmation orientée objet (POO) en PHP.

Apprendre à encapsuler les données à l'aide de classes et d'objets.

Découvrir l'héritage pour réutiliser le code et étendre les fonctionnalités d'une classe.

Concepts de Base de la Programmation Orientée Objet
Classe et Objet :

Une classe est un plan (ou un modèle) pour créer des objets. Elle définit des attributs (propriétés) et des méthodes (fonctions) que les objets peuvent utiliser.

Un objet est une instance d'une classe, créée à partir de ce plan.

Encapsulation :

L'encapsulation consiste à restreindre l'accès direct aux attributs d'une classe et à les protéger en utilisant des modificateurs d'accès (public, privé, protégé).

Elle permet de cacher l'implémentation interne de la classe et de ne montrer que ce qui est nécessaire, améliorant ainsi la sécurité et la maintenabilité du code.

Héritage :

L'héritage permet de créer de nouvelles classes basées sur des classes existantes, permettant ainsi de réutiliser et étendre le code.

Une classe enfant hérite des propriétés et des méthodes de la classe parente, tout en ayant la possibilité de les modifier ou d’ajouter de nouvelles fonctionnalités.


Contexte du Projet
Après avoir appris les bases du PHP procédural, vous allez maintenant découvrir comment utiliser la programmation orientée objet (POO) pour améliorer votre code. Vous allez travailler avec un système simple qui représente des utilisateurs d'un système médical (patients et médecins).

Exemple de Classe Utilisateur
Voici un exemple de ce que vous pourriez développer pendant le workshop :

Classe Utilisateur :

Propriétés : nom, prenom, type_utilisateur.

Méthodes : afficherNomComplet(), changerNom(), changerPrenom().

Classe Patient et Medecin (héritées de Utilisateur) :

La classe Patient pourrait ajouter des propriétés spécifiques telles que rendez_vous et des méthodes comme prendreRendezVous().

La classe Medecin pourrait ajouter des propriétés comme specialite et des méthodes comme consulterPatient().


Plan du Workshop
Introduction à la POO : Comprendre les principes fondamentaux des classes et des objets en PHP.

Encapsulation : Créer des classes et utiliser des modificateurs d'accès pour gérer les propriétés et méthodes de manière sécurisée.

Héritage : Créer des classes enfants qui héritent des propriétés et méthodes d'une classe parente.

Exercice Pratique : Implémenter des classes simples comme Utilisateur, Patient, Medecin et tester leur interactivité.


coworker : Abderrahmane Ahouari