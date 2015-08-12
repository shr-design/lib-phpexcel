# PHPExcel Library

A wrapper plugin for the PHPExcel library (http://www.codeplex.com/PHPExcel).  This plugin only provides for loading the 
library - it does nothing visible.  This is intended to be used as a way to include the library without adding it to other 
plugins or themes.

## Installation

1. Upload the `lib-phpexcel` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Begin using PHPExcel in your plugin or theme (e.g., `<?php $Excel = new PHPExcel(); ?>`

## Frequently Asked Questions

### I installed the plugin, but it does nothing!  Why?

Because this plugin provides the PHPExcel library objects to your existing code.  It does not have any direct interface or other
effect - it is intended to be used by developers when distributing or creating their own products.

### I activated the plugin, but my site throws all sorts of errors.  Why?

The most common reason is that another plugin or theme has the PHPExcel library embedded in their code, and is not checking to
ensure that the library is already loaded.  This could cause the library to load twice, causing all sorts of visible wierdness.
If this happens, you can deactive the plugin, and submit a ticket to the conflicting plugin's author requesting they update
their code.

### I have a complaint from a user about a plugin conflict.  What can I do to fix this?

Do what I do.  When including the main PHPExcel.php library file in your plugin or theme, check and see if `PHPExcel` is 
already defined or not.

```
// Only load if we don't already have the core class defined
if( !class_exists( 'PHPExcel' ) ) {
	include_once('path/to/PHPExcel.php');
}
```

### I've got the plugin installed, and I want to use it.  How?

It really depends on what you're trying to accomplish.  The basic documentation for using the library can be found at
https://github.com/PHPOffice/PHPExcel/wiki/User%20Documentation

Some simple examples are also found at http://phpexcel.codeplex.com/wikipage?title=Examples&referringTitle=Documents

### I found a bug in the PHPExcel library.  Can I tell you?

I only maintain the plugin itself, not the library.  You can go to https://github.com/PHPOffice/PHPExcel/issues and 
submit a ticket.

## Changelog

### 1.8.0
* First plugin release.  Version number is tied to the PHPExcel library version.
