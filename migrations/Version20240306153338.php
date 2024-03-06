<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306153338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE compte_client ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_client ADD CONSTRAINT FK_1DDD5D629D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1DDD5D629D86650F ON compte_client (user_id_id)');
        $this->addSql('ALTER TABLE pack CHANGE id id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE9327612E2');
        $this->addSql('ALTER TABLE cheque DROP FOREIGN KEY FK_A0BBFDE986A5793C');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE9327612E2 FOREIGN KEY (destination_c_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cheque ADD CONSTRAINT FK_A0BBFDE986A5793C FOREIGN KEY (compte_id_id) REFERENCES compte_client (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compte_client DROP FOREIGN KEY FK_1DDD5D629D86650F');
        $this->addSql('DROP INDEX IDX_1DDD5D629D86650F ON compte_client');
        $this->addSql('ALTER TABLE compte_client DROP user_id_id');
        $this->addSql('ALTER TABLE pack CHANGE id id INT DEFAULT NULL');
    }
}
