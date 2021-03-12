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

// alert box fade automatically after 6seconds
  $(".toast").delay(6000).fadeOut(800, "linear");
});


// tooltip activation code
	$(function () {
	  $('[data-tooltip="tooltip"]').tooltip()
	})


	// sweet alert 2 initialisation
	