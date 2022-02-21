<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221141935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BCF33509A');
        $this->addSql('DROP INDEX IDX_3170B74BCF33509A ON ligne_commande');
        $this->addSql('ALTER TABLE ligne_commande CHANGE LigneCommande Produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BE618D5BB FOREIGN KEY (Produit) REFERENCES produit (id_produit)');
        $this->addSql('CREATE INDEX IDX_3170B74BE618D5BB ON ligne_commande (Produit)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_categorie type_categorie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BE618D5BB');
        $this->addSql('DROP INDEX IDX_3170B74BE618D5BB ON ligne_commande');
        $this->addSql('ALTER TABLE ligne_commande CHANGE Produit LigneCommande INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BCF33509A FOREIGN KEY (LigneCommande) REFERENCES produit (id_produit)');
        $this->addSql('CREATE INDEX IDX_3170B74BCF33509A ON ligne_commande (LigneCommande)');
        $this->addSql('ALTER TABLE produit CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_produit image_produit VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
