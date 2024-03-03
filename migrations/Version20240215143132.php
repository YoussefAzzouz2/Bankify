<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215143132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE remboursement ADD credit_id INT NOT NULL');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFCE062FF9 FOREIGN KEY (credit_id) REFERENCES credit (id)');
        $this->addSql('CREATE INDEX IDX_C0C0D9EFCE062FF9 ON remboursement (credit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFCE062FF9');
        $this->addSql('DROP INDEX IDX_C0C0D9EFCE062FF9 ON remboursement');
        $this->addSql('ALTER TABLE remboursement DROP credit_id');
    }
}
