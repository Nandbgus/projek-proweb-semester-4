<?php
class database
{
    private $con;
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "unp_ppweb";

    function __construct()
    {
        $this->start_con();
    }
    function start_con()
    {
        if (!$this->con = new mysqli($this->host, $this->user, $this->pass, $this->db))
            die('Can connect to server local');
    }
    function close_con()
    {
        return mysqli_close($this->con);
    }
    function sqlquery($sql)
    {
        if (!$this->con = new mysqli($this->host, $this->user, $this->pass, $this->db))
            die('Can connext to mysql server');
        return $this->con->query($sql);
    }
    function jumrec($sql)
    {
        if ($hasil = $this->sqlquery($sql))
            $jum = mysqli_num_rows($hasil);
        else
            $jum = 0;
        return $jum;
    }

    function datasql($sql)
    {
        $data = array();
        if ($hasil = $this->sqlquery($sql))
            $data = $hasil->fetch_array(MYSQLI_BOTH);
        return $data;
    }
    function fetchdata($sql)
    {
        $res = array();
        if ($hasil = $this->sqlquery($sql))
            while ($data = $hasil->fetch_array(MYSQLI_BOTH)) {
                $res[] = $data;
            }
        return $res;
    }
}
