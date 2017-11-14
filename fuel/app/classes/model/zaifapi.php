<?php

namespace Model;

class Zaifapi extends \Model {

    public static function get_results()
    {
        $data = array(
        'status' => 200,
        );
        
//         APIのトークン
//        $token = '';

        // Request_Curlを生成
//        $curl = \Request::forge('https://api.bitflyer.jp/v1/getticker', 'curl');
        $curl = \Request::forge('https://api.zaif.jp/api/1/last_price/bch_jpy', 'curl');

        // HTTPメソッドを指定
        $curl->set_method('get');

        // パラメータを設定
//        $curl->set_params(array('token' => $token));

        // 実行
        $response = $curl->execute()->response();       
            
        //レスポンスチェック
        if (!empty($response))
        {
            //
            $api_json_body = $response->body;
            $api_body = \Format::forge($api_json_body,'json')->to_array();

//            $ltp = $api_body['ltp'];
//            $timestamp = $api_body['timestamp'];
            $last_prie = $api_body['last_price'];
            //レスポンス設定
//            $data['status'] = 200;
//            $data['api_status'] = $response->status;

            $data['ltp'] = number_format($last_prie).'円';
//            $t = new DateTime($timestamp);
//            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
//            $data['timestamp'] = $t->format('Y-m-d H:i:s');
        }

//        //
//        echo '<pre>';
//        var_dump($data);die;
//        echo '</pre>';
//        M
        //返却
        return json_encode($data);
        
    }

}

