/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

$('#consultar').click(function () {
    $('#consultar').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Buscando...').addClass('disabled');
});

$("#imprime").click(function () {
    var printContents = document.getElementById('divimprimir').innerHTML;
    printContents = '<div style="height: 650px;width: 100%;">' + printContents + '</div>';
    printContents = printContents.replace("display: block; margin-left: auto; margin-right: auto;", "display: block; margin-left: auto; margin-right: auto; height: 100%;")
    w = window.open();
    w.document.write(printContents);
    w.document.close(); // necessary for IE >= 10
    w.focus(); // necessary for IE >= 10
    w.print();
    w.close();
});

var datepicker = $('#fechadiv').datepicker({
    pickTime: false,
    weekStart: 1,
    format: "yyyy-mm-dd",
    language: "es"
});

function showModal(elem)
{
    var altura = $(parent.window).height();
      if(isMobile.any()) {
        if(parent.window.scrollY >  (altura/1.5)){
             $("#is-modal-dialog").css("top", parent.window.scrollY  - $("#is-modal-dialog").offset().top - (altura/1.5) - 100); 
        }else{
              $("#is-modal-dialog").css("top",100);
        }
      }else{
            if(parent.window.scrollY > 0 ){
              $("#is-modal-dialog").css("top", parent.window.scrollY  - $("#is-modal-dialog").offset().top);
            }else{
                 $("#is-modal-dialog").css("top",100);
            }
      } 

    // document.getElementById("modal-text-title").innerHTML = $("#" + elem.id).attr("fallecido");
    document.getElementById("modal-field-fallecido").innerHTML = $("#" + elem.id).attr("fallecido");
    document.getElementById("modal-field-hora").innerHTML = $("#" + elem.id).attr("hora");
    document.getElementById("modal-field-nombreparque").innerHTML = $("#" + elem.id).attr("nombreparque");
    var sec = $("#" + elem.id).attr("sec");
    var par = $("#" + elem.id).attr("par");
    if (par != "CIN")
    {
        sec = sec + " - " + $("#" + elem.id).attr("modulo");
    }
    document.getElementById("modal-field-sec").innerHTML = sec;
    document.getElementById("modal-field-acceso").innerHTML = "Acceso: " + $("#" + elem.id).attr("acceso");
    var imgPath = $("#" + elem.id).attr("img");
    $("#modal-img").attr("src", imgPath);
    if (imgPath != "")
    {
        $("#modal-img").show();
    } else
    {
        $("#modal-img").hide();
    }
    $('#Modal').modal('show');
}