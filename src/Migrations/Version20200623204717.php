<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623204717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE escogida_turno DROP CONSTRAINT FK_24EDBF742A5E4E82');
        $this->addSql('ALTER TABLE escogida_turno ADD CONSTRAINT FK_24EDBF742A5E4E82 FOREIGN KEY (chofer_id) REFERENCES chofer (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE escogida_turno DROP CONSTRAINT fk_24edbf742a5e4e82');
        $this->addSql('ALTER TABLE escogida_turno ADD CONSTRAINT fk_24edbf742a5e4e82 FOREIGN KEY (chofer_id) REFERENCES chofer (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
