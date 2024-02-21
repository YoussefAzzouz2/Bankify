<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221171833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte ADD account_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD9B6B5FBA FOREIGN KEY (account_id) REFERENCES compte_client (id)');
        $this->addSql('CREATE INDEX IDX_BAD4FFFD9B6B5FBA ON carte (account_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFD9B6B5FBA');
        $this->addSql('DROP INDEX IDX_BAD4FFFD9B6B5FBA ON carte');
        $this->addSql('ALTER TABLE carte DROP account_id');
    }
}
