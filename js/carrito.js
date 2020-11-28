$(document).ready(function(){


    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var year = 1920;
    var estados = ["Aguascalientes","Baja California","Baja California Sur","Campeche","Chiapas","Chihuahua","Ciudad de México","Coahuila","Colima","Durango","Estado de México","Guanajuato","Guerrero","Hidalgo","Jalisco","Michoacán","Morelos","Nayarit","Nuevo León","Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosí","Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas"];
    for (var i = 0; i < meses.length; i++) {
      $('#mes').append($('<option>', {
        value: i,
        text: meses[i]
      }));
      
    }
    for (var i = 1920; i < 2021; i++) {
      $('#year').append($('<option>', {
    text: i
    }));
      
    }
    for (var i = 1; i <= 31; i++) {
      $('#dia').append($('<option>', {
    text: i
    }));
      
    }

    for (var i = 0; i < estados.length; i++) {
      $('#estado').append($('<option>', {
        value: i,
        text: estados[i]
      }));
      
    }

    $("#plazo").append("<option value=1>Semestral</option>");
      $("#plazo").append("<option value=5>Anual</option>");
    $("#plan").change(function(){
      $('#plazo').empty();
      
      $depa=$("#plan").val();

      console.log($depa);
      if ($("#plan-select").val()==1) {
        $("#plazo").append("<option value=1>Semestral</option>");
        $("#plazo").append("<option value=2>Anual</option>");
      }
      if ($("#plan-select").val()==2) {
        $("#plazo").append("<option value=1>Anual</option>");
      }

    });
    //agregar mes
    

   //  $("#mes").on('change', function() {
   //  //console.log($("#plan").val());
   //  if ($("#mes").val()==1) {
   //    $('#dia').empty();
   //    for (var i = 1; i <= 29; i++) {
   //    $('#dia').append($('<option>', {
   //  value: i,
   //  text: i
   //  }));
   //  }
   //  }

   //  if ($("#mes").val()==0 || $("#mes").val()==2 || $("#mes").val()==4 || $("#mes").val()==6 || $("#mes").val()==7 || $("#mes").val()==9 || $("#mes").val()==11) {
   //    $('#dia').empty();
   //    for (var i = 1; i <= 31; i++) {
   //    $('#dia').append($('<option>', {
   //  value: i,
   //  text: i
   //  }));
   //  }
   //  }

   //  if ($("#mes").val()==3 || $("#mes").val()==5 || $("#mes").val()==8 || $("#mes").val()==10) {
   //    $('#dia').empty();
   //    for (var i = 1; i <= 30; i++) {
   //    $('#dia').append($('<option>', {
   //  value: i,
   //  text: i
   //  }));
   //  }
   //  }

   // });
});