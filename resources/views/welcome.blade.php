<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
  </head>
  <body>
    @include('partials.preloader')
    <header>
      @include('partials.header')
    </header>

    <!-- Home -->
    <section id="home" class="fill">
      @include('partials.home')
    </section>
    <!-- end Home -->

    <!-- Education -->
    <section id="education">
      @include('partials.education')
    </section>
    <!-- end Education -->

    <!-- Experience -->
    <section id="experience">
      @include('partials.experience')
    </section>
    <!-- end Experience -->

    <!-- Portfolio -->
    <section id="portfolio">
      @include('partials.portfolio')
    </section>
    <!-- end Portfolio -->

    <!-- Services -->
    <section id="services">
      @include('partials.services')
    </section>
    <!-- end Services -->

    <!-- Contact -->
    <section id="contact">
      @include('partials.contact')
    </section>
    <!-- end Contact -->

    <!-- Footer -->
    <footer>
      @include('partials.footer')
    </footer>
    <!-- end Footer -->

    <!-- ===== JAVASCRIPTS ===== -->
    @include('partials.js')
  </body>
</html>
