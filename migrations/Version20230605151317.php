<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230605151317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE documents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE financial_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE manuscript_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE documents (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE financial (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE manuscript (id INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE documents_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE financial_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE manuscript_id_seq CASCADE');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE financial');
        $this->addSql('DROP TABLE manuscript');
    }
}
