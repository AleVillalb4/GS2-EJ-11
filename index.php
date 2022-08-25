<?php

header('Content-Type: application/json');

require_once 'modelo/demostracion.php';
require_once 'modelo/linea.php';
require_once 'modelo/respuestaLinea.php';
require_once 'modelo/tasa.php';
require_once 'modelo/tipoLinea.php';


$tasa = new Tasa();
$tasa->PlazoDesde = 0;
$tasa->PlazoHasta = 48;
$tasa->Tem = 4.7671;
$tasa->Tna = 58;
$tasa->ListTasaScore = null;


$tplinea = new TipoLinea();
$tplinea->Codigo = '1';
$tplinea->Descripcion = 'Convencional';

$demo = new Demostracion();
$demo-> Codigo ='1'; 
$demo-> Descripcion = 'DNI';


$linea =new Linea();
$linea-> Id = 222;
$linea-> Codigo ='752';
$linea->Demostracion =$demo;
$linea->Linea ='Linea sin RCI';
$linea->RelacionCuotaIngreso= 100;
$linea->TipoLinea=$tplinea;
$linea->Tasa=$tasa;
$linea->Tope=250000;

$rplinea= new RespuestaLinea();
$rplinea-> ContieneError=False;
$rplinea->Mensaje =null;
$rplinea->Linea=$linea;

echo json_encode($rplinea);
