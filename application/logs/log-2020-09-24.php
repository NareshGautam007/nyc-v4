<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-24 08:28:45 --> 404 Page Not Found: /index
ERROR - 2020-09-24 18:15:32 --> 404 Page Not Found: /index
ERROR - 2020-09-24 18:15:46 --> Query error: Unknown column 'img' in 'where clause' - Invalid query: SELECT products.shop_categorie as category_id,vendors.url as vendor_url, products_translations.description as description, products.id, products.quantity,products.image,products.url,products_translations.price,products_translations.title,products_translations.old_price FROM products left JOIN vendors ON vendors.id=products.vendor_id 
        LEFT JOIN products_translations ON products_translations.for_id =products.id
         WHERE  products.in_slider=0 AND shop_categorie=img AND visibility=1 ORDER BY ID DESC
ERROR - 2020-09-24 18:15:46 --> Query error: Unknown column 'assets' in 'where clause' - Invalid query: SELECT products.shop_categorie as category_id,vendors.url as vendor_url, products_translations.description as description, products.id, products.quantity,products.image,products.url,products_translations.price,products_translations.title,products_translations.old_price FROM products left JOIN vendors ON vendors.id=products.vendor_id 
        LEFT JOIN products_translations ON products_translations.for_id =products.id
         WHERE  products.in_slider=0 AND shop_categorie=assets AND visibility=1 ORDER BY ID DESC
