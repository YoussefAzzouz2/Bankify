<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221185801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client ADD type_name VARCHAR(255) DEFAULT NULL, DROP nom_type_id');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62892CBB0E FOREIGN KEY (type_name) REFERENCES type (nom_type)');
        $this->addSql('CREATE INDEX IDX_1DDD5D62892CBB0E ON compte_client (type_name)');
        $this->addSql('ALTER TABLE type CHANGE description description VARCHAR(500) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62892CBB0E');
        $this->addSql('DROP INDEX IDX_1DDD5D62892CBB0E ON compte_client');
        $this->addSql('ALTER TABLE compte_client ADD nom_type_id INT NOT NULL, DROP type_name');
        $this->addSql('ALTER TABLE type CHANGE description description LONGTEXT NOT NULL');
    }
}
