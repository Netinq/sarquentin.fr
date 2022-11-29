<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contents')->delete();
        
        \DB::table('contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section_id' => 1,
                'htmlclass' => 'title',
                'content' => 'Créons votre site web  <br><span>sur mesure.</span>',
            ),
            1 => 
            array (
                'id' => 2,
                'section_id' => 1,
                'htmlclass' => 'description',
                'content' => 'Développeur web freelance, je vous accompagne dans la réalisation de votre projet de site internet pour votre entreprise ou votre activité. Je vous propose des solutions sur mesure, adaptées à vos besoins et à votre budget.',
            ),
            2 => 
            array (
                'id' => 3,
                'section_id' => 2,
                'htmlclass' => 'pre',
                'content' => 'Définissons',
            ),
            3 => 
            array (
                'id' => 4,
                'section_id' => 2,
                'htmlclass' => 'title',
                'content' => 'Notre ligne directrice.',
            ),
            4 => 
            array (
                'id' => 5,
                'section_id' => 2,
                'htmlclass' => 'description',
                'content' => 'Plus qu\'une simple prestation de service, je vous offre un accompagnement complet tout au long de votre             projet, afin de placer le client au centre du projet.',
            ),
            5 => 
            array (
                'id' => 6,
                'section_id' => 2,
                'htmlclass' => 'first',
                'content' => 'Echanger pour définir vos besoins.',
            ),
            6 => 
            array (
                'id' => 7,
                'section_id' => 2,
                'htmlclass' => 'second',
                'content' => 'Concevoir un design pour votre site.',
            ),
            7 => 
            array (
                'id' => 8,
                'section_id' => 2,
                'htmlclass' => 'third',
                'content' => 'Coder votre site internet.',
            ),
            8 => 
            array (
                'id' => 9,
                'section_id' => 2,
                'htmlclass' => 'fourth',
                'content' => 'Mettre en ligne et référencer votre site.',
            ),
            9 => 
            array (
                'id' => 10,
                'section_id' => 3,
                'htmlclass' => 'pre',
                'content' => 'Des prestations',
            ),
            10 => 
            array (
                'id' => 11,
                'section_id' => 3,
                'htmlclass' => 'title',
                'content' => 'Pour tous vos besoins<span>.</span>',
            ),
            11 => 
            array (
                'id' => 12,
                'section_id' => 3,
                'htmlclass' => 'description',
                'content' => 'Une gamme de service 360° qui s\'adapte à tous vos besoin pour vous permettre d\'avoir le meilleur             accompagnement possible dans la réalisation de votre projet web.',
            ),
            12 => 
            array (
                'id' => 13,
                'section_id' => 3,
                'htmlclass' => 'firstTitle',
                'content' => 'Création et refonte de site internet.',
            ),
            13 => 
            array (
                'id' => 14,
                'section_id' => 3,
                'htmlclass' => 'firstDescription',
                'content' => 'Des solutions entièrement sur mesure utilisant des technologies adaptées à vos besoins.',
            ),
            14 => 
            array (
                'id' => 15,
                'section_id' => 3,
                'htmlclass' => 'secondTitle',
                'content' => 'Webdesign UX & UI design.',
            ),
            15 => 
            array (
                'id' => 16,
                'section_id' => 3,
                'htmlclass' => 'secondDescription',
                'content' => 'Une identité visuelle propre à votre site sera créé afin d\'avoir un design sur-mesure.',
            ),
            16 => 
            array (
                'id' => 17,
                'section_id' => 3,
                'htmlclass' => 'thirdTitle',
                'content' => 'Maintenance et déploiement.',
            ),
            17 => 
            array (
                'id' => 18,
                'section_id' => 3,
                'htmlclass' => 'thirdDescription',
                'content' => 'Après le déploiement, l\'accompagnement continue avec des services de maintenance.',
            ),
            18 => 
            array (
                'id' => 19,
                'section_id' => 4,
                'htmlclass' => 'pre',
                'content' => 'parce que',
            ),
            19 => 
            array (
                'id' => 20,
                'section_id' => 4,
                'htmlclass' => 'title',
                'content' => 'Vos avis comptent<span>.</span>',
            ),
            20 => 
            array (
                'id' => 21,
                'section_id' => 4,
                'htmlclass' => 'description',
                'content' => 'L\'avis des clients me permet de constamment améliorer l\'accompagnement conformément à ma charte de qualité.',
            ),
            21 => 
            array (
                'id' => 22,
                'section_id' => 5,
                'htmlclass' => 'pre',
                'content' => 'Nous avons pu',
            ),
            22 => 
            array (
                'id' => 23,
                'section_id' => 5,
                'htmlclass' => 'title',
                'content' => 'travailler ensemble<span>.</span>',
            ),
            23 => 
            array (
                'id' => 24,
                'section_id' => 5,
                'htmlclass' => 'description',
                'content' => 'Sur ces différents projets, j\'ai eu la chance de pouvoir accompagner différentes personnes/sociétés dans divers projets et divers domaines d\'activité.',
            ),
            24 => 
            array (
                'id' => 25,
                'section_id' => 6,
                'htmlclass' => 'title',
                'content' => 'Echangeons dès maintenant !',
            ),
            25 => 
            array (
                'id' => 26,
                'section_id' => 6,
                'htmlclass' => 'description',
                'content' => 'N\'hésitez pas à me contacter dès maintenant pour des éventuelles questions, ou pour me présenter votre projet de réalisation web.',
            ),
            26 => 
            array (
                'id' => 27,
                'section_id' => 6,
                'htmlclass' => 'phone',
                'content' => '07 50 97 68 93',
            ),
            27 => 
            array (
                'id' => 28,
                'section_id' => 6,
                'htmlclass' => 'phoneText',
                'content' => 'Si vous préférez avoir un contact rapide ou un échange oral avec moi.',
            ),
            28 => 
            array (
                'id' => 29,
                'section_id' => 6,
                'htmlclass' => 'email',
                'content' => 'pro@sarquentin.fr',
            ),
            29 => 
            array (
                'id' => 30,
                'section_id' => 6,
                'htmlclass' => 'emailText',
                'content' => 'Si vous préférez échanger par écrit pour me poser des questions ou me soumettre un projet.',
            ),
        ));
        
        
    }
}