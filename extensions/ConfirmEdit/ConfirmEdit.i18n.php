<?php
/**
 * Internationalisation file for the ConfirmEdit extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'captcha-edit'               => 'To edit this page, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-desc'               => 'Provides CAPTCHA techniques to protect against spam and password-guessing',
	'captcha-addurl'             => 'Your edit includes new external links.
To help protect against automated spam, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-badlogin'           => 'To help protect against automated password cracking, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount'      => 'To help protect against automated account creation, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount-fail' => "Incorrect or missing confirmation code.",
	'captcha-create'             => 'To create the page, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-sendemail'          => 'To help protect against automated spamming, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-sendemail-fail'     => 'Incorrect or missing confirmation code.',
	'captcha-disabledinapi'      => 'This action requires a captcha, so it cannot be performed through the API.',
	'captchahelp-title'          => 'CAPTCHA help',
	'captchahelp-cookies-needed' => "You will need to have cookies enabled in your browser for this to work.",
	'captchahelp-text'           => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites.
While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of colored or distorted text and ask you to type the words shown.
Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers.
At the moment we do not have an audio alternative available.
Please contact the  [[{{MediaWiki:Grouppage-sysop}}|site administrators]] for assistance if this is unexpectedly preventing you from making legitimate posts.

Hit the 'back' button in your browser to return to the page editor.",
	'captcha-addurl-whitelist'   => ' #<!-- leave this line exactly as it is --> <pre>
# Syntax is as follows:
#   * Everything from a "#" character to the end of the line is a comment
#   * Every non-blank line is a regex fragment which will only match hosts inside URLs
 #</pre> <!-- leave this line exactly as it is -->',

	'right-skipcaptcha'          => 'Perform CAPTCHA-triggering actions without having to go through the CAPTCHA',
);

/** Message documentation (Message documentation)
 * @author Aotake
 * @author Hamilton Abreu
 * @author MF-Warburg
 * @author Meithal
 * @author Meno25
 * @author Purodha
 * @author Siebrand
 * @author The Evil IP address
 * @author Toliño
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'captcha-edit' => 'This message will be shown when editing if the wiki requires solving a captcha for editing.
See also
*{{msg-mw|Questycaptcha-edit}}
*{{msg-mw|Fancycaptcha-edit}}',
	'captcha-desc' => '{{desc}}',
	'captcha-addurl' => 'The explanation of CAPTCHA shown to users trying to add new external links.
See also
*{{msg-mw|Questycaptcha-addurl}}
*{{msg-mw|Fancycaptcha-addurl}}',
	'captcha-badlogin' => 'The explanation of CAPTCHA shown to users failed three times to type in correct password.
See also
*{{msg-mw|Questycaptcha-badlogin}}
*{{msg-mw|Fancycaptcha-badlogin}}',
	'captcha-createaccount' => 'The explanation of CAPTCHA shown to users trying to create a new account.
See also
*{{msg-mw|Questycaptcha-createaccount}}
*{{msg-mw|Fancycaptcha-createaccount}}',
	'captcha-create' => 'This message will be shown when creating a page if the wiki requires solving a captcha for that.
See also
*{{msg-mw|Questycaptcha-create}}
*{{msg-mw|Fancycaptcha-create}}',
	'captchahelp-title' => 'The page title of [[Special:Captcha/help]]',
	'captchahelp-text' => 'This is the help text shown on [[Special:Captcha/help]].',
	'captcha-addurl-whitelist' => "See also: [[MediaWiki:Spam-blacklist]] and [[MediaWiki:Spam-whitelist]]. Leave all the wiki markup, including the spaces, as is. You can translate the text, including 'Leave this line exactly as it is'. The first line of this messages has one (1) leading space.",
	'right-skipcaptcha' => '{{doc-right|skipcaptcha}}',
);

/** Afrikaans (Afrikaans)
 * @author BrokenArrow
 * @author Naudefj
 * @author පසිඳු කා�ින්ද
 */
$messages['af'] = array(
	'captcha-edit' => 'U wysiging bevat nuwe webskakels. Neem kennis dat blote reklame van u werf, produk of besigheid as vandalisme beskou kan word. As beskerming teen outomatiese gemorsbydraes, sal u die woorde wat onder verskyn in die prentjie moet intik: <br />([[Special:Captcha/help|Wat is hierdie?]])',
	'captcha-desc' => 'Eenvoudige implementasie van captcha',
	'captcha-addurl' => 'U wysiging bevat nuwe webskakels.
As beskerming teen outomatiese gemorsbydraes, sal u die woorde wat onder verskyn in die prentjie moet intik ([[Special:Captcha/help|Wat is hierdie?]]):',
	'captcha-badlogin' => 'Los asseblief die onderstaande eenvoudige som op en voer die antwoord in die blokkie in ter beskerming teen die outomatiese kraak van wagwoorde ([[Special:Captcha/help|meer inligting]]):',
	'captcha-createaccount' => "As 'n beskerming teen geoutomatiseerde gemors, tik asseblief die woorde wat in die beeld verskyn in om 'n rekening te skep: <br />([[Special:Captcha/help|Wat is hierdie?]])",
	'captcha-createaccount-fail' => 'Verkeerde of geen bevestigingkode.',
	'captcha-create' => 'U wysiging bevat nuwe webskakels. Neem kennis dat blote reklame van u werf, produk of besigheid as vandalisme beskou kan word. As beskerming teen outomatiese gemorsbydraes, sal u die woorde wat onder verskyn in die prentjie moet intik: <br />([[Special:Captcha/help|Wat is hierdie?]])',
	'captcha-sendemail-fail' => 'Verkeerde of ontbrekende bevestigingskode.',
	'captcha-disabledinapi' => "Hierdie aksie vereis dat 'n captcha, so dit kan nie uitgevoer word deur die API nie.",
	'captchahelp-title' => 'Captcha-hulp',
	'captchahelp-cookies-needed' => 'U moet koekies in u webblaaier aanskakel hê om dit te laat werk.',
	'captchahelp-text' => "Webwerwe wat bydraes van die publiek aanvaar (soos hierdie wiki) word soms lastig geval deur kwaaddoeners met programme wat outomaties skakels in 'n klomp werwe plaas. Alhoewel hierdie gemors verwyder kan word, is dit lastig.

In party gevalle, veral as u skakels by 'n blad voeg, sal die wiki dalk 'n beeld met verwronge teks vertoon en vra dat u die woorde daarin intik. Omdat hierdie taak moeilik geoutomatiseer word, laat dit meeste regte mense toe om bydraes te maak terwyl dit meeste kwaaddoeners stop.

Hierdie kan ongelukkig lastig wees vir mense met beperkte sig, of diegene wat teks- of spraakgebaseerde blaaiers gebruik. Tans is daar nog nie 'n klankalternatief beskikbaar nie. Kontak asseblief die [[{{MediaWiki:Grouppage-sysop}}|werfadministrateurs]] vir hulp as hierdie u onverwags belemmer om legitieme bydraes te maak.

Gebruik die \"terug\"-knoppie van u blaaier om na die vorige blad terug te keer.",
	'right-skipcaptcha' => 'Captcha-handelinge uitvoer sonder om die captcha te hoef oplos',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'captcha-edit' => 'Për të redaktuar këtë faqe, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-desc' => 'captcha Simple zbatimin e',
	'captcha-addurl' => 'Your redakto përfshin të jashtme lidhje të reja. Për të ndihmuar në mbrojtjen kundër spam automatizuar, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-badlogin' => 'Për të ndihmuar në mbrojtjen kundër fjalëkalimin automatizuar plasaritje, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-createaccount' => 'Për të ndihmuar në mbrojtjen kundër krijimit llogari e automatizuar, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-createaccount-fail' => 'Pasakta ose të humbur Kodi i shifruar.',
	'captcha-create' => 'Për të krijuar një faqe, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-sendemail' => 'Për të ndihmuar në mbrojtjen kundër spamming automatizuar, ju lutem zgjidh shuma e thjeshtë më poshtë dhe të hyjë në përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-sendemail-fail' => 'Pasakta ose të humbur Kodi i shifruar.',
	'captcha-disabledinapi' => 'Ky veprim kërkon një captcha, kështu që nuk mund të kryhet përmes API.',
	'captchahelp-title' => 'Captcha ndihmë',
	'captchahelp-cookies-needed' => 'Ju duhet të keni cookies të aktivizuara në shfletuesin tuaj për këtë për të punuar.',
	'captchahelp-text' => "Web faqet që pranojnë postings nga publiku, si ky wiki, shpesh keqtrajtohen nga spammers që përdorin mjete të automatizuar të postoni lidhjet e tyre me shumë vende. Përderisa këto lidhje spam mund të hiqen, ata janë një ngatërresë të rëndësishme. Ndonjëherë, sidomos kur duke shtuar të reja lidhje interneti në një faqe, wiki mund të tregojë se një imazh i ose deformuar tekst me ngjyra dhe kërkoni ju që të shtypni fjalë të treguar. Ngaqë kjo është një detyrë që është e vështirë për të automatizuar, ajo do të lejojë të vërtetë njerëzit më të për të bërë detyrat e tyre, ndërsa ndaluar më spammers dhe robotik sulmuesit të tjera. Për fat të keq kjo bezdi përdoruesit mund me vizion të kufizuar ose duke përdorur me bazë ose shprehjeje me bazë shfletuesit tekst. Për momentin ne nuk kemi një alternativë audio në dispozicion. Ju lutemi të kontaktoni [[{{MediaWiki:Grouppage-sysop}} site administratorët) |]] për ndihmë, nëse kjo është e papritur në parandalimin e ju prej bërë postimet legjitime. Hit 'butonin mbrapa në shfletuesin tuaj për t'u kthyer në faqen e redaktorit.",
	'captcha-addurl-whitelist' => '# <!-- leave this line exactly as it is --><pre>
# Sintaksa është si më poshtë:
# * Çdo gjë nga një "karakter #" në fund të linjës është një koment
# * Çdo linjës jo të zbrazët është një fragment regex i cili vetëm do të përputhen me pret brenda URL
 # </pre><!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'captcha Kryerja e veprimeve të shkaktuar pa pasur nevojë të shkojë nëpër captcha',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'captcha-edit' => 'ይህንን ድርሰት ለማረም፣ እባክዎን የሚ�ጥለውን �ላል የመደመር ጥያቄ መልስ ሳጥን ውስጥ ይጻፉ። ([[Special:Captcha/help|ተጨማሪ መረጃ]])',
	'captcha-createaccount' => 'ያልተፈለገ የመኪናነት አባልነት ለመከላከል፥ አባል ለመሆን በዚህ ምስል የታዩት እንግሊዝኛ ቃላት ወይም ቁጥር መልስ በትክክል መጻፍ ግዴታ ነው። ([[Special:Captcha/help|ይህ ምንድነው?]]):',
	'captchahelp-title' => "የ'ካፕቻ' መግለጫ",
	'captchahelp-text' => "አንዳንዴ 'ስፓም' የተባሉት ያልተፈለጉ መልእክቶች የሚላኩ ሰዎች በመኪናነት አማካይነት በብ� ድረገጽ ላይ የማይገባ ማስታወቂያ በመልጠፍ ላይ እየተገኘ ነው። ይህን የማይገባ መያያዣ ማስወገድ ቢቻለም አስቸጋሪ ናቸው።

ስለዚህ በመ�መርያ አባልነት ሲገቡ ወይም አንዳንዴ የውጭ ድረገጽ አድራሻ ሲጨመር የፕሮግራ� ሶፍትዌር 'ካፕቻ' የእንግሊዝኛን ቃላት ወይም የቁጥር መልስ እንዲዳግ� ለፈተና ይጠይቃል። ይህ አደራረግ ለመኪናነት �ላል ተግባር ሰላማይሆን፥ እውነተኛ ሰው ከሆነ ለመልጠፍ ያስችለዋል ነገር ግን መኪናነት ከሆነ ዕንቅፋት ይሆንበታል።

ይህ ዘዴ ከመልጠፍ ያለግባብ ቢከለክልዎ እባክዎ መጋቢን ይጠይቁ።

አሁን ( <= 'back' ) በbrowserዎ ላይ ይጫኑ።",
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'captcha-edit' => 'Ta editar ista pachina, faiga por favor a suma simpla que apareixe contino y escriba a solución en a caixa ([[Special:Captcha/help|más información]]):',
	'captcha-desc' => 'Implementación de CAPTCHA ta protecher contra o spam y dovinación de contrasenyas.',
	'captcha-addurl' => "A suya edición encluye vinclos esternos. Ta aduyar-nos en a proteción contra o spam automatizato, por favor, faiga a suma simpla que s'amuestra contino y escriba a respuesta en a caixa ([[Special:Captcha/help|más información]]):",
	'captcha-badlogin' => 'Ta aduyar en a protección contra a obtención automatizata de parolas de paso, por favor faiga a suma simpla que amaneixe contino y escriba a respuesta en a caixa ([[Special:Captcha/help|más información]]):',
	'captcha-createaccount' => "Ta aduyar-nos en a proteción contra a creyación automatica de cuentas, por favor faiga a suma simpla que s'amuestra contino y escriba a respuesta en a caixa ([[Special:Captcha/help|más información]]):",
	'captcha-createaccount-fail' => 'No ha escrito o codigo de confirmación, u iste ye incorreuto.',
	'captcha-create' => "Ta creyar a pachina, por favor faiga a suma simpla que s'amuestra contino y escriba a respuesta en a caixa ([[Special:Captcha/help|más información]]):",
	'captcha-sendemail' => 'Ta protecher-nos contra o spam automatizau, resuelva a suma facil que se presienta contino y escriba a respuesta en o quadro de texto ([[Special:Captcha/help|mas información]]):',
	'captcha-sendemail-fail' => 'O codigo de confirmación falta u ye incorrecto.',
	'captcha-disabledinapi' => "Ista acción requiere un captcha, asinas que no puede estar executada a traviés d'un API.",
	'captchahelp-title' => 'Aduya sobre o "captcha"',
	'captchahelp-cookies-needed' => 'Ta que o sistema funcione le cal tener as cookies activatas en o navegador.',
	'captchahelp-text' => "Os sitios web que acceptan mensaches d'o publico, como iste wiki, son a ormino obchecto d'abusos por spammers que fan servir ferramientas automatizatas ta encluyir-ie vinclos ta a-saber-los sitios. Encara que istos vinclos se pueden sacar, son un gran estorbo.

Bellas vegadas, especialment quan se mire de adhibir nuevos vinclos a una pachina, o wiki talment le amuestre una imachen con testo en color y distorsionato, y le pregunte quáls son as parolas amostratas. Como ista ye una fayena de mal automatizar, premitirá a os usuarios humanos fer as suyas edicions de vez que aturará a muitos spammers y atacants automaticos.

Manimenos, isto puede estar un barrache ta usuarios con visión limitata u que faigan ser navegadors basatos en texto u en a voz. Por l'inte no tenemos garra alternativa de audio. Por favor, contacte con os [[{{MediaWiki:Grouppage-sysop}}|administradors]] d'o wiki ta demandar aduya si isto le ye privando de fer as suyas edicions lechitimas.

Punche o botón 'enta zaga' d'o suyo navegador ta tornar ta l'editor de pachinas.",
	'captcha-addurl-whitelist' => " #<!-- leave this line exactly as it is --> <pre>
# A sintaxi ye asinas:
#  * Tot o que bi ha dende un carácter \"#\" dica a fin d'a linia ye un comentario
#  * Qualsiquier linia con testo un troz d'expresión regular (regex) que sólo concordará con os hosts aintro d'URLs
   #</pre> <!-- leave this line exactly as it is -->",
	'right-skipcaptcha' => 'Fer accions que requieren o captcha sin fer servir o captcha',
);

/** Arabic (العربية)
 * @author Aiman titi
 * @author Alnokta
 * @author Loya
 * @author Meno25
 * @author Mido
 * @author OsamaK
 * @author Samer
 */
$messages['ar'] = array(
	'captcha-edit' => 'لتعديل هذه الصفحة، من فضلك قم بحل المسألة الرياضية البسيطة بالأسفل وأدخل الإجابة في الصندوق ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-desc' => 'يوفر تقنيات كابتشا للحماية ضد السبام وتخمين كلمات السر',
	'captcha-addurl' => 'تعديلك يحتوي على وصلات خارجية جديدة.
للمساعدة في الحماية من السبام الأوتوماتيكي، من فضلك حل عملية الجمع بالأسفل وأدخل الإجابة في الصندوق  ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-badlogin' => 'للمساعدة في الحماية ضد سرقة كلمات السر، من فضلك حل عملية الجمع البسيطة بالأسفل وأدخل الحل في الصندوق ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-createaccount' => 'كحماية ضد إنشاء الحسابات الأوتوماتيكي، من فضلك حل العملية الحسابية بالأسفل وأدخل الإجابة في الصندوق ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-createaccount-fail' => 'كود تأكيد غير صحيح أو مفقود.',
	'captcha-create' => 'لإنشاء هذه الصفحة، من فضلك حل المسألة الرياضية التالية وأدخل
الإجابة في الصندوق ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-sendemail' => 'للمساعدة في الحماية ضد السخام الأتوماتيكي، رجاءً حُل مسألة الجمع البسيطة أدناه وأدخل الإجابة في المربع ([[Special:Captcha/help|مزيد من المعلومات]]):',
	'captcha-sendemail-fail' => 'كود تأكيد غير صحيح أو مفقود',
	'captcha-disabledinapi' => 'هذا الإجراء يتطلب تحقيق , لذلك لايمكن أعتمادها من API.',
	'captchahelp-title' => 'مساعدة الكابتشا',
	'captchahelp-cookies-needed' => 'ستحتاج إلى أن تكون الكوكيز مفعلة في متصفحك لكي يعمل هذا',
	'captchahelp-text' => "عادة ما يتم في المواقع التي تقبل الردود والرسائل من العامة، كهذا الويكي، تخريب الموقع عن طريق الأشخاص الذين يستعملون آليات معينة لإرسال وصلاتهم لمواقع متعددة بصورة آلية.
وعلى الرغم من أن هذا يمكن إزالته ولكنه مزعج للغاية.

في بعض الأحيان، خصوصا عند إضافة وصلات لصفحة، ربما يعرض الويكي صورة ملونة أو مشوشة ويطلب منك إدخال كلمات موجودة بالصورة أو يعرض عليك مسألة رياضية عشوائية ويطلب منك حلها.
ولأن هذه المهمة صعبة للغاية لأن يقوم بها برنامج، سيسمح هذا للأشخاص الآدميين بإضافة تحريراتهم بينما ستوقف البرامج التخريبية والهجمات الآلية الأخرى.

للأسف سيكون هذا صعبا بالنسبة لمستخدمي المتصفحات المحدودة أو التي تعتمد على النصوص فقط أو قراءة النصوص.
في الوقت الحالي لا يوجد لدينا بديل سمعي.
من فضلك راسل [[{{MediaWiki:Grouppage-sysop}}|إداريي الموقع]] للمساعدة إذا كان هذا الأمر يمنعك من التعديل ووضع وصلات قانونية.

إذا كنت تحرر صفحة معينة: اضغط زر 'العودة' في متصفحك للعودة إلى التحرير.",
	'captcha-addurl-whitelist' => ' #<!-- اترك هذا السطر تماما كما هو --> <pre>
# الصيغة كما يلي:
#  * كل شيء من علامة "#" لنهاية السطر تعليق
#  * كل سطر غير فارغ هو جزء تعبير نمطي والذي سوف يطابق فقط المضيفين داخل العناوين
  #</pre> <!-- اترك هذا السطر تماما كما هو -->',
	'right-skipcaptcha' => 'أداء أفعال تستوجب تنفيذ كابتشا دون المرور بها',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'captcha-edit' => 'علشان تعدل فى الصفحة دى، لو سمحت تحل المسالة الرياضية البسيطة اللى تحت  و اكتب الاجاية فى الصندوء ([[Special:Captcha/help|معلومات اكتر]]):',
	'captcha-desc' => 'تطبيق بسيط ل� كابتشا',
	'captcha-addurl' => 'التعديل بتاعك فيه لينكات خارجية جديدة.
علشان تساعد فى الحماية من السبام الاوتوماتيكى،لو سمحت تحل المسالة الرياضية البسيطة اللى تحت و اكتب الاجابة فى الصندوء([[Special:Captcha/help|معلومات اكتر]]):',
	'captcha-badlogin' => 'علشان تساعد فى الحماية من السرقة الاوتوماتيكية للباسورد، لو سمجت تحل المسألة الرياضية البسيطة اللى تحت و تكتب الاجابة جوه الصندوء([[Special:Captcha/help|معلومات اكتر]]):',
	'captcha-createaccount' => 'علشان تساعد فى الحماية من فتح الحساب الاوتوماتيكى،لو سمحت تحل المسألة الرياضية البسيطة اللى تحت و تكتب الاجابة جوه الصندوء ([[Special:Captcha/help|معلومات اكتر]]):',
	'captcha-createaccount-fail' => 'كود التأكيد مش صحيح أو ضايع.',
	'captcha-create' => 'علشان تبتدى الصفحة دى، لو سمحت تحل السألة الرياضية البسيطة اللى تحت و تكتب الاجابة جوه الصندوء ([[Special:Captcha/help|معلومات اكتر]]):',
	'captchahelp-title' => 'مساعدة الكابتشا',
	'captchahelp-cookies-needed' => 'لازم تكون الكوكيز بتاعتك متفعلة فى البراوزر علشان دا يشتغل.',
	'captchahelp-text' => "مواقع الويب اللى بتقبل رسايل من عامة الناس،زى الويكى دا،غالبا ما بيتعرضو لسوء استعمال عن طريق السبامرز اللى بيستخدمو اليات اوتوماتيكية علشان يبعتو لينكات لكذا موقع.
على الرغم من ان السبام لينك ممكن يتشال، بس هى بتسبب ازعاج كبير .

ساعات،و خصوصا لما بتضيف ويب لينك جديدة لاى صفحة،الويكى ممكن يعرض لك صورة لنص متشوه او متلون و يطلب منك انك تكتب الكلمات المعروضة.
و علشان دى عملية من الصعب يقوم بها برنامج، فهى بتسمح لمعظم البنى ادمين انهم يبعتو مشاركتهم و بتمنع معظم السبامرز و المهاجمين الاوتوماتيكيين التانيين.

للاسف،دا ممكن يسبب ازعاج لليوزرو اللى نظرهم ضعيف او اللى بيستعملو براوز معتمد على الكلام او النصوص.
فى الوقت الحالى احنا ما عندناش اى بديل سمعى متوافر.
لو سمحت تتصل [[{{MediaWiki:Grouppage-sysop}}|بلاداريين]] بتوع الموقع علشان يساعدوك لو دا منعك بشكل مش متوقع من انك تشارك بشكل قانونى.

دوس على زرار 'back'اللى فى البراوزر بتاعك علشان ترجع لتحرير الصفحة.",
	'captcha-addurl-whitelist' => ' #<!-- سيب السطر دا زى ما هو كدا بالظبط--> <pre>
# الصيغة كدا:
#  * كل حاجة من علامة "#" لحد نهاية السطر هى تعليق
#  * كل سطر مش فاضى هو جزء ريجيكس و اللى ح يطابق بس المضيفين جوه URLs
  #</pre> <!-- سيب السطر دا زى ما هو كدا بالظبط -->',
	'right-skipcaptcha' => 'عمل حاجات بتنشط الكابتشا من غير ما تضطر تمر بالكابتشا',
);

/** Assamese (অসম�য়া)
 * @author Chaipau
 * @author Rajuonline
 */
$messages['as'] = array(
	'captcha-edit' => 'এই পৃষ্ঠাটো সম্পাদনা কৰিবলৈ তলৰ সহজ অংকটো কৰি উত্তৰতো বাকছৰ ভিতৰত লিখক
([[Special:Captcha/help|অধিক তথ্য]]):',
	'captcha-addurl' => 'আপোনাৰ সম্পাদনাত বাহিৰলৈ সংযোগ আছে।
স্বয়ংক্ৰ�য় স্পামৰ পৰা বাচিবলৈ, তলৰ সহজ অংকটো কৰি উত্তৰতো বাকছৰ ভিতৰত লিখক ([[Special:Captcha/help|অধিক তথ্য]]):',
	'captcha-badlogin' => 'স্বয়ংক্ৰ�য়ভাবে গুপ্তশব্দ ভ�াৰ পৰা বাচিবলৈ, তলৰ সহজ অংকটো কৰি উত্তৰতো বাকছৰ ভিতৰত লিখক
([[Special:Captcha/help|অধিক তথ্য]]):',
	'captcha-createaccount' => 'স্বয়ংক্ৰ�য় হোৱা ভাবে সদস্যভুক্তি ৰোধ কৰিবলৈ, তলৰ সহজ অংকটো কৰি উত্তৰতো বাকছৰ ভিতৰত লিখক
([[Special:Captcha/help|অধিক তথ্য]]):',
	'captcha-createaccount-fail' => 'ভুল বা খাল� নিশ্বিতকৰণ শব্দ',
	'captcha-create' => 'এই পৃষ্ঠাটো তৈয়াৰ কৰিবলৈ, তলৰ সহজ অংকটো কৰি উত্তৰতো বাকছৰ ভিতৰত লিখক
([[Special:Captcha/help|অধিক তথ্য]]):',
	'captchahelp-cookies-needed' => 'এই কামতো সম্পন্ন কৰিবলৈ, আপোনাৰ ব্ৰাউজাৰত কুক� সক্ৰ�য় থাকিব লাগিব',
	'captchahelp-text' => "যিবোৰ ৱেবচাইটত জনতাই পাঠ্য ভৰাব পাৰে, যেনে এই ৱিকি, সেইবোৰক প্ৰায়ে দুস্ক্ৰিতিকাৰি স্পেমাৰবোৰে স্বয়ংক্ৰ�য় আহিলাৰ দ্বাৰা তেওলোকৰ চাইটলৈ সংযোগ ভৰাই আক্ৰমন কৰে।
যদিও তেনে স্পাম সংযোগ গুচাব পাৰি, পিছে এয়া এক ডা�ৰ উপদ্ৰৱ।

কেতিয়াবা, সাধাৰণতে যেতিয়া কোনো পৃষ্ঠালৈ নতুন সংযোগ সৃষ্টি কৰা হয়, তেতিয়া ৱিকিয়ে এটা ৰ��ন বা বিকৃত চবি দেখুৱাই তাত থকা শব্দখিনি আপোনাক টাইপ কৰিব কব পাৰে।
যিহেতু এই কামতো স্বয়ংক্ৰ�য় ভাবে কৰা প্ৰায়ে অসম্ভব, ই বেছিভাগ প্ৰকৃত ব্যক্তিক পাঠ্য ভৰাব দিয়াৰ লগতে স্বয়ংক্ৰ�য় আহিলাৰ দ্বাৰা পাঠ্য ভৰোৱা দুস্ক্ৰিতিকাৰি সকলক ৰোধ কৰিব পাৰে।

দুৰ্ভাগ্যক্ৰমে, সিমিত দৃষ্টিশক্তি থকা ব্যক্তিসকলে, বা পাঠ্য-আধাৰিত অথবা ধ্বনি-আধাৰিত ব্ৰাউজাৰ ব্যৱহাৰ কৰা ব্যক্তিসকলে ইয়াৰ বাবে আসুবিধা পাব পাৰে.
এই সময়ত ইয়াৰ কোনো ধ্বনি-আধাৰিত বিকল্প আমাৰ হাতত নাই।

ইয়াৰ বাবে যদি আপুনি যুক্তিসম্মত পঠ্য ভৰাব অসুবিধা পাইছে, তেনেহলে [[{{MediaWiki:Grouppage-sysop}}|চাইট প্ৰৱন্ধকৰ]] লগত যোগাযোগ কৰক।

পৃষ্ঠা সম্পাদনালৈ ঘুৰি যাবলৈ আপোনাৰ ব্ৰাউজাৰৰ 'back' বুটামত টিপা মাৰক।",
);

/** Asturian (Asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'captcha-edit' => "Pa editar esta páxina, por favor resuelvi la suma simple d'embaxo y pon la rempuesta nel caxellu ([[Special:Captcha/help|más información]]):",
	'captcha-desc' => "Ufre téuniques de CAPTCHA pa protexese escontra'l spam y descubrimientu de contraseñes",
	'captcha-addurl' => "La to edición inclúi nuevos enllaces esternos. P'aidar a protexer escontra'l spam automatizáu, por favor resuelvi la suma simple d'embaxo y pon la rempuesta nel caxellu ([[Special:Captcha/help|más información]]):",
	'captcha-badlogin' => "P'aidar a protexer escontra'l descifráu automáticu de claves, por favor resuelvi la suma simple d'embaxo y pon la rempuesta nel caxellu ([[Special:Captcha/help|más información]]):",
	'captcha-createaccount' => "P'aidar a protexer escontra la creación automática de cuentes, por favor resuelvi la suma simple d'embaxo y pon la rempuesta nel caxellu ([[Special:Captcha/help|más información]]):",
	'captcha-createaccount-fail' => 'Códigu de confirmación incorreutu o ausente.',
	'captcha-create' => "Pa crear la páxina, por favor resuelvi la suma simple d'embaxo y pon la rempuesta nel caxellu ([[Special:Captcha/help|más información]]):",
	'captcha-sendemail' => "P'aidar a protexese escontra la puxarra automatizada, por favor resuelvi la suma cenciella d'embaxo y pon la rempuesta na caxella ([[Special:Captcha/help|más información]]):",
	'captcha-sendemail-fail' => 'Códigu de confirmación incorreutu o ausente.',
	'captcha-disabledinapi' => 'Esta aición requier un captcha y, poro, nun pue facese pel API',
	'captchahelp-title' => 'Ayuda tocante al CAPTCHA',
	'captchahelp-cookies-needed' => "Has tener les cookies habilitaes nel to navegador pa que'l sistema funcione.",
	'captchahelp-text' => "Los sitios web qu'aceuten mensaxes del publicu, como esta wiki, davezu son oxetu d'abusu por spammers qu'usen programes pa incluyir los sos enllaces automáticamente.
Mientres qu'estos enllaces de puxarra puen desaniciase, son enforma cafiantes.

Dacuando, especialmente al amestar nuevos enllaces web nuna páxina, la wiki pue amosate una imaxe de testu coloreáu o distorsionáu y va pidite qu'escribas les pallabres que s'amuesen.
Yá qu'esti ye un llabor difícil d'automatizar, permitirá a les más de les persones reales unviar los sos testos, al empar que llenden los más de los spammers y otros atacantes automáticos.

Por desgracia, esto pue ser un inconveniente pa los usuarios con visión llimitada o qu'usen navegadores de testu o voz. De momentu nun tenemos disponible una alternativa de soníu. Por favor, ponte'n contautu colos [[{{MediaWiki:Grouppage-sysop}}|alministradores del sitiu]] pa pidir ayuda si esto te torgare facer ediciones llexítimes.

Calca nel botón 'atrás' del to navegador pa volver a la páxina d'edición.",
	'captcha-addurl-whitelist' => ' #<!-- dexa esta llinia exautamente como ta --> <pre>
# La sintaxis ye como sigue:
#  * Too dende\'l carauter "#" hasta la fin de la llinia ye un comentariu
#  * Toa llinia non vacia ye un fragmentu regex que namái buscará hosts n\'URLs
  #</pre> <!-- dexa esta llinia exautamente como ta -->',
	'right-skipcaptcha' => 'Facer les acciones que requieren captcha ensin tener que lu introducir',
);

/** Bashkir (Башҡо�тса)
 * @author Assele
 */
$messages['ba'] = array(
	'captcha-edit' => 'Был битте мөх���и�л�ү өсөн, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-desc' => 'Спамдан һ�м па�олде я�атыу�ан һаҡлау өсөн CAPTCHA ысулда�ы мен�н т�ьмин ит�',
	'captcha-addurl' => 'Һе��ең текстығы��а яңы тышҡы һылтанмала� ба�.
Автоматик спамдан һаҡлау маҡсатында, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-badlogin' => 'Па�олде автоматик ватыу�ан һаҡлау маҡсатында, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-createaccount' => 'Иҫ�п я�мала�ын автоматик булды�ыу�ан һаҡлау маҡсатында, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-createaccount-fail' => 'Раҫлау коды ке�етелм�г�н й�ки дө�өҫ түгел.',
	'captcha-create' => 'Яңы бит булды�ыу өсөн, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-sendemail' => 'Автоматик спамдан һаҡлау маҡсатында, зинһа�, ябай м�сь�л�не сисеге� һ�м яуабын түб�нд�ге юлға ке�етеге� ([[Special:Captcha/help|тулы�аҡ м�ғлүм�т]]):',
	'captcha-sendemail-fail' => 'Раҫлау коды ке�етелм�г�н й�ки дө�өҫ түгел.',
	'captcha-disabledinapi' => 'Был ғ�м�л captcha тикше�еүен талап ит�, шуға кү�� API аша башҡа�ыла алмай.',
	'captchahelp-title' => 'Captcha ту�аһында белешм�',
	'captchahelp-cookies-needed' => 'Бының эшл�үе өсөн һе��ең б�аузе�ығы��а куки булыуы к���к.',
	'captchahelp-text' => 'Ү�ен� эст�лек өҫт��г� һ�м эст�леген мөх���и�л��г� мөмкинлек би�г�н веб-сайтта�, шул иҫ�пт�н был вики, йыш ҡына сайтта�ға автоматик һылтанмала� өҫт�ү өсөн п�ог�аммала� ҡулланған спамлаусыла��ың маҡсатына �йл�н�.

Ҡайһы бе� ғ�м�лд���е башҡа�ған ваҡытта � м�ҫ�л�н, битк� һылтанма өҫт�г�н ваҡытта � һе� төҫлө й�ки бо�олған текстлы махсус ��сем кү�� алаһығы�, һе�г� ошо текстты ке�ете�г� т�ҡдим ител�с�к.
П�ог�аммала� өсөн бо�олған текстты уҡыу ауы� м�сь�л� булып то�ғанға кү��, спамлау һ�м вандал п�ог�аммала�ының күпселеге быны х�л ит� алмаясаҡ, � кешел�� еңел башҡа�асаҡ.

Үкенеск� ҡа�шы, бындай һаҡлыҡ са�ала�ы кү����е наса� кү�еүсе кешел��г� й�ки текстлы й�ки уҡыусы б�аузе��а� ҡулланған кешел��г� уңайһы�лыҡ килте�еүе мөмкин.
Әлеге ваҡытта бе��ең бындай тикше�еү�е тауыш мен�н алышты�ыу мөмкинлеге юҡ.
Зинһа�, �г�� бындай тикше�еү һе�г� сайтта намыҫ мен�н эшл��г� ҡамасаулаһа, [[{{MediaWiki:Grouppage-sysop}}|х�кимд��г�]] мө��ж�ғ�т итеге�.

Мөх���и�л�үг� ки�е ҡайтыу өсөн, б�аузе�ығы��а ки�е ҡайтыу төйм�һен� баҫығы�.',
	'captcha-addurl-whitelist' => '#<!-- leave this line exactly as it is --> <pre>
# Синтаксистың тасуи�ламаһы:
#  * "#" х��ефен�н алып бөт� юл юлдың а�ағына тиклем аңлатма тип һанала
#  * Һ�� буш булмаған юл URL ад�есындағы ү��к исеменең �егуля� аңлатмаһы тип һанала 
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Captcha тикше�еүен талап итк�н ғ�м�лд���е тикше�еүһе� башҡа�ыу',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'captcha-edit' => 'به اصلاح کتن ای صفحه،لطفا ای جمع ساده حل کنیت و جوابء جهلا وارد کنیت ([[Special:Captcha/help|گیشتر اطلاعات]]):',
	'captcha-desc' => ' کاربرد ساده captcha',
	'captcha-addurl' => 'شمی اصلاح شامل نوکین درای لینک انت.
په کمک په حمایت چه اتوماتیکی اسپم، لطفا جمع ساده حل کینت و جواب جهلء وارد کنیت  ([[Special:Captcha/help|گیشتر اطلاعات]]):',
	'captcha-badlogin' => 'په کمک په حمایت چه اتوماتیکی کلمه رمز پروشوک، لطفا ای جمع ساده حل کنیت. جوابء جهلء وارد کنید  ([[Special:Captcha/help|گیشتر اطلاعات]]):',
	'captcha-createaccount' => 'په کمک په حمایت چه اتوماتیکی حساب شرکتن، لطفا ای جهلی ساده جمع حل کنیت و جواب بنویسیت  ([[Special:Captcha/help|گیشتر اطلاعات]]):',
	'captcha-createaccount-fail' => 'اشتباه یا گارین کد تایید',
	'captcha-create' => 'په شرکتن صفحه، لطفا ای جمع ساده حل کنیت و جواب ادان بنویسیت  ([[Special:Captcha/help|گیشتر اطلاعات]]):',
	'captchahelp-title' => 'کمک Captcha',
	'captchahelp-cookies-needed' => 'شمی نیاز بیت که ته وتی بروزر کوکی فعال کنیت په ای کارء',
	'captchahelp-text' => "وب سایتانی که چه عام نوشته قبول کننت، په داب ای ویکی، اغلب چه طرف اسپمرآن که چه وسایل اتوماتیکی په دیم دهگ لینکانش په بازگین سایت سوء استفاده کنگ بیت.
اگر که ای لینک اسپمی دور کنگ بینت،بله باز اذیت کننت.

لهتی وهد به خصوصی وهدی که نوکین لینک وبی په یک صفحه اضافه بیت،ویکی شاید یک عکس رنگی یا هورت هورین متنی شما ار پیش داریت و چه شما لوٹیت پیش داشتگین کلمات وارد کنیت.
چه آ جاهی که ای کاری سختنت په اتوماتیک کتن،آی واقعی ترین انسان اجازت دنت تا وتی نوشتانک دیم دهنت چه آ دیم گیشترین اسپمر و هکرآنء متوقف کنت.

متاسفانه شی شاید کاربرانء ناراحت کنت ته یک دید محدود یا استفاده کتن چه بروزرآن متنی و گپی.
هنو ما را تواری جایگزین نیست.
لطفا مدیران سایت تماس گریت په کمک اگر شی یک ناخواسته این جلوگیری چه دیم دهگ قانونی انت.
دکمه 'back' ته وتی بروزر بجنیت دان په صفحه اصلاح تریت.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntax is as follows:
#   * Everything from a "#" character to the end of the line is a comment
#   * Every non-blank line is a regex fragment which will only match hosts inside URLs
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'اجرای کاران کپچا بی شی که چه طریق کپچا بروت',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'captcha-create' => 'Tangarig maggibo an pahina, paki simbagan an simpleng suma sa ibaba asin ikaag an simbag sa laog kan kahon ([[Special:Captcha/help|more info]]):',
	'captchahelp-title' => 'Tabang sa Captcha',
);

/** Belarusian (Бела�уская)
 * @author Yury Tarasievich
 * @author Хомелка
 */
$messages['be'] = array(
	'captcha-edit' => 'Для змянення гэтай ста�онцы, калі ласка, вы�ашыце п�остую суму ніжэй і ўвядзіце адказ у поле ([[Special:Captcha/help|more info]]):',
	'captcha-desc' => 'Вы�ашэнне п�остай каптчы',
	'captcha-create' => 'Каб ства�ыць ста�онку, �азвяжыце п�остае ў�аўненне, што ніжэй, і ўпішыце адказ у адпаведнае поле ([[Special:Captcha/help|больш пад�абязна]]):',
	'captchahelp-title' => 'Даведка Капчы',
	'captchahelp-cookies-needed' => 'Каб гэтая магчымасць п�ацавала, належыць дазволіць у б�аўзе�ы ап�ацоўку квіткоў ("кукі").',
	'captcha-addurl-whitelist' => ' #<!-- �адок абавязкова пакінуць як ёсць (у т.л., з п�агалам у пачатку) --> <pre>
# Сінтаксіс наступны:
#  * Усё ад знаку "#" да канца �адка гэта камента�
#  * Кожны непусты �адок гэта частковы �эгуля�ны вы�аз, які па�аўноўваецца з ад�асамі се�ве�аў унут�ы URL-яў
  #</pre> <!-- �адок абавязкова пакінуць як ёсць (у т.л., з п�агалам у пачатку) -->',
);

/** Belarusian (Taraškievica orthography) (�Бела�уская (та�ашкевіца)�)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'captcha-edit' => 'Каб �эдагаваць гэтую ста�онку, калі ласка, знайдзіце п�остую суму і ўвядзіце адказ у поле ([[Special:Captcha/help|пад�абязнасьці]]):',
	'captcha-desc' => 'Дадае мэтад CAPTCHA для аба�оны суп�аць спаму і падбо�у па�оляў',
	'captcha-addurl' => 'Вашае �эдагаваньне ўт�ымлівае новыя вонкавыя спасылкі.
У мэтах аба�оны ад аўтаматычнага спаму, калі ласка, знайдзіце п�остую суму і ўвядзіце адказ у поле ([[Special:Captcha/help|пад�абязнасьці]]):',
	'captcha-badlogin' => 'У мэтах аба�оны ад аўтаматычнага ўзлому па�оляў, калі ласка, знайдзіце п�остую суму і ўвядзіце адказ у поле ([[Special:Captcha/help|дадатковая інфа�мацыя]]):',
	'captcha-createaccount' => 'У мэтах аба�оны ад аўтаматычнага ства�эньня �ахункаў, калі ласка, знайдзіце п�остую суму і ўвядзіце адказ у поле ([[Special:Captcha/help|дадатковая інфа�мацыя]]):',
	'captcha-createaccount-fail' => 'Код пацьве�джаньня � няслушны альбо адсутнічае.',
	'captcha-create' => 'Каб ства�ыць ста�онку, калі ласка, знайдзіце п�остую суму і ўвядзіце адказ у поле ([[Special:Captcha/help|пад�абязнасьці]]):',
	'captcha-sendemail' => 'У мэтах аба�оны суп�аць аўтаматычнага спаму, калі ласка, знайдзіце п�остую суму і ўвядзіце вынік у полі ніжэй ([[Special:Captcha/help|дадатковая інфа�мацыя]]):',
	'captcha-sendemail-fail' => 'Код пацьве�джаньня � няслушны альбо адсутнічае.',
	'captcha-disabledinapi' => 'Гэтае дзеяньне пат�абуе п�аве�кі captcha, і з-за гэтага ня можа быць выкананае п�аз API.',
	'captchahelp-title' => 'Дапамога ў captcha',
	'captchahelp-cookies-needed' => 'Вам т�эба дазволіць файлы-кукі ў Вашым б�аўзэ�ы, каб гэтая функцыя п�ацавала.',
	'captchahelp-text' => 'Вэб-сайты, якія п�ымаюць запісы ад г�амадзкасьці, падобныя на {{GRAMMAR:вінавальны|{{SITENAME}}}}, часта атакуюцца спамэ�амі, якія ўжываюць аўтаматызаваныя інст�умэнты, каб зьмяшчаць свае спасылкі на шмат сайтаў.
І хаця гэтыя спасылкі могуць быць п�ыб�аныя, яны выклікаюць значныя няз�учнасьці.

Часам, асабліва калі Вы дадаеце новыя вонкавыя спасылкі на ста�онку, {{SITENAME}} можа паказаць Вам выяву з каля�овым ці скажоным тэкстам і пап�асіць увесьці гэты тэкст.
П�аз тое, што гэтае заданьне цяжка аўтаматызаваць, яно дазволіць большасьці �эальных людзей �абіць запісы, але спыніць большасьць спамэ�аў і іншых аўтаматызаваных �обатаў.

На жаль, гэта можа выклікаць няз�учнасьці для ўдзельнікаў з абмежаваньнямі па з�оку і для тых, хто ўжывае тэкставыя ці моўныя б�аўзэ�ы.
На гэты момант мы ня маем аўдыё-альтэ�натывы гэтай п�аве�цы.
Калі ласка, зьвяжыцеся з [[{{MediaWiki:Grouppage-sysop}}|адмініст�ата�амі]], калі гэтая п�аве�ка пе�ашкаджае Вам �абіць слушныя запісы.

Націсьніце кнопку «назад» у Вашым б�аўзэ�ы, каб вя�нуцца да �эдагаваньня ста�онкі.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Сынтаксіс наступны:
#  * Усё, што пачынаецца з «#» і да канца �адку, зьяўляецца камэнта�ам
#  * Усе непустыя �адкі зьяўляюцца часткамі �эгуля�нага вы�азу, які будзе выка�ыстоўвацца толькі
# ў дачыненьні да назваў сэ�вэ�аў у вонкавых спасылках
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Доступ да магчымасьцяў аба�оненых пытаньнямі ў выяве ці �азьвязаньнем п�ыкладаў, без ужываньня п�аве�ак',
);

/** Bulgarian (Бълга�ски)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'captcha-edit' => 'Редакти�ането на тази статия изисква пот�ебителите да въведат отгово�а на задачата по-долу в текстовата кутия ([[Special:Captcha/help|повече инфо�мация]]):',
	'captcha-desc' => 'П�едоставя оп�остена captcha технология като защита с�ещу спам и налучкване на па�оли',
	'captcha-addurl' => 'Тази �едакция съдъ�жа нови външни п�еп�атки. Като защита с�ещу автоматизи�ан спам системата изисква пот�ебителите да въведат отгово�а на задачата по-долу в текстовата кутия ([[Special:Captcha/help|повече инфо�мация]]):',
	'captcha-badlogin' => 'Като защита с�ещу автоматизи�ано комп�омети�ане на па�оли, системата изисква пот�ебителите да въведат отгово�а на задачата по-долу в текстовата кутия ([[Special:Captcha/help|повече инфо�мация]]):',
	'captcha-createaccount' => 'Като защита от автоматизи�ани �егист�ации, системата изисква п�и �егист�и�ане на пот�ебителска сметка пот�ебителите да въведат отгово�а на задачата по-долу в текстовата кутия ([[Special:Captcha/help|повече инфо�мация]]):',
	'captcha-createaccount-fail' => 'Г�ешен или липсващ код за потвъ�ждение.',
	'captcha-create' => 'За създаване на ст�аницата е необходимо да се �еши задачата и да се въведе отгово�ът в кутията ([[Special:Captcha/help|повече инфо�мация]]):',
	'captcha-sendemail-fail' => 'Г�ешен или липсващ код за потвъ�ждение.',
	'captcha-disabledinapi' => 'Това действие изисква капча, следователно не може да бъде извъ�шено п�ез п�иложния п�ог�амен инте�фейс.',
	'captchahelp-title' => 'Помощ за сaptcha',
	'captchahelp-cookies-needed' => 'За да �аботи това, необходимо е бисквитките на вашия б�аузъ� да са включени.',
	'captchahelp-text' => "Уеб сайтовете, които позволяват свободно да се �едакти�а и добавя ново съдъ�жание (като това уики), често са обект на атаки от ст�ана на спамъ�и, които използват с�едства за автоматизи�ано �едакти�ане за публикуване на п�еп�атки към много сайтове. Въп�еки че тези п�еп�атки могат да бъдат п�емахнати, те са особено неп�иятни за пот�ебителите.

Понякога, особено когато се добавят нови п�еп�атки към ст�аниците, е възможно уикито да покаже ка�тинка с текст, който т�ябва да бъде въведен в посоченото поле. Тъй като това е стъпка, която е т�удно да бъде п�ескочена п�и автоматизи�ано �едакти�ане, тя зат�уднява и спи�а повечето спамъ�и и �оботи, но допуска истинските пот�ебителите да п�авят �едакции.

За съжаление тази стъпка може да зат�удни нез�ящи пот�ебители или пот�ебители, които използват текстови или �ечеви б�аузъ�и. За момента системата не �азполага с възможност за гласова алте�натива. Объ�нете се за помощ към [[{{MediaWiki:Grouppage-sysop}}|админист�ато� на сайта]], ако това изискване на системата ви зат�уднява да доп�инасяте легитимно.

Натиснете бутона 'back' на вашия б�аузъ�, за да се въ�нете към �едакто�а на ст�аници.",
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Prometheus.pyrphoros
 * @author Usarker
 * @author Zaheen
 */
$messages['bn'] = array(
	'captcha-edit' => 'এই নিবন্ধটি সম্পাদনা করতে দয়া করে নিচের সহজ যোগটি সমাধান করুন এবং ফলাফলটি বাক্সটিতে প্রবেশ করান ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-desc' => 'সরল ক্যাপচা বাস্তবায়ন',
	'captcha-addurl' => 'আপনার সম্পাদনায় নতুন বহিঃসংযোগ বিদ্যমান। স্বয়ংক্রিয় স্প্যামের বিরুদ্ধে সুরক্ষার খাতিরে অনুগ্রহ নিচের যোগটি সমাহদান করুন এবং উত্তরটি বাক্সে প্রবেশ করান ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-badlogin' => 'স্বয়ংক্রিয় শব্দচাবি ক্র�্যাকিং-এর বিরুদ্ধে সুরক্ষার খাতিরে অনুগ্রহ করে নিচের যোগটি সমাধান করুন এবং উত্তরটি বাক্সে প্রবেশ করান ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-createaccount' => 'স্বয়ংক্রিয় অ্যাকাউন্ট সৃষ্টি রোধ করার খাতিরে অনুগ্রহ করে নিচের যোগটি সমাধান করুন এবং উত্তরটি বাক্সে প্রবেশ করান ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-createaccount-fail' => 'ভুল অথবা হারিয়ে যাওয়া নিশ্চিতকরণ সংকেত',
	'captcha-create' => 'পাতাটি সৃষ্টি করতে চাইলে অনুগ্রহ করে নিচের যোগটি সমাধান করুন এবং উত্তরটি বাক্সে প্রবেশ করান ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-sendemail' => 'স্বয়ংক্রিয় স্প্যাম থেকে রক্ষা পেতে, অনুগ্রহ করে সাধারন অংকটি সমাধান করুন এবং উত্তরপ্রদান বক্সে লিখুন ([[Special:Captcha/help|আরও তথ্য]]):',
	'captcha-sendemail-fail' => 'নিশ্চিতকরণ কোডটি ভুল বা দেয়া হয়নি',
	'captcha-disabledinapi' => 'এই কাজটি করার জন্য একটি ক্যাপচা প্রয়োজন, তাই এটি এপিআই দ্বারা করা যাবে না।',
	'captchahelp-title' => 'ক্যাপচা সাহায্য',
	'captchahelp-cookies-needed' => 'এই কাজটি করার জন্য আপনাকে আপনার ব্রাউজারের কুকি সক্রিয় করতে হবে।',
	'captchahelp-text' => 'যেসব ওয়েবসাইট পোস্টিং-এর জন্য উন্মুক্ত, যেমন এই উইকিটি, সেগুলি প্রায়ই স্প্যামারদের আক্রমণের শিকার হয়। স্প্যামাররা স্বয়ংক্রিয় সরঞ্জাম ব্যবহার করে তাদের সংযোগগুলি বহু সাইটে পোস্ট করে। এই স্প্যাম সংযোগগুলি মুছে ফেলা সম্ভব, কিন্তু এগুলি যথেষ্ট বিরক্তির উদ্রেক করে।

কখনো কখনো, বিশেষ করে কোন পাতায় নতুন ওয়েব সংযোগ যোগ করার সময়, উইকিটি আপনাকে র�িন বা বিকৃত টেক্সটবিশিষ্ট ছবি দেখিয়ে আপনাকে শব্দটি টাইপ করতে বলতে পারে। যেহেতু এই কাজটি স্বয়ংক্রিয়ভাবে সম্পাদন করা দুরূহ, তাই এই ব্যবস্থার ফলে প্রকৃত মানুষেরা পোস্ট করতে পারবেন কিন্তু বেশির ভাগ স্প্যামার বা রোবটভিত্তিক আক্রমণ বাধাপ্রাপ্ত হবে।

যারা চোখে কম দেখতে পান কিংবা টেক্সটভিত্তিক বা উক্তিভিত্তিক ব্রাউজার ব্যবহার করছেন, দুর্ভাগ্যবশত এই ব্যবস্থাটি তাদের জন্য সমস্যার সৃষ্টি করবে। এই মুহূর্তে আমাদের কাছে এই ব্যবস্থাটির কোন অডিও বিকল্প নেই। যদি ব্যবস্থাটি আপনাকে বৈধ পোস্ট করতে অযাচিত বাধা দেয়, অনুগ্রহ করে [[{{MediaWiki:Grouppage-sysop}}|সাইটের প্রশাসকদের]] কাছে সাহায্য চান।

আপনি এখন ব্রাউজারের ব্যাক বোতাম চেপে পাতা সম্পাদকে ফেরত যেতে পারেন।',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# সিনট্যাক্স নিম্নরূপ:
#  * "#" ক্যারেক্টার থেকে শুরু হয়ে লাইনের শেষ পর্যন্ত সবকিছু একটি মন্তব্য
#  * খালি নয় এমন প্রতিটি লাইন একটি রেজেক্স খণ্ডাংশ যেটি URLগুলির ভেতরে হোস্টগুলির সাথে মিলে যাবে।
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'ক্যাপচাতে না গিয়ে ক্যাপচা ট্রিগারিং এর কাজ করুন',
);

/** Breton (Brezhoneg)
 * @author BrokenArrow
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'captcha-edit' => "A-raok gellout degas kemmoù war ar bajenn-mañ e c'houlenner ouzhoc'h respont d'ar jedadenn eeun a-is ha lakaat an disoc'h er vaezienn ([[Special:Captcha/help|Petra eo se?]])",
	'captcha-desc' => 'Pourchas a ra teknikoù CAPTCHA evit en em wareziñ diouzh ar strob hag an diskuliañ gerioù-tremen',
	'captcha-addurl' => "Liammoù diavaez nevez zo bet ouzhpennet ganeoc'h. A-benn talañ ouzh ar strob emgefre skrivit disoc'h ar jedadennig eeun-mañ er stern : <br />([[Special:Captcha/help|Petra eo se?]])",
	'captcha-badlogin' => "A-benn talañ ouzh preizhadur emgefre ar gerioù-tremen gant ar botoù e c'houlenner ouzhoc'h jediñ an tamm oberiadenn ha skrivañ an disoc'h anezhi er vaezienn a-is ([[Special:Captcha/help|Petra eo se ?]]):",
	'captcha-createaccount' => "A-benn hor skoazellañ da dalañ ouzh ar c'hrouiñ kontoù emgefre, skrivit ar gerioù a zeu war wel er stern-mañ evit enrollañ ho kont : <br />([[Special:Captcha/help|Petra eo se?]])",
	'captcha-createaccount-fail' => "Pe e vank ar c'hod kadarnaat pe eo fall anezhañ.",
	'captcha-create' => "A-benn krouiñ ar bajenn, skrivit disoc'h ar jedadennig eeun-mañ er vaezienn : <br />([[Special:Captcha/help|Petra eo se?]])",
	'captcha-sendemail' => "Evit hor skoazellañ da zizarbenn ar strob emgefre, sammit ar sifroù a-is ha skrivit an disoc'h er voest ([[Special:Captcha/help|gouzout hiroc'h]]) :",
	'captcha-sendemail-fail' => "Pe e vank ar c'hod kadarnaat pe eo fall anezhañ.",
	'captcha-disabledinapi' => "Evit an obererezh-mañ ez eus ezhomm ur captcha, dre-se ne c'hell ket bezañ graet dre an API.",
	'captchahelp-title' => 'Skoazell Capcha',
	'captchahelp-cookies-needed' => "Ret eo deoc'h gweredekaet an toupinoù war ho merdeer Web evit ma'z afe en-dro.",
	'captchahelp-text' => "Alies e vez taget al lec'hiennoù a zegemer kemennadennoù a-berzh an holl, evel ar wiki-mañ, gant ar stroberien a implij ostilhoù emgefre evit postañ o liammoù war lec'hiennoù a bep seurt. 
Ha pa c'hallfent bezañ diverket, kazus-mat ez int memes tra. 

A-wezhioù, dreist-holl pa vez ouzhpennet liammoù Web nevez war ur bajenn, e c'hallo ar wiki-mañ diskouez deoc'h ur skeudenn warni un tamm testenn liv pe a-dreuz. Goulennet e vo diganeoc'h skrivañ ar gerioù a welit. 
Un trevell start da emgefrekaat eo hemañ. Gant se e c'hallo an implijerien wirion postañ ar pezh a fell dezho tra ma vo lakaet un harz d'an darn vrasañ eus ar stroberien pe d'an dagerien robotek all. 

Koulskoude e c'hallo an implijerien berr o gweled pe ar re a implij merdeerioù diazezet war ar skrid pe war ar vouezh bezañ strafuilhet gant se. N'omp ket evit kinnig un diskoulm dre glevet evit c'hoazh. 
Kit e darempred gant [[{{MediaWiki:Grouppage-sysop}}|merourien al lec'hienn]] m'hoc'h eus diaesterioù evit kemer perzh abalamour d'an teknik-se. 

Pouezit war bouton 'kent' ho merdeer evit distreiñ d'ar bajenn gemmañ.",
	'captcha-addurl-whitelist' => " #<!-- laoskit al linenn-mañ tre evel m'emañ --> <pre>
# Setu penaos emañ an ereadur :
#  * Kement tra war-lerc'h an arouezenn \"#\" zo un urzhiad, betek penn all al linenn
#  * Kement linenn n'eo ket goullo zo ur c'hod regex a vo implijet e diabarzh al liammoù gourdskrid hepken
  #</pre> <!-- laoskit al linenn-mañ tre evel m'emañ -->",
	'right-skipcaptcha' => 'Lañsañ a ra an oberoù captcha hep bezañ rediet da dremen drezañ',
);

/** Bosnian (Bosanski)
 * @author BrokenArrow
 * @author CERminator
 */
$messages['bs'] = array(
	'captcha-edit' => 'Vaša izmjena uključuje nove URL linkove; kao zaštita od automatizovanog vandalizma, moraćete da izračunate zadatak ispod i upišete odgovor u prozor:
([[Special:Captcha/help|Šta je ovo?]]):',
	'captcha-desc' => 'Omogućava CAPTCHA tehnike za zaštitu protiv spama i probijanja šifre',
	'captcha-addurl' => 'Vaša izmjena uključuje nove URL linkove; kao zaštita od automatizovanog vandalizma, moraćete da upišete rezultat prikazane sume u okvir ([[Special:Captcha/help|Šta je ovo?]]):',
	'captcha-badlogin' => 'Da bi ste pomogli protiv automatskog probijanja šifre, molimo riješite jednostavan zadatak sabiranja ispod i unesite rezultat u kutiju ([[Special:Captcha/help|više informacija]]):',
	'captcha-createaccount' => 'Kao zaštita od automatizovanog vandalizma, moraćete da ukucate rezultat sume u okvir ispod da biste registrovali nalog:
<br />([[Special:Captcha/help|Šta je ovo?]])',
	'captcha-createaccount-fail' => 'Netačan unos ili nedostatak šifre za potvrđivanje.',
	'captcha-create' => 'Da bi ste napravili stranicu; kao zaštita od automatizovanog vandalizma, moraćete da ukucate rezultat prikazane sume u okvir ispod:
([[Special:Captcha/help|Šta je ovo?]])',
	'captcha-sendemail' => 'Da bi ste pomogli protiv automatskog stavljanja linkova, molimo riješite jednostavan zadatak sabiranja ispod i unesite rezultat u kutiju ([[Special:Captcha/help|više informacija]]):',
	'captcha-sendemail-fail' => 'Netačan unos ili nedostatak šifre za potvrđivanje.',
	'captcha-disabledinapi' => 'Ova akcija zahtjeva captchu, tako da se ne može izvršiti preko API.',
	'captchahelp-title' => 'Pomoć pri captcha',
	'captchahelp-cookies-needed' => 'Da bi ste ovo mogli raditi potrebno je da omogućite kolačiće (cookies) u Vašem pregledniku.',
	'captchahelp-text' => "Websajtovi koji podržavaju slanje sadržaja iz javnosti, kao što je ovaj viki, često zloupotrebljavaju vandali koji koriste automatizovane alate da šalju svoje linkove ka mnogim sajtovima.
Iako se ovi neželjeni linkovi mogu ukloniti, one ipak zadaju veliku muku.

Ponekad, pogotovo kad se dodaju novi internet linkovi na stranicu, wiki softver Vam može pokazati sliku obojenog i izvrnutog teksta i tražiti da ukucate traženu riječ.
Pošto je teško automatizovati ovakav zadatak, on omogućuje svim pravim ljudima da vrše svoje izmjene, ali će zato spriječiti vandale i ostale robotske napadače.

Nažalost, ovo može da bude nepovoljno za korisnike sa ograničenim vidom i za one koji koriste preglednike bazirane na tekstu ili govoru.
U ovom trenutku, audio alternativa nije dostupna.
Molimo Vas da kontaktirate [[{{MediaWiki:Grouppage-sysop}}|administratore sajta]] radi pomoći ako Vas ovo neočekivano ometa u pravljenju dobrih izmjena.

Kliknite 'nazad' ('back') dugme vašeg preglednika da se vratite na polje za unos teksta.",
	'captcha-addurl-whitelist' => ' #<!-- ostavite ovaj red onakav kakav je --> <pre>
# Sintaksa je slijedeća:
#  * Sve od znaka "#" do kraja reda je komentar
#  * Svaki neprazni red je regex fragment koji će odgovarati samo domaćinima unutar URLova
  #</pre> <!-- ostavite ovaj red onakav kakav je -->',
	'right-skipcaptcha' => 'Korištenje akcija nakon captcha bez potrebe prolaska kroz captcha proces',
);

/** Catalan (Català)
 * @author El libre
 * @author Paucabot
 * @author SMP
 * @author Ssola
 * @author Toniher
 */
$messages['ca'] = array(
	'captcha-edit' => 'Per a poder modificar aquesta pàgina cal que resolgueu aquesta simple suma i introduïu el resultat en el quadre ([[Special:Captcha/help|més informació]]):',
	'captcha-desc' => "Proporciona tècniques CAPTCHA per a protegir contra la publicitat no desitjada i l'obtenció de contrasenyes",
	'captcha-addurl' => 'La vostra modificació conté enllaços externs nous. Com a protecció contra la brossa de propaganda automàtica, cal que resolgueu aquesta simple suma i introduïu el resultat en el quadre a continuació ([[Special:Captcha/help|més informació]]):',
	'captcha-badlogin' => "Per a ajudar en la protecció contra l'obtenció automatitzada de contrasenyes haureu de resoldre la suma que apareix a continuació ([[Special:Captcha/help|més informació]]):",
	'captcha-createaccount' => "Com a protecció contra la creació automàtica de comptes d'usuari necessitem que resolgueu aquesta simple suma i introduïu el resultat en el quadre a continuació ([[Special:Captcha/help|més informació]]):",
	'captcha-createaccount-fail' => 'Manca el codi de confirmació, o bé és incorrecte.',
	'captcha-create' => 'La vostra modificació conté enllaços externs nous. Com a protecció contra la brossa de propaganda automàtica, cal que resolgueu aquesta simple suma i introduïu el resultat en el quadre a continuació ([[Special:Captcha/help|més informació]]):',
	'captcha-sendemail' => "Per tal d'ajudar-nos en la lluita contra la publicitat automatitzada, cal que solucioneu la senzilla suma que apareix a continuació, i escrigueu el resultat a la casella ([[Special:Captcha/help|més informació]]):",
	'captcha-sendemail-fail' => 'Manca el codi de confirmació, o bé és incorrecte.',
	'captcha-disabledinapi' => "Aquesta acció requereix un captcha (codi d'imatge), per la qual cosa no es pot realitzar a través de l'API.",
	'captchahelp-title' => 'Ajuda amb el sistema captcha',
	'captchahelp-cookies-needed' => "Heu d'activar les galetes al vostre navegador per a que funcioni.",
	'captchahelp-text' => "Els webs que accepten la publicació de missatges per part del seu públic, com aquest wiki, són sovint víctimes de spam per part de robots automàtics que hi posen enllaços cap als seus webs. Aquests enllaços es poden anar eliminant, però suposen un important destorb.

Quan creeu nous comptes d'usuari o afegiu enllaços a una pàgina se us demanarà que respongueu una pregunta fàcil, una suma o que teclegeu el text que apareix en una imatge distorsionada. És difícil programar un robot per aquest tipus de tasques, i gràcies a açò, es poden aturar la majoria d'atacants robots.

Malauradament, aquest sistema pot suposar un inconvenient per a usuaris amb problemes de visió o que utilitzin navegadors de text simple o de veu. Actualment no disposem de cap alternativa auditiva disponible. Contacteu els [[{{MediaWiki:Grouppage-sysop}}|administradors del web]] si aquest sistema us impedeix de fer edicions legítimes.

Necessitareu tenir les galetes (''cookies'') activades al vostre navegador per a realitzar aquestes accions.

Cliqueu el botó de retrocedir del vostre navegador per a tornar al formulari.",
	'captcha-addurl-whitelist' => " #<!-- deixeu aquesta línia tal com està --> <pre>
# La sintaxi és la següent:
#  * Totes les línies que comencen amb un # son considerades comentaris
#  * Tota línia no buida és un fragment d'expressió regular (regexp) que enllaçarà amb els hosts de les URL
  #</pre> <!-- deixeu aquesta línia tal com està -->",
	'right-skipcaptcha' => 'Fer les accions que requereixen de captcha sense haver-lo de passar',
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄) */
$messages['cdo'] = array(
	'captcha-edit' => "Nṳ̄ gă-tiĕng lāu sĭng gì nguôi-buô lièng-giék. Ôi lāu ê̤ṳ-huòng ô tiàng-sê̤ṳ cê̤ṳ-dông huák-buó bóng-só̤ séng-sék (''spam''), kī-dâe̤ng nṳ̄ gié-sáung â-dā̤ gāng-dăng gì gă-huák, gái ciŏng dák-áng siā diē gáh-gáh diē-sié ([[Special:Captcha/help|gáing sâ̤ séng-sék]]):",
	'captchahelp-title' => 'Captcha bŏng-cô',
	'captchahelp-text' => "Chiông wiki dēng kăi-huóng gì uōng-câng sèu-sèu ké̤ṳk bóng-só̤ séng-sék huák-buó-nè̤ng (\\'\\'spammer\\'\\') páh-chā: ĭ-gáuk-nè̤ng kĕk cê̤ṳ-dông-huá gì gă-sĭ táik bóng-só̤ guōng-gó̤ lièng gáu ĭ gì uōng-câng. Chŭi-iòng cī piĕ bóng-só̤ séng-sék â̤ dù lâi gì, dáng-sê iâ cêng-go̤ tō̤-iéng.

Ô sèng-hâiu, dĕk-biék sê găk nṳ̄ gă-tiĕng sĭng gì nguôi-buô lièng-giék gáu wiki gì sèng-hâiu, wiki â̤ hiēng-sê sáik-ké gáuk-iông hĕ̤k-ciā sê hìng-câung ô gāi-biéng gì ùng-cê dù-chiông, giéu nṳ̄ páh diē nṳ̄ sū káng giéng gì cê hĕ̤k sṳ� (hô̤ lō̤ \"captcha\"). Ĭng-ôi gĭ-ké-nè̤ng mâ̤ chiàng ciā êng-ô, gó-chṳ̄ cêu â̤ huòng-cī duâi-buô-hông iù gĭ-ké-nè̤ng huák-buó bóng-só̤ séng-sék (bók-guó, cĭng nè̤ng huák-buó  bóng-só̤ séng-sék, ciā huŏng-huák huòng mâ̤ lì).

Cĭng mì-hâng, dó̤i hī piĕ mĕ̤k-ciŭ mâ̤ hō̤, hĕ̤k-ciā sê sāi-ê̤ṳng gĭ-ṳ� ùng-buōng (\\'\\'text-based\\'\\') hĕ̤k gĭ-ṳ� siăng-ĭng (\\'\\'speech-based\\'\\') gì báuk-lāng-ké (\\'\\'browser\\'\\') gì ê̤ṳng-hô lì gōng, cūng-kuāng cĭng mâ̤ lê-biêng. Cī òng, nàng-gă gó mò̤ 1 cṳ̄ng gá hō̤ gì huŏng-huák. Nâ sê gōng, cuòi īng-hiōng nṳ̄ ciáng-siòng piĕng-cĭk, chiāng nṳ̄ lièng-hiê guāng-lī-uòng.

Ôi lāu captcha gì ciáng-siòng gĕ̤ng-cáuk, nṳ̄ diŏh páh kŭi báuk-lāng-ké gì cookie.

Buóh diōng kó̤ piĕng-cĭk hiĕk-miêng, áik \"diōng kó̤ sèng 1 hiĕk\" (\\'\\'back\\'\\').",
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'captcha-edit' => 'Abyste mohli editovat tuto stránku, musíte vy�ešit následující jednoduchý součet a napsat výsledek. ([[Special:Captcha/help|Co tohle znamená?]])',
	'captcha-desc' => 'Poskytuje techniky CAPTCHA pro ochranu p�ed spamem a hádáním hesel',
	'captcha-addurl' => 'Vaše editace obsahuje nové externí odkazy.
V zájmu ochrany p�ed automatickým spamováním vy�ešte následující jednoduchý součet a napište výsledek. ([[Special:Captcha/help|Co tohle znamená?]])',
	'captcha-badlogin' => 'V zájmu ochrany proti automatickým pokusům uhodnout heslo musíte vy�ešit následující jednoduchý součet a napsat výsledek. ([[Special:Captcha/help|Co tohle znamená?]]):',
	'captcha-createaccount' => 'V rámci ochrany p�ed automatickým vytvá�ením účtů musíte pro provedení registrace vy�ešit následující jednoduchý součet a napsat výsledek. ([[Special:Captcha/help|Co tohle znamená?]])',
	'captcha-createaccount-fail' => 'Chybějící či neplatný potvrzovací kód.',
	'captcha-create' => 'Abyste mohli založit stránku, musíte vy�ešit následující jednoduchý součet a napsat výsledek. ([[Special:Captcha/help|Co tohle znamená?]])',
	'captcha-sendemail' => 'V rámci ochrany proti automatickému spamování musíte vy�ešit jednoduchý součet a napsat výsledek ([[Special:Captcha/help|více informací]]):',
	'captcha-sendemail-fail' => 'Chybějící či neplatný potvrzovací kód.',
	'captcha-disabledinapi' => 'Tato operace vyžaduje splnění CAPTCHA, takže ji nelze provést prost�ednictvím API.',
	'captchahelp-title' => 'Nápověda ke captcha',
	'captchahelp-cookies-needed' => 'Aby to fungovalo, musíte mít ve svém prohlížeči zapnuty cookies.',
	'captchahelp-text' => 'Webové stránky, do kterých mohou p�ispívat jejich návštěvníci (jako nap�íklad tato wiki), jsou často terčem spammerů, kte�í pomocí automatických nástrojů vkládají své odkazy na velké množství stránek. P�estože lze tento spam odstranit, p�edstavuje nep�íjemné obtěžování.

Někdy, zvláště p�i p�idávání nových webových odkazů, vám může wiki ukázat obrázek barevného či pokrouceného textu a požádat vás o opsání zobrazených znaků. Jelikož takovou úlohu lze jen těžko automatizovat, skuteční lidé mohou dále p�ispívat, zatímco většinu spammerů a jiných robotických útočníků to zastaví.

Bohužel to však může p�edstavovat nep�íjemný problém pro uživatele se zrakovým postižením či uživatele používající textové prohlížeče či hlasové čtečky. V současné době nemáme alternativní zvukovou verzi. Kontaktujte laskavě [[{{MediaWiki:Grouppage-sysop}}|správce serveru]], pokud vám to brání v užitečných p�íspěvcích a pot�ebujete pomoc.

Pro návrat na p�edchozí stránku stiskněte ve svém prohlížeči tlačítko �zpět�.',
	'captcha-addurl-whitelist' => ' #<!-- Nechte tento �ádek p�esně tak jak je --> <pre>
# Syntaxe je následující:
#  * Všechno od znaku �#� do konce �ádku je komentá�
#  * Každý neprázdný �ádek je fragment regulárního výrazu, který se aplikuje pouze na název stroje v URL
 #</pre> <!-- Nechte tento �ádek p�esně tak jak je -->',
	'right-skipcaptcha' => 'Vykonávání akcí spojených s CAPTCHA bez nutnosti jejího �ešení',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'captcha-edit' => "Er mwyn gallu golygu'r dudalen, gwnewch y swm isod a gosodwch y canlyniad yn y blwch ([[Special:Captcha/help|rhagor o wybodaeth]]):",
	'captcha-desc' => 'Yn gweithredu technegau CAPTCHA i arbed rhag sbam a dyfalu cyfrineiriau',
	'captcha-addurl' => 'Mae eich golygiad yn cynnwys cysylltiadau URL newydd. Er mwyn profi nad ydych yn beiriant sbam, byddwch gystal â theipio cyfanswm y swm canlynol yn y blwch isod ([[Special:Captcha/help|mwy o wybodaeth]]):',
	'captcha-badlogin' => 'Er mwyn ceisio rhwystro peiriannau datrys cyfrineiriau, byddwch gystal â gwneud y swm isod a gosod yr ateb yn y blwch ([[Special:Captcha/help|rhagor o wybodaeth]]):',
	'captcha-createaccount' => "Teipiwch cyfanswm y swm canlynol yn y blwch isod, os gwelwch yn dda. Mae'r nodwedd hon yn rhwystro rhaglenni sbam rhag creu cyfrifon i'w hunain ([[Special:Captcha/help|Mwy o wybodaeth]]):",
	'captcha-createaccount-fail' => "Côd cadarnhau ar goll neu'n anghywir.",
	'captcha-create' => "Er mwyn gallu creu'r dudalen, gwnewch y swm isod a gosodwch y canlyniad yn y blwch ([[Special:Captcha/help|rhagor o wybodaeth]]):",
	'captcha-sendemail' => 'Er mwyn cyfrannu at ddiogelu rhag sbamio awtomatig, byddwch gystal â gwneud y swm syml isod ac ysgrifennwch yr ateb yn y blwch ([[Special:Captcha/help|rhagor o wybodaeth]]):',
	'captcha-sendemail-fail' => 'Y cod cadarnhau yn anghywir neu yn eisiau.',
	'captcha-disabledinapi' => 'Mae angen "captcha" i gyflawni\'r weithred hon, felly nid oes modd ei gyflawni trwy\'r API.',
	'captchahelp-title' => 'Cymorth "captcha"',
	'captchahelp-cookies-needed' => "Er mwyn i hyn weithio mae'n rhaid bod cookies wedi eu galluogi ar eich gwe-lywiwr.",
	'captchahelp-text' => "Yn anffodus, mae safleoedd gwe fel y wici hon, sy'n caniatau i'r cyhoedd ysgrifennu iddi, yn darged beunyddiol i sbamwyr sy'n defnyddio rhaglenni arbennig i bostio eu cysylltiadau ar wefannau lu. Gellir dileu'r dolenni o'r tudalennau, ond byddai hynny'n waith trafferthus.

O dro i dro, yn enwedig wrth ychwanegu dolenni at safleoedd gwe eraill, fe fydd y safle hon yn dangos delwedd o destun, ac fe fydd yn rhaid i chi deipio'r geiriau a ddangosir. Mae hyn yn dasg anodd iawn i raglenni cyfrifiadurol, felly dylai'r rhan fwyaf o olygwyr go iawn gyflawni'r dasg yn ddi-drafferth, yn wahanol i'r rhaglenni sbam.

Yn anffodus, mae hyn yn creu trafferthion i'r rhai sydd yn defnyddio porwyr testun neu borwyr sain, neu sydd yn colli eu golwg.
Ar hyn o bryd nid oes fersiwn sain ar gael.
Cysylltwch â [[{{MediaWiki:Grouppage-sysop}}|gweinyddwyr y safle]] os ydi'r nodwedd hon yn eich rhwystro rhag ychwanegu golygiadau dilys.

Gwasgwch botwm 'nôl' eich porwr er mwyn dychwelyd at y dudalen golygu.",
	'captcha-addurl-whitelist' => '#<!-- leave this line exactly as it is --> <pre>
#
# Dyma\'r gystrawen:
#   * Mae popeth o nod "#" hyd at ddiwedd y llinell yn sylwad
#   * Mae pob llinell nad yw\'n wag yn ddarn regex sydd ddim ond yn cydweddu
#   * gwesteiwyr tu mewn i gyfeiriadau URL

 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => "Gwneud rhyw weithred, sy'n arfer deffro meddalwedd y captcha, heb ei ddeffro.",
);

/** Danish (Dansk)
 * @author Aputtu
 * @author Byrial
 * @author Peter Alberti
 */
$messages['da'] = array(
	'captcha-edit' => 'For at redigere denne side, skal du give svaret på regnestykket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-desc' => 'Giver CAPTCHA-teknikker til at beskytte mod spam og gætning af adgangskoder',
	'captcha-addurl' => 'Din redigering tilføjer nye eksterne henvisninger til artiklen. Som beskyttelse mod automatiseret spam, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-badlogin' => 'For at beskytte mod automatiserede gæt på kodeord, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-createaccount' => 'For at beskytte mod automatisk oprettelse af brugernavne, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-createaccount-fail' => 'Forkert eller manglende kodeord.',
	'captcha-create' => 'For at oprette en ny side, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-sendemail' => 'For at beskytte mod automatisk oprettelse af brugernavne, så bedes du venligst svare på regnestykket nedenfor og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-sendemail-fail' => 'Forkert eller manglende bekræftelseskode.',
	'captcha-disabledinapi' => "Denne handling kræver en captcha, så det ikke kan udføres via API'en.",
	'captchahelp-title' => 'Captcha-hjælp',
	'captchahelp-cookies-needed' => 'Din browser skal understøtte cookies, før dette kan gennemføres.',
	'captchahelp-text' => "Websites der accepterer indhold fra offentligheden, bliver ofte udsat for angreb fra spammere. Disse angreb sker med automatiske værktøjer, der anbringer de samme links på et stort antal websites på kort tid. Selvom disse links kan fjernes, er de en vedligeholdelsesmæssig byrde.

I visse tilfælde, specielt når der tilføjes nye links til denne wiki, vil softwaren vise dig et billede af et stykke forvredet og sløret tekst. Du skal indtaste det ord, der vises, før du kan gennemføre handlingen. Formålet er at skelne mellem mennesker og automatiserede værktøjer, da de sidste har meget svært ved at genkende ordene.

Desværre kan dette medføre problemer for svagtseende brugere, og brugere der bruger software der oplæser indholdet af siden. For øjeblikket findes der ikke et lydbaseret alternativ. Kontakt venligst en [[{{MediaWiki:Grouppage-sysop}}|administrator]] med henblik på at få hjælp, hvis dette forhindrer tilføjelsen af godartet materiale.

Tryk på 'tilbage'-knappen i din browser for at returnere til redigeringssiden.",
	'captcha-addurl-whitelist' => ' #<!-- Undlad at rette denne linie --> <pre>
# Vejledning:
#   * Alt fra et "#"-tegn til slutningen af en linie er en kommentar
#   * Alle ikke-blanke linier benyttes som regulært udtryk, der anvendes på hostnavne i URLer
 #</pre> <!-- Undlad at rette denne linie -->',
	'right-skipcaptcha' => 'Udføre handlinger som normalt kræver "captcha"-bekræftelse uden at bruge "captcha"',
);

/** German (Deutsch)
 * @author Imre
 * @author Kghbln
 * @author Metalhead64
 * @author MichaelFrey
 * @author Raimond Spekking
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'captcha-edit' => 'Zur Bearbeitung der Seite löse die nachfolgende Rechenaufgabe und trage das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-desc' => 'Ermöglicht verschiedene CAPTCHA-Techniken zum Schutz vor Spam und dem Erraten von Passwörtern',
	'captcha-addurl' => 'Deine Bearbeitung enthält neue externe Links.
Zum Schutz vor automatisiertem Spamming löse die nachfolgende Rechenaufgabe und trage das Ergebnis in das Feld unten ein. Klicke dann erneut auf �Seite speichern� [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-badlogin' => 'Zum Schutz vor einer Kompromittierung deines Benutzerkontos löse die nachfolgende Rechenaufgabe und trage das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]]:',
	'captcha-createaccount' => 'Zum Schutz vor automatisierter Anlage von Benutzerkonten löse die nachfolgende Rechenaufgabe und trage das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-createaccount-fail' => 'Falscher oder fehlender Bestätigungscode.',
	'captcha-create' => 'Zur Erstellung der Seite löse die nachfolgende Rechenaufgabe und trage das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-sendemail' => 'Um gegen automatischen Spam vorzugehen, löse bitte die einfache Rechenaufgabe und gib die Antwort unten in das Feld ein ([[Special:Captcha/help|mehr Informationen]]):',
	'captcha-sendemail-fail' => 'Falscher oder fehlender Bestätigungscode.',
	'captcha-disabledinapi' => 'Diese Aktion benötigt ein CAPTCHA. Sie kann nicht über die API ausgeführt werden.',
	'captchahelp-title' => 'CAPTCHA-Hilfe',
	'captchahelp-cookies-needed' => "'''Wichtiger Hinweis:''' Es müssen Cookies im Browser erlaubt sein.",
	'captchahelp-text' => 'Internetangebote, die für Beiträge von praktisch jedem offen sind � so wie dieses Wiki � werden oft von Spammern missbraucht, die ihre Links automatisch auf vielen Webseiten platzieren. Diese Spam-Links können wieder entfernt werden, sie sind aber ein erhebliches Ärgernis.

In manchen Fällen, insbesondere beim Hinzufügen von neuen Weblinks zu einer Seite, kann es vorkommen, dass dieses Wiki ein Bild mit einem farbigen und verzerrten Text anzeigt und dazu auffordert, die angezeigten Wörter einzutippen.
Da eine solche Aufgabe nur schwer automatisch erledigt werden kann, werden dadurch die meisten Spammer, die mit automatischen Werkzeugen arbeiten, gestoppt, wogegen menschliche Benutzer ihren Beitrag absenden können.

Leider kann dies zu Schwierigkeiten für Personen führen, die über eine eingeschränkte Sehfähigkeit verfügen oder text- oder sprachbasierte Browser verwenden. Aktuell sind keine Audio-CAPTCHAs verfügbar.

Bitte kontaktiere einen [[{{MediaWiki:Grouppage-sysop}}|Administratoren]] für weitere Hilfe, wenn dies es unmöglich macht, erwünschte Bearbeitungen vorzunehmen.

Der �Zurück�-Knopf des Browsers führt zurück zum Bearbeitungsfenster.',
	'captcha-addurl-whitelist' => ' #<!-- Diese Zeile darf nicht verändert werden! --> <pre>
#  Syntax:
#   * Alles von einem #-Zeichen bis zum Ende der Zeile ist ein Kommentar
#   * Jede nicht-leere Zeile ist ein Regex-Fragment, das gegenüber den Hostnamen einer URL geprüft wird
 #</pre> <!-- Diese Zeile darf nicht verändert werden! -->',
	'right-skipcaptcha' => 'Überspringen der CAPTCHA-Eingabe',
);

/** German (formal address) (�Deutsch (Sie-Form)�)
 * @author Imre
 * @author Raimond Spekking
 * @author The Evil IP address
 */
$messages['de-formal'] = array(
	'captcha-edit' => 'Zur Bearbeitung der Seite lösen Sie die nachfolgende Rechenaufgabe und tragen Sie das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-addurl' => 'Ihre Bearbeitung enthält neue externe Links.
Zum Schutz vor automatisiertem Spamming lösen Sie die nachfolgende Rechenaufgabe und tragen Sie das Ergebnis in das Feld unten ein.
Klicken Sie dann erneut auf �Seite speichern� [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-badlogin' => 'Zum Schutz vor einer Kompromittierung Ihres Benutzerkontos lösen Sie die nachfolgende Rechenaufgabe und tragen Sie das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]]:',
	'captcha-createaccount' => 'Zum Schutz vor automatisierter Anlage von Benutzerkonten lösen Sie die nachfolgende Rechenaufgabe und tragen Sie das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-create' => 'Zur Erstellung der Seite lösen Sie die nachfolgende Rechenaufgabe und tragen Sie das Ergebnis in das Feld unten ein [[Special:Captcha/help|(Fragen oder Probleme?)]].',
	'captcha-sendemail' => 'Um gegen automatischen Spam vorzugehen, lösen Sie bitte die einfache Rechenaufgabe und geben Sie die Antwort unten in das Feld ein ([[Special:Captcha/help|mehr Informationen]]):',
	'captchahelp-text' => 'Internetangebote, die für Beiträge von praktisch jedem offen sind � so wie dieses Wiki � werden oft von Spammern missbraucht, die ihre Links automatisch auf vielen Webseiten platzieren. Diese Spam-Links können wieder entfernt werden, sie sind aber ein erhebliches Ärgernis.

In manchen Fällen, insbesondere beim Hinzufügen von neuen Weblinks zu einer Seite, kann es vorkommen, dass dieses Wiki ein Bild mit einem farbigen und verzerrten Text anzeigt und dazu auffordert, die angezeigten Wörter einzutippen.
Da eine solche Aufgabe nur schwer automatisch erledigt werden kann, werden dadurch die meisten Spammer, die mit automatischen Werkzeugen arbeiten, gestoppt, wogegen menschliche Benutzer ihren Beitrag absenden können.

Leider kann dies zu Schwierigkeiten für Personen führen, die über eine eingeschränkte Sehfähigkeit verfügen oder text- oder sprachbasierte Browser verwenden. Aktuell sind keine Audio-Captchas verfügbar.

Bitte kontaktieren Sie einen [[{{MediaWiki:Grouppage-sysop}}|Administratoren]] für weitere Hilfe, wenn dies es unmöglich macht, erwünschte Bearbeitungen vorzunehmen.

Der �Zurück�-Knopf des Browsers führt zurück zum Bearbeitungsfenster.',
);

/** Zazaki (Zazaki)
 * @author Aspar
 * @author Xoser
 */
$messages['diq'] = array(
	'captcha-edit' => 'Qe ena pel vurnayîşî, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse ([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-desc' => 'Implementasyonê captacha yê asanî',
	'captcha-addurl' => 'Vurnayîşanê tu de linkanê harîcîyê newe esto.
Qe otomatik spamî ra pawitîş, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse ([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-badlogin' => 'Qe otomatik parola crack kerdişî ra pawitîş, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse ([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-createaccount' => 'Qe otomatik hesab viraştişî ra pawitîş, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse ([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-createaccount-fail' => 'Kodê testiqî vin biyo ya zi raşt niyo.',
	'captcha-create' => 'Qe pel viraştîşî, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse ([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-sendemail' => 'Qe otomatik spam ra pawitîşi, ma rica keno cewabê problemî qutiyê ke cor de zerre ey ra binuse 
([[Special:Captcha/help|enformasyonê bînî]]):',
	'captcha-sendemail-fail' => 'Kodê testiqî vin biyo ya zi raşt niyo.',
	'captcha-disabledinapi' => 'Ena hereket de captcha lazim o, aye ra ser API ra ena hereket nibena.',
	'captchahelp-title' => 'Yardimê captchayî',
	'captchahelp-cookies-needed' => 'Eka şıma wazeno bıkewê pela Wikipedia, programê internetê şıma de cookiesi gani aktiv bê.',
	'captchahelp-text' => "Siteyan ke kamu ra aleknayişê îlanî ra destur dano, ze ena wiki, spam kerdogan ke xacetane otomatiki ser kar keno inan ra atak beno.
Ma eşkeno linkane inan wedarno, feqat hewna inan problem zeman ma geno. 

Mavaci, key ti yew pele de linkane newi darneno, wiki belki ti ra yew resim mucneno u ti ra wazeno cekuyan ke resimda inan binusi. 
Eka ena process otomatik nibeno, ena process otomatik spam kerogan vinderneno feqay sexsi spam kerdogan nieşkeno vindaro.

Ma ef bikeri ena process belki ti ra zehmeti. belki cim tu ra şcekuyan hewl niesno. 
Nika ma da sistemê vengî cinoke ti ra vaci resim da kamci cekuyan esto. 
Ma rica keno ti yew [[{{MediaWiki:Grouppage-sysop}}|idarekar]] ra yew mesaj bişavî u o ra yardim bivaci eka ti yew linkê hewlî darnone.

Browser xo de goceke 'back' rê klik bike şo pela editorî.",
	'captcha-addurl-whitelist' => '  #<!-- leave this line exactly as it is --> <pre>
#Sîntaks ze ena yo: 
#  * Nişanê "#" ra nişanê ke bînê xetî de pêran piya xulasa yo
#  * Her xetî ke veng niyo fragmento regex u teyna URLan de hostan match keno
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Herekatanê captcha trigger perform bike ke ti ser captcha meşo',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'captcha-edit' => 'Aby wobźěłował toś ten bok, rozwěž pšosym slědujucy jadnory liceński nadawk a zapódaj wuslědk do kašćika ([[Special:Captcha/help|Dalšne info]]):',
	'captcha-desc' => 'Staja techniki CAPTCHA za šćit pśeśiwo spamoju a wugódanjoju gronidłow k dispoziciji',
	'captcha-addurl' => 'Twója změna wopśimujo nowe eksterne wótkaze.
Za šćit pśeśiwo zawtomatizěrowanemu spamoju, rozwěž pšosym slědujucy jadnory liceński nadawk a zapódaj wuslědk do kašćika ([[Special:Captcha/help|dalšne info]]):',
	'captcha-badlogin' => 'Za šćit pśeśiwo zawtomatizěrowanemu wuzgónjowanjeju gronidła, rozwěž pšosym slědujucy jadnory liceński nadawk a zapódaj wuslědk do kašćika ([[Special:Captcha/help|dalšne info]]):',
	'captcha-createaccount' => 'Za šćit pśeśiwo zawtomatizěrowanemu załoženjeju kontow, rozwěž pšosym slědujucy jadnory liceński nadawk a zapódaj wuslědk do kašćika ([[Special:Captcha/help|dalšne info]]):',
	'captcha-createaccount-fail' => 'Wopacny abo felujucy wobkšuśeński kod.',
	'captcha-create' => 'Aby napórał bok, rozwěž pšosym slědujucy jadnory liceński nadawk a zapódaj wuslědk do kašćika ([[Special:Captcha/help|dalšne info]]):',
	'captcha-sendemail' => 'Za šćit pśeśiwo awtomatiskemu spamowanjeju, rozwěž pšosym jadnory liceński nadawk a zapódaj wótegrono do kašćika ([[Special:Captcha/help|dalšne informacije]]):',
	'captcha-sendemail-fail' => 'Wopacny abo felujucy wobkšuśeński kod.',
	'captcha-disabledinapi' => 'Toś ta akcija pomina se captcha, togodla njedajo se pśez API wuwjasć.',
	'captchahelp-title' => 'Pomoc wó captcha',
	'captchahelp-cookies-needed' => 'Aby to funkcioněrowało, muse cookieje dowólone byś.',
	'captchahelp-text' => 'Websedła, kótarež akceptěruju zjawne pśinoski, ako toś ten wiki, znjewužywaju se cesto wót spamowarjow, kótarež wužywaju zawtomatizěrowane rědy, aby słali swóje wótkaze na wjele sedłow.
Lěcrownož toś te spamowe wótkaze daju se wótpóraś, su wóne bejna pógóršota.

Wótergi, wósebnje, gaž se nowe wótkaze pśidawaju bokoju, jo móžno, až wiki śi pokazujo wobraz barwojtego abo spryšćonego teksta a pšosy śe, aby zapódał zwobraznjone słowa.
Dokulaž to jo nadawk, kótaryž dajo se śěžko awtomatizěrowaś, dówolujo to napšawdnym luźam jich pśinoski wótpósłaś, nejwěcej spamowarjow a robotowe ataki pak se zaźaržyju.

Bóžko to móžo kazyś wužywarjow z wobgraniwoneju zamóžnosću wiźenja pśi wužywanju wobglědowakow, kótarež bazěruju na teksće abo rěcnem wudaśu.
Tuchylu njamamy awdioalternatiwu.
Staj se pšosym z [[{{MediaWiki:Grouppage-sysop}}|administratorami sedła]] z pšosbu wó pomoc do zwiska, jolic to śi njewócakane  zawobarujo słanje legitimnych pśinoskow.

Klikni na tłocašk "Slědk" we swójom wobglědowaku, aby wróśił k bokowemu editoroju.',
	'captcha-addurl-whitelist' => ' #<!-- wóstaj toś tu smužku rowno ako jo --> <pre>
 # Syntaksa jo ako slědujo:
 #  * Wšykno wót znamuška "#" ku kóńcoju smužki jo komentar
 #  * Kužda smužka, kótaraž njejo prozna, jo fragment regularnego wuraza, kótaryž nastupa jano hostam w URL
  #</pre> <!-- wóstaj toś tu smužku rowno ako jo -->',
	'right-skipcaptcha' => 'Akcije wugbaś, kótarež zapušćiju captcha, mimo až se nadawk captcha rozwěžo.',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'captcha-edit' => 'Ne enye wò didi bena yea ɖɔ axa sia ɖo la, mía ve nuwò be na bu akɔnta si le nuŋɔŋlɔ sia gɔme, eye na ŋlɔ nusi wòkpɔ ɖe go sia me ([[Special:Captcha/help|gbeƒãɖeɖe]]):',
);

/** Greek (Ελληνικά)
 * @author Badseed
 * @author Consta
 * @author Dada
 * @author Geraki
 * @author Glavkos
 * @author Kiriakos
 * @author Omnipaedista
 * @author ZaDiak
 * @author Περίεργος
 */
$messages['el'] = array(
	'captcha-edit' => 'Για να ε�εξεργαστείτε αυτή την σελίδα, �αρακαλούμε λύστε την �αρακάτω �ρόσθεση και α�αντήστε στο �λαίσιο ([[Special:Captcha/help|�ληροφορίες]]):',
	'captcha-desc' => 'Παρέχει τεχνικές CAPTCHA για την �ροστασία α�ό spam και �ροσ�άθειες σ�ασίματος  κωδικών �ρόσβασης',
	'captcha-addurl' => 'Η ε�εξεργασία σας �εριλαμβάνει νέους εξωτερικούς συνδέσμους. Για λόγους �ροστασίας κατά αυτοματο�οιημένου spam, �αρακαλούμε λύστε την �αρακάτω �ρόσθεση και α�αντήστε στο �λαίσιο ([[Special:Captcha/help|�ληροφορίες]]):',
	'captcha-badlogin' => 'Για να βοηθήσετε στην �ροστασία ενάντια στον "σ�ασμένο" κωδικό �ρόσβασης, �αρακαλώ λύστε αυτή την α�λή �ράξη και εισάγετε το α�οτέλεσμα της στο �αρακάτω κενό ([[Special:Captcha/help|�ερισσότερες �ληροφορίες]]):',
	'captcha-createaccount' => 'Για να βοηθήσετε στην �ροστασία ενάντια στην αυτοματο�οιημένη δημιουργία λογαριασμού, �αρακαλώ λύστε την α�λή �ράξη
και εισάγετε την λύση της στο �αρακάτω κενό
([[Special:Captcha/help|�ερισσότερες �ληροφορίες]]):',
	'captcha-createaccount-fail' => 'Λάθος ή αγνοούμενος κωδικός ολοκλήρωσης.',
	'captcha-create' => 'Για να δημιουργήσετε την σελίδα, �αρακαλούμε λύστε την �αρακάτω �ρόσθεση και α�αντήστε στο �λαίσιο ([[Special:Captcha/help|�ληροφορίες]]):',
	'captcha-sendemail' => 'Για να βοηθήσετε στην α�οφυγή αυτοματο�οιημένων spam, �αρακαλούμε να λύσετε την �αρακάτω α�λή �ράξη και να εισάγετε την α�άντηση στο �εδίο ([[Special:Captcha/help|�ερισσότερες �ληροφορίες]]):',
	'captcha-sendemail-fail' => 'Ελλι�ής ή λανθασμένος κωδικός ε�ιβεβαίωσης.',
	'captcha-disabledinapi' => 'Η ενέργεια αυτή α�αιτεί ε�αλήθευση λεκτικού κειμένου και για αυτό δεν μ�ορεί να γίνει μέσω του API.',
	'captchahelp-title' => 'Βοήθεια για το Captcha',
	'captchahelp-cookies-needed' => 'Θα �ρέ�ει να έχετε τα cookies ενεργο�οιημένα στον φυλλομετρητή σας για να εκτελεστεί η λειτουργία.',
	'captchahelp-text' => "Οι ιστοσελίδες �ου δέχονται τις ε�εξεργασίες α�ό το κοινό, ό�ως αυτό το wiki, δεν χρησιμο�οιούνται συχνά σωστά α�ό τους spammers �ου χρησιμο�οιούν τα αυτοματο�οιημένα εργαλεία για να α�οστείλουν τις συνδέσεις τους με �ολλές σελίδες. Αυτές οι spam συνδέσεις  μ�ορούν να αφαιρεθούν, ε�ειδή είναι σημαντικά ενοχλητικές.

Μερικές φορές, ειδικά κατά την �ροσθήκη νέων συνδέσμων σε μια σελίδα, το wiki μ�ορεί να σας �αρουσιάσει μια εικόνα με ένα χρωματισμένο ή διαστρεβλωμένο κείμενο και να σας ζητήσει να �ληκτρολογήσετε τις λέξεις �ου �αρουσιάζονται. Δεδομένου ότι αυτό είναι ένας στόχος �ου είναι δύσκολο να αυτοματο�οιηθεί, θα ε�ιτρέψει στους �ερισσότερους χρήστες να κάνουν τις ε�εξεργασίες τους, σταματώντας τους spammers και άλλους ρομ�οτικά ε�ιτιθέμενους.

Δυστυχώς αυτό μ�ορεί να ενοχλήσει τους χρήστες �εριορίζοντας το όραμα τους ή αυτούς �ου βασίζονται στο κείμενο ή στην ομιλία �ου βασίζεται στις μηχανές αναζήτησης. Προς το �αρόν δεν έχουμε μια διαθέσιμη εναλλακτική λύση. Παρακαλώ ελάτε σε ε�αφή με τους [[{{MediaWiki:Grouppage-sysop}}|διαχειριστές]] των σελίδων για βοήθεια, εάν αυτό σας α�οτρέ�ει α�ροσδόκητα α�ό την �αραγωγή των νόμιμων ε�εξεργασιών.

Πατήστε το κουμ�ί '�ίσω' στη μηχανή αναζήτησης σας για να ε�ιστρέψετε στο συντάκτη σελίδων.",
	'captcha-addurl-whitelist' => '  #<!-- αφήστε αυτή την γραμμή ακριβώς ό�ως είναι --> <pre>
# Η σύνταξη είναι ό�ως �αρακάτω:
#  * Οτιδή�οτε α�ό ένα χαρακτήρα "#" ως το τέλος της γραμμής είναι ένα σχόλιο
#  * Κάθε μη κενή γραμμή είναι μια έκφραση regex �ου θα ταιριάζει μόνο hosts μέσα σε URL
  #</pre> <!-- αφήστε αυτή την γραμμή ακριβώς ό�ως είναι -->',
	'right-skipcaptcha' => 'Πραγματο�οίηση ενεργειών �ου ενεργο�οιούν captcha χωρίς να χρειάζεται �έρασμα α�ό το captcha',
);

/** Canadian English (Canadian English)
 * @author Techman224
 */
$messages['en-ca'] = array(
	'captchahelp-text' => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites.
While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of coloured or distorted text and ask you to type the words shown.
Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers.
At the moment we do not have an audio alternative available.
Please contact the  [[{{MediaWiki:Grouppage-sysop}}|site administrators]] for assistance if this is unexpectedly preventing you from making legitimate posts.

Hit the 'back' button in your browser to return to the page editor.",
);

/** British English (British English)
 * @author Lcawte
 */
$messages['en-gb'] = array(
	'captchahelp-text' => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites.
While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of coloured or distorted text and ask you to type the words shown.
Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers.
At the moment we do not have an audio alternative available.
Please contact the  [[{{MediaWiki:Grouppage-sysop}}|site administrators]] for assistance if this is unexpectedly preventing you from making legitimate posts.

Hit the 'back' button in your browser to return to the page editor.",
);

/** Esperanto (Esperanto)
 * @author Castelobranco
 * @author Petrus Adamus
 * @author Yekrats
 */
$messages['eo'] = array(
	'captcha-edit' => 'Por redakti ĉi tiun paĝon, bonvolu solvi la simplan sumon jenan kaj enigi la respondon en la skatolo ([[Special:Captcha/help|plua informo]]):',
	'captcha-desc' => 'Disponigas ilojn de Captcha por kontraŭigi spamaĵojn kaj pasvorto-divenadon',
	'captcha-addurl' => 'Via redakto entenas novajn eksterajn ligilojn.
Por malhelpi aŭtomatan spamadon, bonvolu solvi la simplan problemon sube kaj entajpu la respondon en la kesto ([[Special:Captcha/help|pli da informo]]):',
	'captcha-badlogin' => 'Helpi protekti kontraŭ aŭtomata divenado de pasvortoj, bonvolu solvi la simplan sumon kaj enigi la respondon en la skatolo ([[Special:Captcha/help|plua informo]]):',
	'captcha-createaccount' => 'Helpi protekti kontraŭ aŭtomata konto-kreado, bonvolu solvi la simplan sumon suben
kaj enigi la respondon en la skatolo ([[Special:Captcha/help|plua informo]]):',
	'captcha-createaccount-fail' => 'Malĝusta aŭ mankanta konfirma kodo.',
	'captcha-create' => 'Por krei la paĝon, bonvolu solvi la simplan sumon jenan kaj enigi la respondon en la skatolo ([[Special:Captcha/help|plua informo]]):',
	'captcha-sendemail' => 'Por helpi protekti kontraŭ aŭtomata spamado, bonvolu solvi la simplan sumon kaj enigi la respondon en la skatolo ([[Special:Captcha/help|plua informo]]):',
	'captcha-sendemail-fail' => 'Malĝusta aŭ mankanta konfirma kodo.',
	'captcha-disabledinapi' => 'Ĉi tiu ago bezonas captcha, tial ĝi ne estas farebla per API.',
	'captchahelp-title' => 'Helpo pri captcha',
	'captchahelp-cookies-needed' => 'Vi devas permesi kuketojn en via retumilo por funkciigi ĉi tion.',
	'captchahelp-text' => "Retejoj kiuj akcepti informon de publiko, kiel ĉi tiu vikio, estas ofte misuzitaj de spamistoj kiu uzas aŭtomatajn ilojn por afiŝi ligilojn al multaj retejoj.
Kvankam ĉi tiu spam-ligiloj estas forigeblaj, ili estas granda ĝeno.

Iufoje, ja kiam aldonante novajn retligilojn al paĝo, la vikio eble montros al vi bildon de bunta aŭ misformita teksto, kaj petos al vi tajpi la vortojn montratajn.
Tial ĉi tiu tasko estas malfacila por fari aŭtomate, ebligos al realaj homoj fari aldonaĵojn, kaj malebligos spamistojn kaj aliajn robotajn atakilojn.

Bedaŭrinde, ĉi tio eble ĝenetos uzantojn kun malbona vidkapablo kiu utiligas tekstajn aŭ voĉajn retumilojn.
Ĉi-momente, neniu aŭda alternativo estas havebla.
Bonvolu kontakti la [[{{MediaWiki:Grouppage-sysop}}|administrantojn de la retejo]] por helpo se ĉi tio malebligas al vi fari bonan aldonon.

Klaku la 'reiru' butonon en via retumilo por reiri al la paĝo-redaktilo.",
	'captcha-addurl-whitelist' => ' #<!-- ne ŝanĝu ĉi tiun linion iel ajn --> <pre>
# Sintakso estas jen:
#  * Ĉio ekde "#" signo al la fino de linio estas komento
#  * Ĉiu linio ne malplena estas ero de regex kiu kongruos retnodojn nur ene de ttt-adresoj
  #</pre> <!-- ne ŝanĝu ĉi tiun linion iel ajn -->',
	'right-skipcaptcha' => "Faru ''captcha''-spronantaj agoj sen farante la ''captcha''-on",
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Drini
 * @author Icvav
 * @author Jatrobat
 * @author Lin linao
 * @author Locos epraix
 * @author Muro de Aguas
 * @author Pertile
 * @author Sanbec
 */
$messages['es'] = array(
	'captcha-edit' => 'Para editar este artículo, por favor resuelve la sencilla suma que aparece abajo e introduce la solución en la caja ([[Special:Captcha/help|más información]]):',
	'captcha-desc' => 'Provee técnicas CAPTCHA para proteger contra spam y adivinación de contraseña.',
	'captcha-addurl' => 'Tu edición incluye nuevos enlaces externos.
Para ayudar a proteger contra el spam automatizado, por favor resuelve la sencilla suma de abajo e introduce la respuesta en la caja ([[Special:Captcha/help|más información]]):',
	'captcha-badlogin' => 'Para ayudar a protegernos de la creación automática de cuentas, por favor resuelve la simple suma de abajo e introduce la respuesta en la caja ([[Special:Captcha/help|más información]]):',
	'captcha-createaccount' => 'Para ayudar a protegernos de la creación automática de cuentas, por favor resuelve la simple suma de abajo e introduce la respuesta en la caja ([[Special:Captcha/help|más información]]):',
	'captcha-createaccount-fail' => 'Falta el código de confirmación, o éste es incorrecto.',
	'captcha-create' => 'Para crear la página, por favor resuelve la simple suma de abajo e introduce la respuesta en la caja ([[Special:Captcha/help|más información]]):',
	'captcha-sendemail' => 'Para protegernos contra el spam automatizado, por favor resuelva la suma simple que se presenta a continuación e ingrese la respuesta en el cuadro de texto ([[Special:Captcha/help|más información]]):',
	'captcha-sendemail-fail' => 'El código de confirmación falta o es incorrecto.',
	'captcha-disabledinapi' => 'Esta acción requiere un captcha, así que no puede ser ejecutada a través de un API.',
	'captchahelp-title' => 'Ayuda sobre el captcha',
	'captchahelp-cookies-needed' => 'Debe tener las cookies activadas en el navegador para que el sistema funcione.',
	'captchahelp-text' => "Los sitios web que aceptan mensajes del público, como esta wiki, son a menudo objeto de abusos  por spammers que utilizan programas para incluir automáticamente sus enlaces. Si bien estos enlaces pueden quitarse, son una gran molestia.

En ocasiones, especialmente cuando añada nuevos enlaces a una página, la wiki le mostrará una imagen de texto coloreado o distorsionado y le pedirá que escriba las palabras que muestra. Dado que esta es una tarea difícil de automatizar, permite a la mayoría de las personas enviar sus textos, a la vez que detiene a la mayoría de los spammers y otros atacantes automáticos.

Desafortunadamente esto puede ser un inconveniente para usuarios con visión limitada o para navegadores basados en texto o en voz.
En este momento no tenemos una alternativa de audio disponible.
Por favor contacte a los  [[{{MediaWiki:Grouppage-sysop}}|administradores del sitio]] para asistencia si esto está impidiendiendo inesperadamente que hagas mensajes legítimos.

Presione el botón 'atrás' en su navegador para retornar al editor de página.",
	'captcha-addurl-whitelist' => ' #<!-- deje esta línea exactamente como está --> <pre>
# La sintaxis es la siguiente:
#  * Todo desde un caracter "#" hasta el final de la línea es un comentario
#  * Toda línea que no esté en blanco es un fragmento de expresión regular que se comparará con las URLs
  #</pre> <!-- deje esta línea exactamente como está -->',
	'right-skipcaptcha' => 'Realiza acciones que despliegan un captcha sin tener que confirmar el captcha',
);

/** Estonian (Eesti)
 * @author BrokenArrow
 * @author Jaan513
 * @author Pikne
 */
$messages['et'] = array(
	'captcha-edit' => 'Selle lehekülje muutmiseks lahenda palun lihtne tehe ja sisesta vastus kasti ([[Special:Captcha/help|lisateave]]).',
	'captcha-desc' => 'Pakub robotilõksu abil kaitset rämpspostituste ja paroolide äraarvamise vastu.',
	'captcha-addurl' => 'Sinu muudatus sisaldab uusi välislinke.
Palun lahenda allpool lihtne tehe ja sisesta vastus kasti. Abinõu on kaitseks automaadistatud rämpsmuudatuste eest ([[Special:Captcha/help|lisateave]]):',
	'captcha-badlogin' => 'Palun lahenda allpool lihtne tehe ja sisesta vastus kasti. Abinõu on kaitseks automaatsete parooliäraarvajate eest ([[Special:Captcha/help|lisateave]]):',
	'captcha-createaccount' => 'Palun lahenda lihtne tehe ja sisesta vastus kasti. Abinõu on kaitseks kontode automaatse loomise eest ([[Special:Captcha/help|lisateave]]):',
	'captcha-createaccount-fail' => 'Puuduv või valesti sisestatud kinnituskood.',
	'captcha-create' => 'Lehekülje loomiseks lahenda palun lihtne tehe ja sisesta vastus kasti
([[Special:Captcha/help|lisateave]]):',
	'captcha-sendemail' => 'Palun lahenda allpool lihtne tehe ja sisesta vastus kasti. Abinõu on kaitseks automaadistatud rämpsmuudatuste vastu ([[Special:Captcha/help|lisateave]]):',
	'captcha-sendemail-fail' => 'Vigane või puuduv kinnituskood.',
	'captcha-disabledinapi' => 'Ühes selle toiminguga tuleb läbida robotilõks ja seetõttu ei saa seda API kaudu sooritada.',
	'captchahelp-title' => 'Mis on robotilõks?',
	'captchahelp-cookies-needed' => 'Selle toimimiseks peab veebilehitseja lubama küpsiseid.',
	'captchahelp-text' => 'Võrgukohti, mis lubavad külastajatel sisu muuta, nagu ka see viki, kasutavad sageli rämpsposti levitajad, lisades näiteks lehekülgedele reklaamilinke. Kuigi neid linke saab eemaldada, on nad siiski tülikad.

Kasutajakontot registreerides või mõnele lehele uusi internetiaadresse postitades näidatakse moonutatud tekstiga pilti ja palutakse sisestada seal kuvatud sõnad. Kuna selliselt pildilt on arvutil raske teksti välja lugeda, on see efektiivseks kaitseks rämpspostirobotite vastu ja lubab samas tavakasutajatel rahus muudatusi teha.

Kahjuks võib see tekitada ebamugavusi nägemisraskustega inimestele või neile, kes kasutavad tehiskõneseadet või tekstipõhist veebilehitsejat. Hetkel pole meil helipõhist alternatiivi.
Kui sul tekib raskusi muudatuste tegemisel, võta palun ühendust selle võrgukoha [[{{MediaWiki:Grouppage-sysop}}|administraatoritega]].

Konto registreerimise lehele või redigeerimisaknasse tagasi jõudmiseks klõpsa veebilehitseja tagasi-nuppu.',
	'captcha-addurl-whitelist' => '  #<!-- Jäta see rida muutmata kujule. --> <pre>
# Süntaks:
#  * Kõik alates märgist "#" kuni rea lõpuni on kommentaar
#  * Iga rida, mis ei ole tühi, on regulaaravaldise osa, milleks sobib internetiaadressi osadest ainult hostinimi
  #</pre> <!-- Jäta see rida muutmata kujule. -->',
	'right-skipcaptcha' => 'Sooritada robotilõksu vallapäästvaid toiminguid testi läbimata',
);

/** Basque (Euskara)
 * @author An13sa
 * @author BrokenArrow
 * @author Kobazulo
 * @author Pi
 */
$messages['eu'] = array(
	'captcha-edit' => 'Orrialde hau editatzeko, mesedez, beheko batuketa erraz hau ebatzi eta erantzuna kutxan idatzi ([[Special:Captcha/help|argibide gehiago]]):',
	'captcha-desc' => 'CAPTCHA teknika erabiltzen ditu spamaren aurkako babeserako',
	'captcha-addurl' => 'Zure aldaketan URL lotura berriak daude; spam-a saihesteko, jarraian dagoen irudiko hitzak idaztea beharrezkoa da:<br /> ([[Special:Captcha/help|Zer da hau?]])',
	'captcha-createaccount' => 'Spam-a saihesteko, mesedez, irudian agertzen den hizki edo zenbaki kodea, beheko laukian idatzi zure kontua sortzeko:<br /> ([[Special:Captcha/help|Zer da hau?]])',
	'captcha-createaccount-fail' => 'Baieztatze kode ezegokia.',
	'captcha-create' => 'Orrialde hau sortzeko, mesedez, beheko batuketa erraz hau ebatzi eta erantzuna kutxan idatzi ([[Special:Captcha/help|argibide gehiago]]):',
	'captchahelp-title' => 'Captcha laguntza',
	'captchahelp-cookies-needed' => 'Beharrezkoa da nabigatzailean cookieak gaituta izatea honek funtzionatzeko.',
	'captchahelp-text' => "Publikoki aldaketak egiteko aukerak dituzten webguneetan, wiki honetan bezalaxe, spam testuak gehitzen dira sarritan tresna automatikoak erabiliz.
Lotura horiek ezabatu egin daitezkeen arren, traba dira.

Batzuetan, eta bereziki webgune berri bateko loturak gehitzen dituzunean, hitz batzuk dituen irudi bat agertuko zaizu, eta bertan ageri den testua idazteko eskatuko zaizu. Lan hori automatizatzeko zaila da, eta pertsonei ezer kostatzen ez zaigunez, spam testuak saihesteko lagungarria da.

Zoritxarrez, ikusmen mugatua edo testu bidezko nabigatzaileak erabiltzen dituzten erabiltzeek arazoak izan ditzakete. Horrelako zerbait gertatzen bazaizu, mesedez, jarri [[{{MediaWiki:Grouppage-sysop}}|administratzaileekin]] harremanetan.

Zure nabigatzaileko 'atzera' lotura erabili aldaketen orrialdera itzultzeko.",
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Mjbmr
 * @author Wayiran
 */
$messages['fa'] = array(
	'captcha-edit' => 'برای ویرایش این مقاله، لطفاً حاصل جمع زیر را حساب کنید و نتیجه را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-desc' => 'روش�های مبتنی بر CAPTCHA برای مقابله با هرزنگاری و کشف گذرواژه فراهم می�کند',
	'captcha-addurl' => 'ویرایش شما شامل پیوندهای تازه�ای به بیرون است. برای کمک به جلوگیری از ارسال خودکار هرزنامه�ها، لطفاً حاصل جمع زیر را حساب کنید و نتیجه را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-badlogin' => 'برای کمک به جلوگیری از سرقت خودکار کلمه عبور، لطفاً حاصل جمع زیر را حساب کنید و نتیجه را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-createaccount' => 'برای جلوگیری از ایجاد خودکار حساب کاربری، لطفاً حاصل جمع زیر را حساب کنید و نتیجه را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-createaccount-fail' => 'کد تأییدی وجود ندارد یا نادرست است.',
	'captcha-create' => 'برای ایجاد صفحه لطفاً حاصل جمع زیر را حساب کنید و نتیجه را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-sendemail' => 'برای کمک به حفاظت در برابر هرزنامه�های خودکار، لطفاً جمع سادهٔ زیر را حل کنید و جواب را در جعبه وارد کنید ([[Special:Captcha/help|اطلاعات بیشتر]]):',
	'captcha-sendemail-fail' => 'کد تأییدی وجود ندارد یا نادرست است.',
	'captcha-disabledinapi' => 'این اقدام به کپچا نیاز دارد، بنابراین نمی�تواند از طریق API انجام شود.',
	'captchahelp-title' => 'راهنمای Captcha',
	'captchahelp-cookies-needed' => 'برای کار کردن آن، شما باید کوکی�های مرورگرتان را فعال کنید.',
	'captchahelp-text' => 'تارنماهایی مثل این ویکی که به عموم اجازهٔ نوشتن مطلب می�دهند، غالباً مورد سوءاستفادهٔ هرزفرستندگانی می�شوند که با ابزارهای خودکار پیوندهای بیرونی به تارنماهای موردنظرشان وارد می�کنند.
اگر چه این پیوندهای هرز و تبلیغاتی را می�توان دستی حذف کرد، ولی به هر حال باعث اعصاب�خردی زیادی می�شوند.

گاهی اوقات، خصوصاً هنگامی که پیوندهای بیرونی جدیدی به صفحه اضافه می�شود، ویکی ممکن است به شما تصویری رنگی و کج�وکوله از متنی نشان بدهد و از شما بخواهد که کلمه�های نشان�داده�شده را تایپ کنید.
از آنجا که خودکارسازی این کار دشوار است، انسانهای واقعی می�توانند پیوندهاشان را وارد کنند ولی برنامه�های خودکار تبلیغاتی از خرابکاری باز خواهند ماند.

متأسفانه این امر ممکن است باعث مزاحمت برای کاربرانی شود که چشمشان ضعیف است یا از مرورگرهای متنی یا گفتاری استفاده می�کنند.
در حال حاضر ما جایگزین صوتی�ای برای این کار نداریم. لطفاً اگر برای واردساختن پیوندهای مشروع دچار مشکل شده�اید با [[{{MediaWiki:Grouppage-sysop}}|مدیران این تارنما]] تماس بگیرید.

دکمهٔ «بازگشت» را در مرورگر خود فشار دهید تا به صفحهٔ ویرایش بازگردید.',
	'captcha-addurl-whitelist' => ' #<!-- این سطر را همان�گونه که هست رها کنید --> <pre>
# قواعد به این شکل است:
#  * همه�چیز از «#» تا آخر سطر یک توضیح در نظر گرفته می�شود.
#  * هر سطری که خالی نباشد یک قطعه در نظر گرفته می�شود که فقط با نام میزبان اینترنتی سنجیده می�شود.
  #</pre> <!-- این سطر را همان�گونه که هست رها کنید -->',
	'right-skipcaptcha' => 'انجام کارهایی که CAPTCHA را فعال می�کنند بدون نیاز به گذر از CAPTCHA',
);

/** Finnish (Suomi)
 * @author Agony
 * @author Centerlink
 * @author Crt
 * @author Nike
 * @author Varusmies
 */
$messages['fi'] = array(
	'captcha-edit' => 'Ratkaise alla oleva summa jatkaaksesi ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-desc' => 'Tarjoaa CAPTCHA-tekniikoita suojaamaan mainoslinkkejä ja salasana-arvailua vastaan.',
	'captcha-addurl' => 'Muokkauksesi sisältää uusia linkkejä muille sivuille. Ratkaise alla oleva summa jatkaaksesi ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-badlogin' => 'Salasananmurtajasovellusten takia, ratkaise alla oleva summa jatkaaksesi ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-createaccount' => 'Ratkaise alla oleva summa jatkaaksesi ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-createaccount-fail' => 'Väärä tai puuttuva varmistuskoodi.',
	'captcha-create' => 'Ratkaise alla oleva summa jatkaaksesi ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-sendemail' => 'Jotta auttaisit suojautumaan automaattiselta roskapostitukselta, ratkaise alla oleva yksinkertainen yhteenlasku ja kirjoita vastaus laatikkoon ([[Special:Captcha/help|lisätietoja]]):',
	'captcha-sendemail-fail' => 'Virheellinen tai puuttuva vahvistuskoodi',
	'captcha-disabledinapi' => 'Tämä toiminto vaatii kuvavarmennusta, joten et voi suorittaa sitä APIn kautta.',
	'captchahelp-title' => 'Captcha-ohje',
	'captchahelp-cookies-needed' => 'Tämä toiminto vaatii evästeiden hyväksymistä.',
	'captchahelp-text' => 'Verkkosivut, jotka sallivat ulkopuolisten lisätä sisältöä, joutuvat usein spam-hyökkäysten kohteeksi. Spam-hyökkäyksessä spammerit käyttävät työkaluja, jotka automaattisesti lisäävät linkkejä monille sivuille. Vaikka nämä linkit voidaan poistaa, aiheutuu niistä silti merkittävä haitta.

Joskus, erityisesti kun lisäät uusia linkkejä, saatat nähdä kuvan, jossa on värillistä ja vääristynyttä tekstiä, ja sinua pyydetään kirjoittamaan sen sisältämät sanat. Koska tätä tehtävää on vaikea automatisoida, se sallii melkein kaikkien oikeiden ihmisten tehdä muutoksensa, mutta estää automaattiset lisäykset.

Valitettavasti tämä saattaa estää käyttäjiä, joilla on rajoittunut näkökyky tai käyttäjiä, jotka käyttävät teksti- tai puhepohjaisia selaimia. Ota yhteyttä sivuston [[{{MediaWiki:Grouppage-sysop}}|sivuston ylläpitäjiin]], jos et pysty tekemään kunnollisia muutoksia.

Varmistus ei toimi, jos evästeet eivät ole käytössä.

Voit palata muokkaustilaan selaimen paluutoiminnolla.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntaksi on seuraava:
#  * Kaikki #-merkistä eteenpäin on kommenttia
#  * Jokainen ei-tyhjä rivi on säännöllisen lausekkeen osa, joka suoritetaan vain linkeissä esiintyville verkkonimille.
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Suorittaa ilman captcha-tarkistusta toimintoja, jotka normaalisti vaatisivat tarkistuksen läpikäyntiä',
);

/** Faroese (Føroyskt)
 * @author EileenSanda
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'captcha-createaccount' => 'Sum ein vernd ímóti sjálvvirknum spam, er neyðugt hjá tær at skriva inn tey orð, sum koma fyri á myndini fyri at stovna eina kontu: <br />([[Special:Captcha/help|Hvat er hetta?]])',
	'captcha-createaccount-fail' => 'Skeiv ella manglandi váttanar loyniorð.',
	'captcha-create' => 'Fyri at upprætta síðuna, vinarliga loys tað einfalda roknistykki niðanfyri og skriva svarið í teigin ([[Special:Captcha/help|meira kunning]]):',
	'captcha-sendemail' => 'Fyri at hjálpa okkum at sleppa undan sjálvvirkandi upprættan av brúkaranavni (spamm), so verður tú vinarliga biðin um at loysa tað einfalda roknistykki og skriva svarið í teigin ([[Special:Captcha/help|meira kunning]]):',
	'captcha-sendemail-fail' => 'Skeiv ella manglandi váttanar loyniorð.',
	'captcha-disabledinapi' => "Henda handling krevur ein captcha, so tað kann ikki verða framt við API'inum.",
	'captchahelp-title' => 'Captcha hjálp',
	'captchahelp-cookies-needed' => 'Tín kagi (brovsari) má góðtaka cookies, fyri at hetta kann virka.',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author IAlex
 * @author Meithal
 * @author PieRRoMaN
 * @author Seb35
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 * @author Wyz
 * @author Zetud
 */
$messages['fr'] = array(
	'captcha-edit' => 'Pour modifier cette page, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-desc' => 'Offre des techniques CAPTCHA pour prétéger contre le spam et la découverte des mots de passe par essais multiples',
	'captcha-addurl' => 'Votre modification inclut de nouveaux liens externes.
Pour nous aider dans la protection contre le pourriel automatisé, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-badlogin' => 'Afin de nous aider à prévenir le cassage des mots de passe par des automates, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-createaccount' => 'Afin de nous aider à lutter contre les créations automatiques de comptes, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-createaccount-fail' => 'Code de confirmation erroné ou manquant.',
	'captcha-create' => 'Pour créer la page, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-sendemail' => 'Afin de nous aider à prévenir le spam automatique, veuillez calculer lopération simple ci-dessous et en inscrire le résultat dans le champ ([[Special:Captcha/help|plus dinformations]]) :',
	'captcha-sendemail-fail' => 'Code de confirmation incorrect ou manquant.',
	'captcha-disabledinapi' => 'Cette action requiert un captcha, donc elle ne peut pas être effectuée via lIPA.',
	'captchahelp-title' => 'Aide sur le captcha',
	'captchahelp-cookies-needed' => "Il vous faudra autoriser les témoins (''cookies'') de votre navigateur pour que cela fonctionne.",
	'captchahelp-text' => 'Les sites web qui acceptent des contributions du public, tels que ce wiki, sont souvent victimes de spammeurs qui utilisent des outils automatisés pour placer de nombreux liens vers leurs sites.
Même si cette pollution peut être effacée, elle nen reste pas moins irritante.

Parfois, particulièrement lors de lajout de nouveaux liens externes dans une page, le wiki peut vous montrer une image dun texte embrouillé, déformé ou coloré et vous demander de taper les mots indiqués.
Cette tâche étant difficile à accomplir de façon automatisée, cela permet à la plupart des humains de réaliser leurs contributions tout en stoppant la plupart des spammeurs et autres attaquants robotisés.

Malheureusement, cette solution peut gêner les utilisateurs malvoyants ou qui utilisent un navigateur en texte seul ou vocal. Nous ne disposons pas dalternative audio pour linstant.
Veuillez contacter [[{{MediaWiki:Grouppage-sysop}}|les administrateurs du site]] si cela vous empêche de façon inattendue de faire des contributions légitimes.

Cliquez sur le bouton « Précédent » de votre navigateur pour revenir à la page de modification.',
	'captcha-addurl-whitelist' => ' #<!-- laissez cette ligne exactement telle quelle --><pre>
# La syntaxe est la suivante :
#  * Tout caractère depuis « # » jusquà la fin de la ligne est interprété comme un commentaire.
#  * Toute ligne non vide est un fragment dexpression rationnelle qui ne correspondra quaux hôtes dans les liens hypertextes.
  #</pre><!-- laissez cette ligne exactement telle quelle -->',
	'right-skipcaptcha' => 'Réaliser des actions qui déclenchent un captcha sans avoir à passer celui-ci',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'captcha-edit' => 'Por changiér ceta pâge, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-desc' => 'Semond des tècniques CAPTCHA por protègiér contre lo spame et la dècuvèrta des contresegnos per un mouél de tentatives.',
	'captcha-addurl' => 'Voutron changement encllut de lims de defôr novéls.
Por nos édiér a combatre contre lo spame ôtomatisâ, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-badlogin' => 'Por nos édiér a combatre contre lo cassâjo ôtomatisâ de contresegnos, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dedens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-createaccount' => 'Por nos édiér a combatre contre les crèacions ôtomatisâs de comptos, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dedens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-createaccount-fail' => 'Code de confirmacion fôx ou ben manquent.',
	'captcha-create' => 'Por fâre ceta pâge, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-sendemail' => 'Por nos édiér a combatre contre lo spame ôtomatisâ, volyéd calcular lopèracion simpla ce-desot et pués nen buchiér lo rèsultat dedens la bouèta ([[Special:Captcha/help|més denformacions]]) :',
	'captcha-sendemail-fail' => 'Code de confirmacion fôx ou ben manquent.',
	'captcha-disabledinapi' => 'Ceta accion at fôta dun captch·a, donc pôt pas étre fêta per lAPI.',
	'captchahelp-title' => 'Éde sur lo captch·a',
	'captchahelp-cookies-needed' => "Vos fôdrat ôtorisar los tèmouens (''cookies'') de voutron navigator por que cen fonccione.",
	'captchahelp-text' => 'Los setos vouèbe quaccèptont des contribucions du publico, coment ceti vouiqui, sont sovent victimos de spamors quutilisont des outils ôtomatisâs por betar tot plen de lims de vers lors setos.
Mémo se celos lims de spame pôvont étre suprimâs, nen réstont pas muens una nuésence visibla.

Des côps, particuliérement pendent laponsa de lims de defôr novéls dens una pâge, lo vouiqui vos pôt montrar una émâge dun tèxto colorâ, dèformâ ou ben tordu et pués vos demandar de buchiér los mots montrâs.
Mâlésiê a fâre de façon ôtomatisâ cél travâly, cen pèrmèt a la plepârt des homos de rèalisar lors contribucions tot en empachient la plepârt des spamors et des ôtros ataquents robotisâs.

Mâlherosament, ceta solucion pôt gênar los utilisators mâl-veyents ou quutilisont un navigator en tèxto solèt ou ben vocal.
Por lo moment, nos avens gins daltèrnativa ôdiô.
Vos volyéd veriér vers los [[{{MediaWiki:Grouppage-sysop}}|administrators du seto]] se cen vos empache de façon emprèvua de fâre des contribucions lèg·itimes.

Clicâd sur lo boton « Devant » de voutron navigator por tornar a la bouèta dèdicion.',
	'captcha-addurl-whitelist' => ' #<!-- lèssiéd ceta legne justo dense --> <pre>
# La sintaxa est ceta :
#  * Tot caractèro dês « # » tant qua la fin de la legne est considèrâ coment un comentèro.
#  * Tota legne pas voueda est un bocon dèxprèssion racionèla (*RegEx*) quanaliserat ren que los hôtos dedens los lims hipèrtèxtos.
 #</pre> <!-- lèssiéd ceta legne justo dense -->',
	'right-skipcaptcha' => 'Rèalisar des accions que dècllenchont un captch·a sen avêr a passar ceti',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'captcha-edit' => 'Par cambiâ cheste pagjine, tu âs di risolvi cheste facile some e inserî la rispueste inte casele ([[Special:Captcha/help|altris informazions]]):',
	'captcha-addurl' => 'Il to cambiament al inclût gnûfs leams esternis.
Par judânus cuintri la creazion automatiche di spam, tu âs di risolvi cheste facile some e inserî la rispueste inte casele ([[Special:Captcha/help|altris informazions]]):',
	'captcha-badlogin' => 'Par judânus cuintri dai atacs automotics a lis peraulis clâfs, tu âs di risolvi cheste facile some e inserî la rispueste inte casele ([[Special:Captcha/help|altris informazions]]):',
	'captcha-createaccount-fail' => 'Il codiç di control al mancje o nol è just.',
	'captcha-create' => 'Par creâ cheste pagjine, tu âs di risolvi cheste facile some e inserî la rispueste inte casele ([[Special:Captcha/help|altris informazions]]):',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'captcha-addurl' => 'Jo hawwe keppelings om utens oanpast/taheakke. As ekstra beskerming tsjin automatysk oanmakke reklame (SPAM) wurdt jo frege it antwurd op de ûndersteande som te jaan ([[Special:Captcha/help|meer ynformaasje]]):',
	'captcha-createaccount' => 'As beskerming tsjin it automatysk oanmeitsjen fan meidochnammen wurdt jo frege it antwurd op de ûndersteande som te jaan ([[Special:Captcha/help|meer ynformaasje]]):',
	'captcha-createaccount-fail' => 'It antwurd op de som kloppet net.',
	'captcha-create' => 'Om de side oan te meitsjen wurdt jo frege it antwurd op de ûndersteande som te jaan ([[Special:Captcha/help|meer ynformaasje]]).',
	'captchahelp-title' => 'Lettertoets-help',
	'captchahelp-text' => "Websteeën dêr't it publyk op skriuwe kin, lykas dizze {{SITENAME}}-wiki, kinne lêst hawwe fan lju dy't automatysk keppelings oan de websiden tafoegje. Op dizze wiki kinne sokke feroarings maklik weromset wurde, mar dat nimt al tiid dy't ek oars brûkt wurde kin.

By it oanmelden as meidogger, en fierders benammen at jo keppelings om utens oan in side tafoegje, kinne jo fan de wiki in lettertoets krije. De wiki lit dan kleurde of ferwrongen letters sjen, en jo wurdt frege dy oer te tikken. Om't dit net maklik automatisearre wurde kin, hâldt dit it automatysk tafoegjen tsjin. It spitegernôch ek in lytse lêst foar de meidoggers.

In probleem dêr't noch gjin oplossing foar is it dat it in tûkelteam is foar minsken dy't net goed sjen kinne of dy't in tekst-blêder of lûd-blêder brûke. Hjir soe in lûd-ferzje foar komme moatte, mar dy is der noch net. Oerlis mei in behearder at dit foar jo problemen jout.

Gean tebek mei de tebek-knop fan jo blêder.",
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'captcha-edit' => 'Tá naisc URL nua san athrú seo atá tú ar tí a dhéanamh; mar chosaint in éadan turscair uathoibrithe, caithfidh tú an suim shimplí a réitigh agus a ionchur: <br />([[Special:Captcha/help|Céard é seo?]])',
	'captcha-addurl' => 'Tá naisc URL nua san athrú seo atá tú ar tí a dhéanamh; mar chosaint in éadan turscair uathoibrithe, caithfidh tú na focail san íomhá seo a ionchur: <br />([[Special:Captcha/help|Céard é seo?]])',
	'captcha-createaccount' => 'Mar chosaint in éadan turscair uathoibrithe, caithfidh tú na focail san íomhá seo a ionchur chun cuntas a chlárú: <br />([[Special:Captcha/help|Céard é seo?]])',
	'captcha-createaccount-fail' => 'Ní raibh an cód deimhnithe ceart sa bhosca, nó ní raibh aon chód ann ar chor ar bith.',
	'captcha-create' => 'Tá naisc URL nua san athrú seo atá tú ar tí a dhéanamh; mar chosaint in éadan turscair uathoibrithe, caithfidh tú na focail san íomhá seo a ionchur: <br />([[Special:Captcha/help|Céard é seo?]])',
	'captchahelp-title' => 'Cabhair maidir le Captcha',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'captcha-edit' => 'Para editar esta páxina, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-desc' => 'Proporciona CAPTCHA como protección fronte ao spam e ao descubrimento de contrasinais',
	'captcha-addurl' => 'A súa edición inclúe novas ligazóns externas.
Para contribuír na protección contra as ferramentas de publicación automática de ligazóns publicitarias, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-badlogin' => 'Para contribuír a que non se descubran os contrasinais por medios automáticos, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-createaccount' => 'Para contribuír contra a creación automatizada de contas, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-createaccount-fail' => 'Falta o código de confirmación ou é incorrecto.',
	'captcha-create' => 'Para crear a páxina, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-sendemail' => 'Para contribuír na protección contra o spam automatizado, resolva a suma que aparece a continuación e introduza a resposta na caixa ([[Special:Captcha/help|máis información]]):',
	'captcha-sendemail-fail' => 'Falta o código de confirmación ou é incorrecto.',
	'captcha-disabledinapi' => 'Esta acción necesita o captcha, polo que non se pode realizar a través da API.',
	'captchahelp-title' => 'Axuda acerca do captcha',
	'captchahelp-cookies-needed' => 'Necesita ter as cookies habilitadas no seu navegador para que funcione.',
	'captchahelp-text' => 'Os sitios web que aceptan publicar as contribucións dos usuarios, coma este wiki, sofren, con frecuencia, o abuso por parte de spammers que usan ferramentas que automatizan a inclusión de lixo en forma de ligazóns publicitarias, nunha chea de páxinas, en pouco tempo.
Mentres as devanditas ligazóns non son eliminadas supoñen unha molestia e unha perda de tempo.

En ocasións, en particular cando engada algunha nova ligazón externa, o wiki pode mostrar unha imaxe dun texto coloreado e distorsionado e pedirlle que introduza as palabras que se vexa.
Como esta tarefa é difícil de automatizar, permite distinguir entre persoas e robots e dificulta os ataques automatizados dos spammers.

Por desgraza, isto é un inconveniente para aqueles usuarios con dificultades de visión ou que utilicen navegadores de texto ou navegadores baseados en sistemas de voz.
Polo de agora non dispoñemos dunha alternativa de son.
Por favor, póñase en contacto cun [[{{MediaWiki:Grouppage-sysop}}|administrador do sitio]] para solicitar axuda se o sistema lle impide rexistrarse para facer contribucións lexítimas.

Prema no botón "Atrás" do seu navegador para volver á páxina de edición.',
	'captcha-addurl-whitelist' => ' #<!-- Deixe esta liña tal e como está --> <pre>
# A sintaxe é a seguinte:
#   * Todo o que vaia despois dun carácter "#" ata o final da liña é un comentario
#   * Toda liña que non estea en branco é un fragmento de expresión regular que só coincide con dominios dentro de enderezos URL
  #</pre> <!-- Deixe esta liña tal e como está -->',
	'right-skipcaptcha' => 'Levar a cabo as accións que requiren captcha sen ter que introducilo',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'captchahelp-title' => 'Βοήθεια �ερὶ τοῦ captcha',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 * @author Melancholie
 */
$messages['gsw'] = array(
	'captcha-edit' => 'Zum d Syte bearbeite lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy. [[Special:Captcha/help|(Frogen oder Probläm?)]]',
	'captcha-desc' => 'Stellt CAPTCHA-Tächnike zum Schutz vor Spam un em Rote vu Passwerter z Verfiegig',
	'captcha-addurl' => 'In Dyynere Bearbeitig het s neiji externi Gleicher.
Zum Schutz vor automatisiertem Spamming lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy. Druck drno nomol uf �Syte spychere�. [[Special:Captcha/help|(Frogen oder Probläm?)]]',
	'captcha-badlogin' => 'Zum Schutz vor ere Kompromittierig vu Dyynem Benutzerkonto lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy [[Special:Captcha/help|(Frogen oder Probläm?)]]:',
	'captcha-createaccount' => 'Zum Schutz vor automatisiertem Aalege vu Benutzerkonte lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy. [[Special:Captcha/help|(Frogen oder Probläm?)]]',
	'captcha-createaccount-fail' => 'Bestätigungscode isch falsch oder fählt.',
	'captcha-create' => 'Zum d Syten aalege lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy. [[Special:Captcha/help|(Frogen oder Probläm?)]]',
	'captcha-sendemail' => '
As Schutz gege e automatischs Spamming,  lees die Rächenufgab un trag s Ergebnis in s Fäld unten yy ([[Special:Captcha/help|meh Informatione]]):',
	'captcha-sendemail-fail' => 'Bestätigungscode isch falsch oder fählt.',
	'captcha-disabledinapi' => 'Die Aktion brucht e Captcha. Si cha nit iber d API uusgfiert wäre.',
	'captchahelp-title' => 'Captcha-Hilf',
	'captchahelp-cookies-needed' => "'''Wichtiger Hiiwyys:''' Im Browser mien Cookiers erlaubt syy.",
	'captchahelp-text' => 'Internetaagebot, wu uf sin fir Byytreg vu jedem, wie z. B. des Wiki, wäre vyylmol vu Spammer missbruucht, wu ihri Gleicher automatisch uf vyylene Netzsyte platziere. Die Spam-Gleicher cha mer wider useneh, si stere aber zimli un nämme Arbetszyt in Aaspruch.

In e Teil Fäll, v. a. wänn neiji Netzgleicher in e Syte dryygfiegt wäre, cha s syy, ass des Wiki derno ne Bild mit eme farbige un verzerrte Täxt aazeigt un dezue ufforderet, di aazeigte Werte yyzgee. Wel sonigi Ufgabe nit automatische chenne usgfiert wäre, cha mer eso di meischte Spammer, wu mit automatische Wärchzyyg schaffe, ufhalte, aber normali Benutzer chenne ihri Byytreg einewäg yygee.

Leider cha des derzue fiere, ass Lyt Probläm iberchemme, wu ne yygschränkti Sähfähigkeit oder e Browser bruche, wu täxt- oder sprochbasiert isch.
Im Momänt hän mir kei Audioalternative z Verfiegig.
Bitte nimm Kontakt uf zum [[{{MediaWiki:Grouppage-sysop}}|Syteadministrator]] fir Unterstitzig wänn des Di uuerwartet abhaltet vu berächtigte Byyträg.

Ins Bearbeitigsfänschter chunnt mer derno eifach wider mit em �Zruck�-Chnopf.',
	'captcha-addurl-whitelist' => ' #<!-- Die Zyyle derf nit gänderet wäre! --> <pre>
#  Syntax:
#   * Alles vun eme #-Zeiche bis zum Änd vu dr Zyyle isch e Kommentar
#   * Jedi nit-lääri Zyyle isch e Regex-Fragment, wu gegeniber dr dr Hostnäme vun ere URL prieft wird
 #</pre> <!-- Die Zyyle derf nit gänderet wäre! -->',
	'right-skipcaptcha' => 'Iberspringe vu dr Captcha-Yygab',
);

/** Gujarati (ગુજરાત�)
 * @author Ashok modhvadia
 * @author Dsvyas
 * @author KartikMistry
 */
$messages['gu'] = array(
	'captcha-edit' => 'આ લેખમાં ફેરફાર કરવા માટે ન�ચે આપેલા સરળ દાખલાનો જવાબ તેન� બાજુના ખાનામાં લખો ([[Special:Captcha/help|more info]]):',
	'captcha-desc' => '',
	'captcha-addurl' => 'તમે કરેલા ફેરફારોમાં નવ� બાહ્ય કડ�ઓ સામેલ છે. સ્વચાલિત સ્પેમ/સ્પામ(spam) થ� બચવા માટે ન�ચે આપેલા સરળ દાખલાનો જવાબ તેન� બાજુના ખાનામાં લખો
([[Special:Captcha/help|more info]]):',
	'captcha-badlogin' => 'આપોઆપ થત� ગુપ્તસંજ્ઞાન� ચોર� (password cracking)થ� બચાવવા માટે ન�ચે આપેલા સરળ દાખલાનો જવાબ તેન� બાજુના ખાનામાં લખો ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount' => 'આપોઆપ નવા ખાતા ખુલતા રોકવા માટે ન�ચે આપેલા સરળ દાખલાનો જવાબ તેન� બાજુના ખાનામાં લખો',
	'captcha-createaccount-fail' => 'ખોટ� અથવા ખૂટત� ખાતર� સંજ્ઞા.',
	'captcha-create' => 'નવું પાનું બનાવવા માટે ન�ચે આપેલા સરળ દાખલાનો જવાબ તેન� બાજુના ખાનામાં લખો  ([[Special:Captcha/help|more info]]):',
	'captcha-sendemail-fail' => 'ખોટ� અથવા ખૂટત� ખાતર� સંજ્ઞા.',
	'captchahelp-title' => 'કેપ્ટ્ચા/કેપ્ચા (Captcha) મદદ',
	'captchahelp-cookies-needed' => 'આ વ્યવસ્થિત ર�તે જોઇ શકાય તે માટે તમારા બ્રાઉઝરમાં કુક�ઝ એનેબલ કરેલ� હોવ� જોઇશે.',
	'captchahelp-text' => "આપણ� વિકિ જેવ� વૅબ સાઇટો કે જે લોકોને યોગદાન કરવાન� પરવાનગ� આપે છે, તેમનો સ્પામરો દ્વારા દુરૂપયોગ થતો આવ્યો છે. આવા સ્પામરો તેમન� કડ�ઓ એક સાથે અનેક વૅબ સાઇટો પર મુકવા માટે સ્વચાલિત સાધનો વાપરે છે. આવ� કડ�ઓ ખરેખર એક દૂષણ છે અને તેને દૂર કરવાના ઉપાય કરવા જોઇએ.

ક્યારેક, ખાસ કર�ને જ્યારે તમે તમારા લેખમાં બાહ્ય કડ� ઉમેરતા હોવ ત્યારે, વિકિ તમને એક રંગ�ન કે તુટેલા-ફુટેલા અક્ષરો કે શબ્દોનું ચિત્ર બતાવે અને તેમા વંચાતા શબ્દો બાજુનાં ખાનામાં લખવા માટે પુછે એવું બને. આનું કારણ એ છે કે આ એક એવ� પદ્ધતિ છે જે સ્વચાલિત ર�તે કરવ� લગભગ અશક્ય છે, અને ફક્ત વ્યક્તિગત ર�તે જ થઇ શકે છે, જે સ્પામરો અને અન્ય ઘુસણખોરો ના હુમલાને ખાળે છે.

કમભાગ્યે આ પદ્ધતિ, એવા લોકોને તકલિફ આપે તેમ છે જેઓન� દૃષ્ટિ નબળ� છે અથવાતો જેઓ વાચા આધાર�ત કે સાદા બ્રાઉઝરનો ઉપયોગ કરે છે. હાલમા અમાર� પાસે આવા ચિત્રોન� વાચા આધારિત વ્યવસ્થા નથ�. જો આ કારણે આપ કોઇ લેખમાં પ્રદાન ન કર� શકતા હોવ તો વધુ સહાય માટે કૃપા કર� [[{{MediaWiki:Grouppage-sysop}}|site administrators]] નો સંપર્ક સાધો.

લેખમા ફેરફાર કરવાના પાના ઉપર પાછા ફરવા માટે આપના બ્રાઉઝરના 'બેક' બટન ઉપર ક્લિક કરો.",
	'captcha-addurl-whitelist' => ' #<!-- આ લ�ટ�ને જેમ છે તેમ જ રહેવા દો --> <pre>
# સ�ન્ટેક્સ (Syntax) આ પ્રમાણે છે :
#  * "#" સંજ્ઞાથ� શરૂ કર�ને લ�ટ�ના અંત સુધ�નું વર્ણન એક ટ�પ્પણ� છે
#  * ખાલ� ન હોય તેવ� દરેક લ�ટ� રેજેક્સનો ભાગ છે, જે ફક્ત URLsમાંના હોસ્ટ સાથે જ મેળ ખાશે
  #</pre> <!-- આ લ�ટ�ને જેમ છે તેમ જ રહેવા દો -->',
	'right-skipcaptcha' => 'કૈપ્ચા માધ્યમમાં ગયા વિના કૈપ્ચા કાર્યાન્વયન ક્રિયા અમલમાં મુકો',
);

/** Hebrew (עבר�ת)
 * @author Amire80
 * @author Rotem Liss
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'captcha-edit' => 'כד� לערוך את הדף, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-desc' => 'מתן טכנ�קות CAPTCHA להגנה נגד ז�בול ונ�חוש ססמאות',
	'captcha-addurl' => 'ער�כתכם כוללת ק�שור�ם ח�צונ��ם חדש�ם. כהגנה מפנ� ספאם אוטומט�, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-badlogin' => 'כהגנה מפנ� פר�צת ס�סמאות אוטומט�ת, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-createaccount' => 'כהגנה מפנ� �צ�רת חשבונות אוטומט�ת, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-createaccount-fail' => 'לא הקלדתם קוד א�שור, או שהוא שגו�.',
	'captcha-create' => 'כד� ל�צור את הדף, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-sendemail' => 'כד� לעזור לה�לחם במצ�פ� זבל אוטומט��ם, על�ך לחשב את הסכום הפשוט שלהלן ולהז�ן את התוצאה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-sendemail-fail' => 'קוד הא�שור שגו� או חסר.',
	'captcha-disabledinapi' => 'פעולה זו דורשת פתרון CAPTCHA ולא נ�תן לבצע אותה דרך ה־API.',
	'captchahelp-title' => 'עזרה במערכת CAPTCHA',
	'captchahelp-cookies-needed' => 'על�כם להפע�ל את תכונת העוג�ות (cookies) בדפדפן שלכם כד� שזה �עבוד.',
	'captchahelp-text' => 'פעמ�ם רבות מנצל�ם מפ�צ� תוכן זבל ("ספאם") אתר�ם שמקבל�ם תוכן מהצ�בור, כמו אתר הוו�ק� הזה, כד� לפרסם את הק�שור�ם שלהם לאתר�ם רב�ם בא�נטרנט, באמצעות כל�ם אוטומט��ם.
אמנם נ�תן להס�ר את ק�שור� הספאם הללו, אך הם מהוו�ם מטרד משמעות�.

לעת�ם, בע�קר כשאתם מכנ�ס�ם ק�שור� א�נטרנט חדש�ם לתוך עמוד, אתר הוו�ק� עשו� להראות לכם תמונה של טקסט צבעונ� או מעוקם ולבקש מכם להקל�ד את המ�ל�ם המוצגות.
כ�וון שזו מש�מה שקשה לבצעה בצורה אוטומט�ת, הדבר �אפשר לבנ�־אדם אמ�ת��ם לשלוח את הדפ�ם, אך �עצור את רוב מפ�צ� תוכן הזבל והמתק�פ�ם הרובוט��ם האחר�ם.

לרוע המזל, הדבר עשו� לגרום לא� נוחות למשתמש�ם עם דפדפן בגרסה מוגבלת, או שמשתמש�ם בדפדפנ�ם מבוסס� טקסט או ד�בור.
כרגע, א�ן לנו חלופה קול�ת זמ�נה.
אנא צרו קשר עם [[{{MediaWiki:Grouppage-sysop}}|מפע�ל� המערכת]] כד� לקבל עזרה אם המערכת מונעת מכם באופן בלת� צפו� לבצע ער�כות לג�ט�מ�ות.

לחצו על הכפתור \'חזור\' בדפדפן שלכם כד� לחזור לדף הער�כה.',
	'captcha-addurl-whitelist' => ' #<!-- �ש להשא�ר שורה זו בד�וק כפ� שה�א כתובה --> <pre>
# זהו תחב�ר ההודעה:
#   * כל דבר בשורה שנכתב לאחר ס�מן "#" הוא הערה
#   * כל שורה לא ר�קה ה�א ב�טו� רגולר� ש�תא�ם לאתר�ם בכתובות URL
 #</pre> <!-- �ש להשא�ר שורה זו בד�וק כפ� שה�א כתובה -->',
	'right-skipcaptcha' => 'ב�צוע פעולות הדורשות פתרון CAPTCHA ללא צורך בפתרונו',
);

/** Hindi (हिन्द�)
 * @author Ansumang
 * @author Kaustubh
 * @author Shyam
 * @author आलोक
 */
$messages['hi'] = array(
	'captcha-edit' => 'यह पन्ना संपादित करने के लिये, न�चे दिये हुए आसान राशि का जवाब दिये हुए टेक्स्टबॉक्समें लिखें ([[Special:Captcha/help|अधिक ज़ानकार�]]):',
	'captcha-desc' => 'आसानसे कॅपचा (captcha) का इस्तेमाल',
	'captcha-addurl' => 'आपके बदलावोंमें नई बाह्यकड़ियां हैं। अपने आप होने वाले स्पॅमसे बचने के लिये, न�चे दिये हुए आसान राशि का जवाब दिये हुए टेक्स्टबॉक्समें लिखें ([[Special:Captcha/help|अधिक ज़ानकार�]]):',
	'captcha-badlogin' => 'अपने आप होनेवाले कूटशब्द के भेद से बचने के लिये, न�चे दिये हुए आसान राशि का जवाब दिये हुए टेक्स्टबॉक्समें लिखें ([[Special:Captcha/help|अधिक ज़ानकार�]]):',
	'captcha-createaccount' => 'अपने आप होने वाले सदस्य पंज�करण से बचने के लिये, न�चे दिये हुए आसान राशि का जवाब दिये हुए टेक्स्टबॉक्समें लिखें ([[Special:Captcha/help|अधिक ज़ानकार�]]):',
	'captcha-createaccount-fail' => 'गलत या खाल� सहमत� कोड।',
	'captcha-create' => 'यह पन्ना बनाने के लिये, न�चे दिये हुए आसान राशि का जवाब दिये हुए टेक्स्टबॉक्समें लिखें ([[Special:Captcha/help|अधिक ज़ानकार�]]):',
	'captcha-sendemail-fail' => 'गलत या लापता पुष्टिकरण कोड ।',
	'captchahelp-title' => 'कॅप्टचा सहायता',
	'captchahelp-cookies-needed' => 'यह कार्य करने के लिये आपने कूक�ज (cookies) एनेबल किया होना आवश्यक हैं।',
	'captchahelp-text' => "इस विकि जैसे जालस्थल, जो जनता जनार्दन से लेख स्व�कार करते हैं, अक्सर रद्द� काम करने वालों के फंदे में आ जाते हैं, जो स्वचालित यंत्रों से कई स्थलों पर अपन� कड़ियाँ छापने क� कोशिश करते हैं।
यूँ तो ये रद्द� कड़ियाँ हटाई जा सकत� हैं, पर फिर भ� ये झंझट तो खड़ा करत� ह� हैं।

कुछ बार, खासकर जब किस� पन्ने पृष्ठ पर एक नया जाल पता जोड़ा जाता है, तब विक� आपको एक रंग�न या टेढ़े मेढ़े लेख क� तस्व�र दिखा के आपको उस तस्व�र में लिख� सामग्र� को पढ़ के टंकित करने को कह सकत� है।
ऐस� तस्व�र को यंत्र द्वारा पढ़ पाना मुश्किल होता है, इसलिए इसके जरिए अधिकतर मानव अपने लेख छाप पाएँगे और साथ ह� अधितकर रद्द� वाले और यांत्रिक उपकरण नह�ं छाप पाएँगे।

दुर्भाग्यवश इससे स�मित चक्षु-दृष्टि वाले सदस्यों या पाठ-आधारित या वाचन-आधारित विचरकों का प्रयोग करने वाले  सदस्यों को समस्या आत� है।
इस समय हमारे पास इसका श्रव्य विकल्प उपलब्ध नह�ं है।
यदि इसक� वजह से आपको वैध लेख लिखने में अवरोध आ रहा हो तो कृपया सहायता के लिए [[{{MediaWiki:Grouppage-sysop}}|स्थल प्रबंधकों]] से संपर्क करें।

पन्ना संपादन पर वापस जाने के लिए अपने विचरक पर 'एक पृष्ठ प�छे जाएँ' वाल� कुंज� का प्रयोग करें।",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# इसक� रुपरेषा इस प्रकार हैं:
#  * "#" से शुरु होनेवाल� सभ� लाईनें टिप्पण�याँ हैं।
#  * हर अन्य लाईन regex fragment हैं जो सिर्फ URL के होस्टस्� को जोडता हैं
   #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Captcha में जाये बिना Captcha का इस्तेमाल करने के लिये मजबूर करें',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author Dnik
 * @author Ex13
 * @author Herr Mlinka
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'captcha-edit' => 'Da uredite ovu stranicu, molimo riješite jednostavno zbrajanje ispod i unesite rezultat u rubriku ([[Special:Captcha/help|više informacija]]):',
	'captcha-desc' => 'Pruža CAPTCHA tehnike za zaštitu od neželjene pošte (spam-a) i pogađanja zaporke',
	'captcha-addurl' => 'Vaše uređivanje sadrži nove vanjske poveznice. Kao zaštitu od automatskog spama, trebate unijeti slova koja vidite na slici: <br />([[Special:Captcha/help|Pomoć?]])',
	'captcha-badlogin' => 'Da se spriječi automatizirano pogađanje lozinki,
molimo zbrojite donje brojeve i upišite rezultat ([[Special:Captcha/help|pomoć]]):',
	'captcha-createaccount' => 'Kao zaštitu od automatskog spama, pri otvaranju računa trebate unijeti slova koja vidite na slici: <br />([[Special:Captcha/help|Pomoć]])',
	'captcha-createaccount-fail' => 'Potvrdni kod je nepotpun ili netočan.',
	'captcha-create' => 'Vaše uređivanje sadrži nove vanjske poveznice. Kao zaštitu od automatskog spama, trebate unijeti slova koja vidite na slici: <br />([[Special:Captcha/help|Pomoć?]])',
	'captcha-sendemail' => 'Da bi ste nam pomogli protiv automatskog spama, molimo riješite jednostavan zadatak zbrajanja ispod i unesite rezultat u okvir ([[Special:Captcha/help|više informacija]]):',
	'captcha-sendemail-fail' => 'Potvrdni kod je nepotpun ili netočan.',
	'captcha-disabledinapi' => 'Ova akcija traži captchu, tako da se ne može izvršiti preko API-ja.',
	'captchahelp-title' => 'Antispam pomoć',
	'captchahelp-cookies-needed' => "Trebate imati uključene kolačiće (''cookies'') u vašem web pregledniku za ovu funkciju.",
	'captchahelp-text' => "Internetske stranice koji prihvaćaju doprinose od javnosti, poput ovog wikija, često zloupotrebljavaju spameri, koji koriste automatizirane alate pomoću kojih postavljaju svoje poveznice na mnoge stranice.
Iako se te spam poveznice mogu uklanjati, one predstavljaju značajne neugodnost pri radu.

Ponekad, a naročito kad se dodaje web poveznica na stranicu, wiki može prikazati sliku obojenog ili iskrivljenog teksta uz zahtjev za unos prikazanih riječi.
Budući da je takvu radnju teško automatizirati, to će omogućiti pravim suradnicima njihov nastavak u pridonošenju, dok će zaustaviti većinu spamera i robotskih napadača.

Na žalost, ovo može biti nepristupačno za suradnike koji koriste tekstualne klijene ili one glasovno bazirane. Trenutačno nemamo glasovnu podršku za ovo.
Molimo obratite se [[{{MediaWiki:Grouppage-sysop}}|administratorima]] za pomoć, ukoliko Vas ovo ometa pri dodavanju važećih sadržaja.

Pritisnite u svom pregledniku 'nazad' kako bi se vratili na uređivač stranice.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Rabi se slijedeća sintaksa:
#   * Sve od "#" znaka do kraja linije je komentar
#   * Svaki neprazni redak je regularni izraz (regex) koji odgovara poslužitelju unutar URL-a
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Izvođenje akcija koje pokreću captcha bez prolaženja kroz captcha sustav',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'captcha-edit' => 'Zo by stronu wobdźěłał, rozrisaj prošu slědowacy ličenski nadawk a zapodaj wuslědk do kašćika ([[Special:Captcha/help|Dalše informacije]]):',
	'captcha-desc' => 'Staja CAPTCHA-techniki za škit p�ećiwo spamej a zhódowanju hesłow k dispoziciji',
	'captcha-addurl' => 'W twojej změnje su nowe eksterne wotkazy. Jako škitna naprawa p�ećiwo awtomatizowanemu spamej dyrbiš slědowacy nadawk wuličić a wuslědk do kašćika [[Special:Captcha/help|(dalše informacije)]] zapisować.',
	'captcha-badlogin' => 'Zo by so awtomatiskemu zadobywanju do hesłow zadźěwało, dyrbiš slědowacy nadawk wuličeć a wuslědk do kašćika zapisować. ([[Special:Captcha/help|dalše informacije]])',
	'captcha-createaccount' => 'Jako škitna naprawa p�ećiwo awtomatiskemu wutworjenju wužiwarskich kontow dyrbiš slědowacy nadawk wuličeć a wuslědk do kašćika zapisować  ([[Special:Captcha/help|dalše informacije]]):',
	'captcha-createaccount-fail' => 'Wopačny abo pobrachowacy wobkrućenski kod.',
	'captcha-create' => 'Zo by stronu wutworił, rozrisaj prošu slědowacy ličenski nadawk a zapodaj wuslědk do kašćika ([[Special:Captcha/help|Dalše informacije]]):',
	'captcha-sendemail' => 'Za škit p�ećiwo awtomatiskemu spamowanju, rozrisaj prošu jednory ličenski nadawk a zapodaj wotmołwu do kašćika ([[Special:Captcha/help|dalše informacije]]):',
	'captcha-sendemail-fail' => 'Wopačny abo falowacy wobkrućenski kod.',
	'captcha-disabledinapi' => 'Tuta akcija wužaduje sej captcha, tohodla njeda so p�ez API wuwjesć.',
	'captchahelp-title' => 'Pomoc za CAPTCHA',
	'captchahelp-cookies-needed' => 'Dyrbiš placki (cookies) w swojim wobhladowaku zmóžnić.',
	'captchahelp-text' => 'Websydła, kotrež powěsće wot kóždeho akceptuja, so často wot spamarjow znjewužiwaja, kot�iž swoje wotkazy awtomatisce na wjele sydłach rozdźěleja. Hačrunjež so tute spamwotkazy hodźa wotstronić, su wone njesnadne mjerzanje.

Druhdy, wosebje, hdyž so nowe webwotkazy stronje p�idawaja, móže so stać, zo pokazuje tutón wiki wobraz z barbnym abo skomolenym tekstom a će prosy, zo by pokazane słowa zapodał.
Dokelž to je nadawk, kotryž hodźi so jenož ćežko awtomatizować, dowoluje to woprawdźitym wosobam swoje powěsći wotpósłać, mjeztym zo so najwjace spamarjow a druhich nadpadowacych botow blokuje.

Bohužel móže to k wobćežnosćam za tutych wužiwarjow wjesć, kotrychž kmanosć widźenja je wobmjezowana abo kot�iž wobhladowaki wužiwaja, kotrež na tekst abo rěčne wudawanje bazěruja.
Tuchwilu njedisponujemy wo awdioalternatiwje.
Prošu staj so z [[{{MediaWiki:Grouppage-sysop}}|administratorami sydła]] z prostwu wo pomoc do zwiska, jeli to će haći legitimne powěsće pósłać.

Klikń na tłócatko "Wróćo" w swojim wobhladowaku, zo by so k editorej wróćił.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntaksa je slědowaca:
# * Wšo wot znamješka "#" hač do kónca linky je komentar
# * Kóžda popisana linka je fragment regex (regularneho wuraza) kotryž so z mjenom hosta wěsteje URL p�irunuje
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Captcha p�eskočić',
);

/** Haitian (Kreyòl ayisyen)
 * @author Boukman
 * @author Masterches
 */
$messages['ht'] = array(
	'captcha-edit' => 'Pou ou kapab modifye paj sa, nou mande w kalkile ti adisyon fasil sa epitou mete rezilta, repons ou an nan bwat ki bò kote l ([[Special:Captcha/help|konnen plis sou fonksyon sa]]):',
	'captcha-desc' => 'Yon enplemantasyon captcha senp',
	'captcha-addurl' => 'Edisyon ou an genyen nouvo lyen pou andeyò.
Pou ede nou pwoteje sistèm an kont pouryèl, tanpri, fè ti adisyon fasil sa epi bay repons ou an nan bwat ([[Special:Captcha/help|plis èd sou fonksyon sa]]):',
	'captcha-badlogin' => 'Pou ede nou lite kont òdinatè ki ap krake, pirate mopas yo, tanpri rezoud ti adisyon fasil sa epi mete repons ou an nan bwat ([[Special:Captcha/help|konnen plis sou fonksyon sa]]):',
	'captcha-createaccount' => 'Pou ede nou lite kont kreyasyon kont otomatik yo, souple rezoud ti adisyon sa epi mete nan bwat an repons ou an ([[Special:Captcha/help|konnen plis sou fonksyon sa]]):',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'captcha-edit' => 'A lap szerkesztéséhez meg kell, hogy kérjünk, írd be a lenti dobozba az alábbi egyszerű összeadás eredményét ([[Special:Captcha/help|segítség]]):',
	'captcha-desc' => 'CAPTCHA-technológiák a spamek és a jelszókitalálási technikák ellen',
	'captcha-addurl' => 'Szerkesztésed új külső linket tartalmaz. A reklámokat elhelyező robotok kiszűrése érdekében meg kell, hogy kérjünk, írd be a lenti dobozba az alábbi matematikai művelet eredményét. ([[Special:Captcha/help|segítség]])',
	'captcha-badlogin' => 'Az automatikus jelszófeltörés kiszűrése érdekében meg kell, hogy kérjünk, írd be a lenti dobozba az alábbi egyszerű számtani művelet eredményét ([[Special:Captcha/help|segítség]]):',
	'captcha-createaccount' => 'A felhasználói fiókok automatizált létrehozásának kiszűrése érdekében meg kell, hogy kérjünk, írd be a lenti dobozba az alábbi egyszerű számtani művelet eredményét. ([[Special:Captcha/help|segítség]])',
	'captcha-createaccount-fail' => 'Hibás vagy hiányzó ellenőrző kód.',
	'captcha-create' => 'Az oldal elkészítéséhez meg kell, hogy kérjünk, írd be a lenti dobozba az alábbi egyszerű számtani művelet eredményét. ([[Special:Captcha/help|segítség]])',
	'captcha-sendemail' => 'Hogy segíts az automatizált spammelés elleni védekezésben, kérünk oldd meg az alábbi egyszerű számítást, és írd be az eredményt a szövegdobozba ([[Special:Captcha/help|segítség]]):',
	'captcha-sendemail-fail' => 'Hibás vagy hiányzó ellenőrző kód.',
	'captcha-disabledinapi' => 'Ez a művelet captcha megoldásához kötött, így nem lehet végrehajtani az API-n keresztül.',
	'captchahelp-title' => 'Captcha segítség',
	'captchahelp-cookies-needed' => 'Engedélyezned kell a böngésződben a sütiket.',
	'captchahelp-text' => 'Az olyan weboldalakat, amelyekre bárki írhat, gyakran támadják meg spammerek olyan eszközök felhasználásával, amelyek képesek automatikusan, emberi felügyelet nélkül elhelyezni egy linket sok különböző oldalon.

Az ilyen linkek kézi eltávolítása rengeteg energiát emésztene fel, ezért néha, különösen ha egy külső linket teszel egy cikkbe, a wiki egy valamilyen módon eltorzított szöveget (captcha-t) jelenít meg, és arra kér, hogy gépeld be azt. Mivel ezt automatikusan nagyon nehéz megtenni, a valódi szerkesztők így könnyen megkülönböztethetőek a spammerek robotjaitól.

Sajnos ez komoly kényelmetlenséget jelenthet azoknak a felhasználóknak, akik gyengén látnak, vagy szöveges/hang-alapú böngészőt használnak. Jelenleg nem tudunk hang-alapú alternatívával szolgálni; ha a captcha megakadályoz abban, hogy szerkeszd a wikit, vedd fel a kapcsolatot az [[{{MediaWiki:Grouppage-sysop}}|adminisztrátorokkal]].

Ha a captcha megoldása helyett inkább visszatérnél a szöveg szerkesztéséhez, használd a böngésződ �vissza� gombját.',
	'captcha-addurl-whitelist' => ' #<!-- ezt a sort hagyd pontosan így --> <pre>
# A szintaktika a következő:
#  * Minden �#� karakterrel kezdődő sor megjegyzés
#  * Minden nem üres sor egy reguláris kifejezés darabja, amely csak az URL-ekben található kiszolgálókra keres
  #</pre> <!-- ezt a sort hagyd pontosan így -->',
	'right-skipcaptcha' => 'captcha átugrása',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'captcha-edit' => 'Pro modificar iste pagina, per favor resolve le simple summa hic infra e entra le responsa in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-desc' => 'Forni technicas CAPTCHA de protection contra spam e discoperta de contrasignos',
	'captcha-addurl' => 'Tu modification include nove ligamines externe.
Como protection contra le spam automatic, per favor resolve le simple summa hic infra e entra le resultato in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-badlogin' => 'Como protection contra le piratage automatic de contrasignos, per favor resolve le simple summa hic infra e entra le resultato in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-createaccount' => 'Como protection contra le creation automatic de contos, per favor resolve le simple summa hic infra e entra le resultato in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-createaccount-fail' => 'Codice de confirmation incorrecte o mancante.',
	'captcha-create' => 'Pro crear le pagina, per favor resolve le simple summa hic infra e entra le resultato in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-sendemail' => 'Como protection contra le spam automatic, per favor resolve le simple summa hic infra e entra le resultato in le quadro ([[Special:Captcha/help|plus info]]):',
	'captcha-sendemail-fail' => 'Codice de confirmation incorrecte o mancante.',
	'captcha-disabledinapi' => 'Iste action require un captcha, dunque illo non pote esser exequite per medio del API.',
	'captchahelp-title' => 'Adjuta super le captcha',
	'captchahelp-cookies-needed' => 'Tu debe haber le cookies activate in tu navigator a fin que isto pote functionar.',
	'captchahelp-text' => "Le sitos web que accepta contributiones del publico, como iste wiki, es frequentemente abusate per spammatores que usa instrumentos automatic pro publicar lor ligamines in multe sitos.
Ben que iste ligamines spam pote esser eliminate, illos constitue un considerabile molestia.

Alcun vices, specialmente quando tu adde nove ligamines web a un pagina, le wiki pote monstrar te un imagine de texto colorate o distorquite e demandar que tu entra le parolas monstrate.
Post que isto es un carga difficile de automatisar, isto permittera al major parte del humanos real de facer lor contributiones, durante que le major parte del spammatores e altere attaccatores robotic es stoppate.

Infelicemente isto pote incommodar le usatores con vision limitate o usante navigatores a base de texto o synthese vocal.
Al momento nos non dispone de un alternativa audio.
Per favor contacta le [[{{MediaWiki:Grouppage-sysop}}|administratores del sito]] pro assistentia si isto insperatemente te impedi de facer contributiones legitime.

Clicca le button 'retro' in tu navigator pro retornar al pagina de modification.",
	'captcha-addurl-whitelist' => ' #<!-- non modificar in alcun modo iste linea --> <pre>
# Le syntaxe es lo sequente:
#  * Toto a partir de un character "#" usque al fin del linea es un commento
#  * Omne linea non vacue es un fragmento regex applicabile solmente a nomines de host intra adresses URL
  #</pre> <!-- non modificar in alcun modo iste linea -->',
	'right-skipcaptcha' => 'Executar le actiones que activarea le captcha sin deber passar per le captcha',
);

/** Indonesian (Bahasa Indonesia)
 * @author Borgx
 * @author IvanLanin
 * @author Iwan Novirion
 * @author Rex
 */
$messages['id'] = array(
	'captcha-edit' => 'Untuk menyunting halaman ini, harap pecahkan penjumlahan sederhana di bawah ini dan masukkan jawaban di kotak yang tersedia ([[Special:Captcha/help|info lengkap]]):',
	'captcha-desc' => 'Menyediakan teknik captcha untuk melindungi terhadap spam dan penebakan sandi',
	'captcha-addurl' => "Suntingan Anda menyertakan pranala luar baru. Sebagai pelindungan terhadap ''spam'' otomatis, Anda harus mengetikkan kata atau hasil perhitungan yang tertera berikut ini:<br />
([[Special:Captcha/help|info lengkap]])",
	'captcha-badlogin' => 'Untuk membantu pelindungan terhadap perengkahan kunci sandi otomatis, tolong masukkan kata atau hasil perhitungan sederhana berikut dalam kotak yang tersedia ([[Special:Captcha/help|info lengkap]]):',
	'captcha-createaccount' => 'Sebagai pelindungan terhadap spam, Anda diharuskan untuk mengetikkan kata atau hasil perhitungan di bawah ini di kotak yang tersedia untuk dapat mendaftarkan pengguna baru:<br />
([[Special:Captcha/help|info lengkap]])',
	'captcha-createaccount-fail' => 'Kode konfirmasi salah atau belum diisi.',
	'captcha-create' => 'Untuk menyunting halaman ini, silakan pecahkan penjumlahan sederhana di bawah ini dan masukkan jawaban di kotak yang tersedia ([[Special:Captcha/help|info lengkap]]):',
	'captcha-sendemail' => 'Sebagai pelindungan terhadap spam, silakan pecahkan penjumlahan sederhana di bawah ini dan masukkan jawaban di kotak yang tersedia ([[Special:Captcha/help|more info]]):',
	'captcha-sendemail-fail' => 'Kode konfirmasi salah atau belum diisi.',
	'captcha-disabledinapi' => 'Tindakan ini membutuhkan captcha, sehingga tidak dapat dilakukan melalui API.',
	'captchahelp-title' => 'Mengenai Captcha',
	'captchahelp-cookies-needed' => 'Anda perlu mengaktifkan cookie pada penjelajah web Anda untuk menggunakan fitur ini.',
	'captchahelp-text' => "Situs-situs web yang menerima tulisan dari publik, seperti wiki ini, kerapkali disalahgunakan oleh pengguna-pengguna yang tidak bertanggungjawab untuk mengirimkan spam dengan menggunakan program-program otomatis.
Walaupun pranala-pranala spam tersebut dapat dibuang, tetapi tetap saja menimbulkan gangguan berarti.

Kadang-kadang, terutama ketika sedang menambahkan pranala web baru ke suatu halaman, wiki ini akan menampilkan sebuah bentuk gambar dari tulisan berwarna atau terdistorsi dan meminta Anda untuk mengetikkan kata yang ditampilkan.
Karena ini merupakan suatu pekerjaan yang sulit diotomatisasi, pembatasan ini akan dapat dengan mudah dilalui oleh manusia, sekaligus juga dapat menghentikan hampir semua serangan spam dan robot otomatis lainnya.

Sayangnya, hal ini dapat menimbulkan kesulitan bagi pengguna dengan keterbatasan penglihatan atau pengguna yang menggunakan penjelajah web berbasis-teks atau berbasis-suara.
Saat ini, kami belum memiliki suatu alternatif suara untuk hal ini.
Silakan hubungi [[{{MediaWiki:Grouppage-sysop}}|pengurus]] untuk meminta bantuan jika hal ini menghambat Anda untuk mengirimkan suntingan yang layak.

Tekan tombol 'back' di penjelajah web Anda untuk kembali ke halaman penyuntingan.",
	'captcha-addurl-whitelist' => ' #<!-- biarkan baris ini sebagaimana adanya --> <pre>
# Sintaksisnya adalah sebagai berikut:
#   * Semua yang diawali dengan karakter "#" hingga akhir baris adalah komentar
#   * Semua baris yang tidak kosong adalah fragmen regex yang hanya akan dicocokkan dengan nama host di dalam URL
  #</pre> <!-- biarkan baris ini sebagaimana adanya -->',
	'right-skipcaptcha' => 'Melakukan tindakan pemicu captcha tanpa melalui Captcha',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'captcha-edit' => 'Tapno maurnos daytoy a panid, pangaasim a sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-desc' => 'Ikkan na kadagiti CAPTCHA a pamay-ay tapno masalakniban kadagiti spam ken agpugpugto ti kontrasenias',
	'captcha-addurl' => 'Ti inurnos mo ket adda nagyan na a panilpo iti ruar.
Tapno  maasalakniban kadagiti automatiko a spam, pangaasim na sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-badlogin' => 'Tapno  makasalaknib kadagiti automatiko a pinagsulbar ti kontrasenias, pangaasim a sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-createaccount' => 'Tapno  masalakniban kadagiti automatiko a pinagaramid ti pakabilangan, pangaasim a sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-createaccount-fail' => 'Saan a husto wenno awan ti pasingkedan a kodigo.',
	'captcha-create' => 'Tapno maramid ti panid, pangaasim a sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-sendemail' => 'Tapno  makasalaknib kadagiti automatiko a pinagspam, pangaasim a sulbaren ti nalaka a dagup dita baba ken ikabil ti sungbat mo dita kahon ([[Special:Captcha/help|adu pay a pakaammo]]):',
	'captcha-sendemail-fail' => 'Saan a husto wenno awan ti pasingkedan a kodigo.',
	'captcha-disabledinapi' => 'Daytoy nga aramid ket masapul na ti captcha, saan a mabalin a maaramid idiay API.',
	'captchahelp-title' => 'Tulong ti CAPTCHA',
	'captchahelp-cookies-needed' => 'Masapul nga adda galietas ti pagbasabasam tapno mabalin daytoy.',
	'captchahelp-text' => "Dagiti sapot a pagsaadan nga agaw-awat kadagiti maipablaak iti publiko, kasla daytoy a wiki, ket kanayon nga inabuso dagiti spammers nga agus-usar ti automatiko a ramramit ti pinagipablaak da kadagiti kukua da a panilpo ti adu a pagsasaadan.
Maikkat met dagitoy a panilpo, mgen makariri da unay.

No sagpaminsan pay, nangruna no agikabil kadagiti baro a panilpo ti sapot iti panid, ti wiki ket baka agiparang ti imahen a nakoloran wenno bakkaweng a teksto ken agdamag kenka nga agmakinilya kadagiti balikas a naiparang.
Yantangay daytoy ket obra a narigat a ma-automatiko, agpalubos kadagiti agpayso a tattao ti agipablaak  bayat nga agpasardeng ti kaaduan a spammers ken dagiti robot nga agraraut.

Daksangasat a padaksan na dagiti agar-aramat a marigatan nga agkita wenno agus-usar ti naibasta ti teksto wenno naibasta ti bitla a pagbasabasa.
Awan pay tatta ti mangeg a pagpilian a mabalin a gun-oden.
Pangngaasi a kontaken ti [[{{MediaWiki:Grouppage-sysop}}|administrador ti pagsaadan]] para iti pannulong no daytoy ket saan a napadpadaanan a pawilan na ti agpayso a pinagbaplaak mo.

Peslen ti 'agsubli' a buton dita pagbasabasam (browser) ti agsubli idiay panid ti pinagurnos.",
	'captcha-addurl-whitelist' => ' #<!-- baybayam nga kasta daytoy nga linia --> <pre>
# Dagiti sumaganad a gramatika:
#   * Amin-amin a naggapu iti "#" a kabalinan inggana ti kalpasan ti linia ket komentario
#   * Amin a saan a blanko a linia ket regex fragment a mangipada laeng ti naggapuan a nagsangailian iti uneg ti URLs
 #</pre> <!-- baybay-am a kasta daytoy a linia -->',
	'right-skipcaptcha' => 'Pakabaelan ti agkalbit ti CAPTCHA kadagiti aramid a saan a mapan ti CAPTCHA.',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'captcha-edit' => 'Til að breyta þessari síðu, gjörðu svo vel og finndu summuna að neðan og skrifaðu svarið í
kassann ([[Special:Captcha/help|frekari upplýsinngar]]):',
	'captcha-addurl' => 'Breyting þín felur í sér viðbætta ytri tengla. Til að hjálpa okkur að verjast sjálfvirku
auglýsingarusli gjörðu svo vel og finndu summuna að neðan og skrifaðu svarið í kassann ([[Special:Captcha/help|frekari upplýsinngar]]):',
	'captcha-badlogin' => 'Til að hjálpa okkur að verjast sjálfvirku leyniorðaárásum, gjörðu svo vel og finndu summuna að neðan og skrifaðu svarið í
kassann ([[Special:Captcha/help|frekari upplýsinngar]]):',
	'captcha-createaccount' => 'Til að hjálpa okkur að verjast sjálfvirkri gerð aðganga gjörðu svo vel og finndu summuna að neðan og skrifaðu svarið í kassann ([[Special:Captcha/help|frekari upplýsinngar]]):',
	'captcha-createaccount-fail' => 'Staðfestingarkóðinn var rangur eða ekki til staðar.',
	'captcha-create' => 'Til að búa síðuna til, gjörðu svo vel og finndu summuna að neðan og skrifaðu svarið í kassann ([[Special:Captcha/help|frekari upplýsinngar]]):',
	'captchahelp-title' => 'Captcha-hjálp',
	'captchahelp-cookies-needed' => 'Þú verður að leyfa vefkökur til þess að þetta virki.',
	'captchahelp-text' => 'Vefsíður sem að leyfa framlög frá frá almenningi, líkt og þessi wiki-vefur, eru oft misnotaðar af svokölluðum �spömmurum� sem nota sjálfvirk tól til þess að setja inn tengla á aðrar vefsíður. Aðrir notendur geta fjarlægt þessa tengla en töluverð truflun er af þeim.

Stundum þegar þú breytir síðum, sérstaklega ef breytingin felur í sér nýja tengla á aðra vefi, getur gerst að þú sért beðin(n) um að skrifa inn orð sem birtast á lituðum eða óskýrum myndum. Fyrir flesta notendur af holdi og blóði er þetta lítið mál en sjálfvirk tól ráða ekki við þetta.

Því miður kann þetta að valda notendum óþægindum sem hafa skerta sjón eða notast við talmálsvafra. Enn sem komið er eru ekki til aðrir valkostir fyrir þau tilvik. Ef þetta kemur í veg fyrir lögmætar breytingar af þinni hálfu getur þú leitað aðstoðar hjá stjórnendum vefsins.

Notaðu �back�-hnapp vafrans til að halda áfram.',
);

/** Italian (Italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Darth Kule
 */
$messages['it'] = array(
	'captcha-edit' => 'Per modificare la pagina è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella
([[Special:Captcha/help|maggiori informazioni]]):',
	'captcha-desc' => "Fornisce tecniche CAPTCHA per la protezione contro lo spam e l'individuazione delle password",
	'captcha-addurl' => "La modifica richiesta aggiunge dei nuovi collegamenti esterni alla pagina; come misura precauzionale contro l'inserimento automatico di spam, è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella ([[Special:Captcha/help|maggiori informazioni]]):",
	'captcha-badlogin' => 'Come misura precauzionale contro i tentativi di forzatura automatica della password, è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella ([[Special:Captcha/help|maggiori informazioni]]):',
	'captcha-createaccount' => 'Come misura precauzionale contro i tentativi di creazione automatica degli account, per registrarsi è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella ([[Special:Captcha/help|maggiori informazioni]]):',
	'captcha-createaccount-fail' => 'Codice di verifica errato o mancante.',
	'captcha-create' => 'Per creare la pagina è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella:<br />
([[Special:Captcha/help|maggiori informazioni]]):',
	'captcha-sendemail' => 'Come misura precauzionale nei confronti dei messaggi di spam automatici, è necessario risolvere il semplice calcolo presentato di seguito e inserire il risultato nella casella ([[Special:Captcha/help|maggiori informazioni]]):',
	'captcha-sendemail-fail' => 'Codice di verifica errato o mancante.',
	'captcha-disabledinapi' => 'Questa azione richiede un captcha, quindi non può essere eseguita tramite API.',
	'captchahelp-title' => "Cos'è il captcha?",
	'captchahelp-cookies-needed' => 'È necessario abilitare i cookie sul proprio browser per proseguire',
	'captchahelp-text' => "Capita spesso che i siti Web che accettano messaggi pubblici, come questo wiki, siano presi di mira da spammer che usano strumenti automatici per inserire collegamenti pubblicitari verso un gran numero di siti. Per quanto i collegamenti indesiderati si possano rimuovere, si tratta comunque di una seccatura non indifferente.

In alcuni casi, ad esempio quando si tenta di aggiungere nuovi collegamenti Web in una pagina, il software wiki può mostrare una immagine con un breve testo colorato e/o distorto chiedendo di riscriverlo in un'apposita finestrella. Poiché si tratta di un'azione difficile da replicare da parte di un computer, questo meccanismo consente a (quasi tutti) gli utenti reali di completare l'inserimento desiderato, impedendo l'accesso alla maggior parte degli spammer e degli altri attacchi automatizzati.

Sfortunatamente, queste misure di sicurezza possono mettere in difficoltà gli utenti con problemi visivi o coloro che utilizzano browser testuali o basati sulla sintesi vocale. Purtroppo al momento non è disponibile un meccanismo alternativo basato su messaggi audio; se queste procedure impediscono l'inserimento informazioni che si ritengono legittime, si prega di contattare gli [[{{MediaWiki:Grouppage-sysop}}|amministratori del sito]] e chiedere loro assistenza.

Fare clic sul pulsante 'back' del browser per tornare alla pagina di modifica.",
	'captcha-addurl-whitelist' => ' #<!-- non modificare in alcun modo questa riga --> <pre>
# La sintassi è la seguente:
#  * Tutto ciò che segue un carattere "#" è un commento, fino al termine della riga
#  * Tutte le righe non vuote sono frammenti di espressioni regolari che si applicano al solo nome dell\'host nelle URL
  #</pre> <!-- non modificare in alcun modo questa riga -->',
	'right-skipcaptcha' => 'Compie le azioni che attiverebbero il captcha senza dover passare per il captcha',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author JtFuruhata
 * @author Whym
 */
$messages['ja'] = array(
	'captcha-edit' => 'このページを編集�るには�下記の簡単な数式を計算し�欄に答えを入力してください�([[Special:Captcha/help|ヘルプ]])',
	'captcha-desc' => 'スパムやパスワード推定の攻撃を防ぐためのCAPTCHA�術を提供しま�',
	'captcha-addurl' => 'あなたの編集により新たに外部リンクが追加されようとしていま��スパム防止のため�下記の簡単な数式を計算し�欄に答えを入力してください�([[Special:Captcha/help|ヘルプ]])',
	'captcha-badlogin' => '自動化スクリプトによるパスワードクラック攻撃を防ぐため�下記の簡単な数式を計算し�欄に答えを入力してください�([[Special:Captcha/help|ヘルプ]])',
	'captcha-createaccount' => 'アカウントの自動作成を防ぐため�下記の簡単な数式を計算し�欄に答えを入力してください�([[Special:Captcha/help|ヘルプ]])',
	'captcha-createaccount-fail' => '確認コードの入力がないか�間違っていま��',
	'captcha-create' => 'ページを新規作成�るには�下記の簡単な数式を計算し�欄に答えを入力してください�([[Special:Captcha/help|ヘルプ]])',
	'captcha-sendemail' => 'ロボットによるスパムを防ぐため�下記の簡単な数式を計算し�欄に答えを入力してください ([[Special:Captcha/help|詳細]]):',
	'captcha-sendemail-fail' => '確認コードが間違っているか入力されていません�',
	'captcha-disabledinapi' => 'この操作はキャプチャを必要としているため�APIによって実行�ることができません�',
	'captchahelp-title' => 'CAPTCHA(画像認証)ヘルプ',
	'captchahelp-cookies-needed' => 'ブラウザのクッキー機能を有効に�る必要がありま��',
	'captchahelp-text' => '�般からの投稿を受け付けるこのウィキのようなウェブサイトは�自動投稿ツールを使って多くのサイトにリンクを張ってまわるスパマーにより荒らされがちで��このようなスパムは�去できるものの�その作業は大変に面�なもので��

このため�このウィキではときどき�特に新しい外部リンクがページに追加されたときなどに�色の付いた�あるいは形のゆがんだ文字の画像を提示し�なんと書いてあるか入力をお願い�ることがありま��この作業は自動化が難しいため�スパマーなどのプログラムを用いた攻撃をほぼ阻止しつつ�大半の生身の人間による投稿を可能にしま��

しかし�残念なことに�この方法により�視力の低い利用�や�テキスト�ースあるいは音声�ースのブラウザを使っている利用�にご不便をおかけ�る場合がありま��現�点では�音声による代替方法はありません�正当な投稿を�るにあたって本機能が障害となっている場合�[[{{MediaWiki:Grouppage-sysop}}|サイト管理�]]に�絡して協力を求めてください�

ページの編集に戻るには�ブラウザの�戻る�ボタンを押してください�',
	'captcha-addurl-whitelist' => ' #<!-- この行は変更しないでください --> <pre>
# 構文は以下のとおりで�:
#  * "#"文字から行末まではコメントとして扱われま�
#  * 空�を含んでいない行は�URLに含まれるホスト名との�致を検出�る正規表現で�
  #</pre> <!-- この行は変更しないでください -->',
	'right-skipcaptcha' => 'CAPTCHAが必要な場面でCAPTCHAをスキップして操作を実行�る',
);

/** Jutish (Jysk)
 * @author Huslåke
 * @author Ælsån
 */
$messages['jut'] = array(
	'captcha-edit' => 'For at redigere denne side, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-desc' => 'Semple captcha implementåsje',
	'captcha-addurl' => 'Din redigering tilføjer nye eksterne henvisninger til artiklen. Som beskyttelse mod automatiseret spam, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-badlogin' => 'For at beskytte mod automatiserede gæt på kodeord, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-createaccount' => 'For at beskytte mod automatisk oprettelse af brugernavne, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captcha-createaccount-fail' => 'Forkert eller manglende kodeord.',
	'captcha-create' => 'For at oprette en ny side, skal du give svaret på regnestyket nedenfor, og angive resultatet i feltet under det. ([[Special:Captcha/help|mere information]]):',
	'captchahelp-title' => 'Captcha-hjælp',
	'captchahelp-cookies-needed' => 'Din browser skal understøtte cookies, før dette kan gennemføres.',
	'captchahelp-text' => "Websites der accepterer indhold fra offentligheden, bliver ofte udsat for angreb fra spammere. Disse angreb sker med automatiske værktøjer, der anbringer de samme links på et stort antal websites på kort tid. Selvom disse links kan fjernes, er de en vedligeholdelsesmæssig byrde.

I visse tilfælde, specielt når der tilføjes nye links til denne wiki, vil softwaren vise dig et billede af et stykke forvredet og sløret tekst. Du skal indtaste det ord, der vises, før du kan gennemføre handlingen. Formålet er at skelne mellem mennesker og automatiserede værktøjer, da de sidste har meget svært ved at genkende ordene.

Desværre kan dette medføre problemer for svagtseende brugere, og brugere der bruger software der oplæser indholdet af siden. For øjeblikket findes der ikke et lydbaseret alternativ. Kontakt venligst en administrator med henblik på at få hjælp, hvis dette forhindrer tilføjelsen af godartet materiale.

Tryk på 'tilbage'-knappen i din browser for at returnere til redigeringssiden.",
	'captcha-addurl-whitelist' => ' #<!-- Undlad at rette denne linie --> <pre>
# Vejledning:
#  * Alt fra et "#"-tegn til slutningen af en linie er en kommentar
#  * Alle ikke-blanke linier benyttes som regulært udtryk, der anvendes på hostnavne i URLer
  #</pre> <!-- Undlad at rette denne linie -->',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'captcha-edit' => 'Kanggo nyunting kaca iki, mangga pecahna tambah-tambahan ing ngisor iki lan lebokna wangsulané ing kothak cedaké ([[Special:Captcha/help|info sabanjuré]]):',
	'captcha-desc' => 'Implementasi prasaja captcha',
	'captcha-addurl' => "Suntingan panjenengan iku nyertakaké pranala jaba anyar.
Kanggo ngéwangi ngreksa lawan ''spam'' otomatis, tulung pecahna itung-itungan ing ngisor iki lan lebokna kasilna sajroning kothak ([[Special:Captcha/help|info sabanjuré]]):",
	'captcha-badlogin' => 'Kanggo ngreksa lawan parengkahan kunci sandhi otomatis, tulung lebokna tembung utawa kasil itung-itungan gampang ing ngisor sajroning kothak sing wis sumedya ([[Special:Captcha/help|info sabanjuré]]):',
	'captcha-createaccount' => 'Kanggo ngreksa lawan panggawéyan rékening (akun) otomatis, tulung pecahna itung-itungan ing ngisor iki lan lebokna kasilna sajroning kothak ([[Special:Captcha/help|info sabanjuré]]):',
	'captcha-createaccount-fail' => 'Kode pandhedhesan (konfirmasi) salah utawa durung diisi.',
	'captcha-create' => 'Kanggo nggawé kaca iki, mangga itung-itungan ing ngisor iki diwangsuli sajroning kothak ([[Special:Captcha/help|info sabanjuré]]):',
	'captchahelp-title' => 'Pitulung Captcha',
	'captchahelp-cookies-needed' => 'Panjenengan perlu ngaktifaké cookie ing panjlajah wèb panjenengan kanggo nganggo fitur iki.',
	'captchahelp-text' => "Situs-situs wèb sing nampa data saka umum, kaya ta wiki iki, kerep disalahgunakaké déning panganggo-panganggo sing ora bertanggungjawab kanggo ngirimaké ''spam'' mawa program-program otomatis. Senadyan spam-spam iku bisa dibuang kabèh, nanging waé tetep ngrusuhi lan dianggep gawé masalah.

Kadhangkala, utamané yèn mènèhi pranala wèb anyar ing sawijinig kaca, wiki iki bisa nuduhaké gambar sawijining gambar tulisan sing ana wernané utawa sing rusak lan njaluk panjenengan ngetik ulang tembung sing ana gambar iki.
Amerga pagawéyan iki angèl diotomatisasi, pawatesan iki bisa ngidinaké mèh kabèh wong asli mbanjuraké sumbangsihé ngirim suntingan nanging menggak para pangirim spam lan robot otomatis.

Émané, perkara iki bisa nggawé sawetara panganggo kangélan nyunting kaca iki, utamané sing daya pandelengané kurang utawa para panganggo sing nganggo panjlajah tèks adhedhasar tèks utawa swara. Saiki iki awaké dhéwé ora duwé alternatif audio kanggo iki. Mangga nyuwun pitulung karo [[{{MediaWiki:Grouppage-sysop}}|para pangurus]] yèn perkara iki menggak panjenengan ngirimaké suntingan sing layak.

Pencèten tombol 'back' ing panjlajah wèb panjenengan kanggo bali menyang kaca panyuntingan.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Sintaksisé kaya mengkéné:
#  * Kabèh sing diawali mawa karakter "#" nganti pungkasané baris iku komentar
#  * Kabèh garis sing ora kosong iku fragmèn regex sing namung cocog karo jeneng host sajroning URL
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Nglakokaké aksi-aksi sing murupaké captcha tanpa kudu ngliwati captcha',
);

/** Georgian (ქართული)
 * @author ITshnik
 */
$messages['ka'] = array(
	'captcha-edit' => 'ამ გვერდის რედაქტირებისათვის, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
	'captcha-addurl' => 'თქვენი ცვლილება შეიცავს ახალ გარე ბმულებს.
ავტომატური სპამინგისგან თავდაცვის მიზნით, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
	'captcha-badlogin' => 'პაროლების ავტომატური გატეხვისგან თავდაცვის მიზნით, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
	'captcha-createaccount' => 'ანგარიშების ავტომატური შექმნისგან თავდაცვის მიზნით, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
	'captcha-create' => 'გვერდის შესაქმნელად, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
	'captcha-sendemail' => 'ავტომატური სპამინგისგან თავდაცვის მიზნით, გთხოვთ, ამოხსნათ ქვემოთ მოცემული მარტივი მაგალითი და პასუხი შეიყვანოთ ყუთში ([[Special:Captcha/help|მეტი ინფორმაცია]]):',
);

/** Kara-Kalpak (Qaraqalpaqsha)
 * @author Atabek
 */
$messages['kaa'] = array(
	'captcha-createaccount-fail' => "Tastıyıqlawshı kodın'ız nadurıs yamasa jazılmag'an",
);

/** Kazakh (Arabic script) (�قازاقشا (تٴوتە)�) */
$messages['kk-arab'] = array(
	'captcha-edit' => 'بۇل بەتتٸ ٶڭدەۋ ٷشٸن, تٶمەندەگٸ قوسىندىلاۋدى شەشٸڭٸز دە, نٵتيجەسٸن
اۋماققا ەنگٸزٸڭٸز ([[{{ns:special}}:Captcha/help|كٶبٸرەك اقپارات]]):',
	'captcha-addurl' => 'تٷزەتۋٸڭٸزدە جاڭا سىرتقى سٸلتەمەلەر بار ەكەن. ٶزدٸكتٸك «سپام» جاسالۋىنان قورعانۋ ٷشٸن,
تٶمەندەگٸ قاراپايىم قوسىندىلاۋدى شەشٸڭٸز دە, نٵتيجەسٸن اۋماققا ەنگٸزٸڭٸز ([[{{ns:special}}:Captcha/help|كٶبٸرەك اقپارات]]):',
	'captcha-badlogin' => 'قۇپييا سٶزدٸ ٶزدٸكتٸك قيراتۋدان قورعانۋ ٷشٸن,
تٶمەندەگٸ قاراپايىم قوسىندىلاۋدى شەشٸڭٸز دە, نٵتيجەسٸن اۋماققا ەنگٸزٸڭٸز ([[{{ns:special}}:Captcha/help|كٶبٸرەك اقپارات]]):',
	'captcha-createaccount' => 'جاڭا تٸركەلگٸ ٶزدٸكتٸك جاسالۋىنان قورعانۋ ٷشٸن, تٶمەندەگٸ قاراپايىم قوسىندىلاۋدى
شەشٸڭٸز دە, نٵتيجەسٸن اۋماققا ەنگٸزٸڭٸز ([[{{ns:special}}:Captcha/help|كٶبٸرەك اقپارات]]):',
	'captcha-createaccount-fail' => 'كۋٵلاندىرۋ كودى دۇرىس ەمەس نەمەسە جوق.',
	'captcha-create' => 'جاڭا بەتتٸ باستاۋ ٷشٸن, تٶمەندەگٸ قاراپايىم قوسىندىلاۋدى شەشٸڭٸز دە,
نٵتيجەسٸن اۋماققا ەنگٸزٸڭٸز ([[{{ns:special}}:Captcha/help|كٶبٸرەك اقپارات]]):',
	'captchahelp-title' => 'CAPTCHA انىقتاماسى',
	'captchahelp-cookies-needed' => 'بۇل جۇمىس ٸستەۋ ٷشٸن, شولعىشىڭىزدا  «cookies»  دەگەندٸ ەندٸرٸڭٸز.',
	'captchahelp-text' => 'ٶزدٸكتٸك قۇرالدارى بار «سپاممەرلەر», بارشادان جٸبەرٸلگەن حاباردى قابىلدايتىن, بۇل ۋيكي سيياقتى, ۆەب-توراپتارعا سٸلتەمەلەرٸمەن جيٸ جاۋدىرادى. وسىنداي «سپام» سٸلتەمەلەرٸن الاستاۋ بولعاندا دا, بۇل مٵندٸ ىزا كەلتٸرەدٸ.

كەيدە, ٵسٸرەسە بەتكە جاڭا ۆەب سٸلتەمەسٸن قوسقاندا, ۋيكي ٶڭٸ ٶزگەرگەن نە قيسايعان مٵتٸندٸ كٶرسەتٸپ جٵنە سول سٶزدەردٸ ەنگٸزۋ سۇراۋى مٷمكٸن. بۇل تاپسىرىس ٶزدٸك تٷردە اتقارۋ ٶتە قيىن, سوندىقتان بۇل يماندى ادام كٶپشٸلٸگٸنە كەدەرگٸ بولمايدى, بٸراق «سپاممەرلەردٸ» جٵنە بۇزاقى بوتپەن باسقا شابۋىل جاساعانداردى توقتاتادى.

ٶكٸنٸشكە وراي, بۇل كٶرۋٸ تٶمەندەگەن, نەمەسە مٵتٸن نە داۋىس نەگٸزٸندەگٸ شولعىشتى قولداناتىن پايدالانۋشىعا ىڭعايسىزدىق كەلتٸرۋگە مٷمكٸن. وسى قازٸر بٸزدە دىبىستى بالاما جوق. ەگەر بۇل ادال جازۋىڭىزعا كەدەرگٸلەسە, توراپ باقىلاۋشىلارىنا قاتىناسىڭىز.

بۇل جۇمىستى ٸستەۋ ٷشٸن شولعىشىڭىزدا «cookies» دەگەندٸ ەندٸرۋ قاجەت.

بەت ٶڭدەۋٸنە قايتۋ بارۋ ٷشٸن «ارتقا» دەگەن تٷيمەسٸن باسىڭىز.',
);

/** Kazakh (Cyrillic script) (�Қазақша (ки�ил)�) */
$messages['kk-cyrl'] = array(
	'captcha-edit' => 'Бұл бетті өңдеу үшін, төмендегі қосындылауды шешіңіз де, н�тижесін
аумаққа енгізіңіз ([[{{ns:special}}:Captcha/help|көбі�ек ақпа�ат]]):',
	'captcha-addurl' => 'Түзетуіңізде жаңа сы�тқы сілтемеле� ба� екен. Өздіктік «спам» жасалуынан қо�ғану үшін,
төмендегі қа�апайым қосындылауды шешіңіз де, н�тижесін аумаққа енгізіңіз ([[{{ns:special}}:Captcha/help|көбі�ек ақпа�ат]]):',
	'captcha-badlogin' => 'Құпия сөзді өздіктік қи�атудан қо�ғану үшін,
төмендегі қа�апайым қосындылауды шешіңіз де, н�тижесін аумаққа енгізіңіз ([[{{ns:special}}:Captcha/help|көбі�ек ақпа�ат]]):',
	'captcha-createaccount' => 'Жаңа ті�келгі өздіктік жасалуынан қо�ғану үшін, төмендегі қа�апайым қосындылауды
шешіңіз де, н�тижесін аумаққа енгізіңіз ([[{{ns:special}}:Captcha/help|көбі�ек ақпа�ат]]):',
	'captcha-createaccount-fail' => 'Ку�ланды�у коды дұ�ыс емес немесе жоқ.',
	'captcha-create' => 'Жаңа бетті бастау үшін, төмендегі қа�апайым қосындылауды шешіңіз де,
н�тижесін аумаққа енгізіңіз ([[{{ns:special}}:Captcha/help|көбі�ек ақпа�ат]]):',
	'captchahelp-title' => 'CAPTCHA анықтамасы',
	'captchahelp-cookies-needed' => 'Бұл жұмыс істеу үшін, шолғышыңызда  «cookies»  дегенді енді�іңіз.',
	'captchahelp-text' => 'Өздіктік құ�алда�ы ба� «спамме�ле�», ба�шадан жібе�ілген хаба�ды қабылдайтын, бұл уики сияқты, веб-то�апта�ға сілтемеле�імен жиі жауды�ады. Осындай «спам» сілтемеле�ін аластау болғанда да, бұл м�нді ыза келті�еді.

Кейде, �сі�есе бетке жаңа веб сілтемесін қосқанда, уики өңі өзге�ген не қисайған м�тінді кө�сетіп ж�не сол сөзде�ді енгізу сұ�ауы мүмкін. Бұл тапсы�ыс өздік тү�де атқа�у өте қиын, сондықтан бұл иманды адам көпшілігіне кеде�гі болмайды, бі�ақ «спамме�ле�ді» ж�не бұзақы ботпен басқа шабуыл жасағанда�ды тоқтатады.

Өкінішке о�ай, бұл кө�уі төмендеген, немесе м�тін не дауыс негізіндегі шолғышты қолданатын пайдаланушыға ыңғайсыздық келті�уге мүмкін. Осы қазі� бізде дыбысты балама жоқ. Еге� бұл адал жазуыңызға кеде�гілесе, то�ап бақылаушыла�ына қатынасыңыз.

Бұл жұмысты істеу үшін шолғышыңызда «cookies» дегенді енді�у қажет.

Бет өңдеуіне қайту ба�у үшін «А�тқа» деген түймесін басыңыз.',
);

/** Kazakh (Latin script) (�Qazaqşa (latın)�) */
$messages['kk-latn'] = array(
	'captcha-edit' => 'Bul betti öñdew üşin, tömendegi qosındılawdı şeşiñiz de, nätïjesin
awmaqqa engiziñiz ([[{{ns:special}}:Captcha/help|köbirek aqparat]]):',
	'captcha-addurl' => 'Tüzetwiñizde jaña sırtqı siltemeler bar eken. Özdiktik «spam» jasalwınan qorğanw üşin,
tömendegi qarapaýım qosındılawdı şeşiñiz de, nätïjesin awmaqqa engiziñiz ([[{{ns:special}}:Captcha/help|köbirek aqparat]]):',
	'captcha-badlogin' => 'Qupïya sözdi özdiktik qïratwdan qorğanw üşin,
tömendegi qarapaýım qosındılawdı şeşiñiz de, nätïjesin awmaqqa engiziñiz ([[{{ns:special}}:Captcha/help|köbirek aqparat]]):',
	'captcha-createaccount' => 'Jaña tirkelgi özdiktik jasalwınan qorğanw üşin, tömendegi qarapaýım qosındılawdı
şeşiñiz de, nätïjesin awmaqqa engiziñiz ([[{{ns:special}}:Captcha/help|köbirek aqparat]]):',
	'captcha-createaccount-fail' => 'Kwälandırw kodı durıs emes nemese joq.',
	'captcha-create' => 'Jaña betti bastaw üşin, tömendegi qarapaýım qosındılawdı şeşiñiz de,
nätïjesin awmaqqa engiziñiz ([[{{ns:special}}:Captcha/help|köbirek aqparat]]):',
	'captchahelp-title' => 'CAPTCHA anıqtaması',
	'captchahelp-cookies-needed' => 'Bul jumıs istew üşin, şolğışıñızda  «cookies»  degendi endiriñiz.',
	'captchahelp-text' => 'Özdiktik quraldarı bar «spammerler», barşadan jiberilgen xabardı qabıldaýtın, bul wïkï sïyaqtı, veb-toraptarğa siltemelerimen jïi jawdıradı. Osındaý «spam» siltemelerin alastaw bolğanda da, bul mändi ıza keltiredi.

Keýde, äsirese betke jaña veb siltemesin qosqanda, wïkï öñi özgergen ne qïsaýğan mätindi körsetip jäne sol sözderdi engizw surawı mümkin. Bul tapsırıs özdik türde atqarw öte qïın, sondıqtan bul ïmandı adam köpşiligine kedergi bolmaýdı, biraq «spammerlerdi» jäne buzaqı botpen basqa şabwıl jasağandardı toqtatadı.

Ökinişke oraý, bul körwi tömendegen, nemese mätin ne dawıs negizindegi şolğıştı qoldanatın paýdalanwşığa ıñğaýsızdıq keltirwge mümkin. Osı qazir bizde dıbıstı balama joq. Eger bul adal jazwıñızğa kedergilese, torap baqılawşılarına qatınasıñız.

Bul jumıstı istew üşin şolğışıñızda «cookies» degendi endirw qajet.

Bet öñdewine qaýtw barw üşin «Artqa» degen tüýmesin basıñız.',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'captcha-edit' => 'ដើម្បី�ែប្រែ�ទំព័រនេះ សូមដោះស្រាឋប្រមាណវិធីបូឋខាង�្រោម�នេះរួច�បញ្ជូលចម្លើឋទៅ�្នុង�ប្រអប់សិន([[Special:Captcha/help|ព័ត៌មាន�បន្ថែម]])៖',
	'captcha-addurl' => '�ំណែ�របស់អ្នឋមាន�តំណភ្ជាប់�្រៅ�ថ្មី។ ដើម្បី�ជួ�បង្�ារ�ស្ប៉ាម�ស្វ័�ប្រវត្តិ សូមដោះស្រាឋប្រមាណវិធីបូឋខាង�្រោម�នេះរួច�បញ្ជូលចម្លើឋទៅ�្នុង�ប្រអប់សិន([[Special:Captcha/help|ព័ត៌មាន�បន្ថែម]])៖',
	'captcha-badlogin' => 'ដើម្បី�ារពារ�ារបំបែ�ពា�្�សំងាត់ដោ�ស្វ័�ប្រវត្តិ សូមដោះស្រា�ផលបូ�ខាង�្រោមរួចបញ្ជូលចម្លើ�ទៅ�្នុងប្រអប់ ([[Special:Captcha/help|ព័ត៌មានបន្ថែម]])៖',
	'captcha-createaccount' => 'ដើម្បី�បង្�ារ�ារបង្�ើត�គណនី�ស្វ័�ប្រវត្តិ សូមដោះស្រាឋប្រមាណវិធីបូឋខាង�្រោម�នេះរួច�បញ្ជូលចម្លើឋទៅ�្នុង�ប្រអប់សិន([[Special:Captcha/help|ព័ត៌មាន�បន្ថែម]])៖',
	'captcha-createaccount-fail' => '�ូដផ្ទ�ងផ្ទាត់បាត់បង់ឬមិនត្រឹមត្រូវ។',
	'captcha-create' => 'ដើម្បី�បង្�ើត�ទំព័រ សូមដោះស្រាឋប្រមាណវិធីបូឋខាង�្រោម�នេះរួច�បញ្ជូលចម្លើឋទៅ�្នុង�ប្រអប់សិន([[Special:Captcha/help|ព័ត៌មាន�បន្ថែម]])៖',
	'captchahelp-title' => 'ជំនួ�អំពី Captcha',
);

/** Korean (한국어)
 * @author IRTC1015
 * @author Klutzy
 * @author Kwj2772
 * @author ToePeu
 */
$messages['ko'] = array(
	'captcha-edit' => '�을 편집하기 위해서는, 아래의 간단한 덧셈 값을 입력상자에 적어 주세요([[Special:Captcha/help|자세한 정보]]):',
	'captcha-desc' => '스팸과 비�번호 탈취를 방�하기 위한 캡차 기능을 제공',
	'captcha-addurl' => '편집 내용에 다른 웹 사이트 링크� 포함되어 있습니다. 자� 스팸을 막기 위해, 아래의 간단한 계산 값을 입력상자에 적어 주세요([[Special:Captcha/help|자세한 정보]]):',
	'captcha-badlogin' => '계정 암호 해킹을 막기 위해, 아래의 간단한 계산 값을 입력상자에 적어 주세요. ([[Special:Captcha/help|자세한 정보]]):',
	'captcha-createaccount' => '자� �입을 막기 위해, 아래 문제의 답을 적어 주세요. ([[Special:Captcha/help|�련 도�말]]):',
	'captcha-createaccount-fail' => '입력값이 잘못되었거나 없습니다.',
	'captcha-create' => '문서를 만들기 위해서는, 아래의 간단한 계산 값을 입력상자에 적어 주세요([[Special:Captcha/help|자세한 정보]]):',
	'captcha-sendemail' => '자��된 스팸을 방�하기 위해, 아래의 간단한 계산 값을 입력상자에 적어 주세요 ([[Special:Captcha/help|자세한 정보]]):',
	'captcha-sendemail-fail' => '입력값이 잘못되었거나 없습니다.',
	'captcha-disabledinapi' => '이 �작� 캡차를 거쳐야 하기 때문에 API로 이 작업을 수행할 수 없습니다.',
	'captchahelp-title' => 'Captcha 도�말',
	'captchahelp-cookies-needed' => '정상적으로 작�하려면 웹 브라우�의 쿠키 사용이 �성�되어있어야 합니다.',
	'captchahelp-text' => '이 위키� �이 사람들의 공개적인 참여� �능한 웹 사이트에서는 자� 프로그램이 스팸을 뿌리는 경우� 있습니다. 물론 이러한 스팸� 제거할 수는 있�만 번거로운 작업이 늘어납니다.

이러한 스팸을 방�하기 위해서, 이 위키의 문서에 웹 사이트 주소를 추�하는 등의 행�을 할 경우에는 비�린 �자� 들어있는 그림을 보여주고 그 그림의 �자를 입력해 달라고 하는 경우� 있습니다. 이 �자 입력 작업� 자� 프로그램을 만들기� 힘들기 때문에 스팸을 효과적으로 막으면서 일반 사용자를 막� 않을 수 있습니다.

웹 브라우�에서 그림을 �벽하게 표시할 수 없거나, 그림이 나오� 않는 텍스트 방식이나 음성 합성 방식 웹 브라우�를 사용하는 경우에는 이러한 입력이 불�능합니다. 아직까�는 이런 경우에 �한 �안이 없습니다. 이 경우 [[{{MediaWiki:Grouppage-sysop}}|사이트 �리자]]에게 도�을 요청해 주세요.

이전 �면으로 돌아�려면 웹 브라우�의 �뒤로 버튼을 눌러 주세요.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# 문법� 다음과 �습니다:
#  * "#"로 시작하는 줄� 주석입니다.
#  * 빈 줄이 아닌 줄� 정규식으로, URL의 호스트만을 �사합니다.
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => '캡차 과정을 거치� 않고 캡차 과정을 거친 것으로 간주',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'captcha-edit' => 'Öm de Sigg ze ändere, don di Zahle onge zosamme zälle un don de Antwoot en dat Käßje endraare. ([[Special:Captcha/help|Verklierung]])',
	'captcha-desc' => 'Brängk en �Kaptscha� en et Wiki, öm jääje SPAM un jäje et Paßwööter-Dorschprobeere ze schöze.',
	'captcha-addurl' => 'Do häß neu Lingks op frembde Websigge dobei jedonn.
Mer schöze uns Wiki jäje automatesche SPAM, dröm
don di Zahle onge zosamme zälle un don de Antwoot
en dat Käßje endraare. (Verklierung)',
	'captcha-badlogin' => 'Mer schöze Metmaacher en unsem Wiki jäje automatesche
Paßwoot-Knackerei, dröm don di Zahle onge zosamme zälle,
un de Antwoot en dat Käßje endraare. (Verklierung)',
	'captcha-createaccount' => 'Mer schöze uns Wiki dojäje, dat mer en Masse automatesch
Metmaacher aanmeldt. Dröm beß esu joot un
don di Zahle onge zosamme zälle un don de Antwoot
en dat Käßje endraare. (Verklierung)',
	'captcha-createaccount-fail' => 'De Bestätijungszahl fählt udder es verkeeht.',
	'captcha-create' => 'Öm di Sigg neu aanzelääje, don di Zahle onge zosamme zälle,
un don de Antwoot en dat Käßje endraare. (Verklierung)',
	'captcha-sendemail' => 'För automettesche SPAM ze verhendere, donn di Zahle onge zosamme zälle,
un don de Antwoot en dat Käßje endraare. ([[Special:Captcha/help|Verklierung]])',
	'captcha-sendemail-fail' => 'De Bestätijungszahl fählt udder es verkeeht.',
	'captcha-disabledinapi' => 'För di Aufjab moß en extra Bestätejon enjejovve wääde, un dat künne mer nit övver de API.',
	'captchahelp-title' => 'Äklierung zum Kaptscha SPAM-Schotz',
	'captchahelp-cookies-needed' => 'Do moß <i lang="en">Cookies</i> en Dingem Brauser enjeschalldt han, domet da hee fluppe kann.',
	'captchahelp-text' => 'Op Web Saits wi dat Wiki hee, wo jeder jät beidraare kann, do kumme se öff wi de Fleeje un don met Projramme un fun Hand bloß Reklame-Lingks op de eije Websigge affläje, oohne Sinn un Verstand. Esu en SPAM kam_mer widder fott maache, dat määt ävver Ärjer un Opwand.

Su jät wulle_mer nit hann, un donn_et jlish widder fottschmiiße.

Domet mer do_met nidd_esu fill Ärrbed hann,
maache_mer dänne Autmaate et Lääve schwer.
Wann uns Wikki merk, et künnd_esu jet em Bösh sinn, dann zeisch et e Belldshe med komije Texte dren, un fröhsch, dat mer se jenau esu ennjävve sullt,
wi se do shtonn. För_enne Minsch eß dat eifach, ävver dat es fodammp schwierich ze projrammiere.
Dat es e beßßje läßtish för der Minsch, ävver de Robbotter hälld et unß bahl komplett fum Lief, un su jesinn, ess et netto enne Jewenn.

Wann De Dich ens fordeis, es och nit schlimm, De wees norr_enß jefrooch. Wat De jetipp häs, kütt nit fott.

Schaad es, mer hann noch keine Wääsh, dat met Shprooch odder sönswi ze maache, su dat Lück met Shprooch_Ußßjaave, Braille, un met nur Tex em Brauser oohne Bellder, em Räähn shtonn künnte. Dooht Ühr Zeush eets enß oohne Lengk speischere, un saat dä [[{{MediaWiki:Grouppage-sysop}}|Wikki_Köbesse]],
wann Ühr Probbleme hatt. Do weed_Üch jehollfe weede.

Jetz kanns De met Dingem Brauser singem �Zeröck�-Knopp wigger maache, wo De fürher woohß.',
	'captcha-addurl-whitelist' => ' #<!-- Lohß di Reih he jenou esu wi se es --> <pre>
# Dä Opbou es:
# * Alles fun enem #-Zeiche bes an et Engk fun ene Reih es ene Kommentaa för de Minsche
# * Jede Reih met jet dren es en Stöck regular Expression, wat Domains en URL treffe kann
  #</pre> <!-- Lohß di Reih he jenou esu wi se es -->',
	'right-skipcaptcha' => 'De Opforderung fum Kaptscha överjonn',
);

/** Latin (Latina)
 * @author UV
 */
$messages['la'] = array(
	'captcha-edit' => 'Ad hanc paginam recensendum, necesse est tibi solvere calculationem subter et responsum in capsam inscribere ([[Special:Captcha/help|Quidst illud?]]):',
	'captcha-addurl' => 'Emendatione tua insunt nexus externi; ut spam automaticum vitemus, necesse est tibi solvere calculationem subter et responsum in capsam inscribere ([[Special:Captcha/help|Quidst illud?]]):',
	'captcha-badlogin' => 'Ut vitemus ne tesserae frangantur, necesse est tibi solvere calculationem subter et responsum in capsam inscribere ([[Special:Captcha/help|Quidst illud?]]):',
	'captcha-createaccount' => 'Ut creationem rationum automaticam vitemus, necesse est tibi solvere calculationem subter et responsum in capsam inscribere ([[Special:Captcha/help|Quidst illud?]]):',
	'captcha-createaccount-fail' => 'Codex affirmationis aut non scriptus est aut male.',
	'captcha-create' => 'Ad paginam creandum, necesse est tibi solvere calculationem subter et responsum in capsam inscribere ([[Special:Captcha/help|Quidst illud?]]):',
	'captchahelp-title' => 'Captcha auxilium',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'captcha-edit' => "Fir dës Säit z'änneren, léist w.e.g. dës Rechenaufgab a gitt d'Resultat an d'Këscht ënnendrënner an ([[Special:Captcha/help|méi Informatiounen]]):",
	'captcha-desc' => 'Stellt Captcha-Techniken zur Verfügung fir géint Spam an Errode vu Passwierder ze schützen',
	'captcha-addurl' => 'An ärer Ännerung sinn nei extern Linken. Fir eis virun automatiséiertem Spamming ze schütze froe mir iech fir déi folgend einfach  Rechenaufgab ze léisen an d\'Resultat an d\'Feld ënnen anzedroen. Klickt duerno w.e.g. nach eng Kéier op "Säit ofspäicheren" [[Special:Captcha/help|méi Informatiounen]].',
	'captcha-badlogin' => "Fir eis géint automatescht Hacke vu Passwierder ze schützen, léist w.e.g. déi einfach Additioun hei ënnendrënner an tippt d'Äntwert an d'Këscht ([[Special:Captcha/help|méi Informatiounen]]):",
	'captcha-createaccount' => "Fir eis géint d'automatescht Uleeë vu Benotzerkonten ze schützen, léist w.e.g. déi einfach Additioun hei ënnendrënner, an tippt d'Äntwert an d'Këscht ([[Special:Captcha/help|méi Informatiounen]]):",
	'captcha-createaccount-fail' => 'Falschen oder kee Confirmatiouns-Code.',
	'captcha-create' => "Fir eng Nei Säit unzeleeën, léist w.e.g. déi einfach Additioun hei ënnendrënner an tippt d'Äntwert an d'Këscht ([[Special:Captcha/help|méi Informatiounen]]):",
	'captcha-sendemail' => "Fir eis géint automatescht Spammen ze schützen, léist w.e.g. déi einfach Additioun hei ënnendrënner an tippt d'Äntwert an d'Këscht ([[Special:Captcha/help|méi Informatiounen]]):",
	'captcha-sendemail-fail' => 'Falschen oder kee Confirmatiouns-Code.',
	'captcha-disabledinapi' => 'Dës Aktioun brauch e Captcha, dofir ka se net mat enger API gemaach ginn.',
	'captchahelp-title' => 'Captcha-Hëllef',
	'captchahelp-cookies-needed' => 'Dir musst Cookieën an ärem Browser erlaben fir dat dëst fonktionéiert.',
	'captchahelp-text' => "Websäiten, déi et jidwerengem erlaben Ännerunge virzehuelen, sou wéi op dëser Wiki, ginn dacks vu sougenannte Spammer mëssbraucht, déi automatiséiert hir Linken op vill Internetsäite setzen. Esou Spam-Linke kënne wuel geläscht ginn, mee si sinn trotzdem eng grouss Plo.

Heiandsdo, besonnesch wann nei Internet-Linken op eng Säit derbäigesat ginn, weist dës Wiki iech e Bild mat faarwegem oder verzerrtem Text a freet iech fir déi gewise Wierder anzetipppen. Well dëst eng Aufgab ass déi schwéier ze automatiséieren ass, erlaabt dëst datt Mënschen hir Ännerunge kënnen agi wärend déi meescht Spammer an aner Roboter-Attacke kënnen ofgewiert ginn.

Leider kann dëst zu Schwierigkeete féiere fir Persounen déi net esou gutt gesinn oder déi text-baséiert oder sprooch-baséiert Browser benotzen.
Zu dësem Zäitpunkt hu mir leider keng audio-Alternativ zu eiser Verfügung.
Kontaktéiert w.e.g. [[{{MediaWiki:Grouppage-sysop}}|een Administrateur]] fir Hëllef wann dëst iech onerwaarter Wäis vu legitimen Editen ofhält.

Dréckt op den 'Zréck' Knäppche vun ärem Browser fir an d'Beaarbechtungsfënster zréckzekommen.",
	'captcha-addurl-whitelist' => '  #<!-- Dës Linn onverännert loossen --> <pre>
#  Syntax:
#  * Alles vun engem #-Zeechen u bis zum Enn vun där Zeil ass eng Bemierkung
#  * All Zeil déi net eidel ass, ass ee Regex-Fragment, dat nëmme mat Hosten bannent URLë fonctionnéiert
   #</pre> <!-- Dës Linn onverännert loossen -->',
	'right-skipcaptcha' => 'Aktiounen déi eng Captcha-Aktioun verlaangen ausféieren, ouni dës maachen ze mussen',
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'captcha-edit' => "Geer wil dees pazjena bewerke. Veur estebleef 't antjwaord op de óngerstäönde einvawdife som in 't inveurvenster in ([[Special:Captcha/help|mieë informatie]]):",
	'captcha-desc' => "Bied CAPTCHA-technieke óm besjörming te beje taenge spam en 't raoje van wachweurd.",
	'captcha-addurl' => "Uw bewerking bevat nieuwe externe links (URL's). Voer ter bescherming tegen geautomatiseerde spam alstublieft het antwoord op de onderstaande eenvoudige som in in het invoerveld ([[Special:Captcha/help|meer informatie]]):",
	'captcha-badlogin' => 'Los alstublieft de onderstaande eenvoudige som op en voer het antwoord in het invoervenster in ter bescherming tegen het automatisch kraken van wachtwoorden ([[Special:Captcha/help|meer informatie]]):',
	'captcha-createaccount' => 'Voer ter bescherming tegen geautomatiseerde spam het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-createaccount-fail' => 'De bevestigingscode ontbreekt of is onjuist.',
	'captcha-create' => 'U wilt een nieuwe pagina aanmaken. Voer alstublieft het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-sendemail' => "Veur ter besjerming taege geautomatiseerde spam 't antjwaord op de ongerstaonde einvawdige som in 't inveurvinster in ([[Special:Captcha/help|mier informatie]]):",
	'captcha-sendemail-fail' => 'De bevestigingscode ontbrèk of is ónjuus.',
	'captcha-disabledinapi' => "Veur dees actie is 'n captcha neudig die neet aafgehanjeldj kin waere via de API.",
	'captchahelp-title' => 'Captcha-hölp',
	'captchahelp-cookies-needed' => 'Ge dient in uw browser cookies ingeschakeld te hebbe om dit te laote werke.',
	'captchahelp-text' => "Websites die vrie te bewèrke zeen, wie deze wiki, waere döks misbroek door spammers die d'r met hun programma's automatisch links op zetten naar vele websites. Hoewel deze externe links weer verwijderd kunnen worden, leveren ze wel veel hinder en administratief werk op.

Soms, en in het bijzonder bij het toevoegen van externe links op pagina's, toont de wiki u een afbeelding met gekleurde of vervormde tekst en wordt u gevraagd de getoonde tekst in te voeren. Omdat dit proces lastig te automatiseren is, zijn vrijwel alleen mensen in staat dit proces succesvol te doorlopen en worden hiermee spammers en andere geautomatiseerde aanvallen geweerd.

Helaas levert deze bevestiging voor gebruikers met een visuele handicap of een tekst- of spraakgebaseerde browser problemen op. Op het moment is er geen alternatief met geluid beschikbaar. Vraag alstublieft assistentie van de [[{{MediaWiki:Grouppage-sysop}}|sitebeheerders]] als dit proces u verhindert een nuttige bijdrage te leveren.

Klik óppe 'trök'-knoep in uw browser om terug te gaan naar het tekstbewerkingsscherm.",
	'captcha-addurl-whitelist' => ' #<!-- laot deze regel --> <pre>
# De syntaxis is as volgt:
#  * Alle tekst vanaaf \'t karakter "#" tot het einde van de regels wordt gezien als opmerking
#  * Iedere niet-lege regel is een fragment van een reguliere uitdrukking die alleen van toepassing is op hosts binnen URL\'s
  #</pre> <!-- laot deze regel -->',
	'right-skipcaptcha' => 'Captchahandelinge oetveure zonder captcha te hove oplosse',
);

/** Lao (ລາວ) */
$messages['lo'] = array(
	'captcha-edit' => 'ກາ�ດັດແກ້ ຂອງ ທ່າ� ມີລິ້ງູຄ໌ພາຍ�ອກ. �ພື່ອ �ປັ�ກາ�ຊ່ອຍປ້ອງກັ� ສະແປມອັດຕະໂ�ມັດ, ກະລຸ�າແກ້�ລກບວກ ງ່າຍໆຂ້າງລຸ່ມ�ີ້ ແລ້ວ ພິມຄຳຕອບໃສ່ໃ� ກັບ ([[Special:Captcha/help|more info]]):',
	'captcha-addurl' => 'ກາ�ດັດແກ້ຂອງທ່າ� ມີ ກາ�ກາງລິ້ງຄ໌ຫາພາຍ�ອກ. �ພື່ອ�ປັ�ກາ�ຊ່ອຍປ້ອງກັ� ສະແປມອັດຕະໂ�ມັດ ກະລຸ�າ ແກ້�ລກບວກງ່າຍໆຂ້າງລຸ່ມ�ີ້ ແລ້ວ ພິມຜົ�ບວກ ໃສ່ ກັບ ([[Special:Captcha/help|ຂໍ້ມູ��ພີ່ມ�ຕີມ]]):',
	'captcha-createaccount' => '�ພື່ອປ້ອງກັ� ກາ�ສ້າງບັ�ຊີແບບອັດຕະໂ�ມັດ, ກະລຸ�າ ແກ້�ລກບວກງ່າຍໆ ຂ້າງລຸ່ມ ແລ້ວ ພິມຄຳຕອບໃສ່ ກັບ ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount-fail' => 'ບໍ່ຖືກ ຫຼື ບໍ່ມີລະຫັດຢື�ຢັ�.',
	'captcha-create' => 'ກະລຸ�າ ແກ້�ລກບວກງ່າຍໆລຸ່ມ�ີ້ ແລະ ພິມຜົ�ບວກໃສ່ໃ�ກັບ �ພື່ອ ສ້າງໜ້າ�ີ້ ([[Special:Captcha/help|ຂໍ້ມູ��ພີ່ມ�ຕີມ]]):',
);

/** Lithuanian (Lietuvių)
 * @author Eitvys200
 * @author Garas
 * @author Homo
 * @author Matasg
 */
$messages['lt'] = array(
	'captcha-edit' => 'Kad redaguotumėte šį straipsnį, apskaičiuokite šią paprastą sumą ir įveskite atsakymą į laukelį ([[Special:Captcha/help|daugiau informacijos]]):',
	'captcha-createaccount-fail' => 'Blogas arba nerastas patvirtinimo kodas.',
	'captchahelp-title' => 'CAPTCHA pagalba',
	'captchahelp-cookies-needed' => 'Jums reikia būti įjungus sausainėlius savo naršyklėje kad tai veiktu',
);

/** Latvian (Latviešu)
 * @author BrokenArrow
 * @author Marozols
 * @author Yyy
 */
$messages['lv'] = array(
	'captcha-edit' => 'Lai izmainītu šo lapu, atrisini šo vienādojumu un iegūto skaitli ieraksti šajā lodziņā: <br />([[Special:Captcha/help|Kāpēc tā?]])',
	'captcha-addurl' => 'Tavas izmaiņas ietver jaunu URL saiti. Lai pasargātos no automātiskas mēstuļošanas, Tev ir jāieraksta te redzamā vienādojuma rezultāts: <br />([[Special:Captcha/help|Kāpēc tā?]])',
	'captcha-badlogin' => 'Lai pasargātos no automātiskiem paroļu lauzējiem, lūdzu aprēķini šīs izteiksmes vērtību un rezultātu ieraksti apakšā esošajā lodziņā ([[Special:Captcha/help|papildus informācija]]):',
	'captcha-createaccount' => 'Lai pasargātos no automātiskas mēstuļošanas, Tev reģistrējoties ir jāieraksta šī vienādojuma rezultāts: <br />([[Special:Captcha/help|Kāpēc tā?]])',
	'captcha-createaccount-fail' => 'Nepareizs apstiprinājuma kods vai arī tas nav ievadīts.',
	'captcha-create' => 'Lai izveidotu šo lapu, atrisini šo vienādojumu un rezulātu ieraksti šajā lodziņā: <br />([[Special:Captcha/help|Kāpēc tā?]])',
	'captchahelp-cookies-needed' => "Lai šis darbotos, pārlūkprogrammā jābūt iespējotām (''enabled'') sīkdatnēm (''cookies'').",
	'captchahelp-text' => "Interneta lapas, kurās iespējams pievienot tekstu, kā šajā wiki, bieži cieš no mēstuļotājiem, kuri izmanto automatizētus līdzekļus, lai pievienotu savus saites daudzās jo daudzās interneta lapās.
Kaut arī šīs saites var viegli dzēst, tomēr tās ir nozīmīgs traucēklis.

Reizēm, jo īpaši pievienojot jaunas interneta saites, wiki programmatūra var parādīt Tev attēlu, kurā ir krāsains vai sagrozīts teksts. Šis teksts ir jāpārraksta un to ir ļoti grūti izdarīt automātiski, tā apgrūtinot lielāko daļu mēstuļotāju, savukārt gandrīz visi parastie lietotāji to var izdarīt bez grūtībām.

Diemžēl tas var apgrūtināt lietotājus, kuriem ir redzes traucējumi vai kuri izmanto teksta pārlūkus vai dzirdes pārlūkus. Šobrīd nav pieejama audio alternatīva, bet sazinies ar [[{{MediaWiki:Grouppage-sysop}}|wiki administratoriem]], ja tas liedz Tev veikt labi domātus papildinājumus.

Spied pārlūka pogu \"Atpakaļ\" (''Back''), lai atgrieztos iepriekšējā lapā.",
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'right-skipcaptcha' => 'Manao tao mampisy ny captcha fa tsy mila mameno azy',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'captcha-edit' => 'За да ја у�едите оваа ст�аница пот�ебно е да го најдете �ешението на едноставната задача поставена подолу и одгово�от да го внесете во соодветното поле за одгово�([[Special:Captcha/help|повеќе инфо�мации]]):',
	'captcha-desc' => 'Овозможува техники од CAPTCHA за заштита од спам и погодување на лозинки',
	'captcha-addurl' => 'Вашето у�едување сод�жи нови надво�ешни в�ски.
За да ни помогнете да се заштитиме од автоматизи�ан спам, �ешете ја п�остата задача подолу и впишете го б�ојот во полето ([[Special:Captcha/help|повеќе инфо]]):',
	'captcha-badlogin' => 'За да ни помогнете да се заштитиме од автоматизи�ано п�обивање на лозинки, �ешете ја п�остата задача подолу и впишете го �ешението во полето
([[Special:Captcha/help|повеќе инфо]]):',
	'captcha-createaccount' => 'За да ни помогнете да се заштитиме од автоматизи�ано создавање на сметки, �ешете ја п�остата задача подолу и впишете го б�ојот во полето ([[Special:Captcha/help|повеќе инфо]]):',
	'captcha-createaccount-fail' => 'Потв�дниот код е неточен или недостасува.',
	'captcha-create' => 'За да ја создадете ст�аницата, п�во �ешете ја п�остата задача подолу и впишете го �ешението во полето ([[Special:Captcha/help|повеќе инфо]]):',
	'captcha-sendemail' => 'За да се заштитиме од автоматизи�ано спами�ање, �ешете ја п�остата задача подолу и впишете го �езултатот во полето ([[Special:Captcha/help|повеќе инфо�мации]]):',
	'captcha-sendemail-fail' => 'Потв�дниот код е неточен или недостасува.',
	'captcha-disabledinapi' => 'Ова дејство ба�а captcha, така што не може да се изв�ши п�еку API.',
	'captchahelp-title' => 'Помош со Captcha',
	'captchahelp-cookies-needed' => 'Т�еба да имате овозможено колачиња за да може ова да �аботи.',
	'captchahelp-text' => 'М�ежните места кои п�ифаќаат учество на јавноста, како ова вики, честопати ст�адаат од спаме�и кои ко�истат автоматизи�ани алатки за да ги додаваат нивните в�ски на голем б�ој ме�ежни ст�аници. Иако в�ските на спаме�от може да се отст�анат, тие значително ја по�еметуваат нашата �абота.

Понекогаш, особено кога додава нови в�ски на ст�аница, викито може да ви п�икаже обоен или извитопе�ен текст и да ви поба�а да ги впишете п�икажаните збо�ови. 
Бидејќи ова е задача која е тешко да се автоматизи�а, им овозможува вистинските ко�исници да п�идонесуваат, а им поп�ечува на спаме�ите и д�угите �оботски напаѓачи.

Нажалост ова може да е п�облем за ко�исници со лош вид, или оние кои ко�истат п�елистувачи на основа на текст или гласовни на�едби.
Во моментов немаме аудио-алте�натива за ова.
Контакти�ајте ги [[{{MediaWiki:Grouppage-sysop}}|админист�ато�ите на ст�аната]] за помош доколку ова неочекувано ве сп�ечува во п�авењето на иск�ени п�идонеси. 

Кликнете на копчето �назад� во вашиот п�елисувач за да се в�атите на у�едувањето на ст�аницата.',
	'captcha-addurl-whitelist' => '  #<!-- leave this line exactly as it is --> <pre>
# Опис на синтаксата:
#  * Сето она што стои по знакот �#�, па до к�ајот на �едот е комента�
#  * Секој неп�азен �ед се смета за ф�агмент од �егула�ен из�аз кој одгова�а само на имиња во URL ад�еси
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Изведување на акции кои повикуваат captcha без да одат п�еку captcha системот',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'captcha-edit' => 'ഈ താൾ തിരുത്തുവാൻ, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ലഘു ഗണിത ക്രിയ ചെയ്ത് അതിന്റെ ഉത്തരം താഴെയുള്ള പെട്ടിയിൽ ടൈപ്പു ചെയ്യുക ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-desc' => 'പാഴെഴുത്ത് ഉൾപ്പെടുത്തലിനും രഹസ്യവാക്ക് ഊഹിക്കലിനുമെതിരെ സംരക്ഷണം തരുന്ന കാപ്ച സംവിധാനം നൽകുന്നു',
	'captcha-addurl' => 'താ�്കളുടെ തിരുത്തലലിൽ പുറം കണ്ണികൾ ഉൾപ്പെട്ടിരിക്കുന്നു.
യാന്ത്രിക സ്പാമിനെതിരെയുള്ള സം�രക്ഷണത്തിന്റെ ഭാഗമായി, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ലഘു ഗണിത ക്രിയ ചെയ്ത് അതിന്റെ ഉത്തരം താഴെയുള്ള പെട്ടിയിൽ ടൈപ്പു ചെയ്യുക ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-badlogin' => 'യാന്ത്രിക രഹസ്യവാക്ക് പൊളിക്കലിനെതിരായുള്ള സം�രക്ഷണത്തിന്റെ ഭാഗമായി, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ലഘു ഗണിത ക്രിയ ചെയ്ത് അതിന്റെ ഉത്തരം താഴെയുള്ള പെട്ടിയിൽ ടൈപ്പു ചെയ്യുക ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-createaccount' => 'യാന്ത്രിക അംഗത്വം സൃഷ്ടിക്കലിനെതിരെയുള്ള സം�രക്ഷണത്തിന്റെ ഭാഗമായി, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ലഘു ഗണിത ക്രിയ ചെയ്ത് അതിന്റെ ഉത്തരം താഴെയുള്ള പെട്ടിയിൽ ടൈപ്പു ചെയ്യുക ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-createaccount-fail' => 'തെറ്റായതോ ലഭ്യമല്ലാത്തതോ ആയ സ്ഥിര�കരണ കോഡ്.',
	'captcha-create' => 'ഈ താൾ സൃഷ്ടിക്കുവാൻ, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന കൂട്ടൽ ക്രിയയുടെ ഉത്തരം താഴെയുള്ള പെട്ടിയിൽ എഴുതുക  ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-sendemail' => 'യാന്ത്രികമായ പാഴെഴുത്ത് ഉൾപ്പെടുത്തലിനുള്ള പ്രതിരോധമെന്ന നിലയിൽ, ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ലഘു ഗണിതപ്രശ്നത്തിന്റെ ഉത്തരം പെട്ടിയിൽ എഴുതുക ([[Special:Captcha/help|കൂടുതൽ വിവര�്�ൾ]]):',
	'captcha-sendemail-fail' => 'തെറ്റായതോ ലഭ്യമല്ലാത്തതോ ആയ സ്ഥിര�കരണ കോഡ്.',
	'captcha-disabledinapi' => 'ഈ പ്രവൃത്തി പൂർണ്ണമാകാൻ കാപ്ച ആവശ്യമാണ്, അതുകൊണ്ടിത് എ.പി.ഐ. ഉപയോഗിച്ച് ചെയ്യാൻ കഴിയില്ല.',
	'captchahelp-title' => 'കാപ്ച്ച സഹായം',
	'captchahelp-cookies-needed' => 'ഇതു പ്രവർത്തിക്കണമെ�്കിൽ താ�്കളുടെ ബ്രൗസറിൽ കുക്കികൾ സജ്ജ�കരിച്ചിരിക്കണം.',
	'captchahelp-text' => "ഈ വിക്കിപോലെ പൊതുജന�്�ളിൽ നിന്നും പ്രസിദ്ധപ്പെടുത്തലുകൾ സ്വ�കരിക്കുന്ന വെബ്��സൈറ്റുകൾ, സ്വയം പ്രവർത്തിക്കുന്ന ഉപകരണ�്�ൾ ഉപയോഗിച്ച് കണ്ണികളും മറ്റും പ്രസിദ്ധപ്പെടുത്തുന്ന സ്പാമർമാർ സാധാരണ ദുരുപയോഗം ചെയ്യാറുണ്ട്.
ഇത്തരത്തിലുള്ള സ്പാം കണ്ണികൾ ന�ക്കംചെയ്യപ്പെട്ടുപോകുമെ�്കിലും, അവ ശരിക്കും ശല്യമാണ്.

ചിലപ്പോൾ, പ്രത്യേകിച്ച് ഒരു വെബ് കണ്ണി താളിൽ കൂട്ടിച്ചേർക്കുമ്പോൾ, നിറ�്�ൾ ചേർത്തതോ വികലമാക്കിയതോ ആയ എഴുത്തുകൾ താ�്കളെ കാണിച്ച് അവ താ�്കളോട് ടെപ്പ് ചെയ്യാൻ വിക്കി ആവശ്യപ്പെടാം.
ഇത് മനുഷ്യസഹായമില്ലാതെ ചെയ്യാൻ ബുദ്ധിമുട്ടാണ്, അതുകൊണ്ട് ശരിക്കും മനുഷ്യരായിട്ടുള്ളവർക്ക് അവരുടെ പ്രസിദ്ധപ്പെടുത്തലുകൾ ചേർക്കാനും അതേസമയം ബഹുഭൂരിപക്ഷം സ്പാമർമാരേയും യന്ത്ര�്�ളുപയോഗിച്ച് ആക്രമിക്കുന്നവരേയും തടയാനും കഴിയുന്നതാണ്.

ദൗർഭാഗ്യകരമെന്നു പറയട്ടെ ഇത് ചിലപ്പോൾ ദൃഷ്ടിവൈകല്യം കൊണ്ടോ മറ്റോ എഴുത്തുകൾ മാത്രമനുവദിക്കുന്ന ബ്രൗസറുകൾ ഉപയോഗിക്കുന്നവർ, ശബ്ദം കേട്ട് മനസ്സിലാക്കുന്നവർ തുട�്�ിയവർക്ക് ബുദ്ധിമുട്ടായേക്കാം.
ഇപ്പോൾ ഞ�്�ൾക്ക് ഇതിനു പകരം ശബ്ദം നൽകുന്ന സംവിധാനമില്ല.

ഇത് ന്യായമായ പ്രസിദ്ധപ്പെടുത്തലുകൾ ഇടുന്നതിൽ നിന്നും അപ്രത�ക്ഷിതമായി താ�്കളെ തടയുന്നുവെ�്കിൽ ദയവായി [[{{MediaWiki:Grouppage-sysop}}|സൈറ്റിന്റെ കാര്യനിർവാഹകരെ]] ബന്ധപ്പെടുക.

ബ്രൗസറിലെ 'ബാക്ക്' ബട്ടൺ ഞെക്കിയാൽ താ�്കൾക്ക് താൾ തിരുത്തുവാനുള്ള സംവിധാനത്തിലേയ്ക്ക് മട�്�ിപ്പോകാവുന്നതാണ്.",
	'captcha-addurl-whitelist' => ' #<!-- ഈ വരി ഇതുപോലെ തന്നെ നിലനിർത്തുക --> <pre>
# സിന്റാക്സ് താഴെ കാണുന്ന പ്രകാരമാണ്�:
#  * "#" എന്ന അക്ഷരത്തിൽ തുട�്�ുന്ന എല്ലാ വരികളും കുറിപ്പുകളായിരിക്കും
#  * ശൂന്യമല്ലാത്ത എല്ലാ വരികളും യു.ആർ.എല്ലിനു അകത്തെ ഹോസ്റ്റുകളുമായി മാത്രം ഒത്തുനോക്കുന്ന റെജെക്സ് ഘടക�്�ളായിരിക്കും
  #</pre> <!-- ഈ വരി ഇതുപോലെ തന്നെ നിലനിർത്തുക -->',
	'right-skipcaptcha' => 'കാപ്ച ഉപയോഗിക്കേണ്ട പ്രവൃത്തികൾ കാപ്ചയിലൂടെ കടന്നു പോകാതെ തന്നെ ചെയ്യാൻ കഴിയുക',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'captcha-createaccount' => 'Автоматаа� хэ�эглэгчийн бү�тгэл үүсгэхээс сэ�гийлэхийн тулд да�аах хялба� нийлбэ�ийг бодож хай�цагт ха�иуг нь о�уулна уу
([[Special:Captcha/help|дэлгэ�энгүй мэдээлэл]]):',
	'captcha-createaccount-fail' => 'Баталгаажуулах код алдаатай, эсвэл байхгүй байна.',
	'captchahelp-title' => 'Captcha-н талаа� тусламж',
	'captchahelp-cookies-needed' => 'Үүнийг ажиллуулахын тулд та вэб хөтөчийнхөө күүкиг идэвхижүүлэх хэ�эгтэй.',
	'captchahelp-text' => 'Энэ вики шиг хүссэн хүн болгон засва�лах боломжтой вэбсайтуудад спамме�ууд янз бү�ийн сайтын холбоосыг автоматаа� олноо� нь о�уулдаг.
Эдгээ� спам холбоосуудыг устгах боломжтой ч маш их төвөг учи�даг.

За�имдаа, ялангуяа шинэ вэб холбоосууд о�уулж байх үед, вики нь өнгөт буюу мушги�сан бичиг га�гаж таныг энэ бичгийг шивж о�уул гэдэг.
Энэ үйлдлийг автоматаа� хийх нь хэцүү уч�аас жинхэнэ хүмүүс өө�сдийн засва�уудыг о�уулах боломж олгодог ч спамме�үүд болоод автомат халдлага үйлдэгчдийг зогсоож байдаг.

Ха�амсалтай нь ха�аа муутай буюу бичигт эсвэл я�ианд тулгуу�ласан вэб хөтөч ашигладаг хэ�эглэгчдэд хүнд�эл учи�на.
Одоогийн байдлаа� дуун сонголт алга байна.
Таньд бодит засва� хийхэд хүнд�эл учи�ч байвал [[{{MediaWiki:Grouppage-sysop}}|сайтын админист�ато�уудаас]] тусламж авч холбогдоно уу.

Хуудасны засва�лагч �уу буцахын тулд вэб хөтөчийнхөө "буцаах" товч дээ� да�на уу.',
);

/** Marathi (मराठ�)
 * @author Kaustubh
 * @author Mahitgar
 * @author V.narsikar
 */
$messages['mr'] = array(
	'captcha-edit' => 'हे पान संपादित करण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-desc' => 'उत्पात आणि परवल�च्या शब्दांच्या चोर� पासून सूरक्ष�त ठेवणाऱ्या ओळखपटवा-पद्धत� CAPTCHA techniques पुरवते.',
	'captcha-addurl' => 'तुमच्या संपादनात नव�न बाह्यदुवे आहेत. आपोआप होणार्�या स्पॅम पासून वाचण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-badlogin' => 'आपोआप होणार्�या परवल�च्या शब्दाच्या चोर�पासून वाचण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-createaccount' => 'आपोआप होणार्�या सदस्य नोंदण�पासून वाचण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-createaccount-fail' => 'चुक�चा अथवा रिकामा सहमत� कोड',
	'captcha-create' => 'हे पान तयार करण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-sendemail' => 'आपोआप होणार्�या उत्पातापासून वाचण्यासाठ�, खाल� दिलेले सोपे गणित सोडवून त्याचे उत्तर दिलेल्या पृष्ठपेट� मध्ये लिहा ([[Special:Captcha/help|अधिक माहित�]]):',
	'captcha-sendemail-fail' => 'चुक�चा अथवा रिकामा सहमत� कोड',
	'captcha-disabledinapi' => 'या क्रियेसाठ� कॅप्चा हव�.API मार्फत हे शक्य नाह�.',
	'captchahelp-title' => 'कॅप्टचा साहाय्य',
	'captchahelp-cookies-needed' => 'हे काम करण्यासाठ� तुम्ह� कूक�ज (cookies) एनेबल केलेल्या असणे गरजेचे आहे.',
	'captchahelp-text' => "ज्या संकेतस्थळांवर जसे क� हा विकि, सर्वसामान्य लोकांकडून संपादने करण्याच� परवानग� असते, तिथे आपोआप होणार� स्वत:च्या संकेतस्थळांचे दुवे देणार� उत्पात संपादने (Spam) कायम होत असतात.
अश� संपादने जर� काढता आल� तर� त� एक डोकेदुख� होऊ शकते.

काह�वेळा, जेव्हा एखाद्या पानावर नव�न बाह्यदुवा देताना, विकि तुम्हाला एक चित्र दाखवून त्यांत�ल शब्द भरण्यास सांगू शकतो.
हे काम संगणकाकरव� करून घेण्यास अवघड असल्याने, फक्त खर� माणसेच संपादने करू शकत�ल व स्पॅमर्सना आळा बसू शकेल.

पण खेदाच� गोष्ट अश� क� ह्यामुळे अर्धांध व्यक्त� तसेच ज्या व्यक्त� फक्त मजकूर दाखविणारा न्याहाळक वापरतात, अशांना असुविधा होऊ शकते.
सध्या आमच्याकडे आवाज ऐकण्याच� सुविधा नाह�.
कृपया [[{{MediaWiki:Grouppage-sysop}}|संस्थळ प्रचालकांश�]]  या बाबत�त संपर्क करावा.

पृष्ठ संपादनाकडे परत जाण्यासाठ� आपल्या ब्राउझरच� Back' ह� कळ दाबा.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# रुपरेषा खाल�लप्रमाणे:
#  * "#" ने सुरु होणारे व ओळ�च्या शेवटपर्यंत जाणारे वाक्य सूचना (Comment) आहे.
#  * प्रत्येक रिकाम� नसलेल� ओळ ह� regex fragment आहे ज� फक्त URLमध�ल होस्टसच्या जोड्या लावेल
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'कॅपचा मध्ये न जाता कॅपचाचा वापर करणार्�या क्रिया करा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 */
$messages['ms'] = array(
	'captcha-edit' => 'Untuk menyunting laman ini, sila selesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-desc' => 'Menyediakan teknik CAPTCHA untuk melindungi daripada spam dan teka kata laluan',
	'captcha-addurl' => 'Suntingan anda mengandungi pautan luar baru.
Untuk membanteras kegiatan spam automatik, anda diminta menyelesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-badlogin' => 'Untuk membanteras kegiatan meneka kata laluan secara automatik, anda diminta menyelesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-createaccount' => 'Untuk membanteras kegiatan pembukaan akaun secara automatik, anda diminta menyelesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-createaccount-fail' => 'Kod pengesahan tidak betul atau tidak ada.',
	'captcha-create' => 'Untuk mencipta laman tersebut, sila selesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-sendemail' => 'Untuk membanteras kegiatan spam secara automatik, anda diminta menyelesaikan kira-kira di bawah dan masukkan jawapannya dalam kotak yang disediakan ([[Special:Captcha/help|maklumat lanjut]]):',
	'captcha-sendemail-fail' => 'Kod pengesahan tidak betul atau tidak ada.',
	'captcha-disabledinapi' => 'Tindakan ini memerlukan captcha, maka ia tidak boleh dilakukan melalui API.',
	'captchahelp-title' => 'Bantuan CAPTCHA',
	'captchahelp-cookies-needed' => "Sila aktifkan ''cookies'' pada pelayar web anda.",
	'captchahelp-text' => "Tapak web yang menerima sumbangan daripada orang awam, seperti wiki ini, sering disalahgunakan oleh penghantar spam yang menggunakan alatan automatik untuk mengirim pautan-pautan mereka di merata web.
Walaupun pautan ini boleh dibuang, ia amat mengganggu.

Kadangkala, terutamanya apabila menambah pautan baharu pada sesebuah laman, wiki ini akan memaparkan suatu imej yang mengandungi teks yang berwarna atau samar-samar dan meminta supaya anda menaip perkataan yang ditunjukkan.
Oleh sebab tugas tersebut sukar dilakukan secara automatik, ia membolehkan manusia sebenar mengirim seperti biasa, manakala penghantar spam dan penyerang robot terhalang.

Malangnya perkara ini boleh menyukarkan pengguna yang mengalami masalah penglihatan atau sedang menggunakan pelayar web teks atau tuturan. Pada masa ini kami tidak mempunyai alternatif audio.
Sila hubungi [[{{MediaWiki:Grouppage-sysop}}|pentadbir tapak]] untuk mendapatkan bantuan sekiranya perkara ini menghalang anda daripada membuat sumbangan yang sah.

Sila tekan butang 'back' di pelayar web anda untuk kembali ke laman suntingan.",
	'captcha-addurl-whitelist' => ' #<!-- jangan ubah baris ini --> <pre>
# Sintaks:
#  * Aksara "#" sampai akhir baris diabaikan
#  * Ungkapan nalar dibaca daripada setiap baris dan dipadankan dengan nama hos sahaja
  #</pre> <!-- jangan ubah baris ini -->',
	'right-skipcaptcha' => 'Melepasi pemeriksaan CAPTCHA',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'captchahelp-title' => 'Captchatechcopa tēpalēhuiliztli',
);

/** Min Nan Chinese (Bân-lâm-gú) */
$messages['nan'] = array(
	'captcha-createaccount' => 'Ūi beh ī-hông lâng iōng ke-si chū-tōng chù-chheh koh tah kóng-kò, chhiá�� lí kā chhut-hiān tī ang-á lāi-bīn ê jī phah 1 piàn (thang chèng-bêng lí m̄ sī ki-khì-lâng): <br />
([[Special:Captcha/help|Che sī siá��-hòe?]])',
	'captcha-createaccount-fail' => 'Khak-jīn-bé chhò-gō· iah-sī làu-kau.',
);

/** Norwegian (bokmål)� (�Norsk (bokmål)�)
 * @author Audun
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'captcha-edit' => 'Skriv inn summen nedenfor i boksen for å kunne redigere denne siden ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-desc' => 'Gir tilgang til CAPTCHA-teknikker for å beskytte mot søppl og passordgjetting',
	'captcha-addurl' => 'Din redigering inneholder nye eksterne lenker. Løs det enkle regnestykket i boksen nedenfor for å hjelpe oss å beskytte oss mot automatisk spam ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-badlogin' => 'Løs det enkle regnestykket i boksen nedenfor for å hjelpe oss å beskytte oss mot automatisk passordtyveri ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-createaccount' => 'Løs det enkle regnestykket i boksen nedenfor for å hjelpe oss å beskytte oss mot automatisk kontoopprettelse ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-createaccount-fail' => 'Ukorrekt eller manglende bekreftelseskode.',
	'captcha-create' => 'Løs det enkle regnestykket i boksen nedenfor for å opprette siden ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-sendemail' => 'Løs det enkle regnestykket i boksen nedenfor for å hjelpe oss å beskytte oss mot automatisk spamming ([[Special:Captcha/help|mer informasjon]]):',
	'captcha-sendemail-fail' => 'Ukorrekt eller manglende bekreftelseskode.',
	'captcha-disabledinapi' => 'Denne handlinger krever en captcha, så den kan ikke bli gjort gjennom APIet.',
	'captchahelp-title' => 'Hjelp med Captcha',
	'captchahelp-cookies-needed' => 'Du må slå på informasjonskapsler for at dette skal fungere.',
	'captchahelp-text' => "Internettsider som kan redigeres av alle, som denne wikien, blir ofte misbrukt av spammere som bruker roboter for å poste massive antall lenker. Selv om slike spamlenker kan fjernes er de til stor irritasjon.

Noen ganger, særlig hvis du vil legge til nye internettlenker til en side, kan wikien vise deg et bilde av en farge eller ujevn tekst og be deg skrive inn ordene som vises. Siden det er vanskelig å automatisere denne oppgaven, vil funksjonen slippe de fleste virkelige mennesker igjennom, men stoppe spammere.

Dessverre finnes det i øyeblikket ikke noe audioalternativ for brukere med begrenset syn som som bruker tekst- eller talebaserte nettlesere. Vennligst kontakt [[{{MediaWiki:Grouppage-sysop}}|administratorene]] hvis denne funksjonen forhindrer deg i å foreta legitime endringer.

Trykk på 'tilbake'-knappen for å komme tilbake til redigeringssiden.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntaksen er som følger:
#  * Alle linjer som begynner med «#» er kommentarer
#  * Alle linjer som ikke er blanke er fragmenter av regulære uttrykk som sjekker verter i URL-er
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Utføre handlinger som normalt krever «captcha»-bekreftelse uten å bruke «captcha»',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'captcha-edit' => 'Disse Siet to ännern, musst du disse lütte Rekenopgaav lösen un dat Resultat in dat Feld ingeven ([[Special:Captcha/help|mehr dorto]]):',
	'captcha-desc' => 'Eenfach Captcha',
	'captcha-addurl' => 'In dien Ännern sünd nee Weblenken in.
As Schutz gegen automaatsch Spam, löös disse lüttje Rekenopgaav un geev dat Resultat in dat Feld ünnen in ([[Special:Captcha/help|mehr Infos]]).',
	'captcha-badlogin' => 'As Schutz gegen Passwoord-Knackers, löös disse lüttje Rekenopgaav un geev dat Resultat in dat Feld ünnen in ([[Special:Captcha/help|mehr Infos]]).',
	'captcha-createaccount' => 'Dat hier nich Brukers automaatsch anleggt warrt, musst du disse lütte Rekenopgaav lösen ([[Special:Captcha/help|mehr dorto]]):',
	'captcha-createaccount-fail' => 'Kood ton Bestätigen is verkehrt oder fehlt.',
	'captcha-create' => 'De Sied nee optostellen, löös disse lüttje Rekenopgaav un geev dat Resultat in dat Feld ünnen in ([[Special:Captcha/help|mehr Infos]]).',
	'captchahelp-title' => 'Help to Captchas',
	'captchahelp-cookies-needed' => 'Dien Browser mutt Cookies ünnerstütten un aktiveert hebben, dat dat geiht.',
	'captchahelp-text' => 'Websteden, de Bidrääg vun elkereen tolaten doot, so as dit Wiki, hebbt faken mit Spammers to doon, de en Computer-Programm bruukt, dat se jümmer Text oder Warf op mööglichst veel Sieden ünnerbringt.
Ok wenn dat gau wedder rutnahmen warrt, stöört dat doch de Arbeid op dat Wiki.

Af un to, besünners wenn du Lenken op Websteden in Sieden inföögst, wiest di de Software en Bild mit bunte un verdreihte Bookstaven un fraagt di, dat du de Bookstaven in dat Textfeld ingiffst.
En Computer-Programm kann disse Bookstaven normalerwies nich lesen, aver de mehrsten Minschen köönt dat. Dormit sünd de Spammers vun de Sied utslaten.

Dat kann aver ok angahn, dat nu ok Lüüd, de nich so good sehn köönt oder villicht Text- oder Vörlees-Browsers bruukt, mit disse Biller nich torecht kaamt.
Opstunns gifft dat noch keen Audio-Alternativ för de Biller. Wenn du mit de Biller nich torechtkummst, denn schriev man an de Administraters vun de sied un beed jem üm Help.

Mit den �Trüch�-Knopp vun dien Browser kummst du trüch na dat Ännerfinster.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Op disse Siet staht de Websteden, bi de en Bruker,
# de nich anmellt is un en neen Lenk in de Siet infögen deit,
# keen Captcha utfüllen mutt.
#
# Syntax is disse:
#  * Allens vun en �#�-Teken bet nat Enn vun de Reeg is en Kommentar
#  * All de annern Regen, de nich leddig sünd, warrt as regulären Utdruck bekeken,
#    de för Delen vun de Domään steiht.

  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Överspringen vun Captchas',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'captcha-edit' => "Um disse pagina te bewarken, mö'j eers t antwoord op disse eenvoudige somme invullen ([[Special:Captcha/help|meer informasie]]):",
	'captcha-desc' => 'Eenvoudige invoering van captcha',
	'captcha-addurl' => 'Joew bewarking bevat nieje uutgaonde verwiezingen.
Voer ter de bescharming tegen ongewunste reklame de somme in die hieronder steet:<br />
([[Special:Captcha/help|Hulpe?]])',
	'captcha-badlogin' => 'Los disse eenvoudige rekensomme op en voer t antwoord in bie t invoervienster in ter bescharming tegen t automaties kraken van wachtwoorden ([[Special:Captcha/help|meer informasie]]):',
	'captcha-createaccount' => 'Voer ter bescharming tegen automatiese ongewunste reklame t antwoord op disse eenvoudige rekensomme in bie invoervienster ([[Special:Captcha/help|meer informatie]]):',
	'captcha-createaccount-fail' => 'Verkeerde of ontbrekende bevestigingskode.',
	'captcha-create' => 'Je bin n nieje pagina an t maken.
Voer t antwoord van disse eenvoudige rekensomme in bie t invoervienster
([[Special:Captcha/help|meer informasie]]).',
	'captchahelp-title' => 'Lettertoetshulpe',
	'captchahelp-cookies-needed' => 'Je mutten scheumbestaanden (cookies) an hebben staon um disse funksie te gebruken.',
	'captchahelp-text' => "Websteeën waor iederene an kan biedragen, zo as disse {{SITENAME}}-wiki, wörden vake misbruukt deurdat der ongewunste verwiezingen op ezet wörden. Op disse wiki kunnen zokken bewarkingen makkelik weerummezet wörden, mer t nimp wel tied in beslag die aanders gebruukt kan wörden.

Soms a'j nieje verwiezingen bie n pagina derop zetten, wö'j evreugen um iets over te tikken of in te vullen. Dit zörgt derveur dat der gien ongewunste verwiezingen eplaotst wörden, umdat dit allenig deur meensen edaon kan wörden en niet deur botgebrukers.

(Klik op de knoppe 'terug' in joew webkieker, um weerumme te gaon naor t tekstbewarkingscharm.)",
	'captcha-addurl-whitelist' => ' #<!-- laot disse regel zo as t is --> <pre>
# De syntaxis is as volgt:
#  * Alle tekste vanaof t karakter "#" tot t einde van de regels wörden ezien as opmarking
#  * Alle regels die niet leeg bin, wörden ezien as n reguliere uutdrokking die veur delen van de domein staon.
  #</pre> <!-- laot disse regel zo as t is -->',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'captcha-edit' => 'U wilt deze pagina bewerken.
Voer het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-desc' => 'Biedt CAPTCHA-technieken om bescherming te bieden tegen spam en het raden van wachtwoorden',
	'captcha-addurl' => "Uw bewerking bevat nieuwe externe verwijzingen (URL's).
Voer ter bescherming tegen geautomatiseerde spam het antwoord op de onderstaande eenvoudige som in in het invoerveld ([[Special:Captcha/help|meer informatie]]):",
	'captcha-badlogin' => 'Los de onderstaande eenvoudige som op en voer het antwoord in het invoervenster in ter bescherming tegen het automatisch kraken van wachtwoorden ([[Special:Captcha/help|meer informatie]]):',
	'captcha-createaccount' => 'Voer ter bescherming tegen het geautomatiseerd gebruikers aanmaken het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-createaccount-fail' => 'De bevestigingscode ontbreekt of is onjuist.',
	'captcha-create' => 'U wilt een nieuwe pagina aanmaken.
Voer het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-sendemail' => 'Voer ter bescherming tegen geautomatiseerde spam het antwoord op de onderstaande eenvoudige som in het invoervenster in ([[Special:Captcha/help|meer informatie]]):',
	'captcha-sendemail-fail' => 'De bevestigingscode ontbreekt of is onjuist.',
	'captcha-disabledinapi' => 'Voor deze handeling is een captcha nodig die niet afgehandeld kan worden via de API.',
	'captchahelp-title' => 'Captcha-hulppagina',
	'captchahelp-cookies-needed' => 'U dient in uw browser cookies ingeschakeld te hebben om dit te laten werken.',
	'captchahelp-text' => "Websites die vrij te bewerken zijn, zoals deze wiki, worden vaak misbruikt door spammers die er met hun programma's automatisch verwijzigen op zetten naar vele websites.
Hoewel deze externe verwijzingen weer verwijderd kunnen worden, leveren ze wel veel hinder en administratief werk op.

Soms, en in het bijzonder bij het toevoegen van externe verwijzingen op pagina's, ziet u een afbeelding met gekleurde of vervormde tekst en wordt u gevraagd de weergegeven tekst in te voeren.
Omdat dit proces lastig te automatiseren is, zijn vrijwel alleen mensen in staat dit proces succesvol te doorlopen en worden hiermee spammers en andere geautomatiseerde aanvallen geweerd.

Helaas levert deze bevestiging voor gebruikers met een visuele handicap of een tekst- of spraakgebaseerde browser problemen op.
Op het moment is er geen alternatief met geluid beschikbaar.
Vraag assistentie van de [[{{MediaWiki:Grouppage-sysop}}|sitebeheerders]] als dit proces u verhindert een nuttige bijdrage te leveren.

Klik op de knop 'terug' in uw browser om terug te gaan naar het tekstbewerkingsscherm.",
	'captcha-addurl-whitelist' => ' #<!-- laat deze regel zoals hij is --> <pre>
# De syntaxis is als volgt:
#   * Alle tekst vanaf het karakter "#" tot het einde van de regels wordt gezien als opmerking
#   * Iedere niet-lege regel is een fragment van een reguliere uitdrukking die alleen van toepassing is op hosts binnen URL\'s
 #</pre> <!-- laat deze regel zoals hij is -->',
	'right-skipcaptcha' => 'Captchahandelingen uitvoeren zonder captcha te hoeven oplossen',
);

/** Norwegian Nynorsk (�Norsk (nynorsk)�)
 * @author Eirik
 * @author Frokor
 * @author Harald Khan
 * @author Nghtwlkr
 */
$messages['nn'] = array(
	'captcha-edit' => 'For å endre denne sida, ver venleg og løys det enkle reknestykket nedanfor og skriv svaret i ruta ([[Special:Captcha/help|meir informasjon]]):',
	'captcha-desc' => 'Enkel implementering av captcha-system.',
	'captcha-addurl' => 'Endringa di inkluderer nye lenkjer; som eit vern mot automatisert reklame (spam) er du nøydd til skrive inn orda i dette bildet: <br />([[Special:Captcha/help|Kva er dette?]])',
	'captcha-badlogin' => 'For å sikra oss mot automatisk passordtjuveri, ver venleg og skriv inn svaret på det enkle reknestykket i boksen nedanfor ([[Special:Captcha/help|meir informasjon]]):',
	'captcha-createaccount' => 'For å verne Wikipedia mot reklame (spam) må du skrive inn orda i biletet for å registrere ein konto. <br />([[Special:Captcha/help|Kva er dette?]])',
	'captcha-createaccount-fail' => 'Feil eller manglande godkjenningskode.',
	'captcha-create' => 'For å opprette denne sida, ver venleg og løys det enkle reknestykket nedanfor og skriv svaret i ruta ([[Special:Captcha/help|Kva er dette?]]):',
	'captchahelp-title' => 'Captcha-hjelp',
	'captchahelp-cookies-needed' => 'Du må ha informasjonskapslar aktivert i nettlesaren din for at dette skal verke.',
	'captchahelp-text' => 'Internettsider som kan verte endra av alle, som denne wikien, vert ofte misbrukte av reklameinnleggjarar (spammarar) som nyttar bottar til å poste mange lenkjer om gongen.
Sjølv om slike reklamelenkjer kan verte fjerna er dei til stor irritasjon.

Nokre gonger, særleg viss du vil leggje til nye internettlenkjer til ei side, kan wikien vise deg eit bilete av ein farga eller ujamn tekst og be deg skrive inn orda som vert viste.
Sidan det er vanskeleg å automatisere denne oppgåva, vil funksjonen sleppe dei fleste verkelege menneska gjennom, men stoppe reklamerobotar.

Diverre finst det i augeblikket ikkje noko lydalternativ for brukarar med nedsett syn som brukar tekst- eller talebaserte nettlesarar.
Ver venleg å kontakte [[{{MediaWiki:Grouppage-sysop}}|administratorane]] viss denne funksjonen hindrar deg i å gjere skikkelege endringar.
Trykk på «attende»-knappen for å kome tilbake til endringssida.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntaksen er slik:
#  * Alt frå teiknet «#» til enden av lina er ein kommentar
#  * Alle liner som ikkje er tomme er fragment av regulære uttrykk som sjekkar vertar i URL-ar
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Utføre handlingar som normalt krever «captcha»-stadfesting utan å bruke «captcha»',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'captcha-edit' => "Per modificar aquesta pagina, vos cal efectuar lo calcul çaijós e n'inscriure lo resultat dins lo camp ([[Special:Captcha/help|Mai dentresenhas]]) :",
	'captcha-desc' => 'Implementacion captcha simpla',
	'captcha-addurl' => "Vòstra modificacion inclutz de ligams URL novèla ; per empachar las connexions automatizadas, vos cal picar los mots que safichan dins limatge que seguís : <br />([[Special:Captcha/help|Qu'es aquò?]])",
	'captcha-badlogin' => "Per ensajar de contornar las temptativas de cracatge de senhals automatizadas per de robòts, recopiatz lo tèxte çaijós dins la bóstia de tèxte plaçada al dejós d'aqueste. ([[Special:Captcha/help|Mai dentresenhas]])",
	'captcha-createaccount' => 'Coma proteccion contra las creacions de compte abusivas, entratz lo resultat de laddicion dins la bóstia çaijós:<br />
([[Special:Captcha/help|mai dentresenhas]])',
	'captcha-createaccount-fail' => 'Còde de confirmacion mancant o erronèu.',
	'captcha-create' => "Per modificar la pagina, vos cal de resòldre l'operacion çaijós e n'inscriure lo resultat dins lo camp ([[Special:Captcha/help|Mai d'infòs]]) :",
	'captchahelp-title' => 'Ajuda suls Captcha',
	'captchahelp-cookies-needed' => "Vos cal aver los cookies activats dins vòstre navigador per qu'aquò foncione.",
	'captchahelp-text' => "Los sites webs qu'accèptan de contribucions del public, coma aqueste wiki, sovent son atacats per de spammers qu'utilizan d'espleches automatizats per plaçar de ligams nombroses cap a de sites.
Quitament se son de bon suprimir, demòran una noisença significativa.

De còps, particularament quora apondètz de ligams extèrnes dins una pagina, lo wiki vos pòt mostrar un imatge amb un tèxte coloriat, desformat o torçut e vos demandar de picar los mots indicats.
Aquesta tasca es complicada d'automatizar, çò que permet de diferenciar un uman real d'un logicial automatic malvolent.

Malurosament, aquesta solucion pòt geinar d'utilizaires malvesents o qu'utilizan un navigador textual o vocal.
Dispausam pas dalternativa àudio pel moment.
Contactatz [[{{MediaWiki:Grouppage-sysop}}|los administrators del site]] se aquò vos empacha d'un biais imprevist de postar de contribucions legitimas.

Clicatz sul boton « Precedent » de vòstre navigador per tornar a la pagina de modificacion.",
	'captcha-addurl-whitelist' => '#<!-- daissatz aquesta linha exactament tala coma es --> <pre> # La sintaxi es la seguenta: # * Tot caractèr seguissent "#" fins a la fin de la linha serà interpretat coma un comentari # * Tota linha non voida es un còde regex que serà utilizat unicament a l\'interior dels ligams hypertext. #</pre> <!-- daissatz aquesta linha exactament tala coma es -->',
	'right-skipcaptcha' => "Acomplís lo desenclavament de las accions de captcha sens dever passar per l'intermediari aqueste darrièr",
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Psubhashish
 */
$messages['or'] = array(
	'captcha-edit' => 'ଏହି ପୃଷ୍ଠାଟିକୁ ବଦଳାଇବା ନିମନ୍ତେ, ତଳେ ଥିବା ସହଜ ଅ�୍କଟିର ସମାଧାନ କରନ୍ତୁ ଓ ଘରଟିରେ ଫଳାଫଳ ଦିଅନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ଜାଣନ୍ତୁ]]):',
	'captcha-desc' => 'CAPTCHA କାରିଗରି ଉପାୟରେ ସ୍ପାମ ଓ ପାସବାର୍ଡ଼ ରକ୍ଷା କରିଥାଏ ।',
	'captcha-addurl' => 'ଆପଣ�୍କ ସମ୍ପାଦନାରେ ନୂଆ ବାହାର ଲି�୍କ ରହିଛି ।
ଆପେଆପେ ହେଉଥିବା ସ୍ପାମର ପ୍ରତିରୋଧ କରିବା ନିମନ୍ତେ ତଳେ ଥିବା ଗଣିତର ସମାଧାନ କରନ୍ତୁ ଓ ତଳେ ଥିବା ଘରେ ଉତ୍ତର ଦିଅନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ବିବରଣ�]]):',
	'captcha-badlogin' => 'ଆପେଆପେ ହେଉଥିବା ପାସବାର୍ଡ଼ ଚୋରାଇବାକୁ ପ୍ରତିରୋଧ କରିବା ନିମନ୍ତେ ତଳେ ଥିବା ସରଳ ଗଣିତର ସମାଧାନ କରନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ସୂଚନା]]):',
	'captcha-createaccount' => 'ଆପେଆପେ ହେଉଥିବା ଖାତା ଖୋଲିବାକୁ ପ୍ରତିରୋଧ କରିବା ନିମନ୍ତେ ତଳେ ଥିବା ସରଳ ଗଣିତର ସମାଧାନ କରି ଉତ୍ତର ଘରେ ଦିଅନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ସୂଚନା]]):',
	'captcha-createaccount-fail' => 'ନିଶ୍ଚିତ କରିବା କୋଡ଼ଟି ଭୁଲ ଅଛି ବା ମୂଳରୁ ନାହିଁ ।',
	'captcha-create' => 'ଏହି ପୃଷ୍ଠାଟିକୁ ତିଆରିବା ନିମନ୍ତେ, ତଳେ ଥିବା ସହଜ ଅ�୍କଟିର ସମାଧାନ କରନ୍ତୁ ଓ ଘରଟିରେ ଫଳାଫଳ ଦିଅନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ଜାଣନ୍ତୁ]]):',
	'captcha-sendemail' => 'ଆପେଆପେ ହେଉଥିବା ସ୍ପାମକୁ ପ୍ରତିରୋଧ କରିବା ନିମନ୍ତେ ତଳେ ଥିବା ସରଳ ଗଣିତର ସମାଧାନ କରି ତଳେ ଥିବା ଉତ୍ତର ବାକ୍ସରେ ଉତ୍ତର ଦିଅନ୍ତୁ ([[Special:Captcha/help|ଅଧିକ ସୂଚନା]]):',
	'captcha-sendemail-fail' => 'ନିଶ୍ଚିତ କରିବା କୋଡ଼ଟି ଭୁଲ ଅଛି ବା ମୂଳରୁ ନାହିଁ ।',
	'captcha-disabledinapi' => 'ଏହି କାମଟି ପାଇଁ ଏକ କ୍ୟାପଚା ଦରକାର, ଏହା API ଦେଇ କେଭେହେଁ ହୋଇପାରିବ ନାହିଁ ।',
	'captchahelp-title' => 'CAPTCHA ସହଯୋଗ',
	'captchahelp-cookies-needed' => 'ଏହି କାମତି କରିବା ପାଇଁ ଆପଣ�୍କ ବ୍ରାଉଜରରେ କୁକି ସଚଳ କରିବାକୁ ପଡ଼ିବ ।',
	'captchahelp-text' => "ଏହି ଉଇକି ପରି ଜନସାଧାରଣ�୍କ ଠାରୁ ଲେଖା ଗ୍ରହଣ କରୁଥିବା ସାଇଟ ସବୁରେ ବହୁବାର ସ୍ପାମମାନେ ଆପେଆପେ ନିଜ ନିଜର ଉପକରଣ ମାଧ୍ୟମରେ ଅଦରକାର� ଲି�୍କମାନ ଦେଇଥାନ୍ତି ।
ଯଦିଓ ସ୍ପାମ ଲି�୍କ ସବୁ ହଟାଇଦିଆଯାଇ ପାରିବ ସେସବୁ ବହୁ ଅସୁବିଧା ତିଆରି କରିଥାଏ ।

ବେଳେବେଳେ, ବିଶେଷ କରି ଏକ ପୃଷ୍ଠାରେ ନୂଆ ୱେବ ଲି�୍କ ଦେଲାବେଳେ ଉଇକିଟି ଆପଣ�୍କୁ ଏକ ର�୍ଗିନ ବା ଭ�୍ଗାରୁଜା ଲେଖା ଦେଖାଇ ଆପଣ�୍କୁ ତାହାକୁ ଟାଇପ କରିବାକୁ କହିଥାଏ ।
ଯେହେତୁ ଏହି କାମକୁ ମଣିଷ ବିନା ଆପେଆପେ କରିବା ସମ୍ଭବପର ନୁହେଁ, ଏହି ବାସ୍ତବ ମଣିଷମାନ�୍କୁ ଲେଖିବାରେ ସହଯୋଗ କରିଥାଏ ଓ ସ୍ପାମର ଓ ବାକି ରୋବଟ ଆକ୍ରମଣକୁ ପ୍ରତିହତ କରିପାରେ ।

ଅପରାପକ୍ଷେ ଏହା ସ�ମିତ ଦୃଷ୍ଟିଥିବା ବା ଲେଖା କିମ୍ବା କଥା କୁହ ବ୍ରାଉଜର ବ୍ୟବହାର କରୁଥିବା ସଭ୍ୟମାନ�୍କୁ ଅସୁବିଧାରେ ପକାଇଥାଏ ।
ଅଧୁନା ଏଠାରେ ଧ୍ୱନିଚଳିତ ବିକଳ୍ପଟିଏ ଦେଇନାହୁଁ ।
ଆପଣ�୍କୁ ଉପଯୁକ୍ତ ଲେଖା ଦେବାରେ ସହଯୋଗ କରିବା ନିମନ୍ତେ ଦୟାକରି [[{{MediaWiki:Grouppage-sysop}}|ସାଇଟ ପରିଛା]]ମାନ�୍କୁ ଯୋହଗାଯୋଗ କରନ୍ତୁ ।

ଆପଣ�୍କ ବ୍ରାଉଜରରେ ଥିବା  'back' ଚିପି ପୃଷ୍ଠା ସମ୍ପାଦକକୁ ଲେଉଟିଯାନ୍ତୁ ।",
	'captcha-addurl-whitelist' => ' #<!�ଏହି ଧାଡ଼ିଟି ଯେମିତି ଅଛି ସେମିତି ଛାଡ଼ି ଦିଅନ୍ତୁ --> <pre>
# ତଳେ ସିଣ୍ଟାକ୍ସଟି ଦିଆଗଲା:
#   * ଧାଡ଼ିର ଶେଷରେ "#" ଚିହ୍ନ ଦିଆଥିବା ସବୁକିଛି ଏକ ମତାମତ
#   * ପ୍ରତିଟି ଅଣ-ଖାଲି ଧାଡ଼ି ଏକ regex ଖଣ୍ଡ ଯାହା କେବଳ URL ବାହାରେ ଥିବା ହୋଷ୍ଟ ମାନ�୍କ ସ�୍ଗେ ମେଲ ଖାଇଥାଏ
 #</pre> <!-- ଏହି ଧାଡ଼ିଟି ଯେମିତି ଅଛି ସେମିତି ଛାଡ଼ି ଦିଅନ୍ତୁ -->',
	'right-skipcaptcha' => 'CAPTCHA ଭିତରେ ନଯାଇ CAPTCHA ଦେଇ ସଞ୍ଚାଳିତ କାମ କରିବେ',
);

/** Pampanga (Kapampangan) */
$messages['pam'] = array(
	'captcha-createaccount' => 'Bang ala na kabud laltong account, pakipakibatan me ing papacuenta ra king lalam at ibili me ing pakibat ketang cahun ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount-fail' => 'E ustu o ala yu ing confirmation code.',
	'captchahelp-text' => "Maralas, mayayabusu la reng karinan king Aptas (websites) kareng spammer a gagamit automatic a paralan ba rong ipasquil kareng dakal a karinan deng karelang suglung.  Lipat ning malyari lang ilako deti, maragul la muring sakit buntuk.

Neng kayi, lalu na neng mangibiling karagdagang suglung king metung a bulung, mapalyaring magpalto yang larawan ning sulat a maki kule o anting medisporma ing wiki, at pakisabi nang i-type me itang makasulat. Uling e malagwang gawang automatic ing dapat a iti, paintulutan nong magpasquil deng keraklan kareng tau, kabang sasabatan no reng keraklan kareng spammer at lulub a robot.

Makalungkut mu pin at magkasakit la uli na niti deng gagamit a mapula mata o maki paglibut ( browser) a makabasi king sulat (text-based) o king siwala (speech-based). Ala keng alternatibu o kayaliling pakiramdaman king salukuyan. Nung malyari, pasaup ko sana ketang manibala king kekayung karinan (site administrator) nung magkasakit kayung magpasquil ulin na niti.

Mangaylangan kang manyalanging cookie king kekang paglibut (browser) para king obrang iti.

Timid me ing 'back' button king kekang browser bang mibalik ketang panaliling bulung (page editor).",
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'captchahelp-title' => 'Captcha-Hilf',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'captcha-edit' => 'Możesz edytować t� stron�, jednak najpierw musisz rozwiązać poniższe proste działanie matematyczne i wpisać wynik do pola tekstowego ([[Special:Captcha/help|pomoc]]):',
	'captcha-desc' => 'Dodaje CAPTCHA � zabezpieczenie przed spamującymi automatami oraz odgadywaniem haseł',
	'captcha-addurl' => 'Dodałeś nowe linki zewn�trzne. Ze wzgl�du na ochron� przed zautomatyzowanym spamem musisz wykonać proste działanie matematyczne i wpisać wynik w pole obok ([[Special:Captcha/help|wi�cej informacji]]):',
	'captcha-badlogin' => 'Zabezpieczenie przed automatycznym łamaniem haseł. Wpisz w pole poniżej wynik prostego działania matematycznego ([[Special:Captcha/help|pomoc]]).',
	'captcha-createaccount' => 'Zabezpieczenie przed automatycznie dodawanym spamem. Wpisz w pole poniżej wynik prostego działania matematycznego ([[Special:Captcha/help|pomoc]]).',
	'captcha-createaccount-fail' => 'Nieprawidłowy kod lub brak kodu potwierdzającego.',
	'captcha-create' => 'Aby utworzyć stron� wykonaj proste działanie i wpisz wynik w pole tekstowe ([[Special:Captcha/help|pomoc]]):',
	'captcha-sendemail' => 'Zabezpieczenie przed automatycznym spamem. Wpisz w pole poniżej wynik prostego dodawania ([[Special:Captcha/help|wi�cej informacji]]).',
	'captcha-sendemail-fail' => 'Nieprawidłowy lub brak kodu potwierdzającego.',
	'captcha-disabledinapi' => 'Ta czynność wymaga potwierdzenia capcha i z tego wzgl�du nie może być przeprowadzona z użyciem API.',
	'captchahelp-title' => 'Pomoc dla ochrony antyspamowej',
	'captchahelp-cookies-needed' => 'Musisz mieć włączone w przeglądarce ciasteczka (cookies), aby ta opcja działała.',
	'captchahelp-text' => 'Strony internetowe akceptujące edycje dokonywane przez każdego, tak jak ta wiki, są cz�sto atakowane przez spamerów, którzy używają automatycznych narz�dzi, aby dodawać linki prowadzące do ich stron.
Chociaż te linki mogą zostać usuni�te, jest to uciążliwe.

Czasami, zwłaszcza przy dodawaniu nowych linków do strony albo przy rejestracji, wiki może pokazać obrazek z kolorowym lub zniekształconym tekstem i poprosić Ci� o przepisanie zamieszczonego na nim wyrazu.
Ponieważ są to zadania trudne do zautomatyzowania, takie zabezpieczenia umożliwia ludziom dokonywania edycji, jednocześnie skutecznie powstrzymując wi�kszość spamerów i inne automatyczne ataki.

Niestety, może być to niewygodne dla użytkowników z wadą wzroku lub używających przeglądarek tekstowych lub głosowych.
Obecnie nie mamy alternatywnego rozwiązania audio.
Skontaktuj si� z [[{{MediaWiki:Grouppage-sysop}}|administratorami strony]] by uzyskać pomoc, jeśli nie możesz z tego powodu dokonywać uprawnionych edycji.

Wciśnij przycisk �wstecz� w przeglądarce by powrócić do edycji strony.',
	'captcha-addurl-whitelist' => ' #<!-- nie modyfikuj tej linii --> <pre>
# Składnia jest nast�pująca:
#   * Linie zaczynające si� od znaku �#� są komentarzami
#   * Każda linia, która nie jest pusta, jest wyrażeniem regularnym, które ma pasować do adresu serwera (fragmentu URL)
  #</pre> <!-- nie modyfikuj tej linii -->',
	'right-skipcaptcha' => 'Dost�p do czynności zabezpieczonych pytaniem o treść obrazka lub rozwiązanie zadania, z pomini�ciem zabezpieczenia',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'captcha-edit' => "Për fe-ie dle modìfiche ansima a st'artìcol-sì, për piasì ch'a fasa ël total ambelessì sota
e ch'a buta l'arzulta ant ël quadrèt ([[Special:Captcha/help|për savejne dë pì]]):",
	'captcha-desc' => "A dà dle técniche CAPTCHA për protege contra la rumenta e ij tentativ d'andviné la ciav",
	'captcha-addurl' => "Soa modìfica a la gionta dj'anliure esterne. Për giutene a vardesse da la reclam aotomatisà, për piasì ch'a fasa ël total ambelessì sota e ch'a buta l'arzultà ant ël quadrèt ([[Special:Captcha/help|për savejne dë pì]]):",
	'captcha-badlogin' => "Për giutene a vardesse da 'nt ij programa ch'a fan ciav fàosse n'aotomàtich, për piasì ch'a fasa ël total ambelessì sota e ch'a buta l'arzultà ant ël quadrèt ([[Special:Captcha/help|për savejne dë pì]]):",
	'captcha-createaccount' => "Për giutene a vardesse da ij programa ch'a deurbo dij cont n'aotomàtich, për piasì ch'a fasa ël total ambelessì sota
e ch'a buta l'arzultà ant ël quadrèt ([[Special:Captcha/help|për savejne dë pì]]):",
	'captcha-createaccount-fail' => "Ël còdes ëd verìfica ò ch'a manca d'autut ò ch'a l'é pa bon.",
	'captcha-create' => "Për creé d'amblé sta pàgina-sì, për piasì ch'a fasa ël total ambelessì sota e ch'a buta l'arzultà<br />
ant ël quadrèt ([[Special:Captcha/help|për savejne dë pì]]):",
	'captcha-sendemail' => "Për giuté a protegi contra la rumenta automàtica, për piasì ch'a fasa l'adission sempia sì-sota e ch'a buta l'arspòsta ant la casela ([[Special:Captcha/help|për savèjne ëd pi]]):",
	'captcha-sendemail-fail' => "Ël còdes ëd verìfica ò ch'a manca d'autut ò ch'a l'é pa bon.",
	'captcha-disabledinapi' => "St'assion-sì a ciama na captcha, parèj a peul pa esse fàita con na API.",
	'captchahelp-title' => 'Còs é-lo mai ës captcha?',
	'captchahelp-cookies-needed' => "Për podej dovré sossì a l'ha da manca che sò navigator (browser) a pija ij cookies.",
	'captchahelp-text' => "Soèns a-i riva che ij sit dla Ragnà che la gent a peul dovré për ëscrive chèich-còs, coma sta wiki-sì, a resto ambërlifà ëd reclam da màchine che a carìo soa ròba dadsà e dadlà n'aotomàtich. Për tant che sta reclam un a peula peuj gavela, a resta sempe un gran fastudi.

Dle vire, dzortut quand un a caria dj'anliure esterne neuve ansime a na pàgina, la wiki a peul ësmon-je na figurin-a con dël test colora ò pura tut ëstòrt e ciameje d'arbate lòn ch'a-i é scrit andrinta. Da già ch'a l'é grama scrive un programa ch'a lo fasa, a ven che la pì gran part dla gent a-i la fa a scrive, ma la ói part dle màchine a-i la fa pa.

Për maleur sossì a peul fastudié j'uetnt ch'a ës-ciàiro nen tant bin, col ch'a dòvro dij navigator mach a test ò pura dij navigator vocaj. Për adess i l'oma nen n'altërnativa disponibila ch'a fasa lese ël test a vos. Për piasì, ch'a contata j'[[{{MediaWiki:Grouppage-sysop}}|aministrator dël sit]] se sossì a dovèissa mai nen lasseje carié dël test ch'a sia legitim (visadì, nen dla reclam).

Ch'a-i bata ansima al boton 'andré' ant sò navigator për torné andré a l'editor dla pàgina.",
	'captcha-addurl-whitelist' => " #<!-- leave this line exactly as it is --> <pre>
# La sintassi a l'é costa:
#  * tut lòn ch'a-i ven dapress a un caràter \"#\" (fin-a a la fin dla riga) a l'é mach ëd coment
#  * minca riga nen veujda a l'é un frament d'espression regolar ch'as dòvra për identifiché j'adrësse dle màchine servente ant j'anliure
  #</pre> <!-- leave this line exactly as it is -->",
	'right-skipcaptcha' => "A fà j'assion che a ativo la captcha sensa avèj da passé da la captcha",
);

/** Western Punjabi (پنجابی)
 * @author Khalid Mahmood
 */
$messages['pnb'] = array(
	'captcha-edit' => 'اس صفحے نوں تبدیل کرن واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-desc' => 'کیپچا ول سپام تے کنجی اندازے توں بچن لئی دیندا اے۔',
	'captcha-addurl' => 'تواڈی تبدیلی چ نویں بارلے جوڑ نیں۔
اس صفحے نوں تبدیل کرن واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-badlogin' => 'اپنے آپ کنجی توڑن دے خلاف مدد واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-createaccount' => 'اپنے آپ غلط نویں کھاتے بنان نوں روکن واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-createaccount-fail' => 'غلط کنفرمیشن کوڈ۔',
	'captcha-create' => 'اس صفحے نوں بنان واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-sendemail' => 'اپنے آپ غلط مال آن نوں روکن واسطے، مہربانی کر کے اے سادہ جۓ سوال نوں حل کر کے ڈبے چ جواب لکھ دیو ([[Special:Captcha/help|مزید جانکاری]]):',
	'captcha-sendemail-fail' => 'غلط یا  چھوٹے کنفرمیشن کوڈ',
	'captcha-disabledinapi' => 'ایس کم لئی کیپچا چائیدا اے، ایس لئی ایہ اے پی آئی نال نئیں چل سکدا۔',
	'captchahelp-title' => 'کیپچا مدد',
	'captchahelp-cookies-needed' => 'توانوں اپنے براؤزر چ ککیاں چلانیاں پین گیاں ایس نوں چلان لئی۔',
	'captchahelp-text' => 'ویب سائیٹاں  جیہڑیاں لوکاں کولوں ڈاک لیندیاں نیں  جیویں ایہ وکی، ایناں تے خراب ڈاک پیجن والے ہلے بولدے ریندے نیں تے کئی سائیٹاں دے جوڑ جوڑدے ریندے نیں۔ ایہ سپام جوڑ ہٹاۓ جاسکدے نیں پر ایہ اک رپھڑ تے ہے نیں۔

کدے کدے، خاص طور تے کسے صفے نال نویں ویب جوڑ جوڑدیاں ہویاں، وکی توانوں اک رنگ والی یا خراب لکھت دسدا اے  تے توانوں پچھدا اے جے ٹائپ ہویا بول لکھو۔
اے کم ایسا اے جیہڑا چلانا اوکھا اے، اے چوکھے سارے لوکاں نوں اپنی ڈاک پیجن دیوے گا تے سپامراں نوں روک دیوے گا،

بدقسمستی نال اے تھوڑی سوچ رکھن والے ورتنوالیاں  یا لکھت ورتن والے یا گل بات والے براؤزر نوں چنگا ناں لگے۔
ایس ویلے ساڈے کول ایدے تھاں تے ورتیا جان والا آڈیو نئیں۔ مہربانی کرکے  [[{{MediaWiki:Grouppage-sysop}}|site administrators]] نال ملو مدد لئی اگ ایہ اچانک تواڈی ٹھیک ڈاک نوں روکدا اے۔
بیک بٹن نوں دباؤ اپنے براؤزر چ صفہ لکھاری تک اپڑن لئی۔',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntax is as follows:
#   * Everything from a "#" character to the end of the line is a comment
#   * Every non-blank line is a regex fragment which will only match hosts inside URLs
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'کیپچا ٹورن والے کم کیپچا چوں گۓ بنا کرو۔',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'captcha-create' => 'ددې لپاره چې نوی ليکنه ترسره کړی، لطفاً د همدغه ساده شمېرو ځواب په ورکړ شوي چوکاټ کې وليکی ([[Special:Captcha/help|نور مالومات]]):',
	'captchahelp-title' => 'CAPTCHA لارښود',
	'captchahelp-cookies-needed' => 'ددې کړنې د ترسره کېدلو لپاره تاسو ته پکار ده چې د خپل کتنمل (browser) کوکيز (cookies) چارن کړی.',
);

/** Portuguese (Português)
 * @author 555
 * @author Hamilton Abreu
 * @author Malafaya
 */
$messages['pt'] = array(
	'captcha-edit' => 'Para editar esta página, por favor, resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):',
	'captcha-desc' => 'Fornece técnicas CAPTCHA para protecção contra spam e tentativas de adivinhar a palavra-chave',
	'captcha-addurl' => "A sua edição introduziu links externos novos.
Como prevenção contra sistemas automatizados de inserção de ''spam'', resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):",
	'captcha-badlogin' => 'Como prevenção com sistemas automatizados de descoberta de palavras-chave, resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):',
	'captcha-createaccount' => 'Como prevenção contra sistemas automatizados de criação de contas, resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):',
	'captcha-createaccount-fail' => 'Código incorreto ou não preenchido.',
	'captcha-create' => 'Para criar a página, resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):',
	'captcha-sendemail' => "Como prevenção contra sistemas automatizados de inserção de ''spam'', resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):",
	'captcha-sendemail-fail' => 'Código de confirmação incorrecto ou não preenchido.',
	'captcha-disabledinapi' => 'Esta operação necessita de captcha, por isso não pode ser realizada através da API.',
	'captchahelp-title' => 'Ajuda sobre o CAPTCHA',
	'captchahelp-cookies-needed' => "É necessário possibilitar o uso de ''cookies'' no seu browser para que o ''captcha'' funcione.",
	'captchahelp-text' => "Sites na internet abertos a edição pública, como é o caso desta wiki, são frequentemente abusados por ''spammers'' que utilizam ferramentas automatizadas para inserção em massa de links, em muitos sites.
Embora esses links possam ser removidos, representam um incómodo significativo.

Por vezes, especialmente quando introduzir links externos novos numa página, a wiki apresentará a imagem de um texto colorido ou distorcido e pedirá que escreva o texto apresentado.
Porque a interpretação do texto apresentado nas imagens é uma tarefa difícil de automatizar, este pedido feito pela wiki permite que a maioria das pessoas façam as suas edições, ao mesmo tempo que inibe edições feitas por ''spammers'' e outros mecanismos automatizados.

Infelizmente, esta funcionalidade pode revelar-se um inconveniente para utilizadores com limitações visuais ou que utilizam browsers baseados em texto ou voz.
Neste momento, não temos disponível uma alternativa em áudio.
Por favor, contacte os [[{{MediaWiki:Grouppage-sysop}}|administradores]] para assistência, caso a funcionalidade esteja a impedi-lo de fazer edições legítimas.

Clique o botão 'voltar' do seu browser para voltar à página de edição.",
	'captcha-addurl-whitelist' => ' #<!-- deixe esta linha exactamente como está --> <pre>
# A sintaxe é a seguinte:
#  * Tudo desde um símbolo de cardinal (#) até ao fim da linha é um comentário
#  * Qualquer linha que não esteja em branco é um fragmento de expressão regular (regex) que será comparado com o servidor das URLs
 #</pre> <!-- deixe esta linha exactamente como está -->',
	'right-skipcaptcha' => "Executar acções despoletadoras do CAPTCHA' sem ter de passar pelo CAPTCHA",
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author Jesielt
 */
$messages['pt-br'] = array(
	'captcha-edit' => 'Para editar esta página será necessário que você resolva a simples soma abaixo e entre com a resposta no respectivo campo ([[Special:Captcha/help|o que é isto?]])',
	'captcha-desc' => 'Fornece técnicas captcha para proteção contra spam e tentativas de obtenção de senhas',
	'captcha-addurl' => 'Sua edição inclui novas ligações externas.
Para prevenção contra sistemas automatizados que inserem spam, será necessário que você resolva a simples soma abaixo e entre com a resposta no respectivo campo ([[Special:Captcha/help|o que é isto?]])',
	'captcha-badlogin' => 'Como prevenção contra sistemas automatizados de pesquisa e descoberta de senhas, será necessário que você resolva a simples soma abaixo e entre com a resposta no respectivo campo ([[Special:Captcha/help|o que é isto?]])',
	'captcha-createaccount' => 'Como prevenção contra sistemas automatizados de criação de contas, por favor resolva a simples soma abaixo e entre com a resposta no respectivo campo ([[Special:Captcha/help|O que é isto?]]):',
	'captcha-createaccount-fail' => 'Código de confirmação incorreto ou não preenchido.',
	'captcha-create' => 'Para criar a página, por favor resolva a simples soma abaixo e entre com a resposta no respectivo campo ([[Special:Captcha/help|o que é isto?]])',
	'captcha-sendemail' => "Para ajudar a prevenir o ''spam'' automatizado, por favor, resolva a soma simples apresentada abaixo e introduza a resposta na caixa ([[Special:Captcha/help|mais informações]]):",
	'captcha-sendemail-fail' => 'Código de confirmação incorreto ou não preenchido.',
	'captcha-disabledinapi' => 'Esta operação necessita de captcha, por isso não pode ser realizada através da API.',
	'captchahelp-title' => 'Ajuda com o Captcha',
	'captchahelp-cookies-needed' => 'Você precisa ter cookies habilitados em seu navegador para que possa funcionar',
	'captchahelp-text' => "Sites abertos a inserções públicas, como é o caso desta wiki, são vulneráveis a spammers que utilizam ferramentas automatizadas para inserir seus links em diversos locais.
Remover tais ligações posteriormente pode ser um incômodo significativo.

Algumas vezes, especialmente ao adicionar novas ligações externas a uma página, o wiki exibirá uma imagem com um texto colorido ou distorcido e pedirá que você introduza as palavras exibidas.
Uma vez que essa é uma tarefa um tanto difícil de ser automatizada, ela possibilita que a maioria dos humanos faça as suas inserções ao mesmo tempo que inibe as que forem feitas por spammers e mecanismos automatizados.

Infelizmente, isso pode ser um inconveniente para usuários com limitações visuais ou que naveguem através de mecanismos baseados em texto ou baseados em voz.
No momento, não está disponível uma alternativa em áudio.
Por favor, contate os [[{{MediaWiki:Grouppage-sysop}}|administradores do sítio]] em casos que seja necessária a assistência de alguém para que você possa fazer as suas inserções legítimas.

Pressione o botão 'voltar' de seu navegador para retornar à página de edição.",
	'captcha-addurl-whitelist' => ' #<!-- deixe este linha exatamente como está --> <pre>
# A sintaxe é a que se segue:
#  * Tudo desde o caractere "#" até ao fim da linha é um comentário
#  * Qualquer linha não vazia é um fragmento de regex que irá apenas verificar o servidor dentro das URLs
  #</pre> <!-- deixe este linha exatamente como está -->',
	'right-skipcaptcha' => 'Executar ações disparadoras de captcha sem ter que passar pelo captcha',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'captchahelp-title' => 'Captcha nisqamanta yanapay',
);

/** Romanian (Română)
 * @author BrokenArrow
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Mihai
 * @author Minisarm
 */
$messages['ro'] = array(
	'captcha-edit' => 'Editarea include legături externe noi. Pentru a evita spam-ul automat, vă rugăm să rezolvați adunarea de mai jos �i introduceți rezultatul în căsuță ([[Special:Captcha/help|detalii]]):',
	'captcha-desc' => 'Oferă implementare de tip CAPTCHA împotriva spamului �i încercărilor de aflare a parolelor',
	'captcha-addurl' => 'Editarea include legături externe noi. Pentru a evita spam-ul automat, vă rugăm să rezolvați adunarea de mai jos �i introduceți rezultatul în căsuță ([[Special:Captcha/help|detalii]]):',
	'captcha-badlogin' => 'Ca măsură de protecție împotriva spargerii de parole, vă rugăm să rezolvați adunarea de mai jos �i introduceți rezultatul în căsuță ([[Special:Captcha/help|detalii]]):',
	'captcha-createaccount' => 'Pentru a evita crearea automată de conturi, vă rugăm să rezolvați adunarea de mai jos �i introduceți rezultatul în căsuță ([[Special:Captcha/help|detalii]]):',
	'captcha-createaccount-fail' => 'Cod de confirmare incorect sau lipsă.',
	'captcha-create' => 'Editarea include legături externe noi. Pentru a evita spam-ul automat, vă rugăm să rezolvați adunarea de mai jos �i introduceți rezultatul în căsuță ([[Special:Captcha/help|detalii]]):',
	'captcha-sendemail' => 'Pentru a împiedica roboții de spam, vă rugăm să rezolvați operația simplă de mai jos �i să introduceți răspunsul în căsuță ([[Special:Captcha/help|mai multe detalii]]):',
	'captcha-sendemail-fail' => 'Codul de confirmare lipse�te sau este incorect.',
	'captcha-disabledinapi' => 'Această acțiune necesită rezolvarea unui captcha, deci nu poate fi efectuată prin API.',
	'captchahelp-title' => 'Despre �Captcha�',
	'captchahelp-cookies-needed' => 'Trebuie ca browserul dumneavoastră să accepte cookie-uri pentru ca aceasta să funcționeze.',
	'captchahelp-text' => 'Siturile web care acceptă postări din partea publicului, precum acest wiki, sunt de obicei abuzate de persoane care folosesc unelte automate pentru a introduce legături către multe alte situri. De�i aceste legături de spam pot fi îndepărtate, acest lucru reprezintă o muncă inconvenientă.

Uneori, mai ales la adăugarea de legături web noi într-o pagină, situl wiki vă poate arăta o imagine cu un text colorat sau distorsionat �i veți fi rugat să introduceți cuvintele indicate. Deoarece aceasta este o sarcină greu de automatizat, ea permite majorității persoanelor reale să posteze �i va opri majoritatea atacatorilor.

Din nefericire, această metodă îi poate deranja pe utilizatorii cu probleme vizuale sau care folosesc browsere bazate pe text sau sunet. În acest moment nu avem o alternativă audio disponibilă.
Vă rugăm, contactați [[{{MediaWiki:Grouppage-sysop}}|administratorii sitului]] pentru asistență dacă metoda vă opre�te de la a face postări legitime.

Apasă butonul �Înapoi� al browserului pentru a te reîntoarce la pagina de editare.',
	'captcha-addurl-whitelist' => ' #<!-- lăsați această linie a�a cum este --> <pre>
# Sintaxa este a�a cum urmează:
#   * Toate liniile care încep cu �#� sunt considerate comentarii
#   * Toate liniile care nu sunt goale sunt fragmente RegEx care vor găsi doar gazda din interiorul URL-urilor
 #</pre> <!-- lăsați această linie a�a cum este -->',
	'right-skipcaptcha' => 'Efectuează acțiuni care necesită completarea unui cod CAPTCHA fără a fi nevoie să facă acest lucru',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'captcha-edit' => "Pe cangià sta pàgene, pe piacere fa sta somma facile facile aqquà sotte e mitte 'a resposte jndr'à sckatele ([[Special:Captcha/help|maggiore 'mbormaziune]]):",
	'captcha-addurl' => "'U cangiamende tue inglude de le collegaminde esterne.
Pe aiutà a proteggere condre a 'u spam automateche, pe piacere respunne a 'a domande ca combare sotte ([[Special:Captcha/help|cchiù 'mbormaziune]]):",
	'captcha-badlogin' => "Pe aiutà a proteggere da le futteminde de passuord automateche, pe piacere fa sta somma facile facile aqquà sotte e mitte 'a resposte jndr'à sckatele ([[Special:Captcha/help|maggiore 'mbormaziune]]):",
	'captcha-createaccount-fail' => 'Codece de conferme non corrette o mangande.',
	'captcha-create' => "Pe ccrejà sta pàgene, pe piacere fa sta somma facile facile aqquà sotte e mitte 'a resposte jndr'à sckatele ([[Special:Captcha/help|maggiore 'mbormaziune]]):",
	'captcha-sendemail' => "Pe aiutà a proteggere da 'a munnezze automateche, pe piacere fa sta somma facile facile aqquà sotte e mitte 'a resposte jndr'à sckatele ([[Special:Captcha/help|maggiore 'mbormaziune]]):",
	'captcha-sendemail-fail' => 'Codece de conferme non corrette o mangande.',
	'captcha-disabledinapi' => "St'azione ave abbesogne de 'nu captcha, accussì non g'è possibbele eseguirle cu le API.",
	'captchahelp-title' => 'Aijute pu captcha',
	'captchahelp-cookies-needed' => "Tu è abbesogne de avè le cookie abbilitate jndr'à 'u browser tune pe sta fatìe.",
	'captcha-addurl-whitelist' => " #<!-- leave this line exactly as it is --> <pre>
# 'A sindasse jè a cumme segue:
#   * Ogneccose da 'nu carattere \"#\" 'mbonde a fine d'a linèe jè 'nu commende
#   * Ogne linèe chiene jè 'nu frammende de regex 'u quale addà sulamende combrondarse cu le host jndr'à l'URL
 #</pre> <!-- leave this line exactly as it is -->",
);

/** Russian (Русский)
 * @author Ahonc
 * @author Aleksandrit
 * @author Kalan
 * @author Александ� Сигачёв
 */
$messages['ru'] = array(
	'captcha-edit' => 'Чтобы от�едакти�овать эту ст�аницу, пожалуйста, �ешите п�остой п�име� и введите ответ в текстовое поле ([[Special:Captcha/help|под�обнее]]):',
	'captcha-desc' => 'П�едоставляет методы CAPTCHA для защиты от спама и подбо�а па�оля',
	'captcha-addurl' => 'Вы добавили ссылку на внешний сайт;
в целях защиты от автоматического спама, введите буквы изоб�ажённые на ка�тинке:<br />
([[Special:Captcha/help|Что это такое?]])',
	'captcha-badlogin' => 'В целях защиты от автоматического взлома па�оля, пожалуйста, выполните следующее п�остое а�ифметическое действие и введите ответ в текстовое поле ниже ([[Special:Captcha/help|под�обнее]]):',
	'captcha-createaccount' => 'В качестве ме�ы п�отив автоматического спама, вы должны ввести буквы, изоб�ажённые на ка�тинке, чтобы за�егист�и�оваться в системе:<br />
([[Special:Captcha/help|Что это такое?]])',
	'captcha-createaccount-fail' => 'Конт�ольная комбинация неве�на или не введена.',
	'captcha-create' => 'Чтобы создать ст�аницу, �ешите п�остой п�име� и введите ответ в текстовое поле ([[Special:Captcha/help|что это?]]):',
	'captcha-sendemail' => 'В целях защиты от автоматического спама, пожалуйста, вычислите п�иведённое п�остое вы�ажение и введите ответ ([[Special:Captcha/help| под�обнее]]):',
	'captcha-sendemail-fail' => 'Код подтве�ждения неп�авильный или отсутствует.',
	'captcha-disabledinapi' => 'Это действие т�ебует п�ове�ки CAPTCHA, и поэтому не может быть выполнено че�ез API.',
	'captchahelp-title' => 'Сп�авка о CAPTCHA',
	'captchahelp-cookies-needed' => 'Вам нужно включить куки в б�аузе�е, чтобы эта функция за�аботала.',
	'captchahelp-text' => 'Веб-сайты, позволяющие добавлять и изменять своё соде�жимое, в том числе эта вики, часто становятся целью спаме�ов, использующих п�ог�аммы для автоматического добавления ссылок на сайты.
Хотя такие ссылки могут быть впоследствии удалены, они являются существенной помехой.

П�и некото�ых действиях � нап�име�, п�и добавлении на ст�аницу новой веб-ссылки � вы можете увидеть специальную ка�тинку с цветным или искажённым текстом, и вам будет п�едложено ввести этот искажённый текст.
Так как �аспознавание искажённого текста является сложной задачей для п�ог�амм, то большинство спаме�ских и вандальных п�ог�амм не могут с ней сп�авиться, в то в�емя как люди сп�авляются легко.

К сожалению, подобная защита может п�ичинить неудобства людям с ог�аничениями по з�ению или тем, кто использует текстовые или читающие б�аузе�ы.
В настоящее в�емя у нас нет звуковой альте�нативы данной п�ове�ке.
Пожалуйста, об�атитесь за помощью к [[{{MediaWiki:Grouppage-sysop}}|админист�ато�ам]], если подобная п�ове�ка мешает вам доб�осовестно �аботать с сайтом.

Нажмите кнопку «Назад» в вашем б�аузе�е, чтобы ве�нуться к �едакти�ованию.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Описание синтаксиса:
#  * Всё, начиная с символа "#" и до конца ст�оки считается коммента�ием
#  * Каждая непустая ст�ока считается ф�агментом �егуля�ного вы�ажения соответствующего имени узла в URL
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'выполнение т�ебующих CAPTCHA-п�ове�ки действий без п�охождения CAPTCHA',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'captcha-edit' => 'Жебысьте могли едітовати тоту сто�інку, мусите вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]])',
	'captcha-desc' => 'Забезпечує техніку CAPTCHA п�о ох�ану пе�ед спамом і гаданём гесел',
	'captcha-addurl' => 'Ваше едітованя обсягує новы одказы фо�мов URL; п�о охо�ону пе�ед автоматічным спамом мусите вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]])',
	'captcha-badlogin' => 'В �амках охо�оны пе�ед автоматічныма п�обами угаднути гесло мусите вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]]):',
	'captcha-createaccount' => 'В �амках охо�оны пе�ед автоматічныма ство�ёванями конт мусите п�о выконаня �еґіст�ації вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]]):',
	'captcha-createaccount-fail' => 'Хыблячій ці неп�авилный код підтве�джіня.',
	'captcha-create' => 'Жебысьте могли ство�ити тоту сто�інку, мусите вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]])',
	'captcha-sendemail' => 'В �амках охо�оны пе�ед автоматічным спамом мусите вы�їшыти наступну п�осту суму і написати �езултат. ([[Special:Captcha/help|Што тото значіть?]]):',
	'captcha-sendemail-fail' => 'Хыблячій ці неп�авилный код підтве�джіня.',
	'captcha-disabledinapi' => 'Тота опе�ація пот�ебує сповнїня CAPTCHA, также ся не дасть выконати с�едством API.',
	'captchahelp-title' => 'Поміч п�о CAPTCHA',
	'captchahelp-cookies-needed' => 'Абы то фунґовало, мусите мати у своїм пе�еглядачу запнуты кукі.',
	'captchahelp-text' => 'Вебовы сто�інкы, до кот�ых можуть п�испівати їх навщівници (як нап�иклад тота вікі), суть часто цілём спаме�ів, кот�ы за помочі автоматічных іншт�ументів вкладають свої одказы на велике множество сто�інок. І напе�ек тому, же тот спам ся дасть одст�анити, п�едставлює неп�иємне от�овованя.

Даколи, ок�емо почас п�идаваня новых вебовых одказів, вам може вікі указати об�азок фа�ебного ці поск�учаного тексту і пожадати вас о описаня зоб�аженых знаків. Кідьже таку задачу не годен легко автоматізовати, �еалны люде можуть дале п�испівати, але векшыну спаме�ів і іншых �оботічных атаке�ів тото заставить.

На жаль тото може п�едставляти неп�иємный п�облем п�о хоснователїв постиженых з�аково ці голосовы чітачкы. В сучасній добі не маєме алте�натівни звукову ве�зію. П�осиме, контактуйте [[{{MediaWiki:Grouppage-sysop}}|адмініст�ато�а се�ве�а]], кідь вам то бо�онить в хосновным вкладї і т�еба вам поміч.

П�о наве�нутя на попе�едню сто�інку стиснийте у своїм пе�еглядачі клапку �назад�.',
	'captcha-addurl-whitelist' => ' #<!-- зохабте тот �ядок точно так як є --> <pre>
# Сінтаксіс є наслїдня:
#  * Вшытко од знаку �#� до кінце �ядка є комента�ь
#  * Каждый непо�ожнїй �ядок є ф�аґмент �еґула�ного вы�азу, кот�ы ся аплікує лем на назву госта в URL
 #</pre> <!-- зохабте тот �ядок точно так як є -->',
	'right-skipcaptcha' => 'Выконованя дїй споєных з CAPTCHA без пот�ебы їх �їшіня',
);

/** Sakha (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'captcha-edit' => 'Си�эйи ула�ытыаххын баҕа�даххына, манна баа� п�име�ы суоттаа уонна эппиэтин аналлаах си�гэ су�уй ([[Special:Captcha/help|сиһилии]]):',
	'captcha-desc' => 'CAPTCHA көмөтүнэн спаамтан уонна кии�ии тылы уо�ууттан көмүскэли хааччыйа�',
	'captcha-addurl' => 'Тас саайка ыйынньык ту�уо�буккун; 
спаамтан көмүскэнэ� со�уктаах суолу толо� - ойууга баа� буукубала�ы хатылаа: <br />
([[Special:Captcha/help|Сиһилии]])',
	'captcha-badlogin' => 'Кии�ии тылы аптамаат алдьаппатын туһуга� оҥоһуллубут ха�ыстыы� дьайыыны толо�, манна баа� п�име�ы суоттаа уонна эппиэтин анал си�гэ су�уй ([[Special:Captcha/help|сиһилии]]):',
	'captcha-createaccount' => 'Бэлиэтэнэ�гэ� аптамаатынан алдьатыыттан (спаамтан) ха�ыстыы� со�уктаах дьайыыны оҥо�, ойууга көстө� буукубала�ы анал си�гэ киллэ�:<br />
([[Special:Captcha/help|Сиһилии]])',
	'captcha-createaccount-fail' => 'Бигэ�гэтии куода суох эбэтэ� атын.',
	'captcha-create' => 'Си�эйи оҥо�о�го бу п�име�ы суоттаа ([[Special:Captcha/help|сиһилии]]):',
	'captcha-sendemail' => 'Аптамаат спаамтан көмүскэнэ� туһуга�, бука диэн, бу дьайыыны суоттаа уонна эппиэтин су�уй ([[Special:Captcha/help|сиһилии]]):',
	'captcha-sendemail-fail' => 'Бигэ�гэтии куода суох эбэтэ� атын.',
	'captcha-disabledinapi' => 'Бу дьайыы CAPTCHA нөҥүө э�э оҥоһулла�, онон API нөҥүө толо�уллубат.',
	'captchahelp-title' => 'Captcha көмөтө',
	'captchahelp-cookies-needed' => 'Бу дьайыы үлэлии�ин ку�дук б�аузе�га� куукины холбоо.',
	'captchahelp-text' => 'Биһиги саайпыт ку�дук иһинээҕитин ула�ыта�ы көҥүллүү� саайта�га со�оҕо� спам ыыта� п�ог�аммала� аптамаатынан бэйэлэ�ин ыйынньыкта�ын угалла�.
Оннук аптамаатынан эбиллибит ыйынньыкта�ы суох оҥо�о� кыах баа� э�ээ�и, ол биллэн ту�а� син бии� мэһэйдэ�и үөскэтэ�.

Ол иһин со�оҕо�, холобу� саҥа ыйынньыгы эбэ�гэ, п�ог�амма өҥнөөх эбэтэ� хаанньа�ы ба�быт тиэкистээх ойууну кө�дө�өн, ол тиэкиһи анал түннүккэ хатылатыан сөп.
Маннык кө�дөһүүнү аптамаат кыайан толо�бот, оттон киһи чэпчэкитик толо�о�.

Ол гынан ба�ан маннык көмүскэл со�ох дьоҥҥо (кө�бөт эбэтэ� ааҕа� б�аузе�да�ы туһана� дьоҥҥо) моһолло�у үөскэтиэн сөп.
Билигин бу моһолу суох оҥо�о� кыах суох.
Оннук мэһэй таҕыстаҕына бука диэн баалама, бии� эмит [[{{MediaWiki:Grouppage-sysop}}|дьаһабылга (админист�аата�га)]]  этээ�, көмөлөһүө.

Көннө�үүгэ төттө�ү тиийэ�гэ б�аузе�ыҥ «Назад» тимэҕин баттаа.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Синтаксиһын быһаа�ыыта:
#  * "#" бэлиэттэн ст�ока бүтүө� дылы ба�ыта хос быһаа�ыы ку�дук ааҕылла�
#  * Хас бии�дии ку�аанах буолбатах ст�ока URL со�ҕотун ку�дук ааҕылла�
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'CAPTCHA-бэ�эбиэ�кэни ааһыахтаах дьайыыла�ы CAPTCHA-та суох толо�уу',
);

/** Sicilian (Sicilianu)
 * @author Melos
 * @author Santu
 */
$messages['scn'] = array(
	'captcha-edit' => 'Pi mudificaru la pàggina è nicissàriu arisòrviri lu sèmprici càlculu prisintati di sècutu e nziriri lu risurtatu nnâ casedda
([[Special:Captcha/help|chiossai nfurmazzioni]]):',
	'captcha-desc' => 'Sèmprici mplimintazzioni di na Captcha',
	'captcha-addurl' => "La mudìfica addumannata junci novi lijami di fora a la pàggina; pi pricauzzioni contr'a lu nzirimentu autumàticu di spam, è nicissarii arisòrviri lu sèmprici càlculu prisintatu di sècutu e nziriri lu risurtatu nnâ casedda ([[Special:Captcha/help|chiossai nfurmazzioni]]):",
	'captcha-badlogin' => "Pi pricauzzioni contr'a li tintativi di furzatura autumàtica dâ password, è nicussàriu arisòrviri lu sèmprici càlculu prusuntatu di sècutu e nziriri lu risurtatu nnâ casedda ([[Special:Captcha/help|chiossai nfurmazzioni]]):",
	'captcha-createaccount' => "Pi pricauzzioni contr'a li  tintativi di criazzioni autumàtica di l'account, pi riggistràrisi è nicissàriu arisòrviri lu sèmprici càlculu prisintatu di sècutu e nziriri lu risurtatu nnâ casedda ([[Special:Captcha/help|chiossai nfurmazzioni]]):",
	'captcha-createaccount-fail' => 'Còdici di virìfica sbagghiatu o ca manca.',
	'captcha-create' => 'Pi criari la pàggina è nicissàriu arisòrviri lu sèmprici càlculu prisintatu di sècutu e nziriri lu risurtatu nnâ casedda:<br />
([[Special:Captcha/help|chiossai nfurmazzioni]]):',
	'captchahelp-title' => "Chi cos'è lu captcha?",
	'captchahelp-cookies-needed' => 'È nicissàriu abbilitari li cookie supra lu browser pi jiri avanti',
	'captchahelp-text' => "Ô spissu accàpita ca li siti Web ca accunzèntunu missaggi pùbbrichi, comu a stu wiki, sù pigghiati di mira di spammer ca ùsanu strumenti autumàtichi pi nziriri lijami pubbricitari ammeri assai nùmmira di siti. Macari ca li lijami ca non sunnu disiati si ponnu livari, sta cosa è, nti ogni casu, na granni camurrìa.

Nni tanti casi, p'asèmpiu quannu si voli jùnciri novi lijami Web nti na pàggina, lu software wiki pò ammustrari na mmàggini cu nu testu nicu acculuratu e/o difurmatu addumannannu di scrivìrilu nni na finistredda. Siccomu si tratta di na cosa difficili di fari pi nu computer, stu miccanìsimu pirmetti a (quasi tutti) l'utenti riali di cumplitari lu nzirimentu disiatu, mpidennu la trasuta a li chiossai di li spammer e di l'àutri attacchi autumatizzati.

Pi sfurtuna, stu strataggemma pò mèttiri 'n difficultati a l'utenti ca hannu prubremi di vista o a chiddi ca ùsanu browser testuali o basati supr'a la sìntesi vucali. Purtroppu aoggi non ci sunnu àutri miccanìsimi abbasati supr'a missaggi sunori; si sti pruciduri mpidìsciunu lu nzirimentu di nfurmazzioni ca si pènzanu ca sù liggìttimi, siti prigati di cuntattari [[{{MediaWiki:Grouppage-sysop}}|l'amministraturi dû situ]] e addumannàrini l'assistenza.

Fari clic supra ô buttuni 'back' dû browser pi turnari a la pàggina di mudìfica.",
	'captcha-addurl-whitelist' => " #<!-- non mudificari 'n nuddu modu sta riga --> <pre>
# La sintassi è chista:
#  * Tuttu chiddu ca veni doppu nu caràtttrt \"#\" è nu cummentu, nzinu a la fini di la riga
#  * Tutti li righi npn vacanti sunnu frammenti di sprissioni riulari ca s'àpplicanu a lu sulu nomu di l'host ntê URL
  #</pre> <!-- non mudificari 'n nuddu modu sta riga -->",
	'right-skipcaptcha' => "Fà l'azzioni ca attivàssiru lu captcha senza passari pi lu captcha",
);

/** Scots (Scots)
 * @author OchAyeTheNoo
 */
$messages['sco'] = array(
	'captcha-edit' => 'Tae edit this airticle, please dae the eisy sum ablo an put the answer in the box ([[Special:Captcha/help|mair info]])',
);

/** Sinhala (සිංහල)
 * @author Budhajeewa
 * @author Singhalawap
 * @author නන්දිමිතුරු
 * @author පසිඳු කා�ින්ද
 */
$messages['si'] = array(
	'captcha-edit' => 'ම�ම පිටු� සංස්කරණය කිරීමට, කරුණාකර පහත දැක්��න සරල එකතුකිරීම �ිසඳා පිලිතුර කොටු�ේ ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩි �ිස්තර]]):',
	'captcha-desc' => 'ස්පෑම් සහ මුරපද-අනුමාන �ලන් ආරක්ෂා� සදහා කැප්චා තාක්ෂණය සපයනු ලැබේ',
	'captcha-addurl' => 'ඔබගේ සංස්කරණය�හි න� බාහිර සබැඳියන් අඩංගුයි.
ස්�යංක්�රීය අයාචිත තැපෑල�න් ආරක්ෂා �නු �ස්, පහත සරල ගණිත ගැටළු� �ිසඳා පිළිතුර කොටු��හි ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩිමනත් තොරතුරු]]):',
	'captcha-badlogin' => 'ස්�යංක්�රීය මුරපද බිඳීම �ලක්�නු �ස්, පහත සරල ගණිත ගැටළු� �ිසඳා පිළිතුර කොටු��හි ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩිමනත් තොරතුරු]]):',
	'captcha-createaccount' => 'ස්�යංක්�රීය ගිණුම් තැනීම�න් ආරක්ෂා කිරීමට උද�ු කරනු �ස්, කරුණාකර පහත දැක්��න සරල එකතුකිරීම �ිසඳා පිලිතුර කොටු�ේ ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩි �ිස්තර]]):',
	'captcha-createaccount-fail' => 'තහ�ුරුකිරීමේ කේතය එක්කෝ සා�ද්�යයි නැතිනම් සො�යාගත නොහැක.',
	'captcha-create' => 'ම�ම පිටු� තැනීමට, කරුණාකර පහත දැක්��න සරල එකතුකිරීම �ිසඳා පිලිතුර කොටු�ේ ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩි �ිස්තර]]):',
	'captcha-sendemail' => 'ස්��යංක්�රීය ස්පෑම්කරණයන්ග�න් �ැලකීමට, කරුණාකර පහත දැක්��න සරල එකතුකිරීම �ිසඳා පිලිතුර කොටු�ේ ඇතුලත් කරන්න ([[Special:Captcha/help|�ැඩි �ිස්තර]]):',
	'captcha-sendemail-fail' => 'තහ�ුරුක�රුම් කේතය සොයාගත නොහැකි හෝ �ැරදිය.',
	'captcha-disabledinapi' => 'ම�ම ක්�රියා�ට කැප්චා�ක් අ�ැසි නිසා එය API හරහා කළ නොහැක.',
	'captchahelp-title' => 'Captcha උද�ු',
	'captchahelp-cookies-needed' => 'ම�ය ක්�රියාත්මක �ීමට නම් ඔබ �ිසින් ඔබගේ බ්�ර�ුසරය�හි කුකීස් සක්�රිය කොට තිබිය යුතුය.',
	'captchahelp-text' => 'මහජනයාගේ පළක�රුම් පිළිගන්නා ම��න් �ිකි �ැනි අඩ�ි තමන්ගේ අඩ�ියන් ��ත සබැඳි ඇතුලත් කිරීමට ස්��යංක්�රීය ම��ලම් භා�ිතා කරන ස්පෑම්කරු�න්ගේ අයතා භා�ිතයට ගොදුරු �ේ. ම�ම සබැඳියන් ඉ�ත් කළ හැකි �ු�ද, ඒ�ා ඉතාමත් කරදරකාරීය.

ඇතැම් �ිට, �ිශේෂය�න්ම පිටු�කට සබැඳියක් එක් කරනා �ිට, �ිකිය �ිසින් ඔබට �ර්ණිත හෝ �ිකෘතිත ප�ළක් ප�න්�ා එහි සඳහන් �දන් යතුරුලියන ල�ස ඔබ�න් ඉල්ලනු ඇති.
එය ස්��යංක�රුමට අසීරු ක්�රියා�ක් බැ�ින් එය මගින් සැබෑ මිනිසුන්ට ලිපි ලියුමට ඉඩ ද�න අතරම බොහෝමයක් ස්පෑම්කරු�න් හා ස්��යංක්�රීය පහරදීම් �ලක්�නු ඇති.

නමුත් අ�ාසනා�කට ම�ය නිසා දෘෂ්ඨි දෝෂ සහිත හෝ ප�ළ-පාදක හෝ කථන-පාදක ��බ් පිරික්සක භා�ිතා කරන පරිශීලකයන් අපහසුතා�ට පත් �නු ඇත.
මේ �න �ිට අප සතු� ශ්�ර�්�ය �ිකල්පයක් නොමැත.

ම�ය නිසා ඔබට ලිපි ලි�ීම දැඩි ල�ස කරදරකාරී �ී ඇත්නම් කරුණාකර සහය සඳහා [[{{MediaWiki:Grouppage-sysop}}|අඩ�ි පරිපාලකයන්]] සම්බන්ධ කරගන්න.

පිටු සකසනයට ආපසු යාම සඳහා ඔබේ ��බ් පිරික්සකයේ "පසුපසට" බොත්තම තද කරන්න.',
	'captcha-addurl-whitelist' => '#<!-- ම�ම පේළිය ම�ල�සින්ම තිබීමට ඉඩ හරින්න --> <pre>
# �ාග් රීතිය පහත පරිදි �ේ:
#   * "#" අක්ෂරයක සිට පේළියක අග දක්�ා සියල්ල පරිකථනයක් �ේ
#   * සෑම නො-හිස්  පේළියක්ම, කලාප ලිපිනයන් (URL) තුල සත්කාරකයන් පමණක් ගලපන නිත්ප්�රකා (නිත්�ය ප්�රකාශන) ඛණ්ඩයක් �ේ
 #</pre> <!-- ම�ම පේළිය එල�සින්ම පැ�තීමට ඉඩ හරින්න -->',
	'right-skipcaptcha' => 'captcha පරික්ෂා කීරීම සිදුකිරීම�න් �ැලක�මින් captcha පූරනකාරක ක්�රියා�ලීන් සිදුකරන්න',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'captcha-edit' => 'Aby ste mohli upravovať túto stránku, vyriešte prosím tento jednoduchý súčet a napíšte výsledok do poľa ([[Special:Captcha/help|viac informácií]]):',
	'captcha-desc' => 'Poskytuje techniky captcha na ochranu pred spamom a hádaním hesla',
	'captcha-addurl' => 'Vaša úprava obsahuje nové externé odkazy. Ako pomoc pri ochrane pred automatickým spamom vyriešte prosím tento jednoduchý súčet a zadajte výsledok do poľa ([[Special:Captcha/help|viac informácií]]):',
	'captcha-badlogin' => 'Ako ochranu proti automatizovanému lámaniu hesiel, prosím vyriešte nasledujúci súčet a zadajte ho do poľa pre odpoveď ([[Special:Captcha/help|viac informácií]]):',
	'captcha-createaccount' => 'Kvôli ochrane proti automatizovanému spamu je potrebné napísať slová zobrazené na tomto obrázku, až potom bude vytvorený nový účet:
<br />([[Special:Captcha/help|Čo je toto?]])',
	'captcha-createaccount-fail' => 'Nesprávny alebo chýbajúci potvrdzovací kód.',
	'captcha-create' => 'Aby ste mohli vytvoriť túto stránku, vyriešte prosím tento jednoduchý súčet a napíšte výsledok do poľa ([[Special:Captcha/help|viac informácií]]):',
	'captcha-sendemail' => 'Ako pomoc pri ochrane pred automatickým spamom, prosím, vyriešite nasledujúci jednoduchý súčet a napíšte odpoveď do poľa ([[Special:Captcha/help|ďalšie informácie]]):',
	'captcha-sendemail-fail' => 'Nesprávny alebo chýbajúci potvrdzovací kód.',
	'captcha-disabledinapi' => 'Táto operácia vyžaduje captcha, preto nemôže byť vykonaná prostredníctvom rozhrania API.',
	'captchahelp-title' => 'Pomocník ku captcha',
	'captchahelp-cookies-needed' => 'Aby toto fungovalo, budete si musieť v prehliadači zapnúť koláčiky (cookies).',
	'captchahelp-text' => 'Webstránky prijímajúce príspevky od verejnosti ako táto wiki sú často cieľom zneužitia spammermi, ktorí používajú automatizované nástroje na to, aby svoje odkazy umiestnili na množstvo stránok. Hoci je možné tieto odkazy odstrániť, zbytočne to zaťažuje používateľov.

Niekedy, obzvlášť keď pridávate webové odkazy k článkom, wiki vám môže zobraziť obrázok so zafarbeným alebo pokriveným textom a požiadať vás o prepísanie zobrazených slov. Keďže takúto úlohu je ťažké zautomatizovať a umožní skutočným ľuďom poslať svoje príspevky, zastaví to väčšinu spammerov a iných robotických útočníkov.

Nanešťastie, môže to byť prekážkou pre používateľov so zrakovým postihnutím alebo tých, ktorí používajú textové alebo hovoriace prehliadače. Momentálne nemáme dostupnú audio zvukovú alternatívu. Kontaktujte prosím [[{{MediaWiki:Grouppage-sysop}}|správcov stránok]] ak vám to neočakávane komplikuje umiestňovanie oprávnených príspevkov.

Stlačením tlačidla �späť� vo vašom prehliadači sa vrátite do editora stránky.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntax je nasledovná:
#   * Všetko od znaku �#� do konca riadka je komentár
#   * Každý neprázdny riadok je fragment regulárneho výrazu, ktorého zhody budú iba stroje v rámci URL
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Vykonávať činnosti spúšťajúce captcha bez toho, aby bolo potrebné vyriešiť captcha',
);

/** Slovenian (Slovenščina)
 * @author BrokenArrow
 * @author Dbc334
 */
$messages['sl'] = array(
	'captcha-edit' => 'Če želite urejati stran, prosimo izračunajte preprost seštevek spodaj in odgovor vpišite v polje ([[Special:Captcha/help|več informacij]]):',
	'captcha-desc' => 'Nudi pristope CAPTCHA za zaščito proti smetju in ugibanju gesel',
	'captcha-addurl' => 'Vaše urejanje vključuje nove zunanje povezave.
Zaradi zaščite pred samodejno navlako boste morali vpisati besede, ki se pojavijo v okencu ([[Special:Captcha/help|več informacij]]):',
	'captcha-badlogin' => 'Zaradi zaščite pred samodejnim ugotavljanjem gesel, prosimo rešite preprost seštevek spodaj in vnesite odgovor v okence ([[Special:Captcha/help|več informacij]]):',
	'captcha-createaccount' => 'Zaradi zaščite pred samodejnim ustvarjanjem računov, prosimo rešite preprost seštevek spodaj in vnesite odgovor v okence ([[Special:Captcha/help|več informacij]]):',
	'captcha-createaccount-fail' => 'Napačna ali manjkajoča potrditvena koda.',
	'captcha-create' => 'Če želite ustvariti stran, prosimo izračunajte preprost seštevek spodaj in odgovor vpišite v polje ([[Special:Captcha/help|več informacij]]):',
	'captcha-sendemail' => 'Zaradi zaščite pred samodejnim smetenjem, prosimo rešite preprost seštevek spodaj in vnesite odgovor v okence ([[Special:Captcha/help|več informacij]]):',
	'captcha-sendemail-fail' => 'Napačna ali manjkajoča potrditvena koda.',
	'captcha-disabledinapi' => 'To dejanje zahteva preverjanje captcha, zato ga ni mogoče izvesti preko API.',
	'captchahelp-title' => 'Pomoč za captcha',
	'captchahelp-cookies-needed' => 'Morali boste omogočiti piškotke v vašem brskalnik, če želite, da to deluje.',
	'captchahelp-text' => 'Spletne strani, ki omogočajo objavljanje širši javnosti, kot na primer ta wiki, pogosto zlorabljajo spamerji, ki za objavo svojih povezav na mnogih straneh uporabljajo avtomatizirana orodja. Čeprav se te neželene povezave da odstraniti, so precejšnja nadloga.

Včasih, zlasti pri dodajanju novih spletnih povezav na stran, vam bo morda wiki prikazal sliko obarvanega ali popačenega besedila in zahteval vpis prikazanih besed. Ker je to opravilo težko avtomatizirati, bo s tem večini ljudi objavljanje dovoljeno, spamerji in druge robotski napadalci pa bodo ustavljeni.

Žal lahko to povzroči nevšečnosti uporabnikom s slabim vidom in tistim, ki uporabljajo besedilne ali govorne brskalnike. Glasovna možnost trenutno še ni na razpolago. Če vam to nepričakovano preprečuje legitimno objavo, se, prosimo, obrnite na [[{{MediaWiki:Grouppage-sysop}}|administratorje spletišča]].

Za vrnitev v urejevalnik izberite gumb »nazaj« vašega brskalnika.',
	'captcha-addurl-whitelist' => ' #<!-- pustite to vrstico takšno, kot je --> <pre>
# Skladnja je sledeča:
#   * Vse od znaka »#« do konca vrstice je pripomba
#   * Vsaka neprazna vrstica je delec regularnega izraza, ki se bo ujemal samo z gostitelji v URL-jih
 #</pre> <!-- pustite to vrstico takšno, kot je -->',
	'right-skipcaptcha' => 'Izvaja dejanja, ki sprožijo preverjanje captcha, brez da bi moral opraviti preverjanje',
);

/** Albanian (Shqip)
 * @author BrokenArrow
 * @author Dori
 * @author Mikullovci11
 * @author Olsi
 */
$messages['sq'] = array(
	'captcha-edit' => 'Për të redaktuar këtë faqe ju lutem zgjidhni shumën e mëposhtme dhe vendosni përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-desc' => 'Siguron teknika CAPTCHA për të mbrojtur kundër spam',
	'captcha-addurl' => 'Redaktimi juaj ka lidhje URL të reja dhe si mbrojtje kundër abuzimeve automatike duhet të shtypni çfarë shfaqet tek figura e mëposhtme:<br /> ([[Special:Captcha|Çfarë është kjo?]])',
	'captcha-badlogin' => 'Për tu mbrojtur nga metoda automatike të gjetjes së fjalëkalimeve ju kërkojmë të gjeni zgjidhni shumën e mëposhtme dhe të vendosni përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-createaccount' => 'Për mbrojtje kundër regjistrimeve automatike duhet të zgjidhni ekuacionin e mëposhtëm para se të hapni llogarinë:<br />([[Special:Captcha|Çfarë është kjo?]])',
	'captcha-createaccount-fail' => 'Mesazhi që duhej shtypur mungon ose nuk është shtypur siç duhet.',
	'captcha-create' => 'Për të krijuar këtë faqe ju lutem zgjidhni shumën e mëposhtme dhe vendosni përgjigjen në kuti ([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-sendemail' => 'Për të ndihmuar në mbrojtjen kundër spamit të automatizuar, ju lutemi zgjidhni këtë më poshtë dhe shkruani përgjigjen në kuti
([[Special:Captcha/help|më shumë informacion]]):',
	'captcha-sendemail-fail' => 'Mungon kodi i konfirmimit ose është i pasaktë.',
	'captcha-disabledinapi' => 'Ky veprim kërkon një captcha, kështu që nuk mund të kryhet nëpërmjet API.',
	'captchahelp-title' => 'Ndihmë rreth sistemit "Captcha"',
	'captchahelp-cookies-needed' => 'Duhet të pranoni "biskota" nga shfletuesi juaj për këtë veprim.',
	'captchahelp-text' => 'Faqet e rrjetit që pranojnë shkrime nga publiku, siç është edhe kjo wiki, shpesh abuzohen nga njerëz që duan të përfitojnë duke reklamuar ose promovuar lidhjet e tyre. Këto lloj abuzimesh mund të hiqen kollaj por janë një bezdi dhe shpenzim kohe i papranueshëm.

Ndonjëherë, sidomos kur po hapni një llogari të re apo kur po shtoni lidhje të reja nëpërmjet redaktimit tuaj, sistemi mund t\'ju shfaqi një figurë që përmban fjalë me gërma ose numra të shtrembruara ose me ngjyra të ndryshme të cilat ju duhet të shtypni para se të mund të kryeni veprimin në fjalë. Kjo bëhet pasi është shumë e vështirë për një robot ose mjet automatik të kryejë të njëjtën punë. Kështu mund të dallohet nëse jeni me të vërtetë një njeri apo një robot. Ky lloj sistemi s\'mund të ndalojë tërë abuzimet por ndalon një pjesë të mirë të tyre, sidomos ato që janë automatike dhe të shumta në numër.

Fatkeqësisht ky lloj sistemi mund të bezdisi përdoruesit me pamje të kufizuar ose ata që përdorin mjete teksti ose shfletues leximi me zë. Tani për tani nuk kemi mundësi për të ofruar një sistem me zë në vend të figurave. Ju lutem lidhuni me [[{{MediaWiki:Grouppage-sysop}}|administruesit]] nëse ky sistem po ju ndalon të jepni kontribute të vlefshme.

Shtypni butonin "prapa" ("back") të shfletuesit tuaj për tu kthyer tek faqja e mëparshme.',
	'captcha-addurl-whitelist' => ' #<!-- lëreni këtë rresht siç është --> <pre>
# Sintaksa është si më poshtë:
#  * Çdo gjë nga simboli "#" deri në fund të rreshtit është koment
#  * Çdo rresht jo-bosh është një pjesë regex që duhet t\'i përputhet emrat të shërbyesve brenda një URL-i
  #</pre> <!-- lëreni këtë rresht siç është -->',
	'right-skipcaptcha' => 'Kryen veprime CAPTCHA-triggering pa pasur nevojë të shkojë nëpërmjet CAPTCHA',
);

/** Serbian (Cyrillic script) (�С�пски (ћи�илица)�)
 * @author Millosh
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'captcha-edit' => 'За измену ове ст�ане, �еши једноставан зб�и испод и унеси одгово� у кутију ([[Special:Captcha/help|дета�није]]):',
	'captcha-desc' => 'П�ужа заштиту п�отив непоже�них по�ука у виду потв�дног кода',
	'captcha-addurl' => 'Ваша измена сад�жи нове спо�ашње везе.
У ци�у заштите од непоже�них по�ука, �ешите п�осту �ачуницу испод и унесите одгово� у по�е ([[Special:Captcha/help|више инфо�мација]]):',
	'captcha-badlogin' => 'У ци�у заштите од п�обијања лозинки, �ешите п�осту �ачуницу испод и унесите одгово� у по�е ([[Special:Captcha/help|више инфо�мација]]):',
	'captcha-createaccount' => 'У ци�у заштите од самоотва�ања налога, �ешите п�осту �ачуницу испод и унесите одгово� у по�е ([[Special:Captcha/help|више инфо�мација]]):',
	'captcha-createaccount-fail' => 'Неп�авилан или непостојећи код за потв�ду.',
	'captcha-create' => 'Да бисте нап�авили ст�аницу, �ешите п�осту �ачуницу испод и унесите одгово� у по�е ([[Special:Captcha/help|више инфо�мација]]):',
	'captcha-sendemail' => 'У ци�у заштите од слања непоже�них по�ука, �ешите п�осту �ачуницу испод и унесите одгово� у по�е ([[Special:Captcha/help|више инфо�мација]]):',
	'captcha-sendemail-fail' => 'Неп�авилан или непостојећи код за потв�ду.',
	'captchahelp-title' => 'Помоћ око потв�дног кôда',
	'captchahelp-cookies-needed' => 'Пот�ебно је да омогућите колачиће да би ово �адило.',
	'right-skipcaptcha' => 'п�ескакање �адњи које захтевају унос потв�дног кода',
);

/** Serbian (Latin script) (�Srpski (latinica)�)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'captcha-edit' => 'Za izmenu ove strane, reši jednostavan zbri ispod i unesi odgovor u kutiju ([[Special:Captcha/help|detaljnije]]):',
	'captcha-desc' => 'Pruža zaštitu protiv nepoželjnih poruka u vidu potvrdnog koda',
	'captcha-addurl' => 'Tvoja izmena uključuje nove spoljašnje veze. U cilju zaštite protiv automatskog spama, reši jednostavan zbir ispod i upiši odgovor u kutiju ([[Special:Captcha/help|detaljnije]]):',
	'captcha-badlogin' => 'U cilju zaštite od automatske provale u lozinku, reši jednostavan zbir ispod i unesi odgovor u kutiju ([[Special:Captcha/help|detaljnije]]):',
	'captcha-createaccount' => 'U cilju zaštite od automatskog stvaranja naloga, reši jednostavan zbir dole i unesi ga u kutiju ([[Special:Captcha/help|detaljnije]]):',
	'captcha-createaccount-fail' => 'Nepravilan ili nepostojeći kod za potvrdu.',
	'captcha-create' => 'Za stvaranje strane reši jednostavan zbir dole i unesi ga u kutiju ([[Special:Captcha/help|detaljnije]]):',
	'captcha-sendemail-fail' => 'Nepravilan ili nepostojeći kod za potvrdu.',
	'captchahelp-title' => 'pomoć za kapču',
	'captchahelp-cookies-needed' => 'Da bi ovo uradio, neophodno je da su ti kolačići omogućeni u brauzeru.',
	'right-skipcaptcha' => 'Izvedi akcije kapče bez potrebe da se prođe kroz kapču.',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'captcha-edit' => 'Tou Beoarbaidenge fon ju Siede löös ätterfoulgjende Reekenapgoawe un dräch dät Resultoat in dät Fäild hierunner ien [[Special:Captcha/help|(Froagen of Probleme?)]]:',
	'captcha-desc' => 'Eenfache Captcha-Implementierenge',
	'captcha-addurl' => 'Dien Beoarbaidenge änthaalt näie externe Ferbiendengen.
Toun Skuts foar automatisierde Spammenge löös ju ätterfoulgjende Reekenapgoawe un dräch dät Resultoat in dät Fäild hierunner ien.
Klik dan fonnäien ap �Siede spiekerje� [[Special:Captcha/help|(Froagen of Probleme?)]].',
	'captcha-badlogin' => 'Toun Skuts foar ne Kompromittierenge fon dien Benutserkonto löös ju ätterfoulgjende Reekenapgoawe un dräch dät Resultoat in dät Fäild hierunner ien [[Special:Captcha/help|(Froagen of Probleme?)]].',
	'captcha-createaccount' => 'Toun Skuts foar automatisierden Anloage fon Benutserkonten löös ju ätterfoulgjende Reekenapgoawe un dräch dät Resultoat in dät Fäild hierunner ien [[Special:Captcha/help|(Froagen of Probleme?)]].',
	'captcha-createaccount-fail' => 'Falske of failjende Bestäätigengscode.',
	'captcha-create' => 'Uum disse Siede tou moakjen, löös ju ätterfoulgjende Reekenapgoawe ap un dräch dät Resultoat in dät Fäild hier unner ien [[Special:Captcha/help|(Froagen of Probleme?)]].',
	'captchahelp-title' => 'Captcha-Hälpe',
	'captchahelp-cookies-needed' => "'''Wichtige Waiwiesenge:''' Der mouten Cookies in dän Browser ferlööwed weese.",
	'captchahelp-text' => "Internetsteeden, do der foar Biedraage fon praktisk älkuneen eepen sunt - so as dät {{SITENAME}}-Wiki � wäide oafte fon Spammere misbruukt, do hiere Ferbiendengen automatisk ap fuul Websieden platzierje. Disse Spam-Ferbiendengen konnen wier wächhoald wäide, man jo sunt n groot Ferträit.

In fuul Falle, besunners bie dät Bietouföigjen fon näie Webferbiendengen tou ne Siede, kon dät foarkuume, dät dit Wiki ne Bielde mäd n faawigen un fertroalden Text anwiest un deertou apfoardert, do anwiesde Woude ientoutippen. Deer sun Apgoawe man stuur automatisk ouhonneld wäide kon, wäide deertruch do maaste Spammere, do der mäd automatiske Reewen oarbaidje, stopped, wierjuun moanskelke Benutsere hieren Biedraach ouseende konnen.

Spietelk genouch kon dät tou Meelasje foar Persoone fiere, do der minner goud sjo konnen of text- of sproakbasierde Browsere ferweende. Apstuuns hääbe wie neen Audio-Alternative ferföigboar.
Kontaktier do [[{{MediaWiki:Grouppage-sysop}}|Site-Administratore]] foar Hälpe, wan dit jou Moite rakt bie dät Hoochleeden fon Biedraage.

Klik ap dän 'Tourääch'-Knoop in jou Browser uum ätter dän Sieden-Editor touräächtougungen.",
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
#  Syntax:
#   * Alles fon n #-Teeken bit tou dän Eend fon ju Riege is n Kommentoar
#   * Älke nit-loose Riege is n Regex-Fragment, dät juunuur den Hostnoome fon ne URL wröiged wäd
  #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Uurspringen fon ju Captcha-Iengoawe',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'captcha-edit' => 'Pikeun ngédit artikel ieu, mangga eusian itungan di handap ([[Special:Captcha/help|émbaran lengkep]]):',
	'captcha-desc' => 'Implementasi basajan captcha',
	'captcha-addurl' => 'Éditan anjeun ngawengku tumbu kaluar anyar.
Pikeun nyegah spam, mangga eusian itungan di handap ieu
([[Special:Captcha/help|émbaran lengkep]]):',
	'captcha-createaccount' => 'Pikeun nyegah dijieunna rekening sacara otomatis, mangga eusian itungan di handap ieu ([[Special:Captcha/help|émbaran lengkep]]):',
	'captcha-createaccount-fail' => 'Sandi konfirmasina salah atawa can dieusian.',
	'captcha-create' => 'Pikeun nyieun kacana, mangga eusian itungan di handap ieu ([[Special:Captcha/help|émbaran lengkep]]):',
	'captchahelp-title' => 'Pitulung Captcha',
	'captchahelp-text' => "Ramatloka nu nampa tulisan ti masarakat umum kawas ieu wiki mindeng diganggu ku spammer nu maké pakakas otomatis pikeun midangkeun tumbu-tumbuna ka loba loka. Najan tumbu spam ieu bisa dihapus, ari loba-loba teuing mah matak nyapékeun.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of colored or distorted text and ask you to type the words shown. Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers. At the moment we do not have an audio alternative available. Please contact the site administrators for assistance if this is unexpectedly preventing you from making legitimate posts.

You will need to have cookies enabled in your browser for this to work.

Hit the 'back' button in your browser to return to the page editor.",
	'right-skipcaptcha' => 'Ngalakonan pamicu captcha tanpa ngaliwatan Captcha',
);

/** Swedish (Svenska)
 * @author Ainali
 * @author Boivie
 * @author Lejonel
 * @author M.M.S.
 * @author MagnusA
 * @author Per
 */
$messages['sv'] = array(
	'captcha-edit' => 'För att redigera den här sidan måste du först skriva svaret på följande
räkneuppgift i rutan ([[Special:Captcha/help|mer information]]):',
	'captcha-desc' => 'Ger CAPTCHA tekniker för att skydda mot skräppost och lösenordsgissning',
	'captcha-addurl' => 'Din ändring lägger till nya externa länkar i texten. För att skydda wikin mot
automatisk spam måste du skriva svaret på följande räkneuppgift i rutan ([[Special:Captcha/help|mer information]]):',
	'captcha-badlogin' => 'För att skydda mot wikin mot automatiserad lösenordsknäckning måste du skriva
svaret på följande räkneuppgift i rutan ([[Special:Captcha/help|mer information]]):',
	'captcha-createaccount' => 'För att skydda wikin mot automatiskt skapade användarkonton måste du
skriva svaret på följande räkneuppgift i rutan ([[Special:Captcha/help|mer information]]):',
	'captcha-createaccount-fail' => 'Bekräftelsekoden är felaktig eller saknas.',
	'captcha-create' => 'För att skapa den här sidan måste du skriva svaret på följande räkneuppgift
i rutan ([[Special:Captcha/help|mer information]]):',
	'captcha-sendemail' => 'Lös den enkla matematiska uppgiften i rutan nedan, för att hjälpa oss att skydda mot automatisk spamning ([[Special:Captcha/help|mer information]]):',
	'captcha-sendemail-fail' => 'Felaktig eller saknad bekräftelsekod.',
	'captcha-disabledinapi' => 'Denna åtgärd kräver en captcha, så den kan inte utföras genom APIet.',
	'captchahelp-title' => 'Captchahjälp',
	'captchahelp-cookies-needed' => 'Du måste ha cookies aktiverade i din webbläsare för att det här ska fungera.',
	'captchahelp-text' => 'Webbplatser som tillåter inlägg från allmänheten, som den här wikin gör, kan missbrukas av spammare som använder ofta automatiserade verktyg för att lägga till länkar på många webbsajter.
Även om dessa spamlänkar kan tas bort så är de till stort besvär.

Ibland, speciellt då du lägger till nya externa länkar på en sida, visar wikin en bild på en färgad eller förvriden text och ber dig skriva texten som visas.
Eftersom den uppgiften är svår att automatisera, låter den de flesta riktiga människor göra sina redigeringar medan spammare och andra robotattacker stoppas.

Tyvärr kan det här orsaka problem för användare med nedsatt syn eller som använder text- eller talbaserade webbläsare.
För tillfället finns inga ljudbaserade alternativ tillgängliga.
Kontakta [[{{MediaWiki:Grouppage-sysop}}|webbplatsens administratörer]] för hjälp om det här hindrar dig från att göra legitima ändringar.

Tryck på bakåtknappen i din webbläsare för att gå tillbaks till sidredigeringsläget.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntaxen är följande:
#   * Allting från ett "#" till slutet av en rad är en kommentar
#   * Varje icketom rad är ett reguljärt uttryck som matchar domänen i en URL
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Utföra handlingar som normalt kräver "captcha"-bekräftning utan att använda "captcha"',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'captchahelp-title' => 'CAPTCHA உதவி',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Kiranmayee
 * @author Mpradeep
 * @author Veeven
 */
$messages['te'] = array(
	'captcha-edit' => 'ఈ పేజ�ని సరిదిద్దడానికి, కింది ఇచ్చిన చిన్న లెక్కని చేసి జవాబుని పక్కనున్న పెట్టెలో టైపు చెయ్యండి ([[ప్రత్యేక:Captcha/help|మరింత సమాచారం]]):',
	'captcha-desc' => 'సరళమైన అమకవేప అమలు',
	'captcha-addurl' => 'మ� దిద్దుబాటులో కొత్త బయటి లింకులు ఉన్నాయి. ఆటోమేటెడ్ స్పాము నుండి రక్షించేందుకు గాను, కింద ఇచ్చిన లెక్క యొక్క జవాబును ఇక్కడున్న పెట్టెలో రాయండి ([[Special:Captcha/help|మరింత సహాయం]]):',
	'captcha-badlogin' => 'పాసువోర్డును బాట్ల ద్వారా తెలుసుకోకుండా ఉండేందుకు, కింద ఇచ్చిన లెక్క యొక్క జవాబును ఇక్కడున్న పెట్టెలో రాయండి ([[Special:Captcha/help|మరింత సహాయం]]):',
	'captcha-createaccount' => 'బాట్ల ద్వారా ఖాతాలను సృష్టించకుండా నిరోధించటానికి, కింద ఇచ్చిన లెక్క యొక్క జవాబును ఇక్కడున్న పెట్టెలో రాయండి ([[Special:Captcha/help|మరింత సహాయం]]):',
	'captcha-createaccount-fail' => 'దృవ�కరించుకోవడానికి విలువ ఇవ్వలేదు లేదా దానిని తప్పుగా ఇచ్చారు.',
	'captcha-create' => 'కొత్తపేజ�ని సృష్టించడానికి, కింద ఇచ్చిన లెక్క యొక్క జవాబును ఇక్కడున్న పెట్టెలో రాయండి ([[Special:Captcha/help|మరింత సహాయం]]):',
	'captchahelp-title' => 'ఆమకవేప సహాయం',
	'captchahelp-cookies-needed' => 'ఇది పని చెయ్యాలంటే మ� బ్రౌజరులో కూక�లు సశక్తమై ఉండాలి.',
	'captchahelp-text' => 'ప్రజలనుండి రచనలను స్వ�కరించే ఈ విక� వంటి వెబ్�సైట్లు, ఆటోమాటిక్ ప్రోగ్రాములతో తమ స్వంత లింకులను చేర్చే స్పాము ముష్కరుల దాడులకు గురవడం తరచూ జరుగుతూ ఉంటుంది. ఆ లింకులను త�సేయడం పెద్ద విషయం కాకపోయినప్పటిక�, అవి తలనెప్పి అనేది మాత్రం నిజం.

కొన్నిసార్లు, ముఖ్యంగా ఏదైనా పేజ� నుండి బయటకు లింకులు ఇచ్చేటపుడు, వంకర్లు తిరిగిపోయి ఉన్న పదాల బొమ్మను చూపించి ఆ పదాన్ని టైపు చెయ్యమని విక� మిమ్మల్ని అడగవచ్చు. ద�న్ని ఆటోమాటిక్ టూల్సుతో చెయ్యడం చాలా కష్టం కాబట్టి, స్పాము జిత్తులు చెల్లవు; మనుష్యులు మాత్రం మామూలుగానే చెయ్యగలరు.

దురదృష్టవశాత్తూ, చూపు సరిగా లేనివారికి, టెక్స్టు బ్రౌజర్లు మాత్రమే వాడేవారికి ఇది అసౌకర్యం కలిగిస్తుంది. ప్రస్తుతానికి శబ్దం వినిపించే వెసులుబాటు మాకు లేదు. మ�రు రచనలు చెయ్యకుండా ఇది అడ్డుపడుతుంటే, సహాయం కోసం సైటు నిర్వాహకుణ్ణి సంప్రదించండి.
మ�రు చెసే విలువయిన, సమ్మతమయిన వ్యాస మార్పులు భద్రపరచటము కుదరకపొతె, దయచేసి [[{{MediaWiki:Grouppage-sysop}}|సైటు నిర్వహణాధికారి]]కి లేఖ రాయండి.

మ� బ్రౌజర్లోని బ్యాక్(back) మ�టను నొక్కి ఇంతకు ముందరి పేజ�కి వెళ్ళండి.',
	'captcha-addurl-whitelist' => ' #<!-- ఈ పంక్తిని ఉన్నదున్నట్లు ఇలాగే వదిలివేయండి --> <pre>
# ఇక్కడ రాయాల్సిన విధానం ఇద�:
#  * "#" అనే అక్షరం నుండి ఆ పంక్తి చివరివరకూ వ్యాఖ్యానం
#  * ఖాళ�గా లేని ప్రత� పంక్త� ఒక regex భాగము, ఇది పేజ�లో ఉన్న URLల్ల యొక్క హోస్టుతో మాత్రమే సరిచూడబడుతుంది
  #</pre> <!-- ఈ పంక్తిని ఉన్నదున్నట్లు ఇలాగే వదిలివేయండి -->',
	'right-skipcaptcha' => 'ఆమకవేప ద్వారా పోకుండానే దాని ట్రిగ్గరు చర్యలను అమలు చెయ్యి',
);

/** Tajik (Cyrillic script) (Тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'captcha-edit' => 'Ба�ои ви�оиши ин мақола, лутфан ҳосили ҷамъи зе�ин�о ҳисоб кунед ва натиҷа�о да� ҷаъба во�ид кунед ([[Special:Captcha/help|иттилооти бешта�]]):',
	'captcha-desc' => 'Татбиқи соддаи CAPTCHA',
	'captcha-addurl' => 'Ви�оиши шумо пайвандҳои ҷадиди хо�иҷи�о да� ба� меги�ад. Ба�ои кӯмак ба пешги�и аз и�соли худко�и ҳа�азномаҳо, лутфан ҳосили ҷамъи зе�ин�о ҳисоб кунед ва натиҷа�о да� ҷаъба во�ид кунед ([[Special:Captcha/help|иттилооти бешта�]]):',
	'captcha-badlogin' => 'Ба�ои кӯмак ба пешги�и аз шикастани калимаи убу�, лутфан ҳосили ҷамъи зе�ин�о ҳисоб кунед ва натиҷа�о да� ҷаъба во�ид кунед  ([[Special:Captcha/help|иттилооти бешта�]]):',
	'captcha-createaccount' => 'Ба�ои кӯмак ба пешги�и аз эҷоди худко�и ҳисоби ко�ба�ӣ, лутфан ҳосили ҷамъи зе�ин�о ҳисоб кунед ва натиҷа�о да� ҷаъба во�ид кунед  ([[Special:Captcha/help|иттилооти бешта�]]):',
	'captcha-createaccount-fail' => 'Коди таъйид ноду�уст ё гумшуда.',
	'captcha-create' => 'Ба�ои эҷоди саҳифа, лутфан ҳосили ҷамъи зе�ин�о ҳисоб кунед ва натиҷа�о да� ҷаъба во�ид кунед  ([[Special:Captcha/help|иттилооти бешта�]]):',
	'captchahelp-title' => 'Роҳнамои Captcha',
	'captchahelp-cookies-needed' => 'Ба�ои ко� ка�дани он, шумо бояд кукиҳои му�у�га�атон�о фаъол кунед.',
	'captchahelp-text' => "Сомонаҳое, ки имкони тағйи� тавассути ҳамагон да� онҳо вуҷуд до�ад, монанди ин вики, гоҳ ё ногоҳ тавассути ҳа�азниго�иҳое, ки тавассути абзо�ҳои худко� пайванди худ�о да� чандин сомонаҳо мефи�истанд, мав�иди сӯъистифода қа�о� меги�анд.

Да� по�аи аз маво�ид, ба вижа замоне, ки як пайванди инте�нетии ҷадид ба саҳифа изофа мешавад, вики метавонад, як тасви� аз ҳу�уфи �ангӣ ё матни бену��о ба шумо нишон бидиҳад ва аз шумо во�ид ка�дани калимаи нишондодашуда�о пу�сон мешавад. Ба хоти�и ин ки анҷоми ин ко� ба шакли худко� душво� аст, ин амал ба акса�и инсонҳое иҷозат медиҳад, ки ба и�соли матолиб бипа�дозанд, да� ҳоле ки бешта� �оботҳои ҳамлакунанда ва ҳа�азниго�ҳо�о мутавақиф мекунад.

Мутассифона ин �авиш мумкин аст, ко�ба�оне, ки қувваи боси�аашон суст ё аз му�у�га�ҳои матнӣ ё овозӣ истифода мекунанд, дучо�и маҳдудиятҳое бикунад. Да� ҳоли ҳози� ҳеҷ чойгузини савтӣ ба�ои ин �авиш мавҷуд нест. Чунончи ин масъала шумо�о дучо�и маҳдудияте ду� аз интизо� да� и�соли навиштаҳои миҷоз мекунад, бо муди�они сомона оиди кӯмак тамос биги�ед.

Да� му�уга�атон тугмаи 'бозгашт'-�о бо пахш ка�дан ба саҳифаи ви�оишга� ба�га�дед.",
	'captcha-addurl-whitelist' => ' #<!�ин сат��о ҳамон гуна, ки ҳаст �аҳо кунед --> <pre>
# Қоида ба ин шакл аст:
#  * Ҳама чиз аз "#" то охи�и сат� як тавзеҳ ба наза� ги�ифта мешавад
#  * Ҳа� сат�е, ки холӣ набошад як қитъа да� наза� ги�ифта мешавад, ки фақат бо номи мизбони инте�нетӣ санҷида мешавад
  #</pre> <!-- ин сат��о ҳамон гуна, ки ҳаст �аҳо кунед-->',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'captcha-edit' => "Baroi viroişi in maqola, lutfan hosili çam'i zerinro hisob kuned va natiçaro dar ça'ba vorid kuned ([[Special:Captcha/help|ittilooti beştar]]):",
	'captcha-desc' => 'Tatbiqi soddai CAPTCHA',
	'captcha-addurl' => "Viroişi şumo pajvandhoi çadidi xoriçiro dar bar megirad. Baroi kūmak ba peşgiri az irsoli xudkori haraznomaho, lutfan hosili çam'i zerinro hisob kuned va natiçaro dar ça'ba vorid kuned ([[Special:Captcha/help|ittilooti beştar]]):",
	'captcha-badlogin' => "Baroi kūmak ba peşgiri az şikastani kalimai ubur, lutfan hosili çam'i zerinro hisob kuned va natiçaro dar ça'ba vorid kuned  ([[Special:Captcha/help|ittilooti beştar]]):",
	'captcha-createaccount' => "Baroi kūmak ba peşgiri az eçodi xudkori hisobi korbarī, lutfan hosili çam'i zerinro hisob kuned va natiçaro dar ça'ba vorid kuned  ([[Special:Captcha/help|ittilooti beştar]]):",
	'captcha-createaccount-fail' => "Kodi ta'jid nodurust jo gumşuda.",
	'captcha-create' => "Baroi eçodi sahifa, lutfan hosili çam'i zerinro hisob kuned va natiçaro dar ça'ba vorid kuned  ([[Special:Captcha/help|ittilooti beştar]]):",
	'captchahelp-title' => 'Rohnamoi Captcha',
	'captchahelp-cookies-needed' => "Baroi kor kardani on, şumo bojad kukihoi mururgaratonro fa'ol kuned.",
	'captchahelp-text' => "Somonahoe, ki imkoni taƣjir tavassuti hamagon dar onho vuçud dorad, monandi in viki, goh jo nogoh tavassuti haraznigorihoe, ki tavassuti abzorhoi xudkor pajvandi xudro dar candin somonaho mefiristand, mavridi sū'istifoda qaror megirand.

Dar porai az mavorid, ba viƶa zamone, ki jak pajvandi internetiji çadid ba sahifa izofa meşavad, viki metavonad, jak tasvir az hurufi rangī jo matni benurro ba şumo nişon bidihad va az şumo vorid kardani kalimai nişondodaşudaro purson meşavad. Ba xotiri in ki ançomi in kor ba şakli xudkor duşvor ast, in amal ba aksari insonhoe içozat medihad, ki ba irsoli matolib bipardozand, dar hole ki beştar robothoi hamlakunanda va haraznigorhoro mutavaqif mekunad.

Mutassifona in raviş mumkin ast, korbarone, ki quvvai bosiraaşon sust jo az mururgarhoi matnī jo ovozī istifoda mekunand, ducori mahdudijathoe bikunad. Dar holi hozir heç cojguzini savtī baroi in raviş mavçud nest. Cunonci in mas'ala şumoro ducori mahdudijate dur az intizor dar irsoli naviştahoi miçoz mekunad, bo mudironi somona oidi kūmak tamos bigired.

Dar murugaraton tugmai 'bozgaşt'-ro bo paxş kardan ba sahifai viroişgar bargarded.",
	'captcha-addurl-whitelist' => ' #<!�in satrro hamon guna, ki hast raho kuned --> <pre>
# Qoida ba in şakl ast:
#  * Hama ciz az "#" to oxiri satr jak tavzeh ba nazar girifta meşavad
#  * Har satre, ki xolī naboşad jak qit\'a dar nazar girifta meşavad, ki faqat bo nomi mizboni internetī sançida meşavad
  #</pre> <!-- in satrro hamon guna, ki hast raho kuned-->',
);

/** Thai (ไทย)
 * @author Passawuth
 */
$messages['th'] = array(
	'captcha-edit' => '�พื่อที่จะแก้ไขห�้า�ี้ กรุณาตอบโจทย์ปัญหาทางคณิตศาสตร์ข้างล่าง และใส่คำตอบลงใ�กล่อง ([[Special:Captcha/help|รายละ�อียด�พิ่ม�ติม]]) :',
	'captcha-addurl' => 'การแก้ไขของคุณมีลิงก์็ไปยัง�ว็บไซต์ภาย�อกด้วย
�พื่อที่จะป้องกั�สแปม กรุณาแก้โจทย์ด้า�ล่าง และพิมพ์คำตอบลงใ�กล่อง ([[Special:Captcha/help|รายละ�อียด]]):',
	'captcha-badlogin' => 'กรุณาแก้โจทย์ด้า�ล่าง และพิมพ์คำตอบลงใ�กล่อง �พื่อที่จะป้องกั�กา่รแอบแฮครหัสผ่า�โดยผู้ไม่หวังดี ([[Special:Captcha/help|รายละ�อียด]]):',
	'captcha-createaccount' => 'กรุณาแก้โจทย์ด้า�ล่าง และพิมพ์คำตอบลงใ�กล่อง �พื่อที่จะป้องกั�การสร้างบัญชีผู้ใช้โดยผู้ไม่หวังดี ([[Special:Captcha/help|รายละ�อียด]]):',
	'captcha-createaccount-fail' => 'โค้ดสำหรับการยื�ยั�ยังไม่ได้ใส่หรือผิด',
	'captcha-create' => 'กรุณาแก้โจทย์ด้า�ล่าง และพิมพ์คำตอบลงใ�กล่อง �พื่อที่จะสร้างห�้า
([[Special:Captcha/help|รายละ�อียด]]):',
	'captchahelp-title' => '�กี่ยวกับแคปต์ชา',
	'captchahelp-cookies-needed' => 'คุณต้องอ�ุญาตคุกกี้บ��ว็บบราว�ซอร์ของคุณ �พื่อที่คุณจะสามารถล็อกอิ�ได้',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'captcha-edit' => 'Bu sahypany redaktirlemek üçin, aşakdaky meselni çözüň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|jikme-jik]]):',
	'captcha-desc' => 'Ýönekeý captcha ama aşyrylyşy',
	'captcha-addurl' => 'Özgerdişiňizde täze daşarky çykgytlar bar.
Awtomatik spamdan goranmak üçin, aşakdaky ýönekeý soraga jogap beriň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|giňişleýin maglumat]]):',
	'captcha-badlogin' => 'Awtomat parol döwmeklikden goranmaga kömekleşmek üçin, aşakdaky meseläni çözüň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|jikme-jik]]):',
	'captcha-createaccount' => 'Awtomat hasap döredilmeginden goranmaga kömekleşmek üçin, aşakdaky meseläni çözüň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|jikme-jik]]):',
	'captcha-createaccount-fail' => 'Nädogry ýa-da kem tassyklama kody.',
	'captcha-create' => 'Sahypany döretmek üçin, aşakdaky meseläni çözüň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|jikme-jik]]):',
	'captcha-sendemail' => 'Awtomat spamdan goranmaga kömekleşmek üçin, aşakdaky meseläni çözüň we jogaby gutynyň içine ýazyň ([[Special:Captcha/help|giňişleýin maglumat]]):',
	'captcha-sendemail-fail' => 'Nädogry ýa-da kem tassyklama kody.',
	'captcha-disabledinapi' => 'Bu iş captcha talap edýär, şonuň üçin hem ony API bilen berjaý edip bolmaýar.',
	'captchahelp-title' => 'Captcha ýardamy',
	'captchahelp-cookies-needed' => 'Munuň işlemegi üçin brauzeriňiziň kukileri kabul etmegi gerek.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'captcha-edit' => 'Para magawaan ng pagbabago ang pahinang ito, pakisagot lamang ang payak na pagtutuos na nasa ibaba at ipasok ang sagot sa loob ng kahon ([[Special:Captcha/help|mas marami pang kabatiran]]):',
	'captcha-desc' => 'Nagbibigay ng mga pamamaraan ng CAPTCHA upang maisanggalang laban sa mga basurang e-liham at panghuhula ng hudyat',
	'captcha-addurl' => "Kasama sa mga pagbabagong ginawa mo ang bagong panlabas na mga kawing.
Upang makatulong sa pagsasanggalang laban sa mga kusang dumarating na \"manlulusob\" (''spam''), pakisagot ang payak na pagtutuos sa ibaba at ipasok ang sagot sa loob ng kahon ([[Special:Captcha/help|mas marami pang kabatiran]]):",
	'captcha-badlogin' => 'Upang makatulong sa pagsasanggalang laban sa mga kusang paglutas ng hudyat, pakisagot lamang payak na pagtutuos na nasa ibaba at ipasok ang sagot sa loob ng kahon ([[Special:Captcha/help|mas marami pang kabatiran]]):',
	'captcha-createaccount' => 'Upang makatulong sa pagsasanggalang laban sa kusang paglikha ng kuwenta, pakisagot ang payak na pagtutuos na nasa ibaba at ipasok ang sagot sa loob ng kahon ([[Special:Captcha/help|masa marami pang kabatiran]]):',
	'captcha-createaccount-fail' => 'Hindi tama o nawawalang kodigo ng pagpapatotoo.',
	'captcha-create' => 'Upang malikha ang pahina, pakisagot lamang ang payak na pagtutuos na nasa ibaba at ipasok ang sagot sa loob ng kahon ([[Special:Captcha/help|mas marami pang kabatiran]]):',
	'captcha-sendemail' => 'Upang makatulong sa pagsasanggalang laban sa mga kusang pagsalakay ng ispam, pakisagot ang payak na pagtutuos na nasa ibaba at ipasok ang sagot sa loob ng kahong ([[Special:Captcha/help|mas marami pang kabatiran]]):',
	'captcha-sendemail-fail' => 'Hindi tama o nawawalang kodigo ng pagpapatotoo.',
	'captcha-disabledinapi' => 'Ang aksyon na ito ay nangangailangan ng isang captcha, kaya hindi ito maaring gawin sa pamamagitan ng API.',
	'captchahelp-title' => "Tulong na pangpagsusuring ''captcha''",
	'captchahelp-cookies-needed' => "Kinakailangan mong magkaroon ng mga gumaganang mga  \"otap\" (''cookies'') sa loob ng pantingin-tingin (''browser'') mo upang maisagawa ito.",
	'captchahelp-text' => "Ang mga websayt na tumatanggap ng mga pagpapaskil mula sa madla, katulad ng wiking ito, ay kalimitang inaabuso ng mga tagapagpadala ng mga manlulusob na gumagamit ng kusang mga kagamitan upang makapagpaskil ng kanilang mga kawing sa maraming mga sityo.
Bagaman maaaring matanggal ang mga kawing na pangmanlulusob na ito, isa silang malaking abala.

Kung minsan, lalo na kapag nagdaragdag ng bagong mga kawing na pangweb sa isang pahina, maaaring magpakita sa iyo ang wiki ng isang larawan ng may kulay o may masamang hubog na teksto at hihilingin kang magmakinilya ng ipinapakitang mga salita.
Dahil sa isa itong gawaing mahirap na gawing kusa, napapahintulutan nito ang halos lahat ng mga tunay na tao upang magawa ang kanilang mga pagpapaskil habang pinipigil ang karamihan sa mga nagpapadala ng mga ispam' at iba pang mala-robot na mga manlulusob.

Sa kasawiang palad maaaring hindi makaginhawa ito sa mga tagagamit na may malabong paningin o gumagamit ng pangteksto o pangpagsasalitang mga pantingin-tingin.
Sa ngayon wala pa kaming pamalit na isang pangpandinig.
Makipag-ugnayan lamang sa [[{{MediaWiki:Grouppage-sysop}}|mga tagapangasiwa ng sityo]] para humingi ng tulong kapag hindi inaasahang mapigilan ka sa pagsasagawa ng mga tunay na pagpapaskil.

Pindutin ang pindutang 'bumalik' sa iyong pantingin-tingin upang makabalik sa pahinang pampatnugot.",
	'captcha-addurl-whitelist' => " #<!-- leave this line exactly as it is --> <pre>
# Ang palaugnayan ay ayon sa mga sumusunod:
#  * Lahat ng bagay mula sa isang \"#\" na panitik hanggang sa wakas ng isang guhit/hanay ay isang puna (kumento)
#  * Bawat hindi/walang patlang na guhit/hanay ay isang piraso ng karaniwang pagsasaad (''regex'') na tutugma lamang sa mga tagapagpasinaya sa loob ng mga URL
  #</pre> <!-- leave this line exactly as it is -->",
	'right-skipcaptcha' => "Gawin ang mga galaw na nakapagsasanhi ng pagsusuring ''captcha'' na hindi kinakailangang dumaan sa ''captcha''",
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Runningfridgesrule
 */
$messages['tr'] = array(
	'captcha-edit' => 'Bu sayfayı değiştirebilmek için lütfen aşağıdaki basit soruyu cevaplayın ve cevabı kutunun içine yazın ([[Special:Captcha/help|ayrıntılı bilgiler]]):',
	'captcha-desc' => 'Basit captcha uygulaması',
	'captcha-addurl' => 'Değişikliğiniz yeni dış bağlantılar içeriyor.
Otomatik spamdan korunmak için, lütfen aşağıdaki basit soruyu cevaplayın ve cevabı kutunun içine yazın ([[Special:Captcha/help|ayrıntılı bilgiler]]):',
	'captcha-badlogin' => 'Otomatik parola çözülmesinden korunmak için, lütfen aşağıdaki basit soruyu cevaplayın ve kutunın içinde cevabı yazın ([[Special:Captcha/help|ayrıntılı bilgiler]]):',
	'captcha-createaccount' => 'Otomatik spama karşı bir koruma olarak, hesabınızı kaydetmek için bu resimde gözüken kelimeleri tuşlamanız gerekmektedir ([[Special:Captcha/help|Bu nedir?]]):',
	'captcha-createaccount-fail' => 'Hatalı ya da eksik onay kodu.',
	'captcha-create' => 'Bu sayfayı oluşturmak için, lütfen aşağıdaki basit soruyu cevaplayın ve kutunun içinde cevabı yazın ([[Special:Captcha/help|ayrıntılı bilgiler]]):',
	'captcha-sendemail' => 'Otomatik spamlere karşı korunmaya yardımcı olmak için, lütfen aşağıdaki basit işlemi çözün ve cevabı kutuya yazın ([[Special:Captcha/help|daha fazla bilgi]]):',
	'captcha-sendemail-fail' => 'Yanlış veya eksik onay kodu.',
	'captcha-disabledinapi' => 'Bu eylem captcha gerektiriyor, dolayısıyla API aracılığıyla yapılamaz.',
	'captchahelp-title' => 'Captcha yardımı',
	'captchahelp-cookies-needed' => 'Bunun çalışabilmesi için tarayıcınızın çerezleri kabul edilmesi gerekiyor.',
	'captchahelp-text' => "Bu viki gibi, dışarıdan katılıma izin veren web siteleri, pek çok siteye bağlantılar yaratan otomatik araçlarını çalıştıran ''spam''cilerin saldırılarına sıklıkla maruz kalırlar. Bu spam nitelikli bağlantılar silinebilir, fakat bu temizlik önemli bir sıkıntı yaratacaktır.

Bazen, özellikle bir başka internet sitesine bağ eklerken, bozulmuş ve renklendirilmiş harflerden oluşan bir resim gösterilebilir ve sizden bu harfleri kutucuğa girmenizi istenir. Bu, otomatizasyonu oldukça zor bir iş olduğu için, gerçek insanlar bu işlemi yerine getirebilirken, spam yapmaya yarayan araçlar bunu yapmakta zorlanacaklardır.

Ne var ki bu durum, görme sorunları yaşayan kişiler ve salt yazı-tabanlı veya salt ses tabanlı internet tarayıcı programları kullanan kimseler için rahatsızlık yaratmaktadır. Ne yazık ki, şu an için sesli bir alternatifimiz bulunmamaktadır. Eğer bu, sizin geçerli gönderiler yapmanıza beklenmedik bir şekilde engel oluyorsa, lütfen destek için [[{{MediaWiki:Grouppage-sysop}}|site yöneticileriyle]] irtibata geçin.

Sayfa düzenleyiciye dönmek için tarayıcınızın 'geri' tuşuna basınız.",
	'captcha-addurl-whitelist' => ' #<!-- bu satırı olduğu gibi bırakın --> <pre>
# Sözdizimi aşağıdaki gibidir:
#  * "#" karakterinden satır sonuna kadar her şey yorumdur
#  * Her boş olmayan satır, URLler içinde sadece host ile eşleşen regex parçalarıdır
  #</pre> <!-- bu satırı olduğu gibi bırakın -->',
	'right-skipcaptcha' => "Captcha ile tetiklenen hareketleri, captcha'yı geçme zorunluluğu olmadan yap",
);

/** Ukrainian (Ук�аїнська)
 * @author Ahonc
 * @author Alex Khimich
 * @author NickK
 * @author Riwnodennyk
 * @author Тест
 */
$messages['uk'] = array(
	'captcha-edit' => 'Щоб від�едагувати цю сто�інку, будь ласка, виконайте п�осту а�ифметичну дію і введіть відповідь у текстове поле ([[Special:Captcha/help|докладніше]]):',
	'captcha-desc' => 'Забезпечує методи CAPTCHA для захисту від спаму і підбо�у па�оля',
	'captcha-addurl' => 'Ви додали посилання на зовнішній сайт.
Із метою захисту від автоматичного спаму, будь ласка, виконайте п�осту а�ифметичну дію і введіть відповідь у текстове поле ([[Special:Captcha/help|докладніше]]):',
	'captcha-badlogin' => 'Із метою захисту від автоматичного злому па�оля, будь ласка, виконайте п�осту а�ифметичну дію і введіть відповідь у текстове поле ([[Special:Captcha/help|докладніше]]):',
	'captcha-createaccount' => 'Із метою захисту від автоматичного ство�ення облікового запису, будь ласка, виконайте п�осту а�ифметичну дію і введіть відповідь у текстове поле ([[Special:Captcha/help|докладніше]]):',
	'captcha-createaccount-fail' => 'Неп�авильний або відсутній код підтве�дження.',
	'captcha-create' => 'Щоб ство�ити сто�інку, будь ласка, виконайте п�осту а�ифметичну дію і введіть відповідь у текстове поле ([[Special:Captcha/help|докладніше]]):',
	'captcha-sendemail' => 'З метою захисту від автоматичного спаму, дайте відповідь на п�остий математичний п�иклад і введіть відповідь ([[Special:Captcha/help|деталі]]):',
	'captcha-sendemail-fail' => 'Неп�авильний або відсутній код підтве�дження.',
	'captcha-disabledinapi' => 'Ця дія пот�ебує пе�еві�ки CAPTCHA, тому не може бути здійснена за допомогою API.',
	'captchahelp-title' => 'Довідка п�о CAPTCHA',
	'captchahelp-cookies-needed' => 'Вам пот�ібно ввімкнути куки у б�аузе�і, щоб ця функція зап�ацювала.',
	'captchahelp-text' => 'Веб-сайти, що дозволяють додавати або змінювати свій вміст, у тому числі вікі, часто стають ціллю спаме�ів, які вико�истовують п�ог�ами для автоматичного додавання посилань.
Хоча такі посилання і можуть бути вилучені, вони є істотною вадою.

Іноді, нап�иклад п�и додаванні на сто�інку нового веб-посилання, вікі може показати вам ка�тинку з кольо�овим або спотво�еним текстом і зап�опонувати ввести текст, який ви бачите.
Оскільки подібну задачу важко автоматизувати, це дає можливість більшості людей �обити свої зміни, в той час як більшість спаме�ських і вандальних п�ог�ам не можуть цього з�обити.

На жаль, подібний захист може сп�ичинити нез�учності для людей із вадами зо�у. За�аз у нас нема звукової альте�нативи для такої пе�еві�ки. Будь ласка, зве�ніться по допомогу до [[{{MediaWiki:Grouppage-sysop}}|адмініст�ато�ів]], якщо подібна пе�еві�ка заважає вам доб�осовісно п�ацювати з сайтом.

Натисніть кнопку «Назад» у вашому б�аузе�і, щоб пове�нутися до �едагування.',
	'captcha-addurl-whitelist' => '#<!-- leave this line exactly as it is --> <pre>
# Опис синтаксису:
#  * Все, що починається з символу "#" до кінця �ядка, вважається комента�ем
#  * Кожний непо�ожній �ядок вважається ф�агментом �егуля�ного ви�азу відповідної назви вузла в URL
   #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => 'Виконання дій, що вимагають CAPTCHA-пе�еві�ки, без п�оходження CAPTCHA',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'captcha-edit' => 'Par modificar la pagina te ghè da risòlvar sto senplice calcolo presentà de seguito e inserir el risultato ne la casela
([[Special:Captcha/help|magiori informazion]]):',
	'captcha-desc' => 'Senplice inplementazion de un Captcha',
	'captcha-addurl' => "La modifica richiesta la zonta dei colegamenti foresti novi a la pagina; come misura precauzional contro l'inserimento automatico de spam, te ghè da risòlvar sto senplice calcolo presentà de seguito e inserir el risultato ne la casela ([[Special:Captcha/help|magiori informazion]]):",
	'captcha-badlogin' => 'Come misura precauzional contro i tentativi de forzatura automatica de la password, te ghè da risòlvar sto senplice calcolo presentà de seguito e inserir el risultato ne la casela ([[Special:Captcha/help|magiori informazion]]):',
	'captcha-createaccount' => 'Come misura precauzional contro i tentativi de creazion automatica dei account, par registrarse te ghè da risòlvar sto senplice calcolo presentà de seguito e inserir el risultato ne la casela ([[Special:Captcha/help|magiori informazion]]):',
	'captcha-createaccount-fail' => 'Codice de verifica sbaglià o mancante.',
	'captcha-create' => 'Per crear la pagina te ghè da risòlvar sto senplice calcolo presentà de seguito e inserir el risultato ne la casela ([[Special:Captcha/help|magiori informazion]]):',
	'captcha-sendemail' => 'Come misura precauzional contro i tentativi de forzatura automatica de la password, te ghè da risòlvar sto senplice calcolo e inserir el risultato ne la casela ([[Special:Captcha/help|magiori informazion]]):',
	'captcha-sendemail-fail' => 'Codice de verifica sbaglià o mancante.',
	'captcha-disabledinapi' => 'Sta azion la richiede un captcha, quindi no se pole farla tramite API.',
	'captchahelp-title' => "Coss'èlo sto captcha?",
	'captchahelp-cookies-needed' => 'Te ghè da verghe i cookies abilità sul to browser par proseguir.',
	'captchahelp-text' => "Sucéde spesso che i siti web che i acèta messagi publici, come sta wiki, i sia tolti de mira da spammer che dòpara strumenti automatici par inserir colegamenti publicitari verso un gran nùmaro de siti. Anca se i colegamenti insiderài i se pol cavar, se trata comunque de na secadura mìa da póco.

In çerti casi, par esenpio quando se çerca de zontar novi colegamenti web in te na pagina, el software wiki el pol mostrar na imagine con un breve testo colorà e/o distorto, domandàndoghe a l'utente de riscrìvarlo drento na casela fata aposta. Sicome i computer no i xe mìa boni de replicar a la perfezion sta azion, sto mecanismo el ghe consente a (quasi tuti) i utenti reali de conpletar l'inserimento che i volea, inpedéndoghe l'acesso a la magior parte dei spammer e dei altri atachi automatizà.

Sfortunatamente, ste misure de sicureza le pole métar in dificoltà i utenti che gà problemi de vista o quei che dòpara browser testuali o basà su la sintesi vocale. Purtropo al momento no xe disponibile nissun mecanismo alternativo basà su messagio audio; se ste procedure le inpedisse l'inserimento de informazion che se ritien legìtime, se prega de contatar i [[{{MediaWiki:Grouppage-sysop}}|aministradori del sito]] e domandarghe assistensa.

Struca el boton \"Indrìo\" del to browser par tornar a la pagina de modifica.",
	'captcha-addurl-whitelist' => ' #<!-- no sta modificar in alcun modo sta riga --> <pre>
# La sintassi la xe la seguente:
#  * Tuto quel che segue un caràtere "#" el xe un comento, fin a la fine de la riga
#  * Tute le righe mìa vode le xe framenti de espressioni regolari che se àplica al solo nome de l\'host ne le URL
   #</pre> <!-- no sta modificar in alcun modo sta riga -->',
	'right-skipcaptcha' => 'Esegui le funsion de triggering del captcha sensa passar par el captcha',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'captcha-edit' => 'Để sửa đổi trang này, xin hãy giải phép c�ng đơn giản dưới đây và gõ câu trả lời vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-desc' => 'Chống spam và sự đoán mật khẩu dùng CAPTCHA',
	'captcha-addurl' => 'Sửa đổi của bạn có chứa các liên kết ra bên ngoài. Để giúp tránh spam tự đ�ng, xin hãy giải phép toán đơn giản ở dưới và gõ kết quả vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-badlogin' => 'Để giúp tránh hành đ�ng bẻ mật khẩu tự đ�ng, xin hãy giải phép c�ng
đơn giản ở dưới và gõ kết quả vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-createaccount' => 'Để giúp tránh việc tạo tài khoản tự đ�ng, xin hãy giải phép c�ng
đơn giản ở dưới và gõ kết quả vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-createaccount-fail' => 'Thiếu mã xác nhận hoặc mã xác nhận sai.',
	'captcha-create' => 'Để tạo mới trang, xin hãy giải phép c�ng đơn giản ở dưới và gõ
câu trả lời vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-sendemail' => 'Để xác nhận rằng bạn không phải là tay spam, xin hãy giải phép c�ng đơn giản ở dưới và gõ câu trả lời vào ô ([[Special:Captcha/help|thông tin thêm]]):',
	'captcha-sendemail-fail' => 'Mã xác nhận không chính xác hoặc chưa được cung cấp.',
	'captcha-disabledinapi' => 'Tác vụ này đòi người dùng giải CAPTCHA trước tiên, nên không thể thực hiện nó qua API.',
	'captchahelp-title' => 'Trợ giúp Captcha',
	'captchahelp-cookies-needed' => 'Bạn cần phải bật cookie trong trình duyệt để chức năng này hoạt đ�ng được.',
	'captchahelp-text' => 'Những website cho phép bất kỳ ai cũng có thể gửi thông tin, như wiki này, thường bị các tay spam dùng công cụ tự đ�ng để gửi các liên kết của họ tới rất nhiều trang.
Tuy chúng ta có thể xóa các liên kết này khỏi trang, chúng vẫn gây nhiều phiền toái.

Đôi khi, nhất là khi bạn bổ sung liên kết mới vào trang, wiki có thể hiển thị m�t hình có chữ dạng màu mè và méo mó rồi yêu cầu bạn gõ lại các chữ trong hình này.
Do các phần mềm tự đ�ng khó đọc những hình này, nên mọi người bình thường có thể tiếp tục gửi thông tin, mà vẫn chặn được các spam và robot phá hoại.

Tuy vậy, tính năng này có thể bất tiện đối với những đ�c giả có thị giác yếu hay đang sử dụng trình duyệt bằng văn bản thuần hay trình duyệt bằng tiếng nói.
Hiện tại chúng tôi chưa có chức năng phát âm thay thế.
Xin hãy liên lạc với [[{{MediaWiki:Grouppage-sysop}}|người quản trị trang web]] để được trợ giúp nếu điều này vô tình ngăn cản bạn đóng góp n�i dung tốt.

Nhấn chu�t vào nút �Back� của trình duyệt để trở lại trang soạn thảo.',
	'captcha-addurl-whitelist' => ' #<!-- xin để dòng này đừng thay đổi --> <pre>
# Cú pháp như sau:
#   * Mọi thứ bắt đầu bằng ký tự �#� là lời chú thích
#   * Mọi hàng không trắng là m�t đoạn biểu thức chính quy (regex) sẽ chỉ được so trùng với tên máy chủ trong URL
  #</pre> <!-- xin để dòng này đừng thay đổi -->',
	'right-skipcaptcha' => 'Tự đ�ng bỏ qua các hình CAPTCHA',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'captcha-edit' => 'Ad redakön yegedi at, dunolös, begö! saedami dono e penolös saedoti in bokil ([[Special:Captcha/help|nüns pluik]]):',
	'captcha-addurl' => 'Redakam olik keninükon yümis plödik nulik. Ad jelön siti ta peneds itjäfidik, dunolös, begö! saedami sököl, e penolös saedoti in bokil ([[Special:Captcha/help|nüns pluik]]):',
	'captcha-badlogin' => 'Ad jelön siti ta daget itjäfidik letavödas, dunolös, begö! saedami sököl e penolös saedoti in bokil ([[Special:Captcha/help|nüns pluik]]):',
	'captcha-createaccount' => 'Ad jelön siti ta kalijafam itjäfidik, dunolös, begö! saedami sököl e penolös saedoti in bokil ([[Special:Captcha/help|nüns pluik]]):',
	'captcha-createaccount-fail' => 'Kot fümükama paneveräton u paseleton.',
	'captcha-create' => 'Ad jafön padi, dunolös saedami balugik dono e penolös saedoti in bokil ([[Special:Captcha/help|nüns pluik]]):',
	'captchahelp-title' => 'Yuf ela Captcha',
	'captchahelp-cookies-needed' => 'Nedol mögükön �kekilis� bevüresodanaföme olik ad dunön atosi.',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# Süntag binon sökölos:
#  * Valikos de malat: �#� jü fin liena binon küpet
#  * Lien no vägik alik binon brekot: �regex�, kel poleigodon te ko vöds ninü els URLs
  #</pre> <!-- leave this line exactly as it is -->',
);

/** Walloon (Walon)
 * @author BrokenArrow
 */
$messages['wa'] = array(
	'captcha-edit' => "Dins vos candjmints i gn a des novelès hårdêyes (URL); po s' mete a houte des robots di spam, nos vs dimandans d' acertiner ki vos estoz bén ene djin, po çoula, tapez les mots k' aparexhèt dins l' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])",
	'captcha-addurl' => "Dins vos candjmints i gn a des novelès hårdêyes (URL); po s' mete a houte des robots di spam, nos vs dimandans d' acertiner ki vos estoz bén ene djin, po çoula, tapez les mots k' aparexhèt dins l' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])",
	'captcha-createaccount' => "Po s' mete a houte des robots di spam, nos vs dimandans d' acertiner ki vos estoz bén ene djin po-z ahiver vosse conte, po çoula, tapez les mots k' aparexhèt dins l' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])",
	'captcha-createaccount-fail' => "Li côde d' acertinaedje est incorek ou mancant.",
	'captcha-create' => "Dins vos candjmints i gn a des novelès hårdêyes (URL); po s' mete a houte des robots di spam, nos vs dimandans d' acertiner ki vos estoz bén ene djin, po çoula, tapez les mots k' aparexhèt dins l' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])",
	'captchahelp-title' => "Aidance passete d' acertinaedje",
	'captchahelp-text' => "Les waibes k' acceptèt des messaedjes do publik, come ci wiki chal, sont sovint eployîs pa des må-fjhants spameus, po pleur mete, avou des usteyes otomatikes, des loyéns di rclame viè les sites da zels.
Bén seur, on pout todi les disfacer al mwin, mins c' est on soyant ovraedje.

Adon, pa côps, copurade cwand vos radjoutez des hårdêyes a ene pådje, ou å moumint d' ahiver on novea conte sol wiki, on eployrè ene passete d' acertinaedje, dj' ô bén k' on vos mostere ene imådje avou on tecse kitoirdou eyet vs dimander di taper les mots so l' imådje. Come li ricnoxhance di ç' tecse la est målåjheye a fé otomaticmint pa on robot, çoula permete di leyî les vraiyès djins fé leus candjmints tot arestant l' plupårt des spameus et des sfwaitès atakes pa robot.

Målureuzmint çoula apoite eto des målåjhminces po les cis k' ont des problinmes po vey, ou k' eployèt des betchteus e môde tecse ou båzés sol vwès. Pol moumint, nos n' avans nén ene alternative odio. S' i vs plait contactez les manaedjeus do site po d' l' aidance si çoula vos espaitche di fé vos candjmints ledjitimes.

Clitchîz sol boton «En erî» di vosse betchteu waibe po rivni al pådje di dvant.",
);

/** Yiddish (��ִד�ש)
 * @author פו�ל�שער
 */
$messages['yi'] = array(
	'captcha-addurl' => 'אײַער רעדאַקט�רונג אַנטהאַלט נײַע דרו�סנד�קע ל�נקען.
כד� צו העלפֿן ש�צן קעגן או�טאמז�רטן ספאַם, זײַט אַזו� גוט און ל��זט דאָס פשוטע רעטענ�ש אונטן און קלאַפט אײַן דעם ענטפֿער א�נעם קעסטל ([[Special:Captcha/help|נאך א�נפֿארמאַצ�ע]]):',
	'captcha-badlogin' => 'כד� צו העלפֿן קעגן או�טאמאַט�שער ברעכן פאַסווערטער, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-createaccount' => 'כד� צו העלפֿן קעגן או�טאמאַט�שע שאַפֿן קאנטעס, אנא פתרו את תרג�ל הח�בור הפשוט שלהלן והקל�דו את התשובה בת�בה ([[Special:Captcha/help|מ�דע נוסף]]):',
	'captcha-createaccount-fail' => 'גרײַז�קער אָדער פֿעלנד�קער באַשטעט�ק־קאָד',
	'captchahelp-title' => 'CAPTCHA ה�לף',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'captchahelp-title' => 'Ìrànwọ́ Captcha',
	'captchahelp-cookies-needed' => 'Ẹ gbọ́jọ� gba cookies láyé nínú agbétàkùn yín kí èyí ó tó ṣiṣẹ́.',
);

/** Cantonese (粵語) */
$messages['yue'] = array(
	'captcha-edit' => '要編輯呢�篇文，請答出��簡單嘅加數和，跟住響�盒度打入 ([[Special:Captcha/help|更多資�]]):',
	'captcha-desc' => '簡單嘅 captcha 實行',
	'captcha-addurl' => '你編輯嘅內容裏面有新嘅URL�結；為咗避免受到自動垃圾程式的侵擾，請答出��簡單嘅加數和，跟住響�盒度打入 ([[Special:Captcha/help|更多資�]]):',
	'captcha-badlogin' => '為咗防止程式自動破解密碼，請答出��簡單嘅加數和，跟住響�盒度打入 ([[Special:Captcha/help|更多資�]]):',
	'captcha-createaccount' => '為咗防止程式自動註冊，請答出��簡單嘅加數和，跟住響�盒度打入 ([[Special:Captcha/help|更多資�]]):',
	'captcha-createaccount-fail' => '驗證碼錯誤或�唔見咗�',
	'captcha-create' => '要開呢�版，請答出��簡單嘅加數和，跟住響�盒度打入 ([[Special:Captcha/help|更多資�]]):',
	'captchahelp-title' => 'Captcha 幫助',
	'captchahelp-cookies-needed' => '你�要開咗響�覽�度嘅cookies先至可以用呢樣嘢�',
	'captchahelp-text' => '就好似呢�wiki咁，對公眾開放編輯嘅網�係會經常受到垃圾�結騷擾�嗰啲人利用自動化垃圾程序將佢哋嘅�結張貼到好多網��雖然呢啲�結可以被清�，但係呢啲嘢確實令人十分之討厭�

有�，特別係當響�頁添加新嘅網頁�結嗰�，呢�網�會�你睇�幅有顏色的或�有變形文字嘅圖像，跟住要你輸入�顯示嘅文字�因為咁係難以自動完成嘅�項任�，它將允許人保存佢哋嘅編輯，同�亦阻止大多數��垃圾郵件�同其它機械人嘅攻擊�

令人遺憾嘅係，咁會令到視力唔好嘅人，或�利用基於文本或�基於聲音嘅�覽�用戶感到不便��目前我哋仲未能夠提供音頻嘅選擇�如果咁樣咁啱阻止到你�行正常嘅編輯，請同管理員聯繫以獲得幫助�

撳�下響�覽�度嘅�後��掣返去你之前�編輯緊嘅頁面�',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# 語法好似下面�:
#   * �有由 "#" 字元之後嘅嘢到行尾係註解
#   * �有非空�行係��regex部份，只係會同裏面嘅URL主機相符
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => '執行captcha引�嘅動作�唔�要經過captcha',
);

/** Simplified Chinese (�中文(�体)�)
 * @author Bencmq
 * @author Hzy980512
 * @author Liangent
 * @author PhiLiP
 */
$messages['zh-hans'] = array(
	'captcha-edit' => '要编辑�篇文章，请答出�个�单的加法，然後在框内输入 （[[Special:Captcha/help|更多资�]]）:',
	'captcha-desc' => '�过验证码�术来阻止垃圾邮件和密码猜解',
	'captcha-addurl' => '你编辑的内容中含有�个新的外部链接；为了免受自动垃圾程序的侵扰，请答出�个�单的加法，然后在框内输入（[[Special:Captcha/help|更多信息]]）:',
	'captcha-badlogin' => '为了防止程式自动破解密码，请答出�个�单的加法，然後在框内输入 （[[Special:Captcha/help|更多资�]]）:',
	'captcha-createaccount' => '为了防止程式自动注册，请答出�个�单的加法，然後在框内输入 （[[Special:Captcha/help|更多资�]]）:',
	'captcha-createaccount-fail' => '验证码�误或丢失�',
	'captcha-create' => '要创建页面，请答出�个�单的加法，然後在框内输入 （[[Special:Captcha/help|更多资�]]）:',
	'captcha-sendemail' => '为了防止程式进行破坏，请答出�个�单的计算，然后在框内输入 （[[Special:Captcha/help|更多资�]]）:',
	'captcha-sendemail-fail' => '验证码�误或丢失�',
	'captcha-disabledinapi' => '�个要求�要经过验证码验证，故无法�过API使用�',
	'captchahelp-title' => '验证码说明',
	'captchahelp-cookies-needed' => '您�要�启浏览�上的cookies方可使用�个工具�',
	'captchahelp-text' => '像本��样，对公众�放编辑的网�经常被垃圾连结骚扰�那些人使用自动化垃圾程序将他们的连结张贴到很多网���然�些连结可以被清�，但是�些东西确实令人十分讨厌�

有时，特别是当��个页面添加新的网页链接时，本�会让你看�幅有颜色的或�有变形文字的图像，并且要你输入�显示的文字�因为�是难以自动完成的�项任务，它将允许人保存他们的编辑，同时阻止大多数发�垃圾邮件�和其他机�人的攻击�

令人遗憾是，�会使得视力不好的人，或�使用基於文本或�基於声音的浏览�的用户感到不便��目前我们还没有提供的音频的�择�如果�正好阻止你进行正常的编辑，请和[[{{MediaWiki:Grouppage-sysop}}|�点管理员]]联系获得帮助�

点击浏览�中的�后�按钮返回你�编辑的页面�',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# 语法像下面�样:
#   * �有在 "#" 字符后的内容全部是注释
#   * �有非空�行是�个正�表达式，只会对URL中的内容进行匹配
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => '绕过验证码的验证',
);

/** Traditional Chinese (�中文(繁體)�)
 * @author Horacewai2
 * @author Hydra
 * @author Liangent
 * @author Mark85296341
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'captcha-edit' => '要編輯�篇文章，請答出��簡單的加法，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-desc' => '�過驗證碼�術來阻止垃圾郵件和密碼猜解',
	'captcha-addurl' => '你編輯的內容中含有��新的URL�結；為了免受自動垃圾程式的侵擾，請答出��簡單的加法，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-badlogin' => '為了防止程式自動破解密碼，請答出��簡單的加法，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-createaccount' => '為了防止程式自動註冊，請答出��簡單的加法，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-createaccount-fail' => '驗證碼錯誤或遺失�',
	'captcha-create' => '要建立頁面，請答出��簡單的加法，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-sendemail' => '為了防止程式�行破壞，請答出��簡單的計算，然後在框內輸入 （[[Special:Captcha/help|更多資�]]）:',
	'captcha-sendemail-fail' => '驗證碼錯誤或遺失�',
	'captcha-disabledinapi' => '��要求�要經過Captcha驗證，故無法�過API使用�',
	'captchahelp-title' => 'Captcha 說明',
	'captchahelp-cookies-needed' => '您�要開啟�覽�上的cookies方可使用��工具�',
	'captchahelp-text' => '像本��樣，對公眾開放編輯的網�經常被垃圾�結騷擾�那些人使用自動化垃圾程式將他�的�結張貼到很多網��雖然�些�結可以被清�，但是�些東西確實令人十分討厭�

有�，特別是當給��頁面添加新的網頁�結�，本�會讓你看�幅有顏色的或�有變形文字的圖像，並且要你輸入�顯示的文字�因為�是難以自動完成的�項任�，它將允許人儲存他�的編輯，同�阻止大多數��垃圾郵件�和其他機�人的攻擊�

令人遺憾是，�會使得視力不好的人，或�使用基於文字或�基於聲音的�覽�的使用�感到不便��目前我�還沒有提供的音訊的選擇�如果�正好阻止你�行正常的編輯，請和[[{{MediaWiki:Grouppage-sysop}}|�點管理員]]聯繫取得幫助�

點擊�覽�中的�後��按鈕返回你�編輯的頁面�',
	'captcha-addurl-whitelist' => ' #<!-- leave this line exactly as it is --> <pre>
# 語法像下面�樣:
#   * �有由 "#" 字元之後嘅字元至行尾是註解
#   * �有非空�行是��regex部份，只是跟在裡面的URL主機相符
 #</pre> <!-- leave this line exactly as it is -->',
	'right-skipcaptcha' => '執行captcha引�的動作�不�要經過captcha',
);

