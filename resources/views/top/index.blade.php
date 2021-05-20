      <!-- .works-section -->
@extends('layouts.top')
@section('title')
<title>Webエンジニア TAICHI KOBAYASHI ポートフォリオ</title>
@endsection
@section('content')
      <section class="works-section section" id="works-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">WORKS</h2>
          </div>
          <div class="section-lead">
            <p>Web（デザインとコーディング）制作の記録です。<br>デザイン練習用の架空サイト（ファーストビューのみ）も含んでおります。</p>
          </div>
          <div class="section-body works">
            <div class="works-list js-my-gallery">
              <figure class="works-item">
                <a href="{{ url('/') }}"><img src="{{ asset('/img/works/hairsalon.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design / Coding(Responsive) / WordPress</div>
                  <div class="works-url"><a class="works-url-link" href="https://yahoo.co.jp" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/company.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design / Coding(Responsive) </div>
                  <div class="works-url"><a class="works-url-link" href="https://yahoo.co.jp" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/girly.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/school.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/game.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/fashion.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">サイト名が入る</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- /.works-section -->

      <!-- .feature-section -->
      <section class="feature-section section" id="feature-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">FEATURE</h2>
          </div>
          <div class="section-lead">
            <p>
              １サイトの解説
            </p>
          </div>
          <div class="section-body feature">
            <div class="feature-item">
              <div class="feature-image-wrapper">
                <a href="https://www.yahoo.co.jp/" target="_blank" class="hover-action"><img clas="feature-image"
                    src="img/feature/feature.jpg" alt=""></a>
              </div>
              <div class="feature-body">
                <p>
                  <span class="text-bold">サイト名：</span><br>サイト名が入る<br><a href="#" target="_blank">https://●●●.com</a></p>
                <p><span class="text-bold">担当：</span><br>Design / Coding (Responsive) / WordPress / Writing</p>
                <p><span
                    class="text-bold">コメント：</span><br>テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.feature-section -->

      <!-- .about-section -->
      <section class="about-section section" id="about-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">ABOUT</h2>
          </div>
          <div class="section-lead">
            <p>
              こんにちは！
            </p>
          </div>
          <div class="section-body about">
            <div class="about-item">
              <div class="about-image-wrapper">
                <img class="about-image lazyload fadein" data-src="img/about/profile.jpg" alt="">
              </div>
              <div class="about-body">
                <p>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.about-section -->

      <!-- .skill-section -->
      <section class="skill-section section" id="skill-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">SKILL</h2>
          </div>
          <div class="section-lead">
            <p>
              未経験ですが頑張ります！
            </p>
          </div>
          <div class="section-body skill">
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_html.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">HTML5/CSS3</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate4"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_js.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_wp.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">WordPress</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate4"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_ps.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Photoshop</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate4"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_ai.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Illustrator</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_xd.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">XD</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.skill-section -->

      <!-- .contact-section -->
      <section class="contact-section section" id="contact-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">CONTACT</h2>
          </div>
          <div class="section-lead">
            <p>
              お問い合わせは、<br class="sp-only">下記お問い合わせフォームからお願いいたします。
            </p>
          </div>
          <div class="section-body contact">
            <form method="post" action="">
                <label for="name">お名前（10文字以内）</label>
                <input type="text" name="name" value="" id="name">
                  <label for="email">メールアドレス</label>
                <input type="text" name="email" value="" id="email">
                <label for="message">メッセージ</label>
                <textarea name="message" rows="5" cols="70" id="message"></textarea>
              <input type="submit" value="送信">
            </form>

            <!-- <ul class="contact-list">
              <li class="contact-item">
                <a class="contact-link" href="https://twitter.com/" target="_blank"><img class="contact-image"
                    src="img/contact/icon_tw.png" alt=""></a>
              </li>
              <li class="contact-item">
                <a class="contact-link" href="https://www.facebook.com/" target="_blank"><img class="contact-image"
                    src="img/contact/icon_fb.png" alt=""></a>
              </li>
            </ul>
            <div class="contact-text">higoronookonaigadaiji@gmail.com</div> -->
          </div>
        </div>
      </section>
      <!-- /.contact-section -->
@endsection

