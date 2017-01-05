/*======================================================================*\
|| #################################################################### ||
|| # Copyright(C)2006-2009 Youjoomla LLC. All Rights Reserved.          ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- THIS IS NOT FREE SOFTWARE ---------------- #      ||
|| # http://www.youjoomla.com | http://www.youjoomla.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
#menu_bg{margin:0 auto; display:block; position:relative; height:70px; width:100%; background:#ededed url(../images/menu_bg.gif) repeat-x left top; z-index:1500}
#menu_holder{margin:0 auto; display:block; position:relative; height:49px; padding:21px 0 0 10px}
#top_menu{width:100%; margin:0px auto 0 auto; display:block; position:relative; z-index:10000; text-align:left}
#horiznav{height:28px; z-index:500; float:none}
#horiznav ul{list-style:none; line-height:28px; padding-top:0px}
#horiznav ul li{position:relative; margin:0 10px 0 0}
#horiznav a{text-transform:uppercase; display:block; cursor:pointer; height:28px; padding:0px 0px 0px 5px; margin:0px 0px 0px 0px; font:bold 10px/28px Tahoma}
#horiznav li a:hover{height:28px}
#horiznav li{float:left; padding:0; padding:0px 5px 0px 0px}
#horiznav ul ul a{background:none}
#horiznav ul ul{border:none}
#horiznav li li a{font-weight:normal; padding:0 0px 0 0px; margin:0; height:32px; line-height:32px; text-indent:5px}
#horiznav ul ul a{display:block; text-decoration:none; text-transform:uppercase; height:auto; font-weight:bold}
#horiznav li li{padding:0; background:none}
#horiznav li li{float:left; padding:0}
#horiznav li:hover, #horiznav li.sfHover{left:0}
#horiznav ul ul a:hover{background:none; height:auto; line-height:32px; padding:0 0px 0 0px; margin:0}
#horiznav li ul{position:absolute; left:-999em; height:auto; font-weight:normal; border-width:0; margin:-4px 0 0 1px; padding:0; border-bottom:none}
#horiznav li:hover, #horiznav li.sfHover{position:static}
/* Pro */
#horiznav li:hover ul ul, #horiznav li:hover ul ul ul, #horiznav li:hover ul ul ul ul,  #horiznav li.sfHover ul ul, #horiznav li.sfHover ul ul ul, #horiznav li.sfHover ul ul ul ul{left:-999em}
#horiznav li:hover ul, #horiznav li li:hover ul, #horiznav li li li:hover ul, #horiznav li li li li:hover ul, #horiznav li.sfHover ul, #horiznav li li.sfHover ul, #horiznav li li li.sfHover ul, #horiznav li li li li.sfHover ul{z-index:100; left:auto}
#horiznav ul ul li a{border-right:none}
#horiznav ul li:hover li:hover, #horiznav ul li#current ul li a, #horiznav ul li#current ul li, #horiznav ul li#current ul li a:hover, #horiznav ul li#current ul li.hover, #horiznav li.haschild:hover li span, #horiznav li.haschild.sfHover li span, #horiznav li.sfHover li span, #horiznav ul li li a, #horiznav ul li.haschild li#current a, #horiznav ul li.haschild li#current, #horiznav ul li.sfHover li.sfHover, #horiznav ul li ul li a:hover, #horiznav ul li ul li:hover, #horiznav ul li ul li.sfHover{background-image:none}
#horiznav li ul ul{margin:-32px 0 0 173px}
#horiznav ul li:hover li a, #horiznav ul li.sfHover li a{background-image:none}
#horiznav ul ul a, #horiznav li ul{width:173px}
#horiznav li li, #horiznav li.haschild ul li#current:hover, #horiznav li.haschild ul li#current.sfHover{width:173px}

