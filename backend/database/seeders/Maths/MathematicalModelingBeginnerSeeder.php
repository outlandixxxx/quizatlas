<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MathematicalModelingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mathematical-modeling')->firstOrFail();

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Introduction à la modélisation mathématique',
                'description' => 'Définir modèle, variables, hypothèses et sorties.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Variables, paramètres et unités',
                'description' => 'Interpréter variables, paramètres et cohérence dimensionnelle.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Modèles proportionnels et linéaires',
                'description' => 'Construire des relations proportionnelles et affines.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Modèles quadratiques et exponentiels',
                'description' => 'Reconnaître des modèles non linéaires simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Hypothèses et simplifications',
                'description' => 'Évaluer le rôle des hypothèses.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Ajustement et validation d’un modèle',
                'description' => 'Comparer prédictions et données.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Sensibilité et interprétation',
                'description' => 'Mesurer l\'effet des paramètres.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Révision générale de la modélisation mathématique',
                'description' => 'Synthèse des idées de modélisation.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
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
                        'explanation' => $questionData['explanation'],
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
