(function ($, Drupal, window, document, undefined) {


Drupal.behaviors.tvfacil = {
  attach: function(context, settings) {
    $('#slides', context).superslides({
      hashchange: false,
      play: 5000
    });
  }
};


})(jQuery, Drupal, this, this.document);
