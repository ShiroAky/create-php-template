// Elementos de la página:
const loader = document.getElementById('loader')

// Funciones:
const Loader = () => { loader.style.display = 'none' }

// Función para redireccionar a la pagina deseada:
const header = (url) => { window.location.href = url }

// Eventos:
window.addEventListener('load', Loader)