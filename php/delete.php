<?php
header("Access-Control-Allow-Origin: http://localhost:8080");

    $gid = $_POST["gid"];//获取到ajax发送过来的数据
    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
    require '../common/baseMysql.php';
    $conn->query("set names utf8"); //设置编码为utf8

// DELETE FROM 表名称 WHERE 列名称 = 值
    $sql ="DELETE FROM cart WHERE sid = $gid";
$conn->query($sql);//执行数据库命令返回数据

$conn->close();

?>






