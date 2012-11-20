<?php
/**
*
* acp_mods [Danish]
*
* @package language
* @version $Id$
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated by Olympus DK Team
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Tilgængelige ændringer',

	'AM_MOD_ALREADY_INSTALLED'	=> 'AutoMOD konstaterer at dette MOD allerede er installeret og kan ikke fortsætte.',
	'AM_MOD_NOT_INSTALLED'	=> 'AutoMOD konstaterer at dette MOD endnu ikke er installeret og kan ikke fortsætte.',
	'AM_MANUAL_INSTRUCTIONS'	=> 'AutoMOD sender en komprimeret fil til din computer. På grund af AutoMOD-konfiguration kan filer ikke skrives direkte til dit site automatisk. Derfor skal du udpakke filen og uploade de indeholdte filer manuelt til din server. Modtog du ikke filen automatisk, klik %sher%s.',

	'AUTHOR_EMAIL'			=> 'Emailadresse',
	'APPLY_THESE_CHANGES'	=> 'Tilføj disse ændringer',
	'APPLY_TEMPLATESET'		=> 'til denne typografis skabelonfiler',
	'AUTHOR_INFORMATION'	=> 'Information om udvikler',
	'AUTHOR_NAME'			=> 'Navn',
	'AUTHOR_NOTES'			=> 'Udviklers bemærkninger',
	'AUTHOR_URL'			=> 'URL',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'Den version af AutoMOD du forsøgte at installere, er allerede installeret. Slet venligst filen install_automod.php.',
	'AUTOMOD_UNKNOWN_VERSION'	=> 'AutoMOD kan ikke opdateres, da den allerede installerede version ikke kunne bestemmes. Din installation er listet som version %s.',
	'AUTOMOD_VERSION' => 'AutoMOD version',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'Frigivelsedato',
	'CHANGE_VERSION'=> 'Versionnummer',
	'CHANGES'		=> 'Ændringer',
	'CHECK_AGAIN'  => 'Kontroller igen',
	'CLICK_HIDE_FILES' => 'Klik for at skjule filer uden fejl',
	'CLICK_HIDE_EDITS' => 'Klik for at skjule ændringer uden fejl',
	'CLICK_SHOW_FILES' => 'Klik for at vise alle filer',
	'CLICK_SHOW_EDITS' => 'Klik for at vise alle ændringer',
	'COMMENT'		=> 'Kommentar',
	'CREATE_TABLE'	=> 'Databaseændringer',
	'CREATE_TABLE_EXPLAIN'	=> 'AutoMOD har udført databaseændringerne, inklusiv en MOD-tilladelse som er blevet tilknyttet rollen "Fuldgyldig administrator".',
	'DELETE'			=> 'Slet',
	'DELETE_CONFIRM'	=> 'Er du sikker på at du vil slette dette MOD?',
	'DELETE_ERROR'		=> 'Der opstod en fejl under sletningen af det valgte MOD.',
	'DELETE_SUCCESS'	=> 'MODet blev korrekt slettet.',

	'DIR_PERMS'			=> 'Mappetilladelser',
	'DIR_PERMS_EXPLAIN'	=> 'Nogle systemer forudsætter at mapper er tildelt bestemte tilladelser for at fungere. Almindeligvis er standarden 0755 korrekt. Denne indstilling har ingen indflydelse på Windows-baserede systemer.',
	'DIY_INSTRUCTIONS'	=> 'Gør-det-selv anvisninger. Disse instrukser skal udføres manuelt, før installationen af MODet er fuldendt.',
	'DEPENDENCY_INSTRUCTIONS'	=> 'Det MOD du forsøger at installere er afhængig af et andet MOD. AutoMOD kan ikke detektere om dette MOD er installeret. Bekræft venligst om MOD\'et <strong><a href="%1$s">%2$s</a></strong> er installeret ved at klikke på fortsæt.',
	'DESCRIPTION'	=> 'Beskrivelse',
	'DETAILS'		=> 'Detaljer',

	'EDITED_ROOT_CREATE_FAIL'	=> 'AutoMOD kunne ikke oprette den mappe hvor ændrede filer skal gemmes.',
	'ERROR'			=> 'Fejl',

	'FILE_EDITS'		=> 'Filændringer',
	'FILE_EMPTY'		=> 'Filen er tom',
	'FILE_MISSING'		=> 'Filen findes ikke',
	'FILE_PERMS'		=> 'Filtilladelser',
	'FILE_PERMS_EXPLAIN'=> 'Nogle systemer forudsætter at filer er tildelt bestemte tilladelser for at fungere korrekt. Almindeligvis er standarden 0644 korrekt. Denne indstilling har ingen indflydelse på Windows-baserede systemer.',
	'FILE_TYPE'			=> 'Komprimeret filtype',
	'FILE_TYPE_EXPLAIN'	=> 'Gælder kun for metoden dannelse af "Komprimeret fil til download".', //?
	'FILESYSTEM_NOT_WRITABLE'	=> 'AutoMOD har konstateret at der ikke kan skrives direkte til filsystemet. Denne metode kan derfor ikke anvendes.',
	'FIND'				=> 'Find',
	'FIND_MISSING'		=> 'Den specificerede søgning i MOD\'et giver ingen match i filen.',
	'FORCE_INSTALL'		=> 'Gennemtving installation',
	'FORCE_UNINSTALL' => 'Gennemtving afinstallering',
	'FORCE_CONFIRM'		=> 'Installationen kan gennemtvinges, men vil medføre at den ikke er komplet. Du vil være nødsaget til at foretage nogle manuelle tilretninger på boardet for at færdiggøre installationen. Ønsker du at fortsætte?',
	'FTP_INFORMATION'	=> 'FTP-information',
	'FTP_NOT_USABLE'  => 'FTP-funktionen kan ikke bruges, da denne er deaktiveret af din hostingudbyder.',
	'FTP_METHOD_ERROR' => 'Der blev ikke fundet nogen FTP-metode, kontrollér venligst i opsætningen af AutoMOD, om der er valgt en korrekt FTP-metode.',
	'FTP_METHOD_EXPLAIN'=> 'Oplever du problemer med den almindelige FTP-indstilling, kan du alternativt vælge at afprøve "simpel sokkel" for at forbinde til FTP-serveren.',
	'FTP_METHOD_FTP'	=> 'FTP',
	'FTP_METHOD_FSOCK'	=> 'simpel sokkel',

	'GO_PHP_INSTALLER' => 'Dette MOD kræver et eksternt installationsprogram for at færdiggøre installationen. Klik her for at forsætte til dette trin.',

	'INHERIT_NO_CHANGE'	=> 'Der kan ikke udføres ændringer i denne fil, fordi skabelonen er %1$s arver egenskaber fra %2$s.',
	'INLINE_FIND_MISSING'=> 'Den specificerede søgning in-line giver ingen match i filen.',
	'INLINE_EDIT_ERROR' => 'Der opstod en fejl, fordi en in-line ændring angivet i MODX-installationsfilen mangler alle krævede elementer', 
	'INSTALL_AUTOMOD'	=> 'AutoMOD Installation',
	'INSTALL_AUTOMOD_CONFIRM' => 'Er du sikker på at du vil installere AutoMOD?',
	'INSTALL_DATE'      => 'Dato for installation',
	'INSTALL_TIME'		=> 'Tidspunkt for installation',
	'INSTALL_MOD'		=> 'Installer dette MOD',
	'INSTALL_ERROR'		=> 'En eller flere handlinger i forbindelse med installationen fejlede. Gennemgå venligst nedenstående hændelser, foretag de nødvendige justeringer og prøv igen. Det er muligt at fortsætte installationen selvom nogle af handlingerne fejlede. <strong>Det frarådes imidlertid, det kan medføre at dit board ikke fungerer korrekt.</strong>',
	'INSTALL_FORCED'	=> 'Du gennemtvang installationen af dette MOD selvom der opstod fejl undervejs. Dit board kan derfor være ude af funktion. Bemærk venligst de fejlede handlinger nedenfor og ret disse.',
	'INSTALLED'			=> 'MOD installeret',
	'INSTALLED_EXPLAIN'	=> 'Dit MOD er nu installeret! Her vises status på de udførte handlinger i installationen. Bemærk og forsøg at rette eventuelle fejl, eller søg support på <a href="http://www.phpbb.com">phpBB.com</a> i MODets emne.',
	'INSTALLED_MODS'	=> 'Installerede MODs',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD er installeret korrekt. Du kan nu administrere phpBB MODifikationer via fanen AutoMOD i administratorkontrolpanelet.',
	'INVALID_MOD_INSTRUCTION'	=> 'Dette MOD indeholder en ikke gyldig instruktion, eller en find in-line handling fejlede.',
	'INVALID_MOD_NO_FIND' => 'Dette MOD mangler en find-instruktion som matcher handlingen "%s"',
	'INVALID_MOD_NO_ACTION' => 'Dette MOD mangler en handling som matcher find-instruktionen "%s"', 

	'LANGUAGE_NAME'		=> 'Sprognavn',

	'MANUAL_COPY'				=> 'Kopiering ikke forsøgt',
	'MOD_CONFIG'				=> 'Konfiguration af AutoMOD',
	'MOD_CONFIG_UPDATED'        => 'AutoMOD\'s konfiguration er opdateret.',
	'MOD_DETAILS'				=> 'MOD-beskrivelse',
	'MOD_DETAILS_EXPLAIN'		=> 'Her kan al kendt information om det valgte MOD læses.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'MODets navn',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMOD kunne ikke åbne %s.',
	'MOD_UPLOAD'				=> 'Upload MOD',
	'MOD_UPLOAD_EXPLAIN'		=> 'Her har du mulighed for at uploade en zippet MOD-pakke indeholdende de nødvendige MODX-filer for at udføre installationen. AutoMOD vil efterfølgende forsøge at udpakke filerne og klargøre dem til installationen.',
	'MOD_UPLOAD_INIT_FAIL'		=> 'Der opstod en fejl under starten af uploadet.',
	'MOD_UPLOAD_SUCCESS'		=> 'MOD uploadet og klar til installation.',
	'MOD_UPLOAD_UNRECOGNIZED'  => 'Strukturen i det uploadede MOD-arkiv kan ikke genkendes. Kontroller om den uploade zip-filen er beskadiget eller mangler nogle mapper eller filer, eller kontakt udvikleren af MODet.',
	'AUTOMOD_INSTALLATION'		=> 'AutoMOD installation',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Velkommen til AutoMOD installationen. Du får brug for dine FTP-detaljer hvis AutoMOD konstaterer at det er den mest hensigtsmæssige metode at skrive filer på. Resultaterne af de udførte test er anført herunder.',

	'MODS_CONFIG_EXPLAIN'		=> 'Her vælger du hvordan AutoMOD tilpasser dine filer. Den simpleste metode er "komprimeret fil til download", som kræver at du efterfølgende selv uploader filer. De øvrige forudsætter udvidede tilladelser på serveren.',
	'MODS_COPY_FAILURE'			=> 'Filen %s kunne ikke kopieres til rette sted. Kontrollér venligst tilladelseindstillingerne eller vælg en anden skrivemetode.',
	'MODS_EXPLAIN'				=> 'Herfra kan du administrere tilgængelige MODs på boardet. AutoMODs giver dig mulighed for at tilpasse og udvide funktionerne på dit board og her tilbydes automatisk installation af disse modifikationer udviklet af phpBB communitiet. Læs mere information om MODs og AutoMOD på <a href="http://www.phpbb.com/mods">phpBB websitet</a>. Et MOD tilføjes denne liste ved at benytte formularen nederst på siden. Alternativt, ved at udpakke det og uploade det til mappen /store/mods/ på din server.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD kunne ikke uploude filen %s til rette placering med FTP',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD kunne ikke forbinde til din FTP-server. Fejlen var %s',
	'MODS_MKDIR_FAILED'			=> 'Mappen %s kunne ikke oprettes',
	'MODS_RMDIR_FAILURE'    => 'Mappen %s kunne ikke slettes',
	'MODS_RMFILE_FAILURE'    => 'Filen %s kunne ikke slettes',
	'MODS_NOT_WRITABLE'      => 'Der kan ikke skrives til mappen store/mods/, hvilket er et krav for at “Upload MOD” virker korrekt, med mindre du vælger "skrivemetode" til "FTP". Juster venligst dine tilladelser eller indstillinger og prøv igen.',
	'MODS_SETUP_INCOMPLETE'		=> 'Der blive konstateret et problem i din konfiguration som bevirker at AutoMOD ikke fungerer. Det burde kun opstå hvis indstillinger som f.eks FTP-brugernavn og andet er blevet ændret, men ikke ændret tilsvarende konfigurationen af AutoMOD.',

	'NAME'			=> 'Navn',
	'NEW_FILES'		=> 'Nye filer',
	'NEED_READ_PERMISSIONS' => 'Tilladelser er ikke korrekte, %s kan ikke læses.',
	'NO_ATTEMPT'	=> 'Ikke forsøgt',
	'NO_INSTALLED_MODS'		=> 'Ingen installerede MODs fundet',
	'NO_MOD'				=> 'Det valgte MOD kunne findes.',
	'NO_UNINSTALLED_MODS'	=> 'Ingen ikke installerede MODs fundet',
	'NO_UPLOAD_FILE'		=> 'Ingen fil valgt.',

	'ORIGINAL'	=> 'Original',

	'PATH'					=> 'Sti',
	'PREVIEW_CHANGES'		=> 'Vis prøve af ændringerne',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'Viser ændringer før disse udføres.',
	'PRE_INSTALL'			=> 'Forbereder installation',
	'PRE_INSTALL_EXPLAIN'	=> 'Her kan du se alle de ændringer der forberedes udført på boardet. <strong>ADVARSEL!</strong>, når disse ændringer accepteres vil phpBB\'s standardfiler blive ændret og eventuelle tilpasninger af databasen udført. Fejler installationen, er det under forudsætning at du har tilgang til AutoMOD, muligt af gendanne til dette punkt.',
	'PRE_UNINSTALL'			=> 'Forbereder afinstallering',
	'PRE_UNINSTALL_EXPLAIN'	=> 'Her kan se du alle de ændringer der forberedes udført for at afinstallere dette MOD. <strong>ADVARSEL!</strong>, når disse ændringer accepteres vil phpBB\'s standardfiler blive ændret og evtuelle tilpasninger af databasen udført. Bemærk at der her anvendes en fortrydelseteknik som kan medføre at tilbageførslen ikke er 100% korrekt. Fejler afinstalleringen, er det under forudsætning at du har tilgang til AutoMOD, muligt af gendanne til dette punkt.',

	'REMOVING_FILES'	=> 'Filer der skal slettes',
	'RETRY'				=> 'Forsøg igen',
	'RETURN_MODS'		=> 'Tilbage til AutoMOD',
	'REVERSE'			=> 'Omgøre',	//Reverse ~ tilbageføre
	'ROOT_IS_READABLE'	=> 'Der kan skrives til phpBB-rodmappen.',
	'ROOT_NOT_READABLE'	=> 'AutoMOD kunne læse phpBB\'s fil index.php. Det skyldes formentlig at tilladelser er for restriktive i rod-mappen, og det forhindrer AutoMOD i at fungere. Prøv venligst at justere tilladelser og udfør kontrollen igen.',


	'SORT_NAME'		=> 'Navn',
	'SORT_DATE'		=> 'Dato',
	'SOURCE'		=> 'Kilde',
	'SQL_QUERIES'	=> 'SQL-forespørgsler',
	'STATUS'		=> 'Status',
	'STORE_IS_WRITABLE'			=> 'Der kan skrives til mappen store/.',
	'STORE_NOT_WRITABLE_INST'	=> 'AutoMOD konstaterer at der ikke kan skrives til mappen store/. Det er en forudsætning for at AutoMOD fungerer korrekt. Justér venligst mappens tilladelser og prøv igen.',
	'STORE_NOT_WRITABLE'		=> 'Der kan ikke skrives til mappen store/.',
	'STYLE_NAME'	=> 'Navn på typografi',
	'SUCCESS'		=> 'Udført',

	'TARGET'		=> 'Mål',
	'TARGET_VERSION'	=> 'phpBB målversion',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> 'Ingen udviklernoter anført.',
	'UNKNOWN_MOD_DESCRIPTION'		=> '', 
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'	=> '', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'		=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'	=> '',
	'UNKNOWN_QUERY_REVERSE' => 'Ukendt databataseforespørgsel ved forsøg på omgørelse',	//reverse query

	'UNINSTALL'				=> 'Afinstaller',
	'UNINSTALL_AUTOMOD' => 'AutoMOD afinstallation',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'Er du sikker på at du vil afinstallere AutoMOD? Alle MODs installeret med AutoMOD vil forblive installeret.',
	'UNINSTALLED'			=> 'MOD afinstalleret',
	'UNINSTALLED_MODS'		=> 'Ikke installerede MODs',
	'UNINSTALLED_EXPLAIN'	=> 'Dit MOD er nu afinstalleret! Her vises status på de udførte handlinger under afinstalleringen. Bemærk og forsøg at rette eventuelle fejl, alternativt søges hjælp i MODets emne på <a href="http://www.phpbb.com">phpBB.com</a>.',
	'UNRECOGNISED_COMMAND' => 'Fejl, kommandoen %s kendes ikke', 
	'UPDATE_AUTOMOD'		=> 'Opdater AutoMOD',
	'UPDATE_AUTOMOD_CONFIRM'=> 'Bekræft venligst at du ønsker at opdatere AutoMOD.',
	'UPLOAD'				=> 'Upload',

	'VERSION'			=> 'Version',
	'VERSION_WARNING'	=> 'Dette MOD er målrettet phpBB version %1$s, men den version er %2$s. Selv om installationen forløber uden fejlmeldinger, er der risiko for MODet ikke virker som forventet eller risikerer at gøre dit board ubrugeligt. Kontakt MOD-udvikleren for at sikre dig at MODet er kompatibelt med din version af phpBB.',

	'WARNING'				=> 'Advarsel',
	'WRITE_DIRECT_FAIL'		=> 'AutoMOD kunne ikke kopiere filen %s til rette placering med den direkte metode. Vælg venligst en anden metode og forsøg igen.',
	'WRITE_DIRECT_TOO_SHORT'	=> 'AutoMOD kunne ikke afslutte skrivning af filen %s. Problemet kan ofte løses med knappen forsøg igen. Virker det stadig ikke, prøv en anden skrivemetode.',
	'WRITE_MANUAL_FAIL'		=> 'AutoMOD kunne ikke tilføje filen %s til et komprimeret arkiv. Forsøg venligst med en anden skrivemetode.',
	'WRITE_METHOD'			=> 'Skrivemetode',
	'WRITE_METHOD_DIRECT'	=> 'Direkte',
	'WRITE_METHOD_EXPLAIN'	=> 'Du kan vælge den foretrukne måde at skrive filer på. Den mest kompatible metode er dannelse af "Komprimeret fil til download".',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'Komprimeret fil til download',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Tilføj efter',
	'before add'			=> 'Tilføj før',
	'find'					=> 'Find',
	'in-line-after-add'		=> 'In-ine efter, tilføj',
	'in-line-before-add'	=> 'In-Line før, tilføj',
	'in-line-edit'			=> 'In-Line find',
	'in-line-operation'		=> 'In-Line tilføjelse',
	'in-line-replace'		=> 'In-Line erstat',
	'in-line-replace-with'	=> 'In-Line erstat',
	'replace'				=> 'Erstat med',
	'replace with'			=> 'Erstat med',
	'operation'				=> 'Tilføjelse',
));

?>