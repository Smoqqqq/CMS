<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221153903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block ADD mood_board1_block_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B97228484DE0B FOREIGN KEY (mood_board1_block_id) REFERENCES moodboard1_block (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_831B97228484DE0B ON block (mood_board1_block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B97228484DE0B');
        $this->addSql('DROP INDEX UNIQ_831B97228484DE0B ON block');
        $this->addSql('ALTER TABLE block DROP mood_board1_block_id');
    }
}
