<section id="gallery" class="gallery-caitan">
  <div class="container" style="max-width:1200px">
    {{-- <div class="gallery-title-caitan">
      <h2 class="title">Galeria de Projetos 🖼️</h2>
      <h2 class="subtitle">Clientes que confiaram no nosso trabalho.</h2>
    </div> --}}

    <div class="title__box-caitan">
      <h2 class="title__main-caitan">Galeria de Projetos</h2>
      <h3 class="subtitle__main-caitan text__mobile-1">Clientes que confiaram no nosso trabalho. 🖼️</h3>
    </div>

    <div class="contenedorImgs"></div>
  </div>
</section>


<script>
  $(function(){
  const strL = 'https://images.unsplash.com/photo-';
  const strR = '?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ';
  const imgs = [
    {
      descripcion: 'Sistema de 9,24 kWp',
      titulo: 'Araraquara - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d2341dd545a2FnPHrJy/IMG-20190626-WA0017.jpg",
    },
    {
      descripcion: 'Sistema de 1,32 kWp',
      titulo: 'Boa Esperança do Sul - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20eee1035d6hpzhgOj/WhatsApp-Image-2019-03-06-at-11.29.37.jpeg",
    },
    {
      descripcion: 'Sistema de 3,3 kWp',
      titulo: 'Brodowski - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20efa0d786cJUOHIzl/WhatsApp-Image-2019-04-29-at-15.51.39-2.jpeg",
    },
    {
      descripcion: 'Sistema de 0,66 kWp',
      titulo: 'Catanduva - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20f0328bbf49vEY1pQ/WhatsApp-Image-2019-04-03-at-12.45.07.jpeg",
    },
    {
      descripcion: 'Sistema de 6,6 kWp',
      titulo: 'Araraquara - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d234f225fe2cdZ6mzhC/WhatsApp-Image-2019-07-08-at-11.00.48-1.jpeg",
    },
    {
      descripcion: 'Sistema de 1,98 kWp',
      titulo: 'Dois Córregos - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20f13f4b4bc3c8PggB/49149575_2062852990462292_6588528412439085056_o.jpg",
    },
    {
      descripcion: 'Sistema de 1,98 kWp',
      titulo: 'Jardinópolis - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20f20e8fdafpscYQxW/WhatsApp-Image-2019-05-02-at-15.47.54-2.jpeg",
    },
    {
      descripcion: 'Sistema de 2,64 kWp',
      titulo: 'Monte Alto - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d233ecee35dfHocUm5W/WhatsApp-Image-2019-07-08-at-08.53.07-1.jpeg",
    },
    {
      descripcion: 'Sistema de 5,28 kWp',
      titulo: 'Araraquara - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20ecf076d8dTvJuuvy/WhatsApp-Image-2019-04-17-at-10.27.49-1.jpeg",
    },
    {
      descripcion: 'Sistema de 1,98 kWp',
      titulo: 'Santa Ernestina - SP',
      url: "https://storage.googleapis.com/wzukusers/user-31993287/images/5d20f3f183f4cQrSLrWh/WhatsApp-Image-2019-07-06-at-16.15.13.jpeg",
    },
    // {
    //   descripcion: 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    //   titulo: 'I Want a Bone',
    //   url: strL+'1518717758536-85ae29035b6d'+strR,
    // },
  ]

  $.each(imgs, function(i, img){
    $('#gallery .contenedorImgs').append(`
      <div class="imagen" style="background-image:url('${img.url}')">
        <p class="nombre">${img.titulo}</p>
      </div>`
    );
  }) 
  setTimeout(() => {
    $('#gallery').addClass('vis');
  }, 1000)
  $('#gallery').on('click', '.contenedorImgs .imagen', function(){
    var imagen = imgs[$(this).index()].url;
    var titulo = imgs[$(this).index()].titulo;
    var descripcion = imgs[$(this).index()].descripcion;
    $('#gallery').addClass('scale');
    $(this).addClass('activa');
    if(!$('.fullPreview').length){
      $('body').append(`
        <div class="fullPreview">
          <div class="cerrarModal"></div>
          <div class="wrapper">
            <div class="blur" style="background-image:url(${imagen})"></div>
            <p class="titulo">${titulo}</p>
            <img src="${imagen}">
            <p class="desc">${descripcion}</p>
          </div>
          <div class="controles">
            <div class="control av"></div>
            <div class="control ret"></div>
          </div>
        </div>`
      )
      $('.fullPreview').fadeIn().css('display','flex');
    }
  })
  $('body').on('click', '.fullPreview .cerrarModal', function(){
    $('.contenedorImgs .imagen.activa').removeClass('activa');
    $('#gallery').removeClass('scale');
    $(this).parent().fadeOut(function(){
      $(this).remove();
    })
  })
  $('body').on('click', '.fullPreview .control', function(){
    var activa = $('.contenedorImgs .imagen.activa');
    var index;
    if($(this).hasClass('av')){
      index = activa.next().index();
      if(index < 0) index = 0;
    }else{
      index = activa.prev().index();
      if(index < 0) index = imgs.length - 1;
    }
    $('.fullPreview').addClass('anim');
    setTimeout(()=>{
      $('.contenedorImgs .imagen.activa').removeClass('activa');
      $('.contenedorImgs .imagen').eq(index).addClass('activa');
      $('.fullPreview').find('.blur').css('background-image', 'url('+imgs[index].url+')');
      $('.fullPreview').find('img').attr('src', imgs[index].url);
      $('.fullPreview').find('.titulo').text(imgs[index].titulo);
      $('.fullPreview').find('.desc').text(imgs[index].descripcion);
      $('.fullPreview').removeClass('anim');
    }, 500)
  })
})
</script>