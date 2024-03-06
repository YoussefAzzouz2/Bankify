<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306135406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cheque (id INT AUTO_INCREMENT NOT NULL, destination_c_id INT DEFAULT NULL, compte_id_id INT DEFAULT NULL, montant_c DOUBLE PRECISION NOT NULL, isfav INT NOT NULL, INDEX IDX_A0BBFDE9327612E2 (destination_c_id), INDEX IDX_A0BBFDE986A5793C (compte_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, solde DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_CFF652609D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamtion (id INT AUTO_INCREMENT NOT NULL, cheque_id_id INT DEFAULT NULL, categorie VARCHAR(255) NOT NULL, statut_r VARCHAR(255) DEFAULT \'En cours\' NOT NULL, INDEX IDX_5C8EEBA167983896 (cheque_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652609D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamtion ADD CONSTRAINT FK_5C8EEBA167983896 FOREIGN KEY (cheque_id_id) REFERENCES cheque (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652609D86650F');
        $this->addSql('ALTER TABLE reclamtion DROP FOREIGN KEY FK_5C8EEBA167983896');
        $this->addSql('DROP TABLE cheque');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE reclamtion');
        $this->addSql('DROP TABLE user');
    }
}
