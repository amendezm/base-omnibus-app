<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623201132 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE chofer DROP CONSTRAINT FK_1F7E3FEE21813879');
        $this->addSql('ALTER TABLE chofer ADD CONSTRAINT FK_1F7E3FEE21813879 FOREIGN KEY (omnibus_id) REFERENCES omnibus (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE chofer DROP CONSTRAINT fk_1f7e3fee21813879');
        $this->addSql('ALTER TABLE chofer ADD CONSTRAINT fk_1f7e3fee21813879 FOREIGN KEY (omnibus_id) REFERENCES omnibus (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
