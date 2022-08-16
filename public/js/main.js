// Elementos de la página:
const loader = document.getElementById('loader')
const search_box = document.getElementById('search-box')
const search = document.getElementById('search')

// Funciones:
const Loader = () => { loader.style.display = 'none' }

// Buscar anime:
const Search = (e) => {

    // Prevenir que se envie el formulario:
    e.preventDefault()

    // Almacenar el valor de la búsqueda:
    let query = search_box.querySelector('input').value
    query = query.replace(/\s/g, '-')
    
    if (query.length > 0) {
        // Redireccionar a la página de la búsqueda:
        header(`/search/${query}`)
    } else {
        // Mostrar mensaje de error:
        alert('Debes ingresar una búsqueda')
    }

}

// Función para redireccionar a la pagina deseada:
const header = (url) => { window.location.href = url }

// Eventos:
window.addEventListener('load', Loader)
search_box.addEventListener('submit', Search)
search.addEventListener('click', Search)