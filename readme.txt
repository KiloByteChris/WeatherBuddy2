/*
Plugin Name:  MyPlugin
Description:  Example plugin for the video tutorial series, "WordPress: Plugin Development", available at Lynda.com.
Plugin URI:   https://profiles.wordpress.org/specialk
Author:       Jeff Starr
Version:      1.0
Text Domain:  myplugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

WordPress.org
Search WordPress.org for:

    Showcase
    Themes
    Plugins
    Mobile
    Support
        Documentation
        Forums
    Get Involved
    About
    Blog
    Hosting
    Get WordPress

Plugin Handbook
Skip to content
Search for:
Chapters

    Introduction to Plugin Development

Plugin Basics
Plugin Security
Hooks
Privacy
Administration Menus
Shortcodes
Settings
Metadata
Custom Post Types
Taxonomies
Users
HTTP API
JavaScript, Ajax, & jQuery
Cron
Internationalization
The Plugin Directory
Developer Tools

    Credits

Browse: Home / Plugin Handbook / The WordPress.org Plugin Directory / Plugin Readmes
Plugin Readmes
Topics

    Example Readme
    Section Details
        Readme Header Information
        Installation
        Custom Sections
    Technical Details
        How The Readme Is Parsed
        Videos
        Markdown
        Field Details
        File Size

This page will explain some aspects of the plugin directory, and explain of the more obvious aspects which a lot of people miss.

To make your entry in the plugin browser most useful, each plugin should have a readme file named readme.txt that adheres to the WordPress plugin readme file standard. You can use the plugin readme generator and put the result through the readme validator to check it.
Example Readme #Example Readme
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
99
100
101
102
103
104
105
106
107
108
109
110
111
112
113
114
115

=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://example.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Requires PHP: 5.2.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `&amp;lt;?php do_action('plugin_name_hook'); ?&amp;gt;` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](https://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
&amp;gt; Asterisks for *emphasis*. Double it up  for **strong**.

`&amp;lt;?php code(); // goes in backticks ?&amp;gt;`

Collapse full source code

Top ↑
Section Details #Section Details

All plugins contain a main PHP file, and almost all plugins have a readme.txt file as well. The readme.txt file is intended to be written using a subset of markdown.
Readme Header Information #Readme Header Information

The Plugin readme header consists of this information:

=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://example.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Requires PHP: 5.2.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin. This should be no more than 150 characters. No markup here.

The line for Contributors is a case sensitive, comma separated list of all WordPress.org usernames who have contributed to the code. It is generally considered respectful to include the names of people who worked on forked projects. Some developers will ask to be removed from the list, as they don’t want other plugins showing up on their profile page. It’s best to honor those requests. Remember to only use the WordPress.org username – anything else will show up sans profile link and gravatar, which is sad. If you want to change your display name (which shows on the front facing pages for you plugin), edit your profile https://wordpress.org/support/users/YOURID/edit/ and change the display name.

The Donate link makes a “Donate to this plugin” link in the sidebar. It’s entirely optional, and if there is no link, nothing shows up.

The Requires at least and Tested up to fields are used for compatibility checking with WordPress core. If a plugin sets the required version to 4.4, then users on versions below 4.4 will not receive update notifications. Use this wisely.

Make note that the Tested up to field ignores minor versions, as plugins shouldn’t break with a minor update. This means you only need to define the major version it is tested against and the WordPress.org plugin directory will automatically add the minor version for you. This should be numbers only, so ‘4.9’ and not ‘WP 4.9’

At the end of the header section is a place for a short description of a plugin. The example recommends no more than 150 characters and to not use markup. That line of text is the single line description of the plugin which shows up right under the plugin name. If it’s longer than 150 characters, it gets cut off, so keep it short.

Top ↑
Installation #Installation

If your plugin has no custom install settings, it’s okay to omit this section. If your plugin has custom configuration notes post install, this is a great place to put that information.

Top ↑
Custom Sections #Custom Sections

While custom sections are permitted and supported, please use them in moderation. People get used to seeing how every other plugin looks, and when yours is weird, they’ll miss important information.

Top ↑
Technical Details #Technical Details

While most of the readme details are self evident, there are a few sections that trip people up.

Top ↑
How The Readme Is Parsed #How The Readme Is Parsed

WordPress.org’s Plugin Directory works based on the information found in the field Stable Tag in the readme. When WordPress.org parses the readme.txt, the very first thing it does is to look at the readme.txt in the /trunk directory, where it reads the “Stable Tag” line. If the Stable Tag is missing, or is set to “trunk”, then the version of the plugin in /trunk is considered to be the stable version. If the Stable Tag is set to anything else, then it will go and look in /tags/ for the referenced version. So a Stable Tag of “1.2.3” will make it look for /tags/1.2.3/.

Warning: If you do not use a stable tag, everything will be read from the trunk location.

If the Stable Tag is 1.2.3 and /tags/1.2.3/ exists, then nothing in trunk will be read any further for parsing by any part of the system. If you try to change the description of the plugin in /trunk/readme.txt, and Stable Tag isn’t trunk, then your changes won’t do anything on your plugin page. Everything comes from the readme.txt in the file being pointed to by the Stable Tag. If there is no folder for the Stable Tag, then WordPress will default to using the trunk folder’s content.

The WordPress.org Plugin Directory reads the main plugin PHP file to get things like the Name of the plugin, the Plugin URI, and most importantly, the version number. On the plugin page, you’ll see the download button which reads “Download Version 1.2.3” or similar. That version number comes from the plugin’s main PHP file, not the readme!

The Stable Tag points to a subdirectory in the /tags directory. But the version of the plugin is not actually set by that folder name. Instead, it’s the version that is listed in the plugin’s PHP file itself which determines the name. If you have changed Stable Tag to 1.4 and the plugin still says 1.3 in the PHP file, then the version listed will be 1.3.

Top ↑
Videos #Videos

You can embed videos from YouTube, Vimeo, and anywhere else WordPress whitelists by default. All you have to do is paste the video URL onto it’s own line in your readme.

We recommend you NOT have the video as the final line in a FAQ section, as sometimes formatting gets weird.



Top ↑
Markdown #Markdown

The readmes use a customized version of Markdown. Most Markdown calls work as expected.

Markdown allows for easy linking in your readme.txt as well. Just write like this to link a word to a URL:

[WordPress](http://wordpress.org)

Videos can be put into your readme.txt too. A YouTube or Vimeo link on a line by itself will be auto-embedded. It’s also possible to embed videos hosted on VideoPress using the wpvideo shortcode.

Top ↑
Field Details #Field Details

For those who want to know exactly what gets parsed into what:

    Authors
    Author field from the plugin header and Contributors field from the readme file.
    Version
    Version field from the plugin header.
    Tags (as in categories)
    Tags field from the readme file.
    Plugin Name
    The Plugin Name from the readme file falling back on the Plugin Name specified in the plugin header.
    Author and Plugin Homepages
    The Author URI and Plugin URI fields of the plugin header. The Plugin URI should be unique to each plugin. Do not use the same URI for your free and pro plugin. It ends badly.
    Last updated time
    Time of last check in to the appropriate directory after a version number change.
    Creation time
    Time of first check in.

Top ↑
File Size #File Size

While readmes are simple text files, having a file larger than 10k may result in errors. Your readme should be brief and to the point. The description should not be a sales pitch as much as a description of the plugin, what it does, and how to use it. Your install directions should be direct. Your FAQ should actually address issues.

As for your changelog, we recommend keeping the current release in the readme and splitting the rest out out into it’s own file — changelog.txt for example. By storing all the older changelog data there, you keep your readme small and allow the people who get really into long changelogs to read things on their own.

Similarly, if you need in-depth documentation with inline images and so on, direct people to your own website.


    About
    Blog
    Hosting
    Donate

    Support
    Developers
    Get Involved

    Showcase
    Plugins
    Themes

    WordCamp
    WordPress.TV
    BuddyPress
    bbPress

    WordPress.com
    Matt
    Privacy
    Public Code

    @WordPress
    WordPress

Code is Poetry.
Skip to toolbar

    About WordPress

    Search
    Log In
    Register
