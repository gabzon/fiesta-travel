// flightplan.js
var plan = require('flightplan');

// configuration

plan.target('production', [
  {
    host: 'vv.ftp.infomaniak.com',
    username: 'vv_listo_sevinci',
    agent: process.env.SSH_AUTH_SOCK,
  }
]);

// run commands on localhost
plan.local(function(local) {
  local.log('Copy files to remote hosts');
  var filesToCopy = local.exec('git ls-files', {silent: true});
  // rsync files to all the target's remote hosts
  local.transfer(filesToCopy, '~/www/webapp/themes/fiesta-travel');
});
