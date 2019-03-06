$(function(){

  var base_url = window.location.origin;
  var host = window.location.pathname;

  const modul = $('.modul').data('modul');
  var inputs = $('form input[id], textarea[id], select[id]');
  
Ubah();
Tambah();
Filter();




function Filter(){
  $('.form-cari').on('submit', function (e) {
    e.preventDefault();
        var url = document.getElementById('filter').value;
        console.log(url);
        if(url != 'none') {
            window.location = url;
        }
    });
}

function Tambah()
    {
      $('.tampilModalTambah').on('click', function(){
      $(inputs).val('').closest('div.form-group').removeClass('has-error has-success').find('.text-danger').remove();  
      $('#formModalLabel').html('Tambah Data ' + modul);
      $('.modal-footer button[type=submit]').html('Tambah Data');
      
      
Validasi();

  });

}

function Ubah()
    {

  $('.tampilModalUbah').on('click', function(){

      $(inputs).val('').closest('div.form-group').removeClass('has-error has-success').find('.text-danger').remove();
      $('#formModalLabel').html('Ubah Data ' + modul);
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', base_url + host + '/edit');


      Validasi();

      const id = $(this).data('id');
      $.ajax({
        url:base_url + host + '/get_id',
        data: {id : id}, 
        method: 'post',
        dataType: 'json',
        success: function(data){
          $.each(data, function(key, value){
          var element = $('#' + key);
          element.val(value);
          });
           
        }
      });
  });

}

function Validasi()
    {

       $(".form-data").submit(function(event){
        event.preventDefault();
            var me = $(this);
            $.ajax({
                url:base_url + host + "/validate",
                type: 'post',
                data: me.serialize(),
                dataType: 'json',
                success: function(response){
                  if (response.success == true){
                    $.each(response.messages, function(key, value){
                    var element = $('#' + key);
                    element.closest('div.form-group').removeClass('has-error has-success').find('.text-danger').remove();
                    $('.form-data').unbind('submit').submit();
                    $('#submit_button').click();
                    });
                    }
                  else{
                    $.each(response.messages, function(key, value){
                      var element = $('#' + key);
                      element.closest('div.form-group').removeClass('has-error').addClass(value.length > 0 ? 'has-error' : 'has-success').find('.text-danger').remove();
                      element.after(value);

                    });
                  }
                }

            });
        });   

    }

});