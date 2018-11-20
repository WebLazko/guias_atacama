$(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" id="input_imagen" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-times" aria-hidden="true"></i></button></td></tr>');
  });

  $('#add2').click(function(){
    i++;
    $('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="file" id="input_imagen" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-times" aria-hidden="true"></i></button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  }); 
});