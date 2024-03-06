<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214170029 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assurance ADD nom_assure VARCHAR(255) NOT NULL, ADD nom_beneficiaire VARCHAR(255) NOT NULL, ADD info_assurance VARCHAR(255) DEFAULT NULL, DROP nomAssure, DROP nomBeneficiaire, DROP infoAssurance, CHANGE montantPrime montant_prime DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assurance ADD nomAssure VARCHAR(255) NOT NULL, ADD nomBeneficiaire VARCHAR(255) NOT NULL, ADD infoAssurance VARCHAR(255) NOT NULL, DROP nom_assure, DROP nom_beneficiaire, DROP info_assurance, CHANGE montant_prime montantPrime DOUBLE PRECISION NOT NULL');
    }
}
