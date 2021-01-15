<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210114232926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE colline (id INT AUTO_INCREMENT NOT NULL, zone_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_7202C52F9F2C3FAB (zone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, province_id INT NOT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(20) DEFAULT NULL, INDEX IDX_E2E2D1EEE946114A (province_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, date_demande DATE NOT NULL, lieu_demande VARCHAR(255) NOT NULL, frais_total_demande DOUBLE PRECISION DEFAULT NULL, numero_recu_paiement VARCHAR(255) DEFAULT NULL, status_demande VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_demande (id INT AUTO_INCREMENT NOT NULL, demande_id INT NOT NULL, document_id INT NOT NULL, quantite INT NOT NULL, frais_unitaire DOUBLE PRECISION NOT NULL, INDEX IDX_415B577080E95E18 (demande_id), INDEX IDX_415B5770C33F7837 (document_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, frais_unitaire DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE naissance (id INT AUTO_INCREMENT NOT NULL, personne_id INT NOT NULL, date_naissance DATE NOT NULL, lieu_naissance VARCHAR(255) NOT NULL, colline_naissance VARCHAR(255) NOT NULL, zone_naissance VARCHAR(255) NOT NULL, commune_naissance VARCHAR(255) NOT NULL, province_naissance VARCHAR(255) NOT NULL, pays_naissance VARCHAR(255) NOT NULL, date_inscription DATE NOT NULL, adresse_pere VARCHAR(255) DEFAULT NULL, profession_mere VARCHAR(255) NOT NULL, adresse_mere VARCHAR(255) NOT NULL, numero_acte_naissance VARCHAR(255) NOT NULL, numero_volume VARCHAR(255) NOT NULL, nom_complet_temoin_un VARCHAR(255) NOT NULL, adresse_temoin_un VARCHAR(255) NOT NULL, profession_temoin_un VARCHAR(255) NOT NULL, nom_complet_temoin_deux VARCHAR(255) NOT NULL, adresse_temoin_deux VARCHAR(255) NOT NULL, profession_temoin_deux VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F1D8D904A21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, pere_id INT DEFAULT NULL, mere_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, naissance_date VARCHAR(255) NOT NULL, date_naissance DATE DEFAULT NULL, colline_naissance VARCHAR(255) DEFAULT NULL, zone_naissance VARCHAR(255) DEFAULT NULL, commune_naissance VARCHAR(255) DEFAULT NULL, province_naissance VARCHAR(255) DEFAULT NULL, pays_naissance VARCHAR(255) DEFAULT NULL, status_vital VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, colline_residence VARCHAR(255) NOT NULL, zone_residence VARCHAR(255) NOT NULL, commune_residence VARCHAR(255) NOT NULL, province_residence VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, numero_carte_nationale_identite VARCHAR(255) DEFAULT NULL, prefession VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, pin VARCHAR(255) DEFAULT NULL, INDEX IDX_FCEC9EF3FD73900 (pere_id), INDEX IDX_FCEC9EF39DEC40E (mere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE province (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zone (id INT AUTO_INCREMENT NOT NULL, commune_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_A0EBC007131A4F72 (commune_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE colline ADD CONSTRAINT FK_7202C52F9F2C3FAB FOREIGN KEY (zone_id) REFERENCES zone (id)');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EEE946114A FOREIGN KEY (province_id) REFERENCES province (id)');
        $this->addSql('ALTER TABLE detail_demande ADD CONSTRAINT FK_415B577080E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE detail_demande ADD CONSTRAINT FK_415B5770C33F7837 FOREIGN KEY (document_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE naissance ADD CONSTRAINT FK_F1D8D904A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF3FD73900 FOREIGN KEY (pere_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF39DEC40E FOREIGN KEY (mere_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE zone ADD CONSTRAINT FK_A0EBC007131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zone DROP FOREIGN KEY FK_A0EBC007131A4F72');
        $this->addSql('ALTER TABLE detail_demande DROP FOREIGN KEY FK_415B577080E95E18');
        $this->addSql('ALTER TABLE detail_demande DROP FOREIGN KEY FK_415B5770C33F7837');
        $this->addSql('ALTER TABLE naissance DROP FOREIGN KEY FK_F1D8D904A21BD112');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF3FD73900');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF39DEC40E');
        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EEE946114A');
        $this->addSql('ALTER TABLE colline DROP FOREIGN KEY FK_7202C52F9F2C3FAB');
        $this->addSql('DROP TABLE colline');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE detail_demande');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE naissance');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE province');
        $this->addSql('DROP TABLE zone');
    }
}
