<?php

/* OVERRIDE CORE CONFIG */


// Used to cleaup urls before processing them into controller actions important if its beeing deployed in a folder.
$conf['prod']['url']['site'] = '/api/'; ## We always try to specify relative paths.
$conf['test']['url']['site'] = '/api/';
$conf['devel']['url']['site'] = '/api/';