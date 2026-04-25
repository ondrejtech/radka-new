<?php
declare(strict_types=1);

$cfg['blowfish_secret'] = bin2hex(random_bytes(16));

$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type']     = 'cookie';
$cfg['Servers'][$i]['host']          = '127.0.0.1';
$cfg['Servers'][$i]['port']          = '3306';
$cfg['Servers'][$i]['compress']      = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

$cfg['UploadDir']  = '/var/www/phpmyadmin/tmp';
$cfg['SaveDir']    = '';
$cfg['TempDir']    = '/var/www/phpmyadmin/tmp';
$cfg['SendErrorReports'] = 'never';
