<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
//定义需要获取数据库的数据
    class Goods{
        public $uid;
        public $password;
        public $email;
        public $sex;
        public $birthday;
        public $address;
        public $name;
        public $draw;
    }

    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
        require '../common/baseMysql.php';
    $conn->query("set names utf8"); //设置编码为utf8

    $sql = "select * from user";
    $result = $conn->query($sql);//执行数据库命令返回数据
    if($result->num_rows > 0){//$result->num_rows == 返回的数据
        $arr = array();
        while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
            $goods = new Goods();
            $goods->uid = $row["uid"];
            $goods->password = $row["password"];
            $goods->email = $row["email"];
            $goods->sex = $row["sex"];
            $goods->birthday = $row["birthday"];
            $goods->address = $row["address"];
            $goods->name = $row["name"];
            $goods->draw = $row["draw"];

    //        echo $row["goodsname"];
            array_push($arr, $goods);
        }

        //返回json字符串
        echo json_encode($arr);
    }
    else {
        echo "none";
    }

    $conn->close();

?>






