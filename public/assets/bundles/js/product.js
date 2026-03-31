/* Minification failed. Returning unminified contents.
(1085,29): run-time error JS1004: Expected ';'
(1085,39-40): run-time error JS1010: Expected identifier: (
(1107,31): run-time error JS1004: Expected ';'
(1107,41-42): run-time error JS1010: Expected identifier: (
(1110,30-43): run-time error JS1006: Expected ')': loadBazarData
(1110,58): run-time error JS1004: Expected ';'
(1110,58-59): run-time error JS1195: Expected expression: )
(1162,30): run-time error JS1004: Expected ';'
(1162,40-41): run-time error JS1010: Expected identifier: (
(1166,33-46): run-time error JS1006: Expected ')': loadBazarData
(1166,60): run-time error JS1004: Expected ';'
(1166,60-61): run-time error JS1195: Expected expression: )
(1188,20): run-time error JS1004: Expected ';'
(1188,30-31): run-time error JS1010: Expected identifier: (
(1204,34): run-time error JS1004: Expected ';'
 */
/**
 * Owl Carousel v2.3.2
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},a.each(["onResize","onThrottledResize"],a.proxy(function(b,c){this._handlers[c]=a.proxy(this[c],this)},this)),a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a.charAt(0).toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Workers,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}e.Defaults={items:3,loop:!1,center:!1,rewind:!1,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,fallbackEasing:"swing",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Type={Event:"event",State:"state"},e.Plugins={},e.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(a){var b=this.settings.margin||"",c=!this.settings.autoWidth,d=this.settings.rtl,e={width:"auto","margin-left":d?b:"","margin-right":d?"":b};!c&&this.$stage.children().css(e),a.css=e}},{filter:["width","items","settings"],run:function(a){var b=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,c=null,d=this._items.length,e=!this.settings.autoWidth,f=[];for(a.items={merge:!1,width:b};d--;)c=this._mergers[d],c=this.settings.mergeFit&&Math.min(c,this.settings.items)||c,a.items.merge=c>1||a.items.merge,f[d]=e?b*c:this._items[d].width();this._widths=f}},{filter:["items","settings"],run:function(){var b=[],c=this._items,d=this.settings,e=Math.max(2*d.items,4),f=2*Math.ceil(c.length/2),g=d.loop&&c.length?d.rewind?e:Math.max(e,f):0,h="",i="";for(g/=2;g>0;)b.push(this.normalize(b.length/2,!0)),h+=c[b[b.length-1]][0].outerHTML,b.push(this.normalize(c.length-1-(b.length-1)/2,!0)),i=c[b[b.length-1]][0].outerHTML+i,g-=1;this._clones=b,a(h).addClass("cloned").appendTo(this.$stage),a(i).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var a=this.settings.rtl?1:-1,b=this._clones.length+this._items.length,c=-1,d=0,e=0,f=[];++c<b;)d=f[c-1]||0,e=this._widths[this.relative(c)]+this.settings.margin,f.push(d+e*a);this._coordinates=f}},{filter:["width","items","settings"],run:function(){var a=this.settings.stagePadding,b=this._coordinates,c={width:Math.ceil(Math.abs(b[b.length-1]))+2*a,"padding-left":a||"","padding-right":a||""};this.$stage.css(c)}},{filter:["width","items","settings"],run:function(a){var b=this._coordinates.length,c=!this.settings.autoWidth,d=this.$stage.children();if(c&&a.items.merge)for(;b--;)a.css.width=this._widths[this.relative(b)],d.eq(b).css(a.css);else c&&(a.css.width=a.items.width,d.css(a.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(a){a.current=a.current?this.$stage.children().index(a.current):0,a.current=Math.max(this.minimum(),Math.min(this.maximum(),a.current)),this.reset(a.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;c<d;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],e.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=a("<"+this.settings.stageElement+' class="'+this.settings.stageClass+'"/>').wrap('<div class="'+this.settings.stageOuterClass+'"/>'),this.$element.append(this.$stage.parent()))},e.prototype.initializeItems=function(){var b=this.$element.find(".owl-item");if(b.length)return this._items=b.get().map(function(b){return a(b)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},e.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var a,b,c;a=this.$element.find("img"),b=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,c=this.$element.children(b).width(),a.length&&c<=0&&this.preloadAutoWidthImages(a)}this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},e.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){a<=b&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),"function"==typeof e.stagePadding&&(e.stagePadding=e.stagePadding()),delete e.responsive,e.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+d))):e=a.extend({},this.options),this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},e.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};b<c;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={},!this.is("valid")&&this.enter("valid")},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},e.prototype.registerEventHandlers=function(){a.support.transition&&this.$stage.on(a.support.transition.end+".owl.core",a.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(b,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",a.proxy(this.onDragEnd,this)))},e.prototype.onDragStart=function(b){var d=null;3!==b.which&&(a.support.transform?(d=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","),d={x:d[16===d.length?12:4],y:d[16===d.length?13:5]}):(d=this.$stage.position(),d={x:this.settings.rtl?d.left+this.$stage.width()-this.width()+this.settings.margin:d.left,y:d.top}),this.is("animating")&&(a.support.transform?this.animate(d.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===b.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=a(b.target),this._drag.stage.start=d,this._drag.stage.current=d,this._drag.pointer=this.pointer(b),a(c).on("mouseup.owl.core touchend.owl.core",a.proxy(this.onDragEnd,this)),a(c).one("mousemove.owl.core touchmove.owl.core",a.proxy(function(b){var d=this.difference(this._drag.pointer,this.pointer(b));a(c).on("mousemove.owl.core touchmove.owl.core",a.proxy(this.onDragMove,this)),Math.abs(d.x)<Math.abs(d.y)&&this.is("valid")||(b.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},e.prototype.onDragMove=function(a){var b=null,c=null,d=null,e=this.difference(this._drag.pointer,this.pointer(a)),f=this.difference(this._drag.stage.start,e);this.is("dragging")&&(a.preventDefault(),this.settings.loop?(b=this.coordinates(this.minimum()),c=this.coordinates(this.maximum()+1)-b,f.x=((f.x-b)%c+c)%c+b):(b=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),c=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),d=this.settings.pullDrag?-1*e.x/5:0,f.x=Math.max(Math.min(f.x,b+d),c+d)),this._drag.stage.current=f,this.animate(f.x))},e.prototype.onDragEnd=function(b){var d=this.difference(this._drag.pointer,this.pointer(b)),e=this._drag.stage.current,f=d.x>0^this.settings.rtl?"left":"right";a(c).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==d.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(e.x,0!==d.x?f:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=f,(Math.abs(d.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},e.prototype.closest=function(b,c){var e=-1,f=30,g=this.width(),h=this.coordinates();return this.settings.freeDrag||a.each(h,a.proxy(function(a,i){return"left"===c&&b>i-f&&b<i+f?e=a:"right"===c&&b>i-g-f&&b<i-g+f?e=a+1:this.op(b,"<",i)&&this.op(b,">",h[a+1]!==d?h[a+1]:i-g)&&(e="left"===c?a+1:a),-1===e},this)),this.settings.loop||(this.op(b,">",h[this.minimum()])?e=b=this.minimum():this.op(b,"<",h[this.maximum()])&&(e=b=this.maximum())),e},e.prototype.animate=function(b){var c=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),c&&(this.enter("animating"),this.trigger("translate")),a.support.transform3d&&a.support.transition?this.$stage.css({transform:"translate3d("+b+"px,0px,0px)",transition:this.speed()/1e3+"s"}):c?this.$stage.animate({left:b+"px"},this.speed(),this.settings.fallbackEasing,a.proxy(this.onTransitionEnd,this)):this.$stage.css({left:b+"px"})},e.prototype.is=function(a){return this._states.current[a]&&this._states.current[a]>0},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(b){return"string"===a.type(b)&&(this._invalidated[b]=!0,this.is("valid")&&this.leave("valid")),a.map(this._invalidated,function(a,b){return b})},e.prototype.reset=function(a){(a=this.normalize(a))!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(a,b){var c=this._items.length,e=b?0:this._clones.length;return!this.isNumeric(a)||c<1?a=d:(a<0||a>=c+e)&&(a=((a-e/2)%c+c)%c+e/2),a},e.prototype.relative=function(a){return a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=this.settings,f=this._coordinates.length;if(e.loop)f=this._clones.length/2+this._items.length-1;else if(e.autoWidth||e.merge){if(b=this._items.length)for(c=this._items[--b].width(),d=this.$element.width();b--&&!((c+=this._items[b].width()+this.settings.margin)>d););f=b+1}else f=e.center?this._items.length-1:this._items.length-e.items;return a&&(f-=this._clones.length/2),Math.max(f,0)},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2==0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c,e=1,f=b-1;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(this.settings.rtl&&(e=-1,f=b+1),c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[f]||0))/2*e):c=this._coordinates[f]||0,c=Math.ceil(c))},e.prototype.duration=function(a,b,c){return 0===c?0:Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(a,b){var c=this.current(),d=null,e=a-this.relative(c),f=(e>0)-(e<0),g=this._items.length,h=this.minimum(),i=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(e)>g/2&&(e+=-1*f*g),a=c+e,(d=((a-h)%g+g)%g+h)!==a&&d-e<=i&&d-e>0&&(c=d-e,a=d,this.reset(c))):this.settings.rewind?(i+=1,a=(a%i+i)%i):a=Math.max(h,Math.min(i,a)),this.speed(this.duration(c,a,b)),this.current(a),this.isVisible()&&this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.onTransitionEnd=function(a){if(a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},e.prototype.viewport=function(){var d;return this.options.responsiveBaseElement!==b?d=a(this.options.responsiveBaseElement).width():b.innerWidth?d=b.innerWidth:c.documentElement&&c.documentElement.clientWidth?d=c.documentElement.clientWidth:console.warn("Can not detect viewport width."),d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(b,c){var e=this.relative(this._current);c=c===d?this._items.length:this.normalize(c,!0),b=b instanceof jQuery?b:a(b),this.trigger("add",{content:b,position:c}),b=this.prepare(b),0===this._items.length||c===this._items.length?(0===this._items.length&&this.$stage.append(b),0!==this._items.length&&this._items[c-1].after(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[c].before(b),this._items.splice(c,0,b),this._mergers.splice(c,0,1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[e]&&this.reset(this._items[e].index()),this.invalidate("items"),this.trigger("added",{content:b,position:c})},e.prototype.remove=function(a){(a=this.normalize(a,!0))!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.preloadAutoWidthImages=function(b){b.each(a.proxy(function(b,c){this.enter("pre-loading"),c=a(c),a(new Image).one("load",a.proxy(function(a){c.attr("src",a.target.src),c.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",c.attr("src")||c.attr("data-src")||c.attr("data-src-retina"))},this))},e.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),a(c).off(".owl.core"),!1!==this.settings.responsive&&(b.clearTimeout(this.resizeTimer),this.off(b,"resize",this._handlers.onThrottledResize));for(var d in this._plugins)this._plugins[d].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:a<c;case">":return d?a<c:a>c;case">=":return d?a<=c:a>=c;case"<=":return d?a>=c:a<=c}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d,f,g){var h={item:{count:this._items.length,index:this.current()}},i=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),j=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},h,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(j)}),this.register({type:e.Type.Event,name:b}),this.$element.trigger(j),this.settings&&"function"==typeof this.settings[i]&&this.settings[i].call(this,j)),j},e.prototype.enter=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]===d&&(this._states.current[b]=0),this._states.current[b]++},this))},e.prototype.leave=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]--},this))},e.prototype.register=function(b){if(b.type===e.Type.Event){if(a.event.special[b.name]||(a.event.special[b.name]={}),!a.event.special[b.name].owl){var c=a.event.special[b.name]._default;a.event.special[b.name]._default=function(a){return!c||!c.apply||a.namespace&&-1!==a.namespace.indexOf("owl")?a.namespace&&a.namespace.indexOf("owl")>-1:c.apply(this,arguments)},a.event.special[b.name].owl=!0}}else b.type===e.Type.State&&(this._states.tags[b.name]?this._states.tags[b.name]=this._states.tags[b.name].concat(b.tags):this._states.tags[b.name]=b.tags,this._states.tags[b.name]=a.grep(this._states.tags[b.name],a.proxy(function(c,d){return a.inArray(c,this._states.tags[b.name])===d},this)))},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.pointer=function(a){var c={x:null,y:null};return a=a.originalEvent||a||b.event,a=a.touches&&a.touches.length?a.touches[0]:a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:a,a.pageX?(c.x=a.pageX,c.y=a.pageY):(c.x=a.clientX,c.y=a.clientY),c},e.prototype.isNumeric=function(a){return!isNaN(parseFloat(a))},e.prototype.difference=function(a,b){return{x:a.x-b.x,y:a.y-b.y}},a.fn.owlCarousel=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),f=d.data("owl.carousel");f||(f=new e(this,"object"==typeof b&&b),d.data("owl.carousel",f),a.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(b,c){f.register({type:e.Type.Event,name:c}),f.$element.on(c+".owl.carousel.core",a.proxy(function(a){a.namespace&&a.relatedTarget!==this&&(this.suppress([c]),f[c].apply(this,[].slice.call(arguments,1)),this.release([c]))},f))})),"string"==typeof b&&"_"!==b.charAt(0)&&f[b].apply(f,c)})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={autoRefresh:!0,autoRefreshInterval:500},e.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=b.setInterval(a.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},e.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},e.prototype.destroy=function(){var a,c;b.clearInterval(this._interval);for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoRefresh=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type))for(var c=this._core.settings,e=c.center&&Math.ceil(c.items/2)||c.items,f=c.center&&-1*e||0,g=(b.property&&b.property.value!==d?b.property.value:this._core.current())+f,h=this._core.clones().length,i=a.proxy(function(a,b){this.load(b)},this);f++<e;)this.load(h/2+this._core.relative(g)),h&&a.each(this._core.clones(this._core.relative(g)),i),g++},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1},e.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src")||f.attr("data-srcset");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):f.is("source")?f.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("srcset",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":'url("'+g+'")',opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(c){this._core=c,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&"position"===a.property.name&&(console.log("update called"),this.update())},this),"loaded.owl.lazy":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var d=this;a(b).on("load",function(){d._core.settings.autoHeight&&d.update()}),a(b).resize(function(){d._core.settings.autoHeight&&(null!=d._intervalId&&clearTimeout(d._intervalId),d._intervalId=setTimeout(function(){d.update()},250))})};e.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},e.prototype.update=function(){var b=this._core._current,c=b+this._core.settings.items,d=this._core.$stage.children().toArray().slice(b,c),e=[],f=0;a.each(d,function(b,c){e.push(a(c).height())}),f=Math.max.apply(null,e),this._core.$stage.parent().height(f).addClass(this._core.settings.autoHeightClass)},e.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.video&&this.isInFullScreen()&&a.preventDefault()},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"===a.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};e.Defaults={video:!1,videoHeight:!1,videoWidth:!1},e.prototype.fetch=function(a,b){var c=function(){return a.attr("data-vimeo-id")?"vimeo":a.attr("data-vzaar-id")?"vzaar":"youtube"}(),d=a.attr("data-vimeo-id")||a.attr("data-youtube-id")||a.attr("data-vzaar-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else if(d[3].indexOf("vimeo")>-1)c="vimeo";else{if(!(d[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");c="vzaar"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},e.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?'style="width:'+c.width+"px;height:"+c.height+'px;"':"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(a){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?'<div class="owl-video-tn '+j+'" '+i+'="'+a+'"></div>':'<div class="owl-video-tn" style="opacity:1;background-image:url('+a+')"></div>',b.after(d),b.after(e)};if(b.wrap('<div class="owl-video-wrapper"'+g+"></div>"),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length)return l(h.attr(i)),h.remove(),!1;"youtube"===c.type?(f="//img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type?a.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}):"vzaar"===c.type&&a.ajax({type:"GET",url:"//vzaar.com/api/videos/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a.framegrab_url,l(f)}})},e.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},e.prototype.play=function(b){var c,d=a(b.target),e=d.closest("."+this._core.settings.itemClass),f=this._videos[e.attr("data-video")],g=f.width||"100%",h=f.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),e=this._core.items(this._core.relative(e.index())),this._core.reset(e.index()),"youtube"===f.type?c='<iframe width="'+g+'" height="'+h+'" src="//www.youtube.com/embed/'+f.id+"?autoplay=1&rel=0&v="+f.id+'" frameborder="0" allowfullscreen></iframe>':"vimeo"===f.type?c='<iframe src="//player.vimeo.com/video/'+f.id+'?autoplay=1" width="'+g+'" height="'+h+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>':"vzaar"===f.type&&(c='<iframe frameborder="0"height="'+h+'"width="'+g+'" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/'+f.id+'/player?autoplay=true"></iframe>'),a('<div class="owl-video-frame">'+c+"</div>").insertAfter(e.find(".owl-video")),this._playing=e.addClass("owl-video-playing"))},e.prototype.isInFullScreen=function(){var b=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return b&&a(b).parent().hasClass("owl-video-frame")},e.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){a.namespace&&(this.swapping="translated"==a.type)},this),"translate.owl.carousel":a.proxy(function(a){a.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&a.support.animation&&a.support.transition){this.core.speed(0)
;var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.one(a.support.animation.end,c).css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g)),f&&e.one(a.support.animation.end,c).addClass("animated owl-animated-in").addClass(f))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":a.proxy(function(a){a.namespace&&"settings"===a.property.name?this._core.settings.autoplay?this.play():this.stop():a.namespace&&"position"===a.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":a.proxy(function(a,b,c){a.namespace&&this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(a){a.namespace&&this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=a.extend({},e.Defaults,this._core.options)};e.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},e.prototype._next=function(d){this._call=b.setTimeout(a.proxy(this._next,this,d),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("busy")||this._core.is("interacting")||c.hidden||this._core.next(d||this._core.settings.autoplaySpeed)},e.prototype.read=function(){return(new Date).getTime()-this._time},e.prototype.play=function(c,d){var e;this._core.is("rotating")||this._core.enter("rotating"),c=c||this._core.settings.autoplayTimeout,e=Math.min(this._time%(this._timeout||c),c),this._paused?(this._time=this.read(),this._paused=!1):b.clearTimeout(this._call),this._time+=this.read()%c-e,this._timeout=c,this._call=b.setTimeout(a.proxy(this._next,this,d),c-e)},e.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,b.clearTimeout(this._call),this._core.leave("rotating"))},e.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,b.clearTimeout(this._call))},e.prototype.destroy=function(){var a,b;this.stop();for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(b){this._core=b,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){b.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,0,this._templates.pop())},this),"remove.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&this.draw()},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var b,c=this._core.settings;this._controls.$relative=(c.navContainer?a(c.navContainer):a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=a("<"+c.navElement+">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click",a.proxy(function(a){this.prev(c.navSpeed)},this)),this._controls.$next=a("<"+c.navElement+">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click",a.proxy(function(a){this.next(c.navSpeed)},this)),c.dotsData||(this._templates=[a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),this._controls.$absolute=(c.dotsContainer?a(c.dotsContainer):a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",a.proxy(function(b){var d=a(b.target).parent().is(this._controls.$absolute)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(d,c.dotsSpeed)},this));for(b in this._overrides)this._core[b]=a.proxy(this[b],this)},e.prototype.destroy=function(){var a,b,c,d,e;e=this._core.settings;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)"$relative"===b&&e.navContainer?this._controls[b].html(""):this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},e.prototype.update=function(){var a,b,c,d=this._core.clones().length/2,e=d+this._core.items().length,f=this._core.maximum(!0),g=this._core.settings,h=g.center||g.autoWidth||g.dotsData?1:g.dotsEach||g.items;if("page"!==g.slideBy&&(g.slideBy=Math.min(g.slideBy,g.items)),g.dots||"page"==g.slideBy)for(this._pages=[],a=d,b=0,c=0;a<e;a++){if(b>=h||0===b){if(this._pages.push({start:Math.min(f,a-d),end:a-d+h-1}),Math.min(f,a-d)===f)break;b=0,++c}b+=this._core.mergers(this._core.relative(a))}},e.prototype.draw=function(){var b,c=this._core.settings,d=this._core.items().length<=c.items,e=this._core.relative(this._core.current()),f=c.loop||c.rewind;this._controls.$relative.toggleClass("disabled",!c.nav||d),c.nav&&(this._controls.$previous.toggleClass("disabled",!f&&e<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!f&&e>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!c.dots||d),c.dots&&(b=this._pages.length-this._controls.$absolute.children().length,c.dotsData&&0!==b?this._controls.$absolute.html(this._templates.join("")):b>0?this._controls.$absolute.append(new Array(b+1).join(this._templates[0])):b<0&&this._controls.$absolute.children().slice(b).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(a.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotsData?1:c.dotsEach||c.items)}},e.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,a.proxy(function(a,c){return a.start<=b&&a.end>=b},this)).pop()},e.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},e.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},e.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},e.prototype.to=function(b,c,d){var e;!d&&this._pages.length?(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c)):a.proxy(this._overrides.to,this._core)(b,c)},a.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(c){this._core=c,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(c){c.namespace&&"URLHash"===this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!c)return;this._hashes[c]=b.content}},this),"changed.owl.carousel":a.proxy(function(c){if(c.namespace&&"position"===c.property.name){var d=this._core.items(this._core.relative(this._core.current())),e=a.map(this._hashes,function(a,b){return a===d?b:null}).join();if(!e||b.location.hash.slice(1)===e)return;b.location.hash=e}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(a){var c=b.location.hash.substring(1),e=this._core.$stage.children(),f=this._hashes[c]&&e.index(this._hashes[c]);f!==d&&f!==this._core.current()&&this._core.to(this._core.relative(f),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){function e(b,c){var e=!1,f=b.charAt(0).toUpperCase()+b.slice(1);return a.each((b+" "+h.join(f+" ")+f).split(" "),function(a,b){if(g[b]!==d)return e=!c||b,!1}),e}function f(a){return e(a,!0)}var g=a("<support>").get(0).style,h="Webkit Moz O ms".split(" "),i={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},j={csstransforms:function(){return!!e("transform")},csstransforms3d:function(){return!!e("perspective")},csstransitions:function(){return!!e("transition")},cssanimations:function(){return!!e("animation")}};j.csstransitions()&&(a.support.transition=new String(f("transition")),a.support.transition.end=i.transition.end[a.support.transition]),j.cssanimations()&&(a.support.animation=new String(f("animation")),a.support.animation.end=i.animation.end[a.support.animation]),j.csstransforms()&&(a.support.transform=new String(f("transform")),a.support.transform3d=j.csstransforms3d())}(window.Zepto||window.jQuery,window,document);;
/*! jQuery UI - v1.10.4 - 2014-01-17
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function(t,e){function i(){return++n}function s(t){return t=t.cloneNode(!1),t.hash.length>1&&decodeURIComponent(t.href.replace(a,""))===decodeURIComponent(location.href.replace(a,""))}var n=0,a=/#.*$/;t.widget("ui.tabs",{version:"1.10.4",delay:300,options:{active:null,collapsible:!1,event:"click",heightStyle:"content",hide:null,show:null,activate:null,beforeActivate:null,beforeLoad:null,load:null},_create:function(){var e=this,i=this.options;this.running=!1,this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible",i.collapsible).delegate(".ui-tabs-nav > li","mousedown"+this.eventNamespace,function(e){t(this).is(".ui-state-disabled")&&e.preventDefault()}).delegate(".ui-tabs-anchor","focus"+this.eventNamespace,function(){t(this).closest("li").is(".ui-state-disabled")&&this.blur()}),this._processTabs(),i.active=this._initialActive(),t.isArray(i.disabled)&&(i.disabled=t.unique(i.disabled.concat(t.map(this.tabs.filter(".ui-state-disabled"),function(t){return e.tabs.index(t)}))).sort()),this.active=this.options.active!==!1&&this.anchors.length?this._findActive(i.active):t(),this._refresh(),this.active.length&&this.load(i.active)},_initialActive:function(){var i=this.options.active,s=this.options.collapsible,n=location.hash.substring(1);return null===i&&(n&&this.tabs.each(function(s,a){return t(a).attr("aria-controls")===n?(i=s,!1):e}),null===i&&(i=this.tabs.index(this.tabs.filter(".ui-tabs-active"))),(null===i||-1===i)&&(i=this.tabs.length?0:!1)),i!==!1&&(i=this.tabs.index(this.tabs.eq(i)),-1===i&&(i=s?!1:0)),!s&&i===!1&&this.anchors.length&&(i=0),i},_getCreateEventData:function(){return{tab:this.active,panel:this.active.length?this._getPanelForTab(this.active):t()}},_tabKeydown:function(i){var s=t(this.document[0].activeElement).closest("li"),n=this.tabs.index(s),a=!0;if(!this._handlePageNav(i)){switch(i.keyCode){case t.ui.keyCode.RIGHT:case t.ui.keyCode.DOWN:n++;break;case t.ui.keyCode.UP:case t.ui.keyCode.LEFT:a=!1,n--;break;case t.ui.keyCode.END:n=this.anchors.length-1;break;case t.ui.keyCode.HOME:n=0;break;case t.ui.keyCode.SPACE:return i.preventDefault(),clearTimeout(this.activating),this._activate(n),e;case t.ui.keyCode.ENTER:return i.preventDefault(),clearTimeout(this.activating),this._activate(n===this.options.active?!1:n),e;default:return}i.preventDefault(),clearTimeout(this.activating),n=this._focusNextTab(n,a),i.ctrlKey||(s.attr("aria-selected","false"),this.tabs.eq(n).attr("aria-selected","true"),this.activating=this._delay(function(){this.option("active",n)},this.delay))}},_panelKeydown:function(e){this._handlePageNav(e)||e.ctrlKey&&e.keyCode===t.ui.keyCode.UP&&(e.preventDefault(),this.active.focus())},_handlePageNav:function(i){return i.altKey&&i.keyCode===t.ui.keyCode.PAGE_UP?(this._activate(this._focusNextTab(this.options.active-1,!1)),!0):i.altKey&&i.keyCode===t.ui.keyCode.PAGE_DOWN?(this._activate(this._focusNextTab(this.options.active+1,!0)),!0):e},_findNextTab:function(e,i){function s(){return e>n&&(e=0),0>e&&(e=n),e}for(var n=this.tabs.length-1;-1!==t.inArray(s(),this.options.disabled);)e=i?e+1:e-1;return e},_focusNextTab:function(t,e){return t=this._findNextTab(t,e),this.tabs.eq(t).focus(),t},_setOption:function(t,i){return"active"===t?(this._activate(i),e):"disabled"===t?(this._setupDisabled(i),e):(this._super(t,i),"collapsible"===t&&(this.element.toggleClass("ui-tabs-collapsible",i),i||this.options.active!==!1||this._activate(0)),"event"===t&&this._setupEvents(i),"heightStyle"===t&&this._setupHeightStyle(i),e)},_tabId:function(t){return t.attr("aria-controls")||"ui-tabs-"+i()},_sanitizeSelector:function(t){return t?t.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g,"\\$&"):""},refresh:function(){var e=this.options,i=this.tablist.children(":has(a[href])");e.disabled=t.map(i.filter(".ui-state-disabled"),function(t){return i.index(t)}),this._processTabs(),e.active!==!1&&this.anchors.length?this.active.length&&!t.contains(this.tablist[0],this.active[0])?this.tabs.length===e.disabled.length?(e.active=!1,this.active=t()):this._activate(this._findNextTab(Math.max(0,e.active-1),!1)):e.active=this.tabs.index(this.active):(e.active=!1,this.active=t()),this._refresh()},_refresh:function(){this._setupDisabled(this.options.disabled),this._setupEvents(this.options.event),this._setupHeightStyle(this.options.heightStyle),this.tabs.not(this.active).attr({"aria-selected":"false",tabIndex:-1}),this.panels.not(this._getPanelForTab(this.active)).hide().attr({"aria-expanded":"false","aria-hidden":"true"}),this.active.length?(this.active.addClass("ui-tabs-active ui-state-active").attr({"aria-selected":"true",tabIndex:0}),this._getPanelForTab(this.active).show().attr({"aria-expanded":"true","aria-hidden":"false"})):this.tabs.eq(0).attr("tabIndex",0)},_processTabs:function(){var e=this;this.tablist=this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role","tablist"),this.tabs=this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({role:"tab",tabIndex:-1}),this.anchors=this.tabs.map(function(){return t("a",this)[0]}).addClass("ui-tabs-anchor").attr({role:"presentation",tabIndex:-1}),this.panels=t(),this.anchors.each(function(i,n){var a,o,r,h=t(n).uniqueId().attr("id"),l=t(n).closest("li"),u=l.attr("aria-controls");s(n)?(a=n.hash,o=e.element.find(e._sanitizeSelector(a))):(r=e._tabId(l),a="#"+r,o=e.element.find(a),o.length||(o=e._createPanel(r),o.insertAfter(e.panels[i-1]||e.tablist)),o.attr("aria-live","polite")),o.length&&(e.panels=e.panels.add(o)),u&&l.data("ui-tabs-aria-controls",u),l.attr({"aria-controls":a.substring(1),"aria-labelledby":h}),o.attr("aria-labelledby",h)}),this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role","tabpanel")},_getList:function(){return this.tablist||this.element.find("ol,ul").eq(0)},_createPanel:function(e){return t("<div>").attr("id",e).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",!0)},_setupDisabled:function(e){t.isArray(e)&&(e.length?e.length===this.anchors.length&&(e=!0):e=!1);for(var i,s=0;i=this.tabs[s];s++)e===!0||-1!==t.inArray(s,e)?t(i).addClass("ui-state-disabled").attr("aria-disabled","true"):t(i).removeClass("ui-state-disabled").removeAttr("aria-disabled");this.options.disabled=e},_setupEvents:function(e){var i={click:function(t){t.preventDefault()}};e&&t.each(e.split(" "),function(t,e){i[e]="_eventHandler"}),this._off(this.anchors.add(this.tabs).add(this.panels)),this._on(this.anchors,i),this._on(this.tabs,{keydown:"_tabKeydown"}),this._on(this.panels,{keydown:"_panelKeydown"}),this._focusable(this.tabs),this._hoverable(this.tabs)},_setupHeightStyle:function(e){var i,s=this.element.parent();"fill"===e?(i=s.height(),i-=this.element.outerHeight()-this.element.height(),this.element.siblings(":visible").each(function(){var e=t(this),s=e.css("position");"absolute"!==s&&"fixed"!==s&&(i-=e.outerHeight(!0))}),this.element.children().not(this.panels).each(function(){i-=t(this).outerHeight(!0)}),this.panels.each(function(){t(this).height(Math.max(0,i-t(this).innerHeight()+t(this).height()))}).css("overflow","auto")):"auto"===e&&(i=0,this.panels.each(function(){i=Math.max(i,t(this).height("").height())}).height(i))},_eventHandler:function(e){var i=this.options,s=this.active,n=t(e.currentTarget),a=n.closest("li"),o=a[0]===s[0],r=o&&i.collapsible,h=r?t():this._getPanelForTab(a),l=s.length?this._getPanelForTab(s):t(),u={oldTab:s,oldPanel:l,newTab:r?t():a,newPanel:h};e.preventDefault(),a.hasClass("ui-state-disabled")||a.hasClass("ui-tabs-loading")||this.running||o&&!i.collapsible||this._trigger("beforeActivate",e,u)===!1||(i.active=r?!1:this.tabs.index(a),this.active=o?t():a,this.xhr&&this.xhr.abort(),l.length||h.length||t.error("jQuery UI Tabs: Mismatching fragment identifier."),h.length&&this.load(this.tabs.index(a),e),this._toggle(e,u))},_toggle:function(e,i){function s(){a.running=!1,a._trigger("activate",e,i)}function n(){i.newTab.closest("li").addClass("ui-tabs-active ui-state-active"),o.length&&a.options.show?a._show(o,a.options.show,s):(o.show(),s())}var a=this,o=i.newPanel,r=i.oldPanel;this.running=!0,r.length&&this.options.hide?this._hide(r,this.options.hide,function(){i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),n()}):(i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),r.hide(),n()),r.attr({"aria-expanded":"false","aria-hidden":"true"}),i.oldTab.attr("aria-selected","false"),o.length&&r.length?i.oldTab.attr("tabIndex",-1):o.length&&this.tabs.filter(function(){return 0===t(this).attr("tabIndex")}).attr("tabIndex",-1),o.attr({"aria-expanded":"true","aria-hidden":"false"}),i.newTab.attr({"aria-selected":"true",tabIndex:0})},_activate:function(e){var i,s=this._findActive(e);s[0]!==this.active[0]&&(s.length||(s=this.active),i=s.find(".ui-tabs-anchor")[0],this._eventHandler({target:i,currentTarget:i,preventDefault:t.noop}))},_findActive:function(e){return e===!1?t():this.tabs.eq(e)},_getIndex:function(t){return"string"==typeof t&&(t=this.anchors.index(this.anchors.filter("[href$='"+t+"']"))),t},_destroy:function(){this.xhr&&this.xhr.abort(),this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible"),this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role"),this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeUniqueId(),this.tabs.add(this.panels).each(function(){t.data(this,"ui-tabs-destroy")?t(this).remove():t(this).removeClass("ui-state-default ui-state-active ui-state-disabled ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role")}),this.tabs.each(function(){var e=t(this),i=e.data("ui-tabs-aria-controls");i?e.attr("aria-controls",i).removeData("ui-tabs-aria-controls"):e.removeAttr("aria-controls")}),this.panels.show(),"content"!==this.options.heightStyle&&this.panels.css("height","")},enable:function(i){var s=this.options.disabled;s!==!1&&(i===e?s=!1:(i=this._getIndex(i),s=t.isArray(s)?t.map(s,function(t){return t!==i?t:null}):t.map(this.tabs,function(t,e){return e!==i?e:null})),this._setupDisabled(s))},disable:function(i){var s=this.options.disabled;if(s!==!0){if(i===e)s=!0;else{if(i=this._getIndex(i),-1!==t.inArray(i,s))return;s=t.isArray(s)?t.merge([i],s).sort():[i]}this._setupDisabled(s)}},load:function(e,i){e=this._getIndex(e);var n=this,a=this.tabs.eq(e),o=a.find(".ui-tabs-anchor"),r=this._getPanelForTab(a),h={tab:a,panel:r};s(o[0])||(this.xhr=t.ajax(this._ajaxSettings(o,i,h)),this.xhr&&"canceled"!==this.xhr.statusText&&(a.addClass("ui-tabs-loading"),r.attr("aria-busy","true"),this.xhr.success(function(t){setTimeout(function(){r.html(t),n._trigger("load",i,h)},1)}).complete(function(t,e){setTimeout(function(){"abort"===e&&n.panels.stop(!1,!0),a.removeClass("ui-tabs-loading"),r.removeAttr("aria-busy"),t===n.xhr&&delete n.xhr},1)})))},_ajaxSettings:function(e,i,s){var n=this;return{url:e.attr("href"),beforeSend:function(e,a){return n._trigger("beforeLoad",i,t.extend({jqXHR:e,ajaxSettings:a},s))}}},_getPanelForTab:function(e){var i=t(e).attr("aria-controls");return this.element.find(this._sanitizeSelector("#"+i))}})})(jQuery);;
 /*!
 * Thumbnail helper for fancyBox
 * version: 1.0.7 (Mon, 01 Oct 2012)
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         helpers : {
 *             thumbs: {
 *                 width  : 50,
 *                 height : 50
 *             }
 *         }
 *     });
 *
 */
