// Elementos de la página:
const loader = document.getElementById('loader')

// Funciones:
const Loader = () => { loader.style.display = 'none' }

// Función para redireccionar a la pagina deseada:
const header = (url) => { window.location.href = url }

// Eventos:
window.addEventListener('load', Loader)

// Buscar los caracteres ``` dentro de todo el documento:
const showCode = () => {

    const code = document.querySelectorAll('span')

    // convertir code en un array:
    const codeArray = Array.from(code)

    // recorrer el array:
    codeArray.forEach(element => {

        // buscar los caracteres ```:
        const code = element.innerText.match(/`+/g)

        // si encuentra alguno:
        if (code) {
            // Remover los caracteres ```:
            element.innerText = element.innerText.replace(/`+/g, '')
            element.classList.add('code')
        }
        
    })

}

window.addEventListener('load', showCode)