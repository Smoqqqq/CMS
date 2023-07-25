<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222170820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dual_image_title_block (id INT AUTO_INCREMENT NOT NULL, image1 VARCHAR(512) NOT NULL, image2 VARCHAR(512) NOT NULL, template VARCHAR(512) NOT NULL, name VARCHAR(512) NOT NULL, image_name1 VARCHAR(255) DEFAULT NULL, image_size1 INT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, image_size2 INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', title1 VARCHAR(255) NOT NULL, title2 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dual_image_title_block');
    }
}
