<?php
  class Db{
    private $connection;
    private static $db;
    public static function getInstance(){
      if(self::$db==null){
        self::$db=new Db();
      }
      return self::$db;
    }
    function __construct($option=null){
      if($option!=null){
        $servername=$option['servername'];
        $username=$option['username'];
        $password=$option['$password'];
        $dbname=$option['dbname'];
      }else{
        global $config;
        $servername=$config['db']['servername'];
        $username=$config['db']['username'];
        $password=$config['db']['$password'];
        $dbname=$config['db']['dbname'];
      }
      $this->connection = new mysqli($servername, $username, $password, $dbname);
      if ($this->connection->connect_error) {
        echo("Connection failed: " . $this->connection->connect_error);
        exit;
      }
      $this->connection->query("SET NAMES 'utf8'");
    }
    public function first($sql){
      $record=$this->query($sql);
      /*if(!$record){
        echo "Query".$sql."failed due to".mysql_errno($this->connection);
        exit;
      }*/
      if ($record == null) {
        return null;
      }
      return $record[0];
    }
    public function query($sql){
      //print_r($sql);
      //exit;
      $result=$this->connection->query($sql);
      if(!$result){
        echo "Query".$sql."failed due to".mysql_error($this->connection);
        exit;
      }
      $record=array();
      if ($result->num_rows == 0) {
        return null;
      }
      while($row = $result->fetch_assoc()) {
        $record[]=$row;
      }
      return $record;
    }
    public function insert($sql){
      $id=$this->connection->query($sql);
      //dump($sql,true);
      if(!$id){
        echo "Query".$sql."failed due to".mysql_error($this->connection);
        exit;
      }
      return $id;
    }
    public function modify($sql){
      $rowwEffect=$this->connection->query($sql);
      //dump($sql,true);
      if(!$rowwEffect){
        echo "Query".$sql."failed due to".mysql_error($this->connection);
        exit;
      }
      return $rowwEffect;
    }
    function connection(){
      $this->connection;
    }

    function close(){
      $this->connection->close();
    }
  }
?>