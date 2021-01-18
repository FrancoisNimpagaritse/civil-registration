<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115165130 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE deces (id INT AUTO_INCREMENT NOT NULL, personne_id INT NOT NULL, date_deces DATE NOT NULL, lieu_deces VARCHAR(255) NOT NULL, date_enregistrement_deces DATE NOT NULL, cause_deces VARCHAR(255) NOT NULL, nom_complet_demandeur VARCHAR(255) NOT NULL, adresse_demandeur VARCHAR(255) DEFAULT NULL, phone_demandeur VARCHAR(255) DEFAULT NULL, copie_certificat_deces VARCHAR(255) DEFAULT NULL, numero_acte_deces VARCHAR(255) DEFAULT NULL, numero_volume VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_3D7FEBBCA21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE deces ADD CONSTRAINT FK_3D7FEBBCA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE deces');
    }
}
