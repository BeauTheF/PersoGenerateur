<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Personnage::class, function (Faker\Generator $faker) {
    
    //Variable de création-----------------------------------
    
    $personage=[
        'espece' =>"",
        'race' =>"",
        'sexe' =>"",
        'age' =>"",
        'ageType' =>"",
        'cadre' =>"",
        'capForce' =>"",
        'capEndurence' =>"",
        'capCordination' =>"",
        'capAparence' =>"",
        'capInteligence' =>"",
        'capStabilite' =>"",
        'capEmpatie' =>"",
        'capReflexe' =>"",
        'appCouleurPeau' =>"",
        'appCouleurFourure' =>"",
        'appTypeFourure' =>"",
        'appCouleurCheveux' =>"",
        'appTypeCheveux' =>"",
        'appTypeVisage' =>"",
        'appTypeOreille' =>"",
        'appTypeTeteRace' =>"",
        'appTypeAutre' =>"",
        'culture' =>"",
        'nom' =>"",
        'prenom' =>"",
        'origine' =>"",
        'classeSocial' =>"",
        'education' =>"",
        'personalite' =>"",
        'inclinaison' =>"",
        'trais' =>"",
        'handicape' =>"",
        'maladieMalediction' =>"",
        'description' =>"",
        'image' =>"",
        'imageH' =>"",
        'imageW' =>"",
    ];
    
    $nb=0; //Varivable de nombre 
    $nbSup=0; //Varivable de nombre suplementaire
    $prob=0; //Variable de probabiliter
    $rack=''; //Variable de racourcie variable
    
    //Donnée de création-------------------------------------
    
    $espece=[
        'Humain' => [
            'nomEspece' => 'Humain',
            'ageMin' => '16',
            'ageMax' => '100',
            'ageAdulte' => '25',
            'ageAines' => '50',
            'ageVieux' => '70',
            'nomType' => 'fr_FR',
            'race' => [
                '_race1' => [
                    'nomRace' => '_race1',
                    'cadre'   => '_cadre',
                    'capaciterRank' => [
                        'capForce'       => 'A',
                        'capEndurence'   => 'A',
                        'capCordination' => 'A',
                        'capAparence'    => 'A',
                        'capInteligence' => 'A',
                        'capStabilite'   => 'A',
                        'capEmpatie'     => 'A',
                        'capReflexe'     => 'A',
                    ],
                    'cultureRace' => [
                        '_nomCulture1',
                    ],
                    'apparence'   => [
                        'couleurPeau'     => '_couleurPeau',
                        'couleurFourure'  => [
                            '_couleur1','_couleur2','_couleur3',
                        ],
                        'typeFourure'     => [
                            '_type1','_type2','_type3',
                        ],
                        'couleurCheveux'  => [
                            '_couleur1','_couleur2','_couleur3',
                        ],
                        'typeTeteRace'    => "",
                    ],
                ],
            ],
        ],
    ];
    
    $monde=[
        '_paysNom' => [
            'nom' => '_paysNom',
            'geographieType' => '_geographie',
            'groupeCoulturel' => [
                '_nomCulture1' => [
                    'nom' => '_nomCulture1',
                    'taileCulture' => 'majoritaire',
                ]
            ]
        ]
    ];
    
    $apparence=[
        'typeCheveux' => [
            'Aïdar','Brosse','Cadenette','Catogan','Cheveux longs','Chignon','Coiffure éponyme','Coupe au bol','Coupe au carré','Coupe pixie','Fontange','Frange','Front haut','Guazze','Nuque longue','Permanente','Queue de rat','Queue-de-cheval','Tonsure','Tresse',
        ],
        'typeAutre' => [
            'cicatrice','tatouage','pearsing','lunette','echarpe','canne','éventail','boutons de manchette','rien'
        ],
    ];
    
    $classeSocial=[
        'majoritaire' => [
            '1'=> [
                'nomClasse'=>'noble',
                'probabilite'=>5,
            ],
            '2'=> [
                'nomClasse'=>'seigneur',
                'probabilite'=>10,
            ],
            '3'=> [
                'nomClasse'=>'religeuse',
                'probabilite'=>15,
            ],
            '4'=> [
                'nomClasse'=>'guerriere',
                'probabilite'=>20,
            ],
            '5'=> [
                'nomClasse'=>'marchande',
                'probabilite'=>30,
            ],
            '6'=> [
                'nomClasse'=>'lettré',
                'probabilite'=>30,
            ],
            '7'=> [
                'nomClasse'=>'artisant',
                'probabilite'=>40,
            ],
            '8'=> [
                'nomClasse'=>'meunier',
                'probabilite'=>40,
            ],
            '9'=> [
                'nomClasse'=>'serfs',
                'probabilite'=>80,
            ],
            '10'=> [
                'nomClasse'=>'mendiant',
                'probabilite'=>50,
            ],
        ],
        'minoritaire' => [
            '1'=> [
                'nomClasse'=>'religeuse',
                'probabilite'=>5,
            ],
            '2'=> [
                'nomClasse'=>'guerriere',
                'probabilite'=>5,
            ],
            '3'=> [
                'nomClasse'=>'marchande',
                'probabilite'=>40,
            ],
            '4'=> [
                'nomClasse'=>'lettré',
                'probabilite'=>20,
            ],
            '5'=> [
                'nomClasse'=>'artisant',
                'probabilite'=>30,
            ],
            '6'=> [
                'nomClasse'=>'meunier',
                'probabilite'=>30,
            ],
            '7'=> [
                'nomClasse'=>'serfs',
                'probabilite'=>80,
            ],
            '8'=> [
                'nomClasse'=>'mendiant',
                'probabilite'=>60,
            ],
            '9'=> [
                'nomClasse'=>'nomade',
                'probabilite'=>20,
            ],
        ],
        'rare' => [
            '1'=> [
                'nomClasse'=>'marchande',
                'probabilite'=>5,
            ],
            '2'=> [
                'nomClasse'=>'lettré',
                'probabilite'=>5,
            ],
            '3'=> [
                'nomClasse'=>'artisant',
                'probabilite'=>10,
            ],
            '4'=> [
                'nomClasse'=>'meunier',
                'probabilite'=>10,
            ],
            '5'=> [
                'nomClasse'=>'serfs',
                'probabilite'=>50,
            ],
            '6'=> [
                'nomClasse'=>'mendiant',
                'probabilite'=>70,
            ],
            '7'=> [
                'nomClasse'=>'nomade',
                'probabilite'=>60,
            ],
        ],
    ];
    
    $personalite=[
        'normal'=>[
            1 =>'Prudent',
            2 =>'Imprudent',
            3 =>'Polie',
            4 =>'Vulgere',
            5 =>'Exigeant',
            6 =>'Vague',
            7 =>'Genereux',
            8 =>'Avide',
            9 =>'Parleur',
            10=>'Reservé',
            11=>'Gentil',
            12=>'Cuelle',
            13=>'Responsable',
            14=>'Irresponsable',
            15=>'Modeste',
            16=>'Orgueilleux',
            17=>'Direct',
            18=>'Sournois',
            19=>'Amical',
            20=>'Cynique',
        ],
        'psycopate'=>[
            1 =>'Paranoiaque',
            2 =>'Manique',
            3 =>'Flagorneur',
            4 =>'Obscene',
            5 =>'Perfectioniste',
            6 =>'Apathique',
            7 =>'Gaspilleur',
            8 =>'Misèreux',
            9 =>'Hysterique',
            10=>'Muet',
            11=>'Saint',
            12=>'Diabolique',
            13=>'Fanatique',
            14=>'Amoral',
            15=>'Antisociale',
            16=>'Messianique',
            17=>'Insensible',
            18=>'Perfide',
            19=>'Amoureux',
            20=>'Psychiatrique',
        ],
    ];
    
    $trais=[
        '1'=> [
            'nomTrai'=>'Intelligent',
            'probabilite'=>5,
        ],
        '2'=> [
            'nomTrai'=>'Ners d\'acier',
            'probabilite'=>5,
        ],
        '3'=> [
            'nomTrai'=>'Charismatique',
            'probabilite'=>5,
        ],
        '4'=> [
            'nomTrai'=>'Chanseux',
            'probabilite'=>5,
        ],
        '5'=> [
            'nomTrai'=>'Agile',
            'probabilite'=>5,
        ],
        '6'=> [
            'nomTrai'=>'Sensible a la magie',
            'probabilite'=>5,
        ],
        '7'=> [
            'nomTrai'=>'Aucun',
            'probabilite'=>95,
        ],
    ];
    
    $handicapes=[
        '1'=> [
            'nomHandicape'=>'Anputer à la jambe droite',
            'probabilite'=>5,
        ],
        '2'=> [
            'nomHandicape'=>'Anputer è la jambe gauche',
            'probabilite'=>5,
        ],
        '3'=> [
            'nomHandicape'=>'Anputer des deux jambes',
            'probabilite'=>2,
        ],
        '4'=> [
            'nomHandicape'=>'Anputer au bras drois',
            'probabilite'=>5,
        ],
        '5'=> [
            'nomHandicape'=>'Anputer au bras gauche',
            'probabilite'=>5,
        ],
        '6'=> [
            'nomHandicape'=>'Anputer aux deux bras',
            'probabilite'=>2,
        ],
        '7'=> [
            'nomHandicape'=>'Anputer aux deux jambes et aux deux bras',
            'probabilite'=>1,
        ],
        '8'=> [
            'nomHandicape'=>'Sourd',
            'probabilite'=>4,
        ],
        '9'=> [
            'nomHandicape'=>'dur d\'oreil',
            'probabilite'=>5,
        ],
        '10'=> [
            'nomHandicape'=>'Constitution faible',
            'probabilite'=>5,
        ],
        '11'=> [
            'nomHandicape'=>'Borgne',
            'probabilite'=>4,
        ],
        '12'=> [
            'nomHandicape'=>'Muet',
            'probabilite'=>5,
        ],
        '13'=> [
            'nomHandicape'=>'Vision faible',
            'probabilite'=>5,
        ],
        '14'=> [
            'nomHandicape'=>'Aveugle',
            'probabilite'=>2,
        ],
        '15'=> [
            'nomHandicape'=>'Aucun',
            'probabilite'=>90,
        ],
    ];
    
    $maladiesMaledictions=[];
    
    //Donner pour capasiter des personages-------------------
    
    $capacites=[
        'force' => 'capForce',
        'endurence' => 'capEndurence',
        'cordination' => 'capCordination',
        'aparence' => 'capAparence',
        'inteligence' => 'capInteligence',
        'stabilite' => 'capStabilite',
        'empatie' => 'capEmpatie',
        'reflexe' => 'capReflexe',
    ];
    $valeurClass=[
        'A' => [
            2  => 3,
            3  => 4,
            4  => 4,
            5  => 5,
            6  => 5,
            7  => 5,
            8  => 5,
            9  => 6,
            10 => 6,
            11 => 7,
            12 => 7,
        ],
        'B' => [
            2  => 5,
            3  => 6,
            4  => 6,
            5  => 7,
            6  => 7,
            7  => 8,
            8  => 8,
            9  => 9,
            10 => 9,
            11 => 10,
            12 => 11,
        ],
        'C' => [
            2  => 6,
            3  => 7,
            4  => 7,
            5  => 8,
            6  => 8,
            7  => 9,
            8  => 9,
            9  => 10,
            10 => 10,
            11 => 11,
            12 => 12,
        ],
        'D' => [
            2  => 7,
            3  => 8,
            4  => 8,
            5  => 9,
            6  => 9,
            7  => 10,
            8  => 10,
            9  => 11,
            10 => 11,
            11 => 12,
            12 => 13,
        ],
        'E' => [
            2  => 9,
            3  => 10,
            4  => 10,
            5  => 11,
            6  => 11,
            7  => 12,
            8  => 12,
            9  => 13,
            10 => 13,
            11 => 13,
            12 => 14,
        ],
        'F' => [
            2  => 10,
            3  => 10,
            4  => 11,
            5  => 11,
            6  => 12,
            7  => 12,
            8  => 12,
            9  => 13,
            10 => 13,
            11 => 14,
            12 => 15,
        ],
        'G' => [
            2  => 11,
            3  => 11,
            4  => 12,
            5  => 12,
            6  => 13,
            7  => 13,
            8  => 13,
            9  => 14,
            10 => 15,
            11 => 15,
            12 => 16,
        ],
    ];
    
    //Code de création du personage--------------------------
    
    $personage['espece']=$espece[array_rand($espece)]['nomEspece']; //Détermine l'espèce
    
    $rack=$espece[($personage['espece'])]; //Racourcie qui donne l'espece du personage
    
    $personage['race']=$rack['race'][array_rand($rack['race'])]['nomRace']; //Détermine la race
    $personage['sexe']= rand(0,1) ? 'homme' : 'femme';
    
    $i=false;
    while(!$i){
        $nb=rand(($rack['ageMin']),($rack['ageMax']));
        $prob=rand(1,100);
        if(($nb>=($rack['ageAdulte']))&&($nb<($rack['ageAines']))&&($prob<=80)){
            $personage['age']=$nb;
            $personage['ageType']='adulte';
            $i=true;
        }else if(($nb>=($rack['ageAines']))&&($nb<($rack['ageVieux']))&&($prob<=25)){
            $personage['age']=$nb;
            $personage['ageType']='aines';
            $i=true;
        }else if(($nb>=($rack['ageVieux']))&&($prob<=5)){
            $personage['age']=$nb;
            $personage['ageType']='vieux';
            $i=true;
        }else if(($nb<($rack['ageAdulte']))&&($prob<=50)){
            $personage['age']=$nb;
            $personage['ageType']='adolesscent';
            $i=true;
        }
    } //Détermine l'age
    
    $rack=$espece[($personage['espece'])]['race'][($personage['race'])]; //Racourcie qui donne la race du personnage
    
    $personage['cadre']=$rack['cadre']; //Dédermine le cadre
    
    foreach($capacites as $capacite){
        $personage[$capacite]=($valeurClass[($rack['capaciterRank'][$capacite])][rand(2,12)]);

    } //Détermine les compétence
    
    $rack=$espece[($personage['espece'])]['race'][($personage['race'])]['apparence']; //Racourcie qui donne les aparence de la race du personage
    
    $personage['appCouleurPeau']=$rack['couleurPeau'];
    $personage['appCouleurCheveux']=$rack['couleurCheveux'][array_rand($rack['couleurCheveux'])];
    $personage['appTypeCheveux']=$apparence['typeCheveux'][array_rand($apparence['typeCheveux'])];
    $personage['appTypeAutre']=$apparence['typeAutre'][array_rand($apparence['typeAutre'])];
    if($personage['espece']=='Humain'){
        $personage['appTypeVisage']='visage humain';
        $personage['appTypeOreille']='oreilles humaines';
    }else if($personage['espece']=='Txakuren'){
        $personage['appCouleurFourure']=$rack['couleurFourure'][array_rand($rack['couleurFourure'])];
        $personage['appTypeFourure']=$rack['typeFourure'][array_rand($rack['typeFourure'])];
        $personage['appTypeTeteRace']=$rack['typeTeteRace'];
        $personage['appTypeVisage']='museau';
        $personage['appTypeOreille']='oreilles droites';
    }else if($personage['espece']=='Oreinak'){
        $personage['appCouleurFourure']=$rack['couleurFourure'][array_rand($rack['couleurFourure'])];
        $personage['appTypeFourure']=$rack['typeFourure'][array_rand($rack['typeFourure'])];
        $personage['appTypeTeteRace']=$rack['typeTeteRace'];
        $personage['appTypeVisage']='visage long';
        $personage['appTypeOreille']='Oreilles larges';
    }else if($personage['espece']=='Beldura'){
        $personage['appTypeTeteRace']=$rack['typeTeteRace'];
        $personage['appTypeVisage']='visage conique';
        $personage['appTypeOreille']='Oreilles cacher';
    } //Détermine l'aparence
    
    $rack=$espece[($personage['espece'])]['race'][($personage['race'])]['cultureRace']; //Racourcie qui donne les culture de la race du personnage
    
    $personage['culture']=$rack[array_rand($rack)]; //Détermine la culture
    
    //pl_PL
    //ru_RU
    //nl_NL
    $f = \Faker\Factory::create($espece[($personage['espece'])]['nomType']);
    $personage['nom'] = $f->lastName();
    $personage['prenom'] = $f->firstName(); //Détermine le nom du personage 
    
    $i=false;
    while(!$i){
        $pays=$monde[array_rand($monde)];//Variable temporaire qui guarde un pays
        foreach($pays['groupeCoulturel'] as $culture){
            if($personage['culture']==$culture['nom']){
                $personage['origine']=$pays['nom'];
                $i=true;
            }
        }
    } //Détermine le pays d'origine
    
    $classes=$classeSocial[$monde[$personage['origine']]['groupeCoulturel'][$personage['culture']]['taileCulture']];//lise des classe social possible du personnage
    $i=false;
    while(!$i){
        $prob=rand(1,100);
        $nb=rand(1,count($classes));
        if($prob<=$classes[$nb]['probabilite']){
            $personage['classeSocial']=$classes[$nb]['nomClasse'];
            $i=true;
        }
    } //Détermine la classe social du personage
    
    if(($personage['classeSocial'] == 'noble') || ($personage['classeSocial'] =='seigneur') || ($personage['classeSocial'] =='religeuse')){
        $personage['education']='haute';
    }else if(($personage['classeSocial']=='guerriere')||($personage['classeSocial'] =='marchande')||($personage['classeSocial'] =='lettré')||($personage['classeSocial'] =='artisant')){
        $personage['education']='moyenne';
    }else{
        $personage['education']='basse';
    } //Détermine l'éducation du personnage
    
    $nb=rand(1,20);
    $nbSup=rand(1,20);
    if($nb==$nbSup){
        $personage['personalite']=$personalite['psycopate'][$nb];
    }else{
        $personage['personalite']=$personalite['normal'][$nb];
        $personage['inclinaison']=$personalite['normal'][$nbSup];
    } //Détermine la personaliter du personnage
    
    $i=false;
    while(!$i){
        $prob=rand(1,100);
        $nb=rand(1,count($trais));
        if($prob<=$trais[$nb]['probabilite']){
            $personage['trais']=$trais[$nb]['nomTrai'];
            $i=true;
        }
    } //Détermine le trait du personage
    
    $i=false;
    while(!$i){
        $prob=rand(1,100);
        $nb=rand(1,count($handicapes));
        if($prob<=$handicapes[$nb]['probabilite']){
            $personage['handicape']=$handicapes[$nb]['nomHandicape'];
            $i=true;
        }
    } //Détermine l'handicape du personage
    
    //Retour du personage------------------------------------

    return [
        'espece' =>$personage['espece'],//
        'race' =>$personage['race'],//
        'sexe' =>$personage['sexe'],//
        'age' =>$personage['age'],//
        'ageType' =>$personage['ageType'],//
        'cadre' =>$personage['cadre'],//
        'capForce' =>$personage['capForce'],//
        'capEndurence' =>$personage['capEndurence'],//
        'capCordination' =>$personage['capCordination'],//
        'capAparence' =>$personage['capAparence'],//
        'capInteligence' =>$personage['capInteligence'],//
        'capStabilite' =>$personage['capStabilite'],//
        'capEmpatie' =>$personage['capEmpatie'],//
        'capReflexe' =>$personage['capReflexe'],//
        'appCouleurPeau' =>$personage['appCouleurPeau'],//
        'appCouleurFourure' =>$personage['appCouleurFourure'],//
        'appTypeFourure' =>$personage['appTypeFourure'],//
        'appCouleurCheveux' =>$personage['appCouleurCheveux'],//
        'appTypeCheveux' =>$personage['appTypeCheveux'],//
        'appTypeVisage' =>$personage['appTypeVisage'],//
        'appTypeOreille' =>$personage['appTypeOreille'],//
        'appTypeTeteRace' =>$personage['appTypeTeteRace'],//
        'appTypeAutre' =>$personage['appTypeAutre'],//
        'culture' =>$personage['culture'],//
        'nom' =>$personage['nom'],//
        'prenom' =>$personage['prenom'],//
        'origine' =>$personage['origine'],//
        'classeSocial' =>$personage['classeSocial'],//
        'education' =>$personage['education'],//
        'personalite' =>$personage['personalite'],//
        'inclinaison' =>$personage['inclinaison'],//
        'trais' =>$personage['trais'],//
        'handicape' =>$personage['handicape'],//
        'maladieMalediction' =>$personage['espece'],
        'description' =>$personage['espece'],
        'image' =>$personage['espece'],
        'imageH' =>$personage['espece'],
        'imageW' =>$personage['espece'],
    ];
});
