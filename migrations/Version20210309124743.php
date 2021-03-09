<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309124743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Ajout jobs';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, intitule VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, secteur_activite VARCHAR(255) NOT NULL, experience INT NOT NULL, salaire DOUBLE PRECISION DEFAULT NULL, departement INT NOT NULL, ville VARCHAR(255) NOT NULL, date_limit DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE job');
    }
}
