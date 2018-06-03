/*!
*
*/

$(document).ready(function() {

  $(".select2").select2();
  
  $('a#delete-pekerjaan_final').click(function() 
  {
    $('div#modal-delete').modal('show');

    $('a#delete-yes').attr('href', base_url + '/pekerjaan_final/delete/' + $(this).data('id'))
  });

    //Date picker
    $('#datepicker, #datepicker1').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd"
    });

  $('.btn-print').printPage({
    url: $(this).attr('href'),
    message: "Tunggu sebentar ..."
  })


  });
