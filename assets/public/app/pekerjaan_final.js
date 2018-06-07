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

   var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
