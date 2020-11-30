<?php

function sendWA($phone, $pesan)
{

    $curl = curl_init();
    $token = "d09hxtWRA5DORYzgChuZLeqR6KLIhrs0CPcDrCTGpNPqa9GLF46dS7eLoBLW1lw8";
    $data = [
        'phone' => $phone,
        'message' => $pesan,
    ];

    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        array(
            "Authorization: $token",
        )
    );
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, "https://sawit.wablas.com/api/send-message");
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($curl);
    curl_close($curl);

    // echo "<pre>";
    // print_r($result);
}
