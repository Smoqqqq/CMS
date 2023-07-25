<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721100054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_80F78B6958098F35 ON navbar_link');
        $this->addSql('ALTER TABLE navbar_link CHANGE navbar_id navbar_block_id INT NOT NULL');
        $this->addSql('ALTER TABLE navbar_link ADD CONSTRAINT FK_80F78B69F5F6AE7F FOREIGN KEY (navbar_block_id) REFERENCES navbar_block (id)');
        $this->addSql('CREATE INDEX IDX_80F78B69F5F6AE7F ON navbar_link (navbar_block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navbar_link DROP FOREIGN KEY FK_80F78B69F5F6AE7F');
        $this->addSql('DROP INDEX IDX_80F78B69F5F6AE7F ON navbar_link');
        $this->addSql('ALTER TABLE navbar_link CHANGE navbar_block_id navbar_id INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_80F78B6958098F35 ON navbar_link (navbar_id)');
    }
}
