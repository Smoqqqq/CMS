<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222171148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block ADD dual_image_title_block_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722C67941DA FOREIGN KEY (dual_image_title_block_id) REFERENCES dual_image_title_block (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_831B9722C67941DA ON block (dual_image_title_block_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722C67941DA');
        $this->addSql('DROP INDEX UNIQ_831B9722C67941DA ON block');
        $this->addSql('ALTER TABLE block DROP dual_image_title_block_id');
    }
}
