<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214175034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) DEFAULT NULL, type_categorie VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id_produit INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, nom_produit VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, prix_produit DOUBLE PRECISION DEFAULT NULL, date_ajout_produit DATE DEFAULT NULL, image_produit VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC27497DD634 (categorie), PRIMARY KEY(id_produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE produit');
    }
}
