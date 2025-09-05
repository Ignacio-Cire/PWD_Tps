

    // Obtener valores de los campos

    const form = document.getElementById('login');
    if (!form) {
        console.error('No se encontró el formulario con id "login".');
    }else {
    form.addEventListener('submit', function(event) {
   
    const user = document.getElementById('user');
    const errorUser = document.getElementById('errorUser');
    const pass = document.getElementById('password');
    const errorPass = document.getElementById('errorPass'); 
    let valid = true;

    if (!user || !pass || !errorUser || !errorPass) {
        console.error('No se encontraron los elementos necesarios para la validación.');
        return;
    }else {
    // Validar campo de usuario
    if (user.value.trim() === '') {
        valid = false;
        user.classList.add('is-invalid');
        errorUser.textContent = 'El campo usuario no puede estar vacío.';
    } else {
        user.classList.remove('is-invalid');
        errorUser.textContent = '';
    }

    // Validar campo de contraseña
    if (pass.value.trim() === '') {
        valid = false;
        pass.classList.add('is-invalid');
        errorPass.textContent = 'El campo contraseña no puede estar vacío.';
    } else {
        pass.classList.remove('is-invalid');
        errorPass.textContent = '';
    }
    }
    // Si todo es válido, enviar el formulario
    if (valid) {
        form.submit();
    }

});}
    


