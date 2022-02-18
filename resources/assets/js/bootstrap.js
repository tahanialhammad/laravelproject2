/**
 * Pace-js uses both pace-js and pace npm module (because broken depencency or something. Options are possible
 * with pace.options (e.g. pace.options.target = '#dashboard';) and event listeners
 * are useable like this: (pace.on('done', << callback here >>).
 */
 let pace = require('pace-js');
 pace.options.ajax.trackWebSockets = false;
 pace.start();

 
window._ = require('lodash');

import "bootstrap";

try {
    window.Popper = require('@popperjs/core').default;
    window.$ = window.jQuery = require('jquery');
    window.bootstrap = require('bootstrap');

} catch (e) {}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


// Custom scripts
require("./tahani.js");