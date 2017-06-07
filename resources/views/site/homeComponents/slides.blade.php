<section class='container' title="slide carrosel">
  <div id="slide" class="carousel notdevice" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#slide" data-slide-to="0" class='active'></li>
      <li data-target="#slide" data-slide-to="1"></li>
      <li data-target="#slide" data-slide-to="2"></li>
      <li data-target="#slide" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <section class="carousel-inner">
      {{-- primeiro slide da apresentacao --}}
      <article class="item active">
        <img src="{{asset('img/slide4.jpg') }}" alt="" class="img-rounded center-block imagem-dimensao">
          {{-- <dl class="carousel-caption initialism ">
            <dt></dt>
            <dd></dd>
          </dl> --}}
      </article>

      <article class="item">
        <img src="{{asset('img/slide1.jpg') }}" alt="" class="img-rounded center-block imagem-dimensao">
          {{-- <dl class="carousel-caption initialism ">
            <dt></dt>
            <dd>logo marca</dd>
          </dl> --}}
      </article>
      <article class="item">
        <img src="{{asset('img/logo.jpg') }}" alt="" class="img-rounded center-block imagem-dimensao">
          {{-- <dl class="carousel-caption initialism">
              <dt></dt>
              <dd>Logo</dd>
          </dl> --}}
      </article>
      <article class="item">
        <img src="{{asset('img/img-exib1.jpg') }}" alt="" class="img-rounded center-block imagem-dimensao">
          {{-- <dl class="carousel-caption initialism ">
            <dt></dt>
            <dd></dd>
          </dl> --}}
      </article>
    </section>

    <!-- Controls -->
    <a class="left carousel-control sr-only" href="#slide" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control sr-only" href="#slide" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
</section>
