// Rellena el formulario con los datos seleccionados
function mostrarForm(id, nombre, apellido, edad) {
  document.querySelector('input[name="id"]').value = id;
  document.querySelector('input[name="nombre"]').value = nombre;
  document.querySelector('input[name="apellido"]').value = apellido;
  document.querySelector('input[name="edad"]').value = edad;
}

// Ocultar la alerta después de 5 segundos
setTimeout(function () {
  const alerta = document.querySelector(".alerta");
  if (alerta) {
    alerta.style.display = "none";
  }
}, 2000);
