<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216001733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jeu (id INT AUTO_INCREMENT NOT NULL, nomjeu VARCHAR(30) DEFAULT NULL, description VARCHAR(30) DEFAULT NULL, createur VARCHAR(30) DEFAULT NULL, date_s DATE DEFAULT NULL, image VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tournoi CHANGE nomtournoi nomtournoi VARCHAR(50) NOT NULL, CHANGE idjeu idjeu INT NOT NULL, CHANGE datec datec DATE NOT NULL, CHANGE dateev dateev DATE NOT NULL, CHANGE heureev heureev TIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE jeu');
        $this->addSql('ALTER TABLE tournoi CHANGE nomtournoi nomtournoi VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE idjeu idjeu INT DEFAULT NULL, CHANGE description description VARCHAR(200) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE datec datec DATE DEFAULT NULL, CHANGE dateev dateev DATE DEFAULT NULL, CHANGE heureev heureev TIME DEFAULT NULL');
    }
}
