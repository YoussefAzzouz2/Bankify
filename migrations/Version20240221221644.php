<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221221644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE credit DROP INDEX FK_1CC16EFEF2C56620, ADD UNIQUE INDEX UNIQ_1CC16EFEF2C56620 (compte_id)');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_credit (id)');
        $this->addSql('CREATE INDEX IDX_1CC16EFEBCF5E72D ON credit (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE credit DROP INDEX UNIQ_1CC16EFEF2C56620, ADD INDEX FK_1CC16EFEF2C56620 (compte_id)');
        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFEBCF5E72D');
        $this->addSql('DROP INDEX IDX_1CC16EFEBCF5E72D ON credit');
    }
}
