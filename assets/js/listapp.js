$(document).ready(function () {
    $('#list-items').html(localStorage.getItem('listItems'));
    
    var count = $("#list-items li").length ;
    $('#count-list').append("Kamu memiliki "+ count + " list");

    $('.add-items').submit(function(event) 
    {
      var item = $('#todo-list-item').val();
      var count = $("#list-items li").length ;
      
      var text = $('#todo-list-item').val().length;	
    if (text == 0) {				
    alert( "Inputan tidak boleh kosong");
    return false;

    }
      else{
        $('#list-items').append("<li class='container'>" + item + "</br><a class='remove button'>Hapus</a><hr></li>");
        localStorage.setItem('listItems', $('#list-items').html());
        $('#todo-list-item').val(""); 
      }
      alert( item +' berhasil ditambahkan ! Kamu memiliki ' +  (count+1) + ' list.');
    }
    );
  
    $(document).on('click', '.remove', function() 
    {
        var count = $("#list-items li").length ;
        location.reload();
        $(this).parent().remove();
        localStorage.setItem('listItems', $('#list-items').html());
        alert( 'Kamu berhasil menghapus! Kamu memiliki ' +  (count-1) + ' list.');
    });

    $(".clear-all").click(function () {
        location.reload();
        localStorage.removeItem('listItems');
        $("#list-items").remove();
        
    });
  });