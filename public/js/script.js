$(document).ready(function () {
  $(".poster-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 16,
    autoplay: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: false,
  });
  $(".berita-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 16,
    autoplay: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: false,
  });
  $(".jurusan-carousel").owlCarousel({
    center: true,
    items: 2,
    loop: true,
    margin: 24,
    autowidth: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      600: {
        items: 4,
      },
    },
  });
});
