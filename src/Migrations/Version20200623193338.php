<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623193338 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE incidencia_hr DROP CONSTRAINT FK_A245DB9845326C66');
        $this->addSql('ALTER TABLE incidencia_hr DROP CONSTRAINT FK_A245DB98794805F');
        $this->addSql('ALTER TABLE incidencia_hr ADD CONSTRAINT FK_A245DB9845326C66 FOREIGN KEY (idIncidencia) REFERENCES incidencia (idincidencia) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE incidencia_hr ADD CONSTRAINT FK_A245DB98794805F FOREIGN KEY (idHojaRuta) REFERENCES hoja_ruta (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE incidencia_HR DROP CONSTRAINT fk_a245db9845326c66');
        $this->addSql('ALTER TABLE incidencia_HR DROP CONSTRAINT fk_a245db98794805f');
        $this->addSql('ALTER TABLE incidencia_HR ADD CONSTRAINT fk_a245db9845326c66 FOREIGN KEY (idincidencia) REFERENCES incidencia (idincidencia) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE incidencia_HR ADD CONSTRAINT fk_a245db98794805f FOREIGN KEY (idhojaruta) REFERENCES hoja_ruta (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
