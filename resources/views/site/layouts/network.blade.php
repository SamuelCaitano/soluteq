
<section id="network" class="network-caitan"> 
  <div class="network-container-caitan">
    <div class="ts-promo-numbers" style="min-width: 450px; 
    text-align: center;margin: 30px auto;"> 
      <div class="container wow fadeInLeft" data-wow-delay="0.4s"
        style="visibility: visible; -webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s; display: inline; font-size: 30px; font-weight: 800; text-align: center; margin: 20px 0;">
        <div>
                   
        </div>
        <div class="ts-promo-number">
          <figure class="odometer num" data-odometer-final="2000000">0</figure>
          {{-- <span class="num" data-val="0" data-final="200">000</span> --}}
        </div>
        <div>
          <span class="text text__mobile-1" style="font-size: 25px"><span> MW/h</span> Gerados por ano</span>
        </div>
      </div>
      {{-- Placas Instaladas --}}
      <div class="container wow fadeInLeft" data-wow-delay="0.5s"
        style="visibility: visible; -webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s; display: inline; font-size: 30px; font-weight: 800; text-align: center; margin: 20px 0;"> 
        <div class="ts-promo-number">
          <figure class="odometer num" data-odometer-final="32033">0</figure>
          {{-- <span class="num" data-val="31500" data-final="32033">32033</span> --}}
        </div>
        <div>
          <span class="text text__mobile-1" style="font-size: 25px">Placas Instaladas</span>
        </div>
      </div>
      {{-- Projetos Realizados --}}
      <div class="container wow fadeInLeft" data-wow-delay="0.6s"
        style="visibility: visible; -webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s; display: inline; font-size: 30px; font-weight: 800; text-align: center; margin: 20px 0;">
        <div class="ts-promo-number">
          <figure class="odometer num" data-odometer-final="500">0</figure>
          {{-- <span class="num" data-val="100" data-final="500">500</span> --}}
        </div>
        <div>
          <span class="text text__mobile-1" style="font-size: 25px">Projetos Realizados</span>
        </div>
      </div>
    </div>

    <div class="network-sustainability-caitan wow fadeInRightBig" data-wow-delay="0.5s"
      style="visibility: visible; -webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
      <h3>Energia Sustentável</h3>
      <div class="col-12 col-lg-12 network-sustainability-box-caitan" style="">
        <p class="text__mobile-1">Energia fotovoltaica é hoje, renovação e evolução, gerando energia elétrica de forma eficiente, econômica
          para seu bolso e sustentável para o planeta. Apresentamos soluções para modernizar sua residência, comércio ou empresa com energia limpa e eficiente.
          Orçamento preciso e com previsão econômica do investimento. Profissionais qualificados, equipamentos
          certificados e homologados, com garantia e assistência técnica, marcas de renome e qualidade conhecidas no
          mundo inteiro. Trabalhamos com equipamentos importados e nacionais.</p>
      </div>
      {{-- Component Button --}}
      <div style="display: flex; justify-content:  center;">
        @include('site.components.btn_simulator')
      </div>
    </div>
  </div>

</section>

<script>
  let valueDisplays = document.querySelectorAll(".num");
  let interval = 2000;

  valueDisplays.forEach((valueDisplay) => {
    let startValue = parseInt(valueDisplay.getAttribute("data-val"));
    let endValue = parseInt(valueDisplay.getAttribute("data-final"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
</script>