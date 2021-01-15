<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115171118 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mariage (id INT AUTO_INCREMENT NOT NULL, personne_epoux_id INT NOT NULL, personne_epouse_id INT NOT NULL, date_mariage DATE NOT NULL, commune_mariage VARCHAR(255) NOT NULL, province_mariage VARCHAR(255) NOT NULL, colline_residence_epoux VARCHAR(255) NOT NULL, colline_residence_epouse VARCHAR(255) NOT NULL, zone_residence_epoux VARCHAR(255) NOT NULL, zone_residence_epouse VARCHAR(255) NOT NULL, commune_residence_epoux VARCHAR(255) NOT NULL, commune_residence_epouse VARCHAR(255) NOT NULL, province_residence_epoux VARCHAR(255) NOT NULL, province_residence_epouse VARCHAR(255) NOT NULL, occupation_epoux VARCHAR(255) NOT NULL, occupation_epouse VARCHAR(255) NOT NULL, numero_acte_mariage VARCHAR(255) DEFAULT NULL, numero_volume VARCHAR(255) DEFAULT NULL, nom_complet_pere VARCHAR(255) NOT NULL, nom_complet_pere_epoux VARCHAR(255) NOT NULL, nom_complet_mere_epoux VARCHAR(255) NOT NULL, nom_complet_pere_epouse VARCHAR(255) NOT NULL, nom_complet_mere_epouse VARCHAR(255) NOT NULL, nom_complet_temoin_epoux VARCHAR(255) NOT NULL, nom_complet_temoin_epouse VARCHAR(255) NOT NULL, adresse_temoin_epoux VARCHAR(255) NOT NULL, adresse_temoin_epouse VARCHAR(255) NOT NULL, profession_temoin_epoux VARCHAR(255) NOT NULL, profession_temoin_epouse VARCHAR(255) NOT NULL, photo_preuve VARCHAR(255) DEFAULT NULL, INDEX IDX_2FE8EC222D88E6B9 (personne_epoux_id), INDEX IDX_2FE8EC22574307B9 (personne_epouse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mariage ADD CONSTRAINT FK_2FE8EC222D88E6B9 FOREIGN KEY (personne_epoux_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE mariage ADD CONSTRAINT FK_2FE8EC22574307B9 FOREIGN KEY (personne_epouse_id) REFERENCES personne (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE mariage');
    }
}
