<?php


$user_id = $_settings->userdata('id');
$user_type = $_settings->userdata('type');
$logo = validate_image($_settings->info('logo'));
$favicon = validate_image($_settings->info('favicon'));
$enable_password = $_settings->info('enable_password');
$enable_pixel = $_settings->info('enable_pixel');
$enable_ga4 = $_settings->info('enable_ga4');
$google_ga4_id = $_settings->info('google_ga4_id');
$enable_gtm = $_settings->info('enable_gtm');
$google_gtm_id = $_settings->info('google_gtm_id');
$facebook_access_token = $_settings->info('facebook_access_token');
$facebook_pixel_id = $_settings->info('facebook_pixel_id');
$affiliate = $_settings->userdata('is_affiliate');
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
$path_name = $parts['path'];
$path = explode('/', $path_name);
$page = $path[1];

if (isset($parts['query'])) {
    parse_str($parts['query'], $query);
    $ref = $query['ref'];

    if (isset($ref)) {
        $_SESSION['ref'] = $ref;
    }
}

echo '<html translate="no">' . "\r\n" . '<html lang="pt-br">' . "\r\n" . '<head>' . "\r\n" . '   <meta charset="utf-8">' . "\r\n" . '   <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\r\n" . '   <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">' . "\r\n" . '   ';
echo exibir_cabecalho($conn);
echo '   ';

if ($favicon) {
    echo '   <link rel="shortcut icon" href="';
    echo $favicon;
    echo '" />' . "\r\n" . '   <link rel="apple-touch-icon" sizes="180x180" href="';
    echo validate_image($_settings->info('favicon'));
    echo '"> ' . "\r\n" . '   <link rel="icon" type="image/png" sizes="32x32" href="';
    echo validate_image($_settings->info('favicon'));
    echo '">' . "\r\n" . '   <link rel="icon" type="image/png" sizes="16x16" href="';
    echo validate_image($_settings->info('favicon'));
    echo '">' . "\r\n" . '   ';
}

echo '   <meta name="theme-color" content="#000000">' . "\r\n" . '   <link rel="stylesheet" href="';
echo BASE_URL;
echo 'assets/css/style.css">' . "\r\n" . '   <script src="';
echo BASE_URL;
echo 'includes/jquery/jquery.min.js"></script>   ' . "\r\n" . '   <script> var _base_url_ = \'';
echo BASE_URL;
echo '\'; </script>' . "\r\n" . '   ';
if (($enable_pixel == 1) && !empty($facebook_pixel_id)) {
    echo '   <script>' . "\r\n" . '      !function (f, b, e, v, n, t, s) {' . "\r\n" . '         if (f.fbq) return; n = f.fbq = function () {' . "\r\n" . '               n.callMethod ?' . "\r\n" . '               n.callMethod.apply(n, arguments) : n.queue.push(arguments)' . "\r\n" . '         };' . "\r\n" . '         if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = \'2.0\';' . "\r\n" . '         n.queue = []; t = b.createElement(e); t.async = !0;' . "\r\n" . '         t.src = v; s = b.getElementsByTagName(e)[0];' . "\r\n" . '         s.parentNode.insertBefore(t, s)' . "\r\n" . '      }(window, document, \'script\',' . "\r\n" . '         \'https://connect.facebook.net/en_US/fbevents.js\');' . "\r\n" . '      fbq(\'init\', \'';
    echo $facebook_pixel_id;
    echo '\');' . "\r\n" . '      fbq(\'track\', \'PageView\');' . "\r\n" . '   </script>' . "\r\n" . '   <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=';
    echo $facebook_pixel_id;
    echo '&ev=PageView&noscript=1" /></noscript>' . "\r\n" . '   ';
}

echo '   ';
if (($enable_ga4 == 1) && !empty($google_ga4_id)) {
    echo '   <script async src="https://www.googletagmanager.com/gtag/js?id=';
    echo $google_ga4_id;
    echo '"></script>' . "\r\n" . '   <script>' . "\r\n" . '      window.dataLayer = window.dataLayer || [];' . "\r\n" . '      function gtag(){dataLayer.push(arguments);}' . "\r\n" . '      gtag(\'js\', new Date());' . "\r\n\r\n" . '      gtag(\'config\', \'';
    echo $google_ga4_id;
    echo '\');' . "\r\n" . '   </script>' . "\r\n" . '   ';
}

