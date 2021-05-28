<?php
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "user";
    var $con ;

    function __construct(){
        $this->con=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con,"select * from user_simon");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function input ($nama,$email,$prodi){
        mysqli_query($this->con,"insert into user_simon values('','$nama','$email','$prodi')");
    }
    function hapus ($id){
        mysqli_query($this->con,"delete from user_simon where id='$id'");
    }
    function edit ($id){
        $data = mysqli_query($this->con,"select * from user_simon where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id,$nama,$email,$prodi){
        mysqli_query($this->con,"update user_simon set nama ='$nama', email='$email', prodi='$prodi', where id='$id'");
    }
}
?>

