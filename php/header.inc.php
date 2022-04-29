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



/* Commun */

$savoirplus = array("En savoir plus", "Read more");

/*============== Notredame =================== */

$notredame_description = array("La cathédrale <b style=\"color: #ea5c0d;\"> Notre-Dame </b> de Paris, chef d’œuvre de l’architecture gothique, est le monument le plus visité de France.", "The cathedral <b style=\"color: #ea5c0d;\"> Notre-Dame </b> of Paris, a masterpiece of Gothic architecture, is the most visited monument in France.");

/* caroussel 1, architecture */
$notredame_sous_titre_architecture = array("Architecture", "Architecture");

/* element 1 */
$notredame_carousel1_card_title1 = array("Un Style principalement gothique", "A mainly gothic style");
$notredame_carousel1_card_text1 = array("Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.", "The clarity of the composition and the balance of the verticals and horizontals strike all visitors as they approach the cathedral's façade.");
$notredame_carousel1_colapse_card_text1 = array("L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.", "The abundance of the sculpted decoration attracts the eye by the verve and quality of the sculptures, whether they are original or from the great restoration work carried out in the 19th century. The interior atmosphere of the cathedral leaves no one indifferent to the monumentality of the space, the roses of the transepts, the votive statuary or the majesty of the great organ. The large paintings in the chapels allow us to understand the essential role of religious painting in the 17th and 18th centuries. The cathedral's treasury contains a number of works of major interest, used in worship. Notre-Dame de Paris is thus a fundamental building, as much for the history of Gothic architecture as for the history of art since the Middle Ages or the history of restoration in the 19th and 20th centuries. Classified as a historical monument on the 1862 list, it is an integral part of the property 'Paris, banks of the Seine' listed as a World Heritage Site by UNESCO. The classified area includes the major monuments, buildings, gardens, squares and quays that border the Seine, from the Ile Saint-Louis in the east to the Ile aux Cygnes in the west.");

/* element 2 */
$notredame_carousel1_card_title2 = array("Un Projet gigantesque d'une ampleur phénoménale", "A gigantic project of phenomenal scope");
$notredame_carousel1_card_text2 = array("Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes, ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.", "After the strong demographic and religious growth of France, the Saint-Etienne basilica, in spite of its imposing dimensions was no longer sufficient to satisfy the fervor of the Parisians and the ambitions of the new bishop Maurice de Sully with regard to the intellectual influence of the city and its growth.");
$notredame_carousel1_colapse_card_text2 = array("Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully. S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique, d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.", "The need for a larger, more majestic building was felt, in keeping with the capital of the bishopric and the country, as well as the ambition of the new bishop Maurice de Sully. Thus began one of the longest construction projects that France has ever had to carry out, a project that lasted nearly 200 years, and which required a great deal of technique, organization and time. It required a lot of technique, organization and know-how to achieve this remarkable result.");
$notredame_carousel1_colapse_card_blockquote_text = array("« La tête, le cœur, la moelle de la ville entière. »", "« La tête, le cœur, la moelle de la ville entière. »");
$notredame_carousel1_colapse_card_blockquote_footer = array("Gui de Bazoches, chroniqueur du XIIe siècle", "Gui de Bazoches, chronicler of the XIIth century");

/* element 3 */
$notredame_carousel1_card_title3 = array("Deux siècles de technique, d'archtecture et de travail", "Two centuries of technique, architecture and work");
$notredame_carousel1_card_text3 = array("En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.", "In 1163, the first stone of Notre-Dame was laid in the presence of Pope Alexander III.");
$notredame_carousel1_colapse_card_text3 = array("Elle est emblématique de l'art ogival, aussi appelé art gothique, style novateur récement utilisé pour la construction des églises et des cathédrales à l'époque. Système de voûtes en croisées d’ogives, afin de pouvoir placé les vitraux et laisser passé la lumière. Hauteur sous voûte élevée, pour être au plus près du ciel. Élévation à quatre étages étayés par des tribunes afin de faire tenir le toit. De nombreux arcs-boutants à l'extérieur pour contrebalancé la poussée des voûtes de grande hauteur.<br>Plusieurs campagne de travaux ont eu lieu, de sorte que l'on peut distinguer de étapes :</p><ul> <li>1163-1225 : construction du chœur et de son double déambulatoire, de la nef, des bas-côtés et des tribunes, façade élevée jusqu'à la galerie des rois </li><li>1225-1250 : galerie haute et les deux tours sur la façade, modification et agrandissements des fenêtres hautes et aménagement des chapelles latérales de la nef.</li> </ul>", "It is emblematic of the ogival art, also called Gothic art, an innovative style recently used for the construction of churches and cathedrals at the time. The vaulting system is made of ribbed vaults, in order to place the stained glass windows and let the light through. High vault height, to be as close as possible to the sky. Four-story elevation supported by galleries to hold the roof. Numerous buttresses on the outside to counterbalance the thrust of the high vaults. <br> Several campaigns of work have taken place, so that we can distinguish stages : </p> <ul> <li>1163-1225 : construction of the choir and its double ambulatory, the nave, the aisles and the tribunes, elevated facade to the gallery of kings</li> <li>1225-1250 : high gallery and the two towers on the facade, modification and enlargement of the high windows and arrangement of the side chapels of the nave.</li> </ul>");

/* element 4 */
$notredame_carousel1_card_title4 = array("Deux siècles de technique, d'architecture et de travail", "Two centuries of technique, architecture and work");
$notredame_carousel1_card_text4 = array("Ayant subi les outrages du temps et des Hommes, notament avec plusieurs incendits (dont un récemment).", "Having undergone the ravages of time and Men, notably with several fires (including one recently).");
$notredame_carousel1_colapse_card_text4 = array("Notre-Dame aura été modifier et rénové de nombreuse fois et ce dès sa création, d'une par pour remplacer es partie romane subsistance, d'autre part pour remforcer la structure ou encore refaire une partie de la cathédrale. Les architectes se sont succedé et on manque d'information sur les artisans de l'ouvrage au cours du XIIe siècle, car leurs nombre devait être extrême pour un projet de cette taille, néanmoins les comptes de fabrique sont conservés à partir de 1333.", "Notre-Dame has been modified and renovated many times since its creation, on the one hand to replace the Romanesque subsistence part, on the other hand to re-strengthen the structure or to rebuild a part of the cathedral. The architects succeeded each other and we lack information on the craftsmen of the work during the twelfth century, because their number had to be extreme for a project of this size, nevertheless the accounts of factory are preserved from 1333.");

/* caroussel 2, histoire */
$notredame_sous_titre_histoire = array("Histoire", "History");

/* element 1 */
$notredame_carousel2_card_title1 = array("1163, l'année où tout a commencé...", "1163, the year it all began...");
$notredame_carousel2_card_text1 = array("Notre-Dame de Paris, un monument d’exception Au-delà de sa vocation religieuse, la cathédrale Notre-Dame de Paris est l’un des fleurons du patrimoine culturel national et mondial. C’est l’une des plus anciennes cathédrales gothiques de France (avec Noyon, Senlis, Laon et Sens). La majeure partie de la construction débute en 1163 et s’achève en 1345.","Notre-Dame de Paris, an exceptional monument Beyond its religious vocation, the cathedral of Notre-Dame de Paris is one of the jewels of the national and world cultural heritage. It is one of the oldest Gothic cathedrals in France (along with Noyon, Senlis, Laon and Sens). Most of the construction began in 1163 and was completed in 1345.");
$notredame_carousel2_colapse_card_text1 = array("En 1844, Notre-Dame est dans un état de conservation préoccupant. Privée d’une partie importante de ses sculptures décoratives au cours du XVIIIe siècle, de sa flèche (1792), de la statuaire de la galerie des Rois (1793), elle bénéficie jusqu’en 1865 d’importants travaux sous la direction d’Eugène-Emmanuel Viollet-le-Duc. Depuis cette intervention majeure, les travaux d’entretien et de restauration de ce monument appartenant à l’État n’ont pas cessé.","In 1844, Notre-Dame was in a worrying state of conservation. Deprived of an important part of its decorative sculptures during the 18th century, of its spire (1792), of the statuary of the Kings' gallery (1793), it benefited until 1865 from important works under the direction of Eugène-Emmanuel Viollet-le-Duc. Since this major intervention, the maintenance and restoration of this monument belonging to the State have not ceased.");

/* element 2 */
$notredame_carousel2_card_title2_i = array("Notre-Dame de Paris", "Notre-Dame de Paris");
$notredame_carousel2_card_title2_h2 = array(" de Victor Hugo", " by Victor Hugo");
$notredame_carousel2_card_text2 = array("En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.","In addition to being the most famous Gothic cathedral in France, Notre Dame de Paris is also a major novel by Victor Hugo.");
$notredame_carousel2_colapse_card_text2 = array("Publié en 1831, il nous conte l’histoire de Quasimodo, Esmeralda, Frollo et Phoebus. Histoire d’amour, de haine et d’indifférence, histoire de passion aussi, dont les péripéties sont surtout connues pour les nombreuses adaptations, plus que pour le texte lui-même. En effet, ce roman de 940 pages est à réserver aux mains et aux yeux des lecteurs aguerris, voraces ou déterminés. Les intrigues à tiroirs sont aussi complexes que les personnages, les scènes s’étirent sur des pages et des pages d’action comme de description. Et pourtant, une qualité littéraire exceptionnelle, comme une récompense, attend le lecteur qui ouvrira les pages de Notre-Dame de Paris, sans doute l’un des plus beaux romans jamais écrits en langue française.", "Published in 1831, it tells the story of Quasimodo, Esmeralda, Frollo and Phoebus. A story of love, hatred and indifference, a story of passion as well, whose adventures are mostly known for the numerous adaptations, more than for the text itself. Indeed, this novel of 940 pages is to be reserved for the hands and eyes of seasoned readers, voracious or determined. The plots are as complex as the characters, the scenes stretch for pages and pages of action and description. And yet, an exceptional literary quality, like a reward, awaits the reader who will open the pages of Notre-Dame de Paris, undoubtedly one of the most beautiful novels ever written in the French language.");
$notredame_carousel2_colapse_card_blockquote_text = array("« La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête. »", "« La tête, le cœur, la moelle de la ville entière. »", "« La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête. »", "« La tête, le cœur, la moelle de la ville entière. »");
$notredame_carousel2_colapse_card_blockquote_footer = array("Victor Hugo dans son roman", "Victor Hugo in his novel");
$notredame_carousel2_colapse_card_blockquote_button = array("Acheter le roman", "Buy the book");

