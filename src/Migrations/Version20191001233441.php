<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191001233441 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kamp (id INT AUTO_INCREMENT NOT NULL, titel VARCHAR(255) NOT NULL, quote VARCHAR(255) DEFAULT NULL, date DATETIME NOT NULL, image VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, spotlight TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE kampen');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kampen (titel VARCHAR(255) NOT NULL COLLATE utf8mb4_0900_ai_ci, quote VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_0900_ai_ci, date DATETIME NOT NULL, image VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_0900_ai_ci, description TEXT DEFAULT NULL COLLATE utf8mb4_0900_ai_ci, spotlight TINYINT(1) DEFAULT NULL, likes INT DEFAULT NULL) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE kamp');
    }
}
