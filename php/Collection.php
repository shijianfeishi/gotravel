<?php
header("Access-Control-Allow-Origin: http://localhost:8080");
//定义需要获取数据库的数据
class Goods{
    public $id;
    public $gid;
    public $uid;
    public $num;
    public $sid;
    public $gtitle;
    public $gintroduce;
    public $gpricey;
    public $gprice;
    public $gsellnum;
    public $gimg;
    public $Praise;
}
    $gid = $_POST["uid"];//获取到ajax发送过来的数据
    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
    require '../common/baseMysql.php';
    $conn->query("set names utf8"); //设置编码为utf8

    // $sql = "select * from cart where uid=1";
    $sql = "select * from cart inner join goods on cart.sid=goods.gid ";
    $result = $conn->query($sql);//执行数据库命令返回数据
    if($result->num_rows > 0 ){//$result->num_rows == 返回的数据
        $arr = array();
        while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
            $goods = new Goods();
            // $goods->id = $row["id"];
            // $goods->gid = $row["gid"];
            $goods->uid = $row["uid"];
            // $goods->num = $row["num"];
            $goods->sid = $row["sid"];
             $goods->gtitle = $row["gtitle"];
            $goods->gintroduce = $row["gintroduce"];
            $goods->gpricey = $row["gpricey"];
            $goods->gprice = $row["gprice"];
            $goods->gsellnum =  str_replace("已售","",$row["gsellnum"]);
            $goods->gimg = $row["gimg"];
            $goods->Praise = $row["Praise"];

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






