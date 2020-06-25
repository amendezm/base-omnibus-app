<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623192255 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE omnibus DROP CONSTRAINT FK_E4C33C284B94E263');
        $this->addSql('ALTER TABLE omnibus ADD CONSTRAINT FK_E4C33C284B94E263 FOREIGN KEY (id_base) REFERENCES base (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE omnibus DROP CONSTRAINT fk_e4c33c284b94e263');
        $this->addSql('ALTER TABLE omnibus ADD CONSTRAINT fk_e4c33c284b94e263 FOREIGN KEY (id_base) REFERENCES base (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
