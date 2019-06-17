(function($) {
  $(function() {
    /* Start of Header */

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
    let arrowDown = '<button class="arrow-down"></button>';

    $('.menu-item-204').append(arrowDown);
    $('.menu-item-261').append(arrowDown);

    const dropDown = $('.arrow-down');
    const subMenu = $('.sub-menu');

    subMenu.hide();
    dropDown.on('hover', function(event) {
      event.preventDefault();
      subMenu.show('slide');
    });
    /* End of Header */

    // Start of Flickity //
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
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
    }); //END OF TAB MENU CODE

    /* Start of Timeline */
    const timeline = $('timeline-content');
    const timelineOpen = $('timeline-btn');

    timelineOpen.on('click', function(event) {
      event.preventDefault();
      timelineOpen.toggleClass('timeline-open');
      if (timelineOpen.hasClass('timeline-open')) {
        timeline.show();
      } else {
        timeline.hide();
      }
    });

    $('.tab-carousel').flickity({
      cellAlign: 'center',
      contain: true,
      freeScroll: true,
      prevNextButtons: true,
      pageDots: false,
      draggable: false,
      percentPosition: false,
      initialIndex: 0
    });

    //END OF TAB MENU CODE
  });
})(jQuery);
