# Padsearch - Etherpad Search
A simple script to expose all of the pads stored on a given Etherpad server. Pads are searchable by name.
Now with support for Etherpad Lite.

To install/configure: place in a publicly accessible web directory. To make
available as a subdomain, for example padsearch.example.com, set your directory
index to match the file name, for example padsearch.php, or rename the file to
index.php and ensure support for php index files is configured in your webserver.  

Note for etherpad-lite users: etherpad-lite has a url structure like so:

`base_url.com/p/padname`

the ` $etherpad_baseurl ` variable should be set to just the base url. the script
will add the /p/ part of the path for you. 

## Screenshots
![Screenshot 1](http://f.cl.ly/items/3v3l253f1Q3O2N3E2O2W/Screen%20Shot%202011-09-15%20at%203.51.51%20PM.png)
![Screenshot 2](http://f.cl.ly/items/0d2y0d3T0V3O3r2k1P3F/Screen%20Shot%202011-09-15%20at%203.51.17%20PM.png)

## MIT License

Copyright (c) 2011 John Britton, http://www.johndbritton.com

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
