<?php


require_once './settings.php';

if (!$_settings->userdata('is_affiliate')) {
	echo '<script>alert(\'Você não tem permissão para acessar essa página\'); ' . "\r\n" . '    location.replace(\'/\');</script>';
	exit();
}

if ($_settings->userdata('id') != '') {
	$qry = $conn->query('SELECT * FROM `customer_list` where id = \'' . $_settings->userdata('id') . '\'');

	if (0 < $qry->num_rows) {
		foreach ($qry->fetch_array() as $k => $v) {
			if (!is_numeric($k)) {
				$$k = $v;
			}
		}
	}
}
else {
	echo '<script>alert(\'Você não tem permissão para acessar essa página\'); ' . "\r\n" . '    location.replace(\'/\');</script>';
	exit();
}

echo '<style>' . "\r\n" . '.block{' . "\r\n" . '    display: flex;' . "\r\n" . '    justify-content: space-around;' . "\r\n" . '}' . "\r\n" . '#customers{border-collapse:collapse;width:100%}#customers td,#customers th{border:1px solid #ddd;padding:8px}#customers tr:nth-child(2n){background-color:#f2f2f2}#customers tr:hover{background-color:#ddd}#customers th{padding-top:12px;padding-bottom:12px;text-align:left;background-color:#04aa6d;color:#fff}' . "\r\n" . '</style>' . "\r\n" . '<div class="container app-main app-form">' . "\r\n" . '    <div class="row justify-content-between w-100 align-items-center">' . "\r\n" . '        <div class="col">' . "\r\n" . '            <div class="app-title">' . "\r\n" . '               <h1>🤑 Meus rendimentos</h1>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '    ' . "\r\n" . '    <div class="text">' . "\r\n" . '        Nesta página, você terá acesso exclusivo aos detalhes sobre suas afiliações, incluindo o valor que já conquistou até o momento e o montante disponível para receber. Entendemos que essas informações são cruciais para você, e queremos garantir total transparência e facilidade no acompanhamento do seu desempenho.' . "\r\n" . '    </div>' . "\r\n" . '    ' . "\r\n" . '    ';
$orders = $conn->query('SELECT amount_paid, amount_pending FROM referral' . "\r\n" . '            WHERE customer_id = \'' . $_settings->userdata('id') . '\' LIMIT 10');
$orders2 = $conn->query('SELECT COUNT(id) FROM order_list' . "\r\n" . '            WHERE referral_id = \'' . $_settings->userdata('id') . '\'');

if (0 < $orders2->num_rows) {
	$rowOrder = $orders2->fetch_assoc();
	$quantity = $rowOrder['COUNT(id)'];
}

if (0 < $orders->num_rows) {
	$row = $orders->fetch_assoc();
	$amount_paid = $row['amount_paid'];
	$amount_pending = $row['amount_pending'];
}

echo "\r\n" . '    <div class="vendasExpressNumsSelect v2 mt-3 text-center">' . "\r\n" . '         <div class="item mb-2">' . "\r\n" . '            <div class="item-content flex-column p-2">' . "\r\n" . '                <h5 class="mb-0 font">';
echo 'R$' . number_format($amount_paid, 2, ',', '.');
echo '</h5>' . "\r\n" . '                <p class="item-content-txt font-xss text-uppercase mb-0">RETIRADO</p>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '        <div class="item mb-2">' . "\r\n" . '            <div class="item-content flex-column p-2" >' . "\r\n" . '                <h5 class="mb-0 font">';
echo 'R$' . number_format($amount_pending, 2, ',', '.');
echo '</h5>' . "\r\n" . '                <p class="item-content-txt font-xss text-uppercase mb-0">SALDO</p>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '        <div class="item mb-2">' . "\r\n" . '            <div class="item-content flex-column p-2">' . "\r\n" . '                <h5 class="mb-0 ">';
echo $quantity;
echo '</h4>' . "\r\n" . '                <p class="item-content-txt font-xss text-uppercase mb-0" style="color:#fff;">INDICAÇÕES</p>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '        ' . "\r\n" . '    <div class="row justify-content-between w-100 align-items-center mt-2">' . "\r\n" . '        <div class="col">' . "\r\n" . '            <div class="app-title">' . "\r\n" . '               <h1><i class="bi bi-link"></i> Seu link de afiliado</h1>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n\r\n" . '    <div class="input-group mb-2">' . "\r\n" . '        <input id="affiliate_url" type="text" class="form-control text-black" value="';
echo BASE_URL . '?ref=' . $_settings->userdata('id');
echo '">' . "\r\n" . '        <div class="input-group-append">' . "\r\n" . '            <button onclick="copyPix()" class="app-btn btn btn-success rounded-0 rounded-end">Copiar</button>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n\r\n" . '    <div class="row justify-content-between w-100 align-items-center mt-4">' . "\r\n" . '        <div class="col">' . "\r\n" . '            <div class="app-title">' . "\r\n" . '               <h1><i class="bi bi-list-ul"></i> Últimas referências</h1>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '    <table id="customers">' . "\r\n" . '        <tr>' . "\r\n" . '            <th>Produto</th>' . "\r\n" . '            <th>Comissão</th>' . "\r\n" . '            <th>Data</th>' . "\r\n" . '            <th>Status</th>' . "\r\n" . '        </tr>' . "\r\n" . '        ';
$orders = $conn->query('SELECT o.product_name, o.status, o.total_amount, o.date_created, r.percentage' . "\r\n" . '        FROM order_list o INNER JOIN referral r ON o.referral_id = r.referral_code' . "\r\n" . '        WHERE referral_id = \'' . $_settings->userdata('id') . '\' AND o.status <> 3 ORDER BY o.id DESC LIMIT 10');

while ($row = $orders->fetch_assoc()) {
	$status = $row['status'];
	$product = $row['product_name'];
	$percentage = $row['percentage'];
	$amount = $row['total_amount'];
	$date = $row['date_created'];
	echo '        <tr>' . "\r\n" . '            <td class="small text-black">';
	echo $product;
	echo '</td>' . "\r\n" . '            <td class="small text-black">';
	echo 'R$' . format_num(($amount * $percentage) / 100, 2);
	echo '</td>' . "\r\n" . '            <td class="small text-black">';
	echo date('d-m-Y', strtotime($date)) . ' ás ' . date('H:i', strtotime($date));
	echo '</td>' . "\r\n" . '            <td class="small text-black">' . "\r\n" . '            ';

	switch ($row['status']) {
	case 1:
		echo 'Pendente';
		break;
	case 2:
		echo 'Aprovado';
		break;
	}

	echo '            </td>' . "\r\n" . '        </tr>' . "\r\n" . '        ';
}

echo '        </table>' . "\r\n" . '</div>' . "\r\n\r\n" . '<script>' . "\r\n" . '    function copyPix() {' . "\r\n" . '        var copyText = document.getElementById("affiliate_url");' . "\r\n\r\n" . '        copyText.select();' . "\r\n" . '        copyText.setSelectionRange(0, 99999); ' . "\r\n\r\n" . '        document.execCommand("copy");' . "\r\n" . '        navigator.clipboard.writeText(copyText.value);' . "\r\n\r\n" . '        alert("Link copiado com sucesso");' . "\r\n" . '    }' . "\r\n" . '</script>';

?>