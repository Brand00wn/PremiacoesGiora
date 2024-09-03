<?php



if (isset($_GET['id']) && 0 < $_GET['id']) {
	$qry = $conn->query('SELECT * from `product_list` where slug = \'' . $_GET['id'] . '\' ');

	if (0 < $qry->num_rows) {
		foreach ($qry->fetch_assoc() as $k => $v) {
			$$k = $v;
		}
	}
	else {
		echo '<script>' . "\r\n" . '            //alert(\'Você não tem permissão para acessar essa página.\'); ' . "\r\n" . '            location.replace(\'' . BASE_URL . '\');' . "\r\n" . '          </script>';
		exit();
	}
}
else {
	echo '<script>' . "\r\n" . '          //alert(\'Você não tem permissão para acessar essa página.\');' . "\r\n" . '          location.replace(\'' . BASE_URL . '\');' . "\r\n" . '        </script>';
	exit();
}

$totalNumbers = $paid_numbers + $pending_numbers;
$percentage = ($totalNumbers / $qty_numbers) * 100;
if ((85 <= $percentage) && $status == 1 && $status_display != 2) {
	$updateStatusStatements = $conn->query('UPDATE product_list SET status_display = \'2\' WHERE id = \'' . $id . '\'');
}

if ($date_of_draw) {
	$expirationTime = date('Y-m-d H:i:s', strtotime($date_of_draw));
	$currentDateTime = date('Y-m-d H:i:s');

	if ($expirationTime < $currentDateTime) {
		$selectStatement = 'SELECT * FROM product_list WHERE id = \'' . $id . '\'';
		$selectResult = $conn->query($selectStatement);

		if (0 < $selectResult->num_rows) {
			$updatePendingStatements = $conn->query('UPDATE product_list SET status = \'3\', status_display = \'4\' WHERE id = \'' . $id . '\'');
		}
	}
}

if ($type_of_draw == '1') {
	require_once 'automatic.php';
}

if ($type_of_draw == '2') {
	require_once 'numbers.php';
}

if ($type_of_draw == '3') {
	require_once 'farm.php';
}

if ($type_of_draw == '4') {
	require_once 'half-farm.php';
}

?>