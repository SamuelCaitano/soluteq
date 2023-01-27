{{-- Contact Form --}}
<section id="contact" class="main-contact-caitan" style="padding: 50px 0;  top: 100px">
  <div class="container" style="margin: 0 auto; height: auto; max-width: 800px;">
    <div class="row">
      <div class="col-12">
        <div class="contact-form-wrapper">
          <div class="title__box-caitan">
            <h2 class="title__main-caitan">Contato</h2>
            <h3 class="subtitle__main-caitan text__mobile-1">Solicite um orçamento, nossa equipe está disposta a te ajudar!🤩</h3>
          </div>
          <div class="form-inner">
            <div class="form-contact-caitan">
              <h2 class="form-contact-title-caitan text__mobile-1">Nova mensagem</h2>
            </div>
            {{-- Contact file form start --}}
            @include('site.layouts.contact.form')
            {{-- Contact file form end --}}
          </div>
        </div>
      </div>
    </div> 
  </div>
</section> 