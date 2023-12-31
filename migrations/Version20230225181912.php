<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230225181912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE persona_block (id INT AUTO_INCREMENT NOT NULL, title1 VARCHAR(512) DEFAULT NULL, title2 VARCHAR(512) DEFAULT NULL, title3 VARCHAR(512) DEFAULT NULL, title4 VARCHAR(512) DEFAULT NULL, title5 VARCHAR(512) DEFAULT NULL, content1 LONGTEXT DEFAULT NULL, content2 LONGTEXT DEFAULT NULL, content3 LONGTEXT DEFAULT NULL, content4 LONGTEXT DEFAULT NULL, content5 LONGTEXT DEFAULT NULL, citation LONGTEXT DEFAULT NULL, image VARCHAR(255) NOT NULL, template VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, image_name VARCHAR(255) DEFAULT NULL, image_size INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE block ADD persona_block_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B972293E964D FOREIGN KEY (persona_block_id) REFERENCES persona_block (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_831B972293E964D ON block (persona_block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B972293E964D');
        $this->addSql('DROP TABLE persona_block');
        $this->addSql('DROP INDEX UNIQ_831B972293E964D ON block');
        $this->addSql('ALTER TABLE block DROP persona_block_id');
    }
}
