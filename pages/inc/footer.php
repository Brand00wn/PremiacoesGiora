<?php
// Decodded

$enable_footer = $_settings->info('enable_footer');
$enable_password = $_settings->info('enable_password');
$enable_email = $_settings->info('enable_email');
$enable_cpf = $_settings->info('enable_cpf');
$enable_two_phone = $_settings->info('enable_two_phone');
$text_footer = $_settings->info('text_footer');
$whatsapp_footer = $_settings->info('whatsapp_footer');
$instagram_footer = $_settings->info('instagram_footer');
$facebook_footer = $_settings->info('facebook_footer');
$twitter_footer = $_settings->info('twitter_footer');
$youtube_footer = $_settings->info('youtube_footer');

if ($enable_footer == '1') {
	echo '   <style>' . "\r\n" . ' .container-fluid.rodape {background: var(--incrivel-primaria);text-align: center;color: #6e6e6e;}.container-fluid.rodape .col-md-12.col-12.font-xs a{color:#eee;font-weight: bold;}.app-title-footer {font-weight: 100;font-size: 18px;}li.spacing-icon {padding: 10px;}.spacing-icon a{color:var(--incrivel-primariaLink)}ul.social a.whatsapp1:hover {color: #00e676;}ul.social a.instagram1:hover {color: #bc3090;}ul.social a.facebook1:hover {color: #3c5a99;}ul.social a.twitter1:hover {color: #00acee;}ul.social a.youtube1:hover {color: #e22c29;}.text-center.links-rodape a {color: #eee;}' . "\r\n" . '</style>' . "\r\n" . '<div class="container-fluid rodape">' . "\r\n" . ' <div class="row justify-content-center align-items-center" style="padding:15px">' . "\r\n" . '  <div class="col-md-12 col-12">' . "\r\n" . '   <ul class="list-unstyled d-flex flex-wrap justify-content-center social" style="margin-bottom:0px;">' . "\r\n" . '    ';

	if ($whatsapp_footer) {
		echo '     <li class="spacing-icon">' . "\r\n" . '      <a class="whatsapp1" target="_blank" href="';
		echo $whatsapp_footer;
		echo '" title="WhatsApp">' . "\r\n" . '       <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">' . "\r\n" . '        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>' . "\r\n" . '    </svg>' . "\r\n" . '</a>' . "\r\n" . '</li>' . "\r\n";
	}

	echo "\r\n";

	if ($instagram_footer) {
		echo '<li class="spacing-icon">' . "\r\n" . '  <a class="instagram1" target="_blank" href="';
		echo $instagram_footer;
		echo '" title="Instagram">' . "\r\n" . '   <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">' . "\r\n" . '    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>' . "\r\n" . '</svg>' . "\r\n" . '</a>' . "\r\n" . '</li>' . "\r\n";
	}

	if ($facebook_footer) {
		echo '<li class="spacing-icon">' . "\r\n" . '  <a class="facebook1" target="_blank" href="';
		echo $facebook_footer;
		echo '" title="Facebook">' . "\r\n" . '   <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">' . "\r\n" . '    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>' . "\r\n" . '</svg>' . "\r\n" . '</a>' . "\r\n" . '</li>' . "\r\n";
	}

	if ($twitter_footer) {
		echo '<li class="spacing-icon">' . "\r\n" . '  <a class="twitter1" target="_blank" href="';
		echo $twitter_footer;
		echo '" title="Twitter">' . "\r\n" . '   <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">' . "\r\n" . '    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>' . "\r\n" . '</svg>' . "\r\n" . '</a>' . "\r\n" . '</li>' . "\r\n";
	}

	echo "\r\n";

	if ($youtube_footer) {
		echo '<li class="spacing-icon">' . "\r\n" . '  <a class="youtube1" target="_blank" href="';
		echo $youtube_footer;
		echo '" title="Youtube">' . "\r\n" . '   <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">' . "\r\n" . '    <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"></path>' . "\r\n" . '</svg>' . "\r\n" . '</a>' . "\r\n" . '</li>' . "\r\n";
	}

	echo '</ul>' . "\r\n" . '</div>' . "\r\n";

	if ($enable_footer) {
		echo '  <div class="col-md-12 col-12 font-xs">' . "\r\n" . '  <hr>' . "\r\n" . '   ';

		if ($text_footer) {
			echo blockHTML($text_footer);
		}
		else {
			echo '      <span style="color:var(--incrivel-primariaLink);">© Copyright ';
			echo date('Y');
			echo ' - ';
			echo $_settings->info('name');
			echo '. Todos os direitos reservados.</span><br>' . "\r\n" . '   ';
		}

		echo "\r\n" . '   <div class="row mt-2" style="color:var(--incrivel-primariaLink);">' . "\r\n" . '        <div class="col-12 font-xs"><a href="';
		echo "#";
		echo '" target="_blank"' . "\r\n" . '                class="font-weight-600 font-xs badge" rel="noreferrer" style="background-color:#0d6efd;">';
		
		echo '</a>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</p>' . "\r\n" . '</div>' . "\r\n";
	}

	echo '</div>' . "\r\n" . '</div>' . "\r\n";
}

