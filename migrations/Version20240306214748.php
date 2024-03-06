<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306214748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pack (nom_pack VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price VARCHAR(255) NOT NULL, benefits VARCHAR(500) NOT NULL, id INT NOT NULL, PRIMARY KEY(nom_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (nom_type VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(nom_type)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE virement (id INT AUTO_INCREMENT NOT NULL, compte_source VARCHAR(16) NOT NULL, compte_destination VARCHAR(16) NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte_client ADD type_name VARCHAR(255) DEFAULT NULL, ADD nom_pack VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62892CBB0E FOREIGN KEY (type_name) REFERENCES type (nom_type)');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62650E944D FOREIGN KEY (nom_pack) REFERENCES pack (nom_pack)');
        $this->addSql('CREATE INDEX IDX_1DDD5D62892CBB0E ON compte_client (type_name)');
        $this->addSql('CREATE INDEX IDX_1DDD5D62650E944D ON compte_client (nom_pack)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62650E944D');
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62892CBB0E');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE virement');
        $this->addSql('DROP INDEX IDX_1DDD5D62892CBB0E ON compte_client');
        $this->addSql('DROP INDEX IDX_1DDD5D62650E944D ON compte_client');
        $this->addSql('ALTER TABLE compte_client DROP type_name, DROP nom_pack');
    }
}
