
=== Alter Inventory - Woocommerce Plugin ===
Contributors: Bigbabert, Mirko G.
Donate link: http://www.altertech.it/
Tags: woocommerce, inventory, product variations
Requires at least: 3.6.1
Tested up to: 3.8.1
Stable tag: 0.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Woocommerce Inventory is a alternative products display, plugin worked on Wordpress 3.8.1 & Woocommerce 2.0.

== Description ==

Manage product inventory and synchronized alternatively in wordpress and woocommerce.

This plugin display all your Woocommerce inventory, products and variable products as variation, in user friendly mode on front-end in a reserved page, you can create this page simply adding a shortcode [alterinventory] to a new page. Powerful improvement coming soon: manage your products, add and remove product with barcode input area and fisic shop front-end page.

Place the shortcode, with the needed parameters where you want the inventory to appear. Syntax is:
`[alterinventory orderby={title|sku|stock|price|taglia|colore} sort={ASC|DESC}]`

For example:

`[alterinventory]` will print the inventory, with the items ordered by title.
`[alterinventory orderby=sku]` will print the inventory ordered by SKU.
`[alterinventory orderby=sku sort=DESC]` will print the inventory sorteb by SKU in reverse order.

This plugin allows you to publish a full inventory on a frontend page with a simple shortcode. **Every registerd user** will be able to view it, while unregistered users will get an error message.

Special thanks to [Mike Jolley](http://profiles.wordpress.org/mikejolley/) who provided the [initial script](https://t.co/CtLxf1XCVN)
== Installation ==

How install Alter Inventory plugin:


1. Install and activate WooCommerce
2. Go tu Plugin->Add New
3. Select the downloaded .zip file and upload and activate it
4. Insert this shortcode: [alterinventory] in the page you want use like inventory

== Frequently Asked Questions ==

= Why i can’t see attribute for variations? =

To see attribute you must create a predefinite attribute named ’Taglia’ for size & ‘Colore’ for color or change pa_taglia and pa_attribute in the alter-inventory.php file.


== Screenshots ==

alterinventory.jpg

== Changelog ==

= 0.8 =
* First Release

== Featured ==

Ordered list:

1. Some feature
2. Another feature
3. Something else about the plugin

= Support =

Need support? This is the right way to ask support:
That's the way:

* Register on http://www.blog.altertech.it 
* Send a mail to bigbabert@gmail.com with object ‘alterinventory’

== Upgrade notice ==

= 0.8.0 =

First Release

If you are new to WordPress : http://codex.wordpress.org/Managing_Plugins#Installing_Plugins.


