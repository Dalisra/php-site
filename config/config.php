<?php

/* OVERRIDE CORE CONFIG */

/* Site URLs */
$conf['prod']['url']['domain'] = 'http://www.prod.no/';
$conf['test']['url']['domain'] = 'http://www.test.no/';
$conf['devel']['url']['domain'] = 'http://localhost/site/';

$conf['prod']['url']['site'] = '/'; ## We always try to specify relative paths.
$conf['test']['url']['site'] = '/site/';
$conf['devel']['url']['site'] = '/';