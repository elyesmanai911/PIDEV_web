<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308105203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, description VARCHAR(1000) DEFAULT NULL, rating INT DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, game VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_E6D6B297A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, coach_id INT DEFAULT NULL, user_id INT DEFAULT NULL, date DATE DEFAULT NULL, is_verified TINYINT(1) NOT NULL, INDEX IDX_10C31F863C105691 (coach_id), INDEX IDX_10C31F86A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F863C105691 FOREIGN KEY (coach_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE produit CHANGE nbr_vu nbr_vu INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F863C105691');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE produit CHANGE nbr_vu nbr_vu INT DEFAULT NULL');
    }
}
