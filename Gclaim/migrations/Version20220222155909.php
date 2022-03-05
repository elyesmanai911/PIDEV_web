<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222155909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_equipe VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, date_creation DATE NOT NULL, etat VARCHAR(50) NOT NULL, chef VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe_utilisateur (equipe_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_D78C92636D861B89 (equipe_id), INDEX IDX_D78C9263FB88E14F (utilisateur_id), PRIMARY KEY(equipe_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, verifpassword VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, roles JSON NOT NULL, is_verified TINYINT(1) NOT NULL, type VARCHAR(255) NOT NULL, fullname VARCHAR(50) DEFAULT NULL, specialite VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_utilisateur ADD CONSTRAINT FK_D78C92636D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_utilisateur ADD CONSTRAINT FK_D78C9263FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe_utilisateur DROP FOREIGN KEY FK_D78C92636D861B89');
        $this->addSql('ALTER TABLE equipe_utilisateur DROP FOREIGN KEY FK_D78C9263FB88E14F');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297A76ED395');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86A76ED395');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE equipe_utilisateur');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE jeu CHANGE nomjeu nomjeu VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE createur createur VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE profil CHANGE description description VARCHAR(1000) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE game game VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE tournoi CHANGE nomtournoi nomtournoi VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
