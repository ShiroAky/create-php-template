const sinup = document.getElementById('sinup');
const password = document.getElementById('password')
const confirmPassword = document.getElementById('validate-password')
const message = document.getElementById('message')

window.addEventListener('keyup', () => {

    if (password.value.length > 0 && confirmPassword.value.length > 0) {

        if (password.value !== confirmPassword.value) {
            message.innerHTML = 'Las contraseñas no coinciden'
            message.style.color = 'red'
        } else {
            message.innerHTML = 'Las contraseñas coinciden'
            message.style.color = 'green'
        }
            
    } else {
        message.innerHTML = 'No has validado la contraseña'
        message.style.color = 'yellow'
    }

    if (password.value.length < 6) {
        message.innerHTML = 'La contraseña debe tener al menos 6 caracteres'
        message.style.color = 'yellow'
    }
    
})