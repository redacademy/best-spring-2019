(function ($) {
    $(function() {

        const searchBar = $('.search-field');
      
        searchBar.hide();
        $('.search-submit').on('click', function(event) {
          event.preventDefault();
          searchBar.toggle('show');
          searchBar.focus();
        });
        $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          contain: true,
          wrapAround: true
        });
    });
})(jQuery);