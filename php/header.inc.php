<?php 


// Il faudrait définir des arrays de 2 éléments : 
// 0 = français
// 1 = anglais

$langue = 0;
	if (isset($_GET["lang"])) {
		switch ($_GET["lang"]) {
			case 0:
				$langue = 0; break;
			case 1:
				$langue = 1; break;
      case 2:
        $langue = 2; break;
      case 3:
        $langue = 3; break;
		}
	}

/* Barre de Navigation */

$nav_home = array('Accueil', "Home",'ترحيب','主頁');
$nav_discover = array('Découvrir', "Discover",'يكتشف','發現');
$nav_monuments = array('Monuments', "Monuments",'آثار','紀念碑');
$nav_infos = array('Informations', "Informations",'معلومة','信息');
$nav_restaurants = array('Restaurants', "Restaurants",'مطاعم','餐廳');
$nav_discover_tovisit = array('Endroits à visiter', "Places to visit",'اماكن للزيارة','參觀的地點');
$nav_discover_near = array('A deux pas', "Two steps away",'خطوتين','兩步');
$nav_about = array('A propos', "About us",'في ما يخص','關於');
$nav_gallery = array('Galerie', "Gallery",'صالة عرض','畫廊');
$nav_road = array('Parcours', "Recommended itinerary",'رحلة','旅行');


/* INDEX */

$index_carousel_ileCite_subtitle = array("Un coffre de patrimoines mondiaux.", "A chest of world heritages.","صندوق التراث العالمي.","世界遺產寶箱。");
$index_carousel_notredame_subtitle = array("Le monument iconique mondial.","The world's iconic monument.","النصب الأيقوني العالمي.","全球標誌性紀念碑。");
$index_carousel_palaisjustice_subtitle = array("Au coeur de l'histoire française.","","في قلب التاريخ الفرنسي.","在法國歷史的核心。");
$index_carousel_pontneuf_subtitle = array("Le plus ancien pont de Paris.","The oldest bridge in Paris.","أقدم جسر في باريس.","巴黎最古老的橋樑。");
$index_carousel_chapelle_subtitle = array("Un joyau de l'art du vitrail.","A jewel in the art of stained glass.","جوهرة من فن الزجاج المعشق.","彩色玻璃藝術的瑰寶。");
$index_carousel_Yaller = array("Y aller","Go to","و هناك","那裡");
$index_subtitle = array("Un patrimoine mondial reconnu par l'Unesco.","A world heritage recognized by Unesco.","تراث عالمي معترف به من قبل اليونسكو.","聯合國教科文組織承認的世界遺產。");
$index_subtitle2 = array("L'Île de la Cité regroupe de nombreux monuments incontournables et iconiques qui font l'histoire de France et sont reconnus comme patrimoine mondial de l'Unesco.","The Ile de la Cité is home to many iconic monuments that make up the history of France and are recognized as Unesco World Heritage sites.","يجمع فندق Île de la Cité بين العديد من المعالم الأثرية التي لا يمكن تفويتها والتي تشكل تاريخ فرنسا والتي تم الاعتراف بها على أنها تراث عالمي من قبل اليونسكو.","Île de la Cité 匯集了許多不可錯過的標誌性古蹟，這些古蹟構成了法國的歷史，並被聯合國教科文組織認定為世界遺產。");
$index_description = array("Paris ne serait pas Paris sans ses îles. Comme deux yeux au milieu du visage, l’île de la Cité et l’île Saint-Louis sont le cœur du cœur de la capitale, son exception, mais aussi et surtout la raison d’être de tous ses ponts, véritables œuvres d’art qui dessinent le paysage fluvial de la ville et dressent des traits d’union en pointillé entre les rives. Le plaisir de déambuler sur ces îles vient d’abord de là, du plaisir d’enjamber la Seine sur ces ponts en pierre de taille, historiques et majestueux, du plaisir de se savoir cerné d’eau mais les pieds au sec, de ce sentiment de se trouver au niveau du noyau.","Paris would not be Paris without its islands. Like two eyes in the middle of the face, the Ile de la Cité and the Ile Saint-Louis are the heart of the capital, its exception, but also and above all the reason for the existence of all its bridges, true works of art that draw the river landscape of the city and draw up dotted lines between the banks. The pleasure of wandering on these islands comes first of all from there, from the pleasure of spanning the Seine on these historical and majestic bridges made of cut stone, from the pleasure of knowing that one is surrounded by water but with dry feet, from the feeling of being at the core.","لن تكون باريس باريس بدون جزرها. مثل عينين في منتصف الوجه ، فإن Île de la Cité و le Saint-Louis هما قلب قلب العاصمة ، استثناءً لها ، ولكن أيضًا وقبل كل شيء سبب وجود كل جسورها ، صحيح الأعمال الفنية التي ترسم المناظر الطبيعية النهرية للمدينة وتنص صب شرائط منقطة بين الضفاف. تأتي متعة التنزه على هذه الجزر أولاً وقبل كل شيء من هناك ، من متعة التنزه فوق نهر السين على هذه الجسور الحجرية التاريخية المهيبة ، ومن دواعي سروري معرفة أنك محاط بالمياه ولكن بأقدام جافة ، من هذا الشعور يجري في المستوى الأساسي.","沒有島嶼，巴黎就不是巴黎。就像臉中間的兩隻眼睛一樣  ，Île de la Cité 和 Île Saint-Louis 是首都的心臟，它的例外，但最重要的是它所有橋樑的存在理由，真實藝術作品，描繪城市河流景觀的藝術作品，在兩岸之間豎立著虛線連字符。在這些島嶼上漫步的樂趣首先來自於那裡，來自於在這些歷史悠久、氣勢磅礴的砂石橋上跨過塞納河的樂趣，來自於知道自己四面環水卻雙腳乾燥的樂趣，來自於 這種感覺處於核心水平。");
$index_localisation = array("Localisation", "Location","موقع","地點");

