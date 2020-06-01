<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200601000202 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE combustible_habilitado ADD tarjeta_id INT NOT NULL');
        $this->addSql('ALTER TABLE combustible_habilitado ADD CONSTRAINT FK_62331677D8720997 FOREIGN KEY (tarjeta_id) REFERENCES tarjeta_combustible (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_62331677D8720997 ON combustible_habilitado (tarjeta_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE combustible_habilitado DROP CONSTRAINT FK_62331677D8720997');
        $this->addSql('DROP INDEX IDX_62331677D8720997');
        $this->addSql('ALTER TABLE combustible_habilitado DROP tarjeta_id');
    }
}
