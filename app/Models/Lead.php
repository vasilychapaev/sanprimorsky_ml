<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Lead extends Model
{
    static public function sendMail()
    {
        $form_name = htmlspecialchars($_POST["form_name"]);

        $utm_term = htmlspecialchars($_POST['utm_term']);
        $utm_source = htmlspecialchars($_POST['utm_source']);
        $utm_medium = htmlspecialchars($_POST['utm_medium']);
        $utm_content = htmlspecialchars($_POST['utm_content']);
        $utm_campaign = htmlspecialchars($_POST['utm_campaign']);
        $roistat = htmlspecialchars($_POST['roistat']);


        if (isset($_POST["datestart"]) AND $_POST["datestart"] !== "" AND $_POST["datestart"] !== 0) {
            $datestart .= '<p><b>Дата заезда: </b>' . htmlspecialchars($_POST["datestart"]) . '</p>';
            $postdatestart .= 'Дата заезда: ' . $_POST["datestart"];
        }

        if (isset($_POST["datefinish"]) AND $_POST["datefinish"] !== "" AND $_POST["datefinish"] !== 0) {
            $datefinish .= '<p><b>Дата выезда: </b>' . htmlspecialchars($_POST["datefinish"]) . '</p>';
            $postdatefinish .= ' Дата выезда: ' . $_POST["datefinish"];
        }

        if (isset($_POST["odp"])) {
            $odp .= '<li>' . htmlspecialchars($_POST["odp"]) . '</li>';
        }
        if (isset($_POST["org-dih"])) {
            $org_dih .= '<li>' . htmlspecialchars($_POST["org-dih"]) . '</li>';
        }
        if (isset($_POST["org_dih2"])) {
            $org_dih2 .= '<li>' . htmlspecialchars($_POST["org_dih2"]) . '</li>';
        }
        if (isset($_POST["vdp"])) {
            $vdp .= '<li>' . htmlspecialchars($_POST["vdp"]) . '</li>';
        }
        if (isset($_POST["zkt"])) {
            $zkt .= '<li>' . htmlspecialchars($_POST["zkt"]) . '</li>';
        }
        if (isset($_POST["ns"])) {
            $ns .= '<li>' . htmlspecialchars($_POST["ns"]) . '</li>';
        }
        if (isset($_POST["obsh_prof"])) {
            $obsh_prof .= '<li>' . htmlspecialchars($_POST["obsh_prof"]) . '</li>';
        }
        if (isset($_POST["op"])) {
            $op .= '<li>' . htmlspecialchars($_POST["op"]) . '</li>';
        }
        if (isset($_POST["kmb"])) {
            $kmb .= '<li>' . htmlspecialchars($_POST["kmb"]) . '</li>';
        }

        if (isset($_POST["profile"]) AND $_POST["profile"] !== "" AND $_POST["profile"] !== 0) {
            $profile .= '<p><b>Лечебный профиль: </b>' . htmlspecialchars($_POST["profile"]) . '</p>';
            $postprofile .= ' Лечебный профиль: ' . $_POST["profile"];
        }

        if (isset($odp) || isset($org_dih) || isset($org_dih2) || isset($vdp) || isset($zkt) || isset($ns) || isset($obsh_prof) || (isset($op) or isset($kmb))) {
            $profile .= '<p><b>Лечебный профиль: </b><ul>' . $odp . $org_dih . $org_dih2 . $vdp . $zkt . $ns . $obsh_prof . $op . $kmb . '</ul></p>';
        }

        if (isset($_POST["people-val"]) AND $_POST["people-val"] !== "" AND $_POST["people-val"] !== 0) {
            $people_val .= '<p><b>Количество взрослых: ' . htmlspecialchars($_POST["people-val"]) . '</p>';
            $postpeople_val .= ' Количество взрослых: ' . $_POST["people-val"];
        }

        if (isset($_POST["adge_people"]) AND $_POST["adge_people"] !== "" AND $_POST["adge_people"] !== 0) {
            $adge_people .= '<p><b>Возраст взрослых: </b>' . htmlspecialchars($_POST["adge_people"]) . '</p>';
            $postage_people .= ' Возраст взрослых: ' . $_POST["adge_people"];
        }

        if (isset($_POST["baby-val"]) AND $_POST["baby-val"] !== "" AND $_POST["baby-val"] !== 0) {
            $baby_val .= '<p><b>Количество детей: </b>' . htmlspecialchars($_POST["baby-val"]) . '</p>';
            $postbaby_val .= ' Количество детей: ' . $_POST["baby-val"];
        }

        if (isset($_POST["adge_baby"]) AND $_POST["adge_baby"] !== "" AND $_POST["adge_baby"] !== 0) {
            $adge_baby .= '<p><b>Возраст детей: </b>' . htmlspecialchars($_POST["adge_baby"]) . '</p>';
            $postage_baby .= ' Возраст детей: ' . $_POST["adge_baby"];
        }

        if (isset($_POST["price-start"]) AND $_POST["price-start"] !== "" AND $_POST["price-start"] !== 0) {
            $price_start .= '<p><b>Стоимость ОТ: </b>' . htmlspecialchars($_POST["price-start"]) . '</p>';
            $postprice_start .= ' Стоимость ОТ: ' . $_POST["price-start"];
        }

        if (isset($_POST["price-finish"]) AND $_POST["price-finish"] !== "" AND $_POST["price-finish"] !== 0) {
            $price_finish .= '<p><b>Стоимость ДО: </b>' . htmlspecialchars($_POST["price-finish"]) . '</p>';
            $postprice_finish .= ' Стоимость ДО: ' . $_POST["price-finish"];
        }

        if (isset($_POST["type_svias"]) AND $_POST["type_svias"] !== "" AND $_POST["type_svias"] !== 0) {
            $type_svias .= '<p><b>Тип связи: </b>' . htmlspecialchars($_POST["type_svias"]) . '</p>';
            $posttype_svias .= ' Тип связи: ' . $_POST["type_svias"];
        }


        if (isset($_POST["phone"])
            AND $_POST["phone"] !== ""
            AND $_POST["phone"] !== 0
            AND $_POST["phone"] !== '+7(111) 111 11 11'
            AND $_POST["phone"] !== '+7(222) 222 22 22'
            AND $_POST["phone"] !== '+7(333) 333 33 33'
            AND $_POST["phone"] !== '+7(444) 444 44 44'
            AND $_POST["phone"] !== '+7(555) 555 55 55'
            AND $_POST["phone"] !== '+7(666) 666 66 66'
            AND $_POST["phone"] !== '+7(777) 777 77 77'
            AND $_POST["phone"] !== '+7(888) 888 88 88'
            AND $_POST["phone"] !== '+7(999) 999 99 99'
            AND $_POST["phone"] !== '+7(000) 000 00 00') {
            $phone .= '<p><b>Номер телефона: </b>' . htmlspecialchars($_POST["phone"]) . '</p>';
        } else {
            return ['status'=>'err1'];
        }

        if (isset($_POST["name"]) AND $_POST["name"] !== "" AND $_POST["name"] !== 0) {
            $name .= '<p><b>Имя: </b>' . htmlspecialchars($_POST["name"]) . '</p>';
        }

        if (isset($_POST["email"]) AND $_POST["email"] !== "" AND $_POST["email"] !== 0) {
            $email .= '<p><b>E-mail: </b>' . htmlspecialchars($_POST["email"]) . '</p>';
        }

        if (isset($_POST["text-otziv"]) AND $_POST["text-otziv"] !== "" AND $_POST["text-otziv"] !== 0) {
            $message .= '<p><b>Текст сообщения: </b>' . htmlspecialchars($_POST["text-otziv"]) . '</p>';
            $postmessage .= ' Текст сообщения: ' . $_POST["text-otziv"];
        }


        $body .= '<head>
                <title>' . $form_name . '</title>
            </head>
            <body>' . $email . $name
            . $datestart . $datefinish
            . $profile . $price_start . $price_finish
            . $people_val . $adge_people . $baby_val . $adge_baby
            . $type_svias . $phone . $message
            . "utm_campaign:".$utm_campaign.'<br>'.PHP_EOL
            . "utm_content:".$utm_content.'<br>'.PHP_EOL
            . "utm_medium:".$utm_medium.'<br>'.PHP_EOL
            . "utm_source".$utm_source.'<br>'.PHP_EOL
            . "utm_term".$utm_term . '</body>';


        Mail::send('sanprimorsky_old.email_form',
            ['body' => $body],
            function ($email) use ($form_name) {
                $email->from(config('sanprimorsky.email_from'))
                    ->to(config('sanprimorsky.email_to'))
//                    ->to('vasilychapaev@gmail.com')
                    ->subject($form_name);
            });

        return [
            'status'=>'GOOD',
            'postcomment'=> htmlspecialchars($postdatestart.$postdatefinish.$postprofile.$postprice_start.$postprice_finish.$postpeople_val.$postadge_people.$postbaby_val.$postadge_baby.$posttype_svias.$postmessage)
        ];
    }

    static public function sendAmo($postcomment)
    {
//        error_reporting(0);

        require_once base_path(). '/vendor/amocrm/amocrm.phar';
        $amo = new \AmoCRM\Client('sanatorium.amocrm.ru', 'sanatoriym.crm@gmail.com', 'd22d743ebee1616a499da5b008a58fe7e610b361');
        require base_path()."/vendor/amocrm/amo_functions.php";

        $roistatVisitId = array_key_exists('roistat_visit', $_COOKIE) ? $_COOKIE['roistat_visit'] : "неизвестно";
        $gaid =  isset($_COOKIE["_ga"]) ? preg_split('[\.]', $_COOKIE["_ga"],4)[2].".".preg_split('[\.]', $_COOKIE["_ga"],4)[3] : "";


        //Отправляет данные в amoCRM
        $postphone = preg_replace("/[^0-9]/", '', htmlspecialchars($_POST["phone"]));
        $postsite = htmlspecialchars("Приморский");
        $postform = htmlspecialchars($_POST["form_name"]);
        $postfio = htmlspecialchars($_POST["name"]);
        $postemail = htmlspecialchars($_POST["email"]);
//        $postcomment = htmlspecialchars($postdatestart.$postdatefinish.$postprofile.$postprice_start.$postprice_finish.$postpeople_val.$postadge_people.$postbaby_val.$postadge_baby.$posttype_svias.$postmessage);

        $form_name = htmlspecialchars($_POST["form_name"]);

        $utm_term = htmlspecialchars($_POST['utm_term']);
        $utm_source = htmlspecialchars($_POST['utm_source']);
        $utm_medium = htmlspecialchars($_POST['utm_medium']);
        $utm_content = htmlspecialchars($_POST['utm_content']);
        $utm_campaign = htmlspecialchars($_POST['utm_campaign']);
        $roistat = htmlspecialchars($_POST['roistat']);


        // $postphone = "79816890237";
        // $postsite = "Приморский";
        // $postform = "форма1";
        // $postfio = "Тест Тестович";
        // $postemail = null;
        // $postcomment = "test comment";

        // $utm_campaign = "utm_campaign";
        // $utm_content = "utm_content";
        // $utm_medium = "utm_medium";
        // $utm_source = "google";
        // $utm_term = "utm_term";
        $phone = $postphone;
        $email = $postemail;
        $name = "Контакт с сайта";
        if($postfio){
            $name = $postfio;
        }
        $utm_data = array(
            'utm_campaign'=>$utm_campaign,
            'utm_content'=>$utm_content,
            'utm_medium'=>$utm_medium,
            'utm_source'=>$utm_source,
            'utm_term'=>$utm_term,
        );

        $leadsArrayInfo = [
            'source_name' => 'sanprimorsky.by',
            'leadsName' => 'Заказ с сайта sanprimorsky.by '.$form_name,
            'source_of_advertising_site' => 961677,
            'source_of_advertising' => $utm_source,
            'roistatVisitId' => $roistatVisitId,
            'siteName' => 'sanprimorsky.by',
            'tags' => 'Приморский, '.$form_name,
            'text_notes' => "Оставлен новый заказ на сайте: sanprimorsky.by\nИмя: $name\nТелефон: $phone\nEmail: $email\nКомментарий: $postcomment"
        ];

        $contactArrayInfo = [
            'contactName' => "Контакт с сайта",
            'phone' => $postphone,
            'email' => $postemail
        ];

        if($postphone !=null || $postemail != null){
            $data = array (
                'add' =>
                    array (
                        0 =>
                            array (
                                'source_name' => $leadsArrayInfo['source_name'],
                                'source_uid' => '11111111',
                                'created_at' => time(),
                                'incoming_entities' =>
                                    array (
                                        'leads' =>
                                            array (
                                                0 =>
                                                    array (
                                                        'updated_at'=> $leadsArrayInfo['roistatVisitId'],
                                                        'name' => $leadsArrayInfo['leadsName'],
                                                        'responsible_user_id' => '1124061',
                                                        'tags' => $leadsArrayInfo['tags'],
                                                        'custom_fields' =>
                                                            array (
                                                                0 =>
                                                                    array (
                                                                        'id' => '374637',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $leadsArrayInfo['source_of_advertising_site'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                1 =>
                                                                    array (
                                                                        'id' => '420570',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $utm_data['utm_source'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                2 =>
                                                                    array (
                                                                        'id' => '425671',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $leadsArrayInfo['source_of_advertising'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                3 =>
                                                                    array (
                                                                        'id' => '434475',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $leadsArrayInfo['roistatVisitId'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                4 =>
                                                                    array (
                                                                        'id' => '442475',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $utm_data['utm_term'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                5 =>
                                                                    array (
                                                                        'id' => '443259',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $utm_data['utm_medium'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                6 =>
                                                                    array (
                                                                        'id' => '443261',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $utm_data['utm_campaign'],
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                7 =>
                                                                    array (
                                                                        'id' => '443263',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $utm_data['utm_content'],
                                                                                    ),
                                                                            ),
                                                                    ),

                                                            ),
                                                        'notes' =>
                                                            array(
                                                                0 =>
                                                                    array(
                                                                        'note_type'=> 4,
                                                                        'element_type' => "lead",
                                                                        'text' => $leadsArrayInfo['text_notes']
                                                                    ),
                                                            ),

                                                    ),

                                            ),
                                        'contacts' =>
                                            array (
                                                0 =>
                                                    array (
                                                        'name' => $contactArrayInfo['contactName'],
                                                        'responsible_user_id' => '1124061',
                                                        'custom_fields' =>
                                                            array (
                                                                0 =>
                                                                    array (
                                                                        'id' => '138551',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $contactArrayInfo['phone'],
                                                                                        'enum' => 'WORK',
                                                                                    ),
                                                                            ),
                                                                    ),
                                                                1 =>
                                                                    array (
                                                                        'id' => '138553',
                                                                        'values' =>
                                                                            array (
                                                                                0 =>
                                                                                    array (
                                                                                        'value' => $contactArrayInfo['email'],
                                                                                        'enum' => 'WORK',
                                                                                    ),
                                                                            ),
                                                                    ),
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'incoming_lead_info' =>
                                    array (
                                        'form_id' => '245686',
                                        'form_page' => $leadsArrayInfo['siteName'],
                                        'ip' => '1.1.1.1',
                                        'service_code' => '245686',
                                        'form_name' => $postcomment,
                                    ),
                            ),
                    ),
            );
            $link = "https://sanatorium.amocrm.ru/api/v2/incoming_leads/form?login=sanatoriym.crm@gmail.com&api_key=d22d743ebee1616a499da5b008a58fe7e610b361&";

            $headers[] = "Accept: application/json";

            //Curl options
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_USERAGENT, "amoCRM-API-client-undefined/2.0");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_URL, $link);
            curl_setopt($curl, CURLOPT_HEADER,false);
            $out = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($out,TRUE);

            return $result;
        }

    }
}
