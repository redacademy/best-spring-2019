(function ($) {
  $(function () {
    /* Start of Header */

    /* Search Bar */
    const searchBar = $('.search-field');
    const searchToggleIcon = $('.search-toggle-icon');

    const desktopWidth = 601;

    searchToggleIcon.on('click', function (event) {
      if (window.innerWidth < desktopWidth) {
        if (!searchBar.hasClass('.search-show')) {
          searchBar.addClass('.search-show');
          searchBar.focus();
          searchBar.toggle('show');
          event.preventDefault();
        } else if (searchBar.val() === '') {
          searchBar.removeClass('.search-show');
          searchBar.hide('slide');
          event.preventDefault();
        }
      }
    });

    /* Hamburger Menu Slider */
    const hamburger = $('.hamburger-menu');
    const headerSlider = $('.main-navigation');
    const headerNav = $('.header-primary-menu');

    hamburger.on('click', function (event) {
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
    dropDown.on('click', function () {
      navDown.toggleClass('nav-drop-open');
    });
    dropDown2.on('click', function () {
      navDown2.toggleClass('nav-drop-open2');
    });

    /*End of Header */

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

    $tabLinks.on('click', function (event) {
      event.preventDefault();
      $tabLinks.removeClass('active-tab');
      $(this).addClass('active-tab');
      let tabIndex = $tabLinks.index(this);
      $tabContent.hide();
      $tabContent.eq(tabIndex).show();
    }); //END OF TAB MENU CODE

    /* Start of Timeline */
    
    // const timelineContent = $('timeline-content');

    $('button').on('click', function (event) {
      event.preventDefault();
      console.log('hi');
      // $('.timeline-content').removeClass('timeline-open');
      $(this).parent().parent().children('.timeline-content').addClass('timeline-open');      
    }); /* End of Timeline */

    $("button").on("blur", function(){
      $(".timeline-content").removeClass("timeline-open");
   })

    /* Start of Tab Meny Flickity */

    $('.tab-nav').flickity({
      cellAlign: 'center',
      contain: true,
      freeScroll: false,
      prevNextButtons: true,
      pageDots: false,
      draggable: true,
      percentPosition: false,
      groupCells: 1,
    });

    let $initialTab;

    if (window.location.hash !== '') {
      $initialTab = $(window.location.hash);
    } else {
      $initialTab = $('.tab-nav li:first-child a');
    }
    $initialTab.addClass('active-tab');
    let tabIndex = $tabLinks.index($initialTab);
    $tabContent.hide();
    $tabContent.eq(tabIndex).show();

  });
})(jQuery);
