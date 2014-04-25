<?php
/**
 * Internationalisation file for extension Renameuser.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'renameuser'          => 'Rename user',
	'renameuser-linkoncontribs' => 'rename user',
	'renameuser-linkoncontribs-text' => 'Rename this user',
	'renameuser-desc'     => 'Adds a [[Special:Renameuser|special page]] to rename a user (need \'\'renameuser\'\' right)',
	'renameuser-summary' => '', # do not translate or duplicate this message to other languages
	'renameuserold'       => 'Current username:',
	'renameusernew'       => 'New username:',
	'renameuserreason'    => 'Reason for rename:',
	'renameusermove'      => 'Move user and talk pages (and their subpages) to new name',
	'renameusersuppress'  => 'Do not create redirects to the new name',
	'renameuserreserve'   => 'Block the old username from future use',
	'renameuserwarnings'  => 'Warnings:',
	'renameuserconfirm'   => 'Yes, rename the user',
	'renameusersubmit'    => 'Submit',

	'renameusererrordoesnotexist' => 'The user "<nowiki>$1</nowiki>" does not exist.',
	'renameusererrorexists'       => 'The user "<nowiki>$1</nowiki>" already exists.',
	'renameusererrorinvalid'      => 'The username "<nowiki>$1</nowiki>" is invalid.',
	'renameuser-error-request'    => 'There was a problem with receiving the request.
Please go back and try again.',
	'renameuser-error-same-user'  => 'You cannot rename a user to the same thing as before.',
	'renameusersuccess'           => 'The user "<nowiki>$1</nowiki>" has been renamed to "<nowiki>$2</nowiki>".',

	'renameuser-page-exists'  => 'The page $1 already exists and cannot be automatically overwritten.',
	'renameuser-page-moved'   => 'The page $1 has been moved to $2.',
	'renameuser-page-unmoved' => 'The page $1 could not be moved to $2.',

	'renameuserlogpage'     => 'User rename log',
	'renameuserlogpagetext' => 'This is a log of changes to user names.',
	'renameuserlogentry'    => 'renamed $1 to "$2"',
	'renameuser-log'        => '{{PLURAL:$1|1 edit|$1 edits}}. Reason: $2',
	'renameuser-move-log'   => 'Automatically moved page while renaming the user "[[User:$1|$1]]" to "[[User:$2|$2]]"',

	'right-renameuser'      => 'Rename users',

	'renameuser-renamed-notice' => 'This user has been renamed.
The rename log is provided below for reference.', # Supports GENDER
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jon Harald Søby
 * @author Meno25
 * @author SPQRobin
 * @author Siebrand
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'renameuser-linkoncontribs' => 'Link description used on Special:Contributions and Special:DeletedContributions. Only added if a user has rights to rename users.',
	'renameuser-linkoncontribs-text' => 'Tooltip for {{msg-mw|renameuser-linkoncontribs}}.',
	'renameuser-desc' => '{{desc}}',
	'renameuserreserve' => 'Option to block the old username (after it has been renamed) from being used again.',
	'renameuserwarnings' => '{{Identical|Warning}}',
	'renameusersubmit' => '{{Identical|Submit}}',
	'renameuserlogentry' => 'Used in [[Special:Log/renameuser]].
* Parameter $1 is the original username
* Parameter $2 is the new username',
	'right-renameuser' => '{{doc-right|renameuser}}',
	'renameuser-renamed-notice' => 'This message supports the use of GENDER with parameter $1.',
);

/** ꢱꣃꢬꢵꢯ꣄ꢡ꣄ꢬꢵ (ꢱꣃꢬꢵꢯ꣄ꢡ꣄ꢬꢵ)
 * @author MooRePrabu
 */
$messages['saz'] = array(
	'renameuser' => 'ꢮꢮ꣄ꢬꢸꢥꢵꢬ꣄ ꢥꢵꢮ꣄ ꢪꢬ꣄ꢗꢶ',
	'renameusernew' => 'ꢥꣁꢮ꣄ꢮꣁ  ꢮꢮ꣄ꢬꢸꢥꢵꢬ꣄ ꢥꢵꢮ꣄',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author SPQRobin
 * @author පසිඳු කා�ින්ද
 */
$messages['af'] = array(
	'renameuser' => 'Hernoem gebruiker',
	'renameuser-linkoncontribs' => 'hernoem gebruiker',
	'renameuser-linkoncontribs-text' => 'Hernoem hierdie gebruiker',
	'renameuser-desc' => "Herdoop gebruikers (benodig ''renameuser'' regte)",
	'renameuserold' => 'Huidige gebruikersnaam:',
	'renameusernew' => 'Nuwe gebruikersnaam:',
	'renameuserreason' => 'Rede vir hernoeming:',
	'renameusermove' => 'Hernoem gebruikers- en besprekingsbladsye (met subblaaie) na nuwe naam',
	'renameusersuppress' => 'Moenie skep aansture na die nuwe naam',
	'renameuserreserve' => 'Voorkom dat die ou gebruiker in die toekoms weer gebruik kan word',
	'renameuserwarnings' => 'Waarskuwings:',
	'renameuserconfirm' => 'Ja, hernoem die gebruiker',
	'renameusersubmit' => 'Hernoem',
	'renameusererrordoesnotexist' => 'Die gebruiker "<nowiki>$1</nowiki>" bestaan nie',
	'renameusererrorexists' => 'Die gebruiker "<nowiki>$1</nowiki>" bestaan reeds',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" is \'n ongeldige gebruikernaam',
	'renameuser-error-request' => "Daar was 'n probleem met die ontvangs van die versoek. Gaan asseblief terug en probeer weer.",
	'renameuser-error-same-user' => 'U kan nie a gebruiker na dieselfde naam hernoem nie.',
	'renameusersuccess' => 'Die gebruiker "<nowiki>$1</nowiki>" is hernoem na "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Die bladsy $1 bestaan reeds en kan nie outomaties oorskryf word nie.',
	'renameuser-page-moved' => 'Die bladsy $1 is na $2 geskuif.',
	'renameuser-page-unmoved' => 'Die bladsy $1 kon nie na $2 geskuif word nie.',
	'renameuserlogpage' => 'Logboek van gebruikershernoemings',
	'renameuserlogpagetext' => 'Hieronder is gebruikersname wat gewysig is.',
	'renameuserlogentry' => 'het $1 na "$2" hernoem',
	'renameuser-log' => '{{PLURAL:$1|1 wysiging|$1 wysigings}}. Rede: $2',
	'renameuser-move-log' => 'Bladsy is outomaties geskuif met die wysiging van die gebruiker "[[User:$1|$1]]" na "[[User:$2|$2]]"',
	'right-renameuser' => 'Hernoem gebruikers',
	'renameuser-renamed-notice' => 'Hierdie gebruiker is hernoem.
Relevante inligting uit die logboek van gebruikersnaamwysigings word hier onder ter verwysing weergegee.',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 * @author SMP
 */
$messages['an'] = array(
	'renameuser' => 'Renombrar un usuario',
	'renameuser-linkoncontribs' => "cambiar o nombre d'iste usuario",
	'renameuser-linkoncontribs-text' => "Cambiar o nombre d'iste usuario",
	'renameuser-desc' => "Renombrar un usuario (amenista os dreitos de ''renameuser'')",
	'renameuserold' => 'Nombre actual:',
	'renameusernew' => 'Nombre nuevo:',
	'renameuserreason' => "Razón d'o cambeo de nombre:",
	'renameusermove' => "Tresladar as pachinas d'usuario y de descusión (y as suyas sozpachinas) ta o nuevo nombre",
	'renameusersuppress' => 'No creyar reendreceras ta o nuevo nombre',
	'renameuserreserve' => "Bloqueyar l'antigo nombre d'usuario ta privar que torne a ser usau",
	'renameuserwarnings' => 'Alvertencias:',
	'renameuserconfirm' => "Sí, quiero cambiar o nombre de l'usuario",
	'renameusersubmit' => 'Ninviar',
	'renameusererrordoesnotexist' => 'L\'usuario "<nowiki>$1</nowiki>" no existe.',
	'renameusererrorexists' => 'L\'usuario "<nowiki>$1</nowiki>" ya existe.',
	'renameusererrorinvalid' => 'O nombre d\'usuario "<nowiki>$1</nowiki>" no ye conforme.',
	'renameuser-error-request' => 'Bi habió bell problema recullindo a demanda. Por favor, torne enta zaga y prebe una atra vegada.',
	'renameuser-error-same-user' => 'No puede renombrar un usuario con o mesmo nombre que ya teneba.',
	'renameusersuccess' => 'S\'ha renombrau l\'usuario "<nowiki>$1</nowiki>" como "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'A pachina $1 ya existe y no puede estar sustituyita automaticament.',
	'renameuser-page-moved' => "S'ha tresladato a pachina $1 ta $2.",
	'renameuser-page-unmoved' => "A pachina $1 no s'ha puesto tresladar ta $2.",
	'renameuserlogpage' => "Rechistro de cambios de nombre d'usuarios",
	'renameuserlogpagetext' => "Isto ye un rechistro de cambios de nombres d'usuarios",
	'renameuserlogentry' => 'Renombrato $1 como "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edición|$1 edicions}}. Razón: $2',
	'renameuser-move-log' => 'Pachina tresladata automaticament en renombrar o usuario "[[User:$1|$1]]" como "[[User:$2|$2]]"',
	'right-renameuser' => 'Renombrar usuarios',
	'renameuser-renamed-notice' => "O nombre d'iste usuario s'ha modificau.
O rechistro de cambeos de nombre d'usuario se proveye debaixo ta mas referencia.",
);

/** Old English (Ænglisc)
 * @author Spacebirdy
 */
$messages['ang'] = array(
	'renameuser' => 'Ednemnan brūcend',
	'renameuser-linkoncontribs' => 'ednemnan brūcend',
	'renameusersubmit' => 'Forþsendan',
);

/** Arabic (العربية)
 * @author Aiman titi
 * @author Meno25
 * @author Mido
 * @author OsamaK
 */
$messages['ar'] = array(
	'renameuser' => 'إعادة تسمية مستخدم',
	'renameuser-linkoncontribs' => 'أعد تسمية المستخدم',
	'renameuser-linkoncontribs-text' => 'أعد تسمية هذا المستخدم',
	'renameuser-desc' => "يضيف [[Special:Renameuser|صفحة خاصة]] لإعادة تسمية مستخدم (يحتاج إلى صلاحية ''renameuser'')",
	'renameuserold' => 'اسم المستخدم الحالي:',
	'renameusernew' => 'الاسم الجديد:',
	'renameuserreason' => 'السبب لإعادة التسمية:',
	'renameusermove' => 'انقل صفحات المستخدم ونقاشه (بالصفحات الفرعية) إلى الاسم الجديد',
	'renameusersuppress' => 'لا تقم بإنشاء عمليات إعادة التوجيه إلى الاسم الجديد',
	'renameuserreserve' => 'احفظ اسم المستخدم القديم ضد الاستخدام',
	'renameuserwarnings' => 'التحذيرات:',
	'renameuserconfirm' => 'نعم، أعد تسمية المستخدم',
	'renameusersubmit' => 'أرسل',
	'renameusererrordoesnotexist' => 'لا يوجد مستخدم بالاسم "<nowiki>$1</nowiki>"',
	'renameusererrorexists' => 'المستخدم "<nowiki>$1</nowiki>" موجود بالفعل',
	'renameusererrorinvalid' => 'اسم المستخدم "<nowiki>$1</nowiki>" غير صحيح',
	'renameuser-error-request' => 'حدثت مشكلة أثناء استقبال الطلب.
من فضلك عد وحاول مرة ثانية.',
	'renameuser-error-same-user' => 'لا يمكنك إعادة تسمية مستخدم بنفس الاسم كما كان من قبل.',
	'renameusersuccess' => 'تمت إعادة تسمية المستخدم "<nowiki>$1</nowiki>" إلى "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'الصفحة $1 موجودة بالفعل ولا يمكن إنشاء أخرى مكانها أوتوماتيكيا.',
	'renameuser-page-moved' => 'تم نقل الصفحة $1 إلى $2.',
	'renameuser-page-unmoved' => 'لم يتمكن من نقل الصفحة $1 إلى $2.',
	'renameuserlogpage' => 'سجل إعادة تسمية المستخدمين',
	'renameuserlogpagetext' => 'هذا سجل بالتغييرات في أسماء المستخدمين',
	'renameuserlogentry' => 'أعاد تسمية $1 باسم "$2"',
	'renameuser-log' => '{{PLURAL:$1||تعديل واحد|تعديلان|$1 تعديلات|$1 تعديلًا|$1 تعديل}}. السبب: $2',
	'renameuser-move-log' => 'نقل الصفحة تلقائيا خلال إعادة تسمية المستخدم من "[[User:$1|$1]]" إلى "[[User:$2|$2]]"',
	'right-renameuser' => 'إعادة تسمية المستخدمين',
	'renameuser-renamed-notice' => 'لقد تمت إعادة تسمية {{GENDER:$1|هذا المستخدم|هذه المستخدمة}}.
سجل إعادة التسمية معروض بالأسفل كمرجع:',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 * @author Michaelovic
 */
$messages['arc'] = array(
	'renameuser' => 'ܫܚܠܦ ܫܡܐ ܕܡܦܠܚܢܐ',
	'renameuser-linkoncontribs' => 'ܫܚܠܦ ܫܡܐ ܕܡܦܠܚܢܐ',
	'renameuser-linkoncontribs-text' => 'ܫܚܠܦ ܫܡܐ ܕܗܢܐ ܡܦܠܚܢܐ',
	'renameuserold' => 'ܫܡܐ ܕܡܦܠܚܢܐ ܥܬܝܩܐ:',
	'renameusernew' => 'ܫܡܐ ܕܡܦܠܚܢܐ ܚܕܬܐ:',
	'renameuserwarnings' => '�ܘܗܪ̈ܐ:',
	'renameuserconfirm' => 'ܐܝܢ, ܫܚܠܦ ܫܡܐ ܕܡܦܠܚܢܐ',
	'renameusersubmit' => 'ܡܨܝܘܬܐ',
	'renameuserlogentry' => 'ܬܢܐ ܠܫܘܡܗܐ $1 ܒܫܡ "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 ܫܘܚܠܦܐ|$1 ܫܘܚܠܦ̈ܐ}}. ܥܠܬܐ: $2',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'renameuser' => 'تغيير تسمية يوزر',
	'renameuser-desc' => "بيضيف [[Special:Renameuser|صفحة مخصوصة]] علشان تغير اسم يوزر(محتاج صلاحية ''renameuser'')",
	'renameuserold' => 'اسم اليوزر الحالي:',
	'renameusernew' => 'اسم اليوزر الجديد:',
	'renameuserreason' => 'السبب لإعادة التسميه:',
	'renameusermove' => 'انقل صفحات اليوزر و مناقشاته (بالصفحات الفرعية)للاسم الجديد.',
	'renameuserreserve' => 'احفظ اسم اليوزر القديم ضد الاستخدام',
	'renameuserwarnings' => 'التحذيرات:',
	'renameuserconfirm' => 'ايوه،سمى اليوزر دا من تاني',
	'renameusersubmit' => 'تقديم',
	'renameusererrordoesnotexist' => 'اليوزر"<nowiki>$1</nowiki>" مالوش وجود.',
	'renameusererrorexists' => 'اليوزر "<nowiki>$1</nowiki>" موجود من قبل كدا.',
	'renameusererrorinvalid' => 'اسم اليوزر "<nowiki>$1</nowiki>"مش صحيح.',
	'renameuser-error-request' => 'حصلت مشكلة فى استلام الطلب.
لو سمحت ارجع لورا و حاول تانى.',
	'renameuser-error-same-user' => 'ما ينفعش تغير اسم اليوزر لنفس الاسم من تانى.',
	'renameusersuccess' => 'اليوزر "<nowiki>$1</nowiki>" اتغير اسمه ل�"<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'الصفحة $1 موجودة من قبل كدا و ماينفعش يتكتب عليها اوتوماتيكى.',
	'renameuser-page-moved' => 'تم نقل الصفحه $1 ل $2.',
	'renameuser-page-unmoved' => 'الصفحة $1 مانفعش تتنقل ل�$2.',
	'renameuserlogpage' => 'سجل تغيير تسمية اليوزرز',
	'renameuserlogpagetext' => 'دا سجل بالتغييرات فى أسامى اليوزرز',
	'renameuserlogentry' => 'اتغيرت تسمية$1 ل� "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 تعديل|$1 تعديل}}. علشان: $2',
	'renameuser-move-log' => 'الصفحة اتنقلت اوتوماتيكى لما اليوزر  "[[User:$1|$1]]" اتغير اسمه ل� "[[User:$2|$2]]"',
	'right-renameuser' => 'غير اسم اليوزرز',
);

/** Asturian (Asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'renameuser' => 'Renomar usuariu',
	'renameuser-linkoncontribs' => 'renomar usuariu',
	'renameuser-linkoncontribs-text' => 'Renomar esti usuariu',
	'renameuser-desc' => "Renoma un usuariu (necesita'l permisu ''renameuser'')",
	'renameuserold' => "Nome d'usuariu actual:",
	'renameusernew' => "Nome d'usuariu nuevu:",
	'renameuserreason' => 'Motivu del cambéu de nome:',
	'renameusermove' => "Treslladar les páxines d'usuariu y d'alderique (y toles subpáxines) al nome nuevu",
	'renameusersuppress' => 'Nun crear redireiciones al nome nuevu',
	'renameuserreserve' => "Bloquiar el nome d'usuariu antiguu pa evitar usalu nun futuru",
	'renameuserwarnings' => 'Avisos:',
	'renameuserconfirm' => "Sí, renomar l'usuariu",
	'renameusersubmit' => 'Executar',
	'renameusererrordoesnotexist' => 'L\'usuariu "<nowiki>$1</nowiki>" nun esiste.',
	'renameusererrorexists' => 'L\'usuariu "<nowiki>$1</nowiki>" yá esiste.',
	'renameusererrorinvalid' => 'El nome d\'usuariu "<nowiki>$1</nowiki>" nun ye válidu.',
	'renameuser-error-request' => 'Hebo un problema al recibir el pidimientu. Por favor vuelve atrás y inténtalo otra vuelta.',
	'renameuser-error-same-user' => 'Nun pues renomar un usuariu al mesmu nome que tenía.',
	'renameusersuccess' => 'L\'usuariu "<nowiki>$1</nowiki>" foi renomáu como "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'La páxina $1 yá esiste y nun pue ser sobreescrita automáticamente.',
	'renameuser-page-moved' => 'La páxina $1 treslladóse a $2.',
	'renameuser-page-unmoved' => 'La páxina $1 nun pudo treslladase a $2.',
	'renameuserlogpage' => "Rexistru de cambeos de nome d'usuariu",
	'renameuserlogpagetext' => "Esti ye un rexistru de los cambeos de nomes d'usuariu",
	'renameuserlogentry' => 'renomó a $1 como "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edición|$1 ediciones}}. Motivu: $2',
	'renameuser-move-log' => 'Treslladóse la páxina automáticamente al renomar al usuariu "[[User:$1|$1]]" como "[[User:$2|$2]]"',
	'right-renameuser' => 'Renomar usuarios',
	'renameuser-renamed-notice' => "Se renomó esti usuariu.
El rexistru de renomaos s'ufre darréu pa referencia.",
);

/** Azerbaijani (Az�rbaycanca)
 * @author Cekli829
 * @author Vago
 * @author Vugar 1981
 * @author Wertuose
 */
$messages['az'] = array(
	'renameuser' => 'İstifad�çi adını d�yiş',
	'renameuser-linkoncontribs' => 'istifad�çi adını d�yiş',
	'renameuser-linkoncontribs-text' => 'Bu istifad�çinin adını d�yiş',
	'renameusernew' => 'Yeni istifad�çi adı:',
	'renameuserwarnings' => 'X�b�rdarlıqlar:',
	'renameuserconfirm' => 'B�li, istifad�çinin adını d�yiş',
	'renameusersubmit' => 'T�sdiq et',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" istifad�çi adı mövcud deyil.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" istifad�çi adı artıq mövcuddur.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" istifad�çi adı yolverilm�zdir.',
	'renameuser-page-moved' => '$1 $2 s�hif�sin� köçürülüb.',
	'renameuser-page-unmoved' => '$1 $2 s�hif�sin� köçürül� bilinmir.',
	'renameuserlogpage' => 'İstifad�çi adı d�yişm� günd�liyi',
	'right-renameuser' => 'istifad�çil�rin adını d�yiş',
);

/** Bashkir (Башҡо�тса)
 * @author Assele
 */
$messages['ba'] = array(
	'renameuser' => 'Ҡатнашыусының исемен ү�г��те�г�',
	'renameuser-linkoncontribs' => 'ҡатнашыусының исемен ү�г��те�г�',
	'renameuser-linkoncontribs-text' => 'Был ҡатнашыусының исемен ү�г��те�г�',
	'renameuser-desc' => "Ҡатнашыусы исемен ү�г��теү өсөн [[Special:Renameuser|махсус бит]] өҫт�й (''renameuser'' хоҡуғы к���к)",
	'renameuserold' => 'Х��е�ге исеме:',
	'renameusernew' => 'Яңы исеме:',
	'renameuserreason' => 'Исемен ү�г��теү с�б�бе:',
	'renameusermove' => 'Шулай уҡ ҡатнашыусы битенең, феке� алышыу битенең (һ�м ула��ың эске битт��енең) исемен ү�г��те�г�',
	'renameusersuppress' => 'Яңы исемг� йүн�лтеү��� булды�маҫҡа',
	'renameuserreserve' => 'Ҡатнашыусының элекке исемен кил�с�кт� ҡулланыу өсөн һаҡла�ға',
	'renameuserwarnings' => 'Киҫ�теү���:',
	'renameuserconfirm' => 'Эйе, ҡатнашыусының исемен ү�г��те�г�',
	'renameusersubmit' => 'Һаҡла�ға',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" исемле ҡатнашыусы те�к�лм�г�н.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" исемле ҡатнашыусы те�к�лг�н инде.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" ҡатнашыусы исеме дө�өҫ түгел.',
	'renameuser-error-request' => 'Һо�ау�ы алыу мен�н ҡыйынлыҡта� тыу�ы.
Зинһа�, ки�е ҡайтығы� һ�м яңынан ҡабатлап ҡа�ағы�.',
	'renameuser-error-same-user' => 'Һе� ҡатнашыусы исемен шул уҡ исемг� ү�г��т� алмайһығы�.',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" ҡатнашыусыһының исеме "<nowiki>$2</nowiki>" исемен� ү�г��телде.',
	'renameuser-page-exists' => '$1 бите ба� инде һ�м уның өҫтөн� автоматик ��үешт� я��ы�ыу мөмкин түгел.',
	'renameuser-page-moved' => '$1 битенең исеме $2 тип ү�г��телде.',
	'renameuser-page-unmoved' => '$1 битенең исеме $2 тип ү�г��тел� алмай.',
	'renameuserlogpage' => 'Ҡатнашыусы исемд��ен ү�г��теү я�мала�ы жу�налы',
	'renameuserlogpagetext' => 'Был � ҡатнашыусы исемд��ен ү�г��теү я�мала�ы жу�налы.',
	'renameuserlogentry' => '$1 ҡатнашыусыһын "$2" тип ү�г��тк�н',
	'renameuser-log' => '$1 {{PLURAL:$1|ү�г��теү}}. С�б�бе: $2',
	'renameuser-move-log' => 'Биттең исеме "[[User:$1|$1]]" ҡатнашыусыһының исемен "[[User:$2|$2]]" тип ү�г��теү с�б�пле ү�ен�н-ү�е ү�г��г�н',
	'right-renameuser' => 'Ҡатнашыусыла��ың исемен ү�г��теү',
	'renameuser-renamed-notice' => 'Был ҡатнашыусының исеме ү�г��телг�н.
Түб�нд� белешм� өсөн исем ү�г��теү я�мала�ы жу�налы килте�елг�н.',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'renameuser' => 'کاربر نامی بدل کن',
	'renameuser-desc' => "یک کاربر نامی بدیل کن(حق ''بدل نام''لازمن)",
	'renameuserold' => 'هنوکین نام کاربری:',
	'renameusernew' => 'نوکین نام کاربری:',
	'renameuserreason' => 'دلیل په نام بدل کتن:',
	'renameusermove' => 'صفحات گپ و کاربر (و آیانی زیر صفحات) په نوکین نام جاه په جاه کن',
	'renameuserwarnings' => 'هوژاریان:',
	'renameuserconfirm' => 'بله، کاربر نامی عوض کن',
	'renameusersubmit' => 'دیم دی',
	'renameusererrordoesnotexist' => 'کاربر "<nowiki>$1</nowiki>" موجود نهنت.',
	'renameusererrorexists' => 'کاربر "<nowiki>$1</nowiki>" هنو هستن.',
	'renameusererrorinvalid' => 'نام کاربری "<nowiki>$1</nowiki>"  نامعتبر انت.',
	'renameuser-error-request' => 'مشکلی گون دریافت درخواست هستت.
لطفا برگردیت و دگه تلاش کنیت.',
	'renameuser-error-same-user' => 'شما نه تونیت یک کاربر په هما پیشگین چیزی نامی بدل کنیت',
	'renameusersuccess' => 'کاربر "<nowiki>$1</nowiki>" نامی بدل بوتت په "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'صفحه $1 الان هست و اتوماتیکی اور آی نوسیگ نه بیت.',
	'renameuser-page-moved' => 'صفحه $1 جاه په جاه بیت په $2.',
	'renameuser-page-unmoved' => 'صفحه $1 نه تونیت په $2 جاه په جاه بیت.',
	'renameuserlogpage' => 'آمار نام بدل کتن کاربر',
	'renameuserlogpagetext' => 'شی آماری چه تغییرات نامان کاربران انت',
	'renameuserlogentry' => 'نام بدل بوت  $1 په "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 اصلاح|$1 اصلاحلات}}. دلیل: $2',
	'renameuser-move-log' => 'اتوماتیکی صفحه جاه په جاه بیت وهدی که کاربر نام بدل بی "[[User:$1|$1]]" به "[[User:$2|$2]]"',
	'right-renameuser' => 'عوض کتن نام کابران',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'renameusersubmit' => 'Isumitir',
	'renameusererrordoesnotexist' => 'An parágamit "<nowiki>$1</nowiki>" mayò man',
	'renameusererrorexists' => 'An parágamit "<nowiki>$1</nowiki>" yaon na',
	'renameuser-page-moved' => 'An páhinang $1 piglipat sa $2.',
	'renameuser-page-unmoved' => 'An páhinang $1 dai mailipat sa $2.',
	'renameuser-log' => '$1 mga hirá. Rasón: $2',
);

/** Belarusian (Taraškievica orthography) (�Бела�уская (та�ашкевіца)�)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'renameuser' => 'Пе�айменаваць �ахунак удзельніка',
	'renameuser-linkoncontribs' => 'пе�айменаваць удзельніка',
	'renameuser-linkoncontribs-text' => 'Пе�айменаваць �ахунак гэтага ўдзельніка',
	'renameuser-desc' => "Дадае [[Special:Renameuser|спэцыяльную ста�онку]] для пе�айменаваньня �ахунку ўдзельніка (неабходныя п�авы на ''пе�айменаваньне ўдзельніка'')",
	'renameuserold' => 'Цяпе�ашняе імя ўдзельніка:',
	'renameusernew' => 'Новае імя:',
	'renameuserreason' => 'П�ычына пе�айменаваньня:',
	'renameusermove' => 'Пе�айменаваць ста�онкі ўдзельніка і гута�ак (і іх падста�онкі)',
	'renameusersuppress' => 'Не ства�аць пе�анакі�аваньні на новую назву �ахунку',
	'renameuserreserve' => 'Заблякаваць ста�ое імя ўдзельніка для выка�ыстаньня ў будучыні',
	'renameuserwarnings' => 'Папя�эджаньні:',
	'renameuserconfirm' => 'Так, пе�айменаваць удзельніка',
	'renameusersubmit' => 'Пе�айменаваць',
	'renameusererrordoesnotexist' => 'Рахунак «<nowiki>$1</nowiki>» не існуе.',
	'renameusererrorexists' => 'Рахунак «<nowiki>$1</nowiki>» ужо існуе.',
	'renameusererrorinvalid' => 'Няслушнае імя ўдзельніка «<nowiki>$1</nowiki>».',
	'renameuser-error-request' => 'Узьніклі п�аблемы з ат�ыманьнем запыту.
Калі ласка, вя�ніцеся назад і пасп�абуйце ізноў.',
	'renameuser-error-same-user' => 'Немагчыма пе�айменаваць �ахунак удзельніка ў тое ж самае імя.',
	'renameusersuccess' => 'Рахунак «<nowiki>$1</nowiki>» быў пе�айменаваны ў «<nowiki>$2</nowiki>».',
	'renameuser-page-exists' => 'Ста�онка $1 ужо існуе і ня можа быць аўтаматычна пе�азапісаная.',
	'renameuser-page-moved' => 'Ста�онка $1 была пе�айменаваная ў $2.',
	'renameuser-page-unmoved' => 'Ста�онка $1 ня можа быць пе�айменаваная ў $2.',
	'renameuserlogpage' => 'Жу�нал пе�айменаваньняў удзельнікаў',
	'renameuserlogpagetext' => 'Гэта жу�нал пе�айменаваньняў �ахункаў удзельнікаў.',
	'renameuserlogentry' => 'пе�айменаваў $1 у «$2»',
	'renameuser-log' => '$1 {{PLURAL:$1|�эдагаваньне|�эдагаваньні|�эдагаваньняў}}. П�ычына: $2',
	'renameuser-move-log' => 'Аўтаматычнае пе�айменаваньне ста�онкі ў сувязі зь пе�айменаваньнем �ахунку ўдзельніка з «[[User:$1|$1]]» у «[[User:$2|$2]]»',
	'right-renameuser' => 'пе�айменаваньне ўдзельнікаў',
	'renameuser-renamed-notice' => '{{GENDER:$1|Гэты удзельнік быў пе�айменаваны|Гэтая удзельніца была пе�айменаваная}}.
Жу�нал пе�айменаваньняў удзельнікаў пададзены ніжэй для даведкі.',
);

/** Bulgarian (Бълга�ски)
 * @author Borislav
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'renameuser' => 'П�еименуване на пот�ебител',
	'renameuser-linkoncontribs' => 'п�еименуване на пот�ебител',
	'renameuser-linkoncontribs-text' => 'П�еименуване на този пот�ебител',
	'renameuser-desc' => 'Добавя възможност за п�еименуване на пот�ебители',
	'renameuserold' => 'Текущо пот�ебителско име:',
	'renameusernew' => 'Ново пот�ебителско име:',
	'renameuserreason' => 'П�ичина за п�еименуването:',
	'renameusermove' => 'П�еместване под новото име на пот�ебителската лична ст�аница и беседа (както и техните подст�аници)',
	'renameusersuppress' => 'Без създаване на п�енасочване към новото име',
	'renameuserreserve' => 'Блоки�ане на ста�ото пот�ебителско име с�ещу узу�пация в бъдеще',
	'renameuserwarnings' => 'П�едуп�еждения:',
	'renameuserconfirm' => 'Да, п�еименуване на пот�ебителя',
	'renameusersubmit' => 'Изпълнение',
	'renameusererrordoesnotexist' => 'Пот�ебителят �<nowiki>$1</nowiki>� не съществува.',
	'renameusererrorexists' => 'Пот�ебителят �<nowiki>$1</nowiki>� вече съществува.',
	'renameusererrorinvalid' => 'Пот�ебителското име �<nowiki>$1</nowiki>� е невалидно.',
	'renameuser-error-request' => 'Имаше п�облем с п�иемането на заявката. Въ�нете се на п�едишната ст�аница и опитайте отново!',
	'renameuser-error-same-user' => 'Новото пот�ебителско име е същото като ста�ото.',
	'renameusersuccess' => 'Пот�ебителят �<nowiki>$1</nowiki>� беше п�еименуван на �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Ст�аницата $1 вече съществува и не може да бъде автоматично заместена.',
	'renameuser-page-moved' => 'Ст�аницата $1 беше п�еместена като $2.',
	'renameuser-page-unmoved' => 'Ст�аницата $1 не можа да бъде п�еместена като $2.',
	'renameuserlogpage' => 'Дневник на п�еименуванията',
	'renameuserlogpagetext' => 'В този дневник се записват п�еименуванията на пот�ебители.',
	'renameuserlogentry' => 'п�еименува $1 на �$2�',
	'renameuser-log' => '{{PLURAL:$1|една �едакция|$1 �едакции}}. П�ичина: $2',
	'renameuser-move-log' => 'Автоматично п�еместена ст�аница п�и п�еименуването на пот�ебител "[[User:$1|$1]]" като "[[User:$2|$2]]"',
	'right-renameuser' => 'п�еименуване на пот�ебители',
	'renameuser-renamed-notice' => 'Пот�ебителят беше п�еименуван.
За сп�авка по-долу е показан Дневникът на п�еименуванията.',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'renameuser' => 'ব্যবহারকার� নামান্তর করো',
	'renameuser-linkoncontribs' => 'ব্যবহারকার� নামান্তর',
	'renameuser-linkoncontribs-text' => 'এই ব্যবহারকার� নামান্তর করো',
	'renameuser-desc' => "একজন ব্যবহারকার�কে নামান্তর করুন (''ব্যবহাকার� নামান্তর'' অধিকার প্রয়োজন)",
	'renameuserold' => 'বর্তমান ব্যবহারকার� নাম:',
	'renameusernew' => 'নতুন ব্যবহারকার� নাম:',
	'renameuserreason' => 'নামান্তরের কারণ:',
	'renameusermove' => 'ব্যবহারকার� এবং আলাপের পাতা (এবং তার উপপাতাসমূহ) নতুন নামে সরিয়ে নাও',
	'renameuserwarnings' => 'সতর্ক�করণ:',
	'renameuserconfirm' => 'হ্যাঁ, ব্যবহারকার�র নাম পরিবর্তন করো',
	'renameusersubmit' => 'জমা দাও',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" নামের কোন ব্যবহারকার� নাই।',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" ব্যবহারকার� ইতিমধ্যে বিদ্যমান আছে।',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" ব্যবহারকার� নামটি ঠিক নয়।',
	'renameuser-error-request' => 'এই অনুরোধ গ্রহণে সমস্যা ছিল। দয়াকরে পেছনে যান এবং আবার চেষ্টা করুন।',
	'renameuser-error-same-user' => 'আপনি পূর্বের নামে নামান্তর করতে পারবেন না।',
	'renameusersuccess' => 'ব্যবহারকার� "<nowiki>$1</nowiki>" থেকে "<nowiki>$2</nowiki>" তে নামান্তরিত করা হয়েছে।',
	'renameuser-page-exists' => 'পাতা $1 বিদ্যমান এবং সয়�্ক্রিয়ভাবে এটির উপর লেখা যাবে না',
	'renameuser-page-moved' => 'পাতাটি $1 থেকে $2 তে সরিয়ে নেওয়া হয়েছে।',
	'renameuser-page-unmoved' => 'পাতাটি $1 থেকে $2 তে সরিয়ে নেওয়া যাবে না।',
	'renameuserlogpage' => 'ব্যবহারকার� নামান্তরের লগ',
	'renameuserlogpagetext' => 'এটি ব্যাবহারকার� নামের পরিবর্তনের লগ',
	'renameuserlogentry' => '$1 থেকে "$2" তে নামান্তর করা হয়েছে',
	'renameuser-log' => '{{PLURAL:$1|1 সম্পাদনা|$1 সম্পাদনাসমূহ}}। কারণ: $2',
	'renameuser-move-log' => 'যখন ব্যবহারকার� "[[User:$1|$1]]" থেকে "[[User:$2|$2]]" তে নামান্তরিত হবে তখন সয়�্ক্রিয়ভাবে পাতা সরিয়ে নেওয়া হয়েছে',
	'right-renameuser' => 'ব্যবহারকার�দের পুনরায় নাম দাও',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'renameuser' => 'Adenvel an implijer',
	'renameuser-linkoncontribs' => 'adenvel an implijer',
	'renameuser-linkoncontribs-text' => 'adenvel an implijer-mañ',
	'renameuser-desc' => "Adenvel un implijer (ret eo kaout ''gwirioù adenvel'')",
	'renameuserold' => 'Anv a-vremañ an implijer :',
	'renameusernew' => 'Anv implijer nevez :',
	'renameuserreason' => 'Abeg evit adenvel :',
	'renameusermove' => 'Kas ar pajennoù implijer ha kaozeal (hag o ispajennoù) betek o anv nevez',
	'renameusersuppress' => 'Arabat krouiñ adkasoù war-du an anv nevez',
	'renameuserreserve' => "Mirout na vo implijet an anv kozh pelloc'h en dazont",
	'renameuserwarnings' => 'Diwallit :',
	'renameuserconfirm' => 'Ya, adenvel an implijer',
	'renameusersubmit' => 'Adenvel',
	'renameusererrordoesnotexist' => 'An implijer "<nowiki>$1</nowiki>" n\'eus ket anezhañ',
	'renameusererrorexists' => 'Krouet eo bet an anv implijer "<nowiki>$1</nowiki>" dija',
	'renameusererrorinvalid' => 'Faziek eo an anv implijer "<nowiki>$1</nowiki>"',
	'renameuser-error-request' => 'Ur gudenn zo bet gant degemer ar reked. Kit war-gil ha klaskit en-dro.',
	'renameuser-error-same-user' => "N'haller ket adenvel un implijer gant an hevelep anv hag a-raok.",
	'renameusersuccess' => 'Deuet eo an implijer "<nowiki>$1</nowiki>" da vezañ "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => "Bez' ez eus eus ar bajenn $1 dija, n'haller ket hec'h erlec'hiañ ent emgefreek.",
	'renameuser-page-moved' => 'Adkaset eo bet ar bajenn $1 da $2.',
	'renameuser-page-unmoved' => "N'eus ket bet gallet adkas ar bajenn $1 da $2.",
	'renameuserlogpage' => 'Roll an implijerien bet adanvet',
	'renameuserlogpagetext' => 'Setu istor an implijerien bet cheñchet o anv ganto',
	'renameuserlogentry' => 'en deus adanvet $1 e "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 degasadenn|$1 degasadenn}}. Abeg : $2',
	'renameuser-move-log' => 'Pajenn dilec\'hiet ent emgefreek e-ser adenvel an implijer "[[User:$1|$1]]" e "[[User:$2|$2]]"',
	'right-renameuser' => 'Adenvel implijerien',
	'renameuser-renamed-notice' => "Adanvet eo bet an implijer-mañ.
A-is emañ marilh an adanvadurioù, ma'z oc'h dedennet.",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'renameuser' => 'Preimenuj korisnika',
	'renameuser-linkoncontribs' => 'preimenuj korisnika',
	'renameuser-linkoncontribs-text' => 'Preimenuj ovog korisnika',
	'renameuser-desc' => "Dodaje [[Special:Renameuser|posebnu stranicu]] u svrhu promjene imena korisnika (zahtjeva pravo ''preimenovanja korisnika'')",
	'renameuserold' => 'Trenutno ime korisnika:',
	'renameusernew' => 'Novo korisničko ime:',
	'renameuserreason' => 'Razlog promjene imena:',
	'renameusermove' => 'Premještanje korisnika i njegove stranice za razgovor (zajedno sa podstranicama) na novo ime',
	'renameusersuppress' => 'Ne pravi preusmjerenja na novo ime',
	'renameuserreserve' => 'Blokiraj staro korisničko ime od kasnijeg korištenja',
	'renameuserwarnings' => 'Upozorenja:',
	'renameuserconfirm' => 'Da, promijeni ime korisnika',
	'renameusersubmit' => 'Pošalji',
	'renameusererrordoesnotexist' => 'Korisnik "<nowiki>$1</nowiki>" ne postoji.',
	'renameusererrorexists' => 'Korisnik "<nowiki>$1</nowiki>" već postoji.',
	'renameusererrorinvalid' => 'Korisničko ime "<nowiki>$1</nowiki>" nije valjano.',
	'renameuser-error-request' => 'Nastao je problem pri prijemu zahtjeva.
Molimo Vas da se vratite nazad i pokušate ponovo.',
	'renameuser-error-same-user' => 'Ne može se promijeniti ime korisnika u isto kao i ranije.',
	'renameusersuccess' => 'Ime korisnika "<nowiki>$1</nowiki>" je promijenjeno u "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Stranica $1 već postoji i ne može biti automatski prepisana.',
	'renameuser-page-moved' => 'Stranica $1 je premještena na $2.',
	'renameuser-page-unmoved' => 'Stranica $1 nije mogla biti premještena na $2.',
	'renameuserlogpage' => 'Zapisnik preimenovanja korisnika',
	'renameuserlogpagetext' => 'Ovo je zapisnik promjena korisničkih imena.',
	'renameuserlogentry' => '$1 preimenovan u "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 izmjena|$1 izmjene|$1 izmjena}}. Razlog: $2',
	'renameuser-move-log' => 'Automatski premještena stranica pri promjeni korisničkog imena "[[User:$1|$1]]" u "[[User:$2|$2]]"',
	'right-renameuser' => 'Preimenovanje korisnika',
	'renameuser-renamed-notice' => 'Ovaj korisnik je promijenio ime.
Zapisnik preimenovanje je prikazan ispod kao referenca.',
);

/** Catalan (Català)
 * @author El libre
 * @author Juanpabl
 * @author Paucabot
 * @author Qllach
 * @author SMP
 * @author Toniher
 * @author Vriullop
 */
$messages['ca'] = array(
	'renameuser' => "Reanomena l'usuari",
	'renameuser-linkoncontribs' => "Reanomena l'usuari/a",
	'renameuser-linkoncontribs-text' => "Canvia el nom d'aquest usuari/a",
	'renameuser-desc' => "Reanomena un usuari (necessita drets de ''renameuser'')",
	'renameuserold' => "Nom d'usuari actual:",
	'renameusernew' => "Nou nom d'usuari:",
	'renameuserreason' => 'Motiu pel canvi:',
	'renameusermove' => "Reanomena la pàgina d'usuari, la de discussió i les subpàgines que tingui al nou nom",
	'renameusersuppress' => 'No creis redireccions cap al nou nom',
	'renameuserreserve' => "Bloca el nom d'usuari antic d'usos futurs",
	'renameuserwarnings' => 'Advertències:',
	'renameuserconfirm' => "Sí, reanomena l'usuari",
	'renameusersubmit' => 'Tramet',
	'renameusererrordoesnotexist' => "L'usuari «<nowiki>$1</nowiki>» no existeix",
	'renameusererrorexists' => "L'usuari «<nowiki>$1</nowiki>» ja existeix",
	'renameusererrorinvalid' => "El nom d'usuari «<nowiki>$1</nowiki>» no és vàlid",
	'renameuser-error-request' => "Hi ha hagut un problema en la recepció de l'ordre.
Torneu enrere i torneu-ho a intentar.",
	'renameuser-error-same-user' => 'No podeu reanomenar un usuari a un nom que ja tenia anteriorment.',
	'renameusersuccess' => "L'usuari «<nowiki>$1</nowiki>» s'ha reanomenat com a «<nowiki>$2</nowiki>»",
	'renameuser-page-exists' => 'La pàgina «$1» ja existeix i no pot ser sobreescrita automàticament',
	'renameuser-page-moved' => "La pàgina «$1» s'ha reanomenat com a «$2».",
	'renameuser-page-unmoved' => "La pàgina $1 no s'ha pogut reanomenar com a «$2».",
	'renameuserlogpage' => "Registre del canvi de nom d'usuari",
	'renameuserlogpagetext' => "Aquest és un registre dels canvis als noms d'usuari",
	'renameuserlogentry' => 'ha reanomenat $1 a "$2"',
	'renameuser-log' => '{{PLURAL:$1|Una contribució|$1 contribucions}}. Motiu: $2',
	'renameuser-move-log' => "S'ha reanomenat automàticament la pàgina mentre es reanomenava l'usuari «[[User:$1|$1]]» com «[[User:$2|$2]]»",
	'right-renameuser' => 'Reanomenar usuaris',
	'renameuser-renamed-notice' => "S'ha canviat el nom d'aquest usuari.
A continuació es proporciona el registre de reanomenaments per a més informació.",
);

/** Chechen (Нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'renameuser' => 'Декъашхон цlе хийца',
	'renameuser-linkoncontribs' => 'декъашхон цlе хийца',
);

/** Sorani (کوردی) */
$messages['ckb'] = array(
	'renameusersubmit' => 'ناردن',
);

/** Crimean Turkish (Latin script) (�Qırımtatarca (Latin)�)
 * @author Don Alessandro
 */
$messages['crh-latn'] = array(
	'renameuserlogpage' => 'Qullanıcı adı deñişikligi jurnalı',
	'renameuserlogpagetext' => 'Aşağıda bulunğan cedvel adı deñiştirilgen qullanıcılarnı köstere',
	'renameuserlogentry' => '$1 qullanıcısınıñ adını "$2" оlaraq deñiştirdi',
	'renameuser-log' => '{{PLURAL:$1|1 deñişiklik|$1 deñişiklik}} yapqan. Sebep: $2',
);

/** Crimean Turkish (Cyrillic script) (�Къы�ымтата�джа (Ки�илл)�)
 * @author Don Alessandro
 */
$messages['crh-cyrl'] = array(
	'renameuserlogpage' => 'Къулланыджы ады денъишиклиги жу�налы',
	'renameuserlogpagetext' => 'Ашагъыда булунгъан джедвель ады денъишти�ильген къулланыджыла�ны косьте�е',
	'renameuserlogentry' => '$1 къулланыджысынынъ адыны "$2" ола�акъ денъишти�ди',
	'renameuser-log' => '{{PLURAL:$1|1 денъишиклик|$1 денъишиклик}} япкъан. Себеп: $2',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Martin Kozák
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'renameuser' => 'P�ejmenovat uživatele',
	'renameuser-linkoncontribs' => 'p�ejmenovat uživatele',
	'renameuser-linkoncontribs-text' => 'P�ejmenovat tohoto uživatele',
	'renameuser-desc' => "P�ejmenování uživatele (vyžadováno oprávnění ''renameuser'')",
	'renameuserold' => 'Stávající uživatelské jméno:',
	'renameusernew' => 'Nové uživatelské jméno:',
	'renameuserreason' => 'Důvod p�ejmenování:',
	'renameusermove' => 'P�esunout uživatelské a diskusní stránky (a jejich podstránky) na nové jméno',
	'renameusersuppress' => 'Nevytvá�et p�esměrování na nové jméno',
	'renameuserreserve' => 'Zabránit nové registraci původního uživatelského jména',
	'renameuserwarnings' => 'Upozornění:',
	'renameuserconfirm' => 'Ano, p�ejmenovat uživatele',
	'renameusersubmit' => 'P�ejmenovat',
	'renameusererrordoesnotexist' => 'Uživatel se jménem �<nowiki>$1</nowiki>� neexistuje',
	'renameusererrorexists' => 'Uživatel se jménem �<nowiki>$1</nowiki>� již existuje',
	'renameusererrorinvalid' => 'Uživatelské jméno �<nowiki>$1</nowiki>� nelze použít',
	'renameuser-error-request' => 'P�i p�ijímání požadavku došlo k chybě. Vraťte se a zkuste to znovu.',
	'renameuser-error-same-user' => 'Nové uživatelské jméno je stejné jako dosavadní.',
	'renameusersuccess' => 'Uživatel �<nowiki>$1</nowiki>� byl úspěšně p�ejmenován na �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Stránka $1 již existuje a nelze ji automaticky p�epsat.',
	'renameuser-page-moved' => 'Stránka $1 byla p�esunuta na $2.',
	'renameuser-page-unmoved' => 'Stránku $1 se nepoda�ilo p�esunout na $2.',
	'renameuserlogpage' => 'Kniha p�ejmenování uživatelů',
	'renameuserlogpagetext' => 'Toto je záznam p�ejmenování uživatelů (změn uživatelského jména).',
	'renameuserlogentry' => 'p�ejmenovává $1 na �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 editace|$1 editace|$1 editací}}. Zdůvodnění: $2',
	'renameuser-move-log' => 'Automatický p�esun p�i p�ejmenování uživatele �[[User:$1|$1]]� na �[[User:$2|$2]]�',
	'right-renameuser' => 'P�ejmenovávání uživatelů',
	'renameuser-renamed-notice' => 'Tento uživatel byl p�ejmenován.
Pro p�ehled je níže zobrazen výpis z knihy p�ejmenování uživatelů.',
);

/** Church Slavic (Словѣ́ньскъ / ��������������������)
 * @author Svetko
 * @author ОйЛ
 */
$messages['cu'] = array(
	'renameuser' => 'п�ѣимєноуи поль�єватєл҄ь',
	'renameuserold' => 'н�нѣщьнѥѥ имѧ :',
	'renameusernew' => 'ново имѧ :',
	'renameuserreason' => 'какъ съм�слъ :',
	'renameusermove' => 'на�ьци тако поль�єватєл� ст�аницѫ · бєсѣдѫ и ихъ подъст�аницѧ',
	'renameusersubmit' => 'єи',
	'renameusererrordoesnotexist' => 'поль�єватєл� �� <nowiki>$1</nowiki> �� нѣстъ',
	'renameusererrorexists' => 'поль�єватєл҄ь �� <nowiki>$1</nowiki> �� ѥстъ ю',
	'renameusererrorinvalid' => 'имѧ �� <nowiki>$1</nowiki> �� нѣстъ годѣ',
	'renameuserlogpage' => 'поль�єватєлъ п�ѣимєновани� їсто�ї�',
	'renameuserlogentry' => 'на�єчє $1 имєньмь �� $2 ��',
);

/** Chuvash (Чӑвашла)
 * @author FLAGELLVM DEI
 */
$messages['cv'] = array(
	'renameuserconfirm' => 'Çапла, хутшăнакан ятне улăшта�малла',
	'renameuser-page-moved' => '$1 ст�аницăн ятне $2 çине улăшта�нă.',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'renameuser' => 'Ail-enwi defnyddiwr',
	'renameuser-linkoncontribs' => "ail-enwi'r defnyddiwr",
	'renameuser-linkoncontribs-text' => "Ail-enwi'r defnyddiwr hwn",
	'renameuser-desc' => "Yn ychwanegu [[Special:Renameuser|tudalen arbennig]] er mwyn gallu ail-enwi cyfrif defnyddiwr (sydd angen y gallu ''renameuser'')",
	'renameuserold' => 'Enw presennol y defnyddiwr:',
	'renameusernew' => "Enw newydd i'r defnyddiwr:",
	'renameuserreason' => 'Y rheswm dros ail-enwi:',
	'renameusermove' => "Symud y tudalennau defnyddiwr a sgwrs (ac unrhyw is-dudalennau) i'r enw newydd",
	'renameusersuppress' => "Peidiwch â gosod ailgyfeiriadau i'r enw newydd",
	'renameuserreserve' => 'Atal yr hen enw defnyddiwr rhag cael ei ddefnyddio rhagor',
	'renameuserwarnings' => 'Rhybuddion:',
	'renameuserconfirm' => "Parhau gyda'r ail-enwi",
	'renameusersubmit' => 'Anfon',
	'renameusererrordoesnotexist' => 'Nid yw\'r defnyddiwr "<nowiki>$1</nowiki>" yn bodoli.',
	'renameusererrorexists' => 'Mae\'r defnyddiwr "<nowiki>$1</nowiki>" eisoes yn bodoli.',
	'renameusererrorinvalid' => 'Mae\'r enw defnyddiwr "<nowiki>$1</nowiki>" yn annilys',
	'renameuser-error-request' => 'Cafwyd trafferth yn derbyn y cais.
Ewch yn ôl a cheisio eto, os gwelwch yn dda.',
	'renameuser-error-same-user' => "Ni ellir ail-enwi defnyddiwr gyda'r un enw ag o'r blaen.",
	'renameusersuccess' => 'Mae\'r defnyddiwr "<nowiki>$1</nowiki>" wedi cael ei ail-enwi i "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => "Mae'r dudalen $1 ar gael yn barod ac ni ellir ei throsysgrifo.",
	'renameuser-page-moved' => 'Symudwyd $1 i $2.',
	'renameuser-page-unmoved' => 'Ni lwyddwyd i symud y dudalen $1 i $2.',
	'renameuserlogpage' => 'Lòg ail-enwi defnyddwyr',
	'renameuserlogpagetext' => "Dyma lòg o'r holl newidiadau i enwau defnyddwyr.",
	'renameuserlogentry' => 'wedi ail-enwi $1 yn "$2"',
	'renameuser-log' => '$1 {{PLURAL:$1|golygiad|golygiad|olygiad|golygiad|golygiad|o olygiadau}}. Rheswm: $2',
	'renameuser-move-log' => 'Wedi symud y dudalen yn awtomatig wrth ail-enwi\'r defnyddiwr "[[User:$1|$1]]" i "[[User:$2|$2]]"',
	'right-renameuser' => 'Ail-enwi defnyddwyr',
	'renameuser-renamed-notice' => "Mae'r defnyddiwr hwn wedi ei ail-enwi.
Mae'r lòg ail-enwi defnyddwyr i'w weld isod.",
);

/** Danish (Dansk)
 * @author Byrial
 * @author Froztbyte
 * @author Peter Alberti
 */
$messages['da'] = array(
	'renameuser' => 'Omdøb bruger',
	'renameuser-linkoncontribs' => 'omdøb bruger',
	'renameuser-linkoncontribs-text' => 'Omdøb denne bruger',
	'renameuser-desc' => "Laver en [[Special:Renameuser|specialside]] til at omdøbe en bruger (kræver rettigheden ''renameuser'')",
	'renameuserold' => 'Nuværende brugernavn:',
	'renameusernew' => 'Nyt brugernavn:',
	'renameuserreason' => 'Årsag til omdøbning:',
	'renameusermove' => 'Flyt bruger- og diskussionssider (og deres undersider) til nyt navn',
	'renameusersuppress' => 'Opret ikke omdirigeringer til det nye navn',
	'renameuserreserve' => 'Bloker det gamle brugernavn fra fremtidig brug',
	'renameuserwarnings' => 'Advarsler:',
	'renameuserconfirm' => 'Ja, omdøb brugeren',
	'renameusersubmit' => 'Omdøb',
	'renameusererrordoesnotexist' => 'Brugeren "<nowiki>$1</nowiki>" findes ikke.',
	'renameusererrorexists' => 'Brugeren "<nowiki>$1</nowiki>" findes allerede.',
	'renameusererrorinvalid' => 'Brugernavnet "<nowiki>$1</nowiki>" er ugyldigt.',
	'renameuser-error-request' => 'Det var et problem med at modtage forespørgslen.
Gå venligst tilbage og prøv igen.',
	'renameuser-error-same-user' => 'Du kan ikke omdøbe en bruger til det samme navn som før.',
	'renameusersuccess' => 'Brugeren "<nowiki>$1</nowiki>" er blevet omdøbt til "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Siden $1 eksisterer allerede og kan ikke automatisk overskrives.',
	'renameuser-page-moved' => 'Siden $1 er flyttet til $2.',
	'renameuser-page-unmoved' => 'Siden $1 kunne ikke flyttes til $2.',
	'renameuserlogpage' => 'Brugeromdøbningslog',
	'renameuserlogpagetext' => 'Dette er en log over omdøbninger af brugernavne.',
	'renameuserlogentry' => 'har omdøbt $1 til "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redigering|$1 redigeringer}}. Årsag: $2',
	'renameuser-move-log' => 'Side automatisk flyttet ved omdøbning af bruger "[[User:$1|$1]]" til "[[User:$2|$2]]"',
	'right-renameuser' => 'Omdøbe brugere',
	'renameuser-renamed-notice' => 'Denne bruger er blevet omdøbt.
Til information er omdøbningsloggen vist nedenfor.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Raimond Spekking
 * @author Spacebirdy
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'renameuser' => 'Benutzer umbenennen',
	'renameuser-linkoncontribs' => 'Benutzer umbenennen',
	'renameuser-linkoncontribs-text' => 'Diesen Benutzer umbenennen',
	'renameuser-desc' => 'Ergänzt eine [[Special:Renameuser|Spezialseite]] zum Umbenennen eines Benutzers',
	'renameuserold' => 'Bisheriger Benutzername:',
	'renameusernew' => 'Neuer Benutzername:',
	'renameuserreason' => 'Grund:',
	'renameusermove' => 'Benutzer-/Diskussionsseite (inkl. Unterseiten) auf den neuen Benutzernamen verschieben',
	'renameusersuppress' => 'Weiterleitung auf den neuen Benutzernamen unterdrücken',
	'renameuserreserve' => 'Alten Benutzernamen für eine Neuregistrierung blockieren',
	'renameuserwarnings' => 'Warnungen:',
	'renameuserconfirm' => 'Ja, Benutzer umbenennen',
	'renameusersubmit' => 'Umbenennen',
	'renameusererrordoesnotexist' => 'Der Benutzername �<nowiki>$1</nowiki>� existiert nicht.',
	'renameusererrorexists' => 'Der Benutzername �<nowiki>$1</nowiki>� existiert bereits.',
	'renameusererrorinvalid' => 'Der Benutzername �<nowiki>$1</nowiki>� ist ungültig.',
	'renameuser-error-request' => 'Es gab ein Problem beim Empfang der Anfrage. Bitte nochmal versuchen.',
	'renameuser-error-same-user' => 'Alter und neuer Benutzername sind identisch.',
	'renameusersuccess' => 'Der Benutzer �<nowiki>$1</nowiki>� wurde erfolgreich in �<nowiki>$2</nowiki>� umbenannt.',
	'renameuser-page-exists' => 'Die Seite �$1� ist bereits vorhanden und kann nicht automatisch überschrieben werden.',
	'renameuser-page-moved' => 'Die Seite �$1� wurde nach �$2� verschoben.',
	'renameuser-page-unmoved' => 'Die Seite �$1� konnte nicht nach �$2� verschoben werden.',
	'renameuserlogpage' => 'Benutzernamenänderungs-Logbuch',
	'renameuserlogpagetext' => 'In diesem Logbuch werden die Änderungen von Benutzernamen protokolliert.',
	'renameuserlogentry' => 'hat �$1� in �$2� umbenannt',
	'renameuser-log' => '{{PLURAL:$1|Eine Bearbeitung|$1 Bearbeitungen}}. Grund: $2',
	'renameuser-move-log' => 'Seite während der Benutzerkontoumbenennung von �[[User:$1|$1]]� in �[[User:$2|$2]]� automatisch verschoben',
	'right-renameuser' => 'Benutzer umbenennen',
	'renameuser-renamed-notice' => '{{GENDER:$1|Dieser Benutzer|Diese Benutzerin|Dieser Benutzer}} wurde umbenannt.
Zur Information folgt das Benutzernamenänderungs-Logbuch.',
);

/** Zazaki (Zazaki)
 * @author Aspar
 * @author Xoser
 */
$messages['diq'] = array(
	'renameuser' => 'nameyê karberi bıvurn',
	'renameuser-linkoncontribs' => 'name bivurne',
	'renameuser-linkoncontribs-text' => 'Nameyê ena karber bivurne',
	'renameuser-desc' => "qey newe ra namedayişê karberi re yew [[Special:Renameuser|pelo xas]] têare keno (gani heqqê ''karberi re newe ra name bıde'' bıbo )",
	'renameuserold' => 'nameyê karberi yo nıkayi',
	'renameusernew' => 'nameyê karberi yo newe',
	'renameuserreason' => 'çıra:',
	'renameusermove' => 'nameyê karberan u pelê werêaameyişan bıkırışi nameyo newe',
	'renameuserreserve' => 'nameyê karberi yo verini bloke bıker.',
	'renameuserwarnings' => 'hişyariyi',
	'renameuserconfirm' => 'bele karberi newe ra name bıker',
	'renameusersubmit' => 'bierşawê/biruşnê',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" no name de yew karber çino.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" karber ca ra esto',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" nameyê karberi nemeqbulo',
	'renameuser-error-request' => 'ca ardışê waştışê şıma de yew problem veciya.
kerem kerê agêrê newe ra tesel bıkerê, bıcerbnê',
	'renameuser-error-same-user' => 'şıma nêşkeni nameyê karberi yo verini reyna biyarî pakerî',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" rumuzê no karberi yo cıwa verın vuriya "<nowiki>$2</nowiki>" no rumuzi re.',
	'renameuser-page-exists' => '$1 pel ca ra esto newe ra ser nênusiyeno.',
	'renameuser-page-moved' => '$1 pel kırışiya no $2 pel',
	'renameuser-page-unmoved' => '$1 pel nêkırışiya no $2 pel.',
	'renameuserlogpage' => 'qeydê vuriyayişê nameyê karberi',
	'renameuserlogpagetext' => 'listeya cêrıni nameyê karberê ke vuriyayo mocneno',
	'renameuserlogentry' => '$1newe ra neme bı: "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edit|$1 edit}}. çıra: $2',
	'renameuser-move-log' => 'wexta ke karber "[[User:$1|$1]]" no name ra kırışiya "[[User:$2|$2]]" no name re ya newe ra name diyêne pel zi otomotikmen kırişiya',
	'right-renameuser' => 'nameyê karberan bıvurn',
	'renameuser-renamed-notice' => 'nameyê na/no karberi/e vuriya.
qey referansi rocaneyê vuriyayişê nameyi cêr de yo.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'renameuser' => 'Wužywarja pśemjeniś',
	'renameuser-linkoncontribs' => 'wužywarja psemjenjowaś',
	'renameuser-linkoncontribs-text' => 'Toś togo wužywarja pśemjenjowaś',
	'renameuser-desc' => "Wužywarja pśemjeniś (pomina se pšawo ''renameuser'')",
	'renameuserold' => 'Aktualne wužywarske mě:',
	'renameusernew' => 'Nowe wužywarske mě:',
	'renameuserreason' => 'Pśicyna za pśemjenjenje',
	'renameusermove' => 'Wužywarski a diskusijny bok (a jich pódboki) do nowego mjenja pśesunuś',
	'renameusersuppress' => 'Dalejpósrědnjenja k nowemu mjenjoju njenapóraś',
	'renameuserreserve' => 'Stare wužywarske mě pśeśiwo pśichodnemu wužywanjeju blokěrowaś',
	'renameuserwarnings' => 'Warnowanja:',
	'renameuserconfirm' => 'Jo, wužywarja pśemjeniś',
	'renameusersubmit' => 'Pśemjeniś',
	'renameusererrordoesnotexist' => 'Wužywaŕ "<nowiki>$1</nowiki>" njeeksistěrujo.',
	'renameusererrorexists' => 'Wužywaŕ "<nowiki>$1</nowiki>" južo eksistěrujo.',
	'renameusererrorinvalid' => 'Wužywarske mě "<nowiki>$1</nowiki>" jo njepłaśiwe.',
	'renameuser-error-request' => 'Problem jo pśi dostawanju napšašanja wustupił.
Źi pšosym slědk a wopytaj hyšći raz.',
	'renameuser-error-same-user' => 'Njamóžoš wužywarja do togo samogo mjenja pśemjeniś',
	'renameusersuccess' => 'Wužywaŕ "<nowiki>$1</nowiki>" jo se do "<nowiki>$2</nowiki>" pśemjenił.',
	'renameuser-page-exists' => 'Bok $1 južo eksistěrujo a njedajo se awtomatiski pśepisaś.',
	'renameuser-page-moved' => 'Bok $1 jo se do $2 pśesunuł.',
	'renameuser-page-unmoved' => 'Bok $1 njejo se do $2 pśesunuś dał.',
	'renameuserlogpage' => 'Protokol wužywarskich pśemjenjenjow',
	'renameuserlogpagetext' => 'Toś to jo protokol změnow na wužywarskich mjenjach.',
	'renameuserlogentry' => 'jo $1 do "$2" pśemjenił',
	'renameuser-log' => '{{PLURAL:&1|1 změna|$1 změnje|$1 změny|$1 změnow}}. Pśicyna: $2',
	'renameuser-move-log' => 'Pśi pśemjenjowanju wužywarja "[[User:$1|$1]]" do "[[User:$2|$2]]" awtomatiski pśesunjony bok',
	'right-renameuser' => 'Wužywarjow pśemjeniś',
	'renameuser-renamed-notice' => 'Toś ten wužywaŕ jo se pśemjenił.
Protokol pśemjenjowanjow jo dołojce ako referenca pódany.',
);

/** Greek (Ελληνικά)
 * @author Badseed
 * @author Consta
 * @author Dead3y3
 * @author Glavkos
 * @author Kiriakos
 * @author MF-Warburg
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'renameuser' => 'Μετονομασία χρήστη',
	'renameuser-linkoncontribs' => 'Μετονομασία χρήστη',
	'renameuser-linkoncontribs-text' => 'Μετονομασία αυτού του χρήστη',
	'renameuser-desc' => "Προσθέτει μια [[Special:Renameuser|ειδική σελίδα]] για την μετονομασία ενός χρήστη (είναι α�αραίτητο το δικαίωμα ''renameuser'')",
	'renameuserold' => 'Τρέχον όνομα χρήστη:',
	'renameusernew' => 'Νέο όνομα χρήστη:',
	'renameuserreason' => 'Λόγος μετονομασίας:',
	'renameusermove' => 'Μετακίνηση της σελίδας χρήστη και της σελίδας συζήτησης χρήστη (και των υ�οσελίδων τους) στο καινούργιο όνομα',
	'renameusersuppress' => 'Μην δημιουργείτε ανακατευθύνσεις στο νέο όνομα',
	'renameuserreserve' => 'Φραγή του �αλιού ονόματος χρήστη/χρήστριας α�ό μελλοντική χρήση',
	'renameuserwarnings' => 'Προειδο�οιήσεις:',
	'renameuserconfirm' => 'Ναι, μετονομάστε τον χρήστη',
	'renameusersubmit' => 'Καταχώριση',
	'renameusererrordoesnotexist' => 'Ο χρήστης "<nowiki>$1</nowiki>" δεν υ�άρχει',
	'renameusererrorexists' => 'Ο χρήστης "<nowiki>$1</nowiki>" υ�άρχει ήδη.',
	'renameusererrorinvalid' => 'Το όνομα χρήστη "<nowiki>$1</nowiki>" είναι άκυρο.',
	'renameuser-error-request' => 'Υ�ήρξε ένα �ρόβλημα στην �αραλαβή της αίτησης. Παρακαλούμε ε�ιστρέψτε και ξαναδοκιμάστε.',
	'renameuser-error-same-user' => 'Δεν μ�ορείτε να μετονομάσετε έναν χρήστη σε όνομα ίδιο με το �ροηγούμενο.',
	'renameusersuccess' => 'Ο χρήστης ή η χρήστρια «<nowiki>$1</nowiki>» έχει μετονομαστεί σε «<nowiki>$2</nowiki>».',
	'renameuser-page-exists' => 'Η σελίδα $1 υ�άρχει ήδη και δεν μ�ορεί να αντικατασταθεί αυτόματα.',
	'renameuser-page-moved' => 'Η σελίδα $1 μετακινήθηκε στο $2.',
	'renameuser-page-unmoved' => 'Η σελίδα $1 δεν μ�όρεσε να μετακινηθεί στο $2.',
	'renameuserlogpage' => 'Αρχείο μετονομασίας χρηστών',
	'renameuserlogpagetext' => 'Αυτό είναι ένα αρχείο καταγραφών αλλαγών σε ονόματα χρηστών',
	'renameuserlogentry' => 'Ο/Η $1 μετονομάστηκε σε «$2»',
	'renameuser-log' => '{{PLURAL:$1|1 ε�εξεργασία|$1 ε�εξεργασίες}}. Λόγος: $2',
	'renameuser-move-log' => 'Η σελίδα μετακινήθηκε αυτόματα κατά τη μετονομασία του χρήστη "[[User:$1|$1]]" σε "[[User:$2|$2]]"',
	'right-renameuser' => 'Μετονομασία χρηστών',
	'renameuser-renamed-notice' => 'Αυτός ο χρήστης άλλαξε όνομα
Tο ημερολόγιο ε�ανονομασιών δίνεται �αρακάτω για αναφορά.',
);

/** Esperanto (Esperanto)
 * @author Tlustulimu
 * @author Yekrats
 */
$messages['eo'] = array(
	'renameuser' => 'Alinomigi uzanton',
	'renameuser-linkoncontribs' => 'renomigi uzanton',
	'renameuser-linkoncontribs-text' => 'Renomigi ĉi tiun uzanton',
	'renameuser-desc' => "Aldonas [[Special:Renameuser|specialan paĝon]] por alinomigi uzanton (bezonas rajton ''renameuser'')",
	'renameuserold' => 'Aktuala salutnomo:',
	'renameusernew' => 'Nova salutnomo:',
	'renameuserreason' => 'Kialo por alinomigo:',
	'renameusermove' => 'Movu uzantan kaj diskutan paĝojn (kaj ties subpaĝojn) al la nova nomo',
	'renameusersuppress' => 'Ne krei alidirektilojn al la nova nomo',
	'renameuserreserve' => 'Teni la malnovan salutnomon de plua uzo',
	'renameuserwarnings' => 'Avertoj:',
	'renameuserconfirm' => 'Jes, renomigu la uzanton',
	'renameusersubmit' => 'Ek',
	'renameusererrordoesnotexist' => 'La uzanto "<nowiki>$1</nowiki>" ne ekzistas',
	'renameusererrorexists' => 'La uzanto "<nowiki>$1</nowiki>" jam ekzistas',
	'renameusererrorinvalid' => 'La salutnomo "<nowiki>$1</nowiki>" estas malvalida',
	'renameuser-error-request' => 'Estis problemo recivante la peton.
Bonvolu retroigi kaj reprovi.',
	'renameuser-error-same-user' => 'Vi ne povas alinomigi uzanton al la sama nomo.',
	'renameusersuccess' => 'La uzanto "<nowiki>$1</nowiki>" estas alinomita al "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'La paĝo $1 jam ekzistas kaj ne povas esti aŭtomate anstataŭata.',
	'renameuser-page-moved' => 'La paĝo $1 estis movita al $2.',
	'renameuser-page-unmoved' => 'La paĝo $1 ne povis esti movita al $2.',
	'renameuserlogpage' => 'Protokolo pri alinomigoj de uzantoj',
	'renameuserlogpagetext' => 'Jen protokolo pri ŝanĝoj de salutnomoj.',
	'renameuserlogentry' => 'renomigis $1 al "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redakto|$1 redaktoj}}. Kialo: $2',
	'renameuser-move-log' => 'Aŭtomate movis paĝon dum alinomigo de la uzanto "[[User:$1|$1]]" al "[[User:$2|$2]]"',
	'right-renameuser' => 'Alinomigi uzantojn',
	'renameuser-renamed-notice' => 'Ĉi tiu uzanto estis renomigita.
Jen la protokolo pri renomigado por via referenco.',
);

/** Spanish (Español)
 * @author Alhen
 * @author Dferg
 * @author Diego Grez
 * @author Icvav
 * @author Jatrobat
 * @author Lin linao
 * @author Locos epraix
 * @author Remember the dot
 * @author Sanbec
 * @author Spacebirdy
 * @author Translationista
 */
$messages['es'] = array(
	'renameuser' => 'Cambiar el nombre de usuario',
	'renameuser-linkoncontribs' => 'cambiar el nombre de este usuario',
	'renameuser-linkoncontribs-text' => 'Cambiar el nombre de este usuario',
	'renameuser-desc' => "Añade una [[Special:Renameuser|página especial]] para cambiar de nombre a un usuario (necesita el derecho ''renameuser'')",
	'renameuserold' => 'Nombre actual:',
	'renameusernew' => 'Nuevo nombre de usuario:',
	'renameuserreason' => 'Motivo:',
	'renameusermove' => 'Trasladar las páginas de usuario y de discusión (y sus subpáginas) al nuevo nombre',
	'renameusersuppress' => 'No crear redirecciones al nuevo nombre',
	'renameuserreserve' => 'Bloquear el antiguo nombre de usuario para evitar que sea usado en el futuro',
	'renameuserwarnings' => 'Avisos:',
	'renameuserconfirm' => 'Sí, cambiar el nombre del usuario',
	'renameusersubmit' => 'Enviar',
	'renameusererrordoesnotexist' => 'El usuario «<nowiki>$1</nowiki>» no existe',
	'renameusererrorexists' => 'El usuario «<nowiki>$1</nowiki>» ya existe',
	'renameusererrorinvalid' => 'El nombre de usuario «<nowiki>$1</nowiki>» no es válido',
	'renameuser-error-request' => 'Hubo un problema al recibir la solicitud.
Por favor, vuelve atrás e inténtalo de nuevo.',
	'renameuser-error-same-user' => 'No puedes renombrar a un usuario con el nombre que ya tenía.',
	'renameusersuccess' => 'El nombre de usuario «<nowiki>$1</nowiki>» ha sido modificado a «<nowiki>$2</nowiki>»',
	'renameuser-page-exists' => 'La página $1 ya existe y no puede ser reemplazada automáticamente.',
	'renameuser-page-moved' => 'La página $1 ha sido trasladada a $2.',
	'renameuser-page-unmoved' => 'La página $1 no pudo ser trasladada a $2.',
	'renameuserlogpage' => 'Registro de cambios de nombre de usuario',
	'renameuserlogpagetext' => 'Este es un registro de cambios de nombres de usuario.',
	'renameuserlogentry' => 'cambió el nombre de usuario de $1 a «$2»',
	'renameuser-log' => '{{PLURAL:$1|1 edición|$1 ediciones}}. Motivo: $2',
	'renameuser-move-log' => 'Página trasladada automáticamente al cambiar el nombre de usuario de «[[User:$1|$1]]» a «[[User:$2|$2]]»',
	'right-renameuser' => 'Cambiar el nombre de los usuarios',
	'renameuser-renamed-notice' => 'El nombre de este usuario ha sido modificado.
El registro de cambios de nombre de usuario se provee debajo para mayor referencia.',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Jaan513
 * @author Pikne
 * @author Silvar
 * @author WikedKentaur
 */
$messages['et'] = array(
	'renameuser' => 'Kasutajanime muutmine',
	'renameuser-linkoncontribs' => 'kasutaja ümbernimetamine',
	'renameuser-linkoncontribs-text' => 'Nimeta see kasutaja ümber',
	'renameuser-desc' => "Lisab kasutajanime muutmise [[Special:Renameuser|erilehekülje]] (vajab ''renameuser''-õigust).",
	'renameuserold' => 'Praegune kasutajanimi:',
	'renameusernew' => 'Uus kasutajanimi:',
	'renameuserreason' => 'Muutmise põhjus:',
	'renameusermove' => 'Nimeta ümber kasutajaleht, aruteluleht ja nende alamlehed.',
	'renameusersuppress' => 'Ära loo ümbersuunamisi uuele nimele',
	'renameuserreserve' => 'Ära luba vana kasutajanime edaspidi kasutada',
	'renameuserwarnings' => 'Hoiatused:',
	'renameuserconfirm' => 'Jah, nimeta kasutaja ümber',
	'renameusersubmit' => 'Muuda',
	'renameusererrordoesnotexist' => 'Kasutajat "<nowiki>$1</nowiki>" ei ole olemas.',
	'renameusererrorexists' => 'Kasutaja "<nowiki>$1</nowiki>" on juba olemas.',
	'renameusererrorinvalid' => 'Kasutajanimi "<nowiki>$1</nowiki>" on vigane.',
	'renameuser-error-request' => 'Palvet ei õnnestunud kätte saada.
Palun ürita uuesti.',
	'renameuser-error-same-user' => 'Vana ja uus nimi on samased.',
	'renameusersuccess' => 'Kasutaja "<nowiki>$1</nowiki>" uus nimi on nüüd "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Lehekülg $1 on juba olemas ja seda ei saa automaatselt üle kirjutada.',
	'renameuser-page-moved' => 'Lehekülg $1 on teisaldatud pealkirja $2 alla.',
	'renameuser-page-unmoved' => 'Lehekülje $1 teisaldamine nime $2 alla ei õnnestunud.',
	'renameuserlogpage' => 'Kasutajanime muutmise logi',
	'renameuserlogpagetext' => 'See on kasutajanimede muutmise logi.',
	'renameuserlogentry' => 'nimetas kasutaja $1 ümber kasutajaks "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redigeerimine|$1 redigeerimist}}. Põhjus: $2',
	'renameuser-move-log' => 'Teisaldatud automaatselt, kui kasutaja "[[User:$1|$1]]" nimetati ümber kasutajaks "[[User:$2|$2]]"',
	'right-renameuser' => 'Muuta kasutajanimesid',
	'renameuser-renamed-notice' => 'Kasutaja on ümbernimetatud.
Allpool on toodud ümbernimetamislogi.',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Theklan
 */
$messages['eu'] = array(
	'renameuser' => 'Erabiltzaile bati izena aldatu',
	'renameuserold' => 'Oraingo erabiltzaile izena:',
	'renameusernew' => 'Erabiltzaile izen berria:',
	'renameuserreason' => 'Izena aldatzeko arrazoia:',
	'renameuserwarnings' => 'Oharrak:',
	'renameuserconfirm' => 'Bai, lankidearen izena aldatu',
	'renameusersubmit' => 'Bidali',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" lankidea existitzen da',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" erabiltzaile izena okerra da',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" lankidearen izen berria "<nowiki>$2</nowiki>" da',
	'renameuser-page-exists' => 'Badago $1 orrialdea, eta ezin da automatikoki gainidatzi.',
	'renameuser-page-moved' => '$1 orrialde $2(e)ra mugitu da.',
	'renameuser-page-unmoved' => 'Ezin izan da $1 orrialdea $2(e)ra mugitu.',
	'renameuserlogpage' => 'Erabiltzaileen izen aldaketa erregistroa',
	'renameuserlogpagetext' => 'Erabiltzaileen izen aldaketen erregistroa da hau',
	'renameuser-log' => '{{PLURAL:$1|aldaketa 1|$1 aldaketa}}. Arrazoia: $2',
	'right-renameuser' => 'Lankideak berrizendatu',
);

/** Extremaduran (Estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'renameuser-page-moved' => 'S´á moviu la páhina $1 a $2.',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Wayiran
 */
$messages['fa'] = array(
	'renameuser' => 'تغییر نام کاربر',
	'renameuser-linkoncontribs' => 'تغییر نام کاربر',
	'renameuser-linkoncontribs-text' => 'تغییر نام کاربر',
	'renameuser-desc' => "نام یک کاربر را تغییر می�دهد (نیازمند برخورداری از اختیارات ''تغییرنام'' است)",
	'renameuserold' => 'نام کاربری کنونی:',
	'renameusernew' => 'نام کاربری نو:',
	'renameuserreason' => 'علت تغییر نام کاربری:',
	'renameusermove' => 'صفحه کاربر و صفحه بحث کاربر (و زیر صفحه�های آن�ها) را به نام جدید انتقال بده',
	'renameusersuppress' => 'تغییر مسیر به نام جدید ایجاد نکن',
	'renameuserreserve' => 'نام کاربری قبلی را در مقابل استفادهٔ مجدد حفظ کن',
	'renameuserwarnings' => 'هشدار:',
	'renameuserconfirm' => 'بله، نام کاربر را تغییر بده',
	'renameusersubmit' => 'ارسال',
	'renameusererrordoesnotexist' => 'نام کاربری «<nowiki>$1</nowiki>» وجود ندارد',
	'renameusererrorexists' => 'نام کاربری «<nowiki>$1</nowiki>» استفاده شده�است',
	'renameusererrorinvalid' => 'نام کاربری «<nowiki>$1</nowiki>» غیر مجاز است',
	'renameuser-error-request' => 'در دریافت درخواست مشکلی پیش آمد. لطفاً به صفحهٔ قبل بازگردید و دوباره تلاش کنید.',
	'renameuser-error-same-user' => 'شما نمی�توانید نام یک کاربر را به همان نام قبلی�اش تغییر دهید.',
	'renameusersuccess' => 'نام کاربر «<nowiki>$1</nowiki>» به «<nowiki>$2</nowiki>» تغییر یافت.',
	'renameuser-page-exists' => 'صفحهٔ $1 از قبل وجود داشته و به طور خودکار قابل بازنویسی نیست.',
	'renameuser-page-moved' => 'صفحهٔ $1 به $2 انتقال داده شد.',
	'renameuser-page-unmoved' => 'امکان انتقال صفحهٔ $1 به $2 وجود ندارد.',
	'renameuserlogpage' => 'سیاهه تغییر نام کاربر',
	'renameuserlogpagetext' => 'این سیاههٔ تغییر نام کاربران است',
	'renameuserlogentry' => 'نام $1 را به $2 تغییر داد',
	'renameuser-log' => '$1 ویرایش. دلیل: $2',
	'renameuser-move-log' => 'صفحه در ضمن تغییر نام «[[User:$1|$1]]» به «[[User:$2|$2]]» به طور خودکار انتقال داده شد.',
	'right-renameuser' => 'تغییر نام کاربران',
	'renameuser-renamed-notice' => 'این کاربر تغییر نام داده�است.
سیاهه تغییر نام در ادامه آمده است.',
);

/** Finnish (Suomi)
 * @author Agony
 * @author Centerlink
 * @author Crt
 * @author Nike
 * @author Str4nd
 */
$messages['fi'] = array(
	'renameuser' => 'Käyttäjätunnuksen vaihto',
	'renameuser-linkoncontribs' => 'nimeä käyttäjä uudelleen',
	'renameuser-linkoncontribs-text' => 'Nimeä tämä käyttäjä uudelleen',
	'renameuser-desc' => "Mahdollistaa käyttäjän uudelleennimeämisen (vaatii ''renameuser''-oikeudet).",
	'renameuserold' => 'Nykyinen tunnus',
	'renameusernew' => 'Uusi tunnus',
	'renameuserreason' => 'Kommentti',
	'renameusermove' => 'Siirrä käyttäjä- ja keskustelusivut alasivuineen uudelle nimelle',
	'renameusersuppress' => 'Älä luo ohjauksia uuteen nimeen',
	'renameuserreserve' => 'Estä entinen käyttäjänimi tulevalta käytöltä',
	'renameuserwarnings' => 'Varoitukset:',
	'renameuserconfirm' => 'Kyllä, uudelleennimeä käyttäjä',
	'renameusersubmit' => 'Nimeä',
	'renameusererrordoesnotexist' => 'Tunnusta �<nowiki>$1</nowiki>� ei ole',
	'renameusererrorexists' => 'Tunnus �<nowiki>$1</nowiki>� on jo olemassa',
	'renameusererrorinvalid' => 'Tunnus �<nowiki>$1</nowiki>� ei ole kelvollinen',
	'renameuser-error-request' => 'Pyynnön vastaanottamisessa oli ongelma. Ole hyvä ja yritä uudelleen.',
	'renameuser-error-same-user' => 'Et voi nimetä käyttäjää uudelleen samaksi kuin hän jo on.',
	'renameusersuccess' => 'Käyttäjän �<nowiki>$1</nowiki>� tunnus on nyt �<nowiki>$2</nowiki>�.',
	'renameuser-page-exists' => 'Sivu $1 on jo olemassa eikä sitä korvattu.',
	'renameuser-page-moved' => 'Sivu $1 siirrettiin nimelle $2.',
	'renameuser-page-unmoved' => 'Sivun $1 siirtäminen nimelle $2 ei onnistunut.',
	'renameuserlogpage' => 'Tunnusten vaihdot',
	'renameuserlogpagetext' => 'Tämä on loki käyttäjätunnuksien vaihdoista.',
	'renameuserlogentry' => 'on nimennyt käyttäjän $1 käyttäjäksi �$2�',
	'renameuser-log' => 'Tehnyt {{PLURAL:$1|yhden muokkauksen|$1 muokkausta}}. $2',
	'renameuser-move-log' => 'Siirretty automaattisesti tunnukselta �[[User:$1|$1]]� tunnukselle �[[User:$2|$2]]�',
	'right-renameuser' => 'Nimetä käyttäjätunnuksia uudelleen',
	'renameuser-renamed-notice' => 'Tämä käyttäjä on nimetty uudelleen.
Alla on ote tunnusten vaihtolokista.',
);

/** Faroese (Føroyskt)
 * @author EileenSanda
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'renameuser' => 'Umdoyp brúkara',
	'renameuser-linkoncontribs' => 'umdoyp brúkara',
	'renameuser-linkoncontribs-text' => 'Umdoyp henda brúkara',
	'renameuserold' => 'Rætta brúkaranavn:',
	'renameusernew' => 'Nýtt brúkaranavn:',
	'renameuserreason' => 'Orsøk til nýtt navn:',
	'renameuserwarnings' => 'Ávaringar:',
	'renameuserconfirm' => 'Ja, gev hesum brúkara nýtt navn',
	'renameusersubmit' => 'Send inn',
	'renameusererrordoesnotexist' => 'Brúkarin "<nowiki>$1</nowiki>" er ikki til.',
	'renameusererrorexists' => 'Brúkarin "<nowiki>$1</nowiki>" er long til.',
	'renameusererrorinvalid' => 'Brúkaranavnið "<nowiki>$1</nowiki>" er ógyldugt.',
	'renameuser-error-request' => 'Har var ein trupulleiki við at móttaka fyrispurningin.
Vinarliga far aftur og royn enn einaferð.',
	'renameuser-page-moved' => 'Síðan $1 er blivin flutt til $2.',
	'renameuser-page-unmoved' => 'Síðan $1 kundi ikki verða flutt til $2.',
	'renameuserlogentry' => 'umdoypti $1 til "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 rætting|$1 rættingar}}. Orsøk: $2',
	'right-renameuser' => 'Umdoyp brúkarar',
	'renameuser-renamed-notice' => 'Hesin brúkari hevur fingið nýtt navn.
Loggurin fyri navnabroytingina er givin niðanfyri fyri keldu ávísing.',
);

/** French (Français)
 * @author Cedric31
 * @author Crochet.david
 * @author Grondin
 * @author Hégésippe Cormier
 * @author IAlex
 * @author Peter17
 * @author PieRRoMaN
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'renameuser' => 'Renommer lutilisateur',
	'renameuser-linkoncontribs' => 'renommer lutilisateur',
	'renameuser-linkoncontribs-text' => 'Renommer cet utilisateur',
	'renameuser-desc' => "Renomme un utilisateur (nécessite les droits de ''renameuser'')",
	'renameuserold' => 'Nom actuel de lutilisateur :',
	'renameusernew' => 'Nouveau nom de lutilisateur :',
	'renameuserreason' => 'Motif du changement de nom :',
	'renameusermove' => 'Renommer toutes les pages de lutilisateur vers le nouveau nom',
	'renameusersuppress' => 'Ne pas créer de redirection vers le nouveau nom',
	'renameuserreserve' => 'Réserver lancien nom pour un usage futur',
	'renameuserwarnings' => 'Avertissements :',
	'renameuserconfirm' => 'Oui, renommer lutilisateur',
	'renameusersubmit' => 'Soumettre',
	'renameusererrordoesnotexist' => 'Lutilisateur « <nowiki>$1</nowiki> » nexiste pas',
	'renameusererrorexists' => 'Lutilisateur « <nowiki>$1</nowiki> » existe déjà',
	'renameusererrorinvalid' => 'Le nom dutilisateur « <nowiki>$1</nowiki> » nest pas valide',
	'renameuser-error-request' => 'Un problème existe avec la réception de la requête. Revenez en arrière et essayez à nouveau.',
	'renameuser-error-same-user' => 'Vous ne pouvez pas renommer un utilisateur du même nom quauparavant.',
	'renameusersuccess' => 'Lutilisateur « <nowiki>$1</nowiki> » a été renommé « <nowiki>$2</nowiki> »',
	'renameuser-page-exists' => 'La page $1 existe déjà et ne peut pas être automatiquement remplacée.',
	'renameuser-page-moved' => 'La page $1 a été déplacée vers $2.',
	'renameuser-page-unmoved' => 'La page $1 ne peut pas être renommée en $2.',
	'renameuserlogpage' => 'Journal des changements de noms dutilisateurs',
	'renameuserlogpagetext' => 'Ceci est lhistorique des changements de noms dutilisateur',
	'renameuserlogentry' => 'a renommé « $1 » en « $2 »',
	'renameuser-log' => '$1 modification{{PLURAL:$1||s}}. Motif : $2',
	'renameuser-move-log' => 'Page déplacée automatiquement lorsque lutilisateur « [[User:$1|$1]] » est devenu « [[User:$2|$2]] »',
	'right-renameuser' => 'Renommer des utilisateurs',
	'renameuser-renamed-notice' => 'Cet utilisateur a été renommé.
Le journal des renommages est disponible ci-dessous pour information.',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'renameuser' => 'Renomar lutilisator',
	'renameuser-linkoncontribs' => 'renomar lusanciér',
	'renameuser-linkoncontribs-text' => 'Renomar ceti usanciér',
	'renameuser-desc' => "Apond una [[Special:Renameuser|pâge spèciâla]] por renomar un usanciér (at fôta des drêts de ''renameuser'').",
	'renameuserold' => 'Nom dora a lusanciér :',
	'renameusernew' => 'Novél nom a lusanciér :',
	'renameuserreason' => 'Rêson du changement de nom :',
	'renameusermove' => 'Renomar totes les pâges a lusanciér vers lo novél nom',
	'renameusersuppress' => 'Pas fâre de redirèccion de vers lo novél nom',
	'renameuserreserve' => 'Resèrvar lo viely nom por un usâjo a vegnir',
	'renameuserwarnings' => 'Avèrtissements :',
	'renameuserconfirm' => 'Ouè, renomar lusanciér',
	'renameusersubmit' => 'Sometre',
	'renameusererrordoesnotexist' => 'Lusanciér « <nowiki>$1</nowiki> » ègziste pas.',
	'renameusererrorexists' => 'Lusanciér « <nowiki>$1</nowiki> » ègziste ja.',
	'renameusererrorinvalid' => 'Lo nom dutilisator « <nowiki>$1</nowiki> » est envalido.',
	'renameuser-error-request' => 'Un problèmo ègziste avouéc la reçua de la requéta.
Volyéd tornar arriér et pués tornar èprovar.',
	'renameuser-error-same-user' => 'Vos pouede pas renomar un usanciér du mémo nom que dês devant.',
	'renameusersuccess' => 'Lusanciér « <nowiki>$1</nowiki> » at étâ renomâ en « <nowiki>$2</nowiki> ».',
	'renameuser-page-exists' => 'La pâge $1 ègziste ja et pôt pas étre remplaciê ôtomaticament.',
	'renameuser-page-moved' => 'La pâge $1 at étâ dèplaciê vers $2.',
	'renameuser-page-unmoved' => 'La pâge $1 pôt pas étre renomâ en $2.',
	'renameuserlogpage' => 'Jornal des changements de nom dutilisator',
	'renameuserlogpagetext' => 'O est lo jornal des changements de nom dutilisator.',
	'renameuserlogentry' => 'at renomâ « $1 » en « $2 »',
	'renameuser-log' => '$1 changement{{PLURAL:$1||s}}. Rêson : $2',
	'renameuser-move-log' => 'Pâge dèplaciê ôtomaticament quand lusanciér « [[User:$1|$1]] » est vegnu « [[User:$2|$2]] »',
	'right-renameuser' => 'Renomar des utilisators',
	'renameuser-renamed-notice' => 'Ceti usanciér at étâ renomâ.
Lo jornal des changements de nom est disponiblo ce-desot por enformacion.',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'renameuser' => 'Cambie non par un utent',
	'renameuserold' => 'Non utent atuâl:',
	'renameusernew' => 'Gnûf non utent:',
	'renameuserwarnings' => 'Avîs:',
);

/** Western Frisian (Frysk)
 * @author SK-luuut
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'renameuser' => 'Feroarje in meidochnamme',
	'renameuser-desc' => "Foeget in [[Special:Renameuser|spesiale side]] ta om in meidoggersnamme te feroarjen (jo hawwe hjirfoar it ''renameuser'' rjocht nedich)",
	'renameuserold' => 'Alde namme:',
	'renameusernew' => 'Nije namme:',
	'renameuserreason' => 'Reden foar nammewiziging:',
	'renameusermove' => 'Werneam meidogger en oerlis siden (mei ûnderlizzende siden) nei de nije namme',
	'renameuserreserve' => 'Takomst brûken fan de âlde meidoggersnamme foarkomme',
	'renameuserwarnings' => 'Warskôgings:',
	'renameuserconfirm' => 'Ja, feroarje de namme fan de meidogger',
	'renameusersubmit' => 'Feroarje',
	'renameusererrordoesnotexist' => 'Der is gjin meidogger mei de namme "<nowiki>$1</nowiki>"',
	'renameusererrorexists' => 'De meidochnamme "<nowiki>$1</nowiki>" wurdt al brûkt.',
	'renameusererrorinvalid' => 'De meidochnamme "<nowiki>$1</nowiki>" mei net.',
	'renameuser-error-request' => "Der wie in probleem mei it ferwurkjen fan de oanfraach.
Gean tebek en probearje it asjebleaft op 'e nij.",
	'renameuser-error-same-user' => 'Jo kinne in meidoggersnamme net nei deselde namme feroarje.',
	'renameusersuccess' => 'Meidogger "<nowiki>$1</nowiki>" is no meidogger "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'De side $1 bestiet al en kin net automatysk oerskreaun wurde.',
	'renameuser-page-moved' => 'Sidenamme $1 is feroare yn $2.',
	'renameuser-page-unmoved' => 'Sidenamme $1 koe net feroare wurde yn $2.',
	'renameuserlogpage' => 'Nammeferoar-loch',
	'renameuserlogpagetext' => 'Dit is in loch fan feroarings fan meidochnammen.',
	'renameuserlogentry' => 'hat de namme fan $1 feroare yn "$2"',
	'renameuser-log' => '{{PLURAL:$1|ien feroaring|$1 feroarings}}. Reden: $2',
	'renameuser-move-log' => 'Sidenamme automatysk feroare by it feroarjen fan de meidoggersnamme fan  "[[User:$1|$1]]" yn "[[User:$2|$2]]"',
	'right-renameuser' => 'Feroarje meidoggersnammen',
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'renameuser' => 'Athainmnigh úsáideoir',
	'renameuserold' => 'Ainm reatha úsáideora:',
	'renameusernew' => 'Ainm nua úsáideora:',
	'renameusersuccess' => 'Athainmníodh úsáideoir "<nowiki>$1</nowiki>" mar "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Tá leathanach "$1" ann chean féin; ní féidir ábhar a scríobh thairis go huathoibríoch.',
	'renameuserlogentry' => 'athainmníodh úsáideoir $1 mar "$2"',
	'renameuser-log' => '{{PLURAL:$1|Athrú amháin|$1 athruithe}}. Fáth: $2',
);

/** Galician (Galego)
 * @author Alma
 * @author Prevert
 * @author Toliño
 */
$messages['gl'] = array(
	'renameuser' => 'Mudar o nome do usuario',
	'renameuser-linkoncontribs' => 'cambiar o nome do usuario',
	'renameuser-linkoncontribs-text' => 'Cambiar o nome deste usuario',
	'renameuser-desc' => "Engade unha [[Special:Renameuser|páxina especial]] para renomear un usuario (precisa dereitos de ''renomear usuarios'')",
	'renameuserold' => 'Nome de usuario actual:',
	'renameusernew' => 'Novo nome de usuario:',
	'renameuserreason' => 'Razón para mudar o nome:',
	'renameusermove' => 'Mover as páxinas de usuario e de conversa (xunto coas subpáxinas) ao novo nome',
	'renameusersuppress' => 'Non crear a redirección cara ao novo nome',
	'renameuserreserve' => 'Reservar o nome de usuario vello para un uso posterior',
	'renameuserwarnings' => 'Avisos:',
	'renameuserconfirm' => 'Si, renomear este usuario',
	'renameusersubmit' => 'Enviar',
	'renameusererrordoesnotexist' => 'O usuario "<nowiki>$1</nowiki>" non existe.',
	'renameusererrorexists' => 'O usuario "<nowiki>$1</nowiki>" xa existe.',
	'renameusererrorinvalid' => 'O nome de usuario "<nowiki>$1</nowiki>" non é válido.',
	'renameuser-error-request' => 'Houbo un problema coa recepción da solicitude.
Volva atrás e inténteo de novo.',
	'renameuser-error-same-user' => 'Non pode mudar o nome dun usuario ao mesmo nome que tiña antes.',
	'renameusersuccess' => 'O nome de usuario de "<nowiki>$1</nowiki>" cambiou a "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'A páxina "$1" xa existe e non pode ser sobrescrita automaticamente.',
	'renameuser-page-moved' => 'A páxina "$1" foi movida a "$2".',
	'renameuser-page-unmoved' => 'A páxina "$1" non pode ser movida a "$2".',
	'renameuserlogpage' => 'Rexistro de cambios de nome de usuario',
	'renameuserlogpagetext' => 'Este é un rexistro dos cambios nos nomes de usuario.',
	'renameuserlogentry' => 'mudou o nome de "$1" a "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edición|$1 edicións}}. Razón: $2',
	'renameuser-move-log' => 'A páxina moveuse automaticamente cando se mudou o nome do usuario "[[User:$1|$1]]" a "[[User:$2|$2]]"',
	'right-renameuser' => 'Renomear usuarios',
	'renameuser-renamed-notice' => 'Este usuario foi renomeado.
Velaquí está o rexistro de cambios de nome de usuario por se quere consultalo.',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'renameusersubmit' => '��οβάλλειν',
	'renameuser-log' => '{{PLURAL:$1|1 μεταγραφή|$1 μεταγραφαί}}. Αίτία: $2',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'renameuser' => 'Benutzer umnänne',
	'renameuser-linkoncontribs' => 'Benutzer umnänne',
	'renameuser-linkoncontribs-text' => 'Dää Benutzer umnänne',
	'renameuser-desc' => "Ergänzt e [[Special:Renameuser|Spezialsyte]] fir d Umnännig vun eme Benutzer (brucht s ''renameuser''-Rächt)",
	'renameuserold' => 'Bishärige Benutzername:',
	'renameusernew' => 'Neije Benutzername:',
	'renameuserreason' => 'Grund:',
	'renameusermove' => 'Verschieb Benutzer-/Diskussionssyte mit Untersyte uf dr neij Benutzername',
	'renameusersuppress' => 'Kei Wyterleitig uf dr nej Benutzername aalege',
	'renameuserreserve' => 'Blockier dr alt Benutzername fir e Neijregischtrierig',
	'renameuserwarnings' => 'Warnige:',
	'renameuserconfirm' => 'Jo, Benutzer umnänne',
	'renameusersubmit' => 'Umnänne',
	'renameusererrordoesnotexist' => 'Dr Benutzername �<nowiki>$1</nowiki>� git s nit.',
	'renameusererrorexists' => 'Dr Benutzername �<nowiki>$1</nowiki>� git s scho.',
	'renameusererrorinvalid' => 'Dr Benutzername �<nowiki>$1</nowiki>� isch uugiltig.',
	'renameuser-error-request' => 'S het e Probläm bim Empfang vu dr Aafrog gee. Bitte nomol versueche.',
	'renameuser-error-same-user' => 'Dr alt und dr neij Benutzername sin identisch.',
	'renameusersuccess' => 'Dr Benutzer �<nowiki>$1</nowiki>� isch mit Erfolg in �<nowiki>$2</nowiki>� umgnännt wore.',
	'renameuser-page-exists' => 'D Syte $1 git s scho un cha nit automatisch iberschribe wäre.',
	'renameuser-page-moved' => 'D Syte $1 isch noch $2 verschobe wore.',
	'renameuser-page-unmoved' => 'D Syte $1 het nit chenne noch $2 verschobe wäre.',
	'renameuserlogpage' => 'Benutzernamenänderigs-Logbuech',
	'renameuserlogpagetext' => 'In däm Logbuech wäre d Änderige vu Benutzernäme protokolliert.',
	'renameuserlogentry' => 'het �$1� in �$2� umgnännt',
	'renameuser-log' => '{{PLURAL:$1|1 Bearbeitig|$1 Bearbeitige}}. Grund: $2',
	'renameuser-move-log' => 'dur d Umnännig vu �[[User:$1|$1]]� noch �[[User:$2|$2]]� automatisch verschobeni Syte',
	'right-renameuser' => 'Benutzer umnänne',
	'renameuser-renamed-notice' => 'Dää Benutzer isch umgnännt wore.
S Umnännigs-Logbuech wird do unte ufgfiert as Quälle.',
);

/** Gujarati (ગુજરાત�)
 * @author KartikMistry
 * @author Sushant savla
 */
$messages['gu'] = array(
	'renameuser' => 'સભ્યનામ બદલો',
	'renameuser-linkoncontribs' => 'સભ્યનામ બદલો',
	'renameuser-linkoncontribs-text' => 'આ સભ્યનું નામ બદલો',
	'renameuserold' => 'હાલનું સભ્યનામ:',
	'renameusernew' => 'નવું સભ્યનામ:',
	'renameuserreason' => 'નામ બદલવાનું કારણ:',
	'renameusermove' => 'સભ્ય અને ગપ્પાં પાનાંઓ (અને તેમનાં ઉપપાનાંઓ) નવાં નામ પર ખસેડો',
	'renameusersuppress' => 'નવા નામ પર દિશા નિર્દેશનો ન રચશો',
	'renameuserreserve' => 'જૂના સભ્યનામને ભવિષ્યનો વપરાશ પ્રતિબંધ�ત કરો',
	'renameuserwarnings' => 'ચેતવણ�ઓ:',
	'renameuserconfirm' => 'હા, સભ્યનું નામ બદલો',
	'renameusersubmit' => 'જમા કરો',
	'renameusererrordoesnotexist' => 'આ સભ્ય  "<nowiki>$1</nowiki>" મોજૂદ નથ�.',
	'renameusererrorexists' => 'આ સભ્ય  "<nowiki>$1</nowiki>" પહેલેથ� હાજર છે.',
	'renameusererrorinvalid' => 'સભ્યનામ "<nowiki>$1</nowiki>" અયોગ્ય છે.',
	'renameuser-error-request' => 'તમાર� અરજ� પ્રાપ્ત કરતાં કાંઈ ત્રુટ� થઈ
મહેરબાન� કર� ફર� પ્રયત્ન કરશો',
	'renameuser-error-same-user' => 'તમે સભ્યને ફર�થ� પહેલાનું નામ આપ� શકશો નહ�.',
	'renameusersuccess' => 'સભ્ય "<nowiki>$1</nowiki>" નું નામ બદલ�ને "<nowiki>$2</nowiki>" કરાયું છે.',
	'renameuser-page-exists' => 'પાનું  $1 પહેલેથ� અસ્તિત્વમાં છે તેના પર સ્વયંચલિત નવું લેખન ન થાય.',
	'renameuser-page-moved' => 'પાના $1 ને $2 પર ખસેડાયું',
	'renameuser-page-unmoved' => 'પાના $1ને $2 પર ન લઈ જઈ શકાયું',
	'renameuserlogpage' => 'સભ્ય નામફેરનો લોગ',
	'renameuserlogpagetext' => 'સભ્યના દ્વારા થયેલા ફેરફરન� આ સંપાદન યાદિ છે .',
	'renameuserlogentry' => '$1 નું નામ "$2" કર્યું',
	'renameuser-log' => '{{PLURAL:$1|૧ ફેરફાર|$1 ફેરફારો}}. કારણ: $2',
	'right-renameuser' => 'સભ્યોના નામ બદલો',
	'renameuser-renamed-notice' => 'આ સભ્યનું નામ પરિવર્તન થયું છે.
નામ પરિવર્તન લોગ તમારા સંદર્ભ માટે અહ�ં આપેલ છે',
);

/** Hebrew (עבר�ת)
 * @author Amire80
 * @author Ofekalef
 * @author Rotem Liss
 * @author YaronSh
 */
$messages['he'] = array(
	'renameuser' => 'ש�נו� שם משתמש',
	'renameuser-linkoncontribs' => 'ש�נו� שם משתמש',
	'renameuser-linkoncontribs-text' => 'ש�נו� שם המשתמש הזה',
	'renameuser-desc' => "הוספת [[Special:Renameuser|דף מ�וחד]] לש�נו� שם משתמש (דרושה הרשאת ''renameuser'')",
	'renameuserold' => 'שם משתמש נוכח�:',
	'renameusernew' => 'שם משתמש חדש:',
	'renameuserreason' => 'ס�בה לש�נו� השם:',
	'renameusermove' => 'העברת דפ� המשתמש והש�חה (כולל דפ� המשנה שלהם) לשם החדש',
	'renameusersuppress' => 'לא ל�צור הפנ�ות לשם החדש',
	'renameuserreserve' => 'חס�מת שם המשתמש ה�שן לש�מוש נוסף',
	'renameuserwarnings' => 'אזהרות:',
	'renameuserconfirm' => 'כן, לשנות את שם המשתמש',
	'renameusersubmit' => 'ש�נו� שם משתמש',
	'renameusererrordoesnotexist' => 'המשתמש "<nowiki>$1</nowiki>" א�נו ק��ם.',
	'renameusererrorexists' => 'המשתמש "<nowiki>$1</nowiki>" כבר ק��ם.',
	'renameusererrorinvalid' => 'שם המשתמש "<nowiki>$1</nowiki>" א�נו תק�ן.',
	'renameuser-error-request' => 'ה��תה בע�ה בקבלת הבקשה. אנא חזרו לדף הקודם ונסו שנ�ת.',
	'renameuser-error-same-user' => 'א�נכם �כול�ם לשנות את שם המשתמש לשם זהה לשמו ה�שן.',
	'renameusersuccess' => 'שם המשתמש של "<nowiki>$1</nowiki>" שונה ל"<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'הדף $1 כבר ק��ם ולא נ�תן לדרוס אותו אוטומט�ת.',
	'renameuser-page-moved' => 'הדף $1 הועבר ל$2.',
	'renameuser-page-unmoved' => 'לא נ�תן ה�ה להעב�ר את הדף $1 ל$2.',
	'renameuserlogpage' => '�ומן ש�נו�� שמות משתמש',
	'renameuserlogpagetext' => 'זהו �ומן הש�נו��ם בשמות המשתמש�ם.',
	'renameuserlogentry' => 'ש�נה את שם המשתמש "$1" ל־"$2"',
	'renameuser-log' => '{{PLURAL:$1|ער�כה אחת|$1 ער�כות}}. ס�בה: $2',
	'renameuser-move-log' => 'העברה אוטומט�ת בעקבות ש�נו� שם המשתמש "[[User:$1|$1]]" ל־"[[User:$2|$2]]"',
	'right-renameuser' => 'ש�נו� שמות משתמש',
	'renameuser-renamed-notice' => 'שם המשתמש הזה שונה.
�ומן ש�נו�� שמות המשתמש מוצג להלן.',
);

/** Hindi (हिन्द�)
 * @author Ansumang
 * @author Kaustubh
 */
$messages['hi'] = array(
	'renameuser' => 'सदस्यनाम बदलें',
	'renameuser-linkoncontribs' => 'सदस्यनाम बदलें',
	'renameuser-linkoncontribs-text' => 'इस सदस्य के नाम बदलें',
	'renameuser-desc' => "सदस्यनाम बदलें (''सदस्यनाम बदलने अधिकार'' अनिवार्य)",
	'renameuserold' => 'सद्य सदस्यनाम:',
	'renameusernew' => 'नया सदस्यनाम:',
	'renameuserreason' => 'नाम बदलने के कारण:',
	'renameusermove' => 'सदस्य पृष्ठ और वार्ता पृष्ठ (और उनके सबपेज) नये नाम क� ओर भेजें',
	'renameusersuppress' => 'नूतन नाम को अनुप्रेषित ना करें',
	'renameuserreserve' => 'पुरान� सदस्यनाम को अवरोध करें',
	'renameuserwarnings' => 'चेतावन�:',
	'renameuserconfirm' => 'हाँ, सदस्य के नाम बदलें',
	'renameusersubmit' => 'भेजें',
	'renameusererrordoesnotexist' => 'सदस्य "<nowiki>$1</nowiki>" अस्तित्वमें नह�ं हैं।',
	'renameusererrorexists' => 'सदस्य "<nowiki>$1</nowiki>" पहले से अस्तित्वमें हैं।',
	'renameusererrorinvalid' => 'सदस्यनाम "<nowiki>$1</nowiki>" गलत हैं।',
	'renameuser-error-request' => 'यह मांग पूर� करने मे समस्या आई हैं।
कृपया प�छे जाकर फिरसे यत्न करें।',
	'renameuser-error-same-user' => 'आप सदस्यनाम को उस� नामसे बदल नह�ं सकते हैं।',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" का सदस्यनाम "<nowiki>$2</nowiki>" कर दिया गया हैं।',
	'renameuser-page-exists' => '$1 यह पन्ना पहले से अस्तित्वमें हैं और इसपर अपने आप पुनर्लेखन नह�ं कर सकतें।',
	'renameuser-page-moved' => '$1 का नाम बदलकर $2 कर दिया गया हैं।',
	'renameuser-page-unmoved' => '$1 का नाम बदलकर $2 नह�ं कर सकें हैं।',
	'renameuserlogpage' => 'सदस्यनाम बदलाव सूच�',
	'renameuserlogpagetext' => 'यह सदस्यनामोंमें हुए बदलावोंक� सूच� हैं',
	'renameuserlogentry' => 'ने $1 को "$2" में बदल दिया हैं',
	'renameuser-log' => '{{PLURAL:$1|1 बदलाव|$1 बदलाव}}. कारण: $2',
	'renameuser-move-log' => '"[[User:$1|$1]]" को "[[User:$2|$2]]" करते वक्त अपने आप सदस्यपृष्ठ बदल दिया हैं',
	'right-renameuser' => 'सदस्योंके नाम बदलें',
	'renameuser-renamed-notice' => 'इस सदस्य का नाम बदल दिया गया है।
संदर्भ के लिए न�चे नाम बदलने का चिट्ठा है।',
);

/** Fiji Hindi (Latin script) (Fiji Hindi)
 * @author Thakurji
 */
$messages['hif-latn'] = array(
	'renameuser' => 'Sadasya ke naam badlo',
	'renameuser-desc' => "[[Special:Renameuser|special panna]] ke jorro ek sadasya  ke naam badle ke khatir (''renameuser'' ke hak maange hai)",
	'renameuserold' => 'Abhi ke username:',
	'renameusernew' => 'Nawaa username:',
	'renameuserreason' => 'Naam badle ke kaaran:',
	'renameusermove' => 'Sadasya aur salah waala panna (aur uske sub-panna) ke naam badlo',
	'renameuserreserve' => 'Purana username ke aage use kare se roko',
	'renameuserwarnings' => 'Chetauni:',
	'renameuserconfirm' => 'Haan, sadasya ke naam badlo',
	'renameusersubmit' => 'Submit karo',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" naam ke koi sadasya nai hai.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" naam ke ek sadasya abhi hai.',
	'renameusererrorinvalid' => 'Username "<nowiki>$1</nowiki>" kharaab hai.',
	'renameuser-error-request' => 'Request ke le me kuchh karrbarr bhais hai.
Meharbani kar ke laut ke fir kosis karo.',
	'renameuser-error-same-user' => 'Aap sadasya ke naam ke badal ke pahile waala naam nai kare sakta hai.',
	'renameusersuccess' => 'Sadasya "<nowiki>$1</nowiki>" ke naam badal ke "<nowiki>$2</nowiki>" kar dewa gais hai.',
	'renameuser-page-exists' => 'Panna $1 abhi hai aur iske apne se overwrite nai karaa jaae sake hai.',
	'renameuser-page-moved' => 'Panna $1 ke naam badal ke $2 kar dewa gais hai.',
	'renameuser-page-unmoved' => 'Panna $1 ke naam badal ke $2 nai kare sakaa hai.',
	'renameuserlogpage' => 'Sadasya ke naam badle ke log',
	'renameuserlogpagetext' => 'Ii ek sadasya ke naam badle ke log hai.',
	'renameuserlogentry' => '$1 ke naam badal ke "$2" kar dewa gais hai',
	'renameuser-log' => '{{PLURAL:$1|1 badlao|$1 badlao}}. Kaaran: $2',
	'renameuser-move-log' => 'Automatically panna ke move kar diya hai jab ki sadasya ke naam  "[[User:$1|$1]]" se badal ke "[[User:$2|$2]]" kar dewa gais hai',
	'right-renameuser' => 'Sadasya log ke naam badlo',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author Dnik
 * @author Ex13
 * @author SpeedyGonsales
 * @author Tivek
 */
$messages['hr'] = array(
	'renameuser' => 'Preimenuj suradnika',
	'renameuser-linkoncontribs' => 'preimenuj suradnika',
	'renameuser-linkoncontribs-text' => 'Preimenuj ovog suradnika',
	'renameuser-desc' => "Dodaje [[Special:Renameuser|posebnu stranicu]] za preimenovanje suradnika (potrebno je ''renameuser'' pravo)",
	'renameuserold' => 'Trenutačno suradničko ime:',
	'renameusernew' => 'Novo suradničko ime:',
	'renameuserreason' => 'Razlog za preimenovanje:',
	'renameusermove' => 'Premjesti suradnikove stranice (glavnu, stranicu za razgovor i podstranice, ako postoje) na novo ime',
	'renameusersuppress' => 'Ne kreiraj preusmjeravanja na novo ime',
	'renameuserreserve' => 'Zadrži staro suradničko ime od daljnje upotrebe',
	'renameuserwarnings' => 'Upozorenja:',
	'renameuserconfirm' => 'Da, preimenuj suradnika',
	'renameusersubmit' => 'Potvrdi',
	'renameusererrordoesnotexist' => 'Suradnik "<nowiki>$1</nowiki>" ne postoji (suradničko ime nije zauzeto).',
	'renameusererrorexists' => 'Suradničko ime "<nowiki>$1</nowiki>" već postoji',
	'renameusererrorinvalid' => 'Suradničko ime "<nowiki>$1</nowiki>" nije valjano',
	'renameuser-error-request' => 'Pojavio se problem sa zaprimanjem zahtjeva. Molimo, vratite se i probajte ponovo.',
	'renameuser-error-same-user' => 'Ne možete preimenovati suradnika u isto kao prethodno.',
	'renameusersuccess' => 'Suradnik "<nowiki>$1</nowiki>" je preimenovan u "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Stranica $1 već postoji i ne može biti prepisana.',
	'renameuser-page-moved' => 'Suradnikova stranica $1 je premještena, sad se zove: $2.',
	'renameuser-page-unmoved' => 'Stranica $1 ne može biti preimenovana u $2.',
	'renameuserlogpage' => 'Evidencija preimenovanja suradnika',
	'renameuserlogpagetext' => 'Ovo je evidencija preimenovanja suradničkih imena',
	'renameuserlogentry' => 'promijenjeno suradničko ime $1 u "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 uređivanje|$1 uređivanja}}. Razlog: $2',
	'renameuser-move-log' => 'Stranica suradnika je premještena prilikom preimenovanja iz "[[User:$1|$1]]" u "[[User:$2|$2]]"',
	'right-renameuser' => 'Preimenovati suradnike',
	'renameuser-renamed-notice' => 'Ovaj suradnik je preimenovan.
Evidencija preimenovanja suradnika je prikazana ispod kao obavijest.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Dundak
 * @author Michawiki
 */
$messages['hsb'] = array(
	'renameuser' => 'Wužiwarja p�emjenować',
	'renameuser-linkoncontribs' => 'wužiwarja p�emjenować',
	'renameuser-linkoncontribs-text' => 'Tutoho wužiwarja p�emjenować',
	'renameuser-desc' => "Wužiwarja p�emjenować (požada prawo ''renameuser'')",
	'renameuserold' => 'Tuchwilne wužiwarske mjeno:',
	'renameusernew' => 'Nowe wužiwarske mjeno:',
	'renameuserreason' => 'P�ičina za p�emjenowanje:',
	'renameusermove' => 'Wužiwarsku stronu a wužiwarsku diskusiju (a jeju podstrony) na nowe mjeno p�esunyć',
	'renameusersuppress' => 'Dalesposrědkowanja k nowemu mjenu njewutworić',
	'renameuserreserve' => 'Stare wužiwarske mjeno za p�ichodne wužiwanje blokować',
	'renameuserwarnings' => 'Warnowanja:',
	'renameuserconfirm' => 'Haj, wužiwarja p�emjenować',
	'renameusersubmit' => 'Składować',
	'renameusererrordoesnotexist' => 'Wužiwarske mjeno �<nowiki>$1</nowiki>� njeeksistuje.',
	'renameusererrorexists' => 'Wužiwarske mjeno �<nowiki>$1</nowiki>� hižo eksistuje.',
	'renameusererrorinvalid' => 'Wužiwarske mjeno �<nowiki>$1</nowiki>� njeje płaćiwe.',
	'renameuser-error-request' => 'Problem je p�i p�ijimanju požadanja wustupił. Prošu dźi wróćo a spytaj hišće raz.',
	'renameuser-error-same-user' => 'Njemóžeš wužiwarja do samsneje wěcy kaž prjedy p�emjenować.',
	'renameusersuccess' => 'Wužiwar �<nowiki>$1</nowiki>� bu wuspěšnje na �<nowiki>$2</nowiki>� p�emjenowany.',
	'renameuser-page-exists' => 'Strona $1 hižo eksistuje a njemóže so awtomatisce p�episować.',
	'renameuser-page-moved' => 'Strona $1 bu pod nowy titul $2 p�esunjena.',
	'renameuser-page-unmoved' => 'Njemóžno stronu $1 pod titul $2 p�esunyć.',
	'renameuserlogpage' => 'Protokol p�emjenowanja wužiwarjow',
	'renameuserlogpagetext' => 'Tu protokoluja so wšě p�emjenowanja wužiwarjow.',
	'renameuserlogentry' => 'je $1 do "$2" p�emjenował',
	'renameuser-log' => '{{PLURAL:$1|1 změna|$1 změnje|$1 změny|$1 změnow}}. P�ičina: $2',
	'renameuser-move-log' => 'P�ez p�emjenowanje wužiwarja �[[User:$1|$1]]� na �[[User:$2|$2]]� awtomatisce p�esunjena strona.',
	'right-renameuser' => 'Wužiwarjow p�emjenować',
	'renameuser-renamed-notice' => 'Tutón wužiwar je so p�emjenował.
Protokol p�emjenowanjow je deleka jako referenca podaty.',
);

/** Hungarian (Magyar)
 * @author Adam78
 * @author Dani
 * @author Tgr
 */
$messages['hu'] = array(
	'renameuser' => 'Szerkesztő átnevezése',
	'renameuser-linkoncontribs' => 'felhasználó átnevezése',
	'renameuser-linkoncontribs-text' => 'Felhasználó átnevezése',
	'renameuser-desc' => "Lehetővé teszi egy felhasználó átnevezését (''renameuser'' jog szükséges)",
	'renameuserold' => 'Jelenlegi felhasználónév:',
	'renameusernew' => 'Új felhasználónév:',
	'renameuserreason' => 'Átnevezés oka:',
	'renameusermove' => 'Felhasználói- és vitalapok (és azok allapjainak) áthelyezése az új név alá',
	'renameusersuppress' => 'Ne készüljön átirányítás az új névre',
	'renameuserreserve' => 'Régi név blokkolása a jövőbeli használat megakadályozására',
	'renameuserwarnings' => 'Figyelmeztetések:',
	'renameuserconfirm' => 'Igen, nevezd át a szerkesztőt',
	'renameusersubmit' => 'Elküld',
	'renameusererrordoesnotexist' => 'Nem létezik �<nowiki>$1</nowiki>� nevű felhasználó',
	'renameusererrorexists' => 'Már létezik �<nowiki>$1</nowiki>� nevű felhasználó',
	'renameusererrorinvalid' => 'A felhasználónév (�<nowiki>$1</nowiki>�) érvénytelen',
	'renameuser-error-request' => 'Hiba történt a lekérdezés küldése közben.  Menj vissza az előző oldalra és próbáld újra.',
	'renameuser-error-same-user' => 'Nem nevezhetsz át egy felhasználót a meglévő nevére.',
	'renameusersuccess' => '�<nowiki>$1</nowiki>� sikeresen át lett nevezve �<nowiki>$2</nowiki>� névre.',
	'renameuser-page-exists' => '$1 már létezik, és nem lehet automatikusan felülírni.',
	'renameuser-page-moved' => '$1 át lett nevezve $2 névre',
	'renameuser-page-unmoved' => '$1-t nem sikerült $2 névre nevezi',
	'renameuserlogpage' => 'Felhasználóátnevezési napló',
	'renameuserlogpagetext' => 'Ez a felhasználói nevek változtatásának naplója.',
	'renameuserlogentry' => 'átnevezte $1 azonosítóját (az új név: �$2�)',
	'renameuser-log' => '$1 szerkesztése van. Indoklás: $2',
	'renameuser-move-log' => '�[[User:$1|$1]]� �[[User:$2|$2]]� névre való átnevezése közben automatikusan átnevezett oldal',
	'right-renameuser' => 'felhasználók átnevezése',
	'renameuser-renamed-notice' => 'Ezt a szerkesztőt átnevezték.
Alább látható a szerkesztőátnevezési napló tájékoztatásként.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'renameuser' => 'Renominar usator',
	'renameuser-linkoncontribs' => 'renominar usator',
	'renameuser-linkoncontribs-text' => 'Renominar iste usator',
	'renameuser-desc' => "Adde un [[Special:Renameuser|pagina special]] pro renominar un usator (require le privilegio ''renameuser'')",
	'renameuserold' => 'Nomine de usator actual:',
	'renameusernew' => 'Nove nomine de usator:',
	'renameuserreason' => 'Motivo del renomination:',
	'renameusermove' => 'Renominar etiam le paginas de usator e de discussion (e lor subpaginas) verso le nove nomine',
	'renameusersuppress' => 'Non crear redirectiones al nove nomine',
	'renameuserreserve' => 'Blocar le ancian nomine de usator de esser usate in le futuro',
	'renameuserwarnings' => 'Advertimentos:',
	'renameuserconfirm' => 'Si, renomina le usator',
	'renameusersubmit' => 'Submitter',
	'renameusererrordoesnotexist' => 'Le usator "<nowiki>$1</nowiki>" non existe.',
	'renameusererrorexists' => 'Le usator ""<nowiki>$1</nowiki>"" existe ja.',
	'renameusererrorinvalid' => 'Le nomine de usator "<nowiki>$1</nowiki>" es invalide.',
	'renameuser-error-request' => 'Il habeva un problema con le reception del requesta.
Per favor retorna e reproba.',
	'renameuser-error-same-user' => 'Tu non pote renominar un usator al mesme nomine.',
	'renameusersuccess' => 'Le usator "<nowiki>$1</nowiki>" ha essite renominate a "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Le pagina $1 existe ja e non pote esser automaticamente superscribite.',
	'renameuser-page-moved' => 'Le pagina $1 ha essite renominate a $2.',
	'renameuser-page-unmoved' => 'Le pagina $1 non poteva esser renominate a $2.',
	'renameuserlogpage' => 'Registro de renominationes de usatores',
	'renameuserlogpagetext' => 'Isto es un registro de cambiamentos de nomines de usator.',
	'renameuserlogentry' => 'renominava $1 verso "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 modification|$1 modificationes}}. Motivo: $2',
	'renameuser-move-log' => 'Le pagina ha essite automaticamente renominate con le renomination del usator "[[User:$1|$1]]" a "[[User:$2|$2]]"',
	'right-renameuser' => 'Renominar usatores',
	'renameuser-renamed-notice' => 'Iste usator ha essite renominate.
Le registro de renominationes es providite ci infra pro referentia.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'renameuser' => 'Penggantian nama pengguna',
	'renameuser-linkoncontribs' => 'mengubah nama pengguna',
	'renameuser-linkoncontribs-text' => 'Ubah nama pengguna ini',
	'renameuser-desc' => "Mengganti nama pengguna (perlu hak akses ''renameuser'')",
	'renameuserold' => 'Nama sekarang:',
	'renameusernew' => 'Nama baru:',
	'renameuserreason' => 'Alasan penggantian nama:',
	'renameusermove' => 'Pindahkan halaman pengguna dan pembicaraannya (berikut subhalamannya) ke nama baru',
	'renameusersuppress' => 'Jangan membuat pengalihan untuk nama baru',
	'renameuserreserve' => 'Cadangkan nama pengguna lama sehingga tidak dapat digunakan lagi',
	'renameuserwarnings' => 'Peringatan:',
	'renameuserconfirm' => 'Ya, ganti nama pengguna tersebut',
	'renameusersubmit' => 'Kirim',
	'renameusererrordoesnotexist' => 'Pengguna "<nowiki>$1</nowiki>" tidak ada',
	'renameusererrorexists' => 'Pengguna "<nowiki>$1</nowiki>" telah ada',
	'renameusererrorinvalid' => 'Nama pengguna "<nowiki>$1</nowiki>" tidak sah',
	'renameuser-error-request' => 'Ada masalah dalam pemrosesan permintaan. Silakan kembali dan coba lagi.',
	'renameuser-error-same-user' => 'Anda tak dapat mengganti nama pengguna sama seperti asalnya.',
	'renameusersuccess' => 'Pengguna "<nowiki>$1</nowiki>" telah diganti namanya menjadi "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Halaman $1 telah ada dan tidak dapat ditimpa secara otomatis.',
	'renameuser-page-moved' => 'Halaman $1 telah dipindah ke $2.',
	'renameuser-page-unmoved' => 'Halaman $1 tidak dapat dipindah ke $2.',
	'renameuserlogpage' => 'Log penggantian nama pengguna',
	'renameuserlogpagetext' => 'Di bawah ini adalah log penggantian nama pengguna',
	'renameuserlogentry' => 'telah mengganti nama $1 menjadi "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 suntingan|$1 suntingan}}. Alasan: $2',
	'renameuser-move-log' => 'Secara otomatis memindahkan halaman sewaktu mengganti nama pengguna "[[User:$1|$1]]" menjadi "[[User:$2|$2]]"',
	'right-renameuser' => 'Mengganti nama pengguna',
	'renameuser-renamed-notice' => 'Penguna ini telah berganti nama.
Log pergantian nama disediakan di bawah untuk referensi.',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'renameuserwarnings' => 'Ngéntị:',
	'renameusersubmit' => 'Dànyé',
	'renameuser-page-moved' => 'Ihü $1 a páfùrù gá $2.',
	'renameuser-page-unmoved' => 'Ihü $1 énweghịkị páfù gá $2.',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'renameuser' => 'Naganan ti agar-aramat',
	'renameuser-linkoncontribs' => 'naganan ti agar-aramat',
	'renameuser-linkoncontribs-text' => 'Naganan daytoy nga agar-aramat',
	'renameuser-desc' => "Agnayon ti [[Special:Renameuser|naipangruna a panid]] nga agpanagan ti agar-aramat (masapul ti ''naganan ti agar-aramat'' a karbengan)",
	'renameuserold' => 'Agdama a nagan ti agar-aramat:',
	'renameusernew' => 'Baro a nagan ti agar-aramat:',
	'renameuserreason' => 'Rason ti panagnagan:',
	'renameusermove' => 'Iyalis ti agar-aramat ket tungtungan a pampanid (ken dagiti ap-apo a panid) iti baro a nagan',
	'renameusersuppress' => 'Saan nga agaramid kadagiti baw-ing iti baro a nagan',
	'renameuserreserve' => 'Serraan ti daan a nagan ti agar-aramat manipud ti masakbayan a pag-usar.',
	'renameuserwarnings' => 'Dagiti ballaag:',
	'renameuserconfirm' => 'Wen, naganan ti agar-aramat',
	'renameusersubmit' => 'Ited',
	'renameusererrordoesnotexist' => 'Ti agar-aramat "<nowiki>$1</nowiki>" ket awan.',
	'renameusererrorexists' => 'Ti agar-aramat "<nowiki>$1</nowiki>" ket addaanen.',
	'renameusererrorinvalid' => 'Ti nagan ti agar-aramat "<nowiki>$1</nowiki>" ket imbalido.',
	'renameuser-error-request' => 'Adda pakirut ti pinakaala ti kiddaw.
Pangngaasi nga agsubli ken padasen manen.',
	'renameuser-error-same-user' => 'Saan mo a managanan ti agar-aramat a kasdi.',
	'renameusersuccess' => 'Ti agar-aramat "<nowiki>$1</nowiki>" ket nanaganan iti "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Ti panid a $1 ket addaan ken saan a mautomatiko a suratan manen.',
	'renameuser-page-moved' => 'Ti panid $1 ket naiyalis idiay $2.',
	'renameuser-page-unmoved' => 'Ti panid  $1 ket saan a maiyalis idiay $2.',
	'renameuserlogpage' => 'Listaan ti panagnagan ti agar-aramat',
	'renameuserlogpagetext' => 'Listaan daytoy kadagiti sinukatan a nag-nagan ti agararamat.',
	'renameuserlogentry' => 'ninaganan $1 iti "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 urnos|$1 ur-urnos}}. Rason: $2',
	'renameuser-move-log' => 'Automatiko nga iyalis ti panid bayat nagnaganan ti agar-aramat "[[User:$1|$1]]" iti "[[User:$2|$2]]"',
	'right-renameuser' => 'Naganan dagiti agar-aramat',
	'renameuser-renamed-notice' => 'Nanaganen daytoy nga agar-aramat.
Ti listaan ti nagnaganan ket naited dita baba para iti reperensia.',
);

/** Ido (Ido)
 * @author Malafaya
 * @author Wyvernoid
 */
$messages['io'] = array(
	'renameuser' => 'Rinomar uzanto',
	'renameuserold' => 'Aktuala uzantonomo:',
	'renameusernew' => 'Nova uzantonomo:',
	'renameuserwarnings' => 'Averti:',
	'renameuserconfirm' => "Yes, rinomez l'uzanto",
	'renameusererrordoesnotexist' => 'L\'uzanto "<nowiki>$1</nowiki>" ne existas.',
	'renameusererrorexists' => 'L\'uzanto "<nowiki>$1</nowiki>" ja existas.',
	'renameusererrorinvalid' => 'L\'uzantonomo "<nowiki>$1</nowiki>" esas ne-valida.',
	'renameuser-error-same-user' => 'Vu ne povas renomar uzanto ad la sama nomo.',
	'renameusersuccess' => 'La uzanto "<nowiki>$1</nowiki>" rinomesis "<nowiki>$2</nowiki>".',
	'renameuser-page-moved' => 'La pagino $1 movesis a $2.',
	'renameuser-page-unmoved' => 'On ne povis movar la pagino $1 a $2.',
	'renameuserlogpage' => 'Registro di uzanto-rinomizuri',
	'renameuserlogpagetext' => 'Ito es registro di uzantonomala chanji.',
	'renameuserlogentry' => 'rinomis $1 por "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redakto|$1 redakti}}. Motivo: $2',
	'right-renameuser' => 'Rinomar uzanti',
);

/** Icelandic (Íslenska)
 * @author Cessator
 * @author S.Örvarr.S
 * @author Snævar
 * @author Spacebirdy
 * @author Ævar Arnfjörð Bjarmason
 * @author לער� ר��נהארט
 */
$messages['is'] = array(
	'renameuser' => 'Breyta notandanafni',
	'renameuser-linkoncontribs' => 'breyta notendanafni',
	'renameuser-linkoncontribs-text' => 'breyta notendanafni notandans',
	'renameuser-desc' => "Bætir við [[Special:Renameuser|kerfissíðu]] til að breyta notendanafni (þarfnast ''renameuser'' réttinda)",
	'renameuserold' => 'Núverandi notandanafn:',
	'renameusernew' => 'Nýja notandanafnið:',
	'renameuserreason' => 'Ástæða:',
	'renameusermove' => 'Færa notendasíðu og notendaspjallsíðu (og undirsíður þeirra) á nýja nafnið',
	'renameusersuppress' => 'Ekki skilja eftir tilvísun',
	'renameuserreserve' => 'Banna notkun á gamla notendanafninu',
	'renameuserwarnings' => 'Viðvaranir:',
	'renameuserconfirm' => 'Já, breyta nafni notandans',
	'renameusersubmit' => 'Senda',
	'renameusererrordoesnotexist' => 'Notandinn �<nowiki>$1</nowiki>� er ekki til',
	'renameusererrorexists' => 'Notandinn �<nowiki>$1</nowiki>� er nú þegar til',
	'renameusererrorinvalid' => 'Notandanafnið �<nowiki>$1</nowiki>� er ógilt',
	'renameuser-error-request' => 'Mistókst að sækja beiðnina um breytingu notendanafnsins.
Vinsamlegast farðu til baka og reyndu aftur.',
	'renameuser-error-same-user' => 'Óheimilt er að breyta nafni notanda aftur á það notendanafn sem hann hafði áður.',
	'renameusersuccess' => 'Nafn notandans "<nowiki>$1</nowiki>" hefur verið breytt í "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Síða sem heitir $1 er nú þegar til og það er ekki hægt að búa til nýja grein með sama heiti.',
	'renameuser-page-moved' => 'Síðan $1 hefur verið færð á $2.',
	'renameuser-page-unmoved' => 'Ekki var hægt að færa síðuna $1 á $2.',
	'renameuserlogpage' => 'Skrá yfir nafnabreytingar notenda',
	'renameuserlogpagetext' => 'Þetta er skrá yfir nýlegar breytingar á notendanöfnum.',
	'renameuserlogentry' => 'breytti nafni $1 í "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 breyting|$1 breytingar}}. Ástæða: $2',
	'renameuser-move-log' => 'Færði síðuna sjálfvirkt þegar notendanafni "[[User:$1|$1]]" var breytt í "[[User:$2|$2]]"',
	'right-renameuser' => 'Breyta notandanafni notenda',
	'renameuser-renamed-notice' => 'Nafni notandans hefur verið breytt. 
Síðasta færsla notandans úr skrá yfir nafnabreytingar notenda er sýnd hér fyrir neðan til skýringar:',
);

/** Italian (Italiano)
 * @author .anaconda
 * @author BrokenArrow
 * @author Darth Kule
 * @author Gianfranco
 * @author HalphaZ
 * @author Melos
 * @author Nemo bis
 */
$messages['it'] = array(
	'renameuser' => 'Rinomina utente',
	'renameuser-linkoncontribs' => 'rinomina utente',
	'renameuser-linkoncontribs-text' => 'Rinomina questo utente',
	'renameuser-desc' => "Aggiunge una [[Special:Renameuser|pagina speciale]] per rinominare un utente (richiede i diritti di ''renameuser'')",
	'renameuserold' => 'Nome utente attuale:',
	'renameusernew' => 'Nuovo nome utente:',
	'renameuserreason' => 'Motivo del cambio nome:',
	'renameusermove' => 'Rinomina anche la pagina utente, la pagina di discussione e le relative sottopagine',
	'renameusersuppress' => 'Non creare redirect al nuovo nome',
	'renameuserreserve' => "Impedisci l'utilizzo del vecchio nome in futuro",
	'renameuserwarnings' => 'Avvisi:',
	'renameuserconfirm' => 'Sì, rinomina questo utente',
	'renameusersubmit' => 'Invia',
	'renameusererrordoesnotexist' => 'L\'utente "<nowiki>$1</nowiki>" non esiste',
	'renameusererrorexists' => 'L\'utente "<nowiki>$1</nowiki>" esiste già',
	'renameusererrorinvalid' => 'Il nome utente "<nowiki>$1</nowiki>" non è valido',
	'renameuser-error-request' => 'Si è verificato un problema nella ricezione della richiesta. Tornare indietro e riprovare.',
	'renameuser-error-same-user' => 'Non è possibile rinominare un utente allo stesso nome che aveva già.',
	'renameusersuccess' => 'L\'utente "<nowiki>$1</nowiki>" è stato rinominato in "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'La pagina $1 esiste già; impossibile sovrascriverla automaticamente.',
	'renameuser-page-moved' => 'La pagina $1 è stata spostata a $2.',
	'renameuser-page-unmoved' => 'Impossibile spostare la pagina $1 a $2.',
	'renameuserlogpage' => 'Utenti rinominati',
	'renameuserlogpagetext' => 'Di seguito sono elencate le modifiche ai nomi utente.',
	'renameuserlogentry' => 'ha rinominato $1 in "$2"',
	'renameuser-log' => 'Che ha {{PLURAL:$1|un contributo|$1 contributi}}. Motivo: $2',
	'renameuser-move-log' => 'Spostamento automatico della pagina - utente rinominato da "[[User:$1|$1]]" a "[[User:$2|$2]]"',
	'right-renameuser' => 'Rinomina gli utenti',
	'renameuser-renamed-notice' => 'Questo utente è stato rinominato.
Il registro delle rinomine è riportato di seguito per informazione.',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Broad-Sky
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author Marine-Blue
 * @author Ohgi
 * @author Suisui
 * @author 青子守歌
 */
$messages['ja'] = array(
	'renameuser' => '利用�名の変更',
	'renameuser-linkoncontribs' => '利用�名変更',
	'renameuser-linkoncontribs-text' => 'この利用�の名前を変更�る',
	'renameuser-desc' => '利用�名変更のための[[Special:Renameuser|特別ページ]]を追加�る(renameuser権�が必要)',
	'renameuserold' => '現在の利用�名:',
	'renameusernew' => '新しい利用�名:',
	'renameuserreason' => '変更理由:',
	'renameusermove' => '利用�ページと会話ページ(およびそれらのサブページ)を新しい名前に移動�る',
	'renameusersuppress' => '新しい名前へのリ�イレクトを作成しない',
	'renameuserreserve' => '旧利用�名の今後の使用をブロック�る',
	'renameuserwarnings' => '警告:',
	'renameuserconfirm' => 'はい�利用�名を変更しま�',
	'renameusersubmit' => '変更',
	'renameusererrordoesnotexist' => '利用��<nowiki>$1</nowiki>�は存在しません�',
	'renameusererrorexists' => '利用��<nowiki>$1</nowiki>�は既に存在していま��',
	'renameusererrorinvalid' => '利用�名�<nowiki>$1</nowiki>�は無効な�で��',
	'renameuser-error-request' => '要求を正常に受け付けることができませんでした�戻ってから再度お試しください�',
	'renameuser-error-same-user' => '現在と同じ利用�名に変更�ることは出来ません�',
	'renameusersuccess' => '利用��<nowiki>$1</nowiki>�を�<nowiki>$2</nowiki>�に変更しました�',
	'renameuser-page-exists' => '$1 が既に存在しているため�自動で上書きできませんでした�',
	'renameuser-page-moved' => '$1 を $2 に移動しました�',
	'renameuser-page-unmoved' => '$1 を $2 に移動できませんでした�',
	'renameuserlogpage' => '利用�名変更記録',
	'renameuserlogpagetext' => 'これは�利用�名の変更を記録したもので��',
	'renameuserlogentry' => '$1 を�$2�へ利用�名変更しました',
	'renameuser-log' => '{{PLURAL:$1|投稿数}}$1回�理由: $2',
	'renameuser-move-log' => '名前の変更と共に�[[User:$1|$1]]�を�[[User:$2|$2]]�へ自動的に移動しました',
	'right-renameuser' => '利用�名変更',
	'renameuser-renamed-notice' => 'この利用�は改名しました�参�のため�改名記録を以下に載せま��',
);

/** Jutish (Jysk)
 * @author Huslåke
 * @author Ælsån
 */
$messages['jut'] = array(
	'renameuser' => 'Gæf æ bruger en ny navn',
	'renameuser-desc' => "Gæf en bruger en ny navn (''renameuser'' regt er nøteg)",
	'renameuserold' => 'Nuværende brugernavn:',
	'renameusernew' => 'Ny brugernavn:',
	'renameuserreason' => "Før hvat dett'er dun:",
	'renameusermove' => 'Flyt bruger og diskusje sider (og deres substrøk) til ny navn',
	'renameusersubmit' => 'Gå til',
	'renameusererrordoesnotexist' => 'Æ bruger "<nowiki>$1</nowiki>" bestä ekke.',
	'renameusererrorexists' => 'Æ bruger "<nowiki>$1</nowiki>" er ål.',
	'renameusererrorinvalid' => 'Æ brugernavn "<nowiki>$1</nowiki>" er ogyldegt.',
	'renameuser-error-request' => 'Her har en pråblæm ve enkriige der anfråge. Gå hen og pråbær nurmål.',
	'renameuser-error-same-user' => 'Du kenst ekke hernåm æ bruger til æselbste nåm als dafør.',
	'renameusersuccess' => 'Æ bruger "<nowiki>$1</nowiki>" er hernåmt til "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Æ pæge $1 er ål og ken ekke åtåmatisk åverflyttet være.',
	'renameuser-page-moved' => 'Æ pæge $1 er flyttet til $2.',
	'renameuser-page-unmoved' => 'Æ pæge $1 kon ekke flyttet være til $2.',
	'renameuserlogpage' => 'Bruger hernåm log',
	'renameuserlogpagetext' => "Dett'er en log der ændrenger til brugernavner",
	'renameuserlogentry' => 'har hernåmt $1 til "$2"',
	'renameuser-log' => '{{PLURAL:$1|en redigærenge|$1 redigærenger}}. Resån: $2',
	'renameuser-move-log' => 'Åtåmatisk flyttet pæge hviil hernåm der bruger "[[User:$1|$1]]" til "[[User:$2|$2]]"',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'renameuser' => 'Ngganti jeneng panganggo',
	'renameuser-desc' => "Ngganti jeneng panganggo (perlu hak aksès ''renameuser'')",
	'renameuserold' => 'Jeneng panganggo saiki:',
	'renameusernew' => 'Jeneng panganggo anyar:',
	'renameuserreason' => 'Alesan ganti jeneng:',
	'renameusermove' => 'Mindhah kaca panganggo lan kaca dhiskusiné (sarta subkaca-kacané) menyang jeneng anyar',
	'renameuserreserve' => 'Blokir utawa cadhangaké jeneng panganggo lawas supaya ora bisa dianggo manèh',
	'renameuserwarnings' => 'Pènget:',
	'renameuserconfirm' => 'Ya, ganti jeneng panganggo kasebut',
	'renameusersubmit' => 'Kirim',
	'renameusererrordoesnotexist' => 'Panganggo "<nowiki>$1</nowiki>" ora ana.',
	'renameusererrorexists' => 'Panganggo "<nowiki>$1</nowiki>" wis ana.',
	'renameusererrorinvalid' => 'Jeneng panganggo "<nowiki>$1</nowiki>" ora absah',
	'renameuser-error-request' => 'Ana masalah nalika nampa panyuwunan panjenengan.
Mangga balènana lan nyoba manèh.',
	'renameuser-error-same-user' => 'Panjenengan ora bisa ngganti jeneng panganggo dadi kaya jeneng asalé.',
	'renameusersuccess' => 'Panganggo "<nowiki>$1</nowiki>" wis diganti jenengé dadi "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Kaca $1 wis ana lan ora bisa ditimpa sacara otomatis.',
	'renameuser-page-moved' => 'Kaca $1 wis dialihaké menyang $2.',
	'renameuser-page-unmoved' => 'Kaca $1 ora bisa dialihaké menyang $2.',
	'renameuserlogpage' => 'Log ganti jeneng panganggo',
	'renameuserlogpagetext' => 'Iki log owah-owahan jeneng panganggo',
	'renameuserlogentry' => 'Ganti jeneng $1 dadi "$2"',
	'renameuser-log' => 'sing wis duwé $1 suntingan. Alesan: $2',
	'renameuser-move-log' => 'Sacara otomatis mindhah kaca nalika ngganti jeneng panganggo "[[User:$1|$1]]" dadi "[[User:$2|$2]]"',
	'right-renameuser' => 'Ganti jeneng panganggo-panganggo',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author Dawid Deutschland
 * @author Malafaya
 * @author Sopho
 */
$messages['ka'] = array(
	'renameuser' => 'მომხმარებლის სახელის გამოცვლა',
	'renameuser-linkoncontribs' => 'მომხმარებლის სახელის გადარქმევა',
	'renameuser-linkoncontribs-text' => 'ამ მომხმარებლის სახელის გადარქმევა',
	'renameuserold' => 'ამჟამინდელი მომხმარებლის სახელი:',
	'renameusernew' => 'ახალი მომხმარებლის სახელი:',
	'renameuserreason' => 'სახელის შეცვლის მიზეზი:',
	'renameusermove' => 'მომხმარებლისა და განხილვის გვერდების (და მათი დაქვემდებარებული გვერდების) გადატანა ახალ დასახელებაზე',
	'renameusersuppress' => 'არ გადაამისამართოთ ახალ სახელზე',
	'renameuserreserve' => 'ძველი მომხმარებლის სახელის სამომავლო გამოყენების ა�რძალვა',
	'renameuserwarnings' => 'გაფრთხილებები:',
	'renameuserconfirm' => 'დიახ, მსურს სახელის გადარქმევა',
	'renameusersubmit' => 'გაგზავნა',
	'renameusererrordoesnotexist' => 'მომხმარებელი "<nowiki>$1</nowiki>" არ არსებობს',
	'renameusererrorexists' => 'მომხმარებელი "<nowiki>$1</nowiki>" უ�ვე არსებობს',
	'renameusererrorinvalid' => 'მომხმარებლის სახელი "<nowiki>$1</nowiki>" არასწორია',
	'renameuser-error-request' => 'მოთხოვნის მიღებასთან და�ავშირებით რაღაც პრობლემაა. გთხოვთ, ხელახლა სცადეთ.',
	'renameuser-error-same-user' => 'თქვენ არ შეგიძლიათ დაარქვათ მომხმარებელს იგივე სახელი, რაც ერქვა წინათ.',
	'renameusersuccess' => 'მომხმარებლის სახელი - "<nowiki>$1</nowiki>", შეიცვალა "<nowiki>$2</nowiki>"-ით',
	'renameuser-page-exists' => 'გვერდი $1 უ�ვე არსებობს და მისი ავტომატურად შენაცვლება შეუძლებელია.',
	'renameuser-page-moved' => 'გვერდი $1 გადატანილია $2-ზე.',
	'renameuser-page-unmoved' => 'არ მოხერხდა გვერდის $1 გადატანა $2-ზე.',
	'renameuserlogpage' => 'მომხმარებლის სახელის გადარქმევის რეგისტრაციის ჟურნალი',
	'renameuserlogpagetext' => 'ეს არის ჟურნალი, სადაც აღრიცხულია მომხმარებლის სახელთა ცვლილებები',
	'renameuserlogentry' => 'სახელი გადაერქვა $1-ს "$2"-ზე',
	'renameuser-log' => '$1 რედაქცია. მიზეზი: $2',
	'renameuser-move-log' => 'ავტომატურად იქნა გადატანილი გვერდი მომხმარებლის "[[User:$1|$1]]" სახელის შეცვლისას "[[User:$2|$2]]-ით"',
	'right-renameuser' => 'მომხმარებლების სახელის გადარქმევა',
	'renameuser-renamed-notice' => 'ამ მომხმარებელს სახელი გადაერქვა.
ქვემოთ მოყვანილია სახელის გადარქმევის ჟურნალი.',
);

/** Kazakh (Arabic script) (�قازاقشا (تٴوتە)�) */
$messages['kk-arab'] = array(
	'renameuser' => 'قاتىسۋشىنى قايتا اتاۋ',
	'renameuserold' => 'اعىمداعى قاتىسۋشى اتى:',
	'renameusernew' => 'جاڭا قاتىسۋشى اتى:',
	'renameuserreason' => 'قايتا اتاۋ سەبەبى:',
	'renameusermove' => 'قاتىسۋشىنىڭ جەكە جانە تالقىلاۋ بەتتەرىن (جانە دە ولاردىڭ تومەنگى بەتتەرىن) جاڭا اتاۋعا جىلجىتۋ',
	'renameusersubmit' => 'جىبەرۋ',
	'renameusererrordoesnotexist' => '«<nowiki>$1» دەگەن قاتىسۋشى جوق',
	'renameusererrorexists' => '«$1» دەگەن قاتىسۋشى بار تۇگە',
	'renameusererrorinvalid' => '«$1» قاتىسۋشى اتى جارامسىز',
	'renameusersuccess' => '«$1» دەگەن قاتىسۋشى اتى «$2» دەگەنگە اۋىستىرىلدى',
	'renameuser-page-exists' => '$1 دەگەن بەت بار تۇگە, جانە وزدىك تۇردە ونىڭ ۇستىنە ەشتەڭە جازىلمايدى.',
	'renameuser-page-moved' => '$1 دەگەن بەت $2 دەگەن بەتكە جىلجىتىلدى.',
	'renameuser-page-unmoved' => '$1 دەگەن بەت $2 دەگەن بەتكە جىلجىتىلمادى.',
	'renameuserlogpage' => 'قاتىسۋشىنى قايتا اتاۋ جۋرنالى',
	'renameuserlogpagetext' => 'بۇل قاتىسۋشى اتىنداعى وزگەرىستەر جۋرنالى',
	'renameuserlogentry' => '$1 اتاۋىن $2 دەگەنگە وزگەرتتى',
	'renameuser-log' => '$1 تۇزەتۋى بار. $2',
	'renameuser-move-log' => '«[[User:$1|$1]]» دەگەن قاتىسۋشى اتىن «[[User:$2|$2]]» دەگەنگە اۋىسقاندا بەت وزدىك تۇردە جىلجىتىلدى',
);

/** Kazakh (Cyrillic script) (�Қазақша (ки�ил)�) */
$messages['kk-cyrl'] = array(
	'renameuser' => 'Қатысушыны қайта атау',
	'renameuserold' => 'Ағымдағы қатысушы аты:',
	'renameusernew' => 'Жаңа қатысушы аты:',
	'renameuserreason' => 'Қайта атау себебі:',
	'renameusermove' => 'Қатысушының жеке ж�не талқылау бетте�ін (ж�не де ола�дың төменгі бетте�ін) жаңа атауға жылжыту',
	'renameusersubmit' => 'Жібе�у',
	'renameusererrordoesnotexist' => '«<nowiki>$1</nowiki>» деген қатысушы жоқ',
	'renameusererrorexists' => '«<nowiki>$1</nowiki>» деген қатысушы ба� түге',
	'renameusererrorinvalid' => '«<nowiki>$1</nowiki>» қатысушы аты жа�амсыз',
	'renameusersuccess' => '«<nowiki>$1</nowiki>» деген қатысушы аты «<nowiki>$2</nowiki>» дегенге ауысты�ылды',
	'renameuser-page-exists' => '$1 деген бет ба� түге, ж�не өздік тү�де оның үстіне ештеңе жазылмайды.',
	'renameuser-page-moved' => '$1 деген бет $2 деген бетке жылжытылды.',
	'renameuser-page-unmoved' => '$1 деген бет $2 деген бетке жылжытылмады.',
	'renameuserlogpage' => 'Қатысушыны қайта атау жу�налы',
	'renameuserlogpagetext' => 'Бұл қатысушы атындағы өзге�істе� жу�налы',
	'renameuserlogentry' => '$1 атауын «$2» дегенге өзге�тті',
	'renameuser-log' => '$1 түзетуі ба�. $2',
	'renameuser-move-log' => '«[[User:$1|$1]]» деген қатысушы атын «[[User:$2|$2]]» дегенге ауысқанда бет өздік тү�де жылжытылды',
);

/** Kazakh (Latin script) (�Qazaqşa (latın)�) */
$messages['kk-latn'] = array(
	'renameuser' => 'Qatıswşını qaýta ataw',
	'renameuserold' => 'Ağımdağı qatıswşı atı:',
	'renameusernew' => 'Jaña qatıswşı atı:',
	'renameuserreason' => 'Qaýta ataw sebebi:',
	'renameusermove' => 'Qatıswşınıñ jeke jäne talqılaw betterin (jäne de olardıñ tömengi betterin) jaña atawğa jıljıtw',
	'renameusersubmit' => 'Jiberw',
	'renameusererrordoesnotexist' => '«<nowiki>$1</nowiki>» degen qatıswşı joq',
	'renameusererrorexists' => '«<nowiki>$1</nowiki>» degen qatıswşı bar tüge',
	'renameusererrorinvalid' => '«<nowiki>$1</nowiki>» qatıswşı atı jaramsız',
	'renameusersuccess' => '«<nowiki>$1</nowiki>» degen qatıswşı atı «<nowiki>$2</nowiki>» degenge awıstırıldı',
	'renameuser-page-exists' => '$1 degen bet bar tüge, jäne özdik türde onıñ üstine eşteñe jazılmaýdı.',
	'renameuser-page-moved' => '$1 degen bet $2 degen betke jıljıtıldı.',
	'renameuser-page-unmoved' => '$1 degen bet $2 degen betke jıljıtılmadı.',
	'renameuserlogpage' => 'Qatıswşını qaýta ataw jwrnalı',
	'renameuserlogpagetext' => 'Bul qatıswşı atındağı özgerister jwrnalı',
	'renameuserlogentry' => '$1 atawın «$2» degenge özgertti',
	'renameuser-log' => '$1 tüzetwi bar. $2',
	'renameuser-move-log' => '«[[User:$1|$1]]» degen qatıswşı atın «[[User:$2|$2]]» degenge awısqanda bet özdik türde jıljıtıldı',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'renameuser' => 'ប្តូរអត្តនាម',
	'renameuser-linkoncontribs' => 'ប្តូរឈ្មោះអ្ន�ប្រើប្រាស់',
	'renameuser-linkoncontribs-text' => 'ប្ដូរឈ្មោះអ្ន�ប្រើប្រាស់នេះ',
	'renameuser-desc' => "ប្តូរឈ្មោះអ្ន�ប្រើប្រាស់(ត្រូវ�ារសិទ្ធិ ''ប្តូរឈ្មោះអ្ន�ប្រើប្រាស់'')",
	'renameuserold' => 'ឈ្មោះអ្ន�ប្រើប្រាស់បច្ចុប្បន្ន ៖',
	'renameusernew' => 'ឈ្មោះអ្ន�ប្រើប្រាស់ថ្មី៖',
	'renameuserreason' => 'មូលហេតុ៖',
	'renameusermove' => 'ប្តូរទីតាំងទំព័រអ្ន�ប្រើប្រាស់និងទំព័រពិភា�្សា(រួមទាំងទំព័ររងផងដែរ)ទៅឈ្មោះថ្មី',
	'renameusersuppress' => '�ុំបង្�ើត�ារបញ្ជូនបន្តទៅឈ្មោះថ្មី',
	'renameuserreserve' => 'ហាមឃាត់គណនីចាស់ពី�ារប្រើប្រាស់នាពេលអនាគត',
	'renameuserwarnings' => 'បម្រាម�៖',
	'renameuserconfirm' => 'បាទ/ចាស៎ សូមប្តូរឈ្មោះអ្ន�ប្រើប្រាស់នេះ',
	'renameusersubmit' => 'ដា�់ស្នើ',
	'renameusererrordoesnotexist' => 'អ្ន�ប្រើប្រាស់ "<nowiki>$1</nowiki>" មិនមាន ។',
	'renameusererrorexists' => 'អ្ន�ប្រើប្រាស់ "<nowiki>$1</nowiki>" មានហើ� ។',
	'renameusererrorinvalid' => 'ឈ្មោះអ្ន�ប្រើប្រាស់ "<nowiki>$1</nowiki>" មិនត្រឹមត្រូវ ។',
	'renameuser-error-request' => 'មានបញ្ហា�ចំពោះ�ារទទួលសំណើ�។ សូមត្រឡប់�្រោ� ហើ�ព្�ា�ាមម្តងទ�ត�។',
	'renameuser-error-same-user' => 'អ្ន�មិនអាចប្តូរឈ្មោះអ្ន�ប្រើប្រាស់ទៅជាឈ្មោះដូចមុនបានទេ។',
	'renameusersuccess' => 'អ្ន�ប្រើប្រាស់ "<nowiki>$1</nowiki>" ត្រូវបានប្តូរឈ្មោះទៅ "<nowiki>$2</nowiki>"។',
	'renameuser-page-exists' => 'ទំព័រ $1 មានហើ� មិនអាចសរសេរជាន់ពីលើដោ�ស្វ័�ប្រវត្តិទេ។',
	'renameuser-page-moved' => 'ទំព័រ$1ត្រូវបានប្តូរទីតាំងទៅ$2ហើ�។',
	'renameuser-page-unmoved' => 'ទំព័រ$1មិនអាចប្តូរទីតាំងទៅ$2បានទេ។',
	'renameuserlogpage' => '�ំនត់ហេតុនៃ�ារប្តូរឈ្មោះអ្ន�ប្រើប្រាស់',
	'renameuserlogpagetext' => 'នេះជា�ំណត់ហេតុនៃបំលាស់ប្តូរនៃឈ្មោះអ្ន�ប្រើប្រាស់',
	'renameuserlogentry' => 'បានប្តូរឈ្មោះ $1 ទៅជា "$2" ហើ�',
	'renameuser-log' => '{{PLURAL:$1|�ំណែប្រែ}}។ ហេតុផល៖ $2',
	'renameuser-move-log' => 'បានប្តូរទីតាំងទំព័រដោ�ស្វ័�ប្រវត្តិ�្នុងខណៈពេលប្តូរឈ្មោះអ្ន�ប្រើប្រាស់ "[[User:$1|$1]]" ទៅ "[[User:$2|$2]]"',
	'right-renameuser' => 'ប្ដូរឈ្មោះអ្ន�ប្រើប្រាស់នានា',
	'renameuser-renamed-notice' => 'ឈ្មោះរបស់អ្ន�ប្រើប្រាស់នេះត្រូវបានប្ដូររួចហើ�។

ខាង�្រោមនេះជា�ំណត់ហេតុនៃ�ារប្ដូរឈ្មោះ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 * @author Shushruth
 */
$messages['kn'] = array(
	'renameuser' => 'ಸದಸ್ಯರನ್ನು ಮರುನಾಮಕರಣ ಮಾಡಿ',
	'renameuserwarnings' => 'ಎಚ್ಚರಿಕೆಗಳು:',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author Ficell
 * @author Klutzy
 * @author Kwj2772
 * @author ToePeu
 */
$messages['ko'] = array(
	'renameuser' => '계정 이름 �경',
	'renameuser-linkoncontribs' => '이름 바꾸기',
	'renameuser-linkoncontribs-text' => '이 사용자의 계정 이름을 바꿉니다.',
	'renameuser-desc' => "계정 이름 �경을 위한 [[Special:Renameuser|특수 문서]]를 추�한다 ('''renameuser''' 권한 필요)",
	'renameuserold' => '기존 계정 이름:',
	'renameusernew' => '새 이름:',
	'renameuserreason' => '바꾸는 이유:',
	'renameusermove' => '사용자 문서� 토론 문서, 하위 문서를 새 사용자 이름으로 이�하기',
	'renameusersuppress' => '새 이름으로 넘겨주기를 생성하� 않기',
	'renameuserreserve' => '나중에 이전의 이름이 사용되� 않도록 차단하기',
	'renameuserwarnings' => '경고:',
	'renameuserconfirm' => '예, 이름을 �경합니다.',
	'renameusersubmit' => '�경',
	'renameusererrordoesnotexist' => '�<nowiki>$1</nowiki> 사용자� 존재하� 않습니다.',
	'renameusererrorexists' => '�<nowiki>$1</nowiki> 사용자� 이미 존재합니다.',
	'renameusererrorinvalid' => '�<nowiki>$1</nowiki> 사용자 이름이 잘못되었습니다.',
	'renameuser-error-request' => '요청을 정상적으로 전송하� 못했습니다.
뒤로 �서 다시 시도해주세요.',
	'renameuser-error-same-user' => '이전의 이름과 �� 이름으로는 바� 수 없습니다.',
	'renameusersuccess' => '�<nowiki>$1</nowiki> 사용자� �<nowiki>$2</nowiki>(으)로 �경되었습니다.',
	'renameuser-page-exists' => '$1 문서� 이미 존재하여 자�으로 이�하� 못했습니다.',
	'renameuser-page-moved' => '$1 문서를 $2(으)로 이�했습니다.',
	'renameuser-page-unmoved' => '$1 문서를 $2(으)로 이�하� 못했습니다.',
	'renameuserlogpage' => '이름 �경 기록',
	'renameuserlogpagetext' => '계정 이름 �경 기록입니다.',
	'renameuserlogentry' => '$1에서 �$2(으)로 이름을 바꾸었습니다.',
	'renameuser-log' => '기여 $1건. 이유: $2',
	'renameuser-move-log' => '�[[User:$1|$1]] 사용자를 �[[User:$2|$2]](으)로 바꾸면서 문서를 자�으로 이�함',
	'right-renameuser' => '계정 이름 �경',
	'renameuser-renamed-notice' => '이 사용자의 계정 이름이 �경되었습니다.
아래의 이름 �경 기록을 참고하십시오.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'renameuser' => 'Metmaacher ömdäufe',
	'renameuser-linkoncontribs' => 'Metmaacher ömnänne',
	'renameuser-linkoncontribs-text' => 'Heh dä Metmaacher ömnänne',
	'renameuser-desc' => '[[Special:Renameuser|Metmaacher ömdäufe]] � ävver do bruch mer et Rääsch �<i lang=en">renameuser</i>� för.',
	'renameuserold' => 'Dä ahle Metmaacher-Name',
	'renameusernew' => 'Dä neue Metmaacher-Name',
	'renameuserreason' => 'Jrund för et Ömdäufe:',
	'renameusermove' => 'De Metmaachersigg met Klaaf- un Ungersigge op dä neue Metmaacher-Name ömstelle',
	'renameusersuppress' => 'Donn kein Ömleidung op dä neue Name aanlääje',
	'renameuserreserve' => 'Donn dä Name fun dämm Metmaacher dobei sperre, dat_e nit norrens neu aanjemelldt weed.',
	'renameuserwarnings' => 'Warnunge:',
	'renameuserconfirm' => 'Jo, dunn dä Metmaacher ömbenenne un em singe Name ändere',
	'renameusersubmit' => 'Ömdäufe!',
	'renameusererrordoesnotexist' => 'Ene Metmaacher �<nowiki>$1</nowiki>� kenne mer nit.',
	'renameusererrorexists' => 'Ene Metmaacher met däm Name �<nowiki>$1</nowiki>� jit et ald.',
	'renameusererrorinvalid' => 'Ene Metmaacher-Name eß �<nowiki>$1</nowiki>� ävver nit, dä wöhr nit richtich.',
	'renameuser-error-request' => 'Mer hatte e Problem met Dingem Opdrach.
Bes esu joot un versöök et noch ens.',
	'renameuser-error-same-user' => 'Do Tuppes! Der ahle un der neue Name es dersellve. Do bengk et Ömdäufe jaanix.',
	'renameusersuccess' => 'Dä Metmaacher �<nowiki>$1</nowiki>� es jetz op �<nowiki>$2</nowiki>� ömjedäuf.',
	'renameuser-page-exists' => 'De Sigg $1 es ald doh, un mer könne se nit automatesch övverschrieve',
	'renameuser-page-moved' => 'De Sigg wood vun �$1� op �$2� ömjenannt.',
	'renameuser-page-unmoved' => 'Di Sigg �$1� kunnt nit op �$2� ömjenannt wääde.',
	'renameuserlogpage' => 'Logboch vum Metmaacher-Ömdäufe',
	'renameuserlogpagetext' => 'Dat es et Logboch vun de ömjedäufte Metmaachere',
	'renameuserlogentry' => 'hät �$1� op dä Metmaacher �$2� ömjedäuf',
	'renameuser-log' => '{{PLURAL:$1|ein Beärbeidung|$1 Beärbeidung|kein Beärbeidung}}. Jrund: $2',
	'renameuser-move-log' => 'Di Sigg weet automatesch ömjenannt weil mer dä Metmaacher �[[User:$1|$1]]� op �[[User:$2|$2]]� öm am däufe sin.',
	'right-renameuser' => 'Metmaacher ömdäufe',
	'renameuser-renamed-notice' => 'Dä Metmaacher es ömjenannt woode.
Dat kanns De unge en däm Ußzoch uss_em Logbooch vum Metmacher Ömnänne fenge.',
);

/** Kurdish (Latin script) (�Kurdî (latînî)�)
 * @author George Animal
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'renameuser' => 'Navî bikarhênerê biguherîne',
	'renameuser-linkoncontribs' => 'navî bikarhênerê biguherîne',
	'renameuser-linkoncontribs-text' => 'Navê vî bikarhênerî biguherîne',
	'renameuserold' => 'Navê niha:',
	'renameusernew' => 'Navê nû:',
	'renameuserreason' => 'Sedema ji bo navguhertinê:',
	'renameuserwarnings' => 'Hişyarî:',
	'renameuserconfirm' => 'Erê, navê vî bikarhênerî biguherîne',
	'renameusersubmit' => 'Bike',
	'renameusererrordoesnotexist' => 'Bikarhêner "<nowiki>$1</nowiki>" tune ye.',
	'renameusersuccess' => 'Navî bikarhênerê "<nowiki>$1</nowiki>" bû "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Rûpela $1 berê heye û ew nikane otomatîk were jêbirin.',
	'renameuser-page-moved' => 'Rûpela $1 çû cihê $2.',
	'renameuser-page-unmoved' => 'Rûpela $1 nikanî çûba ciha $2.',
	'renameuser-log' => 'yê $1 beşdarîyên xwe hebû. $2',
	'right-renameuser' => 'Navê bikarhêneran biguherîne:',
);

/** Latin (Latina)
 * @author MF-Warburg
 * @author SPQRobin
 * @author UV
 */
$messages['la'] = array(
	'renameuser' => 'Usorem renominare',
	'renameuserold' => 'Praesente nomen usoris:',
	'renameusernew' => 'Novum nomen usoris:',
	'renameuserreason' => 'Causa renominationis:',
	'renameusermove' => 'Movere paginas usoris et disputationis (et subpaginae) in nomen novum',
	'renameusersubmit' => 'Renominare',
	'renameusererrordoesnotexist' => 'Usor "<nowiki>$1</nowiki>" non existit',
	'renameusererrorexists' => 'Usor "<nowiki>$1</nowiki>" iam existit',
	'renameusererrorinvalid' => 'Nomen usoris "<nowiki>$1</nowiki>" irritum est',
	'renameusersuccess' => 'Usor "<nowiki>$1</nowiki>" renominatus est in "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Pagina $1 iam existit et non potest automatice deleri.',
	'renameuser-page-moved' => 'Pagina $1 mota est ad $2.',
	'renameuser-page-unmoved' => 'Pagina $1 ad $2 moveri non potuit.',
	'renameuserlogpage' => 'Index renominationum usorum',
	'renameuserlogpagetext' => 'Hic est index renominationum usorum',
	'renameuserlogentry' => 'renominavit $1 in "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 recensio|$1 recensiones}}. Causa: $2',
	'renameuser-move-log' => 'movit paginam automatice in renominando usorem "[[User:$1|$1]]" in "[[User:$2|$2]]"',
	'right-renameuser' => 'Usores renominare',
	'renameuser-renamed-notice' => 'Hic usor renominatus est.
Commodule notatio renominationum usoris subter datur.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'renameuser' => 'Benotzernumm änneren',
	'renameuser-linkoncontribs' => 'Benotzer ëmbenennen',
	'renameuser-linkoncontribs-text' => 'Dëse Benotzer ëmbenennen',
	'renameuser-desc' => "Benotzernumm änneren (Dir braucht dofir  ''renameuser''-Rechter)",
	'renameuserold' => 'Aktuelle Benotzernumm:',
	'renameusernew' => 'Neie Benotzernumm:',
	'renameuserreason' => "Grond fir d'Ëmbenennung:",
	'renameusermove' => 'Benotzer- an Diskussiounssäiten (an déi jeweileg Ënnersäiten) op den neie Benotzernumm réckelen',
	'renameusersuppress' => 'Maacht keng Viruleedungen op den neien Numm',
	'renameuserreserve' => 'Den ale Benotzernumm fir de weitere Gebrauch spären',
	'renameuserwarnings' => 'Warnungen:',
	'renameuserconfirm' => 'Jo, Benotzer ëmbenennen',
	'renameusersubmit' => 'Ëmbenennen',
	'renameusererrordoesnotexist' => 'De Benotzer "<nowiki>$1</nowiki>" gëtt et net.',
	'renameusererrorexists' => 'De Benotzer "<nowiki>$1</nowiki>" gët et schonn.',
	'renameusererrorinvalid' => 'De Benotzernumm "<nowiki>$1</nowiki>" kann net benotzt ginn.',
	'renameuser-error-request' => 'Et gouf e Problem mat ärer Ufro.
Gitt w.e.g. zréck a versicht et nach eng Kéier.',
	'renameuser-error-same-user' => 'Dir kënnt kee Benotzernumm änneren, an him deselwechten Numm erëmginn.',
	'renameusersuccess' => 'De Benotzer "<nowiki>$1</nowiki>" gouf "<nowiki>$2</nowiki>" ëmbenannt.',
	'renameuser-page-exists' => "D'Säit $1 gëtt et schonns a kann net automatesch iwwerschriwwe ginn.",
	'renameuser-page-moved' => "D'Säit $1 gouf op $2 geréckelt.",
	'renameuser-page-unmoved' => "D'Säit $1 konnt net op $2 geréckelt ginn.",
	'renameuserlogpage' => 'Logbuch vun den Ännerunge vum Benotzernumm',
	'renameuserlogpagetext' => 'An dësem Logbuch ginn Ännerunge vu Benotzernimm festgehal.',
	'renameuserlogentry' => 'huet de Benotzer $1 op "$2" ëmbenannt',
	'renameuser-log' => '{{PLURAL:$1|1 Ännerung|$1 Ännerungen}}. Grond: $2',
	'renameuser-move-log' => 'Duerch d\'Réckele vum Benotzer "[[User:$1|$1]]" op "[[User:$2|$2]]" goufen déi folgend Säiten automatesch matgeréckelt:',
	'right-renameuser' => 'Benotzer ëmbenennen',
	'renameuser-renamed-notice' => "Dëse Benotzer gouf ëmbenannt.
D'Logbuch mat den Ëmbenunngen ass hei ënnendrënner.",
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Pahles
 * @author Tibor
 */
$messages['li'] = array(
	'renameuser' => 'Herneum gebroeker',
	'renameuser-linkoncontribs' => 'herneum gebroeker',
	'renameuser-linkoncontribs-text' => 'Hernöm deze broeker',
	'renameuser-desc' => "Voog 'n [[Special:Renameuser|speciaal pazjwna]] toe óm 'ne gebroeker te hernömme (doe höbs hiej ''renameuser''-rech veur neudig)",
	'renameuserold' => 'Hujige gebroekersnaam:',
	'renameusernew' => 'Nuje gebroekersnaam:',
	'renameuserreason' => 'Ree veur hernömme:',
	'renameusermove' => "De gebroekerspazjena en euverlèkpazjena (en eventueel subpazjena's) hernömmme nao de nuje gebroekersnaam",
	'renameusersuppress' => 'Maak gein redireks nao de nuje naam',
	'renameuserreserve' => 'Veurkómme det de aaje gebroeker opnuuj wörd geregistreerd',
	'renameuserwarnings' => 'Waarschuwinge:',
	'renameuserconfirm' => 'Jao, hernaam gebroeker',
	'renameusersubmit' => 'Herneum',
	'renameusererrordoesnotexist' => 'De gebroeker "<nowiki>$1</nowiki>" besteit neet.',
	'renameusererrorexists' => 'De gebroeker "<nowiki>$1</nowiki>" besteit al.',
	'renameusererrorinvalid' => 'De gebroekersnaam "<nowiki>$1</nowiki>" is óngeljig.',
	'renameuser-error-request' => "d'r Woor 'n perbleem bie 't óntvange vanne aanvraog. Lèvver trök te gaon en opnuuj te perbere/",
	'renameuser-error-same-user' => 'De kèns gein gebroekers herneume nao dezelfde naam.',
	'renameusersuccess' => 'De gebroeker "<nowiki>$1</nowiki>" is hernömp nao "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'De pazjena $1 besteit al en kan neet automatisch euversjreve waere,',
	'renameuser-page-moved' => 'De pagina $1 is hernömp nao $2.',
	'renameuser-page-unmoved' => 'De pagina $1 kon neet hernömp waere nao $2.',
	'renameuserlogpage' => 'Logbook gebroekersnaamwieziginge',
	'renameuserlogpagetext' => 'Hiejónger staon gebroekersname die verangerdj zeen',
	'renameuserlogentry' => 'haet $1 hernömp nao "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 bewerking|$1 bewerkinge}}. Ree: $2',
	'renameuser-move-log' => 'Automatisch hernömp bie \'t wiezige van gebroeker "[[User:$1|$1]]" nao "[[User:$2|$2]]"',
	'right-renameuser' => 'Gebroekers hernaome',
	'renameuser-renamed-notice' => "Deze gebroeker is herneump.
Relevante regels oet 't logbook staon hieónger.",
);

/** Lithuanian (Lietuvių)
 * @author Eitvys200
 * @author Homo
 * @author Hugo.arg
 * @author Matasg
 */
$messages['lt'] = array(
	'renameuser' => 'Pervadinti naudotoją',
	'renameuser-linkoncontribs' => 'Pervadinti naudotoją',
	'renameuser-linkoncontribs-text' => 'Pervardyti šį vartotoją',
	'renameuser-desc' => "Pervadinti naudotoją (reikia ''pervadintojo'' teisių)",
	'renameuserold' => 'Esamas naudotojo vardas:',
	'renameusernew' => 'Naujas naudotojo vardas:',
	'renameuserreason' => 'Pervadinimo priežastis:',
	'renameusermove' => 'Perkelti naudotojo ir aptarimo puslapius (bei jo subpuslapius) prie naujo vardo',
	'renameuserreserve' => 'Užblokuoti senąjį naudotojo vardą nuo galimybių naudoti ateityje',
	'renameuserwarnings' => 'Įspėjimai:',
	'renameuserconfirm' => 'Taip, pervadinti naudotoją',
	'renameusersubmit' => 'Patvirtinti',
	'renameusererrordoesnotexist' => 'Naudotojas "<nowiki>$1</nowiki>" neegzistuoja.',
	'renameusererrorexists' => 'Naudotojas "<nowiki>$1</nowiki>" jau egzistuoja.',
	'renameusererrorinvalid' => 'Naudotojo vardas "<nowiki>$1</nowiki>" netinkamas.',
	'renameuser-error-request' => 'Iškilo prašymo gavimo problema.
Prašome eiti atgal ir bandyti iš naujo.',
	'renameuser-error-same-user' => 'Jūs negalite pervadinti naudotojo į tokį pat vardą, kaip pirmiau.',
	'renameusersuccess' => 'Naudotojas "<nowiki>$1</nowiki>" buvo pervadintas į "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Puslapis $1 jau egzistuoja ir negali būti automatiškai perrašytas.',
	'renameuser-page-moved' => 'Puslapis $1 buvo perkeltas į $2.',
	'renameuser-page-unmoved' => 'Puslapis $1 negali būti perkeltas į $2.',
	'renameuserlogpage' => 'Naudotojų pervadinimo sąrašas',
	'renameuserlogpagetext' => 'Tai yra naudotojų vardų pakeitimų sąrašas',
	'renameuserlogentry' => 'pervadintas $1 į �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 redagavimas|$1 redagavimų(ai)}}. Priežastis: $2',
	'renameuser-move-log' => 'Puslapis automatiškai perkeltas, kai buvo pervadinamas naudotojas "[[User:$1|$1]]" į "[[User:$2|$2]]"',
	'right-renameuser' => 'Pervadinti naudotojus',
);

/** Latvian (Latviešu)
 * @author Papuass
 * @author Xil
 */
$messages['lv'] = array(
	'renameuser' => 'Pārsaukt lietotāju',
	'renameuser-linkoncontribs' => 'pārsaukt lietotāju',
	'renameuser-linkoncontribs-text' => 'Pārsaukt šo lietotāju',
	'renameuserold' => 'Pašreizējais lietotāja vārds:',
	'renameusernew' => 'Jaunais lietotāja vārds:',
	'renameuserreason' => 'Pārsaukšanas iemesls:',
	'renameuserreserve' => 'Bloķēt veco lietotājvārdu no turpmākas izmantošanas',
	'renameuserwarnings' => 'Brīdinājumi:',
	'renameuserconfirm' => 'Jā, pārdēvēt lietotāju',
	'renameusersubmit' => 'Iesniegt',
	'renameusererrorexists' => 'Lietotājs "<nowiki>$1</nowiki>" jau ir.',
	'renameusersuccess' => 'Lietotājs "<nowiki>$1</nowiki>" pārdēvēts par "<nowiki>$2</nowiki>".',
	'renameuserlogpage' => 'Lietotāju pārdēvēšanas reģistrs',
	'renameuserlogpagetext' => 'Lietotājvārdu maiņas reģistrs',
	'renameuserlogentry' => 'pārsauca $1 par "$2"',
	'right-renameuser' => 'Pārsaukt lietotājus',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'renameuser' => "Hanova ny anaran'ny mpikambana",
	'renameuser-linkoncontribs' => "Manova ny anaran'ny mpikambana",
	'renameuser-linkoncontribs-text' => "Hanova ny anaran'ity mpikambana ity",
	'renameuserold' => 'Anaram-pikambana ankehitriny :',
	'renameusernew' => 'Anaram-pikambana vaovao :',
	'renameuserreason' => "Anton'ny fanovana anarana :",
	'renameusermove' => "Afindrany pejim-pikambana any amin'ny anarana vaovao",
	'renameuserwarnings' => 'Fampitandremana :',
	'renameuserconfirm' => 'Eny, soloy anarana ilay mpikambana',
	'renameusersubmit' => 'Alefa',
	'renameuserlogpage' => 'Laogim-panovana anaram-pikambana',
	'right-renameuser' => "Manova ny anaran'ny mpikambana",
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Brest
 * @author Misos
 */
$messages['mk'] = array(
	'renameuser' => 'П�еименувај ко�исник',
	'renameuser-linkoncontribs' => 'п�еименувај ко�исник',
	'renameuser-linkoncontribs-text' => 'П�еименувај го ко�исников',
	'renameuser-desc' => "Додава [[Special:Renameuser|специјална ст�аница]] за п�еименување на ко�исник (ба�а п�аво на ''renameuser'')",
	'renameuserold' => 'Сегашно ко�исничко име:',
	'renameusernew' => 'Ново ко�исничко име:',
	'renameuserreason' => 'Об�азложение за п�еименување:',
	'renameusermove' => 'П�емести ко�исничка ст�аница и ст�аници за �азгово� (и нивните потст�аници) под новото име',
	'renameusersuppress' => 'Не создавај п�енасочувања кон новото име',
	'renameuserreserve' => 'Блоки�ање на ста�ото ко�исничко име, да не може да се ко�исти во иднина',
	'renameuserwarnings' => 'П�едуп�едувања:',
	'renameuserconfirm' => 'Да, п�еименувај го ко�исникот',
	'renameusersubmit' => 'Внеси',
	'renameusererrordoesnotexist' => 'Ко�исникот �<nowiki>$1</nowiki>� не постои',
	'renameusererrorexists' => 'Ко�исникот �<nowiki>$1</nowiki>� веќе постои',
	'renameusererrorinvalid' => 'Ко�исничкото име �<nowiki>$1</nowiki>� не е важечко.',
	'renameuser-error-request' => 'Се јави п�облем п�и п�имањето на ба�ањето.
В�атете се и обидете се повто�но.',
	'renameuser-error-same-user' => 'Не можете да го п�еименувате ко�исникот во име кое е исто како п�етходното.',
	'renameusersuccess' => 'Ко�исникот �<nowiki>$1</nowiki>� е п�еименуван во �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Ст�аницата $1 веќе постои и не може автоматски да се замени со д�уга сод�жина.',
	'renameuser-page-moved' => 'Ст�аницата $1 е п�еместена на $2.',
	'renameuser-page-unmoved' => 'Ст�аницата $1 неможеше да се п�емести на $2.',
	'renameuserlogpage' => 'Дневник на п�еименувања на ко�исници',
	'renameuserlogpagetext' => 'Ово е дневник на п�еименувања на ко�исници',
	'renameuserlogentry' => 'го п�еименуваше $1 во �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 у�едување|$1 у�едувања}}. Об�азложение: $2',
	'renameuser-move-log' => 'Автоматски п�еместена ст�аница п�и п�еименување на ко�исникот �[[User:$1|$1]]� во �[[User:$2|$2]]�',
	'right-renameuser' => 'П�еименување ко�исници',
	'renameuser-renamed-notice' => 'Овој ко�исник е п�еименуван.
Подолу е п�иложен дневникот на п�еименување за спо�едба.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'renameuser' => 'ഉപയോക്താവിനെ പുനർനാമകരണം ചെയ്യുക',
	'renameuser-linkoncontribs' => 'ഉപയോക്തൃ പുനർനാമകരണം',
	'renameuser-linkoncontribs-text' => 'ഈ ഉപയോക്താവിന്റെ പേരു മാറ്റുക',
	'renameuser-desc' => "ഉപയോക്താവിനെ പുനർനാമകരണം ചെയ്യുവാനുള്ള (''പുനർനാമകരണ'' അവകാശം വേണം) ഒരു [[Special:Renameuser|പ്രത്യേക താൾ]] ചേർക്കുന്നു",
	'renameuserold' => 'ഇപ്പോഴത്തെ ഉപയോക്തൃനാമം:',
	'renameusernew' => 'പുതിയ ഉപയോക്തൃനാമം:',
	'renameuserreason' => 'ഉപയോക്തൃനാമം മാറ്റാനുള്ള കാരണം:',
	'renameusermove' => 'നിലവിലുള്ള ഉപയോക്തൃതാളും, ഉപയോക്താവിന്റെ സം�വാദം താളും (ഉപതാളുകൾ അടക്കം) പുതിയ നാമത്തിലേക്കു മാറ്റുക.',
	'renameusersuppress' => 'പുതിയ നാമത്തിലേയ്ക്ക് തിരിച്ചുവിടലുകളൊന്നും സൃഷ്ടിക്കരുത്',
	'renameuserreserve' => 'പഴയ ഉപയോക്തൃനാമം ഭാവിയിൽ ഉപയോഗിക്കുന്നതു തടയുക',
	'renameuserwarnings' => 'മുന്നറിയിപ്പുകൾ:',
	'renameuserconfirm' => 'അതെ, ഉപയോക്താവിനെ പുനർനാമകരണം ചെയ്യുക',
	'renameusersubmit' => 'സമർപ്പിക്കുക',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>"  എന്ന ഉപയോക്താവ് നിലവിലില്ല.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" എന്ന ഉപയോക്താവ് നിലവിലുണ്ട്.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" എന്ന ഉപയോക്തൃനാമം അസാധുവാണ്�.',
	'renameuser-error-request' => 'അപേക്ഷ സ്വ�കരിക്കുമ്പോൾ പിഴവ് സം�ഭവിച്ചു. ദയവായി തിരിച്ചു പോയി വ�ണ്ടും പരിശ്രമിക്കുക.',
	'renameuser-error-same-user' => 'നിലവിലുള്ള ഒരു ഉപയോക്തൃനാമത്തിലേക്കു വേറൊരു ഉപയോക്തൃനാമം പുനർനാമകരണം നടത്തുവാൻ സാധിക്കില്ല.',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" എന്ന ഉപയോക്താവിനെ "<nowiki>$2</nowiki>" എന്ന നാമത്തിലേക്കു പുനർനാമകരണം ചെയ്തിരിക്കുന്നു.',
	'renameuser-page-exists' => '$1 എന്ന താൾ നിലവിലുള്ളതിനാൽ അതിനെ യാന്ത്രികമായി മാറ്റാൻ കഴിയില്ല.',
	'renameuser-page-moved' => '$1 എന്ന താൾ $2 എന്നാക്കിയിരിക്കുന്നു.',
	'renameuser-page-unmoved' => '$1 എന്ന താൾ $2 എന്നാക്കാൻ സാദ്ധ്യമല്ല.',
	'renameuserlogpage' => 'ഉപയോക്തൃനാമം പുനർനാമകരണം നടത്തിയതിന്റെ പ്രവർത്തനരേഖ',
	'renameuserlogpagetext' => 'ഈ പ്രവർത്തനരേഖ ഉപയോക്തൃനാമം പുനർനാമകരണം നടത്തിയതിന്റേതാണ്�.',
	'renameuserlogentry' => '$1 എന്ന ഉപയോക്താവിനെ "$2" എന്നു പുനർനാമകരണം ചെയ്തിരിക്കുന്നു.',
	'renameuser-log' => '{{PLURAL:$1|ഒരു തിരുത്തൽ|$1 തിരുത്തലുകൾ}}. കാരണം: $2',
	'renameuser-move-log' => '"[[User:$1|$1]]" എന്ന ഉപയോക്താവിനെ "[[User:$2|$2]]" എന്നു പുനർനാമകരണം ചെയ്തപ്പോൾ താൾ യാന്ത്രികമായി മാറ്റി.',
	'right-renameuser' => 'ഉപയോക്തൃ പുനർനാമകരണം',
	'renameuser-renamed-notice' => 'ഈ ഉപയോക്താവിനെ പുനർനാമകരണം ചെയ്തിരിക്കുന്നു.
പുനർനാമകരണ രേഖ അവലംബമായി പരിശോധിക്കാനായി താഴെ കൊടുത്തിരിക്കുന്നു.',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'renameusersubmit' => 'Явуулах',
);

/** Marathi (मराठ�)
 * @author Kaajawa
 * @author Kaustubh
 * @author Rahuldeshmukh101
 * @author V.narsikar
 */
$messages['mr'] = array(
	'renameuser' => 'सदस्यनाम बदला',
	'renameuser-linkoncontribs' => 'सदस्यनाम बदला',
	'renameuser-linkoncontribs-text' => 'ह्या सदस्याचे नाव बदला',
	'renameuser-desc' => "सदस्यनाम बदला (यासाठ� तुम्हाला ''सदस्यनाम बदलण्याचे अधिकार'' असणे आवश्यक आहे)",
	'renameuserold' => 'सध्याचे सदस्यनाम:',
	'renameusernew' => 'नव�न सदस्यनाम:',
	'renameuserreason' => 'नाम बदलण्याचे कारण:',
	'renameusermove' => 'सदस्य तसेच सदस्य चर्चापान (तसेच त्यांच� उपपाने) नव�न सदस्यनामाकडे स्थानांतर�त करा',
	'renameusersuppress' => 'नव�न नावाकडे पुर्ननिर्देशने तयार करू नका',
	'renameuserreserve' => 'जुने सदस्य खाते पुढ�ल वापरासाठ� अवरुद्ध करा',
	'renameuserwarnings' => 'ताक�द:',
	'renameuserconfirm' => 'होय, सदस्याचे नाव बदला',
	'renameusersubmit' => 'पाठवा',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" नावाचा सदस्य अस्तित्वात नाह�.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" नावाचा सदस्य अगोदरच अस्तित्वात आहे',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" हे नाव चुक�चे आहे.',
	'renameuser-error-request' => 'हे काम करताना त्रुट� आढळलेल� आहे. कृपया मागे जाऊन परत प्रयत्न करा.',
	'renameuser-error-same-user' => 'तुम्ह� एखाद्या सदस्याला परत पूर्व�च्या नावाकडे बदलू शकत नाह�',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" या सदस्याचे नाव "<nowiki>$2</nowiki>" ला बदललेले आहे.',
	'renameuser-page-exists' => '$1 हे पान अगोदरच अस्तित्वात आहे व आपोआप पुनर्लेखन करता येत नाह�.',
	'renameuser-page-moved' => '$1 हे पान $2 मथळ्याखाल� स्थानांतर�त केले.',
	'renameuser-page-unmoved' => '$1 हे पान $2 मथळ्याखाल� स्थानांतर�त करू शकत नाह�.',
	'renameuserlogpage' => 'सदस्यनाम बदल याद�',
	'renameuserlogpagetext' => 'ह� सदस्यनामांमध्ये केलेल्या बदलांच� याद� आहे.',
	'renameuserlogentry' => '$1 ला "$2" केले',
	'renameuser-log' => '{{PLURAL:$1|१ संपादन|$1 संपादने}}. कारण: $2',
	'renameuser-move-log' => '"[[User:$1|$1]]" ला "[[User:$2|$2]]" बदलताना आपोआप सदस्य पान स्थानांतर�त केलेले आहे.',
	'right-renameuser' => 'सदस्यांच� नावे बदला',
	'renameuser-renamed-notice' => 'या सदस्यास पुनर्नामित करण्यात आले आहे.
पुनर्नामाचा क्रमलेख संदर्भासाठ� खाल� दिलेला आहे.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 */
$messages['ms'] = array(
	'renameuser' => 'Tukar nama pengguna',
	'renameuser-linkoncontribs' => 'tukar nama pengguna',
	'renameuser-linkoncontribs-text' => 'Tukar nama pengguna ini',
	'renameuser-desc' => "Menukar nama pengguna (memerlukan hak ''renameuser'')",
	'renameuserold' => 'Nama semasa:',
	'renameusernew' => 'Nama baru:',
	'renameuserreason' => 'Sebab tukar:',
	'renameusermove' => 'Pindahkan laman pengguna dan laman perbincangannya (berserta semua sublaman yang ada) ke nama baru',
	'renameusersuppress' => 'Jangan buat lencongan ke nama baru',
	'renameuserreserve' => 'Pelihara nama pengguna lama supaya tidak digunakan lagi',
	'renameuserwarnings' => 'Amaran:',
	'renameuserconfirm' => 'Ya, tukar nama pengguna ini',
	'renameusersubmit' => 'Hantar',
	'renameusererrordoesnotexist' => 'Pengguna "<nowiki>$1</nowiki>" tidak wujud.',
	'renameusererrorexists' => 'Pengguna "<nowiki>$1</nowiki>" telah pun wujud.',
	'renameusererrorinvalid' => 'Nama pengguna "<nowiki>$1</nowiki>" tidak sah.',
	'renameuser-error-request' => 'Berlaku masalah ketika menerima permintaan anda.
Sila undur dan cuba lagi.',
	'renameuser-error-same-user' => 'Anda tidak boleh menukar nama pengguna kepada nama yang sama.',
	'renameusersuccess' => 'Nama "<nowiki>$1</nowiki>" telah ditukar menjadi "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Laman $1 telah pun wujud dan tidak boleh ditulis ganti secara automatik.',
	'renameuser-page-moved' => 'Laman $1 telah dipindahkan ke $2.',
	'renameuser-page-unmoved' => 'Laman $1 tidak dapat dipindahkan ke $2.',
	'renameuserlogpage' => 'Log penukaran nama pengguna',
	'renameuserlogpagetext' => 'Ini ialah log penukaran nama pengguna.',
	'renameuserlogentry' => 'telah menukar nama $1 menjadi "$2"',
	'renameuser-log' => '$1 suntingan. Sebab: $2',
	'renameuser-move-log' => 'Memindahkan laman secara automatik ketika menukar nama "[[User:$1|$1]]" menjadi "[[User:$2|$2]]"',
	'right-renameuser' => 'Menukar nama pengguna',
	'renameuser-renamed-notice' => 'Pengguna ini telah dinamakan semula.
Log penukaran nama ditunjukkan di bawah sebagai rujukan.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'renameuser' => 'Semmi utent mill-ġdid',
	'renameuser-linkoncontribs' => 'semmi l-utent mill-ġdid',
	'renameuser-linkoncontribs-text' => "Erġa' semmi lil dan l-utent",
	'renameuserold' => 'Isem tal-utent attwali:',
	'renameusernew' => 'Isem tal-utent il-ġdid:',
	'renameuserreason' => 'Raġuni għall-bidla fl-isem:',
	'renameusermove' => "Mexxi l-paġna tal-utent, il-paġna ta' diskussjoni u s-sottopaġni taħt l-isem il-ġdid",
	'renameusersuppress' => 'Toħloqx rindirizzi lejn l-isem il-ġdid',
	'renameuserreserve' => 'Imblokka l-użu tal-isem il-qadim fil-futur',
	'renameuserwarnings' => 'Twissijiet:',
	'renameuserconfirm' => 'Iva, semmi mill-ġdid dan l-utent',
	'renameusersubmit' => 'Ibgħat',
	'renameusererrordoesnotexist' => 'L-utent "<nowiki>$1</nowiki>" ma jeżistix.',
	'renameusererrorexists' => 'L-utent "<nowiki>$1</nowiki>" diġà jeżisti.',
	'renameusererrorinvalid' => 'L-isem tal-utent "<nowiki>$1</nowiki>" hu invalidu.',
);

/** Erzya (Э�зянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'renameusernew' => 'Од лемесь:',
	'renameuserreserve' => 'Озавтомс ташто совицянь лементь саймес, тевс илязо нолдаво седе тов',
	'renameuserconfirm' => 'Истя, макст совицянтень од лем',
	'renameusersubmit' => 'Максомс',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" совицясь а�ась.',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'renameusersubmit' => 'Tiquihuāz',
);

/** Min Nan Chinese (Bân-lâm-gú) */
$messages['nan'] = array(
	'renameuser' => 'Kái iōng-chiá ê miâ',
	'renameuser-page-moved' => '$1 í-keng sóa khì tī $2.',
	'renameuserlogpagetext' => 'Chit-ê log lia̍t-chhut kái-piàn iōng-chiá miâ-jī ê tōng-chok.',
);

/** Norwegian (bokmål)� (�Norsk (bokmål)�)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'renameuser' => 'Døp om bruker',
	'renameuser-linkoncontribs' => 'døp om bruker',
	'renameuser-linkoncontribs-text' => 'Døp om denne brukeren',
	'renameuser-desc' => "Legger til en [[Special:Renameuser|spesialside]] for å døpe om en bruker (krever ''renameuser''-rettigheter)",
	'renameuserold' => 'Nåværende brukernavn:',
	'renameusernew' => 'Nytt brukernavn:',
	'renameuserreason' => 'Årsak for omdøping:',
	'renameusermove' => 'Flytt bruker- og brukerdiskusjonssider (og deres undersider) til nytt navn',
	'renameusersuppress' => 'Ikke opprett omdirigeringer til det nye navnet',
	'renameuserreserve' => 'Blokker det gamle brukernavnet fra framtidig bruk',
	'renameuserwarnings' => 'Advarsler:',
	'renameuserconfirm' => 'Ja, døp om brukeren',
	'renameusersubmit' => 'Utfør',
	'renameusererrordoesnotexist' => 'Brukeren «<nowiki>$1</nowiki>» finnes ikke.',
	'renameusererrorexists' => 'Brukeren «<nowiki>$1</nowiki>» finnes allerede.',
	'renameusererrorinvalid' => 'Brukernavnet «<nowiki>$1</nowiki>» er ugyldig.',
	'renameuser-error-request' => 'Det var et problem med å motta forespørselen.
Gå tilbake og prøv igjen.',
	'renameuser-error-same-user' => 'Du kan ikke gi en bruker samme navn som han/hun allerede har.',
	'renameusersuccess' => 'Brukeren «<nowiki>$1</nowiki>» har blitt omdøpt til «<nowiki>$2</nowiki>».',
	'renameuser-page-exists' => 'Siden $1 finnes allerede, og kunne ikke erstattes automatisk.',
	'renameuser-page-moved' => 'Siden $1 har blitt flyttet til $2.',
	'renameuser-page-unmoved' => 'Siden $1 kunne ikke flyttes til $2.',
	'renameuserlogpage' => 'Omdøpingslogg',
	'renameuserlogpagetext' => 'Dette er en logg over endringer i brukernavn.',
	'renameuserlogentry' => 'døpte om $1 til «$2»',
	'renameuser-log' => '{{PLURAL:$1|1 bidrag|$1 bidrag}}. Årsak: $2',
	'renameuser-move-log' => 'Flyttet side automatisk under omdøping av brukeren «[[User:$1|$1]]» til «[[User:$2|$2]]»',
	'right-renameuser' => 'Døpe om brukere',
	'renameuser-renamed-notice' => 'Denne brukeren er døpt om.
Til informasjon er omdøpningsloggen vist nedenfor.',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'renameuser' => 'Brukernaam ännern',
	'renameuser-desc' => "Föögt en [[Special:Renameuser|Spezialsied]] to för dat Neen-Naam-Geven för Brukers (''renameuser''-Recht nödig)",
	'renameuserold' => 'Brukernaam nu:',
	'renameusernew' => 'Nee Brukernaam:',
	'renameuserreason' => 'Gründ för den neen Naam:',
	'renameusermove' => 'Brukersieden opn neen Naam schuven',
	'renameuserreserve' => 'Den olen Brukernaam dor vör schulen, dat he noch wedder nee anmellt warrt',
	'renameuserwarnings' => 'Wohrschauels:',
	'renameuserconfirm' => 'Jo, den Bruker en neen Naam geven',
	'renameusersubmit' => 'Ännern',
	'renameusererrordoesnotexist' => "Bruker ''<nowiki>$1</nowiki>'' gifft dat nich",
	'renameusererrorexists' => "Bruker ''<nowiki>$1</nowiki>'' gifft dat al",
	'renameusererrorinvalid' => "Brukernaam ''<nowiki>$1</nowiki>'' geiht nich",
	'renameuser-error-request' => 'Dat geev en Problem bit Överdragen vun de Anfraag. Gah trüch un versöök dat noch wedder.',
	'renameuser-error-same-user' => 'De ole un nee Brukernaam sünd gliek.',
	'renameusersuccess' => "Brukernaam ''<nowiki>$1</nowiki>'' op ''<nowiki>$2</nowiki>'' ännert",
	'renameuser-page-exists' => 'Siet $1 gifft dat al un kann nichautomaatsch överschreven warrn.',
	'renameuser-page-moved' => 'Siet $1 schaven na $2.',
	'renameuser-page-unmoved' => 'Siet $1 kunn nich na $2 schaven warrn.',
	'renameuserlogpage' => 'Ännerte-Brukernaams-Logbook',
	'renameuserlogpagetext' => 'Dit is dat Logbook för ännerte Brukernaams',
	'renameuserlogentry' => 'hett �$1� neen Naam �$2� geven',
	'renameuser-log' => '{{PLURAL:$1|1 Ännern|$1 Ännern}}. Grund: $2',
	'renameuser-move-log' => "Siet bi dat Ännern vunn Brukernaam ''[[User:$1|$1]]'' na ''[[User:$2|$2]]'' automaatsch schaven",
	'right-renameuser' => 'Brukers neen Naam geven',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'renameuser' => 'Gebruker herneumen',
	'renameuser-linkoncontribs' => 'gebruker herneumen',
	'renameuserold' => 'Gebrukersnaam noen',
	'renameusernew' => 'Nieje gebrukersnaam:',
	'renameuserreason' => 'Reden veur t herneumen:',
	'renameusermove' => "Herneum gebruker en gebrukerspagina's (en subpagina's) naor de nieje naam.",
	'renameusersuppress' => 'Gien deurverwiezingen maken naor de nieje naam',
	'renameuserreserve' => 'Veurkoemen dat de ouwe gebruker opniej eregistreerd wörden',
	'renameuserwarnings' => 'Waorschuwingen:',
	'renameuserconfirm' => 'Ja, herneum disse gebruker',
	'renameusersubmit' => 'Herneumen',
	'renameusererrordoesnotexist' => 'De gebruker "<nowiki>$1</nowiki>" besteet niet.',
	'renameusererrorexists' => 'De gebrukersnaam "<nowiki>$1</nowiki>" is al in gebruuk.',
	'renameusererrorinvalid' => 'De gebrukersnaam "<nowiki>$1</nowiki>" is ongeldig.',
	'renameusersuccess' => 'Gebruker "<nowiki>$1</nowiki>" is herneumd naor "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'De pagina $1 besteet al en kan niet automaties overschreven wörden.',
	'renameuser-page-moved' => 'De pagina $1 is herneumd naor $2.',
	'renameuser-page-unmoved' => 'De pagina $1 kon niet herneumd wörden naor $2.',
	'renameuserlogpage' => 'Logboek gebrukersnaamwiezigingen',
	'renameuserlogpagetext' => 'Dit is n logboek mit wiezigingen van gebrukersnamen',
	'renameuserlogentry' => 'hef $1 herneumd naor "$2"',
	'renameuser-move-log' => 'Pagina is automaties verplaotst bie t herneumen van de gebruker "[[User:$1|$1]]" naor "[[User:$2|$2]]"',
	'right-renameuser' => 'Gebrukers herneumen',
	'renameuser-renamed-notice' => 'Disse gebrukersnaam is herneumd.
Hieronder vie-j t herneumlogboek as referensie.',
);

/** Nepali (नेपाल�) */
$messages['ne'] = array(
	'renameuserold' => 'अहिलेको प्रयोगकर्ता नाम:',
	'renameusernew' => 'नयाँ प्रयोगकर्ता नाम:',
	'renameusersubmit' => 'बुझाउने',
	'renameuser-page-exists' => '$1 पृष्ठ पहिले देखि नै रहेको छ र स्वत: अधिलेखन गर्न सकिएन ।',
	'renameuser-page-moved' => ' $1 पृष्ठलाई $2 मा सारियो ।',
	'renameuser-page-unmoved' => '$1 पृष्ठलाई $2 मा सार्न सकिएन ।',
);

/** Dutch (Nederlands)
 * @author Effeietsanders
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'renameuser' => 'Gebruiker hernoemen',
	'renameuser-linkoncontribs' => 'gebruiker hernoemen',
	'renameuser-linkoncontribs-text' => 'Deze gebruiker hernoemen',
	'renameuser-desc' => "Voegt een [[Special:Renameuser|speciale pagina]] toe om een gebruiker te hernoemen (u hebt hiervoor het recht ''renameuser'' nodig)",
	'renameuserold' => 'Huidige gebruikersnaam:',
	'renameusernew' => 'Nieuwe gebruikersnaam:',
	'renameuserreason' => 'Reden voor hernoemen:',
	'renameusermove' => "De gebruikerspagina en overlegpagina (en eventuele subpagina's) hernoemen naar de nieuwe gebruikersnaam",
	'renameusersuppress' => 'Geen doorverwijzingen maken naar de nieuwe naam',
	'renameuserreserve' => 'Voorkomen dat de oude gebruiker opnieuw wordt geregistreerd',
	'renameuserwarnings' => 'Waarschuwingen:',
	'renameuserconfirm' => 'Ja, de gebruiker hernoemen',
	'renameusersubmit' => 'Opslaan',
	'renameusererrordoesnotexist' => 'De gebruiker "<nowiki>$1</nowiki>" bestaat niet.',
	'renameusererrorexists' => 'De gebruiker "<nowiki>$1</nowiki>" bestaat al.',
	'renameusererrorinvalid' => 'De gebruikersnaam "<nowiki>$1</nowiki>" is ongeldig.',
	'renameuser-error-request' => 'Er was een probleem bij het ontvangen van de aanvraag.  Gelieve terug te gaan en opnieuwe te proberen.',
	'renameuser-error-same-user' => 'U kunt geen gebruiker hernoemen naar dezelfde naam.',
	'renameusersuccess' => 'De gebruiker "<nowiki>$1</nowiki>" is hernoemd naar "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'De pagina $1 bestaat al en kan niet automatisch overschreven worden.',
	'renameuser-page-moved' => 'De pagina $1 is hernoemd naar $2.',
	'renameuser-page-unmoved' => 'De pagina $1 kon niet hernoemd worden naar $2.',
	'renameuserlogpage' => 'Logboek gebruikersnaamwijzigingen',
	'renameuserlogpagetext' => 'Hieronder staan gebruikersnamen die gewijzigd zijn.',
	'renameuserlogentry' => 'heeft $1 hernoemd naar "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 bewerking|$1 bewerkingen}}. Reden: $2',
	'renameuser-move-log' => 'Automatisch hernoemd bij het wijzigen van gebruiker "[[User:$1|$1]]" naar "[[User:$2|$2]]"',
	'right-renameuser' => 'Gebruikers hernoemen',
	'renameuser-renamed-notice' => 'Deze gebruiker is hernoemd.
Relevante regels uit het logboek gebruikersnaamwijzigingen worden hieronder ter referentie weergegeven.',
);

/** Norwegian Nynorsk (�Norsk (nynorsk)�)
 * @author Gunnernett
 * @author Harald Khan
 * @author Ranveig
 */
$messages['nn'] = array(
	'renameuser' => 'Døyp om brukar',
	'renameuser-linkoncontribs' => 'døyp om brukar',
	'renameuser-desc' => "Legg til ei [[Special:Renameuser|spesialsida]] for å døypa om ein brukar (krev ''renameuser''-rettar)",
	'renameuserold' => 'Noverande brukarnamn:',
	'renameusernew' => 'Nytt brukarnamn:',
	'renameuserreason' => 'Årsak for omdøyping:',
	'renameusermove' => 'Flytt brukar- og brukardiskusjonssider (og deira undersider) til nytt namn.',
	'renameuserreserve' => 'Blokker det gamle brukarnamnet for framtidig bruk',
	'renameuserwarnings' => 'Åtvaringar:',
	'renameuserconfirm' => 'Ja, endra namn på brukaren',
	'renameusersubmit' => 'Utfør',
	'renameusererrordoesnotexist' => 'Brukaren «<nowiki>$1</nowiki>» finst ikkje.',
	'renameusererrorexists' => 'Brukaren «<nowiki>$1</nowiki>» finst allereie.',
	'renameusererrorinvalid' => 'Brukarnamnet «<nowiki>$1</nowiki>» er ikkje gyldig.',
	'renameuser-error-request' => 'Det var eit problem med å motta førespurnaden.
Gå attende og prøv på nytt.',
	'renameuser-error-same-user' => 'Du kan ikkje gje ein brukar same namn som han/ho har frå før.',
	'renameusersuccess' => 'Brukaren «<nowiki>$1</nowiki>» har fått brukarnamnet endra til «<nowiki>$2</nowiki>»',
	'renameuser-page-exists' => 'Sida $1 finst allereie og kan ikkje automatisk verta skrive over.',
	'renameuser-page-moved' => 'Sida $1 har vorte flytta til $2.',
	'renameuser-page-unmoved' => 'Sida $1 kunne ikkje verta flytta til $2.',
	'renameuserlogpage' => 'Logg over brukarnamnendringar',
	'renameuserlogpagetext' => 'Logg over endringar av brukarnamn',
	'renameuserlogentry' => 'endra $1 til «$2»',
	'renameuser-log' => '{{PLURAL:$1|eitt bidrag|$1 bidrag}}. Årsak: $2',
	'renameuser-move-log' => 'Flytta sida automatisk under omdøyping av brukaren «[[User:$1|$1]]» til «[[User:$2|$2]]»',
	'right-renameuser' => 'Døypa om brukarar',
	'renameuser-renamed-notice' => 'Denne brukaren har fått nytt namn.
Til informasjon er omdøpingsloggen synt nedanfor.',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'renameuser' => 'Fetola leina la mošomiši',
	'renameuserold' => 'Leina la bjale la mošomiši:',
	'renameusernew' => 'Leina le lempsha la mošomiši:',
	'renameuserreason' => 'Lebaka lago fetola leina:',
	'renameuser-page-moved' => 'Letlakala $1 le hudušitšwe go $2',
);

/** Occitan (Occitan)
 * @author Boulaur
 * @author Cedric31
 */
$messages['oc'] = array(
	'renameuser' => "Tornar nomenar l'utilizaire",
	'renameuser-linkoncontribs' => "tornar nomenar l'utilizaire",
	'renameuser-linkoncontribs-text' => "Tornar nomenar l'utilizaire",
	'renameuser-desc' => "Torna nomenar un utilizaire (necessita los dreches de ''renameuser'')",
	'renameuserold' => "Nom actual de l'utilizaire :",
	'renameusernew' => "Nom novèl de l'utilizaire :",
	'renameuserreason' => 'Motiu del cambiament de nom :',
	'renameusermove' => 'Desplaçar totas las paginas de lutilizaire cap al nom novèl',
	'renameuserreserve' => 'Reservar lo nom ancian per un usatge futur',
	'renameuserwarnings' => 'Avertiments :',
	'renameuserconfirm' => 'Òc, tornar nomenar lutilizaire',
	'renameusersubmit' => 'Sometre',
	'renameusererrordoesnotexist' => "Lo nom d'utilizaire « <nowiki>$1</nowiki> » es pas valid",
	'renameusererrorexists' => "Lo nom d'utilizaire « <nowiki>$1</nowiki> » existís ja",
	'renameusererrorinvalid' => "Lo nom d'utilizaire « <nowiki>$1</nowiki> » existís pas",
	'renameuser-error-request' => 'Un problèma existís amb la recepcion de la requèsta. Tornatz en rèire e ensajatz tornamai.',
	'renameuser-error-same-user' => 'Podètz pas tornar nomenar un utilizaire amb la meteissa causa deperabans.',
	'renameusersuccess' => "L'utilizaire « <nowiki>$1</nowiki> » es plan estat renomenat en « <nowiki>$2</nowiki> »",
	'renameuser-page-exists' => 'La pagina $1 existís ja e pòt pas èsser remplaçada automaticament.',
	'renameuser-page-moved' => 'La pagina $1 es estada desplaçada cap a $2.',
	'renameuser-page-unmoved' => 'La pagina $1 pòt pas èsser renomenada en $2.',
	'renameuserlogpage' => "Istoric dels cambiaments de nom d'utilizaire",
	'renameuserlogpagetext' => "Aquò es l'istoric dels cambiaments de nom dels utilizaires",
	'renameuserlogentry' => 'a renomenat $1 en "$2"',
	'renameuser-log' => '$1 {{PLURAL:$1|edicion|edicions}}. Motiu : $2',
	'renameuser-move-log' => 'Pagina desplaçada automaticament al moment del cambiament de nom de lutilizaire "[[User:$1|$1]]" en "[[User:$2|$2]]"',
	'right-renameuser' => "Tornar nomenar d'utilizaires",
	'renameuser-renamed-notice' => 'Aqueste utilizaire es estat renomenat.
Lo jornal dels cambiaments de noms es disponible çaijós per informacion.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'renameuser' => 'ସଭ୍ୟ�୍କ ନାମଟି ବଦଳାଇବେ',
	'renameuser-linkoncontribs' => 'ସଭ୍ୟ�୍କ ନାମଟି ବଦଳାଇବେ',
	'renameuser-linkoncontribs-text' => 'ଏହି ସଭ୍ୟ�୍କର ନାମ ବଦଳାଇବେ',
	'renameuser-desc' => "ଜଣେ ସଭ୍ୟ�୍କର ନାମ ବଦଳାଇବା ପାଇଁ ଏକ [[Special:Renameuser|ବିଶେଷ ପୃଷ୍ଠା]] ଯୋଡ଼ିଥାଏ ।(''ନୂଆ ନାମକରଣ'' ଅଧିକାର ଲୋଡ଼ା)",
	'renameuserold' => 'ଏବେକାର ଇଉଜର ନାମ:',
	'renameusernew' => 'ନୂଆ ଇଉଜର ନାମ:',
	'renameuserreason' => 'ନାମ ବଦଳାଇବାର କାରଣ:',
	'renameusermove' => 'ସଭ୍ୟ, ତାହା�୍କର ଆଲୋଚନା ପୃଷ୍ଠାମାନ�୍କୁ (ତଥା ସାନପୃଷ୍ଠାମାନ�୍କୁ)ନୂଆ ନାମକୁ ଘୁଞ୍ଚାଇବେ',
	'renameusersuppress' => 'ନୂଆ ନାମକୁ ପୁନପ୍ରେରଣ କରନ୍ତୁ ନାହିଁ',
	'renameuserreserve' => 'ଭବିଷ୍ୟତ ବ୍ୟବହାରରେ ପୁରୁଣା ଇଉଜର ନାମକୁ ଅଟକାଇ ଦିଅନ୍ତୁ',
	'renameuserwarnings' => 'ଚେତାବନ�:',
	'renameuserconfirm' => 'ହଁ, ସଭ୍ୟ�୍କ ନାମ ବଦଳାଇ ଦେବେ',
	'renameusersubmit' => 'ଦାଖଲକରିବା',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" ନାମକ ସଭ୍ୟଜଣକ ଏଠାରେ ନାହାନ୍ତି ।',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" ନାମକ ସଭ୍ୟଜଣକ ଆଗରୁ ଅଛନ୍ତି ।',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" ଇଉଜର ନାମଟି ଅଚଳ ଅଟେ ।',
	'renameuser-error-request' => 'ଅନୁରୋଧ ଗ୍ରହଣ କରିବାରେ ଏକ ଅସୁବିଧା ହେଲା ।
ଦୟାକରି ପଛକୁ ଫେରି ଆଉଥରେ ଚେଷ୍ଟା କରନ୍ତୁ ।',
	'renameuser-error-same-user' => 'ଆଗ ଭଳି ଆପଣ ଜଣେ ସଭ୍ୟ�୍କର ନାମ ବଦଳାଇପାରିବେ ନାହିଁ ।',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" ସଭ୍ୟ�୍କ ନାମ "<nowiki>$2</nowiki>"କୁ ବଦଳାଗଲା ।',
	'renameuser-page-exists' => '$1 ପୃଷ୍ଠାଟି ଆଗରୁ ଅଛି ଓ ଆଉଥରେ ଲେଖାଯାଇପାରିବ ନାହିଁ ।',
	'renameuser-page-moved' => '$1 ପୃଷ୍ଠାଟିକୁ $2କୁ ଘୁଞ୍ଚାଇ ଦିଆଗଲା ।',
	'renameuser-page-unmoved' => '$1 ପୃଷ୍ଠାଟି $2କୁ ଘୁଞ୍ଚାଯାଇ ପାରିବ ନାହିଁ ।',
	'renameuserlogpage' => 'ସଭ୍ୟ ନାମବଦଳ ଇତିହାସ',
	'renameuserlogpagetext' => 'ସଭ୍ୟ�୍କ ନାମ ବଦଳର ଏହା ଏକ ଇତିହାସ ।',
	'renameuserlogentry' => '$1 ରୁ "$2" କୁ ନାମ ବଦଳାଗଲା',
	'renameuser-log' => '{{PLURAL:$1|ସମ୍ପାଦନାଟିଏ|$1 ଗୋଟି ସମ୍ପାଦନା}} । କାରଣ: $2',
	'renameuser-move-log' => 'ସଭ୍ୟ "[[User:$1|$1]]"ରୁ "[[User:$2|$2]]"କୁ ନାମ ବଦଳ କଲାବେଳେ ବେଳେ ଛାଏଁ ଛାଏଁ ପୃଷ୍ଠାଟି ଘୁଞ୍ଚାଇ ଦିଆଗଲା',
	'right-renameuser' => 'ସଭ୍ୟମାନ�୍କ ନାମଟି ବଦଳାଇବେ',
	'renameuser-renamed-notice' => 'ଏହି ସଭ୍ୟ�୍କ ନାମ ବଦଳାଯାଇଅଛି ।
ତଳେ ଅବଗତି ନିମନ୍ତେ ନାମ ବଦଳ ଇତିହାସ ଦିଆଗଲା ।',
);

/** Ossetic (И�он)
 * @author Amikeco
 */
$messages['os'] = array(
	'renameuser' => 'А�хайæджы ном баив',
	'renameuserold' => 'Ны�ы ном:',
	'renameusernew' => 'Ног ном:',
	'renameuserreason' => 'Ном ивыны аххос:',
	'renameusersubmit' => 'Афтæ уæд',
	'renameuserlogpage' => 'А�хайджыты нæмттæ ивыны лог',
);

/** Picard (Picard)
 * @author Geoleplubo
 */
$messages['pcd'] = array(
	'renameuser' => "Canger ch'nom d'uzeu",
	'renameusernew' => 'Nouvieu nom dechl uzeu',
	'renameuserreason' => "Motif dech canjemint d'nom",
	'renameuserwarnings' => 'Afute ! :',
	'renameuserconfirm' => 'Oui, érlonmer echl uzeu',
	'renameusererrorinvalid' => 'Ech nom  "<nowiki>$1</nowiki>" est non-val.',
	'renameusersuccess' => 'Echl uzeu "<nowiki>$1</nowiki>" o té érlonmé "<nowiki>$2</nowiki>".',
	'renameuser-page-moved' => "L'pache $1 o té déplachée dsus $2.",
	'renameuser-page-unmoved' => "L'pache $1 ale n'put poin éte déplachée su $2.",
	'renameuserlogpage' => "Jornal d'chés canjemints éd chés noms d'uzeus",
	'renameuserlogpagetext' => "Ch'est un jornal éd chés canjemints d'chés noms d'uzeus.",
	'renameuserlogentry' => '$1 est érlonmé in "$2"',
	'right-renameuser' => 'Érlonmer chés uzeus',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'renameuser' => 'Naame vum Yuuser ennere',
	'renameuserold' => 'Current Yuusernaame:',
	'renameusernew' => 'Nei Yuuser-Naame',
	'renameuserreason' => 'Grund:',
	'renameuserwarnings' => 'Warninge:',
	'renameuserlogentry' => 'hot �$1� nooch �$2� gennert',
	'renameuser-log' => '{{PLURAL:$1|1 Ennering|$1 Enneringe}}. Grund: $2',
);

/** Pälzisch (Pälzisch)
 * @author SPS
 */
$messages['pfl'] = array(
	'renameusersubmit' => 'Benutzer umbenenne',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Maikking
 * @author Nux
 * @author Sp5uhe
 * @author WarX
 * @author Wpedzich
 */
$messages['pl'] = array(
	'renameuser' => 'Zmiana nazwy użytkownika',
	'renameuser-linkoncontribs' => 'zmień nazw� użytkownika',
	'renameuser-linkoncontribs-text' => 'Zmień nazw� tego użytkownika',
	'renameuser-desc' => "Zmiana nazwy użytkownika (wymaga posiadania uprawnień ''renameuser'')",
	'renameuserold' => 'Obecna nazwa użytkownika:',
	'renameusernew' => 'Nowa nazwa użytkownika:',
	'renameuserreason' => 'Przyczyna zmiany nazwy:',
	'renameusermove' => 'Przeniesienie strony osobistej i strony dyskusji użytkownika (oraz ich podstron) pod nową nazw� użytkownika',
	'renameusersuppress' => 'Nie twórz przekierowania do nowej nazwy',
	'renameuserreserve' => 'Zablokuj starą nazw� użytkownika przed możliwością użycia jej',
	'renameuserwarnings' => 'Ostrzeżenia:',
	'renameuserconfirm' => 'Zmień nazw� użytkownika',
	'renameusersubmit' => 'Zmień',
	'renameusererrordoesnotexist' => 'Użytkownik �<nowiki>$1</nowiki>� nie istnieje',
	'renameusererrorexists' => 'Użytkownik �<nowiki>$1</nowiki>� już istnieje',
	'renameusererrorinvalid' => 'Niepoprawna nazwa użytkownika �<nowiki>$1</nowiki>�',
	'renameuser-error-request' => 'Wystąpił problem z odbiorem żądania.
Cofnij si� i spróbuj jeszcze raz.',
	'renameuser-error-same-user' => 'Nie możesz zmienić nazwy użytkownika na taką samą jaka była wcześniej.',
	'renameusersuccess' => 'Nazwa użytkownika �<nowiki>$1</nowiki>� została zmieniona na �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Strona �$1� już istnieje i nie może być automatycznie nadpisana.',
	'renameuser-page-moved' => 'Strona �$1� została przeniesiona pod nazw� �$2�.',
	'renameuser-page-unmoved' => 'Strona �$1� nie mogła zostać przeniesiona pod nazw� �$2�.',
	'renameuserlogpage' => 'Zmiany nazw użytkowników',
	'renameuserlogpagetext' => 'To jest rejestr zmian nazw użytkowników',
	'renameuserlogentry' => 'zmienił nazw� użytkownika $1 na �$2�',
	'renameuser-log' => '$1 {{PLURAL:$1|edycja|edycje|edycji}}. Powód: $2',
	'renameuser-move-log' => 'Automatyczne przeniesienie stron użytkownika po zmianie nazwy konta z �[[User:$1|$1]]� na �[[User:$2|$2]]�',
	'right-renameuser' => 'Zmiana nazw kont użytkowników',
	'renameuser-renamed-notice' => 'Nazwa konta {{GENDER:$1|tego użytkownika|tej użytkowniczki|użytkownika(�czki)}} została zmieniona.
Rejestr zmian nazw kont użytkowników znajduje si� poniżej.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'renameuser' => "Arbatié n'utent",
	'renameuser-linkoncontribs' => "arbatié n'utent",
	'renameuser-linkoncontribs-text' => "Arbatié st'utent-sì",
	'renameuser-desc' => "A gionta na [[Special:Renameuser|pàgina special]] për arnominé n'utent (a-i é dabzògn dël drit ''renameuser'')",
	'renameuserold' => 'Stranòm corent:',
	'renameusernew' => 'Stranòm neuv:',
	'renameuserreason' => "Rason ch'as cambia stranòm:",
	'renameusermove' => 'Tramuda ëdcò la pàgina utent e cola dle ciaciarade (con tute soe sotapàgine) a lë stranòm neuv',
	'renameusersuppress' => 'Creé nen na ridiression al nòm neuv',
	'renameuserreserve' => 'Blòca lë stanòm vej da future utilisassion',
	'renameuserwarnings' => 'Atension:',
	'renameuserconfirm' => "É!, arnòmina l'utent",
	'renameusersubmit' => 'Falo',
	'renameusererrordoesnotexist' => 'A-i é pa gnun utent ch\'as ës-ciama "<nowiki>$1</nowiki>"',
	'renameusererrorexists' => 'N\'utent ch\'as ës-ciama "<nowiki>$1</nowiki>" a-i é già',
	'renameusererrorinvalid' => 'Lë stranòm "<nowiki>$1</nowiki>" a l\'é nen bon',
	'renameuser-error-request' => "A l'é stàit-ie un problema con l'esecussion ëd l'arcesta.
Për piasì torna andré e preuva torna.",
	'renameuser-error-same-user' => "It peule pa arnominé n'utent con ël midem nòm ëd prima.",
	'renameusersuccess' => 'L\'utent "<nowiki>$1</nowiki>" a l\'é stait arbatià an "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => "La pàgina $1 a-i é già e as peul nen passe-ie dzora n'aotomàtich.",
	'renameuser-page-moved' => "La pàgina $1 a l'ha fait San Martin a $2.",
	'renameuser-page-unmoved' => "La pàgina $1 a l'é pa podusse tramudé a $2.",
	'renameuserlogpage' => "Registr dj'arbatiagi",
	'renameuserlogpagetext' => "Sossì a l'é un registr dle modìfiche djë stranòm dj'utent",
	'renameuserlogentry' => 'a l\'ha arbatià $1 an "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 modìfica|$1 modìfiche}}. Rason: $2',
	'renameuser-move-log' => 'Pàgina utent tramudà n\'aotomàtich damëntrè ch\'as arbatiava "[[User:$1|$1]]" an "[[User:$2|$2]]"',
	'right-renameuser' => "Arnòmina j'utent",
	'renameuser-renamed-notice' => "St'utent-sì a l'é stàit arnominà.
Ël registr ëd l'arnòmina a l'é dàit sota për arferiment.",
);

/** Western Punjabi (پنجابی)
 * @author Khalid Mahmood
 */
$messages['pnb'] = array(
	'renameuser' => 'ورتن والے دا ہور ناں',
	'renameuser-linkoncontribs' => 'ورتن والے دا ہور ناں',
	'renameuser-linkoncontribs-text' => 'ایس ورتن والے دا ہور ناں رکھو',
	'renameuser-desc' => "جوڑدا اے اک [[Special:Renameuser|خاص صفہ]] اک ورتن والے نوں ہور ناں دین لئی ( ''renameuser'' حق دی لوڑ اے۔)",
	'renameuserold' => 'ہن والا ورتن والا ناں:',
	'renameusernew' => 'نواں ورتن والا ناں:',
	'renameuserreason' => 'ہور ناں رکھن دی وجہ:',
	'renameusermove' => 'ورتن تے گل بات صفے نوں تے نال دے نکیاں صفیاں نوں نویں ناں ول لے چلو۔',
	'renameusersuppress' => 'ایس نویں ناں نال ریڈائرکٹ ناں بناؤ۔',
	'renameuserreserve' => 'پرانے ورتن والے ناں نوں اگے ورتے جان توں روکو',
	'renameuserwarnings' => 'خبردار',
	'renameuserconfirm' => 'ہاں، ورتن والے دا فیر ناں رکھو',
	'renameusersubmit' => 'پیش کرو',
	'renameusererrordoesnotexist' => 'ورتنوالا "<نوکی>$1</نوکی>" ہے ای نئیں۔',
	'renameusererrorexists' => 'ورتنوالا "<نوکی>$1</نوکی>" پہلے ای ہیگا اے۔',
	'renameusererrorinvalid' => 'ورتن ناں "<نوکی>$1</نوکی>" نئیں چل سکدا۔',
	'renameuser-error-request' => 'گل منن چ مسلہ اے۔ مہربانی کرکے پچھے جاؤ تے فیر کوشش کرو۔',
	'renameuser-error-same-user' => 'تسیں فیر پہلے وانگوں اک ورتن والے دا ناں فیر نئیں رکھ سکدے۔',
	'renameusersuccess' => 'ورتن والا "<nowiki>$1</nowiki>" دا ناں بدل کے "<nowiki>$1</nowiki>" رکھ دتا گیا اے۔',
	'renameuser-page-exists' => 'صفہ $1 پہلے ای ہیگا اے تے ایدے تے اپنے آپ نئیں لکھیا جاسکدا۔',
	'renameuser-page-moved' => 'صفہ $1 نوں $2 ول لجایا گیا اے۔',
	'renameuser-page-unmoved' => 'صفہ $1 ، $2 ول نئیں لجایا جاسکدا۔',
	'renameuserlogpage' => 'ورتن ہور ناں لاگ',
	'renameuserlogpagetext' => 'ورتن ناواں چ تبدیلیاں دی اے لاگ اے۔',
	'renameuserlogentry' => '$1 بدل کے "$2" رکھیا گیا۔',
	'renameuser-log' => '{{انیک:$1|1 تبدیلی|$1 تبدیلیاں}}. وجہ: $2',
	'renameuser-move-log' => 'اپنے آپ صفے ٹرے "[[ورتن والا:$1|$1]]" دا ناں "[[ورتن والا:$2|$2]]" پلٹدیاں ہویاں',
	'right-renameuser' => 'ورتن والے دا ہور ناں',
	'renameuser-renamed-notice' => 'ایس ورتن والے دا ناں بدلیا گیا اے۔
ناں بدلن والی لاگ اتے پتے لئی تھلے دتی گئی اے۔',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'renameuser' => 'کارن-نوم بدلول',
	'renameuser-linkoncontribs' => 'د کارن نوم بدلول',
	'renameuser-linkoncontribs-text' => 'د دې کارن نوم بدلول',
	'renameuserold' => 'اوسنی کارن-نوم:',
	'renameusernew' => 'نوی کارن-نوم:',
	'renameuserreason' => 'د نوم د بدلون سبب:',
	'renameuserwarnings' => 'ګواښنې:',
	'renameuserconfirm' => 'هو، کارن-نوم بدلوم',
	'renameusersubmit' => 'سپارل',
	'renameusererrordoesnotexist' => 'د "<nowiki>$1</nowiki>" په نامه کوم کارن نه شته.',
	'renameusererrorexists' => 'د "<nowiki>$1</nowiki>" په نامه يو کارن له پخوا نه شته.',
	'renameusererrorinvalid' => 'د "<nowiki>$1</nowiki>" کارن نوم سم نه دی.',
	'renameuser-error-request' => 'د غوښتنې په ترلاسه کولو کې يوه ستونزه راپېښه شوه.
مهرباني وکړی بېرته پرشا ولاړ شی او يو ځل بيا پرې کوښښ وکړی.',
	'renameuser-page-moved' => 'د $1 مخ $2 ته ولېږدل شو.',
	'renameuserlogpage' => 'د کارن-نوم يادښت',
	'renameuserlogentry' => 'د $1 نوم، "$2" ته بدل شو',
	'renameuser-log' => '{{PLURAL:$1|1 سمون|$1 سمونونه}}. سبب: $2',
	'right-renameuser' => 'کارن-نومونه بدلول',
);

/** Portuguese (Português)
 * @author 555
 * @author Giro720
 * @author Hamilton Abreu
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'renameuser' => 'Alterar o nome do utilizador',
	'renameuser-linkoncontribs' => 'alterar nome do utilizador',
	'renameuser-linkoncontribs-text' => 'Alterar o nome deste utilizador',
	'renameuser-desc' => "[[Special:Renameuser|Página especial]] para alterar o nome de um utilizador (requer o privilégio ''renameuser'')",
	'renameuserold' => 'Nome de utilizador actual:',
	'renameusernew' => 'Novo nome de utilizador:',
	'renameuserreason' => 'Motivo da alteração de nome:',
	'renameusermove' => 'Mover as páginas e subpáginas de utilizador e as respectivas discussões para o novo nome',
	'renameusersuppress' => 'Não criar redireccionamentos para o novo nome',
	'renameuserreserve' => 'Impedir novos usos do antigo nome de utilizador',
	'renameuserwarnings' => 'Alertas:',
	'renameuserconfirm' => 'Sim, renomeie o utilizador',
	'renameusersubmit' => 'Enviar',
	'renameusererrordoesnotexist' => 'O utilizador "<nowiki>$1</nowiki>" não existe.',
	'renameusererrorexists' => 'Já existe um utilizador "<nowiki>$1</nowiki>".',
	'renameusererrorinvalid' => 'O nome de utilizador "<nowiki>$1</nowiki>" é inválido.',
	'renameuser-error-request' => 'Houve um problema ao receber este pedido.
Retorne e tente de novo.',
	'renameuser-error-same-user' => 'Não é possível alterar o nome de um utilizador para o nome anterior.',
	'renameusersuccess' => 'O nome do utilizador "<nowiki>$1</nowiki>" foi alterado para "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Já existe a página $1. Não é possível sobrescrever automaticamente.',
	'renameuser-page-moved' => 'A página $1 foi movida para $2.',
	'renameuser-page-unmoved' => 'Não foi possível mover a página $1 para $2.',
	'renameuserlogpage' => 'Registo de alteração do nome de utilizadores',
	'renameuserlogpagetext' => 'Este é um registo de alterações efectuadas a nomes de utilizadores.',
	'renameuserlogentry' => 'mudou nome $1 para "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edição|$1 edições}}. Motivo: $2',
	'renameuser-move-log' => 'Página movida automaticamente ao alterar o nome do utilizador "[[User:$1|$1]]" para "[[User:$2|$2]]"',
	'right-renameuser' => 'Alterar nomes de utilizadores',
	'renameuser-renamed-notice' => 'Este nome de utilizador foi alterado.
É apresentado abaixo o registo de alteração do nome de utilizadores.',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 * @author Giro720
 */
$messages['pt-br'] = array(
	'renameuser' => 'Renomear usuário',
	'renameuser-linkoncontribs' => 'renomear usuário',
	'renameuser-linkoncontribs-text' => 'excluir este usuário',
	'renameuser-desc' => "Adiciona uma [[Special:Renameuser|página especial]] para renomear um usuário (requer privilégio ''renameuser'')",
	'renameuserold' => 'Nome de usuário atual:',
	'renameusernew' => 'Novo nome de usuário:',
	'renameuserreason' => 'Motivo da alteração de nome:',
	'renameusermove' => 'Mover as páginas de usuário, páginas de discussão de usuário e sub-páginas para o novo nome',
	'renameusersuppress' => 'Não criar redirecionamentos para o novo nome',
	'renameuserreserve' => 'Impedir novos usos do antigo nome de usuário',
	'renameuserwarnings' => 'Alertas:',
	'renameuserconfirm' => 'Sim, renomeie o usuário',
	'renameusersubmit' => 'Enviar',
	'renameusererrordoesnotexist' => 'Não existe um usuário "<nowiki>$1</nowiki>".',
	'renameusererrorexists' => 'Já existe um usuário "<nowiki>$1</nowiki>".',
	'renameusererrorinvalid' => 'O nome de usuário "<nowiki>$1</nowiki>" é inválido.',
	'renameuser-error-request' => 'Houve um problema ao receber este pedido.
Retorne e tente novamente.',
	'renameuser-error-same-user' => 'Não é possível renomear um usuário para o nome anterior.',
	'renameusersuccess' => 'O usuário "<nowiki>$1</nowiki>" foi renomeado para "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Já existe a página $1. Não é possível sobrescrever automaticamente.',
	'renameuser-page-moved' => 'A página $1 foi movida com sucesso para $2.',
	'renameuser-page-unmoved' => 'Não foi possível mover a página $1 para $2.',
	'renameuserlogpage' => 'Registro de renomeação de usuários',
	'renameuserlogpagetext' => 'Este é um registro de alterações efetuadas em nomes de usuários.',
	'renameuserlogentry' => 'renomeou $1 para "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 edição|$1 edições}}. Motivo: $2',
	'renameuser-move-log' => 'Páginas foram movidas automaticamente ao renomear o usuário "[[User:$1|$1]]" para "[[User:$2|$2]]"',
	'right-renameuser' => 'Renomear usuários',
	'renameuser-renamed-notice' => 'Este usuário foi renomeado.
O registro de renomeação é fornecido abaixo para referência.',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'renameuser' => 'Ruraqpa sutinta hukchay',
	'renameuser-linkoncontribs' => 'ruraqpa sutinta hukchay',
	'renameuser-linkoncontribs-text' => 'Kay ruraqpa sutinta hukchay',
	'renameuser-desc' => "[[Special:Renameuser|Sapaq p'anqatam]] yapan ruraqpa sutinta hukchanapaq (''renameuser'' hayñi kana tiyan)",
	'renameuserold' => 'Kunan ruraqpa sutin:',
	'renameusernew' => 'Musuq ruraqpa sutin:',
	'renameuserreason' => 'Imarayku ruraqpa sutinta hukchasqa:',
	'renameusermove' => "Ruraqpa p'anqanta, rimachinanta (urin p'anqankunatapas) musuq sutinman astay",
	'renameusersuppress' => 'Musuq sutiman ama pusapunata kamariychu',
	'renameuserreserve' => "Ruraqpa mawk'a sutinta qhipaq pacha suti kanamanta hark'ay",
	'renameuserwarnings' => 'Yuyampaykuna:',
	'renameuserconfirm' => 'Arí, ruraqpa sutinta hukchay',
	'renameusersubmit' => 'Kachay',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" sutiyuq ruraqqa manam kanchu.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" sutiyuq ruraqqa kachkanñam.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" nisqa sutiqa manam allinchu.',
	'renameuser-error-request' => 'Manam atinichu mañasqaykita chaskiyta.  Ama hina kaspa, ñawpaqman kutimuspa musuqmanta ruraykachay.',
	'renameuser-error-same-user' => 'Manam atinkichu ruraqpa sutinta ñawpaq suti hinalla sutinman hukchayta.',
	'renameusersuccess' => 'Ruraqpa "<nowiki>$1</nowiki>" nisqa sutinqa "<nowiki>$2</nowiki>" nisqa sutinman hukchasqañam.',
	'renameuser-page-exists' => '"<nowiki>$1</nowiki>" sutiyuq p\'anqaqa kachkanñam. Manam atinallachu kikinmanta huknachay.',
	'renameuser-page-moved' => '"<nowiki>$1</nowiki>" ñawpa sutiyuq ruraqpa p\'anqanqa "<nowiki>$2</nowiki>" nisqa musuq p\'anqanman astasqañam.',
	'renameuser-page-unmoved' => 'Manam atinichu "<nowiki>$1</nowiki>" ñawpa sutiyuq ruraqpa p\'anqanta "<nowiki>$2</nowiki>" nisqa musuq p\'anqanman astayta.',
	'renameuserlogpage' => "Ruraqpa sutin hukchay hallch'a",
	'renameuserlogpagetext' => "Kayqa ruraqkunap sutinkunata hukchaymanta hallch'am",
	'renameuserlogentry' => '$1-pa sutinta "$2" sutiman hukchasqa',
	'renameuser-log' => "{{PLURAL:$1|1 llamk'apusqa|$1 llamk'apusqakuna}}, kayrayku: $2",
	'renameuser-move-log' => '"[[User:$1|$1]]" ruraqpa sutinta "[[User:$2|$2]]" sutiman hukchaspa kikinmanta ruraqpa p\'anqatapas astan',
	'right-renameuser' => 'Ruraqpa sutinkunata hukchay',
	'renameuser-renamed-notice' => "Kay ruraqpa sutinqa hukchasqañam.
Kay qatiqpiqa hukchay hallch'atam rikunki.",
);

/** Romani (Romani)
 * @author Desiphral
 */
$messages['rmy'] = array(
	'renameusersubmit' => 'De le jeneske aver nav',
);

/** Romanian (Română)
 * @author Cin
 * @author Emily
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Memo18
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'renameuser' => 'Redenumire utilizator',
	'renameuser-linkoncontribs' => 'redenumirea utilizatorului',
	'renameuser-linkoncontribs-text' => 'Redenumeşte acest utilizator',
	'renameuser-desc' => "Adaugă o [[Special:Renameuser|pagină specială]] pentru a redenumi un utilizator (necesită drept de ''renameuser'')",
	'renameuserold' => 'Numele de utilizator existent:',
	'renameusernew' => 'Noul nume de utilizator:',
	'renameuserreason' => 'Motivul schimbării numelui:',
	'renameusermove' => 'Mută pagina de utilizator �i pagina de discuții (�i subpaginile lor) la noul nume',
	'renameusersuppress' => 'Nu crea redirecționări către noul nume',
	'renameuserreserve' => 'Blochează vechiul nume de utilizator pentru utilizări viitoare',
	'renameuserwarnings' => 'Avertizări:',
	'renameuserconfirm' => 'Da, redenume�te utilizatorul',
	'renameusersubmit' => 'Trimite',
	'renameusererrordoesnotexist' => 'Utilizatorul �<nowiki>$1</nowiki>� nu există.',
	'renameusererrorexists' => 'Utilizatorul �<nowiki>$1</nowiki>� există deja.',
	'renameusererrorinvalid' => 'Numele de utilizator �<nowiki>$1</nowiki>� este invalid.',
	'renameuser-error-request' => 'Am întâmpinat o problemă în procesul de recepționare a cererii.
Vă rugăm să vă întoarceți �i să reîncercați.',
	'renameuser-error-same-user' => 'Nu puteți redenumi un utilizator la acela�i nume ca �i înainte.',
	'renameusersuccess' => 'Utilizatorul �$1� a fost redenumit în �$2�',
	'renameuser-page-exists' => 'Pagina $1 există deja �i nu poate fi suprascrisă automat.',
	'renameuser-page-moved' => 'Pagina $1 a fost redenumită în $2.',
	'renameuser-page-unmoved' => 'Pagina $1 nu poate fi redenumită în $2.',
	'renameuserlogpage' => 'Jurnal redenumiri utilizatori',
	'renameuserlogpagetext' => 'Acesta este un jurnal al modificărilor de nume de utilizator',
	'renameuserlogentry' => 'a redenumit $1 în �$2�',
	'renameuser-log' => '{{PLURAL:$1|o contribuție|$1 contribuții}}. Motiv: $2',
	'renameuser-move-log' => 'Pagină mutată automat la redenumirea utilizatorului de la �[[User:$1|$1]]� la �[[User:$2|$2]]�',
	'right-renameuser' => 'Redenume�te utilizatori',
	'renameuser-renamed-notice' => 'Acestui utilizator i-a fost schimbat numele.
Jurnalul redenumirilor este furnizat mai jos pentru referință.',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'renameuser' => "Renomene l'utende",
	'renameuser-linkoncontribs' => "renomene l'utende",
	'renameuser-linkoncontribs-text' => 'Renomene quiste utende',
	'renameuser-desc' => "Aggiunge 'na [[Special:Renameuser|pàgena speciale]] pe renomena 'n'utende (abbesogne de le deritte ''renameuser'')",
	'renameuserold' => "Nome de l'utende de mò:",
	'renameusernew' => "Nome de l'utende nuève:",
	'renameuserreason' => "Mutive d'u cangiamende:",
	'renameusermove' => "Spuèste utende e pàgene de le 'ngazzaminde (e le sottopàggene) a 'u nome nuève",
	'renameusersuppress' => "Nò ccrejà ridirezionaminde sus a 'u nome nuève",
	'renameuserreserve' => "Blocche 'u nome utende vicchije da le ause future",
	'renameuserwarnings' => 'Avvise:',
	'renameuserconfirm' => "Sine, cange 'u nome a l'utende",
	'renameusersubmit' => 'Conferme',
	'renameusererrordoesnotexist' => 'L\'utende "<nowiki>$1</nowiki>" non g\'esiste.',
	'renameusererrorexists' => 'L\'utende "<nowiki>$1</nowiki>" esiste ggià.',
	'renameusererrorinvalid' => '\'U nome utende "<nowiki>$1</nowiki>" non è valide.',
	'renameuser-error-request' => "Stave 'nu probbleme cu 'a ricezione d'a richieste.<br />
Pe piacere tuèrne rrete e pruève 'n'otra vote.",
	'renameuser-error-same-user' => "Tu non ge puè renomenà 'n'utende cu 'u stesse nome d'apprime.",
	'renameusersuccess' => 'L\'utende "<nowiki>$1</nowiki>" ha cangiate \'u nome jndr\'à "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => "'A pàgene $1 già esiste e non ge se pò automaticamende sovrascrivere.",
	'renameuser-page-moved' => "'A pàgene $1 ha state spustate sus a $2.",
	'renameuser-page-unmoved' => "'A pàgene $1 non ge pò essere spustate sus a $2.",
	'renameuserlogpage' => 'Archivije de le renomenaminde de le utinde',
	'renameuserlogpagetext' => "Quiste jè l'archivije de le cangiaminde de le nome de l'utinde.",
	'renameuserlogentry' => 'renomenate da $1 a "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 cangiamende|$1 cangiaminde}}. Mutive: $2',
	'renameuser-move-log' => 'Pàgena spustate automaticamende quanne è renomenate l\'utende "[[User:$1|$1]]" jndr\'à "[[User:$2|$2]]"',
	'right-renameuser' => "Rennomene l'utinde",
	'renameuser-renamed-notice' => "Stu utende ha state renomenate.
L'archivije de le renomenaziune 'u iacchie aqquà sotte cumme referimende.",
);

/** Russian (Русский)
 * @author Ahonc
 * @author EugeneZelenko
 * @author Innv
 * @author KPu3uC B Poccuu
 * @author Kaganer
 * @author Александ� Сигачёв
 */
$messages['ru'] = array(
	'renameuser' => 'Пе�еименовать участника',
	'renameuser-linkoncontribs' => 'пе�еименовать участника',
	'renameuser-linkoncontribs-text' => 'Пе�еименовать этого участника',
	'renameuser-desc' => 'Добавляет [[Special:Renameuser|возможность]] пе�еименования пользователей (т�ебуется п�аво <code>renameuser</code>)',
	'renameuserold' => 'Имя в настоящий момент:',
	'renameusernew' => 'Новое имя:',
	'renameuserreason' => 'П�ичина пе�еименования:',
	'renameusermove' => 'Пе�еименовать также ст�аницу участника, личное обсуждение и их подст�аницы',
	'renameusersuppress' => 'Не создавать пе�енап�авлений на новое имя',
	'renameuserreserve' => 'За�езе�ви�овать ста�ое имя участника для использования в будущем',
	'renameuserwarnings' => 'П�едуп�еждения:',
	'renameuserconfirm' => 'Да, пе�еименовать участника',
	'renameusersubmit' => 'Выполнить',
	'renameusererrordoesnotexist' => 'Участник с именем «<nowiki>$1</nowiki>» не за�егист�и�ован.',
	'renameusererrorexists' => 'Участник с именем «<nowiki>$1</nowiki>» уже за�егист�и�ован.',
	'renameusererrorinvalid' => 'Недопустимое имя участника «<nowiki>$1</nowiki>»',
	'renameuser-error-request' => 'Возникли зат�уднения с получением зап�оса. Пожалуйста, ве�нитесь назад и повто�ите ещё �аз.',
	'renameuser-error-same-user' => 'Вы не можете пе�еименовать участника в тоже имя, что и было �аньше.',
	'renameusersuccess' => 'Участник «<nowiki>$1</nowiki>» был пе�еименован в «<nowiki>$2</nowiki>».',
	'renameuser-page-exists' => 'Ст�аница $1 уже существует и не может быть пе�езаписана автоматически.',
	'renameuser-page-moved' => 'Ст�аница $1 была пе�еименована в $2.',
	'renameuser-page-unmoved' => 'Ст�аница $1 не может быть пе�еименована в $2.',
	'renameuserlogpage' => 'Жу�нал пе�еименований участников',
	'renameuserlogpagetext' => 'Это жу�нал п�оизведённых пе�еименований за�егист�и�ованных участников.',
	'renameuserlogentry' => 'пе�еименовал «$1» в «$2»',
	'renameuser-log' => '$1 {{PLURAL:$1|п�авка|п�авки|п�авок}}. П�ичина: $2',
	'renameuser-move-log' => 'Автоматически в связи с пе�еименованием учётной записи «[[User:$1|$1]]» в «[[User:$2|$2]]»',
	'right-renameuser' => 'пе�еименование участников',
	'renameuser-renamed-notice' => 'Этот участник был пе�еименован.
Ниже для сп�авки п�иведён жу�нал пе�еименований.',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'renameuser' => 'Пе�еменоватихоснователя',
	'renameuser-linkoncontribs' => 'пе�еменовати хоснователя',
	'renameuser-linkoncontribs-text' => 'Пе�еменовати того хоснователя',
	'renameuser-desc' => 'П�идасть [[Special:Renameuser|шпеціалну сто�інку]] п�о пе�еменованя хоснователя (т�еба п�ава "renameuser")',
	'renameuserold' => 'Актуалне мено:',
	'renameusernew' => 'Нове мено:',
	'renameuserreason' => 'П�ичіна пе�еменованя:',
	'renameusermove' => 'Пе�еменовати тыж сто�інкы хоснователя, сто�інкы діскузії і їх підсто�інкы',
	'renameusersuppress' => 'Не ство�юйте нап�ямлїня на нову назву',
	'renameuserreserve' => 'Блоковати нову �еґіст�ацію ста�ого мена хоснователя',
	'renameuserwarnings' => 'Ва�ованя:',
	'renameuserconfirm' => 'Гей, пе�еменовати хоснователя',
	'renameusersubmit' => 'Выконати',
	'renameusererrordoesnotexist' => 'Хоснователь з іменом �<nowiki>$1</nowiki>� не єствує',
	'renameusererrorexists' => 'Хоснователь з іменом �<nowiki>$1</nowiki>� уж єствує',
	'renameusererrorinvalid' => 'Хоснователське імя �<nowiki>$1</nowiki>� ся не дасть хосновати',
	'renameuser-error-request' => 'Почас п�иїманя пожадавкы дішло ку хыбі. Ве�нийте ся і сп�обуйте то знову.',
	'renameuser-error-same-user' => 'Нове імя хоснователя є тото саме як дотепе�їшнє.',
	'renameusersuccess' => 'Хоснователь �<nowiki>$1</nowiki>� быв успішно пе�еменованый на �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Сто�інка $1 уж екзістує і не може быти автоматічно пе�еписана.',
	'renameuser-page-moved' => 'Сто�інка $1 была пе�еменована на $2.',
	'renameuser-page-unmoved' => 'Сто�інка $1 не може быти пе�еменована на $2.',
	'renameuserlogpage' => 'Лоґ пе�еменовань хоснователїв',
	'renameuserlogpagetext' => 'Тото є п�отокол  пе�еменовань хоснователїв',
	'renameuserlogentry' => 'пе�еменовав $1 на �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 едітованя|$1 едітовань|$1 едітовань}}. П�ичіна: $2',
	'renameuser-move-log' => 'Автоматічне пе�еменованя сто�інкы почас пе�еменованя хоснователя �[[User:$1|$1]]� на �[[User:$2|$2]]�',
	'right-renameuser' => 'Пе�еменованя хоснователїв',
	'renameuser-renamed-notice' => 'Тот хоснователь быв пе�еменованый.
П�о пе�егляд є ниже указаный выпис з лоґу пе�еменовань хоснователїв.',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 */
$messages['sa'] = array(
	'renameuserwarnings' => 'चेतावन�:',
);

/** Sakha (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'renameuser' => 'Кыттааччы аатын ула�ыт',
	'renameuser-linkoncontribs' => 'кыттааччы аатын ула�ытыы',
	'renameuser-linkoncontribs-text' => 'Бу кыттааччы аатын ула�ыт',
	'renameuser-desc' => "Кыттааччы аатын ула�ытыы (''renameuser'' бы�ааба наада)",
	'renameuserold' => 'Билиҥҥи аата:',
	'renameusernew' => 'Саҥа аата:',
	'renameuserreason' => 'Аатын ула�ыппыт тө�үөтэ:',
	'renameusermove' => 'Кыттааччы аатын кытта кэпсэтэ� си�ин, уонна атын си�эйдэ�ин аатта�ын ула�ыт',
	'renameusersuppress' => 'Саҥа аакка утаа�ыыла�ы оҥо�ума',
	'renameuserreserve' => 'Кыттааччы у�укку аатын кэлин тутта�га анаан хаалла�',
	'renameuserwarnings' => 'Сэ�этиилэ�:',
	'renameuserconfirm' => 'Сөп, аатын ула�ыт',
	'renameusersubmit' => 'Толо�',
	'renameusererrordoesnotexist' => 'Маннык ааттаах кыттааччы «<nowiki>$1</nowiki>» бэлиэтэммэтэх.',
	'renameusererrorexists' => 'Маннык ааттаах кыттааччы "<nowiki>$1</nowiki>" номнуо баа�.',
	'renameusererrorinvalid' => 'Маннык аат "<nowiki>$1</nowiki>" көҥуллэммэт.',
	'renameuser-error-request' => 'Зап�ос тутуута моһуоктанна. Бука диэн төнүн уонна хатылаа.',
	'renameuser-error-same-user' => 'Кыттааччы аатын у�укку аатыга� ула�ыта� табыллыбат.',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" кыттааччы мантан ыла "<nowiki>$2</nowiki>" диэн ааттанна.',
	'renameuser-page-exists' => '$1 си�эй номнуо баа� онон аптамаатынан хат су�улла� кыаҕа суох.',
	'renameuser-page-moved' => '$1 си�эй маннык ааттаммыт $2.',
	'renameuser-page-unmoved' => '$1 си�эй маннык $2 ааттана� кыаҕа суох.',
	'renameuserlogpage' => 'Кыттааччыла� аатта�ын ула�ытыыла�ын су�унаала',
	'renameuserlogpagetext' => 'Бу бэлиэтэммит кыттааччыла� аатта�ын ула�ытыыла�ын су�унаала',
	'renameuserlogentry' => '$1 аатын манныкка ула�ытта "$2"',
	'renameuser-log' => '{{PLURAL:$1|Бии�дэ|$1 төгүл}} ула�ыйбыт. Тө�үөтэ: $2',
	'renameuser-move-log' => '«[[User:$1|$1]]» аата «[[User:$2|$2]]» буолбутунан аптамаатынан',
	'right-renameuser' => 'Кыттааччыла� аатта�ын ула�ытыы',
	'renameuser-renamed-notice' => 'Бу кыттааччы аата ула�ыйбыт.
Алла�а аат ула�ыйыытын су�унаала көстө�.',
);

/** Sardinian (Sardu)
 * @author Andria
 * @author Marzedu
 */
$messages['sc'] = array(
	'renameusernew' => 'Nou nùmene usuàriu:',
);

/** Sicilian (Sicilianu)
 * @author Santu
 */
$messages['scn'] = array(
	'renameuser' => 'Rinòmina utenti',
	'renameuser-desc' => "Funzioni pi rinuminari n'utenti (addumanna li diritti di ''renameuser'')",
	'renameuserold' => 'Nomu utenti dô prisenti:',
	'renameusernew' => 'Novu nomu utenti:',
	'renameuserreason' => 'Mutivu dû caciu di nomu',
	'renameusermove' => 'Rinòmina macari la pàggina utenti, la pàggina di discussioni e li suttapàggini',
	'renameuserreserve' => 'Sarva lu vecchiu utenti pi futuri usi',
	'renameuserwarnings' => 'Avvisi:',
	'renameuserconfirm' => "Si, rinòmina st'utenti",
	'renameusersubmit' => 'Manna',
	'renameusererrordoesnotexist' => 'L\'utenti "<nowiki>$1</nowiki>" nun esisti',
	'renameusererrorexists' => 'L\'utenti "<nowiki>$1</nowiki>" c\'è già',
	'renameusererrorinvalid' => 'Lu nomu utenti "<nowiki>$1</nowiki>" nun è vàlidu',
	'renameuser-error-request' => "Si virificau nu prubbrema nnô ricivimentu dâ dumanna. Turnari arredi e pruvari n'àutra vota.",
	'renameuser-error-same-user' => "Nun si pò ri-numinari n'utenti cô stissu nomu c'avìa già.",
	'renameusersuccess' => 'L\'utenti "<nowiki>$1</nowiki>" vinni ri-numinatu \'n "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => "La pàggina $1 c'è già; mpussìbbili suprascrivìrila autumaticamenti.",
	'renameuser-page-moved' => 'La pàggina $1 vinni spustata a $2.',
	'renameuser-page-unmoved' => 'Mpussìbbili mòviri la pàggina $1 a $2.',
	'renameuserlogpage' => 'Utenti ri-numinati',
	'renameuserlogpagetext' => "Di sècutu sunnu elencati li ri-numinazzioni di l'utenti.",
	'renameuserlogentry' => 'hà ri-numinatu $1 \'n "$2"',
	'renameuser-log' => 'Ca havi {{PLURAL:$1|nu cuntribbutu|$1 cuntribbuti}}. Mutivu: $2',
	'renameuser-move-log' => 'Spustamentu autumàticu dâ pàggina - utenti ri-numinatu di "[[User:$1|$1]]" a "[[User:$2|$2]]"',
	'right-renameuser' => "Ri-nòmina l'utenti",
);

/** Samogitian (Žemaitėška)
 * @author Hugo.arg
 */
$messages['sgs'] = array(
	'renameuserold' => 'Esams nauduotuojė vards:',
	'renameusernew' => 'Naus nauduotuojė vards:',
	'renameusersuccess' => 'Nauduotuos "<nowiki>$1</nowiki>" bova parvadėnts i "<nowiki>$2</nowiki>".',
);

/** Serbo-Croatian (Srpskohrvatski)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'renameusersubmit' => 'Unesi',
);

/** Sinhala (සිංහල)
 * @author Budhajeewa
 * @author තඹරු �ිජේසේකර
 * @author නන්දිමිතුරු
 * @author ශ්��ත
 */
$messages['si'] = array(
	'renameuser' => 'පරිශීලකයා යළි-නම්කරන්න',
	'renameuser-linkoncontribs' => 'පරිශීලකයා යළි-නම්කරන්න',
	'renameuser-linkoncontribs-text' => 'ම�ම පරිශීලකයා ප්�රති-නම් කරන්න',
	'renameuser-desc' => "පරිශීලකය�ක් යළි-නම්කරනු �ස් [[Special:Renameuser|�ිශේෂ පිටු�ක්]] එක් කරන්න (''renameuser'' අයිතිය අ�ශ්�යයි)",
	'renameuserold' => '�ත්මන් පරිශීලක නාමය:',
	'renameusernew' => 'න� පරිශීලක නාමය:',
	'renameuserreason' => 'යළි-නම්කිරීමට හේතු�:',
	'renameusermove' => 'පරිශීලක හා සාකච්ඡා පිටු   (හා  ඒ�ායේ උපපිටු) න� නම ��තට ග�න යන්න',
	'renameusersuppress' => 'යළි යොමු�න් නම නාමයේ සැකසීම�න් �ළකින්න.',
	'renameuserreserve' => 'පැරණි පරිශීලක නම අනාගත භා�ිතය�න් �ාරණය කරන්න',
	'renameuserwarnings' => 'අ��ාදයන්:',
	'renameuserconfirm' => 'ඔ�්, පරිශීලකයා යළි-නම්කරන්න',
	'renameusersubmit' => 'යොමන්න',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" පරිශීලකයා නොප�තී.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" පරිශීලකයා දැනටමත් ප�තියි.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" පරිශීලක නාමය අනීතිකයි.',
	'renameuser-error-request' => 'ඉල්ලීම ලැබීමේ දෝෂයක් හට ගැනිනි.
කරුණාකර ආපසු ගොස් නැ�ත උත්සාහ කරන්න.',
	'renameuser-error-same-user' => 'ඔබට පරිශීලකය�ක් ප�ර තිබූ නමටම ප්�රතිනම්කළ නොහැක.',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" පරිශීලකයා "<nowiki>$2</nowiki>" ��ත ප්�රතිනම් ක�රිනි.',
	'renameuser-page-exists' => '$1 පිටු� දැනටමත් ප�තින අතර, එය ස්�යංක්�රීය� අධිලි�ීමකට භාජනය කල නොහැක.',
	'renameuser-page-moved' => ' $1 පිටු� $2 ��ත ග�නයන ලදි.',
	'renameuser-page-unmoved' => ' $1 පිටු�  $2 ��ත ග�නයා නොහැක.',
	'renameuserlogpage' => 'පරිශීලක ප්�රතිනම්ක�රුම් ලොගය',
	'renameuserlogpagetext' => 'ම�ය පරිශීලක නාම ��නස්�ීම් පිළිබඳ ලඝු-සටහනකි.',
	'renameuserlogentry' => '$1, "$2" ල�ස ප්�රතිනම් ක�රිනි',
	'renameuser-log' => '{{PLURAL:$1|එක් සංස්කරණයක්|සංස්කරණ $1 ක්}}. හේතු�: $2',
	'renameuser-move-log' => 'පරිශීලක "[[User:$1|$1]]", "[[User:$2|$2]]" ��ත ප්�රතිනම්කරන අතරතුර පිටු� ස්��යංක්�රීය� ග�නයන ලදී',
	'right-renameuser' => 'පරිශීලකයන් ප්�රතිනම් කරන්න',
	'renameuser-renamed-notice' => 'ම�ම පරිශීලකයා ප්�රතිනම්කර ඇත.
ප්�රතිනම්ක�රුම් ලඝු-සටහන පහත දක්�ා ඇත.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Jkjk
 */
$messages['sk'] = array(
	'renameuser' => 'Premenovať používateľa',
	'renameuser-linkoncontribs' => 'premenovať používateľa',
	'renameuser-linkoncontribs-text' => 'Premenovať tohto používateľa',
	'renameuser-desc' => "Premenovať používateľa (vyžaduje právo ''renameuser'')",
	'renameuserold' => 'Súčasné používateľské meno:',
	'renameusernew' => 'Nové používateľské meno:',
	'renameuserreason' => 'Dôvod premenovania:',
	'renameusermove' => 'Presunúť používateľské a diskusné stránky (a ich podstránky) na nový názov',
	'renameusersuppress' => 'Nevytvárať presmerovania na nový názov',
	'renameuserreserve' => 'Vyhradiť staré používateľské meno (zabrániť ďalšiemu použitiu)',
	'renameuserwarnings' => 'Upozornenia:',
	'renameuserconfirm' => 'Áno, premenovať používateľa',
	'renameusersubmit' => 'Odoslať',
	'renameusererrordoesnotexist' => 'Používateľ �<nowiki>$1</nowiki>�  neexistuje',
	'renameusererrorexists' => 'Používateľ �<nowiki>$1</nowiki>� už existuje',
	'renameusererrorinvalid' => 'Používateľské meno �<nowiki>$1</nowiki>� je neplatné',
	'renameuser-error-request' => 'Pri prijímaní vašej požiadavky nastal problém. Prosím, vráťte sa a skúste to znova.',
	'renameuser-error-same-user' => 'Nemôžete premenovať používateľa na rovnaké meno ako mal predtým.',
	'renameusersuccess' => 'Používateľ �<nowiki>$1</nowiki>� bol premenovaný na �<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => 'Stránka $1 už existuje a nie je možné ju automaticky prepísať.',
	'renameuser-page-moved' => 'Stránka $1 bola presunutá na $2.',
	'renameuser-page-unmoved' => 'Stránku $1 nebolo možné presunúť na $2.',
	'renameuserlogpage' => 'Záznam premenovaní používateľov',
	'renameuserlogpagetext' => 'Toto je záznam premenovaní používateľov',
	'renameuserlogentry' => 'premenoval používateľa $1 na �$2�',
	'renameuser-log' => 'mal {{PLURAL:$1|1 úpravu|$1 úpravy|$1 úprav}}. Dôvod: $2',
	'renameuser-move-log' => 'Automaticky presunutá stránka počas premenovania používateľa �[[User:$1|$1]]� na �[[User:$2|$2]]�',
	'right-renameuser' => 'Premenovávať používateľov',
	'renameuser-renamed-notice' => 'Tento používateľ bol premenovaný.
Dolu nájdete záznam premenovaní.',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'renameuser' => 'Preimenovanje uporabnika',
	'renameuser-linkoncontribs' => 'preimenuj uporabnika',
	'renameuser-linkoncontribs-text' => 'Preimenuj tega uporabnika',
	'renameuser-desc' => "Doda [[Special:Renameuser|posebno stran]] za preimenovanje uporabnika (potrebna je pravica ''renameuser'')",
	'renameuserold' => 'Trenutno uporabniško ime:',
	'renameusernew' => 'Novo uporabniško ime:',
	'renameuserreason' => 'Razlog preimenovanja:',
	'renameusermove' => 'Prestavi uporabniške in pogovorne strani (ter njihove podstrani) na novo ime',
	'renameusersuppress' => 'Ne ustvari preusmeritev na novo ime',
	'renameuserreserve' => 'Blokiraj staro uporabniško ime pred nadaljnjo uporabo',
	'renameuserwarnings' => 'Opozorila:',
	'renameuserconfirm' => 'Da, preimenuj uporabnika',
	'renameusersubmit' => 'Potrdi',
	'renameusererrordoesnotexist' => 'Uporabnik »<nowiki>$1</nowiki>« ne obstaja.',
	'renameusererrorexists' => 'Uporabnik »<nowiki>$1</nowiki>« že obstaja.',
	'renameusererrorinvalid' => 'Uporabniško ime »<nowiki>$1</nowiki>« ni veljavno.',
	'renameuser-error-request' => 'Pri prejemanju zahteve je prišlo do težave.
Prosimo, pojdite nazaj in poskusite znova.',
	'renameuser-error-same-user' => 'Uporabnika ne morete preimenovati v isto stvar kot prej.',
	'renameusersuccess' => 'Uporabnik »<nowiki>$1</nowiki>« je bil preimenovan v »<nowiki>$2</nowiki>«.',
	'renameuser-page-exists' => 'Stran $1 že obstaja in je ni mogoče samodejno prepisati.',
	'renameuser-page-moved' => 'Stran $1 je bila prestavljena na $2.',
	'renameuser-page-unmoved' => 'Strani $1 ni mogoče prestaviti na $2.',
	'renameuserlogpage' => 'Dnevnik preimenovanj uporabnikov',
	'renameuserlogpagetext' => 'Prikazan je dnevnik sprememb uporabniških imen.',
	'renameuserlogentry' => '- preimenovanje $1 v »$2«',
	'renameuser-log' => '$1 {{PLURAL:$1|urejanje|urejanji|urejanja|urejanj}}. Razlog: $2',
	'renameuser-move-log' => 'Samodejno prestavljanje strani pri preimenovanju uporabnika »[[User:$1|$1]]« v »[[User:$2|$2]]«',
	'right-renameuser' => 'Preimenovanje uporabnikov',
	'renameuser-renamed-notice' => 'Ta uporabnik je bil preimenovan.
Dnevnik preimenovanja je naveden spodaj.',
);

/** Lower Silesian (Schläsch)
 * @author Schläsinger
 */
$messages['sli'] = array(
	'renameuserold' => 'Bisheriger Benutzernoame:',
	'renameusernew' => 'Neuer Benutzernoame:',
	'renameuserreason' => 'Grund:',
);

/** Albanian (Shqip)
 * @author Dori
 * @author Mikullovci11
 * @author Olsi
 */
$messages['sq'] = array(
	'renameuser' => 'Riemëroje përdoruesin',
	'renameuser-linkoncontribs' => 'Riemëroje përdoruesin',
	'renameuser-linkoncontribs-text' => 'Riemëroje këtë përdoruesin',
	'renameuser-desc' => "Shton një [[Special:Renameuser|faqe speciale]] për të riemëruar një përdorues (duhet e drejta ''renameuser'')",
	'renameuserold' => 'Emri i tanishëm',
	'renameusernew' => 'Emri i ri',
	'renameuserreason' => 'Arsyeja për riemërim:',
	'renameusermove' => 'Zhvendos faqet e përdoruesit dhe të diskutimit (dhe nën-faqet e tyre) tek emri i ri',
	'renameusersuppress' => 'Mos krijoni përcjellime tek emri i ri',
	'renameuserreserve' => 'Bllokoni emrin e vjetër të përdoruesit të përdorim në të ardhmen',
	'renameuserwarnings' => 'Paralajmërimet:',
	'renameuserconfirm' => 'Po, ndërrojë emrin e përdoruesit',
	'renameusersubmit' => 'Ndryshoje',
	'renameusererrordoesnotexist' => 'Përdoruesi me emër "<nowiki>$1</nowiki>" nuk ekziston',
	'renameusererrorexists' => 'Përdoruesi me emër "<nowiki>$1</nowiki>" ekziston',
	'renameusererrorinvalid' => 'Emri "<nowiki>$1</nowiki>" nuk është i lejuar',
	'renameuser-error-request' => 'Kishte një problem me marrjen e kërkesës.
Ju lutemi kthehuni prapa dhe provoni përsëri.',
	'renameuser-error-same-user' => 'Ju nuk mund të riemëroni një përdorues tek e njëjta gjë si më parë.',
	'renameusersuccess' => 'Përdoruesi "<nowiki>$1</nowiki>" u riemërua në "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Faqja $1 ekziston dhe nuk mund të mbivendoset automatikisht.',
	'renameuser-page-moved' => 'Faqja $1 është zhvendosur tek $2.',
	'renameuser-page-unmoved' => "Faqja $1 s'mund të zhvendosej tek $2.",
	'renameuserlogpage' => 'Regjistri i emër-ndryshimeve',
	'renameuserlogpagetext' => 'Ky është një regjistër i ndryshimeve së emrave të përdoruesve',
	'renameuserlogentry' => 'riemëruar $1 tek "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redaktim|$1 redaktime}}. Arsyeja: $2',
	'renameuser-move-log' => 'Lëvizi faqen automatikisht kur riemëroi përdoruesin "[[User:$1|$1]]" në "[[User:$2|$2]]"',
	'right-renameuser' => 'Riemëroni përdorueset',
	'renameuser-renamed-notice' => 'Ky përdorues është riemëruar.
Regjistri i riemërimit është poshtë për referencë.',
);

/** Serbian (Cyrillic script) (�С�пски (ћи�илица)�)
 * @author Millosh
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Же�ко Тодо�овић
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'renameuser' => 'П�еименуј ко�исника',
	'renameuser-linkoncontribs' => 'п�еименуј ко�исника',
	'renameuser-linkoncontribs-text' => 'П�еименуј овог ко�исника',
	'renameuser-desc' => "Додаје [[Special:Renameuser|посебну ст�аницу]] за п�еименовање ко�исника (пот�ебно п�аво ''renameuser'')",
	'renameuserold' => 'Т�енутно ко�исничко име:',
	'renameusernew' => 'Ново ко�исничко име:',
	'renameuserreason' => 'Разлог:',
	'renameusermove' => 'П�емести ко�исничку ст�аницу и ст�аницу за �азгово� (и њихове подст�анице) на нови назив',
	'renameusersuppress' => 'Не п�авите п�еусме�ења на нови назив',
	'renameuserreserve' => 'Блоки�ај ста�о ко�исничко име за да�у упот�ебу',
	'renameuserwarnings' => 'Упозо�ења:',
	'renameuserconfirm' => 'Да, п�еименуј ко�исника',
	'renameusersubmit' => 'П�ихвати',
	'renameusererrordoesnotexist' => 'Ко�исник �<nowiki>$1</nowiki>� не постоји.',
	'renameusererrorexists' => 'Ко�исник �<nowiki>$1</nowiki>� већ постоји.',
	'renameusererrorinvalid' => 'Пог�ешно ко�исничко име: "<nowiki>$1</nowiki>"',
	'renameuser-error-request' => 'Дошло је до п�облема п�и п�имању захтева.
В�атите се назад и покушајте поново.',
	'renameuser-error-same-user' => 'Не можете п�еименовати ко�исника у исто име.',
	'renameusersuccess' => 'Ко�исник "<nowiki>$1</nowiki>" је п�еименован на "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Ст�аница $1 већ постоји и не може се заменити.',
	'renameuser-page-moved' => 'Ст�аница $1 је п�емештена у $2.',
	'renameuser-page-unmoved' => 'Ст�аница $1 не може да се п�емести на $2.',
	'renameuserlogpage' => 'Исто�ија п�еименовања ко�исника',
	'renameuserlogpagetext' => 'Ово је исто�ија измена ко�исничких имена.',
	'renameuserlogentry' => '{{GENDER:|је п�еименовао|је п�еименовала|п�еименова}} $1 у �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 измена|$1 измене|$1 измена}}.
Разлог: $2',
	'renameuser-move-log' => 'П�емештене ст�анице п�иликом п�еименовања ко�исника: �[[User:$1|$1]]� у �[[User:$2|$2]]�.',
	'right-renameuser' => 'п�еименовање ко�исничких имена',
	'renameuser-renamed-notice' => 'Овом ко�иснику је п�омењено име.
Исто�ија п�омена имена је п�иложена испод, као инфо�мација.',
);

/** Serbian (Latin script) (�Srpski (latinica)�)
 * @author Liangent
 * @author Michaello
 * @author Же�ко Тодо�овић
 */
$messages['sr-el'] = array(
	'renameuser' => 'Preimenuj korisnika',
	'renameuser-linkoncontribs' => 'preimenuj korisnika',
	'renameuser-linkoncontribs-text' => 'Preimenuj ovog korisnika',
	'renameuser-desc' => "Dodaje [[Special:Renameuser|posebnu stranicu]] za preimenovanje korisnika (potrebno pravo ''renameuser'').",
	'renameuserold' => 'Trenutno korisničko ime:',
	'renameusernew' => 'Novo korisničko ime:',
	'renameuserreason' => 'Razlog preimenovanja:',
	'renameusermove' => 'Premesti korisničku stranicu i stranicu za razgovor (i njihove podstranice) na novo ime',
	'renameusersuppress' => 'Ne pravite preusmerenja na novi naziv',
	'renameuserreserve' => 'Blokiraj staro korisničko ime za dalju upotrebu',
	'renameuserwarnings' => 'Upozorenja:',
	'renameuserconfirm' => 'Da, preimenuj korisničko ime.',
	'renameusersubmit' => 'Prihvati',
	'renameusererrordoesnotexist' => 'Korisnik "<nowiki>$1</nowiki>" ne postoji',
	'renameusererrorexists' => 'Korisnik "<nowiki>$1</nowiki>" već postoji',
	'renameusererrorinvalid' => 'Pogrešno korisničko ime: "<nowiki>$1</nowiki>"',
	'renameuser-error-request' => 'Javio se problem prilikom prihvatanja zahteva. Idi nazad i pokušaj ponovo.',
	'renameuser-error-same-user' => 'Ne možeš preimenovati korisničko ime u isto kao i prethodno.',
	'renameusersuccess' => 'Korisnik "<nowiki>$1</nowiki>" je preimenovan na "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Stranica $1 već postoji i ne može biti automatski presnimljena.',
	'renameuser-page-moved' => 'Stranica $1 je premeštena na $2.',
	'renameuser-page-unmoved' => 'Stranica $1 ne može biti premeštena na $2.',
	'renameuserlogpage' => 'Istorija preimenovanja korisnika',
	'renameuserlogpagetext' => 'Ovo je istorija izmena korisničkih imena.',
	'renameuserlogentry' => 'je preimenovao $1 u �$2�',
	'renameuser-log' => '{{PLURAL:$1|1 izmena|$1 izmene|$1 izmena}}. Razlog: $2',
	'renameuser-move-log' => 'Automatski pomerene stranice prilikom preimenovanja korisničkog imena: �[[User:$1|$1]]� u �[[User:$2|$2]]�.',
	'right-renameuser' => 'preimenovanje korisničkih imena',
	'renameuser-renamed-notice' => 'Ovom korisniku je promenjeno ime.
Istorija promena imena je priložena ispod, kao informacija.',
);

/** Seeltersk (Seeltersk)
 * @author Maartenvdbent
 * @author Pyt
 */
$messages['stq'] = array(
	'renameuser' => 'Benutsernoome annerje',
	'renameuser-desc' => "Föiget ne [[Special:Renameuser|Spezioalsiede]] bietou tou Uumbenaamenge fon n Benutser (fräiget dät ''renameuser''-Gjucht)",
	'renameuserold' => 'Benutsernoomer bithäär:',
	'renameusernew' => 'Näie Benutsernoome:',
	'renameuserreason' => 'Gruund foar Uumenaame:',
	'renameusermove' => 'Ferskuuwe Benutser-/Diskussionssiede inkl. Unnersieden ap dän näie Benutsernoome',
	'renameuserreserve' => 'Blokkierje dän oolde Benutsernoome foar ne näie Registrierenge',
	'renameuserwarnings' => 'Woarskauengen:',
	'renameuserconfirm' => 'Jee, Benutser uumbenaame',
	'renameusersubmit' => 'Uumbenaame',
	'renameusererrordoesnotexist' => 'Die Benutsernoome "<nowiki>$1</nowiki>" bestoant nit',
	'renameusererrorexists' => 'Die Benutsernoome "<nowiki>$1</nowiki>" bestoant al',
	'renameusererrorinvalid' => 'Die Benutsernoome "<nowiki>$1</nowiki>" is uungultich',
	'renameuser-error-request' => 'Dät roat n Problem bie dän Ämpfang fon ju Anfroage. Fersäik jädden nochmoal.',
	'renameuser-error-same-user' => 'Oolde un näie Benutsernoome sunt identisk.',
	'renameusersuccess' => 'Die Benutser "<nowiki>$1</nowiki>" wuude mäd Ärfoulch uumenaamd in "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Ju Siede $1 bestoant al un kon nit automatisk uurskrieuwen wäide.',
	'renameuser-page-moved' => 'Ju Siede $1 wuude ätter $2 ferskäuwen.',
	'renameuser-page-unmoved' => 'Ju Siede $1 kuude nit ätter $2 ferskäuwen wäide.',
	'renameuserlogpage' => 'Benutsernoomenannerengs-Logbouk',
	'renameuserlogpagetext' => 'In dit Logbouk wäide do Annerengen fon Benutsernoomen protokollierd.',
	'renameuserlogentry' => 'häd "$1" in "$2" uumenaamd',
	'renameuser-log' => '{{PLURAL:$1|1 Beoarbaidenge|$1 Beoarbaidengen}}. Gruund: $2',
	'renameuser-move-log' => 'truch ju Uumbenaamenge fon �[[User:$1|$1]]� ätter �[[User:$2|$2]]� automatisk ferskäuwene Siede.',
	'right-renameuser' => 'Benutser uumenaame',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'renameuser' => 'Ganti ngaran pamaké',
	'renameuser-desc' => "Ganti ngaran pamaké (perlu kawenangan ''renameuser'')",
	'renameuserold' => 'Ngaran pamaké ayeuna:',
	'renameusernew' => 'Ngaran pamaké anyar:',
	'renameuserreason' => 'Alesan ganti ngaran:',
	'renameusermove' => 'Pindahkeun kaca pamaké jeung obrolanna (jeung sub-kacanna) ka ngaran anyar',
	'renameusersubmit' => 'Kirim',
	'renameusererrordoesnotexist' => 'Euweuh pamaké nu ngaranna "<nowiki>$1</nowiki>"',
	'renameusererrorexists' => 'Pamaké "<nowiki>$1</nowiki>" geus aya',
	'renameusererrorinvalid' => 'Ngaran pamaké "<nowiki>$1</nowiki>" teu sah',
	'renameuser-error-request' => 'Aya gangguan nalika nampa paménta. Coba balik deui, terus cobaan deui.',
	'renameuser-error-same-user' => 'Anjeun teu bisa ngaganti ngaran pamaké ka ngaran nu éta-éta kénéh.',
	'renameusersuccess' => 'Pamaké "<nowiki>$1</nowiki>" geus diganti ngaranna jadi "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Kaca $1 geus aya sarta teu bisa ditimpah kitu baé.',
	'renameuser-page-moved' => 'Kaca $1 geus dipindahkeun ka $2.',
	'renameuser-page-unmoved' => 'Kaca $1 teu bisa dipindahkeun ka $2.',
	'renameuserlogpage' => 'Log ganti ngaran',
	'renameuserlogpagetext' => 'Ieu minangka log parobahan ngaran pamaké',
	'renameuserlogentry' => 'geus ngaganti ngaran $1 jadi "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 édit|$1 édit}}. Alesan: $2',
	'renameuser-move-log' => 'Otomatis mindahkeun kaca nalika ngaganti ngaran "[[User:$1|$1]]" jadi "[[User:$2|$2]]"',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author Cohan
 * @author Dafer45
 * @author Habj
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author Per
 */
$messages['sv'] = array(
	'renameuser' => 'Byt användarnamn',
	'renameuser-linkoncontribs' => 'byt användarnamn',
	'renameuser-linkoncontribs-text' => 'byt namn på denna användare',
	'renameuser-desc' => "Lägger till en [[Special:Renameuser|specialsida]] för att byta namn på en användare (kräver behörigheten ''renameuser'')",
	'renameuserold' => 'Nuvarande användarnamn:',
	'renameusernew' => 'Nytt användarnamn:',
	'renameuserreason' => 'Anledning till namnbytet:',
	'renameusermove' => 'Flytta användarsidan och användardiskussionen (och deras undersidor) till det nya namnet',
	'renameusersuppress' => 'Skapa inte omdirigeringar till det nya namnet',
	'renameuserreserve' => 'Reservera det gamla användarnamnet från framtida användning',
	'renameuserwarnings' => 'Varningar:',
	'renameuserconfirm' => 'Ja, byt namn på användaren',
	'renameusersubmit' => 'Verkställ',
	'renameusererrordoesnotexist' => 'Användaren "<nowiki>$1</nowiki>" finns inte',
	'renameusererrorexists' => 'Användaren "<nowiki>$1</nowiki>" finns redan.',
	'renameusererrorinvalid' => 'Användarnamnet "<nowiki>$1</nowiki>" är ogiltigt.',
	'renameuser-error-request' => 'Ett problem inträffade i hanteringen av begäran. Gå tillbaks och försök igen.',
	'renameuser-error-same-user' => 'Du kan inte byta namn på en användare till samma som tidigare.',
	'renameusersuccess' => 'Användaren "<nowiki>$1</nowiki>" har fått sitt namn bytt till "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'Sidan $1 finns redan och kan inte skrivas över automatiskt.',
	'renameuser-page-moved' => 'Sidan $1 har flyttats till $2.',
	'renameuser-page-unmoved' => 'Sidan $1 kunde inte flyttas till $2.',
	'renameuserlogpage' => 'Logg över användarnamnsbyten',
	'renameuserlogpagetext' => 'Detta är en logg över byten av användarnamn',
	'renameuserlogentry' => 'bytte namn på $1 till "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 redigering|$1 redigeringar}}. Anledning: $2',
	'renameuser-move-log' => 'Flyttade automatiskt sidan när namnet byttes på användaren "[[User:$1|$1]]" till "[[User:$2|$2]]"',
	'right-renameuser' => 'Ändra användares namn',
	'renameuser-renamed-notice' => 'Användaren har fått ett nytt namn.
Som referens återfinns omdöpningsloggen nedan.',
);

/** Swahili (Kiswahili) */
$messages['sw'] = array(
	'renameusersubmit' => 'Wasilisha',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 * @author TRYPPN
 */
$messages['ta'] = array(
	'renameuser' => 'பயனரை பெயர்மாற்று',
	'renameuser-linkoncontribs' => 'பயனரை பெயர்மாற்று',
	'renameuser-linkoncontribs-text' => 'இந்த பயனரை பெயர்மாற்று',
	'renameuserold' => 'தற்போதைய பயனர் பெயர்:',
	'renameusernew' => 'புதிய பயனர் பெயர்:',
	'renameuserreason' => 'மறுபெயருக்கான காரணம்:',
	'renameuserwarnings' => 'எச்சரிக்கை:',
	'renameuserconfirm' => 'சரி, பயனருக்கு மாற்றுப்பெயர் கொடுக்கவும்',
	'renameusersubmit' => 'சமர்ப்பி',
	'renameuserlogpage' => 'பயனரை பெயர்மாற்றுதல் குறிப்பேடு',
	'renameuserlogpagetext' => 'இது பயனர் பெயர் மாற்றத்திற்கான குறிப்பேடு',
	'renameuserlogentry' => 'பெயர் மற்றம் செய்யப்பட்டது $1 லிருந்து "$2" க்கு',
	'renameuser-log' => '{{PLURAL:$1|1 திருத்தம்|$1 திருத்த�்கள்}}. காரணம்: $2',
	'right-renameuser' => 'பயனர்களை மாற்று பெயரிடு',
	'renameuser-renamed-notice' => 'இந்த பயனர் பெயர் மாற்றப்பட்டது.
மாற்றுப்பெயரிடுதல் குறிப்பேடு குறிப்புதவிக்காக க�ழே வழ�்கப்பட்டுள்ளது',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Mpradeep
 * @author Veeven
 */
$messages['te'] = array(
	'renameuser' => 'వాడుకరి పేరుమార్చు',
	'renameuser-linkoncontribs' => 'వాడుకరి పేరుమార్చు',
	'renameuser-linkoncontribs-text' => 'ఈ వాడుకరి పేరుని మార్చండి',
	'renameuser-desc' => "వాడుకరి పేరు మార్చండి (''renameuser'' అన్న అధికారం కావాలి)",
	'renameuserold' => 'ప్రస్తుత వాడుకరి పేరు:',
	'renameusernew' => 'కొత్త వాడుకరి పేరు:',
	'renameuserreason' => 'పేరు మార్చడానికి కారణం:',
	'renameusermove' => 'వాడుకరి పేజ�, చర్చాపేజ�లను (వాటి ఉపపేజ�లతో సహా) కొత్త పేరుకు తరలించండి',
	'renameusersuppress' => 'కొత్త పేరుకి దారిమార్పులు సృష్టించకు',
	'renameuserreserve' => 'పాత వాడుకరిపేరుని భవిష్యత్తులో వాడకుండా నిరోధించు',
	'renameuserwarnings' => 'హెచ్చరికలు:',
	'renameuserconfirm' => 'అవును, వాడుకరి పేరు మార్చు',
	'renameusersubmit' => 'పంపించు',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" పేరుగల వాడుకరి లేరు.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" పేరుతో వాడుకరి ఇప్పటికే ఉన్నారు.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" అనే వాడుకరిపేరు సరైనది కాదు.',
	'renameuser-error-request' => 'మ� అభ్యర్థనను స్వ�కరించేటప్పుడు ఒక సమస్య తలెత్తింది. దయచేసి వెనక్కు వెళ్లి ఇంకోసారి ప్రయత్నించండి.',
	'renameuser-error-same-user' => 'సభ్యనామాన్ని ఇంతకు ముందు ఉన్న సభ్యనామంతోనే మార్చడం కుదరదు.',
	'renameusersuccess' => '"<nowiki>$1</nowiki>" అనే సభ్యనామాన్ని "<nowiki>$2</nowiki>"గా మార్చేసాం.',
	'renameuser-page-exists' => '$1 పేజ� ఇప్పటికే ఉంది, కాబట్టి ఆటోమాటిగ్గా దానిపై కొత్తపేజ�ని రుద్దడం కుదరదు.',
	'renameuser-page-moved' => '$1 పేజ�ని $2 పేజ�కి తరలించాం.',
	'renameuser-page-unmoved' => '$1 పేజ�ని $2 పేజ�కి తరలించలేక పోయాం.',
	'renameuserlogpage' => 'వాడుకరి పేరుమార్పుల చిట్టా',
	'renameuserlogpagetext' => 'ఇది వాడుకరి పేర్లకి జరిగిన మార్పుల చిట్టా.',
	'renameuserlogentry' => '$1ని "$2"గా పేరు మార్చారు',
	'renameuser-log' => '{{PLURAL:$1|ఒక దిద్దుబాటు|$1 దిద్దుబాట్లు}}. కారణం: $2',
	'renameuser-move-log' => '"[[User:$1|$1]]" పేరును "[[User:$2|$2]]"కు మార్చడంతో పేజ�ని ఆటోమాటిగ్గా తరలించాం',
	'right-renameuser' => 'వాడుకరుల పేరు మార్చడం',
	'renameuser-renamed-notice' => 'ఈ వాడుకరి పేరు మారింది.
మ� సమాచారం కోసం పేరుమార్పుల చిట్టాని క్రింద ఇచ్చాం.',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'renameuser' => "Fó naran foun ba uza-na'in sira",
	'renameuser-desc' => "Fó naran foun ba uza-na'in sira (presiza priviléjiu ''renameuser'')",
	'renameuserold' => "Naran uza-na'in atuál:",
	'renameusernew' => "Naran uza-na'in foun:",
	'renameuserreason' => 'Motivu:',
	'renameusermove' => "Book pájina uza-na'in no diskusaun (no sub-pájina) ba naran foun",
	'renameuserconfirm' => 'Sin, fó naran foun',
	'renameusersubmit' => 'Fó naran foun',
	'renameusererrordoesnotexist' => 'Uza-na\'in "<nowiki>$1</nowiki>" la iha.',
	'renameuser-page-moved' => 'Book tiha pájina $1 ba $2.',
	'renameuser-page-unmoved' => 'La bele book pájina $1 ba $2.',
	'right-renameuser' => "Fó naran foun ba uza-na'in sira",
);

/** Tajik (Cyrillic script) (Тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'renameuser' => 'Тағйи�и номи ко�ба�ӣ',
	'renameuser-desc' => "Номи як ко�ба��о тағйи� медиҳад (ниёзманд ба ихтиё�оти ''тағйи�ином'' аст)",
	'renameuserold' => 'Номи ко�ба�и феълӣ:',
	'renameusernew' => 'Номи ко�ба�и ҷадид:',
	'renameuserreason' => 'Иллати тағйи�и номи ко�ба�ӣ:',
	'renameusermove' => 'Саҳифаи ко�ба�ӣ ва саҳифаи баҳси ко�ба� (ва зе�саҳифаҳои он)�о интиқол бидеҳ',
	'renameuserreserve' => 'Бастани номи ко�ба�ии кӯҳна аз истифодаи оянда',
	'renameuserwarnings' => 'Ҳушдо�ҳо:',
	'renameuserconfirm' => 'Бале, номи ко�ба�и�о тағйи� бидеҳ',
	'renameusersubmit' => 'Сабт',
	'renameusererrordoesnotexist' => 'Номи ко�ба�ӣ "<nowiki>$1</nowiki>" вуҷуд надо�ад.',
	'renameusererrorexists' => 'Номи ко�ба�ӣ "<nowiki>$1</nowiki>" истифода шудааст.',
	'renameusererrorinvalid' => 'Номи ко�ба�ӣ "<nowiki>$1</nowiki>" ғай�и миҷоз аст.',
	'renameuser-error-request' => 'Да� да�ёфти да�хост мушкилие пеш омад. Лутфан ба саҳифаи қаблӣ бозга�дед ва дубо�а талош кунед.',
	'renameuser-error-same-user' => 'Шумо наметавонед номи як ко�ба��о ба ҳамон номи қаблиаш тағйи� диҳед.',
	'renameusersuccess' => 'Номи ко�ба� "<nowiki>$1</nowiki>" ба "<nowiki>$2</nowiki>" тағйи� ёфт.',
	'renameuser-page-exists' => 'Саҳифаи $1 аллакай вуҷуд до�да ва ба тав�и худко� қобили бознависӣ нест.',
	'renameuser-page-moved' => 'Саҳифаи $1 ба $2 кӯчонида шуд.',
	'renameuser-page-unmoved' => 'Имкони кӯчонидани саҳифаи $1 ба $2 вуҷуд надо�ад.',
	'renameuserlogpage' => 'Гузо�иши тағйи�и номи ко�ба�',
	'renameuserlogpagetext' => 'Ин гузо�иши тағйи�и номи ко�ба�он аст',
	'renameuserlogentry' => 'номи $1�о ба "$2" тағйи� дод',
	'renameuser-log' => '{{PLURAL:$1|1 ви�оиш|$1 ви�оишҳо}}. Далел: $2',
	'renameuser-move-log' => 'Саҳифа да� вақти тағйи�и номи ко�ба�  "[[User:$1|$1]]" ба "[[User:$2|$2]]" ба тав�и худко� кӯчонида шуд',
	'right-renameuser' => 'Тағйи�и номи ко�ба�он',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'renameuser' => 'Taƣjiri nomi korbarī',
	'renameuser-desc' => "Nomi jak korbarro taƣjir medihad (nijozmand ba ixtijoroti ''taƣjirinom'' ast)",
	'renameuserold' => "Nomi korbari fe'lī:",
	'renameusernew' => 'Nomi korbari çadid:',
	'renameuserreason' => 'Illati taƣjiri nomi korbarī:',
	'renameusermove' => 'Sahifai korbarī va sahifai bahsi korbar (va zersahifahoi on)ro intiqol bideh',
	'renameuserreserve' => 'Bastani nomi korbariji kūhna az istifodai ojanda',
	'renameuserwarnings' => 'Huşdorho:',
	'renameuserconfirm' => 'Bale, nomi korbariro taƣjir bideh',
	'renameusersubmit' => 'Sabt',
	'renameusererrordoesnotexist' => 'Nomi korbarī "<nowiki>$1</nowiki>" vuçud nadorad.',
	'renameusererrorexists' => 'Nomi korbarī "<nowiki>$1</nowiki>" istifoda şudaast.',
	'renameusererrorinvalid' => 'Nomi korbarī "<nowiki>$1</nowiki>" ƣajri miçoz ast.',
	'renameuser-error-request' => 'Dar darjofti darxost muşkilie peş omad. Lutfan ba sahifai qablī bozgarded va dubora taloş kuned.',
	'renameuser-error-same-user' => 'Şumo nametavoned nomi jak korbarro ba hamon nomi qabliaş taƣjir dihed.',
	'renameusersuccess' => 'Nomi korbar "<nowiki>$1</nowiki>" ba "<nowiki>$2</nowiki>" taƣjir joft.',
	'renameuser-page-exists' => 'Sahifai $1 allakaj vuçud dorda va ba tavri xudkor qobili boznavisī nest.',
	'renameuser-page-moved' => 'Sahifai $1 ba $2 kūconida şud.',
	'renameuser-page-unmoved' => 'Imkoni kūconidani sahifai $1 ba $2 vuçud nadorad.',
	'renameuserlogpage' => 'Guzorişi taƣjiri nomi korbar',
	'renameuserlogpagetext' => 'In guzorişi taƣjiri nomi korbaron ast',
	'renameuser-log' => '{{PLURAL:$1|1 viroiş|$1 viroişho}}. Dalel: $2',
	'renameuser-move-log' => 'Sahifa dar vaqti taƣjiri nomi korbar  "[[User:$1|$1]]" ba "[[User:$2|$2]]" ba tavri xudkor kūconida şud',
	'right-renameuser' => 'Taƣjiri nomi korbaron',
);

/** Thai (ไทย)
 * @author Harley Hartwell
 * @author Mopza
 * @author Passawuth
 */
$messages['th'] = array(
	'renameuser' => '�ปลี่ย�ชื่อผู้ใช้',
	'renameuser-desc' => "�พิ่ม[[Special:Renameuser|ห�้าพิ�ศษ]] สำหรับ�ปลี่ย�ชื่อผู้ใช้ (ต้องมีสิทธิ์ ''renameuser'' (�ปลี่ย�ชื่อผู้ใช้))",
	'renameuserold' => 'ชื่อผู้ใช้ปัจจุบั�:',
	'renameusernew' => 'ชื่อผู้ใช้ใหม่:',
	'renameuserreason' => '�หตุผลใ�การ�ปลี่ย�ชื่อ:',
	'renameusermove' => 'ย้ายห�้าผู้ใช้และห�้าพูดคุย (รวมถึงห�้าย่อยด้วย) ไปยังชื่อใหม่',
	'renameuserreserve' => 'บล็อกชื่อผู้ใช้�ดิมจากการใช้งา�ใ�อ�าคต',
	'renameuserwarnings' => 'คำ�ตือ�:',
	'renameuserconfirm' => 'ใช่, �ปลี่ย�ชื่อผู้ใช้�ี้',
	'renameusersubmit' => 'ตกลง',
	'renameusererrordoesnotexist' => 'ไม่พบผู้ใช้ "<nowiki>$1</nowiki>" ใ�ระบบ',
	'renameusererrorexists' => 'มีผู้ใช้ "<nowiki>$1</nowiki>" อยู่แล้ว',
	'renameusererrorinvalid' => 'ไม่สามารถใช้ชื่อผู้ใช้ "<nowiki>$1</nowiki>" ได้',
	'renameuser-error-request' => 'มีปัญหา�กิดขึ้��กี่ยวกับการรับคำ�รียกร้องของคุณ กรุณากลับไปที่ห�้า�ดิม และ พยายามอีกครั้ง',
	'renameuser-error-same-user' => 'ไม่สามารถ�ปลี่ย�ชื่อผู้ใช้ได้��ื่องจากมีชื่อผู้ใช้�ี้อยู่ก่อ�แล้ว',
	'renameusersuccess' => 'ผู้ใช้:<nowiki>$1</nowiki> ถูก�ปลี่ย�ชื่อ�ป็� ผู้ใช้:<nowiki>$2</nowiki> �รียบร้อยแล้ว',
	'renameuser-page-exists' => 'ห�้า $1 มีอยู่แล้ว และไม่สามารถย้ายไปแท�ที่ได้โดยอัตโ�มัติ',
	'renameuser-page-moved' => 'ห�้า $1 ถูกย้ายไปยัง $2',
	'renameuser-page-unmoved' => 'ไม่สามารถย้ายห�้า $1 ไปยัง $2 ได้',
	'renameuserlogpage' => 'ปูมการ�ปลี่ย�ชื่อผู้ใช้',
	'renameuserlogpagetext' => 'ข้อมูลการ�ปลี่ย�ชื่อผู้ใช้',
	'renameuserlogentry' => 'ได้�ปลี่ย�ชื่อ $1 ไป�ป็� [[ผู้ใช้:$2]]',
	'renameuser-log' => 'แก้ไขแล้ว $1 ครั้ง �หตุผล: $2',
	'renameuser-move-log' => 'ย้ายโดยอัตโ�มัติ ขณะ�ปลี่ย�ชื่อผู้ใช้จาก "[[User:$1|$1]]" �ป็� "[[User:$2|$2]]"',
	'right-renameuser' => '�ปลี่ย�ชื่อผู้ใช้',
	'renameuser-renamed-notice' => 'ผู้ใช้�ี้ได้ถูก�ปลี่ย�ชื่อ บั�ทึกการ�ปลี่ย�ชื่อแสดงอยู่ด้า�ล่างสำหรับการอ้างอิง',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'renameuser' => 'Ulanyjy adyny üýtget',
	'renameuser-linkoncontribs' => 'ulanyjy adyny üýtget',
	'renameuser-linkoncontribs-text' => 'Bu ulanyjynyň adyny üýtget',
	'renameuser-desc' => "Ulanyjyny täzeden atlandyrmak üçin [[Special:Renameuser|ýörite sahypa]] goşýar (''ulanyjynytäzedenatlandyr'' hukugy gerek)",
	'renameuserold' => 'Häzirki ulanyjy ady:',
	'renameusernew' => 'Täze ulanyjy ady:',
	'renameuserreason' => 'At üýtgetmegiň sebäbi:',
	'renameusermove' => 'Ulanyjy we pikir alyşma sahypalaryny (we kiçi sahypalaryny) täze ada geçir',
	'renameusersuppress' => 'Täze ada gönükdirmeler döretme',
	'renameuserreserve' => 'Köne ulanyjy adyny indi ulanylmakdan blokirle',
	'renameuserwarnings' => 'Duýduryşlar:',
	'renameuserconfirm' => 'Hawa, ulanyjynyň adyny üýtget',
	'renameusersubmit' => 'Tabşyr',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" atly ulanyjy ýok.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" ulanyjysy eýýäm bar.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" ulanyjy ady nädogry.',
	'renameuser-error-request' => 'Talaby almak bilen baglanyşykyly bir probleme ýüze çykdy.
Yza gaýdyp gaýtadan synanyşyp görüň.',
	'renameuser-error-same-user' => 'Ulanyja öňküsi ýaly bir ada täzeden geçirip bilmeýärsiňiz.',
	'renameusersuccess' => 'Ulanyjy "<nowiki>$1</nowiki>" täze ada geçirildi: "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => '$1 sahypasy eýýäm bar we onuň üstüne awtomatik ýazyp bolmaýar.',
	'renameuser-page-moved' => '$1 sahypasy $2 sahypasyna geçirildi.',
	'renameuser-page-unmoved' => '$1 sahypasyny $2 sahypasyna geçirip bolmaýar.',
	'renameuserlogpage' => 'Ulanyjy adyny üýtgetme gündeligi',
	'renameuserlogpagetext' => 'Bu gündelik ulanyjy ady üýtgetmelerini görkezýär.',
	'renameuserlogentry' => '$1 täzeden atlandyryldy: "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 özgerdiş|$1 özgerdiş}}. Sebäp: $2',
	'renameuser-move-log' => 'Ulanyjy "[[User:$1|$1]]" adyndan "[[User:$2|$2]]" adyna täzeden atlandyrylanda, sahypa awtomatik geçirildi',
	'right-renameuser' => 'Ulanyjylaryň adyny üýtget',
	'renameuser-renamed-notice' => 'Bu ulanyjynyň ady üýtgedilipdir.
At üýtgediş gündeligi aşakda salgylanma üçin berilýär.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'renameuser' => 'Muling pangalanan ang tagagamit',
	'renameuser-linkoncontribs' => 'muling pangalanan ang tagagamit',
	'renameuser-linkoncontribs-text' => 'muling pangalanan ang tagagamit na ito',
	'renameuser-desc' => "Nagdaragdag ng isang [[Special:Renameuser|natatanging pahina]] para mapangalanang muli ang isang tagagamit (kailangang ang karapatang ''pangalanangmuliangtagagamit'')",
	'renameuserold' => 'Pangkasalukuyang pangalan ng tagagamit:',
	'renameusernew' => 'Bagong pangalan ng tagagamit:',
	'renameuserreason' => 'Dahil para sa muling pagpapangalan:',
	'renameusermove' => 'Ilipat ang mga pahina ng tagagamit at pangusapan (at mga kabahaging pahina nila) patungo sa bagong pangalan',
	'renameusersuppress' => 'Huwag lumikha ng mga pagpapapunta sa bagong  pangalan',
	'renameuserreserve' => 'Hadlangan ang dating pangalan ng tagagamit mula sa muling paggamit sa hinaharap',
	'renameuserwarnings' => 'Mga babala:',
	'renameuserconfirm' => 'Oo, pangalanang muli ang tagagamit',
	'renameusersubmit' => 'Ipasa',
	'renameusererrordoesnotexist' => 'Hindi pa umiiral ang tagagamit na "<nowiki>$1</nowiki>".',
	'renameusererrorexists' => 'Umiiral na ang tagagamit na "<nowiki>$1</nowiki>".',
	'renameusererrorinvalid' => 'Hindi tanggap ang pangalan ng tagagamit na "<nowiki>$1</nowiki>".',
	'renameuser-error-request' => 'Nagkaroon ng isang suliranin sa pagtanggap ng kahilingan.
Magbalik lamang at subukan uli.',
	'renameuser-error-same-user' => 'Hindi mo maaaring pangalanang muli ang tagagamit patungo sa kaparehong bagay na katulad ng dati.',
	'renameusersuccess' => 'Ang tagagamit na "<nowiki>$1</nowiki>" ay muling napangalanan na patungong "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Umiiral na ang pahinang $1 at hindi maaaring kusang mapatungan.',
	'renameuser-page-moved' => 'Ang pahinang $1 ay nailipat na patungo sa $2.',
	'renameuser-page-unmoved' => 'Hindi mailipat ang pahinang $1 patungo sa $2.',
	'renameuserlogpage' => 'Talaan ng muling pagpapangalan ng tagagamit',
	'renameuserlogpagetext' => 'Isa itong pagtatala/talaan ng mga pagbabago sa mga pangalan ng tagagamit.',
	'renameuserlogentry' => 'muling pinangalan si $1 patungo sa "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 pagbabago|$1 mga pagbabago}}. Dahilan: $2',
	'renameuser-move-log' => 'Kusang inilipat ang pahina habang muling pinapangalanan ang tagagamit na si "[[User:$1|$1]]" patungo sa "[[User:$2|$2]]"',
	'right-renameuser' => 'Muling pangalanan ang mga tagagamit',
	'renameuser-renamed-notice' => 'Napangalanan nang muli ang tagagamit na ito.
Ibinigay sa ibaba ang talaan ng pagpapangalang muli para masangguni.',
);

/** Tongan (lea faka-Tonga) */
$messages['to'] = array(
	'renameuser' => 'Liliu hingoa ʻo e ʻetita',
	'renameuserold' => 'Hingoa motuʻa ʻo e ʻetita:',
	'renameusernew' => 'Hingoa foʻou ʻo e ʻetita:',
	'renameusersubmit' => 'Fai ā liliuhingoa',
	'renameusererrordoesnotexist' => 'Ko e ʻetita "<nowiki>$1</nowiki>" ʻoku ʻikai toka tuʻu ia',
	'renameusererrorexists' => 'Ko e ʻetita "<nowiki>$1</nowiki>" ʻoku toka tuʻu ia',
	'renameusererrorinvalid' => 'ʻOku taʻeʻaonga ʻa e hingoa fakaʻetita ko "<nowiki>$1</nowiki>"',
	'renameusersuccess' => 'Ko e ʻetita "<nowiki>$1</nowiki>" kuo liliuhingoa ia kia "<nowiki>$2</nowiki>"',
	'renameuserlogpage' => 'Tohinoa ʻo e liliu he hingoa ʻo e ʻetita',
	'renameuserlogpagetext' => 'Ko e tohinoa ʻeni ʻo e ngaahi liliu ki he hingoa ʻo e kau ʻetita',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 * @author Runningfridgesrule
 * @author Uğur Başak
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'renameuser' => 'Kullanıcı adı değiştir',
	'renameuser-linkoncontribs' => 'kullanıcıyı yeniden adlandır',
	'renameuser-linkoncontribs-text' => 'Bu kullanıcıyı yeniden adlandır',
	'renameuser-desc' => "Kullanıcıyı yeniden adlandırmak için bir [[Special:Renameuser|özel sayfa]] ekler (''kullanıcıyıyenidenadlandır'' hakkı gerekir)",
	'renameuserold' => 'Şu anda ki kullanıcı adı:',
	'renameusernew' => 'Yeni kullanıcı adı:',
	'renameuserreason' => 'Neden:',
	'renameusermove' => 'Kullanıcı ve tartışma sayfalarını (ve alt sayfalarını) yeni isme taşı',
	'renameusersuppress' => 'Yeni ada yönlendirmeler oluşturma',
	'renameuserreserve' => 'Eski kullanıcı adını ilerdeki kullanımlar için engelle',
	'renameuserwarnings' => 'Uyarılar:',
	'renameuserconfirm' => 'Evet, kullanıcıyı yeniden adlandır',
	'renameusersubmit' => 'Gönder',
	'renameusererrordoesnotexist' => '"<nowiki>$1</nowiki>" adlı kullanıcı bulunmamaktadır.',
	'renameusererrorexists' => '"<nowiki>$1</nowiki>" kullanıcısı zaten mevcut.',
	'renameusererrorinvalid' => '"<nowiki>$1</nowiki>" kullanıcı adı geçersiz.',
	'renameuser-error-request' => 'İsteğin alımıyla ilgili bir problem var.
Lütfen geri dönüp tekrar deneyin.',
	'renameuser-error-same-user' => 'Bir kullanıcıyı eskiden olduğu isme yeniden adlandıramazsınız.',
	'renameusersuccess' => 'Daha önce "<nowiki>$1</nowiki>" olarak kayıtlı kullanıcının rumuzu "<nowiki>$2</nowiki>" olarak değiştirilmiştir.',
	'renameuser-page-exists' => '$1 sayfası zaten mevcut ve otomatik olarak üstüne yazılamaz.',
	'renameuser-page-moved' => '$1 sayfası $2 sayfasına taşındı.',
	'renameuser-page-unmoved' => '$1 sayfası $2 sayfasına taşınamıyor.',
	'renameuserlogpage' => 'Kullanıcı adı değişikliği kayıtları',
	'renameuserlogpagetext' => 'Aşağıda bulunan liste adı değiştirilmiş kullanıcıları gösterir.',
	'renameuserlogentry' => '$1, "$2" olarak yeniden adlandırıldı',
	'renameuser-log' => '{{PLURAL:$1|1 düzenleme|$1 düzenleme}}. Neden: $2',
	'renameuser-move-log' => 'Kullanıcıyı "[[User:$1|$1]]" isminden "[[User:$2|$2]]" ismine yeniden adlandırırken, sayfa otomatik olarak taşındı',
	'right-renameuser' => 'Kullanıcıların adlarını değiştirir',
	'renameuser-renamed-notice' => 'Bu kullanıcının adı değiştirildi.
Referans için ad değiştirme günlüğü aşağıda sağlanmıştır.',
);

/** Ukrainian (Ук�аїнська)
 * @author AS
 * @author Ahonc
 * @author EugeneZelenko
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'renameuser' => 'Пе�ейменувати ко�истувача',
	'renameuser-linkoncontribs' => 'пе�ейменувати ко�истувача',
	'renameuser-linkoncontribs-text' => 'Пе�ейменувати цього ко�истувача',
	'renameuser-desc' => "Пе�ейменування ко�истувача (пот�ібні п�ава ''renameuser'')",
	'renameuserold' => "Поточне ім'я:",
	'renameusernew' => "Нове ім'я:",
	'renameuserreason' => 'П�ичина пе�ейменування:',
	'renameusermove' => 'Пе�ейменувати також сто�інку ко�истувача, сто�інку обгово�ення та їхні підсто�інки',
	'renameusersuppress' => 'Не ство�юйте пе�енап�авлення на нову назву',
	'renameuserreserve' => "За�езе�вувати ста�е ім'я ко�истувача для подальшого вико�истання",
	'renameuserwarnings' => 'Попе�едження:',
	'renameuserconfirm' => 'Так, пе�ейменувати ко�истувача',
	'renameusersubmit' => 'Виконати',
	'renameusererrordoesnotexist' => 'Ко�истувач з іменем «<nowiki>$1</nowiki>» не за�еєст�ований.',
	'renameusererrorexists' => 'Ко�истувач з іменем «<nowiki>$1</nowiki>» уже за�еєст�ований.',
	'renameusererrorinvalid' => "Недопустиме ім'я ко�истувача: <nowiki>$1</nowiki>.",
	'renameuser-error-request' => 'Виникли ускладнення з от�иманням запиту. Будь ласка, пове�ніться назад і повто�іть іще �аз.',
	'renameuser-error-same-user' => "Ви не можете змінити ім'я ко�истувача на те саме, що було �аніше.",
	'renameusersuccess' => 'Ко�истувач «<nowiki>$1</nowiki>» був пе�ейменований на «<nowiki>$2</nowiki>».',
	'renameuser-page-exists' => 'Сто�інка $1 вже існує і не може бути пе�езаписана автоматично.',
	'renameuser-page-moved' => 'Сто�інка $1 була пе�ейменована на $2.',
	'renameuser-page-unmoved' => 'Сто�інка $1 не може бути пе�ейменована на $2.',
	'renameuserlogpage' => 'Жу�нал пе�ейменувань ко�истувачів',
	'renameuserlogpagetext' => 'Це жу�нал здійснених пе�ейменувань за�еєст�ованих ко�истувачів.',
	'renameuserlogentry' => 'пе�ейменував $1 на «$2»',
	'renameuser-log' => 'мав $1 {{PLURAL:$1|�едагування|�едагування|�едагувань}}. П�ичина: $2',
	'renameuser-move-log' => 'Автоматичне пе�ейменування сто�інки п�и пе�ейменуванні ко�истувача «[[User:$1|$1]]» на «[[User:$2|$2]]»',
	'right-renameuser' => 'Пе�ейменування ко�истувачів',
	'renameuser-renamed-notice' => 'Цей ко�истувач був пе�ейменований.
Для довідки нижче наведений жу�нал пе�ейменувань.',
);

/** Urdu (اردو) */
$messages['ur'] = array(
	'renameuser' => 'صارف کا نام تبدیل کریں',
	'renameuser-log' => 'جن کی $1 ترامیم تھیں. $2',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'renameuser' => 'Rinomina utente',
	'renameuser-linkoncontribs' => 'rinomina utente',
	'renameuser-linkoncontribs-text' => 'Rinomina sto utente',
	'renameuser-desc' => "Funsion par rinominar un utente (ghe vole i diriti de ''renameuser'')",
	'renameuserold' => 'Vecio nome utente:',
	'renameusernew' => 'Novo nome utente:',
	'renameuserreason' => 'Motivo del canbio nome',
	'renameusermove' => 'Rinomina anca la pagina utente, la pagina de discussion e le relative sotopagine',
	'renameusersuppress' => 'No stà crear rimandi al nome novo',
	'renameuserreserve' => "Tien da conto el vecio nome utente par inpedir che'l vegna doparà in futuro",
	'renameuserwarnings' => 'Avertimenti:',
	'renameuserconfirm' => "Sì, rinomina l'utente",
	'renameusersubmit' => 'Invia',
	'renameusererrordoesnotexist' => 'El nome utente "<nowiki>$1</nowiki>" no l\'esiste',
	'renameusererrorexists' => 'El nome utente "<nowiki>$1</nowiki>" l\'esiste de zà',
	'renameusererrorinvalid' => 'El nome utente "<nowiki>$1</nowiki>" no\'l xe mìa valido.',
	'renameuser-error-request' => 'Se gà verificà un problema ne la ricezion de la richiesta. Torna indrìo e ripróa da novo.',
	'renameuser-error-same-user' => "No se pol rinominar un utente al stesso nome che'l gavea zà.",
	'renameusersuccess' => 'El nome utente "<nowiki>$1</nowiki>" el xe stà canbià in "<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => 'La pagina $1 la esiste de zà; no se pole sovrascrìvarla automaticamente.',
	'renameuser-page-moved' => 'La pagina $1 la xe stà spostà a $2.',
	'renameuser-page-unmoved' => 'No se pole spostar la pagina $1 a $2.',
	'renameuserlogpage' => 'Registro dei utenti rinominà',
	'renameuserlogpagetext' => 'De seguito vien presentà el registro de le modifiche ai nomi utente',
	'renameuserlogentry' => 'gà rinominà $1 in "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 contributo|$1 contributi}}. Motivo: $2',
	'renameuser-move-log' => 'Spostamento automatico de la pagina - utente rinominà da "[[User:$1|$1]]" a "[[User:$2|$2]]"',
	'right-renameuser' => 'Rinomina utenti',
	'renameuser-renamed-notice' => 'Sto utente el gà canbià nome.
Qua soto ghe xe el riferimento sul registro de rinomina.',
);

/** Veps (Vepsän kel')
 * @author Иго�ь Б�одский
 */
$messages['vep'] = array(
	'renameuser' => 'Udesnimitada kävutajad',
	'renameuserold' => 'Nügüdläine kävutajannimi:',
	'renameusernew' => "Uz' kävutajan nimi:",
	'renameuserreason' => 'Udesnimitandan sü:',
	'renameusersubmit' => 'Tehta',
	'right-renameuser' => 'Udesnimitada kävutajid',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'renameuser' => 'Đổi tên thành viên',
	'renameuser-linkoncontribs' => 'đổi tên thành viên',
	'renameuser-linkoncontribs-text' => 'Đổi tên thành viên này',
	'renameuser-desc' => "Đổi tên thành viên (cần có quyền ''renameuser'')",
	'renameuserold' => 'Tên hiệu hiện nay:',
	'renameusernew' => 'Tên hiệu mới:',
	'renameuserreason' => 'Lý do đổi tên:',
	'renameusermove' => 'Di chuyển trang thành viên và thảo luận thành viên (cùng với trang con của nó) sang tên mới',
	'renameusersuppress' => 'Không tạo trang đổi hướng đến tên mới',
	'renameuserreserve' => 'Không cho phép ai lấy tên cũ',
	'renameuserwarnings' => 'Cảnh báo:',
	'renameuserconfirm' => 'Đổi tên người dùng',
	'renameusersubmit' => 'Thực hiện',
	'renameusererrordoesnotexist' => 'Thành viên �<nowiki>$1</nowiki>� không tồn tại.',
	'renameusererrorexists' => 'Thành viên �<nowiki>$1</nowiki>� đã hiện hữu.',
	'renameusererrorinvalid' => 'Tên thành viên �<nowiki>$1</nowiki>� không hợp lệ.',
	'renameuser-error-request' => 'Có trục trặc trong tiếp nhận yêu cầu. Xin hãy quay lại và thử lần nữa.',
	'renameuser-error-same-user' => 'Bạn không thể đổi tên thành viên sang tên y hệt như vậy.',
	'renameusersuccess' => 'Thành viên �<nowiki>$1</nowiki>� đã được đổi tên thành �<nowiki>$2</nowiki>�.',
	'renameuser-page-exists' => 'Trang $1 đã tồn tại và không thể bị tự đ�ng ghi đè.',
	'renameuser-page-moved' => 'Trang $1 đã được di chuyển đến $2.',
	'renameuser-page-unmoved' => 'Trang $1 không thể di chuyển đến $2.',
	'renameuserlogpage' => 'Nhật trình đổi tên thành viên',
	'renameuserlogpagetext' => 'Đây là nhật trình ghi lại các thay đổi đối với tên thành viên',
	'renameuserlogentry' => 'đã đổi tên $1 thành �$2�',
	'renameuser-log' => 'Đã có {{PLURAL:$1|1 sửa đổi|$1 sửa đổi}}. Lý do: $2',
	'renameuser-move-log' => 'Đã tự đ�ng di chuyển trang khi đổi tên thành viên �[[User:$1|$1]]� thành �[[User:$2|$2]]�',
	'right-renameuser' => 'Đổi tên thành viên',
	'renameuser-renamed-notice' => 'Thành viên này đã được đổi tên.
Nhật trình đổi tên được ghi ở dưới để tiện theo dõi.',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'renameuser' => 'Votanemön gebani',
	'renameuser-linkoncontribs' => 'votanemön gebani',
	'renameuser-linkoncontribs-text' => 'Votanemön gebani at',
	'renameuser-desc' => "Votanemön gebani (gität: ''renameuser'' zesüdon)",
	'renameuserold' => 'Gebananem anuik:',
	'renameusernew' => 'Gebananem nulik:',
	'renameuserreason' => 'Kod votanemama:',
	'renameusermove' => 'Topätükön padi e bespikapadi gebana (e donapadis onsik) ad nem nulik',
	'renameuserreserve' => 'Neletön gebananemi rigik (pos votanemam) ad pagebön ün fütür',
	'renameuserwarnings' => 'Nuneds:',
	'renameuserconfirm' => 'Si, votanemolös gebani',
	'renameusersubmit' => 'Sedön',
	'renameusererrordoesnotexist' => 'Geban: "<nowiki>$1</nowiki>" no dabinon.',
	'renameusererrorexists' => 'Geban: "<nowiki>$1</nowiki>" ya dabinon.',
	'renameusererrorinvalid' => 'Gebananem: "<nowiki>$1</nowiki>" no lonöfon.',
	'renameuser-error-request' => 'Ädabinon säkäd pö daget bega. Geikolös, begö! e steifülolös dönu.',
	'renameuser-error-same-user' => 'No kanol votanemön gebani ad nem ot.',
	'renameusersuccess' => 'Geban: "<nowiki>$1</nowiki>" pevotanemon ad "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => 'Pad: $1 ya dabinon e no kanon pamoükön itjäfidiko.',
	'renameuser-page-moved' => 'Pad: $1 petopätükon ad pad: $2.',
	'renameuser-page-unmoved' => 'No eplöpos ad topätükön padi: $1 ad pad: $2.',
	'renameuserlogpage' => 'Jenotalised votanemamas',
	'renameuserlogpagetext' => 'Is palisedons votükams gebananemas.',
	'renameuserlogentry' => 'evotanemon eli $1 ad "$2"',
	'renameuser-log' => '{{PLURAL:$1|Redakam 1|Redakams $1}}. Kod: $2',
	'renameuser-move-log' => 'Pad petopätükon itjäfidiko dü votanemama gebana: "[[User:$1|$1]]" ad "[[User:$2|$2]]"',
	'right-renameuser' => 'Votanemön gebanis',
);

/** Walloon (Walon)
 * @author Srtxg
 */
$messages['wa'] = array(
	'renameuser' => 'Rilomer èn uzeu',
	'renameuserold' => "No d' elodjaedje pol moumint:",
	'renameusernew' => "Novea no d' elodjaedje:",
	'renameuserreason' => 'Råjhon pol rilomaedje:',
	'renameusermove' => "Displaecî les pådjes d' uzeu et d' copene (eyet leus dzo-pådjes) viè l' novea no",
	'renameusersubmit' => 'Evoye',
	'renameusererrordoesnotexist' => "L' uzeu «<nowiki>$1</nowiki>» n' egzistêye nén",
	'renameusererrorexists' => "L' uzeu «<nowiki>$1</nowiki>» egzistêye dedja",
	'renameusererrorinvalid' => "Li no d' elodjaedje «<nowiki>$1</nowiki>» n' est nén on no valide",
	'renameusersuccess' => "L' uzeu «<nowiki>$1</nowiki>» a stî rlomé a «<nowiki>$2</nowiki>»",
	'renameuser-page-exists' => "Li pådje $1 egzistêye dedja et n' pout nén esse otomaticmint spotcheye.",
	'renameuser-page-moved' => 'Li pådje $1 a stî displaeceye viè $2.',
	'renameuser-page-unmoved' => 'Li pådje $1 èn pout nén esse displaeceye viè $2.',
	'renameuserlogpage' => "Djournå des candjmints d' no d' uzeus",
	'renameuserlogpagetext' => "Chal pa dzo c' est ene djivêye des uzeus k' ont candjî leu no d' elodjaedje.",
	'renameuser-log' => "k' aveut ddja fwait $1 candjmints. $2",
	'renameuser-move-log' => "Pådje displaeceye otomaticmint tot rlomant l' uzeu «[[User:$1|$1]]» viè «[[User:$2|$2]]»",
);

/** Yiddish (��ִד�ש)
 * @author פו�ל�שער
 */
$messages['yi'] = array(
	'renameuser' => 'בײַטן באַנ�צער נאָמען',
	'renameuser-linkoncontribs' => 'בײַטן באַנ�צער נאָמען',
	'renameuser-linkoncontribs-text' => 'בײַטן נאָמען פֿון דעם באַנ�צער',
	'renameuser-desc' => "ל��גט צו א [[Special:Renameuser|באַזונדערן בלאַט]] צו בײַטן א באַנ�צער נאָמען (פֿאדערט ''renameuser'' רעכט)",
	'renameuserold' => 'לו�פ�גער באַנ�צער-נאָמען:',
	'renameusernew' => 'נײַער באַנ�צער-נאָמען:',
	'renameuserreason' => 'ס�בה פֿאַר ענדערן נאָמען:',
	'renameusermove' => 'באַוועגן באַנ�צער און שמועס בלעטער (מ�ט ז��ערע אונטערבלעטער) צו נײַעם נאָמען',
	'renameusersuppress' => 'שאַפֿט נ�שט ק��ן וו��טערפֿ�רונגען צום נײַעם נאָמען',
	'renameuserreserve' => 'בלאק�רן דעם אַלטן באַנ�צער־נאָמען פֿון נוץ א�ן צוקונפֿט',
	'renameuserwarnings' => 'ווארענונגען:',
	'renameuserconfirm' => '�אָ, ענדער דעם באַנ�צער־נאָמען',
	'renameusersubmit' => 'אײַנגעבן',
	'renameusererrordoesnotexist' => 'דער באַנ�צער "<nowiki>$1</nowiki>" עקז�סט�רט נ�שט.',
	'renameusererrorexists' => 'דער באַנ�צער "<nowiki>$1</nowiki>" עקז�סט�רט שו�ן.',
	'renameusererrorinvalid' => 'דער באַנ�צער נאָמען  "<nowiki>$1</nowiki>" א�ז נ�שט ג�לט�ק.',
	'renameuser-error-request' => 'געווען א פראבלעם מ�ט באַקומען ד� בקשה.
ב�טע ג��ט צור�ק און פרואווט וו�דעראַמאָל.',
	'renameuser-error-same-user' => 'מען קען נ�שט ענדערן א באַנ�צער צום זעלבן נאָמען וו� פֿר�ער.',
	'renameusersuccess' => 'דער באַנ�צער־נאָמען "<nowiki>$1</nowiki>" א�ז געווארן געענדערט צו "<nowiki>$2</nowiki>".',
	'renameuser-page-exists' => "דער בלאַט $1 עקז�סט�רט שו�ן און מ'קען א�ם נ�שט או�טאָמאַט�ש א�בערשרײַבן.",
	'renameuser-page-moved' => 'דער בלאַט $1 א�ז געווארן באַוועגט צו $2.',
	'renameuser-page-unmoved' => 'מען קען נ�שט באַוועגן דעם בלאַט $1 צו $2.',
	'renameuserlogpage' => 'באַנ�צער נאָמען-טו�ש לאָג-בוך',
	'renameuserlogpagetext' => 'דאָס א�ז אַ לאג פֿון ענדערונגען צו באַנ�צער־נעמען.',
	'renameuserlogentry' => 'מ\'האט דעם נאָמען $1 געענדערט צו "$2"',
	'renameuser-log' => '{{PLURAL:$1|1 רעדאַקט�רונג|$1 רעדאַקט�רונגען}}. גרונד: $2',
	'renameuser-move-log' => 'או�טאמאַט�ש באַוועגט בלאַט דורך ענדערן באַנ�צער־נאָמען פֿון "[[User:$1|$1]]" צו "[[User:$2|$2]]"',
	'right-renameuser' => 'בײַטן באַנ�צער נעמען',
	'renameuser-renamed-notice' => 'דער נאָמען פֿון דעם באַנ�צער א�ז געענדערט געווארן.
דער ענדערן נעמען לאגבוך ווערט געוו�זן אונטן.',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'renameuserold' => 'Orúkọ oníṣe ìsinsìnyí:',
	'renameusernew' => 'Orúkọ oníṣe tuntun:',
	'renameuserwarnings' => '�wọn ìkìlọ�:',
	'renameusersubmit' => 'Fúnsílẹ�',
	'renameusererrordoesnotexist' => 'Oníṣe "<nowiki>$1</nowiki>" kò sí.',
	'renameusererrorexists' => 'Oníṣe "<nowiki>$1</nowiki>" tilẹ� wà tẹ́lẹ�.',
	'renameuserlogentry' => 'ṣàtúnsọlórúkọ $1 sí $2',
	'renameuser-log' => '{{PLURAL:$1|�túnṣe 1|�wọn àtúnṣe $1}}. Ìdíẹ�: $2',
);

/** Cantonese (粵語) */
$messages['yue'] = array(
	'renameuser' => '改用戶名',
	'renameuser-desc' => "幫用戶改名 (�要 ''renameuser'' 權�)",
	'renameuserold' => '現�嘅用戶名:',
	'renameusernew' => '新嘅用戶名:',
	'renameuserreason' => '改名嘅原因:',
	'renameusermove' => '搬用戶頁同埋佢嘅對話頁（同埋佢哋嘅細頁）到新名',
	'renameuserwarnings' => '警告:',
	'renameuserconfirm' => '係，改呢�用戶名',
	'renameusersubmit' => '遞交',
	'renameusererrordoesnotexist' => '用戶"<nowiki>$1</nowiki>"唔存在',
	'renameusererrorexists' => '用戶"<nowiki>$1</nowiki>"已經存在',
	'renameusererrorinvalid' => '用戶名"<nowiki>$1</nowiki>"唔正確',
	'renameuser-error-request' => '響收到請求嗰�出咗問題�
請返去再試過�',
	'renameuser-error-same-user' => '你唔可以改�位用戶係同之前嘅嘢�樣�',
	'renameusersuccess' => '用戶"<nowiki>$1</nowiki>"已經改咗名做"<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => '$1呢�版已經存在，唔可以自動重寫�',
	'renameuser-page-moved' => '$1呢�版已經搬到去$2�',
	'renameuser-page-unmoved' => '$1呢�版唔能夠搬到去$2�',
	'renameuserlogpage' => '用戶改名日誌',
	'renameuserlogpagetext' => '呢�係改用戶名嘅日誌',
	'renameuserlogentry' => '已經幫 $1 改咗名做 "$2"',
	'renameuser-log' => '擁有$1次編輯� 原因: $2',
	'renameuser-move-log' => '當由"[[User:$1|$1]]"改名做"[[User:$2|$2]]"嗰�已經自動搬咗用戶頁',
	'right-renameuser' => '改用戶名',
);

/** Simplified Chinese (�中文(�体)�)
 * @author Bencmq
 * @author Gaoxuewei
 * @author Gzdavidwong
 * @author Hydra
 * @author Liangent
 * @author PhiLiP
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'renameuser' => '更名用户',
	'renameuser-linkoncontribs' => '用户重新命名',
	'renameuser-linkoncontribs-text' => '重命名此用户',
	'renameuser-desc' => "添加�个[[Special:Renameuser|特殊页面]]来重命名用户（�要''renameuser''权�）",
	'renameuserold' => '当前用户名：',
	'renameusernew' => '新用户名:',
	'renameuserreason' => '重命名的原因:',
	'renameusermove' => '移动用户页及其对话页（包括各子页）到新的名字',
	'renameusersuppress' => '不要创建重定向到新的名称',
	'renameuserreserve' => '封禁旧用户名，使之不能在日后使用',
	'renameuserwarnings' => '警告:',
	'renameuserconfirm' => '是，为用户重命名',
	'renameusersubmit' => '提交',
	'renameusererrordoesnotexist' => '用户"<nowiki>$1</nowiki>"不存在',
	'renameusererrorexists' => '用户"<nowiki>$1</nowiki>"已存在',
	'renameusererrorinvalid' => '用户名"<nowiki>$1</nowiki>"不可用',
	'renameuser-error-request' => '在收到请求时出现问题�
请回去重试�',
	'renameuser-error-same-user' => '您不可以更改�位用户是跟之前的东西�样�',
	'renameusersuccess' => '用户"<nowiki>$1</nowiki>"已经更名为"<nowiki>$2</nowiki>"',
	'renameuser-page-exists' => '$1��页己经存在，不能自动覆��',
	'renameuser-page-moved' => '$1��页已经移动到$2�',
	'renameuser-page-unmoved' => '$1��页不能移动到$2�',
	'renameuserlogpage' => '用户更名日志',
	'renameuserlogpagetext' => '本日志记录用户名的更改',
	'renameuserlogentry' => '将$1更名为�$2�',
	'renameuser-log' => '拥有$1次编辑� 理由: $2',
	'renameuser-move-log' => '当由"[[User:$1|$1]]"重命名作"[[User:$2|$2]]"时已经自动移动用户页',
	'right-renameuser' => '更名用户',
	'renameuser-renamed-notice' => '本用户已更名�下面提供更名日志以供参��',
);

/** Traditional Chinese (�中文(繁體)�)
 * @author Gaoxuewei
 * @author Horacewai2
 * @author Mark85296341
 * @author Waihorace
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'renameuser' => '用戶重新命名',
	'renameuser-linkoncontribs' => '用戶重新命名',
	'renameuser-linkoncontribs-text' => '重命名此用戶',
	'renameuser-desc' => "新增��[[Special:Renameuser|特殊頁面]]來重命名用戶（�要''renameuser''權�）",
	'renameuserold' => '現�用戶名：',
	'renameusernew' => '新的使用�名稱：',
	'renameuserreason' => '重新命名的原因：',
	'renameusermove' => '移動用戶頁及其對話頁（包括各子頁）到新的名字',
	'renameusersuppress' => '不要建立重定向到新的名稱',
	'renameuserreserve' => '封禁舊使用�名稱，使之不能在日後使用',
	'renameuserwarnings' => '警告：',
	'renameuserconfirm' => '是，為用戶重新命名',
	'renameusersubmit' => '提交',
	'renameusererrordoesnotexist' => '用戶�<nowiki>$1</nowiki>�不存在',
	'renameusererrorexists' => '用戶�<nowiki>$1</nowiki>�已存在',
	'renameusererrorinvalid' => '用戶名�<nowiki>$1</nowiki>�不可用',
	'renameuser-error-request' => '在收到請求�出現問題�
請回去重試�',
	'renameuser-error-same-user' => '您不可以更改�位用戶是跟之前的東西�樣�',
	'renameusersuccess' => '用戶�<nowiki>$1</nowiki>�已經更名為�<nowiki>$2</nowiki>�',
	'renameuser-page-exists' => '$1 ��頁己經存在，不能自動覆寫�',
	'renameuser-page-moved' => '$1 ��頁已經移動到 $2�',
	'renameuser-page-unmoved' => '$1 ��頁不能移動到 $2�',
	'renameuserlogpage' => '用戶名變更日誌',
	'renameuserlogpagetext' => '�是用戶名更改的日誌',
	'renameuserlogentry' => '已經把 $1 重新命名為�$2�',
	'renameuser-log' => '擁有 $1 次編輯� 理由：$2',
	'renameuser-move-log' => '當由�[[User:$1|$1]]�重新命名作�[[User:$2|$2]]��已經自動移動用戶頁',
	'right-renameuser' => '重新命名用戶',
	'renameuser-renamed-notice' => '該用戶已被重新命名�
以下列出更改用戶名日誌以供參��',
);

/** Zulu (isiZulu) */
$messages['zu'] = array(
	'renameusersubmit' => 'Yisa',
);

