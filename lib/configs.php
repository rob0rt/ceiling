<?php 
$_CONFIG = array();
$_ERROR = "";
$_START_TIME = microtime(TRUE);

/* 
 * GENERAL SETTINGS
 */


$_CONFIG['lang'] = "en";

$_CONFIG['thumbnails'] = true;
$_CONFIG['thumbnails_width'] = 300;
$_CONFIG['thumbnails_height'] = 300;

$_CONFIG['mobile_enabled'] = true;


/*
 * USER INTERFACE
 */

$_CONFIG['calculate_space_level'] = 0;

$_CONFIG['show_path'] = true;
$_CONFIG['time_format'] = "m/d/y H:i:s";
$_CONFIG['charset'] = "UTF-8";

/*
* PERMISSIONS
*/

$_CONFIG['hidden_dirs'] = array("css", "js", "img", "font");
$_CONFIG['hidden_files'] = array(".Trash-1000");

$_CONFIG['require_login'] = true;
$_CONFIG['users'] = array(array("ras", "bananas", "admin"),array("user", "password", "user"));
$_CONFIG['upload_enable'] = true;
$_CONFIG['newdir_enable'] = true;
$_CONFIG['delete_enable'] = true;

/*
 * UPLOADING
 */

$_CONFIG['upload_dirs'] = array();
$_CONFIG['upload_reject_extension'] = array();

/*
 * LOGGING
 */

$_CONFIG['log_file'] = "";

/*
 * SYSTEM
 */

$_CONFIG['starting_dir'] = ".";
$_CONFIG['basedir'] = "/mnt/hd0/";
$_CONFIG['large_files'] = true;
$_CONFIG['session_name'] = "RAS";

/***************************************************************************/
/*   TÕLKED                                                                */
/*                                                                         */
/*   TRANSLATIONS.                                                         */
/***************************************************************************/

$_TRANSLATIONS = array();

// English
$_TRANSLATIONS["en"] = array(
	"file_name" => "File name",
	"size" => "Size",
	"last_changed" => "Last changed",
	"total_used_space" => "Total used space",
	"free_space" => "Free space",
	"password" => "Password",
	"upload" => "Upload",
	"failed_upload" => "Failed to upload the file!",
	"failed_move" => "Failed to move the file into the right directory!",
	"wrong_password" => "Wrong password",
	"make_directory" => "New dir",
	"new_dir_failed" => "Failed to create directory",
	"chmod_dir_failed" => "Failed to change directory rights",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root",
	"log_file_permission_error" => "The script does not have permissions to write the log file.",
	"upload_not_allowed" => "The script configuration does not allow uploading in this directory.",
	"upload_dir_not_writable" => "This directory does not have write permissions.",
	"mobile_version" => "Mobile view",
	"standard_version" => "Standard view",
	"page_load_time" => "Page loaded in %.2f ms",
	"wrong_pass" => "Wrong username or password",
	"username" => "Username",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "This file type is not allowed for uploading.",
	"del" => "Del", // short for Delete
	"log_out" => "Log out"
);

/***************************************************************************/
/*                                                                         */
/*   IMAGE CODES IN BASE64                                                 */
/*   You can generate your own with a converter                            */
/*   Like here: http://www.motobit.com/util/base64-decoder-encoder.asp     */
/*   Or here: http://www.greywyvern.com/code/php/binary2base64             */
/*   Or just use PHP base64_encode() function                              */
/***************************************************************************/


$_IMAGES = array();

