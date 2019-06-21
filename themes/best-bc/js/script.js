(function($) {
  $(function() {
    /* Start of Header */

    /* Search Bar */
    const searchBar = $('.search-field');
    const searchToggleIcon = $('.search-toggle-icon');

    const desktopWidth = 600;

    searchToggleIcon.on('click', function() {
      if (window.innerWidth < desktopWidth) {
        event.preventDefault();
        searchBar.focus();
        searchBar.toggle('show');
      }
    });

    searchBar.on('blur', function(event) {
      event.preventDefault();
      if (searchBar.val() === '' && window.innerWidth < desktopWidth) {
        searchBar.hide('slide');
      }
    });

    /* Hamburger Menu Slider */
    const hamburger = $('.hamburger-menu');
    const headerSlider = $('.main-navigation');
    const headerNav = $('.header-primary-menu');

    hamburger.on('click', function(event) {
      event.preventDefault();
      hamburger.toggleClass('is-active');
      headerSlider.toggleClass('open');
      headerSlider.toggleClass('active');
      if (headerSlider.hasClass('open')) {
        headerNav.show();
      } else {
        headerNav.hide();
      }
    });
    
    /* Menu Button */
    let arrowDown = '<button class="arrow-down"></button>';
    let arrowDown2 = '<button class="arrow-down2"></button>';
    $('.menu-item-204').append(arrowDown);
    $('.menu-item-261').append(arrowDown2);

    const dropDown = $('.arrow-down');
    const dropDown2 = $('.arrow-down2');
    const navDown = $('#menu-item-204');
    const navDown2 = $('#menu-item-261');
    dropDown.on('click', function() {
      navDown.toggleClass('nav-drop-open')
    });
    dropDown2.on('click', function() {
      navDown2.toggleClass('nav-drop-open2')
    });

    /* End of Header */

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
      $tabLinks.removeClass('active-tab');
      $(this).addClass('active-tab');
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
    }); /* End of Timeline */

    /* Start of Tab Meny Flickity */

    $('.tab-nav').flickity({
      cellAlign: 'center',
      contain: true,
      freeScroll: false,
      prevNextButtons: true,
      pageDots: false,
      draggable: true,
      percentPosition: false,
      groupCells: 1
    });
  });
})(jQuery);
