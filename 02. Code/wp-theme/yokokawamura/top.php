<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/* Template Name: Top */

get_header(); ?>

    <main id="main" class="site-main" role="main">
      <article>
        <section id="body-header">
          <div class="bh-bg">
            <div class="bh-catch"></div>
          </div>
          <h1 class="bh-title"></h1>
        </section>

        <section id="body-blog">
          <h2 rel="bookmark">日々のBLOG</h2>
          <p class="bb-text">よくあるご相談や、争いになりやすい事柄についての記事を掲載しています。</p>
          <ul>
          <?php
          global $post;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '5'
          );
          $loop = get_posts( $args );

          foreach( $loop as $post ) {
            setup_postdata( $post );
          ?>
            <li <?php post_class(); ?>>
              <time><?php the_time('Y年m月d日'); ?></time>
              <?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
            </li>
          <?php
          } wp_reset_postdata();
          ?>
          </ul>
          <span class="bb-more"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" rel="next">&rang;&nbsp;詳しくはこちら</a></span>
        </section>

        <section id="body-motto">
          <h2 rel="bookmark">3つの方針</h2>
          <ul>
            <li>
              <h3>離婚問題に特化した法律事務所です</h3>
              <p>離婚問題・DV被害・その他家族間トラブルについて<br />よりよい解決が得られるよう、力を尽くします。</p>
            </li>
            <li>
              <h3>DV被害者専門</h3>
              <p>当事務所では、DV被害については、<br />加害者からの相談はお受けできません。</p>
            </li>
            <li>
              <h3>問題整理からお手伝いします</h3>
              <p>いろいろなことが不安で、何をどう考えればいいのかわからなくなっておられる方や、<br />悩まなくてもいいことで悩んでおられる方が、大勢おられます。<br />「何に不安を感じているのか」「その不安はどうすれば解決できるのか」<br />当事務所では、法律面からポイントを整理し、あわせて、いろいろな方面の情報を提供し、<br />相談者の方と一緒に問題を整理して、解決していきます。</p>
            </li>
          </ul>
        </section>

        <section id="body-price">
          <h2 rel="bookmark">ご相談方法と費用</h2>
          <div class="bp-fee">
            <h3>法律相談料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30分&nbsp;&nbsp;&nbsp;5,000円<span>（税別）</span></h3>
            <hr>
            <p>事件としてご依頼いただく場合の費用につきましては、<br />精査の上、ご依頼者と協議して決めさせていただきます。</p>
          </div>
          <div class="bp-contact">
            <p>ご相談のご予約<br /><span class="bp-tel">&#9743;&nbsp;</span><span>TEL.</span><span class="bp-tel">0742-22-5365</span><br />月曜日〜金曜日&nbsp;&nbsp;午前9時〜午後5時</p>
          </div>
          <div class="bp-usage">
            <h3>法テラスのご利用について</h3>
            <p>法テラスの法律扶助は、経済的な事情によって、費用が出せない方のために、<br />無料で法律相談を行ったり、弁護士等の費用を立て替える制度です。</p>
            <p>ご家庭の収入によっては、法テラスの無料相談を利用できます。<br />ご予約、あるいは相談の際にお尋ね下さい。</p>
          </div>
        </section>
        
        <section id="body-intro">
          <h2 rel="bookmark">弁護士紹介</h2>
          <ul class="cf">
            <li class="bi-image"></li>
            <li class="bi-text">
              <h3>弁護士&nbsp;&nbsp;川村容子&nbsp;かわむらようこ</h3>
              <p>はじめまして、弁護士の川村容子です。<br />昭和62年に弁護士登録をして以来、離婚問題・DV被害・<br />その他家族間トラブルに特化した業務をしています。</p>
              <p>私は、平成元年から平成15年まで、奈良県女性センターの<br />相談担当弁護士として年間200数十件の相談をお聞きしていましたが、<br />そのうち約8割が、離婚問題やDV被害、家族間トラブルの相談でした。</p>
              <p>これらのトラブルに直面した方々の精神的負担は大きく、<br />いろいろなことが不安で、何をどうすればよいかもわからない、<br />という方が大勢おられました。</p>
              <p>そのような方々が一日でも早く安心した生活を取り戻せることを願って、<br />当事務所では、お一人お一人の状況やお気持ちを十分にお聞きした上で、相談・助言をし、<br />また、ご依頼があれば、代理人として、交渉、調停、訴訟等の法的手続をとり、<br />よりよい解決が得られるよう力を尽くします。</p>
              <hr>
              <table>
                <tb>
                  <tr>
                    <td>経歴</td>
                  </tr>
                  <tr>
                    <td>昭和62年4月</td>
                    <td>弁護士登録（奈良弁護士会）</td>
                  </tr>
                  <tr>
                    <td>平成7年4月</td>
                    <td>川村容子法律事務所開設</td>
                  </tr>
                  <tr>
                    <td>平成元年〜平成15年</td>
                    <td>奈良県女性センター相談担当弁護士</td>
                  </tr>
                 <tr>
                    <td>平成13年〜</td>
                    <td>「女性への暴力」ホットライン奈良代表</td>
                  </tr>
                </tb>
              </table>
            </li>
          </ul>
        </section>

        <section id="body-firm">
          <h2 rel="bookmark">事務所について</h2>
          <div class="bf-image"></div>
          <h3>川村容子法律事務所</h3>
          <ul>
            <li>所在地&nbsp;&nbsp;&#12306;630-8213</li>
            <li>奈良市登大路町5番地&nbsp;修徳ビル402号</li>
            <li>連絡先&nbsp;&nbsp;TEL:0742-22-5365&nbsp;&nbsp;FAX:0742-22-5367</li>
            <li>受付時間：月曜日〜金曜日&nbsp;&nbsp;午前9時〜午後5時</li>
            <li>来所のさいは、お電話でご予約ください</li>
          </ul>
        </section>

        <section id="body-access">
          <h2 rel="bookmark">アクセス</h2>
          <div class="ba-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.7620153145162!2d135.82805331502345!3d34.68595539151589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600139871d325031%3A0x72e79284907eabb9!2z5bed5p2R5a655a2Q5rOV5b6L5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1477133658693" width="720" height="362" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <p>近鉄奈良駅より徒歩5分</p>
        </section>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
