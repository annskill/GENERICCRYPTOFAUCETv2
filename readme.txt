/*************************************************************************
php easy :: admin login scripts set - README FILE
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/


I. DESCRIPTION
--------------
This set contains 3 ready-to-use admin login scripts using 3 different
authentication methods:
1. HTTP Authentication;
2. Cookies;
3. Sessions.
All the three provide the same security level and do not require any DB.
Minor differences: in cookie version you can also specify the number of days
to keep your cookie alive while in other two versions the session will expire
when you close your browser window, and in HTTP Authentication version there
is no real logout but just a redirection to the root folder while there is no
way to unset server globals from within the script - you will be logged out
automatically as soon as you close the browser window to terminate the session.


II. USAGE
---------
1. Open appropriate login.php in any text editor and specify your username/password.
2. Upload login.php and demo.php to a subfolder on your server you want to protect.
3. Open demo.php in your browser: http://www.yourdomain.com/admin/demo.php
4. If everything works, add to ALL your php scripts in protected subfolder:
   require_once('login.php');
   directly after <?php opening directive.
5. Remove demo.php from your server.


III. LICENSE AGREEMENT
----------------------
This license is a legal agreement between you and 'php easy code' for the use
of 'php easy :: admin login scripts set' (the 'Software'). By obtaining the
Software you agree to comply with the terms and conditions of this license.

PERMITTED USE
You are permitted to use, copy, modify, and distribute the Software and its
documentation, with or without modification, for any purpose, provided that
the following conditions are met:

1. A copy of this license agreement must be included with the distribution.

2. Redistributions of source code must retain the above copyright notice in
   all source code files.

3. Redistributions in binary form must reproduce the above copyright notice
   in the documentation and/or other materials provided with the distribution.

4. Any files that have been modified must carry notices stating the nature 
   of the change and the names of those who changed them.

5. Products derived from the Software must include an acknowledgment that
   they are derived from php easy code in their documentation and/or other
   materials provided with the distribution.


INDEMNITY
You agree to indemnify and hold harmless the authors of the Software and 
any contributors for any direct, indirect, incidental, or consequential 
third-party claims, actions or suits, as well as any related expenses, 
liabilities, damages, settlements or fees arising from your use or misuse 
of the Software, or a violation of any terms of this license.

DISCLAIMER OF WARRANTY
THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR 
IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, 
NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. 

LIMITATIONS OF LIABILITY
YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE 
FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION 
WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE 
APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING
BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF 
DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.

==================================
Copyright © 2008, by php easy code
