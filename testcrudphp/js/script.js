$(document).ready(function(){
  showTable();

    // add modal
    $('#add').click(function(){
      $('#addModal').modal('show');
      $('#addForm')[0].reset();
    });

    $('#addButton').click(function(){
      var first = $('#firstname').val();
      var last = $('#lastname').val();
      var address = $('#address').val();
      if (first !== '' && last !== '' &&  address !== '') {
        var addForm = $('#addForm').serialize();
        $.ajax({
          type: 'POST',
          url: 'add.php',
          data: addForm,
          success: function(){
            $('#addModal').modal('hide');
            $('#addForm')[0].reset();
            showTable();
            $('#alert').slideDown();
            $('#alerttext').text('Info Created Successfully');
          }
        });
      } else {
        alert('Please input all fields');
      }
    });

    // Edit
    $(document).on('click','.edit', function(){
      var id = $(this).data('id');
      var first = $('#first'+id).text();
      var last = $('#last'+id).text();
      var address = $('#address'+id).text();
      $('#editModal').modal('show');
      $('#eid').val(id);
      $('#efirstname').val(first);
      $('#elastname').val(last);
      $('#eaddress').val(address);
    });

    $('#editButton').click(function(){
      // alert('data updated');
      var id = $('#eid').val();
      var editForm = $('#editForm').serialize();
      $.ajax({
        type: 'POST',
        url: 'edit.php',
        data: editForm + "&id="+id,
        success: function(response){
          console.log(response);
          $('#editModal').modal('hide');
          $('#editForm')[0].reset();
          showTable();
          $('#alert').slideDown();
          $('#alerttext').text('Info Updated Successfully');
        }
      });
    });




    // Delete
    $(document).on('click', '.delete',function(){
      var id = $(this).data('id');
      var first = $('#first'+id).text();
      var last = $('#last'+id).text();
      var address = $('#address'+id).text();
      $('#delModal').modal('show');
      $('#dfirstname').text(first);
      $('#dlastname').text(last);
      $('#daddress').text(address);
      $('#delButton').val(id);
    });

    $('#delButton').click(function(){
      var id = $(this).val();
      $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: {
          id: id,
        },
        success: function(){
          $('#delModal').modal('hide');
          showTable();
          $('#alert').slideDown();
          $('#alerttext').text('Info Deleted Successfully');
        }
      });
    });


});

function showTable(){
  $.ajax({
    type: 'POST',
    url: 'fetch.php',
    data: {
      fetch: 1
    },
    success: function(data){
      $('#table').html(data);
    }
  });
}