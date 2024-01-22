<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122111613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('DROP INDEX dnombre ON dept');
        // $this->addSql('ALTER TABLE dept ADD id INT AUTO_INCREMENT NOT NULL, DROP dept_no, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dept MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON dept');
        $this->addSql('ALTER TABLE dept ADD dept_no TINYINT(1) NOT NULL, DROP id');
        $this->addSql('CREATE UNIQUE INDEX dnombre ON dept (dnombre)');
        $this->addSql('ALTER TABLE dept ADD PRIMARY KEY (dept_no)');
    }
}