/* element 3 */
$notredame_carousel2_card_title3 = array("Le sacre de Napoléon dans la cathédrale de Notre Dame, le 18 mai 1804.", "The coronation of Napoleon in the cathedral of Notre Dame, May 18, 1804.");
$notredame_carousel2_card_text3 = array("Le sacre de Napoléon Ier est la cérémonie d’intronisation et de couronnement qui suivit la proclamation de Napoléon Bonaparte comme empereur des Français sous le titre de Napoléon Ier du 18 mai 1804.", "The coronation of Napoleon I is the enthronement and coronation ceremony that followed the proclamation of Napoleon Bonaparte as Emperor of the French under the title of Napoleon I on 18 May 1804.");
$notredame_carousel2_colapse_card_text3 = array("La cérémonie religieuse du sacre, officié par le pape Pie VII, suivie de celle du couronnement, se déroula, le dimanche 2 décembre 1804, à Notre-Dame de Paris. Elle dura près de cinq heures et le peintre Jacques-Louis David en fit deux tableaux : le Sacre de Napoléon et la Distribution des aigles. Le Sacre de Napoléon (titre complet Sacre de l'empereur Napoléon Ier et couronnement de l'impératrice Joséphine dans la cathédrale Notre-Dame de Paris, le 2 décembre 1804) est un tableau peint entre 1805 et 1807 par Jacques-Louis David, peintre officiel de Napoléon Ier, qui représente une des cérémonies du couronnement. Imposante par ses dimensions, presque dix mètres sur plus de six, la toile de David est conservée au Louvre. Une réplique quasiment identique commencée en 1808 par David et terminée lors de l'exil du peintre à Bruxelles est accrochée au musée du château de Versailles dans la salle du Sacre. Le couronnement et le sacre ont eu lieu à Notre-Dame de Paris.", "The religious ceremony of the coronation, officiated by Pope Pius VII, followed by the coronation, took place on Sunday, December 2, 1804, at Notre-Dame de Paris. It lasted nearly five hours and the painter Jacques-Louis David painted two pictures of it: the Coronation of Napoleon and the Distribution of the Eagles. The Rite of Napoleon (full title Rite of Emperor Napoleon I and Coronation of Empress Josephine in the Cathedral of Notre-Dame de Paris, December 2, 1804) is a picture painted between 1805 and 1807 by Jacques-Louis David, official painter of Napoleon I, which represents one of the coronation ceremonies. Imposing by its dimensions, almost ten meters by more than six, the painting of David is preserved in the Louvre. An almost identical replica, begun in 1808 by David and completed during the painter's exile in Brussels, hangs in the Coronation Room of the Château de Versailles. The coronation and the coronation took place at Notre-Dame de Paris.");

/* caroussel 3, actualité */
$notredame_sous_titre_actualite = array("Actualité", "News");

/* element 1 */
$notredame_carousel3_card_title1 = array("Les incendies de Notre Dame", "The fires of Notre Dame");
$notredame_carousel3_card_text1 = array("L’incendie de Notre-Dame de Paris est un incendie majeur survenu à la cathédrale Notre-Dame de Paris, les 15 et 16 avril 2019, pendant près de 15 heures.", "The Notre Dame de Paris fire was a major fire at the Notre Dame Cathedral in Paris on April 15 and 16, 2019, for nearly 15 hours.");
$notredame_carousel3_colapse_card_text1 = array("Le sinistre se déclare en fin d'après midi à l'intérieur de sa charpente et prend rapidement une grande ampleur. Les flammes détruisent intégralement sa flèche, les toitures de la nef et du transept ainsi que sa charpente. En s'effondrant, la flèche provoque l'écroulement de la voûte de la croisée du transept, d'une partie de celle du bras nord et de celle d\'une travée de la nef. L\'intervention de centaines de pompiers, jusqu\'au lever du jour, permet de sauver la structure globale de l\'édifice et d\'épargner les deux tours, ainsi que la façade occidentale, le trésor et l\'essentiel des œuvres d\'art de la cathédrale. Il s\'agit du plus important sinistre subi par la cathédrale depuis sa construction. L'incendie entraîne une très forte émotion, tant en France que dans le reste du monde, ainsi qu'une importante couverture médiatique. Le président de la République, Emmanuel Macron, annonce immédiatement vouloir reconstruire la cathédrale dans un délai de cinq ans. Après des débats sur la construction d'un édifice plus moderne à l'ancien emplacement de la flèche, il est finalement décidé de la reconstruire à l\'identique.", "The fire broke out at the end of the afternoon inside its framework and quickly took on a large scale. The flames completely destroyed the spire, the roofs of the nave and transept as well as the roof structure. As the spire collapsed, the vault of the transept crossing, part of the north arm and a bay of the nave collapsed. The intervention of hundreds of firefighters, until daybreak, saved the overall structure of the building and spared the two towers, as well as the western facade, the treasure and most of the works of art of the cathedral. This was the most important fire suffered by the cathedral since its construction. The fire caused great emotion in France and around the world, as well as extensive media coverage. The President of the Republic, Emmanuel Macron, immediately announced his intention to rebuild the cathedral within five years. After debates on the construction of a more modern building on the former site of the spire, it was finally decided to rebuild it identically.");
$notredame_carousel3_button = array("Faire un don", "Make a donation");
/* element 2 */
$notredame_carousel3_card_title2 = array("Comment visiter Notre Dame ?", "How to visit Notre Dame?");
$notredame_carousel3_card_text2 = array("Aujourd'hui la reconstruction est toukours en cour, et une réouverture complète n'est pas à prévoir avant 2024, mais l'on peut encore visiter le monument grace à un méthodes inédite, la réalité virtuel.", "Today the reconstruction is still in progress, and a complete reopening is not expected before 2024, but we can still visit the monument thanks to a new method, virtual reality.");
$notredame_carousel3_colapse_card_text2 = array("Visite immersive proposer sous le parvis de Notre Dame et dans la Défence, elle vous fait voir la cathédrale sous différent angle et à différentes époques, vous permettant ed marcher à l'intérieur comme si vous y étiez. Disposible à l'origine jusqu'au 14 avril, elle est pour l'instant maintenue jusqu'au 4 septembre 2022, c'est une expérience à ne pas manquer qui vous permet de traverser les âges et de découvrir le passé avec les technologies du présent, en attendant de pourvoir remettre un pied dans la cathédrâle dans un future proche.", "An immersive visit proposed under the square of Notre Dame and in the Defense, it makes you see the cathedral from different angles and at different times, allowing you to walk inside as if you were there. Originally available until  April 14th, it is maintained until the 4th september 2022, this is an experience not to be missed, allowing you to cross the ages and discover the past with the technologies of the present, while waiting to be able to step into the cathedral again in the near future.");
$notredame_carousel3_lien_text2 = array("Site officiel de éternelle notre dame", "Official website of eternal notre dame");

$notredame_film= array("Un film à aller regarder...","A film that deserves to be seen ......");


/* PAGE Avisiter.php */
$Avisiter_title = $nav_discover_tovisit;
$Avisiter_description = array("L'Île de la Cité, outre le fait que ce patrimoine française regorge de monuments iconiques, on peut y trouver beaucoup d'<b style='color: #ea5c0d;'>emplacements cachés et magnifiques</b>.","The Ile de la Cité, besides the fact that this French heritage is full of iconic monuments, has <b style='color: #ea5c0d;'>many hidden and beautiful places</b>.","The Île de la Cité ، إلى جانب حقيقة أن هذا التراث الفرنسي مليء بالآثار الشهيرة ، يمكنك العثور على الكثير من <b style = 'color: # ea5c0d؛'> المواقع المخفية والرائعة </ b>.","Île de la Cité，除了這個法國遺產遍布標誌性古蹟之外，您還可以找到許多<b style='color: #ea5c0d;'>隱藏而壯麗的地點</b>。");

$Avisiter_marchefleurs_time = array("Du lundi au Samedi, de 8h00 à 19h30","From Monday to Saturday, from 8h00 to 19h30","من الاثنين إلى السبت ، من 8:00 صباحًا إلى 7:30 مساءً","週一至週六，上午 8:00 至晚上 7:30");
$Avisiter_marchefleurs_phrase = array("Respirez les roses, les tulipes et beaucoup plus d'espèces florales au Marché aux fleurs au bord de quai.","Breathe in the roses, tulips and many more floral species at the Wharfside Flower Market.","استنشق الورود والزنبق والعديد من أنواع الأزهار الأخرى في سوق كوايسايد للزهور.","在碼頭區花卉市場呼吸玫瑰、鬱金香和更多花卉品種。");

$Avisiter_crypte_lieu = array("En-dessous de la Cathédrale Notre Dame","Below the Notre Dame Cathedral","أسفل كاتدرائية نوتردام","巴黎圣母院下方");
$Avisiter_crypte_time = array("Du Mardi au Dimanche, de 10h à 18h","Tuesday to Sunday, from 10am to 6pm","من الثلاثاء إلى الأحد ، من الساعة 10 صباحًا حتى الساعة 6 مساءً","週二至週日，上午 10 點至下午 6 6 點。");
$Avisiter_crypte_phrase = array("Visitez la plus importante crypte archéologique d’Europe et offre une vision unique de l’évolution urbaine et architecturale de l’île de la Cité.","Visit the most important archaeological crypt in Europe and offers a unique vision of the urban and architectural evolution of the Ile de la Cité.","قم بزيارة أهم سرداب أثري في أوروبا وقدم رؤية فريدة للتطور الحضري والمعماري في إيل دو لا سيتي.","參觀歐洲最重要的考古地下室，並以獨特的視角了解 Ile de la Cité 的城市和建築演變。");

