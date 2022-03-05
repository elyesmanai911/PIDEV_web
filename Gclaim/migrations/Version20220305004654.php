<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305004654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jeu (id INT AUTO_INCREMENT NOT NULL, nomjeu VARCHAR(30) DEFAULT NULL, description VARCHAR(30) DEFAULT NULL, createur VARCHAR(30) DEFAULT NULL, date_s DATE DEFAULT NULL, image VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre_equipe (id INT AUTO_INCREMENT NOT NULL, id_e_id INT NOT NULL, INDEX IDX_BE402FAC3F9CD80D (id_e_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, jeu_id INT DEFAULT NULL, nomtournoi VARCHAR(50) NOT NULL, description VARCHAR(200) DEFAULT NULL, datec DATE NOT NULL, dateev DATE NOT NULL, heureev TIME NOT NULL, image VARCHAR(500) NOT NULL, INDEX IDX_18AFD9DF8C9E392E (jeu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_equipe (tournoi_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_D21A14EAF607770A (tournoi_id), INDEX IDX_D21A14EA6D861B89 (equipe_id), PRIMARY KEY(tournoi_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membre_equipe ADD CONSTRAINT FK_BE402FAC3F9CD80D FOREIGN KEY (id_e_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DF8C9E392E FOREIGN KEY (jeu_id) REFERENCES jeu (id)');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EAF607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi_equipe ADD CONSTRAINT FK_D21A14EA6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe ADD nb INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DF8C9E392E');
        $this->addSql('ALTER TABLE tournoi_equipe DROP FOREIGN KEY FK_D21A14EAF607770A');
        $this->addSql('DROP TABLE jeu');
        $this->addSql('DROP TABLE membre_equipe');
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('DROP TABLE tournoi_equipe');
        $this->addSql('ALTER TABLE equipe DROP nb');
    }
}
