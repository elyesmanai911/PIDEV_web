<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305121306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) DEFAULT NULL, type_categorie VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, total DOUBLE PRECISION DEFAULT NULL, date_achat DATE DEFAULT NULL, livrer TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, produit INT DEFAULT NULL, url_image VARCHAR(255) DEFAULT NULL, INDEX IDX_E01FBE6A29A5EC27 (produit), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, Produit INT DEFAULT NULL, Commande INT DEFAULT NULL, INDEX IDX_3170B74BE618D5BB (Produit), INDEX IDX_3170B74B979CC42B (Commande), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre_equipe (id INT AUTO_INCREMENT NOT NULL, id_e_id INT NOT NULL, INDEX IDX_BE402FAC3F9CD80D (id_e_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id_produit INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, nom_produit VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, prix_produit DOUBLE PRECISION DEFAULT NULL, date_ajout_produit DATE DEFAULT NULL, INDEX IDX_29A5EC27497DD634 (categorie), PRIMARY KEY(id_produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_equipe (tournoi_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_D21A14EAF607770A (tournoi_id), INDEX IDX_D21A14EA6D861B89 (equipe_id), PRIMARY KEY(tournoi_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A29A5EC27 FOREIGN KEY (produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BE618D5BB FOREIGN KEY (Produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B979CC42B FOREIGN KEY (Commande) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE membre_equipe ADD CONSTRAINT FK_BE402FAC3F9CD80D FOREIGN KEY (id_e_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id_categorie)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EAF607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EA6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe ADD nb INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jeu CHANGE image image VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DFE8239482');
        $this->addSql('DROP INDEX IDX_18AFD9DFE8239482 ON tournoi');
        $this->addSql('ALTER TABLE tournoi ADD image VARCHAR(500) NOT NULL, CHANGE idjeu_id jeu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DF8C9E392E FOREIGN KEY (jeu_id) REFERENCES jeu (id)');
        $this->addSql('CREATE INDEX IDX_18AFD9DF8C9E392E ON tournoi (jeu_id)');
        $this->addSql('ALTER TABLE utilisateur ADD role TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B979CC42B');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A29A5EC27');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BE618D5BB');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE membre_equipe');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE tournoi_equipe');
        $this->addSql('ALTER TABLE equipe DROP nb');
        $this->addSql('ALTER TABLE jeu CHANGE image image VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DF8C9E392E');
        $this->addSql('DROP INDEX IDX_18AFD9DF8C9E392E ON tournoi');
        $this->addSql('ALTER TABLE tournoi DROP image, CHANGE jeu_id idjeu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DFE8239482 FOREIGN KEY (idjeu_id) REFERENCES jeu (id)');
        $this->addSql('CREATE INDEX IDX_18AFD9DFE8239482 ON tournoi (idjeu_id)');
        $this->addSql('ALTER TABLE utilisateur DROP role');
    }
}