$Avisiter_Square_time = array("Pas d'horaires","No schedule","لا ساعات","沒有時間表");
$Avisiter_Square_phrase = array("Le square offre une faune et une flore impressionnante pour un parc se trouvant au centre de la capitale. Il donne sur une vue magnifique de la Seine, du Musée du Louvre et de l'Hôtel de la Monnaie.","The square offers an impressive flora and fauna for a park located in the center of the capital. It offers a magnificent view of the Seine, the Louvre Museum and the Hôtel de la Monnaie.","توفر الساحة نباتات وحيوانات رائعة لحديقة تقع في وسط العاصمة. وتطل على منظر رائع لنهر السين ومتحف اللوفر وفندق دي لا موناي","廣場為位於首都中心的公園提供了令人印象深刻的動植物群。 它俯瞰著塞納河、盧浮宮和 Hôtel de la Monnaie 的壯麗景色。");

$Avisiter_maison_title=array("La fausse maison médiévale de l’île de la Cité","The fake medieval house on the Ile de la Cité","منزل القرون الوسطى المزيف في إيل دو لا سيتي","Ile de la Cité 上的假中世紀房屋");
$Avisiter_maison_time = array("Pas d'horaires","No schedule","لا ساعات","沒有時間表");
$Avisiter_maison_phrase = array("Une maison du millieu du XXe s ressemblant aux maison de l'époque de la construction de la cathédrale.","A house of the middle of the XXth century resembling the houses of the time of the construction of the cathedral.","منزل من منتصف القرن العشرين يشبه المنازل من وقت بناء الكاتدرائية.","一座 20 世紀中葉的房屋，與建造大教堂時的房屋相似。");


/* ========== Palais de justice ==================*/

$palais_description = array("Le <b style=\"color: #ea5c0d;\">Palais de justice</b> est le monument qui prend en compte la plus grande partie de l'île, sa superficie correspond à 1 cinquème de l'île, et comprend plusieurs batiments tous plus impressionnant les uns que les autres.","The <b style=\"color: #ea5c0d;\">Judicial Palace</b> is the monument that takes up the largest part of the island, its area corresponds to 1 fifth of the island, and includes several buildings all more impressive than each other."); 

/* caroussel 1 histoire */

$palais_histoire = array("Histoire", "Hystory");

/* element 1 */

$palais_carousel1_card_title1 = array("Centre du pouvoir royal et de la justice en France durant plus de 8 siècles.", "Center of royal power and justice in France for over 8 centuries.");
$palais_carousel1_card_text1 = array("Robert II le Pieux fut le premier souverain au alentour du Xe siècle à entreprendre des travaux conséquents mais ce n’est qu’à partir du XIIIe siècle que les rois commençaient à établir leur sièges au Palais.", "Robert II the Pious was the first sovereign around the Xth century to undertake consequent works but it is only from the XIIIth century that the kings began to establish their seats in the Palace.");
$palais_carousel1_colapse_card_text1 = array("N'ayant aucun domicile vraiment fixe parmis les nombreux chateaux, palais et autre lieux de résidence auquel les rois avait accès ,le Palais de justice est donc la première \"demeure royal\", occupé par la ligné des Mérovingien set des Capétiens comme le grand Philippe Auguste (1180-1226). Elle aura servit de lieu de vie pour les rois pendant un peu moins de 3 siècles. Jusqu'à ce que Charles V (1338-1380). le délaisse comme résidence au profit du Louvre, de l’Hôtel Saint-Pol et du château de Vincennes. Il devient le siège de la justice souveraine du Parlement de Paris et de l’administration du royaume.", "Having no real fixed abode among the many castles, palaces and other places of residence to which the kings had access, the Palace of Justice is therefore the first \"royal residence\", occupied by the lineage of the Merovingians and the Capetians as the great Philip Augustus (1180-1226). It will have served as a place of life for the kings for a little less than 3 centuries. Until Charles V (1338-1380) abandoned it as a residence in favor of the Louvre, the Hôtel Saint-Pol and the Château de Vincennes. It becomes the seat of the sovereign justice of the Parliament of Paris and of the administration of the kingdom.");

/* element 2 */

$palais_carousel1_card_title2 = array("Une construction en plusieurs étapes", "A construction in several step");
$palais_carousel1_card_text2 = array("Chaque roi a apporté sa touche personnel à la zone, rendant l'édifice de plus en plus grand, polyvalent et complet.", "Each king has brought his personal touch to the area, making the building increasingly large, versatile and complete.");
$palais_carousel1_colapse_card_text2 = array("L'un des changement majeur à été effectuer par Saint Louis (1226-1270) qui érigea la Sainte Chapelle ainsi que la galerie mercière, la salle sur l’eau et la tour Bonbec. Philippe le Bel (1285-1314) remodèle et agrandit le palais pour y rassembler les institutions judiciaires et financières du royaume. Centralisant le plus en plus la gouvernance et le pouvoir au Palais. Dès le XVe siècle, la cour souveraine est dotée d’une prison : la Conciergerie. Dont il reste encore quelque vestige.", "One of the major changes was made by Saint Louis (1226-1270) who erected the Sainte Chapelle as well as the Mercier Gallery, the Water Room and the Bonbec Tower. Philippe le Bel (1285-1314) remodeled and enlarged the palace to bring together the judicial and financial and financial institutions of the kingdom. Centralizing more and more the governance and the power in the Palace. As early as the 15th century, the sovereign court was provided with a prison: the Conciergerie. Of which there is still some vestige.");

/* element 3 */

$palais_carousel1_card_title3 = array("Un site qui aura subit beaucoup d'épreuve au cour de son existence.", "A site which will have undergone many tests during its existence.");
$palais_carousel1_card_text3 = array("Même si la royauté avait délaisser la zone comme lieux de résidence, le Palais de justice et ces environ était une cible de choix pour les pyromans, et toute les rénovation et reconstruction qui ont eu lieux ne se sont pas faite sans mal.", "Even though the royalty had abandoned the area as a place of residence, the courthouse and its surroundings were a prime target for arsonists, and all the renovations and rebuilding that have taken place have not been easy.");
$palais_carousel1_colapse_card_text3 = array("<p class = \"card-text\"> En effet plusieurs institution de justice avaient encore maintenue leur activité après le départ des monarques, notament le Parlement de Paris, la Chambre des comptes ou encore la Chancellerie. Ces instances furent des cibles privilégié par ceux qui voulait atteindre le gouvernement de l'époque, et plusieurs incendis, dont certains non-accidentel, ont été déclarer. <br> Parmis ces incendit on peut trouver : </p> <ul> <li>1601 : incendit de la salle des pas perdus, qui servait de grande salle d'attente</li> <li>1618 : la Grande Salle fut ravagé par un incendit</li> <li>1630 : la flèche de la Sainte Chapelle connu le même sort</li> <li>1737 : la Cour de s compte est égalment incendié</li> <li>1776 : un incendit a eu lieu entre la Consiergerie et la Sainte Chapelle, <br> probablement le plus grand incendit parmis tous ceux citer</li> </ul>", "<p class = \"card-text\"> En effet plusieurs institution de justice avaient encore maintenue leur activité après le départ des monarques, notament le Parlement de Paris, la Chambre des comptes ou encore la Chancellerie. Ces instances furent des cibles privilégié par ceux qui voulait atteindre le gouvernement de l'époque, et plusieurs incendis, dont certains non-accidentel, ont été déclarer. <br> Parmis ces incendit on peut trouver : </p> <ul> <li>1601 : incendit de la salle des pas perdus, qui servait de grande salle d'attente</li> <li>1618 : la Grande Salle fut ravagé par un incendit</li> <li>1630 : la flèche de la Sainte Chapelle connu le même sort</li> <li>1737 : la Cour de s compte est égalment incendié</li> <li>1776 : un incendit a eu lieu entre la Consiergerie et la Sainte Chapelle, <br> probablement le plus grand incendit parmis tous ceux citer</li> </ul>");


/* element 4 */

$palais_carousel1_card_title4 = array("Changement de décor pour le Palais de justice", "Change of scenery for the courthouse");
$palais_carousel1_card_text4 = array("A partir de l'époque de la Restauration, le palais passe d'une dimension politique à une dimension judiciaire.", "From the time of the Restoration, the palace moves from a political to a judicial dimension.");
$palais_carousel1_colapse_card_text4 = array("C'est lors du retour de la monarchie en France que de nouveaux changement au Palais ont eu lieu, notament par la création de plusieurs nouveaux postes et l'agrandissement du Palais pour pouvoir supporter le nombre croissant d'affire à régler. Ces travaux ont été lancé pour de bon par la Monarchie de Juillet, juste après la l'époque de la Restauration. Le chantier prendra énormément de retard et d'arrêt temporaire, du à plusieurs incendit (en particulier le multi-incendit de 1871), aux guerres et refonte des plans. La consiergerie ne sera restauré qu'en 1883, et la plupart des batiments auront soit été abondonné, soit restauré les années qui suivent. Depuis 1914, nous n'avons plus eu de restaurations à grandes échelles comme celles-ci.", "With the return of the monarchy to France, new changes were made to the Palace, including the creation of several new posts and the enlargement of the Palace to accommodate the growing number of cases. These works were launched in earnest by the July Monarchy, just after the Restoration period. The building site will take a lot of delay and temporary stop, due to several fires (in particular the multi-incendit of 1871), to the wars and redesign of the plans. The consiergerie will be restored only in 1883, and most of the buildings will have either been abandoned or restored in the following years. Since 1914, France has had no more large-scale restorations like these.");

/* element 5 */

