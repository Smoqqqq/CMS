<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220212108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_image_block ADD image_name1 VARCHAR(255) DEFAULT NULL, ADD image_size1 INT DEFAULT NULL, ADD image_name2 VARCHAR(255) DEFAULT NULL, ADD image_size2 INT DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE image_block ADD image_name VARCHAR(255) DEFAULT NULL, ADD image_size INT DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_image_block DROP image_name1, DROP image_size1, DROP image_name2, DROP image_size2, DROP updated_at');
        $this->addSql('ALTER TABLE image_block DROP image_name, DROP image_size, DROP updated_at');
    }
}
