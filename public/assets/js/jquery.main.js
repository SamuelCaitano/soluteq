$(function () {
    /******************START FUNÇÕES******************/

    //getEndereco();

    /********************COMPORTAMENTO******************/

    // Toggle Menu
    $('[js-toggle-menu]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('[js-menu]').toggleClass('ativo');
        $('body').toggleClass('noscroll');

        /*if ($('[js-sub-menu] > ul.ativo').length > 0) {
            $('[js-sub-menu] > ul').removeClass('ativo');
        }*/
    });

    /*$('[js-sub-menu] > a').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).siblings('ul').addClass('ativo');
    });

    $('[js-sub-menu] > ul .voltar').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).closest('ul').removeClass('ativo');
    });*/

    $('body, html').on('click', function (e) {
        $('[js-menu]').removeClass('ativo');
        $('body').removeClass('noscroll');
        $('[js-lista-categorias]').removeClass('ativo');
        $('[js-botao-filtro-blog]').removeClass('ativo');
    });

    /*$('[js-trocar-bloco]').on('click', function(e){
        let bloco = $(this).attr('js-trocar-bloco');
        $(this).closest('[js-bloco-ativo]').attr('js-bloco-ativo', bloco);
    });*/

    /* função para abrir o bloco de compartilhamento nativo */
    btnCompartilhar = $('[js-btn-compartilhar]');
    tituloCompartilhar = btnCompartilhar.data('titulo');
    legendaCompartilhar = btnCompartilhar.data('legenda');
    urlCompartilhar = btnCompartilhar.data('url');

    let shareData = {
        title: tituloCompartilhar,
        text: legendaCompartilhar,
        url: urlCompartilhar,
    }

    btnCompartilhar.on('click', function (e) {
        e.preventDefault();
        navigator.share(shareData);
    });

    // Voltar a página
    $('[js-voltar]').on('click', function (e) {
        e.preventDefault();
        history.go(-1);
    });

    // Voltar para o topo
    $('[js-ancora-topo]').on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 600);
    });

    // Scroll âncora suave
    $('[js-ancora-suave]').on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top - 100 }, 500);
    });

    $(document).on('input', '[bravorange]', function () {
        var elemento = $(this);
        var raiz = elemento.parent();
        raiz.find('[saida="' + elemento.index() + '"]').html(elemento.val().toReal());
    });

    //fixar menu no topo
    /* var menu = $('header').offset().top;
    $(window).scroll(function () {
        if ($(window).scrollTop() > menu) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
    });*/

    $('[js-botao-filtro-blog]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('ativo');
        $('[js-lista-categorias]').toggleClass('ativo');
    });

    /**********************AÇÃO***********************/

    // Forms

    //estilização do input-file
    $('[type="file"]').on('change', function (e) {
        var elemento = $(this);
        elemento.prev().html(e.target.files[0].name);
        elemento.parent().addClass('cheio');
    });

    $('[type=file]').on('change', function (e) {
        let elemento = $(this);
        let nome = elemento.attr('name');
        let pai = elemento.closest('label');
        let raiz = pai.closest('form');
        let ajaxurl = $('#url_ajax').val();

        if (ajaxurl == '') {
            pai.find('span').html(e.target.files[0].name);
            pai.addClass('cheio');
        } else {
            raiz.find('[type=submit]').attr('disabled', 'disabled');

            elemento.simpleUpload(ajaxurl + '?action=upload&name=' + nome, {
                start: function () {
                    pai.find('span').html('Enviando...');
                },
                success: function (retorno) {
                    raiz.find(`[name="${nome}_url"]`).remove();
                    raiz.append(`<input type='hidden' name="${nome}_url" value="${retorno}">`);
                    raiz.find('[type=submit]').removeAttr('disabled');

                    pai.find('span').html(e.target.files[0].name);
                    pai.addClass('cheio');
                }
            });
        }
    });

    $('.check-item [mostrar]').on('click', function () {
        let radio = $(this);
        radio.toggleClass('active');
    });

    $('[js-formulario]').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let elemento = form.find('[type="submit"]');
        let raiz = elemento.closest('[js-form]');

        raiz.find('.obrigatorio').removeClass('obrigatorio');
        form.find('[js-form-erro]').addClass('hidden');

        $.each(raiz.find('[required]'), function () {
            let campo = $(this);
            if (campo.val() == '') {
                campo.focus();
                campo.parent().addClass('obrigatorio');
                return false;
            }
        });

        if (raiz.find('.obrigatorio').length > 0) {
            return false;
        }

        var ajaxurl = $('#url_ajax').val();

        var data = form.serializeArray();

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: data,
            beforeSend: function () {
                elemento.attr('disabled', 'disabled').data('original', elemento.text()).text('Aguarde...');
            },
            success: function (retorno) {
                if (retorno != '1') {
                    form.find('[js-form-erro]').html(retorno).removeClass('hidden');
                    elemento.removeAttr('disabled').text(elemento.data('original'));
                } else {
                    form.addClass('hidden');
                    raiz.find('[js-form-sucesso]').removeClass('hidden');
                }
            }
        });
    });

    $('[js-formulario-newsletter]').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let elemento = form.find('[type="submit"]');
        let raiz = elemento.closest('[js-form-newsletter]');

        raiz.find('.obrigatorio').removeClass('obrigatorio');

        $.each(raiz.find('[required]'), function () {
            let campo = $(this);
            if (campo.val() == '') {
                campo.focus();
                campo.parent().addClass('obrigatorio');
                return false;
            }
        });

        if (raiz.find('.obrigatorio').length > 0) {
            return false;
        }

        var ajaxurl = $('#url_ajax').val();

        var data = form.serializeArray();

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: data,
            beforeSend: function () {
                elemento.attr('disabled', 'disabled').data('original', elemento.text()).text('Aguarde...');
            },
            success: function (retorno) {
                if (retorno != '1') {
                    elemento.removeAttr('disabled').text(elemento.data('original'));
                    raiz.find('[js-form-erro]').removeClass('hidden');
                } else {
                    elemento.text(elemento.data('original'))
                    form.find('input').attr('readonly', 'readonly');
                    raiz.find('[js-form-sucesso]').removeClass('hidden');
                }
            }
        });
    });

    $('[js-carregar-mais]').on('click', function (e) {
        e.preventDefault();
        let elemento = $(this);
        let ajaxurl = $('#url_ajax').val();
        let dados = {};

        dados.action = 'carregar_mais';
        dados.pagina = parseInt(elemento.attr('pagina') == undefined ? 1 : elemento.attr('pagina'));
        dados.arquivo = elemento.attr('arquivo');
        dados.args = JSON.parse(elemento.attr('args'));

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: dados,
            success: function (retorno) {
                let top = $(window).scrollTop();

                retorno = JSON.parse(retorno);

                $(elemento.attr('destino')).append(retorno.html);

                $(window).scrollTop(top);

                if (!retorno.acabou) {
                    elemento.attr('pagina', dados.pagina + 1);
                } else {
                    elemento.remove();
                }
            }
        });
    });

    $('input, textarea').on('focus', function (e) {
        $(this).parent().removeClass('obrigatorio');
    });

    $('input, textarea').on('blur', function (e) {
        let elemento = $(this);
        if (elemento.val() != '') {
            elemento.parent().removeClass('obrigatorio');
        }
    });

    $('.alerta-news__fechar').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.alerta-news').fadeOut();
    });

    $(document).on('click', '[js-simular]', function (e) {
        e.preventDefault();

        let elemento = $(this);
        let ajaxurl = $('#url_ajax').val();
        let raiz = elemento.closest('[js-form]');

        raiz.find('.obrigatorio').removeClass('obrigatorio');
        raiz.find('[js-form-erro]').addClass('hidden');

        $.each(raiz.find('[required]'), function () {
            let campo = $(this);
            if (campo.val() == '') {
                campo.focus();
                campo.parent().addClass('obrigatorio');
                return false;
            }
        });

        if (raiz.find('.obrigatorio').length > 0) {
            return false;
        }

        let dados = {};

        dados.cep = raiz.find('[name="cep"]').val();
        dados.valor = raiz.find('[name="valor"]').val();
        dados.valor_tarifa = raiz.find('[name="valor_tarifa"]').val();

        var modal = $('#modal-calculadora');
        if (raiz.attr('js-form') == 'body') {

            modal.find('[name="cep"]').val(dados.cep);
            modal.find('[name="valor"]').val(dados.valor);
            modal.find('[name="valor_tarifa"]').val(dados.valor_tarifa);
        }

        $.ajax({
            url: ajaxurl + '?action=calcular_simulacao',
            type: 'post',
            data: dados,
            beforeSend: function () {
                elemento.attr('disabled', 'disabled');
            },
            success: function (retorno) {
                retorno = retorno.data;

                modal.find('[js-economia]').html('R$ ' + retorno.economia_anual.toReal());
                modal.find('[js-economia-mensal]').html(retorno.valor_mes.toReal());
                modal.find('[js-potencia-instalada]').html(retorno.potencia_instalada);
                modal.find('[js-area]').html(retorno.area.toReal());
                modal.find('[js-modulos]').html(retorno.qtd_modulos);
                modal.find('[js-producao-mensal]').html(retorno.geracao_mes);
                modal.find('[js-payback]').html(retorno.payback);
                modal.find('[js-taxa-banco]').html(retorno.taxa_banco.toReal());
                modal.find('[js-qtd-prestacoes]').html(retorno.qtd_prestacoes);
                modal.find('[js-prestacao-valor]').html(retorno.valor_prestacao.toReal());
                modal.find('[js-valor-sistema]').html(retorno.valor_sistema.toReal());
                modal.find('[js-investimento]').html(retorno.investimento.toReal());

                if (Fancybox.getInstance() == null) {
                    Fancybox.show([{ src: "#modal-calculadora" }], calculadora);
                }

                elemento.removeAttr('disabled');
            }
        });
    });

    $('[name="cep"]').on('change', function (e) {
        let elemento = $(this);

        getEndereco(elemento.val());
    });


    // Fim forms


    /******************INICIALIZAÇÃO******************/

    var sticky = new Sticky('[js-sticky]');

    //Configurações do fancybox
    let calculadora = {
        lang: 'pt',
        animated: 'fade',
        Thumbs: false,
        Toolbar: true,
        autoFocus: false,
        trapFocus: false,
        placeFocusBack: false,
        mainClass: 'modal-bravo modal-calc',
        dragToClose: false,
        click: false,

        Image: {
            zoom: false,
            click: false,
            wheel: "slide",
        },

        l10n: {
            CLOSE: 'Fechar',
            THUMBS: 'Miniaturas',
            FULLSCREEN: 'Tela cheia',
            PLAY_START: 'Transição automática',
            NEXT: 'Próximo',
            PREV: 'Anterior',
        },
    }

    // Inicializa o Fancybox
    Fancybox.bind('[data-fancybox]', calculadora);

    // Fução para fechar o modal (pode ser colocar em <a> ou <button>)
    // utilizado $(document) porque funcionará dentro de um ajax também
    $(document).on('click', '[js-fechar-fancybox]', function (e) {
        e.preventDefault();
        Fancybox.close();
    });

    $(document).on('click', '[data-fancybox-sibling]', function (e) {
        e.preventDefault();
        $.fancybox.open($(this).siblings().first());
    });

    // Swiper Home
    var swiper = new Swiper(".swiper-home", {
        spaceBetween: 0,
        effect: 'slide',
        loop: true,
        lazy: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return `<span class="${className}"><svg viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="21" cy="21" r="20.5"></circle> <circle class="ativo" cx="21" cy="21" r="20.5"></circle> </svg></span>`;
            },
        },
        navigation: {
            nextEl: '.swiper-btn-slide-next',
            prevEl: '.swiper-btn-slide-prev',
        },
        // breakpoints: {
        //     320: {
        //         slidesPerView: 1,
        //         spaceBetween: 10
        //     },
        //     480: {
        //         slidesPerView: 2,
        //         spaceBetween: 20
        //     },
        //     640: {
        //         slidesPerView: 3,
        //         spaceBetween: 30
        //     }
        // }
    });

    // Swiper projetos
    var swiper = new Swiper(".swiper-projeto", {
        spaceBetween: 0,
        effect: 'slide',
        loop: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Swiper depoimentos
    var swiper = new Swiper(".swiper-depoimentos", {
        spaceBetween: 0,
        effect: 'slide',
        loop: false,
        autoHeight: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Swiper linha do tempo
    var swiper = new Swiper(".swiper-tempo", {
        slidesPerView: 1,
        grid: {
            rows: 2,
        },
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },        
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
        }
    });

    /*MÁSCARA*/
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }, spOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('[mascara="telefone"]').mask(SPMaskBehavior, spOptions);
    $('[mascara="cnpj"]').mask('00.000.000/0000-00');
    $('[mascara="cpf"]').mask('000.000.000-00');
    $('[mascara="cep"]').mask('00000-000');
    $('[mascara="data"]').mask('00/00/0000');
    $('[mascara="dinheiro"]').mask('#.##0,00', { reverse: true });

    //parallax
    $('[data-speed-factor]').each(function () {
        var speedFactor = parseFloat($(this).data('speed-factor')) || 0.1;
        $(this).parallax(speedFactor);
    });

});

