<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220214152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_text_block CHANGE title1 title1 VARCHAR(512) NOT NULL, CHANGE content1 content1 VARCHAR(512) NOT NULL, CHANGE title2 title2 VARCHAR(512) NOT NULL, CHANGE content2 content2 VARCHAR(512) NOT NULL');
        $this->addSql('ALTER TABLE text_block CHANGE title title VARCHAR(512) NOT NULL, CHANGE content content VARCHAR(512) NOT NULL, CHANGE template template VARCHAR(512) NOT NULL, CHANGE name name VARCHAR(512) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_text_block CHANGE title1 title1 VARCHAR(255) NOT NULL, CHANGE content1 content1 VARCHAR(255) NOT NULL, CHANGE title2 title2 VARCHAR(255) NOT NULL, CHANGE content2 content2 VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE text_block CHANGE title title VARCHAR(255) NOT NULL, CHANGE content content VARCHAR(255) NOT NULL, CHANGE template template VARCHAR(255) NOT NULL, CHANGE name name VARCHAR(255) NOT NULL');
    }
}
