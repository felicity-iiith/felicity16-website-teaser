<?php
  $base = base_url();
  $bg_colors = [
    'home'    => '#358EBC',
    'about'   => '#D8473A',
    'contact' => '#146E1E',
    'credits' => '#D49E24'
  ];
  $page_title = ($page !== 'home') ? ucfirst($page) . ' | ' : '';
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title><?php echo $page_title; ?>Felicity · IIIT-H</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/teaser.css">
  <style>
  .share {
    -webkit-filter: url("<?php echo base_url(); ?>img/goo-filter.svg#goo");
    filter: url("<?php echo base_url(); ?>img/goo-filter.svg#goo");
  }
  </style>
  <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Flamenco|Noto+Sans" rel="stylesheet" type="text/css">
</head>
<body class="<?php echo $page?>" style="background-color: <?php echo $bg_colors[$page];?>">
  <div class="wrapper">
    <div class="main-menu">
      <div class="share">
        <button class="share-toggle-button">
          <i class="share-icon fa fa-bars"></i>
        </button>
        <ul class="share-items">
          <li class="share-item">
            <a
            class="share-button internal-link"
            href="<?php echo $base; ?>"
            title="Home"><i class="share-icon fa fa-home"></i></a>
          </li>
          <li class="share-item">
            <a
            class="share-button internal-link"
            href="<?php echo $base; ?>about/"
            title="About"><i class="share-icon fa fa-info"></i></a>
          </li>
          <li class="share-item">
            <a
            href="<?php echo $base; ?>contact/"
            class="share-button internal-link"
            title="Contact Us"><i class="share-icon fa fa-envelope"></i></a>
          </li>
          <li class="share-item">
            <a
            class="share-button"
            href="https://felicity.iiit.ac.in/"
            title="Old website" target="_blank"><i class="share-icon fa fa-external-link"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <aside>
      <div class="lamp">
        <div class="bulb"></div>
        <img src="<?php echo base_url(); ?>img/lamp.png">
      </div>
      <div class="lamp">
        <div class="bulb"></div>
        <img src="<?php echo base_url(); ?>img/lamp.png">
      </div>
    </aside>
    <header class="page" id="home"
    style="<?php if ($page == 'home') echo 'display:block;';?>">
      <div class="content">
        <p class="iiit-h">
          <img src="<?php echo base_url(); ?>img/iiit-logo.png" alt="IIIT H Logo"> IIIT-H
        </p>
        <p class="presents">
          presents
        </p>
        <h1 class="page-title">Felicity</h1>
        <p class="year">2016</p>
        <p class="tagline">Where magic happens</p>
        <p class="coming-soon">Coming soon<span class="ellipsis">...</span></p>
      </div>
    </header>
    <main>
      <section id="about" class="page page-narrow"
      style="<?php if ($page == 'about') echo 'display:block;';?>">
        <h1>About <span class="text-lower">Felicity</span></h1>
        <p>
          Felicity is the annual techno-cultural fest of IIIT-H. When a campus
          full of a myriad of people and ideas reaches a critical mass, the latent
          energy awakens to manifest itself into a grandeur. The students of the
          institute come together to create an event that is the expression of
          their creativity and technical prowess. Come experience a zestful three
          day long bonanza that has something for everyone!
        </p>
      </section>
      <section id="contact" class="page page-narrow"
      style="<?php if ($page == 'contact') echo 'display:block;';?>">
        <h1>
          <span class="title-icon"><i class="share-icon fa fa-envelope"></i></span>
          Contact us
        </h1>
        <p>There are many ways of contacting us.</p>
        <p>You may email us at
          <a target="_blank" href="mailto:contact@felicity.iiit.ac.in">contact@felicity.iiit.ac.in</a>
        </p>
        <p>
          Or find us on
          <a target="_blank" href="https://www.facebook.com/felicity.iiith">
            <img class="social-icon" src="<?php echo base_url(); ?>img/fb-icon.png">
            facebook
          </a>
          or
          <a target="_blank" href="https://twitter.com/felicity_iiith">
            <img class="social-icon" src="<?php echo base_url(); ?>img/twitter-icon.png">
            twitter.
          </a>
          Do check out our facebook page for last year's glimpses.
        </p>
        <p>Or bug our coordinators:</p>
        <div class="grid row nowrap">
          <div class="col">
            <p>
              Jeevan Chowdary
              <a target="_blank" href="https://www.facebook.com/g1.8.jeevan">
                  <img class="social-icon" src="<?php echo base_url(); ?>img/fb-icon.png">
              </a>
            </p>
            <p>
              <a target="_blank" href="mailto:jeevan@felicity.iiit.ac.in">jeevan@felicity.iiit.ac.in</a>
            </p>
            <p>(+91) 9849255966</p>
          </div>
          <div class="col">
            <p>
              Sanatan Mishra
              <a target="_blank" href="https://www.facebook.com/sanatan.mishra.7">
                <img class="social-icon" src="<?php echo base_url(); ?>img/fb-icon.png">
              </a>
            </p>
            <p>
              <a target="_blank" href="mailto:sanatan@felicity.iiit.ac.in">sanatan@felicity.iiit.ac.in</a>
            </p>
            <p>(+91) 8712876675</p>
          </div>
          <div class="col">
            <p>
              Vivek Ghaisas
              <a target="_blank" href="https://www.facebook.com/vghaisas">
                <img class="social-icon" src="<?php echo base_url(); ?>img/fb-icon.png">
              </a>
            </p>
            <p>
              <a target="_blank" href="mailto:vivek@felicity.iiit.ac.in">vivek@felicity.iiit.ac.in</a>
            </p>
            <p>(+91) 9581248425</p>
          </div>
        </div>
      </section>
      <section id="credits" class="page page-narrow"
      style="<?php if ($page == 'credits') echo 'display:block;';?>">
        <h1>Credits</h1>
        <p>
          The above menu is taken from
          <a target="_blank" href="http://tympanus.net/codrops/2015/03/10/creative-gooey-effects/">Codrops</a>.
        </p>
        <p>
          We are also indebted to
          <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>,
          <a target="_blank" href="https://www.google.com/fonts/">Google Fonts</a>
          and
          <a target="_blank" href="https://necolas.github.io/normalize.css/">Normalize.css</a>.
        </p>
        <p>
          The code for this website is available on <i class="fa fa-github"></i> Github at
          <a target="_blank" href="https://github.com/felicity-iiith/felicity16-website-teaser">
            felicity-iiith/felicity16-website-teaser
          </a>
          under the terms of the MIT License.
        </p>
      </section>
    </main>
  </div>
  <footer>
    Copyright <i class="fa fa-copyright"></i> 2015-2016 Team Felicity, <a target="_blank" href="https://www.iiit.ac.in/">IIIT Hyderabad</a>
    <a class="internal-link" href="<?php echo $base; ?>credits/">Credits</a>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>js/TweenMax.min.js"></script>
	<script src="<?php echo base_url(); ?>js/beta-menu.js"></script>
  <script>
    $(function(href){
      var base = '<?php echo $base; ?>'
        ,currentPage = '<?php echo $page; ?>'
        ,bgColors = <?php echo json_encode($bg_colors);?>
        ,loadingContent = false
        ,$body = $(document.body);

        var capitalize = function(s) {
          return s.charAt(0).toUpperCase() + s.slice(1).toLowerCase();
        }

      var getPageName = function(href) {
        var pName = href.replace(base, '').replace(/\/$/, '');
        if (pName === '') {
          pName = 'home';
        }
        return pName;
      };

      var loadContent = function (page) {
        if (loadingContent) {
          return;
        }
        loadingContent = true;
        $body
          .removeClass(currentPage)
          .addClass(page)
          .css('background-color', bgColors[page]);

        $('#' + currentPage).fadeOut(400, function(){
          $('#' + page).fadeIn(600, function(){
            loadingContent = false;
          });
        });
        currentPage = page;
        document.title = (page !== 'home') ? capitalize(page) + ' | Felicity · IIIT-H' : 'Felicity · IIIT-H';
        return document.title;
      }

      $('.internal-link').on('click', function(e) {
        if ( ! e.ctrlKey) {
          e.preventDefault();
          if (window.location.href !== this.href) {
            var newUrl = this.href;
            var page = getPageName(newUrl);
            var title = loadContent(page);
            if (history.state != newUrl) {
              history.pushState(newUrl, null, newUrl);
            }
          }
        }
      });
      $(window).on('popstate', function(){
        var page = getPageName(window.location.href);
        loadContent(page);
      });
    });
  </script>
</body>
</html>
