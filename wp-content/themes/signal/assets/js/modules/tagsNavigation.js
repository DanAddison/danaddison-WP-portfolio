/*
*  Module: Tag Navigation
*
*  Simple hide/show for tags
*
*
*/

var TagsHideShow = (function($) {
  var _toggleMenu = function(e) {
    e.toggleClass("is-active");
    $("body").toggleClass("is-visible-tags");
  };

  var closeMenu = function() {
    $("body").removeClass("is-visible-tags");
    $("#js-tag-button").removeClass("is-active");
  };

  var _bindEvents = function() {
    $("#js-tag-button").on("click", function() {
      _toggleMenu($(this));
    });

    $(document).on("keyup", function(e) {
      if (e.keyCode == 27) {
        closeMenu();
      }
    });

    $(document).on("click", function(e) {
      var container = $(".js-tag-archive");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        closeMenu();
      }
    });
  };

  var init = function() {
    _bindEvents();
  };

  return {
    init: init
  };
})(jQuery);
