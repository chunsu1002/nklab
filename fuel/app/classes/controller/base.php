<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Controller_Base extends Controller_Template
{
    /**
     * あなたの before メソッド
     */
    public function before()
    {
        parent::before(); // この行がないと、テンプレートが動作しません!

        // ヘッダーとフッターの設定
        $this->template->header = View::forge('parts/header');
        $this->template->footer = View::forge('parts/footer');
    }

    /**
     * $response をパラメータとして追加し、after() を Controller_Template 互換にする
     */
    public function after($response)
    {
        $response = parent::after($response); // あなた自身のレスポンスオブジェクトを作成する場合は必要ありません。

        // do stuff

        return $response; // after() は確実に Response オブジェクトを返すように
    }

}