$index_video = array("https://www.youtube.com/embed/k4KAhO6XgOw","https://www.youtube.com/embed/C6FbHlo-TEA","https://www.youtube.com/embed/C6FbHlo-TEA","https://www.youtube.com/embed/C6FbHlo-TEA");



/* Notredame */

$notredame_titrePage = array("Notre-Dame", "Notre-Dame");
$notredame_description = array("La cathédrale Notre-Dame de Paris, chef d’œuvre de l’architecture gothique, est le monument le plus visité de France.", "The Notre-Dame de Paris cathedral, a masterpiece of Gothic architecture, is the most visited monument in France.");

/* caroussel 1, architecture */
$notredame_sous_titre_architecture = array("Architecture", "Architecture");

/* element 1 */
$notredame_carousel1_card_title1 = array("Un Style principalement gothique", "A mainly gothic style");
$notredame_carousel1_card_text1 = array("Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.", "The clarity of the composition and the balance of the verticals and horizontals strike all visitors as they approach the cathedral's façade.");
$notredame_carousel1_colapse_card_text1 = array("L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. 
L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. 
Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.
", "The abundance of the sculpted decoration attracts the eye by the verve and quality of the sculptures, whether they are original or from the great restoration work carried out in the 19th century. 
The interior atmosphere of the cathedral leaves no one indifferent to the monumentality of the space, the roses of the transepts, the votive statuary or the majesty of the great organ. The large paintings in the chapels allow us to understand the essential role of religious painting in the 17th and 18th centuries. The cathedral's treasury contains a number of works of major interest, used in worship. Notre-Dame de Paris is thus a fundamental building, as much for the history of Gothic architecture as for the history of art since the Middle Ages or the history of restoration in the 19th and 20th centuries. 
Classified as a historical monument on the 1862 list, it is an integral part of the property 'Paris, banks of the Seine' listed as a World Heritage Site by UNESCO. The classified area includes the major monuments, buildings, gardens, squares and quays that border the Seine, from the Ile Saint-Louis in the east to the Ile aux Cygnes in the west.");

/* element 2 */
$notredame_carousel1_card_title2 = array("Un Projet gigantesque d'une ampleur phénoménale", "A gigantic project of phenomenal scope");
$notredame_carousel1_card_text2 = array("Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes,
ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.", "After the strong demographic and religious growth of France, the Saint-Etienne basilica, in spite of its imposing dimensions
was no longer sufficient to satisfy the fervor of the Parisians and the ambitions of the new bishop Maurice de Sully with regard to the intellectual influence of the city and its growth.");
$notredame_carousel1_colapse_card_text2 = array("Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully.
S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique 
, d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.", "The need for a larger, more majestic building was felt, in keeping with the capital of the bishopric and the country, as well as the ambition of the new bishop Maurice de Sully.
Thus began one of the longest construction projects that France has ever had to carry out, a project that lasted nearly 200 years, and which required a great deal of technique, organization and time. 
It required a lot of technique, organization and know-how to achieve this remarkable result.");
$notredame_carousel1_colapse_card_blockquote_text = array("« La tête, le cœur, la moelle de la ville entière. »", "« La tête, le cœur, la moelle de la ville entière. »");
$notredame_carousel1_colapse_card_blockquote_footer = array("Gui de Bazoches, chroniqueur du XIIe siècle", "Gui de Bazoches, chronicler of the XIIth century");

/* element 3 */
$notredame_carousel1_card_title3 = array("Deux siècles de technique, d'archtecture et de travail", "Two centuries of technique, architecture and work");
$notredame_carousel1_card_text3 = array("En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.", "In 1163, the first stone of Notre-Dame was laid in the presence of Pope Alexander III.");
$notredame_carousel1_colapse_card_text3 = array("Elle est emblématique de l'art ogival, aussi appelé art gothique,
style novateur récement utilisé pour la construction des églises et des cathédrales à l'époque.
Système de voûtes en croisées d’ogives, afin de pouvoir placé les vitraux et laisser passé la lumière.
Hauteur sous voûte élevée, pour être au plus près du ciel.
Élévation à quatre étages étayés par des tribunes afin de faire tenir le toit.
De nombreux arcs-boutants à l'extérieur pour contrebalancé la poussée des voûtes de grande hauteur.
<br>
Plusieurs campagne de travaux ont eu lieu, de sorte que l'on peut distinguer de étapes :
</p>
<ul>
  <li>1163-1225 : construction du chœur et de son double déambulatoire, de la nef, des bas-côtés et des tribunes, façade élevée jusqu'à la galerie des rois</li>
  <li>1225-1250 : galerie haute et les deux tours sur la façade, modification et agrandissements des fenêtres hautes et aménagement des chapelles latérales de la nef.</li>
</ul>", "It is emblematic of the ogival art, also called Gothic art, an innovative style recently used for the construction of churches and cathedrals at the time.
The vaulting system is made of ribbed vaults, in order to place the stained glass windows and let the light through.
High vault height, to be as close as possible to the sky.
Four-story elevation supported by galleries to hold the roof.
Numerous buttresses on the outside to counterbalance the thrust of the high vaults.
<br>
Several campaigns of work have taken place, so that we can distinguish stages :
</p>
<ul>
  <li>1163-1225 : construction of the choir and its double ambulatory, the nave, the aisles and the tribunes, elevated facade to the gallery of kings</li>
  <li>1225-1250 : high gallery and the two towers on the facade, modification and enlargement of the high windows and arrangement of the side chapels of the nave.</li>
</ul>");

/* element 4 */
$notredame_carousel1_card_title4 = array("Deux siècles de technique, d'architecture et de travail", "Two centuries of technique, architecture and work");
$notredame_carousel1_card_text4 = array("Ayant subi les outrages du temps et des Hommes, notament avec plusieurs incendits (dont un récemment).", 
"Having undergone the ravages of time and Men, notably with several fires (including one recently).");
$notredame_carousel1_colapse_card_text4 = array("Notre-Dame aura été modifier et rénové de nombreuse fois et ce dès sa création, d'une par pour remplacer es partie romane subsistance, 
d'autre part pour remforcer la structure ou encore refaire une partie de la cathédrale.
Les architectes se sont succedé et on manque d'information sur les artisans de l'ouvrage au cours du XIIe siècle, car leurs
nombre devait être extrême pour un projet de cette taille, néanmoins les comptes de fabrique sont conservés à partir de 1333.", "Notre-Dame has been modified and renovated many times since its creation, on the one hand to replace the Romanesque subsistence part, 
on the other hand to re-strengthen the structure or to rebuild a part of the cathedral.
The architects succeeded each other and we lack information on the craftsmen of the work during the twelfth century, because their
number had to be extreme for a project of this size, nevertheless the accounts of factory are preserved from 1333.");

/* caroussel 2, histoire */
$notredame_sous_titre_histoire = array("Histoire", "History");

/* element 1 */
$notredame_carousel2_card_title1 = array("1163, l'année où tout a commencé...", "1163, the year it all began...");
$notredame_carousel2_card_text1 = array("Notre-Dame de Paris, un monument d’exception 
Au-delà de sa vocation religieuse, la cathédrale Notre-Dame de Paris est l’un des fleurons du patrimoine culturel national et mondial. C’est l’une des plus anciennes cathédrales gothiques de France (avec Noyon, Senlis, Laon et Sens). La majeure partie de la construction débute en 1163 et s’achève en 1345.",
"Notre-Dame de Paris, an exceptional monument 
Beyond its religious vocation, the cathedral of Notre-Dame de Paris is one of the jewels of the national and world cultural heritage. It is one of the oldest Gothic cathedrals in France (along with Noyon, Senlis, Laon and Sens). Most of the construction began in 1163 and was completed in 1345.");
$notredame_carousel2_colapse_card_text1 = array("En 1844, Notre-Dame est dans un état de conservation préoccupant. Privée d’une partie importante de ses sculptures décoratives au cours du XVIIIe siècle, de sa flèche (1792), de la statuaire de la galerie des Rois (1793), elle bénéficie jusqu’en 1865 d’importants travaux sous la direction d’Eugène-Emmanuel Viollet-le-Duc.  
Depuis cette intervention majeure, les travaux d’entretien et de restauration de ce monument appartenant à l’État n’ont pas cessé.",
"In 1844, Notre-Dame was in a worrying state of conservation. Deprived of an important part of its decorative sculptures during the 18th century, of its spire (1792), of the statuary of the Kings' gallery (1793), it benefited until 1865 from important works under the direction of Eugène-Emmanuel Viollet-le-Duc.  
Since this major intervention, the maintenance and restoration of this monument belonging to the State have not ceased.");

/* element 2 */
$notredame_carousel2_card_title2_i = array("Notre-Dame de Paris", "Notre-Dame de Paris");
$notredame_carousel2_card_title2_h2 = array(" de Victor Hugo", " by Victor Hugo");
$notredame_carousel2_card_text2 = array("En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.",
"In addition to being the most famous Gothic cathedral in France, Notre Dame de Paris is also a major novel by Victor Hugo.");
$notredame_carousel2_colapse_card_text2 = array("Publié en 1831, il nous conte l’histoire de Quasimodo, Esmeralda, Frollo et Phoebus. Histoire d’amour, de haine et d’indifférence, histoire de passion aussi, dont les péripéties sont surtout connues pour les nombreuses adaptations, plus que pour le texte lui-même.
En effet, ce roman de 940 pages est à réserver aux mains et aux yeux des lecteurs aguerris, voraces ou déterminés. Les intrigues à tiroirs sont aussi complexes que les personnages, les scènes s’étirent sur des pages et des pages d’action comme de description.
Et pourtant, une qualité littéraire exceptionnelle, comme une récompense, attend le lecteur qui ouvrira les pages de Notre-Dame de Paris, sans doute l’un des plus beaux romans jamais écrits en langue française.",
"Published in 1831, it tells the story of Quasimodo, Esmeralda, Frollo and Phoebus. A story of love, hatred and indifference, a story of passion as well, whose adventures are mostly known for the numerous adaptations, more than for the text itself.
Indeed, this novel of 940 pages is to be reserved for the hands and eyes of seasoned readers, voracious or determined. The plots are as complex as the characters, the scenes stretch for pages and pages of action and description.
And yet, an exceptional literary quality, like a reward, awaits the reader who will open the pages of Notre-Dame de Paris, undoubtedly one of the most beautiful novels ever written in the French language.");
$notredame_carousel2_colapse_card_blockquote_text = array("« La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête. »", "« La tête, le cœur, la moelle de la ville entière. »",
"« La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête. »", "« La tête, le cœur, la moelle de la ville entière. »");
$notredame_carousel2_colapse_card_blockquote_footer = array("Victor Hugo dans son roman", "Victor Hugo in his novel");

/* element 3 */
$notredame_carousel2_card_title3 = array("Le sacre de Napoléon dans la cathédrale de Notre Dame, le 18 mai 1804.", "The coronation of Napoleon in the cathedral of Notre Dame, May 18, 1804.");
$notredame_carousel2_card_text3 = array("Le sacre de Napoléon Ier est la cérémonie d’intronisation et de couronnement qui suivit la proclamation de Napoléon Bonaparte comme empereur des Français sous le titre de Napoléon Ier du 18 mai 1804.", "The coronation of Napoleon I is the enthronement and coronation ceremony that followed the proclamation of Napoleon Bonaparte as Emperor of the French under the title of Napoleon I on 18 May 1804.");
$notredame_carousel2_colapse_card_text3 = array("La cérémonie religieuse du sacre, officié par le pape Pie VII, suivie de celle du couronnement, se déroula, le dimanche 2 décembre 1804, à Notre-Dame de Paris. Elle dura près de cinq heures et le peintre Jacques-Louis David en fit deux tableaux : le Sacre de Napoléon et la Distribution des aigles.
Le Sacre de Napoléon (titre complet Sacre de l'empereur Napoléon Ier et couronnement de l'impératrice Joséphine dans la cathédrale Notre-Dame de Paris, le 2 décembre 1804) est un tableau peint entre 1805 et 1807 par Jacques-Louis David, peintre officiel de Napoléon Ier, qui représente une des cérémonies du couronnement. Imposante par ses dimensions, presque dix mètres sur plus de six, la toile de David est conservée au Louvre. Une réplique quasiment identique commencée en 1808 par David et terminée lors de l'exil du peintre à Bruxelles est accrochée au musée du château de Versailles dans la salle du Sacre. Le couronnement et le sacre ont eu lieu à Notre-Dame de Paris.",
"The religious ceremony of the coronation, officiated by Pope Pius VII, followed by the coronation, took place on Sunday, December 2, 1804, at Notre-Dame de Paris. It lasted nearly five hours and the painter Jacques-Louis David painted two pictures of it: the Coronation of Napoleon and the Distribution of the Eagles.
The Rite of Napoleon (full title Rite of Emperor Napoleon I and Coronation of Empress Josephine in the Cathedral of Notre-Dame de Paris, December 2, 1804) is a picture painted between 1805 and 1807 by Jacques-Louis David, official painter of Napoleon I, which represents one of the coronation ceremonies. Imposing by its dimensions, almost ten meters by more than six, the painting of David is preserved in the Louvre. An almost identical replica, begun in 1808 by David and completed during the painter's exile in Brussels, hangs in the Coronation Room of the Château de Versailles. The coronation and the coronation took place at Notre-Dame de Paris.");

/* caroussel 3, actualité */
$notredame_sous_titre_actualite = array("Actualité", "News");

/* element 1 */
$notredame_carousel2_card_title3 = array("Les incendies de Notre Dame", "The fires of Notre Dame");
$notredame_carousel2_card_text3 = array("L’incendie de Notre-Dame de Paris est un incendie majeur survenu à la cathédrale Notre-Dame de Paris, les 15 et 16 avril 2019, pendant près de 15 heures.", "The Notre Dame de Paris fire was a major fire at the Notre Dame Cathedral in Paris on April 15 and 16, 2019, for nearly 15 hours.");
$notredame_carousel2_colapse_card_text3 = array("Le sinistre se déclare en fin d'après midi à l'intérieur de sa charpente et prend rapidement une grande ampleur. Les flammes détruisent intégralement sa flèche, les toitures de la nef et du transept ainsi que sa charpente. En s'effondrant, la flèche provoque l'écroulement de la voûte de la croisée du transept, d'une partie de celle du bras nord et de celle d\'une travée de la nef. L\'intervention de centaines de pompiers, jusqu\'au lever du jour, permet de sauver la structure globale de l\'édifice et d\'épargner les deux tours, ainsi que la façade occidentale, le trésor et l\'essentiel des œuvres d\'art de la cathédrale. Il s\'agit du plus important sinistre subi par la cathédrale depuis sa construction.
L'incendie entraîne une très forte émotion, tant en France que dans le reste du monde, ainsi qu'une importante couverture médiatique. Le président de la République, Emmanuel Macron, annonce immédiatement vouloir reconstruire la cathédrale dans un délai de cinq ans. Après des débats sur la construction d'un édifice plus moderne à l'ancien emplacement de la flèche, il est finalement décidé de la reconstruire à l\'identique.", "The fire broke out at the end of the afternoon inside its framework and quickly took on a large scale. The flames completely destroyed the spire, the roofs of the nave and transept as well as the roof structure. As the spire collapsed, the vault of the transept crossing, part of the north arm and a bay of the nave collapsed. The intervention of hundreds of firefighters, until daybreak, saved the overall structure of the building and spared the two towers, as well as the western facade, the treasure and most of the works of art of the cathedral. This was the most important fire suffered by the cathedral since its construction.
The fire caused great emotion in France and around the world, as well as extensive media coverage. The President of the Republic, Emmanuel Macron, immediately announced his intention to rebuild the cathedral within five years. After debates on the construction of a more modern building on the former site of the spire, it was finally decided to rebuild it identically.");

/* element 2 */
$notredame_carousel2_card_title3 = array("Comment visiter Notre Dame ?", "How to visit Notre Dame?");
$notredame_carousel2_card_text3 = array("Aujourd'hui la reconstruction est toukours en cour, et une réouverture complète n'est pas à prévoir avant 2024, mais l'on peut encore visiter le monument grace à un méthodes inédite, la réalité virtuel.", "Today the reconstruction is still in progress, and a complete reopening is not expected before 2024, but we can still visit the monument thanks to a new method, virtual reality.");
$notredame_carousel2_colapse_card_text3 = array("Visite immersive proposer sous le parvis de Notre Dame et dans la Défence, elle vous fait voir la cathédrale sous différent angle et à différentes époques, vous permettant ed marcher à l'intérieur comme si vous y étiez.
Disposible jusqu'au 14 avril, c'est une expérience à ne pas manquer qui vous permet de traverser les âges et de découvrir le passé avec les technologies du présent, en attendant de pourvoir remettre un pied dans la cathédrâle dans un future proche.", "An immersive visit proposed under the square of Notre Dame and in the Defense, it makes you see the cathedral from different angles and at different times, allowing you to walk inside as if you were there.
Available until April 14th, this is an experience not to be missed, allowing you to cross the ages and discover the past with the technologies of the present, while waiting to be able to step into the cathedral again in the near future.");
$notredame_carousel2_lien_text3 = array("Site officiel de éternelle notre dame", "Official website of eternal notre dame");

/* PAGE Avisiter.php */
$Avisiter_title = $nav_discover_tovisit;
$Avisiter_description = array("L'Île de la Cité, outre le fait que ce patrimoine française regorge de monuments iconiques, on peut y trouver beaucoup d'<b style='color: #ea5c0d;'>emplacements cachés et magnifiques</b>.","The Ile de la Cité, besides the fact that this French heritage is full of iconic monuments, has <b style='color: #ea5c0d;'>many hidden and beautiful places</b>.","The Île de la Cité ، إلى جانب حقيقة أن هذا التراث الفرنسي مليء بالآثار الشهيرة ، يمكنك العثور على الكثير من <b style = 'color: # ea5c0d؛'> المواقع المخفية والرائعة </ b>.","Île de la Cité，除了這個法國遺產遍布標誌性古蹟之外，您還可以找到許多<b style='color: #ea5c0d;'>隱藏而壯麗的地點</b>。");

$Avisiter_marchefleurs_time = array("Du lundi au Samedi, de 8h00 à 19h30","From Monday to Saturday, from 8h00 to 19h30","من الاثنين إلى السبت ، من 8:00 صباحًا إلى 7:30 مساءً","週一至週六，上午 8:00 至
晚上 7:30");
$Avisiter_marchefleurs_phrase = array("Respirez les roses, les tulipes et beaucoup plus d'espèces florales au Marché aux fleurs au bord de quai.","Breathe in the roses, tulips and many more floral species at the Wharfside Flower Market.","استنشق الورود والزنبق والعديد من أنواع الأزهار الأخرى في سوق كوايسايد للزهور.","在碼頭區花卉市場呼吸玫瑰、鬱金香和更多花卉品種。");

$Avisiter_crypte_lieu = array("En-dessous de la Cathédrale Notre Dame","Below the Notre Dame Cathedral","أسفل كاتدرائية نوتردام","巴黎圣母院下方");
$Avisiter_crypte_time = array("Du Mardi au Dimanche, de 10h à 18h","Tuesday to Sunday, from 10am to 6pm","من الثلاثاء إلى الأحد ، من الساعة 10 صباحًا حتى الساعة 6 مساءً","週二至週日，上午 10 點至下午 6 6 點。");
$Avisiter_crypte_phrase = array("Visitez la plus importante crypte archéologique d’Europe et offre une vision unique de l’évolution urbaine et architecturale de l’île de la Cité.","Visit the most important archaeological crypt in Europe and offers a unique vision of the urban and architectural evolution of the Ile de la Cité.","قم بزيارة أهم سرداب أثري في أوروبا وقدم رؤية فريدة للتطور الحضري والمعماري في إيل دو لا سيتي.","參觀歐洲最重要的考古地下室，並以獨特的視角了解 Ile de la Cité 的城市和建築演變。");

$Avisiter_Square_time = array("Pas d'horaires","No schedule","لا ساعات","沒有時間表");
$Avisiter_Square_phrase = array("Le square offre une faune et une flore impressionnante pour un parc se trouvant au centre de la capitale. Il donne sur une vue magnifique de la Seine, du Musée du Louvre et de l'Hôtel de la Monnaie.","The square offers an impressive flora and fauna for a park located in the center of the capital. It offers a magnificent view of the Seine, the Louvre Museum and the Hôtel de la Monnaie.","توفر الساحة نباتات وحيوانات رائعة لحديقة تقع في وسط العاصمة. وتطل على منظر رائع لنهر السين ومتحف اللوفر وفندق دي لا موناي","廣場為位於首都中心的公園提供了令人印象深刻的動植物群。 它俯瞰著塞納河、盧浮宮和 Hôtel de la Monnaie 的壯麗景色。");

$Avisiter_maison_title=array("La fausse maison médiévale de l’île de la Cité","The fake medieval house on the Ile de la Cité","منزل القرون الوسطى المزيف في إيل دو لا سيتي","Ile de la Cité 上的假中世紀
房屋");
$Avisiter_maison_time = array("Pas d'horaires","No schedule","لا ساعات","沒有時間表");
$Avisiter_maison_phrase = array("Une maison du millieu du XXe s ressemblant aux maison de l'époque de la construction de la cathédrale.","A house of the middle of the XXth century resembling the houses of the time of the construction of the cathedral.","منزل من منتصف القرن العشرين يشبه المنازل من وقت بناء الكاتدرائية.","一座 20 世紀中葉的房屋，與建造大教堂時的房屋相似。");



/* Informations */

$info_description=array("Vous trouverez sur cette pages les <b style='color: #ea5c0d;'>informations utiles </b> pour vous aider à préparer votre visite sur l'Île telles que les <b style='color: #f7af3e;'>horaires</b> des monuments, le <b style='color: #f7af3e;'>prix</b> d'entrée et enfin les <b style='color: #f7af3e;'>transports en commun</b> à proximité.","You will find on this page <b style='color: #ea5c0d;'>useful information</b> to help you prepare your visit to the island such as the <b style='color: #f7af3e;'>schedules</b> of the monuments, the entrance <b style='color: #f7af3e;'>fees</b> and finally the <b style='color: #f7af3e;'>public transport </b> in the vicinity." ,"ستجد في هذه الصفحة <b style = 'color: # ea5c0d؛'> معلومات مفيدة </ b> لمساعدتك في الاستعداد لزيارتك للجزيرة ، مثل <b style = 'color: # f7af3e؛'> الجداول الزمنية </b> من المعالم ، <b style = 'color: # f7af3e؛'> سعر الدخول </ b> وأخيرًاا <b style = 'color: # f7af3e؛'> النقل العام </ b> في مكان قريب.","在此頁面上，您將找到<b style='color: #ea5c0d;'>有用信息</b>，以幫助您為訪問該島做準備，例如<b style='color: #f7af3e;'> 時間表</b> 的古蹟，<b style='color: #f7af3e;'>門票</b>，最後是附近的<b style='color: #f7af3e;'>公共交通</b>。");
$info_horaires=array("HORAIRES","SCHEDULE","برنامج","日程");

$info_notredame_status = array("Suspendue (Covid et travaux)", "Suspended (Covid and works)","معلق (كوفيد ويعمل)","暫停（Covid 和作品）");
$info_notredame_description = array("Nous n'avons pas plus d'informations malheureusement :/", "We do not have more information unfortunately :/","للأسف ، ليس لدينا المزيد من المعلومات: /","不幸的是，我們沒有更多信息：/");

$info_palaisjustice_status = array("Suspendue (Covid)","Suspended (Covid)","معلق (كوفيد)","暫停（covid）");
$info_palaisjustice_description = $info_notredame_description;

$info_conciergerie_status = array("Ouvert au public","Open to public","مفتوح للعامة","向公眾公開的");
$info_conciergerie_description = array("Vous pouvez réserver pour tous les jours de l'année sauf exceptions.","Reservations can be made for any day of the year with some exceptions.","يمكنك الحجز في أي يوم من أيام السنة باستثناءات.","您可以預訂一年中的任何一天，但有例外。");

$info_pontneuf_status = array("Ouvert au grand public","Open to public","فتح للجمهور العام","向公眾開放");
$info_pontneuf_description = array("La visite ne nécessite aucun achat de billet ou autre.","The visit does not require the purchase of a ticket or anything else.","الزيارة لا تتطلب أي تذكرة أو شراء آخر.","參觀不需要任何門票或其他購買。");

$info_crypte_status = $info_palaisjustice_status;
$info_crypte_description = $info_notredame_description;

$info_chapelle_status = $info_conciergerie_status;
$info_chapelle_description = array("Vous pouvez réserver pour tous les jours de l'année sauf exceptions.","Reservations can be made for any day of the year with some exceptions.","يمكنك الحجز في أي يوم من أيام السنة باستثناءات.","您可以預訂一年中的任何一天，但有例外。");

$info_reserve = array("Réserver", "Book","للحجز","預訂");
$info_VR = array("Visiter en VR", "Visit in VR","زيارة في VR","在 VR 中訪問");

$info_gratuitrequis = array("Les jeunes de moins de 26 ans habitant dans l Union européenne peuvent accéder gratuitement à certains musées et monuments nationaux, sur simple présentation d une pièce d identité.","Young people under 26 years of age living in the European Union can enter certain national museums and monuments free of charge upon presentation of an identity document.","يمكن للشباب الذين تقل أعمارهم عن 26 عامًا والذين يعيشون في الاتحاد الأوروبي الدخول إلى متاحف ومعالم أثرية وطنية معينة مجانًا ، بمجرد تقديم وثيقة هوية.","居住在歐盟的 26 歲以下的年輕人只需出示身份證件即可免費進入某些國家博物館和   紀念碑。");
$info_prix = array("PRIX","PRICES","السعر","價格");
$info_tarifnormal = array("Tarif Normal","Normal rate","وصفة عادية","配方正常");
$info_tarifreduit = array("Tarif Réduit","Reduced rate","السعر المخفض","減價");
$info_gratuit = array("Gratuit","Free","حر","自由");

$info_trajetGPS = array("Vous souhaitez connaître le chemin exact depuis une adresse précise ?", "Do you want to know the exact route from a specific address?","هل تريد معرفة المسار الدقيق من عنوان معين؟","您想知道特定地址的確切路徑嗎？");
$info_cliquer = array("Cliquez ici", "Click here","انقر هنا","點擊這裡");


/* Galerie */

$Gallery_title = array("L'Île de la Cité a toujours été une grande <b style='color: #ea5c0d;'>inspiration</b> pour les <b style='color: #ea5c0d;'> artistes </b> de toutes les époques. ","The Île de la Cité has always been a great <b style='color: #ea5c0d;'>inspiration</b> for <b style='color: #ea5c0d;'>artists</b> of all eras. ","لطالما كانت لعبة Île de la Cité <b style = 'color: #ea5c0d;'> مصدر إلهام </b> لـ <b style = 'color: #ea5c0d;'> الفنانين </b> من جميع الأعمار.","Île de la Cité 一直是各個年齡段 <b style='color: #ea5c0d;'>藝術家 </b>的偉大<b style='color: #ea5c0d;'>靈感</b>。時代。");

/* About Us */

$AboutUs_title = array("Qui sommes-nous ?", "Who are we?","من نحن ؟","我們是誰 ？");
$AboutUs_subtitle = array("Nous sommes un binôme d'étudiants à l'Université Gustave Eiffel qui ont pour objectif de participer à la valorisation d'un patrimoine mondial reconnu par l'UNESCO en France (kokorico ^^) qui est L' Ile de la Cité.","We are a pair of students at the University Gustave Eiffel whose objective is to participate in the development of a world heritage recognized by UNESCO in France (kokorico ^^) which is the Ile de la Cité.","نحن زوجان من الطلاب في جامعة Gustave Eiffel نهدف إلى المشاركة في الترويج للتراث العالمي المعترف به من قبل اليونسكو في فرنسا (kokorico ^^) وهو Ile de la Cité.","我 們是Gustave Eiffel大學的一對學生，他們的目標是參與促進法國聯合國教科文組織認可的世界遺產（kokorico ^^），即Ile de la Cité。");
$AboutUs_berachem = array("CHEF DE PROJET ET PRINCIPAL DÉVELOPPEUR","PROJECT MANAGER AND LEAD DEVELOPER","مدير المشروع والمطور الرئيسي","項目經理和首席開發人員");
$AboutUs_tristan = array("DÉVELOPPEUR ET SPÉCIALISTE DE L'ÎLE", "DEVELOPER AND SPECIALIST OF THE ISLAND","مطور وأخصائي جزر","開發商和島嶼專家");
$AboutUs_name = array("Nom Complet", "Full Name","الاسم الكامل","全名");
$AboutUs_email= array("Addresse Email", "Email Address","عنوان البريد الإلكتروني","地址 電子郵件");
$AboutUs_envoyer = array("Envoyer", "Send","يرسل","發送");


/* Message recu */
$message_thankyou = array("Message envoyé ! Merci !", "Message sent! Thank you!","رسالة مرسلة ! شكرا لك !","消息已發送！謝謝 ！");

echo 
'<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base target="_blank">

    <!-- Icon onglet-->
    <link rel="icon" href="../img/logo_page.png" />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="https://kit.fontawesome.com/061a20ff24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/script.js" defer></script>
    

    <!-- CSS -->
    
    ';

    
    if ($page =='Ile de la Cité'){
    echo '<link rel="stylesheet" href="../css/style.css">';
    }elseif ($page=='A propos' or $page=='Restaurants' or $page=='Admin') {
        echo '<link rel="stylesheet" href="../css/a_propos.css">';
    } else{
        echo '<link rel="stylesheet" href="../css/Decouvrir.css">';
    }
    

$titleList = array($nav_home, $nav_discover,$nav_discover_near, $nav_discover_tovisit, $nav_gallery, $nav_home, $nav_about, $nav_road);
function getTranslateTitle($titre,$titleList,$langue){
  foreach ($titleList as $a){
    if ($a[0] == $titre || $a[1] == $titre){
      echo '<title> '.$a[$langue].' - Paris</title>' ;
      return;
    }
  }
  echo '<title> '.$titre.' - Paris</title>' ;
}
getTranslateTitle($page,$titleList,$langue);
echo '
  </head>
  <body>
    <header>
      <!-- logo MCN -->
      <nav class="navbar" style="background-color: rgba(0, 0, 0, 0.3);
      position:fixed;
      top :0;
      left :0;
      z-index:99;">
        <div class="brand-title">
          <a target="_self" href="#"><img src="../img/mcn.png" 
          alt="logoMCN" 
          width="165"
          height="50"></a>
        </div>';
  
echo'
        <a class="toggle-button" style="top: 25px;" target="_self">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>

        <!-- Barre de navigation -->
        <div class="navbar-links">
          <ul>
            <li><a target="_self" href="index.php?lang='.$langue.'"><img src="../img/home_emoji.png" width="25" height="25">  '. $nav_home[$langue].'</a></li>

            <!-- Dropdown Monuments -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="../img/monuments_emoji.png" width="25" height="25">  '.$nav_monuments[$langue].'
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a target="_self" class="dropdown-item" href="notredame.php?lang='.$langue.'"> <img src="../img/notredame_emoji.png" width="25" height="25"> Notre Dame</a>
                <a target="_self" class="dropdown-item" href="palaisdejustice.php?lang='.$langue.'"><img src="../img/justice_emoji.png" width="25" height="25"> Palais de Justice</a>
                <a target="_self" class="dropdown-item" href="saintechapelle.php?lang='.$langue.'"><img src="../img/chapelle_logo.png" width="25" height="25"> La Sainte-Chapelle</a>
                <a target="_self" class="dropdown-item" href="lesponts.php?lang='.$langue.'"><img src="../img/pont_emoji.png" width="25" height="25"> Les Ponts</a>
                </div>
            </li>

            <li><a target="_self" href="informations.php?lang='.$langue.'"><img src="../img/info_emoji.png" width="25" height="25">  '.$nav_infos[$langue].'</a></li>

            <!-- dropdown Découvrir -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="../img/boussole_emoji.png" width="25" height="25">  '. $nav_discover[$langue].'
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a target="_self" class="dropdown-item" href="restaurants.php?lang='.$langue.'"><img src="../img/resto_emoji.png" width="25" height="25">  '.$nav_restaurants[$langue].'</a>
                <a target="_self" class="dropdown-item" href="endroitsAvisiter.php?lang='.$langue.'"><img src="../img/av_emoji.png" width="25" height="25">  '. $nav_discover_tovisit[$langue].'</a></a>
                <a target="_self" class="dropdown-item" href="parcours.php?lang='.$langue.'"><img src="../img/parcours.png" width="25" height="25">  '. $nav_road[$langue].'</a></a>
              </div>
            </li>
            <li><a target="_self" href="galerie.php?lang='.$langue.'"><img src="../img/g_emoji.png" width="25" height="25">  '. $nav_gallery[$langue].'</a></li>
            <li><a target="_self" href="a_propos.php?lang='.$langue.'"><img src="../img/nous_emoji.png" width="25" height="25">  '. $nav_about[$langue].'</a></li>';
            
            if ($langue == 0) {
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self" class="ukflag"><img src="../img/eng_flag.png" alt="" width="27" height="25"></a></li>';
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=3" target="_self" class="chinaflag"><img src="../img/china.png" alt="" width="27" height="27"></a></li>';
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=2" target="_self" class="arabflag"><img src="../img/arab.png" alt="" width="27" height="27"></a></li>';
            } else if ($langue ==1) {
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'" target="_self" class="frflag"><img src="../img/fr_flag.png" alt="" width="27" height="25"></a></li>';
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=3" target="_self" class="chinaflag"><img src="../img/china.png" alt="" width="27" height="27"></a></li>';
                echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=2" target="_self" class="arabflag"><img src="../img/arab.png" alt="" width="27" height="27"></a></li>';
            } else if ($langue==2){
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'" target="_self" class="frflag"><img src="../img/fr_flag.png" alt="" width="27" height="25"></a></li>';
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self" class="ukflag"><img src="../img/eng_flag.png" alt="" width="27" height="25"></a></li>';
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=3" target="_self" class="chinaflag"><img src="../img/china.png" alt="" width="27" height="27"></a></li>';

            } else{
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'" target="_self" class="frflag"><img src="../img/fr_flag.png" alt="" width="27" height="25"></a></li>';
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self" class="ukflag"><img src="../img/eng_flag.png" alt="" width="27" height="25"></a></li>';
              echo '<li><a target="_self" href="'.$_SERVER["PHP_SELF"].'?lang=2" target="_self" class="arabflag"><img src="../img/arab.png" alt="" width="27" height="27"></a></li>';

              

            }


         
         echo'   </ul>
        </div>
      </nav>';

      // BARRE DE PROGRESSION
        echo'
      <div class="progress" style="background-color: #f7af3e; height: 4.2px; z-index: 100;"></div>
      <style>

      .progress { 
        position: fixed;
         top: 0; 
         left: 0; 
         height: 10px; 
         background-color: #0d6efd; 
         transition: all linear 0.1s; 
         min-width: 0%; 
      
      }
      </style>

    </header>';
?>