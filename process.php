<?php
include "connection.php";
$coupon_code = $_POST["coupon_code"];
$query = mysqli_query($conn, "select * from coupon_code where coupon_code="$coupon_code and status = 1 ");
if (mysqli_num_rows($query) > 0 {
    echo json_encode(array(
        "statusCode => 200,
        "value" => $row["value"]
    ));
} else {
    echo json_encode(array("statusCode" => 201));
}
?>