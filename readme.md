# Handi Recrute

Handi intérim veut, notamment grâce à ce site, être une passerelle 
entre les entreprises et les travailleurs handicapés. 
Nous proposons un espace où les travailleurs handicapés pourront 
créer leurs compte, télécharger 
leurs informations (CV, lettres de motivations) et postuler à des 
offres d’emploi mis en ligne par nos employeurs adhérent ou par des 
partenaires. Un espace employeur permettra aux employeurs adhérents de 
créer leurs profil, de publier leurs offres d’emploi et d’avoir l'accès 
à la CVthèque. L'accès à un compte, la création d’un profil ainsi que 
postuler sont gratuits pour les candidats. L’employeur doit devenir 
adhérent de Handi Intérim et avoir un accès illimité à la CVthèque, 
pendant 3 mois.

## Charger la base de donnée sous Docker

La base de donnée et le mailCatcher est installé sous docker. Utilisé la commande
suivante afin de charger le container.

```bash
docker-compose up -d
```

## Charger les fixtures

Chargement des fixtures utilisateurs et jobs

```bash
symfony console doctrine:fixtures:load
```