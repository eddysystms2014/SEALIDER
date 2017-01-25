<?php
include('../lib/nusoap.php');
$server = new soap_server();

$server->configureWSDL('Servidor', 'urn:Servidor');
$server->wsdl->addComplexType(
        'ArrayOfString', 'complexType', 'array', '', 'SOAP-ENC:Array', array(), array(array('ref' => 'SOAP-ENC:arrayType', 'wsdl:arrayType' => 'xsd:string[]')));

$server->register('MetodoConsultar',
    array('cedula' => 'xsd:string'),
    array('return' => 'tns:ArrayOfString'),
    'urn:MetodoConsultarwsdl',
    'urn:MetodoConsultarwsdl#MetodoConsultar',
    'rpc',
    'encoded',
    'Retorna el datos'
);

function MetodoConsultar($cedula){
    
        $link = mysqli_connect('localhost','root','','sealider'); 
        
        $sql1="select m.DESCRIPCION, d.NOMBRE_APELLIDO, n.NOTA1, n.NOTA2, n.NOTA3, n.NOTA4,  SUM(n.NOTA1+n.NOTA2+n.NOTA3+n.NOTA4)/4 as PROMEDIO FROM notas n LEFT JOIN materias m on n.ID_MATERIA=m.ID_MATERIA LEFT JOIN instructor d on d.CED_INSTRUCTOR=m.CED_INSTRUCTOR JOIN estudiante a on a.CED_ESTUDIANTE=n.CED_ESTUDIANTE WHERE a.CED_ESTUDIANTE='$cedula' GROUP BY a.CED_ESTUDIANTE, n.ID";
    
        $q = mysqli_query($link,$sql1) or die("problemas al consultar");
                    
        $datos=array();           
        while ($dato = mysqli_fetch_array($q)) {
                array_push($datos,json_encode($dato));
        }

        return $datos;           
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);


