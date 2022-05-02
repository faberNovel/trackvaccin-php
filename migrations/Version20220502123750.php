<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502123750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<EOT
CREATE TABLE vaccine (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    date_time DATETIME NOT NULL, 
    type VARCHAR(255) NOT NULL, 
    final_injection BOOLEAN NOT NULL, 
    subject_first_name VARCHAR(255) NOT NULL, 
    subject_last_name VARCHAR(255) NOT NULL, 
    subject_age INTEGER NOT NULL
)
EOT);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vaccine');
    }
}
