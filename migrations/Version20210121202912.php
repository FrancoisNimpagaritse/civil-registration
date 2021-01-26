<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210121202912 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adoption (id INT AUTO_INCREMENT NOT NULL, pere_adoptif_id INT DEFAULT NULL, mere_adoptif_id INT DEFAULT NULL, enfant_adopte_id INT NOT NULL, date_adoption DATE NOT NULL, date_enregistrement DATE NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_EDDEB6A913BF0F6 (pere_adoptif_id), INDEX IDX_EDDEB6A9B9571DB5 (mere_adoptif_id), UNIQUE INDEX UNIQ_EDDEB6A990DC95C3 (enfant_adopte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adoption ADD CONSTRAINT FK_EDDEB6A913BF0F6 FOREIGN KEY (pere_adoptif_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE adoption ADD CONSTRAINT FK_EDDEB6A9B9571DB5 FOREIGN KEY (mere_adoptif_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE adoption ADD CONSTRAINT FK_EDDEB6A990DC95C3 FOREIGN KEY (enfant_adopte_id) REFERENCES personne (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE adoption');
    }
}