echo '   ';
if (($enable_gtm == 1) && !empty($google_gtm_id)) {
    echo '      <!-- Google Tag Manager -->' . "\r\n" . '      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':' . "\r\n" . '      new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],' . "\r\n" . '      j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=' . "\r\n" . '      \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);' . "\r\n" . '      })(window,document,\'script\',\'dataLayer\',\'';
    echo $google_gtm_id;
    echo '\');</script>' . "\r\n" . '      <!-- End Google Tag Manager -->' . "\r\n" . '   ';
}

echo '</head>' . "\r\n" . '<body>' . "\r\n";
if (($enable_gtm == 1) && !empty($google_gtm_id)) {
    echo '   <!-- Google Tag Manager (noscript) -->' . "\r\n" . '   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=';
    echo $google_gtm_id;
    echo '"' . "\r\n" . '   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>' . "\r\n" . '   <!-- End Google Tag Manager (noscript) -->' . "\r\n";
}

echo '<div id="__next">' . "\r\n" . '   <header class="header-app-header ' . $page . ' ">' . "\r\n" . '      <div class="header-app-header-container">' . "\r\n" . '         <div class="container container-600 font-mdd">' . "\r\n" . '            <div style="text-align-last: justify; padding: 10 0 10 0;">' . "\r\n" . '                <button type="button" aria-label="Menu" class="btn btn-link text-white font-lgg ps-0" data-bs-toggle="modal" data-bs-target="#mobileMenu" style="margin-top:5px">' . "\r\n" . '                    <i class="bi bi-filter-left"></i>' . "\r\n" . '                </button>' . "\r\n" . '                <a class="flex-grow-1 text-center" href="/">' . "\r\n" . '                ';

if ($logo) {
    echo '                     <img src="';
    echo $logo;
    echo '" class="header-app-brand"></a>' . "\r\n" . '                  ';
} else {
    echo '                     <img src="';
    echo BASE_URL;
    echo 'assets/img/logo.png" class="header-app-brand"></a>' . "\r\n" . '                  ';
}

echo '                </a>' . "\r\n" . '                ';

if (CONTACT_TYPE == '1') {
    echo '                <a class="btn btn-link text-white pe-0 text-right text-decoration-none" href="/contato">' . "\r\n" . '                ';
} else {
    echo '                <a class="btn btn-link text-white pe-0 text-right text-decoration-none" href="';
    echo 'https://api.whatsapp.com/send/?phone=55' . $_settings->info('phone');
    echo '">' . "\r\n" . '                ';
}

echo '                    <div class="suporte d-flex justify-content-end opacity-50"><i class="bi bi-chat-right-dots-fill"></i></div>' . "\r\n" . '                    <div class="suporte text-yellow font-xss">Suporte</div>' . "\r\n" . '                </a>' . "\r\n" . '            </div>' . "\r\n" . '               </div>' . "\r\n" . '            </header>' . "\r\n" . '            <div class="black-bar ' . $page . ' fuse"></div>' . "\r\n" . '            <menu id="mobileMenu" class="modal fade modal-fluid" tabindex="-1" aria-labelledby="mobileMenuLabel" aria-hidden="true">' . "\r\n" . '               <div class="modal-dialog modal-fullscreen">' . "\r\n" . '                  <div class="modal-content bg-cor-primaria">' . "\r\n" . '                     <header class="app-header app-header-mobile--show">' . "\r\n" . '                        <div class="container container-600 h-100 d-flex align-items-center justify-content-between">' . "\r\n\r\n" . '                         ';

if ($logo) {
    echo '                           <a href="/">' . "\r\n" . '                              <img src="';
    echo $logo;
    echo '" class="app-brand img-fluid">' . "\r\n" . '                           </a>' . "\r\n" . '                        ';
} else {
    echo '                           <a href="/">' . "\r\n" . '                              <img src="';
    echo BASE_URL;
    echo 'assets/img/logo.png" class="app-brand img-fluid">' . "\r\n" . '                           </a>' . "\r\n" . '                        ';
}

