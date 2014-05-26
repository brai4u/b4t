$(document).ready(function(){
    $('#1').click(function(){
       $('#imagen').trigger('click');
       $('#listo').attr('style', '');
       $('#1').attr('style', 'display: none');
    });

  $('#listo').click(function(){
       $('#imagen').trigger('click');
    });

    $('#2').click(function(){
       $('#enviar').trigger('click');
       $('#2').attr('style', 'display: none');
       $('#loading').attr('style', '');
       $('#generado').attr('style', '');   
    });

    $("#aviso").click(function(){
      window.open("http://bannerfortwitter.tumblr.com/post/86561890186/algunos-cambios", "_blank");
    });
})