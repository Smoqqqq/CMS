<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220192404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE block (id INT AUTO_INCREMENT NOT NULL, text_block_id INT DEFAULT NULL, dual_text_block_id INT DEFAULT NULL, image_block_id INT DEFAULT NULL, dual_image_block_id INT DEFAULT NULL, page_id INT NOT NULL, name VARCHAR(255) NOT NULL, template VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_831B97225FAF0E1E (text_block_id), UNIQUE INDEX UNIQ_831B9722AAC43502 (dual_text_block_id), UNIQUE INDEX UNIQ_831B9722661D0CA4 (image_block_id), UNIQUE INDEX UNIQ_831B972272E93BD0 (dual_image_block_id), INDEX IDX_831B9722166D1F9C (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B97225FAF0E1E FOREIGN KEY (text_block_id) REFERENCES text_block (id)');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722AAC43502 FOREIGN KEY (dual_text_block_id) REFERENCES dual_text_block (id)');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722661D0CA4 FOREIGN KEY (image_block_id) REFERENCES image_block (id)');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B972272E93BD0 FOREIGN KEY (dual_image_block_id) REFERENCES dual_image_block (id)');
        $this->addSql('ALTER TABLE block ADD CONSTRAINT FK_831B9722166D1F9C FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30661D0CA4');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30166D1F9C');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F3072E93BD0');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F305FAF0E1E');
        $this->addSql('ALTER TABLE generic_block DROP FOREIGN KEY FK_EA272F30AAC43502');
        $this->addSql('DROP TABLE generic_block');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE generic_block (id INT AUTO_INCREMENT NOT NULL, text_block_id INT DEFAULT NULL, dual_text_block_id INT DEFAULT NULL, image_block_id INT DEFAULT NULL, dual_image_block_id INT DEFAULT NULL, page_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, template VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_EA272F305FAF0E1E (text_block_id), UNIQUE INDEX UNIQ_EA272F30661D0CA4 (image_block_id), INDEX IDX_EA272F30166D1F9C (page_id), UNIQUE INDEX UNIQ_EA272F30AAC43502 (dual_text_block_id), UNIQUE INDEX UNIQ_EA272F3072E93BD0 (dual_image_block_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30661D0CA4 FOREIGN KEY (image_block_id) REFERENCES image_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30166D1F9C FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F3072E93BD0 FOREIGN KEY (dual_image_block_id) REFERENCES dual_image_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F305FAF0E1E FOREIGN KEY (text_block_id) REFERENCES text_block (id)');
        $this->addSql('ALTER TABLE generic_block ADD CONSTRAINT FK_EA272F30AAC43502 FOREIGN KEY (dual_text_block_id) REFERENCES dual_text_block (id)');
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B97225FAF0E1E');
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722AAC43502');
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722661D0CA4');
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B972272E93BD0');
        $this->addSql('ALTER TABLE block DROP FOREIGN KEY FK_831B9722166D1F9C');
        $this->addSql('DROP TABLE block');
    }
}
