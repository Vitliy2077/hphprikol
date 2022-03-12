<?php
$domain = $_GET['domain'];
$whoisservers = array(
    "ac" => "whois.nic.ac", // Ascension Island
    // ad - Andorra - нет назначенного whois сервера
    "ae" => "whois.nic.ae", // Арабские эмираты
    "aero"=>"whois.aero",
    "af" => "whois.nic.af", // Афганистан
    "ag" => "whois.nic.ag", // Antigua And Barbuda
    "ai" => "whois.ai", // Ангола
    "al" => "whois.ripe.net", // Албания
    "am" => "whois.amnic.net",  // Армения
    // an - Netherlands Antilles - нет назначенного whois сервера
    // ao - Angola - нет назначенного whois сервера
    // aq - Antarctica (New Zealand) - нет назначенного whois сервера
    // ar - Argentina - нет назначенного whois сервера
    "arpa" => "whois.iana.org",
    "as" => "whois.nic.as", // American Samoa
    "asia" => "whois.nic.asia",
    "at" => "whois.nic.at", // Австрия
    "au" => "whois.aunic.net", // Австралия
    // aw - Aruba - нет назначенного whois сервера
    "ax" => "whois.ax", // Aland Islands
    "az" => "whois.ripe.net", // Азербайджан
    // ba - Bosnia And Herzegovina - нет назначенного whois сервера
    // bb - Barbados - нет назначенного whois сервера
    // bd - Bangladesh - нет назначенного whois сервера
    "be" => "whois.dns.be", // Бельгия
    "bg" => "whois.register.bg", // Болгария
    "bi" => "whois.nic.bi", // Burundi
    "biz" => "whois.biz",
    "bj" => "whois.nic.bj", // Benin
    // bm - Bermuda - нет назначенного whois сервера
    "bn" => "whois.bn", // Brunei Darussalam
    "bo" => "whois.nic.bo", // Боливия
    "br" => "whois.registro.br", // Бразилия
    "bt" => "whois.netnames.net", // Bhutan
    // bv - Bouvet Island (Norway) - нет назначенного whois сервера
    // bw - Botswana - нет назначенного whois сервера
    "by" => "whois.cctld.by", // Беларусия
    "bz" => "whois.belizenic.bz", // Belize
    "ca" => "whois.cira.ca", // Канада
    "cat" => "whois.cat", // Испания
    "cc" => "whois.nic.cc", // Cocos (Keeling) Islands
    "cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
    // cf - Central African Republic - нет назначенного whois сервера
    "ch" => "whois.nic.ch", // Швейцария
    "ci" => "whois.nic.ci", // Cote d'Ivoire
    "ck" => "whois.nic.ck", // Острова Кука
    "cl" => "whois.nic.cl", // Чили
    // cm - Cameroon - нет назначенного whois сервера
    "cn" => "whois.cnnic.net.cn", // Китай
    "co" => "whois.nic.co", // Колумбия
    "com" => "whois.verisign-grs.com",
    "coop" => "whois.nic.coop",
    // cr - Costa Rica - нет назначенного whois сервера
    // cu - Cuba - нет назначенного whois сервера
    // cv - Cape Verde - нет назначенного whois сервера
    // cw - Curacao - нет назначенного whois сервера
    "cx" => "whois.nic.cx", // Christmas Island
    // cy - Cyprus - нет назначенного whois сервера
    "cz" => "whois.nic.cz", // Czech Republic
    "de" => "whois.denic.de", // Германия
    // dj - Djibouti - нет назначенного whois сервера
    "dk" => "whois.dk-hostmaster.dk", // Дания
    "dm" => "whois.nic.dm", // Доминиканская республика
    // do - Dominican Republic - нет назначенного whois сервера
    "dz" => "whois.nic.dz", // Algeria
    "ec" => "whois.nic.ec", // Эквадор
    "edu" => "whois.educause.edu",
    "ee" => "whois.eenet.ee", // Эстония
    "eg" => "whois.ripe.net", // Египет
    // er - Eritrea - нет назначенного whois сервера
    "es" => "whois.nic.es", // Испания
    // et - Ethiopia - нет назначенного whois сервера
    "eu" => "whois.eu",
    "fi" => "whois.ficora.fi", // Финляндия
    // fj - Fiji - нет назначенного whois сервера
    // fk - Falkland Islands - нет назначенного whois сервера
    // fm - Micronesia, Federated States Of - нет назначенного whois сервера
    "fo" => "whois.nic.fo", // Фарерские острова
    "fr" => "whois.nic.fr", // Франция
    // ga - Gabon - нет назначенного whois сервера
    "gd" => "whois.nic.gd", // Гренада
    // ge - Georgia - нет назначенного whois сервера
    // gf - French Guiana - нет назначенного whois сервера
    "gg" => "whois.gg", // Guernsey
    // gh - Ghana - нет назначенного whois сервера
    "gi" => "whois2.afilias-grs.net", // Гибралтар
    "gl" => "whois.nic.gl", // Гренландия (Denmark)
    // gm - Gambia - нет назначенного whois сервера
    // gn - Guinea - нет назначенного whois сервера
    "gov" => "whois.nic.gov",
    // gr - Greece - нет назначенного whois сервера
    // gt - Guatemala - нет назначенного whois сервера
    "gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
    // gu - Guam - нет назначенного whois сервера
    // gw - Guinea-bissau - нет назначенного whois сервера
    "gy" => "whois.registry.gy", // Guyana
    "hk" => "whois.hkirc.hk", // Hong Kong
    // hm - Heard and McDonald Islands (Australia) - нет назначенного whois сервера
    "hn" => "whois.nic.hn", // Honduras
    "hr" => "whois.dns.hr", // Хорватия
    "ht" => "whois.nic.ht", // Гаити
    "hu" => "whois.nic.hu", // Венгрия
    // id - Indonesia - нет назначенного whois сервера
    "ie" => "whois.domainregistry.ie", // Ирландия
    "il" => "whois.isoc.org.il", // Израиль
    "im" => "whois.nic.im", // Isle of Man
    "in" => "whois.inregistry.net", // Индия
    "info" => "whois.afilias.net",
    "int" => "whois.iana.org",
    "io" => "whois.nic.io", // British Indian Ocean Territory
    "iq" => "whois.cmc.iq", // Ирак
    "ir" => "whois.nic.ir", // Иран
    "is" => "whois.isnic.is", // Исландия
    "it" => "whois.nic.it", // Италия
    "je" => "whois.je", // Jersey
    // jm - Jamaica - нет назначенного whois сервера
    // jo - Jordan - нет назначенного whois сервера
    "jobs" => "jobswhois.verisign-grs.com",
    "jp" => "whois.jprs.jp", // Япония
    "ke" => "whois.kenic.or.ke", // Кения
    "kg" => "www.domain.kg", // Киргизстан
    // kh - Cambodia - нет назначенного whois сервера
    "ki" => "whois.nic.ki", // Kiribati
    // km - Comoros - нет назначенного whois сервера
    // kn - Saint Kitts And Nevis - нет назначенного whois сервера
    // kp - Korea, Democratic People's Republic Of - нет назначенного whois сервера
    "kr" => "whois.kr", // Korea, Republic Of
    // kw - Kuwait - нет назначенного whois сервера
    // ky - Cayman Islands - нет назначенного whois сервера
    "kz" => "whois.nic.kz", // Казахстан
    "la" => "whois.nic.la", // Lao People's Democratic Republic
    // lb - Lebanon - нет назначенного whois сервера
    // lc - Saint Lucia - нет назначенного whois сервера
    "li" => "whois.nic.li", // Лихтенштейн
    // lk - Sri Lanka - нет назначенного whois сервера
    "lt" => "whois.domreg.lt", // Lithuania
    "lu" => "whois.dns.lu", // Luxembourg
    "lv" => "whois.nic.lv", // Латвия
    "ly" => "whois.nic.ly", // Libya
    "ma" => "whois.iam.net.ma", // Морокко
    // mc - Monaco - нет назначенного whois сервера
    "md" => "whois.nic.md", // Молдова
    "me" => "whois.nic.me", // Montenegro
    "mg" => "whois.nic.mg", // Мадагаскар
    // mh - Marshall Islands - нет назначенного whois сервера
    "mil" => "whois.nic.mil",
    // mk - Macedonia, The Former Yugoslav Republic Of - нет назначенного whois сервера
    "ml" => "whois.dot.ml", // Мали
    // mm - Myanmar - нет назначенного whois сервера
    "mn" => "whois.nic.mn", // Монгола
    "mo" => "whois.monic.mo", // Macao
    "mobi" => "whois.dotmobiregistry.net",
    "mp" => "whois.nic.mp", // Northern Mariana Islands
    // mq - Martinique (France) - нет назначенного whois сервера
    // mr - Mauritania - нет назначенного whois сервера
    "ms" => "whois.nic.ms", // Montserrat
    // mt - Malta - нет назначенного whois сервера
    "mu" => "whois.nic.mu", // Mauritius
    "museum" => "whois.museum",
    // mv - Maldives - нет назначенного whois сервера
    // mw - Malawi - нет назначенного whois сервера
    "mx" => "whois.mx", // Мексика
    "my" => "whois.domainregistry.my", // Малазия
    // mz - Mozambique - нет назначенного whois сервера
    "na" => "whois.na-nic.com.na", // Намибия
    "name" => "whois.nic.name",
    "nc" => "whois.nc", // New Caledonia
    // ne - Niger - нет назначенного whois сервера
    "net" => "whois.verisign-grs.net",
    "nf" => "whois.nic.nf", // Norfolk Island
    "ng" => "whois.nic.net.ng", // Нигерия
    // ni - Nicaragua - нет назначенного whois сервера
    "nl" => "whois.domain-registry.nl", // Голандия
    "no" => "whois.norid.no", // Норвегия
    // np - Nepal - нет назначенного whois сервера
    // nr - Nauru - нет назначенного whois сервера
    "nu" => "whois.nic.nu", // Niue
    "nz" => "whois.srs.net.nz", // Новая Зеландия
    "om" => "whois.registry.om", // Оман
    "org" => "whois.pir.org",
    // pa - Panama - нет назначенного whois сервера
    "pe" => "kero.yachay.pe", // Перу
    "pf" => "whois.registry.pf", // Французкая Полинезия
    // pg - Papua New Guinea - нет назначенного whois сервера
    // ph - Philippines - нет назначенного whois сервера
    // pk - Pakistan - нет назначенного whois сервера
    "pl" => "whois.dns.pl", // Польша
    "pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
    // pn - Pitcairn (New Zealand) - нет назначенного whois сервера
    "post" => "whois.dotpostregistry.net",
    "pr" => "whois.nic.pr", // Пуэрто Рико
    "pro" => "whois.dotproregistry.net",
    // ps - Palestine, State of - нет назначенного whois сервера
    "pt" => "whois.dns.pt", // Португалия
    "pw" => "whois.nic.pw", // Palau
    // py - Paraguay - нет назначенного whois сервера
    "qa" => "whois.registry.qa", // Катар
    "re" => "whois.nic.re", // Reunion (France)
    "ro" => "whois.rotld.ro", // Румыния
    "rs" => "whois.rnids.rs", // Сербия
    "ru" => "whois.tcinet.ru", // Россия
    // rw - Rwanda - нет назначенного whois сервера
    "sa" => "whois.nic.net.sa", // Саудовская аравия
    "sb" => "whois.nic.net.sb", // Соломоновы острова
    "sc" => "whois2.afilias-grs.net", // Seychelles
    // sd - Sudan - нет назначенного whois сервера
    "se" => "whois.iis.se", // Швеция
    "sg" => "whois.sgnic.sg", // Сингапур
    "sh" => "whois.nic.sh", // Saint Helena
    "si" => "whois.arnes.si", // Словения
    "sk" => "whois.sk-nic.sk", // Словакия
    // sl - Sierra Leone - нет назначенного whois сервера
    "sm" => "whois.nic.sm", // Сан Морино
    "sn" => "whois.nic.sn", // Сенегал
    "so" => "whois.nic.so", // Сомали
    // sr - Suriname - нет назначенного whois сервера
    "st" => "whois.nic.st", // Sao Tome And Principe
    "su" => "whois.tcinet.ru", // Российская федерация
    // sv - El Salvador - нет назначенного whois сервера
    "sx" => "whois.sx", // Sint Maarten (dutch Part)
    "sy" => "whois.tld.sy", // Сирия
    // sz - Swaziland - нет назначенного whois сервера
    "tc" => "whois.meridiantld.net", // Turks And Caicos Islands
    // td - Chad - нет назначенного whois сервера
    "tel" => "whois.nic.tel",
    "tf" => "whois.nic.tf", // French Southern Territories
    // tg - Togo - нет назначенного whois сервера
    "th" => "whois.thnic.co.th", // Тайланд
    "tj" => "whois.nic.tj", // Таджикистан
    "tk" => "whois.dot.tk", // Tokelau
    "tl" => "whois.nic.tl", // Timor-leste
    "tm" => "whois.nic.tm", // Туркменистан
    "tn" => "whois.ati.tn", // Тунис
    "to" => "whois.tonic.to", // Tonga
    "tp" => "whois.nic.tl", // Timor-leste
    "tr" => "whois.nic.tr", // Турция
    "travel" => "whois.nic.travel",
    // tt - Trinidad And Tobago - нет назначенного whois сервера
    "tv" => "tvwhois.verisign-grs.com", // Tuvalu
    "tw" => "whois.twnic.net.tw", // Тйвань
    "tz" => "whois.tznic.or.tz", // Танзания
    "ua" => "whois.ua", // Украина
    "ug" => "whois.co.ug", // Уганда
    "uk" => "whois.nic.uk", // Англия
    "us" => "whois.nic.us", // США
    "uy" => "whois.nic.org.uy", // Уругвай
    "uz" => "whois.cctld.uz", // Узбекистан
    // va - Holy See (vatican City State) - нет назначенного сервера whois
    "vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
    "ve" => "whois.nic.ve", // Венесуэла
    "vg" => "whois.adamsnames.tc", // Виргинскиие острова
    // vi - Virgin Islands, US - нет назначенного whois сервера
    // vn - Viet Nam - нет назначенного whois сервера
    // vu - Vanuatu - нет назначенного whois сервера
    "wf" => "whois.nic.wf", // Wallis and Futuna
    "ws" => "whois.website.ws", // Самоа
    "xxx" => "whois.nic.xxx",
    // ye - Yemen - нет назначенного whois сервера
    "yt" => "whois.nic.yt", // Майотта
    "yu" => "whois.ripe.net");
 
