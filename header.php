<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?>" />
    <title><?php echo get_the_title(); ?> - <?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?> </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <?php wp_head(); ?>
  </head>

  <body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>

    <!-- Preloader -->
    <div class="preloader">
      <div class="loading">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
        <div class="bar bar4"></div>
        <div class="bar bar5"></div>
        <div class="bar bar6"></div>
        <div class="bar bar7"></div>
        <div class="bar bar8"></div>
      </div>
    </div>

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top">
      <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Header area start -->
    <header class="header__area-3">
      <div class="header__inner-3">
        <div class="header__logo-2">
          <a href="index.html" class="logo-dark"
            ><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/logo-black.png" alt="Site Logo"
          /></a>
          <a href="index.html" class="logo-light"
            ><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/site-logo-white-2.png" alt="Site Logo"
          /></a>
        </div>
        <div class="header__nav-2">
          <ul class="main-menu-3 menu-anim">
            <li class="has-megamenu">
              <a href="#">home</a>
              <ul class="mega-menu-2">
                <li>
                  <div class="menu-heading">Agency</div>
                  <ul>
                    <li><a href="index.html">Digital Maketing</a></li>
                    <li><a href="index-2.html">Design Studio </a></li>
                    <li><a href="index-3.html">Digital Agency</a></li>
                    <li><a href="index-7.html">creative Agency</a></li>
                    <li><a href="index-6.html">Startup Agency</a></li>
                    <li><a href="index-8.html">modern agency</a></li>
                    <li><a href="index-4.html">personal Portfolio</a></li>
                  </ul>
                </li>
                <li>
                  <div class="menu-heading">Agency Dark</div>
                  <ul>
                    <li><a href="index-dark.html">Digital Maketing</a></li>
                    <li><a href="index-2-dark.html">Design Studio</a></li>
                    <li><a href="index-3-dark.html">Digital Agency</a></li>
                    <li><a href="index-7-dark.html">creative Agency</a></li>
                    <li><a href="index-6-dark.html">Startup Agency</a></li>
                    <li><a href="index-8-dark.html">modern agency</a></li>
                    <li><a href="index-4-dark.html">personal Portfolio</a></li>
                  </ul>
                </li>
                <li>
                  <div class="menu-heading">Portfolio</div>
                  <ul>
                    <li><a href="index-5.html">portfolio showcase</a></li>
                    <li><a href="index-10.html">showcase carousel</a></li>
                    <li><a href="index-12.html">Interactive link</a></li>
                    <li><a href="index-13.html">portfolio masonry</a></li>
                    <li><a href="index-14.html">vertical grid</a></li>
                    <li>
                      <a href="index-15.html">Interactive image slider</a>
                    </li>
                    <li><a href="index-16.html">showcase parallax</a></li>
                    <li><a href="index-17.html">logo showcase</a></li>
                    <li><a href="index-9.html">showcase slider</a></li>
                    <li>
                      <a href="index-11.html">Interactive hover showcase</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="menu-heading">Portfolio dark</div>
                  <ul>
                    <li><a href="index-5-dark.html">portfolio showcase</a></li>
                    <li><a href="index-10-dark.html">showcase carousel</a></li>
                    <li><a href="index-12-dark.html">Interactive link</a></li>
                    <li><a href="index-13-dark.html">portfolio masonry</a></li>
                    <li><a href="index-14-dark.html">vertical grid</a></li>
                    <li>
                      <a href="index-15-dark.html">Interactive image slider</a>
                    </li>
                    <li><a href="index-16-dark.html">showcase parallax</a></li>
                    <li><a href="index-17-dark.html">logo showcase</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="about.html">about</a></li>
            <li class="has-megamenu">
              <a href="about.html">Pages</a>
              <ul class="mega-menu">
                <li>
                  <a>Service</a>
                  <ul>
                    <li><a href="service.html">service</a></li>
                    <li><a href="service-dark.html">service dark</a></li>
                    <li><a href="service-2.html">service V.2</a></li>
                    <li><a href="service-2-dark.html">service V.2 dark</a></li>
                    <li><a href="service-3.html">service V.3</a></li>
                    <li><a href="service-3-dark.html">service V.3 dark</a></li>
                    <li><a href="service-4.html">service V.4</a></li>
                    <li><a href="service-4-dark.html">service V.4 dark</a></li>
                    <li><a href="service-5.html">service V.5</a></li>
                    <li><a href="service-5-dark.html">service V.5 dark</a></li>
                    <li><a href="service-6.html">service V.6</a></li>
                    <li><a href="service-6-dark.html">service V.6 dark</a></li>
                    <li><a href="service-details.html">service details</a></li>
                    <li>
                      <a href="service-details-dark.html"
                        >service details dark</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a>portfolio</a>
                  <ul>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="portfolio-dark.html">portfolio dark</a></li>
                    <li><a href="portfolio-2.html">portfolio v.2</a></li>
                    <li>
                      <a href="portfolio-2-dark.html">portfolio v.2 dark</a>
                    </li>
                    <li><a href="portfolio-3.html">portfolio v.3</a></li>
                    <li>
                      <a href="portfolio-3-dark.html">portfolio v.3 dark</a>
                    </li>
                    <li><a href="portfolio-4.html">portfolio v.4</a></li>
                    <li>
                      <a href="portfolio-4-dark.html">portfolio v.4 dark</a>
                    </li>
                    <li><a href="portfolio-5.html">portfolio v.5</a></li>
                    <li>
                      <a href="portfolio-5-dark.html">portfolio v.5 dark</a>
                    </li>
                    <li>
                      <a href="portfolio-details.html">portfolio details</a>
                    </li>
                    <li>
                      <a href="portfolio-details-dark.html"
                        >portfolio details dark</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a>team</a>
                  <ul>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="team-dark.html">Team dark</a></li>
                    <li><a href="team-details.html">Team Details</a></li>
                    <li>
                      <a href="team-details-dark.html">Team Details dark</a>
                    </li>
                    <li><a href="career.html">career</a></li>
                    <li><a href="career-dark.html">career dark</a></li>
                    <li><a href="job-details.html">job details</a></li>
                    <li>
                      <a href="job-details-dark.html">job details dark</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>blog</a>
                  <ul>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="blog-dark.html">blog dark</a></li>
                    <li><a href="blog-2.html">blog v.2</a></li>
                    <li><a href="blog-2-dark.html">blog v.2 dark</a></li>
                    <li><a href="category.html">category</a></li>
                    <li><a href="category-dark.html">category dark</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li>
                      <a href="blog-details-dark.html">blog details dark</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>Others</a>
                  <ul>
                    <li><a href="about.html">about</a></li>
                    <li><a href="about-dark.html">about dark</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="faq-dark.html">FAQs dark</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="contact-dark.html">contact dark</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="404-dark.html">404 dark</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="portfolio.html">services</a>
              <ul class="main-dropdown">
                <li>
                  <a href="service.html">service</a>
                  <ul class="sub-dropdown">
                    <li><a href="service-dark.html">service dark</a></li>
                    <li><a href="service-2-dark.html">service V.2 dark</a></li>
                    <li><a href="service-3-dark.html">service V.3 dark</a></li>
                    <li><a href="service-4-dark.html">service V.4 dark</a></li>
                    <li><a href="service-5-dark.html">service V.5 dark</a></li>
                    <li><a href="service-6-dark.html">service V.6 dark</a></li>
                    <li>
                      <a href="service-details-dark.html"
                        >service details dark</a
                      >
                    </li>
                  </ul>
                </li>
                <li><a href="service-2.html">service V.2</a></li>
                <li><a href="service-3.html">service V.3</a></li>
                <li><a href="service-4.html">service V.4</a></li>
                <li><a href="service-5.html">service V.5</a></li>
                <li><a href="service-6.html">service V.6</a></li>
                <li><a href="service-details.html">service details</a></li>
              </ul>
            </li>
            <li>
              <a href="team.html">team</a>
              <ul class="main-dropdown">
                <li><a href="team.html">team</a></li>
                <li><a href="team-details.html">team details</a></li>
              </ul>
            </li>
            <li>
              <a href="blog.html">blog</a>
              <ul class="main-dropdown">
                <li><a href="blog.html">blog</a></li>
                <li><a href="blog-2.html">blog v.2</a></li>
                <li><a href="category.html">category</a></li>
                <li><a href="blog-details.html">blog details</a></li>
              </ul>
            </li>
            <li><a href="contact.html">contact</a></li>
          </ul>
        </div>
        <div class="header__nav-icon-3">
          <button class="search-icon" id="search_icon">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <button class="search-icon" id="search_close">
            <i class="fa-solid fa-xmark"></i>
          </button>
          <button id="open_offcanvas">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon/menu-black.png" alt="Menubar Icon" />
          </button>
        </div>
      </div>
    </header>
    <div class="header__search">
      <form action="#">
        <input type="text" name="s" id="s" placeholder="Search.." />
      </form>
    </div>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <div class="offcanvas__area">
      <div class="offcanvas__body">
        <div class="offcanvas__left">
          <div class="offcanvas__logo">
            <a href="index.html"
              ><img
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/site-logo-white-2.png"
                alt="Offcanvas Logo"
            /></a>
          </div>
          <div class="offcanvas__social">
            <h3 class="social-title">Follow Us</h3>
            <ul>
              <li><a href="#">Dribbble</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">YouTube</a></li>
            </ul>
          </div>
          <div class="offcanvas__links">
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">contact</a></li>
              <li><a href="career.html">Career</a></li>
              <li><a href="blog.html">blog</a></li>
            </ul>
          </div>
        </div>
        <div class="offcanvas__mid">
          <div class="offcanvas__menu-wrapper">
            <nav class="offcanvas__menu">
              <ul class="menu-anim">
                <li>
                  <a>home</a>
                  <ul>
                    <li><a href="index.html">Digital Maketing</a></li>
                    <li><a href="index-dark.html">Digital Maketing dark</a></li>
                    <li><a href="index-2.html">Design Studio </a></li>
                    <li><a href="index-2-dark.html">Design Studio dark</a></li>
                    <li><a href="index-3.html">Digital Agency</a></li>
                    <li><a href="index-3-dark.html">Digital Agency dark</a></li>
                    <li><a href="index-7.html">creative Agency</a></li>
                    <li>
                      <a href="index-7-dark.html">creative Agency dark</a>
                    </li>
                    <li><a href="index-6.html">Startup Agency</a></li>
                    <li><a href="index-6-dark.html">Startup Agency dark</a></li>
                    <li><a href="index-8.html">modern agency</a></li>
                    <li><a href="index-8-dark.html">modern agency dark</a></li>
                    <li><a href="index-4.html">personal Portfolio</a></li>
                    <li>
                      <a href="index-4-dark.html">personal Portfolio dark</a>
                    </li>
                    <li><a href="index-5.html">portfolio showcase</a></li>
                    <li>
                      <a href="index-5-dark.html">portfolio showcase dark</a>
                    </li>
                    <li><a href="index-10.html">showcase carousel</a></li>
                    <li>
                      <a href="index-10-dark.html">showcase carousel dark</a>
                    </li>
                    <li><a href="index-12.html">Interactive link </a></li>
                    <li>
                      <a href="index-12-dark.html">Interactive link dark</a>
                    </li>
                    <li><a href="index-13.html">portfolio masonry</a></li>
                    <li>
                      <a href="index-13-dark.html">portfolio masonry dark</a>
                    </li>
                    <li><a href="index-14.html">vertical grid</a></li>
                    <li><a href="index-14-dark.html">vertical grid dark</a></li>
                    <li>
                      <a href="index-15.html">Interactive image slider</a>
                    </li>
                    <li>
                      <a href="index-15-dark.html"
                        >Interactive image slider dark</a
                      >
                    </li>
                    <li><a href="index-16.html">showcase parallax</a></li>
                    <li>
                      <a href="index-16-dark.html">showcase parallax dark</a>
                    </li>
                    <li><a href="index-17.html">logo showcase</a></li>
                    <li><a href="index-17-dark.html">logo showcase dark</a></li>
                    <li><a href="index-9.html">showcase slider</a></li>
                    <li>
                      <a href="index-11.html">Interactive hover showcase</a>
                    </li>
                  </ul>
                </li>
                <li><a href="about.html">about</a></li>
                <li>
                  <a>Service</a>
                  <ul>
                    <li><a href="service.html">service</a></li>
                    <li><a href="service-dark.html">service dark</a></li>
                    <li><a href="service-2.html">service V.2</a></li>
                    <li><a href="service-2-dark.html">service V.2 dark</a></li>
                    <li><a href="service-3.html">service V.3</a></li>
                    <li><a href="service-3-dark.html">service V.3 dark</a></li>
                    <li><a href="service-4.html">service V.4</a></li>
                    <li><a href="service-4-dark.html">service V.4 dark</a></li>
                    <li><a href="service-5.html">service V.5</a></li>
                    <li><a href="service-5-dark.html">service V.5 dark</a></li>
                    <li><a href="service-6.html">service V.6</a></li>
                    <li><a href="service-6-dark.html">service V.6 dark</a></li>
                    <li><a href="service-details.html">service details</a></li>
                    <li>
                      <a href="service-details-dark.html"
                        >service details dark</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a>pages</a>
                  <ul>
                    <li>
                      <a>Service</a>
                      <ul>
                        <li><a href="service.html">service</a></li>
                        <li><a href="service-dark.html">service dark</a></li>
                        <li><a href="service-2.html">service V.2</a></li>
                        <li>
                          <a href="service-2-dark.html">service V.2 dark</a>
                        </li>
                        <li><a href="service-3.html">service V.3</a></li>
                        <li>
                          <a href="service-3-dark.html">service V.3 dark</a>
                        </li>
                        <li><a href="service-4.html">service V.4</a></li>
                        <li>
                          <a href="service-4-dark.html">service V.4 dark</a>
                        </li>
                        <li><a href="service-5.html">service V.5</a></li>
                        <li>
                          <a href="service-5-dark.html">service V.5 dark</a>
                        </li>
                        <li><a href="service-6.html">service V.6</a></li>
                        <li>
                          <a href="service-6-dark.html">service V.6 dark</a>
                        </li>
                        <li>
                          <a href="service-details.html">service details</a>
                        </li>
                        <li>
                          <a href="service-details-dark.html"
                            >service details dark</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>portfolio</a>
                      <ul>
                        <li><a href="portfolio.html">portfolio</a></li>
                        <li>
                          <a href="portfolio-dark.html">portfolio dark</a>
                        </li>
                        <li><a href="portfolio-2.html">portfolio v.2</a></li>
                        <li>
                          <a href="portfolio-2-dark.html">portfolio v.2 dark</a>
                        </li>
                        <li><a href="portfolio-3.html">portfolio v.3</a></li>
                        <li>
                          <a href="portfolio-3-dark.html">portfolio v.3 dark</a>
                        </li>
                        <li><a href="portfolio-4.html">portfolio v.4</a></li>
                        <li>
                          <a href="portfolio-4-dark.html">portfolio v.4 dark</a>
                        </li>
                        <li><a href="portfolio-5.html">portfolio v.5</a></li>
                        <li>
                          <a href="portfolio-5-dark.html">portfolio v.5 dark</a>
                        </li>
                        <li>
                          <a href="portfolio-details.html">portfolio details</a>
                        </li>
                        <li>
                          <a href="portfolio-details-dark.html"
                            >portfolio details dark</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>team</a>
                      <ul>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-dark.html">Team dark</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li>
                          <a href="team-details-dark.html">Team Details dark</a>
                        </li>
                        <li><a href="career.html">career</a></li>
                        <li><a href="career-dark.html">career dark</a></li>
                        <li><a href="job-details.html">job details</a></li>
                        <li>
                          <a href="job-details-dark.html">job details dark</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>blog</a>
                      <ul>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="blog-dark.html">blog dark</a></li>
                        <li><a href="blog-2.html">blog v.2</a></li>
                        <li><a href="blog-2-dark.html">blog v.2 dark</a></li>
                        <li><a href="category.html">category</a></li>
                        <li><a href="category-dark.html">category dark</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li>
                          <a href="blog-details-dark.html">blog details dark</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>Others</a>
                      <ul>
                        <li><a href="about.html">about</a></li>
                        <li><a href="about-dark.html">about dark</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="faq-dark.html">FAQs dark</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="contact-dark.html">contact dark</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="404-dark.html">404 dark</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>blog</a>
                  <ul>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="blog-dark.html">blog dark</a></li>
                    <li><a href="blog-2.html">blog v.2</a></li>
                    <li><a href="blog-2-dark.html">blog v.2 dark</a></li>
                    <li><a href="category.html">category</a></li>
                    <li><a href="category-dark.html">category dark</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li>
                      <a href="blog-details-dark.html">blog details dark</a>
                    </li>
                  </ul>
                </li>
                <li><a href="contact.html">contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="offcanvas__right">
          <div class="offcanvas__search">
            <form action="#">
              <input type="text" name="search" placeholder="Search keyword" />
              <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
          <div class="offcanvas__contact">
            <h3>Get in touch</h3>
            <ul>
              <li><a href="tel:02094980547">+(02) - 094 980 547</a></li>
              <li>
                <a href="mailto:info@extradesign.com">info@extradesign.com</a>
              </li>
              <li>230 Norman Street New York, QC (USA) H8R 1A1</li>
            </ul>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/shape/11.png" alt="shape" class="shape-1" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/shape/12.png" alt="shape" class="shape-2" />
        </div>
        <div class="offcanvas__close">
          <button type="button" id="close_offcanvas">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Offcanvas area end -->
      <header class="main-header clearfix">
        <nav class="main-menu clearfix">
          <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
              <div class="main-menu-wrapper__logo">
                <a href="<?php echo get_site_url(); ?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/logo-1.png" alt=""
                /></a>
              </div>
              <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler"
                  ><i class="fa fa-bars"></i
                ></a>

                <?php wp_nav_menu( array(
                  'theme_location' => 'header',
                  'container' => 'ul',
                  'menu_class' => 'main-menu__list',
                ) ); ?>

              </div>
            </div>
            <div class="main-menu-wrapper__right">
              <div class="main-menu-wrapper__call">
                <div class="main-menu-wrapper__call-icon">
                  <span class="icimg">
                    <a target="_blank" href="https://wa.me/+971529224818"
                      ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png"
                    /></a>
                  </span>
                </div>
                <div class="main-menu-wrapper__call-number">
                  <p>Talk to an expert</p>
                  <h5>
                    <a href="https://wa.me/+971529224818">+971 52 922 4818</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
      </div>
