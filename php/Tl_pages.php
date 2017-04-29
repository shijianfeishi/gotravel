<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
//定义需要获取数据库的数据
    $num = $_POST["obj"];
    // echo $num;
    class Goods{
        public $gid;
        public $gtitle;
        public $gintroduce;
        public $gpricey;
        public $gprice;
        public $gsellnum;
        public $gimg;
        public $gticket;
    }

    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
    if($num == "tuijian"){
            require '../common/baseMysql.php';
            $conn->query("set names utf8"); //设置编码为utf8
            // select * from table1 order by field1,field2 [desc]
            $sql = "select * from goods order by gsellnum";
            $result = $conn->query($sql);//执行数据库命令返回数据
            if($result->num_rows > 0){//$result->num_rows == 返回的数据
                $arr = array();
                while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                    $goods = new Goods();
                    $goods->gid = $row["gid"];
                    $goods->gtitle = $row["gtitle"];
                    $goods->gintroduce = $row["gintroduce"];
                    $goods->gpricey = $row["gpricey"];
                    $goods->gprice = $row["gprice"];
                    $goods->gsellnum = $row["gsellnum"];
                    $goods->gimg = $row["gimg"];
                     $goods->gticket = $row["gticket"];

            //        echo $row["goodsname"];
                    array_push($arr, $goods);
                }
                //返回json字符串
                echo json_encode($arr);
            }
            else {
                echo "none";
            }
    }else if($num == "new"){
            require '../common/baseMysql.php';
            $conn->query("set names utf8"); //设置编码为utf8
            // select * from table1 order by field1,field2 [desc]
            $sql = "select * from goods order by rand()";
            $result = $conn->query($sql);//执行数据库命令返回数据
            if($result->num_rows > 0){//$result->num_rows == 返回的数据
                $arr = array();
                while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                    $goods = new Goods();
                    $goods->gid = $row["gid"];
                    $goods->gtitle = $row["gtitle"];
                    $goods->gintroduce = $row["gintroduce"];
                    $goods->gpricey = $row["gpricey"];
                    $goods->gprice = $row["gprice"];
                    $goods->gsellnum = $row["gsellnum"];
                    $goods->gimg = $row["gimg"];
                     $goods->gticket = $row["gticket"];

            //        echo $row["goodsname"];
                    array_push($arr, $goods);
                }
                //返回json字符串
                echo json_encode($arr);
            }
            else {
                echo "none";
            }
    }else if($num == "juli"){
            require '../common/baseMysql.php';
            $conn->query("set names utf8"); //设置编码为utf8
            // select * from table1 order by field1,field2 [desc]
            $sql = "select * from goods order by gid";
            $result = $conn->query($sql);//执行数据库命令返回数据
            if($result->num_rows > 0){//$result->num_rows == 返回的数据
                $arr = array();
                while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                    $goods = new Goods();
                    $goods->gid = $row["gid"];
                    $goods->gtitle = $row["gtitle"];
                    $goods->gintroduce = $row["gintroduce"];
                    $goods->gpricey = $row["gpricey"];
                    $goods->gprice = $row["gprice"];
                    $goods->gsellnum = $row["gsellnum"];
                    $goods->gimg = $row["gimg"];
                     $goods->gticket = $row["gticket"];

            //        echo $row["goodsname"];
                    array_push($arr, $goods);
                }
                //返回json字符串
                echo json_encode($arr);
            }
            else {
                echo "none";
            }
    }else if($num == "donw"){
            require '../common/baseMysql.php';
            $conn->query("set names utf8"); //设置编码为utf8
            // select * from table1 order by field1,field2 [desc]
            $sql = "select * from goods order by gpricey";
            $result = $conn->query($sql);//执行数据库命令返回数据
            if($result->num_rows > 0){//$result->num_rows == 返回的数据
                $arr = array();
                while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                    $goods = new Goods();
                    $goods->gid = $row["gid"];
                    $goods->gtitle = $row["gtitle"];
                    $goods->gintroduce = $row["gintroduce"];
                    $goods->gpricey = $row["gpricey"];
                    $goods->gprice = $row["gprice"];
                    $goods->gsellnum = $row["gsellnum"];
                    $goods->gimg = $row["gimg"];
                     $goods->gticket = $row["gticket"];

            //        echo $row["goodsname"];
                    array_push($arr, $goods);
                }
                //返回json字符串
                echo json_encode($arr);
            }
            else {
                echo "none";
            }
    }else if($num == "up"){
            require '../common/baseMysql.php';
            $conn->query("set names utf8"); //设置编码为utf8
            // select * from table1 order by field1,field2 [desc]
            $sql = "select * from goods order by gpricey desc";
            $result = $conn->query($sql);//执行数据库命令返回数据
            if($result->num_rows > 0){//$result->num_rows == 返回的数据
                $arr = array();
                while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                    $goods = new Goods();
                    $goods->gid = $row["gid"];
                    $goods->gtitle = $row["gtitle"];
                    $goods->gintroduce = $row["gintroduce"];
                    $goods->gpricey = $row["gpricey"];
                    $goods->gprice = $row["gprice"];
                    $goods->gsellnum = $row["gsellnum"];
                    $goods->gimg = $row["gimg"];
                     $goods->gticket = $row["gticket"];

            //        echo $row["goodsname"];
                    array_push($arr, $goods);
                }
                //返回json字符串
                echo json_encode($arr);
            }
            else {
                echo "none";
            }
    }
    else{
        require '../common/baseMysql.php';
        $conn->query("set names utf8"); //设置编码为utf8
        // select * from table1 order by field1,field2 [desc]
        $sql = "select * from goods order by rand()";
        $result = $conn->query($sql);//执行数据库命令返回数据
        if($result->num_rows > 0){//$result->num_rows == 返回的数据
            $arr = array();
            while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
                $goods = new Goods();
                $goods->gid = $row["gid"];
                $goods->gtitle = $row["gtitle"];
                $goods->gintroduce = $row["gintroduce"];
                $goods->gpricey = $row["gpricey"];
                $goods->gprice = $row["gprice"];
                $goods->gsellnum = $row["gsellnum"];
                $goods->gimg = $row["gimg"];
                $goods->gticket = $row["gticket"];

        //        echo $row["goodsname"];
                array_push($arr, $goods);
            }
            //返回json字符串
            echo json_encode($arr);
        }
        else {
            echo "none";
        }
    }

    $conn->close();

?>