$_IMAGES["arrow_down"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAABbSURBVCjPY/jPgB8yDCkFB/7v+r/5/+r/
i/7P+N/3DYuC7V93/d//fydQ0Zz/9eexKFgtsejLiv8b/8/8X/WtUBGrGyZLdH6f8r/sW64cTkdW
SRS+zpQbgiEJAI4UCqdRg1A6AAAAAElFTkSuQmCC";
$_IMAGES["arrow_up"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAABbSURBVCjPY/jPgB8yDDkFmyVWv14kh1PB
eoll31f/n/ytUw6rgtUSi76s+L/x/8z/Vd8KFbEomPt16f/1/1f+X/S/7X/qeSwK+v63/K/6X/g/
83/S/5hvQywkAdMGCdCoabZeAAAAAElFTkSuQmCC";
$_IMAGES["del"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJdSURBVDjLpZP7S1NhGMf9W7YfogSJboSE
UVCY8zJ31trcps6zTI9bLGJpjp1hmkGNxVz4Q6ildtXKXzJNbJRaRmrXoeWx8tJOTWptnrNryre5
YCYuI3rh+8vL+/m8PA/PkwIg5X+y5mJWrxfOUBXm91QZM6UluUmthntHqplxUml2lciF6wrmdHri
I0Wx3xw2hAediLwZRWRkCPzdDswaSvGqkGCfq8VEUsEyPF1O8Qu3O7A09RbRvjuIttsRbT6HHzeb
sDjcB4/JgFFlNv9MnkmsEszodIIY7Oaut2OJcSF68Qx8dgv8tmqEL1gQaaARtp5A+N4NzB0lMXxo
n/uxbI8gIYjB9HytGYuusfiPIQcN71kjgnW6VeFOkgh3XcHLvAwMSDPohOADdYQJdF1FtLMZPmsl
vhZJk2ahkgRvq4HHUoWHRDqTEDDl2mDkfheiDgt8pw340/EocuClCuFvboQzb0cwIZgki4KhzlaE
6w0InipbVzBfqoK/qRH94i0rgokSFeO11iBkp8EdV8cfJo0yD75aE2ZNRvSJ0lZKcBXLaUYmQrCz
DT6tDN5SyRqYlWeDLZAg0H4JQ+Jt6M3atNLE10VSwQsN4Z6r0CBwqzXesHmV+BeoyAUri8EyMfi2
FowXS5dhd7doo2DVII0V5BAjigP89GEVAtda8b2ehodU4rNaAW+dGfzlFkyo89GTlcrHYCLpKD+V
7yeeHNzLjkp24Uu1Ed6G8/F8qjqGRzlbl2H2dzjpMg1KdwsHxOlmJ7GTeZC/nesXbeZ6c9OYnuxU
c3fmBuFft/Ff8xMd0s65SXIb/gAAAABJRU5ErkJggg==";
$_IMAGES["savedir"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJFSURBVDjLpZPNS1RhFMZ/5733zkzjR/ZBCUpoJdUiBCkll4m0CUKJIGpVSLjyL2gntDFop6shAolWbcSNIW0ircHBUHCloo3VjNY0jjP3831bWA5ai8Bnfc7vPOfhHDHGcBjZAENji7N1cSj7IcdqY2zkKoiC2qSFNsKPYoXpTPbBynj/4j8BlbLL9c4L3OqoZWLmM4/vXdpX9OJtHq0lBXQdBIgxhvtPZmZ7ui+yspZrjwKfWExxtMbh66YLAgj4geZnyd2YzmT7Vsb75/c5UEqwDLgVl55r57hxuYY3c18Y6mtDgO1KSBBETMwV0VpeA2f3ARKOwvUCcgWX9bzH0NhqvC4Okx9zBzNpPdGQ4OHIrJnOZLtWxvs/2AChNnhRiFIKy8j/ZjILiALYLgc4YnO8zsJSIWUv4Pt2CMBU+tteoxtC0YN8wUdEV1eItMHCIdSagru5l0kQaZ4OdqC1wQAWhqQNnudR3PGrANu2aGmE9FJATSxJwinhegHDr1ZRAmGk0ZHGAMYYMJB0dh0ogOVs6VNqcoGtosYv1+9lYikHERvBQsQCozBGCMIQ3w+rDtKjvQMAd4bfL59vFqYzQasjNoM36wi1vzvHgBFNwo4x8nKNreJOFfBHy9nSXGpyoSPSYOGgqZCae8TJ5BkERb68zsDVZygSlD3/b0B6tPf2byempRFO127T095JQ6wJFBTcJk7VhCRjYItUT/mgrgxOvWtrPtLdEG8gYdcT6gDRGjERWsosrS2TKwbMP78rcth3/gX/0SEvLZFG1QAAAABJRU5ErkJggg==";
$_IMAGES["savefile"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH+SURBVBgZBcE9i11VGAbQtc/sO0OCkqhghEREAwpWAWUg8aMVf4KFaJEqQtAipTZWViKiCGOh2Ap2gmJhlSIWFsFOxUK0EsUM3pl79n4f12qHb3z3Fh7D83gC95GOJsDe0ixLk5Qq/+xv/Lw9Xd+78/HLX3Y8fXTr2nWapy4eCFKxG7Fby97SnDlYtMbxthyfzHO//nl85fNvfvnk8MbX5xa8IHx1518Vkrj54Q+qQms2vVmWZjdiu5ZR2rT01166/NCZg/2PFjwSVMU6yjoC1oq+x6Y3VbHdlXWExPd379nf7Nmejv2Os6OC2O4KLK0RNn3RNCdr2Z5GJSpU4o+/TkhaJ30mEk5HwNuvX7Hpi76wzvjvtIwqVUSkyjqmpHS0mki8+9mPWmuWxqYvGkbFGCUAOH/+QevYI9GFSqmaHr5wkUYTAlGhqiRRiaqiNes6SOkwJwnQEqBRRRJEgkRLJGVdm6R0GLMQENE0EkmkSkQSVVMqopyuIaUTs0J455VLAAAAAODW0U/GiKT0pTWziEj44PZ1AAAAcPPqkTmH3QiJrlEVDXDt0qsAAAAAapa5BqUnyaw0Am7//gUAAAB49tEXzTmtM5KkV/y2G/X4M5fPao03n/sUAAAAwIX7y5yBv9vhjW/fT/IkuSp5gJKElKRISYoUiSRIyD1tufs/IXxui20QsKIAAAAASUVORK5CYII=";

$_IMAGES["archive"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJmSURBVDjLhZNNS5RRGIav8+HMvDNO5ZhO
YqXQF2FgVNRCCKM2EbQ1ok2b/AG16F/0ge5qUwitghbWooikiIhI3AQVFER+VsyMztg7vuecp4U2
ORH5wLM5cK7n5r65lYgAoJTaDhQBw/9nAfgiIgEAEWENcjiO43KSJN45J//aOI5lZGTkBtALaBFp
AhxNksRXq1Wp1WqNrVQqUiqVZH5+XpxzMjs7K6Ojow2Imri9Z1Dntjwo2dObZr7vpKXFoDVAwFpN
vR6za9du+vr6KRQKrKysEEJgbGzs5vDw8DX1/N6Rrx0HOrpfvOqnWs0CCgQkaJTJEkIAHENDFygW
i01mWGuP2Vw+KnT3djPUM0eLzZO4L6ikztQz6Dl2i4ePxgk+IYoylMtlQgg45+js7FyFKKUk/llh
evplg9zTtR8RC0AmSlGtrGCMxVqF9x5j/gRlRQLZbIbt3fvW4lwmpS0IhCA4FwgEjDForVFK/Ta9
oYDa8jdmpt83Hndu86DaEQkgHgkBrXXT5QaA4FuiqI3itl4IPzHWk7G5NQUBQgISUEoBYIxpVlAr
le9+fCbntFY6qM2Z4BOWazFzS13UPrwjlUqzuFhtXF9NZZ0Cn7hLc59mrly+/uPQ+OO3T+6PP8W7
OpH1fJ6cpLU1hUsSphcqRLlNFHK6GXD84nuvlCoDS1FrgZn28+T5zom933jzeoKpyZeY9oPceOJp
z1e4erbtLw/WTTBZWVpaVNmcYuvWDk6eOsPAwCCLseHOpCOfNg0vgACg1rXxSL1enzDGZAC9QSOD
9345nU4PrgfsWKvzRp9/jwcWfgF7VEKXfHY5kwAAAABJRU5ErkJggg==";
$_IMAGES["audio"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIvSURBVDjLjZPLaxNRFIeriP+AO7Gg7nRX
qo1ogoKCK0Fbig8QuxKhPop04SYLNYqlKpEmQlDBRRcFFWlBqqJYLVpbq6ktaRo0aWmamUxmJpN5
ZvKoP++9mmlqWuzAt7jc+X2Hcy6nDkAdhXxbCI2Epv+wlbDeyVUJGm3bzpVKpcVyuYyVIPcIBAL3
qiXVgiYaNgwDpmk6qKoKRVEgCAKT8DyPYDDoSCrhdYHrO9qzkdOQvp+E+O04hC+tED63gBs+QiDn
hQgTWJYFWiQUCv2RUEH/g4YNXwdcT/VEJ6xkF8zEDRixq1CnriD94SikH08gikJNS2wmVLDwybON
H3GbNt8DY+YMrDk/tGkvhOFmKPE+pxVJkpDJZMBx3JJAHN+/MTPq8amxdtj8fWjhwzB+diH5ag9y
8V6QubDhUYmmaWwesiwvCYRRtyv9ca9oc37kk3egTbbBiPowP+iGOHGT0A1h7BrS43ehiXHous5E
joCEx3IzF6FMnYMcPgs95iOCW1DDXqTfnEBqsBnRR9shTvYibyhsiBRHwL13dabe7r797uHOx3Kk
m1T2IDfhhTRyAfMDh5Aauox8Ns5aKRQKDNrSsiHSZ6SHoq1i9nkDuNfHkHi2D9loHwtSisUig4ZX
FaSG2pB8cZBUPY+ila0JV1Mj8F/a3DHbfwDq3Mtlb12R/EuNoKN10ylLmv612h6swKIj+CvZRQZk
0ou1hMm/OtveKkE9laxhnSvQ1a//DV9axd5NSHlCAAAAAElFTkSuQmCC";
$_IMAGES["code"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZM9T9tQFIYpQ5eOMBKlW6eW
IQipa8RfQKQghEAKqZgKFQgmFn5AWyVDCipVQZC2EqBWlEqdO2RCpAssQBRsx1+1ndix8wFvfW6w
cUhQsfTI0j33PD7n+N4uAF2E+/S5RFwG/8Njl24/LyCIOI6j1+v1y0ajgU64cSSTybdBSVAwSMmm
acKyLB/DMKBpGkRRZBJBEJBKpXyJl/yABLTBtm1Uq1X2JsrlMnRdhyRJTFCpVEAfSafTTUlQoFs1
luxBAkoolUqQZbmtJTYTT/AoHInOfpcwtVtkwcSBgrkDGYph+60oisIq4Xm+VfB0+U/P0Lvj3NwP
GfHPTcHMvoyFXwpe7UmQtAqTUCU0D1VVbwTPVk5jY19Fe3ZfQny7CE51WJDXqpjeEUHr45ki9rIq
a4dmQiJfMLItGEs/FcQ2ucbRmdnSYy5vYWyLx/w3EaMfLmBaDpMQvuDJ65PY8Dpnz3wpYmLtApzc
rIAqmfrEgdZH1grY/a36w6Xz0DKD8ES25/niYS6+wWE8mWfByY8cXmYEJFYLkHUHtVqNQcltAvoL
D3v7o/FUHsNvzlnwxfsCEukC/ho3yUHaBN5Buo17Ojtyl+DqrnvQgUtfcC0ZcAdkUeA+ye7eMru9
AUGIJPe4zh509UP/AAfNypi8oj/mAAAAAElFTkSuQmCC";
$_IMAGES["database"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHVSURBVDjLjZPLaiJBFIZNHmJWCeQdMuT1
Mi/gYlARBRUkao+abHUhmhgU0QHtARVxJ0bxhvfGa07Of5Iu21yYFPyLrqrz1f+f6rIRkQ3icca6
ZF39RxesU1VnAVyuVqvJdrvd73Y7+ky8Tk6n87cVYgVcoXixWNByuVSaTqc0Ho+p1+sJpNvtksvl
UhCb3W7/cf/w+BSLxfapVIqSySRlMhnSdZ2GwyHN53OaTCbU7/cFYBgG4RCPx/MKub27+1ur1Xqj
0YjW6zWxCyloNBqUSCSkYDab0WAw+BBJeqLFtQpvGoFqAlAEaZomuc0ocAQnnU7nALiJ3uh8whgn
ttttarVaVCgUpCAUCgnQhMAJ+gG3CsDZa7xh1mw2ZbFSqYgwgsGgbDQhcIWeAHSIoP1pcGeNarUq
gFKpJMLw+/0q72azkYhmPAWIRmM6AGbXc7kc5fN5AXi9XgWACwAguLEAojrfsVGv1yV/sVikcrks
AIfDIYUQHEAoPgLwT3GdzWYNdBfXh3xwApDP5zsqtkoBwuHwaSAQ+OV2u//F43GKRCLEc5ROpwVo
OngvBXj7jU/wwZPPX72DT7RXgDfIT27QEgvfKea9c3m9FsA5IN94zqbw9M9fAEuW+zzj8uLvAAAA
AElFTkSuQmCC";
$_IMAGES["directory"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGrSURBVDjLxZO7ihRBFIa/6u0ZW7GHBUV0
UQQTZzd3QdhMQxOfwMRXEANBMNQX0MzAzFAwEzHwARbNFDdwEd31Mj3X7a6uOr9BtzNjYjKBJ6ni
cP7v3KqcJFaxhBVtZUAK8OHlld2st7Xl3DJPVONP+zEUV4HqL5UDYHr5xvuQAjgl/Qs7TzvOOVAj
xjlC+ePSwe6DfbVegLVuT4r14eTr6zvA8xSAoBLzx6pvj4l+DZIezuVkG9fY2H7YRQIMZIBwycmz
H1/s3F8AapfIPNF3kQk7+kw9PWBy+IZOdg5Ug3mkAATy/t0usovzGeCUWTjCz0B+Sj0ekfdvkZ3a
bBv+U4GaCtJ1iEm6ANQJ6fEzrG/engcKw/wXQvEKxSEKQxRGKE7Izt+DSiwBJMUSm71rguMYhQKr
BygOIRStf4TiFFRBvbRGKiQLWP29yRSHKBTtfdBmHs0BUpgvtgF4yRFR+NUKi0XZcYjCeCG2smkz
LAHkbRBmP0/Uk26O5YnUActBp1GsAI+S5nRJJJal5K1aAMrq0d6Tm9uI6zjyf75dAe6tx/SsWeD/
/o2/Ab6IH3/h25pOAAAAAElFTkSuQmCC";
$_IMAGES["graphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH8SURBVDjLjZPLaxNRFIfHLrpx10WbghXx
H7DQx6p14cadiCs31Y2LLizYhdBFWyhYaFUaUxLUQFCxL61E+0gofWGLRUqGqoWp2JpGG8g4ybTJ
JJm86897Ls4QJIm98DED9/6+mXNmjiAIwhlGE6P1P5xjVAEQiqHVlMlkYvl8/rhQKKAUbB92u91W
SkKrlcLJZBK6rptomoZoNApFUbhElmU4HA4u8YzU1PsmWryroxYrF9CBdDqNbDbLr0QikUAsFkM4
HOaCVCoFesjzpwMuaeXuthYcw4rtvG4KKGxAAgrE43FEIhGzlJQWxE/RirQ6i8/T7XjXV2szBawM
8yDdU91GKaqqInQgwf9xCNmoB7LYgZn+Oud0T121KfiXYokqf8X+5jAyR3NQvtzEq96z4os7lhqz
ieW6TxJN3UVg8yEPqzu38P7xRVy+cPoay52qKDhUf0HaWsC3xRvstd3Qvt9mTWtEOPAJf/+L8oKA
fwfLnil43z7Bkusqdr2X4Btvg1+c5fsVBZJ/H9aXbix/2EAouAVx4zVmHl2BtOrkPako2DsIwule
xKhnG/cmfbg+uIbukXkooR/I5XKcioLu+8/QNTyGzqE36OidQNeDJayLe7yZBuUEv8t9iRIcU6Z4
FprZ36fTxknC7GyCBrBY0ECSE4yzAY1+gyH4Ay9cw2Ifwv9mAAAAAElFTkSuQmCC";
$_IMAGES["image"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGWSURBVBgZpcE/a1NhGMbh3/OeN56cKq2D
p6AoCOKmk4uCn8DNycEOIojilr2TaBfRzVnESQR3Bz+FFDoWA2IjtkRqmpyc97k9qYl/IQV7XSaJ
w4g0VlZfP0m13dwepPbuiH85fyhyWCx4/ubxjU6kkdxWHt69VC6XpZlFBAhwJgwJJHAmRKorbj94
ewvoRBrbuykvT5R2/+lLTp05Tp45STmEJYJBMAjByILxYeM9jzr3GCczGpHGYAQhRM6fO8uFy1fJ
QoaUwCKYEcwwC4QQaGUBd36KTDmQ523axTGQmEcIEBORKQfG1ZDxcA/MkBxXwj1ggCQyS9TVAMmZ
iUxJ8Ln/kS+9PmOvcSW+jrao0mmMH5bzHfa+9UGBmciUBJ+2Fmh1h+yTQCXSkJkdCrpd8btIwwEJ
QnaEkOXMk7XaiF8CUxL/JdKQOwb0Ntc5SG9zHXQNd/ZFGsaEeLa2ChjzXQcqZiKNxSL0vR4unVww
MENMCATib0ZdV+QtE41I42geXt1Ze3dlMNZFdw6Ut6CIvKBhkjiM79Pyq1YUmtkKAAAAAElFTkSu
QmCC";
$_IMAGES["presentation"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHeSURBVDjLjZO/i1NBEMc/u+/lBYxiLkgU
7vRstLEUDyxtxV68ykIMWlocaGHrD1DxSAqxNf4t115jo6DYhCRCEsk733s7u2PxkuiRoBkYdmGZ
z3xndsaoKgDGmC3gLBDxbxsA31U1AKCqzCBXsywbO+e8iOgqz7JM2+32W+AiYFX1GGDHOeen06mm
abrwyWSio9FI+/2+ioj2ej3tdDoLiJm+bimAhgBeUe9RmbkrT5wgT97RaDQoioIQAt1ud7/Var1h
+uq+/s9+PLilw+FwqSRgJ1YpexHSKenHF4DFf/uC3b7CydsPsafraO5IkoTxeEwIARGh2WwCYNUJ
AOmHZ5y4eY/a7h4hPcIdHvDz/fMSnjviOCZJEiqVCtVqdfEl8RygHkz9DLZWQzOHisd9OizfckcU
RRhjMMbMm14CQlEC/NfPjPd2CSJQCEEEDWYBsNZijFkaCqu5Ky+blwl5geaOUDg0c8TnNssSClkE
R1GEtXYZcOruI6ILl1AJqATirW02Hr8sFThBVZfklyXMFdQbbDzdXzm78z4Bx7KXTcwdgzs3yizu
zxAhHvVh4avqBzAzaQa4JiIHgGE9C3EcX7ezhVIgeO9/AWGdYO/9EeDNX+t8frbOdk0FHhj8BvUs
fP0TH5dOAAAAAElFTkSuQmCC";
$_IMAGES["spreadsheet"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIpSURBVDjLjZNPSFRRFMZ/9707o0SOOshM
0x/JFtUmisKBooVEEUThsgi3KS0CN0G2lagWEYkSUdsRWgSFG9sVFAW1EIwQqRZiiDOZY804b967
954249hUpB98y/PjO5zzKREBQCm1E0gDPv9XHpgTEQeAiFCDHAmCoBhFkTXGyL8cBIGMjo7eA3YD
nog0ALJRFNlSqSTlcrnulZUVWV5elsXFRTHGyMLCgoyNjdUhanCyV9ayOSeIdTgnOCtY43DWYY3j
9ulxkskkYRjinCOXy40MDAzcZXCyVzZS38MeKRQKf60EZPXSXInL9y+wLZMkCMs0RR28mJ2grSWJ
Eo+lH9/IpNPE43GKxSLOOYwxpFIpAPTWjiaOtZ+gLdFKlJlD8u00xWP8lO/M5+e5efEB18b70Vqj
lMJai++vH8qLqoa+nn4+fJmiNNPCvMzQnIjzZuo1V88Ns3/HAcKKwfd9tNZorYnFYuuAMLDMfJ3m
+fQznr7L0Vk9zGpLmezB4zx++YggqhAFEZ7n4ft+HVQHVMoB5++cJNWaRrQwMjHM9qCLTFcnJJq5
9WSIMLAopQDwfR/P8+oAbaqWK2eGSGxpxVrDnvQ+3s++4tPnj4SewYscUdUgIiilcM41/uXZG9kN
z9h9aa+EYdjg+hnDwHDq+iGsaXwcZ6XhsdZW+FOqFk0B3caYt4Bic3Ja66NerVACOGttBXCbGbbW
rgJW/VbnXbU6e5tMYIH8L54Xq0cq018+AAAAAElFTkSuQmCC";
$_IMAGES["textdocument"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIdSURBVDjLjZO7a5RREMV/9/F9yaLBzQY3
CC7EpBGxU2O0EBG0sxHBUitTWYitYCsiiJL0NvlfgoWSRpGA4IMsm43ZXchmv8e9MxZZN1GD5MCB
W8yce4aZY1QVAGPMaWAacPwfm8A3VRUAVJWhyIUsy7plWcYQgh7GLMt0aWnpNTADWFX9Q2C+LMu4
s7Oj/X5/xF6vp51OR1utloYQtNls6vLy8kjE3Huz9qPIQjcUg/GZenVOokIEiSBBCKUSQ+TFwwa1
Wo2iKBARVlZW3iwuLr7izssPnwZ50DLIoWz9zPT+s/fabrf/GQmY97GIIXGWp28/08si5+oV1jcG
TCSO6nHH2pddYqmkaUq320VECCFQr9cBsBIVBbJcSdXQmK7Q6Qsnq54sj2gBplS896RpSpIkjI2N
jVZitdh7jAOSK6trXcpC2GjlfP1esHD+GDYozjm893jvSZJkXyAWe+ssc6W5G9naLqkaw/pGxBrl
1tVpJCrWWpxzI6GRgOQKCv2BYHPl5uUatROeSsVy7eIkU9UUiYoxBgDnHNbagw4U6yAWwpmphNvX
T6HAhAZuLNRx1iDDWzHG/L6ZEbyJVLa2c54/PgsKgyzw5MHcqKC9nROK/aaDvwN4KYS7j959DHk2
PtuYnBUBFUEVVBQRgzX7I/wNM7RmgEshhFXAcDSI9/6KHQZKAYkxDgA5SnOMcReI5kCcG8M42yM6
iMDmL261eaOOnqrOAAAAAElFTkSuQmCC";
$_IMAGES["unknown"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAC4SURBVCjPdZFbDsIgEEWnrsMm7oGGfZro
hxvU+Iq1TyjU60Bf1pac4Yc5YS4ZAtGWBMk/drQBOVwJlZrWYkLhsB8UV9K0BUrPGy9cWbng2CtE
EUmLGppPjRwpbixUKHBiZRS0p+ZGhvs4irNEvWD8heHpbsyDXznPhYFOyTjJc13olIqzZCHBouE0
FRMUjA+s1gTjaRgVFpqRwC8mfoXPPEVPS7LbRaJL2y7bOifRCTEli3U7BMWgLzKlW/CuebZPAAAA
AElFTkSuQmCC";
$_IMAGES["vectorgraphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIWSURBVDjLhZNPbxJRFMWhRrYu3NrExIUb
dzWte6M7d34Eo2Hjxm8gwZUxIYEARUKAWgwbV0BpxAW11bpQFrCoCVEMDplhQMow782/enx3WsiU
0jrJ2bz7zu+9e95cHwAfSXzXhFaEVv+j60JLM58HsGIYxsi27SPHcbBIoo5oNBrxQryAVTJPJhPo
uu6q0+mgVquh0WhAlmUX0uv1EIvFZpCp2U8A2sA5h2maYIyhUChA0zTU63UoiuICaJ0OSSaTx5B5
AJnpqqVSCbmNTWxVt9FsNtHv98+05GYyD7AsC5VKBZvFd/j2k6Etc6gjHfLgELKiujeRJGkxQGSA
YDCIx8+eI/ORIb3Lkf0sWvmio9aaoC2NoQ7+QFUHCwFr5XIZ8bfvhZFhq2XgU9tEb2Tj99DCgcTx
9YeOg64GZTCGPQdYEnpaLBbxZl9HfIejo1rg5nGvti3CMyxouonhIYM8ZG7NBWSz2YepVKobiUR+
UXjrwry+wzBm9qnAqD03YHohbsASUP+ly2u+XC7XzmQyt9LpdJc2xuscr0ULU9NUFC6JDiFRCy4g
n88/EWqFw+EEmfL7HK8+8FOAqdmrWYjC7E8kElcCgcAdWmx2LbzY5mCmc+YWXp33H/w1LQehKhPP
ZuK8mTjR0QxwArktQtKpsLHHEarwC81ir+ZOrwewTBCiXr157/7d0PfqjQcvH10w1jT6y/8A/nHJ
HcAgm2AAAAAASUVORK5CYII=";
$_IMAGES["video"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIfSURBVDjLpZNPaBNBGMXfbrubzBqbg4kL
0lJLgiVKE/AP6Kl6UUFQNAeDIAjVS08aELx59GQPAREV/4BeiqcqROpRD4pUNCJSS21OgloISWME
Z/aPb6ARdNeTCz92mO+9N9/w7RphGOJ/nsH+olqtvg+CYJR8q9VquThxuVz+oJTKeZ63Uq/XC38E
0Jj3ff8+OVupVGLbolkzQw5HOqAxQU4wXWWnZrykmYD0QsgAOJe9hpEUcPr8i0GaJ8n2vs/sL2h8
R66TpVfWTdETHWE6GRGKjGiiKNLii5BSLpN7pBHpgMYhMkm8tPUWz3sL2D1wFaY/jvnWcTTaE5Dy
jMfTT5J0XIAiTRYn3ASwZ1MKbTmN7z+KaHUOYqmb1fcPiNa4kQBuyvWAHYfcHGzDgYcx9NKrwJYH
CAyF21JiPWBnXMAQOea6bmn+4ueYGZi8gtymNVobF7BG5prNpjd+eW6X4BSUD0gOdCpzA8MpA/v2
v15kl4+pK0emwHSbjJGBlz+vYM1fQeDrYOBTdzOGvDf6EFNr+LYjHbBgsaCLxr+moNQjU2vYhRXp
gIUOmSWWnsJRfjlOZhrexgtYDZ/gWbetNRbNs6QT10GJglNk64HMaGgbAkoMo5fiFNy7CKDQUGqE
5r38YktxAfSqW7Zt33l66WtkAkACjuNsaLVaDxlw5HdJ/86aYrG4WCgUZD6fX+jv/U0ymfxoWVZo
muZyf+8XqfGP49CCrBUAAAAASUVORK5CYII=";
$_IMAGES["webpage"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJwSURBVDjLjZPdT1JhHMetvyO3/gfLKy+6
8bLV2qIAq7UyG6IrdRPL5hs2U5FR0MJIAqZlh7BVViI1kkyyiPkCyUtztQYTYbwJE8W+Pc8pjofK
1dk+OxfP+X3O83srAVBCIc8eQhmh/B/sJezm4niCsvX19cTm5uZWPp/H3yDnUKvVKr6ELyinwWtr
a8hkMhzJZBLxeBwrKyusJBwOQ6PRcJJC8K4DJ/dXM04DOswNqNOLybsRo9N6LCy7kUgkEIlEWEE2
mwX9iVar/Smhglqd8IREKwya3qhg809gPLgI/XsrOp/IcXVMhqnFSayurv6RElsT6ZCoov5u1fzU
VwvcKRdefVuEKRCA3OFHv2MOxtlBdFuaMf/ZhWg0yt4kFAoVCZS3Hd1gkpOwRt9h0LOES3YvamzP
cdF7A6rlPrSbpbhP0kmlUmw9YrHYtoDku2T6pEZ/2ICXEQ8kTz+g2TkNceAKKv2nIHachn6qBx1M
I5t/Op1mRXzBd31AiRafBp1vZyEcceGCzQ6p24yjEzocGT6LUacS0iExcrkcK6Fsp6AXLRnmFOjy
PMIZixPHmAAOGxZQec2OQyo7zpm6cNN6GZ2kK1RAofPAr8GA4oUMrdNNkIw/wPFhDwSjX3Dwlg0C
Qy96HreiTlcFZsaAjY0NNvh3QUXtHeHcoKMNA7NjqLd8xHmzDzXDRvRO1KHtngTyhzL4SHeooAAn
KMxBtUYQbGWa0Dc+AsWzSVy3qkjeItLCFsz4XoNMaRFFAm4SyTXbmQa2YHQSGacR/pAXO+zGFif4
JdlHCpShBzstEz+YfJtmt5cnKKWS/1jnAnT1S38AGTynUFUTzJcAAAAASUVORK5CYII=";


$_IMAGES["7z"] = $_IMAGES["archive"];
$_IMAGES["as"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIqSURBVDjLjZPNi1JRGMan/ooWDbSKNq2s
gZqh0UgqKVoOU7OooEWLgZi+JIaYGolaRAS60JXuxJWoIC6E0KAgAzGbCqpFmua393qv9+PoPJ33
THPHcYy68HDPvee8v/e8zznvFIApEn8Octm4Zv6hQ1z7rbgRgE3X9S5jbDgYDDBJfB5er/flKGQU
MEPBiqJAVVVLkiSh0+mgVqsJSLVahc/nsyDbwfsIQAs0TYNhGNDevIX29BnUxx50u13U63UB6Pf7
oCR+v38LMg6gYCOdhnb1GgaeVajnL0CWZTQajT0lCU/GAea379AWFsHu3kJ/4TLUO/etUprNpthJ
pVL5C4Ax6I/WwVbvoe9+AMazMvrHzSMI7YT8aLVakwHs8xdoS1eguC7CeJUBa3fEwkKhgEwmI+pP
8/Ly+fxkgP78BZj7NgYP3ZDn7FDXPGJhKpVCuVwW/tA7HA7vBawdPrJEmZl7hQc7IJ2YtwCxWEyU
IgzmCgaDuwF157kDlVOnC+bKMmS7E8a79zA3PsEs/0Q8Hkc2m4VpmkLkB5URjUa3AMpZ1+uew/lV
mnMw/cZ1qOtPrGOirKVSCclk0gKQQqGQOFYB6NnPKPKsfdNYvgnJdQnsV23XWRMkkUig3W6LMSkQ
COyUIJ+ch3R8Fj+O2j6YHzc2J/VAsVgUEBpHIhHkcjkaDy0P/hh5jBuk0sQ4gO4AXSIa09b595Cv
7YnuHQFME+Q/2nlb1PrTvwGo2K3gWVH3FgAAAABJRU5ErkJggg==";
$_IMAGES["avi"] = $_IMAGES["video"];
$_IMAGES["mkv"] = $_IMAGES["video"];
$_IMAGES["bz2"] = $_IMAGES["archive"];
$_IMAGES["c"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNLS+NgFIad+R0KwuzcSQdd
unTWXraKA4KCuFKcWYqgVbE4TKJWNyqC2oHKoDBeEBF04UpFUVQqUoemSVOTJr2lrb5+5xsTUy+j
gYdc3yfnnOQrAVBCsK2U4WFUvUE546OTcwk82WxWz+fzt4VCAS/B7kMQhB9uiVtQReFkMolUKuWQ
SCSgaRpkWeYSSZIgiqIjscMfSEAPZDIZWJbF94RpmtB1HYqicEE6nQa9xO/3/5OQoM57/qm2a3PG
tyzDtxzF/FYMe6c6F1DAMAzEYrFnLfGZ1A9devqC8o2wpmL8jwJhRcbw7ygGAxJYS7xvuxVVVXkl
kUjkUdAshgP+DRVfureXbPPcuoKe2b/QDKtIQpXQPOLx+KOgf0nGCCu9smHiu7u8IGuDBHRsS6gd
mgmJHEHfLwn9wSgqagc6Xvt8RC6X48MlCeEI2ibDIS8TVDYGBHfAO3ONowvTOacqSEBQNY6gpvOk
p3cxgq8/Q8ZxyISWsDAwfY32sSscnhk8SFAFBIWLBPQZq1sOvjX5LozOqTBaxSu0jF5iYVV+FnZT
JLB/pN0DDTv7WlHvtuQpLwrYxbv/DfIJt47gQfKZDShFN94TZs+afPW6BGUkecdytqGlX3YPTr7m
omspN0YAAAAASUVORK5CYII=";
$_IMAGES["cab"] = $_IMAGES["archive"];
$_IMAGES["cpp"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH/SURBVDjLjZPNaxNRFMWrf4cFwV13JVKX
Luta61apIChIV0rblUqhjYpRcUaNboxIqxFTQgVti4hQQTe1C7FFSUmnmvmM85XJzCSpx3efzmTS
RtqBw7yZ9+5v7rl3bg+AHhK7DjClmAZ20UGm/XFcApAKgsBqNptbrVYL3cT2IQjCnSQkCRig4Fqt
Bs/zYtm2DdM0oaoqh8iyDFEUY0gUvI8AdMD3fYRhyO8k13VhWRY0TeOAer0O+kg2m/0LIcDx9LdD
gxff5jJzKjJzCmbe6fi0anEABTiOA13Xd1jiNTlxfT01UVB/CfMG7r/WILxScaOo4FpeBrPEfUdW
DMPgmVQqlTbgtCjls4sGjl16PxuRny5oGH3yA7oZoPjR4BDbqeHlksLrUa1W24DJWRU3Wer9Qw/G
k+kVmA2lGuDKtMQzsVwfl6c3eE3IUgyYeCFjsqCgb3DqQhJwq/gTY7lyV61Jdhtw7qFUSjNA/8m8
kASkc5tYXnN4BvTs1kO23uAdIksx4OjI19Grzys4c7fkfCm5MO0QU483cf5eGcurNq8BWfD8kK11
HtwBoDYeGV4ZO5X57ow8knBWLGP49jqevVF5IKnRaOxQByD6kT6smFj6bHb0OoJsV1cAe/n7f3PQ
RVsx4B/kMCuQRxt7CWZnXT69CUAvQfYwzpFo9Hv/AD332dKni9XnAAAAAElFTkSuQmCC";
$_IMAGES["cs"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJOSURBVDjLjZPbaxNBFMarf4cFwb9AIgXB
R18Enyw+i1gs4g01kphSlPjQeAtNzNqGNLVpNCGhEvBS21Rr0ZIK6ovFiKbNbXNpdpNsstncUz9n
NiauErEDHwMz8/1mzjlz+gD0UZGxh0hFNPAf7SXa3fUpAKparVZoNpvbrVYLvUT2YbFYTEqIEjBA
zZIkoVwud1UsFiEIAjKZjAxJp9NgGKYL6Zh3UQA9UK1WUa/X5ZmqVCqhUCiA4zgZUKlUQC+xWq1t
CAUM3v6+74hu2cH4eUz6OcwFcvgYEmUANYiiiFF3Aq5XHIJRCeqHLOJbFcg5OW6Mqm495fL2NznY
l7OwveYxsZSF6QUHEpIc9+eQgOvuFL6EMjC6wrg4GZZfIwOGbazX8TaPY/qAr5Ms72oOBt8WknwV
em8KWmcCY0/S0E1HcXYyhjNMBAYH2waYF8izl3I4eGLqmjLjz9by+PRNxCMS0k0C0c+yMDjj0Mwm
MOGJ4+Vqtg0Yn+dwf5HH/sG75/4uWzAiwbfCQ+dMYSGQxdhMHMPmMFY+8MgX623AiDu9+YAADg35
LErzHU8SGkcSI4+T0DoSuGRnoZ5mcdIUwdC9zd85OHpjQzP+nMOVmZj4NSZBKNVh9LbN6xslnGai
8CxmMP+Ol81criwntgugZTysDmovTEXEUVcKV8lt520s5kjJvP4MTpkjyApVXCZmvTWKRqMh6w9A
5yO9Xy9ijUgZCi1lL/UEkMUf/+qDHtruAn5BDpAvXKYbOzGTsyW5exWAfgrZQTt3RFu//yfHVsX/
fi5tjwAAAABJRU5ErkJggg==";
$_IMAGES["css"] = $_IMAGES["code"];
$_IMAGES["doc"] = $_IMAGES["textdocument"];
$_IMAGES["docx"] = $_IMAGES["textdocument"];
$_IMAGES["exe"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEkSURBVCjPbdE9S0IBGIbhxxobWxP8D8r5
I60RLg0NNTS21VBRQwg1aA4VOAWBpBVCFhKUtkVJtPQx9GFFWh49x3P0bvAjjsWzXrzvcAtpREEZ
fQtoACEkpKBVdpouv7NYi3SJkAynWcXExKTCJ6+4PLPeIZJPhksdmzp1vilTwqVGlWhEgR6wsbGp
U+OLt94rGfJ1gIOLi4OFSYV3Sjx5QXdtkiHFx//gjiwlTshyT5LV3T8gwy3HFLnhkCuWmB3qA0Uu
2WGOZVIUmN/ru5CiwAsLNLCI8cg+i3hAggMeiNOgwQbXRJnwghoX5DkiTow0OcLJ8HAbtLpkkzwJ
CuTY4pQppgeFFLJNtxMrzSRFtlnhvDXO6Fk7ll8hb+wZxpChoPzoB6aiXIYcSLDWAAAAAElFTkSu
QmCC";
$_IMAGES["gz"] = $_IMAGES["archive"];
$_IMAGES["gif"] = $_IMAGES["image"];
$_IMAGES["h"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZNLS9xQFMe138C9A/0OynyB
UjeFQjduROi2MMtCEalS0ToLEdQMdEShoKDWRymKigWxII7PhaB9aBFUJjHJpHlnnvbfe27NJcVI
DfwIyT3nd885cOoA1BHsaWQ0MZL/4SHjgciLCJpKpZJVrVava7Ua4mDnkCRpKCqJCpKU7HkefN8X
2LYN0zShqiqXKIqCTCYjJGFyPQkooFgsolwu8zfhui4sy4KmaVwQBAHokmw2+1cSClpSUmr12MP7
LQunii8klOA4DnRdv9USn0koePRiJDW+aTGBjcOLgAewlnjfYSuFQoFXIsvybQF9jG2avIKFPQtz
OyZmcyZMtywkVAnNwzCMeMG7jV+YyFmQ1g30L2kYWitAWtZFJdQOzYREsYLhzwZGGF+OHez/9PD2
k4aeeYUHVyoVPheSELGCwRUdA+zG/VMPeycu3iyo6J5WxDxIQFA1QtCauUwPrOpIPh/vSC+qSC/q
PHn3u4uu2Su8nsrzZKqAoOR/BO2j+Q+DTPC0/2CdSu79qOLVlIyXk3l0zsjomJYxv6ELQYgQPOk7
a2jpOnmcaG57tvuD3fzNxc5XB9sEm0XuyMb5VcCriBI7A/bz9117EMO1ENxImtmAfDq4TzKLdfn2
RgQJktxjnUNo9RN/AFmTwlP7TY1uAAAAAElFTkSuQmCC";
$_IMAGES["htm"] = $_IMAGES["webpage"];
$_IMAGES["html"] = $_IMAGES["webpage"];
$_IMAGES["iso"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIsSURBVDjLjZNfa9NQGIdnP4cDv8Nkn8PL
6UfwSgQZOoSBYkUvZLN1lMFArQyHrsIuWkE3ug2t1K3O0LXrZotdlzZp0qZp/qc9P8852qyyigs8
F8nJ7znveZN3DMAYg14XKROUyf9wiRIKckOCCcdxNN/3+71eD6Og64hEInPDkmHBJAsbhgHTNAM6
nQ7a7TYkSeKSer2OaDQaSAbhC7efJGY28gZWPrUQTyt4l2lCKLfR7XahaRpkWeYCy7LANonFYr8l
qzt26PUXIxzf7pCfioeS5EI2fVQkG+GVH0hlRVqFjmazeeZIvCc0PBXf1ohu96GZBEnBQMMmcAjg
eH3cWRKQyTf4URRF4ZWIongqoOFURXZpUEOt1YNm+BzDI6AeFKo6IqsF3g9d13k/VFU9FSytK9V8
zUJiR0WbBh+/2cVich+trodvNQeFEwvTsa/8C7Dzs54wUSBYeN+ofq+ageDZmoBX64dQdRcbByaE
qoGbTzPwPA+u63IJIxDMrR2nDkUTR6oPxSJ8ZxYuNlxsHtnYLal48DIH+om5gMGqCQSP3lam7i+X
SMfp40AFsjWCrbKHdMlGpeng2uxHpHM1XgGDhf8S3Fsuhe4+3w9PL+6RvbKGguhAODaRLSq4OvsB
L5JFvutAMCAQDH6kK9fnZyKJAm4tZHFj/jMexnPYzJ3w0kdxRsBu6EPyrzkYQT8Q/JFcpqWabOE8
Yfpul0/vkGCcSc4xzgPY6I//AmC87eKq4rrzAAAAAElFTkSuQmCC";
$_IMAGES["java"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIRSURBVDjLjZPJa1NRFIera/8ECy7dV7tx
kb2UOoDgzo0R3YuLrFwWIVglWQRtN0GCLkIixJDJQJKGQOYBA4akmec5eSFT/XnPsXlNsWIffOTd
d3O+e+6PezcAbBDiuS7YEmz/hxuCq3LdmmBrOp32F4vFyXK5xEWIeWg0mnfrknXBNhWPx2NIkiQz
GAzQ6/XQaDRYUqvVoNVqZQkXGwyGm2q1+k00GkUkEkE4HEYwGGQCgQDS6TSKxSILJpMJaBGdTvdH
YjKZHvp8vuNsNot6vc7QavRLq1UqFcTjcbhcLrmLFZyJ2+0u9Pt9hC1f8OHpDt4/uoO3928zmscK
HD5/gKPPB8jn8yxpNpuoVqtnAqPRiOFwiPGgB/fhPr7uvcJH5S4Ont3Dp5dP8G3/NX4cfedCi8XC
eXQ6nTOBzWaT5vM5J0yTFFy325WhtmkbhN1ux2g04gVlgcfj+UmDUqkEh8OBcrnM7xRaLpdDIpHg
cSqVYihEYr0DL61O6fv9fhQKBd4vhUrpk6DdbsNsNrN8Nptxt7JApVK9EMW9TCbDEgqI2qUOSELv
JPF6vbw9Kj4nEM81pVJ5V6/XH8diMQ6IaLVaLAmFQnA6nfyNslohC05P4RWFQrFLHVitVoYSF2cE
yWSSgxOn9Bx/CWggPv761z24gBNZcCq5JQKSaOIyxeK/I769a4JNklziOq+gq7/5Gx172kZga+XW
AAAAAElFTkSuQmCC";
$_IMAGES["jpg"] = $_IMAGES["image"];
$_IMAGES["jpeg"] = $_IMAGES["image"];
$_IMAGES["js"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNPaxNBGIdrLwURLznWgkcv
IrQhRw9FGgy01IY0TVsQ0q6GFkT0kwjJId9AP4AHP4Q9FO2hJ7El2+yf7OzMbja7Sf0578QdNybF
LjwszLu/Z2femZkDMEfI54FkRVL4Dw8l8zqXEawMBgM2HA6vR6MRZiHraDabH7KSrKBA4SAIEIah
xvd9eJ6HbrerJKZpotVqaUkavkMC+iCKIsRxrN6EEAKMMViWpQT9fh/0k3a7PZZkBUPmqXAKCSjA
OYdt21NLUj1JBYW7C6vi6BC8vKWKQXUXQcNA5Nh6KY7jqJl0Op1JwY/Hi7mLp/lT/uoA/OX2WLC3
C9FoQBwfILKulIRmQv1wXfevwHmyuMPXS5Fv1MHrFSTmhSomnUvw/Spo3C+vg3/+pJZDPSGRFvil
NV+8PUZvoziKvn+d3LZvJ/BelMDevIZXK2EQCiUhtMDM53bY5rOIGXtwjU3EVz/HM5Az8eplqPFK
EfzLR91cOg8TPTgr3MudFx+d9owK7KMNVfQOtyQ1OO9qiHsWkiRRUHhKQLuwfH9+1XpfhVVfU0V3
//k4zFwdzjIlSA/Sv8jTOZObBL9uugczuNaCP5K8bFBIhduE5bdC3d6MYIkkt7jOKXT1l34DkIu9
e0agZjoAAAAASUVORK5CYII=";
$_IMAGES["mov"] = $_IMAGES["video"];
$_IMAGES["mp3"] = $_IMAGES["audio"];
$_IMAGES["mp4"] = $_IMAGES["audio"];
$_IMAGES["mpeg"] = $_IMAGES["video"];
$_IMAGES["mpg"] = $_IMAGES["video"];
$_IMAGES["odg"] = $_IMAGES["vectorgraphics"];
$_IMAGES["odp"] = $_IMAGES["presentation"];
$_IMAGES["ods"] = $_IMAGES["spreadsheet"];
$_IMAGES["odt"] = $_IMAGES["textdocument"];
$_IMAGES["pdf"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHhSURBVDjLjZPLSxtRFIfVZRdWi0oFBf+B
rhRx5dKVYKG4tLhRqlgXPmIVJQiC60JCCZYqFHQh7rrQlUK7aVUUfCBRG5RkJpNkkswrM5NEf73n
6gxpHujAB/fOvefjnHM5VQCqCPa1MNoZnU/Qxqhx4woE7ZZlpXO53F0+n0c52Dl8Pt/nQkmhoJOC
dUWBsvQJ2u4ODMOAwvapVAqSJHGJKIrw+/2uxAmuJgFdMDUVincSxvEBTNOEpmlIp9OIxWJckMlk
oOs6AoHAg6RYYNs2kp4RqOvfuIACVFVFPB4vKYn3pFjAykDSOwVta52vqW6nlEQiwTMRBKGygIh9
GEDCMwZH6EgoE+qHLMuVBdbfKwjv3yE6Ogjz/PQ/CZVDPSFRRYE4/RHy1y8wry8RGWGSqyC/nM1m
eX9IQpQV2JKIUH8vrEgYmeAFwuPDCHa9QehtD26HBhCZnYC8ucGzKSsIL8wgsjiH1PYPxL+vQvm5
B/3sBMLyIm7GhhCe90BaWykV/Gp+VR9oqPVe9vfBTsruM1HtBKVPmFIUNusBrV3B4ev6bsbyXlPd
kbr/u+StHUkxruBPY+0KY8f38oWX/byvNAdluHNLeOxDB+uyQQfPCWZ3NT69BYJWkjxjnB1o9Fv/
ASQ5s+ABz8i2AAAAAElFTkSuQmCC";
$_IMAGES["php"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGsSURBVDjLjZNLSwJRFICtFv2AgggS2vQL
DFvVpn0Pi4iItm1KItvWJqW1pYsRemyyNILARbZpm0WtrJ0kbmbUlHmr4+t0z60Z7oSSAx935txz
vrlPBwA4EPKMEVwE9z+ME/qtOkbgqtVqUqPRaDWbTegE6YdQKBRkJazAjcWapoGu6xayLIMoilAo
FKhEEAQIh8OWxCzuQwEmVKtVMAyDtoiqqiBJEhSLRSqoVCqAP+E47keCAvfU5sDQ8MRs/OYNtr1x
2PXdwuJShLLljcFlNAW5HA9khLYp0TUhSYMLHm7PLEDS7zyw3ybRqyfg+TyBtwl2sDP1nKWFiUSa
zFex3tk45sXjL1Aul20CGTs+syVY37igBbwg03eMsfH9gwSsrZ+Doig2QZsdNiZmMkVrKmwc18az
HKELyQrOMEHTDJp8HXu1hostG8dY8PiRngdWMEq467ZwbDxwlIR8XrQLcBvn5k9Gpmd8fn/gHlZW
T20C/D4k8eTDB3yVFKjX6xSbgD1If8G970Q3QbvbPehAyxL8SibJEdaxo5dikqvS28sInCjp4Tqb
4NV3fgPirZ4pD4KS4wAAAABJRU5ErkJggg==";
$_IMAGES["png"] = $_IMAGES["image"];
$_IMAGES["pps"] = $_IMAGES["presentation"];
$_IMAGES["ppsx"] = $_IMAGES["presentation"];
$_IMAGES["ppt"] = $_IMAGES["presentation"];
$_IMAGES["pptx"] = $_IMAGES["presentation"];
$_IMAGES["psd"] = $_IMAGES["graphics"];
$_IMAGES["rar"] = $_IMAGES["archive"];
$_IMAGES["rb"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIESURBVDjLjZNPTxNBGIexid9CEr8DBr8C
HEiMVoomJiQkxBIM3dgIiaIESJTGGpVtyXIzHhoM4SIe9KAnEi4clQtJEczWFrbdP93d7s7u/JwZ
7XYJBdnkyRxmfs/MvO9OD4AeDvuuMPoY/f/hKiMR5WKCvlarpRNCwiAI0A02D1mW38QlcUE/Dzeb
Tdi2HWEYBhqNBqrVqpBUKhUUCoVI0g5f4gK+wHVdeJ4nRo5lWdB1HbVaTQgcxwHfRFGUvxIuCKYf
zmqZyZ2wKIO8fQ3/1Uv4Sy/QWliAO/sU9qMZmFMS3HfvT1xJ1ITOZJ9RpQi6+RH0y2fQb19BP23C
VhRo+TysXA71+XkcMIk6fAfHK6tQVfWEoESXngNra0C5DHZJYGMDZiaD35IEi41qOo3vc3MoJ1Oo
j92HpmkdQZiVEsHUAzl88hjY3gYIAdbXYQ0MoDo4CH1kBHssvH8jCf3eGKzDXzBNsyNoF/HH7WSJ
ZLPA7i6wtQVnaAhmKoXjxUX8vDkMY3Qcnm6IInJOCS4nEte9QhF+RhInIRMTcFhYvZWCcXcUPmsl
7w6H/w+nBFEb5SLc8TTo8jLq7M4m25mHfd8X8PC5AtHrXB5NdmwRrnfCcc4VCEnpA8jREasp6cpZ
AnrWO+hCGAn+Sa6xAtl84iJhttYSrzcm6OWSCzznNvzp9/4BgwKvG3Zq1eoAAAAASUVORK5CYII=";
$_IMAGES["sln"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJQSURBVDjLjZNvSBNxGMeX9O+FOAkaLbeh
ozdGRGiMQqTIlEqJMIig3oxl0YxcgYt6FUZRryLYwpFWCr2wXgjBIMJMYhFjgZSiEXOg5c5N593u
dne7u+2+3V3tT22SBx/uxe/5fu7uuefRAdCpKJdJoVHB9h9qFSryuSJBYzqdpiRJymYyGZRDOYfH
43lULCkW2NRwKpUCy7J5kskkSJJELBbTJARBwOv15iW58AZVoBbwPA9BELS7CsMwoCgK8XhcE3Ac
B/UhPp/vtyQnGBi03pYXjyAbPQuRD2sSbmUFVN9NLJ5ux9DryZJP0nqiChzjl48Oh9oYRPTAXBVk
sgnS0hRWu7uxXG/EfL0ZZ9yjGHgb1t4kGo0WBO6AvcUVsFP9oTZZjlQCP7ZA/r4JpHM3lup2Im6p
RsRai2PX/GjoDWEk8BWJRKIg6P147mfP+CW63d16RUyOQP5SA6rLAsKyA0TNNizvM4D9/A4Tk2Ec
7nuPE0+vgqbpgqBnzLl6vv8N3+x4eEsS0mAvHAJhMoAw6kHUVUF4rkeWHAKXZtA15kDL6C6tkXmB
ffiZs/P+NE7dC4pBhwsJY6USVjBtBO/bCswrbfq2GS+Ce9DwyooHoRvaPPzVxI67IVfHnQA+2JqQ
MFQgur0anP8J5IVmYEopmdbh5YQO1wMu0BxdKlB/44GLg48/HT8J8uBesH6/ViDxC5DnWiHPWjAz
0wleYCGKokaJIDdI/6JMZ1nWEshr7UEZsnnBH8l+ZfpY9WA9YaWW0ba3SGBWJetY5xzq6pt/AY6/
mKmzshF5AAAAAElFTkSuQmCC";
$_IMAGES["sql"] = $_IMAGES["database"];
$_IMAGES["tar"] = $_IMAGES["archive"];
$_IMAGES["tgz"] = $_IMAGES["archive"];
$_IMAGES["txt"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0
U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADoSURBVBgZBcExblNBGAbA2ceegTRBuIKO
giihSZNTcC5LUHAihNJR0kGKCDcYJY6D3/77MdOinTvzAgCw8ysThIvn/VojIyMjIyPP+bS1sUQI
V2s95pBDDvmbP/mdkft83tpYguZq5Jh/OeaYh+yzy8hTHvNlaxNNczm+la9OTlar1UdA/+C2A4tr
RCnD3jS8BB1obq2Gk6GU6QbQAS4BUaYSQAf4bhhKKTFdAzrAOwAxEUAH+KEM01SY3gM6wBsEAQB0
gJ+maZoC3gI6iPYaAIBJsiRmHU0AALOeFC3aK2cWAACUXe7+AwO0lc9eTHYTAAAAAElFTkSuQmCC";
$_IMAGES["wav"] = $_IMAGES["audio"];
$_IMAGES["wma"] = $_IMAGES["audio"];
$_IMAGES["wmv"] = $_IMAGES["video"];
$_IMAGES["xcf"] = $_IMAGES["graphics"];
$_IMAGES["xls"] = $_IMAGES["spreadsheet"];
$_IMAGES["xlsx"] = $_IMAGES["spreadsheet"];
$_IMAGES["xml"] = $_IMAGES["code"];
$_IMAGES["zip"] = $_IMAGES["archive"];
?>
