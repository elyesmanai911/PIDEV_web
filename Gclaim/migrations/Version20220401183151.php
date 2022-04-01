<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401183151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE nbr_vu nbr_vu INT NOT NULL');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2DA17977');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2DA17977 FOREIGN KEY (User) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE jeu CHANGE image image VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie)');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297A76ED395');
        $this->addSql('ALTER TABLE profil CHANGE numero numero VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rdv ADD coachname VARCHAR(255) DEFAULT NULL, ADD username VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi CHANGE nomtournoi nomtournoi VARCHAR(50) NOT NULL, CHANGE datec datec DATE NOT NULL, CHANGE dateev dateev DATE NOT NULL, CHANGE heureev heureev TIME NOT NULL, CHANGE image image VARCHAR(500) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE nbr_vu nbr_vu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2DA17977');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2DA17977 FOREIGN KEY (User) REFERENCES utilisateur (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE jeu CHANGE image image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297A76ED395');
        $this->addSql('ALTER TABLE profil CHANGE numero numero VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE rdv DROP coachname, DROP username');
        $this->addSql('ALTER TABLE tournoi CHANGE nomtournoi nomtournoi VARCHAR(50) DEFAULT NULL, CHANGE datec datec DATE DEFAULT NULL, CHANGE dateev dateev DATE DEFAULT NULL, CHANGE heureev heureev TIME DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL');
    }
}
