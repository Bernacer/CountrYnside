CountrYnside
============
Projet agile


telecharger git pour windows : https://windows.github.com/

Creer un compte sur git et se logger sur l'application 

ouvrir le git shell, se placer dans le dossier ( pour initier un projet ): 

git init // initialiser le projet pour generer le /.git
git add --all // prendre en compte tout les fichier si non creer un fichier nomme ".gitignore" et mettre dedans les fichier.ext a ignorer 
git remote add origin https://github.com/Bernacer/CountrYnside // ajouter son suivi au depot
git commit -a -m "commentaire" // commit en local
git pull origin master // recupere ( synchronise ) le projet avec le depot
git push origin master// commit sur le depot


- Pour recuperer le projet :

vous placer la ou vous voulez le copier : 

git clone https://github.com/Bernacer/CountrYnside

- Pour commit :
git commit -a -m "commentaire" // local
git pull // pour recuperer ce qui a ete changer et merge au cas ou il y'a eu modification du meme fichier
git push pour envoyer au depot




======================================

Avec l'interface graphique pour recuperer :
Add repository -> clone
ajouter le chemin du depot  : https://github.com/Bernacer/CountrYnside


Pour commit, il y'aura "Uncommited changes" en haut a gauche si il y'a une modification
on ajoute un commentaire et on commit

pour le mettre sur le depot -> bouton sync 
