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
      if (searchBar.val() === '') {
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
      $(this).toggleClass('active');
      headerSlider.toggleClass('open');
      if (headerSlider.hasClass('open')) {
        headerNav.show();
      } else {
        headerNav.hide();
      }
    });

    //Menu Button
    let arrowDown = '<button class="arrow-down"></button>'
    $('.menu-item-204').append(arrowDown);
    $('.menu-item-261').append(arrowDown);

    const dropDown = $('.arrow-down');
    const subMenu = $('.sub-menu');
    subMenu.hide();
    dropDown.on('hover', function(event) {
      event.preventDefault();
      subMenu.show('slide');
    });
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
      console.log('click');
      let tabIndex = $tabLinks.index(this);
      // console.log(tabIndex);
      $tabContent.hide();
      $tabContent.eq(tabIndex).show();
    });
    //END OF TAB MENU CODE
  });
})(jQuery);
