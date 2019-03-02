<?php get_header(); ?>

<div id="KeyVisual">
<div class="inner">
<div class="left_image">
<img src="<?php bloginfo('template_url'); ?>/img/top/KeyVisual_img01.png" alt="建築業界に特化したウェブマーケティング支援" width="745" height="371" />
</div>
<div class="right_image">
<img src="<?php bloginfo('template_url'); ?>/img/top/KeyVisual_img02.png" alt="全国150社以上ご支援中　御社のウェブ集客を成功に導く力がある" width="541" height="460" />
</div>
<br clear="all" />
</div>
</div>

<!--
<div class="topbnr">
    <a href="/seminar/koutanka_lp"><img src="<?php bloginfo('template_url'); ?>/img/top/seminar_topbnr.jpg" alt="高単価リフォームウェブ集客セミナー" width="900" height="278" class="img_over" /></a>
</div>
-->
<div class="topbnr">
    <a href="/smartphone"><img src="<?php bloginfo('template_url'); ?>/img/top/smartphone_topbnr.png" alt="スマートフォンサイト専用サイトで集客力UP" width="1000" height="260" class="img_over" /></a>
</div>

<?php $args = array(
'post_type' => 'situation', /* 投稿タイプ */
'paged' => $paged,
'posts_per_page' => 100 /* 件数表示 */
);
query_posts( $args );
 ?>
<div class="top_hankyo">
		<h2 class="situation_tit">弊社制作サイトお問い合わせ実績状況</h2>
 <?php if (have_posts()) :?>
	<div class="situation_area">
		<dl class="list">
			<? while( have_posts() ) : the_post();?>
			<dt><?php echo get_the_time('Y.m.d');?></dt>
			<dd><?php echo get_the_title();?>様に、新規お問い合わせがありました。</dd>
			<?php endwhile; ?>
		</dl>
	</div>
<?php endif; ?>
<?php $args = array(
'post_type' => 'result', /* 投稿タイプ */
'paged' => $paged,
'posts_per_page' => 3 /* 件数表示 */
);
query_posts( $args );
 ?>
<?php if (have_posts()) :?>
	<div class="result_area">
		<dl class="list">
			<? while( have_posts() ) : the_post();
				$ken = post_custom( 'result_no' ); ?>
			<dt><?php echo get_the_title();?>の反響数</dt>
			<dd><span class="kensu"><?php echo $ken;?></span> <span class="ken"><?php if(100 <= $ken){echo '<img src="'.get_template_directory_uri().'/img/top/icon_crown.svg" alt="王冠" width="20px">';}?><br>件</span></dd>
			<?php endwhile; ?>
		</dl>
	</div>
<?php endif; ?>
	<div class="contact_area">
		<p class="tel_bnr"><?php if ( wp_is_mobile() ) {?><a href="tel:058-212-3184"><? } ?><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/thankyo_tel_rollout.png" width="320" height="60" alt="電話番号0582123184" class="img_over"><?php if ( wp_is_mobile() ) {?></a><? } ?></p>
		<p class="contact"><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/thankyo_contact_rollout.png" width="320" height="60" alt="お問合わせはこちら" class="img_over"></a></p>

	</div>
