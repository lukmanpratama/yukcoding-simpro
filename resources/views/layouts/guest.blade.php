<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Play | Free Startup and SaaS Landing Page Template by UIdeck</title>

    <!-- Primary Meta Tags -->
    <meta
      name="title"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck"
    />
    <meta
      name="description"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://uideck.com/play/" />
    <meta
      property="og:title"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck"
    />
    <meta
      property="og:description"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team"
    />
    <meta
      property="og:image"
      content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://uideck.com/play/" />
    <meta
      property="twitter:title"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck"
    />
    <meta
      property="twitter:description"
      content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team"
    />
    <meta
      property="twitter:image"
      content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg"
    />

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="{{ asset('landingpage/assets/images/yukcoding.ico') }}"
      type="image/svg/x-icon"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/ud-styles.css') }}" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    <x-guest.navbar/>
    <!-- ====== Header End ====== -->

    <!-- ====== Content ====== -->
    {{ $slot }}
    <!-- ====== Content End ====== -->

    <!-- ====== Footer Start ====== -->
    <x-guest.footer/>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ asset('landingpage/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/main.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>
    <script>
        $('#nohp').inputmask("9999 9999 99999")
    </script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>
