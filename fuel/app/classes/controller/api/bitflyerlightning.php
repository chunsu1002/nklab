<?php

class Controller_Api_Bitflyerlightning extends Controller_Base
{

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        $data = array(
        'status' => 200,
        );
        
//         APIのトークン
//        $token = '';

        // Request_Curlを生成
        $curl = \Request::forge('https://api.bitflyer.jp/v1/getticker', 'curl');

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
//            $mid_price = $api_body['mid_price'];
//            $bids = $api_body['bids'];
//            $asks = $api_body['asks'];
            $ltp = $api_body['ltp'];
            $timestamp = $api_body['timestamp'];
            //レスポンス設定
            $data['status'] = 200;
            $data['api_status'] = $response->status;
//            $data['mid_price'] = number_format($mid_price).'円';
//            $data['bids'] = $bids;
//            $data['asks'] = $asks;
            $data['ltp'] = number_format($ltp).'円';
            $t = new DateTime($timestamp);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $data['timestamp'] = $t->format('Y-m-d H:i:s');
        }

//        //
//        echo '<pre>';
//        var_dump($data);die;
//        echo '</pre>';
        //返却
        return json_encode($data);
        
    }

}