echo "\r\n\r\n";

if (!$user_id) {
	echo '    <form class="modal fade" id="loginModal">' . "\r\n" . '        <div class="modal-dialog modal-sm modal-fullscreen-md-down modal-dialog-centered">' . "\r\n" . '           <div class="modal-content rounded-0">' . "\r\n" . '              <div class="modal-header">' . "\r\n" . '                 <h5 class="modal-title">Login</h5>' . "\r\n" . '                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>' . "\r\n" . '             </div>' . "\r\n" . '             <div class="modal-body app-form">' . "\r\n" . '                 <p class="text-muted font-xs">Por favor, entre com seus dados ou faça um cadastro.</p>' . "\r\n" . '                 <span id="aviso-login"></span>' . "\r\n" . '                 <div class="mb-2">' . "\r\n" . '                    <div class="form-floating font-weight-500">' . "\r\n" . '                        <input onkeyup="formatarTEL(this);" maxlength="15" name="phone" id="phone" required="" class="form-control text-black" placeholder="(00) 0000-0000" value="">' . "\r\n" . '                        <label for="username">Telefone</label>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                ';

	if ($enable_password == '1') {
		echo '                    <div class="mb-2">' . "\r\n" . '                        <div class="form-floating font-weight-500">' . "\r\n" . '                            <input type="password" name="password" id="password" class="form-control text-black" placeholder="Senha" required=""><label for="password">Senha</label></div>' . "\r\n" . '                        </div>' . "\r\n" . '                        <div class="btn btn-link btn-sm text-decoration-none mb-4 text-cardLink opacity-75"><a href="/recuperar-senha">Esqueci minha senha</a></div>' . "\r\n" . '                    ';
	}

	echo '                    <div class="d-flex justify-content-center align-items-center flex-column">' . "\r\n" . '                        <button type="submit" class="btn btn-wide-in btn-primary font-weight-500 rounded-pill mb-2">Continuar</button>' . "\r\n" . '                        <div class="btn btn-link btn-sm text-decoration-none"><a href="';
	echo BASE_URL . 'cadastrar';
	echo '">Criar conta</a></div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </form>' . "\r\n\r\n" . '    ';

	if (isset($slug)) {
		echo '        <span id="openCadastro" data-bs-toggle="modal" data-bs-target="#cadastroModal" style="display:none;"></span>' . "\r\n" . '        <form class="modal fade" id="cadastroModal">' . "\r\n" . '            <div class="modal-dialog modal-sm modal-fullscreen-md-down modal-dialog-centered">' . "\r\n" . '               <div class="modal-content rounded-0">' . "\r\n" . '                  <div class="modal-header">' . "\r\n" . '                     <h5 class="modal-title">Cadastro</h5>' . "\r\n" . '                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>' . "\r\n" . '                 </div>' . "\r\n" . '                 <div class="modal-body app-form">' . "\r\n" . '                     <p class="text-muted font-xs">Por favor, entre com seus dados para finalizar o cadastro.</p>' . "\r\n" . '                     <span id="aviso-login"></span>' . "\r\n" . '                     <div class="mb-2">' . "\r\n" . '                        <label for="firstname" class="form-label">Nome</label>' . "\r\n" . '                        <input type="text" name="firstname" class="form-control text-black" id="firstname" placeholder="Nome" required="">' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="mb-2">' . "\r\n" . '                        <label for="lastname" class="form-label">Sobrenome</label>' . "\r\n" . '                        <input type="text" name="lastname" class="form-control text-black" id="lastname" placeholder="Sobrenome" required="">' . "\r\n" . '                    </div>' . "\r\n" . '                    ';

		if ($enable_cpf == 1) {
			echo '                        <div class="mb-2">' . "\r\n" . '                            <label for="cpf" class="form-label">CPF</label>' . "\r\n" . '                            <!--<input name="cpf" pattern=".{14,}" class="form-control" id="cpf" value="" maxlength="14" placeholder="000.000.000-00" oninput="mascara(this)" required>-->' . "\r\n" . '                            <input id="cpf" name="cpf" type="text" class="form-control text-black" maxlength="14" pattern=".{14,}" placeholder="000.000.000-00" onkeydown="javascript: fMasc( this, mCPF );" required>' . "\r\n" . '                        </div>' . "\r\n" . '                    ';
		}

		echo "\r\n" . '                    <div class="mb-2">' . "\r\n" . '                        <label for="phone" class="form-label">Telefone</label>' . "\r\n" . '                        <input onkeyup="formatarTEL(this);" maxlength="15" name="phone" id="phone" required="" class="phone form-control text-black" placeholder="(00) 0000-0000" value="">' . "\r\n" . '                    </div>' . "\r\n" . '                    ' . "\r\n" . '                    ';

		if ($enable_two_phone == 1) {
			echo '                        <div class="mb-2">' . "\r\n" . '                            <label for="phone_confirm" class="form-label">Confirme seu telefone</label>' . "\r\n" . '                            <input onkeyup="formatarTEL(this);" maxlength="15" name="phone_confirm" id="phone_confirm" required="" class="phone_confirm form-control text-black" placeholder="(00) 0000-0000" value="">' . "\r\n" . '                        </div>' . "\r\n" . '                    ';
		}

		echo "\r\n" . '                    ';

		if ($enable_email == 1) {
			echo '                        <div class="mb-2">' . "\r\n" . '                            <label for="email" class="form-label">E-mail</label>' . "\r\n" . '                            <input type="email" name="email" class="form-control text-black" id="email" placeholder="exemplo@exemplo.com" required>' . "\r\n" . '                        </div> ' . "\r\n" . '                    ';
		}

		echo "\r\n" . '                    ';

		if ($enable_password == '1') {
			echo '                        <div class="mb-2">' . "\r\n" . '                            <div class="form-floating font-weight-500">' . "\r\n" . '                                <input type="password" name="password" id="password" class="form-control text-black" placeholder="Senha" required=""><label for="password">Senha</label></div>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="btn btn-link btn-sm text-decoration-none mb-4 text-cardLink opacity-75"><a href="/recuperar-senha">Esqueci minha senha</a></div>' . "\r\n" . '                    ';
		}

		echo "\r\n" . '                    ';

		if (!!$_settings->info('terms')) {
			echo '                        <div class="alert alert-primary mt-3 font-xss">' . "\r\n" . '                            Ao se cadastrar você concorda com nossos <a style="color:var(--incrivel-primaria);" href="';
			echo BASE_URL . 'termos-de-uso';
			echo '" target="_blank">termos</a>.' . "\r\n" . '                        </div>' . "\r\n" . '                    ';
		}

		echo '                        ' . "\r\n" . '                        <div class="d-flex justify-content-center align-items-center flex-column">' . "\r\n" . '                            <button type="submit" class="btn btn-wide-in btn-primary font-weight-500 rounded-pill mb-2">Continuar</button>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </form>' . "\r\n" . '    ';
	}
}

