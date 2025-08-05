document.addEventListener('DOMContentLoaded', function() {
  if(document.querySelector('.text-red-400')) {
    swal("Error", document.querySelector('.text-red-400').textContent, "error");
  }
  if(document.querySelector('.text-green-400')) {
    swal("Success", document.querySelector('.text-green-400').textContent, "success");
  }
});