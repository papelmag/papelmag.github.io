html .png,
div .png,
div.arrow,
ul li.vimeo,
ul li.face,
ul li.rss,
ul li.linkedin,
ul li.flickr,
ul li.twitter,
#user3,#user4,#user5,#user6{
azimuth: expression(
this.pngSet?this.pngSet=true:(this.nodeName == "IMG" && this.src.toLowerCase().indexOf('.png')>-1?(this.runtimeStyle.backgroundImage = "none",
this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.src + "', sizingMethod='image')",
this.src = "/templates/youfashion/images/blank.gif"):(this.origBg = this.origBg? this.origBg :this.currentStyle.backgroundImage.toString().replace('url("','').replace('")',''),
this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.origBg + "', sizingMethod='crop')",
this.runtimeStyle.backgroundImage = "none")),this.pngSet=true
);
}


#horiznav a {line-height: 28px;_line-height: 28px;_margin-left:0px;_float:left;}
#horiznav li:hover,#horiznav li.sfHover,#horiznav {_position:relative;z-index:10000;}
#horiznav li ul {_top:28px;_position:absolute;margin:-4px 0 0 1px;}
#horiznav li li:hover ul,
#horiznav li.sfHover ul,
#horiznav li li.sfHover ul,
#horiznav li li li.sfHover ul
,#horiznav li li li li.sfHover ul {_left:0;}
#horiznav li ul ul {_margin: -28px 0 0 170px;}
#horiznav ul ul a {width: 170px;}
#horiznav ul li li {position:relative;margin:0 0px 0 0;}
.readon{
width:75px;
}
#user3,#user4,#user5,#user6{
background: url(/templates/youfashion/images/border_dark_ie.png) no-repeat right center;
}
#user6{
background:none;
}