$palais_carousel1_card_title5 = array("Le Palais de justice au début du XXie siècle", "The courthouse at the beginning of the 20th century");
$palais_carousel1_card_text5 = array("En 2018, une nouvelle page de l’histoire du Palais de justice s’est tournée, avec le déménagement du Tribunal de grande instance sur le nouveau site des Batignolles, dans un palais neuf, inauguré pour l’occasion.", "In 2018, a new page in the history of the Palais de Justice was turned, with the relocation of the Tribunal de Grande Instance to the new Batignolles site, in a new palace, inaugurated for the occasion.");
$palais_carousel1_colapse_card_text5 = array("Mais de récent éléments ont forcer à réouvrir temporairement plusieurs salle pour des cours de cassation et d'appel. Des études et des travaux sont mis en oeuvre pour la restauration de la zone. Les services et les batiment sont peu à peu réouvert de 2018 à 2021. Ces réaménagement ont pour but de mettre aux normes les batiments et d'accentuer l'aspect du patrimoine et de 'histoire par rapport à la justice.", "But recent elements have forced the temporary reopening of several rooms for courts of cassation and appeal. Studies and works are implemented for the restoration of the area. The services and buildings are gradually reopened from 2018 to 2021. The aim of these renovations is to bring the buildings up to standard and to emphasize the aspect of heritage and history in relation to justice.");

/* caroussel 2 procès */

$palais_proces = array("Procès iconiques", "Iconic trials");

/* element 1 */
$palais_carousel2_card_title1 = array("Plusieurs procès iconique ont eu lieu ici.", "Several iconic trials have taken place here.");
$palais_carousel2_card_text1 = array("Le Palais de Justice, une fois que les rois l'ont désertés, à servie de tribunal, l'un des plus imposant de France.", "The Palace of Justice, once deserted by the kings, served as a court, one of the most imposing in France.");
$palais_carousel2_colapse_card_text1 = array("Parmi ces incendit on peut trouver : <ul> <li>1793-1795 : Acueille le tribunale révolutionnaire</li> <li>27 Juillet 1794 : Robespierre fut arrêter par le tribunale, puis condamné à mort le lendemin</li><li>1857 : Gustave Flaubert est jugé pour son écrit \"Madame Bovary\", et Charles Baudelaire pour \"Les Fleurs du mal\".</li> <li>1945 : le maréchal Pétain, puis le chef du gouvernement Pierre Laval sont condamnés</li> <li>8 septembre 2021 : Le procès des attentats du 13 novembre 2015</li> </ul>", "Among these incendiaries we can find: <ul> <li>1793-1795 : hosts the revolutionary court</li> <li>1857: Gustave Flaubert is tried for his writing \"Madame Bovary\", and Charles Baudelaire for \"Les Fleurs du mal\".</li> <li>1945: Marshal Pétain, then the head of government Pierre Laval are convicted</li> <li>September 8, 2021: The trial of the attacks of November 13, 2015.</li>");

/* element 2 */

$palais_carousel2_card_title2 = array("Le tribunale révolutionnaire", "The revolutionary tribune");
$palais_carousel2_card_text2 = array("Robespierre est devenue l'un des chefs du nouveau gouvernement après l'abolition de la monarchie en France. Mais lors du règne de terreur, il devint tyranique,", "Robespierre became one of the leaders of the new government after the abolition of the monarchy in France. But during the reign of terror, he became tyrannical,");
$palais_carousel2_colapse_card_text2 = array("Afin de remmettre en ordre la ville et condamné les personnes contre le nouveaux gouvernement, elle à été mise en place du 10 mars 1793 jusqu'au 31 mai 1795. Ce tribunale aura grandement contribuer au règne de la terreur, avec 1500 personnes executer durant cette période, et 2 585 condamnation à mort durant son activité. Appelé à l'époque \"Tribunale criminel extraordinaire\", il s'est installer dans la Grand-chambre du parlement de Paris rebaptisée \"Salle de la Liberté\". Les séances sont retranscrit dans le bulletin du tribunal révolutionnaire. Il disposait de règles spéciales en plus de celles mises en place à chaque tribunal.", "In order to put the city back in order and condemn people against the new government, it was set up from March 10, 1793 until May 31, 1795. This tribunal contributed greatly to the reign of terror, with 1500 people executed during this period, and 2585 death sentences during its activity.Called at the time \"Tribunale criminel extraordinaire\" (Extraordinary Criminal Court), it was installed in the Grand Chamber of the Parliament of Paris, renamed \"Salle de la Liberté\" (Hall of Liberty). The sessions were transcribed in the bulletin of the revolutionary court. It had special rules in addition to those established for each court.");

/* element 3 */

$palais_carousel2_card_title3 = array("Le procès de Robespierre", "The trial of Robespierre");
$palais_carousel2_card_text3 = array("Robespierre est devenue l'un des chefs du nouveau gouvernement après l'abolition de la monarchie en France. Mais lors du règne de terreur, il devint tyranique,", "Robespierre became one of the leaders of the new government after the abolition of the monarchy in France. But during the reign of terror, he became tyrannical,");
$palais_carousel2_colapse_card_text3 = array("Le jugement de Robespierre débuta le 26 juillet 1794, où il aura pu se défendre contre les accusation qu'on lui portait, à savoir sa responsabilité avec le règne de terreur, dont il en rejette la faute sur ces adversaire politique, et l'acusation de tyranie, qu'il proteste. Alors qu'il est sencé être en train de se défendre, Robespierrre propose une réorganisation partiel du gouvernement, en suprimant le Comité de salut public, chargé de gérer la défense extérieur et intérieur lors des situation urgente, cet objectif ont donné à ses membre de plus en plsu de pouvoir, devenant un véritable gouvernement dictatorial et participant au règne de terreur. Il dispose du soutient des Jacobins (ou du moins de la plupart), ceux qui ne l'approuve pas sont expulsé dd l'un des club les plus influant de France à l'époque. Robespierre est égalment soutenue par l'état major de la garde nationnal ainsi qu'une bonne partie de la Commune, une branche du gouvernement axer sur Paris et ses habitants. Mais la plupart des hommes qui composait le gouvernement et ce tribunale était soit opposé à Robespierre, soit apeuré par le règne de terreur qui était en cour, et dans la prommesse de l'a fin de celui-ci par les principaux opposant, ils s'allient à eux afin de pouvoir organiser une obstruction telle que ni Robespierre ni ses partisans ne puissent intervenir. Le procès au jour suivant fut beaucoup plus chaotique, empêchant Robespierre de se défendre, les seuls voies qui ont réussie à ce faire entendre sont celles qui ont proposé un décret d’arrestation contre Robespierre, accepter à la hâte par vote aux voix (ce qui dans la cacophonie générale n'était pas très pertinant).et vote une motion d’insurrection, fait sonner le tocsin pour appeler les patriotes aux armes et interdit aux concierges des prisons d’accepter de nouveaux détenus. Des hommes se masse pour tel ou tel camp, plusieurs personne qui ont été arrêter sont libéré, mais pas d'affrontement global. L'hotel de Ville qui acueillait plusieurs partisant phare de Robespierre est prise en pleine nuit, la plupart d'entre eux meurt ou son blesser dans leur tentative de se défendre. Robespierre décide de réagir trop tardivement, et est arrêter dans la nuit avec ses partisans, pui executer le lendemin avec 21 d'entre eux. Le procès et l'execution de Robespierre aura fait couler beaucoup d'encre et de sang, mais cela aura été une des étapes majeur de la fin du règne de terreur qui à eu lieu en France.", "Robespierre's trial began on July 26, 1794, when he was able to defend himself against the accusations made against him, namely his responsibility for the reign of terror, which he blamed on his political opponents, and the accusation of tyranny, which he protested. While he is supposed to be defending himself, Robespierrre proposes a partial reorganization of the government, abolishing the Committee of Public Safety, in charge of managing the external and internal defense in urgent situations, which gave its members more and more power, becoming a real dictatorial government and participating in the reign of terror. He had the support of the Jacobins (or at least most of them), those who did not approve of him were expelled from one of the most influential clubs in France at that time. Robespierre was also supported by the general staff of the National Guard and much of the Commune, a branch of the government focused on Paris and its inhabitants. But most of the men who made up the government and this tribune were either opposed to Robespierre or frightened by the reign of terror that was in progress, and in anticipation of the end of it by the principal opponents, they allied themselves with them in order to organize an obstruction such that neither Robespierre nor his supporters could intervene. The next day's trial was much more chaotic, preventing Robespierre from defending himself, the only voices that managed to be heard were those that proposed a decree of arrest against Robespierre, accepted in haste by vote (which in the general cacophony was not very relevant). And votes a motion of insurrection, rings the tocsin to call the patriots to arms and forbids the prison wardens to accept new prisoners. Men massed for this or that camp, several people who had been arrested were released, but no global confrontation. The Hotel de Ville, which housed many of Robespierre's leading supporters, was taken in the middle of the night, and most of them died or were wounded in their attempt to defend themselves.Robespierre decides to react too late, and is arrested in the night with his supporters, then executed the next day with 21 of them.The trial and execution of Robespierre will have caused a lot of ink and bloodshed, but it will have been one of the major steps in the end of the reign of terror that took place in France.");
$palais_carousel2_card_quote3 = array("\"Je suis fait pour combattre le crime, non pour le gouverner. Le temps n'est point arrivé où les hommes de biens peuvent servir impunément la patrie ; les défenseurs de la liberté ne seront que des proscrits tant que la horde des fripons dominera\"", "\"I am made to fight crime, not to govern it. The time has not arrived when good men can serve their country with impunity; the defenders of liberty will only be outcasts as long as the horde of rascals dominates\"");
$palais_carousel2_card_footer3 = array("Fin du discours de Robespierre lors de son procès du 26 juillet", "End of Robespierre's speech during his trial on July 26");

/* element 4 */

