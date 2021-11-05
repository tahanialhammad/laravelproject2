window._ = require('lodash');

import "bootstrap";

require('bootstrap');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


// Custom scripts
require("./tahani.js");