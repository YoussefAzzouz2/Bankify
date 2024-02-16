<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216100703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE virement ADD id_compte_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE virement ADD CONSTRAINT FK_2D4DCFA672F0DA07 FOREIGN KEY (id_compte_id) REFERENCES compte_client (id)');
        $this->addSql('CREATE INDEX IDX_2D4DCFA672F0DA07 ON virement (id_compte_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE virement DROP FOREIGN KEY FK_2D4DCFA672F0DA07');
        $this->addSql('DROP INDEX IDX_2D4DCFA672F0DA07 ON virement');
        $this->addSql('ALTER TABLE virement DROP id_compte_id');
    }
}
