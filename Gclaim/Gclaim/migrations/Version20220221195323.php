<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221195323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournoi ADD idjeu INT DEFAULT NULL, DROP idjeu');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DFE8239482 FOREIGN KEY (idjeu) REFERENCES jeu (id)');
        $this->addSql('CREATE INDEX IDX_18AFD9DFE8239482 ON tournoi (idjeu)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etat etat VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE jeu CHANGE nomjeu nomjeu VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE createur createur VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DFE8239482');
        $this->addSql('DROP INDEX IDX_18AFD9DFE8239482 ON tournoi');
        $this->addSql('ALTER TABLE tournoi ADD idjeu INT NOT NULL, DROP idjeu, CHANGE nomtournoi nomtournoi VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE username username VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE verifpassword verifpassword VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fullname fullname VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE specialite specialite VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
