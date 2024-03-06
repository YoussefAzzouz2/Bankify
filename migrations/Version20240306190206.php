<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306190206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62650E944D');
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D62892CBB0E');
        $this->addSql('CREATE TABLE carte (id INT AUTO_INCREMENT NOT NULL, account_id INT DEFAULT NULL, type_id INT DEFAULT NULL, num_c INT NOT NULL, date_exp DATE NOT NULL, type_c VARCHAR(255) NOT NULL, statut_c VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BAD4FFFD15564795 (num_c), INDEX IDX_BAD4FFFD9B6B5FBA (account_id), INDEX IDX_BAD4FFFDC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, solde DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_CFF652609D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, montant INT NOT NULL, date_t DATE NOT NULL, type_t VARCHAR(255) NOT NULL, statut_t VARCHAR(255) NOT NULL, INDEX IDX_723705D11AF787D1 (id_c_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_c (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant_max DOUBLE PRECISION NOT NULL, montant_min DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD9B6B5FBA FOREIGN KEY (account_id) REFERENCES compte_client (id)');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFDC54C8C93 FOREIGN KEY (type_id) REFERENCES type_c (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652609D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D11AF787D1 FOREIGN KEY (id_c_id) REFERENCES carte (id)');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE virement');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte (id)');
        $this->addSql('DROP INDEX IDX_1DDD5D62892CBB0E ON compte_client');
        $this->addSql('DROP INDEX IDX_1DDD5D62650E944D ON compte_client');
        $this->addSql('DROP INDEX IDX_1DDD5D629D86650F ON compte_client');
        $this->addSql('ALTER TABLE compte_client DROP type_name, DROP nom_pack, DROP user_id_id');
        $this->addSql('ALTER TABLE reclamtion DROP FOREIGN KEY FK_5C8EEBA167983896');
        $this->addSql('ALTER TABLE reclamtion ADD CONSTRAINT FK_5C8EEBA167983896 FOREIGN KEY (cheque_id_id) REFERENCES cheque (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('CREATE TABLE pack (nom_pack VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, benefits VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id INT NOT NULL, PRIMARY KEY(nom_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type (nom_type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(nom_type)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE virement (id INT AUTO_INCREMENT NOT NULL, compte_source VARCHAR(16) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, compte_destination VARCHAR(16) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, montant DOUBLE PRECISION NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFD9B6B5FBA');
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFDC54C8C93');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652609D86650F');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D11AF787D1');
        $this->addSql('DROP TABLE carte');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE type_c');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte_client (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compte_client ADD type_name VARCHAR(255) DEFAULT NULL, ADD nom_pack VARCHAR(255) DEFAULT NULL, ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62892CBB0E FOREIGN KEY (type_name) REFERENCES type (nom_type) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D62650E944D FOREIGN KEY (nom_pack) REFERENCES pack (nom_pack) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_1DDD5D62892CBB0E ON compte_client (type_name)');
        $this->addSql('CREATE INDEX IDX_1DDD5D62650E944D ON compte_client (nom_pack)');
        $this->addSql('CREATE INDEX IDX_1DDD5D629D86650F ON compte_client (user_id_id)');
        $this->addSql('ALTER TABLE reclamtion DROP FOREIGN KEY FK_5C8EEBA167983896');
        $this->addSql('ALTER TABLE reclamtion ADD CONSTRAINT FK_5C8EEBA167983896 FOREIGN KEY (cheque_id_id) REFERENCES cheque (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
