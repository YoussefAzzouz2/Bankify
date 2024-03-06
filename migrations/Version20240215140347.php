<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215140347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence DROP FOREIGN KEY agence_ibfk_1');
        $this->addSql('DROP INDEX id_assurance ON agence');
        $this->addSql('ALTER TABLE agence ADD id INT AUTO_INCREMENT NOT NULL, DROP id_assurance, DROP id_agence, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON agence');
        $this->addSql('ALTER TABLE agence ADD id_assurance INT DEFAULT NULL, ADD id_agence INT NOT NULL, DROP id');
        $this->addSql('ALTER TABLE agence ADD CONSTRAINT agence_ibfk_1 FOREIGN KEY (id_assurance) REFERENCES assurance (id_assurance)');
        $this->addSql('CREATE INDEX id_assurance ON agence (id_assurance)');
    }
}
