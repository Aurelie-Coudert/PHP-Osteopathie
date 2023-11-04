<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Code de Déontologie";
$nav = "deontologie";
require 'elements/header.php'; 
?>

<div class="main-conteneur">

    <div class="container clearfix">

        <div class="bandeau-osteopathie">
            <h3>Code de Déontologie</h3>
        </div>

        <div class="body-page-osteopathie">

            <p>En tant que représentants des praticiens en médecine ostéopathique, nous arrêtons un code de déontologie commun et applicable à l’ensemble de la profession d’ostéopathe.</p>
            <p>Le présent code de déontologie est destiné à servir de règles éthiques et morales aux professionnels ostéopathes dans le cadre de leur exercice.</p>
            <p>Son objet est avant tout de protéger le patient et l'ostéopathe lui-même contre les éventuels mésusages de l'ostéopathie et contre les pratiques qui ne prendraient pas en compte les notions d'éthique professionnelle, de compétence, de responsabilité et de probité.</p>


                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Généralités
                            </button>
                        </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Objet et champs d'application du code</p>

                                <p> <strong>Article 1 :</strong> <em>Objet</em><br>
                                Le présent code de déontologie de l'ostéopathe énonce l'ensemble des principes, 
                                des règles et des usages que tout ostéopathe doit observer ou dont il doit s'inspirer dans l'exercice de sa profession.
                                Ces règles visent aussi bien le comportement personnel que l'exercice proprement dit de la profession.</p>

                                <p> <strong>Article 2 :</strong> <em>Application</em><br>
                                A compter de l’entrée en vigueur du présent Code, celui-ci a vocation à s’appliquer à toute personne désirant intégrer 
                                la profession d’ostéopathe exclusif. Le postulant devra se soumettre aux dispositions du présent Code et prêter serment.</p>

                                <p> <strong>Article 3 :</strong> <em>Dispositions Légales</em><br>
                                L'usage du titre d'ostéopathe est défini par la loi 2002-303 du 4 mars 2002 et les décrets s'y rapportant.
                                « L'ostéopathe prend acte de la réglementation en vigueur ».</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Devoirs généraux des ostéopathes
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> <strong>Article 4 :</strong> <em>Dignité – Moralité – Probité</em><br>
                                L'ostéopathe, au service de l'individu et de la santé publique, exerce sa mission dans le respect de la vie et de la dignité de la personne humaine.
                                Une conduite morale irréprochable et un respect des principes de probité sont primordiaux dans les relations de l'ostéopathe avec ses patients.
                                L'ostéopathe doit faire preuve de la plus grande diligence dans l'accomplissement de sa profession.
                                L’ostéopathe doit également observer à l’égard de ses patients une attitude empreinte de dignité, d’attention, de réserve et d’indépendance.</p>

                                <p> <strong>Article 5 :</strong> <em>Compétence – Formation continue</em><br>
                                L'ostéopathe doit se tenir au courant des progrès scientifiques, de sa profession et de son art, afin d'assurer à son patient les meilleurs soins. 
                                L'ostéopathe maintient sa compétence par une formation continue.</p>
                                
                                <p> <strong>Article 6 :</strong> <em>Non discrimination</em><br>
                                L'ostéopathe doit prodiguer ses soins avec la même conscience à tous ses patients quels que soient leur origine, leur sexe, leurs mœurs, leur orientation sexuelle, 
                                leur âge, leur situation de famille, leurs caractéristiques génétiques, leur handicap ou leur état de santé, leur appartenance ou absence d’appartenance vraie ou 
                                supposée à une ethnie ou une nation, leurs opinions politiques, leurs activités syndicales ou associatives, leurs convictions religieuses, leur apparence physique, 
                                leur patronyme, leur réputation ou les sentiments qu’il peut éprouver à leur égard.</p>

                                <p> <strong>Article 7 :</strong> <em>Obligations professionnelles</em><br>
                                L’ostéopathe doit respecter les engagements contractuels qu’il prend dans l’exercice de la profession. Il s’engage à être jour de ses obligations fiscales et sociales obligatoires.
                                La souscription d'une police d'assurance en responsabilité civile professionnelle est obligatoire.
                                De même, l’ostéopathe ayant été mis en liquidation judiciaire par une décision devenue définitive, s’interdit d’exercer à titre indépendant.</p>

                                <p> <strong>Article 8 :</strong> <em>Libre Choix</em><br>
                                Les principes suivants s'imposent à tout ostéopathe, sauf en cas d'incompatibilité avec une prescription législative ou réglementaire.
                                Ces principes sont :<br>
                                - Libre choix de l'ostéopathe par le patient.<br>
                                - Liberté des Honoraires. Cependant, les honoraires de l’ostéopathe doivent être déterminés avec tact et mesure, en tenant compte de l’importance des prestations fournies 
                                et du temps à y consacrer, de la situation de fortune du patient, de l’expérience du praticien et des circonstances particulières de son intervention.<br>
                                L’ostéopathe s’engage à répondre à toute demande d’information préalable ou d’explication sur ses honoraires.
                                Toute demande d’honoraires sollicitée par un ostéopathe en raison du résultat espéré ou obtenu auprès d’un patient est interdite.</p>

                                <p> <strong>Article 9 :</strong> <em>Droit de refus – Continuité des soins</em><br>
                                Hors le cas d'urgence et celui où il manquerait à ses devoirs d'humanité, un ostéopathe a toujours le droit de refuser ses soins pour des raisons professionnelles ou personnelles.
                                L'ostéopathe peut se dégager de sa mission à condition d'en avertir le patient ou son entourage, d'assurer la continuité des soins, et de fournir toutes les informations utiles à cette continuité.
                                L’ostéopathe ne peut exercer une autre activité professionnelle que si un tel cumul est compatible avec la réglementation en vigueur d’une part, et avec indépendance et dignité professionnelle d’autre part.
                                Il est notamment interdit à tout ostéopathe qui remplit un mandat électif, une fonction administrative ou exerce une autre profession d’en user pour accroître son activité d’ostéopathe.</p>
                            
                                <p> <strong>Article 10 :</strong> <em>Déconsidération de la profession</em><br>
                                L'ostéopathe doit s'abstenir, même en dehors de l'exercice de sa profession, de tout acte de nature à entacher l'honneur ou la dignité de celle-ci.</p>

                                <p> <strong>Article 11 :</strong> <em>Indépendance</em><br>
                                L'ostéopathe ne peut aliéner son indépendance sous quelque forme que ce soit, notamment en abusant de son influence ou en s’immisçant dans la vie privée de ses patients.</p>

                                <p> <strong>Article 12 :</strong> <em>Secret professionnel</em><br>
                                Le secret professionnel s'impose à tout ostéopathe, sauf dérogations prévues par la loi. Le secret couvre tout ce qui est venu à la connaissance de l'ostéopathe dans l'exercice de sa profession, c'est-à-dire 
                                non seulement ce qui lui a été confié, mais aussi ce qu'il a vu, lu, entendu, constaté ou compris.</p>

                                <p> <strong>Article 13 :</strong> <em>Obligations liées au secret</em><br>
                                L'ostéopathe doit veiller à la protection des dossiers, fiches ou supports informatisés relatifs au patient contre toute indiscrétion. Il doit veiller à ce que les personnes qui l'assistent dans son travail 
                                soient instruites de leurs obligations en matière de secret professionnel et s'y conforment.</p>

                                <p> <strong>Article 14 :</strong> <em>Principes d’un exercice non commercial</em><br>
                                L'exercice de l'ostéopathie se doit d'être une pratique de soins et non une pratique à visée commerciale. La réputation de l'ostéopathe est fondée sur sa compétence professionnelle et son intégrité.
                                Néanmoins, l’ostéopathe peut participer à une campagne sanitaire, à des émissions radiodiffusées ou télévisées ou auprès de tout support informatique destiné à l’information du public.
                                Il peut donner des conférences, publier des articles scientifiques, sous réserve du respect des règles de discrétion, de dignité et de prudence propres à la profession</p>

                                <p> <strong>Article 15 :</strong> <em>Information – Publicité</em><br>
                                Les mentions figurant sur les plaques, papiers à lettres, feuilles d'avis, notes d'honoraires, dans les annuaires, les outils Internet, etc… sont appropriées dans leur forme et leur contenu. 
                                Elles ont un objet informatif et ne doivent pas notamment refléter un caractère publicitaire et commercial.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Devoirs des ostéopathes envers les patients
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> <strong>Article 16 :</strong> <em>Droit du patient à l’information</em><br>
                                Dans le cadre du droit à l'information, l'ostéopathe doit s'efforcer d'éclairer son patient sur les raisons de toute mesure diagnostique ou thérapeutique proposée, et sur les réactions éventuelles normalement prévisibles.
                                L'ostéopathe est libre d'utiliser le langage qu'il croit être le plus adapté à la bonne compréhension du patient.</p>

                                <p> <strong>Article 17 :</strong> <em>Recherche du consentement et qualité des soins</em><br>
                                Le consentement de la personne examinée ou traitée, ou de son représentant légal, est recherché. En cas de refus du patient, l’ostéopathe respecte ce refus en l’informant sur les conséquences de cette décision.
                                Si le patient est un mineur ou un majeur sous tutelle, l’ostéopathe doit délivrer l’information selon le cas aux titulaires de l’autorité parentale, ou au tuteur, présents tout comme à l’intéressé lui-même, 
                                en tenant compte de son degré de maturité ou de discernement.
                                L’ostéopathe ne peut intervenir lorsque le patient majeur capable est hors d’état de manifester sa volonté, sans accord préalable et écrit d’une personne de son entourage ou du corps médical.</p>

                                <p> <strong>Article 18 :</strong> <em>Non immixtion dans les affaires privées et objectivité</em><br>
                                L'ostéopathe agit toujours avec correction et compréhension ; il s'abstient, sauf incidences thérapeutiques formelles, de toute intrusion dans les affaires de famille ; il s'interdit de heurter les convictions 
                                philosophiques, religieuses ou politiques. L'ostéopathe a le devoir d'objectivité.</p>

                                <p> <strong>Article 19 :</strong> <em>Assistance et protection de la personne en péril</em><br>
                                Lorsque l'ostéopathe estime qu'un patient (mineur ou autre) paraît être victime de sévices ou de privations, il doit, en faisant preuve de prudence et de circonspection, mettre en œuvre les moyens les plus adéquats 
                                pour le protéger et, le cas échéant, alerter les autorités compétentes, conformément aux dispositions du secret professionnel.</p>

                                <p> <strong>Article 20 :</strong> <em>Compétences et limite de compétences</em><br>
                                L'ostéopathe respecte les référentiels de la profession, et notamment son champ de compétences. Il réoriente le patient vers un professionnel approprié si le cas le nécessite.
                                L’ostéopathe ne doit pas entreprendre ou poursuivre des soins dans des domaines qui dépassent ses connaissances, son expérience et les moyens dont il dispose.
                                L’ostéopathe doit s’interdire, dans les investigations et les interventions qu’il pratique, comme dans la thérapeutique qu’il assure, de faire courir au patient des risques disproportionnés par rapport au bénéfice escompté.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. De l'exercice de la profession
                            </button>
                        </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> <strong>Article 21 :</strong> <em>Statut de l’ostéopathe</em><br>
                                L'ostéopathe peut exercer sa profession en qualité d'indépendant, de salarié, de collaborateur, éventuellement de fonctionnaire ou d'agent d'un service public selon la législation en vigueur.
                                La rémunération, la durée ou les conditions d’engagement ne peuvent être liées à un quelconque critère de rentabilité d’un Etablissement de Santé, lorsqu’un ostéopathe exerce au sein 
                                de cette structure, y compris dans un cadre salarial.</p>

                                <p> <strong>Article 22 :</strong> <em>Normes - Hygiène - Sécurité des locaux</em><br>
                                Le cabinet de consultation est le lieu où de façon habituelle, l'ostéopathe reçoit des patients, procède à des examens, donne des avis et dispense des soins. Toutes les mesures nécessaires seront 
                                prises en matière d'hygiène de qualité de soins et d’accès aux locaux.</p>

                                <p> <strong>Article 23 :</strong> <em>Collaboration professionnelle</em><br>
                                Un ostéopathe peut se faire remplacer temporairement par un confrère autorisé à exercer l’ostéopathie sur le territoire français.
                                Les modalités de collaboration seront définies par contrat écrit.</p>

                                <p> <strong>Article 24 :</strong> <em>Traçabilité des soins</em><br>
                                L’ostéopathe doit tenir un dossier pour chaque patient, sous quelque forme que ce soit.
                                Ce dossier, strictement confidentiel, comporte l’ensemble des informations concernant la santé du patient et nécessaires à son traitement, aux échanges avec d’autres confrères 
                                ainsi qu’avec d’autres professionnels de la santé. Chaque dossier est obligatoirement conservé par le praticien dans les termes et délais prévus par les textes sous la forme de son choix.
                                Il doit être communiqué au patient ou à son représentant dûment mandaté, aux confrères ou autres professionnels de la santé afin d’assurer la continuité des soins, ainsi qu’à toute 
                                juridiction ou expert désigné qui en formulent la demande.</p>

                                <p> <strong>Article 25 :</strong> <em>Utilisation des données dans un but scientifique ou de publication</em><br>
                                L'ostéopathe peut se servir du dossier d’un patient avec l'accord de ce dernier pour ses travaux scientifiques, à condition de ne faire paraître dans les publications aucun nom ni aucun 
                                détail qui permettraient l'identification du patient par des tiers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. Devoirs de confraternité, non concurrence, rapports des ostéopathes envers les membres des autres professions de santé
                            </button>
                        </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> <strong>Article 26 :</strong><br>
                                Les ostéopathes doivent entretenir entre eux des rapports de bonne confraternité, ce qui suppose une assistance morale en toutes circonstances, s’interdire 
                                toute calomnie, prendre la défense de tout confrère, injustement attaqué.</p>

                                <p> <strong>Article 27 :</strong><br>
                                Dès que les circonstances l’exigent, l’ostéopathe doit proposer le recours à un autre confrère ostéopathe ou à un autre professionnel de santé.</p>

                                <p> <strong>Article 28 :</strong><br>
                                Lorsqu’un patient fait appel à un autre ostéopathe, en raison de l’absence ou de l’indisponibilité temporaire de son ostéopathe traitant, celui-ci peut 
                                accepter d’assurer les soins pendant cette période, à charge pour lui de les cesser à son retour et lui confier toutes informations utiles en accord avec le patient.</p>

                                <p> <strong>Article 29 :</strong><br>
                                Le détournement ou la tentative de détournement de clientèle est interdit.</p>

                                <p> <strong>Article 30 :</strong><br>
                                Toute pratique tendant à réduire, dans un but de concurrence déloyale, le montant de ses honoraires, est proscrite. Néanmoins, l’ostéopathe est libre de donner gratuitement ses soins.</p>

                                <p> <strong>Article 31 :</strong><br>
                                Toute installation d’un ostéopathe à proximité du lieu où exercent déjà un ou plusieurs confrères ne doit pas créer un risque de confusion aux yeux du public.</p>

                                <p> <strong>Article 32 :</strong><br>
                                Les ostéopathes s’engagent à entretenir de bonnes relations avec les autres professions de santé.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. Expertise
                            </button>
                        </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> <strong>Article 33 :</strong><br>
                                L'ostéopathe chargé d'effectuer une expertise est soumis aux dispositions de la législation en la matière.
                                Il ne peut accepter de mission opposée à son éthique professionnelle.</p>

                                <p> <strong>Article 34 :</strong><br>
                                Un ostéopathe expert ne peut accepter une mission s’il risque de surgir un conflit d’intérêts entre cette mission et son activité habituelle d’ostéopathe.</p>

                                <p> <strong>Article 35 :</strong><br>
                                Toute acceptation d’une mission d’expertise suppose le respect des mêmes règles que celles qui s’imposent pour l’exercice de sa profession d’ostéopathe, 
                                la communication de ce qu’il a constaté se limitant strictement aux questions qui lui sont posées</p>
                            </div>
                        </div>
                    </div>
            </div>

        </div>

        <p><em>Source : <a href="https://osteofrance.com/presentation/deontologie/" target="_blank">Ostéopathes de France</a></em>
    </div>
    
</div>

<?php require 'elements/footer.php'; ?>