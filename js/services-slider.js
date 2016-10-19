   //SERVICES-SLIDER
//-------------------------------------------------
(function($) {
  var $sync1 = $("#services_slider_2");
  var $sync2 = $("#services_slider_1");

  $sync1.owlCarousel({
    singleItem: true,
    autoPlay: true,
    autoPlay: 8000,
    stopOnHover: true,
    slideSpeed: 1000,
    pagination: true,
    dragBeforeAnimFinish: false,
    mouseDrag: false,
    touchDrag: false,
    responsiveRefreshRate: 200,
    transitionStyle: "fade",
    afterAction: syncPosition,
    afterInit: function(el) {
      this.owlControls.prependTo('#services_slider_controls');
    }
  });

  $sync2.owlCarousel({
    singleItem: true,
    pagination: false,
    dragBeforeAnimFinish: false,
    mouseDrag: false,
    touchDrag: false,
    responsiveRefreshRate: 100,
    transitionStyle: "fade",
    afterInit: function(el) {
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  function syncPosition(el) {
    var current = this.currentItem;
    $sync2.find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if ($sync2.data("owlCarousel") !== undefined) center(current);
  }

  function center(number) {
    $sync2.trigger("owl.goTo", number);
  }
})(jQuery);