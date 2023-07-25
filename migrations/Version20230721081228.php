<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721081228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reccurent_block ADD block_id INT NOT NULL');
        $this->addSql('ALTER TABLE reccurent_block ADD CONSTRAINT FK_931872A5E9ED820C FOREIGN KEY (block_id) REFERENCES block (id)');
        $this->addSql('CREATE INDEX IDX_931872A5E9ED820C ON reccurent_block (block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reccurent_block DROP FOREIGN KEY FK_931872A5E9ED820C');
        $this->addSql('DROP INDEX IDX_931872A5E9ED820C ON reccurent_block');
        $this->addSql('ALTER TABLE reccurent_block DROP block_id');
    }
}
