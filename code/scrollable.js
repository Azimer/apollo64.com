/* 

    Scrollable.js:
	09/04/97 Henri Torgemane ( henri@netscape.com ) for Netscape Communications Corporation


	Constructor:
	 new Scrollable(clip,url)
	  where clip can contain the member top,left,bottom,right,width and height.
	  You can supply only some of these parameters.
	  url is the location of a page to load. 
	  These two parameters are optionnal.
	  If you want to set a url without giving any position information, use
	  new Scrollable({},url);

	 new Scrollable(layer,url)
	  Here, the Scrollable object is created by using an existing layer, and adding
	  scrollbars to it.

	 Note: These constructor _must_ be called before the page finishes loading.

	Static members of the constructor:
	 Scrollable.basePath : a url used to find the images used by this component.
		Default value: "images/". The url must be terminated by a '/'

	 There's a bunch of other static members that can be used to set your own images to be
	 used by the menubar. look at the source if you want to go there.

	Instance Methods:
	 refresh() : refresh the state of the scrollbars. You usually don't need to call this,
		since the scrollbars are updated periodically without intervention.
	 scrollTo(x,y) : scroll to the given position.
	 scrollBy(x,y) : scroll by the given position.

	Properties:
	 layer : read/only. return the container layer. use this layer to move or resize the
	   scrollable component.
	 main  : main is the actual layer that is being scrolled. use this layer to change the
	   content of the layer, with main.src=, main.load() or main.document.write()
	   Note that you can change the value of main.
	    scrollable.main=document.mylayer is valid, and will remove the scrollbars from the
		current main layer, and put them to the new main layer.
	 hbar : define the visibility of the horizontal scrollbar.
		Valid values are 'show', 'hide', or 'auto'. The strings must be in lowercase.
	 vbar : define the visibility of the vertical scrollbar. see above
	 vincr: define the vertical increment used when you click on the up/down buttons.
	 hincr: define the horizontal increment
	 pageXOffset : horizontal offset for the main layer.
	 pageYOffset : vertical offset for the main layer.
	   these two properties can be set, and have the same effect than using scrollTo()

	 More generally, all the properties above can be set, to the exception of layer.
	 
*/

Scrollable.delay1=200; // millisec before starting to repeat scrolling.
Scrollable.delay2=10;  // millisec between each scrolling.
Scrollable.refreshDelay=500; // millisec between two scrollbar refresh.
Scrollable.basePath="../images/";
Scrollable.barBackground="barback.jpg";
Scrollable.cornerIcon="corner.gif";
Scrollable.upUpIcon="button_up_e.gif";
Scrollable.downUpIcon="button_up_p.gif";
Scrollable.noUpIcon="button_up_d.gif";
Scrollable.upDownIcon="button_down_e.gif";
Scrollable.downDownIcon="button_down_p.gif";
Scrollable.noDownIcon="button_down_d.gif";
Scrollable.topVerticalStub="ud-top.gif";
Scrollable.middleVerticalStub="ud-middle.gif";
Scrollable.bottomVerticalStub="ud-bottom.gif";
Scrollable.upLeftIcon="button_left_e.gif";
Scrollable.downLeftIcon="button_left_p.gif";
Scrollable.noLeftIcon="button_left_d.gif";
Scrollable.upRightIcon="button_right_e.gif";
Scrollable.downRightIcon="button_right_p.gif";
Scrollable.noRightIcon="button_right_d.gif";
Scrollable.leftHorizontalStub="lr-left.gif";
Scrollable.middleHorizontalStub="lr-middle.gif";
Scrollable.rightHorizontalStub="lr-right.gif";

