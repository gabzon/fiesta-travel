// flightplan.js
var plan = require('flightplan');

// configuration

plan.target('default', [
  {
    host: 'vv.ftp.infomaniak.com',
    username: 'vv_listo_sevinci',
    agent: process.env.SSH_AUTH_SOCK,
    webRoot:'/www/webapp/themes/fiesta-travel'
  }
]);
