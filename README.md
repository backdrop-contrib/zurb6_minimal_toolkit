Zurb6 Minimal Toolkit
------------------------

Like the core 1.4+ layouts, but using Zurb Foundation 6 flex grid.

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Usage
 - License
 - Credits
 - Maintainers

INTRODUCTION
------------

You probably don't need this if you are happy with site building in Backdrop 1.4+.  This is an edge case.

You are a developer and would like to make your own layouts.  You do not want just a page with "sidebar on the left" or "two column".  You want a layout with sidebar on the left, two columns, and a bunch of other regions on the page.  This layout set provides a pattern library of common regions based on core standards that you can pick and choose and copy and paste in your own layout.  It is important that these layouts and regions work together with core layouts and use the same standards and naming so the end user (site editor or owner) receives a pleasant working experience and not just, "well, developer X has this opinion but developer Y has a different opinion so the software is a Frankenstein monster that fights against itself".

This provides minimal markup similar to core 1.4+ layouts.

TESTED
-----

Working with Backdrop 1.4

KNOWN ISSUES
---------------------

this is an experimental idea, so file issues on Github if you have questions.


REQUIREMENTS
------------



INSTALLATION
------------

Install this module using the official Backdrop CMS instructions at https://backdropcms.org/guide/modules

COMING FROM DRUPAL?
-------------------

This module is not a port from Drupal.

PERMISSIONS
------------


USAGE
-----

This does not provide anything "out of the box".

To view the regions this provides:
-- rename zurb6_minimal_toolkit_patterns.info.starterkit to zurb6_minimal_toolkit_patterns.info
-- choose this layout, and place blocks into the regions.

To use the region patterns this module provides:
-- rename zurb6_minimal_toolkit_patterns.info.starterkit to [your_layout_name].info
-- rename layout--zurb6-minimal-toolkit-patterns.tpl.php to [your_layout_name].tpl.php
-- in your_layout_name.info file, delete the layout regions you do not want, and possibly add any extra regions you desire.
-- in your_layout_name.tpl.php file, delete the layout regions you do not want, and possibly add any extra regions you desire.

LICENSE
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

CREDITS
-----------

 - wesruv <https://github.com/wesruv>

 - jenlampton <https://github.com/jenlampton>

 - arshad <https://github.com/arshad>

 - biolithic <https://github.com/biolithic>

MAINTAINERS
-----------

 - biolithic <https://github.com/biolithic>
