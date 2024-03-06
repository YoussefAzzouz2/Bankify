<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306144852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte_client (id INT AUTO_INCREMENT NOT NULL, type_name VARCHAR(255) DEFAULT NULL, nom_pack VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, rib VARCHAR(255) NOT NULL, solde DOUBLE PRECISION NOT NULL, INDEX IDX_1DDD5D62892CBB0E (type_name), INDEX IDX_1DDD5D62650E944D (nom_pack), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack (nom_pack VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price VARCHAR(255) NOT NULL, benefits VARCHAR(500) NOT NULL, id INT NOT NULL, PRIMARY KEY(nom_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (nom_type VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(nom_type)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE virement (id INT AUTO_INCREMENT NOT NULL, compte_source VARCHAR(16) NOT NULL, compte_destination VARCHAR(16) NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62892CBB0E FOREIGN KEY (type_name) REFERENCES type (nom_type)');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62650E944D FOREIGN KEY (nom_pack) REFERENCES pack (nom_pack)');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY fk_omk');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY fk_kmo');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652609D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FA76ED395');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62892CBB0E');
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62650E944D');
        $this->addSql('DROP TABLE compte_client');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE virement');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT fk_omk FOREIGN KEY (destination_c_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652609D86650F');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT fk_kmo FOREIGN KEY (user_id_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FA76ED395');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
