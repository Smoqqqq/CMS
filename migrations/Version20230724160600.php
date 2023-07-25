<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230724160600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE row_column_link DROP FOREIGN KEY FK_E821F3DC489B7CFA');
        $this->addSql('ALTER TABLE row_column_link DROP FOREIGN KEY FK_E821F3DCADA40271');
        $this->addSql('DROP TABLE row_column_link');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE row_column_link (row_column_id INT NOT NULL, link_id INT NOT NULL, INDEX IDX_E821F3DCADA40271 (link_id), INDEX IDX_E821F3DC489B7CFA (row_column_id), PRIMARY KEY(row_column_id, link_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE row_column_link ADD CONSTRAINT FK_E821F3DC489B7CFA FOREIGN KEY (row_column_id) REFERENCES row_column (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE row_column_link ADD CONSTRAINT FK_E821F3DCADA40271 FOREIGN KEY (link_id) REFERENCES link (id) ON DELETE CASCADE');
    }
}
