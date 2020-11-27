<!DOCTYPE html>
<html lang="es">

<head>
  <title>Carrito de Compra - Lockton</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../carrito/css/bootstrap.min.css?v=<?= time(); ?>">
  <link rel="stylesheet" type="text/css" href="../carrito/css/generales.css?v=<?= time(); ?>">
  <link rel="stylesheet" type="text/css" href="../carrito/css/compra.css?v=<?= time(); ?>">
  <link rel="stylesheet" type="text/css" href="../carrito/css/index.css?v=<?= time(); ?>">
</head>

<body>
  <div class="container-fluid">

    <div class="container-fluid">

      <div class="d-flex justify-content-end">
        <figure>
          <a href="../index.php"><img src="img/logo-lockton.png" height="100px"></a>
        </figure>
      </div>



      <div id="small-line">
      </div>

      <div class="d-flex justify-content-start align-items-center" id="header-line">
        <div class="p-2"></div>
        <div class="p-3"><a href="../carrito/index.php"><img class="resize" src="img/shopping-kart-icon.png" style="width:2em; height:2em;"></a>
        </div>
        <div class="p-3">
          <h4 style="color:aliceblue">0</h4>
        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <img src="img/bannercobro.png" id="banner" />
        </div>
      </div>

      <div class="row justify-content-center align-items-center" style="background: #919191; color:white; height: 800px">
        <div class="col-10 align-items-center">
          <div class="align-items-center">
            <form>
              <div class="form-group row">
                <div class="col-12 col-lg-3 padd">
                  <label for="staticEmail" class=" col-form-label"><b>Asistencia:</b></label>
                  <select class="form-control roundBorder" id="asistencia">
                    <option>Escudo Gastos Médicos Excesos Voluntarios</option>
                    <option>Escudo Gastos Médicos Básicos Lala</option>
                    <option>Escudo Membresía</option>
                    <option>Escudo Asistencia Funeraria</option>
                    <option>Escudo Dental</option>
                  </select>
                </div>
                <div class="col-12 col-lg-3 padd">
                  <label for="staticEmail" class=" col-form-label"><b>No. de Planes:</b></label>
                  <select class="form-control roundBorder" style="width: 50px">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-12 col-lg-3 padd">
                </div>
                <div class="col-12 col-lg-3 row padd">
                  <label for="staticEmail" class=" col-form-label col-12 txte"><b>Costo Total:</b></label>
                  <label for="staticEmail" class=" col-form-label col-12 txte">$<span id="precio">0.00</span></label>
                </div>
              </div>
              <div id="small-line">
              </div>
              <div class="form-group row">
                <div class="col-10 padd df">
                  <label for="staticEmail" class="col-form-label titulo" style="font-size:17px; padding-top: 25px"><b>Titular</b></label>
                </div>
                <div class="col-6 col-lg-4 padd">
                  <label for="ap" class="col-form-label">Apellido Paterno</label>
                  <input type="text" class="form-control roundBorder" id="ap" value="" />
                </div>
                <div class="col-6 col-lg-4 padd">
                  <label for="am" class="col-form-label">Apellido Materno</label>
                  <input type="text" class="form-control roundBorder" id="am" value="" />
                </div>
                <div class="col-12 col-lg-4 padd" id="botonf">
                  <label for="nom" class="col-form-label">Nombre(s)</label>
                  <input type="text" class="form-control roundBorder" id="nom" value="" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4 row padd">
                  <div class="col-12">
                    <label for="nom" class="col-form-label roundBorder">Fecha de nacimiento</label>
                  </div>
                  <div class="col-4 birth">
                    <select class="form-control roundBorder" style="width: 150px">
                      <option selected hidden>Día</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
                  <div class="col-4 birth">
                    <select class="form-control roundBorder" style="width: 150px">
                      <option selected hidden>Mes</option>
                      <option value="01">Enero</option>
                      <option value="02">Febrero</option>
                      <option value="03">Marzo</option>
                      <option value="04">Abril</option>
                      <option value="05">Mayo</option>
                      <option value="06">Junio</option>
                      <option value="07">Julio</option>
                      <option value="08">Agosto</option>
                      <option value="09">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                    </select>
                  </div>
                  <div class="col-4 birth">

                    <select class="form-control roundBorder" style="width: 150px">
                      <option selected hidden>Año</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                      <option value="1969">1969</option>
                      <option value="1968">1968</option>
                      <option value="1967">1967</option>
                      <option value="1966">1966</option>
                      <option value="1965">1965</option>
                      <option value="1964">1964</option>
                      <option value="1963">1963</option>
                      <option value="1962">1962</option>
                      <option value="1961">1961</option>
                      <option value="1960">1960</option>
                      <option value="1959">1959</option>
                      <option value="1958">1958</option>
                      <option value="1957">1957</option>
                      <option value="1956">1956</option>
                      <option value="1955">1955</option>
                      <option value="1954">1954</option>
                      <option value="1953">1953</option>
                      <option value="1952">1952</option>
                      <option value="1951">1951</option>
                      <option value="1950">1950</option>
                      <option value="1949">1949</option>
                      <option value="1948">1948</option>
                      <option value="1947">1947</option>
                      <option value="1946">1946</option>
                      <option value="1945">1945</option>
                      <option value="1944">1944</option>
                      <option value="1943">1943</option>
                      <option value="1942">1942</option>
                      <option value="1941">1941</option>
                      <option value="1940">1940</option>
                      <option value="1939">1939</option>
                      <option value="1938">1938</option>
                      <option value="1937">1937</option>
                      <option value="1936">1936</option>
                      <option value="1935">1935</option>
                      <option value="1934">1934</option>
                      <option value="1933">1933</option>
                      <option value="1932">1932</option>
                      <option value="1931">1931</option>
                      <option value="1930">1930</option>
                    </select>

                  </div>
                </div>
                <div class="col-sm-4 padd">
                  <label for="ce" class="col-form-label">Correo Electrónico</label>
                  <input type="text" class="form-control roundBorder" id="ce" value="" />
                </div>
                <div class="col-sm-4 padd" id="botonf">
                  <label for="teltit" class="col-form-label">Teléfono</label>
                  <input type="text" class="form-control roundBorder" id="teltit" value="" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 padd df">
                  <label for="staticEmail" class="col-form-label titulo"><b>Datos del Tarjetabiente</b></label>
                </div>
                <div class="col-12 col-lg-4 padd">
                  <label for="nt" class="col-form-label">Nombre de tarjetabiente</label>
                  <input type="text" class="form-control roundBorder" id="nt" value="" />
                </div>
                <div class="col-12 col-lg-4 padd">
                  <label for="numt" class="col-form-label">Número de Tarjeta de Crédito o Débito</label>
                  <input type="email" class="form-control roundBorder" id="numt" value="" maxlength="13" />
                </div>
                <div class="col-12 col-lg-4 row padd">
                  <div class="col-6">
                    <label for="cvc" class="col-form-label">CVC</label>
                    <input type="email" class="form-control roundBorder" id="cvc" value="" maxlength="3" />
                  </div>
                  <div class="col-6 row padd" id="fecha">
                    <label for="staticEmail" class="col-form-label col-12">Fecha de Expiración</label>
                    <input type="text" class="form-control col-5 roundBorder" id="staticEmail" value="" />
                    <label for="staticEmail" class="col-form-label col-1 txtc">-</label>
                    <input type="text" class="form-control col-6 roundBorder" id="staticEmail" />
                  </div>
                </div>
              </div>
              <div class="form-group row pm">
                <div class="col-12 col-lg-6 padd padding-left">
                  <label for="txtcorr" class="col-form-label">Correo Electrónico</label>
                  <input type="email" class="form-control roundBorder" id="txtcorr" value="" />
                </div>
                <div class="col-12 col-lg-6 padd padding-right">
                  <label for="tel" class="col-form-label">Teléfono</label>
                  <input type="text" class="form-control roundBorder" id="tel" value="" maxlength="10" />
                </div>
                <div class="col-12 display-flex">
                  <div class="custom-control custom-checkbox margin-auto check">
                    <input type="checkbox" class="custom-control-input roundBorder" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1" style="color:white;">Tus datos serán tratados por INFOASIST INFORMACION Y ASISTENCIA S. DE R.L. DE C.V.<br>Acepto los Términos y Condiciones de la Asistencia que estoy contratando.</label>
                  </div>
                </div>
                <div class="col-12 padd df align-content-center" id="botonf">
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" style="font-size:17px; color:white; background-color: #1dadf2; width:250px; height: 40px; padding-top: 4px; padding-bottom: 4px; border-radius: 2px;">COMPRAR</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade pop-up" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg pop-up" role="document">
          <div class="modal-content pop-up" style="padding: 30px">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="round-button"><b>X</b></button>
            </div>

            <div class="modal-body">
              <h6 class="justify">Gracias por completar la solicitud de programas complementarios, te confirmamos que has solicitado:</h6>
              <p></p>
              <p><b>NOMBRE DEL PROGRAMA: $COSTO</b></p>
              <p></p>
              <p><b>NOMBRE DEL PROGRAMA: $COSTO</b></p>
              <p></p>
              <p><b>NOMBRE DEL PROGRAMA: $COSTO</b></p>

              <h6 class="justify justify-content-center">Recuerda que la activación de estos prorgamas depende de que se cumplan las reglas de<br>
                negocio, lo cual se definirá al concluir el periodo de enrolamiento, una vez que tu(s)<br> progrgama(s)
                sean activados, recibirás por correo una confirmación con las pólizas<br> correspondientes y se
                realizará el cargo de la primera mensualidad a la tarjeta que registraste<br> como medio de pago y a la misma se hará el cargo recurrente.</h6>
            </div>

          </div>
        </div>
      </div>

      <?php
      include '../php/footer.php';
      ?>
    </div>

    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/compra.js"></script>
</body>

</html>