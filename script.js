$(document).ready(function() {
  $('.carousel').slick({
    slidesToShow: 3, // Muestra tres videos a la vez en la fila
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1 // Cambia a un video por fila en dispositivos móviles
        }
      }
    ]
  });
});