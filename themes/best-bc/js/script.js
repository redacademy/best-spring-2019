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
    $('.menu-item-has-children').append(arrowDown);
    
    const dropDown = $('.arrow-down');
    
    dropDown.on('click', function () {
      $(this).parent('.menu-item-has-children').toggleClass('nav-drop-open');
    });
   
    /*End of Header */

    // Start of Flickity //
    $('.main-carousel').flickity({
      // options
      freeScroll:true,
      wrapAround:true,
      cellAlign: 'center',
      contain: true,
      setGallerySize:false
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
    const timelineOpen = $('.timeline-btn');
    const timelineOpenDesktop = $('.timeline-btn-wrapper')

    /* Mobile Timeline*/
    timelineOpen.on('click', function (event) {
      event.preventDefault();
      $(this).parent().siblings('.timeline-content').addClass('timeline-open');  
    }); 

    timelineOpen.on('blur', function(){
      $('.timeline-content').removeClass('timeline-open');
    });

    /* Desktop Timeline*/
    timelineOpenDesktop.on('click', function(event) {
      event.preventDefault();
      $(this).siblings('.timeline-content').addClass('timeline-open');  
    });

    timelineOpenDesktop.on('blur', function(){
      $('.timeline-content').removeClass('timeline-open');
    });

   /* End of Timeline */

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
