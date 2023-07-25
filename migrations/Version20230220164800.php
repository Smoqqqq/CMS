<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220164800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE generic_block ADD page_id INT NOT NULL');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30166D1F9C FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('CREATE INDEX IDX_EA272F30166D1F9C ON generic_block (page_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30166D1F9C');
        $this->addSql('DROP INDEX IDX_EA272F30166D1F9C ON generic_block');
        $this->addSql('ALTER TABLE generic_block DROP page_id');
    }
}