#top_menu_d{width:100%; margin:0 auto; display:block; position:relative; z-index:10000}
#horiznav_d{height:28px; position:relative; display:block; position:relative; padding:0px; margin:0px; overflow:hidden; background-color:#dbdbdb}
#horiznav_d a{white-space:nowrap; display:block; float:left; text-transform:uppercase; cursor:pointer; height:28px; padding:0px 15px 0px 15px; margin:0px 0px 0px 0px; font:bold 10px/28px Tahoma}
#horiznav_d ul{margin:0; padding-top:0px; line-height:28px; float:left}
#horiznav_d ul ul ul{left:-20000px}
#horiznav_d li{padding:0; margin:0 10px 0 0; float:left; display:block}
#horiznav_d li ul{display:none; margin:0 auto; padding:0; position:absolute; top:28px; height:20px; overflow:hidden; left:0; width:100%}
#horiznav_d li a span, #horiznav_d li .separator span{display:block; padding:0}
#horiznav_d li ul a, #horiznav_d li.active ul a{display:block; float:left; font-weight:normal; padding:0 10px; background:none; height:28px; line-height:18px}
#horiznav_d li.active ul{display:block}
#horiznav_d li:hover ul, #horiznav_d li.sfHover ul{display:block; z-index:6000}
#horiznav_d li a, #horiznav_d li .separator{font:bold 10px/28px Tahoma; text-transform:uppercase}
#horiznav_d li li{background:none}

#horiznav_d li li.active, #horiznav_d li li.active:hover, 
#horiznav_d li li.active.sfHover, 
#horiznav_d li li:hover, #horiznav_d li li.sfHover{background:none}
#horiznav_d li li.active a, #horiznav_d li li.active .separator, 
#horiznav_d li li.active a:hover, #horiznav_d li li.active .separator:hover, 
#horiznav_d li li:hover a, #horiznav_d li li:hover .separator, 
#horiznav_d li li.sfHover a, #horiznav_d li li.sfHover .separator{background:none}
#horiznav_d li li a, #horiznav_d li li .separator{background:none}
#horiznav_d li li, #horiznav_d li li a span, #horiznav_d li li .separator span{background:none}
#horiznav_d li li a span, #horiznav_d li li .separator span{}
#horiznav_d li.sfHover li a, #horiznav_d li:hover li a, 
#horiznav_d ul li.active ul li.active li a, 
#horiznav_d ul li.active.parent ul li a, 
#horiznav_d li.sfHover li .separator, 
#horiznav_d li:hover li .separator, 
#horiznav_d ul li.active.parent ul li .separator, 
#horiznav_d ul li.active.parent ul li .seperator{text-indent:0px; background:none}
#horiznav_d li.active li a, #horiznav_d li.active.parent li a, 
#horiznav_d li.active li .separator, 
#horiznav_d li.active.parent li .separator{background:none}
#horiznav_d ul ul li:hover, #horiznav_d ul ul li.sfHover{background-image:none}
#horiznav_d ul ul li a, #horiznav_d ul li.active.parent ul a, 
#horiznav_d ul li.active.parent ul a span, #horiznav_d ul ul li .separator, 
#horiznav_d ul li.active.parent ul .separator, 
#horiznav_d ul li.active.parent ul .separator span{background:none}
#horiznav_d ul ul li.active, 
#horiznav_d ul ul li.active:hover, 
#horiznav_d ul ul li.active.sfHover{background:none}
#horiznav_d li.parent li a:hover{background:none}
#horiznav_d ul li ul{width:100%; padding:0 0 0 0px}

#mainlevel ul, 
.menu ul{list-style:none; margin:0; padding:0}
#mainlevel{padding:0; text-align:left; margin-left:-19px; margin-right:-8px}
.menu{padding:0; text-align:left; margin-left:-19px; margin-right:-8px}
#mainlevel li, 
.menu li, 
.menu li:hover{background-image:none}
#mainlevel li a, 
.menu li a{height:26px; line-height:20px; text-decoration:none; display:block; font-size:12px; text-decoration:none; text-indent:22px; padding-top:5px}

a.mainlevel{display:block; width:100%; font-size:12px; height:26px; line-height:20px; padding-top:5px; text-decoration:none; text-indent:24px}
a.sublevel{display:block; padding:2px 4px 0px 15px; text-decoration:none}
a.sublevel:hover, 
a.sublevel:active, 
a.sublevel:focus{text-decoration:underline}
.module a.sublevel{display:block; padding:0px 4px 12px 15px; margin:0}
