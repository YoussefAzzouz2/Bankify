<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306195611 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_credit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, min_montant DOUBLE PRECISION NOT NULL, max_montant DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_9AE7C4C76C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, solde DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_CFF652609D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE credit (id INT AUTO_INCREMENT NOT NULL, compte_id INT NOT NULL, categorie_id INT NOT NULL, montant_totale DOUBLE PRECISION NOT NULL, interet INT NOT NULL, date_c DATE NOT NULL, duree_totale INT NOT NULL, payed TINYINT(1) NOT NULL, accepted TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1CC16EFEF2C56620 (compte_id), INDEX IDX_1CC16EFEBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remboursement (id INT AUTO_INCREMENT NOT NULL, credit_id INT NOT NULL, montant_r DOUBLE PRECISION NOT NULL, montant_restant DOUBLE PRECISION NOT NULL, date_r DATE NOT NULL, duree_restante INT NOT NULL, INDEX IDX_C0C0D9EFCE062FF9 (credit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652609D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFEF2C56620 FOREIGN KEY (compte_id) REFERENCES compte_client (id)');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_credit (id)');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFCE062FF9 FOREIGN KEY (credit_id) REFERENCES credit (id)');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte_client (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652609D86650F');
        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFEF2C56620');
        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFEBCF5E72D');
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFCE062FF9');
        $this->addSql('DROP TABLE categorie_credit');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE credit');
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte_client (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