</div>
<!-- POLICY 2人3脚で目標に挑む！ -->
<section>
<div class="contents_01">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence01_tit.gif" alt="POLICY 2人3脚で目標に挑む！" width="480" height="84" /></h2>
<div class="one">
<h3>3万世帯に1社のエリア制</h3>
<p>
ご支援先同士のバッティングを避けるために、私たちはエリア制を採用しています。<br />
３万世帯に１社に限定した会社さんをご支援することで、積み上げてきたノウハウが流出しないよう注意しています。<br />
逆に、商圏が被らないリフォーム会社さま同士の情報共有は活発に行ない、相乗効果を高めています。
</p>
<img src="<?php bloginfo('template_url'); ?>/img/top/centence01_pict01.png" alt="3万世帯に1社のエリア制" width="300" height="194" />
</div>
<div class="two">
<h3>集客に特化したサイト制作</h3>
<p>
経営者さんの「好み」ではなく「サイトから反響を取る」ことに特化したホームページを各会社さんのブランディングにそって制作いたします。<br />
そのためにはサイト制作時は何度もヒアリングを重ね、各会社さまの「強み」を引き出して売れるサイトに目指していきます。
</p>
<img src="<?php bloginfo('template_url'); ?>/img/top/centence01_pict02.png" alt="集客に特化したサイト制作" width="300" height="194" />
</div>
<div class="three">
<h3>自慢のアフターフォロー</h3>
<p>
「サイトは作ってからがスタート」をモットーにサイトが完成してからも、分析や解析データを元により良いサイトを目指して日々邁進していきます。<br />
またPPCの運用もしっかりとサポートして、お客さまのウェブマーケティングをさらに加速させます。
</p>
<img src="https://www.gotta-ride.com/wp-content/uploads/2018/08/1.png" alt="自慢のアフターフォロー" width="300" height="194" />
</div>
</div>
</section>
<!-- POLICY 2人3脚で目標に挑む！ -->



<!-- VOICE お客様の声 -->
<section>
<a name="interview" id="interview"></a>
<div class="contents_02">
<div class="inner">

<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence02_tit.gif" alt="VOICE お客様の声" width="480" height="84" /></h2>


<?php $args = array(
'post_type' => 'interview', /* 投稿タイプ */
'paged' => $paged,
'posts_per_page' => 3 /* 件数表示 */
);
query_posts( $args );
 ?>
<?php if (have_posts()) : ?>
<?php $i = 0;$x = 0; ?>
<?php while( have_posts() ) : the_post(); ?>
<!-- ループ開始 -->

<a href="<?php the_permalink(); ?> ">
<div class="one">
<h3><?php echo post_custom( 'interview_company' );?> <span><?php echo post_custom( 'interview_degree' );?> <?php echo post_custom( 'interview_name' );?>様</span></h3>
<div class="wrap">
<div class="photo">

<?php
printf(
'%s',
gr_get_image(
'interview_photo',
array(
'width' => 150,
'alt' => post_custom( 'interview_name' ).'様',
)
)
);
?>

</div>
<p>
<?php echo nl2br(post_custom( 'interview_caption' ));?>
</p>
<div class="rogo">
<?php
printf(
'%s',
gr_get_image(
'interview_logo',
array(
'alt' => post_custom( 'interview_company' ),
)
)
);
?>
</div>
<br clear="all" />
</div>
</div>
</a>

<?php $i++; ?>
<?php endwhile; ?>
<br clear="all">
<?php else : ?>
<p style="margin-left:10px;">現在登録されておりません。</p>
<?php endif; ?>

<div class="btn">
<a href="/interview"><img src="<?php bloginfo('template_url'); ?>/img/top/centence02_more_out.gif" alt="もっとお客様の声を見る" width="274" height="50" /></a>
</div>
</div>
<br clear="all" />
</div>
</section>
<!-- //VOICE お客様の声 -->


<!--========================================= -->
<!-- gotta-ride NEWS -->
<section>
<div class="contents_03">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence03_tit.gif" alt="gotta-ride NEWS" width="480" height="84" /></h2>

<?php $args = array(
'post_type' => 'blog', /* 投稿タイプ */
'paged' => $paged,
'posts_per_page' => 3 /* 件数表示 */
);
query_posts( $args );
 ?>
<?php if (have_posts()) : ?>
<?php $i = 0;$x = 0; ?>
<?php while( have_posts() ) : the_post(); ?>

<!-- ループ開始 -->
<a href="<?php the_permalink(); ?> ">
<div class="one">
<div class="pict">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="352" height="auto" />
</div>
<p><span class="data"><?php the_time('Y.m.d'); ?></span><!--<span class="info">Info</span>--></p>
<p class="title"><?php the_title_attribute(); ?></p>
</div>
</a>
<!-- //ループ終了 -->

