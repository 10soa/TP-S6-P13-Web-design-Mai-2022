create database climat;
use climat;
create table def(
    id serial PRIMARY KEY,
    cat varchar(50),
    def text
);
insert into def values(default,'Definition simple','Le réchauffement climatique est un phénomène global de transformation du climat caractérisé par une augmentation générale des températures moyennes (notamment liée aux activités humaines), et qui modifie durablement les équilibres météorologiques et les écosystèmes. Lorsque l"on en parle aujourd"hui, il s"agit du phénomène d"augmentation des températures qui se produit sur Terre depuis 100 à 150 ans. Depuis le début de la Révolution Industrielle, les températures moyennes sur terre ont en effet augmenté plus ou moins régulièrement. En 2016, la température moyenne sur la planète terre était environ 1 à 1.5 degrés au dessus des températures moyennes de l"ère pré-industrielle (avant 1850)');
insert into def values(default,'Definition scientifique','De façon plus précise, lorsque l"on parle du réchauffement climatique, on parle de l"augmentation des températures liées à l"activité industrielle et notamment à l"effet de serre : on parle donc parfois du réchauffement climatique dit « d"origine anthropique » (d"origine humaine). Il s"agit donc d"une forme dont les causes ne sont pas naturelles mais économiques et industrielles. De nombreux scientifiques étudient ce phénomène et tentent de comprendre comment les activités des sociétés humaines provoque ce réchauffement. Ces scientifiques sont regroupés au sein du GIEC (Groupe International d"Experts sur le Climat), et ils publient régulièrement des rapports étudiant l"évolution du réchauffement climatique');
create table Causes(
    id serial PRIMARY KEY,
    titre varchar(50),
    info text
);

