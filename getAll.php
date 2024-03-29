<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="b";//ten database
//tao ket noi csdl
$conn = new mysqli($ser,$u,$p,$db);
//lenh insert 
$sql="select * from mytable";
//thuc thi lenh
$kq = $conn->query($sql);//tra ve 2 tap du lieu giong 1 bang
while($row[]=$kq->fetch_assoc()){ //doc tung dong
    $json = json_encode($row);//chuyen thanh json


}
echo '{"products":'.$json.'}';
$conn->close();//dong cong ket noi



?>