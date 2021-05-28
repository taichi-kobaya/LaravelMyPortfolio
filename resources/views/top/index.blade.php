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
            <p>Web（デザインとコーディング）制作の記録です。<br>デザイン練習用の架空サイト（ファーストビューのみ）となりますが、随時追加していく予定です。今後はWebアプリも続々作成予定！</p>
          </div>
          <div class="section-body works">
            <div class="works-list js-my-gallery">
              <figure class="works-item">
                <a href="{{ url('/') }}"><img src="{{ asset('/img/works/hairsalon-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">Crush on Me</div>
                  <div class="works-text">Design</div>
                  <!-- <div class="works-url"><a class="works-url-link" href="https://yahoo.co.jp" target="_blank">Link</a> -->
                  <!-- </div> -->
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/company-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">Bird's eye Futures</div>
                  <div class="works-text">Design</div>
                  <!-- <div class="works-url"><a class="works-url-link" href="https://yahoo.co.jp" target="_blank">Link</a>
                  </div> -->
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/fashion-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">Primitive</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/school-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">ちぐさ幼稚園</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/game-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">音楽ゲーム</div>
                  <div class="works-text">Design</div>
                </figcaption>
              </figure>
              <figure class="works-item">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/works/wa-site.jpg') }}" alt="イメージ">
                </a>
                <figcaption class="works-body">
                  <div class="works-title">陰陽</div>
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
              完成済み、または現在作成中のサイトやアプリについて、こだわりや途中経過等を定期的に更新していきます！
            </p>
          </div>
          <div class="section-body feature">
            <div class="feature-item">
              <div class="feature-image-wrapper">
                <a href="https://www.yahoo.co.jp/" target="_blank" class="hover-action"><img clas="feature-image"
                    src="img/feature/blog-header.jpg" alt=""></a>
              </div>
              <div class="feature-body">
                <p>
                  <span class="text-bold">サイト名：</span>どくどく読書
                  <!-- <a href="#" target="_blank">https://●●●.com</a></p> -->
                <p><span class="text-bold">担当：</span><br>Design / Coding (Responsive) / WordPress / Writing</p>
                <p><span
                    class="text-bold">コメント：</span><br>趣味の読書のアウトプット用WordPressサイトを構築中。
                </p>
                                <p>
                  Dockerで環境構築しました。子テーマを作成しテーマをカスタマイズしていきます。
                </p>
                <p>
                  余談ですが、読書した後に読んだ本の内容を思い出してブログに書いたりTwitterに上げたりノートに書き出したりしてみると本の内容が記憶に残りやすくなります！
                </p>
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
              はじめまして！Webエンジニアの小林太一です
            </p>
          </div>
          <div class="section-body about">
            <div class="about-item">
              <div class="about-image-wrapper">
                <img class="about-image lazyload fadein" src="img/about/myphoto.jpg" alt="">
              </div>
              <div class="about-body">
                <p>
                  2021年4月 未経験で株式会社EeeeGにエンジニアとして入社。
                </p>
                <p>
                デザイン専門学校出身で、絵を書いたりデザインしたりするのが好きです！
                </p>
                <p>
                現在は目下プログラミングの勉強中ですが、将来的にはデザインの事も理解しつつ開発に落とし込んでいけるようになりたいです。
                </p>
                <p>
                出身は新潟県南魚沼市。
                </p>
                <p>
                日本一美味しいお米を食べて育ちました！
                </p>
                <p>
                いつか自分を育ててくれた故郷に恩返し・地域に貢献できるような人間になりたいと思っています！
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
              一日一歩でも前進できるよう頑張っています！継続は力なり
            </p>
          </div>
          <div class="section-body skill">
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_html.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">HTML/CSS・Sass/Scss</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    基本的なコーディングは問題なくできます。
                    Gulpを導入してSass/Scssのコーディング経験あり。
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_php.jpg" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">PHP</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    基礎文法を学んだ後、お問い合わせフォーム等を作成できるレベルになりました。
                    オブジェクト指向についてもPHPで学びました。
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_wp.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">WordPress</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    実務で環境構築〜WordPressサイトの改修を行いました。個人的な趣味のWordPressサイトも構築中。
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_laravel.jpg" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Laravel</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    基本的な機能を理解した後、CRUD（Create、Read、Update、Delete）アプリの作成を行いました。このポートフォリオもLaravelで作成しました。
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_ps.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Photoshop</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    画像編集やロゴの作成等、問題なくできます。
                  </p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="img/skill/icon_docker.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Docker</h3>
                  <div class="skill-rating rating">
                    <div class="rate rate3"></div>
                  </div>
                  <p>
                    基本的なDockerコマンドの使い方、Docker Composeについても学びました。このポートフォリオはLaradockで環境構築しています。
                  </p>
                </div>
              </div>
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
          <div class="container">
        <div class="container">
            {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                @endif

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                @endif


                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">電話番号</p>
                    <div class="col-sm-8">
                        {{ Form::text('tel', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                @if ($errors->has('tel'))
                <p class="alert alert-danger">{{ $errors->first('tel') }}</p>
                @endif

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <label>{{ Form::radio('gender', "男性") }}男性</label>
                        <label>{{ Form::radio('gender', "女性") }}女性</label>
                    </div>
                </div>
                @if ($errors->has('gender'))
                <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
                @endif

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                @if ($errors->has('contents'))
                <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
                @endif

                <div class="text-center">
                    {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
          <!-- <div class="section-body contact">
            <form method="post" action="">
                <label for="name">お名前（10文字以内）</label>
                <input type="text" name="name" value="" id="name">
                  <label for="email">メールアドレス</label>
                <input type="text" name="email" value="" id="email">
                <label for="message">メッセージ</label>
                <textarea name="message" rows="5" cols="70" id="message"></textarea>
              <input type="submit" value="送信">
            </form> -->

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
          <!-- </div> -->
        </div>
      </section>
      <!-- /.contact-section -->
@endsection

