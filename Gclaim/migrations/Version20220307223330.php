<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307223330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD User INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2DA17977 FOREIGN KEY (User) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D2DA17977 ON commande (User)');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A29A5EC27');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A29A5EC27 FOREIGN KEY (produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE produit CHANGE nbr_vu nbr_vu INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2DA17977');
        $this->addSql('DROP INDEX IDX_6EEAA67D2DA17977 ON commande');
        $this->addSql('ALTER TABLE commande ADD id_user INT NOT NULL, DROP User');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A29A5EC27');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A29A5EC27 FOREIGN KEY (produit) REFERENCES produit (id_produit) ON UPDATE SET NULL ON DELETE SET NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE produit CHANGE nbr_vu nbr_vu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie) ON UPDATE SET NULL ON DELETE SET NULL');
    }
}
