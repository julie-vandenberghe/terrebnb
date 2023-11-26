<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Accommodation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Accommodation::factory()->create([
            'title' => 'La tiny house de Paul',
            'slug' => fake()->slug(),
            'description' => "Bienvenue dans la tiny house de Paul, une oasis de durabilité et de confort minimaliste. Équipée de panneaux solaires, de matériaux recyclables, et d'une empreinte réduite, cette petite merveille offre une expérience de vie éco-responsable. Connectez-vous à la nature grâce aux grandes fenêtres, adoptez un style de vie minimaliste et explorez le monde tout en respectant la planète.
## Équipements : 
- toilettes sèches, 
- panneaux solaires
- cuisine en plein air.",
            'image' => 'https://images.unsplash.com/photo-1607582544956-a874e6740135?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'status' => fake()->boolean, 
        ]);

        Accommodation::factory()->create([
            'title' => 'Le camping-car de Léa',
            'slug' => fake()->slug(),
            'description' => "Bienvenue à bord du camping-car de Léa, conçu pour allier aventure et respect de l'environnement. Parfait compagnon des voyageurs soucieux de la planète, son véhicule offre une expérience unique qui marie confort, praticité et durabilité.
### Équipements :
- toilettes sèches,
- panneaux solaires",
            'image' => 'https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'status' => fake()->boolean, 
        ]);
        
        Accommodation::factory()->create([
            'title' => "La yourte d'Annie",
            'image' => 'https://images.unsplash.com/photo-1510925648050-036368757b33?q=80&w=3237&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

        Accommodation::factory()->create([
            'title' => "La tente d'Aldeen",
            'image' => 'https://images.unsplash.com/photo-1624254495476-db6cc8b77e98?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fHRlbnRlfGVufDB8fDB8fHww',
        ]);

        Accommodation::factory()->create([
            'title' => "La tente d'Aldeen",
            'image' => 'https://images.unsplash.com/photo-1624254495476-db6cc8b77e98?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fHRlbnRlfGVufDB8fDB8fHww',
        ]);

        Accommodation::factory(8)->create();
        
    }
}