function Scrollable(obj,url) {
  var swidth,sheight;
  var visible='inherit';
  var x=10, y=10;

  if (typeof obj=='undefined'||obj==null) {
	swidth=33;
	sheight=33;
	obj={};
	visible='hide'
  } else
  if (obj.constructor==Layer) {
    if (obj.scrollable&&obj.scrollable.constructor==Scrollable) 
	  return obj.scrollable;
    swidth=obj.clip.width;
	sheight=obj.clip.height;
	visible=obj.visibility;
  } else {
    var x=obj.left;
    if (typeof x=='undefined') x=10;
    var y=obj.top;
    if (typeof y=='undefined') y=10;
    if (typeof obj.bottom != 'undefined')
      var h=obj.bottom-y;
    else
      var h=obj.height;
    if (typeof h=='undefined') h=innerHeight/2
    if (typeof obj.right != 'undefined')
      var w=obj.right-x;
    else
      var w=obj.width;
    if (typeof w=='undefined') w=innerWidth/2;
    swidth=w;
    sheight=h;
  }
  if (typeof url=='undefined') {
    url="mocha:''";
  }

  var s=
  "<layer name=scrollable >"+
   "<layer z-index=1 name=h width="+swidth+" visibility=hide>"+
	'<layer name=left top=0 left=0 bgcolor=black>'+
	 '<img name=left src='+Scrollable.basePath+Scrollable.upLeftIcon+'>'+
	'</layer>'+
	'<layer name=right top=0 bgcolor=black>'+
	 '<img name=right src='+Scrollable.basePath+Scrollable.upRightIcon+'>'+
	'</layer>'+
	'<layer name=empty top=0 left=16 background="'+Scrollable.basePath+Scrollable.barBackground+'" >'+
	 '<layer name=rect left=0 top=0>'+
	  '<layer><img src='+Scrollable.basePath+Scrollable.leftHorizontalStub+'></layer>'+
	  '<layer left=2 height=16 background='+Scrollable.basePath+Scrollable.middleHorizontalStub+' ></layer>'+
	  '<layer><img src='+Scrollable.basePath+Scrollable.rightHorizontalStub+'></layer>'+
	 '</layer>'+
	'</layer>'+
   "</layer>"+
   "<layer z-index=1 name=v height="+sheight+" width=16 visibility=hide>"+
    '<layer name=up width=16 top=0 left=0 bgcolor=black>'+
	 '<img name=up src='+Scrollable.basePath+Scrollable.upUpIcon+'>'+
	 '<layer></layer>'+
	'</layer>'+
	'<layer name=down width=16 top=0 left=0 bgcolor=black>'+
	 '<img name=down src='+Scrollable.basePath+Scrollable.upDownIcon+'>'+
	'</layer>'+
	'<layer name=empty left=0 top=16 background="'+Scrollable.basePath+Scrollable.barBackground+'">'+
	 '<layer name=rect top=0>'+
	  '<layer><img src='+Scrollable.basePath+Scrollable.topVerticalStub+'></layer>'+
	  '<layer top=2 width=16 background='+Scrollable.basePath+Scrollable.middleVerticalStub+' ></layer>'+
	  '<layer><img src='+Scrollable.basePath+Scrollable.bottomVerticalStub+'></layer>'+
	 '</layer>'+
	'</layer>'+
   "</layer> "+
   '<layer z-index=1 name=resizer visibility=hide><img src="'+Scrollable.basePath+Scrollable.cornerIcon+'"></layer>';
  if (obj.constructor!=Layer)
   s+='<layer z-index=0 name=main src='+url+' width='+(swidth-30)+' clip='+swidth+','+sheight+'></layer>';
   s+=
  '</layer>';
  document.write(s);
  var layer=document.layers.scrollable;
  layer.left=x;
  layer.top=y;
  layer.visibility=visible;
  if (obj.constructor==Layer) {
	layer.pageX=obj.pageX;
	layer.pageY=obj.pageY;
	layer.clip.width=obj.clip.width;
	layer.clip.height=obj.clip.height;
    obj.moveBelow(layer.document.layers.h);
	obj.top=0;
	obj.left=0;
	delete layer.document.layers.main;
	layer.document.layers.main=obj;
  }
  var main=layer.document.layers.main;
  main.scrollable=this;
  this.layer=layer;
  layer.scrollable=this;
  this.main=main;

  var v=layer.document.layers.v
  var vempty=v.document.layers.empty;
  vempty.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  vempty.onmousedown=Scrollable.v_rectdown;
  vempty.onmousemove=Scrollable.v_rectmove;
  vempty.onmouseup=Scrollable.v_rectup;
  var up=v.document.layers.up;
  up.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  up.document.images.up.layer=up;
  up.document.images.up.onmousedown=Scrollable.v_updown;
  up.document.images.up.onmouseup=Scrollable.v_upup;
  up.document.images.up.onmouseout=Scrollable.v_upup;
  var down=v.document.layers.down;
  down.document.images.down.layer=down
  down.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  down.document.images.down.onmousedown=Scrollable.v_downdown;
  down.document.images.down.onmouseup=Scrollable.v_downup;
  down.document.images.down.onmouseout=Scrollable.v_downup;

  var h=layer.document.layers.h
  var hempty=h.document.layers.empty;
  hempty.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  hempty.onmousedown=Scrollable.h_rectdown;
  hempty.onmousemove=Scrollable.h_rectmove;
  hempty.onmouseup=Scrollable.h_rectup;
  var left=h.document.layers.left;
  left.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  left.document.images.left.layer=left;
  left.document.images.left.onmousedown=Scrollable.h_leftdown;
  left.document.images.left.onmouseup=Scrollable.h_leftup;
  left.document.images.left.onmouseout=Scrollable.h_leftup;
  var right=h.document.layers.right;
  right.document.images.right.layer=right;
  right.captureEvents( Event.MOUSEDOWN | Event.MOUSEUP );
  right.document.images.right.onmousedown=Scrollable.h_rightdown;
  right.document.images.right.onmouseup=Scrollable.h_rightup;
  right.document.images.right.onmouseout=Scrollable.h_rightup;
  layer.captureEvents( Event.MOUSEDOWN | Event.MOUSEMOVE | Event.MOUSEUP);
  layer.onmousedown=Scrollable.l_mdown;
  layer.onmousemove=Scrollable.l_mmove;
  layer.onmouseup=Scrollable.l_mup;

  this.watch('main',this.watchMain);
  this.watch('layer',this.watchLayer);

  setInterval(Scrollable.autorefresh,Scrollable.refreshDelay,this);
  this.refresh()

  return this;
}
Scrollable.prototype.vincr=5;
Scrollable.prototype.hincr=5;

