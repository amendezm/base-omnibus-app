<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200601001521 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE combustible_habilitado ADD omnibus_id INT NOT NULL');
        $this->addSql('ALTER TABLE combustible_habilitado DROP omnibus');
        $this->addSql('ALTER TABLE combustible_habilitado ADD CONSTRAINT FK_6233167721813879 FOREIGN KEY (omnibus_id) REFERENCES omnibus (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_6233167721813879 ON combustible_habilitado (omnibus_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE combustible_habilitado DROP CONSTRAINT FK_6233167721813879');
        $this->addSql('DROP INDEX IDX_6233167721813879');
        $this->addSql('ALTER TABLE combustible_habilitado ADD omnibus VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE combustible_habilitado DROP omnibus_id');
    }
}
