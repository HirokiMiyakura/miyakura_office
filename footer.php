<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-3">
        <p class="underbar fs-4 mb-4">宮倉行政書士事務所</p>
      </div>
      <div class="col-12 col-sm-3">
        <p class="underbar fs-4 mb-4">リンク</p>
        <ul class="d-flex d-sm-block flex-wrap justify-content-between align-items-center list-unstyled">
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>">ホーム</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/service">取扱業務</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/price">料金体系</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/voice">お客様の声</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/about">事務所概要</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/column">ブログ・コラム</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="<?php echo home_url(); ?>/faq">よくあるご質問</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-3">
        <p class="underbar fs-4 mb-4 fw-bold">SNS</p>
        <ul class="d-flex d-sm-block flex-wrap justify-content-between align-items-center list-unstyled">
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">Instagram</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">X（旧Twitter）</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">Facebook</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-3">
        <p class="underbar fs-4 mb-4 fw-bold">お問い合わせ</p>
        <ul class="d-flex d-sm-block flex-wrap justify-content-between align-items-center list-unstyled">
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">LINE</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">Chatwork</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">メール</a></li>
          <li class="col-6 col-sm-12 text-center text-sm-start"><a class="" href="">電話</a></li>
        </ul>
      </div>
    </div>
    <p class="text-center mt-5">© 宮倉行政書士事務所. All Rights Reserved.</p>
  </div>
  <?php get_template_part('template/contact_sp'); ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
  const swiper_main = new Swiper('.swiper_main', {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper_voice = new Swiper(".swiper_voice", {
    loop: true,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  $(".openbtn").click(function () {
    $(this).toggleClass('active');
    $('.sp-menu').toggleClass('open')
    $('.sp-contact-list').toggleClass('close')
  });
</script>
<?php wp_footer(); ?>
</body>
</html>