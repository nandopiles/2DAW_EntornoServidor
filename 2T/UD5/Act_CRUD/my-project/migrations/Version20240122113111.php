<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122113111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('DROP INDEX dnombre ON dept');
        $this->addSql('ALTER TABLE dept CHANGE dept_no dept_no INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE emp CHANGE dept_no dept_no INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FE6B0AD08 FOREIGN KEY (dept_no) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FE6B0AD08 ON emp (dept_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dept CHANGE dept_no dept_no TINYINT(1) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX dnombre ON dept (dnombre)');
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FE6B0AD08');
        $this->addSql('DROP INDEX IDX_310BB40FE6B0AD08 ON emp');
        $this->addSql('ALTER TABLE emp CHANGE dept_no dept_no INT NOT NULL');
    }
}
