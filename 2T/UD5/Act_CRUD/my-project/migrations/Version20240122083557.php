<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122083557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25890AB892');
        $this->addSql('DROP INDEX FK_F41C9B25890AB892 ON cliente');
        $this->addSql('ALTER TABLE cliente CHANGE repr_cod_id emp_no INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25A2F57F47 FOREIGN KEY (emp_no) REFERENCES emp (emp_no)');
        $this->addSql('CREATE INDEX IDX_F41C9B25A2F57F47 ON cliente (emp_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25A2F57F47');
        $this->addSql('DROP INDEX IDX_F41C9B25A2F57F47 ON cliente');
        $this->addSql('ALTER TABLE cliente CHANGE emp_no repr_cod_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25890AB892 FOREIGN KEY (repr_cod_id) REFERENCES emp (emp_no)');
        $this->addSql('CREATE INDEX FK_F41C9B25890AB892 ON cliente (repr_cod_id)');
    }
}
