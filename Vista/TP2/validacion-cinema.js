

const form = document.getElementById('cinema');
if (!form) {
    console.error('No se encontró el formulario con id "cinema".');
} else {
    form.addEventListener('submit', function(event) {
       
        
        // Obtener todos los campos
        const titulo = document.getElementById('titulo');
        const director = document.getElementById('director');
        const actores = document.getElementById('actores');
        const guion = document.getElementById('guion');
        const produccion = document.getElementById('produccion');
        const nacionalidad = document.getElementById('nacionalidad');
        const anio = document.getElementById('anio');
        const genero = document.getElementById('genero');
        const duracion = document.getElementById('duracion');
        const restriccion = document.querySelector('input[name="restriccion"]:checked');
        const sinopsis = document.getElementById('sinopsis');

        let valid = true;

        // Validar campo por campo
        if (titulo.value.trim() === '') {
            valid = false;
            titulo.classList.add('is-invalid');
        } else {
            titulo.classList.remove('is-invalid');
        }

        if (director.value.trim() === '') {
            valid = false;
            director.classList.add('is-invalid');
        } else {
            director.classList.remove('is-invalid');
        }

        if (actores.value.trim() === '') {
            valid = false;
            actores.classList.add('is-invalid');
        } else {
            actores.classList.remove('is-invalid');
        }

        if (guion.value.trim() === '') {
            valid = false;
            guion.classList.add('is-invalid');
        } else {
            guion.classList.remove('is-invalid');
        }

        if (produccion.value.trim() === '') {
            valid = false;
            produccion.classList.add('is-invalid');
        } else {
            produccion.classList.remove('is-invalid');
        }

        if (nacionalidad.value.trim() === '') {
            valid = false;
            nacionalidad.classList.add('is-invalid');
        } else {
            nacionalidad.classList.remove('is-invalid');
        }

        // Validar año (debe ser número)
        const anioActual = new Date().getFullYear();
        if (anio.value.trim() === '' || isNaN(anio.value)||anio.value < 1900|| anio.value > anioActual) {
            valid = false;
            anio.classList.add('is-invalid');
        } else {
            anio.classList.remove('is-invalid');
        }

        // Validar género (debe estar seleccionado)
        if (genero.value === '') {
            valid = false;
            genero.classList.add('is-invalid');
        } else {
            genero.classList.remove('is-invalid');
        }

        // Validar duración (debe ser número)
        if (duracion.value.trim() === '' || isNaN(duracion.value)) {
            valid = false;
            duracion.classList.add('is-invalid');
        } else {
            duracion.classList.remove('is-invalid');
        }

        // Validar restricción de edad (debe estar seleccionada)
        if (!restriccion) {
            valid = false;
            // Marcar todos los radio buttons como inválidos
            document.querySelectorAll('input[name="restriccion"]').forEach(radio => {
                radio.classList.add('is-invalid');
            });
        } else {
            document.querySelectorAll('input[name="restriccion"]').forEach(radio => {
                radio.classList.remove('is-invalid');
            });
        }

        if (sinopsis.value.trim() === '') {
            valid = false;
            sinopsis.classList.add('is-invalid');
        } else {
            sinopsis.classList.remove('is-invalid');
        }
        const archivo = document.getElementById('upload');
            if (archivo) {
                const filePath = archivo.value;
                const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    valid = false;
                    archivo.classList.add('is-invalid');
                } else {
                    archivo.classList.remove('is-invalid');
                }
            }

        // Si todo es válido, enviar el formulario
        if (valid) {
            form.submit();
        } else {
            event.preventDefault(); // Prevenir envío si hay errores
        }
    });
}