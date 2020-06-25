<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623200230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE g_p_s DROP CONSTRAINT FK_DE804AF93A5E9558');
        $this->addSql('ALTER TABLE g_p_s ADD CONSTRAINT FK_DE804AF93A5E9558 FOREIGN KEY (id_omnibus) REFERENCES omnibus (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE g_p_s DROP CONSTRAINT fk_de804af93a5e9558');
        $this->addSql('ALTER TABLE g_p_s ADD CONSTRAINT fk_de804af93a5e9558 FOREIGN KEY (id_omnibus) REFERENCES omnibus (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
