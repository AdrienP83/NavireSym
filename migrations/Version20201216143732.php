<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216143732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aisshiptype CHANGE ais_shiptype aisshiptype INT NOT NULL');
         $this->addsql('ALTER TABLE navire ADD idAisShiptype INT NOT NULL');
        $this->addsql('ALTER TABLE navire ADD CONSTRAINT FK_NAVIRE_AISSHIPTYPE FOREIGN KEY (idAisShipType) REFERENCES aisshiptype(id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aisshiptype CHANGE aisshiptype ais_shiptype INT NOT NULL');
        $this->addsql('ALTER TABLE navire ADD idAisShiptype INT NOT NULL');
        $this->addsql('ALTER TABLE navire ADD CONSTRAINT FK_NAVIRE_AISSHIPTYPE FOREIGN KEY (idAisShipType) REFERENCES aisshiptype(id)');
      
    }
}
