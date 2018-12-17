# simple_webdev_framework
A simple directory structure for Website development using PHP for backend

<h3>Description</h3>

A simple directory structure and basic PHP as well as JS functionalities are provided for easy development of any web application. Currently, configuration for only Apache is supported.

<h3>Features</h3>

1. All resources are, by default, private and hotlink-protected
2. Direct access to all resources is not allowed
3. Sample error-document templates are provided
4. Prevent older browser support with fallback as custom page for list of browsers to download if the user uses any unsupported browser
5. Project-wide configuration for credentials from a single point
6. SNS support for Google+, Twitter, OpenGraph and Bing
7. PHP-Mailer provided pre-setup for sending mails using SMTP
8. w3.css/w3.js provided as lightweight CSS/JS framework

All the above features can be changed to suite the demand of the work.

<h3>Directory Structure</h3>

<pre>
project_root
|- Resources/
   |- Documents/ <i>(* Put all your documents here *)</i>
   |- Images/
      |- Browsers/
      |- Logo/
      |- Menu/
      |- Platforms
      |- SNS/
      |- Logo
   |- Includes/
      |- Forms/ <i>(* Put all your forms here *)</i>
   |- Scripts/
      |- Backend/ <i>(* Put all your PHP files here *)</i>
         |- Common/
         |- Library/
      |- Frontend/ <i>(* Put all your JS files here *)</i>
         |- Library/
   |- Styles/ <i>(* Put all your stylesheets here *)</i>
      |- Fonts/
|- .htaccess
|- browsersupport.php
|- home.php
|- index.php
</pre>

<h3>Usage</h3>

1. Rename 'template' in line 22 of .htaccess to your project name
2. Edit all values in Project.php located at Resources/Scripts/Backend/Common
3. Start developing.

<h3>Contribution</h3>

1. Feel free to contribute. Just create a new branch and start developing on it
2. Would be glad if .htaccess alternatives for different servers is added
