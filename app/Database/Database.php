<?php
namespace app\Database;

use Machine\App\Application;
use Machine\Database\Migrations\Schema;

class Database
{


    public function applyMigrations()
    {
        $this->createMigrationsTable();
        // Get all migration on database table
        $appliedMigrations = $this->getAppliedMigrations();

        $newMigrations = [];

        // Get all migration file
        $migrationFiles = scandir(Application::$ROOT_DIR.'/database/migrations');

        // compare if there are new migration file
        $toAppliedMigrations = array_diff($migrationFiles, $appliedMigrations);

        foreach ($toAppliedMigrations as $migration){
            if($migration === '.' || $migration ==='..'){
                continue;
            }
            require_once Application::$ROOT_DIR.'/database/migrations/'.$migration;
            $migrationClassName = pathinfo($migration, PATHINFO_FILENAME);

            $className = substr($migrationClassName,12);
            $arrayClassName = explode('_', $className);

            if(count($arrayClassName) > 1){
                $className = array_map('ucfirst', $arrayClassName);
                $className = lcfirst(implode('', $className));
            }else{
                $className = ucfirst($className);
            }

            $instance = new $className;
            $this->consoleMessage("Applying migration $migration...");
            $instance->up();
            $this->consoleMessage("Applied migration $migration");

            $newMigrations[] = $migration;
        }

        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        }else{
            $this->consoleMessage("All migrations are applied");
        }
    }

    public function createMigrationsTable()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `migrations` (
              `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
              `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
              created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"
        );
    }

    private function getAppliedMigrations()
    {
        return Schema::allMigration();
    }

    public function saveMigrations(array $migrations)
    {
        $str = implode(",", array_map(fn($m) => "('$m')", $migrations));
        Schema::query('migrations', 'migration', $str);
    }

    protected function consoleMessage($message){
        echo '['.date('Y-m-d H:i:s').'] - '.$message.PHP_EOL;
    }

    protected function logSeedMessage($message){
        echo $message.PHP_EOL;
    }



    public function runSeeders()
    {

        // Get all migration file
        $seederFiles = scandir(Application::$ROOT_DIR.'/database/seeds');

        foreach ($seederFiles as $seed){
            if($seed === '.' || $seed ==='..'){
                continue;
            }
            require_once Application::$ROOT_DIR.'/database/seeds/'.$seed;

            $this->logSeedMessage("Migrated: $seed...");
        }

        $this->logSeedMessage(" ");
        $this->logSeedMessage("Now seed all migrations...");
        $this->logSeedMessage(" ");

        foreach ($seederFiles as $seed){
            if($seed === '.' || $seed ==='..'){
                continue;
            }
            require_once Application::$ROOT_DIR.'/database/seeds/'.$seed;

            $seedClassName = pathinfo($seed, PATHINFO_FILENAME);

            $instance = new $seedClassName;
            $instance->run();
            $this->logSeedMessage("Seeded: $seedClassName");
        }
    }

}