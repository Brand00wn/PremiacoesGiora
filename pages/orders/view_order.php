<?php
function leowp_format_luck_numbers($client_lucky_numbers, $raffle_total_numbers, $class, $opt, $type_of_draw)
{
    $bichos = array();
    if ($type_of_draw == 3) {
        $bichos = array(
            "00" => "Avestruz",
            "01" => "Águia",
            "02" => "Burro",
            "03" => "Borboleta",
            "04" => "Cachorro",
            "05" => "Cabra",
            "06" => "Carneiro",
            "07" => "Camelo",
            "08" => "Cobra",
            "09" => "Coelho",
            "10" => "Cavalo",
            "11" => "Elefante",
            "12" => "Galo",
            "13" => "Gato",
            "14" => "Jacaré",
            "15" => "Leão",
            "16" => "Macaco",
            "17" => "Porco",
            "18" => "Pavão",
            "19" => "Peru",
            "20" => "Touro",
            "21" => "Tigre",
            "22" => "Urso",
            "23" => "Veado",
            "24" => "Vaca"
        );
    }
    if ($type_of_draw == 4) {
        $bichos = array(
            "00" => "Avestruz M1",
            "01" => "Avestruz M2",
            "02" => "Águia M1",
            "03" => "Águia M2",
            "04" => "Burro M1",
            "05" => "Burro M2",
            "06" => "Borboleta M1",
            "07" => "Borboleta M2",
            "08" => "Cachorro M1",
            "09" => "Cachorro M2",
            "10" => "Cabra M1",
            "11" => "Cabra M2",
            "12" => "Carneiro M1",
            "13" => "Carneiro M2",
            "14" => "Camelo M1",
            "15" => "Camelo M2",
            "16" => "Cobra M1",
            "17" => "Cobra M2",
            "18" => "Coelho M1",
            "19" => "Coelho M2",
            "20" => "Cavalo M1",
            "21" => "Cavalo M2",
            "22" => "Elefante M1",
            "23" => "Elefante M2",
            "24" => "Galo M1",
            "25" => "Galo M2",
            "26" => "Gato M1",
            "27" => "Gato M2",
            "28" => "Jacaré M1",
            "29" => "Jacaré M2",
            "30" => "Leão M1",
            "31" => "Leão M2",
            "32" => "Macaco M1",
            "33" => "Macaco M2",
            "34" => "Porco M1",
            "35" => "Porco M2",
            "36" => "Pavão M1",
            "37" => "Pavão M2",
            "38" => "Peru M1",
            "39" => "Peru M2",
            "40" => "Touro M1",
            "41" => "Touro M2",
            "42" => "Tigre M1",
            "43" => "Tigre M2",
            "44" => "Urso M1",
            "45" => "Urso M2",
            "46" => "Veado M1",
            "47" => "Veado M2",
            "48" => "Vaca M1",
            "49" => "Vaca M2"
        );
    }

    if ($client_lucky_numbers) {
        $client_lucky_numbers = explode(',', $client_lucky_numbers);
        sort($client_lucky_numbers);
        foreach ($client_lucky_numbers as $client_lucky_number) {
            if (!empty($client_lucky_number)) {
                $size = strlen($client_lucky_number);
                if ($type_of_draw == 3 || $type_of_draw == 4) {
                    $bicho_name = $bichos[$client_lucky_number];
                    echo '<span style="border-radius: 5px !important; display: inline-block; padding: 5px; border-radius:2px; margin: 4px;"  class=" ' . $class . ' me-1 alert-success">' . $bicho_name . '</span>';
                } else {
                    $output = ($type_of_draw == 3 || $type_of_draw == 4) ? $bichos[$client_lucky_number] : $client_lucky_number;
                    if ($opt == true) {
                        echo '<span style="border-radius: 5px !important; display: inline-block; padding: 5px; border-radius:2px; margin: 4px;" class=" ' . $class . ' me-1 wd-'. $size.'">' . $output . '</span>';
                    } else {
                        echo '' . $output . '<span class="comma-hide">,</span>';
                    }
                }
            }
        }
    } else {
        echo '...';
    }
};
$whatsapp =  $_settings->info('phone');