function getEndereco(cep) {
    var cep = cep.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {
            $.ajax({
                url: "https://viacep.com.br/ws/" + cep + "/json",
                type: 'get',
                success: function (retorno) {

                    if (!retorno.erro) {
                        var endereco = retorno.logradouro + ', ' + retorno.bairro + ', ' + retorno.localidade + ', ' + retorno.uf;
                    } else {
                        var endereco = 'CEP não encontrado.'
                    }

                    $('[js-endereco]').html(endereco);
                }
            });
        } else {
            var endereco = 'CEP não encontrado.';

            $('[js-endereco]').html(endereco);
        }
    }
};

/*
var name = "usuarioinsta";
var numFotos = 4;
$.get("https://www.instagram.com/" + name + "/?__a=1/", function (html) {
    if (html) {
        var regex = /_sharedData = ({.*);<\/script>/m,
            json = JSON.parse(regex.exec(html)[1]),
            edges = json.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;
        edges = edges.slice(0, numFotos);
        $.each(edges, function (n, edge) {
            var node = edge.node;
            $('[js-instagram]').append(
                $('<a/>', {
                    href: 'https://instagr.am/p/' + node.shortcode,
                    target: '_blank',
                    class: 'insta__item'
                }).css({
                    backgroundImage: 'url(' + node.thumbnail_src + ')'
                })
            );
        });
    }
}); */

Number.prototype.toReal = function () {
    return numeroParaMoeda(this);
};

String.prototype.toReal = function () {
    return numeroParaMoeda(this);
};

function numeroParaMoeda(n, c, d, t) {
    c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}