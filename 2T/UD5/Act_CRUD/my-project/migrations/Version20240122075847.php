<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122075847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        /* $this->addSql('DROP INDEX CLIENTE_REPR_CLI ON cliente');
        $this->addSql('DROP INDEX IDX_CLIENTE_REPR_COD ON cliente');
        $this->addSql('DROP INDEX CLIENTE_NOMBRE ON cliente'); */
        // $this->addSql('ALTER TABLE cliente ADD repr_cod_id INT DEFAULT NULL, DROP repr_cod, CHANGE cliente_cod cliente_cod INT AUTO_INCREMENT NOT NULL, CHANGE estado estado VARCHAR(2) NOT NULL, CHANGE area area INT DEFAULT NULL, CHANGE limite_credito limite_credito NUMERIC(9, 2) DEFAULT NULL, CHANGE observaciones observaciones LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25890AB892 FOREIGN KEY (repr_cod_id) REFERENCES emp (emp_no)');
        // $this->addSql('CREATE INDEX IDX_F41C9B25890AB892 ON cliente (repr_cod_id)');
        $this->addSql('ALTER TABLE emp CHANGE jefe jefe INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp CHANGE jefe jefe SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25890AB892');
        // $this->addSql('DROP INDEX IDX_F41C9B25890AB892 ON cliente');
        // $this->addSql('ALTER TABLE cliente ADD repr_cod SMALLINT UNSIGNED DEFAULT NULL, DROP repr_cod_id, CHANGE cliente_cod cliente_cod INT UNSIGNED NOT NULL, CHANGE estado estado VARCHAR(2) DEFAULT NULL, CHANGE area area SMALLINT DEFAULT NULL, CHANGE limite_credito limite_credito NUMERIC(9, 2) UNSIGNED DEFAULT NULL, CHANGE observaciones observaciones TEXT DEFAULT NULL');
        // $this->addSql('CREATE INDEX CLIENTE_REPR_CLI ON cliente (repr_cod, cliente_cod)');
        // $this->addSql('CREATE INDEX IDX_CLIENTE_REPR_COD ON cliente (repr_cod)');
        // $this->addSql('CREATE INDEX CLIENTE_NOMBRE ON cliente (nombre)');
    }
}
