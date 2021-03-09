<?php

namespace App\DataFixtures;

use App\Entity\Job;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<15; $i++){
            $job = (new Job())
                ->setIntitule('Gestionnaire Post '.$i)
                ->setDescription("Nous recherchons pour notre client spécialiste de l'affacturage, un gestionnaire recouvrement BtoB. Vos missions :
                    - Relancer par téléphone, mails ou autre les sociétés acheteuses afin d'obtenir le paiement des factures
                    - Traiter les liens confiés, effectuer des actions de relance par téléphone / mails / autres afin de qualifier les factures
                    -Traiter les appels et courriers entrants
                    - Mise à jour des fiches interlocuteurs.
                    - Vérifier l'activité du client afin de poser les bonnes questions lors de la relance acheteur
                    - Analyser le comportement de l'acheteur (typologie) afin d'adapter son discours et prendre les bonnes décisions
                    - Détecter les prestations ou facturation non conformes. Informer le client du litige.
                    -Transmettre au département Juridique les créances détectées à risque, (acheteur en RJ/LJ ou fausse facture.)     
                    -Faire remonter les réclamations acheteurs /clients et aider à leurs résolutions.  ")
                ->setDateLimit(new \DateTime())
                ->setDepartement(34)
                ->setExperience(rand(0,5))
                ->setSalaire(rand(22000, 35000))
                ->setSecteurActivite('CDI')
                ->setVille('Montpellier')
            ;
            $manager->persist($job);
        }
        $manager->flush();
    }
}
