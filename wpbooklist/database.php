<?php

class BooklistDatabase
{
    public function createTable(){
        global $wpdb;

        $table = $wpdb->prefix . 'maosea0125_booklist';

        $sql = "CREATE TABLE " . $table . " (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `isbn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                    `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `publisher` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `original_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `translator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `publish_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `page` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `binding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `series` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                    `description` text COLLATE utf8_unicode_ci,
                    `author_description` text COLLATE utf8_unicode_ci,
                    `created_at` datetime DEFAULT NULL,
                    `updated_at` datetime DEFAULT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function deleteTable(){
        global $wpdb;
        $booklistTable = $wpdb->prefix . "maosea0125_booklist";
        $wpdb->query($wpdb->prepare("DROP TABLE IF EXISTS $booklistTable", $booklistTable));
    }
}