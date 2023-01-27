<footer class="footer-section-caitan">
  <div class="container">
    <div class="footer-container-caitan ">
      <div class="row">
        <div class="col-xl-12 col-md-12">
          <div aria-labelledby="social_link">
            <h3 id="important_link">Midias Sociais</h3>
          </div>
          <ul class="social-icons" aria-labelledby="social_link" role="navigation">
            {{-- inserir link da redes sociais --}}
            <li><a class="facebook transition__0-9s" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter transition__0-9s" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="instagram transition__0-9s" href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a class="linkedin transition__0-9s" href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a class="pinterest transition__0-9s" href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a class="skype transition__0-9s" href="#"><i class="fab fa-skype"></i></a></li>
            <li><a class="behance transition__0-9s" href="#"><i class="fab fa-behance"></i></a></li>
            <li><a class="telegram transition__0-9s" href="#"><i class="fab fa-telegram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="horizontal-bar">
    <div class="footer-content pt-3 pb-4">
      <div class="row">
        <div class="col-xl-4 col-lg-4 mb-50">
          <div class="footer-widget">
            <div class="footer-logo" role="banner">
              <!-- inserir link da home -->
              <a href="#home">
                <img src="assets\img\logo\soluteq.png" class="img-fluid" alt="Logo Soluteq" draggable="false">
              </a>
            </div>
            <div class="footer-text" aria-labelledby="concept">
              <p id="concept">Sistema de energia solar comercial, residencial e industrial. Orçamento sem compromisso! A
                Soluteq destaca-se por possuir uma equipe de profissionais altamente qualificada. Atendimento Via
                Telefone. Soluções Customizadas. Melhor Custo-Benefício.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
          <div class="footer-widget">
            <div class="footer-widget-heading" aria-labelledby="important_link">
              <h3 id="important_link">Links Importantes</h3>
            </div>
            <ul aria-labelledby="important_link" role="navigation">
              <!-- inserir link da paginas -->
              <li><a href="#home">Home</a></li>
              <li><a href="#about">Quem Somos</a></li>
              <li><a href="#sustainability">Sustentabilidade</a></li>
              <li><a href="#business-niches">Áreas de atuação</a></li>
              <li><a href="#localization">localização</a></li>
              <li><a href="#customers">Clientes</a></li>
              <li><a href="#contact">Contato</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
          <div class="footer-widget">
            <div class="footer-widget-heading" aria-labelledby="email">
              <h3 id="email">E-mail</h3>
            </div>
            <div class="footer-text mb-25" aria-describedat="descriptionButton">
              <p id="descriptionButton" title="Receba novidades no seu E-mail.">Receba novidades no seu E-mail.</p>
            </div>
            <div class="subscribe-form">
              <!-- inserir action -->
              <form method="POST" action="#">
                <input type="email" name="email" autocomplete="on" value=" " placeholder="E-mail"  required>
                <button type="submit" aria-describedby="descriptionButton"><i class="fa-solid fa-paper-plane"></i></button>                    
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 text-center text-lg-left">
          <div class="copyright-text">
            <p>Copyright &copy; 2023, Todos direitos reservados - Desenvolvido por <a
                title="clique e siga meu perfil no LinkedIn" target="_blanck"
                href="https://www.linkedin.com/in/samuelcaitano/">Samuel Caitano</a></p>
            <p class="warning">Mantenha a integridade desta página</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>
  (function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

  }).call(this);


  wow = new WOW(
    {
      animateClass: 'animated',
      offset: 100
    }
  );
  wow.init();  

</script>

{{-- ARQUIVO ESSENCIAL PARA O FUNCIONAMENTO DA HOME --}}
<script src="\assets\js\custom.js"></script>
<!-- OwlCarousel -->
<script src="\assets\js\owl.carousel.min.js"></script>
<link rel="stylesheet" href="\assets\css\owl.carousel.min.css" />
<!-- Js para funcionar a keyframes -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js"></script>


</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>