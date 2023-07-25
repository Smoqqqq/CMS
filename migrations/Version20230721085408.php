<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721085408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block ADD navbar_block_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722F5F6AE7F FOREIGN KEY (navbar_block_id) REFERENCES navbar (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_831B9722F5F6AE7F ON block (navbar_block_id)');
        $this->addSql('ALTER TABLE navbar_link ADD page_id INT NOT NULL, DROP url');
        $this->addSql('ALTER TABLE navbar_link ADD CONSTRAINT FK_80F78B69C4663E4 FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('CREATE INDEX IDX_80F78B69C4663E4 ON navbar_link (page_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722F5F6AE7F');
        $this->addSql('DROP INDEX UNIQ_831B9722F5F6AE7F ON block');
        $this->addSql('ALTER TABLE block DROP navbar_block_id');
        $this->addSql('ALTER TABLE navbar_link DROP FOREIGN KEY FK_80F78B69C4663E4');
        $this->addSql('DROP INDEX IDX_80F78B69C4663E4 ON navbar_link');
        $this->addSql('ALTER TABLE navbar_link ADD url VARCHAR(255) NOT NULL, DROP page_id');
    }
}
