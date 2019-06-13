(function ($) {
    $(function() {

        const searchBar = $('.search-field');
      
        searchBar.hide();
        $('.search-submit').on('click', function(event) {
          event.preventDefault();
          searchBar.toggle('show');
          searchBar.focus();
        });

        searchBar.on('blur', function(event) {
            event.preventDefault();
            if ( searchBar.val() === '' ) {
                searchBar.hide('slide');
            }
        });

        $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          contain: true
        });
    });
})(jQuery);