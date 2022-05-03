<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220403141449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE cat_id cat_id INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE article_id article_id INT NOT NULL, CHANGE creation creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(50) NOT NULL, CHANGE description description VARCHAR(100) NOT NULL, CHANGE date_creation date_creation DATE NOT NULL, CHANGE etat etat VARCHAR(50) NOT NULL, CHANGE chef chef VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE cat_id cat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE article_id article_id INT DEFAULT NULL, CHANGE creation creation DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(50) DEFAULT NULL, CHANGE description description VARCHAR(100) DEFAULT NULL, CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE etat etat VARCHAR(50) DEFAULT NULL, CHANGE chef chef VARCHAR(50) DEFAULT NULL');
    }
}
