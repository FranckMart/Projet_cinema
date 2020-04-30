// Mes options du caroussel
var slider = $('.js-slider').isystkSlider({
  // adopte l'image à l'hauteur du caroussel
  'heightMaxScreen': true,
  'carousel': true,
  'shift': 1, 
});

// slider contient -> js.slider plugin isystkSlider
var slider = $('.js-slider').isystkSlider({

    'prevBtnKey': $(this).find('.prev-btn'),
    'nextBtnKey': $(this).find('.next-btn'),
    'slideCallBack': function(data) {
      // slider trouve paging li et enlève la class active
      slider.find('.paging li').removeClass('active');
      // slider trouve paging li:eq et rajoute active
      slider.find('.paging li:eq('+(data.pageNo+1)+')').addClass('active');
    }
});

console.log(slider);

slider.find('.paging li').click(function(e) {
// ne propage pas l'event.
  e.preventDefault();
  // change la page de pageno $.fn fusion un objet dans un prototype -> créer une nouvelle méthode d'instance -> anime slide de isystkSlider
  slider.changePage($(this).data('pageno'), $.fn.isystkSlider.ANIMATE_TYPE.SLIDE);
});

// si prev-btn et plus petit que que 0
if (0 < self.find('.prev-btn').length) {
  // applique le css de view-layer = 'margin-left': '36px'
  self.find('.view-layer').css({
    'margin-left': '36px'
  });
}