$palais_carousel2_card_title4 = array("L'arestation et l'execution de Robespierre", "The arrest and execution of Robespierre");
$palais_carousel2_card_text4 = array("En juin 1857 l’auteur des Fleurs du mal est condamné pour «délit d’outrage à la morale publique et aux bonnes mœurs»", "In June 1857 the author of the Flowers of Evil was convicted of «outrage to public morals and decency»");
$palais_carousel2_colapse_card_text4 = array("Un vote une motion d’insurrection, fait sonner le tocsin pour appeler les patriotes aux armes et interdit aux concierges des prisons d’accepter de nouveaux détenus. Des hommes se masse pour tel ou tel camp, plusieurs personne qui ont été arrêter sont libéré, mais pas d'affrontement global. L'hotel de Ville qui acueillait plusieurs partisant phare de Robespierre est prise en pleine nuit, la plupart d'entre eux meurt ou son blesser dans leur tentative de se défendre. Robespierre décide de réagir trop tardivement, et est arrêter dans la nuit avec ses partisans, pui executer le lendemin avec 21 d'entre eux.  Le procès et l'execution de Robespierre aura fait couler beaucoup d'encre et de sang, mais cela aura été une des étapes majeur de la fin du règne de terreur qui à eu lieu en France.", "A vote of insurrection was held, the tocsin was sounded to call the patriots to arms and the prison wardens were forbidden to accept new prisoners. Men massed for one side or another, several people who had been arrested were released, but there was no overall confrontation. The Hotel de Ville, which housed many of Robespierre's leading supporters, was taken in the middle of the night, and most of them died or were wounded in their attempt to defend themselves. Robespierre decides to react too late, and is arrested in the night with his supporters, then executed the next day with 21 of them.  The trial and execution of Robespierre will have caused a lot of ink and bloodshed, but it will have been one of the major steps in the end of the reign of terror that took place in France.");

/* element 5 */

$palais_carousel2_card_title5 = array("1857 : Charles Baudelaire jugé pour son écrit \"Les fleurs du mal\"", "1857 : Charles Baudelaire judged for his writing \"Les fleurs du mal\"");
$palais_carousel2_card_text5 = array("Le 23 juillet 1945, au Palais de justice de Paris, s'ouvre, devant la Haute Cour, le procès de Philippe Pétain, chef de l'Etat français pendant l'Occupation allemande.", "On July 23, 1945, at the Palais de Justice in Paris, the trial of Philippe Pétain, head of the French state during the German occupation, opened before the High Court.");
$palais_carousel2_colapse_card_text5 = array("Rappelons d'abord le contexte: nous sommes en plein Second Empire sous le régime autoritaire de Napoléon III. Les auteurs y sont régulièrement victimes de la censure. L’écrivain, Gustave Flaubert, au début de l’année 1857, connaît un retentissant procès littéraire pour son Madame Bovary. En ce qui concerne \"Les Fleurs du Mal\" de Baudelaire, le 16 juillet 1857, la justice saisit tout les exemplaire produit et Baudelaire et son associé Poulet-Malassis sont poursuivis pour outrage à la moralité. Le livre est jugé trop ignoble, trop sale, trop axer sur le coté putride des sujets évoqués dedans, on doute même de la santé mental de l'auteur. Le 20 août 1857, le procureur impérial Ernest Pinard condamne le livre «pour outrage à la morale publique et aux bonnes mœurs», Baudelaire et son éditeur doivent payer de lourdes amendes. L’ouvrage est mutilé de six pièces: Les Bijoux, Le Léthé, À celle qui est trop gaie, Femmes damnées, Lesbos, et Les métamorphoses du Vampire.", "Let us first recall the context: we are in the middle of the Second Empire under the authoritarian regime of Napoleon III. The authors are regularly victims of the censorship. The writer, Gustave Flaubert, at the beginning of 1857, knows a resounding literary trial for his Madame Bovary. Regarding \"Les Fleurs du Mal\" of Baudelaire, on July 16, 1857, the justice seizes all the produced copy and Baudelaire and his associate Poulet-Malassis are pursued for outrage to morality. The book is judged too ignoble, too dirty, too much centered on the putrid side of the subjects evoked in it, one even doubts the mental health of the author. On August 20, 1857, the imperial prosecutor Ernest Pinard condemns the book for «outrage to public morals and good manners», Baudelaire and his publisher must pay heavy fines. The book is mutilated of six pieces: Les Bijoux, Le Léthé, À celle qui est trop gaie, Femmes damnées, Lesbos, and Les métamorphoses du Vampire.");

/* element 6 */

$palais_carousel2_card_title6 = array("Le procès du Maréchale Pétain.", "The trial of Marshal Pétain.");
$palais_carousel2_card_text6 = array("Dès que l’arrestation de Robespierre est connue vers 17 heures, la Commune convoque son conseil général à l’hôtel de ville.", "As soon as Robespierre's arrest was known around 5 p.m., the Commune convened its general council at the town hall.");
$palais_carousel2_colapse_card_text6 = array("Il a été accusé de complicité avec le gouvernement allemand pendant la 2ème guerre mondial, au détrimant de la sureté de l'État français.  Après s'être déplacé à Sigmaringen en Allemagne puis en Suisse, il refuse l'asile politique que lui propose ce pays pour aller afronté un jugement français. Le GPRF (gouvernement provisoire de la République française), issu de la Résistance, et supervisé par le général de Gaulle, a réouvert une Haute Cour au Palais de justice, afin de pouvoir juger l'inculpé le 23 juillet 1945.  Se défendant à l'aide de ses trois avocats et avec comme argument son dévouement pour la France, ses hauts faits à Verdun, sa légitimité au plein pouvoir qu'il dit avoir acquis de manière complétement légale, et sa volonté d'utiliser ces pouvoirs pour \"protéger le peuple français\".  Pétain est poursuivi pour crime contre la sûreté intérieure et intelligence avec l'ennemi. L'accusation lui reproche sa politique de collaboration qui a \"contribué au fonctionnement de la machine de guerre allemande\", en particulier avec la mise en place de service du travail obligatoire, qui fera de la France l'un des principale fournisseur en homme au gouvernement nazi pour la main d'oeuvre. La quasi-totalité des témoins appelés à la barre exprime la résignance du Maréchal lors de l'occupation, et le peu de résistance qu'il a démontrer au demande des Allemands. En raison de son grand âge, sa peine est commuée en emprisonnement à perpétuité. Il n'est pas prouvé que l'accusé ait comploté contre le régime avant 40. Mais il a profité de son pouvoir pour l'abattre, estime la Cour. Le 23 juillet 1951, Philippe Pétain meurt à Port-Joinville.", "He was accused of complicity with the German government during World War II, to the detriment of French state security.  After moving to Sigmaringen in Germany and then to Switzerland, he refused the political asylum offered to him by that country to face a French trial. The GPRF (Provisional Government of the French Republic), which had emerged from the Resistance and was supervised by General de Gaulle, reopened a High Court at the Palais de Justice, so that the accused could be tried on July 23, 1945.  Defending himself with the help of his three lawyers and with the argument of his devotion to France, his achievements at Verdun, his legitimacy to the full power he said he had acquired in a completely legal way, and his will to use these powers to \"protect the French people\".  Pétain was prosecuted for crimes against internal security and intelligence with the enemy. The prosecution reproaches him for his policy of collaboration which \"contributed to the functioning of the German war machine\", in particular with the establishment of the compulsory labor service, which made France one of the main suppliers of manpower to the Nazi government. Almost all of the witnesses called to the stand expressed the resignation of the Marshal during the occupation, and the little resistance he showed to the Germans' demands. Because of his advanced age, his sentence was commuted to life imprisonment. It was not proven that the accused had plotted against the regime before 1940. But he took advantage of his power to bring it down, according to the court. On July 23, 1951, Philippe Pétain died in Port-Joinville.");
$palais_carousel2_card_quote6 = array("\"Je ne ferai pas d'autre déclaration. Je ne répondrai à aucune question\". \"Lorsque j'ai demandé l'armistice, d'accord avec nos chefs militaires, j'ai accompli un acte nécessaire et sauveur\", \"Je suis demeuré à la tête d'un pays sous l'Occupation. Voudra-t-on comprendre la difficulté de gouverner dans de telles conditions ? Chaque jour, un poignard sur la gorge. J'ai lutté contre les exigences de l'ennemi. L'histoire dira tout ce que je vous ai évité\"", "\"I will not make any further statements. I will not answer any questions\". \"When I asked for the armistice, in agreement with our military leaders, I accomplished a necessary and saving act\", \"I remained at the head of a country under occupation. Will anyone understand the difficulty of governing under such conditions? Every day, a dagger at the throat. I fought against the demands of the enemy. History will tell all that I avoided \"");
$palais_carousel2_card_footer6 = array("Citations du Maréchal lors de son procès", "Quotes from the Marshal during his trial");


/* caroussel 3 actualité */

$palais_proces = array("Actualité", "News");

/* element 1 */

$palais_carousel3_card_title5 = array("L'état procès du 8 septembre 2021", "The state trial of September 8, 2021");
$palais_carousel3_card_text5 = array("Actuellement le procès suit son cour malgré plusieurs retard du en grande partie au covid", "Currently the trial follows its course despite several delays due in large part to the covid.");
$palais_carousel3_colapse_card_text5 = array("Plusieurs témoin on déjà pu être entendue ainsi que les accusées sur plusieurs sujet comme le déroulement de l'attentat, son execution, leurs implication dans tous ça, leurs objectifs, leurs passé etc... Malgré une grande fermeture sur lui-même au début de son arrestation et plusieurs mois après, Salah Abdeslam, le principale accusé, s'est récement montrer plus ouvert et a accepter une analyse psychiatrique, permettant de faire avancer le jugement, qui devrait durer les 9 mois initialement prévue pour celui-ci.", "Several witnesses have already been heard as well as the defendants on several subjects such as the course of the attack, its execution, their involvement in all this, their objectives, their past etc... In spite of a great closure on himself at the beginning of his arrest and several months later, Salah Abdeslam, the main accused, has recently shown himself to be more open and has accepted a psychiatric analysis, allowing the trial to progress, which should last the 9 months initially planned for it.");

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


