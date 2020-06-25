<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623193959 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE ruta DROP CONSTRAINT FK_C3AEF08C6ED67F8F');
        $this->addSql('ALTER TABLE ruta ADD CONSTRAINT FK_C3AEF08C6ED67F8F FOREIGN KEY (id_expedicion) REFERENCES pto_expedicion (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ruta DROP CONSTRAINT fk_c3aef08c6ed67f8f');
        $this->addSql('ALTER TABLE ruta ADD CONSTRAINT fk_c3aef08c6ed67f8f FOREIGN KEY (id_expedicion) REFERENCES pto_expedicion (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
