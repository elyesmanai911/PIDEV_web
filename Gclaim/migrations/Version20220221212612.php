<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221212612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_equipe VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, date_creation DATE NOT NULL, etat VARCHAR(50) NOT NULL, chef VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe_simple_utilisateur (equipe_id INT NOT NULL, simple_utilisateur_id INT NOT NULL, INDEX IDX_508AC0266D861B89 (equipe_id), INDEX IDX_508AC0265676EE6 (simple_utilisateur_id), PRIMARY KEY(equipe_id, simple_utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeu (id INT AUTO_INCREMENT NOT NULL, nomjeu VARCHAR(30) DEFAULT NULL, description VARCHAR(30) DEFAULT NULL, createur VARCHAR(30) DEFAULT NULL, date_s DATE DEFAULT NULL, image VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, idjeu_id INT DEFAULT NULL, nomtournoi VARCHAR(50) NOT NULL, description VARCHAR(200) DEFAULT NULL, datec DATE NOT NULL, dateev DATE NOT NULL, heureev TIME NOT NULL, INDEX IDX_18AFD9DFE8239482 (idjeu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_simple_utilisateur ADD CONSTRAINT FK_508AC0266D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_simple_utilisateur ADD CONSTRAINT FK_508AC0265676EE6 FOREIGN KEY (simple_utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DFE8239482 FOREIGN KEY (idjeu_id) REFERENCES jeu (id)');
        $this->addSql('ALTER TABLE utilisateur ADD is_verified TINYINT(1) DEFAULT NULL, ADD roles JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe_simple_utilisateur DROP FOREIGN KEY FK_508AC0266D861B89');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DFE8239482');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE equipe_simple_utilisateur');
        $this->addSql('DROP TABLE jeu');
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('ALTER TABLE profil CHANGE description description VARCHAR(1000) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE game game VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE utilisateur DROP is_verified, DROP roles, CHANGE username username VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE verifpassword verifpassword VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fullname fullname VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
