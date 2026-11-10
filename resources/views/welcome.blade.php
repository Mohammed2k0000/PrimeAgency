<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Torkbiz - Professional Multipurpose HTML Template for Business Consulting & Financial Services </title>
  @include('partials.header')
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="{{asset('TEMPLETE/assets/images/logo/preloader.png')}}" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->


  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="dark-btn" id="btnSwitch"><img src="{{asset('TEMPLETE/assets/images/icon/moon.svg')}}" alt="lightdark-switch"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->


  @include('partials.nav')

  <section id="home">
    @include('partials.hero')
  </section>

  <section id="about">
    @include('partials.about')
  </section>

  <section id="service">
    @include('partials.services')
  </section>

  <section id="blog">
    @include('partials.blog')
  </section>

  <section id="FAQ">
    @include('partials.FAQ')
  </section>

  <section id="CTA">
    @include('partials.CTA')
  </section>

  @include('partials.footer')


  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

  @include('partials.script')


</body>

</html>