<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220509081825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<EOT
INSERT INTO vaccine VALUES 
    (1, '2022-10-05 15:00:00', 'Moderna', '0', 'firstName1', 'lastName1', 35),
    (2, '2022-10-06 15:00:00', 'Pfizer', '1', 'firstName2', 'lastName2', 20),
    (3, '2022-10-04 15:00:00', 'Astrazeneca', '0', 'firstName3', 'lastName3', 26),
    (4, '2022-10-01 15:00:00', 'Pfizer', '1', 'firstName4', 'lastName4', 19),
    (5, '2022-10-02 16:00:00', 'Pfizer', '0', 'firstName6', 'lastName2', 20);
EOT);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