Scrollable.prototype.watchMain= function (a,b,c) {
  if (c.constructor!=Layer)
    return b;
  if (c==b)
    return b;
  this.layer.pageX=c.pageX;
  this.layer.pageY=c.pageY;
  this.layer.clip.width=c.clip.width;
  this.layer.clip.height=c.clip.height;
  c.moveBelow(this.layer.document.layers.h);
  c.top=0;
  c.left=0;
  c.scrollable=this;
  delete this.layer.document.layers.main;
  this.layer.document.layers.main=c
  this.layer.visibility=c.visibility;
  this.refresh();
  return c;
}

Scrollable.prototype.watchPageXOffset= function (a,b,c) {
  if (c.constructor!=Number)
    return b;
  this.Hupdate(c/this.Hcoef);
  return this.main.clip.left;
}

Scrollable.prototype.watchPageYOffset= function (a,b,c) {
  if (c.constructor!=Number)
    return b;
  this.Vupdate(c/this.Vcoef);
  return this.main.clip.top;
}

Scrollable.prototype.watchLayer = function (a,b,c) {
  return b;
}

Scrollable.prototype.scrollTo = function (x,y) {
  this.Hupdate(x/this.Hcoef);
  this.Vupdate(y/this.Vcoef);
}

Scrollable.prototype.scrollBy = function (x,y) {
  this.Hupdate((this.main.clip.left+x)/this.Hcoef);
  this.Vupdate((this.main.clip.top+y)/this.Vcoef);
}

Scrollable.autorefresh= function (context) {
  context.refresh()
}

