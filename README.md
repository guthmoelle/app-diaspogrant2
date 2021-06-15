# app-diaspogrant


##  Procédure d'installation du code



1/ Download wampserver3.2.3 x64 exe for windows 10 

2/ Install wampserver

3/ Download app-diaspogrant in your local machine

	- Open commande line
	
	- Create Folder in repository
	
	- Enter in this Folder
	
	- Enter commande : git init
	
	- Enter commande : git clone https://github.com/guthmoelle/app-diaspogrant.git

4/ Import Database

	- Launch wampserver
	
	- Click on icon wampserver, and click on localhost link
	
	- Wampserver page open in browser 
	
	- Click on phpmyadmin, and click on "Exécuter" 
	
	- Click on "Nouvelle base de données"
	
	- Enter this database name "diaspogrant_dev" in textbox "Nom de la base de données"
	
	- And click on "Créer"
	
	- Click on "Importer"
	
	- Parcourir les fichier : click on "Parcourir" and selectione DBB.sql file
	  And click on "Exécuter"

5/ Launch project

	- In your terminal, go to your folder project
	- Enter this commande : php -S 127.0.0.1:8000 -t public
	
	- Example : c:\wamp64\www\App\app-diaspogrant>php -S 127.0.0.1:8000 -t public 


	- And
		- Go to : https://diaspogrant.vercel.app/
		- And click on "REJOIGNEZ-NOUS"

	- Or
		- On line Listening on http... , int terminal, copy this url
		- And colle the url on new onglet of browser



##	Procédure d'utilisation du projet





1/ Entreprises

	- Sur la Plateforme Diaspogrant, l'entreprise peut s'inscrit 
	  en allant sur la rubrique "Inscription Entreprises"

	- Une fois inscrit :

		- L'annonce sera visible sur la rubrique "Listes Entreprises"
		
		- L'entreprise sera en possession des identifiants du compte utilisateur
		  qui sera créer, afin de suivre les différentes demandes d'offre de financement
		  
		- Pour se connecter, il faudra aller sur la "Connexion Entreprise"


2/ Donateurs

	- Après avoir cliqué sur "REJOIGNEZ-NOUS" de la LandingPage, l'utilisateur accède à la Plateforme Diaspogrant

	- Sur la Plateforme Diaspogrant, l'utilisateur peut aller sur la rubrique "Listes Entreprises"
	  pour voir tous les entreprises en besoin de financement 

	- L'utilisateur peut voir les détails du projet de demande de financement de chaque 
	  entreprise et rentrer en contact avec l'entreprise pour enclencher la procédure de financement 