echo "\r\n" . '<script>' . "\r\n\r\n" . '    function fMasc(objeto,mascara) {' . "\r\n\t\t" . 'obj=objeto' . "\r\n\t\t" . 'masc=mascara' . "\r\n\t\t" . 'setTimeout("fMascEx()",1)' . "\r\n\t" . '}' . "\r\n\r\n\t" . 'function fMascEx() {' . "\r\n\t\t" . 'obj.value=masc(obj.value)' . "\r\n\t" . '}' . "\r\n\r\n\t" . 'function mCPF(cpf){' . "\r\n\t\t" . 'cpf=cpf.replace(/\\D/g,"")' . "\r\n\t\t" . 'cpf=cpf.replace(/(\\d{3})(\\d)/,"$1.$2")' . "\r\n\t\t" . 'cpf=cpf.replace(/(\\d{3})(\\d)/,"$1.$2")' . "\r\n\t\t" . 'cpf=cpf.replace(/(\\d{3})(\\d{1,2})$/,"$1-$2")' . "\r\n\t\t" . 'return cpf' . "\r\n\t" . '}' . "\r\n" . '        ' . "\r\n" . '    function mascara(i) {' . "\r\n" . '        let valor = i.value.replace(/\\D/g, \'\');' . "\r\n\r\n" . '        if (isNaN(valor[valor.length - 1])) {' . "\r\n" . '            i.value = valor.slice(0, -1);' . "\r\n" . '            return;' . "\r\n" . '        }' . "\r\n\r\n" . '        i.setAttribute("maxlength", "14");' . "\r\n\r\n" . '        i.value = valor.replace(/(\\d{3})(\\d{3})(\\d{3})(\\d{2})/, \'$1.$2.$3-$4\');' . "\r\n" . '    }' . "\r\n\r\n" . '    $(document).ready(function () {' . "\r\n" . '        $(\'#form-cadastrar, #cadastroModal\').submit(function (e) {' . "\r\n" . '            e.preventDefault();' . "\r\n" . '            var phoneValue = $(\'.phone\').val();' . "\r\n" . '            var phoneConfirmValue = $(\'.phone_confirm\').val();' . "\r\n" . '            if ($(\'.phone\')) {' . "\r\n" . '                if (phoneValue.length < 15 || phoneValue.length > 15) {' . "\r\n" . '                    alert(\'Telefone inválido. Por favor corrija.\');' . "\r\n" . '                    return;' . "\r\n" . '                }' . "\r\n" . '            }' . "\r\n" . '            if (phoneConfirmValue) {' . "\r\n" . '                if (phoneConfirmValue != phoneValue){' . "\r\n" . '                    alert(\'Telefone inválido. Por favor corrija\');' . "\r\n" . '                    return;' . "\r\n" . '                }' . "\r\n" . '            }' . "\r\n\r\n" . '            $.ajax({' . "\r\n" . '                url: _base_url_ + "class/Customer.php?action=registration",' . "\r\n" . '                method: \'POST\',' . "\r\n" . '                type: \'POST\',' . "\r\n" . '                data: new FormData($(this)[0]),' . "\r\n" . '                dataType: \'json\',' . "\r\n" . '                cache: false,' . "\r\n" . '                processData: false,' . "\r\n" . '                contentType: false,' . "\r\n" . '                error: err => {' . "\r\n" . '                    console.log(err)' . "\r\n" . '                    alert(\'An error occurred\')' . "\r\n" . '                },' . "\r\n" . '                success: function (resp) {' . "\r\n" . '                    if (resp.status == \'success\') {' . "\r\n" . '                        //alert(\'Cadastrado com sucessso.\');' . "\r\n" . '                        $(\'.btn-close\').click();' . "\r\n" . '                        $(\'#overlay\').fadeIn(300);' . "\r\n" . '                        setTimeout(function () {' . "\r\n" . '                            $(\'#add_to_cart\').click();' . "\r\n" . '                        }, 1000);' . "\r\n" . '                        setTimeout(function () {' . "\r\n" . '                            $(\'#place_order\').click();' . "\r\n" . '                            //$("#overlay").fadeOut(300);' . "\r\n" . '                        }, 2000);' . "\r\n\r\n" . '                    } else if (resp.status == \'phone_already\') {' . "\r\n" . '                        alert(resp.msg);' . "\r\n" . '                    } else if (resp.status == \'cpf_already\') {' . "\r\n" . '                        alert(resp.msg);' . "\r\n" . '                    } else if (resp.status == \'email_already\') {' . "\r\n" . '                        alert(resp.msg);' . "\r\n" . '                    } else {' . "\r\n" . '                        alert(\'An error occurred\')' . "\r\n" . '                        console.log(resp)' . "\r\n" . '                    }' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '        })' . "\r\n" . '    })' . "\r\n\r\n" . '    $(document).ready(function () {' . "\r\n" . '        $(\'#loginModal\').submit(function (e) {' . "\r\n" . '            e.preventDefault()' . "\r\n" . '            $.ajax({' . "\r\n" . '                url: _base_url_ + "class/Auth.php?action=login_customer",' . "\r\n" . '                method: \'POST\',' . "\r\n" . '                type: \'POST\',' . "\r\n" . '                data: new FormData($(this)[0]),' . "\r\n" . '                dataType: \'json\',' . "\r\n" . '                cache: false,' . "\r\n" . '                processData: false,' . "\r\n" . '                contentType: false,' . "\r\n" . '                error: err => {' . "\r\n" . '                    console.log(err)' . "\r\n" . '                    alert(\'An error occurred\')' . "\r\n" . '                },' . "\r\n" . '                success: function (resp) {' . "\r\n" . '                    if (resp.status == \'success\') {' . "\r\n" . '                        //alert(\'Login efetuado com sucesso!\');' . "\r\n" . '                        ';

