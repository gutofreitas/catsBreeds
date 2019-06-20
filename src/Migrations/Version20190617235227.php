<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190617235227 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE breeds (id VARCHAR(50) NOT NULL, name VARCHAR(255) NOT NULL, temperament VARCHAR(255) NOT NULL, life_span VARCHAR(255) NOT NULL, alt_names VARCHAR(255) NOT NULL, wikipedia_url VARCHAR(255) NOT NULL, origin VARCHAR(255) NOT NULL, weight_imperial VARCHAR(255) NOT NULL, experimental INT NOT NULL, hairless INT NOT NULL, `natural` INT NOT NULL, rare INT NOT NULL, rex INT NOT NULL, supperess_tail INT NOT NULL, short_legs INT NOT NULL, hypoallergenic INT NOT NULL, adaptability INT NOT NULL, affection_level INT NOT NULL, country_code VARCHAR(255) NOT NULL, child_friendly INT NOT NULL, energy_level INT NOT NULL, grooming INT NOT NULL, health_issues INT NOT NULL, intelligence INT NOT NULL, shedding_level INT NOT NULL, social_needs INT NOT NULL, stranger_friendly INT NOT NULL, vocalisation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE breeds');
    }
}
