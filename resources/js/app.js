/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap-datepicker');
require('./jquery.inputmask')

$(document).ready(function() {
    var el = $('.datepicker');
    $('.datepicker').datepicker({
        format: el.data('format')
    });

    $('.timeMask').inputmask({regex: "([0-1]?[0-9]|2[0-3]):[0-5][0-9]", "placeholder": "hh:mm"});
});
