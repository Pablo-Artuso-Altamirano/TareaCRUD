// Rellena el formulario con los datos seleccionados
function mostrarForm(id, nombre, apellido, edad) {
  document.querySelector('input[name="id"]').value = id;
  document.querySelector('input[name="nombre"]').value = nombre;
  document.querySelector('input[name="apellido"]').value = apellido;
  document.querySelector('input[name="edad"]').value = edad;
}

// Ocultar la alerta después de 2 segundos
setTimeout(function () {
  const alerta = document.querySelector(".alerta");
  if (alerta) {
    alerta.style.display = "none";
  }
}, 2000);


// // Confirmación antes de modificar
// document.getElementById('modificar').addEventListener('click', function() {
//   Swal.fire({
//     title: '¿Estás seguro de modificar el usuario?',
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonText: 'Sí, modificar',
//     cancelButtonText: 'Cancelar'
//   }).then((result) => {
//     if (result.isConfirmed) {
//       document.querySelector('form').submit(); // Enviar el formulario
//     }
//   });
// });

// // Confirmación antes de eliminar
// document.getElementById('eliminar').addEventListener('click', function() {
//   Swal.fire({
//     title: '¿Estás seguro de eliminar el usuario?',
//     text: "Esta acción no se puede deshacer",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonText: 'Sí, eliminar',
//     cancelButtonText: 'Cancelar'
//   }).then((result) => {
//     if (result.isConfirmed) {
//       document.querySelector('form').submit(); // Enviar el formulario
//     }
//   });
// });