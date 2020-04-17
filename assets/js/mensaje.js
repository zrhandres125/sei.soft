let cerrar = document.getElementById('cerrarmsg'),
        mensaje = document.getElementById('mensaje')

cerrar.addEventListener('click', () => {
    mensaje.remove()
})
