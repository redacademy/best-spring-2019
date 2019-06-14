(function($) {
  $(function() {

    // Start of Header //

    // Search Bar
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
    
    // Hamburger Menu
    const hamburger = $('.hamburger-menu');
      hamburger.on('click', function(event) {
      event.preventDefault();
      hamburger.toggleClass('is-active');
    });
    
    // Menu Slider
    const headerSlider = $('.main-navigation');
    const headerNav = $('.header-primary-menu');
      headerSlider.on('click', function(event) {
      event.preventDefault();
      headerSlider.toggleClass('.open');
      if (headerSlider.toggleClass('open')) {
        event.preventDefault();
        headerNav.show();
      } 
    });

    //Menu Button
    let php = '<?php echo get_template_directory_uri(); ?>';
    // let dropDown = bestCustomScripts.theme_directory + 'Assets/vector-icons/icons/chevrons/down.svg'
    let dropDown = '<img src="' + php + 'Assets/vector-icons/icons/chevrons/down.svg">'
    $('.menu-item-204').append(dropDown);
    $('.menu-item-261').append(dropDown);
    // End of Header //
    
    // Start of Flickity //
    $('.main-carousel').flickity({
      // options
      cellAlign: 'center',
      contain: true
    });
    // End of Flickity //

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
