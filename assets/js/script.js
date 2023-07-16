if (!localStorage.getItem("popupShown")) {
    var popupContent = `
        <div id="popup">
          <h2><span>Nouveau !</span> PRIVATE&nbsp;POOL</h2>
          <p>Deux nouvelles salles disponibles avec piscine privative !<br>
            Consultez notre page <a href="./privatepool.php">Private Pool</a> pour plus d'informations.
          </p>
          <button class="buttonPopup form-control w-50">Fermer</button>
        </div>
      `;

    // Fonction pour afficher le popup
    function showPopup() {
        $('body').addClass('popup-open');
        $('#popup').show();
        $('body').css('overflow', 'hidden'); // Empêcher le défilement du site
    }

    // Ajouter le popup au body
    $('body').append(popupContent);

    // Ajouter un gestionnaire d'événements au bouton
    $('.buttonPopup').click(function () {
        hidePopup();
    });

    // Créer et ajouter l'overlay
    var overlay = $('<div id="overlay"></div>');
    $('body').append(overlay);

    // Fermer le popup en cliquant à l'extérieur
    overlay.click(function (event) {
        if (event.target === this) {
            hidePopup();
        }
    });

    // Fonction pour masquer le popup
    function hidePopup() {
        $('body').removeClass('popup-open');
        $('#popup').hide();
        overlay.remove();
        $('body').css('overflow', 'auto'); // Réactiver le défilement du site
    }

    // Appeler la fonction pour afficher le popup
    showPopup();

    // Enregistrer l'état de la connexion dans localStorage
    localStorage.setItem("popupShown", "true");
}



// SCROLL UP
const scrollup = document.querySelector('.scrollup');
window.addEventListener('scroll', () => {
    (window.scrollY > 50) ? scrollup.style.visibility = 'visible' : scrollup.style.visibility = 'hidden';
});

$(".scrollup").click(function () {
    $("html, body").scrollTop(0);
});

// MENU BURGER AVEC FOND FLOU
$("#burger").click(function () {
    $(".sousmenu").toggle();
    $("main").toggleClass('flou');
    $("footer").toggleClass('flou');
});

// MENU SOULIGNE PAGE ACTIVE
// CREATION DE L'OBJET menuSouligne

const menuSouligne = {
    pageAccueil: "menuAccueil", //je fais correspondre les propriétés sous forme : clé > valeur
    pageConcept: "menuConcept",
    pageCentres: "menuCentres",
    pageGalerie: "menuGalerie"
};

// RECUPERE L'ID DU BODY  
const bodyId = document.body.id;

// RECHERCHE LA CORRESPONDANCE
const menuId = menuSouligne[bodyId];

// SI LA CORRESPONDANCE EST TROUVE DANS LE DOCUMENT ALORS AJOUT DE LA CLASSE CSS 
if (menuId) {
    document.getElementById(menuId).classList.add("pageactuelle");
}

function openImageFullscreen(carouselId) {
    $(document).ready(function () {
        $(`${carouselId} .carousel-item img`).click(function () {
            $(carouselId).carousel('pause'); // Arrêter le carrousel lors du clic sur l'image
            var imgSrc = $(this).attr('src'); // Obtenir l'URL de l'image cliquée

            // Ajouter une balise d'image en plein écran avec l'URL de l'image
            var fullScreenImg = $('<img>').attr('src', imgSrc).addClass('fullscreen-img');

            // Ajouter la balise d'image en plein écran à un conteneur en plein écran
            var fullscreenContainer = $('<div>').addClass('fullscreen-container').append(fullScreenImg);

            // Ajouter le conteneur en plein écran à la page
            $('body').append(fullscreenContainer);

            // Fermer le carrousel en plein écran lors du clic sur l'image en plein écran
            fullscreenContainer.click(function () {
                $(this).remove();
                $(carouselId).carousel('cycle'); // Reprendre le carrousel après la fermeture du plein écran
            });
        });
    });
}

openImageFullscreen('#carouselExampleIndicators');
openImageFullscreen('#carouselExampleIndicators1');
openImageFullscreen('#carouselExampleIndicators2');

var images = document.querySelectorAll('.reseauxsociaux img');

images.forEach(function (image) {
    image.addEventListener('mouseenter', function () {
        image.style.transition = 'transform 0.2s ease';
        image.style.transform = 'translateY(-3px) scale(1.2)';
    });

    image.addEventListener('mouseleave', function () {
        image.style.transition = 'transform 0.2s ease';
        image.style.transform = 'translateY(0) scale(1)';
    });
});