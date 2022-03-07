<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306225752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, total DOUBLE PRECISION DEFAULT NULL, date_achat DATE DEFAULT NULL, livrer TINYINT(1) DEFAULT NULL, User INT DEFAULT NULL, INDEX IDX_6EEAA67D2DA17977 (User), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, Produit INT DEFAULT NULL, Commande INT DEFAULT NULL, INDEX IDX_3170B74BE618D5BB (Produit), INDEX IDX_3170B74B979CC42B (Commande), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2DA17977 FOREIGN KEY (User) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BE618D5BB FOREIGN KEY (Produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B979CC42B FOREIGN KEY (Commande) REFERENCES commande (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B979CC42B');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE ligne_commande');
    }
}
