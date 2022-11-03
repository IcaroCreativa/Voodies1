<?php

namespace Database\Seeders;

use App\Models\Ads;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $annonce1 = new Post();
        $annonce1 ->title = "chaise";
        $annonce1 ->price = 15;
        $annonce1 ->description = "Chaise pour salon. Vendu par lot de 6";
        $annonce1 ->location = "Caen";
        $annonce1 ->condition_id = 1;
        $annonce1 ->image1 = "chaise_01.jpg";
        $annonce1 ->category_id =5;
        $annonce1 ->user_id = "19";
        $annonce1 -> save();

        $annonce2 = new Post();
        $annonce2 ->title = "Chat";
        $annonce2 ->price = 250;
        $annonce2 ->description = "Chaton de 2 mois, vacciné et tatoué. Adore jouer et demande beaucoup de câlins";
        $annonce2 ->location = "Toulouse";
        $annonce2 ->condition = "Neuf";
        $annonce2 ->photo = "chat_01.jpg";
        $annonce2 ->category_id = "3";
        $annonce2 ->user_id = "1";
        $annonce2 -> save();

        $annonce3 = new Post();
        $annonce3 ->title = "Chien";
        $annonce3 ->price = 380;
        $annonce3 ->description = "Chien de race, vacciné et tatoué. 3 mois. N'attend que son maître";
        $annonce3 ->location = "Amiens";
        $annonce3 ->condition = "Neuf";
        $annonce3 ->photo = "chien_01.jpg";
        $annonce3 ->category_id = "3";
        $annonce3 ->user_id = "2";
        $annonce3 -> save();

        $annonce4 = new Post();
        $annonce4 ->title = "Four";
        $annonce4 ->price = 35;
        $annonce4 ->description = "four micro_ondes avec grill intégré. Couleur noire";
        $annonce4 ->location = "Bordeaux";
        $annonce4 ->condition = "Bon";
        $annonce4 ->photo = "four.jpg";
        $annonce4 ->category_id = "4";
        $annonce4 ->user_id = "3";
        $annonce4 -> save();

        $annonce5 = new Post();
        $annonce5 ->title = "karcher";
        $annonce5 ->price = 35;
        $annonce5 ->description = "karcher ayant servi mais gardant une bonne puissance de nettoyage";
        $annonce5 ->location = "Lyon";
        $annonce5 ->condition = "usé";
        $annonce5 ->photo = "karcher.jpg";
        $annonce5 ->category_id = "5";
        $annonce5 ->user_id = "1";
        $annonce5 -> save();

        $annonce6 = new Post();
        $annonce6 ->title = "ordinateur";
        $annonce6 ->price = 580;
        $annonce6 ->description = "Macbook pro. Bonne mémoire. Rapide. Peu servi. Disponible de suite";
        $annonce6 ->location = "Marseille";
        $annonce6 ->condition = "Bon";
        $annonce6 ->photo = "ordinateur.jpg";
        $annonce6 ->category_id = "1";
        $annonce6 ->user_id = "4";
        $annonce6 -> save();

        $annonce7 = new Post();
        $annonce7 ->title = "perceuse";
        $annonce7 ->price = 25;
        $annonce7 ->description = "Perceuse, devisseuse. Ayant servi mais toujours fonctionnelle. Bonne puissance. Légère.";
        $annonce7 ->location = "Montpellier";
        $annonce7 ->condition = "usé";
        $annonce7 ->photo = "perceuse.jpg";
        $annonce7 ->category_id = "5";
        $annonce7 ->user_id = "5";
        $annonce7 -> save();

        $annonce8 = new Post();
        $annonce8 ->title = "table";
        $annonce8 ->price = 150;
        $annonce8 ->description = "table de salon pour 6 personnes. Dimensions 180 x 80 cm. Très peu servie. Vend pour cause de déménagement";
        $annonce8 ->location = "Toulouse";
        $annonce8 ->condition = "Neuf";
        $annonce8 ->photo = "table.jpg";
        $annonce8 ->category_id = "7";
        $annonce8 ->user_id = "5";
        $annonce8 -> save();

        $annonce9 = new Post();
        $annonce9 ->title = "trotinette";
        $annonce9 ->price = 15;
        $annonce9 ->description = "pour enfant. Idéal cadeau pour Noël. Paiement en espèce SVP";
        $annonce9 ->location = "Caen";
        $annonce9 ->condition = "usé";
        $annonce9 ->photo = "trotinette.jpg";
        $annonce9 ->category_id = "6";
        $annonce9 ->user_id = "5";
        $annonce9 -> save();

        $annonce10 = new Post();
        $annonce10 ->title = "velo";
        $annonce10 ->price = 135;
        $annonce10 ->description = "Vélo pour homme. 9 vitesses. Cadre Alu. Avec pédaliers";
        $annonce10 ->location = "Caen";
        $annonce10 ->condition = "Bon";
        $annonce10 ->photo = "velo.jpg";
        $annonce10 ->category_id = "6";
        $annonce10 ->user_id = "5";
        $annonce10 -> save();

        $annonce11 = new Post();
        $annonce11 ->title = "voiture";
        $annonce11 ->price = 14500;
        $annonce11 ->description = "Vends voiture de marque Citröen. 85000 km. 6CV. BVA. BEG. Révision OK. Lbre de suite";
        $annonce11 ->location = "Marseille";
        $annonce11 ->condition = "Bon";
        $annonce11 ->photo = "voiture_1.jpg";
        $annonce11 ->category_id = "2";
        $annonce11 ->user_id = "7";
        $annonce11 -> save();
    }
}
