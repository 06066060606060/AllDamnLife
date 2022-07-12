<?php

namespace Database\Seeders;

use App\Models\Produits;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\produits_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(['label' => 'Jeux vidéo']);
        Categories::create(['label' => 'Streaming']);
        Categories::create(['label' => 'Musique']);
        Categories::create(['label' => 'Vêtement']);
        Categories::create(['label' => 'Divers']);

        Produits::create(['titre' => 'Carte Cadeau Netflix', 'description' => 'Films, programmes TV et contenu original, il y en a pour tous les goûts. Les membres de Netflix peuvent regarder leurs programmes de divertissement favoris chez eux et sur tous leurs écrans. Sans aucune publicité. Les membres peuvent utiliser les cartes Netflix pour payer leur abonnement. Les personnes non abonnées peuvent les utiliser pour regarder Netflix immédiatement, sur n’importe quel appareil.', 'prix' => '25',  'image' => '/img/netflix.png', 'note' => '5']);
        Produits::create(['titre' => 'Carte Cadeau Disney+', 'description' => 'Disney+, c est le cadeau idéal pour tous. Avec un divertissement en continu signé Disney, Pixar, Marvel, Star Wars, National Geographic et Star, on ne peut pas s ennuyer avec un abonnement Disney+. Des productions originales en passant par les grands classiques ou les monuments du petit écran, chacun trouvera son bonheur et aura toujours quelque chose de nouveau à découvrir !', 'prix' => '10',  'image' => '/img/disney.png', 'note' => '2']);
        Produits::create(['titre' => 'Carte Cadeau Xbox', 'description' => 'Offrez au joueur de votre liste une carte cadeau Xbox numérique à utiliser dans le Microsoft Store en ligne, sur Windows et Xbox. * Vous recevrez un e-mail avec un code numérique que le destinataire de votre cadeau peut utiliser pour acheter des jeux populaires, des extensions, des packs de cartes et bien plus encore.', 'prix' => '25',  'image' => '/img/xbox.png', 'note' => '2']);
        Produits::create(['titre' => 'Carte Cadeau Steam', 'description' => 'Faites plaisir à vos contacts avec les cartes cadeau Steam. Vous pouvez maintenant ajouter des fonds au portemonnaie Steam d un proche en lui envoyant des une carte cadeau numérique. Envoyer une carte cadeau maintenant ou en savoir plus sur les cartes cadeau.', 'prix' => '10',  'image' => '/img/steam.png', 'note' => '1']);
        Produits::create(['titre' => 'Carte Cadeau Amazon', 'description' => 'Le cadeau idéal permettant de faire plaisir à coup sûr en laissant les destinataires choisir ce dont ils ont envie. Echangeable contre des millions d’articles sur Amazon.fr.Possibilité de personnaliser sa carte cadeau selon l événement ou la passion du destinataire. Les cartes cadeaux Amazon.fr sont uniquement valables sur Amazon.fr.', 'prix' => '15',  'image' => '/img/amazon.png', 'note' => '3']);
        Produits::create(['titre' => 'Carte App Store & iTunes', 'description' => 'Valable uniquement pour les achats sur les Services Apple Media effectués en France. Nécessite un identifiant Apple et l’acceptation préalable des Conditions de licence et d’utilisation. Non monnayable, revente interdite, non utilisable en dehors de la France, non remboursable et non échangeable (sauf si requis par la loi). La collecte et l’utilisation des données sont sujettes à l Engagement de confidentialité d’Apple ;', 'prix' => '30',  'image' => '/img/itunes.png', 'note' => '5']);
        Produits::create(['titre' => 'Carte Cadeau Playstation+', 'description' => 'Achetez une carte cadeau PlayStation Store chez un revendeur en ligne. Vous recevrez alors un code par e-mail, que vous pourrez utiliser dans la boutique numérique de votre console PlayStation ou via votre navigateur web.', 'prix' => '50',  'image' => '/img/psn.png', 'note' => '1']);
        Produits::create(['titre' => 'Carte Google Play', 'description' => 'Un code, Des possibilités de jeu infinies, Trouvez votre bonheur parmi des millions d applis, de jeux et d autres produits Grâce à des millions d applis, de jeux et d autres produits, chacun peut trouver son bonheur sur Google Play. Utilisez une e-carte Google Play pour explorer un monde de divertissement infini, incluant vos jeux préférés et les applications dont vous ne pouvez plus vous passer. Il n y a pas de frais ni de date d expiration et aucune carte de crédit n est nécessaire pour commencer à jouer', 'prix' => '8',  'image' => '/img/google.png', 'note' => '4']);

        //ajout pour test paginations
        Produits::create(['titre' => 'Carte credit Fnac', 'description' => 'on ne peut pas s ennuyer avec un abonnement Disney+. Des productions originales en mmmmm quelque chose de nouveau à découvrir !', 'prix' => '10',  'image' => '/img/fnac.png', 'note' => '2']);
        Produits::create(['titre' => 'Carte credit Decatlon', 'description' => 'ns le Microsoft Store en ligne, sur Windows et Xbox. * Vous recevrez un e-mail avesions, des packs de cartes et bien plus encore.', 'prix' => '25',  'image' => '/img/decatlon.png', 'note' => '3']);
        Produits::create(['titre' => 'Carte Nintendo eshop', 'description' => 'ntenant ajouter des fonds au portemonnaie Steam d un proche en lui envoyant des une carte cadeau numérique. Envoyer une hhhhhhhh.', 'prix' => '10',  'image' => '/img/nintendo.png', 'note' => '3']);
        Produits::create(['titre' => 'Carte achat Zalando ', 'description' => 'Le ca choisir ce dont ils ont envie. Echangeable contre des millionrtes cadeaux Amazon.fr sont uniquement valables sur Amazon.fr.', 'prix' => '15',  'image' => '/img/zalando.png', 'note' => '2']);
        Produits::create(['titre' => 'Carte abonnement Spotify', 'description' => 'Valable . Nécessite un identifiant Apple et l’acceptation préalable d, non remboursable et non échangeabconfidentialité d’Apple ;', 'prix' => '30',  'image' => '/img/spotifi.png', 'note' => '1']);
        Produits::create(['titre' => 'Carte EA play', 'description' => 'Achetez ucevrez alors un code par e-mail, que vous pourrez utiliser dans la boutique numérique de votre via votre navigateur web.', 'prix' => '50',  'image' => '/img/eaplay.png', 'note' => '0']);


        produits_categories::create(['prod_id' => 1, 'categorie_id' => 2]);
        produits_categories::create(['prod_id' => 2, 'categorie_id' => 2]);
        produits_categories::create(['prod_id' => 3, 'categorie_id' => 1]);
        produits_categories::create(['prod_id' => 4, 'categorie_id' => 1]);
        produits_categories::create(['prod_id' => 5, 'categorie_id' => 2]);
        produits_categories::create(['prod_id' => 5, 'categorie_id' => 3]);
        produits_categories::create(['prod_id' => 6, 'categorie_id' => 2]);
        produits_categories::create(['prod_id' => 6, 'categorie_id' => 3]);
        produits_categories::create(['prod_id' => 7, 'categorie_id' => 1]);
        produits_categories::create(['prod_id' => 8, 'categorie_id' => 3]);
        produits_categories::create(['prod_id' => 8, 'categorie_id' => 1]);
        produits_categories::create(['prod_id' => 9, 'categorie_id' => 5]);
        produits_categories::create(['prod_id' => 10, 'categorie_id' => 4]);
        produits_categories::create(['prod_id' => 11, 'categorie_id' => 1]);
        produits_categories::create(['prod_id' => 12, 'categorie_id' => 4]);
        produits_categories::create(['prod_id' => 13, 'categorie_id' => 3]);
        produits_categories::create(['prod_id' => 14, 'categorie_id' => 1]);

        Comments::create(['user_id' => '6', 'product_id' => '1', 'contenu' => 'Ce cadeau est super !', 'note' => '5']);
        Comments::create(['user_id' => '7', 'product_id' => '2', 'contenu' => 'Ce cadeau est super !', 'note' => '2']);
        Comments::create(['user_id' => '8', 'product_id' => '3', 'contenu' => 'Ce cadeau est super !', 'note' => '2']);
        Comments::create(['user_id' => '9', 'product_id' => '4', 'contenu' => 'Ce cadeau est super !', 'note' => '1']);
        Comments::create(['user_id' => '2', 'product_id' => '5', 'contenu' => 'Ce cadeau est super !', 'note' => '3']);
        Comments::create(['user_id' => '4', 'product_id' => '6', 'contenu' => 'Ce cadeau est super !', 'note' => '5']);
        Comments::create(['user_id' => '1', 'product_id' => '7', 'contenu' => 'Ce cadeau est super !', 'note' => '1']);
        Comments::create(['user_id' => '1', 'product_id' => '8', 'contenu' => 'cadeau cool !', 'note' => '4']);
        Comments::create(['user_id' => '6', 'product_id' => '9', 'contenu' => 'cool !', 'note' => '2']);
        Comments::create(['user_id' => '7', 'product_id' => '10', 'contenu' => 'adore !', 'note' => '3']);
        Comments::create(['user_id' => '8', 'product_id' => '11', 'contenu' => 'bof !', 'note' => '3']);
        Comments::create(['user_id' => '4', 'product_id' => '12', 'contenu' => 'Ce cadeau est super !', 'note' => '2']);
        Comments::create(['user_id' => '1', 'product_id' => '13', 'contenu' => 'pas mal !', 'note' => '1']);
    }
}
