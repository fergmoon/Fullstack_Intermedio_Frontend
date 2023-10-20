class headermain extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = `
        <h1>FERNANDO GOMEZ</h1>
        <nav>
            <ul>
                <li>                
                    <a href="../html/index.html">home</a>
                </li>            
                <li id="dropdown" class="dropdown">
                    <a class="dropbtn" href="../html/fun.html">Fun</a>
                    <div class="dropdown-content">
                        <a href="../html/proyecto001.html">Showcase</a>
                        <a href="../html/proyecto002.html">lighting and decoration</a>
                        <a href="../html/proyecto003.html">Furnishing 1</a>
                        <a href="../html/proyecto004.html">Furnishing 2</a>
                        <a href="../html/proyecto005.html">Mobile POS 01</a>
                        <a href="../html/proyecto006.html">Special projects 1</a>
                        <a href="../html/proyecto007.html">Furnishing 3</a>
                        <a href="../html/proyecto008.html">Mobile POS 02</a>
                        <a href="../html/proyecto009.html">Comercial Stores</a>
                        <a href="../html/proyecto010.html">Mobile Exhibitions</a>
                        <a href="../html/proyecto011.html">Furnishing 4</a>
                        <a href="../html/proyecto012.html">Special projects 2</a>

                    </div>                    
                </li>
                <li>
                    <a href="../html/about.html">About</a>
                </li>
            </ul>
        </nav>
        `;
    }
}

window.customElements.define("menu-main", headermain);

/* ======= NAVEGACION ============ */

document.addEventListener('DOMContentLoaded', function() {
    var previousButton = document.getElementById('previous');
    var nextButton = document.getElementById('next');

    var numeroPagina = parseInt(window.location.pathname.match(/\d+/)[0]); // Extrae el número de la página actual desde la URL

    previousButton.addEventListener('click', function(event) {
        event.preventDefault();
        var paginaAnterior = (numeroPagina - 1) <= 0 ? 12 : numeroPagina - 1; // Si es la página 1, la anterior es la 12
        window.location.href = './../html/proyecto' + paginaAnterior.toString().padStart(3, '0') + '.html'; // Genera la URL de la página anterior
    });

    nextButton.addEventListener('click', function(event) {
        event.preventDefault();
        var paginaSiguiente = (numeroPagina + 1) > 12 ? 1 : numeroPagina + 1; // Si es la página 12, la siguiente es la 1
        window.location.href = './../html/proyecto' + paginaSiguiente.toString().padStart(3, '0') + '.html'; // Genera la URL de la página siguiente
    });
});


