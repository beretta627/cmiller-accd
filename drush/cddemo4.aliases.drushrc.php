<?php
// DO NOT MODIFY THIS FILE.
// This file was created by the drush acquia-update command. Changes will be
// lost the next time drush acquia-update runs.

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo4, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/cddemo4.dev/docroot',
  'ac-site' => 'cddemo4',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'cddemo4dev.prod.acquia-sites.com',
  'remote-host' => 'cddemo4dev.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo4.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@cddemo4.dev',
  'root' => '/mnt/gfs/cddemo4.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo4, environment ode1
$aliases['ode1'] = array(
  'root' => '/var/www/html/cddemo4.ode1/docroot',
  'ac-site' => 'cddemo4',
  'ac-env' => 'ode1',
  'ac-realm' => 'prod',
  'uri' => 'cddemo4ode1.prod.acquia-sites.com',
  'remote-host' => 'cddemo4ode1.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo4.ode1',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['ode1.livedev'] = array(
  'parent' => '@cddemo4.ode1',
  'root' => '/mnt/gfs/cddemo4.ode1/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo4, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/cddemo4.prod/docroot',
  'ac-site' => 'cddemo4',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'cddemo4.prod.acquia-sites.com',
  'remote-host' => 'cddemo4.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo4.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@cddemo4.prod',
  'root' => '/mnt/gfs/cddemo4.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo4, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/cddemo4.test/docroot',
  'ac-site' => 'cddemo4',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'cddemo4stg.prod.acquia-sites.com',
  'remote-host' => 'cddemo4stg.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo4.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@cddemo4.test',
  'root' => '/mnt/gfs/cddemo4.test/livedev/docroot',
);
