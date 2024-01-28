<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240128130543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE persona (id INT AUTO_INCREMENT NOT NULL, imagen VARCHAR(100) NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(200) NOT NULL, token VARCHAR(200) NOT NULL, nombres VARCHAR(100) NOT NULL, disponible INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE personas');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personas (id INT NOT NULL, imagen VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_spanish_ci`, username VARCHAR(50) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_spanish_ci`, password VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_spanish_ci`, token VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_spanish_ci`, nombres VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_spanish_ci`, disponible TINYINT(1) DEFAULT 1 NOT NULL) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_spanish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE persona');
    }
}
