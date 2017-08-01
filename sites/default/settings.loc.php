<?php
/**
 * Created by PhpStorm.
 * User: zuzik
 * Date: 1.8.17
 * Time: 12:02
 */
/**
 * Trusted host configuration.
 *
 * Drupal core can use the Symfony trusted host mechanism to prevent HTTP Host
 * header spoofing.
 *
 * To enable the trusted host mechanism, you enable your allowable hosts
 * in $settings['trusted_host_patterns']. This should be an array of regular
 * expression patterns, without delimiters, representing the hosts you would
 * like to allow.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = array(
 *   '^www\.example\.com$',
 * );
 * @endcode
 * will allow the site to only run from www.example.com.
 *
 * If you are running multisite, or if you are running your site from
 * different domain names (eg, you don't redirect http://www.example.com to
 * http://example.com), you should specify all of the host patterns that are
 * allowed by your site.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = array(
 *   '^example\.com$',
 *   '^.+\.example\.com$',
 *   '^example\.org$',
 *   '^.+\.example\.org$',
 * );
 * @endcode
 * will allow the site to run off of all variants of example.com and
 * example.org, with all subdomains included.
 *
 */
$settings['trusted_host_patterns'] = array(
    '^cnblog.local$',
);

/*
 *  Information to database connection
 */
$databases['default']['default'] = array (
    'database' => 'cn_blog',
    'username' => 'root',
    'password' => '',
    'prefix' => '',
    'host' => 'localhost',
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
);
/*
 * Files
 *
 * Pahts MUST exist!!! 
 *
 * mkdir -p SITE/files/private && mkdir -p SITE/files/tmp && chmod -R 777 SITE/files
 */
$site = "default";
$conf['file_public_path'] = DRUPAL_ROOT."/"."sites/$site/files";
$conf['file_private_path'] = DRUPAL_ROOT."/"."sites/$site/files/private";
$conf['file_temporary_path'] = DRUPAL_ROOT."/"."sites/$site/files/tmp";