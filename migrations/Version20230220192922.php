<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220192922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_image_block ADD template VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE dual_text_block ADD template VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE image_block ADD template VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE text_block ADD template VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dual_image_block DROP template, DROP name');
        $this->addSql('ALTER TABLE dual_text_block DROP template, DROP name');
        $this->addSql('ALTER TABLE image_block DROP template, DROP name');
        $this->addSql('ALTER TABLE text_block DROP template, DROP name');
    }
}
