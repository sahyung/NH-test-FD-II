<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DataController extends Controller
{
    public function phpLimit()
    {
        return response()->json(
            [
                [
                    "checked" => true,
                    "text" => "max execution time 300s"
                ],
                [
                    "checked" => true,
                    "text" => "max execution time 300s"
                ],
                [
                    "checked" => true,
                    "text" => "php memory limit 1024 MB"
                ],
                [
                    "checked" => true,
                    "text" => "post max size 128 MB"
                ],
                [
                    "checked" => true,
                    "text" => "upload max filesize 128 MB"
                ],
                [
                    "checked" => true,
                    "text" => "max input vars 2500"
                ]
            ]
        );
    }

    public function bundles()
    {
        return response()->json(
            [
                [
                    "img" => "icon PHP Hosting_PHP Semua Versi.svg",
                    "title" => "PHP Semua Versi",
                    "description" => "Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!"
                ],
                [
                    "img" => "icon PHP Hosting_My SQL.svg",
                    "title" => "MySQL Versi 5.6",
                    "description" => "Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur."
                ],
                [
                    "img" => "icon PHP Hosting_CPanel.svg",
                    "title" => "Panel Hosting cPanel",
                    "description" => "Kelola website dengan panel canggih yang familiar di hati Anda."
                ],
                [
                    "img" => "icon PHP Hosting_garansi uptime.svg",
                    "title" => "Garansi Uptime 99.9%",
                    "description" => "Data center yang mendukung kelangsungan website Anda 24/7."
                ],
                [
                    "img" => "icon PHP Hosting_InnoDB.svg",
                    "title" => "Database InnoDB Unlimited",
                    "description" => "Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda."
                ],
                [
                    "img" => "icon PHP Hosting_My SQL remote.svg",
                    "title" => "Wildcard Remote MySQL",
                    "description" => "Mendukung s/d 25 max_user_connections dan 100 max_connections"
                ]
            ]
        );
    }

    public function niagaHosting()
    {
        return response()->json(
            [
                [
                    "checked" => true,
                    "text" => "Solusi PHP untuk performa query yang lebih cepat"
                ],
                [
                    "checked" => true,
                    "text" => "Konsumsi memori yang lebih rendah"
                ],
                [
                    "checked" => true,
                    "text" => "Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7"
                ],
                [
                    "checked" => true,
                    "text" => "Fitur enkripsi ionCube dan Zend Guard Loaders"
                ]
            ]
        );
    }

    public function heroFeature()
    {
        return response()->json(
            [
                [
                    "img" => "icon PHP Hosting_zendguard.svg",
                    "text" => "PHP Zend Guard Loader"
                ],
                [
                    "img" => "icon PHP Hosting_composer.svg",
                    "text" => "PHP Composer"
                ],
                [
                    "img" => "icon PHP Hosting_ioncube.svg",
                    "text" => "PHP ionCube Loader"
                ]
            ]
        );
    }

    public function hostingPackages()
    {
        return response()->json(
            [
                [
                    "name" => "Bayi",
                    "currency" => "Rp",
                    "recommended" => false,
                    "bestseller" => false,
                    "discount" => 0,
                    "discountUnit" => "%",
                    "subscriptionFrequency" => "bln",
                    "priceBeforeDiscount" => 19900,
                    "priceAfterDiscount" => 14900,
                    "userCount" => 938,
                    "resourcePower" => 0.5,
                    "benefits" => [
                        "<b>500 MB</b> Disk Space",
                        "<b>Unlimited</b> Bandwidth",
                        "<b>Unlimited</b> Databases",
                        "<b>1</b> Domain",
                        "<b>Instant</b> Backup",
                        "<b>Unlimited SSL</b> Gratis Selamanya"
                    ]
                ],
                [
                    "name" => "Pelajar",
                    "currency" => "Rp",
                    "recommended" => false,
                    "bestseller" => false,
                    "discount" => 0,
                    "discountUnit" => "%",
                    "subscriptionFrequency" => "bln",
                    "priceBeforeDiscount" => 46900,
                    "priceAfterDiscount" => 23450,
                    "userCount" => 4168,
                    "resourcePower" => 1,
                    "benefits" => [
                        "<b>Unlimited</b> Disk Space",
                        "<b>Unlimited</b> Bandwidth",
                        "<b>Unlimited</b> POP3 Email",
                        "<b>Unlimited</b> Databases",
                        "<b>10</b> Addon Domains",
                        "<b>Instant</b> Backup",
                        "<b>Domain Gratis</b> Selamanya",
                        "<b>Unlimited SSL</b> Gratis Selamanya"
                    ]
                ],
                [
                    "name" => "Personal",
                    "currency" => "Rp",
                    "recommended" => true,
                    "bestseller" => true,
                    "discount" => 0,
                    "discountUnit" => "%",
                    "subscriptionFrequency" => "bln",
                    "priceBeforeDiscount" => 58900,
                    "priceAfterDiscount" => 38900,
                    "userCount" => 10017,
                    "resourcePower" => 2,
                    "benefits" => [
                        "<b>Unlimited</b> Disk Space",
                        "<b>Unlimited</b> Bandwidth",
                        "<b>Unlimited</b> POP3 Email",
                        "<b>Unlimited</b> Databases",
                        "<b>Unlimited</b> Addon Domains",
                        "<b>Instant</b> Backup",
                        "<b>Domain Gratis</b> Selamanya",
                        "<b>Unlimited SSL</b> Gratis Selamanya",
                        "<b>Private</b> Name Server",
                        "<b>SpamAssasin</b> Mail Protection"
                    ]
                ],
                [
                    "name" => "Bisnis",
                    "currency" => "Rp",
                    "recommended" => false,
                    "bestseller" => false,
                    "discount" => 40,
                    "discountUnit" => "%",
                    "subscriptionFrequency" => "bln",
                    "priceBeforeDiscount" => 109900,
                    "priceAfterDiscount" => 65900,
                    "userCount" => 3552,
                    "resourcePower" => 3,
                    "benefits" => [
                        "<b>Unlimited</b> Disk Space",
                        "<b>Unlimited</b> Bandwidth",
                        "<b>Unlimited</b> POP3 Email",
                        "<b>Unlimited</b> Databases",
                        "<b>Unlimited</b> Addon Domains",
                        "<b>Magic Auto</b> Backup & Restore",
                        "<b>Domain Gratis</b> Selamanya",
                        "<b>Unlimited SSL</b> Gratis Selamanya",
                        "<b>Private</b> Name Server",
                        "<b>Prioritas</b> Layanan Support <br/><div> <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></div>",
                        "<b>SpamExpert</b> Pro Mail Protection"
                    ]
                ]
            ]
        );
    }

    public function laravelSupport()
    {
        return response()->json(
            [
                [
                    "checked" => true,
                    "text" => "Install Laravel <b>1 klik</b> dengan Softaculous installer"
                ],
                [
                    "checked" => true,
                    "text" => "Mendukung ekstensi <b>PHP MyCript, phar, mbstring, json</b> dan <b>fileinfo</b>."
                ],
                [
                    "checked" => true,
                    "text" => "Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda."
                ]
            ]
        );
    }

    public function phpModules()
    {
        return response()->json(
            [
                "IcePHP",
                "apc",
                "apcu",
                "apm",
                "ares",
                "bcmath",
                "bcompiler",
                "big_int",
                "bitset",
                "bloomy",
                "bz2_filter",
                "clamav",
                "coin_acceptor",
                "crack",
                "dba",
                "http",
                "huffman",
                "idn",
                "igbinary",
                "imagick",
                "imap",
                "inclued",
                "inotify",
                "interbase",
                "intl",
                "ioncube_loader",
                "ioncube_loader_4",
                "jsmin",
                "json",
                "ldap",
                "nd_pdo_mysql",
                "oauth",
                "oci8",
                "odbc",
                "opcache",
                "pdf",
                "pdo",
                "pdo_dblib",
                "pdo_firebird",
                "pdo_mysql",
                "pdo_odbc",
                "pdo_sqlite",
                "pgsql",
                "phalcon",
                "stats",
                "stem",
                "stomp",
                "suhosin",
                "sybase_ct",
                "sysvmsg",
                "sysvsem",
                "sysvshm",
                "tidy",
                "timezonedb",
                "trader",
                "translit",
                "uploadprogress",
                "uri_template",
                "uuid"
            ]
        );
    }

    public function paymentList()
    {
        return response()->json(
            [
                [
                    "url" => "bca_logo.png",
                    "id" => "bca"
                ],
                [
                    "url" => "mandiri_logo.png",
                    "id" => "mandiri"
                ],
                [
                    "url" => "bni_logo.png",
                    "id" => "bni"
                ],
                [
                    "url" => "visa_logo.png",
                    "id" => "visa"
                ],
                [
                    "url" => "mastercard_logo.png",
                    "id" => "mastercard"
                ],
                [
                    "url" => "atmbersama_logo.png",
                    "id" => "atmbersama"
                ],
                [
                    "url" => "permata_logo.png",
                    "id" => "permata"
                ],
                [
                    "url" => "prima_logo.png",
                    "id" => "prima"
                ],
                [
                    "url" => "alto_logo.png",
                    "id" => "alto"
                ]
            ]
        );
    }

    public function hostingServices()
    {
        return response()->json(
            [
                [
                    "url" => "",
                    "text" => "Hosting Murah"
                ],
                [
                    "url" => "",
                    "text" => "Hosting Indonesia"
                ],
                [
                    "url" => "",
                    "text" => "Hosting Singapura SG"
                ],
                [
                    "url" => "",
                    "text" => "Hosting PHP"
                ],
                [
                    "url" => "",
                    "text" => "Hosting Wordpress"
                ],
                [
                    "url" => "",
                    "text" => "Hosting Laravel"
                ]
            ]
        );
    }

    public function niagaServices()
    {
        return response()->json(
            [
                [
                    "url" => "",
                    "text" => "Domain"
                ],
                [
                    "url" => "",
                    "text" => "Shared Hosting"
                ],
                [
                    "url" => "",
                    "text" => "Cloud VPS Hosting"
                ],
                [
                    "url" => "",
                    "text" => "Managed VPS Hosting"
                ],
                [
                    "url" => "",
                    "text" => "Web Builder"
                ],
                [
                    "url" => "",
                    "text" => "Keamanan SSL/HTTPS"
                ],
                [
                    "url" => "",
                    "text" => "Jasa Pembuatan Website"
                ],
                [
                    "url" => "",
                    "text" => "Program Afiliasi"
                ]
            ]
        );
    }
}
