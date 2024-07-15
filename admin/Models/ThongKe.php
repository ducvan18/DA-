<?php
require_once 'BaseModel.php';
// $date = $_POST['date'];
if (isset($_POST['date'])) {
    $date = $_POST['date'];
} else {
    $date = "7ngay";
}
$data_sql = null;
$endDate = date('Y-m-d');
$starDate = '';
if ($date == "7ngay") {
    $starDate = date('Y-m-d', strtotime('-7 day'));
    $sql = "SELECT COUNT(order_id) AS total_order, order_created_at, SUM(order_total) AS order_total FROM orders
            WHERE order_created_at >= '$starDate' AND order_created_at <= '$endDate' GROUP BY order_created_at ORDER BY order_created_at ASC";
    $data_sql = getData($sql);
} elseif ($date == "30ngay") {
    $starDate = date('Y-m-d', strtotime('-30 day'));
    $sql = "SELECT COUNT(order_id) AS total_order, order_created_at, SUM(order_total) AS order_total FROM orders
            WHERE order_created_at >= '$starDate' AND order_created_at <= '$endDate' GROUP BY order_created_at ORDER BY order_created_at ASC";
    $data_sql = getData($sql);
} elseif ($date == "365ngay") {
    $currentYear = date("Y");
    $data_sql = array();
    $arr = array();
    for ($month = 1; $month <= 12; $month++) {
        $sql = "SELECT COUNT(order_id) AS total_order, order_created_at, SUM(order_total) AS order_total FROM orders 
        WHERE YEAR(order_created_at) = $currentYear AND MONTH(order_created_at) = $month";

        $result = getData($sql);

        if ($result != null) {
            // $row = $result->fetch_assoc();
            $data_sql[$month] = array(
                'total_order' => $result[0]['total_order'],
                'order_created_at' => $currentYear."-".$month,
                'order_total' => $result[0]['order_total']
            );
            
        } else {
            $data_sql[$month] = array(
                'total_order' => 0,
                'order_created_at' => $currentYear."-".$month,
                'order_total' => 0
            );
        }
    }
    // echo "<pre>"; print_r($data_sql);die();
}
// print_r($data_sql);die();
foreach ($data_sql as $row) {
    $chart_data[] = array(
        'date' => $row['order_created_at'],

        'total_money' => $row['order_total'],
        'count_order' => $row['total_order'],
    );
}
echo $data = json_encode($chart_data);
// echo json_encode($data);
