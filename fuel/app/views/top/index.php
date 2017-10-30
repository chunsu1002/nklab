<div class="row">
    <h1>Nkキッズラボ</h1>
    <p>スクラッチを使ってプログラミング体験をしよう！</p>
</div>
<div class="row">
    <?php echo Asset::img('scratch.jpg',array()) ?>
</div>
<div class="row">
    <div class="__point">
        <div class="col-md-4">
            <h3>
                <span class="__tp">Point <span>1</span></span>
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
                <span class="__tp">Point <span>2</span></span>
                <span class="__text">コミュニケーション能力<em>を伸ばす</em></span>
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
                <span class="__tp">Point <span>3</span></span>
                <span class="__text"><em>自主性、創造性、意識性</em>を育む</span>
            </h3>
            <p>
                NKキッズラボでは何よりも体験を重視します。<br>
                体験を通して世の中の技術や可能性を体感しましょう！<br>
                プログラミンの他にもドローン製作やハードウェアなどの開発体験を通じて<br>
                ものづくりを体験し、世の中にプロダクトを出す精神、チャレンジ精神を育みます。
            </p>
        </div>
    </div>
</div>
<div class="row">
    お問い合わせ
</div>
<?php
//js適用
Asset::js(array('top/top.js'), array(), 'add_js', false);
?>