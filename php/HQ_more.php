<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
    // ini_set("error_reporting","E_ALL & ~E_NOTICE");
//定义需要获取数据库的数据
    class Goods{
        public $gid;
        public $title;
        public $gintroduce;
        public $gpriceygpricev;
        public $gprice;
        public $gsellnum;
        public $gimg;
       
    }
    if(!empty( $_POST['show'])){
 
        //连接数据库
        // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
        require '../common/baseMysql.php';
        $conn->query("set names utf8"); //设置编码为utf8
        $length = $_POST['show'] ;
        $sql = "select * from goods limit 0,'".$length."'";
        $result = $conn->query($sql);//执行数据库命令返回数据
        if($result->num_rows > 0){//$result->num_rows == 返回的数据
            $arr = array();
            while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                $goods = new Goods();
                $goods-> gid = $row["gid"];
                $goods-> title = $row["gtitle"];
                $goods-> gintroduce = $row["gintroduce"];
                $goods-> gpriceygpricev = $row["gpricey"];
                $goods-> gprice = $row["gprice"];
                $goods-> gsellnum = $row["gsellnum"];
                $goods-> gimg = $row["gimg"];
                array_push($arr, $goods);

            }

            //返回json字符串
            echo json_encode($arr);
        }
        else {
            echo "没有数据";
        }

        $conn->close();
    }

?>






