<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200531190628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP SEQUENCE chofer_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pronostico_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_horas_trabajo_id_seq CASCADE');
        $this->addSql('DROP TABLE pronostico');
        $this->addSql('DROP TABLE usuario_rol');
        $this->addSql('ALTER TABLE tarjeta_combustible DROP gastoreal');
        $this->addSql('ALTER TABLE tarjeta_combustible DROP fecha_asignacion');
        $this->addSql('ALTER TABLE tarjeta_combustible DROP tipo_combustible');
        $this->addSql('ALTER TABLE tarjeta_combustible DROP asignacion');
        $this->addSql('ALTER TABLE usuario ALTER roles SET NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE chofer_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pronostico_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_horas_trabajo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE pronostico (id INT NOT NULL, id_pronostico INT NOT NULL, mes VARCHAR(255) NOT NULL, identificador INT NOT NULL, estaciones DOUBLE PRECISION NOT NULL, pronostico DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uniq_6e82274bcb08a79c ON pronostico (id_pronostico)');
        $this->addSql('CREATE TABLE usuario_rol (usuario_id INT NOT NULL, rol_id INT NOT NULL, PRIMARY KEY(usuario_id, rol_id))');
        $this->addSql('CREATE INDEX idx_72edd1a4db38439e ON usuario_rol (usuario_id)');
        $this->addSql('CREATE INDEX idx_72edd1a44bab96c ON usuario_rol (rol_id)');
        $this->addSql('ALTER TABLE usuario_rol ADD CONSTRAINT fk_72edd1a44bab96c FOREIGN KEY (rol_id) REFERENCES rol (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE usuario_rol ADD CONSTRAINT fk_72edd1a4db38439e FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tarjeta_combustible ADD gastoreal INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tarjeta_combustible ADD fecha_asignacion DATE NOT NULL');
        $this->addSql('ALTER TABLE tarjeta_combustible ADD tipo_combustible VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tarjeta_combustible ADD asignacion INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario ALTER roles DROP NOT NULL');
    }
}
