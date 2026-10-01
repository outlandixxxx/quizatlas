<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicsOfInnovationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economics-of-innovation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de l’innovation',
                'description' => 'Introduction aux notions d’innovation, d’invention, de progrès technique et de création de valeur.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise lance un nouveau procédé qui permet de fabriquer le même produit avec moins de matières premières. Comment qualifier cette évolution ?',
                        'explanation' => 'L’innovation ne consiste pas seulement à créer un produit entièrement nouveau : une amélioration significative d’un procédé de production peut aussi être une innovation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une innovation de procédé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une fusion d’entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une politique budgétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation distingue le mieux une invention d’une innovation ?',
                        'explanation' => 'Une invention correspond à la création ou à la découverte d’une nouvelle idée ou technique, tandis qu’une innovation implique son application utile, notamment dans une activité économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Une invention crée une idée ou une technique, tandis qu’une innovation met cette nouveauté en application',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une invention est toujours rentable et une innovation ne l’est jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une invention concerne uniquement les logiciels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une innovation doit forcément être protégée par un brevet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’innovation peut-elle améliorer la productivité d’une entreprise ?',
                        'explanation' => 'Une nouvelle technologie ou une meilleure organisation peut permettre de produire davantage avec une quantité donnée de ressources, ou la même production avec moins de ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut permettre d’obtenir plus de production avec les mêmes ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime automatiquement toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit des prix plus élevés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle réduit nécessairement la demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une innovation de produit ?',
                        'explanation' => 'Une innovation de produit modifie ou améliore le bien ou le service proposé aux utilisateurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Le lancement d’un appareil électroménager doté d’une nouvelle fonction utile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le remplacement d’une imprimante au bureau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction du loyer d’un magasin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le changement de banque de l’entreprise',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur favorise directement la diffusion d’une nouvelle technologie ?',
                        'explanation' => 'La diffusion est facilitée lorsque les utilisateurs peuvent accéder à la technologie, la comprendre et en tirer un avantage économique.',
                        'choices' => [
                            [
                                'choice_text' => 'La disponibilité d’informations et de compétences pour l’utiliser',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’interdiction de toute imitation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fermeture du marché aux nouveaux produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse automatique de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise adopte un logiciel déjà utilisé avec succès par plusieurs concurrents. Quelle notion illustre cette décision ?',
                        'explanation' => 'La diffusion technologique désigne l’adoption d’une innovation par de nouveaux utilisateurs ou organisations.',
                        'choices' => [
                            [
                                'choice_text' => 'L’adoption d’une technologie existante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’invention d’un bien totalement nouveau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dépréciation du capital',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’entrepreneur dans de nombreux processus d’innovation ?',
                        'explanation' => 'L’entrepreneur peut identifier une opportunité, mobiliser des ressources et prendre le risque de mettre une nouveauté sur le marché.',
                        'choices' => [
                            [
                                'choice_text' => 'Identifier une opportunité et organiser les ressources nécessaires à sa mise en œuvre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fixer directement les taux d’intérêt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir que chaque innovation réussira',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer systématiquement la recherche publique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une idée nouvelle n’est-elle pas automatiquement une innovation économique ?',
                        'explanation' => 'Une idée doit généralement être transformée en application utilisable ou en offre effectivement mise en œuvre pour produire un effet économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle doit être mise en pratique et adoptée pour produire un effet économique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une idée doit toujours être gratuite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toute innovation doit être publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une idée économique ne peut jamais être brevetée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel changement est le plus susceptible d’être considéré comme une amélioration incrémentale ?',
                        'explanation' => 'Une innovation incrémentale apporte une amélioration progressive à une solution existante plutôt qu’une rupture complète.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer légèrement l’autonomie d’un modèle existant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Abandonner tout produit pour entrer dans un secteur sans rapport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fermer une usine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire les horaires d’ouverture',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise investit dans une machine plus précise et réduit ainsi les défauts de fabrication. Quel résultat économique est plausible ?',
                        'explanation' => 'Une baisse des défauts peut réduire les pertes et améliorer l’efficacité de la production.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de la productivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition du besoin de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique des impôts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution certaine de la qualité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le progrès technique désigne principalement :',
                        'explanation' => 'Le progrès technique renvoie à l’amélioration des méthodes et technologies utilisées pour produire des biens et services.',
                        'choices' => [
                            [
                                'choice_text' => 'L’amélioration des techniques utilisées pour produire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’augmentation automatique des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La hausse du nombre de consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La diminution du commerce',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Recherche-développement et connaissances',
                'description' => 'Comprendre le rôle de la recherche-développement, des connaissances, des compétences et des dépenses consacrées à l’innovation.',
                'duration' => 23,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Que signifie l’abréviation R&D dans le contexte de l’innovation ?',
                        'explanation' => 'La R&D regroupe les activités de recherche et développement destinées à produire ou améliorer des connaissances, produits ou procédés.',
                        'choices' => [
                            [
                                'choice_text' => 'Recherche et développement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Régulation et distribution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Risque et dette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendement et demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise consacre-t-elle des ressources à la R&D ?',
                        'explanation' => 'La R&D peut créer de nouvelles connaissances utiles à la mise au point de produits, services ou procédés futurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour développer ou améliorer des produits, services ou procédés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour réduire automatiquement les charges fiscales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer tous les salariés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher les consommateurs de comparer les prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une équipe de chercheurs découvre une méthode de conservation qui pourrait réduire les pertes alimentaires. À ce stade, quel élément reste notamment nécessaire avant une commercialisation ?',
                        'explanation' => 'Une découverte scientifique doit souvent être transformée en solution techniquement et économiquement utilisable.',
                        'choices' => [
                            [
                                'choice_text' => 'Transformer la connaissance en une application utilisable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toute étude complémentaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter obligatoirement le prix du produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire toute diffusion de l’idée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente le mieux une connaissance codifiée ?',
                        'explanation' => 'Une connaissance codifiée peut être mise sous forme de documents, procédures, plans ou formules transmissibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Un manuel décrivant précisément une procédure de production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une habileté manuelle difficile à expliquer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une intuition personnelle non formulée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une habitude informelle d’un salarié',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les compétences des salariés comptent-elles dans l’innovation ?',
                        'explanation' => 'Des salariés qualifiés peuvent comprendre de nouvelles technologies, résoudre des problèmes et contribuer à leur amélioration.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles facilitent l’utilisation et l’adaptation de nouvelles technologies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles garantissent toujours un monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles remplacent le besoin d’information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment le risque commercial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise collabore avec une université pour tester une nouvelle technologie. Quel avantage peut résulter de cette coopération ?',
                        'explanation' => 'Les partenariats peuvent donner accès à des compétences, des équipements et des connaissances complémentaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Combiner des connaissances et des compétences complémentaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éliminer tous les coûts de recherche',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir que le produit sera accepté par tous',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la concurrence mondiale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses de R&D comportent-elles un risque économique ?',
                        'explanation' => 'Les résultats d’une recherche sont incertains et ne débouchent pas nécessairement sur une innovation commercialement réussie.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un projet de recherche peut ne pas produire de résultat commercial exploitable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la R&D ne demande jamais de ressources',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une innovation échoue toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises ne peuvent jamais apprendre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation montre un apprentissage par la pratique ?',
                        'explanation' => 'L’apprentissage par la pratique vient de l’expérience accumulée en réalisant effectivement une activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Des opérateurs améliorent progressivement une méthode après plusieurs cycles de production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une entreprise lit une publicité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un consommateur change de magasin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une banque augmente son taux d’intérêt',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise observe les retours de ses clients et améliore progressivement son application. Quel mécanisme est illustré ?',
                        'explanation' => 'Les retours d’usage peuvent fournir des informations utiles à l’amélioration d’un produit existant.',
                        'choices' => [
                            [
                                'choice_text' => 'L’apprentissage à partir de l’expérience des utilisateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La politique commerciale extérieure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La création d’une taxe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse de l’offre de travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple peut-on faire entre recherche fondamentale et recherche appliquée ?',
                        'explanation' => 'La recherche fondamentale vise surtout l’avancement général des connaissances, tandis que la recherche appliquée cherche à résoudre un problème pratique précis.',
                        'choices' => [
                            [
                                'choice_text' => 'La recherche appliquée vise davantage une utilisation pratique d’une connaissance',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La recherche fondamentale concerne uniquement le commerce',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La recherche appliquée ne produit jamais de connaissance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux termes désignent exactement la même activité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les connaissances peuvent-elles avoir des effets au-delà de l’entreprise qui les produit ?',
                        'explanation' => 'Une découverte peut inspirer ou être réutilisée par d’autres acteurs, ce qui crée des effets de connaissance plus larges.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que certaines connaissances peuvent bénéficier indirectement à d’autres acteurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises partagent toujours tous leurs secrets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une invention ne peut jamais être protégée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toute connaissance devient immédiatement gratuite',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Brevets et incitations à innover',
                'description' => 'Notions introductives sur la propriété intellectuelle, les brevets et les incitations économiques à l’innovation.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif général d’un brevet ?',
                        'explanation' => 'Le brevet accorde, sous certaines conditions légales, un droit exclusif temporaire sur une invention afin d’encourager son développement et sa divulgation.',
                        'choices' => [
                            [
                                'choice_text' => 'Accorder un droit exclusif temporaire sur une invention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir un bénéfice permanent à l’inventeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire toute recherche scientifique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fixer le prix de tous les produits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un droit exclusif temporaire peut-il encourager l’innovation ?',
                        'explanation' => 'Un droit exclusif peut donner à l’innovateur une possibilité de récupérer une partie de ses coûts de recherche et développement.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il peut permettre de récupérer une partie des dépenses engagées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il supprime toute concurrence pour toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il garantit une demande élevée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il élimine le risque technologique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dépose un brevet sur un nouveau dispositif médical. Quel enjeu économique cherche-t-elle notamment à protéger ?',
                        'explanation' => 'La protection juridique peut limiter l’utilisation commerciale non autorisée de l’invention pendant la période prévue.',
                        'choices' => [
                            [
                                'choice_text' => 'La valeur économique de son invention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le niveau général des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix des matières premières mondiales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La croissance démographique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle limite économique peut être associée à un brevet ?',
                        'explanation' => 'Un brevet peut aussi réduire temporairement la concurrence sur l’invention et donc permettre un prix plus élevé qu’en concurrence immédiate.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut limiter temporairement la concurrence sur l’invention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il interdit toujours la recherche scientifique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il réduit automatiquement les coûts de production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il supprime la nécessité d’innover après son expiration',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tous les secrets d’entreprise ne prennent-ils pas nécessairement la forme d’un brevet ?',
                        'explanation' => 'Une entreprise peut préférer garder certaines informations confidentielles lorsque cette protection est possible et adaptée à son activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que certaines informations peuvent être conservées comme secrets commerciaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un brevet ne peut jamais protéger une invention',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises ne peuvent pas choisir leur stratégie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les secrets sont toujours publics',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un brevet arrive à expiration, que se passe-t-il en principe ?',
                        'explanation' => 'À l’expiration, le droit exclusif lié au brevet prend fin selon les règles applicables, ce qui permet davantage d’utilisation et de concurrence autour de l’invention.',
                        'choices' => [
                            [
                                'choice_text' => 'Le droit exclusif du brevet prend fin',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’inventeur devient propriétaire de tout le marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le produit devient automatiquement gratuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La technologie disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une petite entreprise hésite à financer une invention parce qu’elle craint qu’un concurrent copie immédiatement le résultat. Quel rôle une protection juridique peut-elle jouer ?',
                        'explanation' => 'Une protection de propriété intellectuelle peut réduire le risque lié à une imitation commerciale non autorisée dans le cadre des règles applicables.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire le risque d’appropriation commerciale non autorisée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir la réussite commerciale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les coûts de production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Empêcher toute amélioration par d’autres acteurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le système de brevets peut-il aussi favoriser la diffusion des connaissances ?',
                        'explanation' => 'Le brevet est lié à la divulgation d’informations sur l’invention, ce qui rend une partie de la connaissance accessible au public selon le système juridique concerné.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le dépôt d’un brevet s’accompagne d’une divulgation de l’invention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un brevet garde toute information secrète',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un brevet interdit toute imitation après expiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un brevet remplace les universités',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut constituer une mauvaise utilisation du pouvoir lié à une innovation protégée ?',
                        'explanation' => 'Une entreprise protégée peut tenter de fixer des conditions qui réduisent la concurrence au-delà de ce que permet normalement le droit applicable.',
                        'choices' => [
                            [
                                'choice_text' => 'Exploiter un pouvoir de marché de manière contraire aux règles de concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Investir dans la recherche',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Former ses salariés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Améliorer la qualité du produit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit de ne pas breveter une formule mais garde la recette confidentielle. Quelle stratégie utilise-t-elle ?',
                        'explanation' => 'Le secret commercial repose sur la confidentialité plutôt que sur un droit exclusif public issu d’un brevet.',
                        'choices' => [
                            [
                                'choice_text' => 'Le secret commercial',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La politique monétaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La franchise fiscale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commerce extérieur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre entre protection de l’innovation et concurrence est-il important ?',
                        'explanation' => 'Une protection trop faible peut réduire les incitations à investir, tandis qu’une protection trop forte peut limiter l’accès et la concurrence pendant trop longtemps.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut concilier incitations à innover et diffusion/concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il faut supprimer tous les droits de propriété',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’innovation n’a aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les marchés technologiques sont toujours parfaits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Technologie, productivité et croissance',
                'description' => 'Relier les innovations technologiques à la productivité, à l’investissement et aux évolutions de long terme.',
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Une usine produit 1 000 unités avec 100 heures de travail. Après une innovation, elle produit 1 200 unités avec les mêmes 100 heures. Que peut-on conclure ?',
                        'explanation' => 'La production par heure de travail passe de 10 à 12 unités, ce qui traduit une hausse de la productivité du travail.',
                        'choices' => [
                            [
                                'choice_text' => 'La productivité du travail a augmenté',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre d’heures de travail a augmenté',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande a nécessairement baissé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les coûts sont nécessairement devenus nuls',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’adoption d’une technologie récente peut-elle nécessiter un investissement complémentaire ?',
                        'explanation' => 'Une nouvelle technologie peut demander des équipements, une formation ou des adaptations organisationnelles avant de produire pleinement ses effets.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut parfois financer des équipements, des logiciels ou des formations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute technologie fonctionne gratuitement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’investissement réduit toujours la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une technologie ne nécessite jamais de compétences',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lien simple existe entre innovation et croissance économique de long terme ?',
                        'explanation' => 'L’innovation peut accroître la productivité et donc contribuer à une augmentation durable de la production potentielle.',
                        'choices' => [
                            [
                                'choice_text' => 'L’innovation peut soutenir la croissance en augmentant la productivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’innovation réduit toujours la production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La croissance dépend uniquement du nombre de consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’innovation n’affecte jamais les entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise automatise une tâche répétitive mais réaffecte les salariés vers le contrôle qualité. Quelle interprétation est la plus adaptée ?',
                        'explanation' => 'L’automatisation peut modifier la combinaison de travail et de capital et déplacer le travail vers des tâches à plus forte valeur ajoutée.',
                        'choices' => [
                            [
                                'choice_text' => 'La technologie peut transformer les tâches plutôt que supprimer tout le travail',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toute automatisation détruit nécessairement tous les emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les salariés deviennent inutiles dans tous les secteurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le capital et le travail ne peuvent jamais être combinés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur reflète directement la production moyenne par travailleur ?',
                        'explanation' => 'La productivité du travail rapporte la production à la quantité de travail utilisée.',
                        'choices' => [
                            [
                                'choice_text' => 'La production par travailleur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux de change nominal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le niveau des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La quantité de monnaie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une économie investit dans de meilleures infrastructures numériques et les entreprises deviennent plus efficaces. Quel mécanisme est plausible ?',
                        'explanation' => 'Des infrastructures numériques adaptées peuvent réduire certains coûts et faciliter l’accès à l’information et aux technologies.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration des infrastructures peut soutenir la productivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les infrastructures suppriment la rareté',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le progrès technique réduit toujours la qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises cessent d’avoir besoin de clients',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’innovation peut-elle avoir des effets différents selon les secteurs ?',
                        'explanation' => 'Les possibilités d’amélioration, les compétences et les technologies disponibles ne sont pas les mêmes dans toutes les activités.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les secteurs n’ont pas les mêmes technologies, contraintes et opportunités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les secteurs utilisent exactement les mêmes procédés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la productivité est fixe par nature',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les innovations ne touchent jamais les services',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une technologie permet de réduire de 20 à 15 minutes le temps nécessaire pour une même opération. Quel est l’effet direct recherché ?',
                        'explanation' => 'Moins de temps nécessaire par unité produite signifie une amélioration de l’efficacité du processus.',
                        'choices' => [
                            [
                                'choice_text' => 'Une réduction du temps de production par opération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique du nombre de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression du besoin de capital',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une innovation doit-elle être adoptée pour avoir un effet large sur la productivité d’une économie ?',
                        'explanation' => 'Une technologie non utilisée ne transforme pas les pratiques de production à grande échelle.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une technologie non adoptée ne modifie pas réellement les processus de production concernés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les inventions sont toujours interdites',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la productivité ne dépend jamais de la technologie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les travailleurs refusent toujours les nouvelles méthodes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre un gain de productivité grâce à une meilleure organisation ?',
                        'explanation' => 'Modifier le rangement d’un entrepôt pour réduire les déplacements inutiles améliore l’efficacité sans changer nécessairement les machines.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire les déplacements inutiles dans un entrepôt grâce à une meilleure organisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter le prix de vente sans changer la production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire le nombre de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Changer le logo de l’entreprise',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur le long terme, pourquoi les compétences et la technologie sont-elles souvent considérées comme complémentaires ?',
                        'explanation' => 'Des technologies plus avancées peuvent nécessiter des compétences permettant de les utiliser, de les adapter et d’en tirer pleinement parti.',
                        'choices' => [
                            [
                                'choice_text' => 'Des compétences adaptées facilitent l’utilisation efficace des nouvelles technologies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les compétences rendent la technologie inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La technologie remplace toutes les connaissances',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les compétences n’affectent jamais la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diffusion et adoption des technologies',
                'description' => 'Étudier comment les innovations se diffusent entre entreprises, ménages et territoires, et les facteurs qui facilitent leur adoption.',
                'duration' => 21,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => 'Pourquoi une nouvelle technologie n’est-elle pas adoptée simultanément par toutes les entreprises ?',
                        'explanation' => 'Les entreprises diffèrent par leurs ressources, leurs besoins, leur information et leur capacité à supporter le coût de l’adoption.',
                        'choices' => [
                            [
                                'choice_text' => 'Les entreprises ont des ressources, coûts et besoins différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une technologie ne peut être utilisée que par une entreprise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la diffusion est toujours interdite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les marchés empêchent toute imitation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite à adopter un logiciel parce que ses salariés ne savent pas encore l’utiliser. Quel obstacle est illustré ?',
                        'explanation' => 'Le manque de compétences peut augmenter le coût d’adoption et retarder la diffusion d’une technologie.',
                        'choices' => [
                            [
                                'choice_text' => 'Le besoin de formation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse du capital humain déjà acquis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction fiscale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la diffusion technologique à l’échelle d’un secteur ?',
                        'explanation' => 'Il s’agit du fait qu’une technologie ou une pratique nouvelle est progressivement adoptée par davantage d’entreprises du secteur.',
                        'choices' => [
                            [
                                'choice_text' => 'L’adoption progressive d’une technologie par un nombre croissant d’entreprises',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La disparition des machines anciennes en une journée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La création d’une monnaie commune',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse des échanges entre entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût initial d’une technologie peut-il ralentir son adoption ?',
                        'explanation' => 'Un coût élevé augmente les ressources à mobiliser avant que les gains futurs ne soient réalisés.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’investissement initial peut être difficile à financer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un coût élevé garantit toujours une adoption rapide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises ne tiennent jamais compte des coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la technologie devient automatiquement moins utile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Des entreprises voisines adoptent une méthode nouvelle et obtiennent de bons résultats. Une entreprise locale décide à son tour de l’adopter. Quel mécanisme peut intervenir ?',
                        'explanation' => 'L’observation des résultats d’autres entreprises réduit l’incertitude et fournit de l’information sur l’utilité de la technologie.',
                        'choices' => [
                            [
                                'choice_text' => 'L’apprentissage par observation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse de la population active',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une politique de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une taxe environnementale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures de télécommunication peuvent-elles accélérer la diffusion numérique ?',
                        'explanation' => 'De bonnes infrastructures facilitent l’accès aux réseaux, aux logiciels, aux données et aux échanges d’informations.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles facilitent l’accès aux réseaux et aux informations nécessaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles empêchent toute innovation locale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles rendent les compétences inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment les coûts de formation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle technologie est rentable pour les grandes entreprises mais pas encore pour de petites entreprises. Quelle explication est plausible ?',
                        'explanation' => 'Les économies d’échelle ou les coûts fixes peuvent rendre la technologie plus avantageuse à grande échelle.',
                        'choices' => [
                            [
                                'choice_text' => 'Les coûts fixes peuvent être plus faciles à supporter à grande échelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les petites entreprises ne peuvent jamais innover',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les grandes entreprises n’ont aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La technologie ne peut être utilisée que par les monopoles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut augmenter la probabilité qu’un ménage adopte une nouvelle application de paiement ?',
                        'explanation' => 'La confiance dans le système et la facilité d’utilisation peuvent réduire les obstacles à l’adoption.',
                        'choices' => [
                            [
                                'choice_text' => 'La facilité d’utilisation et la confiance dans le service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absence totale d’information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’interdiction des paiements numériques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression de tout accès à Internet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la compatibilité avec les équipements existants peut-elle compter dans une décision d’adoption ?',
                        'explanation' => 'Une technologie compatible peut nécessiter moins de dépenses de remplacement ou d’adaptation.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire les coûts de changement et d’adaptation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle rend la technologie automatiquement gratuite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit un monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la nécessité d’un fournisseur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une technologie devient moins coûteuse à mesure qu’elle est produite à grande échelle. Quel effet peut-on attendre sur sa diffusion ?',
                        'explanation' => 'La baisse du coût unitaire peut rendre la technologie accessible à davantage d’utilisateurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une adoption potentiellement plus large',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une diminution certaine de sa qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction obligatoire de la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition de toute concurrence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer l’apprentissage dans la diffusion d’une innovation ?',
                        'explanation' => 'Avec l’expérience, les utilisateurs peuvent mieux comprendre la technologie et diminuer certains coûts ou erreurs d’utilisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut réduire progressivement les coûts et difficultés d’utilisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il empêche toute adaptation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il augmente toujours le prix de la technologie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il supprime les différences entre utilisateurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Entrepreneuriat, start-up et innovation',
                'description' => 'Comprendre le rôle des entrepreneurs, du financement, des jeunes entreprises et des incitations dans les processus d’innovation.',
                'duration' => 24,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Une start-up développe une application répondant à un besoin encore mal desservi. Quel rôle entrepreneurial est illustré ?',
                        'explanation' => 'L’entrepreneuriat consiste notamment à identifier des opportunités et à mobiliser des ressources dans un contexte d’incertitude.',
                        'choices' => [
                            [
                                'choice_text' => 'Identifier une opportunité et prendre un risque pour la mettre en œuvre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fixer les taux d’intérêt nationaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la population active',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir les prix de tous les marchés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une jeune entreprise innovante peut-elle avoir besoin de financement externe ?',
                        'explanation' => 'Elle peut avoir des dépenses de développement importantes avant de générer suffisamment de recettes.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour financer ses dépenses avant que les revenus ne soient suffisants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle ne supporte aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’innovation ne peut jamais être financée sur fonds propres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une start-up n’a pas besoin de ressources',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur fournit des fonds à une jeune entreprise en échange d’une participation au capital. Quel type de financement s’agit-il ?',
                        'explanation' => 'Un financement en fonds propres donne à l’investisseur une part de propriété de l’entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'Un financement en fonds propres',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un impôt indirect',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une subvention automatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un dépôt à vue',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque est-il particulièrement important pour les entrepreneurs innovants ?',
                        'explanation' => 'Le marché futur, les coûts et l’accueil des clients sont incertains, surtout lorsqu’un produit est nouveau.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les résultats futurs d’un projet nouveau sont incertains',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les projets innovants réussissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entrepreneurs connaissent toujours la demande exacte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’innovation ne demande jamais d’investissement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise teste une nouvelle offre auprès d’un petit nombre de clients avant de la lancer plus largement. Quel intérêt cette démarche peut-elle avoir ?',
                        'explanation' => 'Un test limité permet de recueillir des retours et de réduire une partie de l’incertitude avant un lancement plus large.',
                        'choices' => [
                            [
                                'choice_text' => 'Recueillir des informations avant d’engager davantage de ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éliminer définitivement toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir un profit dès le premier jour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Empêcher les clients de donner leur avis',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écosystème d’innovation peut-il être utile à une jeune entreprise ?',
                        'explanation' => 'Les réseaux de recherche, de financement, d’accompagnement et de compétences peuvent compléter les ressources limitées d’une jeune entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut donner accès à des compétences, des partenaires et des financements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il supprime tous les risques commerciaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il garantit la réussite de toute start-up',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les besoins des clients',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un incubateur ?',
                        'explanation' => 'Un incubateur accompagne de jeunes entreprises en leur fournissant notamment un cadre, des conseils ou un accès à des réseaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Une structure qui accompagne des jeunes entreprises dans leur développement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une banque centrale qui fixe les taux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une entreprise qui vend uniquement des matières premières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un service public qui collecte les impôts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’échec d’un projet innovant ne signifie-t-il pas nécessairement que l’activité entrepreneuriale a été inutile ?',
                        'explanation' => 'L’expérience peut générer des connaissances, des compétences et des informations utiles pour de futurs projets.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’expérience acquise peut être réutilisée dans d’autres projets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les échecs créent un profit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un projet échoué ne coûte rien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’innovation ne dépend pas de l’apprentissage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entrepreneuse choisit d’améliorer progressivement son produit en fonction des retours des utilisateurs. Quelle stratégie suit-elle ?',
                        'explanation' => 'Cette démarche correspond à une amélioration continue fondée sur l’apprentissage du marché.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration progressive fondée sur les retours des utilisateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une sortie du marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction automatique de l’investissement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de toute expérimentation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence peut-elle pousser les entreprises à innover ?',
                        'explanation' => 'La concurrence peut créer une incitation à améliorer les produits, réduire certains coûts ou proposer de nouvelles solutions pour attirer les clients.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les entreprises cherchent à se différencier et à rester attractives',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la concurrence garantit toujours les profits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises concurrentes ne partagent jamais de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’innovation est obligatoire dans tous les secteurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut aider une jeune entreprise à transformer une invention en produit commercial ?',
                        'explanation' => 'Elle a besoin notamment de ressources, de compétences, d’organisation et d’accès au marché.',
                        'choices' => [
                            [
                                'choice_text' => 'La combinaison de financement, compétences et accès au marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement une idée originale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement un brevet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement une baisse des impôts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Destruction créatrice et transformation des marchés',
                'description' => 'Découvrir comment les innovations transforment les entreprises, les emplois, les produits et la concurrence.',
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Que décrit l’expression « destruction créatrice » dans l’analyse économique de l’innovation ?',
                        'explanation' => 'Elle désigne un processus dans lequel de nouvelles activités et technologies apparaissent tandis que certaines activités anciennes perdent leur place.',
                        'choices' => [
                            [
                                'choice_text' => 'La création de nouvelles activités accompagnée du recul de certaines activités anciennes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La destruction physique de toutes les usines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition définitive de la concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse générale des salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un service de réservation numérique réduit fortement l’usage d’un ancien système de réservation sur papier. Quelle évolution est illustrée ?',
                        'explanation' => 'Une innovation peut remplacer certaines méthodes existantes lorsqu’elle offre un service plus adapté ou moins coûteux.',
                        'choices' => [
                            [
                                'choice_text' => 'Le remplacement d’une méthode ancienne par une solution nouvelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse de la demande de papier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une innovation peut-elle créer de nouveaux emplois tout en en faisant disparaître certains ?',
                        'explanation' => 'Les technologies modifient la demande de compétences et les tâches ; certaines activités progressent et d’autres diminuent.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle peut déplacer l’emploi entre tâches, secteurs et métiers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que l’emploi total change toujours dans le même sens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les machines créent tous les emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une innovation ne touche jamais le travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple montre une transformation de la structure d’un marché ?',
                        'explanation' => 'L’apparition d’une nouvelle plateforme change les parts de marché des entreprises et les habitudes des clients.',
                        'choices' => [
                            [
                                'choice_text' => 'Une nouvelle plateforme gagne des clients tandis que des entreprises traditionnelles en perdent',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux d’intérêt reste inchangé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La quantité de pluie augmente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un salarié prend une pause',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les innovations peuvent-elles augmenter le choix offert aux consommateurs ?',
                        'explanation' => 'De nouveaux produits, services et modèles économiques élargissent potentiellement l’ensemble des solutions disponibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent introduire de nouveaux produits ou services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles réduisent toujours le nombre de produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment toute préférence des consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles rendent tous les biens identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ancienne investit dans une technologie nouvelle pour ne pas perdre ses clients. Quel mécanisme de marché est visible ?',
                        'explanation' => 'La menace de perdre des clients peut inciter une entreprise existante à s’adapter technologiquement.',
                        'choices' => [
                            [
                                'choice_text' => 'Une pression concurrentielle à l’adaptation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression de la concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une garantie de monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la destruction créatrice peut-elle entraîner des coûts d’ajustement pour les travailleurs ?',
                        'explanation' => 'Les compétences demandées peuvent changer et certains emplois peuvent disparaître avant que de nouvelles opportunités soient accessibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la transition entre anciens et nouveaux emplois peut demander du temps et de la formation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les entreprises ferment ensemble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les nouvelles technologies réduisent toujours les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les travailleurs ne peuvent jamais apprendre de nouvelles compétences',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une technologie nouvelle rend un équipement ancien moins utile. Quel type d’effet économique cela représente-t-il ?',
                        'explanation' => 'Lorsqu’une nouvelle technologie réduit la valeur économique d’un équipement existant, on parle notamment d’obsolescence.',
                        'choices' => [
                            [
                                'choice_text' => 'Une obsolescence technologique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une spécialisation agricole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une politique budgétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage peut apporter la transformation numérique à une petite entreprise ?',
                        'explanation' => 'Elle peut faciliter l’accès à certains clients, outils de gestion ou canaux de vente avec des coûts parfois plus faibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Accéder à de nouveaux clients ou améliorer certaines opérations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éliminer tous les risques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter tout investissement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir une position de monopole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets d’une innovation peuvent-ils être différents à court et à long terme ?',
                        'explanation' => 'À court terme, l’adaptation peut coûter cher, tandis qu’à long terme les entreprises et travailleurs ont davantage de temps pour apprendre et réallouer leurs ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Les coûts d’adaptation et les bénéfices peuvent apparaître à des moments différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une innovation change toujours les prix deux fois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les marchés ne fonctionnent qu’à long terme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les technologies cessent d’évoluer à court terme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle politique d’accompagnement peut aider les travailleurs affectés par une transformation technologique ?',
                        'explanation' => 'La formation et l’aide à la reconversion peuvent faciliter le passage vers les nouvelles compétences demandées.',
                        'choices' => [
                            [
                                'choice_text' => 'La formation et la reconversion professionnelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’interdiction générale des technologies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression de toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fermeture des écoles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Synthèse : économie de l’innovation',
                'description' => 'Révision générale des mécanismes fondamentaux reliant innovation, connaissances, investissement, concurrence, productivité et adoption technologique.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une entreprise dépense aujourd’hui pour développer un produit qui pourrait générer des revenus dans deux ans. Quel problème économique rencontre-t-elle ?',
                        'explanation' => 'La R&D demande des ressources aujourd’hui alors que les résultats et revenus futurs sont incertains et différés.',
                        'choices' => [
                            [
                                'choice_text' => 'Un arbitrage entre coûts présents et bénéfices futurs incertains',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une certitude de profit immédiat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de l’investissement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire du capital humain',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle machine coûte 200 000 dirhams et permet de réduire durablement certains coûts de production. Quelle question économique doit notamment se poser l’entreprise ?',
                        'explanation' => 'L’entreprise doit comparer le coût d’investissement aux économies ou revenus supplémentaires attendus, en tenant compte du temps et du risque.',
                        'choices' => [
                            [
                                'choice_text' => 'Si les gains attendus justifient le coût de l’investissement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Si la machine augmente toujours le nombre de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Si le brevet est obligatoire dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Si la technologie supprime tous les coûts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une innovation est disponible mais peu d’entreprises l’utilisent faute de personnel qualifié. Quel obstacle à la diffusion est mis en évidence ?',
                        'explanation' => 'L’absence de compétences adaptées peut rendre une technologie difficile ou coûteuse à mettre en œuvre.',
                        'choices' => [
                            [
                                'choice_text' => 'Le manque de compétences',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse du stock de monnaie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une absence de concurrence internationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les externalités de connaissance peuvent-elles justifier un soutien public à la R&D ?',
                        'explanation' => 'Les bénéfices d’une connaissance peuvent profiter à d’autres acteurs sans que le producteur initial en récupère toute la valeur, ce qui peut conduire le marché à investir moins que le niveau socialement souhaitable.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une partie des bénéfices de la connaissance peut profiter à d’autres acteurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute R&D est publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises ne prennent jamais de risque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les brevets garantissent toujours un rendement nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise protège une invention, mais décide aussi de publier des informations techniques dans le cadre du brevet. Quel compromis est illustré ?',
                        'explanation' => 'Le système de brevet combine une protection temporaire de l’invention avec une divulgation destinée à enrichir le stock de connaissances accessibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Concilier incitation privée et divulgation des connaissances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toute concurrence pour toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre l’invention secrète à vie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter tout investissement en R&D',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle technologie augmente la production par heure travaillée mais nécessite une formation initiale. Comment interpréter l’ensemble ?',
                        'explanation' => 'La formation représente un coût d’adaptation à court terme, tandis que le gain de productivité peut apparaître après l’adoption.',
                        'choices' => [
                            [
                                'choice_text' => 'Un coût d’adoption initial peut être compensé par des gains de productivité futurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La formation réduit toujours la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La technologie est inutile si elle demande une formation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les coûts futurs n’ont aucune importance',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une innovation améliore un service sans créer un produit totalement nouveau. Est-elle nécessairement hors du champ de l’innovation ?',
                        'explanation' => 'L’innovation peut porter sur les services, les procédés, l’organisation ou d’autres améliorations significatives, pas seulement sur des produits entièrement nouveaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, une amélioration significative d’un service ou d’un procédé peut aussi être une innovation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Oui, seules les inventions scientifiques sont des innovations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, une innovation doit être un produit physique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, une innovation doit toujours être brevetée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise copie une technologie déjà courante dans son secteur et améliore son utilisation grâce à une meilleure organisation. Quel élément nouveau peut encore créer de la valeur ?',
                        'explanation' => 'La diffusion d’une technologie peut être accompagnée d’innovations organisationnelles qui améliorent son efficacité.',
                        'choices' => [
                            [
                                'choice_text' => 'L’amélioration de l’organisation et de l’usage de la technologie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression des compétences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition du marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction automatique de la demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’adoption d’une technologie peut-elle dépendre de la taille de l’entreprise ?',
                        'explanation' => 'Certaines technologies comportent des coûts fixes ou demandent un volume d’utilisation suffisant pour être rentables.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les coûts fixes et les économies d’échelle peuvent varier selon la taille',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que seules les grandes entreprises ont des clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les petites entreprises ne peuvent jamais investir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les grandes entreprises ne prennent aucun risque',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus directement lié à l’effet d’une innovation sur l’efficacité productive ?',
                        'explanation' => 'La productivité mesure la quantité de production obtenue par unité de ressource utilisée.',
                        'choices' => [
                            [
                                'choice_text' => 'La production obtenue par unité de facteur utilisé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de brevets déposés uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de concurrents uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le montant des taxes uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle combinaison décrit le mieux un environnement favorable à l’innovation ?',
                        'explanation' => 'L’innovation est favorisée par des compétences, des possibilités de financement, des institutions adaptées, de l’information et des marchés permettant d’expérimenter et d’adopter des nouveautés.',
                        'choices' => [
                            [
                                'choice_text' => 'Compétences, financement, information et institutions adaptées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Interdiction de l’expérimentation et absence de financement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Prix administrés pour tous les biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Absence totale de concurrence et de formation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];

                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}