<?php $i++; ?>
<?php endwhile; ?>
<br clear="all">
<?php else : ?>
<p style="margin-left:10px;">現在登録されておりません。</p>
<?php endif; ?>

<div class="btn">
<a href="<?php bloginfo('url'); ?>/blog"><img src="<?php bloginfo('template_url'); ?>/img/top/centence03_more_out.gif" alt="もっとブログを見る" width="274" height="50" /></a>
</div>

</div>
</section>
<!-- gotta-ride NEWS -->
<!--========================================= -->



<!-- だから選ばれ続ける！！成功に導く6つのサポート内容 -->
<section>
<div class="contents_04">
<div class="inner">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_tit.gif" alt="だから選ばれ続ける！！成功に導く6つのサポート内容" width="480" height="84" /></h2>

<div class="left"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn01_out.gif" alt="" width="504" height="128" /></div>
<div class="right"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn02_out.jpg" alt="" width="504" height="128" /></div>
<div class="left"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn03_out.gif" alt="" width="504" height="128" /></div>
<div class="right"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn04_out.gif" alt="" width="504" height="128" /></div>
<div class="left"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn05_out.gif" alt="" width="504" height="128" /></div>
<div class="right"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_btn06_out.gif" alt="" width="504" height="128" /></div>
<br clear="all" />

<!--
<div class="btn">
<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/top/centence04_more_out.gif" alt="もっと選ばれ続ける理由を見る" width="274" height="50" /></a>
</div>
-->

</div>
</div>
</section>
<!-- //だから選ばれ続ける！！成功に導く6つのサポート内容 -->


<a name="thinking" id="thinking"></a>
<!-- SUCCESS ゴッタライドのウェブ集客の考え方 SP版 -->
<section>
<div class="contents_05_sp">
<div class="inner">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_tit.gif" alt="だから選ばれ続ける！！成功に導く6つのサポート内容" width="480" height="84" /></h2>
<div class="left">
<a href="<?php bloginfo('url'); ?>/point"><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_btn01_sp_out.png" alt="web集客のポイント" width="274" height="138" /></a>
</div>
<div class="right">
<a href="<?php bloginfo('url'); ?>/way"><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_btn02_sp_out.gif" alt="アクセスアップの道のり" width="274" height="138" /></a>
</div>
<br clear="all" />
</div>
<div class="center">
<a href="<?php bloginfo('url'); ?>/flow">
<img src="<?php bloginfo('template_url'); ?>/img/top/centence05_btn03_sp_out.jpg" alt="ゴッタライドにお任せ下さい！ホームページ制作の流れ　完成までの9つのステップ" width="640" height="172" /></a>
</div>
</div>
</section>
<!-- //SUCCESS ゴッタライドのウェブ集客の考え方 SP版 -->

<!-- SUCCESS ゴッタライドのウェブ集客の考え方 PC版 -->
<section>
<div class="contents_05_pc">
<div class="inner">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_tit.gif" alt="だから選ばれ続ける！！成功に導く6つのサポート内容" width="480" height="84" /></h2>
<div class="left">
<a href="<?php bloginfo('url'); ?>/point"><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_btn01_out.gif" alt="web集客のポイント" width="434" height="138" /></a>
</div>
<div class="right">
<a href="<?php bloginfo('url'); ?>/way"><img src="<?php bloginfo('template_url'); ?>/img/top/centence05_btn02_out.gif" alt="アクセスアップの道のり" width="434" height="138" /></a>
</div>
<br clear="all" />
<div class="center mh_center">
<a href="<?php bloginfo('url'); ?>/flow">
<img class="mh_img" src="https://www.gotta-ride.com/wp-content/uploads/2017/05/new1_hover.jpg" alt="ゴッタライドにお任せ下さい！ホームページ制作の流れ　完成までの9つのステップ" width="900" height="173" />
<img class="mh_img_hover" src="https://www.gotta-ride.com/wp-content/uploads/2017/05/new11.jpg" alt="ゴッタライドにお任せ下さい！ホームページ制作の流れ　完成までの9つのステップ" width="900" height="173" />
</a>
</div>
</div>
</div>
</section>
<!-- //SUCCESS ゴッタライドのウェブ集客の考え方 PC版 -->