if (isset($slug)) {
	echo '                            $(\'.btn-close\').click();' . "\r\n" . '                            $(\'#overlay\').fadeIn(300);' . "\r\n" . '                            setTimeout(function () {' . "\r\n" . '                                $(\'#add_to_cart\').click();' . "\r\n" . '                            }, 1000);' . "\r\n" . '                            setTimeout(function () {' . "\r\n" . '                                $(\'#place_order\').click();' . "\r\n" . '                                //$("#overlay").fadeOut(300);' . "\r\n" . '                            }, 2000);' . "\r\n" . '                        ';
}
else {
	echo '                            location.reload();' . "\r\n" . '                        ';
}

echo '                    } else if (!!resp.msg) {' . "\r\n" . '                        ';

if (!isset($slug)) {
	echo '                            var phone = $(\'#loginModal #phone\').val();' . "\r\n" . '                            $(\'#aviso-login\').html(\'<div style="color:red;font-size:14px;margin-bottom:10px;">Telefone ou senha incorretos!</div>\');' . "\r\n" . '                        ';
}
else {
	echo '                            var phone = $(\'#loginModal #phone\').val();' . "\r\n" . '                            $(\'#cadastroModal #phone\').val(phone);' . "\r\n" . '                            $(\'#openCadastro\').click();' . "\r\n" . '                        ';
}

echo '                    } else {' . "\r\n" . '                        alert(\'An error occurred\')' . "\r\n" . '                        console.log(resp)' . "\r\n" . '                    }' . "\r\n" . '                }' . "\r\n" . '            })' . "\r\n" . '        })' . "\r\n" . '    })' . "\r\n" . '    function formatarTEL(e) { v = e.value, console.log("v:" + v), console.log("v.length:" + v.length), v = v.replace(/\\D/g, ""), v = v.replace(/^(\\d{2})(\\d)/g, "($1) $2"), console.log("v:" + v), v = v.replace(/(\\d)(\\d{4})$/, "$1-$2"), e.value = v }' . "\r\n" . '    function formatarCPF(r) { var e = (r = r.replace(/\\D/g, "")).replace(/(\\d{3})(\\d{3})(\\d{3})(\\d{2})/, "$1.$2.$3-$4"); document.getElementById("cpf").value = e }' . "\r\n" . '</script>' . "\r\n" . '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>' . "\r\n" . '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous" data-nscript="afterInteractive"></script>' . "\r\n" . '</body>' . "\r\n" . '</html>';

?>