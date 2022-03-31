<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325124255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, cat_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL, nbr_vu INT NOT NULL, INDEX IDX_23A0E66E6ADA943 (cat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, couleur VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, commentaire VARCHAR(255) NOT NULL, creation DATETIME NOT NULL, user VARCHAR(255) NOT NULL, INDEX IDX_67F068BC7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_equipe VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, date_creation DATE NOT NULL, etat VARCHAR(50) NOT NULL, chef VARCHAR(50) NOT NULL, nb INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe_utilisateur (equipe_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_D78C92636D861B89 (equipe_id), INDEX IDX_D78C9263FB88E14F (utilisateur_id), PRIMARY KEY(equipe_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeu (id INT AUTO_INCREMENT NOT NULL, nomjeu VARCHAR(30) DEFAULT NULL, description VARCHAR(30) DEFAULT NULL, createur VARCHAR(30) DEFAULT NULL, date_s DATE DEFAULT NULL, image VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, Produit INT DEFAULT NULL, Commande INT DEFAULT NULL, INDEX IDX_3170B74BE618D5BB (Produit), INDEX IDX_3170B74B979CC42B (Commande), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre_equipe (id INT AUTO_INCREMENT NOT NULL, id_e_id INT NOT NULL, INDEX IDX_BE402FAC3F9CD80D (id_e_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, description VARCHAR(1000) DEFAULT NULL, rating INT DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, game VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_E6D6B297A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, coach_id INT DEFAULT NULL, user_id INT DEFAULT NULL, date DATE DEFAULT NULL, is_verified TINYINT(1) NOT NULL, INDEX IDX_10C31F863C105691 (coach_id), INDEX IDX_10C31F86A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, jeu_id INT DEFAULT NULL, nomtournoi VARCHAR(50) NOT NULL, description VARCHAR(200) DEFAULT NULL, datec DATE NOT NULL, dateev DATE NOT NULL, heureev TIME NOT NULL, image VARCHAR(500) NOT NULL, INDEX IDX_18AFD9DF8C9E392E (jeu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_equipe (tournoi_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_D21A14EAF607770A (tournoi_id), INDEX IDX_D21A14EA6D861B89 (equipe_id), PRIMARY KEY(tournoi_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, verifpassword VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', is_verified TINYINT(1) NOT NULL, role TINYINT(1) NOT NULL, type VARCHAR(255) NOT NULL, fullname VARCHAR(50) DEFAULT NULL, specialite VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66E6ADA943 FOREIGN KEY (cat_id) REFERENCES cat (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE equipe_utilisateur ADD CONSTRAINT FK_D78C92636D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_utilisateur ADD CONSTRAINT FK_D78C9263FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BE618D5BB FOREIGN KEY (Produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B979CC42B FOREIGN KEY (Commande) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE membre_equipe ADD CONSTRAINT FK_BE402FAC3F9CD80D FOREIGN KEY (id_e_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F863C105691 FOREIGN KEY (coach_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DF8C9E392E FOREIGN KEY (jeu_id) REFERENCES jeu (id)');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EAF607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EA6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD User INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2DA17977 FOREIGN KEY (User) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D2DA17977 ON commande (User)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC7294869C');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66E6ADA943');
        $this->addSql('ALTER TABLE equipe_utilisateur DROP FOREIGN KEY FK_D78C92636D861B89');
        $this->addSql('ALTER TABLE membre_equipe DROP FOREIGN KEY FK_BE402FAC3F9CD80D');
        $this->addSql('ALTER TABLE tournoi_equipe DROP FOREIGN KEY FK_D21A14EA6D861B89');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DF8C9E392E');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F863C105691');
        $this->addSql('ALTER TABLE tournoi_equipe DROP FOREIGN KEY FK_D21A14EAF607770A');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2DA17977');
        $this->addSql('ALTER TABLE equipe_utilisateur DROP FOREIGN KEY FK_D78C9263FB88E14F');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297A76ED395');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86A76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE cat');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE equipe_utilisateur');
        $this->addSql('DROP TABLE jeu');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE membre_equipe');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('DROP TABLE tournoi_equipe');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX IDX_6EEAA67D2DA17977 ON commande');
        $this->addSql('ALTER TABLE commande ADD id_user INT NOT NULL, DROP User');
    }
}