echo "\r\n" . '                        <div class="app-header-mobile"><button type="button" class="btn btn-link text-white menu-mobile--button pe-0 font-lgg" data-bs-dismiss="modal" aria-label="Fechar"><i class="bi bi-x-circle"></i></button></div>' . "\r\n" . '                     </div>' . "\r\n" . '                  </header>' . "\r\n" . '                  <div class="modal-body">' . "\r\n" . '                     <div class="container container-600">' . "\r\n" . '                        ';

if ($user_id) {
    echo '                           <div class="card-usuario mb-2">' . "\r\n" . '                              <picture>' . "\r\n" . '                                 <img src="';
    echo ($_settings->userdata('avatar') ? validate_image($_settings->userdata('avatar')) : BASE_URL . 'assets/img/avatar.png');
    echo '" class="img-fluid img-perfil">' . "\r\n" . '                              </picture>' . "\r\n" . '                              <div class="card-usuario--informacoes">' . "\r\n" . '                               <h3>Olá, ';
    $firstname = ucwords($_settings->userdata('firstname'));
    $lastname = ucwords($_settings->userdata('lastname'));
    echo $firstname . ' ' . $lastname . '';
    echo '                            </h3>' . "\r\n" . '                            <div class="email font-xss saldo-value"></div>' . "\r\n" . '                         </div>' . "\r\n" . '                         <div class="card-usuario--sair">' . "\r\n" . '                            <a href="';
    echo BASE_URL . 'logout?' . $_SERVER['REQUEST_URI'];
    echo '"> ' . "\r\n" . '                              <button type="button" class="btn btn-link text-center text-white-50 ps-1 pe-0 pt-0 pb-0 font-lg">' . "\r\n" . '                                 <i class="bi bi-box-arrow-left"></i>' . "\r\n" . '                              </button>' . "\r\n" . '                           </a>' . "\r\n" . '                        </div>' . "\r\n" . '                     </div>' . "\r\n" . '                  ';
}

echo "\r\n" . '                  <nav class="nav-vertical nav-submenu font-xs mb-2">' . "\r\n" . '                     <ul>' . "\r\n\r\n" . '                        <li>' . "\r\n" . '                           <a class="text-white" alt="Página Principal" href="/"><i class="icone bi bi-house"></i><span>Início</span></a>' . "\r\n" . '                        </li>' . "\r\n\r\n" . '                        <li>' . "\r\n" . '                           <a class="text-white" alt="Campanhas" href="/campanhas"><i class="icone bi bi-megaphone"></i><span>Campanhas</span></a>' . "\r\n" . '                        </li>' . "\r\n\r\n" . '                        <li>' . "\r\n" . '                           <a class="text-white" alt="Meus Números" href="/meus-numeros"><i class="icone bi bi-card-list"></i><span>Meus números</span>' . "\r\n" . '                           </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';

if ($user_id) {
    echo '   ' . "\r\n" . '                          <li>' . "\r\n" . '                             <a alt="Atualizar cadastro" class="text-white" href="/user/atualizar-cadastro"><i class="icone bi bi-person-circle"></i><span>Cadastro</span>' . "\r\n" . '                             </a>' . "\r\n" . '                          </li>' . "\r\n\r\n" . '                          <li>' . "\r\n" . '                           <a alt="Minhas compras" class="text-white" href="/user/compras"><i class="icone bi bi-cart-check"></i><span>Minhas compras</span>' . "\r\n" . '                           </a>' . "\r\n" . '                        </li>' . "\r\n" . '                         ';

    if ($enable_password == 1) {
        echo '                        <li><a alt="Alterar senha" class="text-white" href="/user/alterar-senha"><i class="icone bi bi-key-fill"></i><span>Alterar senha</span></a></li>' . "\r\n" . '                         ';
    }

    echo '                     ';
} else {
    echo '                       <li>' . "\r\n" . '                        <a alt="Cadastre-se" class="text-white" href="/cadastrar"><i class="icone bi bi-box-arrow-in-right"></i><span>Cadastro</span>' . "\r\n" . '                        </a>' . "\r\n" . '                     </li>' . "\r\n\r\n" . '                  ';
}

