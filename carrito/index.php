<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lockton</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8;IE=edge"/>
    <meta name="viewport" content="height=device-height" initial-scale="1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/generales.css">
    <link rel="stylesheet" type="text/css" href="../css/carrito.css">
</head>
<body>
<div class="container-fluid">	
<?php 
	include '../php/menu.php';
 ?>	
<div class="row">
    <div class="col-12" id="banner">
        <img src="../img/BANNER-1920X500-COBRO.png" id="img-compra">
    </div>
</div>

    <div class="row" id="formulario">
      <div class="col-12">
        <div id="cont-f2">  
          <form>
            <div class="form-group row pa">
              <div class="col-12 col-lg-3 padd">
                <label for="staticEmail" class=" col-form-label"><b>Asistencia:</b></label>  
                <select class="form-control" id="plan">
                  <option>Escudo Gastos Médicos Excesos Voluntarios</option>
                  <option>Escudo Gastos Médicos Básicos Lala</option>
                  <option>Escudo Membresía</option>
                  <option>Escudo Asistencia Funeraria</option>
                  <option>Escudo Dental</option>

                </select>
              </div>
              
              <div class="col-12 col-lg-6 padd">
                <label for="staticEmail" class=" col-form-label"><b>No. de Planes:</b></label> 
                <select class="form-control" id="nplanes">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 row padd">
                <label for="staticEmail" class=" col-form-label col-12 txte"><b>Costo Total:</b></label>   
                <label for="staticEmail" class=" col-form-label col-12 txte">$<span id="precio">000,000.00</span></label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 padd df">
                <label for="staticEmail" class="col-form-label titulo"><b>Empleado</b></label>  
              </div>
              <div class="col-6 col-lg-4 padd">
                <label for="ap" class="col-form-label">Apellido Paterno</label> 
                <input type="text" class="form-control" id="ap" value="" />
              </div>
              <div class="col-6 col-lg-4 padd">
                <label for="am" class="col-form-label">Apellido Materno</label> 
                <input type="text" class="form-control" id="am" value="" />
              </div>
              <div class="col-12 col-lg-4 padd" id="botonf">
                <label for="nom" class="col-form-label">Nombre</label>  
                <input type="text" class="form-control" id="nom" value="" />
              </div>
              <!--<div class="col-12 col-lg-4 padd">
                <label for="nt" class="col-form-label">Nombre de tarjetabiente</label>  
                <input type="text" class="form-control" id="nt" value="" />
              </div> -->
              <div class="col-2"></div>
              <div class="col-12 col-lg-4 padd">
                <label for="numt" class="col-form-label">Número de tarjeta de crédito o débito</label>  
                <input type="email" class="form-control" id="numt" value="" maxlength="13" />
              </div>
              <div class="col-12 col-lg-4 row padd">
                <!--<div class="col-6">
                  <label for="cvc" class="col-form-label">CVC</label>   
                  <input type="email" class="form-control" id="cvc" value="" maxlength="3" />   
                </div> -->  
                <div class="col-12 row padd" id="fecha">
                  <label for="staticEmail" class="col-form-label col-12">Fecha de Expiración</label>    
                  <input type="text" class="form-control col-5" id="staticEmail" value="" />
                  <label for="staticEmail" class="col-form-label col-1 txtc">-</label>
                  <input type="text" class="form-control col-6" id="staticEmail" /> 
                </div>
            </div>
            <div class="col-2"></div>
          <!--  <div class="form-group row">
              <div class="col-sm-4 row padd">
                <div class="col-12">
                    <label for="nom" class="col-form-label">Fecha de nacimiento</label> 
                </div>
                <div class="col-4 birth">
                 <select class="form-control" id="dia">
                </select> 
                </div>
                <div class="col-4 birth">
                 <select class="form-control" id="mes">
                </select> 
                </div>
                <div class="col-4 birth padding-0">
                 <select class="form-control" id="year">
                </select> 
                </div>
              </div>
              <div class="col-sm-4 padd">
                <label for="ce" class="col-form-label">Correo Electrónico</label>   
                <input type="text" class="form-control" id="ce" value="" />
              </div>
              <div class="col-sm-4 padd" id="botonf">
                <label for="teltit" class="col-form-label">Teléfono</label> 
                <input type="text" class="form-control" id="teltit" value="" />
              </div>
            </div> -->
            <div class="form-group row">
              <div class="col-12 padd df">
                <label for="staticEmail" class="col-form-label titulo"><b>Asegurado</b></label>  
              </div>

              <div class="col-6 col-lg-4 padd">
                <label for="ap" class="col-form-label">Apellido Paterno</label> 
                <input type="text" class="form-control" id="ap" value="" />
              </div>
              <div class="col-6 col-lg-4 padd">
                <label for="am" class="col-form-label">Apellido Materno</label> 
                <input type="text" class="form-control" id="am" value="" />
              </div>
              <div class="col-12 col-lg-4 padd" id="botonf">
                <label for="nom" class="col-form-label">Nombre</label>  
                <input type="text" class="form-control" id="nom" value="" />
              </div>

              <div class="col-6 col-lg-4 padd">
                <label for="ap" class="col-form-label">Entidad</label> 
                <select class="form-control" id="estado">
               </select>
              </div>
              <div class="col-6 col-lg-4 row padd">
                <div class="col-12">
                  <label for="nom" class="col-form-label">Fecha de nacimiento</label> 
                </div>
                <div class="col-4 birth">
                 <select class="form-control" id="dia">
                 </select> 
               </div>
               <div class="col-4 birth">
                 <select class="form-control" id="mes">
                 </select> 
               </div>
               <div class="col-4 birth padding-0">
                 <select class="form-control" id="year">
                 </select> 
               </div>
             </div>
              <div class="col-12 col-lg-2 padd" id="botonf">
                <label for="nom" class="col-form-label">Sexo</label>  
                <select class="form-control">
                 <option>H</option>
                 <option>M</option>
                 </select>
              </div>

              <div class="col-sm-12 col-lg-6 padd padding-left">
                <label for="txtcorr" class="col-form-label">Parentesco</label>  
                <select class="form-control">
                 <option>cónyuge</option>
                 <option>padre</option>
                 <option>madre</option>
                 <option>hijo</option>
                 <option>hija</option>
                 <option>tio</option>
                 <option>tia</option>
                 <option>sobrino</option>
                 <option>sobrina</option>
               </select>
             </div>
             <div class="col-sm-12 col-lg-6 padd padding-right">
              <label for="tel" class="col-form-label">Teléfono</label>    
              <input type="text" class="form-control" id="tel" value="" maxlength="10" />
            </div>
            <div class="col-12 display-flex">
              <div class="custom-control custom-checkbox margin-auto check">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Tus datos serán tratados por INFOASIST INFORMACION Y ASISTENCIA S. DE R.L. DE C.V.<br>Acepto los Términos y Condiciones de la Asistencia que estoy contratando.</label>
              </div>
            </div>
            <div class="col-12 padd df" id="botonf">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
            </div>

            </div>
            <div class="form-group row pm">

          </div>

          </form>   
        </div>  
      </div>    
    </div>

 <?php
  include '../php/modal.php'; 
 	include '../php/footer.php';
  ?>
</div>	

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/carrito.js"></script>
</body>
</html>