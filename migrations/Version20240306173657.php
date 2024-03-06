<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306173657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carte (id INT AUTO_INCREMENT NOT NULL, account_id INT DEFAULT NULL, type_id INT DEFAULT NULL, num_c INT NOT NULL, date_exp DATE NOT NULL, type_c VARCHAR(255) NOT NULL, statut_c VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BAD4FFFD15564795 (num_c), INDEX IDX_BAD4FFFD9B6B5FBA (account_id), INDEX IDX_BAD4FFFDC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, rib VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, solde DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, montant INT NOT NULL, date_t DATE NOT NULL, type_t VARCHAR(255) NOT NULL, statut_t VARCHAR(255) NOT NULL, INDEX IDX_723705D11AF787D1 (id_c_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_c (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant_max DOUBLE PRECISION NOT NULL, montant_min DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD9B6B5FBA FOREIGN KEY (account_id) REFERENCES compte_client (id)');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFDC54C8C93 FOREIGN KEY (type_id) REFERENCES type_c (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D11AF787D1 FOREIGN KEY (id_c_id) REFERENCES carte (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFD9B6B5FBA');
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFDC54C8C93');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D11AF787D1');
        $this->addSql('DROP TABLE carte');
        $this->addSql('DROP TABLE compte_client');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE type_c');
    }
}
