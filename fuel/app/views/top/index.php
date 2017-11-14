<div class="row title">
    <h1>NKキッズラボ</h1>
    <p>スクラッチを使ってプログラミング体験をしよう！</p>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="image">
            <?php echo Asset::img('scratch.jpg',array()) ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed">
                    <caption>今日のビットコインキャッシュ</caption>
                    <tr>
                        <th>最終取引価格</th>
                        <!--<th>最終取引日時</th>-->
                    </tr>
                    <tr>
                        <td><span class="ltp text-danger"></span></td>
                        <td><span class="timestamp"></span></td>
                    </tr>
<!--                    <td>
                        <input type="checkbox" checked data-toggle="button">
                    </td>-->
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <h4>NKラボについて</h4>
    <p>
        AI,IOT,ドローン,仮想通貨などのテクノロジーの発展により、社会が大きく変わろうとしています。<br>
        2017年現時点では、まだ上記のテクノロジーは一部もしくは実験的に導入されているとはいえ、<br>
        まだまだ発展途上であり、根本的にそれらを開発もしくはコントロールできる体制が整っておらず、<br>
        ましてやそれらに携わる人材は完全に不足しております。<br>
        NKラボは上記テクノロジーが実際に社会に普及し、世の中の生産性が飛躍的に高まる時代に<br>
        その社会を牽引出来る人材育成、誰もがプロダクトの生産を行えるプラットホームとなるべく<br>
        結成されました。
    </p>
<!--    <p>
        目指すところは、探査機開発です。
    </p>-->
</div>
<div class="row">
    <h4>NKキッズラボについて</h4>
    <p>
        知識経済、テクノロジーの発展とともにエンジニアの数が少ないため、<br>
        日本の小学校では、2020年に小学生からプログラミングを必修とされる予定です。<br>
        NKキッズラボでは、特にウリハッキョの子供達に、日本学校よりも早めに覚えてもらうためにプログラミ...
    </p>
</div>
<div class="row">
    <div class="__point">
        <!--<div class="col-md-12">-->
        <div class="col-md-4">
            <h3>
                <span class="__tp">身につくこと <span>1</span></span>
                <span class="__text"><em>論理的思考</em>が身に付く</span>
            </h3>
            <p>
                プログラミングは命令の組み合わせです。<br>
                命令やその命令の組み合わせが正しくない場合、自分が意図した通り動かないことがあります。<br>
                正しく動かそうとすると、動かない原因を追求し論理的に考えなければなりません。<br>
                この過程を経ると自然と物事を論理的に考えるようになります。<br>
                プログラミングを通して、論理的思考を伸ばすことにつながります。
           　</p>
        </div>
        <div class="col-md-4">
            <h3>
                <span class="__tp">身につくこと <span>2</span></span>
                <span class="__text"><em>リーダーシップ</em>を育む</span>
            </h3>
            <p>
                NKキッズラボではプログラミングのみならず、<br>
                メンターや仲間たちとのコミュニケーションの中で問題解決に取り組みます。<br>
                参加者同士、お互いを助け合うことでチーム力を育み、<br>
                コミュニケーション能力やリーダーシップを伸ばすことが出来ます
            </p>
        </div>
        <div class="col-md-4">
            <h3>
                <span class="__tp">身につくこと <span>3</span></span>
                <span class="__text"><em>自主性、創造性</em>を育む</span>
            </h3>
            <p>
                NKキッズラボでは何よりも体験を重視します。<br>
                体験を通して世の中の技術や可能性を体感しましょう！<br>
                プログラミンの他にもドローン製作やハードウェアなどの開発体験を通じて<br>
                ものづくりを体験し、世の中にプロダクトを出す精神、チャレンジ精神を育みます。
            </p>
        </div>
        <!--</div>-->
    </div>
</div>
<div class="row">
    お問い合わせ
</div>
<?php
//js適用
Asset::js(array('top/top.js'), array(), 'add_js', false);
?>