$enable_hide_numbers = $_settings->info('enable_hide_numbers');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $qry = $conn->query("SELECT *  from `order_list` where order_token = '{$_GET['id']}'");
    if ($qry->num_rows > 0) {
        foreach ($qry->fetch_assoc() as $k => $v) {
            $$k = $v;
        }
        $customer_id = $customer_id;
    } else {
        echo "<script>alert('Você não tem permissão para acessar essa página.'); 
   location.replace('/');</script>";
        exit;
    }
} else {
    echo "<script>alert('Você não tem permissão para acessar essa página.'); 
   location.replace('/');</script>";
    exit;
}
?>
<style>
    .wd-1 {
    width: 35px !important;
        letter-spacing: 0.2px;
        text-align: center;
        white-space:nowrap;

    }

    .wd-2 {
    width: 36px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-3 {
    width: 42px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-4 {
    width: 48px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-5 {
    width: 60px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-6 {
    width: 66px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-7 {
    width: 72px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-8 {
    width: 78px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-9 {
    width: 84px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }

    .wd-10 {
    width: 90px !important;
        letter-spacing: 0.2px;
        text-align: center;
                white-space:nowrap;


    }
   
</style>
<div class="app-main container">
    <div class="compra-status">
        <?php if ($status == '1') { ?>
            <div class="app-alerta-msg mb-2">
                <i class="app-alerta-msg--icone bi bi-check-circle text-warning"></i>
                <div class="app-alerta-msg--txt">
                    <h3 class="app-alerta-msg--titulo">Aguardando Pagamento!</h3>
                    <p>Finalize o pagamento</p>
                </div>
            </div>
        <?php } ?>

        <?php if ($status == '2') { ?>
            <div class="app-alerta-msg mb-2">
                <i class="app-alerta-msg--icone bi bi-check-circle text-success"></i>
                <div class="app-alerta-msg--txt">
                    <h3 class="app-alerta-msg--titulo">Compra Aprovada!</h3>
                    <p>Agora é só torcer!</p>
                </div>
            </div>
        <?php } ?>

        <?php if ($status == '3') { ?>
            <div class="app-alerta-msg mb-2">
                <i style="color:red" class="app-alerta-msg--icone bi bi-x-circle"></i>
                <div class="app-alerta-msg--txt">
                    <h3 class="app-alerta-msg--titulo">Pedido cancelado!</h3>
                    <p>O prazo para pagamento do seu pedido expirou.</p>
                </div>
            </div>
        <?php } ?>

        <hr class="my-2">
    </div>
    <?php if ($status == '1') { ?>
        <div class="compra-pagamento">
            <div class="pagamentoQrCode text-center">
                <div class="pagamento-rapido">
                    <div class="app-card card rounded-top rounded-0 shadow-none border-bottom">
                        <div class="card-body">
                            <div class="pagamento-rapido--progress">
                                <div class="d-flex justify-content-center align-items-center mb-1 font-md">
                                    <div><small>Você tem</small></div>
                                    <div class="mx-1"><b class="font-md" id="tempo-restante"></b></div>
                                    <div><small>para pagar</small></div>
                                </div>
                                <div class="progress bg-dark bg-opacity-50">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="barra-progresso"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="app-card card rounded-bottom rounded-0 rounded-bottom b-1 border-dark mb-2">
                    <div class="card-body">
                        <div class="row justify-content-center mb-2">
                            <div class="col-12 text-start">
                                <div class="mb-1"><span class="badge bg-success badge-xs">1</span><span class="font-xs"> Copie o código PIX abaixo.</span></div>
                                <div class="input-group mb-2">
                                    <input id="pixCopiaCola" type="text" class="form-control" value="<?= $pix_code; ?>">
                                    <div class="input-group-append">
                                        <button onclick="copyPix()" class="app-btn btn btn-success rounded-0 rounded-end">Copiar</button>
                                    </div>
                                </div>
                                <div class="mb-2"><span class="badge bg-success">2</span> <span class="font-xs">Abra o app do seu banco e escolha a opção PIX, como se fosse fazer uma transferência.</span></div>
                                <p><span class="badge bg-success">3</span> <span class="font-xs">Selecione a opção PIX cópia e cola, cole a chave copiada e confirme o pagamento.</span></p>
                            </div>
                            <div class="col-12 my-2">
                                <p class="alert alert-warning p-2 font-xss" style="text-align: justify; margin-bottom:0.5rem !important">Este pagamento só pode ser realizado dentro do tempo, após este período, caso o pagamento não for confirmado os números voltam a ficar disponíveis.</p>
                                <?php if ($txid > 0) { ?>
                                    <p class="alert alert-danger p-2 font-xss" style="text-align: justify;"><i class="bi bi-exclamation-circle"></i> Este pagamento possui uma taxa adicional de <?= $txid ?>%.</p>
                                <?php } ?>
                            </div>

                        </div>
                        <div style="background-image: url('../assets/img/bg-btn-qr.png'); text-align: center;"><input id="btmqr" class="btn-qr" type="button" value="Mostrar QR Code"></div>
                        <div id="exibeqr" style="display: none; margin-top:24px; margin-bottom:24px; align-items:center" class="row justify-content-center">

                            <div class="col-6 pb-3">
                                <div style="text-align: left; font-size:0.9rem !important" class="font-xss">
                                    <h5><i class="bi bi-qr-code"></i> QR Code</h5>
                                    <div>Acesse o APP do seu banco e escolha a opção <strong>pagar com QR Code,</strong> escaneie o código ao lado e confirme o pagamento.</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-block text-center">
                                    <div id="img-qrcode" class="d-inline-block bg-white rounded"><img style="width:200px; height:200px" src="data:image/png;base64,<?= $pix_qrcode ?>" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="detalhes-compra">
        <div class="compra-sorteio mb-2">
            <?php

            $order_items = $conn->query("SELECT o.*, p.name as product, p.price, p.qty_numbers, p.status_display, p.subtitle, p.image_path, p.slug, p.type_of_draw, p.cotas_premiadas_descricao FROM `order_list` o inner join product_list p on o.product_id = p.id where o.id = '{$id}' ");
            while ($row = $order_items->fetch_assoc()) :

                $gt += $row['price'] * $row['quantity'];
            ?>

                <div class="SorteioTpl_sorteioTpl__2s2Wu   pointer">
                    <div class="SorteioTpl_imagemContainer__2-pl4 col-auto ">
                        <div style="display: block; overflow: hidden; position: absolute; inset: 0px; box-sizing: border-box; margin: 0px;">
                            <img alt="Pop 110i 2022 0km" src="<?= validate_image($row['image_path']) ?>" decoding="async" data-nimg="fill" class="SorteioTpl_imagem__2GXxI" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                            <noscript></noscript>
                        </div>
                    </div>

                    <div class="SorteioTpl_info__t1BZr">
                        <h1 class="SorteioTpl_title__3RLtu"><a href="/campanha/<?= $row['slug'] ?>"><?= $row['product'] ?></a></h1>
                        <p class="SorteioTpl_descricao__1b7iL" style="margin-bottom: 1px;"><?php echo isset($row['subtitle']) ? $row['subtitle'] : ''; ?></p>
                        <?php if ($row['status_display'] == 1) { ?>
                            <span class="badge bg-success blink bg-opacity-75 font-xsss">Adquira já!</span>
                        <?php } ?>
                        <?php if ($row['status_display'] == 2) { ?>
                            <span class="badge bg-dark blink font-xsss mobile badge-status-1">Corre que está acabando!</span>
                        <?php } ?>
                        <?php if ($row['status_display'] == 3) { ?>
                            <span class="badge bg-dark font-xsss mobile badge-status-3">Aguarde o sorteio!</span>
                        <?php } ?>
                        <?php if ($row['status_display'] == 4) { ?>
                            <span class="badge bg-dark font-xsss">Concluído</span>
                        <?php } ?>

                    </div>
                </div>

        </div>

        <?php
                $cards = '';

                // Suponha que $order_numbers seja uma string de números separados por vírgula, como "123,456,789"
                $numero_comprado = $order_numbers;

                // Dividir a string em um array de números, removendo espaços em branco e elementos vazios
                $numeros_comprados = array_filter(array_map('trim', explode(',', $numero_comprado)));

                // Verificar o status de pagamento na tabela 'order_list'
                $stmt_status = $conn->prepare("SELECT status FROM order_list WHERE order_token = ?");
                $stmt_status->bind_param("s", $_GET['id']);
                $stmt_status->execute();
                $result_status = $stmt_status->get_result();
                $row_status = $result_status->fetch_assoc();

                // Verifica se o status da ordem é 'pago'
                if ($row_status['status'] == 2 && $row['type_of_draw'] == 1) {
                    // Array para armazenar os números premiados encontrados
                    $numeros_premiados = [];

                    // Iterar sobre cada número comprado e verificar se algum deles é o número premiado
                    foreach ($numeros_comprados as $num) {
                        if (empty($num)) continue; // Pula elementos vazios

                        $stmt = $conn->prepare("SELECT * FROM product_list WHERE FIND_IN_SET(?, cotas_premiadas)");
                        $stmt->bind_param("s", $num);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            // Adiciona o número ao array de números premiados
                            $numeros_premiados[] = $num;
                        }
                    }

                    if (!empty($numeros_premiados)) {
                        $quantidade_premiados = count($numeros_premiados);
                        $numeros_encontrados = implode(', ', $numeros_premiados);
                        $numeros_encontrados = rtrim($numeros_encontrados, ', ');
                        switch ($row['type_of_draw']) {
                            case 1:
                                $modalidade = 'Automático';
                                break;
                            case 3:
                                $modalidade = 'Fazendinha';
                                break;
                            case 4:
                                $modalidade = 'Meia Fazendinha';
                                break;
                            default:
                                $modalidade = 'Premiação instantânea';
                        }

                        ob_start();
                        foreach ($numeros_premiados as $num) {


                            echo '<div style="background-color:#387f57; color:white !important; border-radius:6px; width:fit-content !important;font-size:0.9rem !important;line-height:1 !important; padding:6px 8px !important;font-weight:900 !important "  class="  font-xs text-dark">' . (stripos($num, ",") !== false ? str_replace(",", "", $num) : $num) . ' </div>';
                        }
                        $output = ob_get_clean();
                        $cards = ' 
                        <div class="detalhes app-card-winner card mb-2 " style="background: rgb(25, 135, 84); color: rgb(255, 255, 255); opacity: 1;">
                            <div class="card-body">
                            <span  style="color:#387f57; font-size:1.5rem; font-weight:900">🥳Parabéns!🥳</span> 
                        
                                <div class="font-xs mb-2 text-dark">
                                    <div class="pt-1 opacity-75 font-xs text-dark">Sua compra possui <strong>' . $quantidade_premiados . ' título(s) <br> contemplado(s)</strong> na  modalidade <br> <strong>' . $modalidade . ':</strong></div>
                                    <div style="align-items:center; justify-content:center; gap:8px; margin-block:16px" class="d-flex">' . $output . '
                                    <div style="color:#387f57 !important; font-size:0.9rem !important; margin-block:0 !important;opacity: 1 !important; font-weight: 500 !important;" class=" opacity-75 font-xs text-dark">
                                     Premio: ' . $row['cotas_premiadas_descricao'] . '  
                                    </div>
                        
                                    </div>
                                    <div style="color:#387f57 !important; font-size:0.9rem !important; margin-block:0 !important; opacity: 1 !important; font-weight: 500 !important;" class=" opacity-75 font-xs text-dark">
                                    Em breve, nossa equipe entrará em contato com você para realizar a entrega do prêmio.!</div>
                                    <a href="https://wa.me/' . $whatsapp . '" target="_blank" class="" id="wpp_btn"><i style="margin-right:4px" class="bi bi-whatsapp"></i> Falar com o suporte</a>
                                </div>
                            </div>
                        </div>';
                    } else {
                        $quantidade_premiados = count($numeros_premiados);
                        $numeros_encontrados = implode(', ', $numeros_premiados);
                        $numeros_encontrados = rtrim($numeros_encontrados, ', ');
                        switch ($row['type_of_draw']) {
                            case 1:
                                $modalidade = 'Automático';
                                break;
                            case 3:
                                $modalidade = 'Fazendinha';
                                break;
                            case 4:
                                $modalidade = 'Meia Fazendinha';
                                break;
                            default:
                                $modalidade = 'Premiação instantânea';
                        }

                        $cards = ' 
                        <div class="detalhes app-card-winner card mb-2 " style="background:#ffe8da !important; color: rgb(255, 255, 255); opacity: 1;">
                            <div class="card-body">
                            <span  style="color:#a7263a; font-size:1.5rem; font-weight:900">😢Que pena!😢</span> 
                        
                                <div class="font-xs mb-2 text-dark">
                                    <div style="color:#a7263a !important" class="pt-1 opacity-75 font-xs text-dark">Sua compra não possui <strong>  títulos <br> contemplados</strong> na  modalidade <br> <strong>Premiação instantânea:</strong></div>
                                    <div style="color:#a7263a !important; font-size:0.9rem !important; margin-block:0 !important;opacity: 1 !important; font-weight: 500 !important;" class=" opacity-75 font-xs text-dark">
                                    </div>
                        
                                    <div style="color:#a7263a !important; font-size:0.9rem !important; margin-block:0 !important; opacity: 1 !important; font-weight: 500 !important;" class=" opacity-75 font-xs text-dark">
                                    Não fique triste, você continua concorrendo ao <strong>prêmio principal</strong> <br> boa sorte!</div>
                                  
                                </div>
                            </div>
                        </div>';
                    }
                }
                echo $cards;
        ?>
        <div style="opacity: 1!important; color:#000" class="detalhes app-card card mb-2">


            <div class="card-body font-xs">
                <div class="font-xs opacity-75 mb-2 border-bottom-rgba text-dark">
                    <i class="bi bi-info-circle"></i> Detalhes da sua compra&nbsp;
                    <div class="pt-1 opacity-50 mb-1"><?= isset($order_token) ? $order_token : '' ?></div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1">

                    <div class="result font-xs text-dark" style="text-transform: uppercase;">
                        <?php
                        $customerQuery = $conn->query("SELECT firstname, lastname, phone FROM `customer_list` WHERE id = '{$customer_id}'");












                        if ($customerQuery && $customerQuery->num_rows > 0) {
                            $customer = $customerQuery->fetch_assoc();
                            $firstname = $customer['firstname'];
                            $lastname = $customer['lastname'];
                            $phone = $customer['phone'];
                        }
                        $firstname = ucwords($firstname);
                        $lastname = ucwords($lastname);
                        echo $firstname . ' ' . $lastname . '';
                        ?>
                    </div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1">
                    <div class="title me-1 text-dark">
                        <i class="bi bi-check-circle"></i> Transação
                    </div>
                    <div class="result font-xs text-dark"><?= $id ?> </div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1">
                    <div class="title me-1 text-dark"><i class="bi bi-phone"></i> Telefone</div>
                    <div class="result font-xs text-dark"><?= formatPhoneNumber($phone); ?></div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1">
                    <div class="title me-1 text-dark"><i class="bi bi-calendar-week"></i> Data/Hora</div>
                    <div class="result font-xs text-dark"><?php echo date("d-m-Y H:i", strtotime($date_created)) ?></div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1">
                    <div class="title me-1 text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                            <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2z"></path>
                            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z"></path>
                        </svg>
                        <?= $quantity; ?> Cota(s)
                    </div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1 border-bottom-rgba">
                    <div class="title me-1 mb-1 text-dark">
                        <i class="bi bi-wallet2"></i> Valor
                    </div>
                    <div class="result font-xs text-dark">R$ <?= number_format($total_amount, 2, ',', '.'); ?></div>
                </div>
                <div class="item d-flex align-items-baseline">
                    <?php if ($type_of_draw == 1 && $status == 1 && $enable_hide_numbers == 1) {
                        echo ' <div class="title font-weight-500 me-1">Cotas:</div>';
                    } ?>
                    <div class="result font-xs" data-nosnippet="true" style="overflow:hidden;">
                        <?php


                        $type_of_draw = $row['type_of_draw'];

                        if ($type_of_draw > 1) {
                            echo leowp_format_luck_numbers($order_numbers, $row['qty_numbers'], $class = 'alert-success', $opt = true, $type_of_draw);
                        } elseif ($type_of_draw == 1 && $status == 1 && $enable_hide_numbers == 1) {
                            echo 'As cotas serão geradas após o pagamento.';
                        } else {
                            echo leowp_format_luck_numbers($order_numbers, $row['qty_numbers'], $class = 'alert-success', $opt = true, $type_of_draw);
                        }

                        ?>
                    </div>
                </div>
                <div class="item d-flex align-items-baseline mb-1 pb-1 border-bottom-rgba border-1"></div>
                <?php echo $mensagem; ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php endwhile; ?>

<script>
    $("#btmqr").on('click', (function() {
        if (document.getElementById('exibeqr').style.display == 'flex') {
            document.getElementById('exibeqr').style.display = 'none';
            document.getElementById('btmqr').value = "Mostrar QR Code";
        } else {
            document.getElementById('exibeqr').style.display = "flex";
            document.getElementById('btmqr').value = "Ocultar QR Code";
        }
    }));

    function copyPix() {
        var copyText = document.getElementById("pixCopiaCola");

        copyText.select();
        copyText.setSelectionRange(0, 99999);

        document.execCommand("copy");
        navigator.clipboard.writeText(copyText.value);

        alert("Chave pix 'Copia e Cola' copiada com sucesso!");
    }
    $(document).ready(function() {
        var tempoInicial = parseInt('<?= $order_expiration; ?>');
        var token = '<?= isset($order_token) ? $order_token : '' ?>';
        var progressoMaximo = 100;
        var tempoRestante;

        if (localStorage.getItem(token)) {
            tempoRestante = parseInt(localStorage.getItem(token));
        } else {
            tempoRestante = tempoInicial * 60;
            localStorage.setItem(token, tempoRestante);
        }

        var intervalo = setInterval(function() {
            var minutos = Math.floor(tempoRestante / 60);
            var segundos = tempoRestante % 60;
            var tempoFormatado = minutos.toString().padStart(2, '0') + ':' + segundos.toString().padStart(2, '0');
            $('#tempo-restante').text(tempoFormatado);
            var progresso = ((tempoInicial * 60 - tempoRestante) / (tempoInicial * 60)) * progressoMaximo;
            $('#barra-progresso').css('width', progresso + '%').attr('aria-valuenow', progresso);
            tempoRestante--;
            localStorage.setItem(token, tempoRestante);
            if (tempoRestante < 0) {
                clearInterval(intervalo);
                localStorage.removeItem(token);
            }
        }, 1000);

        <?php if ($status == 1) { ?>
            setInterval(function() {
                var check = {
                    order_token: '<?= $order_token ?>',
                };
                $.ajax({
                    type: 'POST',
                    url: _base_url_ + "class/Main.php?action=check_order",
                    dataType: 'json',
                    data: check,

                    success: function(resp) {


                        console.log(resp.status);
                        if (resp.status == '2') {
                            window.location.reload();
                        }
                    },
                });
            }, 3000);
        <?php } ?>

    });
</script>