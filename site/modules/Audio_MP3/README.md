Audio_MP3
=========

This module integrates a highly configurable Flash MP3 player in your pages.
 
## Third party Code
This modules uses two versions of the free flash-mp3-player
#### download
- https://github.com/neolao/mp3-player/raw/master/template_maxi/player_mp3_maxi.swf
- https://github.com/neolao/mp3-player/raw/master/template_multi/player_mp3_multi.swf

or

- http://flash-mp3-player.net/medias/player_mp3_maxi.swf
- http://flash-mp3-player.net/medias/player_mp3_multi.swf

#### more information
http://flash-mp3-player.net/players/
#### code
https://github.com/neolao/mp3-player/
#### licenses
http://creativecommons.org/licenses/by-sa/3.0/deed.en  
http://www.mozilla.org/MPL/
#### author
neolao https://github.com/neolao


## How to install
- Download from github the module and the two swf Files, unzip, copy all files in a folder /Audio_MP3/ and add the folder to your /site/modules/ directory. 
- Click *check for new modules* in ProcessWire Admin Modules screen. Click *install* for the module labeled: "Audio_MP3".
- Now you will be on the module config screen. Please make note of the config options and set as you want.
- Done!


## How to use
- Add the field 'Audio' created by the module to your Template in Setup > Templates.
- Add the following code to the template file
- to get the title list: $page->player['title'];
- to get the player: $page->player['code'];
- create a page using the Template
- drag and drop mp3 or mp3.zip files in the audio field in the Page-Edit-Area.
- If you like put an alternative title in the description-field after the file upload. Default title is the name of the file.


## How it works
If you store just one File in the Page-Edit-Area the Maxi-Player will be loaded. For 2 or more files the Module will switch to Multi-Player. If you want an alternative title, you can put it in the Description-field of the Audio Field, which is visible after the file upload.


## Module Configuration
- width: Forces the video width.
- height: Forces the video height. //only Maxi-Player only one file stored
- volume: The initial volume, between 0 and 200. By default set to 50
- showstop: 1 to show the STOP button.
- showinfo: 1 to show the INFO button.
- showvolume: 1 to show the VOLUME button.
- showloading: 'alway','never','autohide') to show the LOADING bar// By default set to 'alway'
- buttonwidth: The buttons width. By default set to 30.
- volumewidth: The width of the VOLUME button. By default set to 30.
- volumeheight: The height of the VOLUME button. By default set to 10
- loadingcolor: The color of loading bar
- sliderovercolor: Hover color of the bar
- buttonovercolor: Hover color of buttons

#### added in 1.0.2
- buttoncolor: Color of Controls
- slidercolor1: Start Color (start-color)
- slidercolor2: End Color (gradient)
- playlistcolor: Backgroundcolor of the playlist visible in  Multiplayer only (2 and more files)
- currentmp3color: visible in  Multiplayer only (2 and more files)

#### more informations about configuration options here:
- http://flash-mp3-player.net/players/multi/documentation/
- http://flash-mp3-player.net/players/maxi/documentation/

## changelog
* 14.06.13 add error messages to the install routine
* 15.06.13 hook added to $page
* 20.06.13 message added to the uninstall routine
* 25.09.13 some configuration-options added (multiplayer)
* 09.10.13 multisite support (path to swf-player/ site-folder)
* 14.10.13 all phrases translatable
* 14.10.13 translation for german available
* 21.10.13 simplified color setting, allowed input now: with/without leading '#', 3 or 6 digit hex-code, Colornames allowed
* 21.10.13 for better accessibility: alternative links directly to the mp3-files included
* 25.10.13 accesibility: headline added to titlelist in alternative content
* 13.11.13 bug fixed: Validation Error w3c: place <param> before flow content(h2,ul etc.) in <object>
* 19.03.16 tested in PW 3.0.9, small debugging, better uninstall process preventing ugly error messages

Copyright 2013 by Christoph Thelen
