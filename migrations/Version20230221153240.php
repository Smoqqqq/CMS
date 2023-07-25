<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221153240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moodboard1_block (id INT AUTO_INCREMENT NOT NULL, template VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) NOT NULL, image3 VARCHAR(255) NOT NULL, image4 VARCHAR(255) NOT NULL, image5 VARCHAR(255) NOT NULL, image6 VARCHAR(255) NOT NULL, image7 VARCHAR(255) NOT NULL, image8 VARCHAR(255) NOT NULL, image9 VARCHAR(255) NOT NULL, image10 VARCHAR(255) NOT NULL, image_name1 VARCHAR(255) DEFAULT NULL, image_size1 INT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, image_size2 INT DEFAULT NULL, image_name3 VARCHAR(255) DEFAULT NULL, image_size3 INT DEFAULT NULL, image_name4 VARCHAR(255) DEFAULT NULL, image_size4 INT DEFAULT NULL, image_name5 VARCHAR(255) DEFAULT NULL, image_size5 INT DEFAULT NULL, image_name6 VARCHAR(255) DEFAULT NULL, image_size6 INT DEFAULT NULL, image_name7 VARCHAR(255) DEFAULT NULL, image_size7 INT DEFAULT NULL, image_name8 VARCHAR(255) DEFAULT NULL, image_size8 INT DEFAULT NULL, image_name9 VARCHAR(255) DEFAULT NULL, image_size9 INT DEFAULT NULL, image_name10 VARCHAR(255) DEFAULT NULL, image_size10 INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE moodboard1_block');
    }
}