/* ============= Les ponts ============ */
$ponts_title = array("L'île de la Cité est <b style='color: #ea5c0d;'>entourée de 9 ponts</b> et parmi eux, certains ont une histoire magnifique.","The Ile de la Cité is <b style='color: #ea5c0d;'>surrounded by 9 bridges</b> and some of them have a wonderful history.","Ile de la Cité هي <b style = 'color: #ea5c0d'>؛' محاطة بتسعة جسور </b> ومن بينها ، بعضها يتمتع بتاريخ عريق.","Ile de la Cité <b style='color: #ea5c0d;'>被 9 座橋樑環繞</b>，其中一些擁有美好的歷史。");

$ponts_carroussel1_title = array("La naissance du Pont-neuf","The birth of the Pont-neuf","ولادة بونت نيوف","新橋的誕生");
$ponts_carroussel1_text = array("Le Pont-Neuf est sans doute le pont le plus célèbre de Paris, mais également le plus vieux, et pour cause : il voit le jour entre la fin du XVIe siècle et le début du XVIIe siècle.","The Pont-Neuf is undoubtedly the most famous bridge in Paris, but also the oldest, and for good reason: it was built between the end of the 16th century and the beginning of the 17th century.","جسر Pont-Neuf هو بلا شك أشهر جسر في باريس ، ولكنه أيضًا الأقدم ، ولسبب وجيه: تم بناؤه بين نهاية القرن السادس عشر وبداية القرن السابع عشر.","Pont-Neuf 無疑是巴黎最著名的橋樑，也是最古老的橋樑，這是有充分理由的：它建於 16 世紀末至 17 世紀初。");
$ponts_carroussel1_more = array("Plus ancien pont de Paris, troisième pont le plus long (238 mètres), premier pont en pierre traversant la Seine, premier pont vide d’habitations et doté de trottoirs… Le Pont Neuf a constitué une véritable innovation pour Paris. Il a d’ailleurs gardé depuis tout ce temps le nom qu’on lui avait initialement attribué au 17ème siècle du fait de ses spécificités. La construction fut décidée en 1577 par le roi Henri III qui désigne une commission chargée d'assurer le bon déroulement des travaux. Un an plus tard, la première pierre du pont est posée par le roi lui-même, en présence de la reine mère Catherine de Médicis et de l’épouse du roi, Louise de Lorraine. Les travaux se prolongeront jusqu'en 1588, sous le règne d'Henri IV, puis cesseront soudainement pendant dix ans à cause des soulèvements populaires qui ont alors lieu à Paris contre le roi. En 1599, la construction reprend enfin pour être achevée en 1607.","Oldest bridge in Paris, third longest bridge (238 meters), first stone bridge crossing the Seine, first bridge empty of dwellings and equipped with sidewalks... The Pont Neuf was a real innovation for Paris. It has d he name that was initially given to it in the 17th century because of its specificities has been kept since all this time.The construction was decided in 1577 by King Henry III, who appointed a commission responsible for ensuring the smooth running of the work. A year later, the first stone of the bridge was laid by the king himself, in the presence of the queen mother Catherine de Medici and the king's wife, Louise de Lorraine. the reign of Henri IV, then will suddenly cease for ten years because of the popular uprisings that then take place in Paris against the king.In 1599, construction finally resumes to be completed in 1607.","أقدم جسر في باريس ، ثالث أطول جسر (238 مترًا) ، أول جسر حجري يعبر نهر السين ، أول جسر خالي من المساكن ومجهز بالأرصفة .... كان Pont Neuf ابتكارًا حقيقيًا لباريس. وقد كان اسمه هو تم منحها في البداية في القرن السابع عشر نظرًا لخصوصياتها التي تم الاحتفاظ بها منذ كل هذا الوقت. قرر المل  لك هنري الثالث البناء في عام 1577 ، الذي عين لجنة مسؤولة عن ضمان حسن سير العمل. وضع الملك نفسه حجر الجسر الأول بحضور الملكة الأم كاثرين دي ميديشي وزوجة الملك لويز دي لورين. ثم سيتوقف عهد هنري الرابع فجأة لمدة عشر سنوات بسبب الانتفاضات الشعبية التي ثم جرت في باريس ضد الملك. في عام 1599 ، استؤنف البناء أخيرًا ليتم الانتهاء  منه في عام 1607. ","巴黎最古老的橋樑、第三長的橋樑（238 米）、第一座橫跨塞納河的石橋、第一座沒有住宅但配備人行道的橋樑……新橋對巴黎來說是一項真正的創新。從那時起 ，由於其特殊性，它一直保留著 17 世紀最初歸屬於它的名稱。 1577 年，亨利三世國王決定建造該建築，他任命了一個委員會負責確保工程的順利進行。一年後，國王親自鋪設了這 座橋的第一塊石頭，當時王太后凱瑟琳·德·美第奇和國王的妻子路易絲·德·洛林在場。這項工作將持續到 1588 年，在亨利四世統治時期，然後由於隨後在巴黎發生的反對國王的民眾 起義而突然停止十年。 1599年，建築終於恢復到1607年完成。");


$ponts_carroussel1_title2 = array("Une architecture extraordinaire","Extraordinary architecture","بنية غير عادية","非凡的建築");
$ponts_carroussel1_text2 = array("Son architecture en pierre magnifique, constituée de 12 arches parées chacune d’un balcon en demi-cercle, nous offre un décor splendide digne d’une carte postale avec l’île de la Cité en fond. ","Its magnificent stone architecture, made up of 12 arches each adorned with a semi-circular balcony, offers us a splendid setting worthy of a postcard with the Ile de la Cité in the background.","هندسته المعمارية الحجرية الرائعة ، المكونة من 12 قوسًا مزيين كل منها بشرفة نصف دائرية ، توفر لنا مكانًا رائعًا يستحق بطاقة بريدية مع Ile de la Cité في الخلفية.","其宏偉的石頭建築由 12 個拱門組成，每個拱門都裝飾有一個半圓圓形的陽台，為我們提供了一個壯麗的環境，堪比明信片，背景是 Ile de la Cité。");
$ponts_carroussel1_more2 = array("Son histoire et son architecture lui ont permis d’être classé Monument historique dès 1889, tandis que son  esthétique a inspiré une foule de peintres et artistes de renom comme Auguste Renoir qui en a fait, en 1872, une oeuvre intitulée « Le Pont Neuf », aujourd’hui visible au National Gallery Of Art de Washington.",'Its history and its architecture have allowed it to be classified as a Historic Monument since 1889, while its aesthetics have inspired a host of renowned painters and artists such as Auguste Renoir who, in 1872, made a work of it entitled "Le Pont Neuf », now visible at the National Gallery Of Art in Washington.','سمح تاريخها وهندستها المعمارية بتصنيفها على أنها نصب تذكاري تاريخي منذ عام 1889 ، في حين أن جمالياتها ألهمت مجموعة من الرسامين والفنانين المشهورين مثل أوغست رينوار الذي صنع في عام 1872 عملاً منه بعنوان" Le Pont Neuf "، مرئي اليوم في المعرض الوطني للفنون في واشنطن.',"自 1889 年以來，它的歷史和 建築使其被列為歷史古蹟，而它的美學啟發了許多著名畫家和藝術家，例如奧古斯特·雷諾阿 (Auguste Renoir)，他於 1872 年創作了一部名為“Le Pont Neuf”的作品. ，現在在華盛頓 國家美術館展出。");

$ponts_carroussel2_title = array("Le pont au change : une ancienne zone de commerce dans Paris","The change bridge: an old shopping area in Paris","جسر التغيير: منطقة تسوق قديمة في باريس","變革之橋：巴黎的舊購物區");
$ponts_carroussel2_text = array("Le change, c’est la référence à l’argent et aux monnaies. Paris était en effet zone de commerce et nombreuses monnaies s’y déferlaient en venant de la Seine. C’est dans ce contexte que les changeurs intervenaient. Ils avaient établis leur banc et boutique sur ce pont.","Changing is the reference to money and currencies. Paris was indeed a trading area and many currencies came flooding in from the Seine. It was in this context that the moneychangers intervened. They had established their bench and shop on this bridge.","التبادل هو المرجع للنقود والعملات. كانت باريس بالفعل منطقة تجارية وجاءت إليها العديد من العملات من نهر السين. وفي هذا السياق تدخل الصرافون. لقد أقاموا مقاعدهم ومتجرهم على هذا الجسر.","外匯是貨幣和貨幣的參考。巴黎確實是一個貿易區，許多貨幣從塞納河 流入那裡。正是在這種情況下，變革者進行了乾預。他們在這座橋上建立了他們的長凳和商店。");


$ponts_autres_ponts = array("Les autres Ponts","Other Bridges","الجسور الأخرى","其他橋樑");