Scrollable.prototype.refresh=function () {
  var main=this.layer.document.layers.main;
  main.clip.height=this.layer.clip.height-16;
  main.clip.width=this.layer.clip.width-16;
  var vbarok=(this.vbar=='show')||(main.document.height>main.clip.height);
  var hbarok=(this.hbar=='show')||(main.document.width>main.clip.width);
  if (this.vbar=='hide') vbarok=false;
  if (this.hbar=='hide') hbarok=false;
  main.clip.height=this.layer.clip.height;
  main.clip.width=this.layer.clip.width;
  var v=this.layer.document.layers.v;
  var h=this.layer.document.layers.h;
  v.clip.height=this.layer.clip.height;
  h.clip.width=this.layer.clip.width;


  if (vbarok) {
    main.clip.width=this.layer.clip.width-16;
	h.clip.width=main.clip.width;
	v.visibility='inherit'
  } else
    v.visibility='hide';
  if (hbarok) {
    main.clip.height=this.layer.clip.height-16;
	v.clip.height=main.clip.height;
	h.visibility='inherit'
  } else
    h.visibility='hide';
  if (vbarok&&hbarok) {
	var corner=this.layer.document.layers.resizer;
	corner.left=main.clip.width;
	corner.top=main.clip.height;
	corner.visibility='inherit'
  } else {
    this.layer.document.layers.resizer.visibility='hide';
  }

    var empty=v.document.layers.empty;
	var up=v.document.layers.up;
	var down=v.document.layers.down;
	var rect=empty.document.layers.rect;
	v.left=this.layer.clip.width-v.clip.width;
	down.top=v.clip.height-down.clip.height;
	empty.top=up.clip.height;
	empty.clip.height=down.top-empty.top;
	this.Vcoef=main.document.height/empty.clip.height;
	if (this.Vcoef==0) this.Vcoef=0.000001;
	this.Vupdate(main.clip.top/this.Vcoef);
	// time to compute the bar size..
	if (main.document.height<=main.clip.height) {
	  var barHeight=empty.clip.height;
	  up.document.images.up.src=Scrollable.basePath+Scrollable.noUpIcon;
	  down.document.images.down.src=Scrollable.basePath+Scrollable.noDownIcon;
	  v.noscroll=true;
	}
	else {
	  var barHeight=main.clip.height*empty.clip.height/main.document.height;
	  if (up.document.images.up.src.indexOf(Scrollable.basePath+Scrollable.noUpIcon)!=-1)
	    up.document.images.up.src=Scrollable.basePath+Scrollable.upUpIcon;
	  if (down.document.images.down.src.indexOf(Scrollable.basePath+Scrollable.noDownIcon)!=-1)
	    down.document.images.down.src=Scrollable.basePath+Scrollable.upDownIcon;
	  v.noscroll=false;
	}
	rect.clip.height=barHeight;
	rect.document.layers[0].top=0;
	rect.document.layers[1].top=2;
	rect.document.layers[1].clip.height=barHeight-4;
	rect.document.layers[2].top=barHeight-2;

	var empty=h.document.layers.empty;
	var left=h.document.layers.left;
	var right=h.document.layers.right;
	var rect=empty.document.layers.rect;
	h.top=this.layer.clip.height-h.clip.height;
	right.left=h.clip.width-left.clip.width;
	empty.left=left.clip.width;
	empty.clip.width=right.left-empty.left;
	this.Hcoef=main.document.width/empty.clip.width;
	if (this.Hcoef==0) this.Hcoef=0.000001;
    this.Hupdate(main.clip.left/this.Hcoef);
	// time to compute the bar size..
	if (main.document.width<=main.clip.width) {
	  var barWidth=empty.clip.width;
	  left.document.images.left.src=Scrollable.basePath+Scrollable.noLeftIcon;
	  right.document.images.right.src=Scrollable.basePath+Scrollable.noRightIcon;
	  h.noscroll=true;
	}
	else {
	  var barWidth=main.clip.width*empty.clip.width/main.document.width;
	  if (left.document.images.left.src==Scrollable.basePath+Scrollable.noLeftIcon)
	    left.document.images.left.src=Scrollable.basePath+Scrollable.upLeftIcon;
	  if (right.document.images.right.src==Scrollable.basePath+Scrollable.noRightIcon)
	    right.document.images.right.src=Scrollable.basePath+Scrollable.upRightIcon;
	  h.noscroll=false;
	}
	rect.clip.width=barWidth;
	rect.document.layers[0].left=0;
	rect.document.layers[1].left=2;
	rect.document.layers[1].clip.width=barWidth-4;
	rect.document.layers[2].left=barWidth-2;

}

Scrollable.v_rectdown= function (e) {
  var empty=this;
  var rect=empty.document.layers.rect;
  if (e.target==empty.document) {
    empty.parentLayer.parentLayer.scrollable.Vupdate(e.layerY);
  }
  rect.curY=e.pageY-rect.top;
  empty.captureEvents(Event.MOUSEMOVE);
  return true;
}

Scrollable.v_rectup= function () {
   this.releaseEvents( Event.MOUSEMOVE);
   return true;
}

