<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191030221014 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commandes ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_35D4282CFB88E14F ON commandes (utilisateur_id)');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CBCF5E72D');
        $this->addSql('DROP INDEX IDX_BE2DDF8CBCF5E72D ON produits');
        $this->addSql('ALTER TABLE produits ADD tva_id INT NOT NULL, CHANGE categorie_id categories_id INT NOT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C4D79775F FOREIGN KEY (tva_id) REFERENCES tva (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8CA21214B7 ON produits (categories_id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C4D79775F ON produits (tva_id)');
        $this->addSql('ALTER TABLE utlisateurs_adresse ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utlisateurs_adresse ADD CONSTRAINT FK_F6D6AB2DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_F6D6AB2DFB88E14F ON utlisateurs_adresse (utilisateur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282CFB88E14F');
        $this->addSql('DROP INDEX IDX_35D4282CFB88E14F ON commandes');
        $this->addSql('ALTER TABLE commandes DROP utilisateur_id');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CA21214B7');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C4D79775F');
        $this->addSql('DROP INDEX IDX_BE2DDF8CA21214B7 ON produits');
        $this->addSql('DROP INDEX IDX_BE2DDF8C4D79775F ON produits');
        $this->addSql('ALTER TABLE produits ADD categorie_id INT NOT NULL, DROP categories_id, DROP tva_id');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8CBCF5E72D ON produits (categorie_id)');
        $this->addSql('ALTER TABLE utlisateurs_adresse DROP FOREIGN KEY FK_F6D6AB2DFB88E14F');
        $this->addSql('DROP INDEX IDX_F6D6AB2DFB88E14F ON utlisateurs_adresse');
        $this->addSql('ALTER TABLE utlisateurs_adresse DROP utilisateur_id');
    }
}