<!--========================================= -->
<!-- gotta-ride　サイト制作実績 -->
<a name="performance" id="performance"></a>
<section>
<div class="contents_06">
<div class="inner">
<h2><img src="<?php bloginfo('template_url'); ?>/img/top/centence06_tit.gif" alt="gotta-ride　サイト制作実績" width="480" height="84" /></h2>

<div class="one">
<div class="pict">
<a href="http://www.kasuke.co.jp/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/kasuke.jpg" alt="株式会社 安藤嘉助商店様" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社 安藤嘉助商店様　岡山県</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.kasuke-gaiheki.com/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/kasuke-gaiheki.jpg" alt="株式会社 安藤嘉助商店様" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="wallpaint">外壁塗装サイト</span></p>
<p class="title">株式会社 安藤嘉助商店様　岡山県</p>
</div>
<div class="one">
<div class="pict">
<a href="https://www.arigatounoie.com/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/top/centence06_pict02.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社 ありがとうの家様　愛知県</p>
</div>
<div class="one">
<div class="pict">
<a href="https://www.enlarge.tokyo/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/enlarge-tokyo.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社エンラージ様　東京都</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.enlarge.co.jp/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/enlarge.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社エンラージ様　東京都</p>
</div>
<div class="one">
<div class="pict">
<a href="https://www.sunpro-reform.jp/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/home-arrange.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社サンプロ様　長野県</p>
</div>
<div class="one">
<div class="pict">
<a href="https://www.taniue-reform.jp/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/taniue-reform.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">ALLAGI株式会社様　大阪府</p>
</div>
<div class="one">
<div class="pict">
<a href="https://www.relite-reform.com/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/top/centence06_pict03.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社 リアルターソリューションズ様　滋賀県</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.r-cobain.com" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/cobain-tosou.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社 Cobain(コバーン)様　広島県</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.r-mitaka.com/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/top/centence06_pict05.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="reform">リフォームサイト</span></p>
<p class="title">株式会社ミタカ工房様　群馬県</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.r-mitaka.co.jp/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/r-mitaka.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="wallpaint">外壁塗装サイト</span></p>
<p class="title">株式会社ミタカ工房様　群馬県</p>
</div>
<div class="one">
<div class="pict">
<a href="http://www.oliver-gaiheki.com/" target="_blank"><img src="https://www.gotta-ride.com/wp-content/themes/gotta_ride_ver2/img/works/oliver-gaiheki.jpg" alt="sample" width="344" height="188" class="img_over"/></a>
</div>
<p><span class="conpany_name"></span><span class="wallpaint">外壁塗装サイト</span></p>
<p class="title">株式会社オリバー　富山県</p>
</div>

<div class="btn">
<a href="/works"><img src="<?php bloginfo('template_url'); ?>/img/top/centence06_more_out.gif" alt="もっと制作実績を見る" width="274" height="50" /></a>
</div>

</div>
</div>
</section>
<!-- gotta-ride　サイト制作実績 -->
<!--========================================= -->

<!-- 問い合わせバナーPCのみ -->
<section>
<div class="contents_07">
<div class="inner">
<a href="/contact"><img src="<?php bloginfo('template_url'); ?>/img/common/centence07_btn01_out.gif" alt="お問い合わせ" width="180" height="66" /></a>
</div>
</div>
</section>
<!-- //問い合わせバナーPCのみ -->


<?php get_footer(); ?>
