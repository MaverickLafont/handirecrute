<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309124047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Candidat & Recruteur herite from User';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat ADD email VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6AB5B471E7927C74 ON candidat (email)');
        $this->addSql('ALTER TABLE recruteur ADD email VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2BD3678CE7927C74 ON recruteur (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_6AB5B471E7927C74 ON candidat');
        $this->addSql('ALTER TABLE candidat DROP email, DROP roles, DROP password');
        $this->addSql('DROP INDEX UNIQ_2BD3678CE7927C74 ON recruteur');
        $this->addSql('ALTER TABLE recruteur DROP email, DROP roles, DROP password');
    }
}
