<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lockton</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8;IE=edge"/>
    <meta name="viewport" content="height=device-height" initial-scale="1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/generales.css">
    <link rel="stylesheet" type="text/css" href="../css/basico.css">
</head>
<body>
<div class="container-fluid">	
<?php 
	include '../php/menu.php';
 ?>	
<div class="row">
    <div class="col-12" id="banner">
        <img src="../img/banner-basico.png" id="img-compra" width="100%">
    </div>
</div>
<div class="row" id="textos">
  <div class="col-sm-12 col-lg-6 display-flex textos-1">
    <div class="margin-auto row">
      <div class="col-12">
        <p>Categorías: <span class="azul">Dependientes Jefes</span></p>
      </div>
      <div class="col-12">
        <p>Asistenciadora: <span class="azul">Iké Asistencia</span></p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-lg-6 display-flex textos-1">
    <div class="margin-auto row">
      <div class="col-12">
        <p>Aseguradora: <span class="azul">Seguros Monterrey New York Life</span></p>
      </div>
      <div class="col-12">
        <p>Elegibilidad: <span class="azul">Dependientes Jefes</span></p>
      </div>
    </div>
  </div>
</div>
<div class="row" id="tablas">
  <div class="col-12 display-flex espacio" id="txt-1">
    <p class="margin-auto"><b>Escudo GMM Básico Lala es el respaldo para la salud de tu familia / dependientes.</b><br>     Tu familia / dependientes, contarán con un programa de Gastos Médicos Mayores. Y además, tendrán acceso a las siguientes asistencias: Consultas con Médico General, Ambulancia
      por emergencia, Descuentos en laboratorios y Farmacias, Asistencias virtuales:
    Médica, Psicológica y Pedagógica.</p>
  </div>
  <div class="col-12 display-flex">
    <table class="margin-auto">
      <tr>
        <th>COBERTURAS BÁSICAS</th>
        <th>GERENTES</th>
      </tr>
      <tr>
        <td>Vigencia</td>
        <td>10/Dic/20-21(Periodo de contratación 1 mes)</td>
      </tr>
      <tr>
        <td>Contratación</td>
        <td>Dependientes del Titular</td>
      </tr>
      <tr>
        <td>Elegibilidad</td>
        <td>Cónyuge hasta 64 años</td>
      </tr>
      <tr>
        <td rowspan="2">Plan Hospitalario</td>
        <td>Hijos menores de 25 años</td>
      </tr>
      <tr>
        <td>Nacional</td>
      </tr>
      <tr>
        <td>Honorarios Quirúrgicos por reembolso</td>
        <td>Gua +75 %</td>
      </tr>
      <tr>
        <td>Suma Asegurada</td>
        <td>$5,000,000</td>
      </tr>
      <tr>
        <td>Deducible</td>
        <td>" SMGM (7,393)</td>
      </tr>
      <tr>
        <td>Coaseguro</td>
        <td>10%</td>
      </tr>
      <tr>
        <td>Tope de Coaseguro</td>
        <td>$ 30,000</td>
      </tr>
      <tr>
        <td>Derecho de Conversión a Individual</td>
        <td>No amparado</td>
      </tr>
      <tr>
        <td>Asistencias *</td>
        <td class="txt-espaciado">Médico On Line (Servicios Ilimitados)<br>
        Ambulancia (2 eventos anuales)<br>Consultas con Pediatras (2 anuales sin costo)<br>Consultas Médicos Generales (2 anuales sin costo)<br>Descuentos Médicos<br>Check Up Básico (1 evento anual)</td>
      </tr>
      <tr>
        <td>Forma de Pago</td>
        <td>Mensual (Tarjeta de Crédito o Débito)</td>
      </tr>
      <tr>
        <td>Mínimo de concentración</td>
        <td>15% de la Población Titular</td>
      </tr>
    </table>
  </div>
  <div class="col-12 display-flex espacio" id="formulario">
    <form class="margin-auto">
      <div class="form-row">
        <div class="col-sm-6 col-lg-3 padding-right">
          <label for="inputEmail4">Edad</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-sm-6 col-lg-3 padding-right">
          <label for="inputEmail4">Sexo</label>
          <select id="inputState" class="form-control">
            <option>Hombre</option>
            <option>Mujer</option>
          </select>
        </div>
        <div class="col-sm-6 col-lg-3 padding-right">
          <label for="inputEmail4">Costo Final</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-sm-6 col-lg-3 display-flex" id="adquirir">
          <button type="button" class="btn btn-primary margin-auto">ADQUIRIR</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-12 display-flex espacio">
    <small class="margin-auto texto-centrado">
      <b>No ampara: Complementos, Antigüedad, eliminación de periodos de espera, Dividendos, Facturas Individualizadas.
      Beneficio no portable.<br>*Amparado por Iké Asistencias (Aplican condiciones de acuerdo a sus condiciones Generales).<br>La divulgación incompleta y parcial de los hechos importantes que puedan influir en la apreciación del riesgo, incurrirá en la falsa declaración<br>/no divulgación de información;  hecho que facultará a la(s) compañía(s) de seguros para considerar la invalidez de la cotización proporcionada o el contrato de seguro emitido.</b>
    </small>
  </div>
</div>

 <?php 
 	include '../php/footer.php';
  ?>
</div>	

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/carrito.js"></script>
</body>
</html>