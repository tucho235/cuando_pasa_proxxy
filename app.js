/**
 * APP
 * @tucho235
 * tucho235.com.ar
 * v0.1
 * 2018-10-08
 * @type {HTMLElement}
 */
    const favButton        = document.getElementById('addParadaToFavs');
    const linkAddToFav     = document.getElementById('linkAddToFav');
    const unfavButton      = document.getElementById('removeParadaFromFav');
    const resetFavButton   = document.getElementById('resetFav');
    let   favList          = document.getElementById('favList');
    let   favsListed       = document.getElementsByClassName('paradaFavorita');
    let   favoritesStops   = {};


    /**
     * Función que carga el número de la parada favorita clickeada en el input para buscar
     * @param e
     */
    function loadBusStop(e)
    {
        let stopNumber = e.target.dataset.parada;
        const input    = document.getElementById('parada');
        input.value    = stopNumber;
        e.preventDefault();
    }


    /**
     * Agrega una parada favorita al header e inicializa el evento que cargue ese número en el input
     * @param stopNumber
     * @param stopName
     */
    function addFavToListHeader(stopNumber, stopName){
        let newLi      = document.createElement("li");
        newLi.classList.add('favItem');
        newLi.setAttribute('data-parada', stopNumber);
        let newA       = document.createElement("a");
        newA.href      = '#';
        newA.innerText = stopNumber + ' - ' + stopName;
        newA.classList.add('paradaFavorita');
        newA.setAttribute('data-parada', stopNumber);
        newA.addEventListener('click', loadBusStop);
        newLi.appendChild(newA);
        favList.appendChild(newLi);
    }


    /**
     * Elimina elementos del DOM con 1 determinada clase
      * @param className
     */
    function removeElementsByClass(className)
    {
        let elements = document.getElementsByClassName(className);
        while(elements.length > 0){
            elements[0].parentNode.removeChild(elements[0]);
        }
    }


    /**
     * Agrega una parada al listado de favoritos, tanto en el localStorage como en el Header.
     * @param e
     */
    function addToFav(e)
    {
        let stopNumber = favButton.dataset.parada;
        let stopName   = document.getElementById('nameParadaFav').value ? document.getElementById('nameParadaFav').value : stopNumber ;

        // Agrego la parada al localStorage
        favoritesStops[stopNumber] = stopName;
        localStorage.setItem('favoritesStops', JSON.stringify(favoritesStops));

        // actualizo las estrellas de fav/unfav
        unfavButton.style.display  = "inline";
        linkAddToFav.style.display = "none";

        // Agrego la parada al header
        addFavToListHeader(stopNumber, stopName);

        // cierro el modal
        $('#exampleModalCenter').modal('hide');
        document.getElementById('nameParadaFav').value= '';
        e.preventDefault();
    }
    if(favButton) favButton.addEventListener('click', addToFav);


    /**
     * Elimina una parada del listado de favoritas, tanto en el localStorage como en el Header.
     * @param e
     */
    function removeFromFav(e)
    {
        let stopNumber = unfavButton.dataset.parada;

        // Elimino la parada del localStorage
        delete favoritesStops[stopNumber];
        localStorage.setItem('favoritesStops', JSON.stringify(favoritesStops));

        // actualizo las estrellas de fav/unfav
        unfavButton.style.display  = "none";
        linkAddToFav.style.display = "inline";

        // elimino la parada del header
        favsListed = document.getElementsByClassName('favItem');
        for (let i = 0; i < favsListed.length; i++) {
            if(favsListed[i].dataset.parada === stopNumber){
                favsListed[i].remove();
            }
        }

        e.preventDefault();
    }
    if (unfavButton) unfavButton.addEventListener('click', removeFromFav);


    /**
     * Elimino todas las paradas guardadas en favoritos, tanto en el localStorage como en el Header.
     * @param e
     */
    function resetFav(e)
    {
        if(confirm('Está seguro que desea eliminar todos los favoritos?'))
        {
            // Elimino el localStorage
            if(typeof localStorage.getItem('favoritesStops') !== 'undefined') {
                localStorage.removeItem('favoritesStops');
            }

            // Elimino todas las paradas del header
            removeElementsByClass('favItem');
        }

        e.preventDefault();
    }
    resetFavButton.addEventListener('click', resetFav);


    /**
     * Agrego las paradas que hay en el localStorage al header
     * @param e
     */
    function fillFavs(e)
    {
        Object.keys(favoritesStops).forEach(function(index)
        {
            addFavToListHeader(index, favoritesStops[index]);
        });
    }


    /**
     * Función que inicializa la app
     */
    function init()
    {
        // Si existe el localStorage lleno con esos datos la variable favoritesStops;
        if ((typeof localStorage.getItem('favoritesStops') === 'undefined') || (localStorage.getItem('favoritesStops') !== null)) {
            favoritesStops = JSON.parse(localStorage.getItem('favoritesStops'));
        }

        // lleno el header con las paradas en favoritos
        fillFavs();

        // inicializo los links de las estrellas según la parada exista entre las favoritas o no.
        if(favButton)
        {
            let stopNumber = favButton.dataset.parada;
            if (Object.keys(favoritesStops).length && favoritesStops[stopNumber]) {
                if(unfavButton) unfavButton.style.display  = "inline";
                if(linkAddToFav) linkAddToFav.style.display = "none";
            } else {
                if(unfavButton) unfavButton.style.display  = "none";
                if(linkAddToFav) linkAddToFav.style.display = "inline";
            }
        }

    }
    window.addEventListener('DOMContentLoaded', init, true);

    document.getElementById('nameParadaFav').addEventListener('keyup', function(e){if (e.which == 13 || e.keyCode == 13) { addToFav(e); }});