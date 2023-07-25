<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230225175133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dual_image_caption_block (id INT AUTO_INCREMENT NOT NULL, image1 VARCHAR(512) NOT NULL, image2 VARCHAR(512) NOT NULL, template VARCHAR(512) NOT NULL, name VARCHAR(512) NOT NULL, image_name1 VARCHAR(255) DEFAULT NULL, image_size1 INT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, image_size2 INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE block ADD dual_image_caption_block_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722D610A72D FOREIGN KEY (dual_image_caption_block_id) REFERENCES dual_image_caption_block (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_831B9722D610A72D ON block (dual_image_caption_block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722D610A72D');
        $this->addSql('DROP TABLE dual_image_caption_block');
        $this->addSql('DROP INDEX UNIQ_831B9722D610A72D ON block');
        $this->addSql('ALTER TABLE block DROP dual_image_caption_block_id');
    }
}
