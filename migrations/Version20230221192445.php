<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221192445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tile ADD page_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tile ADD CONSTRAINT FK_768FA904166D1F9C FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('CREATE INDEX IDX_768FA904166D1F9C ON tile (page_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tile DROP FOREIGN KEY FK_768FA904166D1F9C');
        $this->addSql('DROP INDEX IDX_768FA904166D1F9C ON tile');
        $this->addSql('ALTER TABLE tile DROP page_id');
    }
}
