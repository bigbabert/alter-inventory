<<<<<<< HEAD
=== YITH WooCommerce Wishlist ===

Contributors: yithemes
Tags: wishlist, woocommerce, products, themes, yit, e-commerce, shop
Requires at least: 3.5.1
Tested up to: 3.8.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

YITH WooCommerce Wishlist add all Wishlist features to your website. Needs WooCommerce to work.
WooCommerce 2.1.x compatible.


== Description ==

Offer to your visitors a chance to add the products of your woocommerce store to a wishlist page. With YITH WooCommerce Wishlist you can add a link in each product detail page,
in order to add the products to the wishlist page. The plugin will create you the specific page and the products will be added in this page and
afterwards add them to the cart or remove them.

Working demo are available:

**[LIVE DEMO 1](http://demo.yithemes.com/room09/product/africa-style/)** - **[LIVE DEMO 2](http://demo.yithemes.com/bazar/shop/ankle-shoes/)**

Full documentation is available [here](http://yithemes.com/docs-plugins/yith_wishlist/).

This plugin is 100% compatible with [WPML](http://wpml.org/?aid=24889&affiliate_key=Qn1wDeBNTcZV)

= Installation =

Once you have installed the plugin, you just need to activate the plugin and have also woocommerce plugin active in order to enable it.

= Configuration =

YITH WooCommerce Wishlist will add a new tab called "Wishlist" below the Woocommerce -> Settings menu. Here you are able to configure all the plugin settings.

= Developer =

Are you a developer? Want to customize the templates or the style of the plugin? Read on the [documentation](http://yithemes.com/docs-plugins/yith_wishlist/) and discover how to do that.

= Support =

Hi there, we have good news here: all our plugins are released for free. Wow!
Already knew it, right?! Great, but maybe you do not know that: if you're looking for how to install the plugins or how to use them within your Wordpress installations, which is the right way to ask support?
That's the way:

* Register on http://yithemes.com
* Go to Support > Get Support

Here we provide support, not on wordpress.org were, usually we do not read topics. It's better to follow us or write on our forum!

== Installation ==

1. Unzip the downloaded zip file.
2. Upload the plugin folder into the `wp-content/plugins/` directory of your WordPress site.
3. Activate `YITH WooCommerce Wishlist` from Plugins page

== Frequently Asked Questions ==

= Can I customize the wishlist page? =
Yes, the page is a simple template and you can override it by putting the file template "wishlist.php" inside the "woocommerce" folder of the theme folder.

= Can I move the position of "Add to wishlist" button? =
Yes, you can move the button to another default position or you can also use the shortcode inside your theme code.

= Can I change the style of "Add to wishlist" button? =
Yes, you can change the colors of background, text and border or apply a custom css. You can also use a link or a button for the "Add to wishlist" feature.

== Screenshots ==

1. The page with "Add to wishlist" button
2. The wishlist page
3. The Wishlist settings page
4. The Wishlist settings page

== Changelog ==

= 1.1.0 =

* Added: Support to WooCommerce 2.1.x
* Added: Spanish (Mexico) translation by Gabriel Dzul
* Added: French translation by Virginie Garcin
* Fixed: Revision Italian Language po/mo files

= 1.0.6 =

* Added: Spanish (Argentina) partial translation by Sebastian Jeremias
* Added: Portuguese (Brazil) translation by Lincoln Lemos
* Fixed: Share buttons show also when not logged in
* Fixed: Price shows including or excluding tax based on WooCommerce settings
* Fixed: Better compatibility for WPML 
* Fixed: Price shows "Free!" if the product is without price
* Fixed: DB Table creation on plugin activation

= 1.0.5 =

* Added: Shared wishlists can be seens also by not logged in users
* Added: Support for WPML String translation
* Updated: German translation by Stephanie Schlieske
* Fixed: Add to cart button does not appear if the product is out of stock

= 1.0.4 =

* Added: partial Ukrainian translation
* Added: complete German translation. Thanks to Stephanie Schliesk
* Added: options to show/hide button add to cart, unit price and stock status in the wishlist page
* Added: Hebrew language (thanks to Gery Grinvald)

= 1.0.3 =

* Minor bugs fixes

= 1.0.2 =

* Fixed fatal error to yit_debug with yit themes

= 1.0.1 =

* Optimized images
* Updated internal framework

= 1.0.0 =

* Initial release

== Suggestions ==

If you have suggestions about how to improve YITH WooCommerce Wishlist, you can [write us](mailto:plugins@yithemes.com "Your Inspiration Themes") so we can bundle them into YITH WooCommerce Wishlist.

== Translators ==

= Available Languages =
* English (Default)
* Italiano

If you have created your own language pack, or have an update for an existing one, you can send [gettext PO and MO file](http://codex.wordpress.org/Translating_WordPress "Translating WordPress")
[use](http://yithemes.com/contact/ "Your Inspiration Themes") so we can bundle it into YITH WooCommerce Wishlist Languages.

== Documentation ==

Full documentation is available [here](http://yithemes.com/docs-plugins/yith_wishlist/).

== Upgrade notice ==

= 1.0.0 =

Initial release
=======

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


>>>>>>> a694eae96dee452c11ab43248d2159ef77657adb
