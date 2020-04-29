var slider = $('.js-slider').isystkSlider({
    'prevBtnKey': $(this).find('.prev-btn'),
    'nextBtnKey': $(this).find('.next-btn'),
    'slideCallBack': function(data) {
      slider.find('.paging li').removeClass('active');
      slider.find('.paging li:eq('+(data.pageNo-1)+')').addClass('active');
    }
});

slider.find('.paging li').click(function(e) {
  e.preventDefault();
  slider.changePage($(this).data('pageno'), $.fn.isystkSlider.ANIMATE_TYPE.SLIDE);
});
if (0 < self.find('.prev-btn').length) {
  self.find('.view-layer').css({
    'margin-left': '36px'
  });
}