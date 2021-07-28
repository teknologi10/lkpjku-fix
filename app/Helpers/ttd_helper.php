<?php


function tes($id_ttd)
{

    return "TTD Berhasil. Id produk hukum : " . $id_ttd;
}

function ttd($username, $passphrase, $file_surat, $file_gambar_ttd = false)
{
    // $api_tte_pemda = "https://suratku.kulonprogokab.go.id/index.php/web_service/tte/api";
    $api_tte_pemda = "http://103.135.180.100/";

    $client = new Client(
        [
            'base_uri' => $api_tte_pemda,
            'curl' => array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false),
            'allow_redirects' => false,
            'cookies' => true,
            'verify' => false
        ]
    );

    $multipart = [
        ['name' => 'nik', 'contents' => $username],
        ['name' => 'passphrase', 'contents' => $passphrase],
        ['name' => 'tampilan', 'contents' => 'visible'],
        // ['name' => 'halaman', 'contents' => 'pertama'],
        ['name'     => 'page', 'contents' => 1],
        ['name' => 'image', 'contents' => true],
        ['name'     => 'xAxis', 'contents' => 0],
        ['name'     => 'yAxis', 'contents' => 0],
        ['name'     => 'width', 'contents' => 1190],
        ['name'     => 'height', 'contents' => 50],
        ['name'     => 'text', 'contents' => ''],
        ['Content-type' => 'multipart/form-data', 'name' => 'file', 'contents' => $file_surat],
    ];

    if ($file_gambar_ttd) {
        $multipart[] =  [
            'Content-type' => 'multipart/form-data',
            'name'     => 'imageTTD',
            'contents' => $file_gambar_ttd,
        ];
    }

    $res1 = $client->post(
        '/api/sign/pdf',
        [
            'auth' => ['esign', 'qwerty'],
            'multipart' => $multipart,
            'http_errors' => false,
            // 'stream' => true,
            // 'save_to' => fopen($saveTo, 'w+'),
        ]
    );

    $statuscode = $res1->getStatusCode();

    if ($statuscode === 200) {
        $response_body = $res1->getBody()->getContents();

        return [
            'success' => true,
            'response' => $response_body
        ];
    } else {
        $response_body = json_decode($res1->getBody(), true);

        // log_message('error', 'GAGAL_TTD: Username: '.$username.', passphrase: '.$passphrase.', Penandatangan: '.$username.', Response: '.json_encode(json_decode($res1->getBody())));

        // return ['success'=>false, 'response'=>$response_body, 'status_code'=>$statuscode];
        return [
            'success' => false,
            'response' => $response_body
        ];
    }
}
