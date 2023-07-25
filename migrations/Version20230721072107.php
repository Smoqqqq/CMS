<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721072107 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block RENAME INDEX idx_831b9722166d1f9c TO IDX_831B9722C4663E4');
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_2FB3D0EE616D5D25');
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_2FB3D0EEA9FAF45F');
        $this->addSql('DROP INDEX IDX_2FB3D0EEA9FAF45F ON page');
        $this->addSql('DROP INDEX IDX_2FB3D0EE616D5D25 ON page');
        $this->addSql('ALTER TABLE page DROP previous_page_id, DROP next_page_id, DROP image_name, DROP image_size, DROP position');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE block RENAME INDEX idx_831b9722c4663e4 TO IDX_831B9722166D1F9C');
        $this->addSql('ALTER TABLE page ADD previous_page_id INT DEFAULT NULL, ADD next_page_id INT DEFAULT NULL, ADD image_name VARCHAR(255) DEFAULT NULL, ADD image_size INT DEFAULT NULL, ADD position INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_2FB3D0EE616D5D25 FOREIGN KEY (previous_page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_2FB3D0EEA9FAF45F FOREIGN KEY (next_page_id) REFERENCES page (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEA9FAF45F ON page (next_page_id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EE616D5D25 ON page (previous_page_id)');
    }
}
