<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebDevelopmentBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Construire la page d’une association',
                'description' => 'Choisir un balisage HTML adapté à une page de présentation et à ses contenus.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'La page doit annoncer « Ateliers de lecture » comme titre principal visible. Choisissez le balisage adapté.',
                        'marks' => 1,
                        'explanation' => 'h1 exprime un titre de premier niveau dans le contenu. title sert au titre du document, notamment dans l’onglet du navigateur.',
                        'choices' => [
                            ['text' => '<h1>Ateliers de lecture</h1>', 'is_correct' => true],
                            ['text' => '<title>Ateliers de lecture</title>', 'is_correct' => false],
                            ['text' => '<strong>Ateliers de lecture</strong>', 'is_correct' => false],
                            ['text' => '<header>Ateliers de lecture</header>', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le texte de l’onglet doit devenir « Association Atlas ». L’élément à modifier dans head est :',
                        'marks' => 1,
                        'explanation' => 'L’élément title définit le titre du document. Un titre visible dans la page ne remplace pas ce titre.',
                        'choices' => [
                            ['text' => 'title', 'is_correct' => true],
                            ['text' => 'h1', 'is_correct' => false],
                            ['text' => 'nav', 'is_correct' => false],
                            ['text' => 'main', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un menu contient les liens vers les grandes rubriques du site. Son conteneur sémantique est :',
                        'marks' => 1,
                        'explanation' => 'nav identifie une section de navigation importante. Il aide notamment les utilisateurs de technologies d’assistance à repérer le menu.',
                        'choices' => [
                            ['text' => 'nav', 'is_correct' => true],
                            ['text' => 'section', 'is_correct' => false],
                            ['text' => 'footer', 'is_correct' => false],
                            ['text' => 'address', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le lien « Nous contacter » doit ouvrir la page contact.html. Retenez le fragment correct.',
                        'marks' => 1,
                        'explanation' => 'Un lien de navigation utilise a et son attribut href. src sert à intégrer certaines ressources, comme une image.',
                        'choices' => [
                            ['text' => '<a href="contact.html">Nous contacter</a>', 'is_correct' => true],
                            ['text' => '<a src="contact.html">Nous contacter</a>', 'is_correct' => false],
                            ['text' => '<link href="contact.html">Nous contacter</link>', 'is_correct' => false],
                            ['text' => '<button href="contact.html">Nous contacter</button>', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liste présente les étapes à suivre, dans un ordre obligatoire. Choisissez la structure de liste.',
                        'marks' => 1,
                        'explanation' => 'ol représente une liste ordonnée. Les éléments de la liste sont des li ; ul convient à une liste sans ordre significatif.',
                        'choices' => [
                            ['text' => 'ol contenant des li', 'is_correct' => true],
                            ['text' => 'ul contenant des li', 'is_correct' => false],
                            ['text' => 'dl contenant des p', 'is_correct' => false],
                            ['text' => 'nav contenant des h2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’article comprend une introduction, puis deux sous-parties de même importance sous son h1. Les titres de ces sous-parties seront :',
                        'marks' => 1,
                        'explanation' => 'Des sections au même niveau reçoivent des titres de même niveau. h3 exprimerait une sous-section d’un h2.',
                        'choices' => [
                            ['text' => 'Deux h2', 'is_correct' => true],
                            ['text' => 'Un h2 puis un h3', 'is_correct' => false],
                            ['text' => 'Deux title', 'is_correct' => false],
                            ['text' => 'Deux strong', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une photographie informative doit être intégrée à partir de atelier.jpg. La syntaxe adaptée est :',
                        'marks' => 1,
                        'explanation' => 'img charge l’image grâce à src. alt fournit une alternative textuelle pertinente lorsque l’image ne peut pas être perçue.',
                        'choices' => [
                            ['text' => '<img src="atelier.jpg" alt="Participants à un atelier de lecture">', 'is_correct' => true],
                            ['text' => '<img href="atelier.jpg" alt="Participants à un atelier de lecture">', 'is_correct' => false],
                            ['text' => '<a src="atelier.jpg">Participants à un atelier de lecture</a>', 'is_correct' => false],
                            ['text' => '<picture src="atelier.jpg">Participants à un atelier de lecture</picture>', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un séparateur purement décoratif est une image, sans lien ni information utile. Son alternative textuelle doit être :',
                        'marks' => 1,
                        'explanation' => 'Un alt vide permet généralement aux technologies d’assistance d’ignorer cette image décorative. L’absence de alt peut provoquer la lecture du nom de fichier.',
                        'choices' => [
                            ['text' => 'alt=""', 'is_correct' => true],
                            ['text' => 'alt="Image décorative"', 'is_correct' => false],
                            ['text' => 'Le nom du fichier dans alt', 'is_correct' => false],
                            ['text' => 'Un attribut alt absent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le fichier HTML référence styles.css, placé dans le même dossier. Choisissez la déclaration à mettre dans head.',
                        'marks' => 1,
                        'explanation' => 'link avec rel="stylesheet" relie une feuille CSS externe au document. style sert normalement à écrire des règles CSS directement.',
                        'choices' => [
                            ['text' => '<link rel="stylesheet" href="styles.css">', 'is_correct' => true],
                            ['text' => '<style src="styles.css"></style>', 'is_correct' => false],
                            ['text' => '<script src="styles.css"></script>', 'is_correct' => false],
                            ['text' => '<a rel="stylesheet" href="styles.css">Styles</a>', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le navigateur doit connaître la langue française de la page. Complétez l’élément racine.',
                        'marks' => 1,
                        'explanation' => 'lang indique la langue du contenu et aide notamment la prononciation par les lecteurs d’écran. L’encodage est une autre information.',
                        'choices' => [
                            ['text' => '<html lang="fr">', 'is_correct' => true],
                            ['text' => '<html charset="fr">', 'is_correct' => false],
                            ['text' => '<html type="fr">', 'is_correct' => false],
                            ['text' => '<html title="fr">', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mettre en forme une fiche de cours',
                'description' => 'Appliquer les sélecteurs, la cascade et les dimensions CSS à de petits exemples.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Tous les éléments portant class="fiche" doivent recevoir une bordure. Le sélecteur à utiliser est :',
                        'marks' => 1,
                        'explanation' => 'Le point sélectionne une classe. Le dièse sélectionne un identifiant et un nom sans préfixe sélectionne un type d’élément.',
                        'choices' => [
                            ['text' => '.fiche', 'is_correct' => true],
                            ['text' => '#fiche', 'is_correct' => false],
                            ['text' => 'fiche', 'is_correct' => false],
                            ['text' => '[id="fiche"]', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’unique élément id="resume" doit être ciblé. Retenez le sélecteur correspondant.',
                        'marks' => 1,
                        'explanation' => '#resume sélectionne l’élément portant cet identifiant. Un id doit être unique dans le document.',
                        'choices' => [
                            ['text' => '#resume', 'is_correct' => true],
                            ['text' => '.resume', 'is_correct' => false],
                            ['text' => 'resume', 'is_correct' => false],
                            ['text' => '[class="resume"]', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les liens situés à l’intérieur de .menu doivent être soulignés. Le sélecteur demandé est :',
                        'marks' => 1,
                        'explanation' => 'L’espace exprime une relation de descendant. a.menu sélectionnerait des liens qui possèdent eux-mêmes la classe menu.',
                        'choices' => [
                            ['text' => '.menu a', 'is_correct' => true],
                            ['text' => 'a.menu', 'is_correct' => false],
                            ['text' => '.menu + a', 'is_correct' => false],
                            ['text' => '.menu > span', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le texte d’un encadré doit devenir bleu sans changer son fond. Choisissez la déclaration.',
                        'marks' => 1,
                        'explanation' => 'color règle la couleur du texte. Les autres propriétés proposées concernent le fond ou les contours.',
                        'choices' => [
                            ['text' => 'color: blue;', 'is_correct' => true],
                            ['text' => 'background-color: blue;', 'is_correct' => false],
                            ['text' => 'border-color: blue;', 'is_correct' => false],
                            ['text' => 'outline-color: blue;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le texte touche la bordure intérieure d’une carte. Pour ajouter de l’espace entre texte et bordure, utilisez :',
                        'marks' => 1,
                        'explanation' => 'padding crée l’espacement intérieur. margin agit à l’extérieur de la bordure.',
                        'choices' => [
                            ['text' => 'padding', 'is_correct' => true],
                            ['text' => 'margin', 'is_correct' => false],
                            ['text' => 'gap sur la carte sans mise en page associée', 'is_correct' => false],
                            ['text' => 'outline-width', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux cartes voisines doivent être espacées à l’extérieur de leurs bordures. La propriété adaptée sur une carte est :',
                        'marks' => 1,
                        'explanation' => 'margin réserve un espace extérieur. padding agrandirait l’espace entre contenu et bordure.',
                        'choices' => [
                            ['text' => 'margin', 'is_correct' => true],
                            ['text' => 'padding', 'is_correct' => false],
                            ['text' => 'border-radius', 'is_correct' => false],
                            ['text' => 'text-indent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boîte a width: 200px, padding: 10px, border: 2px solid et box-sizing: content-box. Sa largeur extérieure, hors marge, vaut :',
                        'marks' => 2,
                        'explanation' => 'En content-box, la largeur indiquée concerne le contenu : 200 + 2 × 10 + 2 × 2 = 224 px.',
                        'choices' => [
                            ['text' => '224 px', 'is_correct' => true],
                            ['text' => '200 px', 'is_correct' => false],
                            ['text' => '212 px', 'is_correct' => false],
                            ['text' => '220 px', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le développeur veut que width: 200px inclue aussi les bordures et le padding. La règle à ajouter est :',
                        'marks' => 1,
                        'explanation' => 'border-box inclut le padding et la bordure dans la largeur déclarée. Les marges restent extérieures.',
                        'choices' => [
                            ['text' => 'box-sizing: border-box;', 'is_correct' => true],
                            ['text' => 'box-sizing: content-box;', 'is_correct' => false],
                            ['text' => 'overflow: hidden;', 'is_correct' => false],
                            ['text' => 'display: inline;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux règles ciblent exactement .titre dans la même couche et à priorité égale. La seconde apparaît plus bas dans la feuille. Le navigateur retient pour color :',
                        'marks' => 1,
                        'explanation' => 'À priorité et spécificité égales, l’ordre d’apparition départage les déclarations concurrentes.',
                        'choices' => [
                            ['text' => 'La valeur de la seconde règle', 'is_correct' => true],
                            ['text' => 'La valeur de la première règle', 'is_correct' => false],
                            ['text' => 'La moyenne des deux couleurs', 'is_correct' => false],
                            ['text' => 'La couleur du parent dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le conteneur doit disposer ses enfants avec Flexbox. Sa déclaration de départ est :',
                        'marks' => 1,
                        'explanation' => 'display: flex crée un conteneur flexible. Les propriétés Flexbox s’appliquent ensuite aux axes et aux éléments concernés.',
                        'choices' => [
                            ['text' => 'display: flex;', 'is_correct' => true],
                            ['text' => 'position: relative;', 'is_correct' => false],
                            ['text' => 'float: left;', 'is_correct' => false],
                            ['text' => 'text-align: center;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une photo doit conserver ses proportions et ne pas dépasser son conteneur. Retenez la paire de règles.',
                        'marks' => 1,
                        'explanation' => 'max-width limite la largeur et height: auto conserve le rapport de dimensions. Une hauteur fixe pourrait déformer l’image.',
                        'choices' => [
                            ['text' => 'max-width: 100%; height: auto;', 'is_correct' => true],
                            ['text' => 'width: 100%; height: 100px;', 'is_correct' => false],
                            ['text' => 'min-width: 100%; height: 100%;', 'is_correct' => false],
                            ['text' => 'width: auto; height: 100vh;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le lien reçoit un style particulier pendant le survol à la souris. La pseudo-classe concernée est :',
                        'marks' => 1,
                        'explanation' => ':hover correspond au survol par un dispositif de pointage. Il faut aussi prévoir un état de focus pour l’utilisation au clavier.',
                        'choices' => [
                            ['text' => ':hover', 'is_correct' => true],
                            ['text' => ':focus', 'is_correct' => false],
                            ['text' => ':checked', 'is_correct' => false],
                            ['text' => ':disabled', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Lire et modifier de petits programmes JavaScript',
                'description' => 'Interpréter des expressions, des tableaux et des fonctions simples.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Après let places = 3; places = places - 1;, la variable places contient :',
                        'marks' => 1,
                        'explanation' => 'places est un nombre et la soustraction donne 2. let autorise cette réaffectation.',
                        'choices' => [
                            ['text' => '2', 'is_correct' => true],
                            ['text' => '3', 'is_correct' => false],
                            ['text' => '1', 'is_correct' => false],
                            ['text' => 'La chaîne "3-1"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une référence ne doit jamais être réaffectée après sa déclaration. Le mot-clé adapté est :',
                        'marks' => 1,
                        'explanation' => 'const interdit de réaffecter la référence. Il ne rend pas automatiquement immuable le contenu d’un objet référencé.',
                        'choices' => [
                            ['text' => 'const', 'is_correct' => true],
                            ['text' => 'let', 'is_correct' => false],
                            ['text' => 'var', 'is_correct' => false],
                            ['text' => 'return', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’expression 4 === "4" produit :',
                        'marks' => 1,
                        'explanation' => 'L’égalité stricte n’effectue pas de conversion de type entre le nombre 4 et la chaîne "4".',
                        'choices' => [
                            ['text' => 'false', 'is_correct' => true],
                            ['text' => 'true', 'is_correct' => false],
                            ['text' => '4', 'is_correct' => false],
                            ['text' => '"true"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’expression "4" + 2 produit :',
                        'marks' => 1,
                        'explanation' => 'Avec une chaîne, l’opérateur + réalise ici une concaténation. Une conversion explicite est nécessaire pour additionner les nombres attendus.',
                        'choices' => [
                            ['text' => '"42"', 'is_correct' => true],
                            ['text' => '6', 'is_correct' => false],
                            ['text' => '2', 'is_correct' => false],
                            ['text' => 'Une erreur de syntaxe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le tableau const notes = [8, 12, 16]; est créé. notes[1] vaut :',
                        'marks' => 1,
                        'explanation' => 'Les indices d’un tableau commencent à zéro. L’indice 1 désigne donc le deuxième élément.',
                        'choices' => [
                            ['text' => '12', 'is_correct' => true],
                            ['text' => '8', 'is_correct' => false],
                            ['text' => '16', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après const noms = ["Amina"]; noms.push("Youssef");, noms.length vaut :',
                        'marks' => 1,
                        'explanation' => 'push ajoute un élément à la fin du tableau. La référence const reste identique tandis que le tableau est modifié.',
                        'choices' => [
                            ['text' => '2', 'is_correct' => true],
                            ['text' => '1', 'is_correct' => false],
                            ['text' => '0', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La fonction function double(n) { return n * 2; } est appelée avec double(6). Son résultat est :',
                        'marks' => 1,
                        'explanation' => 'return fournit au code appelant la valeur calculée, soit 6 × 2 = 12.',
                        'choices' => [
                            ['text' => '12', 'is_correct' => true],
                            ['text' => '6', 'is_correct' => false],
                            ['text' => '36', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’expression age >= 18 doit décider de l’accès à une activité. Elle renvoie une valeur de type :',
                        'marks' => 1,
                        'explanation' => 'Une comparaison renvoie true ou false. Elle ne modifie pas, à elle seule, la valeur de age.',
                        'choices' => [
                            ['text' => 'boolean', 'is_correct' => true],
                            ['text' => 'string', 'is_correct' => false],
                            ['text' => 'array', 'is_correct' => false],
                            ['text' => 'function', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec const livre = { titre: "Atlas", pages: 80 };, l’accès au nombre de pages s’écrit :',
                        'marks' => 1,
                        'explanation' => 'La notation point accède à une propriété nommée. La notation entre crochets attend une chaîne ou une expression définie.',
                        'choices' => [
                            ['text' => 'livre.pages', 'is_correct' => true],
                            ['text' => 'livre[pages] sans variable pages déclarée', 'is_correct' => false],
                            ['text' => 'livre.length', 'is_correct' => false],
                            ['text' => 'livre(80)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La chaîne \'{"actif":true}\' doit être convertie en valeur JavaScript. Utilisez :',
                        'marks' => 1,
                        'explanation' => 'JSON.parse analyse du texte JSON valide. JSON.stringify réalise la conversion dans l’autre sens.',
                        'choices' => [
                            ['text' => 'JSON.parse()', 'is_correct' => true],
                            ['text' => 'JSON.stringify()', 'is_correct' => false],
                            ['text' => 'String()', 'is_correct' => false],
                            ['text' => 'Array.isArray()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boucle for (let i = 0; i < 3; i++) appelle afficher(i). Les valeurs transmises sont :',
                        'marks' => 1,
                        'explanation' => 'La boucle commence à 0 et s’arrête avant 3, car la condition est strictement i < 3.',
                        'choices' => [
                            ['text' => '0, 1, 2', 'is_correct' => true],
                            ['text' => '1, 2, 3', 'is_correct' => false],
                            ['text' => '0, 1, 2, 3', 'is_correct' => false],
                            ['text' => '3 uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Faire réagir une page aux actions du visiteur',
                'description' => 'Manipuler le DOM et les événements sans confondre texte, attributs et éléments.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Le bouton porte id="inscription". L’expression qui récupère cet élément est :',
                        'marks' => 1,
                        'explanation' => 'getElementById recherche un identifiant existant. querySelector demanderait ici le sélecteur #inscription.',
                        'choices' => [
                            ['text' => 'document.getElementById("inscription")', 'is_correct' => true],
                            ['text' => 'document.getElementsByClassName("inscription")', 'is_correct' => false],
                            ['text' => 'document.querySelector("inscription")', 'is_correct' => false],
                            ['text' => 'document.createElement("inscription")', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs paragraphes portent la classe aide. Pour récupérer le premier seulement, utilisez :',
                        'marks' => 1,
                        'explanation' => 'querySelector renvoie le premier élément correspondant au sélecteur, ou null si aucun ne correspond.',
                        'choices' => [
                            ['text' => 'document.querySelector(".aide")', 'is_correct' => true],
                            ['text' => 'document.querySelectorAll(".aide")', 'is_correct' => false],
                            ['text' => 'document.getElementById("aide")', 'is_correct' => false],
                            ['text' => 'document.createElement("p")', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le paragraphe message doit afficher exactement le texte saisi par le visiteur, sans l’interpréter comme du HTML. L’affectation appropriée est :',
                        'marks' => 1,
                        'explanation' => 'textContent traite la valeur comme du texte. innerHTML analyserait du balisage, ce qui serait dangereux pour une saisie non fiable.',
                        'choices' => [
                            ['text' => 'message.textContent = saisie;', 'is_correct' => true],
                            ['text' => 'message.innerHTML = saisie;', 'is_correct' => false],
                            ['text' => 'message.style = saisie;', 'is_correct' => false],
                            ['text' => 'message.id = saisie;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction ouvrir doit être exécutée au clic sur bouton. Retenez l’instruction adaptée.',
                        'marks' => 1,
                        'explanation' => 'Il faut transmettre la fonction comme gestionnaire. ouvrir() l’exécuterait immédiatement au lieu de fournir cette fonction.',
                        'choices' => [
                            ['text' => 'bouton.addEventListener("click", ouvrir);', 'is_correct' => true],
                            ['text' => 'bouton.addEventListener("click", ouvrir());', 'is_correct' => false],
                            ['text' => 'bouton.removeEventListener("click", ouvrir);', 'is_correct' => false],
                            ['text' => 'bouton.click = ouvrir();', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un champ input existe dans la variable champ. Pour lire son contenu actuel, consultez :',
                        'marks' => 1,
                        'explanation' => 'La propriété value contient la valeur courante d’un champ input. Son contenu saisi n’est pas un nœud texte enfant.',
                        'choices' => [
                            ['text' => 'champ.value', 'is_correct' => true],
                            ['text' => 'champ.textContent', 'is_correct' => false],
                            ['text' => 'champ.innerHTML', 'is_correct' => false],
                            ['text' => 'champ.href', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le clic doit ajouter la classe actif à un élément sans effacer ses autres classes. Utilisez :',
                        'marks' => 1,
                        'explanation' => 'classList.add complète la liste de classes. Affecter className remplacerait toute cette liste.',
                        'choices' => [
                            ['text' => 'element.classList.add("actif");', 'is_correct' => true],
                            ['text' => 'element.className = "actif";', 'is_correct' => false],
                            ['text' => 'element.id = "actif";', 'is_correct' => false],
                            ['text' => 'element.textContent = "actif";', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un bouton doit alterner entre les états visuels ouvert et fermé, représentés par la présence de .ouvert. La méthode adaptée est :',
                        'marks' => 1,
                        'explanation' => 'toggle ajoute la classe lorsqu’elle manque et la retire lorsqu’elle est présente. contains ne fait qu’un test.',
                        'choices' => [
                            ['text' => 'classList.toggle("ouvert")', 'is_correct' => true],
                            ['text' => 'classList.contains("ouvert")', 'is_correct' => false],
                            ['text' => 'classList.add("ouvert") à chaque clic', 'is_correct' => false],
                            ['text' => 'classList.remove("ouvert") à chaque clic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script placé dans head utilise le DOM et ne doit pas s’exécuter avant l’analyse du HTML. Pour un script classique externe, ajoutez :',
                        'marks' => 1,
                        'explanation' => 'defer permet de télécharger le script pendant l’analyse et de l’exécuter après celle-ci. async ne garantit pas ce moment d’exécution.',
                        'choices' => [
                            ['text' => 'defer', 'is_correct' => true],
                            ['text' => 'async', 'is_correct' => false],
                            ['text' => 'nomodule', 'is_correct' => false],
                            ['text' => 'type="application/json"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le formulaire doit être traité par JavaScript, sans sa navigation de soumission habituelle. Dans le gestionnaire submit, appelez :',
                        'marks' => 1,
                        'explanation' => 'preventDefault annule l’action par défaut si l’événement est annulable. stopPropagation agit sur la propagation de l’événement.',
                        'choices' => [
                            ['text' => 'event.preventDefault();', 'is_correct' => true],
                            ['text' => 'event.stopPropagation();', 'is_correct' => false],
                            ['text' => 'formulaire.reset();', 'is_correct' => false],
                            ['text' => 'formulaire.focus();', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle ligne li doit être créée avant son ajout à une liste existante. Utilisez :',
                        'marks' => 1,
                        'explanation' => 'createElement construit un élément. createTextNode construirait uniquement un texte contenant les lettres li.',
                        'choices' => [
                            ['text' => 'document.createElement("li")', 'is_correct' => true],
                            ['text' => 'document.querySelector("li")', 'is_correct' => false],
                            ['text' => 'document.getElementById("li")', 'is_correct' => false],
                            ['text' => 'document.createTextNode("li")', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La ligne créée est stockée dans ligne et la liste dans liste. Pour l’ajouter en fin de liste, utilisez :',
                        'marks' => 1,
                        'explanation' => 'appendChild insère le nœud comme dernier enfant du parent visé. Inverser les objets produirait une structure différente.',
                        'choices' => [
                            ['text' => 'liste.appendChild(ligne);', 'is_correct' => true],
                            ['text' => 'ligne.appendChild(liste);', 'is_correct' => false],
                            ['text' => 'liste.removeChild(ligne);', 'is_correct' => false],
                            ['text' => 'liste.cloneNode(ligne);', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sélecteur ne trouve aucun élément et renvoie null. Avant d’appeler addEventListener, le code doit :',
                        'marks' => 1,
                        'explanation' => 'Appeler une méthode sur null provoque une erreur. Il faut vérifier le sélecteur, le moment d’exécution et l’existence de l’élément.',
                        'choices' => [
                            ['text' => 'Vérifier que l’élément existe', 'is_correct' => true],
                            ['text' => 'Convertir null en chaîne', 'is_correct' => false],
                            ['text' => 'Définir une couleur CSS', 'is_correct' => false],
                            ['text' => 'Appeler le gestionnaire immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une action, la console signale une erreur avec un fichier et un numéro de ligne. La première démarche utile est :',
                        'marks' => 1,
                        'explanation' => 'Le message et la ligne permettent de localiser une cause probable. Une modification sans lien avec l’erreur risque de masquer le problème.',
                        'choices' => [
                            ['text' => 'Lire le message et ouvrir la ligne indiquée', 'is_correct' => true],
                            ['text' => 'Effacer le fichier CSS', 'is_correct' => false],
                            ['text' => 'Modifier le nom de domaine', 'is_correct' => false],
                            ['text' => 'Ajouter des clics dans le gestionnaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Suivre le trajet d’une requête Web',
                'description' => 'Distinguer adresses, requêtes HTTP, réponses et responsabilités du navigateur et du serveur.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Dans https://exemple.test/cours?page=2, le nom d’hôte est :',
                        'marks' => 1,
                        'explanation' => 'L’hôte identifie ici le serveur visé par l’URL. Le schéma, le chemin et la chaîne de requête jouent des rôles distincts.',
                        'choices' => [
                            ['text' => 'exemple.test', 'is_correct' => true],
                            ['text' => 'https', 'is_correct' => false],
                            ['text' => '/cours', 'is_correct' => false],
                            ['text' => 'page=2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur ouvre /cours pour consulter une liste sans la modifier. La méthode HTTP attendue est :',
                        'marks' => 1,
                        'explanation' => 'GET sert à demander une représentation. Une consultation ne doit pas être conçue pour produire une modification métier.',
                        'choices' => [
                            ['text' => 'GET', 'is_correct' => true],
                            ['text' => 'POST', 'is_correct' => false],
                            ['text' => 'DELETE', 'is_correct' => false],
                            ['text' => 'PATCH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier CSS renvoie 404 dans l’onglet Réseau. L’interprétation appropriée est :',
                        'marks' => 1,
                        'explanation' => '404 indique que le serveur n’a pas trouvé de représentation pour la ressource demandée, ou refuse de révéler son existence. Vérifier l’URL est une première étape utile.',
                        'choices' => [
                            ['text' => 'La ressource demandée n’a pas été trouvée', 'is_correct' => true],
                            ['text' => 'La feuille CSS contient forcément une faute de couleur', 'is_correct' => false],
                            ['text' => 'Le navigateur refuse toute connexion HTTPS', 'is_correct' => false],
                            ['text' => 'La ressource a été créée avec succès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’API renvoie un statut 500. Cette famille d’erreurs concerne principalement :',
                        'marks' => 1,
                        'explanation' => 'Les statuts 5xx signalent une erreur côté serveur. Le détail de la cause doit être recherché dans les journaux et le traitement concerné.',
                        'choices' => [
                            ['text' => 'Un échec du traitement côté serveur', 'is_correct' => true],
                            ['text' => 'Une création de ressource réussie', 'is_correct' => false],
                            ['text' => 'Une redirection permanente', 'is_correct' => false],
                            ['text' => 'Une absence de connexion physique au réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réponse annonce Content-Type: application/json. Le navigateur reçoit un contenu déclaré comme :',
                        'marks' => 1,
                        'explanation' => 'Content-Type décrit le type de la représentation transmise. Le corps doit effectivement respecter le format annoncé.',
                        'choices' => [
                            ['text' => 'Des données JSON', 'is_correct' => true],
                            ['text' => 'Une feuille CSS', 'is_correct' => false],
                            ['text' => 'Une image JPEG', 'is_correct' => false],
                            ['text' => 'Un document PDF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le navigateur connaît le nom d’un domaine et doit obtenir une adresse réseau correspondante. Il utilise notamment :',
                        'marks' => 1,
                        'explanation' => 'Le DNS résout notamment des noms d’hôtes en adresses IP. Il ne définit ni la mise en page ni le contenu applicatif.',
                        'choices' => [
                            ['text' => 'DNS', 'is_correct' => true],
                            ['text' => 'HTML', 'is_correct' => false],
                            ['text' => 'CSS', 'is_correct' => false],
                            ['text' => 'JSON', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur un site HTTPS correctement configuré, TLS sert notamment à :',
                        'marks' => 1,
                        'explanation' => 'TLS protège le transport et permet de vérifier l’identité du serveur selon la confiance accordée au certificat. Il ne garantit pas la qualité du contenu.',
                        'choices' => [
                            ['text' => 'Chiffrer les échanges et authentifier le serveur', 'is_correct' => true],
                            ['text' => 'Garantir la véracité de tous les articles', 'is_correct' => false],
                            ['text' => 'Supprimer les erreurs de programmation', 'is_correct' => false],
                            ['text' => 'Empêcher toute panne de la base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valeur est envoyée dans ?recherche=javascript. Elle se trouve :',
                        'marks' => 1,
                        'explanation' => 'La partie introduite par ? contient les paramètres de requête. Ils peuvent apparaître dans l’historique et les journaux ; on n’y place pas de secret.',
                        'choices' => [
                            ['text' => 'Dans la chaîne de requête de l’URL', 'is_correct' => true],
                            ['text' => 'Dans la feuille de style', 'is_correct' => false],
                            ['text' => 'Dans le fragment après #', 'is_correct' => false],
                            ['text' => 'Dans le certificat TLS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le navigateur affiche un bouton de suppression, mais la décision d’autoriser la suppression doit être prise :',
                        'marks' => 1,
                        'explanation' => 'Le client peut être modifié par l’utilisateur. Le serveur doit vérifier les droits avant d’exécuter l’action.',
                        'choices' => [
                            ['text' => 'Par le serveur pour la requête reçue', 'is_correct' => true],
                            ['text' => 'Par le style CSS du bouton', 'is_correct' => false],
                            ['text' => 'Par le texte du lien uniquement', 'is_correct' => false],
                            ['text' => 'Par une variable modifiable dans le navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API renvoie la liste des cours à la fois au site et à une application mobile. Son rôle commun est de :',
                        'marks' => 1,
                        'explanation' => 'Une API expose un contrat utilisable par plusieurs clients. Chacun reste responsable de son interface et de son affichage.',
                        'choices' => [
                            ['text' => 'Fournir une interface d’accès aux données et opérations', 'is_correct' => true],
                            ['text' => 'Dessiner automatiquement les deux interfaces', 'is_correct' => false],
                            ['text' => 'Remplacer le navigateur des utilisateurs', 'is_correct' => false],
                            ['text' => 'Installer le système d’exploitation mobile', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Préparer un formulaire utilisable',
                'description' => 'Relier les contrôles à leurs libellés et distinguer confort de saisie et validation fiable.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un label doit être associé au champ id="courriel". L’attribut du label sera :',
                        'marks' => 1,
                        'explanation' => 'for doit correspondre à l’id du contrôle. Cette association fournit un nom accessible et permet notamment de cliquer sur le libellé.',
                        'choices' => [
                            ['text' => 'for="courriel"', 'is_correct' => true],
                            ['text' => 'name="courriel"', 'is_correct' => false],
                            ['text' => 'href="courriel"', 'is_correct' => false],
                            ['text' => 'value="courriel"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un formulaire doit envoyer le prénom sous la clé prenom. Sur le champ concerné, il faut définir :',
                        'marks' => 1,
                        'explanation' => 'name détermine la clé d’un contrôle lors de la soumission habituelle. id sert notamment aux sélecteurs et aux associations avec un label.',
                        'choices' => [
                            ['text' => 'name="prenom"', 'is_correct' => true],
                            ['text' => 'id="prenom" seulement', 'is_correct' => false],
                            ['text' => 'class="prenom" seulement', 'is_correct' => false],
                            ['text' => 'title="prenom" seulement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le champ doit bénéficier de la validation native d’une adresse électronique. Le type adapté est :',
                        'marks' => 1,
                        'explanation' => 'type="email" apporte une vérification de forme et peut adapter le clavier. Il ne prouve pas que l’adresse existe ou appartient au visiteur.',
                        'choices' => [
                            ['text' => 'email', 'is_correct' => true],
                            ['text' => 'text', 'is_correct' => false],
                            ['text' => 'password', 'is_correct' => false],
                            ['text' => 'search', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un champ ne doit pas rester vide lors d’une soumission native ordinaire. Ajoutez :',
                        'marks' => 1,
                        'explanation' => 'required active une contrainte de présence pour les contrôles concernés. Le serveur doit toujours vérifier les données reçues.',
                        'choices' => [
                            ['text' => 'required', 'is_correct' => true],
                            ['text' => 'readonly', 'is_correct' => false],
                            ['text' => 'disabled', 'is_correct' => false],
                            ['text' => 'autofocus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une indication temporaire apparaît dans le champ puis disparaît pendant la saisie. Pour garder un intitulé lisible, il faut :',
                        'marks' => 1,
                        'explanation' => 'Le placeholder ne remplace pas un libellé durable. Le visiteur doit continuer à identifier le champ après avoir commencé à le remplir.',
                        'choices' => [
                            ['text' => 'Ajouter un label visible et conserver l’indication comme aide', 'is_correct' => true],
                            ['text' => 'Utiliser uniquement le placeholder', 'is_correct' => false],
                            ['text' => 'Répéter la valeur dans l’attribut id', 'is_correct' => false],
                            ['text' => 'Remplacer le champ par une image de texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un bouton « Aperçu » situé dans un form ne doit pas soumettre ce formulaire. Son type doit être :',
                        'marks' => 1,
                        'explanation' => 'type="button" ne déclenche pas de soumission native. Un button sans type dans un formulaire est généralement un bouton de soumission.',
                        'choices' => [
                            ['text' => 'button', 'is_correct' => true],
                            ['text' => 'submit', 'is_correct' => false],
                            ['text' => 'reset', 'is_correct' => false],
                            ['text' => 'image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le contrôle doit permettre une réponse de plusieurs lignes. L’élément approprié est :',
                        'marks' => 1,
                        'explanation' => 'textarea est destiné au texte multiligne. Un input text représente une seule ligne de saisie.',
                        'choices' => [
                            ['text' => 'textarea', 'is_correct' => true],
                            ['text' => 'input type="text"', 'is_correct' => false],
                            ['text' => 'select', 'is_correct' => false],
                            ['text' => 'input type="hidden"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le visiteur doit choisir une seule ville parmi une liste déroulante sans sélection multiple. Utilisez :',
                        'marks' => 1,
                        'explanation' => 'Un select sans multiple permet une seule sélection parmi ses options. Des cases à cocher permettent normalement plusieurs choix indépendants.',
                        'choices' => [
                            ['text' => 'select contenant des option', 'is_correct' => true],
                            ['text' => 'textarea contenant des li', 'is_correct' => false],
                            ['text' => 'input type="checkbox" pour chaque ville', 'is_correct' => false],
                            ['text' => 'ul contenant des a', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux options radio doivent appartenir au même choix exclusif. Elles doivent partager :',
                        'marks' => 1,
                        'explanation' => 'Des boutons radio de même nom dans le même groupe de formulaire forment un choix exclusif. Leurs id et leurs valeurs doivent permettre de distinguer les options.',
                        'choices' => [
                            ['text' => 'Le même name', 'is_correct' => true],
                            ['text' => 'Le même id', 'is_correct' => false],
                            ['text' => 'Le même value', 'is_correct' => false],
                            ['text' => 'La même classe uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une case « Recevoir les nouvelles » représente un consentement facultatif indépendant. Le contrôle adapté est :',
                        'marks' => 1,
                        'explanation' => 'Une case à cocher représente un choix binaire indépendant. Une option radio sert plutôt à choisir dans un groupe.',
                        'choices' => [
                            ['text' => 'input type="checkbox"', 'is_correct' => true],
                            ['text' => 'input type="radio" isolé', 'is_correct' => false],
                            ['text' => 'input type="hidden"', 'is_correct' => false],
                            ['text' => 'input type="range"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le formulaire accepte un fichier PDF. Pour une soumission HTML classique avec transfert de fichier, choisissez l’encodage :',
                        'marks' => 1,
                        'explanation' => 'multipart/form-data permet d’envoyer notamment le contenu des fichiers avec les autres champs. L’attribut accept reste une aide et ne valide pas la sécurité du fichier.',
                        'choices' => [
                            ['text' => 'multipart/form-data', 'is_correct' => true],
                            ['text' => 'application/json', 'is_correct' => false],
                            ['text' => 'text/css', 'is_correct' => false],
                            ['text' => 'application/javascript', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un visiteur contourne required et envoie une valeur vide directement à l’API. Le serveur doit :',
                        'marks' => 1,
                        'explanation' => 'Les contraintes du navigateur améliorent l’expérience mais sont contournables. La validation serveur reste indispensable.',
                        'choices' => [
                            ['text' => 'Rejeter la valeur si elle viole les règles métier', 'is_correct' => true],
                            ['text' => 'L’accepter parce que le HTML portait required', 'is_correct' => false],
                            ['text' => 'Demander au CSS de la corriger', 'is_correct' => false],
                            ['text' => 'Faire confiance à l’absence d’erreur du navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le message « Date invalide » ne s’affiche qu’en rouge. Pour le rendre compréhensible sans distinguer les couleurs, il faut :',
                        'marks' => 1,
                        'explanation' => 'Une erreur doit être identifiée autrement que par la couleur. Un texte clair et une association au champ aident à comprendre et corriger la saisie.',
                        'choices' => [
                            ['text' => 'Ajouter un message textuel explicite lié au champ', 'is_correct' => true],
                            ['text' => 'Utiliser une autre nuance de rouge', 'is_correct' => false],
                            ['text' => 'Retirer le libellé du champ', 'is_correct' => false],
                            ['text' => 'Augmenter seulement la saturation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un champ de mot de passe masque les caractères à l’écran. Cela signifie que :',
                        'marks' => 1,
                        'explanation' => 'type="password" masque visuellement la saisie. Il ne remplace ni HTTPS, ni une gestion sûre côté serveur.',
                        'choices' => [
                            ['text' => 'L’affichage est masqué, mais le transport doit aussi être protégé', 'is_correct' => true],
                            ['text' => 'Le mot de passe est automatiquement haché en base', 'is_correct' => false],
                            ['text' => 'La connexion devient automatiquement HTTPS', 'is_correct' => false],
                            ['text' => 'Les scripts de la page ne peuvent jamais lire le champ', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Livrer et vérifier une première page',
                'description' => 'Utiliser les outils du navigateur, les chemins et le contrôle de version pour une petite livraison.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Le navigateur affiche une ancienne couleur après modification du fichier. Avant de réécrire la page, vérifiez :',
                        'marks' => 1,
                        'explanation' => 'L’inspection des styles et du réseau permet de détecter un mauvais chemin, une règle écrasée ou une ancienne ressource en cache.',
                        'choices' => [
                            ['text' => 'La feuille chargée et les règles appliquées', 'is_correct' => true],
                            ['text' => 'Le fichier source uniquement, sans regarder le navigateur', 'is_correct' => false],
                            ['text' => 'Le cache DNS uniquement, sans inspecter les styles', 'is_correct' => false],
                            ['text' => 'Le code HTML uniquement, sans vérifier le fichier CSS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Depuis https://exemple.test/cours/intro, le chemin /assets/logo.svg vise :',
                        'marks' => 1,
                        'explanation' => 'Un chemin qui commence par / est relatif à la racine de l’origine, et non au dossier de la page courante.',
                        'choices' => [
                            ['text' => 'https://exemple.test/assets/logo.svg', 'is_correct' => true],
                            ['text' => 'https://exemple.test/cours/assets/logo.svg', 'is_correct' => false],
                            ['text' => 'https://assets/logo.svg', 'is_correct' => false],
                            ['text' => 'https://exemple.test/cours/intro/assets/logo.svg', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La page est trop large sur un petit téléphone. La première vérification de mise en page doit porter sur :',
                        'marks' => 1,
                        'explanation' => 'Une largeur fixe importante ou un contenu non adaptable peut provoquer un défilement horizontal. L’outil d’affichage mobile aide à repérer l’élément en cause.',
                        'choices' => [
                            ['text' => 'Les éléments trop larges ou rigides', 'is_correct' => true],
                            ['text' => 'La qualité des images sans vérifier leurs dimensions affichées', 'is_correct' => false],
                            ['text' => 'La couleur des titres sans examiner les conteneurs', 'is_correct' => false],
                            ['text' => 'La longueur du fichier CSS sans inspecter la page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour permettre une mise en page mobile adaptée à la largeur de l’appareil, ajoutez dans head :',
                        'marks' => 1,
                        'explanation' => 'La métadonnée viewport configure la fenêtre de mise en page mobile. Elle ne remplace pas des règles CSS adaptatives.',
                        'choices' => [
                            ['text' => '<meta name="viewport" content="width=device-width, initial-scale=1">', 'is_correct' => true],
                            ['text' => '<meta charset="mobile">', 'is_correct' => false],
                            ['text' => '<meta name="description" content="width=device-width">', 'is_correct' => false],
                            ['text' => '<link rel="viewport" href="mobile.css">', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification doit pouvoir être retrouvée avec son auteur et son message. L’outil adapté au suivi du code est :',
                        'marks' => 1,
                        'explanation' => 'Git enregistre des versions du projet sous forme de commits. Un message précis facilite l’identification d’une modification.',
                        'choices' => [
                            ['text' => 'Git', 'is_correct' => true],
                            ['text' => 'Le cache du navigateur qui conserve des ressources', 'is_correct' => false],
                            ['text' => 'Un fichier ZIP écrasé à chaque modification', 'is_correct' => false],
                            ['text' => 'L’historique des pages consultées par le navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant d’enregistrer un commit, le développeur veut voir les fichiers modifiés. La commande adaptée est :',
                        'marks' => 1,
                        'explanation' => 'git status résume l’état du répertoire de travail et de l’index. git log consulte principalement les commits existants.',
                        'choices' => [
                            ['text' => 'git status', 'is_correct' => true],
                            ['text' => 'git log', 'is_correct' => false],
                            ['text' => 'git init', 'is_correct' => false],
                            ['text' => 'git clone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bibliothèque est installée via npm. Le fichier décrivant les dépendances déclarées du projet est :',
                        'marks' => 1,
                        'explanation' => 'package.json contient notamment les dépendances et les scripts du projet. Le fichier de verrouillage précise la résolution des versions.',
                        'choices' => [
                            ['text' => 'package.json', 'is_correct' => true],
                            ['text' => 'index.html', 'is_correct' => false],
                            ['text' => 'robots.txt', 'is_correct' => false],
                            ['text' => '.gitignore', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clé API secrète du serveur est ajoutée au JavaScript livré au navigateur. Il faut :',
                        'marks' => 1,
                        'explanation' => 'Le code et les valeurs reçus par le navigateur sont inspectables. Une clé publique prévue pour le client est différente d’un secret serveur.',
                        'choices' => [
                            ['text' => 'Utiliser ce secret depuis un service serveur protégé', 'is_correct' => true],
                            ['text' => 'Le déplacer dans une variable JavaScript dont le nom est moins explicite', 'is_correct' => false],
                            ['text' => 'Le conserver dans le bundle minifié pour empêcher sa lecture', 'is_correct' => false],
                            ['text' => 'Le placer dans un champ HTML caché pour limiter sa visibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le site semble correct à la souris. Une vérification complémentaire indispensable pour les interactions est de :',
                        'marks' => 1,
                        'explanation' => 'Les liens, boutons et champs doivent être accessibles au clavier avec un focus repérable. L’apparence à la souris ne suffit pas.',
                        'choices' => [
                            ['text' => 'Parcourir les contrôles au clavier', 'is_correct' => true],
                            ['text' => 'Tester uniquement les clics dans un second navigateur', 'is_correct' => false],
                            ['text' => 'Vérifier les images sans essayer les formulaires', 'is_correct' => false],
                            ['text' => 'Contrôler seulement que les liens changent de couleur au survol', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le formulaire fonctionne en local. Avant sa livraison, un contrôle utile est de :',
                        'marks' => 1,
                        'explanation' => 'Une livraison exige de vérifier des cas d’échec et le comportement réel avec le serveur, en plus du parcours idéal.',
                        'choices' => [
                            ['text' => 'Essayer les erreurs et les contextes réels d’utilisation', 'is_correct' => true],
                            ['text' => 'Tester seulement le parcours réussi sur l’ordinateur du développeur', 'is_correct' => false],
                            ['text' => 'Valider la page HTML sans envoyer de données au serveur', 'is_correct' => false],
                            ['text' => 'Vérifier la compilation sans ouvrir la page produite', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Introduction au développement Web',
            'HTML et structure des pages',
            'CSS et mise en forme',
            'JavaScript — fondamentaux',
            'DOM et interactions',
            'HTTP et fonctionnement du Web',
            'API et Web dynamique',
            'Bases du Web moderne',
        ];

        DB::transaction(function () use ($subject, $quizzes, $legacyTitles): void {
            foreach ($quizzes as $quizData) {
                $questionCount = count($quizData['questions']);
                $totalMarks = array_sum(array_column($quizData['questions'], 'marks'));

                $quiz = Quiz::updateOrCreate(
                    [
                        'subject_id' => $subject->id,
                        'owner_id' => null,
                        'title' => $quizData['title'],
                    ],
                    [
                        'owner_id' => null,
                        'description' => $quizData['description'],
                        'difficulty' => $quizData['difficulty'],
                        'duration' => $quizData['duration'],
                        'passing_score' => $quizData['passing_score'],
                        'total_marks' => $totalMarks,
                        'is_active' => true,
                    ]
                );

                foreach ($quizData['questions'] as $index => $questionData) {
                    $question = $quiz->questions()->updateOrCreate(
                        ['order' => $index + 1],
                        [
                            'question' => $questionData['question'],
                            'type' => 'multiple_choice',
                            'marks' => $questionData['marks'],
                            'explanation' => $questionData['explanation'],
                        ]
                    );

                    $question->choices()->delete();

                    // Le frontend gère le mélange des choix et des questions.
                    foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                        $question->choices()->create([
                            'choice_text' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $choiceIndex + 1,
                        ]);
                    }
                }

                $quiz->questions()->where('order', '>', $questionCount)->delete();
            }

            // Les anciens quiz restent conservés mais ne doublonnent plus le catalogue actif.
            Quiz::where('subject_id', $subject->id)
                ->whereNull('owner_id')
                ->whereIn('title', $legacyTitles)
                ->whereNotIn('title', array_column($quizzes, 'title'))
                ->update(['is_active' => false]);
        });
    }
}
