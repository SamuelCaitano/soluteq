<head>
  <style>
    .message-container {
      border: 1px solid #eeeff0;
      font-weight: normal;
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #555559;
      background-color: white;
      font-size: 16px;
      line-height: 26px;
      max-width: 600px;
    }

    /* ========= Header ========= */
    .message-header {
      display: flex;
      justify-content: center;
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
      background-color: #fff;
      border: none;
      border-bottom: 4px solid;
      border-image-slice: 1;
      border-image-source: linear-gradient(to left, #0d6efd, #18CC57, #fcb900);
    }

    .message-logo {
      width: 100%;
      display: flex;
      justify-content: center
    }

    .message-logo img {
      line-height: 1;
      width: 80%;
    }

    /* ========= Main ========== */
    .message-main {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 20px;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
      vertical-align: top;
      background-color: white;
      border-top: none;
    }

    .message-main table {
      font-weight: normal;
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* ======== Title and Subtitle =========== */
    .message-header-container .title,
    .message-header-container .subtitle {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-weight: bold;
      text-align: center;
    }

    .message-header-container .title {
      padding: 0;
      font-size: 28px;
      line-height: 34px;
    }

    .message-header-container .subtitle {
      padding-top: 5px;
      font-size: 18px;
      line-height: 29px;
    }

    /* ========= Links ========== */
    .message-links {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
      background-color: #fff;
      text-align: center;
    }

    .message-links ul {
      list-style: none;
      padding: 0;
      margin: 0
    }

    .link-email {
      /* background: red; */
      display: flex;
      padding: 5px;
      /* border: 1px solid gray; */
      border-radius: 10px;
      align-items: center;
      margin-bottom: 5px;

    }

    .link-email:hover {
      background: whitesmoke;
    }

    .link-email i {
      width: 10%;
      color: #0d6efd;
      font-size: 20px
    }

    .link-email p {
      word-wrap: break-word;
    }

    .message-links ul .link-whatsapp {
      margin-top: 10px
    }

    .message-links ul .link-whatsapp a {
      color: #ffffff;
      background-color: #18CC57;
      border: 10px solid #18CC57;
      border-radius: 3px;
      text-decoration: none;
      margin-top: 10px
    }

    /* ========= Message Box Cliente =========== */
    .message-box-main {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
    }

    /* Link redes sociais */
    .message-social {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
    }

    .message-social table {
      font-weight: normal;
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .message-social table td {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 5px;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 26px;
    }

    /* =======  Footer ======== */
    .footer {
      display: flex;
      justify-content: center;
      background: #fff;
      border: none;
      border-top: 4px solid;
      border-image-slice: 1;
      border-image-source: linear-gradient(to left, #0d6efd, #18CC57, #fcb900);
    }

    .footer td {
      border-collapse: collapse;
      border: 0;
      margin: 0;
      padding: 15px;
      -webkit-text-size-adjust: none;
      color: #555559;
      font-family: Arial, sans-serif;
      font-size: 12px;
      line-height: 16px;
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">
  <table class="message-container">
    {{-- Header --}}
    <tr>
      <td colspan="4" class="message-header">
        {{-- adicionar link principal e link da logo--}}
        <a class="message-logo" href="https://tenable.com"><img
            src="http://rigoenergia.com.br/wp-content/uploads/2018/10/Logo-retangular-transparente.png"
            alt="Rigo Energia"></a>
      </td>
    </tr>
    {{-- Main --}}
    <tr>
      <td class="message-main">
        <table>
          {{-- Title and Subtitle --}}
          <tr>
            <td class="message-header-container">
              <div id="main_title">
                <h1 class="title">
                  Rigo Energia, o futuro é hoje!</h1>
                <h2 class="subtitle">
                  Energia fotovoltaica é hoje, renovação e evolução, gerando energia elétrica de forma eficiente e
                  econômica para seu bolso e sustentabilidade para o planeta. - Rigo Energia - Soluções em geração
                  de energia por fontes renováveis</h2>
              </div>
            </td>
          </tr>
          {{-- Links importantes da Rigo --}}
          <tr>
            <td class="message-links">
              <div>
                <hr size="1" color="#eeeff0">
                <ul>
                  {{-- Endereço --}}
                  <li class="link-email" style=""> 
                    <p>R. José do Patrocinio, 597 - Vila Xavier, Araraquara - SP, 14810-150</p>
                  </li>
                  {{-- Horario --}}
                  <li class="link-email" style=""> 
                    <p><b>Segunda á Sexta</b> das 8:00 ás 18:00</p>
                  </li>
                  {{-- Site --}}
                  <li class="link-email" style=""> 
                    {{-- adicionar site correto --}}
                    <p>rigo.com.br</p>
                  </li>
                  {{-- Telefone --}}
                  <li class="link-email"> 
                    {{-- Adicionar o telefone correto --}}
                    <p>(16) 99779-2512</p>
                  </li>
                  <li class="link-whatsapp">
                    <a href="#"> WhatsApp</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          {{-- Mensagem do cliente e seus dados --}}
          <tr>
            <td class="message-box-main">
              <hr size="1" color="#eeeff0">
              <div>
                Olá Rigo Energia!<br><br>

                Meu nome é <strong>{{ $data['name'] }}</strong><br>
                <strong>E-mail:</strong> {{ $data['email'] }}<br>
                <strong>Tipo de locação:</strong> {{ $data['location'] }}<br>
                <strong>Valor da conta mensal:</strong> {{ $data['price'] }}<br><br>
                {{-- validar se será requerido o telefone no formulario --}}

                Messagem: {{ $data['message'] }} 
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    {{-- Link das redes sociais --}}
    <tr>
      <td class="message-social" valign="top" align="center">
        <table>
          <tr>
            {{-- Site --}}
            <td>
              {{-- adicionar link do site --}}
              <a href="https://www.tenable.com/blog"><img
                  src="https://info.tenable.com/rs/tenable/images/rss-teal.png"></a>
            </td>
            {{-- Twitter --}}
            <td>
              {{-- adicionar link do twitter --}}
              <a href="https://twitter.com/tenablesecurity"><img
                  src="https://info.tenable.com/rs/tenable/images/twitter-teal.png"></a>
            </td>
            {{-- Facebook --}}
            <td>
              {{-- adicionar link do facebook --}}
              <a href="https://www.facebook.com/Tenable.Inc"><img
                  src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a>
            </td>
            {{-- Linkedin --}}
            <td>
              {{-- adicionar link do linkedin --}}
              <a href="https://www.linkedin.com/company/tenable-network-security"><img
                  src="https://info.tenable.com/rs/tenable/images/linkedin-teal.png"></a>
            </td>
            {{-- Gmial --}}
            <td>
              {{-- adicionar link do gmail --}}
              <a href="https://plus.google.com/107158297098429070217"><img
                  src="https://info.tenable.com/rs/tenable/images/google-teal.png"></a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    {{-- Footer --}}
    <tr class="footer">
      <td>
        <div>
          <b>Rigo Loteamentos De Imóveis e Soluções
            em Energia</b>
        </div>
      </td>
    </tr>
  </table>
</body>