$ponts_carroussel3_text = array("Le pont Saint-Louis, d'une longueur de 67 mètres et d'une largeur de 16 mètres, a été construit en 1970 par les ingénieurs Coste et Long-Depaquit et les ingénieurs Creuzot et Jabouille. Il comporte une travée unique d'une grande sobriété, réservé aux piétons mais peut permettre exceptionnellement le passage des voitures. Il  relie la pointe ouest de l'île Saint-Louis à l'est de l'île de la Cité près du square Jean XXIII et du square de l'île de France .","The Saint-Louis bridge, 67 meters long and 16 meters wide, was built in 1970 by engineers Coste and Long-Depaquit and engineers Creuzot and Jabouille. It has a single span of a great sobriety, reserved for pedestrians but can exceptionally allow cars to pass.It connects the western tip of Île Saint-Louis to the east of Île de la Cité near Square Jean XXIII and Square de l' Ile-de-France .","جسر سانت لويس ، بطول 67 مترًا وعرضه 16 مترًا ، تم بناؤه في عام 1970 من قبل المه هندسين كوست ولونج ديباكويت والمهندسين كروزوت وجبويلي. إنه يمتد على مسافة واحدة من الرصانة الرائعة ، وهو مخصص للمشاة ولكن يمكنه السماح للسيارات بشكل استثنائي يمر فهو يربط الطرف الغربي من إيل سانت لويس بشرق إيل دو لا سيتي بالقرب من ميدان جان XXIII وميدان دو ليل دو فرانس. ","聖路易橋長 67 米，寬 16 米，由工程師 Coste 和 Long-Depaquit 以及工程師 Creuzot 和 Jabouille 於 1970 年建造。它有一個非常清醒的單一跨度，為行人保留，但可以特別允許汽車通過。它將聖路易島的西端連接到西泰島的東部， 靠近讓二十三世廣場和法蘭西廣場。");
$ponts_carroussel3_more = array("Imaginé par les architectes Jabouille et Creuzot puis réalisé par les ingénieurs Long-Depaquit et Coste, ce pont en poutre, tout en acier, est commencé en 1969 et terminé en 1970 sous la maîtrise d'ouvrage de la Ville de Paris1. Depuis 2014, il est interdit à toute circulation motorisée et réservé aux piétons et cyclistes. Il est très fréquenté par les touristes, et des artistes de rue l'animent souvent à la belle saison.","Imagined by the architects Jabouille and Creuzot then carried out by the engineers Long-Depaquit and Coste, this beam bridge, all in steel, was started in 1969 and finished in 1970 under the project management of the City of Paris1. Since 2014 , it is closed to all motorized traffic and reserved for pedestrians and cyclists.It is very popular with tourists, and street artists often bring it to life in summer.","تخيله المهندسان المعماريان Jabouille و Creuzot ثم نفذه المهندسون Long-Depaquit و Coste ، بدأ جسر العوارض هذا ، كله من الفولاذ ، في عام 1969 وانتهى في عام 1970 تحت إدارة مشروع مدينة باريس 1. منذ عام 2014 ، ممنوع على جميع حركة المرور الآلية ومخصص للمشاة وراكبي الدراجات. وهو يحظى بشعبية كبيرة بين السياح ، وغالبًا ما يعيده فناني الشوارع إلى الحياة في الصيف .","這座全鋼樑橋由建築師 Jabouille 和 Creuzot 設計，然後  由工程師 Long-Depaquit 和 Coste 建造，始建於 1969 年，並在巴黎市的監督下於 1970 年完工。自 2014 年以來，禁止所有機動車輛通行，並保留給行人和騎自行車的人。它非常 受遊客歡迎，街頭藝術家經常在夏天將它帶入生活。");

$ponts_carroussel3_text2 = array("Le pont Notre-Dame est un pont situé à Paris et traversant le grand bras de la Seine, reliant le quai de Gesvres au quai de la Corse sur l'île de la Cité. L'actuel pont, construit en 1853, lors des transformations haussmanniennes, mesure 105 m de longueur pour une largeur de 20 m, ses cinq arches initiales ayant été réduites à trois en 1912, dont une arche centrale métallique de 60 m.","The Notre-Dame bridge is a bridge located in Paris and crossing the large arm of the Seine, connecting the quai de Gesvres to the quai de la Corse on the île de la Cité. The current bridge, built in 1853, during the Haussmannian transformations, is 105 m long and 20 m wide, its five initial arches having been reduced to three in 1912, including a central metallic arch of 60 m.","جسر نوتردام هو جسر يقع في باريس ويعبر الذراع الكبيرة لنهر السين ، ويربط كواي دي جيسفريس بحديقة لا كورس في إيل دو لا سيتي. الجسر الحالي ، الذي بني في عام 1853 ، خلال العصر الهوسماني يبلغ طولها 105 أمتار وعرضها 20 مترًا ، وقد تم تقليص أقواسها الخمسة الأولية إلى ثلاثة في عام 1912 ، بما في ذلك قوس معدني مركزي بطول 60 مترًا. .","巴黎圣母院橋是位於巴黎的一座橋樑，橫跨塞納河的大臂，將 quai de Gesvres 與 Ile de la Cité 上的 quai de la Corse 連接起來。目前的橋樑建於 1853 年，在奧斯曼轉型期間，長 105 m，寬 20 m，其最初的五個拱門在 1912 年減少到三個，其中包括一個 60 m 的中央金屬拱門。");
$ponts_carroussel3_more2 = array("C'est à sa place que le premier pont de Paris, appelé Grand-Pont franchissait la Seine sur son grand bras dès l'Antiquité, dans le prolongement du Petit-Pont. En 886, le siège de Paris et les attaques normandes le condamnent, et il est remplacé par un pont de planches justement nommé pont des Planches de Milbray, qui tiendra jusqu'aux inondations de 1406.","It was in its place that the first bridge in Paris, called Grand-Pont, crossed the Seine on its large arm from Antiquity, in the extension of the Petit-Pont. In 886, the siege of Paris and the Norman attacks on condemned, and it was replaced by a plank bridge, aptly named Pont des Planches de Milbray, which held up until the floods of 1406.","في مكانه ، عبر الجسر الأول في باريس ، المسمى Grand-Pont ، نهر السين على ذراعه الكبيرة من العصور القديمة ، في امتداد Petit-Pont. في عام 886 ، حصار باريس والهجمات النورماندية على المدانين ، وتم استبداله بجسر خشبي ، اسمه على نحو ملائم جسر بلانشيس دي ميلبراي ، والذي صمد حتى فيضانات عام 1406. ","正是在它的位置上，巴黎的第一座橋叫做 Grand-Pont，它的大臂從古代穿過塞納河，在 Petit-Pont 的延伸 部分。 886 年，圍攻巴黎和諾曼底襲擊譴責了它，取而代之的是一座木板橋，恰如其分地命名為 Pont des Planches de Milbray，它一直持續到 1406 年的洪水。");

$ponts_carroussel3_text3 = array("Ce pont construit initialement en 1378 fut reconstruit plusieurs fois, en dernier lieu en 1857. Avant le milieu du xixe siècle, il débouchait du côté de la Rive gauche sur la place du Pont-Saint-Michel et du côté de l'île de la Cité sur la rue de la Barillerie.","This bridge, originally built in 1378, was rebuilt several times, most recently in 1857. Before the middle of the 19th century, it came out on the left bank side on the Place du Pont-Saint-Michel and on the side of the island of the City on rue de la Barillerie.","هذا الجسر ، الذي بُني في الأصل عام 1378 ، أعيد بناؤه عدة مرات ، كان آخرها في عام  1857. قبل منتصف القرن التاسع عشر ، ظهر على الضفة اليسرى في Place du Pont-Saint-Michel وعلى جانب جزيرة المدينة في شارع دو لا باريليري .","這座最初建於 1378 年的橋經過多次重建，最近一次是在 1857 年。位於 rue de la Barillerie 的城市。");
$ponts_carroussel3_more3 = array("Il doit son nom au voisinage de l'ancienne chapelle Saint-Michel du Palais qui existait dans le Palais royal. Pendant de nombreux siècles, Paris s’est structurée entre la Cité et la rive gauche. Aussi, le pont Saint Michel représenta à partir du XIVe siècle, le deuxième point de passage sur la Seine au niveau du petit bras. Il fut décidé par le Parlement de Paris en 1353, qui siégeait alors au niveau du Palais, en concertation avec le puissant chapitre de Notre Dame de Paris, le prévôt, qui dirigeait la police au Châtelet. Ce premier pont, en pierre, fut construit entre 1379 et 1387, dans l’axe de la rue Saint Denis, située sur la rive droite. Petit pont neuf, par opposition au petit pont situé légèrement plus en amont. Puis pont Saint Michel !","It owes its name to the vicinity of the former Saint-Michel du Palais chapel which existed in the Royal Palace. For many centuries, Paris was structured between the City and the left bank. Also, the Saint Michel bridge represented From the 14th century, the second crossing point on the Seine at the level of the small arm. It was decided by the Parliament of Paris in 1353, which then sat at the level of the Palace, in consultation with the powerful chapter of Notre Dame de Paris, the provost, who directed the police at the Châtelet.This first bridge, in stone, was built between 1379 and 1387, in the axis of the rue Saint Denis, located on the right bank.Small new bridge, as opposed to the small bridge located slightly further upstream, then Pont Saint Michel!","يرجع اسمها إلى محيط كنيسة Saint-Michel du Palais السابقة التي كانت موجودة في القصر الملكي. لعدة قرون ، تم بناء باريس بين المدينة والضفة اليسرى. أيضًا ، يمثل جسر Saint Michel منذ القرن الرابع عشر ، نقطة العبور  الثانية على نهر السين على مستوى الذراع الصغيرة. قررها برلمان باريس عام 1353 ، والذي جلس بعد ذلك على مستوى القصر ، بالتشاور مع فرع نوتردام دي باريس القوي ، العميد ، الذي قاد الشرطة إلى شاتليه ، تم بناء هذا الجسر الأول من الحجر بين عامي 1379 و 1387 ، في محور شارع سان دوني ، الواقع على الضفة اليمنى. جسر جديد صغير ، على عكس الجسر الصغير الموجود بعيدًا قليلاً عن المنبع. ثم بونت سانت ميشيل! ","它的名字來源於皇宮中存在的古老的聖米歇爾宮教堂附近。幾個世紀以來，巴黎一直位於城市和左岸之間間。此外，代表 14 世紀的聖米歇爾橋是塞納河上小臂水平的第二個交叉點。它是由巴黎議會於 1353 年決定的，該議會當時坐在宮殿的同一層，與巴黎圣母院的強大分會協商，教務長 指揮警察在夏特萊。這座第一座石橋建於 1379 年至 1387 年間，位於右岸聖丹尼斯街的軸線上。小型新橋，與位於上游稍遠的小型橋相反。然後是聖米歇爾橋！");

