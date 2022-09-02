# Joomla 4x Example Module - mod_debugme

A module prepared for Joomla for debugging practice.

## Prerequisites

Joomla 4. It should not install or work on earlier Joomla versions.

## Installing

Download the zip file and install it in Joomla 4.

In Content / Site Modules add a New module, enable and assign to a permission. It will break your site if set to appear *On all pages*. You may wish to set it to appear on a single page for testing.

## Documentation

### List of potential bugs
- mod_debugme.xml has a namespace path="src" missing. (line 14/15)
- mod_debugme.xml has a folder or file name missing so it is not present when the zip file is unpacked. (21)
- the module parameter language strings are missing, or in the wrong ini file.
- mod_debugme.php: forgot a use statement. (13)
- DebugmeHelper.php: forgot to set $day_of_year value (38)
- DebugmeHelper.php: forgot to escape quotes around DATE_FORMAT format  (47)
- DebugmeHelper.php: wrong table name (48)
- Logic: what happens in a leap year or the end of December?

The **Wiki** contains a draft tutorial explantion of what this module does and how it works.

## Author

* **Clifford E Ford**

## License

This project is licensed under the [GPL3 License](http://www.gnu.org/licenses/gpl-3.0.html)

## Acknowledgments

* The Joomla 4 Project Team
* This Joomla 4 [Tutorial](https://docs.joomla.org/J4.x:Creating_a_Simple_Module)

