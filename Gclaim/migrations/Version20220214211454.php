<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214211454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD username VARCHAR(50) NOT NULL, ADD verifpassword VARCHAR(50) NOT NULL, DROP user_name, DROP verif_password, CHANGE full_name fullname VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD user_name VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD verif_password VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD full_name VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP username, DROP verifpassword, DROP fullname, CHANGE password password VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(50) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
