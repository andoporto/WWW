<?php

class bd
{
var $enlace;
function bd(){  /*parent::__construct()*/
    $this->enlace = mysql_connect('localhost:3306', 'root', '');
    mysql_select_db('rucarw', $this->enlace);
    }

function __destruct()
    {
  mysql_close($this->enlace);
  }

function ejecutaSQL($sql)
{
if(mysql_query($sql, $this->enlace))
    return  mysql_affected_rows($this->enlace);
else
  return -1;
}

}

class bd_pp extends bd
{
var $resultado;
var $row;
var $posicion;
function bd_pp()
  {
    parent::__construct();
    $this->resultado=mysql_query("SELECT * FROM pp", $this->enlace);
    $this->row = mysql_fetch_array($this->resultado);
    }

function __destruct()
    {
  mysql_free_result($this->resultado);
  parent::__destruct();
  }

function primero()
{
$this->posicion=0;
mysql_data_seek($this->resultado, $this->posicion);
}

function ultimo()
{
$this->posicion=mysql_num_rows($this->resultado)-1;
mysql_data_seek($this->resultado, $this->posicion);
}

function siguiente()
{
$this->posicion++;
mysql_data_seek($this->resultado, $this->posicion);
}

function anterior()
{
$this->posicion--;
mysql_data_seek($this->resultado, $this->posicion);
}

function valorID()
{
    $this->row = mysql_fetch_array($this->resultado);
    return $this->row["id"];
}

};


$consulta= new bd_pp();

$consulta->primero();
echo ".." . $consulta->valorID() . "..";

$consulta->siguiente();
echo ".." . $consulta->valorID() . "..";

$consulta->ultimo();
echo ".." . $consulta->valorID() . "..";

$consulta->anterior();
echo ".." . $consulta->valorID() . "..";

echo "insert=..." . $consulta->ejecutaSQL("INSERT INTO pp VALUES (125,
'AAA')") . "...";

exit();

?>