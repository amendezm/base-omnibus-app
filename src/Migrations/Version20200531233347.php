<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200531233347 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE combustible_asignado DROP CONSTRAINT fk_53b30302f874ea2e');
        $this->addSql('DROP INDEX idx_53b30302f874ea2e');
        $this->addSql('ALTER TABLE combustible_asignado ADD tarjeta_id INT NOT NULL');
        $this->addSql('ALTER TABLE combustible_asignado DROP id_tarjetacombustible');
        $this->addSql('ALTER TABLE combustible_asignado ADD CONSTRAINT FK_53B30302D8720997 FOREIGN KEY (tarjeta_id) REFERENCES tarjeta_combustible (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_53B30302D8720997 ON combustible_asignado (tarjeta_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE combustible_asignado DROP CONSTRAINT FK_53B30302D8720997');
        $this->addSql('DROP INDEX IDX_53B30302D8720997');
        $this->addSql('ALTER TABLE combustible_asignado ADD id_tarjetacombustible INT DEFAULT NULL');
        $this->addSql('ALTER TABLE combustible_asignado DROP tarjeta_id');
        $this->addSql('ALTER TABLE combustible_asignado ADD CONSTRAINT fk_53b30302f874ea2e FOREIGN KEY (id_tarjetacombustible) REFERENCES tarjeta_combustible (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_53b30302f874ea2e ON combustible_asignado (id_tarjetacombustible)');
    }
}
