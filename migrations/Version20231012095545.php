<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012095545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guest DROP FOREIGN KEY FK_ACB79A3589E8BDC');
        $this->addSql('ALTER TABLE guest DROP FOREIGN KEY FK_ACB79A35BD0BCFA6');
        $this->addSql('DROP INDEX IDX_ACB79A3589E8BDC ON guest');
        $this->addSql('DROP INDEX IDX_ACB79A35BD0BCFA6 ON guest');
        $this->addSql('ALTER TABLE guest ADD id_role_id INT DEFAULT NULL, ADD id_meal_id INT DEFAULT NULL, DROP id_role, DROP id_meal');
        $this->addSql('ALTER TABLE guest ADD CONSTRAINT FK_ACB79A3589E8BDC FOREIGN KEY (id_role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE guest ADD CONSTRAINT FK_ACB79A35BD0BCFA6 FOREIGN KEY (id_meal_id) REFERENCES meal (id)');
        $this->addSql('CREATE INDEX IDX_ACB79A3589E8BDC ON guest (id_role_id)');
        $this->addSql('CREATE INDEX IDX_ACB79A35BD0BCFA6 ON guest (id_meal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guest DROP FOREIGN KEY FK_ACB79A3589E8BDC');
        $this->addSql('ALTER TABLE guest DROP FOREIGN KEY FK_ACB79A35BD0BCFA6');
        $this->addSql('DROP INDEX IDX_ACB79A3589E8BDC ON guest');
        $this->addSql('DROP INDEX IDX_ACB79A35BD0BCFA6 ON guest');
        $this->addSql('ALTER TABLE guest ADD id_role INT DEFAULT NULL, ADD id_meal INT DEFAULT NULL, DROP id_role_id, DROP id_meal_id');
        $this->addSql('ALTER TABLE guest ADD CONSTRAINT FK_ACB79A3589E8BDC FOREIGN KEY (id_role) REFERENCES role (id)');
        $this->addSql('ALTER TABLE guest ADD CONSTRAINT FK_ACB79A35BD0BCFA6 FOREIGN KEY (id_meal) REFERENCES meal (id)');
        $this->addSql('CREATE INDEX IDX_ACB79A3589E8BDC ON guest (id_role)');
        $this->addSql('CREATE INDEX IDX_ACB79A35BD0BCFA6 ON guest (id_meal)');
    }
}
