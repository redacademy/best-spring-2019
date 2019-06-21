(function($) {
  $(function() {
    /* Start of Header */

    /* Search Bar */
    const searchBar = $('.search-field');
    const searchToggleIcon = $('.search-toggle-icon');

    searchToggleIcon.on('click', function() {
      searchBar.toggle('show');
      searchBar.focus();
    });

    searchBar.on('blur', function(event) {
      event.preventDefault();
      if (searchBar.val() === '') {
        searchBar.hide('slide');
      }
    });

    /* Hamburger Menu */
    const hamburger = $('.hamburger-menu');

    hamburger.on('click', function(event) {
      event.preventDefault();
      hamburger.toggleClass('is-active');
    });

    /* Menu Slider */
    // const headerSlider = $('.main-navigation');
    // const headerNav = $('.header-primary-menu');

    // headerSlider.on('click', function(event) {
    //   event.preventDefault();
    //   $(this).toggleClass('active');
    //   headerSlider.toggleClass('open');
    //   if (headerSlider.hasClass('open')) {
    //     headerNav.show();
    //   } else {
    //     headerNav.hide();
    //   }
    // });

    /* Menu Button */
    let arrowDown = '<button class="arrow-down"></button>';
    $('.menu-item-204').append(arrowDown);
    $('.menu-item-261').append(arrowDown);

    const dropDown = $('.arrow-down');
    const subMenu = $('.sub-menu');
    const test = $('.menu-item-204');

    dropDown.on('click', function() {
      test.toggleClass('open-2');
      console.log(dropDown);
      console.log(subMenu);
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
