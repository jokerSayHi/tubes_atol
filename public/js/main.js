'use strict';

/* global jQuery */

jQuery(document).ready(function($) {
  $('.button-collapse').sideNav({
      menuWidth: 315,
      closeOnClick: false
    });

  $('.modal-trigger').leanModal();
});