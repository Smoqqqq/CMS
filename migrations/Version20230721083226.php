<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721083226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navbar ADD block_id INT NOT NULL');
        $this->addSql('ALTER TABLE navbar ADD CONSTRAINT FK_E0843B8CE9ED820C FOREIGN KEY (block_id) REFERENCES recurrent_block (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E0843B8CE9ED820C ON navbar (block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navbar DROP FOREIGN KEY FK_E0843B8CE9ED820C');
        $this->addSql('DROP INDEX UNIQ_E0843B8CE9ED820C ON navbar');
        $this->addSql('ALTER TABLE navbar DROP block_id');
    }
}
