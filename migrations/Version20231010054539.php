<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231010054539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE base_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE base_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE field_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE base_entity (id INT NOT NULL, type_id INT NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6648DC01C54C8C93 ON base_entity (type_id)');
        $this->addSql('CREATE TABLE base_type (id INT NOT NULL, name VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE field (id INT NOT NULL, type_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5BF54558C54C8C93 ON field (type_id)');
        $this->addSql('CREATE TABLE image (id INT NOT NULL, file_path VARCHAR(9999) NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE base_entity ADD CONSTRAINT FK_6648DC01C54C8C93 FOREIGN KEY (type_id) REFERENCES base_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE field ADD CONSTRAINT FK_5BF54558C54C8C93 FOREIGN KEY (type_id) REFERENCES base_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE base_entity_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE base_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE field_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE image_id_seq CASCADE');
        $this->addSql('ALTER TABLE base_entity DROP CONSTRAINT FK_6648DC01C54C8C93');
        $this->addSql('ALTER TABLE field DROP CONSTRAINT FK_5BF54558C54C8C93');
        $this->addSql('DROP TABLE base_entity');
        $this->addSql('DROP TABLE base_type');
        $this->addSql('DROP TABLE field');
        $this->addSql('DROP TABLE image');
    }
}
