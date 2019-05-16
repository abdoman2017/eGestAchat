<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fournisseur::class, 40000)->create();
        factory(App\Utilisateur::class, 20000)->create();
    }
}