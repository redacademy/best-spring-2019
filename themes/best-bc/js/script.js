(function($) {
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
      if (searchBar.val() === '') {
        searchBar.hide('slide');
      }
    });

    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true
    });

    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true
    });

    //START OF TAB MENU CODE
    const $tabLinks = $('.tab-link');
    const $tabContent = $('.tab-content');

    $tabLinks.on('click', function(event) {
      event.preventDefault();

      let tabIndex = $tabLinks.index(this);
      $tabContent.hide();
      $tabContent.eq(tabIndex).show();
    });
    //END OF TAB MENU CODE
  });
})(jQuery);
