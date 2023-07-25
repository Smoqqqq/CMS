<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230724143128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE link (id INT AUTO_INCREMENT NOT NULL, page_id INT NOT NULL, title VARCHAR(512) NOT NULL, INDEX IDX_36AC99F1C4663E4 (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE row_block (id INT AUTO_INCREMENT NOT NULL, template VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE row_column (id INT AUTO_INCREMENT NOT NULL, row_block_id INT NOT NULL, breakpoint VARCHAR(255) NOT NULL, width VARCHAR(255) DEFAULT NULL, INDEX IDX_2D7554AC4539F6D9 (row_block_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE row_column_link (row_column_id INT NOT NULL, link_id INT NOT NULL, INDEX IDX_E821F3DC489B7CFA (row_column_id), INDEX IDX_E821F3DCADA40271 (link_id), PRIMARY KEY(row_column_id, link_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1C4663E4 FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE row_column ADD CONSTRAINT FK_2D7554AC4539F6D9 FOREIGN KEY (row_block_id) REFERENCES row_block (id)');
        $this->addSql('ALTER TABLE row_column_link ADD CONSTRAINT FK_E821F3DC489B7CFA FOREIGN KEY (row_column_id) REFERENCES row_column (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE row_column_link ADD CONSTRAINT FK_E821F3DCADA40271 FOREIGN KEY (link_id) REFERENCES link (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1C4663E4');
        $this->addSql('ALTER TABLE row_column DROP FOREIGN KEY FK_2D7554AC4539F6D9');
        $this->addSql('ALTER TABLE row_column_link DROP FOREIGN KEY FK_E821F3DC489B7CFA');
        $this->addSql('ALTER TABLE row_column_link DROP FOREIGN KEY FK_E821F3DCADA40271');
        $this->addSql('DROP TABLE link');
        $this->addSql('DROP TABLE row_block');
        $this->addSql('DROP TABLE row_column');
        $this->addSql('DROP TABLE row_column_link');
    }
}