/* Restaurants */
$restaurants_title = array("Sur l'Île de la Cité et même autour, vous trouverez de <b style='color: #ea5c0d;'> nombreux endroits pour vous restaurer </b> !","On the Île de la Cité and even around, you will find <b style='color: #ea5c0d;'> many places to eat </b>!","في Île de la Cité وحولها ، ستجد <b style = 'color: #ea5c0d'> أماكن كثيرة لتناول الطعام </b>!","在 Île de la Cité 甚至周邊，您會發現許多 <b style='color: #ea5c0d;'> 吃飯的地方</b>！");
$restaurants_desc = array("Chaque couverts sur cette carte représente un point de restauration. Vous y trouverez des restaurants de haute gastronomie française, des restaurants huppés, des fast-food.","Each cutlery on this map represents a restaurant point. You will find restaurants of high French gastronomy, upscale restaurants, fast food.","تمثل كل أدوات مائدة على هذه الخريطة نقطة مطعم. وستجد مطاعم ذات فن الطهي الفرنسي العالي ، ومطاعم راقية ، ووجبات سريعة.","這張卡片上的每個餐具都代表一個還原點。你會發現高級法國美食餐廳、高檔餐廳、快餐店。");


/* Parcours */
$parcours_title = array("Nous vous proposons <b style='color: #ea5c0d;'>deux parcours </b> pour votre visite qui vous permettront de passer devant des <b style='color: #f7af3e;'>lieux magnifiques et iconiques</b> !<br><br> Vous pourrez réaliser ces parcours de <b style='color: #f7af3e;'> durées différentes</b>. Profitez bien et surtout soyez curieux ! ","We offer you <b style='color: #ea5c0d;'>two routes </b> for your visit that will take you past <b style='color: #f7af3e;'>beautiful and iconic places</ b>!<br><br>You can complete these courses of <b style='color: #f7af3e;'>different durations</b>.Enjoy and above all be curious!","نقدم لك <b style = 'color: #ea5c0d'> طريقين </b> لزيارتك والتي ستأخذك عبر <b style = 'color: # f7af3e؛'> أماكن جميلة ومميزة </ b> ! <br> <br> يمكنك إكمال هذه الدورات التدريبية ذات <b style = 'color: # f7af3e؛'> فترات مختلفة </ b>. استمتع وقبل كل شيء كن فضوليًا! ","我們為您提供<b style='color: #ea5c0d;'>兩條路線</b>供您遊 覽，讓您通過<b style='color: #f7af3e;'>美麗而標誌性的地方</b> !<br><br>您可以完成這些<b style='color: #f7af3e;'>不同時長的課程</b>。享受，最重要的是好奇！");      
$parcours_promenade = array("Parcours Promenade","Walk Route","طريق مشي","步行路線");
$parcours_promenade_desc = array("Prévoyez une journée entière...","Plan a full day...","التخطيط ليوم كامل ...","計劃一整天...");
$parcours_rapide = array("Parcours Rapide","Fast Course","دورة سريعة","快速課程");
$parcours_rapide_desc = array("Prévoyez 2 à 4 heures...","Allow 2-4 hours...","انتظر 2-4 ساعات ...","允許2-4小時...");

/* Galerie */

$Gallery_title = array("L'Île de la Cité a toujours été une grande <b style='color: #ea5c0d;'>inspiration</b> pour les <b style='color: #ea5c0d;'> artistes </b> de toutes les époques. ","The Île de la Cité has always been a great <b style='color: #ea5c0d;'>inspiration</b> for <b style='color: #ea5c0d;'>artists</b> of all eras. ","لطالما كانت لعبة Île de la Cité <b style = 'color: #ea5c0d;'> مصدر إلهام </b> لـ <b style = 'color: #ea5c0d;'> الفنانين </b> من جميع الأعمار.","Île de la Cité 一直是各個年齡段 <b style='color: #ea5c0d;'>藝術家 </b>的偉大<b style='color: #ea5c0d;'>靈感</b>。時代。");

/* About Us */

$AboutUs_title = array("Nous sommes un <b style='color: #ea5c0d;'> binôme d'étudiants </b> à l'Université Gustave Eiffel qui ont pour objectif de <b style='color: #f7af3e;'>participer à la valorisation d'un patrimoine mondial reconnu par l'UNESCO </b> en France ( kokorico <img src='../img/poule.png' width='25' height='25' alt=''> ) qui est L' Ile de la Cité. ","We are a <b style='color: #ea5c0d;'> pair of students </b> at Gustave Eiffel University who aim to <b style='color: #f7af3e;'>participate in the promotion of a world heritage recognized by UNESCO </b> in France ( kokorico <img src='../img/poule.png' width='25' height='25' alt=''> ) which is the Ile de la Cité.","نحن <b style = 'color: #ea5c0d'>؛ زوجًا من الطلاب </b> في جامعة جوستاف إيفل نهدف إلى <b style = 'color: #f7af3e'>؛ المشاركة  في الترويج للتراث العالمي معترف بها من قبل اليونسكو </b> في فرنسا (kokorico <img src = '../img/poule.png' width = '25 'height = '25' alt = ''>) وهي Ile de la Cité. ","我們是古斯塔夫埃菲爾大學的 <b style='color: #ea5c0d;'> 一對學生</b>，他們的目標是<b style='color: #f7af3e;'>參與推廣公認的世界遺產由聯合國教科文組織 </b> 在法國 (kokorico <img src='../img/poule.png' width='25' height='25' alt=''> ) 這是城市之島。");
$AboutUs_presentation = array("Nous sommes deux étudiants motivés, soucieux de notre réussite et qui mènent un projet magnifique en lien avec la Culture française.","We are two motivated students, concerned about our success and who are carrying out a magnificent project linked to French culture.","نحن اثنان من الطلاب المتحمسين ، قلقون بشأن نجاحنا ونقوم بتنفيذ مشروع رائع مرتبط بالثقافة الفرنسية.","我們是兩個積極進取的學生，關心我們的成功，並且正在開展與法國文化相關的宏偉項目。");
$AboutUs_maitriseOuvrage = array("Nous remercions la maîtrise d'ouvrage","We thank the project management","نشكر إدارة المشروع","我們感謝項目管理");
$AboutUs_ETTAYEB = array("Responsable du Forum UNESCO","Responsible for Forum UNESCO","مسؤول عن منتدى اليونسكو","聯合國教科文組織論壇負責人");
$AboutUs_ETTAYEB_help = array("Gestion de projet & de l'équipe","Project & Team Management","المشروع وإدارة الفريق","項目與團隊管理");
$AboutUs_CESSY = array("Chef du département Informatique de l'IUT","Head of the IT department of the IUT","رئيس قسم تكنولوجيا المعلومات في IUT","IUT IT部門負責人");
$AboutUs_CESSY_help = array("Developpement & aspect technique","Development & technical aspect","الجانب التنموي والتقني","開發和技術方面");
$AboutUs_REBY = array("Enseignant en Anglais","English teacher","معلم لغة انجليزية","英語老師");
$AboutUs_REBY_help = array("Créativité & inspiration","Creativity and inspiration","الإبداع والإلهام","創造力和靈感");


$AboutUs_SITEOFFICIEL = array("Site Officiel","Official site","موقع رسمي","官方網站");
$AboutUs_partners = array("Nos partenaires","Our partners","شركاؤنا","我們的同伴");
$AboutUs_Unesco = array("L'Organisation des Nations unies pour l'éducation, la science et la culture","The United Nations Educational, Scientific and Cultural Organization","منظمة الأمم المتحدة للتربية والعلم والثقافة","聯合國教育、科學及文化組織");
$AboutUs_investissementAvenir = array("PROGRAMME D’INVESTISSEMENT DE L’ÉTAT FRANÇAIS POUR L'ENSEIGNEMENT SUPÉRIEUR ET LA RECHERCHE","FRENCH STATE INVESTMENT PROGRAM FOR HIGHER EDUCATION AND RESEARCH","برنامج استثمار الدولة الفرنسية للتعليم والبحث العالي","法國高等教育和研究國家投資計劃");
$AboutUs_agenceNationale = array("FINANCE LA RECHERCHE PUBLIQUE ET LA RECHERCHE PARTENARIALE EN FRANCE","FUNDS PUBLIC RESEARCH AND PARTNERSHIP RESEARCH IN FRANCE","صناديق البحث العام وبحوث الشراكة في فرنسا","資助法國的公共研究和合作研究");
$AboutUs_Univ = array("(ANCIENNEMENT NOMMÉE L'UNIVERSITÉ PARIS-EST, MARNE-LA-VALLÉE)","(FORMERLY NAMED PARIS-EST UNIVERSITY, MARNE-LA-VALLÉE)","(جامعة باريس - إست المسماة سابقًا ، مارن لا فالي)","（原名巴黎東部大學，MARNE-LA-VALLÉE）");

$AboutUs_sources = array("Les sources","The sources","المنابع","來源");
$AboutUs_dronalist = array("Plans en Drone et vidéos de l'île de la Cité","Drone plans and videos of the Ile de la Cité","خطط الطائرات بدون طيار ومقاطع الفيديو لجزيرة المدينة","Ile de la Cité 的無人機計劃和視頻");
$AboutUs_michelin = array("Collection de guides touristiques sur la découverte du patrimoine culturel des régions.","Collection of tourist guides on the discovery of the cultural heritage of the regions.","مجموعة من المرشدين السياحيين عن اكتشاف التراث الثقافي للمناطق","收集有關發現該地區文化遺產的旅遊指南。");
$AboutUs_paristoric = array("PREMIER SITE DE DÉCOUVERTES THÉMATIQUES DE PARIS.","FIRST THEMATIC DISCOVERY SITE IN PARIS.","أول موقع اكتشاف موضوعي في باريس.","巴
黎的第一個主題探索網站。");
$AboutUs_CentreMonu = array("GÈRE, ANIME ET OUVRE À LA VISITE À PRÈS DE 100 MONUMENTS NATIONAUX.","MANAGES, ANIMATES AND OPENS TO VISITS NEARLY 100 NATIONAL MONUMENTS.","يدير وينشط ويفتح لزيارة ما يقرب من 100 نصب تذكاري وطني.","管理、製作動畫並開放參觀近 100 座國家紀念碑。");

$AboutUs_contact = array("Nous contacter","Contact us","اتصل بنا","聯繫我們");

$AboutUs_nom = array("Nom","Nom","اسم","姓名");
$AboutUs_mail = array("Adresse Email","E-mail address","البريد الإلكتروني","電子郵件地址");
$AboutUs_message = array("Message","Message","رسالة","信息");

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