function LookupDomain($domain){
    global $whoisservers;
    $domain_parts = explode(".", $domain);
    $tld = strtolower(array_pop($domain_parts));
    $whoisserver = $whoisservers[$tld];
    if(!$whoisserver) {
        return "Ошибка: Не соответствующего whois-сервера для домена $domain!";
    }
    $result = QueryWhoisServer($whoisserver, $domain);
    if(!$result) {
        return "Ошибка: Нет результатов полученных от $whoisserver сервера для домена $domain!";
    }
    else {
        while(strpos($result, "Whois-сервер:") !== FALSE){
            preg_match("/Whois Server: (.*)/", $result, $matches);
            $secondary = $matches[1];
            if($secondary) {
                $result = QueryWhoisServer($secondary, $domain);
                $whoisserver = $secondary;
            }
        }
    }
    return "$domain результаты поиска для домена $whoisserver сервер:\n\n" . $result;
}
 
function LookupIP($ip) {
    $whoisservers = array(
        //"whois.afrinic.net", // Африка - возвращает время ожидания ошибка :-(
        "whois.lacnic.net", // Латинской Америки и Карибского бассейна - возвращает данные для всех мест по всему миру :-)
        "whois.apnic.net", // Для азиатско-тихоокеанского региона
        "whois.arin.net", // Для северной Америки
        "whois.ripe.net" // Только для Европы, Ближнего Востока и Центральной Азии
    );
    $results = array();
    foreach($whoisservers as $whoisserver) {
        $result = QueryWhoisServer($whoisserver, $ip);
        if($result && !in_array($result, $results)) {
            $results[$whoisserver]= $result;
        }
    }
    $res = "НАЙДЕНО: " . count($results);
    foreach($results as $whoisserver=>$result) {
        $res .= "\n\n-------------\nРезультаты поиска " . $ip . " from " . $whoisserver . " сервер:\n\n" . $result;
    }
    return $res;
}
 
function ValidateIP($ip) {
    $ipnums = explode(".", $ip);
    if(count($ipnums) != 4) {
        return false;
    }
    foreach($ipnums as $ipnum) {
        if(!is_numeric($ipnum) || ($ipnum > 255)) {
            return false;
        }
    }
    return $ip;
}
 
function ValidateDomain($domain) {
    if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
        return false;
    }
    return $domain;
}
 
function QueryWhoisServer($whoisserver, $domain) {
    $port = 43;
    $timeout = 10;
    $fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
    //if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com требует знака равенства ("=") или он возвращает какой-либо результат с искомой строкой.
    fputs($fp, $domain . "\r\n");
    $out = "";
    while(!feof($fp)){
        $out .= fgets($fp);
    }
    fclose($fp);
 
    $res = "";
    if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
        $rows = explode("\n", $out);
        foreach($rows as $row) {
            $row = trim($row);
            if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
                $res .= $row."\n";
            }
        }
    }
    return $res;
}
?>