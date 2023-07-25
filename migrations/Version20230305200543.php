<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230305200543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE empathy_map_block (id INT AUTO_INCREMENT NOT NULL, title1 VARCHAR(512) NOT NULL, content1 LONGTEXT NOT NULL, title2 VARCHAR(512) NOT NULL, content2 LONGTEXT NOT NULL, title3 VARCHAR(512) NOT NULL, content3 LONGTEXT NOT NULL, title4 VARCHAR(512) NOT NULL, content4 LONGTEXT NOT NULL, title5 VARCHAR(512) NOT NULL, content5 LONGTEXT NOT NULL, title6 VARCHAR(512) NOT NULL, content6 LONGTEXT NOT NULL, title7 VARCHAR(512) NOT NULL, content7 LONGTEXT NOT NULL, template VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE empathy_map_block');
    }
}