echo "\r\n" . '                  <li>' . "\r\n" . '                     <a alt="Ganhadores" class="text-white" href="/ganhadores"><i class="icone bi bi-trophy"></i><span>Ganhadores</span>' . "\r\n" . '                     </a>' . "\r\n" . '                  </li>' . "\r\n" . '                  ' . "\r\n" . '                  ';

if (!!$_settings->info('terms')) {
    echo '                     <li>' . "\r\n" . '                        <a alt="Termos de Uso" class="text-white" href="/termos-de-uso"><i class="icone bi bi-blockquote-right"></i><span>Termos de uso</span>' . "\r\n" . '                        </a>' . "\r\n" . '                     </li>' . "\r\n" . '                  ';
}

echo '                  ' . "\r\n" . '                  ';

if (CONTACT_TYPE == 1) {
    echo '                  <li class="col-contato-display">' . "\r\n" . '                     <a alt="Entre em contato conosco" class="text-white" href="/contato"><i class="icone bi bi-envelope"></i><span>Entrar em contato</span>' . "\r\n" . '                     </a>' . "\r\n" . '                  </li>' . "\r\n" . '                  ';
} else {
    echo '                  <li class="col-contato-display">' . "\r\n" . '                     <a alt="Entre em contato conosco" class="text-white" href="';
    echo 'https://api.whatsapp.com/send/?phone=55' . $_settings->info('phone');
    echo '"><i class="icone bi bi-envelope"></i><span>Entrar em contato</span>' . "\r\n" . '                     </a>' . "\r\n" . '                  </li>' . "\r\n" . '                  ';
}

echo "\r\n" . '                  ';

if ($affiliate) {
    echo '                     <li class="col-contato-display">' . "\r\n" . '                        <a alt="Painel de afiliado" class="text-white" href="/user/afiliado"><i class="icone bi bi-wallet"></i></i><span>Painel de afiliado</span>' . "\r\n" . '                        </a>' . "\r\n" . '                     </li>' . "\r\n" . '                  ';
}

echo "\r\n\r\n" . '               </ul>' . "\r\n" . '            </nav>' . "\r\n" . '            ';

if (!$user_id) {
    echo '               <div class="text-center">' . "\r\n" . '                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary w-100 rounded-pill"><i class="icone bi bi-box-arrow-in-right"></i> Entrar</button>' . "\r\n" . '               ';
} else {
    echo '                  <a href="';
    echo BASE_URL . 'logout?' . $_SERVER['REQUEST_URI'];
    echo '">' . "\r\n" . '                     <button type="button" class="btn btn-primary w-100 rounded-pill"><i class="icone bi bi-box-arrow-in-right"></i> Sair</button>' . "\r\n" . '                  </a>' . "\r\n\r\n" . '               ';
}

echo '            </div>' . "\r\n\r\n" . '         </div>' . "\r\n" . '      </div>' . "\r\n" . '      ';
$disabled = true;
if (!$user_id && !$disabled) {
    echo '         <div class="modal-footer text-white"><small class="text-uppercase">Compartilhe</small><ul class="lista-horizontal"><li><a href="" alt="Acompanhe nosso Facebook" class="rede-social-item"><i class="bi bi-facebook"></i></a></li><li><a href="" alt="Acompanhe nosso Instagram" class="rede-social-item"><i class="bi bi-instagram"></i></a></li><li><a href="" alt="Fale conosco no whatsapp" class="rede-social-item"><i class="bi bi-whatsapp"></i></a></li></ul></div>' . "\r\n" . '      ';
}

echo '   </div>' . "\r\n" . '</div>' . "\r\n" . '</menu>' . "\r\n" . '<div class="modal fade" id="modal-contas-bancarias">' . "\r\n" . '   <div class="modal-dialog modal-dialog-centered">' . "\r\n" . '      <div class="modal-content">' . "\r\n" . '         <div class="modal-header">' . "\r\n" . '            <h5 class="modal-title">Contas bancárias</h5>' . "\r\n" . '            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>' . "\r\n" . '         </div>' . "\r\n" . '         <div class="modal-body pb-1">' . "\r\n" . '            <p>Faça sua transferência e anexe o comprovante.</p>' . "\r\n" . '            <div id="contas-group-collapse"></div>' . "\r\n" . '         </div>' . "\r\n" . '      </div>' . "\r\n" . '   </div>' . "\r\n" . '</div>';
