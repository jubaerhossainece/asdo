//sweetalert settings
function deleteData(id){
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById('submit-delete-'+id).submit();
  }
}); 
}


//initialise bootstrap alert
$(document).ready(function(){
  $('.toast').toast('show');

window.setTimeout(function(){
  var element = document.querySelector(".toast");
  element.classList.remove("show");

  //set display none for toast element
    window.setTimeout(function(){
    var parent = document.querySelector('#toast-container');
    parent.style.display = 'none';
    }, 501);
  }, 8000);
  });


// tooltip activation code
	$(function () {
	  $('[data-tooltip="tooltip"]').tooltip()
	})

// admin mail box manipulation

