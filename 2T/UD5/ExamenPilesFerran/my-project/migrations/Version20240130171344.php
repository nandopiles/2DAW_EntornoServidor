<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240130171344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25ABAC2C0C FOREIGN KEY (repr_cod) REFERENCES emp (emp_no)');
        $this->addSql('CREATE INDEX IDX_F41C9B25ABAC2C0C ON cliente (repr_cod)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25ABAC2C0C');
        $this->addSql('DROP INDEX IDX_F41C9B25ABAC2C0C ON cliente');
    }
}
