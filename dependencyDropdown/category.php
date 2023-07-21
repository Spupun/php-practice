<?php
include "config.php";

$id = $_POST['datapost'];
// $category =$_POST['category'];
// echo $id;die;


$sql = "SELECT * FROM product where category ='$id'";
$result = mysqli_query($conn, $sql);
$data_arr = [];
foreach ($result as $key => $value) {
    // echo "<pre>";
    // print_r($value);
    $data_arr['id'][] = $value['id'];
    $data_arr['product_name'][] = $value['description'];

    // $data_arr[] = array(
    //     'id' => $value['id'],
    //     'descrition' => $value['description']
    // );
}
// echo '<pre>';print_r($data_arr);die;
// die;
echo json_encode($data_arr);
