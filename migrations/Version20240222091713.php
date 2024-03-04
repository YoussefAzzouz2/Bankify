<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222091713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client ADD nom_pack VARCHAR(255) DEFAULT NULL, DROP nom_pack_id');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62650E944D FOREIGN KEY (nom_pack) REFERENCES pack (nom_pack)');
        $this->addSql('CREATE INDEX IDX_1DDD5D62650E944D ON compte_client (nom_pack)');
        $this->addSql('ALTER TABLE pack ADD id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62650E944D');
        $this->addSql('DROP INDEX IDX_1DDD5D62650E944D ON compte_client');
        $this->addSql('ALTER TABLE compte_client ADD nom_pack_id INT DEFAULT NULL, DROP nom_pack');
        $this->addSql('ALTER TABLE pack DROP id');
    }
}