(function ($) {
	//Shortcut for fancyBox object
	var F = $.fancybox;

	//Add helper object
	F.helpers.thumbs = {
		defaults : {
			width    : 50,       // thumbnail width
			height   : 50,       // thumbnail height
			position : 'bottom', // 'top' or 'bottom'
			source   : function ( item ) {  // function to obtain the URL of the thumbnail image
				var href;

				if (item.element) {
					href = $(item.element).find('img').attr('src');
				}

				if (!href && item.type === 'image' && item.href) {
					href = item.href;
				}

				return href;
			}
		},

		wrap  : null,
		list  : null,
		width : 0,

		init: function (opts, obj) {
			var that = this,
				list,
				thumbWidth  = opts.width,
				thumbHeight = opts.height,
				thumbSource = opts.source;

			//Build list structure
			list = '';

			for (var n = 0; n < obj.group.length; n++) {
				list += '<li><a style="width:' + thumbWidth + 'px;height:' + thumbHeight + 'px;" href="javascript:jQuery.fancybox.jumpto(' + n + ');"></a></li>';
			}

			this.wrap = $('<div id="fancybox-thumbs"></div>').addClass(opts.position).appendTo('body');
			this.list = $('<ul>' + list + '</ul>').appendTo(this.wrap);

			//Load each thumbnail
			$.each(obj.group, function (i) {
				var href = thumbSource( obj.group[ i ] );

				if (!href) {
					return;
				}

				$("<img />").load(function () {
					var width  = this.width,
						height = this.height,
						widthRatio, heightRatio, parent;

					if (!that.list || !width || !height) {
						return;
					}

					//Calculate thumbnail width/height and center it
					widthRatio  = width / thumbWidth;
					heightRatio = height / thumbHeight;

					parent = that.list.children().eq(i).find('a');

					if (widthRatio >= 1 && heightRatio >= 1) {
						if (widthRatio > heightRatio) {
							width  = Math.floor(width / heightRatio);
							height = thumbHeight;

						} else {
							width  = thumbWidth;
							height = Math.floor(height / widthRatio);
						}
					}

					$(this).css({
						width  : width,
						height : height,
						top    : Math.floor(thumbHeight / 2 - height / 2),
						left   : Math.floor(thumbWidth / 2 - width / 2)
					});

					parent.width(thumbWidth).height(thumbHeight);

					$(this).hide().appendTo(parent).fadeIn(300);

				}).attr('src', href);
			});

			//Set initial width
			this.width = this.list.children().eq(0).outerWidth(true);

			this.list.width(this.width * (obj.group.length + 1)).css('left', Math.floor($(window).width() * 0.5 - (obj.index * this.width + this.width * 0.5)));
		},

		beforeLoad: function (opts, obj) {
			//Remove self if gallery do not have at least two items
			if (obj.group.length < 2) {
				obj.helpers.thumbs = false;

				return;
			}

			//Increase bottom margin to give space for thumbs
			obj.margin[ opts.position === 'top' ? 0 : 2 ] += ((opts.height) + 15);
		},

		afterShow: function (opts, obj) {
			//Check if exists and create or update list
			if (this.list) {
				this.onUpdate(opts, obj);

			} else {
				this.init(opts, obj);
			}

			//Set active element
			this.list.children().removeClass('active').eq(obj.index).addClass('active');
		},

		//Center list
		onUpdate: function (opts, obj) {
			if (this.list) {
				this.list.stop(true).animate({
					'left': Math.floor($(window).width() * 0.5 - (obj.index * this.width + this.width * 0.5))
				}, 150);
			}
		},

		beforeClose: function () {
			if (this.wrap) {
				this.wrap.remove();
			}

			this.wrap  = null;
			this.list  = null;
			this.width = 0;
		}
	}

}(jQuery));;
(function ($, window, document, undefined) {

	// privatni property
	var _modulName = 'CompareBar',
		_boxId = 'compareBar';

	// jquery property
	var $compareBar = $(),
		$btnMinimalized = $(),
		$jsCarousel = $();

	// pomocna metoda ktera kontrouje jestli v navratovem ajaxu existuje porovnavaci lista. Pokud ne tak odstran i tu puvodni
	var _isCompareBar = function (resultAjxBar) {

		var plugin = this;

		if ($(resultAjxBar).length === 0) {
			_destroyCompareBar.call(plugin);

			return false;
		}

		return true;
	};

	var _destroyCompareBar = function () {
		var plugin = this;

		$('body').off('click', $btnMinimalized.selector);

		$compareBar.remove();

		$compareBar = $();
		$btnMinimalized = $();
		$jsCarousel = $();

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		if (test) {
			localStorage.removeItem(plugin.modulName + '_cacheSettings');
		}	
	};

	// metoda ktera nahraje listu s produkty pro porovnani
	// privatni metoda
	var _loadBar = function (objParams) {

		var ajxParams = {
			type: 'GET',
			dataType: 'html',
			global: false,
			async: true,
			url: g_root + '/ajaxpages/productcomparebar_ajx.aspx'
		};

		// merging parametru
		$.extend(ajxParams, objParams);

		var request = $.ajax(ajxParams);

	};

	// metoda volajici sluzbu ktera prida nebo odstrani produkt z porovnavani
	// privatni metoda
	var _servicesCompare = function (pro_id, action, objParams) {

		var ajxParams = {
			type: 'POST',
			data: JSON.stringify({ pro_id: pro_id }),
			contentType: 'application/json; charset=utf-8',
			dataType: 'json',
			error: function (result) {
				displayErrorMessage(result.statusText, true);
			}
		};

		// nastav url pro pridani
		if (action === 'add') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/add';
		}

		// nastav url pro odstraneni
		if (action === 'remove') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/remove';
		}

		// nastav url pro odstraneni pole produktu a uprav vsupni parametr na pro_ids
		if (action === 'removeselected') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/removeselected';
			ajxParams.data = JSON.stringify({ pro_ids: pro_id });
		}

		// merging parametru
		$.extend(ajxParams, objParams);

		var request = $.ajax(ajxParams);
	};

	var _carouselInit = function () {
		if (!$().owlCarousel) {
			if (App.debug) {
				console.log('Chybí plugin owl carousel.');
			}
			return false;
		}

		$jsCarousel = $compareBar.find('.data-product-items');

		// pokud v porovnavaci liste nejsou zadne doporucene produkty
		if (0 === $jsCarousel.length) {
			return;
		}

		var $jsCarouselChildrens = $jsCarousel.children();

		// nastaveni pro carousel dle breakpointu
		var _responsiveSettings = function (defautCount) {
			var settings = {
				items: defautCount
			};

			if ($jsCarouselChildrens.length <= defautCount) {
				settings.stagePadding = 0;
				settings.nav = false;
				settings.loop = false;
			}

			return settings;
		};

		$jsCarousel.owlCarousel({
			dots: false,
			nav: true,
			loop: $jsCarousel.children().length > 1,
			margin: 10,
			stagePadding: 30,
			responsive: {
				0: _responsiveSettings(1),
				380: _responsiveSettings(2),
				480: _responsiveSettings(3),
				600: _responsiveSettings(4),
				768: _responsiveSettings(5),
				992: _responsiveSettings(6),
				1200: _responsiveSettings(8)
			},
			onInitialized: function (event) {
				$(event.currentTarget).addClass('owl-carousel');
			}
		});
	};

	var _carouselDestroy = function () {

		// nefunguje mi trigger refresh na carouselu tak proto kod nize takto
		//$jsCarousel.trigger('refresh.owl.carousel');
		$jsCarousel.trigger('destroy.owl.carousel');
		$jsCarousel.find('.owl-stage-outer').children().unwrap();
		$jsCarousel.removeClass('owl-carousel');
		$jsCarousel.removeClass('owl-loaded');
	};

	// zmena tabu
	// privatni metoda
	var _changeCategory = function (pnc_id) {
		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		_loadBar({
			data: { pnc_id: pnc_id },
			success: function (result) {
				var _$compareBar = $(result).find('#' + _boxId);

				// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
				if (!_isCompareBar.call(plugin, _$compareBar)) {
					return;
				}

				plugin.currentTabCategory = pnc_id;

				$compareBar.html(_$compareBar.html());

				// vysunuti porovnavaci listy pokud je minimalizovana
				if (plugin.isMinimalized || plugin.isClosed) {
					_controlBarVisibility.call(plugin, 'maximalized');
				}

				// ulozeni aktualniho nastaveni do local storage
				_cachedSettings.call(plugin);

				_carouselInit();
			}
		});
	};

	// pridani do porovnavaci listy
	// privatni metoda
	var _addToCompareBar = function (pro_id, pnc_id) {
		if (typeof pro_id === 'undefined' && typeof pro_id !== 'number') {
			console.error('Parametr "pro_id" není definován nebo není číslo.');
			return false;
		}

		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		// globalni preloader start
		showLoading();

		_servicesCompare(pro_id, 'add', {
			success: function (result) {

				// globalni preloader stop
				hideLoading();

				if (result === null) {
					displayErrorMessage('Produkt nelze přidat do porovnávání. Kontaktujte nás.', true);
					return;
				}

				// pokud jiz produkt v porovnavani existuje tak prepni na kategorii plus vypis info hlasku a ukonci
				if (result.d.additionalData !== null && typeof result.d.additionalData.existsInCollection !== 'undefined' && result.d.additionalData.existsInCollection === true) {
					displayInfoMessage('Tento produkt máte již v porovnávání uložen.', true);
					if ($compareBar.length > 0) {
						plugin.changeCategory(pnc_id);
						return;
					}
				}

				// pokud porovnavaci lista neexistuje tak ji nahrej
				if ($compareBar.length === 0) {
					plugin.isClosed = false;
					plugin.currentTabCategory = pnc_id;
					_cachedSettings.call(plugin);

					plugin.init();
					return;
				}

				// globalni preloader start
				showLoading();

				_loadBar({
					data: { pnc_id: pnc_id },
					success: function (result) {
						var _$compareBar = $(result).find('#' + _boxId),
							_$el = _$compareBar.find('#proCompare_' + pro_id);

						// globalni preloader stop
						hideLoading();

						// puvodni element odstranim abych jej pak mohl pridat na prvni misto
						_$compareBar.find('#proCompare_' + pro_id).remove();

						// nastavim mu default styly aby byl schovan nez aplikuju animaci
						_$el.css({ opacity: 0, width: 0 });

						// ziskani sirky jedne dlazdice kvuli animaci
						var proItem_width = $compareBar.find('.product-item').eq(0).outerWidth(true);

						// vysunuti porovnavaci listy pokud je minimalizovana nebo schovana
						if (plugin.isMinimalized || plugin.isClosed) {
							_controlBarVisibility.call(plugin, 'maximalized');
						}

						// pokud porovnavany produkt neni ze stejne kategorie ktera je aktivni v porovnavaci liste tak prvne prepis cely obsah a pak pridej
						if (plugin.currentTabCategory !== 0 && plugin.currentTabCategory !== pnc_id) {
							// nastaveni nove kategorie
							plugin.currentTabCategory = pnc_id;

							// prepsani obsahu
							$compareBar.html(_$compareBar.html());

							// metoda ktera prida prvek do baru a provede animovane zobrazeni
							_animateAddBar(_$el, proItem_width);

							// ulozeni aktualniho nastaveni do local storage
							_cachedSettings.call(plugin);
						} else {
							// aktualizace tabu
							$compareBar.find('#' + _boxId + 'Tabs').html(_$compareBar.find('#' + _boxId + 'Tabs').html());

							// metoda ktera prida prvek do baru a provede animovane zobrazeni
							_animateAddBar(_$el, proItem_width);
						}
					}
				});
			}
		});
	};

	// pomocna metoda pro animaci pri pridani produktu do porovnani
	var _animateAddBar = function ($elProduct, proItem_width) {
		_carouselDestroy();

		$compareBar.find('.data-product-items').prepend($elProduct);

		$elProduct.animate({
			width: proItem_width + 'px'
		}, 200, function () {
			$elProduct.animate({
				opacity: 1
			}, 200, function () {
				_carouselInit();
			});
		});
	};

	// odstraneni z porovnavaci listy
	// privatni metoda
	var _removeFromCompareBar = function (pro_id, pnc_id) {
		if (typeof pro_id === 'undefined' && typeof pro_id !== 'number') {
			console.error('Parametr "pro_id" není definován nebo není číslo.');
			return false;
		}

		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		_servicesCompare(pro_id, 'remove', {
			success: function (result) {
				if (result === null) {
					displayErrorMessage('Produkt nelze odstranit z porovnávání. Kontaktujte nás.', true);
					return;
				}

				var $el = $('#proCompare_' + pro_id);

				_carouselDestroy();

				$el.animate({
					opacity: 0
				}, 200, function () {
					$el.animate({
						width: 0
					}, 200, function () {
						$el.remove();

						// pokud jiz v dane kategorii nejsou zadne produkty tak se pokus nacist celou listu pro porovnani znovu
						if ($compareBar.find('.compare-bar_product').length === 0) {
							plugin.changeCategory(0);
							return;
						}

						_loadBar({
							data: { pnc_id: pnc_id },
							success: function (result) {
								var _$compareBar = $(result).find('#' + _boxId);

								// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
								if (!_isCompareBar.call(plugin, _$compareBar)) {
									return;
								}

								$compareBar.find('#' + _boxId + 'Tabs').html(_$compareBar.find('#' + _boxId + 'Tabs').html());

								_carouselInit();
							}
						});
					});
				});
			}
		});
	};

	// odstraneni z porovnavaci listy pole produktu
	// privatni metoda
	var _removeFromCompareBarSelected = function () {
		var plugin = this,
			$els = $('.compare-bar_product'),
			pro_ids = $.map($els.toArray(), function (el) {
				return $(el).data('pro-id');
			});

		_servicesCompare(pro_ids, 'removeselected', {
			success: function (result) {
				if (result === null) {
					displayErrorMessage('Produkty nelze odstranit z porovnávání. Kontaktujte nás.', true);
					return;
				}

				_carouselDestroy();

				$els.animate({
					opacity: 0
				}, 200, function () {
					$els.animate({
						width: 0
					}, 200, function () {
						$els.remove();

						plugin.changeCategory(0);
						return;

					});
				});
			}
		});

	};

	// metoda pro vysunuti nebo schovani listy
	var _controlBarVisibility = function (visibility) {
		var plugin = this;

		switch (visibility) {
			case 'minimalized':
				plugin.isMinimalized = true;
				plugin.isClosed = false;

				$compareBar.addClass('minimized');
				$btnMinimalized.attr('title', dictionary.GetValue('tip_global_maximize'));
				break;

			case 'maximalized':
				plugin.isMinimalized = false;
				plugin.isClosed = false;

				$compareBar.removeClass('minimized');
				$btnMinimalized.attr('title', dictionary.GetValue('tip_global_minimalize'));
				break;

			case 'closed':
				plugin.isMinimalized = false;
				plugin.isClosed = true;

				$compareBar.remove();
				$compareBar = $();
				break;
		}


		// ulozeni aktualniho nastaveni do local storage
		_cachedSettings.call(plugin);
	};

	// binding udalosti na prvky
	var _initializeEvents = function () {
		var plugin = this;

		$('body').on('click', $btnMinimalized.selector, function (e) {
			e.preventDefault();
			e.stopPropagation();

			if (plugin.isMinimalized) {
				_controlBarVisibility.call(plugin, 'maximalized');
			} else {
				_controlBarVisibility.call(plugin, 'minimalized');
			}
		});
	};

	// metoda pro ulozeni nastaveni porovnavaci listy do pameti prohlizece
	var _cachedSettings = function () {

		var plugin = this,
			cacheSettings = {};

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		// pokud nemám souhlas, neukládám
		if (!test) {
			return;
		}

		cacheSettings.currentTabCategory = plugin.currentTabCategory;
		cacheSettings.isMinimalized = plugin.isMinimalized;
		cacheSettings.isClosed = plugin.isClosed;

		localStorage.setItem(plugin.modulName + '_cacheSettings', JSON.stringify(cacheSettings));
	};

	var _close = function () {
		var plugin = this;

		_controlBarVisibility.call(plugin, 'closed');
	};

	// prvotni nahrani porovnavaci listy
	// privatni metoda
	var _init = function () {
		var plugin = this,
			cacheSettings = {};

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		// nahrani nastaveni z local storage pokud je ulozeno
		if (test && !$.isEmptyObject(localStorage.getItem(plugin.modulName + '_cacheSettings'))) {
			cacheSettings = JSON.parse(localStorage.getItem(plugin.modulName + '_cacheSettings'));

			plugin.currentTabCategory = cacheSettings.currentTabCategory;
			plugin.isMinimalized = cacheSettings.isMinimalized;
			plugin.isClosed = cacheSettings.isClosed;
		}

		if (plugin.isClosed) {
			return;
		}

		$compareBar = $('#' + _boxId);

		if ($compareBar.length === 0) {

			_loadBar({
				data: { pnc_id: plugin.currentTabCategory },
				success: function (result) {
					var _$compareBar = $(result).find('#' + _boxId);

					// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
					//if (!_isCompareBar.call(plugin, _$compareBar)) {
					//	return;
					//}
					// uprava logiky - pokud se pri initu zjisti ze neni nic v porovnavani tak se nastavi lista jako kdyby bylo kliknuto na zavrit
					if (_$compareBar.length === 0) {
						plugin.isClosed = true;
						_cachedSettings.call(plugin);
						return;
					}

					$compareBar = _$compareBar;
					$btnMinimalized = $compareBar.find('#' + _boxId + 'BtnMinimized');

					// pokud je nastaveno ze ma byt lista minimalizovana
					if (plugin.isMinimalized) {
						_controlBarVisibility.call(plugin, 'minimalized');
					}

					// zjisteni aktivni kategorie
					plugin.currentTabCategory = $compareBar.find('#' + _boxId + 'Tabs .currentCat').data('pnc-id');

					// docasne schovani porovnavaci listy nekam za obsah aby bylo mozne po vlozeni zjistit nejprve jeho vysku pro vysunuti.
					$compareBar.css({ bottom: '-100%' });

					// vlozeni porovnavaci listy do tela stranky
					$('body').append($compareBar);

					// na bottom nastavim pozici do zaporu dle realne vysky
					$compareBar.css({ bottom: '-' + $compareBar.outerHeight(true) + 'px' });

					// animace vysunuti
					setTimeout(function () {
						$compareBar.animate({
							bottom: 0
						}, 200, function () {
							$compareBar.removeAttr('style');
						});
					}, 1000);

					_carouselInit();

					_initializeEvents.call(plugin);
				}
			});
		}
	};

	// objekt porovnavaci listy
	var CompareBar = function () {
		this.modulName = _modulName;
		this.currentTabCategory = 0;
		this.isMinimalized = false;
		this.isClosed = false;
		this.init();
	};

	// verejne metody porovnavaci listy
	CompareBar.prototype = function () {

		return {
			init: function () {
				_init.call(this);
			},
			addToCompare: function (pro_id, pnc_id) {
				_addToCompareBar.call(this, pro_id, pnc_id);
			},
			removeFromCompare: function (pro_id, pnc_id) {
				_removeFromCompareBar.call(this, pro_id, pnc_id);
			},
			removeFromCompareBarSelected: function () {
				_removeFromCompareBarSelected.call(this);
			},
			changeCategory: function (pnc_id) {
				_changeCategory.call(this, pnc_id);
			},
			close: function () {
				_close.call(this);
			}
		};
	}();


	$(document).ready(function () {
		// ulozeni instance objektu do global window po nacteni domu
		window.compareBar = new CompareBar();
	});

})(jQuery, window, document);;
var Product = function () {

	// init pluginu pro carousel s dalsimi obrazkama
	var handle_carousel_init = function () {

		if (!$().owlCarousel) {
			if (App.debug) {
				console.log('Chybí plugin owl carousel.');
			}
			return false;
		}

		var $jsCarousel = $('.js-carousel');

		// pokud na strance neni zadna gallerie
		if (0 === $jsCarousel.length) {
			return;
		}

		//var _currentPageIndex = 1, // aktualni stranka
		//	_pages = 1; // celkovy pocet stranek

		var $jsCarouselChildrens = $jsCarousel.children(),
			childrensLength = $jsCarouselChildrens.length;

		var _changeSrcImages = function (scope, size) {

			var $stage = scope.$stage,
				$images = $stage.find('.owl-lazy');

			$images.each(function () {
				var $img = $(this),
					src = $img.attr('src');

				// neco jako contiunue - proste pokud splnuje podminku tak pokracuj dale
				if (typeof src === 'undefined') {
					return true;
				}

				var srcNew = src.replace(/(\d+)(?!.*\d)/, size);

				$img.attr('src', srcNew);
			});
		};

		var _navControl = function (event) {
			var $sliderPrev = $('#slider-prev'),
				$sliderNext = $('#slider-next'),
				_currentPageIndex = Math.ceil(event.item.index / event.page.size) + 1,
				_pages = Math.ceil(event.item.count / event.page.size);

			if (_currentPageIndex === 1) {
				$sliderPrev.addClass('disabled');
			} else {
				$sliderPrev.removeClass('disabled');
			}

			if (_currentPageIndex === _pages) {
				$sliderNext.addClass('disabled');
			} else {
				$sliderNext.removeClass('disabled');
			}
		};

		// po initu
		$jsCarousel.on('initialized.owl.carousel', function (event) {
			_navControl(event);

			$(event.target).find('.cloned a').removeAttr('class data-fancybox');
			$(event.target).find('.cloned img').addClass('img-cloned');
		});

		// po dokonceni pohybu
		$jsCarousel.on('translate.owl.carousel', function (event) {
			_navControl(event);
		});

		$jsCarousel.on('resized.owl.carousel', function (event) {
			_navControl(event);
		});

		$jsCarousel.owlCarousel({
			dots: false,
			nav: false,
			loop: false,
			lazyLoad: true,
			center: false,
			responsive: {
				0: {
					items: 1,
					dots: childrensLength > 1,
					onLoadedLazy: function () {
						_changeSrcImages(this, '9');
					},
					onResized: function () {
						_changeSrcImages(this, '9');
					}
				},
				768: {
					items: 5,
					slideBy: 5
				},
				992: {
					items: 2,
					slideBy: 2
				},
				1200: {
					items: 3,
					slideBy: 3
				}
			}
		});

		$('#slider-prev').click(function () {
			$jsCarousel.trigger('prev.owl.carousel');
		});

		$('#slider-next').click(function () {
			$jsCarousel.trigger('next.owl.carousel');
		});
	};

	var handle_recommendedProducts_carousel = function () {
		if (!$().owlCarousel) {
			if (App.debug) {
				console.log('Chybí plugin owl carousel.');
			}
			return false;
		}

		var $jsCarousel = $('.products-recommended .data-product-items');
		$jsCarousel.addClass('owl-carousel');

		// pokud na strance nejsou zadne doporucene produkty
		if (0 === $jsCarousel.length) {
			return;
		}

		var $jsCarouselChildrens = $jsCarousel.children();

		// nastaveni pro carousel dle breakpointu
		var _responsiveSettings = function (defautCount) {
			var settings = {
				items: defautCount
			};

			if ($jsCarouselChildrens.length <= defautCount) {
				settings.stagePadding = 0;
				settings.nav = false;
			}

			return settings;
		}

		$jsCarousel.on('initialized.owl.carousel', function (event) {
			lazyImage('reload');
		});

		// po dokonceni pohybu
		$jsCarousel.on('translate.owl.carousel', function (event) {
			lazyImage('reload');
		});

		$jsCarousel.on('resized.owl.carousel', function (event) {
			lazyImage('reload');
		});

		$jsCarousel.owlCarousel({
			dots: false,
			nav: true,
			loop: $jsCarousel.children().length > 1,
			margin: 20,
			stagePadding: 50,
			responsive: {
				0: _responsiveSettings(1),
				480: _responsiveSettings(1),
				600: _responsiveSettings(2),
				992: _responsiveSettings(3),
				1200: _responsiveSettings(4)
			}
		});
	}

	// init pro zalozky
	var handle_tabs_init = function () {
		if (!$().tabs) {
			console.log('Chybí plugin ui tabs.');
			return false;
		}

		var $tabs = $('.js-tabs');

		// pokud na strance nejsou zadne taby
		if (0 === $tabs.length) {
			return;
		}

		var activeClass = 'nav-link--active',
			preloader = {};

		$tabs.tabs({
			show: { effect: 'fadeIn', duration: 200 },

			create: function (event, ui) {
				ui.tab.find('a').addClass(activeClass);
			},

			beforeLoad: function (event, ui) {

				ui.ajaxSettings.global = false;

				if (ui.tab.data("loaded")) {
					ui.jqXHR.abort();

					return;
				}

				var preloader = new ElxPreloader(ui.tab.find('a'));
				preloader.start();

				ui.jqXHR.success(function () {
					ui.tab.data("loaded", true);
					preloader.stop();
				});
			},

			activate: function (event, ui) {

				var $oldTab = ui.oldTab,
					$newTab = ui.newTab;

				$oldTab.find('a').removeClass(activeClass);
				$newTab.find('a').addClass(activeClass);
			}
		});
	}

	var handle_responsive_table = function () {
		var $moreInfoContainer = $('.more-details'),
			moreInfoContainer_width = $moreInfoContainer.outerWidth(),
			$tables = $moreInfoContainer.find('table');

		if ($tables.length < 1) {
			return;
		}

		console.log(moreInfoContainer_width);

		$tables.each(function () {
			var $table = $(this);

			if ($table.outerWidth() < moreInfoContainer_width) {
				return true;
			}

			$table.wrap('<div class="wrap-overflow-table"><div class="wrap-overflow-table_in"></div></div>');
		});
	}

	return {
		recommendedProductsCarousel_init: function() {
			// carousel s doporucenymi produkty
			handle_recommendedProducts_carousel();
		},
		init: function () {

			// carousel s dalsimi obrazky
			handle_carousel_init();

			// zalozky s podrobnejsim infem
			handle_tabs_init();

			// responsivni tabulky
			handle_responsive_table();
		}
	}
}();

