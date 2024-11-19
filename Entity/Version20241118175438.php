<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20241118175438 extends AbstractMigration
{
   public function getDescription(): string
   {
       return 'Add new columns to unidades table';
   }

   public function up(Schema $schema): void
   {
       $this->addSql('ALTER TABLE unidades 
           ADD automatic_call_enabled TINYINT(1) DEFAULT 0 NOT NULL,
           ADD automatic_call_interval INT DEFAULT 0 NOT NULL'
       );
   }

   public function down(Schema $schema): void
   {
       $this->addSql('ALTER TABLE unidades 
           DROP COLUMN automatic_call_enabled,
           DROP COLUMN automatic_call_interval'
       );
   }
}