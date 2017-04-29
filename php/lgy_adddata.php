<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
    $name = $_POST["name"];
    $password = $_POST["password"];
    // echo $name;
//定义需要获取数据库的数据
    class Goods{
        public $uid;
        public $name;
        public $password;
        public $email;
        public $sex;
        public $birthday;
        public $address;
        public $draw;
    }

    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
        require '../common/baseMysql.php';
    $conn->query("set names utf8"); //设置编码为utf8

    $sql = "select * from user";
    $flag = false;
    $result = $conn->query($sql);//执行数据库命令返回数据
    if($result->num_rows > 0){//$result->num_rows == 返回的数据
        $arr = array();
        while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
            $goods = new Goods();
            $goods->uid = $row["uid"];
            $goods->name = $row["name"];
            $goods->password = $row["password"];
            $goods->email = $row["email"];
            $goods->sex = $row["sex"];
            $goods->birthday = $row["birthday"];
            $goods->address = $row["address"];
            $goods->draw = $row["draw"];

    //        echo $row["goodsname"];
            if($goods->name == $row["name"]){
                $flag = false;
            }
            if( $name != $row["name"] && $name > 0){
                $flag = true;
            }
            array_push($arr, $goods);
        }

        if($flag){
            $sql = "insert into user(name,password,email,sex,birthday,address,draw) values ('$name','$password','','','','','')";
            $conn->query($sql);
            echo "true";
        }else if(!$flag){
            echo "false";
        }

        //返回json字符串
        // echo json_encode($arr);
    }
    else {
        echo "none";
    }

    $conn->close();

?>






