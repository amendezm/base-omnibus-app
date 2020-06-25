<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623201024 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE combustible_asignado DROP CONSTRAINT FK_53B30302D8720997');
        $this->addSql('ALTER TABLE combustible_asignado ADD CONSTRAINT FK_53B30302D8720997 FOREIGN KEY (tarjeta_id) REFERENCES tarjeta_combustible (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE combustible_asignado DROP CONSTRAINT fk_53b30302d8720997');
        $this->addSql('ALTER TABLE combustible_asignado ADD CONSTRAINT fk_53b30302d8720997 FOREIGN KEY (tarjeta_id) REFERENCES tarjeta_combustible (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
