<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220164620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE generic_block (id INT AUTO_INCREMENT NOT NULL, text_block_id INT DEFAULT NULL, dual_text_block_id INT DEFAULT NULL, image_block_id INT DEFAULT NULL, dual_image_block_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_EA272F305FAF0E1E (text_block_id), UNIQUE INDEX UNIQ_EA272F30AAC43502 (dual_text_block_id), UNIQUE INDEX UNIQ_EA272F30661D0CA4 (image_block_id), UNIQUE INDEX UNIQ_EA272F3072E93BD0 (dual_image_block_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F305FAF0E1E FOREIGN KEY (text_block_id) REFERENCES text_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30AAC43502 FOREIGN KEY (dual_text_block_id) REFERENCES dual_text_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30661D0CA4 FOREIGN KEY (image_block_id) REFERENCES image_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F3072E93BD0 FOREIGN KEY (dual_image_block_id) REFERENCES dual_image_block (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F305FAF0E1E');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30AAC43502');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30661D0CA4');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F3072E93BD0');
        $this->addSql('DROP TABLE generic_block');
    }
}