Scrollable.v_rectmove= function(e) {
  var empty=this;
  var rect=empty.document.layers.rect;
  var newpos=0;
  if (e.target==empty.document) {
    newpos=e.layerY
  } else {
    newpos=e.pageY-rect.curY
  }

  empty.parentLayer.parentLayer.scrollable.Vupdate(newpos);
  return false;
}

Scrollable.prototype.Vupdate=function (y) {
  var empty=this.layer.document.layers.v.document.layers.empty
  var rect=empty.document.layers.rect;
  if (y<0) y=0;
  if (y>empty.clip.height-rect.clip.height) y=empty.clip.height-rect.clip.height;
  var offset=y*this.Vcoef;
  var sh=this.main.clip.height;
  this.main.clip.top=offset;
  this.main.top=-offset;
  this.main.clip.height=sh;
  this.layer.document.layers.v.document.layers.empty.document.layers.rect.top=y;
  rect.top=y;
  if (this.Vupdate.caller!=this.watchPageYOffset) {
    this.unwatch('pageYOffset');
    this.pageYOffset=offset;
    this.watch('pageYOffset',this.watchPageYOffset);
  }
}

Scrollable.v_updown=function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  var that=this.layer;
  var rect=that.parentLayer.document.layers.empty.document.layers.rect;
  this.src=Scrollable.basePath+Scrollable.downUpIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  Scrollable.upinterval(rect);
  Scrollable.timer1=setTimeout(Scrollable.uptimeout,Scrollable.delay1,rect);
  that.captureEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.uptimeout= function (rect) {
  Scrollable.timer2=setInterval(Scrollable.upinterval,Scrollable.delay2,rect);
}

Scrollable.upinterval = function (rect) {
  var scrollable=rect.parentLayer.parentLayer.parentLayer.scrollable;
  scrollable.Vupdate(rect.top-scrollable.vincr)
}

Scrollable.v_upup= function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  this.src=Scrollable.basePath+Scrollable.upUpIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  this.layer.releaseEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.v_downdown=function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  var that=this.layer;
  var rect=that.parentLayer.document.layers.empty.document.layers.rect;
  this.src=Scrollable.basePath+Scrollable.downDownIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  Scrollable.downinterval(rect);
  Scrollable.timer1=setTimeout(Scrollable.downtimeout,Scrollable.delay1,rect);
  that.captureEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.downtimeout= function (rect) {
  Scrollable.timer2=setInterval(Scrollable.downinterval,Scrollable.delay2,rect);
}

Scrollable.downinterval= function (rect) {
  var scrollable=rect.parentLayer.parentLayer.parentLayer.scrollable;
  scrollable.Vupdate(rect.top+scrollable.vincr);
}

Scrollable.v_downup= function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  this.src=Scrollable.basePath+Scrollable.upDownIcon;
  clearTimeout(Scrollable.timer1)
  clearTimeout(Scrollable.timer2)
  this.layer.releaseEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}


Scrollable.h_rectdown= function (e) {
  var empty=this;
  var rect=empty.document.layers.rect;
  if (e.target==empty.document) {
    empty.parentLayer.parentLayer.scrollable.Hupdate(e.layerX);
  }
  rect.curX=e.pageX-rect.left;
  empty.captureEvents(Event.MOUSEMOVE);
  return true;
}

Scrollable.h_rectup= function () {
   this.releaseEvents( Event.MOUSEMOVE);
   return true;
}

Scrollable.h_rectmove= function(e) {
  var empty=this;
  var rect=empty.document.layers.rect;
  var newpos=0;
  if (e.target==empty.document) {
    newpos=e.layerX
  } else {
    newpos=e.pageX-rect.curX
  }

  empty.parentLayer.parentLayer.scrollable.Hupdate(newpos);
  return false;
}

Scrollable.prototype.Hupdate=function (x) {
  var empty=this.layer.document.layers.h.document.layers.empty
  var rect=empty.document.layers.rect;
  if (x<0) x=0;
  if (x>empty.clip.width-rect.clip.width) x=empty.clip.width-rect.clip.width;
  var offset=x*this.Hcoef
  var sh=this.main.clip.width;
  this.main.clip.left=offset;
  this.main.left=-offset;
  this.main.clip.width=sh;
  rect.left=x;
  if (this.Hupdate.caller!=this.watchPageXOffset) {
    this.unwatch('pageXOffset');
    this.pageXOffset=offset;
    this.watch('pageXOffset',this.watchPageXOffset);
  }
}

