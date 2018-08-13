$(document).ready(function() {
  $("#previa").load(function() {
    $(this).fadeTo("normal", 1.0);
  });

  moverSlide();

  if ($('#previa').length) {
    $('#barra a').each(function(index, element){
      $(element).mouseover(function() {
        id = $(this).attr('id');
        if (id && id != '') cambiarPrevia('pre-'+id+'.jpg');
      });

      $(element).mouseout(function() {
        cambiarPrevia('');
      });
    });
  }

  if ($(this).attr('title') == 'TecMoLiq.com.ar') {
    //Intro
    setTimeout(function(){
      $("#avion #imagen img").animate({
        height: "400px"
      }, 3000, function(){
        $("#avion #imagen img").animate({
          height: "850px"
        }, 3000);
      });
    },300);
  }

  if ($(this).attr('title').search('Contáctenos') != -1 || $(this).attr('title').search('Contact Us') != -1) {
    init_map();
  }
})

function moverSlide(){
  $('#img1').animate({top: '-=528px'}, 5000, function() {
    $('#img1').css({top:'0px'});
    moverSlide();}
  );
}

function cambiarPrevia(archivo){
  pre = $('#previa');
  $("#previa").stop()
  if (this.location.href.match(/\/eng\//) != null) {
    archivo = "/img/"+archivo;
  } else {
    archivo = "/img/"+archivo;
  }
  if (pre) {
    if (archivo != "/img/") {
      if ($('#previa').attr("src") != archivo) {
        var imagen = new Image();
        imagen.src = archivo;
        $("#previa").stop().fadeTo("fast", 0.0, function() {
          $("#previa").attr("src", archivo);}
        );
      };
    } else {
      $("#previa").stop().fadeTo("fast", 0.0);
    }
  }
}

var startZoom = 9;
var map;
var marker = false;

//Crea el mapa vacio
var mymap = false
function init_map() {
  mymap = L.map('mapa').setView([-34.71714803840951, -58.30205535624998], 14);
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      subdomains: ['a','b','c']
  }).addTo(mymap)

  var marker = L.marker([-34.71714803840951, -58.30205535624998]).addTo(mymap);

  mymap.flyTo(marker.getLatLng(), 14);
}

function centerMarker(id){
  mymap.setView(marker.getLatLng(), 14);
}
