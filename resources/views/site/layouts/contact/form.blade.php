{{-- DEVE SER FEITO A REVISAO DA MENSAGEM DE ENVIO --}}

<form action="{{ url('/') }}" method="POST" id="formContact" data-form-output="form-output-global"
  data-form-type="contact"
  onsubmit="this.submit.value='Enviando...'; this.submit.disabled=true; this.submit.style = 'background: #13e413'">
  @csrf
  <div class="row">
    {{-- Price energy --}}
    <div class="col-12 col-lg-6 col-md-6 floating-form">
      <div class="floating-label">
        <input id="contact-price" type="tel" inputmode="numeric" name="price" class="real floating-input" placeholder=" "
          value="{{ old('price') }}" autocomplete="none" required />
        <span class="highlight"></span>
        <label for="price">Qual valor da sua conta mensal?</label>
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
    {{-- Type location --}}
    <div class="col-12 col-lg-6 col-md-6 floating-form">
      <div class="floating-label">
        <select id="contact-location" name="location" class="floating-input" placeholder=" "
          value="{{ old('location') }} " required>
          <option disabled selected value="">-- Selecione</option>
          <option value="Residencial">Residencial</option>
          <option value="Industrial">Industrial</option>
        </select>
        <span class="highlight"></span>
        <label for="contact-name">Tipo de imóvel</label>
        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
    {{-- Name --}}
    <div class="col-12 col-lg-6 col-md-6 floating-form">
      <div class="floating-label">
        <input id="contact-name" name="name" class="floating-input" type="name" minlength="6" maxlength="100"
          placeholder=" " value="{{ old('name') }}" required>
        <span class="highlight"></span>
        <label for="contact-name">Nome</label>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
    {{-- Email --}}
    <div class="col-12 col-lg-6 col-md-6 floating-form">
      <div class="floating-label">
        <input id="contact-email" name="email" class="floating-input" type="email" placeholder=" "
          value="{{ old('email') }}" minlength="2" required>
        <span class="highlight"></span>
        <label for="contact-email">Email</label>
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
    {{-- Message --}}
    <div class="col-12 col-lg-12 col-md-12 floating-form">
      <div class="floating-label">
        <textarea id="contact-msg" class="floating-input floating-textarea" placeholder=" " name="message"
          spellcheck="true" value="{{ old('message') }}" minlength="2" maxlength="255" required></textarea>
        <span class="highlight"></span>
        <label for="contact-msg">Mensagem</label>
      </div>
    </div>
    {{-- Recaptcha and Submit button --}}
    <div class="row">
      <!--Google captcha-->
      {{-- <div class="col-12 col-lg-6 col-md-6">
        <div class="form-wrap form-validation-left">
          <div class="g-recaptcha" data-sitekey="6Lckb1AfAAAAAEXsFlqzOYxFzVD2zLBdXQEhBSM2"></div>
        </div>
      </div> --}}
      <!--End Google captcha -->

      <div class="col-12 col-lg-6 col-md-6" style="display: flex;
                  align-items: center;
                  justify-content: center; margin-top: 10px">
        <div class="contact-form-group float-right" style="width: 100%">
          <input id="contactEmail" type="submit" value="ENVIAR" name="submit" class="learn-more-btn">
        </div>
      </div>
    </div>
  </div>
</form>
 
<script>
  // 1. Acquire a reference to our <form>.
  //    This can also be done by setting <form name="blub">:
  //       var form = document.forms.blub;
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
  window.onload = function() {
    var recaptcha = document.forms["formContact"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
      // fazer algo, no caso to dando um alert
      alert("Por favor complete o captcha");
    }
  }
</script>

{{-- Mask price --}}
<script>
  $(".real").maskMoney({
    prefix: 'R$ ',
    thousands: '.',
    decimal: ','
  })
  const format = {
    minimumFractionDigits: 2,
    style: 'currency',
    currency: 'BRL'
  }

  /****** Cálculos Google Adwords ******/
  function googleAdwords() {
    let price = $('#price').maskMoney('unmasked')[0]
  }

  $(document).on('keyup', '#price', googleAdwords)
</script>