Scrollable.h_leftdown=function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  var that=this.layer;
  var rect=that.parentLayer.document.layers.empty.document.layers.rect;
  this.src=Scrollable.basePath+Scrollable.downLeftIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  Scrollable.leftinterval(rect);
  Scrollable.timer1=setTimeout(Scrollable.lefttimeout,Scrollable.delay1,rect);
  that.captureEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.lefttimeout= function (rect) {
  Scrollable.timer2=setInterval(Scrollable.leftinterval,Scrollable.delay2,rect);
}

Scrollable.leftinterval = function (rect) {
  var scrollable=rect.parentLayer.parentLayer.parentLayer.scrollable;
  scrollable.Hupdate(rect.left-scrollable.hincr)
}

Scrollable.h_leftup= function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  this.src=Scrollable.basePath+Scrollable.upLeftIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  this.layer.releaseEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.h_rightdown=function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  var that=this.layer;
  var rect=that.parentLayer.document.layers.empty.document.layers.rect;
  this.src=Scrollable.basePath+Scrollable.downRightIcon;
  clearTimeout(Scrollable.timer1);
  clearInterval(Scrollable.timer2);
  Scrollable.rightinterval(rect);
  Scrollable.timer1=setTimeout(Scrollable.righttimeout,Scrollable.delay1,rect);
  that.captureEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.righttimeout= function (rect) {
  Scrollable.timer2=setInterval(Scrollable.rightinterval,Scrollable.delay2,rect);
}

Scrollable.rightinterval= function (rect) {
  var scrollable=rect.parentLayer.parentLayer.parentLayer.scrollable;
  scrollable.Hupdate(rect.left+scrollable.hincr);
}

Scrollable.h_rightup= function () {
  if (this.layer.parentLayer.noscroll)
    return false;
  this.src=Scrollable.basePath+Scrollable.upRightIcon;
  clearTimeout(Scrollable.timer1)
  clearTimeout(Scrollable.timer2)
  this.layer.releaseEvents( Event.MOUSEMOVE | Event.MOUSEOUT);
  return false;
}

Scrollable.l_mdown= function (e) {

  var x=e.pageX-this.pageX,y=e.pageY-this.pageY;
  var main=this.scrollable.main;
  if (x<main.clip.width&&y<main.clip.height) {
     this.scrollable.autoscroll=true;
	 this.scrollable.autoscrollvert=0;
	 this.scrollable.autoscrollhoriz=0;
	 this.scrollable.autoscrolltimer=
	   setInterval(Scrollable.l_automove,Scrollable.delay2,this.scrollable);
  }
  routeEvent(e)
  return true;
}

Scrollable.l_mmove= function (e) {
  
  if (this.scrollable.autoscroll) {
   var x=e.pageX-this.pageX,y=e.pageY-this.pageY;
   main=this.scrollable.main;
   this.scrollable.autoscrollhoriz=0;
   this.scrollable.autoscrollvert=0;
   if (x<0) this.scrollable.autoscrollhoriz=-1
   if (x>main.clip.width) this.scrollable.autoscrollhoriz=1;
   if (y<0) this.scrollable.autoscrollvert=-1
   if (y>main.clip.height) this.scrollable.autoscrollvert=1;
  }
  routeEvent(e);
  return true;
}

Scrollable.l_automove = function(that) {
  if (that.autoscrollvert==1)
    Scrollable.downinterval(that.layer.document.layers.v.document.layers.empty.document.layers.rect);
  if (that.autoscrollvert==-1)
    Scrollable.upinterval(that.layer.document.layers.v.document.layers.empty.document.layers.rect);
  if (that.autoscrollhoriz==1)
    Scrollable.rightinterval(that.layer.document.layers.h.document.layers.empty.document.layers.rect);
  if (that.autoscrollhoriz==-1)
    Scrollable.leftinterval(that.layer.document.layers.h.document.layers.empty.document.layers.rect);
}

Scrollable.l_mup= function (e) {
  if (this.scrollable.autoscroll) {
    this.scrollable.autoscroll=false;
	clearInterval(this.scrollable.autoscrolltimer);
  }
  routeEvent(e);
  return true;
}
