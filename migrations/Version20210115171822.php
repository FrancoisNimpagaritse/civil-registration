<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115171822 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE divorce (id INT AUTO_INCREMENT NOT NULL, mariage_id INT NOT NULL, date_divorce DATE NOT NULL, lieu_decision_divorce VARCHAR(255) NOT NULL, date_enregistrement_divorce DATE NOT NULL, nombre_enfants_issus_mariage INT DEFAULT NULL, profession_epoux VARCHAR(255) NOT NULL, profession_epouse VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FCC40AAD192813B (mariage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE divorce ADD CONSTRAINT FK_FCC40AAD192813B FOREIGN KEY (mariage_id) REFERENCES mariage (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE divorce');
    }
}
