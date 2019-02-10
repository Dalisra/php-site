<?php

/* OVERRIDE CORE CONFIG */

/* Site URLs */
$conf['prod']['url']['domain'] = 'http://www.prod.no/';
$conf['test']['url']['domain'] = 'http://www.test.no/';
$conf['devel']['url']['domain'] = 'http://localhost/site/';

// Used to cleaup urls before processing them into controller actions important if its beeing deployed in a folder.
$conf['prod']['url']['site'] = '/'; ## We always try to specify relative paths.
$conf['test']['url']['site'] = '/api/';
$conf['devel']['url']['site'] = '/';