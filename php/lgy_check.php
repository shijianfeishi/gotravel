<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
    $name = $_POST["name"];
    echo $name;
//定义需要获取数据库的数据
    class Goods{
        public $uid;
        public $name;
    }

    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
    require '../common/baseMysql.php';

    $conn->query("set names utf8"); //设置编码为utf8

    $sql = "select * from user where name";

    $flag;

    $result = $conn->query($sql);//执行数据库命令返回数据
    if($result->num_rows > 0){//$result->num_rows == 返回的数据
        $arr = array();
        while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
            $goods = new Goods();
            $goods->uid = $row["uid"];
            $goods->name = $row["name"];
    //        echo $row["goodsname"];
            if($name == $goods->name){
                // $flag = false;
                echo '注册了';
                return;

            }
            if( $name != $goods->name){
                // $flag = true;
                echo '未注册'; 
                return;
            }
            array_push($arr, $goods);
        }
        // if($flag){
        //     echo '未注册'; 
        // }else{
        //     echo '注册了'; 
        // }
        //返回json字符串
        // echo json_encode($arr);
    }
    else {
        echo "none";
    }

    $conn->close();

?>