insert into Causes values(default,'L"effet de serre','Dès le 19ème siècle, les scientifiques faisaient déjà l"hypothèse que la température sur terre dépendait d"un phénomène appelait l"effet de serre. En résumé, s"il fait relativement chaud sur terre, c"est parce que notre atmosphère est constituée de gaz qui retiennent la chaleur, un peu comme une serre.On a donc su assez tôt que les gaz comme la vapeur d"eau ou le dioxyde de carbone jouaient un rôle dans le réchauffement de notre atmosphère. De ce fait, quand la composition de l"atmosphère se modifie, l"effet de serre change et cela influence la température sur terre.

Cet effet de serre est indispensable à l"équilibre des écosystèmes terrestres. Sans lui, tout serait différent car la température ne parviendrait pas à réchauffer durablement la planète. Le problème, c"est que depuis 150 ans à 200 ans, on constate que cet effet de serre semble « perturbé » et amplifié. En résumé, la planète se réchauffe de plus en plus. ');
insert into Causes values(default,'Les émissions de CO2 par secteur','Si l"on devait diviser l"économie en différents secteurs et répartir les émissions de CO2 entre ces différents secteurs, voilà ce que l"on obtiendrait selon une étude du World Ressource Institute.
<ul>
    <li>Le transport routier (13% soit 10,5% pour le transport routier, un peu plus de 3% pour les autres types de transports)</li>
     <li> déforestation : (10.9%)</li>
    <li>La consommation énergétique des bâtiments résidentiels (10,2%) </li>
    <li>Les industries manufacturières (7%) </li>
   <li>Les industries du pétrole et du gaz (6,4%) </li>
    <li>La consommation énergétique des bâtiments tertiaires (6,3%) </li>
   <li>L"élevage (5,4%) </li>
   <li>La gestion des sols agricoles et la production agricole (5,2%) </li>
    <li>La production de ciment (5%) </li>
   <li>La production de produits chimiques (4,1%). </li>
    </ul>
');
insert into Causes values(default,'Les émissions de CO2 d"origine humaine','La principale source des émissions de CO2 d"origine humaine est l"utilisation de l"énergie. En brûlant des énergies comme le charbon, le gaz ou le pétrole pour produire de l"énergie ou pour alimenter les moteurs de nos moyens de transport, on émet du CO2 qui contribue au réchauffement climatique. Près de 25% des émissions de CO2 mondiales sont ainsi liées à la production d"énergie (électricité et chaleur) à laquelle il faut ajouter l"énergie utilisée dans les transports (pétrole et diesel) qui représente environ 14% des émissions de CO2. Et comme avec l"industrialisation, la consommation de masse et la mondialisation nous avons besoin de toujours plus d"énergie et de toujours plus de pétrole pour nous déplacer, cela produit des quantités très importantes de gaz à effet de serre');

create table Consequences(
     id serial PRIMARY KEY,
     titre varchar(150),
     info text,
     url varchar(100)
);
insert into Consequences values(default,'Conséquences sur les entreprises','Enfin, les entreprises risquent également d"être affectées par le changement et le réchauffement climatique. En effet, dans un contexte où le climat change, il est plus difficile d"adapter ses activités.','consequences-entreprises');
insert into Consequences values(default,'Conséquences sur l"écosystème et la planète','D"abord, une augmentation des températures à cause du réchauffement climatique affecte l"ensemble de l"écosystème mondial et pas seulement la chaleur ressentie. La météo s"en trouve perturbée, avec une augmentation des phénomènes météorologiques extrêmes, des changements des modèles météorologiques habituels. Cela veut dire plus de tempêtes, plus d"inondations, plus de cyclones et de sécheresses.','consequences-eco-systeme-planete');
insert into Consequences values(default,'Les conséquences du réchauffement climatique sur les océans','Le réchauffement climatique a aussi des conséquences dramatiques sur les océans et l"écosystème marin. L"augmentation des températures et des concentrations en CO2 perturbent la vie des planctons, entraînent l"acidification des océans, et diminuent l"oxygénation des zones marines.','consequences-ocean');
insert into Consequences values(default,'Conséquences sur la société et l"économie','Sur la société et l"économie, le réchauffement climatique peut avoir potentiellement plusieurs conséquences : la capacité des sociétés à s"adapter à un nouveau climat, à adapter leurs infrastructures, notamment médicales, mais aussi leurs bâtiments. Le réchauffement climatique aura aussi des conséquences sur la santé publique, la capacité alimentaire des pays…','consequences-societe-economie');
create table ConsequencesFille(
    id serial PRIMARY KEY,
    titre varchar(100),
    img varchar(100),
    info text,
    idC int,
    foreign key (idC) references Consequences(id)
);
insert into ConsequencesFille values(default,'La modification des éco-systèmes et des ressources','assets/img/img/1.jpg','Avec le rechauffement climatique, les éco-systèmes vont se transformer. On ne parle pas seulement de la disparition d"une espèce de grenouille rare en Amazonie ou de la destruction d"une espèce d"orchidée. Non, la transformation des éco-systèmes pourrait être très importante, et affecter de plus en plus les entreprises.
Les activités affectées sont :
<ul>
    <li> Agriculture  </li>
   <li> Exploitation forestière et toutes les activités qui utilisent massivement du bois </li>
    <li> Pêche / chasse / élevage et toutes les activités liées à l"agro-alimentaire </li>
    <li> Activités minières </li>
   <li> Énergies.</li>
</ul>
',1);
insert into ConsequencesFille values(default,'La multiplication des catastrophes naturelles','assets/img/img/2.jpg','Le rechauffement climatique est aussi synonyme d"augmentation des catastrophes naturelles. Plus d"inondations, de cyclones ou d"incendies… Cela a un impact sur les activités économiques.
Tout ce qui se situe dans les zones à risque (zones côtières, arides ou exposées aux catastrophes) est potentiellement affecté. Les conséquences sont alors nombreuses : augmentation des assurances, infrastructures à renforcer, éventuellement obligation de déplacer ses activités… Même les entreprises situées dans des zones relativement sauvegardées pourraient être affectées. Toutes les activités internationales qui impliquent le transport pourraient être pénalisées par des conditions climatiques plus difficiles. Globalement, l"augmentation du risque mènerait aussi à une augmentation des coûts pour les entreprises, que ce soit un coût en assurance ou en réparation.
<ul>
Les activités affectées sont :
    <li> Assurances et finance </li>
    <li> Activités industrielles dans les zones à risque </li>
    <li> Transport et logistique </li>
    <li> Activités côtières </li>
    <li> La plupart des PME peu résiliantes. </li></ul>
',1);
insert into ConsequencesFille values(default,'Un réchauffement climatique de 2 degrés, quelles conséquences ?','assets/img/img/','Cette année, en Inde, en Egypte ou en Iran, les vagues de chaleur caniculaires ont causé la mort de plus d"une centaine de personnes. Rien que dans le Maghreb, près de 800 personnes ont été hospitalisées à cause de la chaleur et de la déshydratation. En comptant l"Afrique, l"Asie du Sud, le Moyen Orient ou encore l’Amérique Latine, c’est plus des deux tiers de la planète qui est déjà affectée par des chaleurs dangereuses. Dans ces conditions, 2 degrés représentent une augmentation assez alarmante.
</p><p>
Et même sous nos latitudes, on se souvient de la canicule mortelle de 2003. 2 degrés de plus, cela signifie des canicules plus fréquentes et plus fortes.',2);
insert into ConsequencesFille values(default,'Multiplication des phénomènes météorologiques extrêmes','assets/img/img/4.jpg','Le réchauffement climatique pourrait contribuer à l"augmentation des phénomènes météorologiques extrêmes. Canicules, mais aussi tempêtes et tornades, inondations ou sécheresses, ou encore feux de forêt.
</p><p>
Certains analystes prévoient même que des cyclones pourraient avoir lieu dans le golfe persique, où ces évènements sont aujourd"hui inconnus. Le réchauffement de l"atmosphère et de l"océan créerait des conditions favorables au développement de ces phénomènes météorologiques. Dans les zones où des tempêtes et des tornades sont déjà relativement courants, comme dans le Sud-Est des Etats-Unis, ils deviendraient plus violents et plus puissants, et causeraient des dommages plus forts.
Enfin, l"une des conséquences du réchauffement climatique pourrait évidemment être la multiplication des incendies et des feux de forêts, notamment dans les zones de forêt sèches.',2);
insert into ConsequencesFille values(default,'La hausse du niveau de la mer','assets/img/img/5.jpg','Ça n"a échappé à personne : l"océan, c"est de l"eau. Et l"eau, quand elle chauffe, se dilate : un litre d"eau à 15 degrés occupera donc plus d"espace qu"un litre à 13 degrés. Alors multipliez ceci par le volume d"eau présent sur la planète (1400 millions Km3) et vous pouvez imaginer les dégâts que peuvent causer une petite hausse de 0,7 degrés. 0,72 degrés Celsius, c"est exactement le montant de l"anomalie de température enregistrée à la surface des océans en Septembre dernier.
La hausse des températures des océans fait peser une menace réelle sur des villes comme Venise, New York ou Singapour : elles risquent de suivre à plus ou moins brève échéance le sort de ces 5 îles de l"archipel des Salomons, dont l"engloutissement a été constaté par une étude australienne parue cette semaine. Ces villes s"enfoncent sous leur propre poids et sont construites sur le littoral à des hauteurs bien faibles : ces deux facteurs font craindre des submersions marines, d"abord en cas de tempête puis de façon plus fréquente.',3);
insert into ConsequencesFille values(default,'Mort des coraux','assets/img/img/6.jpg',' Le phénomène du blanchissement se traduit par une décoloration des coraux qui expulsent l"algue avec laquelle ils vivent en symbiose. Ils peuvent s"en remettre mais aussi en mourir si l"épisode de fortes températures ne cesse pas. Et vu l"ampleur d"El Nino cette année, cette seconde hypothèse va vraisemblablement se vérifier. Si l"on ajoute à cela l"acidification des océans que provoque le CO2 en excès dans l"atmosphère, il va falloir faire vite si l"on veut visiter les derniers massifs de coraux. L"absorption de ce CO2 par les eaux de surface fait descendre le pH de l"océan, ce qui limite la capacité des micro-organismes à se fabriquer une coquille calcaire, comme le font les coraux. On considère que le pH de l"océan est aujourd"hui de 8, il pourrait se retrouver à 7,6 si rien n"est fait pour limiter les émissions de gaz à effet de serre.Une eau acide dissout les carbonates nécessaires à la constitution des coquilles ou des squelettes calcaires (appelés « tests ») des oursins, coraux et autres mollusques.',3);
insert into ConsequencesFille values(default,'La lutte contre le réchauffement climatique coûte de l"argent',null,'Enfin, l"un des problèmes fondamentaux du réchauffement climatique est qu"il coûte cher. La lutte contre le réchauffement climatique a un coût important : construction d"infrastructures adaptées, adaptation des infrastructures urbaines et des bâtiments, mais aussi des systèmes de santé ou d"énergie. C"est potentiellement un montant de plusieurs milliards, qui auraient pu être alloué à des programmes d"éducation ou des programmes sociaux, voire à des programmes de création d"emplois. En gros, si l"Etat doit dépenser plus d"argent dans la lutte contre le changement climatique, dans la réparation des infrastructures suite aux catastrophes naturelles, c"est autant d"argent qu"il ne dépensera pas pour améliorer les conditions sociales. Il se pourrait même que le changement climatique fasse monter vos impôts !',4);
insert into ConsequencesFille values(default,'Problèmes d"approvisionnement en nourriture',null,'Les effets se font déjà sentir dans certains pays où les modifications des conditions climatiques affectent l"agriculture. En France, les viticulteurs voient déjà leurs conditions de production changer, mais c"est aussi le cas pour les petits paysans de nombreux pays en développement. Les dates de récoltes sont erratiques, les quantités sont souvent réduites lorsque la chaleur prive les plantes d"eau, ou quand les précipitations intenses les noient… En résumé, les productions agricoles deviennent moins prévisibles, moins stables dans le temps, et il est plus difficile de gérer les stocks.
</p><p>
Aujourd"hui, le réchauffement climatique contribue déjà à la faim dans le monde, mais il pourrait contribuer dans l"avenir à des problèmes plus profonds d"approvisionnements en nourriture. On pourrait aussi constater une augmentation du prix des matières premières, lié à la raréfaction des ressources et aux conditions de production plus difficiles et plus aléatoires. Et encore une fois, ce sont les plus pauvres et les plus vulnérables qui seront les premiers touchés par ces problèmes.',4);


create table Historiques(
    id serial PRIMARY KEY,
    titre varchar(100),
    info text
);

insert into Historiques values(default,'Premières découvertes de l"effet de serre','Les premières suppositions sur l"effet de serre sont faites par le scientifique Jacques Fourier en 1824. Plusieurs scientifiques après lui vont étudier et tenter de quantifier le phénomène, comme Claude Pouillet et John Tyndall. Mais la première expérience de validation et de quantification précise de l"effet de serre est faite par le scientifique Svante Arrhenius à la fin du XIXème siècle. Dans les années 1890, il découvre qu"un air riche en gaz carbonique retient plus la chaleur des rayonnements solaires, ce qui conduit à une augmentation de la température de l"air. Il en conclut que si l"on rejette dans l"atmosphère de grandes quantités de carbone (à cause des activités industrielles fonctionnant par la combustion du charbon), l"air va se charger en CO2 et retenir plus de chaleur. Les premières estimations de l"augmentation des températures faites par Arrhenius ou d"autres scientifiques de l"époque comme le géologue Thomas Chamberlin sont les suivantes : si l"on double la quantité de gaz à effet de serre dans l"atmosphère, la température moyenne augmentera de 5 degrés. En 1901, Gustaf Ekholm utilise pour la première fois le terme « effet de serre » pour décrire le phénomène.
Pendant plusieurs décennies ces découvertes ne sont pas prises au sérieux dans la communauté scientifique. À l"époque beaucoup de spécialistes estiment que la nature pouvait s"auto-réguler et que l"impact de l"homme était minime. Notamment, beaucoup de scientifiques pensaient que le surplus de CO2 serait de toute façon absorbé par l"océan, ce qui est vrai, mais pas totalement. Toutefois, la thèse de la possibilité d"un réchauffement climatique lié aux gaz à effet de serre (dont le gaz carbonique) finit par être validée dans les années 1940 par Gilbert Plass. À l"aide des technologies modernes, il prouve de façon définitive que la concentration de gaz à effet de serre dans l"atmosphère influe sur la capacité de l"air à retenir les rayons infrarouges et la chaleur. Ce sont les premières définitions du réchauffement climatique.');
insert into Historiques values(default,'La prise de conscience','Dans les années 60, plusieurs scientifiques vont montrer que les présomptions sur l"effet de serre s"avèrent en fait réelles. Charles David Keeling prouve par exemple que la concentration de CO2 dans l"atmosphère augmente progressivement grâce à ses mesures près de Hawaï. Roger Revelle prouva que le carbone dégagé par la combustion d"énergie fossiles n"était pas immédiatement absorbé par l"océan. Les scientifiques commencent à se préoccuper de plus en plus du réchauffement climatique, et de ce fait, la société politique va commencer à prendre en compte ce problème.
En 1971 le premier Sommet de la Terre évoque pour la première fois dans une grande conférence internationale la définition du réchauffement climatique et ses conséquences. En 1972, John Sawyer publie un rapport scientifique mettant en évidence de façon de plus en plus claire les liens entre le réchauffement climatique et l"effet de serre. Pendant encore plus d"une décennie, les preuves s"accumulent dans la communauté scientifique au point qu"au milieu des années 1980, les 7 plus grandes puissances économiques mondiales (le G7) demandent à l"ONU de créer un groupe d"experts chargés d"étudier la question. C"est la première fois qu"il y a une vraie prise en compte et une vraie définition du réchauffement climatique comme problème public par les institutions internationales.');
insert into Historiques values(default,'Les premiers rapports du GIEC','Le GIEC (Groupe d"experts intergouvernemental sur l"évolution du climat) est créé en 1988 avec pour objectif d"étudier l"évolution du phénomène de réchauffement climatique et ses conséquences. Il rassemble des centaines de scientifiques, climatologues, géologues, océanographes, biologistes, mais aussi des économistes, sociologues, ou ingénieurs et d"autres spécialistes de divers domaines afin d"avoir une vision globale de ce phénomène.
Le GIEC est structuré en trois groupes de travail:

   1- le premier afin d"étudier le changement climatique en tant que phénomène : le processus, son ampleur ;
   2- le second spécialisé sur les conséquences du réchauffement climatique, la vulnérabilité des écosystèmes et des sociétés et l"adaptation au réchauffement climatique ;
   3- enfin le dernier groupe est chargé d"étudier la question de la lutte contre le réchauffement climatique.

Le GIEC rend son premier rapport en 1990, puis plusieurs autres périodiquement jusqu"à son dernier rapport en 2014. Dans ces rapports, la communauté scientifique du GIEC analyse les causes du réchauffement climatique, et son impact sur l"écosystème et sur la société, en élaborant des modèles prédictifs. À partir de ces modèles et de ces prévisions, les pouvoirs publics et les entreprises peuvent mettre en place des stratégies pour lutter contre le réchauffement climatique ou pour mieux s"y adapter.');

create table Luttes(
    id serial PRIMARY KEY,
    titre varchar(100),
    info text
);

insert into Luttes values(default,'Favoriser les modes de travail écologiques','Certains modes de travail sont plus écologiques que d"autres : le télétravail par exemple a de nombreux avantages du point de vue écologique. On peut aussi penser aux vidéos-conférences qui évitent aux employés d"avoir à se déplacer en voiture pour les réunions avec certains clients.
Le travail sur papier a également un impact environnemental plus fort que le travail informatique. Mais il ne faut pas tomber dans l"extrême inverse car Internet a également un impact environnemental important. Ainsi, éviter de mettre toute l"entreprise en copie d"un mail qui ne concerne qu"un département économise beaucoup de CO2.');
insert into Luttes values(default,'Utiliser les énergies renouvelables','Aujourd"hui, de plus en plus de particuliers font le choix de l"énergie renouvelable, et pour les entreprises aussi c"est une solution intéressante. Les fournisseurs comme Lampiris ou Enercoop représentent d"ailleurs une solution intéressante pour n"utiliser que de l"énergie 100% renouvelable. En évitant les énergies fossiles, on réduit sensiblement son empreinte sur le climat.');
insert into Luttes values(default,'Réduire sa consommation d"énergie','Éteindre les lumières en partant du bureau le soir, baisser légèrement le chauffage ou la climatisation, éteindre les prises lorsqu"elles ne sont pas utilisées… En faisant attention au quotidien, les entreprises peuvent réduire légèrement leur consommation d"énergie et donc leur impact sur le climat.
Si chaque entreprise française, soit près de 3,5 millions, réduisait de quelques pourcents leur consommation, l"effet sur le climat serait déjà fort.');

create table admin(
    id serial PRIMARY KEY,
    login varchar(150),
    mdp varchar(50)
);

insert into admin values(default,'admin','1234');
