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

    $input = $('.node-add-to-cart', context);
    $input.css('display', 'none');


    $button = $('<button></button>')
    $button
      .addClass('tvfacil-add-cart form-submit')
      .attr({
        'type': 'submit',
        'id': $input.attr('id'),
        'name': $input.attr('name')
      })
      .text('Agregar');

    $input.after($button);

  }
};


})(jQuery, Drupal, this, this.document);