jQuery(document).ready(function () {
	Product.init();
});

// slouzi pro prepinani jazyka u parametru nebo podrobnosti
function changeLang(el, langId) {

	$(el).parent().find('button').removeClass('selected');

	$(el).toggleClass('selected');

	$('[class*="lang-item"]').hide();

	$('.lang-item_' + langId).show();
}

// výběr cross-sellu
function selectOneCrossSell(el) {
	var pcg_id = $(el).data("pcg-id");
	if ($(el).is(":checked")) {
		$('.select-one-item#pcg_' + pcg_id + ' input').prop('checked', false);
		$(el).prop('checked', true);
	}
}

// bazar
(function ($, window, document, undefined) {

	const loadBazarData = async function (proId, dataType) {
		const ajxUrlBazarBox = g_root + '/ajaxpages/bazarbox_ajx.aspx';
		const ajxUrlBazarList = g_root + '/ajaxpages/bazarlist_ajx.aspx';

		const urlByDataType = dataType === 'list' ? ajxUrlBazarList : ajxUrlBazarBox;

		try {
			return $.ajax({
				type: 'GET',
				global: false,
				url: urlByDataType,
				data: { pro_id: proId },
				dataType: 'html',
			});
		} catch (err) {
			displayErrorMessage("Nepodařilo se načíst data pro bazarové produktu. Zkuste přenačíst stránku.");
		}

		return undefined;
	};

	// nacteni / vytvoreni seznamu variant
	const createBazarList = async function (proId) {
		const component = this;

		const $bazarList = $(await loadBazarData(proId, 'list'));

		// overeni jestli se podarilo nacist varianty produktu - pokud ne tak ukonci
		if ($bazarList.length === 0) {
			return false;
		}

		const $dropdownMenu = component.$bazarBox.find('.dropdown-menu');

		component.listLoaded = true;

		$dropdownMenu.html($bazarList);

		$dropdownMenu.find('.dropdown-item').on('click', function () {
			showLoading();
		});

		return true;
	};

	// handle metoda pro otevreni dropdownu
	const bazarBoxHandleClick = function (event) {
		const component = this;
		const $dropdownMenu = component.$bazarBox.find('.dropdown-menu');
		const $dropdownToggle = component.$bazarBox.find('.dropdown-toggle');
		const $dropdownCaret = component.$bazarBox.find('.dropdown-caret');
		const preloader = new ElxPreloader($dropdownCaret, { displayMode: 'replaceEl' });

		// pokud nejsou v dropdown-menu zadni potomci tak to znamena ze se jeste na dropdown nekliklo
		// pokusi se tedy nacit varianty a nasledne je zobrazit
		if ($dropdownMenu.children().length === 0) {
			event.preventDefault();

			// pokud vyprsela session tak prenacti stranku a tim dojde k presmerovani na login page
			if (!App.checkSession()) {
				return;
			}

			preloader.start();

			createBazarList.call(component, component.proId).then(function (result) {

				preloader.stop();

				if (result) {
					$dropdownToggle.dropdown('toggle');
				}
			});
		}
	};

	// nacteni / vytvoreni dropdownu pro varianty
	const createBazarBox = async function (proId) {
		const component = this;

		// nacteni dropdownu
		component.$bazarBox = $(await loadBazarData(proId, 'box'));

		// pokud produkt nema zadne varianty tak ukonci
		if (component.$bazarBox.length === 0) {
			return false;
		}

		component.boxLoaded = true;

		// pripojeni eventy pro otevreni nebo zavreni dropdownu
		component.$bazarBox.on('show.bs.dropdown', function (event) {
			bazarBoxHandleClick.call(component, event);
		});

		return true;
	};

	/**
	 * Metoda připojí komponentu do root elementu pokud element existuje.
	 * Dále ověří jestli se úspěšně podařilo načíst Id produktu.
	 * Spustí metodu pro vytvoření dropdownu.
	 * */
	const init = async function () {
		const component = this;

		if (!Number.isInteger(component.proId) || component.proId === 0) {
			console.error('Id produktu nenalezeno - bazarové produktu nelze načíst.');
			return;
		}

		component.$elementRoot = $('#product_bazar');

		if (component.$elementRoot.length === 0) {
			console.error('HTML prvek `product_variants` nebyl nalezen. Varianty produktu nelze tedy načíst.');
			return;
		}

		// nacteni dropdownu
		const isBazarBoxCreated = await createBazarBox.call(component, component.proId);

		if (!isBazarBoxCreated) {
			// Když se barazová nabídka nevykreslí tak schovává dropdown informací o ceně a vykreslí všedhny informace o ceně.
			const $button = $('.pro-detail_other-prices-btn');
			const $priceList = $('#proDetail_PriceList');
			$button.addClass('pro-detail_other-prices-btn--disabled');
			$priceList.addClass('list-items--full');
			return;
		}

		// pripojeni dropdownu do rootoveho elementu a zaroven vykresleni dropdownu ve strance
		component.$elementRoot.html(component.$bazarBox);
	};

	const BazarProducts = function () {
		/**
		 * Vstupní HTML element pro zobrazení komponenty.
		 * */
		this.$elementRoot = $();

		/**
		 * JQuery element reprezentující dropdown.
		 * */
		this.$bazarBox = $();

		/**
		 * Boolean jestli se podařilo načíst box pro varianty.
		 * */
		this.boxLoaded = false;

		/**
		 * Boolean jestli se podařilo načíst list s variantami.
		 * */
		this.listLoaded = false;

		/**
		 * Id produktu pro které se mají načíst varianty.
		 * */
		this.proId = Number.parseInt($('#pro_id_master').val());

		init.call(this);
	}

	$(document).ready(function () {
		new BazarProducts();
	});
})(jQuery, window, document);;
