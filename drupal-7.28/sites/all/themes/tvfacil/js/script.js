(function ($, Drupal, window, document, undefined) {


Drupal.behaviors.tvfacil = {
  attach: function(context, settings) {
    $('#slides', context).superslides({
      hashchange: false,
      play: 5000
    });

    $(window).scroll(function() {
      if ($(".header-container", context).offset().top>40)
        $(".header-container", context).removeClass("transparent");
      else
        $(".header-container", context).addClass("transparent");
    });

    $('.skitter', context).skitter({
      animation: "fade",
      thumbs: true,
      theme: "minimalist",
      label: false,
      hideTools: false
    });

    $('.node-add-to-cart', context).val('Agregar');
  }
};


})(jQuery, Drupal, this, this.document);
