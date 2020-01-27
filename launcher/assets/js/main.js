(function() {
  'use strict';

  var isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    }
  };

  var contentWayPoint = function() {
    var i = 0;
    jQuery('.animate-box').waypoint(
      function(direction) {
        if (
          direction === 'down' &&
          !jQuery(this.element).hasClass('animated-fast')
        ) {
          i++;

          jQuery(this.element).addClass('item-animate');
          setTimeout(function() {
            jQuery('body .animate-box.item-animate').each(function(k) {
              var el = jQuery(this);
              setTimeout(
                function() {
                  var effect = el.data('animate-effect');
                  if (effect === 'fadeIn') {
                    el.addClass('fadeIn animated-fast');
                  } else if (effect === 'fadeInLeft') {
                    el.addClass('fadeInLeft animated-fast');
                  } else if (effect === 'fadeInRight') {
                    el.addClass('fadeInRight animated-fast');
                  } else {
                    el.addClass('fadeInUp animated-fast');
                  }

                  el.removeClass('item-animate');
                },
                k * 100,
                'easeInOutExpo'
              );
            });
          }, 100);
        }
      },
      { offset: '85%' }
    );
  };

  // Loading page
  var loaderPage = function() {
    jQuery('.fh5co-loader').fadeOut('slow');
  };

  var screenHeight = function() {
    if (jQuery(window).width() > 768 && !isMobile.any()) {
      jQuery('.js-dt, .js-dtc').css('min-height', jQuery(window).height());
    } else {
      jQuery('.js-dt, .js-dtc').css('min-height', '');
    }
    jQuery(window).resize(function() {
      if (jQuery(window).width() > 768 && !isMobile.any()) {
        jQuery('.js-dt, .js-dtc').css('min-height', jQuery(window).height());
      } else {
        jQuery('.js-dt, .js-dtc').css('min-height', '');
      }
    });
  };

  var countDown = function() {
    simplyCountdown('.simply-countdown-one', {
      year: data.year,
      month: data.month,
      day: data.day
    });
  };

  jQuery(function() {
    contentWayPoint();
    loaderPage();
    screenHeight();
    countDown();
  });
})(jQuery);
