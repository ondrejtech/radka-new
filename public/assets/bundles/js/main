/* Minification failed. Returning unminified contents.
(3863,10-11): run-time error JS1005: Expected '(': {
(3864,5-11): run-time error JS1009: Expected '}': return
(3864,5-11): run-time error JS1006: Expected ')': return
(3864,5-11): run-time error JS1008: Expected '{': return
(2891,149687-149694): run-time error JS1019: Can't have 'break' outside of loop: break e
(2891,141544-141551): run-time error JS1019: Can't have 'break' outside of loop: break e
 */
/*
Inicializace JS v zavislosti na stroji
*/

var g_root='';// = '/edsystem_b2b_cz';
var g_debug = true;
var g_loginURL='/pages/login.aspx';// = '/edsystem_b2b_cz/pages/login.aspx';

var g_region = 'cz';
var g_share = true;
var g_share_ed = true;

var wizardServiceDomain = 'https://wizard.edsystem.cz';

var objCurrency = {
	8: {
		id: 8,
		text: 'CZ',
		symbol: 'Kč'
	},
	12: {
		id: 12,
		text: 'EUR',
		symbol: '€'
	},
	34: {
	    id: 34,
	    text: 'USD',
	    symbol: '$'
	}
};
var GLOBAL_CONSENT = 'true';
;
/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-inlinesvg-input-svg-svgclippaths-touchevents-addtest-domprefixes-hasevent-mq-prefixes-setclasses-testallprops-testprop-teststyles !*/
!function (e, t, n) { function r(e, t) { return typeof e === t } function o() { var e, t, n, o, i, s, a; for (var u in _) if (_.hasOwnProperty(u)) { if (e = [], t = _[u], t.name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length)) for (n = 0; n < t.options.aliases.length; n++) e.push(t.options.aliases[n].toLowerCase()); for (o = r(t.fn, "function") ? t.fn() : t.fn, i = 0; i < e.length; i++) s = e[i], a = s.split("."), 1 === a.length ? Modernizr[a[0]] = o : (!Modernizr[a[0]] || Modernizr[a[0]] instanceof Boolean || (Modernizr[a[0]] = new Boolean(Modernizr[a[0]])), Modernizr[a[0]][a[1]] = o), w.push((o ? "" : "no-") + a.join("-")) } } function i(e) { var t = b.className, n = Modernizr._config.classPrefix || ""; if (T && (t = t.baseVal), Modernizr._config.enableJSClass) { var r = new RegExp("(^|\\s)" + n + "no-js(\\s|$)"); t = t.replace(r, "$1" + n + "js$2") } Modernizr._config.enableClasses && (t += " " + n + e.join(" " + n), T ? b.className.baseVal = t : b.className = t) } function s(e, t) { if ("object" == typeof e) for (var n in e) P(e, n) && s(n, e[n]); else { e = e.toLowerCase(); var r = e.split("."), o = Modernizr[r[0]]; if (2 == r.length && (o = o[r[1]]), "undefined" != typeof o) return Modernizr; t = "function" == typeof t ? t() : t, 1 == r.length ? Modernizr[r[0]] = t : (!Modernizr[r[0]] || Modernizr[r[0]] instanceof Boolean || (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])), Modernizr[r[0]][r[1]] = t), i([(t && 0 != t ? "" : "no-") + r.join("-")]), Modernizr._trigger(e, t) } return Modernizr } function a() { return "function" != typeof t.createElement ? t.createElement(arguments[0]) : T ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments) } function u() { var e = t.body; return e || (e = a(T ? "svg" : "body"), e.fake = !0), e } function l(e, n, r, o) { var i, s, l, f, c = "modernizr", p = a("div"), d = u(); if (parseInt(r, 10)) for (; r--;) l = a("div"), l.id = o ? o[r] : c + (r + 1), p.appendChild(l); return i = a("style"), i.type = "text/css", i.id = "s" + c, (d.fake ? d : p).appendChild(i), d.appendChild(p), i.styleSheet ? i.styleSheet.cssText = e : i.appendChild(t.createTextNode(e)), p.id = c, d.fake && (d.style.background = "", d.style.overflow = "hidden", f = b.style.overflow, b.style.overflow = "hidden", b.appendChild(d)), s = n(p, e), d.fake ? (d.parentNode.removeChild(d), b.style.overflow = f, b.offsetHeight) : p.parentNode.removeChild(p), !!s } function f(e, t) { return !!~("" + e).indexOf(t) } function c(e) { return e.replace(/([a-z])-([a-z])/g, function (e, t, n) { return t + n.toUpperCase() }).replace(/^-/, "") } function p(e, t) { return function () { return e.apply(t, arguments) } } function d(e, t, n) { var o; for (var i in e) if (e[i] in t) return n === !1 ? e[i] : (o = t[e[i]], r(o, "function") ? p(o, n || t) : o); return !1 } function m(e) { return e.replace(/([A-Z])/g, function (e, t) { return "-" + t.toLowerCase() }).replace(/^ms-/, "-ms-") } function h(t, r) { var o = t.length; if ("CSS" in e && "supports" in e.CSS) { for (; o--;) if (e.CSS.supports(m(t[o]), r)) return !0; return !1 } if ("CSSSupportsRule" in e) { for (var i = []; o--;) i.push("(" + m(t[o]) + ":" + r + ")"); return i = i.join(" or "), l("@supports (" + i + ") { #modernizr { position: absolute; } }", function (e) { return "absolute" == getComputedStyle(e, null).position }) } return n } function v(e, t, o, i) { function s() { l && (delete R.style, delete R.modElem) } if (i = r(i, "undefined") ? !1 : i, !r(o, "undefined")) { var u = h(e, o); if (!r(u, "undefined")) return u } for (var l, p, d, m, v, g = ["modernizr", "tspan", "samp"]; !R.style && g.length;) l = !0, R.modElem = a(g.shift()), R.style = R.modElem.style; for (d = e.length, p = 0; d > p; p++) if (m = e[p], v = R.style[m], f(m, "-") && (m = c(m)), R.style[m] !== n) { if (i || r(o, "undefined")) return s(), "pfx" == t ? m : !0; try { R.style[m] = o } catch (y) { } if (R.style[m] != v) return s(), "pfx" == t ? m : !0 } return s(), !1 } function g(e, t, n, o, i) { var s = e.charAt(0).toUpperCase() + e.slice(1), a = (e + " " + M.join(s + " ") + s).split(" "); return r(t, "string") || r(t, "undefined") ? v(a, t, o, i) : (a = (e + " " + E.join(s + " ") + s).split(" "), d(a, t, n)) } function y(e, t, r) { return g(e, n, n, t, r) } var w = [], _ = [], C = { _version: "3.3.1", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function (e, t) { var n = this; setTimeout(function () { t(n[e]) }, 0) }, addTest: function (e, t, n) { _.push({ name: e, fn: t, options: n }) }, addAsyncTest: function (e) { _.push({ name: null, fn: e }) } }, Modernizr = function () { }; Modernizr.prototype = C, Modernizr = new Modernizr, Modernizr.addTest("svg", !!t.createElementNS && !!t.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect); var S = C._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""]; C._prefixes = S; var b = t.documentElement, T = "svg" === b.nodeName.toLowerCase(), x = "Moz O ms Webkit", E = C._config.usePrefixes ? x.toLowerCase().split(" ") : []; C._domPrefixes = E; var P; !function () { var e = {}.hasOwnProperty; P = r(e, "undefined") || r(e.call, "undefined") ? function (e, t) { return t in e && r(e.constructor.prototype[t], "undefined") } : function (t, n) { return e.call(t, n) } }(), C._l = {}, C.on = function (e, t) { this._l[e] || (this._l[e] = []), this._l[e].push(t), Modernizr.hasOwnProperty(e) && setTimeout(function () { Modernizr._trigger(e, Modernizr[e]) }, 0) }, C._trigger = function (e, t) { if (this._l[e]) { var n = this._l[e]; setTimeout(function () { var e, r; for (e = 0; e < n.length; e++) (r = n[e])(t) }, 0), delete this._l[e] } }, Modernizr._q.push(function () { C.addTest = s }); var z = function () { function e(e, t) { var o; return e ? (t && "string" != typeof t || (t = a(t || "div")), e = "on" + e, o = e in t, !o && r && (t.setAttribute || (t = a("div")), t.setAttribute(e, ""), o = "function" == typeof t[e], t[e] !== n && (t[e] = n), t.removeAttribute(e)), o) : !1 } var r = !("onblur" in t.documentElement); return e }(); C.hasEvent = z, Modernizr.addTest("inlinesvg", function () { var e = a("div"); return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI) }); var N = a("input"), j = "autocomplete autofocus list placeholder max min multiple pattern required step".split(" "), A = {}; Modernizr.input = function (t) { for (var n = 0, r = t.length; r > n; n++) A[t[n]] = !!(t[n] in N); return A.list && (A.list = !(!a("datalist") || !e.HTMLDataListElement)), A }(j); var L = {}.toString; Modernizr.addTest("svgclippaths", function () { return !!t.createElementNS && /SVGClipPath/.test(L.call(t.createElementNS("http://www.w3.org/2000/svg", "clipPath"))) }); var q = function () { var t = e.matchMedia || e.msMatchMedia; return t ? function (e) { var n = t(e); return n && n.matches || !1 } : function (t) { var n = !1; return l("@media " + t + " { #modernizr { position: absolute; } }", function (t) { n = "absolute" == (e.getComputedStyle ? e.getComputedStyle(t, null) : t.currentStyle).position }), n } }(); C.mq = q; var k = C.testStyles = l; Modernizr.addTest("touchevents", function () { var n; if ("ontouchstart" in e || e.DocumentTouch && t instanceof DocumentTouch) n = !0; else { var r = ["@media (", S.join("touch-enabled),("), "heartz", ")", "{#modernizr{top:9px;position:absolute}}"].join(""); k(r, function (e) { n = 9 === e.offsetTop }) } return n }); var M = C._config.usePrefixes ? x.split(" ") : []; C._cssomPrefixes = M; var O = { elem: a("modernizr") }; Modernizr._q.push(function () { delete O.elem }); var R = { style: O.elem.style }; Modernizr._q.unshift(function () { delete R.style }); C.testProp = function (e, t, r) { return v([e], n, t, r) }; C.testAllProps = g, C.testAllProps = y, o(), i(w), delete C.addTest, delete C.addAsyncTest; for (var V = 0; V < Modernizr._q.length; V++) Modernizr._q[V](); e.Modernizr = Modernizr }(window, document);;
/*! jQuery v1.11.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k={},l="1.11.1",m=function(a,b){return new m.fn.init(a,b)},n=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,o=/^-ms-/,p=/-([\da-z])/gi,q=function(a,b){return b.toUpperCase()};m.fn=m.prototype={jquery:l,constructor:m,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=m.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return m.each(this,a,b)},map:function(a){return this.pushStack(m.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},m.extend=m.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||m.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(m.isPlainObject(c)||(b=m.isArray(c)))?(b?(b=!1,f=a&&m.isArray(a)?a:[]):f=a&&m.isPlainObject(a)?a:{},g[d]=m.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},m.extend({expando:"jQuery"+(l+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===m.type(a)},isArray:Array.isArray||function(a){return"array"===m.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return!m.isArray(a)&&a-parseFloat(a)>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==m.type(a)||a.nodeType||m.isWindow(a))return!1;try{if(a.constructor&&!j.call(a,"constructor")&&!j.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(k.ownLast)for(b in a)return j.call(a,b);for(b in a);return void 0===b||j.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(b){b&&m.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(o,"ms-").replace(p,q)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=r(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(n,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(r(Object(a))?m.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(g)return g.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=r(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(f=a[b],b=a,a=f),m.isFunction(a)?(c=d.call(arguments,2),e=function(){return a.apply(b||this,c.concat(d.call(arguments)))},e.guid=a.guid=a.guid||m.guid++,e):void 0},now:function(){return+new Date},support:k}),m.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function r(a){var b=a.length,c=m.type(a);return"function"===c||m.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var s=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+-new Date,v=a.document,w=0,x=0,y=gb(),z=gb(),A=gb(),B=function(a,b){return a===b&&(l=!0),0},C="undefined",D=1<<31,E={}.hasOwnProperty,F=[],G=F.pop,H=F.push,I=F.push,J=F.slice,K=F.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},L="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",N="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",O=N.replace("w","w#"),P="\\["+M+"*("+N+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+O+"))|)"+M+"*\\]",Q=":("+N+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+P+")*)|.*)\\)|)",R=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),S=new RegExp("^"+M+"*,"+M+"*"),T=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),V=new RegExp(Q),W=new RegExp("^"+O+"$"),X={ID:new RegExp("^#("+N+")"),CLASS:new RegExp("^\\.("+N+")"),TAG:new RegExp("^("+N.replace("w","w*")+")"),ATTR:new RegExp("^"+P),PSEUDO:new RegExp("^"+Q),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+L+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,Z=/^h\d$/i,$=/^[^{]+\{\s*\[native \w/,_=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ab=/[+~]/,bb=/'|\\/g,cb=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),db=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{I.apply(F=J.call(v.childNodes),v.childNodes),F[v.childNodes.length].nodeType}catch(eb){I={apply:F.length?function(a,b){H.apply(a,J.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fb(a,b,d,e){var f,h,j,k,l,o,r,s,w,x;if((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,d=d||[],!a||"string"!=typeof a)return d;if(1!==(k=b.nodeType)&&9!==k)return[];if(p&&!e){if(f=_.exec(a))if(j=f[1]){if(9===k){if(h=b.getElementById(j),!h||!h.parentNode)return d;if(h.id===j)return d.push(h),d}else if(b.ownerDocument&&(h=b.ownerDocument.getElementById(j))&&t(b,h)&&h.id===j)return d.push(h),d}else{if(f[2])return I.apply(d,b.getElementsByTagName(a)),d;if((j=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return I.apply(d,b.getElementsByClassName(j)),d}if(c.qsa&&(!q||!q.test(a))){if(s=r=u,w=b,x=9===k&&a,1===k&&"object"!==b.nodeName.toLowerCase()){o=g(a),(r=b.getAttribute("id"))?s=r.replace(bb,"\\$&"):b.setAttribute("id",s),s="[id='"+s+"'] ",l=o.length;while(l--)o[l]=s+qb(o[l]);w=ab.test(a)&&ob(b.parentNode)||b,x=o.join(",")}if(x)try{return I.apply(d,w.querySelectorAll(x)),d}catch(y){}finally{r||b.removeAttribute("id")}}}return i(a.replace(R,"$1"),b,d,e)}function gb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function hb(a){return a[u]=!0,a}function ib(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function jb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function kb(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||D)-(~a.sourceIndex||D);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function lb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function mb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function nb(a){return hb(function(b){return b=+b,hb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function ob(a){return a&&typeof a.getElementsByTagName!==C&&a}c=fb.support={},f=fb.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fb.setDocument=function(a){var b,e=a?a.ownerDocument||a:v,g=e.defaultView;return e!==n&&9===e.nodeType&&e.documentElement?(n=e,o=e.documentElement,p=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){m()},!1):g.attachEvent&&g.attachEvent("onunload",function(){m()})),c.attributes=ib(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ib(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=$.test(e.getElementsByClassName)&&ib(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=ib(function(a){return o.appendChild(a).id=u,!e.getElementsByName||!e.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==C&&p){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){var c=typeof a.getAttributeNode!==C&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==C?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==C&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=$.test(e.querySelectorAll))&&(ib(function(a){a.innerHTML="<select msallowclip=''><option selected=''></option></select>",a.querySelectorAll("[msallowclip^='']").length&&q.push("[*^$]="+M+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+M+"*(?:value|"+L+")"),a.querySelectorAll(":checked").length||q.push(":checked")}),ib(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+M+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=$.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ib(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",Q)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=$.test(o.compareDocumentPosition),t=b||$.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===v&&t(v,a)?-1:b===e||b.ownerDocument===v&&t(v,b)?1:k?K.call(k,a)-K.call(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],i=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:k?K.call(k,a)-K.call(k,b):0;if(f===g)return kb(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)i.unshift(c);while(h[d]===i[d])d++;return d?kb(h[d],i[d]):h[d]===v?-1:i[d]===v?1:0},e):n},fb.matches=function(a,b){return fb(a,null,null,b)},fb.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(U,"='$1']"),!(!c.matchesSelector||!p||r&&r.test(b)||q&&q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fb(b,n,null,[a]).length>0},fb.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fb.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&E.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fb.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fb.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fb.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fb.selectors={cacheLength:50,createPseudo:hb,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(cb,db),a[3]=(a[3]||a[4]||a[5]||"").replace(cb,db),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fb.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fb.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return X.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&V.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(cb,db).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+M+")"+a+"("+M+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==C&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fb.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){k=q[u]||(q[u]={}),j=k[a]||[],n=j[0]===w&&j[1],m=j[0]===w&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[w,n,m];break}}else if(s&&(j=(b[u]||(b[u]={}))[a])&&j[0]===w)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(s&&((l[u]||(l[u]={}))[a]=[w,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fb.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?hb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=K.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:hb(function(a){var b=[],c=[],d=h(a.replace(R,"$1"));return d[u]?hb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:hb(function(a){return function(b){return fb(a,b).length>0}}),contains:hb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:hb(function(a){return W.test(a||"")||fb.error("unsupported lang: "+a),a=a.replace(cb,db).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Z.test(a.nodeName)},input:function(a){return Y.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:nb(function(){return[0]}),last:nb(function(a,b){return[b-1]}),eq:nb(function(a,b,c){return[0>c?c+b:c]}),even:nb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:nb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:nb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:nb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=lb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=mb(b);function pb(){}pb.prototype=d.filters=d.pseudos,d.setFilters=new pb,g=fb.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=S.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=T.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(R," ")}),h=h.slice(c.length));for(g in d.filter)!(e=X[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fb.error(a):z(a,i).slice(0)};function qb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function rb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[u]||(b[u]={}),(h=i[d])&&h[0]===w&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function sb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function tb(a,b,c){for(var d=0,e=b.length;e>d;d++)fb(a,b[d],c);return c}function ub(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function vb(a,b,c,d,e,f){return d&&!d[u]&&(d=vb(d)),e&&!e[u]&&(e=vb(e,f)),hb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||tb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ub(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ub(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?K.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ub(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):I.apply(g,r)})}function wb(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=rb(function(a){return a===b},h,!0),l=rb(function(a){return K.call(b,a)>-1},h,!0),m=[function(a,c,d){return!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>i;i++)if(c=d.relative[a[i].type])m=[rb(sb(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return vb(i>1&&sb(m),i>1&&qb(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(R,"$1"),c,e>i&&wb(a.slice(i,e)),f>e&&wb(a=a.slice(e)),f>e&&qb(a))}m.push(c)}return sb(m)}function xb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,m,o,p=0,q="0",r=f&&[],s=[],t=j,u=f||e&&d.find.TAG("*",k),v=w+=null==t?1:Math.random()||.1,x=u.length;for(k&&(j=g!==n&&g);q!==x&&null!=(l=u[q]);q++){if(e&&l){m=0;while(o=a[m++])if(o(l,g,h)){i.push(l);break}k&&(w=v)}c&&((l=!o&&l)&&p--,f&&r.push(l))}if(p+=q,c&&q!==p){m=0;while(o=b[m++])o(r,s,g,h);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=G.call(i));s=ub(s)}I.apply(i,s),k&&!f&&s.length>0&&p+b.length>1&&fb.uniqueSort(i)}return k&&(w=v,j=t),r};return c?hb(f):f}return h=fb.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wb(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xb(e,d)),f.selector=a}return f},i=fb.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(cb,db),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=X.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(cb,db),ab.test(j[0].type)&&ob(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qb(j),!a)return I.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,ab.test(a)&&ob(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ib(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ib(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||jb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ib(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||jb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ib(function(a){return null==a.getAttribute("disabled")})||jb(L,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fb}(a);m.find=s,m.expr=s.selectors,m.expr[":"]=m.expr.pseudos,m.unique=s.uniqueSort,m.text=s.getText,m.isXMLDoc=s.isXML,m.contains=s.contains;var t=m.expr.match.needsContext,u=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,v=/^.[^:#\[\.,]*$/;function w(a,b,c){if(m.isFunction(b))return m.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return m.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(v.test(b))return m.filter(b,a,c);b=m.filter(b,a)}return m.grep(a,function(a){return m.inArray(a,b)>=0!==c})}m.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?m.find.matchesSelector(d,a)?[d]:[]:m.find.matches(a,m.grep(b,function(a){return 1===a.nodeType}))},m.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(m(a).filter(function(){for(b=0;e>b;b++)if(m.contains(d[b],this))return!0}));for(b=0;e>b;b++)m.find(a,d[b],c);return c=this.pushStack(e>1?m.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(w(this,a||[],!1))},not:function(a){return this.pushStack(w(this,a||[],!0))},is:function(a){return!!w(this,"string"==typeof a&&t.test(a)?m(a):a||[],!1).length}});var x,y=a.document,z=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,A=m.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:z.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||x).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof m?b[0]:b,m.merge(this,m.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:y,!0)),u.test(c[1])&&m.isPlainObject(b))for(c in b)m.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}if(d=y.getElementById(c[2]),d&&d.parentNode){if(d.id!==c[2])return x.find(a);this.length=1,this[0]=d}return this.context=y,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):m.isFunction(a)?"undefined"!=typeof x.ready?x.ready(a):a(m):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),m.makeArray(a,this))};A.prototype=m.fn,x=m(y);var B=/^(?:parents|prev(?:Until|All))/,C={children:!0,contents:!0,next:!0,prev:!0};m.extend({dir:function(a,b,c){var d=[],e=a[b];while(e&&9!==e.nodeType&&(void 0===c||1!==e.nodeType||!m(e).is(c)))1===e.nodeType&&d.push(e),e=e[b];return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),m.fn.extend({has:function(a){var b,c=m(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(m.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=t.test(a)||"string"!=typeof a?m(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&m.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?m.unique(f):f)},index:function(a){return a?"string"==typeof a?m.inArray(this[0],m(a)):m.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(m.unique(m.merge(this.get(),m(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function D(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}m.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return m.dir(a,"parentNode")},parentsUntil:function(a,b,c){return m.dir(a,"parentNode",c)},next:function(a){return D(a,"nextSibling")},prev:function(a){return D(a,"previousSibling")},nextAll:function(a){return m.dir(a,"nextSibling")},prevAll:function(a){return m.dir(a,"previousSibling")},nextUntil:function(a,b,c){return m.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return m.dir(a,"previousSibling",c)},siblings:function(a){return m.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return m.sibling(a.firstChild)},contents:function(a){return m.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:m.merge([],a.childNodes)}},function(a,b){m.fn[a]=function(c,d){var e=m.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=m.filter(d,e)),this.length>1&&(C[a]||(e=m.unique(e)),B.test(a)&&(e=e.reverse())),this.pushStack(e)}});var E=/\S+/g,F={};function G(a){var b=F[a]={};return m.each(a.match(E)||[],function(a,c){b[c]=!0}),b}m.Callbacks=function(a){a="string"==typeof a?F[a]||G(a):m.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(c=a.memory&&l,d=!0,f=g||0,g=0,e=h.length,b=!0;h&&e>f;f++)if(h[f].apply(l[0],l[1])===!1&&a.stopOnFalse){c=!1;break}b=!1,h&&(i?i.length&&j(i.shift()):c?h=[]:k.disable())},k={add:function(){if(h){var d=h.length;!function f(b){m.each(b,function(b,c){var d=m.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&f(c)})}(arguments),b?e=h.length:c&&(g=d,j(c))}return this},remove:function(){return h&&m.each(arguments,function(a,c){var d;while((d=m.inArray(c,h,d))>-1)h.splice(d,1),b&&(e>=d&&e--,f>=d&&f--)}),this},has:function(a){return a?m.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],e=0,this},disable:function(){return h=i=c=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,c||k.disable(),this},locked:function(){return!i},fireWith:function(a,c){return!h||d&&!i||(c=c||[],c=[a,c.slice?c.slice():c],b?i.push(c):j(c)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!d}};return k},m.extend({Deferred:function(a){var b=[["resolve","done",m.Callbacks("once memory"),"resolved"],["reject","fail",m.Callbacks("once memory"),"rejected"],["notify","progress",m.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return m.Deferred(function(c){m.each(b,function(b,f){var g=m.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&m.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?m.extend(a,d):d}},e={};return d.pipe=d.then,m.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&m.isFunction(a.promise)?e:0,g=1===f?a:m.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&m.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var H;m.fn.ready=function(a){return m.ready.promise().done(a),this},m.extend({isReady:!1,readyWait:1,holdReady:function(a){a?m.readyWait++:m.ready(!0)},ready:function(a){if(a===!0?!--m.readyWait:!m.isReady){if(!y.body)return setTimeout(m.ready);m.isReady=!0,a!==!0&&--m.readyWait>0||(H.resolveWith(y,[m]),m.fn.triggerHandler&&(m(y).triggerHandler("ready"),m(y).off("ready")))}}});function I(){y.addEventListener?(y.removeEventListener("DOMContentLoaded",J,!1),a.removeEventListener("load",J,!1)):(y.detachEvent("onreadystatechange",J),a.detachEvent("onload",J))}function J(){(y.addEventListener||"load"===event.type||"complete"===y.readyState)&&(I(),m.ready())}m.ready.promise=function(b){if(!H)if(H=m.Deferred(),"complete"===y.readyState)setTimeout(m.ready);else if(y.addEventListener)y.addEventListener("DOMContentLoaded",J,!1),a.addEventListener("load",J,!1);else{y.attachEvent("onreadystatechange",J),a.attachEvent("onload",J);var c=!1;try{c=null==a.frameElement&&y.documentElement}catch(d){}c&&c.doScroll&&!function e(){if(!m.isReady){try{c.doScroll("left")}catch(a){return setTimeout(e,50)}I(),m.ready()}}()}return H.promise(b)};var K="undefined",L;for(L in m(k))break;k.ownLast="0"!==L,k.inlineBlockNeedsLayout=!1,m(function(){var a,b,c,d;c=y.getElementsByTagName("body")[0],c&&c.style&&(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),typeof b.style.zoom!==K&&(b.style.cssText="display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1",k.inlineBlockNeedsLayout=a=3===b.offsetWidth,a&&(c.style.zoom=1)),c.removeChild(d))}),function(){var a=y.createElement("div");if(null==k.deleteExpando){k.deleteExpando=!0;try{delete a.test}catch(b){k.deleteExpando=!1}}a=null}(),m.acceptData=function(a){var b=m.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b};var M=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,N=/([A-Z])/g;function O(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(N,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:M.test(c)?m.parseJSON(c):c}catch(e){}m.data(a,b,c)}else c=void 0}return c}function P(a){var b;for(b in a)if(("data"!==b||!m.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function Q(a,b,d,e){if(m.acceptData(a)){var f,g,h=m.expando,i=a.nodeType,j=i?m.cache:a,k=i?a[h]:a[h]&&h;
if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||m.guid++:h),j[k]||(j[k]=i?{}:{toJSON:m.noop}),("object"==typeof b||"function"==typeof b)&&(e?j[k]=m.extend(j[k],b):j[k].data=m.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[m.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[m.camelCase(b)])):f=g,f}}function R(a,b,c){if(m.acceptData(a)){var d,e,f=a.nodeType,g=f?m.cache:a,h=f?a[m.expando]:m.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){m.isArray(b)?b=b.concat(m.map(b,m.camelCase)):b in d?b=[b]:(b=m.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!P(d):!m.isEmptyObject(d))return}(c||(delete g[h].data,P(g[h])))&&(f?m.cleanData([a],!0):k.deleteExpando||g!=g.window?delete g[h]:g[h]=null)}}}m.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?m.cache[a[m.expando]]:a[m.expando],!!a&&!P(a)},data:function(a,b,c){return Q(a,b,c)},removeData:function(a,b){return R(a,b)},_data:function(a,b,c){return Q(a,b,c,!0)},_removeData:function(a,b){return R(a,b,!0)}}),m.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=m.data(f),1===f.nodeType&&!m._data(f,"parsedAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=m.camelCase(d.slice(5)),O(f,d,e[d])));m._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){m.data(this,a)}):arguments.length>1?this.each(function(){m.data(this,a,b)}):f?O(f,a,m.data(f,a)):void 0},removeData:function(a){return this.each(function(){m.removeData(this,a)})}}),m.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=m._data(a,b),c&&(!d||m.isArray(c)?d=m._data(a,b,m.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=m.queue(a,b),d=c.length,e=c.shift(),f=m._queueHooks(a,b),g=function(){m.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return m._data(a,c)||m._data(a,c,{empty:m.Callbacks("once memory").add(function(){m._removeData(a,b+"queue"),m._removeData(a,c)})})}}),m.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?m.queue(this[0],a):void 0===b?this:this.each(function(){var c=m.queue(this,a,b);m._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&m.dequeue(this,a)})},dequeue:function(a){return this.each(function(){m.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=m.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=m._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var S=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,T=["Top","Right","Bottom","Left"],U=function(a,b){return a=b||a,"none"===m.css(a,"display")||!m.contains(a.ownerDocument,a)},V=m.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===m.type(c)){e=!0;for(h in c)m.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,m.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(m(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},W=/^(?:checkbox|radio)$/i;!function(){var a=y.createElement("input"),b=y.createElement("div"),c=y.createDocumentFragment();if(b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",k.leadingWhitespace=3===b.firstChild.nodeType,k.tbody=!b.getElementsByTagName("tbody").length,k.htmlSerialize=!!b.getElementsByTagName("link").length,k.html5Clone="<:nav></:nav>"!==y.createElement("nav").cloneNode(!0).outerHTML,a.type="checkbox",a.checked=!0,c.appendChild(a),k.appendChecked=a.checked,b.innerHTML="<textarea>x</textarea>",k.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue,c.appendChild(b),b.innerHTML="<input type='radio' checked='checked' name='t'/>",k.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,k.noCloneEvent=!0,b.attachEvent&&(b.attachEvent("onclick",function(){k.noCloneEvent=!1}),b.cloneNode(!0).click()),null==k.deleteExpando){k.deleteExpando=!0;try{delete b.test}catch(d){k.deleteExpando=!1}}}(),function(){var b,c,d=y.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(k[b+"Bubbles"]=c in a)||(d.setAttribute(c,"t"),k[b+"Bubbles"]=d.attributes[c].expando===!1);d=null}();var X=/^(?:input|select|textarea)$/i,Y=/^key/,Z=/^(?:mouse|pointer|contextmenu)|click/,$=/^(?:focusinfocus|focusoutblur)$/,_=/^([^.]*)(?:\.(.+)|)$/;function ab(){return!0}function bb(){return!1}function cb(){try{return y.activeElement}catch(a){}}m.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,n,o,p,q,r=m._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=m.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return typeof m===K||a&&m.event.triggered===a.type?void 0:m.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(E)||[""],h=b.length;while(h--)f=_.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=m.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=m.event.special[o]||{},l=m.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&m.expr.match.needsContext.test(e),namespace:p.join(".")},i),(n=g[o])||(n=g[o]=[],n.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?n.splice(n.delegateCount++,0,l):n.push(l),m.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,n,o,p,q,r=m.hasData(a)&&m._data(a);if(r&&(k=r.events)){b=(b||"").match(E)||[""],j=b.length;while(j--)if(h=_.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=m.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,n=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=n.length;while(f--)g=n[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(n.splice(f,1),g.selector&&n.delegateCount--,l.remove&&l.remove.call(a,g));i&&!n.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||m.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)m.event.remove(a,o+b[j],c,d,!0);m.isEmptyObject(k)&&(delete r.handle,m._removeData(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,l,n,o=[d||y],p=j.call(b,"type")?b.type:b,q=j.call(b,"namespace")?b.namespace.split("."):[];if(h=l=d=d||y,3!==d.nodeType&&8!==d.nodeType&&!$.test(p+m.event.triggered)&&(p.indexOf(".")>=0&&(q=p.split("."),p=q.shift(),q.sort()),g=p.indexOf(":")<0&&"on"+p,b=b[m.expando]?b:new m.Event(p,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=q.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+q.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:m.makeArray(c,[b]),k=m.event.special[p]||{},e||!k.trigger||k.trigger.apply(d,c)!==!1)){if(!e&&!k.noBubble&&!m.isWindow(d)){for(i=k.delegateType||p,$.test(i+p)||(h=h.parentNode);h;h=h.parentNode)o.push(h),l=h;l===(d.ownerDocument||y)&&o.push(l.defaultView||l.parentWindow||a)}n=0;while((h=o[n++])&&!b.isPropagationStopped())b.type=n>1?i:k.bindType||p,f=(m._data(h,"events")||{})[b.type]&&m._data(h,"handle"),f&&f.apply(h,c),f=g&&h[g],f&&f.apply&&m.acceptData(h)&&(b.result=f.apply(h,c),b.result===!1&&b.preventDefault());if(b.type=p,!e&&!b.isDefaultPrevented()&&(!k._default||k._default.apply(o.pop(),c)===!1)&&m.acceptData(d)&&g&&d[p]&&!m.isWindow(d)){l=d[g],l&&(d[g]=null),m.event.triggered=p;try{d[p]()}catch(r){}m.event.triggered=void 0,l&&(d[g]=l)}return b.result}},dispatch:function(a){a=m.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(m._data(this,"events")||{})[a.type]||[],k=m.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=m.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,g=0;while((e=f.handlers[g++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(e.namespace))&&(a.handleObj=e,a.data=e.data,c=((m.event.special[e.origType]||{}).handle||e.handler).apply(f.elem,i),void 0!==c&&(a.result=c)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(e=[],f=0;h>f;f++)d=b[f],c=d.selector+" ",void 0===e[c]&&(e[c]=d.needsContext?m(c,this).index(i)>=0:m.find(c,this,null,[i]).length),e[c]&&e.push(d);e.length&&g.push({elem:i,handlers:e})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[m.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=Z.test(e)?this.mouseHooks:Y.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new m.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=f.srcElement||y),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,g.filter?g.filter(a,f):a},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button,g=b.fromElement;return null==a.pageX&&null!=b.clientX&&(d=a.target.ownerDocument||y,e=d.documentElement,c=d.body,a.pageX=b.clientX+(e&&e.scrollLeft||c&&c.scrollLeft||0)-(e&&e.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||c&&c.scrollTop||0)-(e&&e.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&g&&(a.relatedTarget=g===a.target?b.toElement:g),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==cb()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===cb()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return m.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return m.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=m.extend(new m.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?m.event.trigger(e,null,b):m.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},m.removeEvent=y.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]===K&&(a[d]=null),a.detachEvent(d,c))},m.Event=function(a,b){return this instanceof m.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?ab:bb):this.type=a,b&&m.extend(this,b),this.timeStamp=a&&a.timeStamp||m.now(),void(this[m.expando]=!0)):new m.Event(a,b)},m.Event.prototype={isDefaultPrevented:bb,isPropagationStopped:bb,isImmediatePropagationStopped:bb,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=ab,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=ab,a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=ab,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},m.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){m.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!m.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),k.submitBubbles||(m.event.special.submit={setup:function(){return m.nodeName(this,"form")?!1:void m.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=m.nodeName(b,"input")||m.nodeName(b,"button")?b.form:void 0;c&&!m._data(c,"submitBubbles")&&(m.event.add(c,"submit._submit",function(a){a._submit_bubble=!0}),m._data(c,"submitBubbles",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&m.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return m.nodeName(this,"form")?!1:void m.event.remove(this,"._submit")}}),k.changeBubbles||(m.event.special.change={setup:function(){return X.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(m.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),m.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),m.event.simulate("change",this,a,!0)})),!1):void m.event.add(this,"beforeactivate._change",function(a){var b=a.target;X.test(b.nodeName)&&!m._data(b,"changeBubbles")&&(m.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||m.event.simulate("change",this.parentNode,a,!0)}),m._data(b,"changeBubbles",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return m.event.remove(this,"._change"),!X.test(this.nodeName)}}),k.focusinBubbles||m.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){m.event.simulate(b,a.target,m.event.fix(a),!0)};m.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=m._data(d,b);e||d.addEventListener(a,c,!0),m._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=m._data(d,b)-1;e?m._data(d,b,e):(d.removeEventListener(a,c,!0),m._removeData(d,b))}}}),m.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(f in a)this.on(f,b,c,a[f],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=bb;else if(!d)return this;return 1===e&&(g=d,d=function(a){return m().off(a),g.apply(this,arguments)},d.guid=g.guid||(g.guid=m.guid++)),this.each(function(){m.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,m(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=bb),this.each(function(){m.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){m.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?m.event.trigger(a,b,c,!0):void 0}});function db(a){var b=eb.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}var eb="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",fb=/ jQuery\d+="(?:null|\d+)"/g,gb=new RegExp("<(?:"+eb+")[\\s/>]","i"),hb=/^\s+/,ib=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,jb=/<([\w:]+)/,kb=/<tbody/i,lb=/<|&#?\w+;/,mb=/<(?:script|style|link)/i,nb=/checked\s*(?:[^=]|=\s*.checked.)/i,ob=/^$|\/(?:java|ecma)script/i,pb=/^true\/(.*)/,qb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,rb={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:k.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},sb=db(y),tb=sb.appendChild(y.createElement("div"));rb.optgroup=rb.option,rb.tbody=rb.tfoot=rb.colgroup=rb.caption=rb.thead,rb.th=rb.td;function ub(a,b){var c,d,e=0,f=typeof a.getElementsByTagName!==K?a.getElementsByTagName(b||"*"):typeof a.querySelectorAll!==K?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||m.nodeName(d,b)?f.push(d):m.merge(f,ub(d,b));return void 0===b||b&&m.nodeName(a,b)?m.merge([a],f):f}function vb(a){W.test(a.type)&&(a.defaultChecked=a.checked)}function wb(a,b){return m.nodeName(a,"table")&&m.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function xb(a){return a.type=(null!==m.find.attr(a,"type"))+"/"+a.type,a}function yb(a){var b=pb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function zb(a,b){for(var c,d=0;null!=(c=a[d]);d++)m._data(c,"globalEval",!b||m._data(b[d],"globalEval"))}function Ab(a,b){if(1===b.nodeType&&m.hasData(a)){var c,d,e,f=m._data(a),g=m._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)m.event.add(b,c,h[c][d])}g.data&&(g.data=m.extend({},g.data))}}function Bb(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!k.noCloneEvent&&b[m.expando]){e=m._data(b);for(d in e.events)m.removeEvent(b,d,e.handle);b.removeAttribute(m.expando)}"script"===c&&b.text!==a.text?(xb(b).text=a.text,yb(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),k.html5Clone&&a.innerHTML&&!m.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&W.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}}m.extend({clone:function(a,b,c){var d,e,f,g,h,i=m.contains(a.ownerDocument,a);if(k.html5Clone||m.isXMLDoc(a)||!gb.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(tb.innerHTML=a.outerHTML,tb.removeChild(f=tb.firstChild)),!(k.noCloneEvent&&k.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||m.isXMLDoc(a)))for(d=ub(f),h=ub(a),g=0;null!=(e=h[g]);++g)d[g]&&Bb(e,d[g]);if(b)if(c)for(h=h||ub(a),d=d||ub(f),g=0;null!=(e=h[g]);g++)Ab(e,d[g]);else Ab(a,f);return d=ub(f,"script"),d.length>0&&zb(d,!i&&ub(a,"script")),d=h=e=null,f},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,l,n=a.length,o=db(b),p=[],q=0;n>q;q++)if(f=a[q],f||0===f)if("object"===m.type(f))m.merge(p,f.nodeType?[f]:f);else if(lb.test(f)){h=h||o.appendChild(b.createElement("div")),i=(jb.exec(f)||["",""])[1].toLowerCase(),l=rb[i]||rb._default,h.innerHTML=l[1]+f.replace(ib,"<$1></$2>")+l[2],e=l[0];while(e--)h=h.lastChild;if(!k.leadingWhitespace&&hb.test(f)&&p.push(b.createTextNode(hb.exec(f)[0])),!k.tbody){f="table"!==i||kb.test(f)?"<table>"!==l[1]||kb.test(f)?0:h:h.firstChild,e=f&&f.childNodes.length;while(e--)m.nodeName(j=f.childNodes[e],"tbody")&&!j.childNodes.length&&f.removeChild(j)}m.merge(p,h.childNodes),h.textContent="";while(h.firstChild)h.removeChild(h.firstChild);h=o.lastChild}else p.push(b.createTextNode(f));h&&o.removeChild(h),k.appendChecked||m.grep(ub(p,"input"),vb),q=0;while(f=p[q++])if((!d||-1===m.inArray(f,d))&&(g=m.contains(f.ownerDocument,f),h=ub(o.appendChild(f),"script"),g&&zb(h),c)){e=0;while(f=h[e++])ob.test(f.type||"")&&c.push(f)}return h=null,o},cleanData:function(a,b){for(var d,e,f,g,h=0,i=m.expando,j=m.cache,l=k.deleteExpando,n=m.event.special;null!=(d=a[h]);h++)if((b||m.acceptData(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)n[e]?m.event.remove(d,e):m.removeEvent(d,e,g.handle);j[f]&&(delete j[f],l?delete d[i]:typeof d.removeAttribute!==K?d.removeAttribute(i):d[i]=null,c.push(f))}}}),m.fn.extend({text:function(a){return V(this,function(a){return void 0===a?m.text(this):this.empty().append((this[0]&&this[0].ownerDocument||y).createTextNode(a))},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=wb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=wb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?m.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||m.cleanData(ub(c)),c.parentNode&&(b&&m.contains(c.ownerDocument,c)&&zb(ub(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&m.cleanData(ub(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&m.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return m.clone(this,a,b)})},html:function(a){return V(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(fb,""):void 0;if(!("string"!=typeof a||mb.test(a)||!k.htmlSerialize&&gb.test(a)||!k.leadingWhitespace&&hb.test(a)||rb[(jb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(ib,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(m.cleanData(ub(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,m.cleanData(ub(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,l=this.length,n=this,o=l-1,p=a[0],q=m.isFunction(p);if(q||l>1&&"string"==typeof p&&!k.checkClone&&nb.test(p))return this.each(function(c){var d=n.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(l&&(i=m.buildFragment(a,this[0].ownerDocument,!1,this),c=i.firstChild,1===i.childNodes.length&&(i=c),c)){for(g=m.map(ub(i,"script"),xb),f=g.length;l>j;j++)d=i,j!==o&&(d=m.clone(d,!0,!0),f&&m.merge(g,ub(d,"script"))),b.call(this[j],d,j);if(f)for(h=g[g.length-1].ownerDocument,m.map(g,yb),j=0;f>j;j++)d=g[j],ob.test(d.type||"")&&!m._data(d,"globalEval")&&m.contains(h,d)&&(d.src?m._evalUrl&&m._evalUrl(d.src):m.globalEval((d.text||d.textContent||d.innerHTML||"").replace(qb,"")));i=c=null}return this}}),m.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){m.fn[a]=function(a){for(var c,d=0,e=[],g=m(a),h=g.length-1;h>=d;d++)c=d===h?this:this.clone(!0),m(g[d])[b](c),f.apply(e,c.get());return this.pushStack(e)}});var Cb,Db={};function Eb(b,c){var d,e=m(c.createElement(b)).appendTo(c.body),f=a.getDefaultComputedStyle&&(d=a.getDefaultComputedStyle(e[0]))?d.display:m.css(e[0],"display");return e.detach(),f}function Fb(a){var b=y,c=Db[a];return c||(c=Eb(a,b),"none"!==c&&c||(Cb=(Cb||m("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Cb[0].contentWindow||Cb[0].contentDocument).document,b.write(),b.close(),c=Eb(a,b),Cb.detach()),Db[a]=c),c}!function(){var a;k.shrinkWrapBlocks=function(){if(null!=a)return a;a=!1;var b,c,d;return c=y.getElementsByTagName("body")[0],c&&c.style?(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),typeof b.style.zoom!==K&&(b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1",b.appendChild(y.createElement("div")).style.width="5px",a=3!==b.offsetWidth),c.removeChild(d),a):void 0}}();var Gb=/^margin/,Hb=new RegExp("^("+S+")(?!px)[a-z%]+$","i"),Ib,Jb,Kb=/^(top|right|bottom|left)$/;a.getComputedStyle?(Ib=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)},Jb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ib(a),g=c?c.getPropertyValue(b)||c[b]:void 0,c&&(""!==g||m.contains(a.ownerDocument,a)||(g=m.style(a,b)),Hb.test(g)&&Gb.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0===g?g:g+""}):y.documentElement.currentStyle&&(Ib=function(a){return a.currentStyle},Jb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ib(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Hb.test(g)&&!Kb.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Lb(a,b){return{get:function(){var c=a();if(null!=c)return c?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d,e,f,g,h;if(b=y.createElement("div"),b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",d=b.getElementsByTagName("a")[0],c=d&&d.style){c.cssText="float:left;opacity:.5",k.opacity="0.5"===c.opacity,k.cssFloat=!!c.cssFloat,b.style.backgroundClip="content-box",b.cloneNode(!0).style.backgroundClip="",k.clearCloneStyle="content-box"===b.style.backgroundClip,k.boxSizing=""===c.boxSizing||""===c.MozBoxSizing||""===c.WebkitBoxSizing,m.extend(k,{reliableHiddenOffsets:function(){return null==g&&i(),g},boxSizingReliable:function(){return null==f&&i(),f},pixelPosition:function(){return null==e&&i(),e},reliableMarginRight:function(){return null==h&&i(),h}});function i(){var b,c,d,i;c=y.getElementsByTagName("body")[0],c&&c.style&&(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),b.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute",e=f=!1,h=!0,a.getComputedStyle&&(e="1%"!==(a.getComputedStyle(b,null)||{}).top,f="4px"===(a.getComputedStyle(b,null)||{width:"4px"}).width,i=b.appendChild(y.createElement("div")),i.style.cssText=b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",i.style.marginRight=i.style.width="0",b.style.width="1px",h=!parseFloat((a.getComputedStyle(i,null)||{}).marginRight)),b.innerHTML="<table><tr><td></td><td>t</td></tr></table>",i=b.getElementsByTagName("td"),i[0].style.cssText="margin:0;border:0;padding:0;display:none",g=0===i[0].offsetHeight,g&&(i[0].style.display="",i[1].style.display="none",g=0===i[0].offsetHeight),c.removeChild(d))}}}(),m.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var Mb=/alpha\([^)]*\)/i,Nb=/opacity\s*=\s*([^)]*)/,Ob=/^(none|table(?!-c[ea]).+)/,Pb=new RegExp("^("+S+")(.*)$","i"),Qb=new RegExp("^([+-])=("+S+")","i"),Rb={position:"absolute",visibility:"hidden",display:"block"},Sb={letterSpacing:"0",fontWeight:"400"},Tb=["Webkit","O","Moz","ms"];function Ub(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=Tb.length;while(e--)if(b=Tb[e]+c,b in a)return b;return d}function Vb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=m._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&U(d)&&(f[g]=m._data(d,"olddisplay",Fb(d.nodeName)))):(e=U(d),(c&&"none"!==c||!e)&&m._data(d,"olddisplay",e?c:m.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Wb(a,b,c){var d=Pb.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Xb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=m.css(a,c+T[f],!0,e)),d?("content"===c&&(g-=m.css(a,"padding"+T[f],!0,e)),"margin"!==c&&(g-=m.css(a,"border"+T[f]+"Width",!0,e))):(g+=m.css(a,"padding"+T[f],!0,e),"padding"!==c&&(g+=m.css(a,"border"+T[f]+"Width",!0,e)));return g}function Yb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Ib(a),g=k.boxSizing&&"border-box"===m.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Jb(a,b,f),(0>e||null==e)&&(e=a.style[b]),Hb.test(e))return e;d=g&&(k.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Xb(a,b,c||(g?"border":"content"),d,f)+"px"}m.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Jb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":k.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=m.camelCase(b),i=a.style;if(b=m.cssProps[h]||(m.cssProps[h]=Ub(i,h)),g=m.cssHooks[b]||m.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=Qb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(m.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||m.cssNumber[h]||(c+="px"),k.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=m.camelCase(b);return b=m.cssProps[h]||(m.cssProps[h]=Ub(a.style,h)),g=m.cssHooks[b]||m.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Jb(a,b,d)),"normal"===f&&b in Sb&&(f=Sb[b]),""===c||c?(e=parseFloat(f),c===!0||m.isNumeric(e)?e||0:f):f}}),m.each(["height","width"],function(a,b){m.cssHooks[b]={get:function(a,c,d){return c?Ob.test(m.css(a,"display"))&&0===a.offsetWidth?m.swap(a,Rb,function(){return Yb(a,b,d)}):Yb(a,b,d):void 0},set:function(a,c,d){var e=d&&Ib(a);return Wb(a,c,d?Xb(a,b,d,k.boxSizing&&"border-box"===m.css(a,"boxSizing",!1,e),e):0)}}}),k.opacity||(m.cssHooks.opacity={get:function(a,b){return Nb.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=m.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===m.trim(f.replace(Mb,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Mb.test(f)?f.replace(Mb,e):f+" "+e)}}),m.cssHooks.marginRight=Lb(k.reliableMarginRight,function(a,b){return b?m.swap(a,{display:"inline-block"},Jb,[a,"marginRight"]):void 0}),m.each({margin:"",padding:"",border:"Width"},function(a,b){m.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+T[d]+b]=f[d]||f[d-2]||f[0];return e}},Gb.test(a)||(m.cssHooks[a+b].set=Wb)}),m.fn.extend({css:function(a,b){return V(this,function(a,b,c){var d,e,f={},g=0;if(m.isArray(b)){for(d=Ib(a),e=b.length;e>g;g++)f[b[g]]=m.css(a,b[g],!1,d);return f}return void 0!==c?m.style(a,b,c):m.css(a,b)},a,b,arguments.length>1)},show:function(){return Vb(this,!0)},hide:function(){return Vb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){U(this)?m(this).show():m(this).hide()})}});function Zb(a,b,c,d,e){return new Zb.prototype.init(a,b,c,d,e)}m.Tween=Zb,Zb.prototype={constructor:Zb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(m.cssNumber[c]?"":"px")
},cur:function(){var a=Zb.propHooks[this.prop];return a&&a.get?a.get(this):Zb.propHooks._default.get(this)},run:function(a){var b,c=Zb.propHooks[this.prop];return this.pos=b=this.options.duration?m.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Zb.propHooks._default.set(this),this}},Zb.prototype.init.prototype=Zb.prototype,Zb.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=m.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){m.fx.step[a.prop]?m.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[m.cssProps[a.prop]]||m.cssHooks[a.prop])?m.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},Zb.propHooks.scrollTop=Zb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},m.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},m.fx=Zb.prototype.init,m.fx.step={};var $b,_b,ac=/^(?:toggle|show|hide)$/,bc=new RegExp("^(?:([+-])=|)("+S+")([a-z%]*)$","i"),cc=/queueHooks$/,dc=[ic],ec={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=bc.exec(b),f=e&&e[3]||(m.cssNumber[a]?"":"px"),g=(m.cssNumber[a]||"px"!==f&&+d)&&bc.exec(m.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,m.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function fc(){return setTimeout(function(){$b=void 0}),$b=m.now()}function gc(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=T[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function hc(a,b,c){for(var d,e=(ec[b]||[]).concat(ec["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function ic(a,b,c){var d,e,f,g,h,i,j,l,n=this,o={},p=a.style,q=a.nodeType&&U(a),r=m._data(a,"fxshow");c.queue||(h=m._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,n.always(function(){n.always(function(){h.unqueued--,m.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=m.css(a,"display"),l="none"===j?m._data(a,"olddisplay")||Fb(a.nodeName):j,"inline"===l&&"none"===m.css(a,"float")&&(k.inlineBlockNeedsLayout&&"inline"!==Fb(a.nodeName)?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",k.shrinkWrapBlocks()||n.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],ac.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||m.style(a,d)}else j=void 0;if(m.isEmptyObject(o))"inline"===("none"===j?Fb(a.nodeName):j)&&(p.display=j);else{r?"hidden"in r&&(q=r.hidden):r=m._data(a,"fxshow",{}),f&&(r.hidden=!q),q?m(a).show():n.done(function(){m(a).hide()}),n.done(function(){var b;m._removeData(a,"fxshow");for(b in o)m.style(a,b,o[b])});for(d in o)g=hc(q?r[d]:0,d,n),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function jc(a,b){var c,d,e,f,g;for(c in a)if(d=m.camelCase(c),e=b[d],f=a[c],m.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=m.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function kc(a,b,c){var d,e,f=0,g=dc.length,h=m.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=$b||fc(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:m.extend({},b),opts:m.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:$b||fc(),duration:c.duration,tweens:[],createTween:function(b,c){var d=m.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(jc(k,j.opts.specialEasing);g>f;f++)if(d=dc[f].call(j,a,k,j.opts))return d;return m.map(k,hc,j),m.isFunction(j.opts.start)&&j.opts.start.call(a,j),m.fx.timer(m.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}m.Animation=m.extend(kc,{tweener:function(a,b){m.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],ec[c]=ec[c]||[],ec[c].unshift(b)},prefilter:function(a,b){b?dc.unshift(a):dc.push(a)}}),m.speed=function(a,b,c){var d=a&&"object"==typeof a?m.extend({},a):{complete:c||!c&&b||m.isFunction(a)&&a,duration:a,easing:c&&b||b&&!m.isFunction(b)&&b};return d.duration=m.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in m.fx.speeds?m.fx.speeds[d.duration]:m.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){m.isFunction(d.old)&&d.old.call(this),d.queue&&m.dequeue(this,d.queue)},d},m.fn.extend({fadeTo:function(a,b,c,d){return this.filter(U).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=m.isEmptyObject(a),f=m.speed(b,c,d),g=function(){var b=kc(this,m.extend({},a),f);(e||m._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=m.timers,g=m._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&cc.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&m.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=m._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=m.timers,g=d?d.length:0;for(c.finish=!0,m.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),m.each(["toggle","show","hide"],function(a,b){var c=m.fn[b];m.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(gc(b,!0),a,d,e)}}),m.each({slideDown:gc("show"),slideUp:gc("hide"),slideToggle:gc("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){m.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),m.timers=[],m.fx.tick=function(){var a,b=m.timers,c=0;for($b=m.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||m.fx.stop(),$b=void 0},m.fx.timer=function(a){m.timers.push(a),a()?m.fx.start():m.timers.pop()},m.fx.interval=13,m.fx.start=function(){_b||(_b=setInterval(m.fx.tick,m.fx.interval))},m.fx.stop=function(){clearInterval(_b),_b=null},m.fx.speeds={slow:600,fast:200,_default:400},m.fn.delay=function(a,b){return a=m.fx?m.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a,b,c,d,e;b=y.createElement("div"),b.setAttribute("className","t"),b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",d=b.getElementsByTagName("a")[0],c=y.createElement("select"),e=c.appendChild(y.createElement("option")),a=b.getElementsByTagName("input")[0],d.style.cssText="top:1px",k.getSetAttribute="t"!==b.className,k.style=/top/.test(d.getAttribute("style")),k.hrefNormalized="/a"===d.getAttribute("href"),k.checkOn=!!a.value,k.optSelected=e.selected,k.enctype=!!y.createElement("form").enctype,c.disabled=!0,k.optDisabled=!e.disabled,a=y.createElement("input"),a.setAttribute("value",""),k.input=""===a.getAttribute("value"),a.value="t",a.setAttribute("type","radio"),k.radioValue="t"===a.value}();var lc=/\r/g;m.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=m.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,m(this).val()):a,null==e?e="":"number"==typeof e?e+="":m.isArray(e)&&(e=m.map(e,function(a){return null==a?"":a+""})),b=m.valHooks[this.type]||m.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=m.valHooks[e.type]||m.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(lc,""):null==c?"":c)}}}),m.extend({valHooks:{option:{get:function(a){var b=m.find.attr(a,"value");return null!=b?b:m.trim(m.text(a))}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(k.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&m.nodeName(c.parentNode,"optgroup"))){if(b=m(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=m.makeArray(b),g=e.length;while(g--)if(d=e[g],m.inArray(m.valHooks.option.get(d),f)>=0)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),m.each(["radio","checkbox"],function(){m.valHooks[this]={set:function(a,b){return m.isArray(b)?a.checked=m.inArray(m(a).val(),b)>=0:void 0}},k.checkOn||(m.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var mc,nc,oc=m.expr.attrHandle,pc=/^(?:checked|selected)$/i,qc=k.getSetAttribute,rc=k.input;m.fn.extend({attr:function(a,b){return V(this,m.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){m.removeAttr(this,a)})}}),m.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===K?m.prop(a,b,c):(1===f&&m.isXMLDoc(a)||(b=b.toLowerCase(),d=m.attrHooks[b]||(m.expr.match.bool.test(b)?nc:mc)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=m.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void m.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(E);if(f&&1===a.nodeType)while(c=f[e++])d=m.propFix[c]||c,m.expr.match.bool.test(c)?rc&&qc||!pc.test(c)?a[d]=!1:a[m.camelCase("default-"+c)]=a[d]=!1:m.attr(a,c,""),a.removeAttribute(qc?c:d)},attrHooks:{type:{set:function(a,b){if(!k.radioValue&&"radio"===b&&m.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),nc={set:function(a,b,c){return b===!1?m.removeAttr(a,c):rc&&qc||!pc.test(c)?a.setAttribute(!qc&&m.propFix[c]||c,c):a[m.camelCase("default-"+c)]=a[c]=!0,c}},m.each(m.expr.match.bool.source.match(/\w+/g),function(a,b){var c=oc[b]||m.find.attr;oc[b]=rc&&qc||!pc.test(b)?function(a,b,d){var e,f;return d||(f=oc[b],oc[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,oc[b]=f),e}:function(a,b,c){return c?void 0:a[m.camelCase("default-"+b)]?b.toLowerCase():null}}),rc&&qc||(m.attrHooks.value={set:function(a,b,c){return m.nodeName(a,"input")?void(a.defaultValue=b):mc&&mc.set(a,b,c)}}),qc||(mc={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},oc.id=oc.name=oc.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},m.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:mc.set},m.attrHooks.contenteditable={set:function(a,b,c){mc.set(a,""===b?!1:b,c)}},m.each(["width","height"],function(a,b){m.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),k.style||(m.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var sc=/^(?:input|select|textarea|button|object)$/i,tc=/^(?:a|area)$/i;m.fn.extend({prop:function(a,b){return V(this,m.prop,a,b,arguments.length>1)},removeProp:function(a){return a=m.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),m.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!m.isXMLDoc(a),f&&(b=m.propFix[b]||b,e=m.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=m.find.attr(a,"tabindex");return b?parseInt(b,10):sc.test(a.nodeName)||tc.test(a.nodeName)&&a.href?0:-1}}}}),k.hrefNormalized||m.each(["href","src"],function(a,b){m.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),k.optSelected||(m.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}}),m.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){m.propFix[this.toLowerCase()]=this}),k.enctype||(m.propFix.enctype="encoding");var uc=/[\t\r\n\f]/g;m.fn.extend({addClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j="string"==typeof a&&a;if(m.isFunction(a))return this.each(function(b){m(this).addClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(E)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(uc," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=m.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j=0===arguments.length||"string"==typeof a&&a;if(m.isFunction(a))return this.each(function(b){m(this).removeClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(E)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(uc," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?m.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(m.isFunction(a)?function(c){m(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=m(this),f=a.match(E)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===K||"boolean"===c)&&(this.className&&m._data(this,"__className__",this.className),this.className=this.className||a===!1?"":m._data(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(uc," ").indexOf(b)>=0)return!0;return!1}}),m.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){m.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),m.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var vc=m.now(),wc=/\?/,xc=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;m.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=m.trim(b+"");return e&&!m.trim(e.replace(xc,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():m.error("Invalid JSON: "+b)},m.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||m.error("Invalid XML: "+b),c};var yc,zc,Ac=/#.*$/,Bc=/([?&])_=[^&]*/,Cc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Dc=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Ec=/^(?:GET|HEAD)$/,Fc=/^\/\//,Gc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Hc={},Ic={},Jc="*/".concat("*");try{zc=location.href}catch(Kc){zc=y.createElement("a"),zc.href="",zc=zc.href}yc=Gc.exec(zc.toLowerCase())||[];function Lc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(E)||[];if(m.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Mc(a,b,c,d){var e={},f=a===Ic;function g(h){var i;return e[h]=!0,m.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Nc(a,b){var c,d,e=m.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&m.extend(!0,a,c),a}function Oc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Pc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}m.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:zc,type:"GET",isLocal:Dc.test(yc[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Jc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":m.parseJSON,"text xml":m.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Nc(Nc(a,m.ajaxSettings),b):Nc(m.ajaxSettings,a)},ajaxPrefilter:Lc(Hc),ajaxTransport:Lc(Ic),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=m.ajaxSetup({},b),l=k.context||k,n=k.context&&(l.nodeType||l.jquery)?m(l):m.event,o=m.Deferred(),p=m.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!j){j={};while(b=Cc.exec(f))j[b[1].toLowerCase()]=b[2]}b=j[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?f:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return i&&i.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||zc)+"").replace(Ac,"").replace(Fc,yc[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=m.trim(k.dataType||"*").toLowerCase().match(E)||[""],null==k.crossDomain&&(c=Gc.exec(k.url.toLowerCase()),k.crossDomain=!(!c||c[1]===yc[1]&&c[2]===yc[2]&&(c[3]||("http:"===c[1]?"80":"443"))===(yc[3]||("http:"===yc[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=m.param(k.data,k.traditional)),Mc(Hc,k,b,v),2===t)return v;h=k.global,h&&0===m.active++&&m.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!Ec.test(k.type),e=k.url,k.hasContent||(k.data&&(e=k.url+=(wc.test(e)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=Bc.test(e)?e.replace(Bc,"$1_="+vc++):e+(wc.test(e)?"&":"?")+"_="+vc++)),k.ifModified&&(m.lastModified[e]&&v.setRequestHeader("If-Modified-Since",m.lastModified[e]),m.etag[e]&&v.setRequestHeader("If-None-Match",m.etag[e])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+Jc+"; q=0.01":""):k.accepts["*"]);for(d in k.headers)v.setRequestHeader(d,k.headers[d]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(d in{success:1,error:1,complete:1})v[d](k[d]);if(i=Mc(Ic,k,b,v)){v.readyState=1,h&&n.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,i.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,c,d){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),i=void 0,f=d||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,c&&(u=Oc(k,v,c)),u=Pc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(m.lastModified[e]=w),w=v.getResponseHeader("etag"),w&&(m.etag[e]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,h&&n.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),h&&(n.trigger("ajaxComplete",[v,k]),--m.active||m.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return m.get(a,b,c,"json")},getScript:function(a,b){return m.get(a,void 0,b,"script")}}),m.each(["get","post"],function(a,b){m[b]=function(a,c,d,e){return m.isFunction(c)&&(e=e||d,d=c,c=void 0),m.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),m.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){m.fn[b]=function(a){return this.on(b,a)}}),m._evalUrl=function(a){return m.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},m.fn.extend({wrapAll:function(a){if(m.isFunction(a))return this.each(function(b){m(this).wrapAll(a.call(this,b))});if(this[0]){var b=m(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(m.isFunction(a)?function(b){m(this).wrapInner(a.call(this,b))}:function(){var b=m(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=m.isFunction(a);return this.each(function(c){m(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){m.nodeName(this,"body")||m(this).replaceWith(this.childNodes)}).end()}}),m.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0||!k.reliableHiddenOffsets()&&"none"===(a.style&&a.style.display||m.css(a,"display"))},m.expr.filters.visible=function(a){return!m.expr.filters.hidden(a)};var Qc=/%20/g,Rc=/\[\]$/,Sc=/\r?\n/g,Tc=/^(?:submit|button|image|reset|file)$/i,Uc=/^(?:input|select|textarea|keygen)/i;function Vc(a,b,c,d){var e;if(m.isArray(b))m.each(b,function(b,e){c||Rc.test(a)?d(a,e):Vc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==m.type(b))d(a,b);else for(e in b)Vc(a+"["+e+"]",b[e],c,d)}m.param=function(a,b){var c,d=[],e=function(a,b){b=m.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=m.ajaxSettings&&m.ajaxSettings.traditional),m.isArray(a)||a.jquery&&!m.isPlainObject(a))m.each(a,function(){e(this.name,this.value)});else for(c in a)Vc(c,a[c],b,e);return d.join("&").replace(Qc,"+")},m.fn.extend({serialize:function(){return m.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=m.prop(this,"elements");return a?m.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!m(this).is(":disabled")&&Uc.test(this.nodeName)&&!Tc.test(a)&&(this.checked||!W.test(a))}).map(function(a,b){var c=m(this).val();return null==c?null:m.isArray(c)?m.map(c,function(a){return{name:b.name,value:a.replace(Sc,"\r\n")}}):{name:b.name,value:c.replace(Sc,"\r\n")}}).get()}}),m.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return!this.isLocal&&/^(get|post|head|put|delete|options)$/i.test(this.type)&&Zc()||$c()}:Zc;var Wc=0,Xc={},Yc=m.ajaxSettings.xhr();a.ActiveXObject&&m(a).on("unload",function(){for(var a in Xc)Xc[a](void 0,!0)}),k.cors=!!Yc&&"withCredentials"in Yc,Yc=k.ajax=!!Yc,Yc&&m.ajaxTransport(function(a){if(!a.crossDomain||k.cors){var b;return{send:function(c,d){var e,f=a.xhr(),g=++Wc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)void 0!==c[e]&&f.setRequestHeader(e,c[e]+"");f.send(a.hasContent&&a.data||null),b=function(c,e){var h,i,j;if(b&&(e||4===f.readyState))if(delete Xc[g],b=void 0,f.onreadystatechange=m.noop,e)4!==f.readyState&&f.abort();else{j={},h=f.status,"string"==typeof f.responseText&&(j.text=f.responseText);try{i=f.statusText}catch(k){i=""}h||!a.isLocal||a.crossDomain?1223===h&&(h=204):h=j.text?200:404}j&&d(h,i,j,f.getAllResponseHeaders())},a.async?4===f.readyState?setTimeout(b):f.onreadystatechange=Xc[g]=b:b()},abort:function(){b&&b(void 0,!0)}}}});function Zc(){try{return new a.XMLHttpRequest}catch(b){}}function $c(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}m.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return m.globalEval(a),a}}}),m.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),m.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=y.head||m("head")[0]||y.documentElement;return{send:function(d,e){b=y.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||e(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var _c=[],ad=/(=)\?(?=&|$)|\?\?/;m.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=_c.pop()||m.expando+"_"+vc++;return this[a]=!0,a}}),m.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(ad.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&ad.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=m.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(ad,"$1"+e):b.jsonp!==!1&&(b.url+=(wc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||m.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,_c.push(e)),g&&m.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),m.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||y;var d=u.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=m.buildFragment([a],b,e),e&&e.length&&m(e).remove(),m.merge([],d.childNodes))};var bd=m.fn.load;m.fn.load=function(a,b,c){if("string"!=typeof a&&bd)return bd.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=m.trim(a.slice(h,a.length)),a=a.slice(0,h)),m.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(f="POST"),g.length>0&&m.ajax({url:a,type:f,dataType:"html",data:b}).done(function(a){e=arguments,g.html(d?m("<div>").append(m.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,e||[a.responseText,b,a])}),this},m.expr.filters.animated=function(a){return m.grep(m.timers,function(b){return a===b.elem}).length};var cd=a.document.documentElement;function dd(a){return m.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}m.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=m.css(a,"position"),l=m(a),n={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=m.css(a,"top"),i=m.css(a,"left"),j=("absolute"===k||"fixed"===k)&&m.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),m.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(n.top=b.top-h.top+g),null!=b.left&&(n.left=b.left-h.left+e),"using"in b?b.using.call(a,n):l.css(n)}},m.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){m.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,m.contains(b,e)?(typeof e.getBoundingClientRect!==K&&(d=e.getBoundingClientRect()),c=dd(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===m.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),m.nodeName(a[0],"html")||(c=a.offset()),c.top+=m.css(a[0],"borderTopWidth",!0),c.left+=m.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-m.css(d,"marginTop",!0),left:b.left-c.left-m.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||cd;while(a&&!m.nodeName(a,"html")&&"static"===m.css(a,"position"))a=a.offsetParent;return a||cd})}}),m.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);m.fn[a]=function(d){return V(this,function(a,d,e){var f=dd(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?m(f).scrollLeft():e,c?e:m(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),m.each(["top","left"],function(a,b){m.cssHooks[b]=Lb(k.pixelPosition,function(a,c){return c?(c=Jb(a,b),Hb.test(c)?m(a).position()[b]+"px":c):void 0})}),m.each({Height:"height",Width:"width"},function(a,b){m.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){m.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return V(this,function(b,c,d){var e;return m.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?m.css(b,c,g):m.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),m.fn.size=function(){return this.length},m.fn.andSelf=m.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return m});var ed=a.jQuery,fd=a.$;return m.noConflict=function(b){return a.$===m&&(a.$=fd),b&&a.jQuery===m&&(a.jQuery=ed),m},typeof b===K&&(a.jQuery=a.$=m),m});
//# sourceMappingURL=jquery.min.map;
// nahrazuje kokotskou funkci níže
function formatNum(num) {
	return new Intl.NumberFormat('cs-CZ', { maximumFractionDigits: 6 }).format(num);
}

/* number-functions.js START */
/*
* Copyright (C) 2006 Baron Schwartz <baron at sequent dot org>
*
* This program is free software; you can redistribute it and/or modify it
* under the terms of the GNU Lesser General Public License as published by the
* Free Software Foundation, version 2.1.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
* details.
*
* $Revision: 1.3 $
*/

// Abbreviations: LODP = Left Of Decimal Point, RODP = Right Of Decimal Point
Number.formatFunctions = { count: 0 };

// Constants useful for controlling the format of numbers in special cases.
Number.prototype.NaN = 'NaN';
Number.prototype.posInfinity = 'Infinity';
Number.prototype.negInfinity = '-Infinity';

Number.prototype.numberFormat = function (format, context) {
	if (isNaN(this)) {
		return Number.prototype.NaNstring;
	}
	else if (this == +Infinity) {
		return Number.prototype.posInfinity;
	}
	else if (this == -Infinity) {
		return Number.prototype.negInfinity;
	}
	else if (Number.formatFunctions[format] == null) {
		Number.createNewFormat(format);
	}
	return this[Number.formatFunctions[format]](context);
};

Number.createNewFormat = function (format) {
	var funcName = "format" + Number.formatFunctions.count++;
	Number.formatFunctions[format] = funcName;
	var code = "Number.prototype." + funcName + " = function(context){\n";

	// Decide whether the function is a terminal or a pos/neg/zero function
	var formats = format.split(";");
	switch (formats.length) {
		case 1:
			code += Number.createTerminalFormat(format);
			break;
		case 2:
			code += "return (this < 0) ? this.numberFormat(\""
                + String.escape(formats[1])
                    + "\", 1) : this.numberFormat(\""
                        + String.escape(formats[0])
                            + "\", 2);";
			break;
		case 3:
			code += "return (this < 0) ? this.numberFormat(\""
                + String.escape(formats[1])
                    + "\", 1) : ((this == 0) ? this.numberFormat(\""
                        + String.escape(formats[2])
                            + "\", 2) : this.numberFormat(\""
                                + String.escape(formats[0])
                                    + "\", 3));";
			break;
		default:
			code += "throw 'Too many semicolons in format string';";
			break;
	}
	eval(code + "}");
};

Number.createTerminalFormat = function (format) {
	// If there is no work to do, just return the literal value
	if (format.length > 0 && format.search(/[0#?]/) == -1) {
		return "return '" + String.escape(format) + "';\n";
	}
	// Negative values are always displayed without a minus sign when section separators are used.
	var code = "var val = (context == null) ? new Number(this) : Math.abs(this);\n";
	var thousands = false;
	var lodp = format;
	var rodp = "";
	var ldigits = 0;
	var rdigits = 0;
	var scidigits = 0;
	var scishowsign = false;
	var sciletter = "";
	// Look for (and remove) scientific notation instructions, which can be anywhere
	m = format.match(/\..*(e)([+-]?)(0+)/i);
	if (m) {
		sciletter = m[1];
		scishowsign = (m[2] == "+");
		scidigits = m[3].length;
		format = format.replace(/(e)([+-]?)(0+)/i, "");
	}
	// Split around the decimal point
	var m = format.match(/^([^.]*)\.(.*)$/);
	if (m) {
		lodp = m[1].replace(/\./g, "");
		rodp = m[2].replace(/\./g, "");
	}
	// Look for %
	if (format.indexOf('%') >= 0) {
		code += "val *= 100;\n";
	}
	// Look for comma-scaling to the left of the decimal point
	m = lodp.match(/(,+)(?:$|[^0#?,])/);
	if (m) {
		code += "val /= " + Math.pow(1000, m[1].length) + "\n;";
	}
	// Look for comma-separators
	if (lodp.search(/[0#?],[0#?]/) >= 0) {
		thousands = true;
	}
	// Nuke any extraneous commas
	if ((m) || thousands) {
		lodp = lodp.replace(/,/g, "");
	}
	// Figure out how many digits to the l/r of the decimal place
	m = lodp.match(/0[0#?]*/);
	if (m) {
		ldigits = m[0].length;
	}
	m = rodp.match(/[0#?]*/);
	if (m) {
		rdigits = m[0].length;
	}
	// Scientific notation takes precedence over rounding etc
	if (scidigits > 0) {
		code += "var sci = Number.toScientific(val,"
            + ldigits + ", " + rdigits + ", " + scidigits + ", " + scishowsign + ");\n"
                + "var arr = [sci.l, sci.r];\n";
	}
	else {
		// If there is no decimal point, round to nearest integer, AWAY from zero
		if (format.indexOf('.') < 0) {
			//code += "val = (val > 0) ? Math.ceil(val) : Math.floor(val)\n";
			// LJA nechapu vyznam Math.ceil(val), nahrazeno Math.round(val)
			code += "val = Math.round(val);\n";
		}
		// Numbers are rounded to the correct number of digits to the right of the decimal
		code += "var arr = val.round(" + rdigits + ").toFixed(" + rdigits + ").split('.');\n";
		// There are at least "ldigits" digits to the left of the decimal, so add zeros if needed.
		code += "arr[0] = (val < 0 ? '-' : '') + String.leftPad((val < 0 ? arr[0].substring(1) : arr[0]), "
            + ldigits + ", '0');\n";
	}
	// Add thousands separators
	if (thousands) {
		code += "arr[0] = Number.addSeparators(arr[0]);\n";
	}
	// Insert the digits into the formatting string.  On the LHS, extra digits are copied
	// into the result.  On the RHS, rounding has chopped them off.
	code += "arr[0] = Number.injectIntoFormat(arr[0].reverse(), '"
        + String.escape(lodp.reverse()) + "', true).reverse();\n";
	if (rdigits > 0) {
		code += "arr[1] = Number.injectIntoFormat(arr[1], '" + String.escape(rodp) + "', false);\n";
	}
	if (scidigits > 0) {
		code += "arr[1] = arr[1].replace(/(\\d{" + rdigits + "})/, '$1" + sciletter + "' + sci.s);\n";
	}
	return code + "return arr.join('.');\n";
};

Number.toScientific = function (val, ldigits, rdigits, scidigits, showsign) {
	var result = { l: "", r: "", s: "" };
	var ex = "";
	// Make ldigits + rdigits significant figures
	var before = Math.abs(val).toFixed(ldigits + rdigits + 1).trim('0');
	// Move the decimal point to the right of all digits we want to keep,
	// and round the resulting value off
	var after = Math.round(new Number(before.replace(".", "").replace(
        new RegExp("(\\d{" + (ldigits + rdigits) + "})(.*)"), "$1.$2"))).toFixed(0);
	// Place the decimal point in the new string
	if (after.length >= ldigits) {
		after = after.substring(0, ldigits) + "." + after.substring(ldigits);
	}
	else {
		after += '.';
	}
	// Find how much the decimal point moved.  This is #places to LODP in the original
	// number, minus the #places in the new number.  There are no left-padded zeroes in
	// the new number, so the calculation for it is simpler than for the old number.
	result.s = (before.indexOf(".") - before.search(/[1-9]/)) - after.indexOf(".");
	// The exponent is off by 1 when it gets moved to the left.
	if (result.s < 0) {
		result.s++;
	}
	// Split the value around the decimal point and pad the parts appropriately.
	result.l = (val < 0 ? '-' : '') + String.leftPad(after.substring(0, after.indexOf(".")), ldigits, "0");
	result.r = after.substring(after.indexOf(".") + 1);
	if (result.s < 0) {
		ex = "-";
	}
	else if (showsign) {
		ex = "+";
	}
	result.s = ex + String.leftPad(Math.abs(result.s).toFixed(0), scidigits, "0");
	return result;
};

Number.prototype.round = function (decimals) {
	if (decimals > 0) {
		var m = this.toFixed(decimals + 1).match(
            new RegExp("(-?\\d*)\.(\\d{" + decimals + "})(\\d)\\d*$"));
		if (m && m.length) {
			return new Number(m[1] + "." + String.leftPad(Math.round(m[2] + "." + m[3]), decimals, "0"));
		}
	}
	return this;
};

Number.injectIntoFormat = function (val, format, stuffExtras) {
	var i = 0;
	var j = 0;
	var result = "";
	var revneg = val.charAt(val.length - 1) == '-';
	if (revneg) {
		val = val.substring(0, val.length - 1);
	}
	while (i < format.length && j < val.length && format.substring(i).search(/[0#?]/) >= 0) {
		if (format.charAt(i).match(/[0#?]/)) {
			// It's a formatting character; copy the corresponding character
			// in the value to the result
			if (val.charAt(j) != '-') {
				result += val.charAt(j);
			}
			else {
				result += "0";
			}
			j++;
		}
		else {
			result += format.charAt(i);
		}
		++i;
	}
	if (revneg && j == val.length) {
		result += '-';
	}
	if (j < val.length) {
		if (stuffExtras) {
			result += val.substring(j);
		}
		if (revneg) {
			result += '-';
		}
	}
	if (i < format.length) {
		result += format.substring(i);
	}
	return result.replace(/#/g, "").replace(/\?/g, " ");
};

Number.addSeparators = function (val) {
	return val.reverse().replace(/(\d{3})/g, "$1,").reverse().replace(/^(-)?,/, "$1");
};

String.prototype.reverse = function () {
	var res = "";
	for (var i = this.length; i > 0; --i) {
		res += this.charAt(i - 1);
	}
	return res;
};

String.prototype.trim = function (ch) {
	if (!ch) ch = ' ';
	return this.replace(new RegExp("^" + ch + "+|" + ch + "+$", "g"), "");
};

String.leftPad = function (val, size, ch) {
	var result = new String(val);
	if (ch == null) {
		ch = " ";
	}
	while (result.length < size) {
		result = ch + result;
	}
	return result;
};

String.escape = function (string) {
	return string.replace(/('|\\)/g, "\\$1");
};
/* number-functions.js END */


String.format = function () {
	// The string containing the format items (e.g. "{0}")
	// will and always has to be the first argument.
	var theString = arguments[0];

	// start with the second argument (i = 1)
	for (var i = 1; i < arguments.length; i++) {
		// "gm" = RegEx options for Global search (more than one instance)
		// and for Multiline search
		var regEx = new RegExp("\\{" + (i - 1) + "\\}", "gm");
		theString = theString.replace(regEx, arguments[i]);
	}

	return theString;
}


// NEMAZAT - POKUS o Spolecne DocumentOnReady funkcnost
//var __globalOnReady = new Array();
//function pushToOnReady(item) {
//    __globalOnReady.push(item);
//}
//function callOnReady() {
//    __globalOnReady.forEach(function (i) {
//        alert(i);
//    });
//}


/**
This is a Javascript implementation of the Java Hashtable object.
   
Contructor(s):
Hashtable()
Creates a new, empty hashtable
   
Method(s):
void clear()
Clears this hashtable so that it contains no keys.
boolean containsKey(String key)
Tests if the specified object is a key in this hashtable.
boolean containsValue(Object value)
Returns true if this Hashtable maps one or more keys to this value.
Object get(String key)
Returns the value to which the specified key is mapped in this hashtable.
boolean isEmpty()
Tests if this hashtable maps no keys to values.
Array keys()
Returns an array of the keys in this hashtable.
void put(String key, Object value)
Maps the specified key to the specified value in this hashtable. A NullPointerException is thrown is the key or value is null.
Object remove(String key)
Removes the key (and its corresponding value) from this hashtable. Returns the value of the key that was removed
int size()
Returns the number of keys in this hashtable.
String toString()
Returns a string representation of this Hashtable object in the form of a set of entries, enclosed in braces and separated by the ASCII characters ", " (comma and space).
Array values()
Returns a array view of the values contained in this Hashtable.
Array entrySet()
Returns a reference to the internal object that stores the data. The object is backed by the Hashtable, so changes to the Hashtable are reflected in the object, and vice-versa.           
*/
function Hashtable() {
	this.clear = hashtable_clear;
	this.containsKey = hashtable_containsKey;
	this.containsValue = hashtable_containsValue;
	this.get = hashtable_get;
	this.isEmpty = hashtable_isEmpty;
	this.keys = hashtable_keys;
	this.put = hashtable_put;
	this.remove = hashtable_remove;
//	this.delete = hashtable_delete;
	this.size = hashtable_size;
	this.toString = hashtable_toString;
	this.values = hashtable_values;
	this.hashtable = new Array();
}

/*=======Private methods for internal use only========*/

function hashtable_clear() {
	this.hashtable = new Array();
}

function hashtable_containsKey(key) {
	var exists = false;
	for (var i in this.hashtable) {
		if (i == key && this.hashtable[i] != null) {
			exists = true;
			break;
		}
	}
	return exists;
}

function hashtable_containsValue(value) {
	var contains = false;
	if (value != null) {
		for (var i in this.hashtable) {
			if (this.hashtable[i] == value) {
				contains = true;
				break;
			}
		}
	}
	return contains;
}

function hashtable_get(key) {
	return this.hashtable[key];
}

function hashtable_isEmpty() {
	return (parseInt(this.size()) == 0) ? true : false;
}

function hashtable_keys() {
	var keys = new Array();
	for (var i in this.hashtable) {
		if (this.hashtable[i] != null)
			keys.push(i);
	}
	return keys;
}

function hashtable_put(key, value) {
	if (key == null || value == null) {
		throw "NullPointerException {" + key + "},{" + value + "}";
	} else {
		this.hashtable[key] = value;
	}
}

function hashtable_remove(key) {
	var rtn = this.hashtable[key];
	this.hashtable[key] = null;
	return rtn;
}
//function hashtable_delete(key) {

//    delete this.hashtable[key];
//}

function hashtable_size() {
	var size = 0;
	for (var i in this.hashtable) {
		if (this.hashtable[i] != null)
			size++;
	}
	return size;
}

function hashtable_toString() {
	var result = "";
	for (var i in this.hashtable) {
		if (this.hashtable[i] != null)
			result += "{" + i + "},{" + this.hashtable[i] + "}\n";
	}
	return result;
}

function hashtable_values() {
	var values = new Array();
	for (var i in this.hashtable) {
		if (this.hashtable[i] != null)
			values.push(this.hashtable[i]);
	}
	return values;
}

/*
END HASHTABLE
*/

String.prototype.trim = String.prototype.trim || function trim() {
	if (this != null) {
		return this.replace(/^\s+|\s+$/g, '');
	} else {
		return this;
	}
};

function jsCorrect(o) {
	if (o == null && o == undefined) {
		return "";
	}
	return o.replace(/'/g, "\\'");
}

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function () {
			if (oldonload) {
				oldonload();
			}
			func();
		};
	}
}

// detekce chrome
function isChrome() {
	return /chrome/.test(navigator.userAgent.toLowerCase());
}

// detekce IE7
function isIE7() {
	return (navigator.appVersion.indexOf("MSIE 7.") != -1);
}

//detekce Opery
function isOpera() {
	return (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent));
}

//timestamp pru URL ajaxovych stranek
function getTS() {
	return "ts=" + new Date().getTime();
}

function isValidEmail(email) {
	var RegExp = /^((([a-z]|[A-Z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([a-z]|[A-Z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([a-z]|[A-Z]|[0-9])([a-z]|[A-Z]|[0-9]|\-){0,61}([a-z]|[A-Z]|[0-9])\.))*([a-z]|[A-Z]|[0-9])([a-z]|[A-Z]|[0-9]|\-){0,61}([a-z]|[A-Z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/;
	if (RegExp.test(email)) {
		return true;
	} else {
		return false;
	}
}

function setDisplayChange(elementId) {
	var x = document.getElementById(elementId);
	x.style.display = (x.style.display != "block" ? "block" : "none");
	if (x.style.display == "block")
		x.focus();
	return false;
}

function IsNotNullOrEmpty(lValue) {
	/// <summary>
	/// Vraci TRUE - Pokud neni NULL nebo neni prazdny znak
	/// </summary>
	return lValue != null && lValue.toString().trim() != "";
}

function IsNullOrEmpty(lValue) {
	/// <summary>
	/// Vraci TRUE - Pokud je NULL nebo prazdny znak
	/// </summary>
	return lValue == null || lValue.toString().trim() == "";
}

function strToInt(value, iDefault) {
	/// <summary>
	/// konvertuje text na int cislo. 
	/// Pokud cislo neni definovano, tak vraci defaultni hodnotu, pokud neni definovana ani defaultni hodnota, tak vraci 0.
	/// </summary>
	if (iDefault === undefined) {
		iDefault = 0;
	}
	if (IsNullOrEmpty(value))
		return iDefault;
	if (typeof value == 'string') {
		value = value.replace(/\s/g, "");
	}
	var iValue = parseInt(value);
	if (isNaN(iValue))
		return iDefault;
	return iValue;
}

function strToBool(value, bDefault) {
	/// <summary>
	/// konvertuje text na boolean.  Bud 1, TRUE, YES nebo ON
	/// Pokud cislo neni definovano, tak vraci defaultni hodnotu, pokud neni definovana ani defaultni hodnota, tak vraci 0.
	/// </summary>
	if (bDefault === undefined) {
		bDefault = false;
	}
	if (IsNullOrEmpty(value))
		return bDefault;
	var bValue = (parseInt(value) == 1 || value.toLowerCase() == "true" || value.toLowerCase() == "yes" || value.toLowerCase() == "on");
	if (isNaN(bValue))
		return bDefault;
	return bValue;
}

function strToDouble(value, dDefault) {
	/// <summary>
	/// konvertuje text na double cislo. 
	/// Pokud cislo neni definovano, tak vraci defaultni hodnotu, pokud neni definovana ani defaultni hodnota, tak vraci 0.
	/// </summary>
	if (dDefault === undefined) {
		dDefault = 0;
	}
	if (IsNullOrEmpty(value))
		return dDefault;
	if (typeof value == 'string') {
		value = value.replace(/\s/g, "").replace(",", ".");
	}
	var dValue = parseFloat(value);
	if (isNaN(dValue))
		return dDefault;
	return dValue;
}

function strDefaultForNULL(sText, sDefault) {
	/// <summary>
	/// Pokud sText neni NULL, tak vraci sText. Pokud sDefault neni NULL, tak vraci sDefault jinak vraci prazdny znak ""
	/// </summary>    
	if (sText == null)
		return sDefault == null ? "" : sDefault;
	return sText;
}

function concateString(sObj1, sObj2, sDelimiter) {
	var sObj1Tmp = sObj1.toString().trim();
	var sObj2Tmp = sObj2.toString().trim();
	if (sObj1Tmp == "") {
		if (sObj2Tmp == "") {
			return "";
		}
		return sObj2Tmp;
	}
	if (sObj2Tmp == "")
		return sObj1Tmp;

	if (sDelimiter == null || sDelimiter.toString().trim() == "") {
		sDelimiter = ",";
	}
	if (sObj1Tmp.substring(sObj1Tmp.length - 1) == sDelimiter) {
		return sObj1Tmp + sObj2Tmp;
	}
	return sObj1Tmp + sDelimiter + sObj2Tmp;
}

function setCookie(name, value, expiredays, path, domain, secure, resetExpTime)
{
	var test = hasConsent(name);
	if (!test) {
		return;
	}

	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	if (resetExpTime) {
		exdate.setHours(0);
		exdate.setMinutes(0);
		exdate.setSeconds(0);
	}
	var curCookie = name + "=" + escape(value) +
		((expiredays) ? "; expires=" + exdate.toGMTString() : "") +
		((path) ? "; path=" + path : "") +
		((domain) ? "; domain=" + domain : "") +
		((secure) ? "; secure" : "") +
		((secure) ? "; SameSite=None" : "; SameSite=Lax");
	document.cookie = curCookie;
}

function deleteCookie(name, path, domain) {
	if (getCookie(name)) {
		document.cookie = name + "=" + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
	}
}

function getCookie(name) {
	var test = hasConsent(name);
	if (!test) {
		return null;
	}

	var dc = document.cookie;
	var prefix = name + "=";
	var begin = dc.indexOf("; " + prefix);
	if (begin == -1) {
		begin = dc.indexOf(prefix);
		if (begin != 0) return null;
	} else
		begin += 2;
	var end = document.cookie.indexOf(";", begin);
	if (end == -1)
		end = dc.length;
	return unescape(dc.substring(begin + prefix.length, end));
}

function hasConsent(name) {
	if (name == 'cookiesConsent') {
		return true;
	}
	if (typeof GLOBAL_CONSENT !== 'undefined' && strToBool(GLOBAL_CONSENT, false)) {
		return true;
	}

	const regex = new RegExp('^[A-Za-z]+_[0-9]+$');//vote_541915
	const regexNum = new RegExp('[0-9]', 'g');
	if (regex.test(name)) {
		name = name.replace(regexNum, '');
		name = name + "*";
	}

	var settItem = toolsConfigDicObj.get(name);
	if (typeof settItem === 'undefined') {
		return false;
	}
	var cat = settItem.category;
	return hasConsentForCategory(cat);
}

function _getMask(category) {
	return Math.pow(2, category - 1);
}

function hasConsentForCategory(cat) {
	// zde se to volá pro případ, že se funkce volá samostatně a ne z hasConsent(name)
	if (typeof GLOBAL_CONSENT !== 'undefined' && strToBool(GLOBAL_CONSENT, false)) {
		return true;
	}

	var consent = getCookie('cookiesConsent');
	var catmask = _getMask(cat);
	var mult = catmask & consent;
	return mult > 0;
}

// nahradi prislusny znak na konkretni pozici
String.prototype.replaceAt = function (index, charSign) {
	return this.substr(0, index) + charSign + this.substr(index + charSign.length);
};

function are_cookies_enabled() {
	var cookieEnabled = (navigator.cookieEnabled) ? true : false;

	if (typeof navigator.cookieEnabled == "undefined" && !cookieEnabled) {
		document.cookie = "testcookie";
		cookieEnabled = (document.cookie.indexOf("testcookie") != -1) ? true : false;
	}
	return (cookieEnabled);
}

function reloadPage() {
	/// <summary>
	/// redirect sam na sebe. Defacto Ctrl-F5. 
	/// </summary>

	//window.location.href = window.location.href;

	if (window.location.href.indexOf("#") != -1) {
	    //window.location.href = window.location.href.replace('#', '');
	    window.location.href = window.location.href.substring(0, window.location.href.indexOf("#"));
	} else {
		window.location.href = window.location.href;
	}
}

function sleep(time) {
	return new Promise((resolve) => setTimeout(resolve, time));
}

function actionClick(event, ID) {
	if (event.which || event.keyCode) {
		if ((event.which == 13) || (event.keyCode == 13)) {
			document.getElementById(ID).click();
			return false;
		}
	}
}

function compareDates(indate1, indate2) {
	var temp1 = "";
	var temp2 = "";

	var pos11 = indate1.indexOf('.');
	var pos12 = indate1.lastIndexOf('.');
	var d1 = indate1.substring(0, pos11);
	var m1 = indate1.substring(pos11 + 1, pos12);
	var y1 = indate1.substring(pos12 + 1, indate1.length);

	var pos21 = indate2.indexOf('.');
	var pos22 = indate2.lastIndexOf('.');
	var d2 = indate2.substring(0, pos21);
	var m2 = indate2.substring(pos21 + 1, pos22);
	var y2 = indate2.substring(pos22 + 1, indate2.length);


	temp1 = m1 + "/" + d1 + "/" + y1;
	temp2 = m2 + "/" + d2 + "/" + y2;


	var cfd = Date.parse(temp1);
	var ctd = Date.parse(temp2);

	var date1 = new Date(cfd);
	var date2 = new Date(ctd);

	return (date1 < date2) ? -1 : (date1 > date2) ? 1 : 0;
}

function utf8_decode(str_data) {
	// Converts a UTF-8 encoded string to ISO-8859-1  
	// 
	// version: 1109.2015
	// discuss at: http://phpjs.org/functions/utf8_decode    // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
	// +      input by: Aman Gupta
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: Norman "zEh" Fuchs
	// +   bugfixed by: hitwork    // +   bugfixed by: Onno Marsman
	// +      input by: Brett Zamir (http://brett-zamir.me)
	// +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// *     example 1: utf8_decode('Kevin van Zonneveld');
	// *     returns 1: 'Kevin van Zonneveld'    
	var tmp_arr = [],
        i = 0,
        ac = 0,
        c1 = 0,
        c2 = 0, c3 = 0;

	str_data += '';

	while (i < str_data.length) {
		c1 = str_data.charCodeAt(i);
		if (c1 < 128) {
			tmp_arr[ac++] = String.fromCharCode(c1);
			i++;
		} else if (c1 > 191 && c1 < 224) {
			c2 = str_data.charCodeAt(i + 1);
			tmp_arr[ac++] = String.fromCharCode(((c1 & 31) << 6) | (c2 & 63));
			i += 2;
		} else {
			c2 = str_data.charCodeAt(i + 1); c3 = str_data.charCodeAt(i + 2);
			tmp_arr[ac++] = String.fromCharCode(((c1 & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
			i += 3;
		}
	}
	return tmp_arr.join('');
}

function utf8_encode(argString) {
	// Encodes an ISO-8859-1 string to UTF-8  
	// 
	// version: 1109.2015
	// discuss at: http://phpjs.org/functions/utf8_encode    // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: sowberry
	// +    tweaked by: Jack
	// +   bugfixed by: Onno Marsman    // +   improved by: Yves Sucaet
	// +   bugfixed by: Onno Marsman
	// +   bugfixed by: Ulrich
	// +   bugfixed by: Rafal Kukawski
	// *     example 1: utf8_encode('Kevin van Zonneveld');    // *     returns 1: 'Kevin van Zonneveld'
	if (argString === null || typeof argString === "undefined") {
		return "";
	}
	var string = (argString + ''); // .replace(/\r\n/g, "\n").replace(/\r/g, "\n");
	var utftext = "",
        start, end, stringl = 0;

	start = end = 0; stringl = string.length;
	for (var n = 0; n < stringl; n++) {
		var c1 = string.charCodeAt(n);
		var enc = null;
		if (c1 < 128) {
			end++;
		} else if (c1 > 127 && c1 < 2048) {
			enc = String.fromCharCode((c1 >> 6) | 192) + String.fromCharCode((c1 & 63) | 128);
		} else {
			enc = String.fromCharCode((c1 >> 12) | 224) + String.fromCharCode(((c1 >> 6) & 63) | 128) + String.fromCharCode((c1 & 63) | 128);
		}
		if (enc !== null) {
			if (end > start) {
				utftext += string.slice(start, end);
			}
			utftext += enc;
			start = end = n + 1;
		}
	}
	if (end > start) {
		utftext += string.slice(start, stringl);
	}
	return utftext;
}

function base64_encode(data) {
	// Encodes string using MIME base64 algorithm  
	// 
	// version: 1109.2015
	// discuss at: http://phpjs.org/functions/base64_encode    // +   original by: Tyler Akins (http://rumkin.com)
	// +   improved by: Bayron Guevara
	// +   improved by: Thunder.m
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   bugfixed by: Pellentesque Malesuada    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: Rafał Kukawski (http://kukawski.pl)
	// -    depends on: utf8_encode
	// *     example 1: base64_encode('Kevin van Zonneveld');
	// *     returns 1: 'S2V2aW4gdmFuIFpvbm5ldmVsZA=='    // mozilla has this native
	// - but breaks in 2.0.0.12!
	//if (typeof this.window['atob'] == 'function') {
	//    return atob(data);
	//}    var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
	var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
        ac = 0,
        enc = "",
        tmp_arr = [];
	if (!data) {
		return data;
	}
	data = this.utf8_encode(data + '');

	do { // pack three octets into four hexets
		o1 = data.charCodeAt(i++);
		o2 = data.charCodeAt(i++); o3 = data.charCodeAt(i++);

		bits = o1 << 16 | o2 << 8 | o3;

		h1 = bits >> 18 & 0x3f; h2 = bits >> 12 & 0x3f;
		h3 = bits >> 6 & 0x3f;
		h4 = bits & 0x3f;

		// use hexets to index into b64, and append result to encoded string        tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
	} while (i < data.length);

	enc = tmp_arr.join('');
	var r = data.length % 3;

	return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
}

function base64_decode(data) {
	// Decodes string using MIME base64 algorithm  
	// 
	// version: 1109.2015
	// discuss at: http://phpjs.org/functions/base64_decode    // +   original by: Tyler Akins (http://rumkin.com)
	// +   improved by: Thunder.m
	// +      input by: Aman Gupta
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   bugfixed by: Onno Marsman    // +   bugfixed by: Pellentesque Malesuada
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +      input by: Brett Zamir (http://brett-zamir.me)
	// +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// -    depends on: utf8_decode    // *     example 1: base64_decode('S2V2aW4gdmFuIFpvbm5ldmVsZA==');
	// *     returns 1: 'Kevin van Zonneveld'
	// mozilla has this native
	// - but breaks in 2.0.0.12!
	//if (typeof this.window['btoa'] == 'function') {    //    return btoa(data);
	//}
	var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
	var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
        ac = 0, dec = "",
        tmp_arr = [];

	if (!data) {
		return data;
	}

	data += '';

	do { // unpack four hexets into three octets using index points in b64        
		h1 = b64.indexOf(data.charAt(i++));
		h2 = b64.indexOf(data.charAt(i++));
		h3 = b64.indexOf(data.charAt(i++));
		h4 = b64.indexOf(data.charAt(i++));
		bits = h1 << 18 | h2 << 12 | h3 << 6 | h4;

		o1 = bits >> 16 & 0xff;
		o2 = bits >> 8 & 0xff;
		o3 = bits & 0xff;
		if (h3 == 64) {
			tmp_arr[ac++] = String.fromCharCode(o1);
		} else if (h4 == 64) {
			tmp_arr[ac++] = String.fromCharCode(o1, o2);
		} else {
			tmp_arr[ac++] = String.fromCharCode(o1, o2, o3);
		}
	} while (i < data.length);
	dec = tmp_arr.join('');
	dec = this.utf8_decode(dec);

	return dec;
}

function disableFieldAutoComplete(fieldsIdArr) {
	if ('undefined' === typeof fieldsIdArr && 'array' !== typeof fieldsIdArr) {
		return;
	}

	/*
	 * testuje zda-li ma input nejakou hodnotu
	 */
	function has_FormFieldValue(fieldId) {
		var field = document.getElementById(fieldId);

		if (null != field && 0 < field.value.length) {
			return true;
		} else {
			return false;
		}
	}
	
	/*
	 * maze hodnoty na inputech ktere jsou obsazeny v poli
	 */
	function clearFieldsValue() {
		var i = 0;

		do {
			var field = document.getElementById(fieldsIdArr[i]);

			if (null === field) {
				i++;
				continue;
			}

			field.value = '';
			field.className += " disable-field-autocomplete";

			i++;
		} while (i < fieldsIdArr.length);
	}

	var testInterval = setInterval(function () {

		// pokud ma jeste prvni field v poli nejakou hodnotu pri nacteni stranky tak zacni mazat
		if (has_FormFieldValue(fieldsIdArr[0])) {
			clearFieldsValue();
		} else {
			// vse smazano tak zastav interval
			clearInterval(testInterval);
		}
	}, 50);
}

// uprava encodeURIComponent aby podporovala dalsi znaky 'alphabetic, decimal digits, - _ . ! ~ * ' ( )'
// vice viz http://www.howwaydo.com/url-encode-a-string-in-jquery-for-an-ajax-request/
function fixedEncodeURIComponent(str) {
	return encodeURIComponent(str).replace(/[!'()]/g, escape).replace(/\*/g, "%2A");
}

// vraci cislo IE verze
function msieversion() {
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");

	if (msie > 0) // If Internet Explorer, return version number
		return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
	else // If another browser, return 0
		return 0;

}

/**
 * Metoda vrátí seznam všech parametrů, které se vyskytují v URL za HASHem a mají nějakou hodnotu do objektu dictionary.
 * @param {any} queryPage - Dynamicky gennerované parametry pro URL Interlinkem. Proměnná je tedy nastavovaná dynamicky a hodnota proměnné může vypadat například takto: 'navdata=11,115,0';jeDealerB2F=false;.
 * @returns {Hashtable} - Seznam všech parametrů v Hashtable.
 */
function listOfParamsAfterHash(queryPage = undefined) {
	var dictionary = new Hashtable();
	var urlParse = window.location.toString();
	var paramsFromURL = "", paramsFromQueryPage = "";
	if (queryPage != null) {
		if (queryPage.indexOf("#") > -1) {
			paramsFromQueryPage = queryPage.substr(urlParse.indexOf("#") + 1);
			var paramsQuery = paramsFromQueryPage.split("&");
			for (var q = 0; q < paramsQuery.length; q++) {
				var pairQuery = paramsQuery[q].split("=");
				dictionary.put(pairQuery[0], pairQuery[1]);
			}
		}
	}

	if (urlParse.indexOf("#") > -1) {
		paramsFromURL = urlParse.substr(urlParse.indexOf("#") + 1);
	}
	if (IsNullOrEmpty(paramsFromURL)) {
		return dictionary;
	}
	var params = paramsFromURL.split("&");
	for (var i = 0; i < params.length; i++) {
		var pair = params[i].split("=");
		dictionary.put(pair[0], pair[1]);
	}
	return dictionary;
};
//generováno dynamicky z tab. WEB_TOOL
var toolsConfigDicObj = new Hashtable();
toolsConfigDicObj.put('__AntiXsrfToken',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('.ASPXAUTH',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('ASP.NET_SessionId',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('ARRAffinity',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('wps_*',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('basketId',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('pgView',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('basketPgView',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('pgProdCount',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('pgItemCount',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('pgProdSort',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('prodSort',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('rspLogin',{type: 1, category:1, safe:false})
toolsConfigDicObj.put('login',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('login_b2c',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('promoTabIndex',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('showFilterBox',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('vote_*',{type: 1, category:2, safe:false})
toolsConfigDicObj.put('dataContainer',{type: 2, category:2, safe:false})
toolsConfigDicObj.put('timestamp',{type: 2, category:2, safe:false})
toolsConfigDicObj.put('cacheUrl',{type: 2, category:2, safe:false})
toolsConfigDicObj.put('linkToPageUrl',{type: 2, category:2, safe:false})
toolsConfigDicObj.put('CompareBar_cacheSettings',{type: 3, category:2, safe:false})
;
//generováno dynamicky z tab. WEB_TRANSLAT
var translatDic = new Hashtable();
translatDic.put('c.CookieConsent.localization.heading','ed SHOP je tu pro vás')
translatDic.put('c.CookieConsent.localization.description','<p>Na našich webových stránkách používáme cookies, pixely a jiné technologie (Cookies). Používáme nezbytné potřebné cookies, abychom Vám umožnili prohlížet a nakupovat na našch webových stránkách. S Vaším souhlasem aktivujeme soubory cookie pro výkonnostní, funkční a marketingové účely pro zlepšení kvality našich webových stránek.</p><p>Více informací a změnu nastavení souhlasu naleznete v <a href="/cookiesConsent/article-ccookiesConsent">Používání cookies</a>.</p>')
translatDic.put('c.CookieConsent.localization.btnSetAll','Už chci nakupovat <small>na eD SHOP s povolením všech cookies</small>')
translatDic.put('c.CookieConsent.localization.btnSetCustom','Povolit nastavené')
translatDic.put('c.CookieConsent.localization.btnMore','Více')
translatDic.put('c.CookieConsent.localization.btnLess','Méně')
translatDic.put('c.CookieConsent.cookieRule.necessary.label','Technické cookies')
translatDic.put('c.CookieConsent.cookieRule.necessary.summary','Některé soubory cookie jsou vyžadovány, aby byla zajištěna základní funkčnost. Bez těchto cookies nebude web fungovat správně. Ve výchozím nastavení jsou povoleny a nelze je zakázat.')
translatDic.put('c.CookieConsent.cookieRule.necessary.description','')
translatDic.put('c.CookieConsent.cookieRule.functional.label','Funkční cookies')
translatDic.put('c.CookieConsent.cookieRule.functional.summary','Pohodlná práce na webu')
translatDic.put('c.CookieConsent.cookieRule.functional.description','')
translatDic.put('c.CookieConsent.cookieRule.analytics.label','Analytické cookies')
translatDic.put('c.CookieConsent.cookieRule.analytics.summary','Lépe vás pochopíme a web přizpůsobíme')
translatDic.put('c.CookieConsent.cookieRule.analytics.description','')
translatDic.put('c.CookieConsent.cookieRule.marketing.label','Marketingové cookies')
translatDic.put('c.CookieConsent.cookieRule.marketing.summary','Budeme vám moct nabídnout produkty, které vás opravdu zajímají.')
translatDic.put('c.CookieConsent.cookieRule.marketing.description','')
translatDic.put('c.CookieConsent.localization.headingContent','Vlastní nastavení souhlasů')
translatDic.put('c.CookieConsent.localization.btnReject','Odmítnout vše')
translatDic.put('c.CookieConsent.localization.btnCustomChoices','Vlastní nastavení')
translatDic.put('c.CookieConsent.localization.btnClose','Zavřít')
;
var dictDefinition = new Array(
    'cz',
    new Array(
        'msg_offer_id','Není vybrána žádná nabídka do které chcete vložit produkt',
        'msg_offer_qty','Není vyplněno množství',
        'msg_offer_qty_val', 'Množství musí být větší než 0',
        'msg_bas_qty_val', 'Počet musí být zadaný jako celé číslo',
        'msg_fid_bas_qty_val','Zadejte množství větší než 0',
        'msg_wd_val','Zadejte minimálně jednu podmínku',
        'msg_wd_val_price','Zadejte cenu',
        'msg_wd_val_qty','Zadejte množství pro sklad',
        'msg_NoAuth', 'Neautorizovaný přítup',
        'tip_dialogESC', 'Pro zavření okna stiskněte klávesu ESC',
        'tip_date', 'Zadejte datum ve formátu dd.mm.rrrr',
        'tip_credit_note', 'Dobropisováno (tisk na detailu reklamace)',
        'tip_cumul_order', 'Vytvoření objednávky, do které bude možno do 16 hod. přidávat produkty, které pro Vás budou průběžně blokovány',
        'tip_snc_vc', 'Vaše cena včetně smluvního navýšení',
        'tip_snc', 'Smluvní navýšení ceny',
        'tip_vc', 'Vaše cena',
        'msg_email', 'Zadejte e-mail',
        'msg_email_val', 'E-mail není validní',
        'msg_cntStock', 'Zadejte množství pro sklad',
        'msg_price', 'Zadejte cenu',
        'msg_wdMin', 'Zadejte minimálně jednu podmínku',
        'msg_fullt_err', 'Hledané slovo je příliš krátké. Zadejte minimálně 2 znaky!',
        'msg_job_fname', 'Musíte vyplnit Jméno.',
        'msg_job_lname', 'Musíte vyplnit Příjmení.',
        'msg_job_email', 'Musíte vyplnit E-mail.',
        'msg_job_email_val', 'Musíte vyplnit validní E-mail.',
        'msg_job_phone', 'Musíte vyplnit Telefon.',
        'msg_job_letter', 'Musíte vyplnit Průvodní dopis.',
        'msg_job_cv', 'Musíte připojit Životopis.',
        'msg_job_local', 'Musíte vybrat preferované místo.',
        'msg_job_brand', 'Musíte vybrat preferovanou pozici.',
        'msg_survey_voted','Již bylo hlasováno',
        'msg_survey_choose', 'Vyberte odpoveď!',
        'msg_vote_err','Chyba při hlasování',
        'msg_err_timout','Omlouváme se, během zpracování Vašeho požadavku došlo k chybě. Dočasná nedostupnost Vámi požadované stránky byla pravděpodobně způsobena přetížením serveru (timeout). <br/> Zkuste akci opakovat později. <br/> V případě přetrvávání problému kontaktujte technického správce systému.<br/><br/>Datum: ',
        'msg_prop_send','Návrh byl odeslán',
        'msg_prop_text', 'Chybí text',
        'msg_support_phone','Zadejte telefonní číslo',
        'tip_fulltext_search', 'Hledá v těchto polích: Kód, Part number, Název produktu',
        'tip_eden_flk', 'Aktuální stav získaných eD BODŮ z dané věrnostní kampaně na vašem eD EDEN kontě. Součet řádků dává sumu všech získaných eD BODŮ, které můžete použít k objednávání odměn z eD EDENU.',
        'msg_callmeback', 'Kontaktujte mě nazpět',
        'msg_proposal_prod', 'Návrh na doplnění/opravu údajů produktu',
        'tip_sms', 'Na zadané tel. číslo zašleme sms info o expedici zásilky. Cena služby činí 1 kč/1 sms',
        'tip_basket_eden', 'Zde můžete zadat hodnotu bodů, které chcete uplatnit jako slevu z objednávky',
        'msg_import_basket_txt_missing','Zadejte importované produkty do textového pole',
        'msg_import_basket_file_missing','Zadejte importní soubor',
        'msg_import_basket_err',"Chyba při importu",
        'tip_con_reject', 'Zaškrtnutím tohoto pole nám dáte na vědomí, abychom tento kontakt nepoužívali v komunikaci s Vámi a Vaší firmou',
        'tip_bar_basket', 'Košík',
        'tip_bar_find', 'Hledání',
        'tip_bar_order', 'Moje objednávky',
        'tip_bar_invoice', 'Faktury',
        'tip_bar_backlogonly', 'Nedodané zboží',
        'tip_bar_sent', 'Odeslané zboží',
        'tip_bar_compare', 'Porovnání',
        'tip_bar_watchdog', 'Hlídací pes',
        'tip_bar_eden', 'eD EDEN',
        'tip_bas_orig_eu','Vaše označení objednávky bude automaticky vygenerováno',
        'tip_bas_eu', 'Nastavte si koncovou cenu a pošlete si zboží přímo na svého zákazníka<br/><br/>Vybráním tohoto checkboxu se Vám aktivuje funkce B2C košík, kde si budete moci nastavit koncovou cenu bez DPH, nastavit si adresu na kterou zboží poslat.<br/>V eDlinku je potřeba nastavit číselné řady dokladů, k tomu Vás systém vyzve při první aktivaci této funkce. Na dokladech pak bude uvedena Vaše společnost jako dodavatel a Váš zákazník, jako odběratel.<br/>Pro objednání přes tuto funkci košíku je nutné, aby na Vašem účtu byla dostatečná výše kreditu. Bez dostatečné výše kreditu, můžete objednat zboží standardním způsobem, tedy na dobírku, na osobní odběry v Ostravě, či zaplatit zboží na proformu.<br/><br/>Funkce B2C košík umožňuje poslat zboží dvěma způsoby a to na dobírku zákazníkovi, kdy peníze přepravce vybere do Vašeho zákazníka a přepošle je na Váš účet. Nebo balíkem, kdy si pak platbu za zboží domluvíte se svým zákazníkem.',
        'tip_basket_ext_stock', 'Část zboží bude doručena z externího skladu. Zboží z externího skladu je doručeno ve stejný den jako zboží ze skladu OVA při objednání do 17:30, jen jiným závozem a samostatným balíkem. Objednávky z externího skladu nepodporují způsob dopravy dobírkou a kurýrem. Pokud máte s výrobcem dohodnuty speciální podmínky, nemusí se vztahovat na dodávku z externího skladu. V případě pochybností nás prosím kontaktujte - kontakty naleznete na detailu produktu ve spodní části s názvem Obchodní informace.',
        'tip_send_lic', 'Zadejte e-mail, na který bude elektronická licence doručena – později nelze změnit',
        'msg_order_edlink', 'Zboží nelze v současné verzi objednat. Použijte původní web <a href=\'http://edlink.edsystem.cz/\' target=\'_blank\'>eDlinku</a>.',
        'msg_currency', ' Kč',
        'msg_availability', 'Informace o dostupnosti',
        'msg_product_del_err', 'Produkt nebyl smazán z důvodu neplatného košíku/nabídky. Za moment budete přesměrováni.',
        'msg_note_add_err', 'Poznámku se nepodařilo uložit.',
        'msg_products_del_err', 'Produkty nebyly smazány.',
        'msg_products_rate_price_err', 'Marže na produktu nebyly změněny.',
        'msg_basket_rate_price_err', 'Marže na nabídce nebyla změněna.',
        'msg_product_save_err', 'Produkt nebyl uložen z důvodu neplatného košíku/nabídky. Za moment budete přesměrováni.',
        'msg_qty_limit_err', 'Bylo překročeno povolené množství.',
        'msg_crossel_update_err', 'Speciální doplněk nebyl aktualizován. Neplatný košík/nabídka. Za moment budete přesměrováni.',
        'msg_qty_limit_err_with', 'Bylo překročeno povolené množství. Maximálně lze zakoupit',
        'msg_package', 'balení.',
        'msg_basket_add', 'Položka byla přidána do košíku',
        'msg_basket_note_add', 'Poznámka k položce košíku byla přidána',
        'msg_idf_err', 'Neplatný identifikátor košíku.',
        'msg_itf_err', 'Neplatný identifikátor položky.',
        'msg_product_set_info', '<br />Produkt můžete zakoupit i jako součást sady<br /><br />',
        'msg_delete_or_archive', 'Odstranit nebo archivovat tuto položku?',
        'btn_archive', 'Archivovat',
        'btn_delete', 'Smazat',
        'msg_fce_disabled', 'Tato funkčnost je dočasně vypnutá',
        'msg_err_value', 'Prosím, zadejte hodnotu od {0} do {1}',
        'msg_basket_share', 'Sdíleno s koncovým uživatelem: <strong>',
        'msg_basket_share_ed', '</strong><br />Sdíleno s eD: <strong>',
        'msg_yes', 'ano',
        'msg_yes_big', 'Ano',
        'msg_no', 'ne',
        'msg_no_big', 'Ne',
        'msg_rate_back', 'Zpět',
        'msg_set_rate', 'Potvrdit',
        'msg_pass_err', 'Heslo obsahuje nepřípustné znaky!',
        'msg_err_one', 'Prosím vyplňte minimálně jednu z označených možností.',
        'msg_err_clientid', 'Zadejte klientské ID.',
        'msg_err_username', 'Zadejte přihlašovací jméno.',
        'msg_alert_basket_delete', 'Opravdu chcete odstranit tento košík?',
        'msg_alert_item_delete', 'Opravdu chcete odstranit tuto položku?',
        'msg_share_customer', 'Nejméně jednu s verzí nabídek sdílíte se svým zákazníkem.',
        'msg_share_basket_customer', 'Nejméně jednu s verzí košíku sdílíte se svým zákazníkem.',
        'msg_noshare_customer', 'Nesdílíte ani jednu verzi nabídky se zákazníkem.',
        'msg_noshare_basket_customer', 'Nesdílíte ani jednu verzi košíku se zákazníkem.',
        'msg_this_basket', 'Tento košík',
        'msg_this_offer', 'Tato nabídka',
        'msg_this_basket_share_ed', 'je sdílený s eD. Můžete tak efektivně spolupracovat s našimi obchodníky.',
        'msg_this_basket_noshare_ed', 'není sdílený s eD.',
        'msg_this_offer_share_ed', 'je sdílená s eD. Můžete tak efektivně spolupracovat s našimi obchodníky.',
        'msg_this_offer_noshare_ed', 'není sdílená s eD.',
        'msg_this_basket_is_template', '<br/>Tento košík je nastaven jako šablona.',
        'msg_this_basket_archived', 'Tento košík byl Archivován.',
        'msg_alert_remove_items', 'Opravdu odstranit<br />zvolené položky košíku?',
        'msg_alert_proforma_create', 'Opravdu chcete vytvořit proforma fakturu?',
        'msg_err_match', ' didn\'t match any item',
        'msg_set_rate_items', 'Zvolte marži pro požadované položky:',
        'msg_copy_items_success', 'Položky byly zkopírovány do košíku.',
        'tip_clear_filter', 'Smazat filtr',
        'tip_child_item', 'Podřízená položka',
        'tip_form_name', 'Vyplňte své jméno',
        'tip_form_surename', 'Vyplňte své přijmení',
        'tip_form_email', 'Vyplňte svůj e-mail',
        'tip_form_study', 'Vyplňte studovaný obor',
        'tip_more_info', 'Klepněte pro více informací',
        'tip_print_credit', 'Tisk dobropisu',
        'tip_reclamation_repeat', 'Opakovaná reklamace',
        'tip_print_avz', 'Tisk AVZ',
        'tip_print', 'Vytisknout',
        'tip_confirmed', 'Potvrzeno',
        'tip_invoices_summary', 'Přehled vašich zálohových faktur',
        'tip_payment_create', 'Vytváření bankovních platebních příkazů',
        'tip_order_created', 'Objednáno',
        'tip_order_blocked', 'Blokováno',
        'tip_order_delivered', 'Expedováno',
        'tip_order_cancel', 'Storno',
        'tip_cancel_filter', 'Zrušit filtr',
        'tip_address_place', 'Sídlo',
        'tip_address_biling', 'Fakturační',
        'tip_address_order', 'Objednávací',
        'tip_address_delivery', 'Dodací',
        'tip_address_rejected', 'Zamítnutá',
        'tip_basket_versions', 'Spravovat verze tohoto košíku',
        'tip_set_active', 'Nastavit jako aktivní',
        'tip_change_name', 'Změnit název',
        'tip_template', 'Šablona',
        'tip_delete_or_archive', 'Smazat nebo archivovat',
        'tip_restore_archive', 'Obnovit z archivu',
        'tip_new', 'Novinka',
        'tip_clearance_sale', 'Doprodej',
        'tip_go_basket', 'Přejít do košíku',
        'tip_restore_version', 'Obnovit z verze',
        'tip_your_contacts', 'Vaše kontakty',
        'tip_not_contact', 'Zaškrtnutím tohoto pole nám dáte na vědomí, abychom tento kontakt nepoužívali v komunikaci s Vámi a Vaší firmou',
        'tip_api', 'Zaškrtnutím tohoto políčka vytvoříte API účet, který je určen pro automatizované datové výměny mezi systémy. Tento typ účtu neumožňuje přístup k uživatelskému rozhraní e-shopu',
        'tip_cancel', 'Zrušit',
        'tip_insert', 'Vložit',
        'tip_show_categories', 'Zobrazit kategorie stejné úrovně',
        'tip_show_attributes', 'Zobrazit atributy stejné úrovně',
        'tip_show_values', 'Zobrazit hodnoty stejné úrovně',
        'tip_onstock_show_resources', 'Skladem - klepněte pro zjištění skladových zásob',
        'tip_add_basket', 'Vložit do košíku',
        'tip_compare_product', 'Porovnat produkt',
        'tip_watchdog', 'Hlídací pes',
        'tip_add_offer', 'Přidat do nabídky',
        'tip_contacts', 'Kontakty',
        'tip_contact', 'Kontakt',
        'tip_add_mol', 'Vložit do seznamu v MOL košíku',
        'tip_show_catalogue', 'Zobrazit katalog',
        'tip_show_tile', 'Zobrazit seznam s obrázky',
        'tip_delete_value', 'Odstranit hodnotu',
        'tip_contact_skype', 'Kontaktovat přes Skype',
        'tip_basket_settings', 'Nastavení košíku',
        'tip_share', 'Sdílet',
        'tip_basket_share', 'Zobrazit / schovat sdílení košíku',
        'tip_edit_crossell', 'Editovat speciální doplňky',
        'tip_new_custom_item', 'Nová vlastní položka',
        'tip_select', 'Označit',
        'tip_delete_item', 'Smazat položku',
        'tip_note_add', 'Přidat poznámku',
        'tip_edit_custom_item', 'Editovat položku',
        'tip_show_tableimg', 'Zobrazit vlastní seznam',
        'msg_popup_promo', 'Promo nabídky',
        'msg_lazy_load', 'prosím strpení, načítám produkty',
        'msg_lazy_stop', 'žádné další produkty již nejsou k dispozici',
        'tip_product_list_config', 'Nastavení položek seznamu',
        'msg_server_error', 'Došlo k neočekávané chybě. Zkuste akci opakovat později.',
        'msg_amount_offer', 'Hodnota nabídky musí být číslo.',
        'msg_type_offer', 'Není vybrán typ nabídky',
        'msg_pro_offer', 'Chybí produkt pro nabídku.',
        'HeadeShared', 'Košík/nabídka je označená jako sdílená (nelze na položkách dělat žádné akce)',
        'HeaderArchive', 'Košík/nabídka je označená jako archív (nelze na položkách dělat žádné akce)',
        'RecordUndefined', 'Nedefinovaný záznam (např. chybí vyplněné ID pro jednoznačnou akci)',
        'RecordNotExists', 'Neexistující záznam',
        'MissingDefinedProduct', 'Nebyl definován produkt proId nebo ProCode, aby se ověřila platnost vstupních dat. Neplatí pro Vlastní ruční položku',
        'MissingNameItem', 'Chybí název položky',
        'ProductNotExists', 'Produkt neni v databázi',
        'ProductReject', 'Vyřazený produkt',
        'ProductVisible', 'Produkt nastaven jako neaktivní',
        'RestrictedRegion', 'Nepovolený produkt pro objednání',
        'ProductInPriceList', 'Nepovolený produkt pro objednání',
        'ProductCharge', 'Produkt obsahuje šarže',
        'ProductSelectiveDistribution', 'Produkt je v selektivní distribuci',
        'ItemUnallowedNegative', 'Nesmí být záporná hodnota',
        'ProductRestricted', 'Nepovolený produkt pro objednání',
        'ProductRestrictedEden', 'Produkt lze vložit pouze do edenového košíku',
        'ProductRestrictedMOL', 'Produkt lze vložit pouze do MOL košíku',
        'ParentNotExist', 'Neexistuje hlavní produkt',
        'ItemUnallowedCount', 'Nepovolené množství',
        'OtherProducktInPackage', 'Je obsazeno více produktů z balíčku',
        'PriceZero', 'Nulová cena položky',
        'OtherCurId', 'Nastavana rozdílná měna položky',
        'pager_label_next', 'Další stránka',
        'pager_label_prev', 'Předchozí stránka',
        'pager_label_first', 'První stránka',
        'pager_label_last', 'Poslední stránka',
        'tip_show_list', 'Zobrazit seznam',
        'tip_discounted_price', 'Zvýhodněná cena',
        'tip_notes', 'Poznámky',
        'msg_basket_share', 'Sdílet s koncovým uživatelem',
        'msg_detail_share', 'Detail sdílené nabídky',
        'msg_send_mail', 'Odeslat e-mailem',
        'tip_offer_label','Vytvořte si nabídku zadáním prodejních cen, případně pošlete zboží rovnou svým jménem koncovému zákazníkovi.<br/><br/>Volbou Nabídka se Vám aktivuje možnost práce s prodejními cenami a možnost přímé dodávky Vašim jménem koncovému zákazníkovi.<br/><br/>Pro použití této volby je potřeba nastavit číselné řady dokladů, k čemuž Vás systém vyzve při prvním použití této funkce.<br/><br/>Na dokladech pak bude uvedena Vaše společnosti jako dodavatel a Váš zákazník, jako odběratel. Pro přímé dodávky vašim jménem je nutné, aby na Vašem účtu byla dostatečná výše kreditu. Bez dostatečné výše kreditu, můžete objednat zboží standardním způsobem, tedy na dobírku, na osobní odběry v Ostravě, nebo zaplatit zboží na proformu.<br/><br/>Režim přímé dodávky umožňuje poslat zboží dvěma způsoby a to na dobírku, kdy peníze přepravce vybere od Vašeho zákazníka a přepošle je na Váš účet. Nebo balíkem, kdy si pak platbu za zboží domluvíte se svým zákazníkem. Viz Vámi zvolený způsob dopravy.<br/><br/>',
        'title_stock_info', 'Skladová dostupnost',
        'title_new_offer', 'Založit novou nabídku',
        'title_new_offer_name', 'Zadejte název nové nabídky',
        'title_new_basket', 'Založit nový košík',
        'title_new_basket_name', 'Zadejte název nového košíku',
        'msg_close', 'Zavřít',
        'msg_change_order', 'Tažením tohoto prvku upravíte pořadí řádků',
        'ajx-mouse-preloader', 'Nahrávám',
        'tip_licence', 'Elektronická licence',
        'status_online', 'Online',
        'status_busy', 'Zaneprázdněn',
        'status_donotdistrub', 'Nerušit',
        'status_offline', 'Offline',
        'status_away', 'Nedostupný',
        'tip_bazar', 'Bazar',
        'tip_order-info', 'Nezapomeňte doplnit info k licenci do poznámky',
        'tip_used', 'Použité',
        'tip_repas', 'Repasované',
        'tip_block', 'Produkt bude v objednávce blokován po dobu tří pracovních dní',
        'send_license_auth_user_null', 'Musíte vybrat koncového uživatele.',
        'send_license_wai_ids_null', 'Musíte vybrat minimálně jednu licenci k odeslání.',
        'send_license_remove_confirm', 'Opravdu chcete odeslat vybrané licence? <br/>V případě jejich odeslaní již je nebude možné odeslat jinému uživateli.',
        'send_license_himself_confirm', 'Opravdu chcete převzít vybrané licence? <br/>Od tohoto okamžiku již nebudete moci předat licenci koncovému uživateli prostřednictvím eD SHOPu.',
        'return_token_confirm', 'Opravdu chcete reklamovat licenci?',
        'repost_login_information_confirm', 'Opravdu chcete odeslat znovu přihlašovací údaje uživateli?',
        'tip_edit', 'Upravit záznam',
        'tip_send_access_data', 'Poslat přístupové údaje uživateli',
        'msg_missing_email', 'E-mail není vyplněn',
        'tip_print_b2c', 'Vytisknout B2C',
        'tip_basket_b2c_print', 'Tato volba zajistí, že přidáme do balíku fakturu vystavenou vaším jménem na vašeho zákazníka. Vystavovat budete "VY" a příjemce bude váš zákazník.',
        'tip_web_setting', 'Zde si můžete nastavit výchozí hodnotu pro danou vlastnost.',
        'msg_err_format', 'Nesprávný formát dat',
		'tip_basket_more-info', 'Více podrobností',
		'tip_current-basket_info', 'Zobrazit informace o košíku / nabídce',
		'tip_ed-bony', 'eD BODY',
		'msg_confirm_kumul', 'Opravdu chcete uzavřit otevřenou objednávku?',
		'tip_info_kumul', 'Uzavřít otevřenou objednávku můžete přes akci v možnostech "Uzavřít otevřenou objednávku", pokud na danou akci máte oprávnění.',
		'msg_alert_access_off', 'Opravdu chcete odstranit přístup na eD SHOP?',
		'tip_access_on', 'Vytvořit přístup na eD SHOP',
		'tip_access_off', 'Odstranit přístup na eD SHOP',
		'tip_global_minimalize', 'Minimalizovat',
		'tip_global_maximize', 'Maximalizovat',
		'msg_confirm_compl_yes', 'Opravdu chcete nastavit příznak "Kompletní objednávka"?',
        'msg_confirm_compl_no', 'Opravdu chcete zrušit příznak "Kompletní objednávka"?',
        'msg_hpiquote_head_info', 'Informace o nabídce',
        'ServiceDataIncomplete', 'Není vyplněn registační formulář. Pro jeho vyplnění klikněte na symbol před názvem produktu.',
        'tip_edit_service_HPCarepack', 'HP Carepack - Klikněte a vyplňte údaje pro objednání',
        'tip_edit_service_Avast', 'Licence: Klikněte pro vyplnění informací o koncovém zákazníkovi',
        'tip_edit_service_HPSpecialPrice', 'Množstevní sleva: Klikněte pro vyplnění informací o koncovém uživateli',
        'email_address_purpose', 'Pro získání certifikátu',
        'msg_err_enter_value_greater_than', 'Zadejte hodnotu větší než {0}',
        'msg_err_enter_value_less_than', 'Zadejte hodnotu menší než {0}',
        'msg_err_zip', 'Prosím, zadejte platné PSČ.',
        'msg_err_phone', 'Prosím, zadejte platné telefonní číslo.',
        'msg_err_url', 'Prosím, zadejte platnou webovou adresu.',
        'SpecPriceInvalidRecord', 'Neplatná projektová cena',
        'SpecPriceItemUnallowedCount', 'Neplatné množství pro projektovou cenu',
        'SpecPriceItemInvalidPrice', 'Neplatná projektová cena',
        'SpecPriceItemInvalidDate', 'Neplatná projektová cena',
        'save_form_hp_special_prices_rules', 'Musíte souhlasit s pravidly pro čerpání slevy',

        'tip_item_search', 'Vyhledávání v položkách pomocí kódu produktu nebo sériového čísla',
        'tip_item_choose', 'V případě produktu identifikovaného sériovým číslem zvolte konkrétní položku kliknutím na ikonu <i class="icon-list btn_icon"></i>.<br/>V ostatních případech vyplňte počet z maximálního počtu kusů na položce.',
        'msg_note_send', 'Děkujeme. Vaše zpráva byla odeslána.',
        'tip_pricelst_def_valid', 'Datum, do kdy budou ceníky generovány. Lze prodloužit o jeden rok tlačítkem s ikonou <i class="btn_icon icon-repeat"></i>.',
        'msg_message_sent', 'Ověřovací zpráva byla odeslána.',
        'msg_validatation_code_numbers','Ověřovací kód obsahuje jen čísla',
        'msg_delete_auth_success','Autentizační metoda byla úspěšně smazána',
        'msg_save_auth_success', 'Autentizační metoda byla úspěšně uložena',
        'msg_save_auth_success_email', 'Na váš e-mail byl odeslán odkaz pro aktivaci MFA metody',
        'msg_reset_pass_success', 'Na váš e-mail byl odeslán odkaz pro změnu hesla.',
        'tip_mfa_sms', 'Nastavíte si ověřené telefonní číslo pro MFA. Při přihlášení obdržíte SMS s ověřovacím kódem, který zadáte k potvrzení přihlášení.',
        'tip_mfa_otp', 'Ověření pomocí kódu z autentizační aplikace (např. Google Authenticator, Microsoft Authenticator nebo FreeOTP), který zadáte k potvrzení přihlášení.',
        'tip_mfa_webauthn', 'WebAuthn je bezpečný způsob přihlašování, při kterém pomocí svého zařízení (např. počítače nebo mobilního telefonu) ověříte svou identitu. Stačí potvrdit přihlášení na zařízení, které již používáte.',
        'tip_add_to_order', 'Vložením položek do otevřené objednávky se z fomuláře výše zaznamená pouze pole poznámka.',
        'msg_alert_order_cancel', 'Opravdu chcete vystornovat objednávku?',
        'tip_unsecured_account_yes', 'Tato objednávka byla ověřena uživatelem, který má oprávnění využívat firemní kredit, pokud jej Vaše firma má sjednán.',
        'tip_unsecured_account_no', 'Tato objednávka byla vytvořena uživatelem, který nemá oprávnění využívat firemní kredit, pokud jej Vaše firma má sjednán. Pokud oprávnění není uděleno, je fakturace možná pouze s platbou předem.',
        'tip_verified_by_admin', 'Administrátor potvrzuje, že MFA aktivovala oprávněná osoba. Toto oprávnění umožňuje uživateli využívat firemní kredit k nákupu.',
        'tip_mfa_number', 'Tento kontakt je použit pro multifaktorové přihlašování, pro více informací, jak číslo změnit nebo smazat, klikněte na ikonu',
        'msg_alert_creditnote_confirm_1', 'Potvrdit dobropis č.',
        'msg_alert_creditnote_confirm_2', '?\nPotvrzení dobropisu je konečné a není možné potvrzení později zrušit.',
        'msg_err_file_size', 'Soubory jsou příliš velké. Vyberte prosím soubory menší než 4 MB.',
        'status_security_1_0', 'Přístup na eD SHOP: Ne',
        'status_security_1_1', 'Přístup na eD SHOP: Ano',
        'status_security_2_0', 'MFA aktivní: Ne',
        'status_security_2_1', 'MFA aktivní: Ano',
        'status_security_3_0', 'Přístup ke kreditu: Ne',
        'status_security_3_1', 'Přístup ke kreditu: Ano',
        'status_access_0', 'Bez přístupu',
        'status_access_1', 'Přístup na e-shop',
        'status_access_2', 'Přístup k API',
        'status_access_3', 'Zablokován',
        'contact_edit', 'Upravit konktaktní osobu',
        'contact_block', 'Zablokovat kontaktní osobu',
        'contact_unblock', 'Odblokovat kontaktní osobu',
        'contact_credit_allow', 'Přidělit oprávnění k využití kreditu',
        'contact_credit_disallow', 'Odebrat oprávnění k využití kreditu',
        'msg_err_phone_mail_basket', 'Zadejte prosím telefon a e-mail',
        'msq_err_bas_item_tra', 'PickUp Point dopravu lze použít pouze pro jednu položku jednoho kusu zboží v objednávce'
        )        
);




function Dictionary() {
    var defaultlang = g_region;
    this._dictionary = new Hashtable();

    this._dictionaryLng = function DictionaryLng() {
        this.lang = '';
        this._items = new Hashtable();
        this.Add = function(key, value) {
            this._items.put(key, value);
        };
        this.Get = function(key) {
            if (key == 'undefined' || key == '') {
                return '';
            }
            return this._items.get(key);
        };
    };

    this._init = function() {
        for (var i = 0; i < dictDefinition.length; i = i + 2) {
            var slovnik = new this._dictionaryLng();
            slovnik.lang = dictDefinition[i];
            var poleDict = dictDefinition[i + 1];
            for (var j = 0; j < poleDict.length; j = j + 2) {
                slovnik.Add(poleDict[j], poleDict[j + 1]);
            }
            this._dictionary.put(slovnik.lang, slovnik);
        }
    };

    this._init();

    // vraci hodnotu dle klice v defaultni jazyku
    this.GetValue = function(key) {
        if (key == 'undefined' || key == '') {
            return '';
        }
        var dictLng = this._dictionary.get(defaultlang);
        if (dictLng == null) {
            return '';
        }
        var findKey = dictLng.Get(key);
        if (findKey != null)
            return findKey;
        return '';
    };

    // vraci hodnotu dle klice v definovanem jazyku
    this.GetValueLng = function(key, language) {
        if (key == 'undefined' || key == '') {
            return '';
        }
        var dictLng = this._dictionary.get((language != '' ? language : defaultlang));
        if (dictLng == null) {
            return '';
        }
        var findKey = dictLng.Get(key);
        if (findKey != null)
            return findKey;
        return '';
    };
}

var dictionary = new Dictionary();
;
/*!
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license.
 * Copyright 2007, 2013 Brian Cherne
 */
(function (e) { e.fn.hoverIntent = function (t, n, r) { var i = { interval: 100, sensitivity: 7, timeout: 0 }; if (typeof t === "object") { i = e.extend(i, t) } else if (e.isFunction(n)) { i = e.extend(i, { over: t, out: n, selector: r }) } else { i = e.extend(i, { over: t, out: t, selector: n }) } var s, o, u, a; var f = function (e) { s = e.pageX; o = e.pageY }; var l = function (t, n) { n.hoverIntent_t = clearTimeout(n.hoverIntent_t); if (Math.abs(u - s) + Math.abs(a - o) < i.sensitivity) { e(n).off("mousemove.hoverIntent", f); n.hoverIntent_s = 1; return i.over.apply(n, [t]) } else { u = s; a = o; n.hoverIntent_t = setTimeout(function () { l(t, n) }, i.interval) } }; var c = function (e, t) { t.hoverIntent_t = clearTimeout(t.hoverIntent_t); t.hoverIntent_s = 0; return i.out.apply(t, [e]) }; var h = function (t) { var n = jQuery.extend({}, t); var r = this; if (r.hoverIntent_t) { r.hoverIntent_t = clearTimeout(r.hoverIntent_t) } if (t.type == "mouseenter") { u = n.pageX; a = n.pageY; e(r).on("mousemove.hoverIntent", f); if (r.hoverIntent_s != 1) { r.hoverIntent_t = setTimeout(function () { l(n, r) }, i.interval) } } else { e(r).off("mousemove.hoverIntent", f); if (r.hoverIntent_s == 1) { r.hoverIntent_t = setTimeout(function () { c(n, r) }, i.timeout) } } }; return this.on({ "mouseenter.hoverIntent": h, "mouseleave.hoverIntent": h }, i.selector) } })(jQuery);;
/*
 * =============================================================
 * ElxNav by Jarda Sarzik
 * =============================================================
 */

(function (window, document, $) {

	// pomocna metoda - vrati maximalni uroven zanooreni menu - slouzi pak pro binding hover eventu
	var _getMenuDepth = function (root) {

		var $children = $(root).find('> ul > li').children('.sub-menu');
		var depth = 1;

		while ($children.length > 0) {
			$children = $children.find('ul > li').children('.sub-menu');
			depth += 1;
		}

		return depth;
	};

	var _isMenuExist = function ($menu) {
		return !$.isEmptyObject($menu);
	};

	var _objInstances = [];

	// konstruktor
	var ElxNav = function (opts) {
		this.$menu = new Object();
		this.device = '';
		this.maxMenuDepth = 0; // maximalni zanoreni menu
		this.openClass = 'is-open';
		this.opts = new Object();
		this.currentOpenedChild = new Object(),
			this.isOpen = false;

		_objInstances.push(this);

		if (typeof opts != 'undefined') {
			this.opts = $.extend({}, this.opts, opts);
		}
	};

	// metoda pro otevreni submenu
	ElxNav.prototype.navChildOpen = function (li) {
		var _elxNav = this;

		_elxNav.currentOpenedChild = li;

		$(li).addClass(_elxNav.openClass);

		if (!$('html').hasClass('elxNav_open') && _elxNav.device === 'mobile') {
			$('html').addClass('elxNav_open');
		}

		_elxNav.isOpen = true;
	};

	// metoda pro zavreni submenu
	ElxNav.prototype.navChildClose = function (li) {
		var _elxNav = this;

		_elxNav.currentOpenedChild = {};

		$(li).removeClass(_elxNav.openClass);
	};

	// metoda pro otevreni menu
	ElxNav.prototype.openNav = function () {
		var _elxNav = this;

		if (!_isMenuExist(_elxNav.$menu)) {
			return;
		}

		if (!$('html').hasClass('elxNav_open') && _elxNav.device === 'mobile') {
			$('html').addClass('elxNav_open');
		}

		_elxNav.isOpen = true;
	};

	// metoda pro uplne zavreni celeho menu
	ElxNav.prototype.closeNav = function () {
		var _elxNav = this;

		if (!_isMenuExist(_elxNav.$menu)) {
			return;
		}

		_elxNav.currentOpenedChild = {};

		_elxNav.$menu.find('.' + _elxNav.openClass).removeAttr('style').removeClass(_elxNav.openClass);

		$('html').removeClass('elxNav_open');

		_elxNav.isOpen = false;
	};

	// udalosti pro desktop / hover
	ElxNav.prototype.desktop_Events = function () {
		var _elxNav = this;

		if (_elxNav.maxMenuDepth == 0) {
			return;
		}

		for (var i = 1; i <= _elxNav.maxMenuDepth; i++) {
			var level = i;
			var $levelMenuItems = _elxNav.$menu.find('.level-' + level + ' > li');

			// pokud jsem na hp tak nebinduj hover pro prvni uroven
			//if (level == 1 && App.props.isPageHp) {
			//	continue;
			//}

			if ((_elxNav.opts != null) && ('hoverCallBacks' in _elxNav.opts) && (level in _elxNav.opts.hoverCallBacks) && (typeof _elxNav.opts.hoverCallBacks[level] === 'function')) {

				$levelMenuItems.hoverIntent({
					over: function (e) {
						_elxNav.opts.hoverCallBacks[level].call(_elxNav, this);
					},
					timeout: 200,
					interval: 200,
					out: function (e) {
						_elxNav.navChildClose(this);
					}
				});
			} else {
				$levelMenuItems.hoverIntent({
					over: function (e) {
						_elxNav.navChildOpen(this);
					},
					timeout: 200,
					interval: 200,
					out: function (e) {
						_elxNav.navChildClose(this);
					}
				});
			}
		}
	};

	// udalosti pro mobil / touch
	ElxNav.prototype.mobile_Events = function () {
		var _elxNav = this;

		var _clickHandler = function (e) {
			var $li = $(this).closest('li'),
				$parent = $li.closest('ul');

			e.stopPropagation();

			// pokud klikam na jiz otevreny prvek
			if ($li.hasClass(_elxNav.openClass)) {

				_elxNav.navChildClose($li);
				return;
			}

			// pokud ma parent vice polozek submenu tak vsechny zavri v dane urovni
			if ($parent.length > 0) {

				$parent.find('> li.' + _elxNav.openClass).each(function () {
					_elxNav.navChildClose(this);
				});
			}

			// otevri submenu childu na ktere bylo kliknuto
			if ((_elxNav.opts != null) && ('clickCallBacks' in _elxNav.opts) && (e.data.level in _elxNav.opts.clickCallBacks) && (typeof _elxNav.opts.clickCallBacks[e.data.level] === 'function')) {
				_elxNav.opts.clickCallBacks[e.data.level].call(_elxNav, $li);
			} else {
				_elxNav.navChildOpen($li);
			}

			// uprava kdyby bylo potreba mit nejeke submenu uz otevrene tak aby parent dostal tridu openClass (viz hp)
			if (!$parent.hasClass(_elxNav.openClass)) {
				$parent.addClass(_elxNav.openClass);
			}
		};

		for (var i = 1; i <= _elxNav.maxMenuDepth; i++) {
			var _level = i;
			var $levelMenuItems = _elxNav.$menu.find('.level-' + _level + ' > li');

			// pokud je uroven pouze klikaci - nema tedy odkaz - napriklad prvni uroven
			$levelMenuItems.find('> .btn-nav-touch').on('click', { level: _level }, _clickHandler);
			$levelMenuItems.find('> .nav-link-wrap > .btn-toggle').on('click', { level: _level }, _clickHandler);
		}
	};

	ElxNav.prototype.init = function (menuSelector) {
		var _elxNav = this,
			$menu = $(menuSelector);

		if ($menu.length == 0) {
			if (App.debug) {
				console.log('Menu s požadovaným selektorem neexistuje.');
			}
			return false;
		}

		this.$menu = $menu;
		this.device = App.is_touch() ? 'mobile' : 'desktop';
		this.maxMenuDepth = _getMenuDepth(this.$menu.find('> nav'));
		this.openClass = App.settings.openClass;

		if (this.device == 'desktop') {
			this.desktop_Events();
		}

		if (this.device == 'mobile') {
			this.mobile_Events();
		}

		// kvuli moznosti zavrit box kliknutim bokem do stranky - zastavi se probublavani na child elementy
		// pripadne se zavrou ostatni otevrene menu
		$('body').on('click', $menu.selector, function (e) {
			e.stopPropagation();

			var instances = _objInstances.length;

			for (var i = 0; i < instances; i++) {
				if ($menu.is(_objInstances[i].$menu)) {
					continue;
				}

				_objInstances[i].closeNav();
			}

			//console.log(this, e.target);
		});

		if ((_elxNav.opts !== null) && ('afterInit' in _elxNav.opts) && (typeof _elxNav.opts.afterInit === 'function')) {
			_elxNav.opts.afterInit.call(_elxNav, this);
		}
	};

	// zavreni menu kliknutim bokem do stranky
	$(document).on('click', function (e) {

		var instances = _objInstances.length;

		for (var i = 0; i < instances; i++) {
			_objInstances[i].closeNav();
		}

		//if (!$menu.is(e.target)) {
		//	_elxNav.closeNav();
		//}
	});

	// vlozeni objektu do objektu window aby byl pristupny odkudkoliv
	window.ElxNav = ElxNav;

}(window, document, jQuery));;
/*! jQuery UI - v1.10.4 - 2014-01-17 - core
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (e, t) { function i(t, i) { var a, n, r, o = t.nodeName.toLowerCase(); return "area" === o ? (a = t.parentNode, n = a.name, t.href && n && "map" === a.nodeName.toLowerCase() ? (r = e("img[usemap=#" + n + "]")[0], !!r && s(r)) : !1) : (/input|select|textarea|button|object/.test(o) ? !t.disabled : "a" === o ? t.href || i : i) && s(t) } function s(t) { return e.expr.filters.visible(t) && !e(t).parents().addBack().filter(function () { return "hidden" === e.css(this, "visibility") }).length } var a = 0, n = /^ui-id-\d+$/; e.ui = e.ui || {}, e.extend(e.ui, { version: "1.10.4", keyCode: { BACKSPACE: 8, COMMA: 188, DELETE: 46, DOWN: 40, END: 35, ENTER: 13, ESCAPE: 27, HOME: 36, LEFT: 37, NUMPAD_ADD: 107, NUMPAD_DECIMAL: 110, NUMPAD_DIVIDE: 111, NUMPAD_ENTER: 108, NUMPAD_MULTIPLY: 106, NUMPAD_SUBTRACT: 109, PAGE_DOWN: 34, PAGE_UP: 33, PERIOD: 190, RIGHT: 39, SPACE: 32, TAB: 9, UP: 38 } }), e.fn.extend({ focus: function (t) { return function (i, s) { return "number" == typeof i ? this.each(function () { var t = this; setTimeout(function () { e(t).focus(), s && s.call(t) }, i) }) : t.apply(this, arguments) } }(e.fn.focus), scrollParent: function () { var t; return t = e.ui.ie && /(static|relative)/.test(this.css("position")) || /absolute/.test(this.css("position")) ? this.parents().filter(function () { return /(relative|absolute|fixed)/.test(e.css(this, "position")) && /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x")) }).eq(0) : this.parents().filter(function () { return /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x")) }).eq(0), /fixed/.test(this.css("position")) || !t.length ? e(document) : t }, zIndex: function (i) { if (i !== t) return this.css("zIndex", i); if (this.length) for (var s, a, n = e(this[0]) ; n.length && n[0] !== document;) { if (s = n.css("position"), ("absolute" === s || "relative" === s || "fixed" === s) && (a = parseInt(n.css("zIndex"), 10), !isNaN(a) && 0 !== a)) return a; n = n.parent() } return 0 }, uniqueId: function () { return this.each(function () { this.id || (this.id = "ui-id-" + ++a) }) }, removeUniqueId: function () { return this.each(function () { n.test(this.id) && e(this).removeAttr("id") }) } }), e.extend(e.expr[":"], { data: e.expr.createPseudo ? e.expr.createPseudo(function (t) { return function (i) { return !!e.data(i, t) } }) : function (t, i, s) { return !!e.data(t, s[3]) }, focusable: function (t) { return i(t, !isNaN(e.attr(t, "tabindex"))) }, tabbable: function (t) { var s = e.attr(t, "tabindex"), a = isNaN(s); return (a || s >= 0) && i(t, !a) } }), e("<a>").outerWidth(1).jquery || e.each(["Width", "Height"], function (i, s) { function a(t, i, s, a) { return e.each(n, function () { i -= parseFloat(e.css(t, "padding" + this)) || 0, s && (i -= parseFloat(e.css(t, "border" + this + "Width")) || 0), a && (i -= parseFloat(e.css(t, "margin" + this)) || 0) }), i } var n = "Width" === s ? ["Left", "Right"] : ["Top", "Bottom"], r = s.toLowerCase(), o = { innerWidth: e.fn.innerWidth, innerHeight: e.fn.innerHeight, outerWidth: e.fn.outerWidth, outerHeight: e.fn.outerHeight }; e.fn["inner" + s] = function (i) { return i === t ? o["inner" + s].call(this) : this.each(function () { e(this).css(r, a(this, i) + "px") }) }, e.fn["outer" + s] = function (t, i) { return "number" != typeof t ? o["outer" + s].call(this, t) : this.each(function () { e(this).css(r, a(this, t, !0, i) + "px") }) } }), e.fn.addBack || (e.fn.addBack = function (e) { return this.add(null == e ? this.prevObject : this.prevObject.filter(e)) }), e("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (e.fn.removeData = function (t) { return function (i) { return arguments.length ? t.call(this, e.camelCase(i)) : t.call(this) } }(e.fn.removeData)), e.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), e.support.selectstart = "onselectstart" in document.createElement("div"), e.fn.extend({ disableSelection: function () { return this.bind((e.support.selectstart ? "selectstart" : "mousedown") + ".ui-disableSelection", function (e) { e.preventDefault() }) }, enableSelection: function () { return this.unbind(".ui-disableSelection") } }), e.extend(e.ui, { plugin: { add: function (t, i, s) { var a, n = e.ui[t].prototype; for (a in s) n.plugins[a] = n.plugins[a] || [], n.plugins[a].push([i, s[a]]) }, call: function (e, t, i) { var s, a = e.plugins[t]; if (a && e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType) for (s = 0; a.length > s; s++) e.options[a[s][0]] && a[s][1].apply(e.element, i) } }, hasScroll: function (t, i) { if ("hidden" === e(t).css("overflow")) return !1; var s = i && "left" === i ? "scrollLeft" : "scrollTop", a = !1; return t[s] > 0 ? !0 : (t[s] = 1, a = t[s] > 0, t[s] = 0, a) } }) })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - widget
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (e, t) { var i = 0, s = Array.prototype.slice, n = e.cleanData; e.cleanData = function (t) { for (var i, s = 0; null != (i = t[s]) ; s++) try { e(i).triggerHandler("remove") } catch (a) { } n(t) }, e.widget = function (i, s, n) { var a, r, o, h, l = {}, u = i.split(".")[0]; i = i.split(".")[1], a = u + "-" + i, n || (n = s, s = e.Widget), e.expr[":"][a.toLowerCase()] = function (t) { return !!e.data(t, a) }, e[u] = e[u] || {}, r = e[u][i], o = e[u][i] = function (e, i) { return this._createWidget ? (arguments.length && this._createWidget(e, i), t) : new o(e, i) }, e.extend(o, r, { version: n.version, _proto: e.extend({}, n), _childConstructors: [] }), h = new s, h.options = e.widget.extend({}, h.options), e.each(n, function (i, n) { return e.isFunction(n) ? (l[i] = function () { var e = function () { return s.prototype[i].apply(this, arguments) }, t = function (e) { return s.prototype[i].apply(this, e) }; return function () { var i, s = this._super, a = this._superApply; return this._super = e, this._superApply = t, i = n.apply(this, arguments), this._super = s, this._superApply = a, i } }(), t) : (l[i] = n, t) }), o.prototype = e.widget.extend(h, { widgetEventPrefix: r ? h.widgetEventPrefix || i : i }, l, { constructor: o, namespace: u, widgetName: i, widgetFullName: a }), r ? (e.each(r._childConstructors, function (t, i) { var s = i.prototype; e.widget(s.namespace + "." + s.widgetName, o, i._proto) }), delete r._childConstructors) : s._childConstructors.push(o), e.widget.bridge(i, o) }, e.widget.extend = function (i) { for (var n, a, r = s.call(arguments, 1), o = 0, h = r.length; h > o; o++) for (n in r[o]) a = r[o][n], r[o].hasOwnProperty(n) && a !== t && (i[n] = e.isPlainObject(a) ? e.isPlainObject(i[n]) ? e.widget.extend({}, i[n], a) : e.widget.extend({}, a) : a); return i }, e.widget.bridge = function (i, n) { var a = n.prototype.widgetFullName || i; e.fn[i] = function (r) { var o = "string" == typeof r, h = s.call(arguments, 1), l = this; return r = !o && h.length ? e.widget.extend.apply(null, [r].concat(h)) : r, o ? this.each(function () { var s, n = e.data(this, a); return n ? e.isFunction(n[r]) && "_" !== r.charAt(0) ? (s = n[r].apply(n, h), s !== n && s !== t ? (l = s && s.jquery ? l.pushStack(s.get()) : s, !1) : t) : e.error("no such method '" + r + "' for " + i + " widget instance") : e.error("cannot call methods on " + i + " prior to initialization; " + "attempted to call method '" + r + "'") }) : this.each(function () { var t = e.data(this, a); t ? t.option(r || {})._init() : e.data(this, a, new n(r, this)) }), l } }, e.Widget = function () { }, e.Widget._childConstructors = [], e.Widget.prototype = { widgetName: "widget", widgetEventPrefix: "", defaultElement: "<div>", options: { disabled: !1, create: null }, _createWidget: function (t, s) { s = e(s || this.defaultElement || this)[0], this.element = e(s), this.uuid = i++, this.eventNamespace = "." + this.widgetName + this.uuid, this.options = e.widget.extend({}, this.options, this._getCreateOptions(), t), this.bindings = e(), this.hoverable = e(), this.focusable = e(), s !== this && (e.data(s, this.widgetFullName, this), this._on(!0, this.element, { remove: function (e) { e.target === s && this.destroy() } }), this.document = e(s.style ? s.ownerDocument : s.document || s), this.window = e(this.document[0].defaultView || this.document[0].parentWindow)), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init() }, _getCreateOptions: e.noop, _getCreateEventData: e.noop, _create: e.noop, _init: e.noop, destroy: function () { this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus") }, _destroy: e.noop, widget: function () { return this.element }, option: function (i, s) { var n, a, r, o = i; if (0 === arguments.length) return e.widget.extend({}, this.options); if ("string" == typeof i) if (o = {}, n = i.split("."), i = n.shift(), n.length) { for (a = o[i] = e.widget.extend({}, this.options[i]), r = 0; n.length - 1 > r; r++) a[n[r]] = a[n[r]] || {}, a = a[n[r]]; if (i = n.pop(), 1 === arguments.length) return a[i] === t ? null : a[i]; a[i] = s } else { if (1 === arguments.length) return this.options[i] === t ? null : this.options[i]; o[i] = s } return this._setOptions(o), this }, _setOptions: function (e) { var t; for (t in e) this._setOption(t, e[t]); return this }, _setOption: function (e, t) { return this.options[e] = t, "disabled" === e && (this.widget().toggleClass(this.widgetFullName + "-disabled ui-state-disabled", !!t).attr("aria-disabled", t), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")), this }, enable: function () { return this._setOption("disabled", !1) }, disable: function () { return this._setOption("disabled", !0) }, _on: function (i, s, n) { var a, r = this; "boolean" != typeof i && (n = s, s = i, i = !1), n ? (s = a = e(s), this.bindings = this.bindings.add(s)) : (n = s, s = this.element, a = this.widget()), e.each(n, function (n, o) { function h() { return i || r.options.disabled !== !0 && !e(this).hasClass("ui-state-disabled") ? ("string" == typeof o ? r[o] : o).apply(r, arguments) : t } "string" != typeof o && (h.guid = o.guid = o.guid || h.guid || e.guid++); var l = n.match(/^(\w+)\s*(.*)$/), u = l[1] + r.eventNamespace, c = l[2]; c ? a.delegate(c, u, h) : s.bind(u, h) }) }, _off: function (e, t) { t = (t || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.unbind(t).undelegate(t) }, _delay: function (e, t) { function i() { return ("string" == typeof e ? s[e] : e).apply(s, arguments) } var s = this; return setTimeout(i, t || 0) }, _hoverable: function (t) { this.hoverable = this.hoverable.add(t), this._on(t, { mouseenter: function (t) { e(t.currentTarget).addClass("ui-state-hover") }, mouseleave: function (t) { e(t.currentTarget).removeClass("ui-state-hover") } }) }, _focusable: function (t) { this.focusable = this.focusable.add(t), this._on(t, { focusin: function (t) { e(t.currentTarget).addClass("ui-state-focus") }, focusout: function (t) { e(t.currentTarget).removeClass("ui-state-focus") } }) }, _trigger: function (t, i, s) { var n, a, r = this.options[t]; if (s = s || {}, i = e.Event(i), i.type = (t === this.widgetEventPrefix ? t : this.widgetEventPrefix + t).toLowerCase(), i.target = this.element[0], a = i.originalEvent) for (n in a) n in i || (i[n] = a[n]); return this.element.trigger(i, s), !(e.isFunction(r) && r.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented()) } }, e.each({ show: "fadeIn", hide: "fadeOut" }, function (t, i) { e.Widget.prototype["_" + t] = function (s, n, a) { "string" == typeof n && (n = { effect: n }); var r, o = n ? n === !0 || "number" == typeof n ? i : n.effect || i : t; n = n || {}, "number" == typeof n && (n = { duration: n }), r = !e.isEmptyObject(n), n.complete = a, n.delay && s.delay(n.delay), r && e.effects && e.effects.effect[o] ? s[t](n) : o !== t && s[o] ? s[o](n.duration, n.easing, a) : s.queue(function (i) { e(this)[t](), a && a.call(s[0]), i() }) } }) })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - position
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (t, e) { function i(t, e, i) { return [parseFloat(t[0]) * (p.test(t[0]) ? e / 100 : 1), parseFloat(t[1]) * (p.test(t[1]) ? i / 100 : 1)] } function s(e, i) { return parseInt(t.css(e, i), 10) || 0 } function n(e) { var i = e[0]; return 9 === i.nodeType ? { width: e.width(), height: e.height(), offset: { top: 0, left: 0 } } : t.isWindow(i) ? { width: e.width(), height: e.height(), offset: { top: e.scrollTop(), left: e.scrollLeft() } } : i.preventDefault ? { width: 0, height: 0, offset: { top: i.pageY, left: i.pageX } } : { width: e.outerWidth(), height: e.outerHeight(), offset: e.offset() } } t.ui = t.ui || {}; var a, o = Math.max, r = Math.abs, h = Math.round, l = /left|center|right/, c = /top|center|bottom/, u = /[\+\-]\d+(\.[\d]+)?%?/, d = /^\w+/, p = /%$/, f = t.fn.position; t.position = { scrollbarWidth: function () { if (a !== e) return a; var i, s, n = t("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"), o = n.children()[0]; return t("body").append(n), i = o.offsetWidth, n.css("overflow", "scroll"), s = o.offsetWidth, i === s && (s = n[0].clientWidth), n.remove(), a = i - s }, getScrollInfo: function (e) { var i = e.isWindow || e.isDocument ? "" : e.element.css("overflow-x"), s = e.isWindow || e.isDocument ? "" : e.element.css("overflow-y"), n = "scroll" === i || "auto" === i && e.width < e.element[0].scrollWidth, a = "scroll" === s || "auto" === s && e.height < e.element[0].scrollHeight; return { width: a ? t.position.scrollbarWidth() : 0, height: n ? t.position.scrollbarWidth() : 0 } }, getWithinInfo: function (e) { var i = t(e || window), s = t.isWindow(i[0]), n = !!i[0] && 9 === i[0].nodeType; return { element: i, isWindow: s, isDocument: n, offset: i.offset() || { left: 0, top: 0 }, scrollLeft: i.scrollLeft(), scrollTop: i.scrollTop(), width: s ? i.width() : i.outerWidth(), height: s ? i.height() : i.outerHeight() } } }, t.fn.position = function (e) { if (!e || !e.of) return f.apply(this, arguments); e = t.extend({}, e); var a, p, m, g, v, b, _ = t(e.of), y = t.position.getWithinInfo(e.within), w = t.position.getScrollInfo(y), x = (e.collision || "flip").split(" "), k = {}; return b = n(_), _[0].preventDefault && (e.at = "left top"), p = b.width, m = b.height, g = b.offset, v = t.extend({}, g), t.each(["my", "at"], function () { var t, i, s = (e[this] || "").split(" "); 1 === s.length && (s = l.test(s[0]) ? s.concat(["center"]) : c.test(s[0]) ? ["center"].concat(s) : ["center", "center"]), s[0] = l.test(s[0]) ? s[0] : "center", s[1] = c.test(s[1]) ? s[1] : "center", t = u.exec(s[0]), i = u.exec(s[1]), k[this] = [t ? t[0] : 0, i ? i[0] : 0], e[this] = [d.exec(s[0])[0], d.exec(s[1])[0]] }), 1 === x.length && (x[1] = x[0]), "right" === e.at[0] ? v.left += p : "center" === e.at[0] && (v.left += p / 2), "bottom" === e.at[1] ? v.top += m : "center" === e.at[1] && (v.top += m / 2), a = i(k.at, p, m), v.left += a[0], v.top += a[1], this.each(function () { var n, l, c = t(this), u = c.outerWidth(), d = c.outerHeight(), f = s(this, "marginLeft"), b = s(this, "marginTop"), D = u + f + s(this, "marginRight") + w.width, T = d + b + s(this, "marginBottom") + w.height, C = t.extend({}, v), M = i(k.my, c.outerWidth(), c.outerHeight()); "right" === e.my[0] ? C.left -= u : "center" === e.my[0] && (C.left -= u / 2), "bottom" === e.my[1] ? C.top -= d : "center" === e.my[1] && (C.top -= d / 2), C.left += M[0], C.top += M[1], t.support.offsetFractions || (C.left = h(C.left), C.top = h(C.top)), n = { marginLeft: f, marginTop: b }, t.each(["left", "top"], function (i, s) { t.ui.position[x[i]] && t.ui.position[x[i]][s](C, { targetWidth: p, targetHeight: m, elemWidth: u, elemHeight: d, collisionPosition: n, collisionWidth: D, collisionHeight: T, offset: [a[0] + M[0], a[1] + M[1]], my: e.my, at: e.at, within: y, elem: c }) }), e.using && (l = function (t) { var i = g.left - C.left, s = i + p - u, n = g.top - C.top, a = n + m - d, h = { target: { element: _, left: g.left, top: g.top, width: p, height: m }, element: { element: c, left: C.left, top: C.top, width: u, height: d }, horizontal: 0 > s ? "left" : i > 0 ? "right" : "center", vertical: 0 > a ? "top" : n > 0 ? "bottom" : "middle" }; u > p && p > r(i + s) && (h.horizontal = "center"), d > m && m > r(n + a) && (h.vertical = "middle"), h.important = o(r(i), r(s)) > o(r(n), r(a)) ? "horizontal" : "vertical", e.using.call(this, t, h) }), c.offset(t.extend(C, { using: l })) }) }, t.ui.position = { fit: { left: function (t, e) { var i, s = e.within, n = s.isWindow ? s.scrollLeft : s.offset.left, a = s.width, r = t.left - e.collisionPosition.marginLeft, h = n - r, l = r + e.collisionWidth - a - n; e.collisionWidth > a ? h > 0 && 0 >= l ? (i = t.left + h + e.collisionWidth - a - n, t.left += h - i) : t.left = l > 0 && 0 >= h ? n : h > l ? n + a - e.collisionWidth : n : h > 0 ? t.left += h : l > 0 ? t.left -= l : t.left = o(t.left - r, t.left) }, top: function (t, e) { var i, s = e.within, n = s.isWindow ? s.scrollTop : s.offset.top, a = e.within.height, r = t.top - e.collisionPosition.marginTop, h = n - r, l = r + e.collisionHeight - a - n; e.collisionHeight > a ? h > 0 && 0 >= l ? (i = t.top + h + e.collisionHeight - a - n, t.top += h - i) : t.top = l > 0 && 0 >= h ? n : h > l ? n + a - e.collisionHeight : n : h > 0 ? t.top += h : l > 0 ? t.top -= l : t.top = o(t.top - r, t.top) } }, flip: { left: function (t, e) { var i, s, n = e.within, a = n.offset.left + n.scrollLeft, o = n.width, h = n.isWindow ? n.scrollLeft : n.offset.left, l = t.left - e.collisionPosition.marginLeft, c = l - h, u = l + e.collisionWidth - o - h, d = "left" === e.my[0] ? -e.elemWidth : "right" === e.my[0] ? e.elemWidth : 0, p = "left" === e.at[0] ? e.targetWidth : "right" === e.at[0] ? -e.targetWidth : 0, f = -2 * e.offset[0]; 0 > c ? (i = t.left + d + p + f + e.collisionWidth - o - a, (0 > i || r(c) > i) && (t.left += d + p + f)) : u > 0 && (s = t.left - e.collisionPosition.marginLeft + d + p + f - h, (s > 0 || u > r(s)) && (t.left += d + p + f)) }, top: function (t, e) { var i, s, n = e.within, a = n.offset.top + n.scrollTop, o = n.height, h = n.isWindow ? n.scrollTop : n.offset.top, l = t.top - e.collisionPosition.marginTop, c = l - h, u = l + e.collisionHeight - o - h, d = "top" === e.my[1], p = d ? -e.elemHeight : "bottom" === e.my[1] ? e.elemHeight : 0, f = "top" === e.at[1] ? e.targetHeight : "bottom" === e.at[1] ? -e.targetHeight : 0, m = -2 * e.offset[1]; 0 > c ? (s = t.top + p + f + m + e.collisionHeight - o - a, t.top + p + f + m > c && (0 > s || r(c) > s) && (t.top += p + f + m)) : u > 0 && (i = t.top - e.collisionPosition.marginTop + p + f + m - h, t.top + p + f + m > u && (i > 0 || u > r(i)) && (t.top += p + f + m)) } }, flipfit: { left: function () { t.ui.position.flip.left.apply(this, arguments), t.ui.position.fit.left.apply(this, arguments) }, top: function () { t.ui.position.flip.top.apply(this, arguments), t.ui.position.fit.top.apply(this, arguments) } } }, function () { var e, i, s, n, a, o = document.getElementsByTagName("body")[0], r = document.createElement("div"); e = document.createElement(o ? "div" : "body"), s = { visibility: "hidden", width: 0, height: 0, border: 0, margin: 0, background: "none" }, o && t.extend(s, { position: "absolute", left: "-1000px", top: "-1000px" }); for (a in s) e.style[a] = s[a]; e.appendChild(r), i = o || document.documentElement, i.insertBefore(e, i.firstChild), r.style.cssText = "position: absolute; left: 10.7432222px;", n = t(r).offset().left, t.support.offsetFractions = n > 10 && 11 > n, e.innerHTML = "", i.removeChild(e) }() })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - menu
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (t) { t.widget("ui.menu", { version: "1.10.4", defaultElement: "<ul>", delay: 300, options: { icons: { submenu: "ui-icon-carat-1-e" }, menus: "ul", position: { my: "left top", at: "right top" }, role: "menu", blur: null, focus: null, select: null }, _create: function () { this.activeMenu = this.element, this.mouseHandled = !1, this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content ui-corner-all").toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length).attr({ role: this.options.role, tabIndex: 0 }).bind("click" + this.eventNamespace, t.proxy(function (t) { this.options.disabled && t.preventDefault() }, this)), this.options.disabled && this.element.addClass("ui-state-disabled").attr("aria-disabled", "true"), this._on({ "mousedown .ui-menu-item > a": function (t) { t.preventDefault() }, "click .ui-state-disabled > a": function (t) { t.preventDefault() }, "click .ui-menu-item:has(a)": function (e) { var i = t(e.target).closest(".ui-menu-item"); !this.mouseHandled && i.not(".ui-state-disabled").length && (this.select(e), e.isPropagationStopped() || (this.mouseHandled = !0), i.has(".ui-menu").length ? this.expand(e) : !this.element.is(":focus") && t(this.document[0].activeElement).closest(".ui-menu").length && (this.element.trigger("focus", [!0]), this.active && 1 === this.active.parents(".ui-menu").length && clearTimeout(this.timer))) }, "mouseenter .ui-menu-item": function (e) { var i = t(e.currentTarget); i.siblings().children(".ui-state-active").removeClass("ui-state-active"), this.focus(e, i) }, mouseleave: "collapseAll", "mouseleave .ui-menu": "collapseAll", focus: function (t, e) { var i = this.active || this.element.children(".ui-menu-item").eq(0); e || this.focus(t, i) }, blur: function (e) { this._delay(function () { t.contains(this.element[0], this.document[0].activeElement) || this.collapseAll(e) }) }, keydown: "_keydown" }), this.refresh(), this._on(this.document, { click: function (e) { t(e.target).closest(".ui-menu").length || this.collapseAll(e), this.mouseHandled = !1 } }) }, _destroy: function () { this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeClass("ui-menu ui-widget ui-widget-content ui-corner-all ui-menu-icons").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show(), this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").children("a").removeUniqueId().removeClass("ui-corner-all ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function () { var e = t(this); e.data("ui-menu-submenu-carat") && e.remove() }), this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content") }, _keydown: function (e) { function i(t) { return t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&") } var s, n, a, o, r, h = !0; switch (e.keyCode) { case t.ui.keyCode.PAGE_UP: this.previousPage(e); break; case t.ui.keyCode.PAGE_DOWN: this.nextPage(e); break; case t.ui.keyCode.HOME: this._move("first", "first", e); break; case t.ui.keyCode.END: this._move("last", "last", e); break; case t.ui.keyCode.UP: this.previous(e); break; case t.ui.keyCode.DOWN: this.next(e); break; case t.ui.keyCode.LEFT: this.collapse(e); break; case t.ui.keyCode.RIGHT: this.active && !this.active.is(".ui-state-disabled") && this.expand(e); break; case t.ui.keyCode.ENTER: case t.ui.keyCode.SPACE: this._activate(e); break; case t.ui.keyCode.ESCAPE: this.collapse(e); break; default: h = !1, n = this.previousFilter || "", a = String.fromCharCode(e.keyCode), o = !1, clearTimeout(this.filterTimer), a === n ? o = !0 : a = n + a, r = RegExp("^" + i(a), "i"), s = this.activeMenu.children(".ui-menu-item").filter(function () { return r.test(t(this).children("a").text()) }), s = o && -1 !== s.index(this.active.next()) ? this.active.nextAll(".ui-menu-item") : s, s.length || (a = String.fromCharCode(e.keyCode), r = RegExp("^" + i(a), "i"), s = this.activeMenu.children(".ui-menu-item").filter(function () { return r.test(t(this).children("a").text()) })), s.length ? (this.focus(e, s), s.length > 1 ? (this.previousFilter = a, this.filterTimer = this._delay(function () { delete this.previousFilter }, 1e3)) : delete this.previousFilter) : delete this.previousFilter } h && e.preventDefault() }, _activate: function (t) { this.active.is(".ui-state-disabled") || (this.active.children("a[aria-haspopup='true']").length ? this.expand(t) : this.select(t)) }, refresh: function () { var e, i = this.options.icons.submenu, s = this.element.find(this.options.menus); this.element.toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length), s.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-corner-all").hide().attr({ role: this.options.role, "aria-hidden": "true", "aria-expanded": "false" }).each(function () { var e = t(this), s = e.prev("a"), n = t("<span>").addClass("ui-menu-icon ui-icon " + i).data("ui-menu-submenu-carat", !0); s.attr("aria-haspopup", "true").prepend(n), e.attr("aria-labelledby", s.attr("id")) }), e = s.add(this.element), e.children(":not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role", "presentation").children("a").uniqueId().addClass("ui-corner-all").attr({ tabIndex: -1, role: this._itemRole() }), e.children(":not(.ui-menu-item)").each(function () { var e = t(this); /[^\-\u2014\u2013\s]/.test(e.text()) || e.addClass("ui-widget-content ui-menu-divider") }), e.children(".ui-state-disabled").attr("aria-disabled", "true"), this.active && !t.contains(this.element[0], this.active[0]) && this.blur() }, _itemRole: function () { return { menu: "menuitem", listbox: "option" }[this.options.role] }, _setOption: function (t, e) { "icons" === t && this.element.find(".ui-menu-icon").removeClass(this.options.icons.submenu).addClass(e.submenu), this._super(t, e) }, focus: function (t, e) { var i, s; this.blur(t, t && "focus" === t.type), this._scrollIntoView(e), this.active = e.first(), s = this.active.children("a").addClass("ui-state-focus"), this.options.role && this.element.attr("aria-activedescendant", s.attr("id")), this.active.parent().closest(".ui-menu-item").children("a:first").addClass("ui-state-active"), t && "keydown" === t.type ? this._close() : this.timer = this._delay(function () { this._close() }, this.delay), i = e.children(".ui-menu"), i.length && t && /^mouse/.test(t.type) && this._startOpening(i), this.activeMenu = e.parent(), this._trigger("focus", t, { item: e }) }, _scrollIntoView: function (e) { var i, s, n, a, o, r; this._hasScroll() && (i = parseFloat(t.css(this.activeMenu[0], "borderTopWidth")) || 0, s = parseFloat(t.css(this.activeMenu[0], "paddingTop")) || 0, n = e.offset().top - this.activeMenu.offset().top - i - s, a = this.activeMenu.scrollTop(), o = this.activeMenu.height(), r = e.height(), 0 > n ? this.activeMenu.scrollTop(a + n) : n + r > o && this.activeMenu.scrollTop(a + n - o + r)) }, blur: function (t, e) { e || clearTimeout(this.timer), this.active && (this.active.children("a").removeClass("ui-state-focus"), this.active = null, this._trigger("blur", t, { item: this.active })) }, _startOpening: function (t) { clearTimeout(this.timer), "true" === t.attr("aria-hidden") && (this.timer = this._delay(function () { this._close(), this._open(t) }, this.delay)) }, _open: function (e) { var i = t.extend({ of: this.active }, this.options.position); clearTimeout(this.timer), this.element.find(".ui-menu").not(e.parents(".ui-menu")).hide().attr("aria-hidden", "true"), e.show().removeAttr("aria-hidden").attr("aria-expanded", "true").position(i) }, collapseAll: function (e, i) { clearTimeout(this.timer), this.timer = this._delay(function () { var s = i ? this.element : t(e && e.target).closest(this.element.find(".ui-menu")); s.length || (s = this.element), this._close(s), this.blur(e), this.activeMenu = s }, this.delay) }, _close: function (t) { t || (t = this.active ? this.active.parent() : this.element), t.find(".ui-menu").hide().attr("aria-hidden", "true").attr("aria-expanded", "false").end().find("a.ui-state-active").removeClass("ui-state-active") }, collapse: function (t) { var e = this.active && this.active.parent().closest(".ui-menu-item", this.element); e && e.length && (this._close(), this.focus(t, e)) }, expand: function (t) { var e = this.active && this.active.children(".ui-menu ").children(".ui-menu-item").first(); e && e.length && (this._open(e.parent()), this._delay(function () { this.focus(t, e) })) }, next: function (t) { this._move("next", "first", t) }, previous: function (t) { this._move("prev", "last", t) }, isFirstItem: function () { return this.active && !this.active.prevAll(".ui-menu-item").length }, isLastItem: function () { return this.active && !this.active.nextAll(".ui-menu-item").length }, _move: function (t, e, i) { var s; this.active && (s = "first" === t || "last" === t ? this.active["first" === t ? "prevAll" : "nextAll"](".ui-menu-item").eq(-1) : this.active[t + "All"](".ui-menu-item").eq(0)), s && s.length && this.active || (s = this.activeMenu.children(".ui-menu-item")[e]()), this.focus(i, s) }, nextPage: function (e) { var i, s, n; return this.active ? (this.isLastItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.nextAll(".ui-menu-item").each(function () { return i = t(this), 0 > i.offset().top - s - n }), this.focus(e, i)) : this.focus(e, this.activeMenu.children(".ui-menu-item")[this.active ? "last" : "first"]())), undefined) : (this.next(e), undefined) }, previousPage: function (e) { var i, s, n; return this.active ? (this.isFirstItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.prevAll(".ui-menu-item").each(function () { return i = t(this), i.offset().top - s + n > 0 }), this.focus(e, i)) : this.focus(e, this.activeMenu.children(".ui-menu-item").first())), undefined) : (this.next(e), undefined) }, _hasScroll: function () { return this.element.outerHeight() < this.element.prop("scrollHeight") }, select: function (e) { this.active = this.active || t(e.target).closest(".ui-menu-item"); var i = { item: this.active }; this.active.has(".ui-menu").length || this.collapseAll(e, !0), this._trigger("select", e, i) } }) })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - effect
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (t, e) { var i = "ui-effects-"; t.effects = { effect: {} }, function (t, e) { function i(t, e, i) { var s = u[e.type] || {}; return null == t ? i || !e.def ? null : e.def : (t = s.floor ? ~~t : parseFloat(t), isNaN(t) ? e.def : s.mod ? (t + s.mod) % s.mod : 0 > t ? 0 : t > s.max ? s.max : t) } function s(i) { var s = l(), n = s._rgba = []; return i = i.toLowerCase(), f(h, function (t, a) { var o, r = a.re.exec(i), h = r && a.parse(r), l = a.space || "rgba"; return h ? (o = s[l](h), s[c[l].cache] = o[c[l].cache], n = s._rgba = o._rgba, !1) : e }), n.length ? ("0,0,0,0" === n.join() && t.extend(n, a.transparent), s) : a[i] } function n(t, e, i) { return i = (i + 1) % 1, 1 > 6 * i ? t + 6 * (e - t) * i : 1 > 2 * i ? e : 2 > 3 * i ? t + 6 * (e - t) * (2 / 3 - i) : t } var a, o = "backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor", r = /^([\-+])=\s*(\d+\.?\d*)/, h = [{ re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/, parse: function (t) { return [t[1], t[2], t[3], t[4]] } }, { re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/, parse: function (t) { return [2.55 * t[1], 2.55 * t[2], 2.55 * t[3], t[4]] } }, { re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/, parse: function (t) { return [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)] } }, { re: /#([a-f0-9])([a-f0-9])([a-f0-9])/, parse: function (t) { return [parseInt(t[1] + t[1], 16), parseInt(t[2] + t[2], 16), parseInt(t[3] + t[3], 16)] } }, { re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/, space: "hsla", parse: function (t) { return [t[1], t[2] / 100, t[3] / 100, t[4]] } }], l = t.Color = function (e, i, s, n) { return new t.Color.fn.parse(e, i, s, n) }, c = { rgba: { props: { red: { idx: 0, type: "byte" }, green: { idx: 1, type: "byte" }, blue: { idx: 2, type: "byte" } } }, hsla: { props: { hue: { idx: 0, type: "degrees" }, saturation: { idx: 1, type: "percent" }, lightness: { idx: 2, type: "percent" } } } }, u = { "byte": { floor: !0, max: 255 }, percent: { max: 1 }, degrees: { mod: 360, floor: !0 } }, d = l.support = {}, p = t("<p>")[0], f = t.each; p.style.cssText = "background-color:rgba(1,1,1,.5)", d.rgba = p.style.backgroundColor.indexOf("rgba") > -1, f(c, function (t, e) { e.cache = "_" + t, e.props.alpha = { idx: 3, type: "percent", def: 1 } }), l.fn = t.extend(l.prototype, { parse: function (n, o, r, h) { if (n === e) return this._rgba = [null, null, null, null], this; (n.jquery || n.nodeType) && (n = t(n).css(o), o = e); var u = this, d = t.type(n), p = this._rgba = []; return o !== e && (n = [n, o, r, h], d = "array"), "string" === d ? this.parse(s(n) || a._default) : "array" === d ? (f(c.rgba.props, function (t, e) { p[e.idx] = i(n[e.idx], e) }), this) : "object" === d ? (n instanceof l ? f(c, function (t, e) { n[e.cache] && (u[e.cache] = n[e.cache].slice()) }) : f(c, function (e, s) { var a = s.cache; f(s.props, function (t, e) { if (!u[a] && s.to) { if ("alpha" === t || null == n[t]) return; u[a] = s.to(u._rgba) } u[a][e.idx] = i(n[t], e, !0) }), u[a] && 0 > t.inArray(null, u[a].slice(0, 3)) && (u[a][3] = 1, s.from && (u._rgba = s.from(u[a]))) }), this) : e }, is: function (t) { var i = l(t), s = !0, n = this; return f(c, function (t, a) { var o, r = i[a.cache]; return r && (o = n[a.cache] || a.to && a.to(n._rgba) || [], f(a.props, function (t, i) { return null != r[i.idx] ? s = r[i.idx] === o[i.idx] : e })), s }), s }, _space: function () { var t = [], e = this; return f(c, function (i, s) { e[s.cache] && t.push(i) }), t.pop() }, transition: function (t, e) { var s = l(t), n = s._space(), a = c[n], o = 0 === this.alpha() ? l("transparent") : this, r = o[a.cache] || a.to(o._rgba), h = r.slice(); return s = s[a.cache], f(a.props, function (t, n) { var a = n.idx, o = r[a], l = s[a], c = u[n.type] || {}; null !== l && (null === o ? h[a] = l : (c.mod && (l - o > c.mod / 2 ? o += c.mod : o - l > c.mod / 2 && (o -= c.mod)), h[a] = i((l - o) * e + o, n))) }), this[n](h) }, blend: function (e) { if (1 === this._rgba[3]) return this; var i = this._rgba.slice(), s = i.pop(), n = l(e)._rgba; return l(t.map(i, function (t, e) { return (1 - s) * n[e] + s * t })) }, toRgbaString: function () { var e = "rgba(", i = t.map(this._rgba, function (t, e) { return null == t ? e > 2 ? 1 : 0 : t }); return 1 === i[3] && (i.pop(), e = "rgb("), e + i.join() + ")" }, toHslaString: function () { var e = "hsla(", i = t.map(this.hsla(), function (t, e) { return null == t && (t = e > 2 ? 1 : 0), e && 3 > e && (t = Math.round(100 * t) + "%"), t }); return 1 === i[3] && (i.pop(), e = "hsl("), e + i.join() + ")" }, toHexString: function (e) { var i = this._rgba.slice(), s = i.pop(); return e && i.push(~~(255 * s)), "#" + t.map(i, function (t) { return t = (t || 0).toString(16), 1 === t.length ? "0" + t : t }).join("") }, toString: function () { return 0 === this._rgba[3] ? "transparent" : this.toRgbaString() } }), l.fn.parse.prototype = l.fn, c.hsla.to = function (t) { if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]]; var e, i, s = t[0] / 255, n = t[1] / 255, a = t[2] / 255, o = t[3], r = Math.max(s, n, a), h = Math.min(s, n, a), l = r - h, c = r + h, u = .5 * c; return e = h === r ? 0 : s === r ? 60 * (n - a) / l + 360 : n === r ? 60 * (a - s) / l + 120 : 60 * (s - n) / l + 240, i = 0 === l ? 0 : .5 >= u ? l / c : l / (2 - c), [Math.round(e) % 360, i, u, null == o ? 1 : o] }, c.hsla.from = function (t) { if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]]; var e = t[0] / 360, i = t[1], s = t[2], a = t[3], o = .5 >= s ? s * (1 + i) : s + i - s * i, r = 2 * s - o; return [Math.round(255 * n(r, o, e + 1 / 3)), Math.round(255 * n(r, o, e)), Math.round(255 * n(r, o, e - 1 / 3)), a] }, f(c, function (s, n) { var a = n.props, o = n.cache, h = n.to, c = n.from; l.fn[s] = function (s) { if (h && !this[o] && (this[o] = h(this._rgba)), s === e) return this[o].slice(); var n, r = t.type(s), u = "array" === r || "object" === r ? s : arguments, d = this[o].slice(); return f(a, function (t, e) { var s = u["object" === r ? t : e.idx]; null == s && (s = d[e.idx]), d[e.idx] = i(s, e) }), c ? (n = l(c(d)), n[o] = d, n) : l(d) }, f(a, function (e, i) { l.fn[e] || (l.fn[e] = function (n) { var a, o = t.type(n), h = "alpha" === e ? this._hsla ? "hsla" : "rgba" : s, l = this[h](), c = l[i.idx]; return "undefined" === o ? c : ("function" === o && (n = n.call(this, c), o = t.type(n)), null == n && i.empty ? this : ("string" === o && (a = r.exec(n), a && (n = c + parseFloat(a[2]) * ("+" === a[1] ? 1 : -1))), l[i.idx] = n, this[h](l))) }) }) }), l.hook = function (e) { var i = e.split(" "); f(i, function (e, i) { t.cssHooks[i] = { set: function (e, n) { var a, o, r = ""; if ("transparent" !== n && ("string" !== t.type(n) || (a = s(n)))) { if (n = l(a || n), !d.rgba && 1 !== n._rgba[3]) { for (o = "backgroundColor" === i ? e.parentNode : e; ("" === r || "transparent" === r) && o && o.style;) try { r = t.css(o, "backgroundColor"), o = o.parentNode } catch (h) { } n = n.blend(r && "transparent" !== r ? r : "_default") } n = n.toRgbaString() } try { e.style[i] = n } catch (h) { } } }, t.fx.step[i] = function (e) { e.colorInit || (e.start = l(e.elem, i), e.end = l(e.end), e.colorInit = !0), t.cssHooks[i].set(e.elem, e.start.transition(e.end, e.pos)) } }) }, l.hook(o), t.cssHooks.borderColor = { expand: function (t) { var e = {}; return f(["Top", "Right", "Bottom", "Left"], function (i, s) { e["border" + s + "Color"] = t }), e } }, a = t.Color.names = { aqua: "#00ffff", black: "#000000", blue: "#0000ff", fuchsia: "#ff00ff", gray: "#808080", green: "#008000", lime: "#00ff00", maroon: "#800000", navy: "#000080", olive: "#808000", purple: "#800080", red: "#ff0000", silver: "#c0c0c0", teal: "#008080", white: "#ffffff", yellow: "#ffff00", transparent: [null, null, null, 0], _default: "#ffffff" } }(jQuery), function () { function i(e) { var i, s, n = e.ownerDocument.defaultView ? e.ownerDocument.defaultView.getComputedStyle(e, null) : e.currentStyle, a = {}; if (n && n.length && n[0] && n[n[0]]) for (s = n.length; s--;) i = n[s], "string" == typeof n[i] && (a[t.camelCase(i)] = n[i]); else for (i in n) "string" == typeof n[i] && (a[i] = n[i]); return a } function s(e, i) { var s, n, o = {}; for (s in i) n = i[s], e[s] !== n && (a[s] || (t.fx.step[s] || !isNaN(parseFloat(n))) && (o[s] = n)); return o } var n = ["add", "remove", "toggle"], a = { border: 1, borderBottom: 1, borderColor: 1, borderLeft: 1, borderRight: 1, borderTop: 1, borderWidth: 1, margin: 1, padding: 1 }; t.each(["borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle"], function (e, i) { t.fx.step[i] = function (t) { ("none" !== t.end && !t.setAttr || 1 === t.pos && !t.setAttr) && (jQuery.style(t.elem, i, t.end), t.setAttr = !0) } }), t.fn.addBack || (t.fn.addBack = function (t) { return this.add(null == t ? this.prevObject : this.prevObject.filter(t)) }), t.effects.animateClass = function (e, a, o, r) { var h = t.speed(a, o, r); return this.queue(function () { var a, o = t(this), r = o.attr("class") || "", l = h.children ? o.find("*").addBack() : o; l = l.map(function () { var e = t(this); return { el: e, start: i(this) } }), a = function () { t.each(n, function (t, i) { e[i] && o[i + "Class"](e[i]) }) }, a(), l = l.map(function () { return this.end = i(this.el[0]), this.diff = s(this.start, this.end), this }), o.attr("class", r), l = l.map(function () { var e = this, i = t.Deferred(), s = t.extend({}, h, { queue: !1, complete: function () { i.resolve(e) } }); return this.el.animate(this.diff, s), i.promise() }), t.when.apply(t, l.get()).done(function () { a(), t.each(arguments, function () { var e = this.el; t.each(this.diff, function (t) { e.css(t, "") }) }), h.complete.call(o[0]) }) }) }, t.fn.extend({ addClass: function (e) { return function (i, s, n, a) { return s ? t.effects.animateClass.call(this, { add: i }, s, n, a) : e.apply(this, arguments) } }(t.fn.addClass), removeClass: function (e) { return function (i, s, n, a) { return arguments.length > 1 ? t.effects.animateClass.call(this, { remove: i }, s, n, a) : e.apply(this, arguments) } }(t.fn.removeClass), toggleClass: function (i) { return function (s, n, a, o, r) { return "boolean" == typeof n || n === e ? a ? t.effects.animateClass.call(this, n ? { add: s } : { remove: s }, a, o, r) : i.apply(this, arguments) : t.effects.animateClass.call(this, { toggle: s }, n, a, o) } }(t.fn.toggleClass), switchClass: function (e, i, s, n, a) { return t.effects.animateClass.call(this, { add: i, remove: e }, s, n, a) } }) }(), function () { function s(e, i, s, n) { return t.isPlainObject(e) && (i = e, e = e.effect), e = { effect: e }, null == i && (i = {}), t.isFunction(i) && (n = i, s = null, i = {}), ("number" == typeof i || t.fx.speeds[i]) && (n = s, s = i, i = {}), t.isFunction(s) && (n = s, s = null), i && t.extend(e, i), s = s || i.duration, e.duration = t.fx.off ? 0 : "number" == typeof s ? s : s in t.fx.speeds ? t.fx.speeds[s] : t.fx.speeds._default, e.complete = n || i.complete, e } function n(e) { return !e || "number" == typeof e || t.fx.speeds[e] ? !0 : "string" != typeof e || t.effects.effect[e] ? t.isFunction(e) ? !0 : "object" != typeof e || e.effect ? !1 : !0 : !0 } t.extend(t.effects, { version: "1.10.4", save: function (t, e) { for (var s = 0; e.length > s; s++) null !== e[s] && t.data(i + e[s], t[0].style[e[s]]) }, restore: function (t, s) { var n, a; for (a = 0; s.length > a; a++) null !== s[a] && (n = t.data(i + s[a]), n === e && (n = ""), t.css(s[a], n)) }, setMode: function (t, e) { return "toggle" === e && (e = t.is(":hidden") ? "show" : "hide"), e }, getBaseline: function (t, e) { var i, s; switch (t[0]) { case "top": i = 0; break; case "middle": i = .5; break; case "bottom": i = 1; break; default: i = t[0] / e.height } switch (t[1]) { case "left": s = 0; break; case "center": s = .5; break; case "right": s = 1; break; default: s = t[1] / e.width } return { x: s, y: i } }, createWrapper: function (e) { if (e.parent().is(".ui-effects-wrapper")) return e.parent(); var i = { width: e.outerWidth(!0), height: e.outerHeight(!0), "float": e.css("float") }, s = t("<div></div>").addClass("ui-effects-wrapper").css({ fontSize: "100%", background: "transparent", border: "none", margin: 0, padding: 0 }), n = { width: e.width(), height: e.height() }, a = document.activeElement; try { a.id } catch (o) { a = document.body } return e.wrap(s), (e[0] === a || t.contains(e[0], a)) && t(a).focus(), s = e.parent(), "static" === e.css("position") ? (s.css({ position: "relative" }), e.css({ position: "relative" })) : (t.extend(i, { position: e.css("position"), zIndex: e.css("z-index") }), t.each(["top", "left", "bottom", "right"], function (t, s) { i[s] = e.css(s), isNaN(parseInt(i[s], 10)) && (i[s] = "auto") }), e.css({ position: "relative", top: 0, left: 0, right: "auto", bottom: "auto" })), e.css(n), s.css(i).show() }, removeWrapper: function (e) { var i = document.activeElement; return e.parent().is(".ui-effects-wrapper") && (e.parent().replaceWith(e), (e[0] === i || t.contains(e[0], i)) && t(i).focus()), e }, setTransition: function (e, i, s, n) { return n = n || {}, t.each(i, function (t, i) { var a = e.cssUnit(i); a[0] > 0 && (n[i] = a[0] * s + a[1]) }), n } }), t.fn.extend({ effect: function () { function e(e) { function s() { t.isFunction(a) && a.call(n[0]), t.isFunction(e) && e() } var n = t(this), a = i.complete, r = i.mode; (n.is(":hidden") ? "hide" === r : "show" === r) ? (n[r](), s()) : o.call(n[0], i, s) } var i = s.apply(this, arguments), n = i.mode, a = i.queue, o = t.effects.effect[i.effect]; return t.fx.off || !o ? n ? this[n](i.duration, i.complete) : this.each(function () { i.complete && i.complete.call(this) }) : a === !1 ? this.each(e) : this.queue(a || "fx", e) }, show: function (t) { return function (e) { if (n(e)) return t.apply(this, arguments); var i = s.apply(this, arguments); return i.mode = "show", this.effect.call(this, i) } }(t.fn.show), hide: function (t) { return function (e) { if (n(e)) return t.apply(this, arguments); var i = s.apply(this, arguments); return i.mode = "hide", this.effect.call(this, i) } }(t.fn.hide), toggle: function (t) { return function (e) { if (n(e) || "boolean" == typeof e) return t.apply(this, arguments); var i = s.apply(this, arguments); return i.mode = "toggle", this.effect.call(this, i) } }(t.fn.toggle), cssUnit: function (e) { var i = this.css(e), s = []; return t.each(["em", "px", "%", "pt"], function (t, e) { i.indexOf(e) > 0 && (s = [parseFloat(i), e]) }), s } }) }(), function () { var e = {}; t.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function (t, i) { e[i] = function (e) { return Math.pow(e, t + 2) } }), t.extend(e, { Sine: function (t) { return 1 - Math.cos(t * Math.PI / 2) }, Circ: function (t) { return 1 - Math.sqrt(1 - t * t) }, Elastic: function (t) { return 0 === t || 1 === t ? t : -Math.pow(2, 8 * (t - 1)) * Math.sin((80 * (t - 1) - 7.5) * Math.PI / 15) }, Back: function (t) { return t * t * (3 * t - 2) }, Bounce: function (t) { for (var e, i = 4; ((e = Math.pow(2, --i)) - 1) / 11 > t;); return 1 / Math.pow(4, 3 - i) - 7.5625 * Math.pow((3 * e - 2) / 22 - t, 2) } }), t.each(e, function (e, i) { t.easing["easeIn" + e] = i, t.easing["easeOut" + e] = function (t) { return 1 - i(1 - t) }, t.easing["easeInOut" + e] = function (t) { return .5 > t ? i(2 * t) / 2 : 1 - i(-2 * t + 2) / 2 } }) }() })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - effect transfer
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (t) { t.effects.effect.transfer = function (e, i) { var s = t(this), n = t(e.to), a = "fixed" === n.css("position"), o = t("body"), r = a ? o.scrollTop() : 0, h = a ? o.scrollLeft() : 0, l = n.offset(), c = { top: l.top - r, left: l.left - h, height: n.innerHeight(), width: n.innerWidth() }, u = s.offset(), d = t("<div class='ui-effects-transfer'></div>").appendTo(document.body).addClass(e.className).css({ top: u.top - r, left: u.left - h, height: s.innerHeight(), width: s.innerWidth(), position: a ? "fixed" : "absolute" }).animate(c, e.duration, e.easing, function () { d.remove(), i() }) } })(jQuery);

/*! jQuery UI - v1.10.4 - 2014-01-17 - autocomplete
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function (t) { t.widget("ui.autocomplete", { version: "1.10.4", defaultElement: "<input>", options: { appendTo: null, autoFocus: !1, delay: 300, minLength: 1, position: { my: "left top", at: "left bottom", collision: "none" }, source: null, change: null, close: null, focus: null, open: null, response: null, search: null, select: null }, requestIndex: 0, pending: 0, _create: function () { var e, i, s, n = this.element[0].nodeName.toLowerCase(), a = "textarea" === n, o = "input" === n; this.isMultiLine = a ? !0 : o ? !1 : this.element.prop("isContentEditable"), this.valueMethod = this.element[a || o ? "val" : "text"], this.isNewMenu = !0, this.element.addClass("ui-autocomplete-input").attr("autocomplete", "off"), this._on(this.element, { keydown: function (n) { if (this.element.prop("readOnly")) return e = !0, s = !0, i = !0, undefined; e = !1, s = !1, i = !1; var a = t.ui.keyCode; switch (n.keyCode) { case a.PAGE_UP: e = !0, this._move("previousPage", n); break; case a.PAGE_DOWN: e = !0, this._move("nextPage", n); break; case a.UP: e = !0, this._keyEvent("previous", n); break; case a.DOWN: e = !0, this._keyEvent("next", n); break; case a.ENTER: case a.NUMPAD_ENTER: this.menu.active && (e = !0, n.preventDefault(), this.menu.select(n)); break; case a.TAB: this.menu.active && this.menu.select(n); break; case a.ESCAPE: this.menu.element.is(":visible") && (this._value(this.term), this.close(n), n.preventDefault()); break; default: i = !0, this._searchTimeout(n) } }, keypress: function (s) { if (e) return e = !1, (!this.isMultiLine || this.menu.element.is(":visible")) && s.preventDefault(), undefined; if (!i) { var n = t.ui.keyCode; switch (s.keyCode) { case n.PAGE_UP: this._move("previousPage", s); break; case n.PAGE_DOWN: this._move("nextPage", s); break; case n.UP: this._keyEvent("previous", s); break; case n.DOWN: this._keyEvent("next", s) } } }, input: function (t) { return s ? (s = !1, t.preventDefault(), undefined) : (this._searchTimeout(t), undefined) }, focus: function () { this.selectedItem = null, this.previous = this._value() }, blur: function (t) { return this.cancelBlur ? (delete this.cancelBlur, undefined) : (clearTimeout(this.searching), this.close(t), this._change(t), undefined) } }), this._initSource(), this.menu = t("<ul>").addClass("ui-autocomplete ui-front").appendTo(this._appendTo()).menu({ role: null }).hide().data("ui-menu"), this._on(this.menu.element, { mousedown: function (e) { e.preventDefault(), this.cancelBlur = !0, this._delay(function () { delete this.cancelBlur }); var i = this.menu.element[0]; t(e.target).closest(".ui-menu-item").length || this._delay(function () { var e = this; this.document.one("mousedown", function (s) { s.target === e.element[0] || s.target === i || t.contains(i, s.target) || e.close() }) }) }, menufocus: function (e, i) { if (this.isNewMenu && (this.isNewMenu = !1, e.originalEvent && /^mouse/.test(e.originalEvent.type))) return this.menu.blur(), this.document.one("mousemove", function () { t(e.target).trigger(e.originalEvent) }), undefined; var s = i.item.data("ui-autocomplete-item"); !1 !== this._trigger("focus", e, { item: s }) ? e.originalEvent && /^key/.test(e.originalEvent.type) && this._value(s.value) : this.liveRegion.text(s.value) }, menuselect: function (t, e) { var i = e.item.data("ui-autocomplete-item"), s = this.previous; this.element[0] !== this.document[0].activeElement && (this.element.focus(), this.previous = s, this._delay(function () { this.previous = s, this.selectedItem = i })), !1 !== this._trigger("select", t, { item: i }) && this._value(i.value), this.term = this._value(), this.close(t), this.selectedItem = i } }), this.liveRegion = t("<span>", { role: "status", "aria-live": "polite" }).addClass("ui-helper-hidden-accessible").insertBefore(this.element), this._on(this.window, { beforeunload: function () { this.element.removeAttr("autocomplete") } }) }, _destroy: function () { clearTimeout(this.searching), this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete"), this.menu.element.remove(), this.liveRegion.remove() }, _setOption: function (t, e) { this._super(t, e), "source" === t && this._initSource(), "appendTo" === t && this.menu.element.appendTo(this._appendTo()), "disabled" === t && e && this.xhr && this.xhr.abort() }, _appendTo: function () { var e = this.options.appendTo; return e && (e = e.jquery || e.nodeType ? t(e) : this.document.find(e).eq(0)), e || (e = this.element.closest(".ui-front")), e.length || (e = this.document[0].body), e }, _initSource: function () { var e, i, s = this; t.isArray(this.options.source) ? (e = this.options.source, this.source = function (i, s) { s(t.ui.autocomplete.filter(e, i.term)) }) : "string" == typeof this.options.source ? (i = this.options.source, this.source = function (e, n) { s.xhr && s.xhr.abort(), s.xhr = t.ajax({ url: i, data: e, dataType: "json", success: function (t) { n(t) }, error: function () { n([]) } }) }) : this.source = this.options.source }, _searchTimeout: function (t) { clearTimeout(this.searching), this.searching = this._delay(function () { this.term !== this._value() && (this.selectedItem = null, this.search(null, t)) }, this.options.delay) }, search: function (t, e) { return t = null != t ? t : this._value(), this.term = this._value(), t.length < this.options.minLength ? this.close(e) : this._trigger("search", e) !== !1 ? this._search(t) : undefined }, _search: function (t) { this.pending++, this.element.addClass("ui-autocomplete-loading"), this.cancelSearch = !1, this.source({ term: t }, this._response()) }, _response: function () { var e = ++this.requestIndex; return t.proxy(function (t) { e === this.requestIndex && this.__response(t), this.pending--, this.pending || this.element.removeClass("ui-autocomplete-loading") }, this) }, __response: function (t) { t && (t = this._normalize(t)), this._trigger("response", null, { content: t }), !this.options.disabled && t && t.length && !this.cancelSearch ? (this._suggest(t), this._trigger("open")) : this._close() }, close: function (t) { this.cancelSearch = !0, this._close(t) }, _close: function (t) { this.menu.element.is(":visible") && (this.menu.element.hide(), this.menu.blur(), this.isNewMenu = !0, this._trigger("close", t)) }, _change: function (t) { this.previous !== this._value() && this._trigger("change", t, { item: this.selectedItem }) }, _normalize: function (e) { return e.length && e[0].label && e[0].value ? e : t.map(e, function (e) { return "string" == typeof e ? { label: e, value: e } : t.extend({ label: e.label || e.value, value: e.value || e.label }, e) }) }, _suggest: function (e) { var i = this.menu.element.empty(); this._renderMenu(i, e), this.isNewMenu = !0, this.menu.refresh(), i.show(), this._resizeMenu(), i.position(t.extend({ of: this.element }, this.options.position)), this.options.autoFocus && this.menu.next() }, _resizeMenu: function () { var t = this.menu.element; t.outerWidth(Math.max(t.width("").outerWidth() + 1, this.element.outerWidth())) }, _renderMenu: function (e, i) { var s = this; t.each(i, function (t, i) { s._renderItemData(e, i) }) }, _renderItemData: function (t, e) { return this._renderItem(t, e).data("ui-autocomplete-item", e) }, _renderItem: function (e, i) { return t("<li>").append(t("<a>").text(i.label)).appendTo(e) }, _move: function (t, e) { return this.menu.element.is(":visible") ? this.menu.isFirstItem() && /^previous/.test(t) || this.menu.isLastItem() && /^next/.test(t) ? (this._value(this.term), this.menu.blur(), undefined) : (this.menu[t](e), undefined) : (this.search(null, e), undefined) }, widget: function () { return this.menu.element }, _value: function () { return this.valueMethod.apply(this.element, arguments) }, _keyEvent: function (t, e) { (!this.isMultiLine || this.menu.element.is(":visible")) && (this._move(t, e), e.preventDefault()) } }), t.extend(t.ui.autocomplete, { escapeRegex: function (t) { return t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&") }, filter: function (e, i) { var s = RegExp(t.ui.autocomplete.escapeRegex(i), "i"); return t.grep(e, function (t) { return s.test(t.label || t.value || t) }) } }), t.widget("ui.autocomplete", t.ui.autocomplete, { options: { messages: { noResults: "No search results.", results: function (t) { return t + (t > 1 ? " results are" : " result is") + " available, use up and down arrow keys to navigate." } } }, __response: function (t) { var e; this._superApply(arguments), this.options.disabled || this.cancelSearch || (e = t && t.length ? this.options.messages.results(t.length) : this.options.messages.noResults, this.liveRegion.text(e)) } }) })(jQuery);;
/*! Select2 4.0.3 | https://github.com/select2/select2/blob/master/LICENSE.md */!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b=function(){if(a&&a.fn&&a.fn.select2&&a.fn.select2.amd)var b=a.fn.select2.amd;var b;return function(){if(!b||!b.requirejs){b?c=b:b={};var a,c,d;!function(b){function e(a,b){return u.call(a,b)}function f(a,b){var c,d,e,f,g,h,i,j,k,l,m,n=b&&b.split("/"),o=s.map,p=o&&o["*"]||{};if(a&&"."===a.charAt(0))if(b){for(a=a.split("/"),g=a.length-1,s.nodeIdCompat&&w.test(a[g])&&(a[g]=a[g].replace(w,"")),a=n.slice(0,n.length-1).concat(a),k=0;k<a.length;k+=1)if(m=a[k],"."===m)a.splice(k,1),k-=1;else if(".."===m){if(1===k&&(".."===a[2]||".."===a[0]))break;k>0&&(a.splice(k-1,2),k-=2)}a=a.join("/")}else 0===a.indexOf("./")&&(a=a.substring(2));if((n||p)&&o){for(c=a.split("/"),k=c.length;k>0;k-=1){if(d=c.slice(0,k).join("/"),n)for(l=n.length;l>0;l-=1)if(e=o[n.slice(0,l).join("/")],e&&(e=e[d])){f=e,h=k;break}if(f)break;!i&&p&&p[d]&&(i=p[d],j=k)}!f&&i&&(f=i,h=j),f&&(c.splice(0,h,f),a=c.join("/"))}return a}function g(a,c){return function(){var d=v.call(arguments,0);return"string"!=typeof d[0]&&1===d.length&&d.push(null),n.apply(b,d.concat([a,c]))}}function h(a){return function(b){return f(b,a)}}function i(a){return function(b){q[a]=b}}function j(a){if(e(r,a)){var c=r[a];delete r[a],t[a]=!0,m.apply(b,c)}if(!e(q,a)&&!e(t,a))throw new Error("No "+a);return q[a]}function k(a){var b,c=a?a.indexOf("!"):-1;return c>-1&&(b=a.substring(0,c),a=a.substring(c+1,a.length)),[b,a]}function l(a){return function(){return s&&s.config&&s.config[a]||{}}}var m,n,o,p,q={},r={},s={},t={},u=Object.prototype.hasOwnProperty,v=[].slice,w=/\.js$/;o=function(a,b){var c,d=k(a),e=d[0];return a=d[1],e&&(e=f(e,b),c=j(e)),e?a=c&&c.normalize?c.normalize(a,h(b)):f(a,b):(a=f(a,b),d=k(a),e=d[0],a=d[1],e&&(c=j(e))),{f:e?e+"!"+a:a,n:a,pr:e,p:c}},p={require:function(a){return g(a)},exports:function(a){var b=q[a];return"undefined"!=typeof b?b:q[a]={}},module:function(a){return{id:a,uri:"",exports:q[a],config:l(a)}}},m=function(a,c,d,f){var h,k,l,m,n,s,u=[],v=typeof d;if(f=f||a,"undefined"===v||"function"===v){for(c=!c.length&&d.length?["require","exports","module"]:c,n=0;n<c.length;n+=1)if(m=o(c[n],f),k=m.f,"require"===k)u[n]=p.require(a);else if("exports"===k)u[n]=p.exports(a),s=!0;else if("module"===k)h=u[n]=p.module(a);else if(e(q,k)||e(r,k)||e(t,k))u[n]=j(k);else{if(!m.p)throw new Error(a+" missing "+k);m.p.load(m.n,g(f,!0),i(k),{}),u[n]=q[k]}l=d?d.apply(q[a],u):void 0,a&&(h&&h.exports!==b&&h.exports!==q[a]?q[a]=h.exports:l===b&&s||(q[a]=l))}else a&&(q[a]=d)},a=c=n=function(a,c,d,e,f){if("string"==typeof a)return p[a]?p[a](c):j(o(a,c).f);if(!a.splice){if(s=a,s.deps&&n(s.deps,s.callback),!c)return;c.splice?(a=c,c=d,d=null):a=b}return c=c||function(){},"function"==typeof d&&(d=e,e=f),e?m(b,a,c,d):setTimeout(function(){m(b,a,c,d)},4),n},n.config=function(a){return n(a)},a._defined=q,d=function(a,b,c){if("string"!=typeof a)throw new Error("See almond README: incorrect module build, no module name");b.splice||(c=b,b=[]),e(q,a)||e(r,a)||(r[a]=[a,b,c])},d.amd={jQuery:!0}}(),b.requirejs=a,b.require=c,b.define=d}}(),b.define("almond",function(){}),b.define("jquery",[],function(){var b=a||$;return null==b&&console&&console.error&&console.error("Select2: An instance of jQuery or a jQuery-compatible library was not found. Make sure that you are including jQuery before Select2 on your web page."),b}),b.define("select2/utils",["jquery"],function(a){function b(a){var b=a.prototype,c=[];for(var d in b){var e=b[d];"function"==typeof e&&"constructor"!==d&&c.push(d)}return c}var c={};c.Extend=function(a,b){function c(){this.constructor=a}var d={}.hasOwnProperty;for(var e in b)d.call(b,e)&&(a[e]=b[e]);return c.prototype=b.prototype,a.prototype=new c,a.__super__=b.prototype,a},c.Decorate=function(a,c){function d(){var b=Array.prototype.unshift,d=c.prototype.constructor.length,e=a.prototype.constructor;d>0&&(b.call(arguments,a.prototype.constructor),e=c.prototype.constructor),e.apply(this,arguments)}function e(){this.constructor=d}var f=b(c),g=b(a);c.displayName=a.displayName,d.prototype=new e;for(var h=0;h<g.length;h++){var i=g[h];d.prototype[i]=a.prototype[i]}for(var j=(function(a){var b=function(){};a in d.prototype&&(b=d.prototype[a]);var e=c.prototype[a];return function(){var a=Array.prototype.unshift;return a.call(arguments,b),e.apply(this,arguments)}}),k=0;k<f.length;k++){var l=f[k];d.prototype[l]=j(l)}return d};var d=function(){this.listeners={}};return d.prototype.on=function(a,b){this.listeners=this.listeners||{},a in this.listeners?this.listeners[a].push(b):this.listeners[a]=[b]},d.prototype.trigger=function(a){var b=Array.prototype.slice,c=b.call(arguments,1);this.listeners=this.listeners||{},null==c&&(c=[]),0===c.length&&c.push({}),c[0]._type=a,a in this.listeners&&this.invoke(this.listeners[a],b.call(arguments,1)),"*"in this.listeners&&this.invoke(this.listeners["*"],arguments)},d.prototype.invoke=function(a,b){for(var c=0,d=a.length;d>c;c++)a[c].apply(this,b)},c.Observable=d,c.generateChars=function(a){for(var b="",c=0;a>c;c++){var d=Math.floor(36*Math.random());b+=d.toString(36)}return b},c.bind=function(a,b){return function(){a.apply(b,arguments)}},c._convertData=function(a){for(var b in a){var c=b.split("-"),d=a;if(1!==c.length){for(var e=0;e<c.length;e++){var f=c[e];f=f.substring(0,1).toLowerCase()+f.substring(1),f in d||(d[f]={}),e==c.length-1&&(d[f]=a[b]),d=d[f]}delete a[b]}}return a},c.hasScroll=function(b,c){var d=a(c),e=c.style.overflowX,f=c.style.overflowY;return e!==f||"hidden"!==f&&"visible"!==f?"scroll"===e||"scroll"===f?!0:d.innerHeight()<c.scrollHeight||d.innerWidth()<c.scrollWidth:!1},c.escapeMarkup=function(a){var b={"\\":"&#92;","&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#47;"};return"string"!=typeof a?a:String(a).replace(/[&<>"'\/\\]/g,function(a){return b[a]})},c.appendMany=function(b,c){if("1.7"===a.fn.jquery.substr(0,3)){var d=a();a.map(c,function(a){d=d.add(a)}),c=d}b.append(c)},c}),b.define("select2/results",["jquery","./utils"],function(a,b){function c(a,b,d){this.$element=a,this.data=d,this.options=b,c.__super__.constructor.call(this)}return b.Extend(c,b.Observable),c.prototype.render=function(){var b=a('<ul class="select2-results__options" role="tree"></ul>');return this.options.get("multiple")&&b.attr("aria-multiselectable","true"),this.$results=b,b},c.prototype.clear=function(){this.$results.empty()},c.prototype.displayMessage=function(b){var c=this.options.get("escapeMarkup");this.clear(),this.hideLoading();var d=a('<li role="treeitem" aria-live="assertive" class="select2-results__option"></li>'),e=this.options.get("translations").get(b.message);d.append(c(e(b.args))),d[0].className+=" select2-results__message",this.$results.append(d)},c.prototype.hideMessages=function(){this.$results.find(".select2-results__message").remove()},c.prototype.append=function(a){this.hideLoading();var b=[];if(null==a.results||0===a.results.length)return void(0===this.$results.children().length&&this.trigger("results:message",{message:"noResults"}));a.results=this.sort(a.results);for(var c=0;c<a.results.length;c++){var d=a.results[c],e=this.option(d);b.push(e)}this.$results.append(b)},c.prototype.position=function(a,b){var c=b.find(".select2-results");c.append(a)},c.prototype.sort=function(a){var b=this.options.get("sorter");return b(a)},c.prototype.highlightFirstItem=function(){var a=this.$results.find(".select2-results__option[aria-selected]"),b=a.filter("[aria-selected=true]");b.length>0?b.first().trigger("mouseenter"):a.first().trigger("mouseenter"),this.ensureHighlightVisible()},c.prototype.setClasses=function(){var b=this;this.data.current(function(c){var d=a.map(c,function(a){return a.id.toString()}),e=b.$results.find(".select2-results__option[aria-selected]");e.each(function(){var b=a(this),c=a.data(this,"data"),e=""+c.id;null!=c.element&&c.element.selected||null==c.element&&a.inArray(e,d)>-1?b.attr("aria-selected","true"):b.attr("aria-selected","false")})})},c.prototype.showLoading=function(a){this.hideLoading();var b=this.options.get("translations").get("searching"),c={disabled:!0,loading:!0,text:b(a)},d=this.option(c);d.className+=" loading-results",this.$results.prepend(d)},c.prototype.hideLoading=function(){this.$results.find(".loading-results").remove()},c.prototype.option=function(b){var c=document.createElement("li");c.className="select2-results__option";var d={role:"treeitem","aria-selected":"false"};b.disabled&&(delete d["aria-selected"],d["aria-disabled"]="true"),null==b.id&&delete d["aria-selected"],null!=b._resultId&&(c.id=b._resultId),b.title&&(c.title=b.title),b.children&&(d.role="group",d["aria-label"]=b.text,delete d["aria-selected"]);for(var e in d){var f=d[e];c.setAttribute(e,f)}if(b.children){var g=a(c),h=document.createElement("strong");h.className="select2-results__group";a(h);this.template(b,h);for(var i=[],j=0;j<b.children.length;j++){var k=b.children[j],l=this.option(k);i.push(l)}var m=a("<ul></ul>",{"class":"select2-results__options select2-results__options--nested"});m.append(i),g.append(h),g.append(m)}else this.template(b,c);return a.data(c,"data",b),c},c.prototype.bind=function(b,c){var d=this,e=b.id+"-results";this.$results.attr("id",e),b.on("results:all",function(a){d.clear(),d.append(a.data),b.isOpen()&&(d.setClasses(),d.highlightFirstItem())}),b.on("results:append",function(a){d.append(a.data),b.isOpen()&&d.setClasses()}),b.on("query",function(a){d.hideMessages(),d.showLoading(a)}),b.on("select",function(){b.isOpen()&&(d.setClasses(),d.highlightFirstItem())}),b.on("unselect",function(){b.isOpen()&&(d.setClasses(),d.highlightFirstItem())}),b.on("open",function(){d.$results.attr("aria-expanded","true"),d.$results.attr("aria-hidden","false"),d.setClasses(),d.ensureHighlightVisible()}),b.on("close",function(){d.$results.attr("aria-expanded","false"),d.$results.attr("aria-hidden","true"),d.$results.removeAttr("aria-activedescendant")}),b.on("results:toggle",function(){var a=d.getHighlightedResults();0!==a.length&&a.trigger("mouseup")}),b.on("results:select",function(){var a=d.getHighlightedResults();if(0!==a.length){var b=a.data("data");"true"==a.attr("aria-selected")?d.trigger("close",{}):d.trigger("select",{data:b})}}),b.on("results:previous",function(){var a=d.getHighlightedResults(),b=d.$results.find("[aria-selected]"),c=b.index(a);if(0!==c){var e=c-1;0===a.length&&(e=0);var f=b.eq(e);f.trigger("mouseenter");var g=d.$results.offset().top,h=f.offset().top,i=d.$results.scrollTop()+(h-g);0===e?d.$results.scrollTop(0):0>h-g&&d.$results.scrollTop(i)}}),b.on("results:next",function(){var a=d.getHighlightedResults(),b=d.$results.find("[aria-selected]"),c=b.index(a),e=c+1;if(!(e>=b.length)){var f=b.eq(e);f.trigger("mouseenter");var g=d.$results.offset().top+d.$results.outerHeight(!1),h=f.offset().top+f.outerHeight(!1),i=d.$results.scrollTop()+h-g;0===e?d.$results.scrollTop(0):h>g&&d.$results.scrollTop(i)}}),b.on("results:focus",function(a){a.element.addClass("select2-results__option--highlighted")}),b.on("results:message",function(a){d.displayMessage(a)}),a.fn.mousewheel&&this.$results.on("mousewheel",function(a){var b=d.$results.scrollTop(),c=d.$results.get(0).scrollHeight-b+a.deltaY,e=a.deltaY>0&&b-a.deltaY<=0,f=a.deltaY<0&&c<=d.$results.height();e?(d.$results.scrollTop(0),a.preventDefault(),a.stopPropagation()):f&&(d.$results.scrollTop(d.$results.get(0).scrollHeight-d.$results.height()),a.preventDefault(),a.stopPropagation())}),this.$results.on("mouseup",".select2-results__option[aria-selected]",function(b){var c=a(this),e=c.data("data");return"true"===c.attr("aria-selected")?void(d.options.get("multiple")?d.trigger("unselect",{originalEvent:b,data:e}):d.trigger("close",{})):void d.trigger("select",{originalEvent:b,data:e})}),this.$results.on("mouseenter",".select2-results__option[aria-selected]",function(b){var c=a(this).data("data");d.getHighlightedResults().removeClass("select2-results__option--highlighted"),d.trigger("results:focus",{data:c,element:a(this)})})},c.prototype.getHighlightedResults=function(){var a=this.$results.find(".select2-results__option--highlighted");return a},c.prototype.destroy=function(){this.$results.remove()},c.prototype.ensureHighlightVisible=function(){var a=this.getHighlightedResults();if(0!==a.length){var b=this.$results.find("[aria-selected]"),c=b.index(a),d=this.$results.offset().top,e=a.offset().top,f=this.$results.scrollTop()+(e-d),g=e-d;f-=2*a.outerHeight(!1),2>=c?this.$results.scrollTop(0):(g>this.$results.outerHeight()||0>g)&&this.$results.scrollTop(f)}},c.prototype.template=function(b,c){var d=this.options.get("templateResult"),e=this.options.get("escapeMarkup"),f=d(b,c);null==f?c.style.display="none":"string"==typeof f?c.innerHTML=e(f):a(c).append(f)},c}),b.define("select2/keys",[],function(){var a={BACKSPACE:8,TAB:9,ENTER:13,SHIFT:16,CTRL:17,ALT:18,ESC:27,SPACE:32,PAGE_UP:33,PAGE_DOWN:34,END:35,HOME:36,LEFT:37,UP:38,RIGHT:39,DOWN:40,DELETE:46};return a}),b.define("select2/selection/base",["jquery","../utils","../keys"],function(a,b,c){function d(a,b){this.$element=a,this.options=b,d.__super__.constructor.call(this)}return b.Extend(d,b.Observable),d.prototype.render=function(){var b=a('<span class="select2-selection" role="combobox"  aria-haspopup="true" aria-expanded="false"></span>');return this._tabindex=0,null!=this.$element.data("old-tabindex")?this._tabindex=this.$element.data("old-tabindex"):null!=this.$element.attr("tabindex")&&(this._tabindex=this.$element.attr("tabindex")),b.attr("title",this.$element.attr("title")),b.attr("tabindex",this._tabindex),this.$selection=b,b},d.prototype.bind=function(a,b){var d=this,e=(a.id+"-container",a.id+"-results");this.container=a,this.$selection.on("focus",function(a){d.trigger("focus",a)}),this.$selection.on("blur",function(a){d._handleBlur(a)}),this.$selection.on("keydown",function(a){d.trigger("keypress",a),a.which===c.SPACE&&a.preventDefault()}),a.on("results:focus",function(a){d.$selection.attr("aria-activedescendant",a.data._resultId)}),a.on("selection:update",function(a){d.update(a.data)}),a.on("open",function(){d.$selection.attr("aria-expanded","true"),d.$selection.attr("aria-owns",e),d._attachCloseHandler(a)}),a.on("close",function(){d.$selection.attr("aria-expanded","false"),d.$selection.removeAttr("aria-activedescendant"),d.$selection.removeAttr("aria-owns"),d.$selection.focus(),d._detachCloseHandler(a)}),a.on("enable",function(){d.$selection.attr("tabindex",d._tabindex)}),a.on("disable",function(){d.$selection.attr("tabindex","-1")})},d.prototype._handleBlur=function(b){var c=this;window.setTimeout(function(){document.activeElement==c.$selection[0]||a.contains(c.$selection[0],document.activeElement)||c.trigger("blur",b)},1)},d.prototype._attachCloseHandler=function(b){a(document.body).on("mousedown.select2."+b.id,function(b){var c=a(b.target),d=c.closest(".select2"),e=a(".select2.select2-container--open");e.each(function(){var b=a(this);if(this!=d[0]){var c=b.data("element");c.select2("close")}})})},d.prototype._detachCloseHandler=function(b){a(document.body).off("mousedown.select2."+b.id)},d.prototype.position=function(a,b){var c=b.find(".selection");c.append(a)},d.prototype.destroy=function(){this._detachCloseHandler(this.container)},d.prototype.update=function(a){throw new Error("The `update` method must be defined in child classes.")},d}),b.define("select2/selection/single",["jquery","./base","../utils","../keys"],function(a,b,c,d){function e(){e.__super__.constructor.apply(this,arguments)}return c.Extend(e,b),e.prototype.render=function(){var a=e.__super__.render.call(this);return a.addClass("select2-selection--single"),a.html('<span class="select2-selection__rendered"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'),a},e.prototype.bind=function(a,b){var c=this;e.__super__.bind.apply(this,arguments);var d=a.id+"-container";this.$selection.find(".select2-selection__rendered").attr("id",d),this.$selection.attr("aria-labelledby",d),this.$selection.on("mousedown",function(a){1===a.which&&c.trigger("toggle",{originalEvent:a})}),this.$selection.on("focus",function(a){}),this.$selection.on("blur",function(a){}),a.on("focus",function(b){a.isOpen()||c.$selection.focus()}),a.on("selection:update",function(a){c.update(a.data)})},e.prototype.clear=function(){this.$selection.find(".select2-selection__rendered").empty()},e.prototype.display=function(a,b){var c=this.options.get("templateSelection"),d=this.options.get("escapeMarkup");return d(c(a,b))},e.prototype.selectionContainer=function(){return a("<span></span>")},e.prototype.update=function(a){if(0===a.length)return void this.clear();var b=a[0],c=this.$selection.find(".select2-selection__rendered"),d=this.display(b,c);c.empty().append(d),c.prop("title",b.title||b.text)},e}),b.define("select2/selection/multiple",["jquery","./base","../utils"],function(a,b,c){function d(a,b){d.__super__.constructor.apply(this,arguments)}return c.Extend(d,b),d.prototype.render=function(){var a=d.__super__.render.call(this);return a.addClass("select2-selection--multiple"),a.html('<ul class="select2-selection__rendered"></ul>'),a},d.prototype.bind=function(b,c){var e=this;d.__super__.bind.apply(this,arguments),this.$selection.on("click",function(a){e.trigger("toggle",{originalEvent:a})}),this.$selection.on("click",".select2-selection__choice__remove",function(b){if(!e.options.get("disabled")){var c=a(this),d=c.parent(),f=d.data("data");e.trigger("unselect",{originalEvent:b,data:f})}})},d.prototype.clear=function(){this.$selection.find(".select2-selection__rendered").empty()},d.prototype.display=function(a,b){var c=this.options.get("templateSelection"),d=this.options.get("escapeMarkup");return d(c(a,b))},d.prototype.selectionContainer=function(){var b=a('<li class="select2-selection__choice"><span class="select2-selection__choice__remove" role="presentation">&times;</span></li>');return b},d.prototype.update=function(a){if(this.clear(),0!==a.length){for(var b=[],d=0;d<a.length;d++){var e=a[d],f=this.selectionContainer(),g=this.display(e,f);f.append(g),f.prop("title",e.title||e.text),f.data("data",e),b.push(f)}var h=this.$selection.find(".select2-selection__rendered");c.appendMany(h,b)}},d}),b.define("select2/selection/placeholder",["../utils"],function(a){function b(a,b,c){this.placeholder=this.normalizePlaceholder(c.get("placeholder")),a.call(this,b,c)}return b.prototype.normalizePlaceholder=function(a,b){return"string"==typeof b&&(b={id:"",text:b}),b},b.prototype.createPlaceholder=function(a,b){var c=this.selectionContainer();return c.html(this.display(b)),c.addClass("select2-selection__placeholder").removeClass("select2-selection__choice"),c},b.prototype.update=function(a,b){var c=1==b.length&&b[0].id!=this.placeholder.id,d=b.length>1;if(d||c)return a.call(this,b);this.clear();var e=this.createPlaceholder(this.placeholder);this.$selection.find(".select2-selection__rendered").append(e)},b}),b.define("select2/selection/allowClear",["jquery","../keys"],function(a,b){function c(){}return c.prototype.bind=function(a,b,c){var d=this;a.call(this,b,c),null==this.placeholder&&this.options.get("debug")&&window.console&&console.error&&console.error("Select2: The `allowClear` option should be used in combination with the `placeholder` option."),this.$selection.on("mousedown",".select2-selection__clear",function(a){d._handleClear(a)}),b.on("keypress",function(a){d._handleKeyboardClear(a,b)})},c.prototype._handleClear=function(a,b){if(!this.options.get("disabled")){var c=this.$selection.find(".select2-selection__clear");if(0!==c.length){b.stopPropagation();for(var d=c.data("data"),e=0;e<d.length;e++){var f={data:d[e]};if(this.trigger("unselect",f),f.prevented)return}this.$element.val(this.placeholder.id).trigger("change"),this.trigger("toggle",{})}}},c.prototype._handleKeyboardClear=function(a,c,d){d.isOpen()||(c.which==b.DELETE||c.which==b.BACKSPACE)&&this._handleClear(c)},c.prototype.update=function(b,c){if(b.call(this,c),!(this.$selection.find(".select2-selection__placeholder").length>0||0===c.length)){var d=a('<span class="select2-selection__clear">&times;</span>');d.data("data",c),this.$selection.find(".select2-selection__rendered").prepend(d)}},c}),b.define("select2/selection/search",["jquery","../utils","../keys"],function(a,b,c){function d(a,b,c){a.call(this,b,c)}return d.prototype.render=function(b){var c=a('<li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" /></li>');this.$searchContainer=c,this.$search=c.find("input");var d=b.call(this);return this._transferTabIndex(),d},d.prototype.bind=function(a,b,d){var e=this;a.call(this,b,d),b.on("open",function(){e.$search.trigger("focus")}),b.on("close",function(){e.$search.val(""),e.$search.removeAttr("aria-activedescendant"),e.$search.trigger("focus")}),b.on("enable",function(){e.$search.prop("disabled",!1),e._transferTabIndex()}),b.on("disable",function(){e.$search.prop("disabled",!0)}),b.on("focus",function(a){e.$search.trigger("focus")}),b.on("results:focus",function(a){e.$search.attr("aria-activedescendant",a.id)}),this.$selection.on("focusin",".select2-search--inline",function(a){e.trigger("focus",a)}),this.$selection.on("focusout",".select2-search--inline",function(a){e._handleBlur(a)}),this.$selection.on("keydown",".select2-search--inline",function(a){a.stopPropagation(),e.trigger("keypress",a),e._keyUpPrevented=a.isDefaultPrevented();var b=a.which;if(b===c.BACKSPACE&&""===e.$search.val()){var d=e.$searchContainer.prev(".select2-selection__choice");if(d.length>0){var f=d.data("data");e.searchRemoveChoice(f),a.preventDefault()}}});var f=document.documentMode,g=f&&11>=f;this.$selection.on("input.searchcheck",".select2-search--inline",function(a){return g?void e.$selection.off("input.search input.searchcheck"):void e.$selection.off("keyup.search")}),this.$selection.on("keyup.search input.search",".select2-search--inline",function(a){if(g&&"input"===a.type)return void e.$selection.off("input.search input.searchcheck");var b=a.which;b!=c.SHIFT&&b!=c.CTRL&&b!=c.ALT&&b!=c.TAB&&e.handleSearch(a)})},d.prototype._transferTabIndex=function(a){this.$search.attr("tabindex",this.$selection.attr("tabindex")),this.$selection.attr("tabindex","-1")},d.prototype.createPlaceholder=function(a,b){this.$search.attr("placeholder",b.text)},d.prototype.update=function(a,b){var c=this.$search[0]==document.activeElement;this.$search.attr("placeholder",""),a.call(this,b),this.$selection.find(".select2-selection__rendered").append(this.$searchContainer),this.resizeSearch(),c&&this.$search.focus()},d.prototype.handleSearch=function(){if(this.resizeSearch(),!this._keyUpPrevented){var a=this.$search.val();this.trigger("query",{term:a})}this._keyUpPrevented=!1},d.prototype.searchRemoveChoice=function(a,b){this.trigger("unselect",{data:b}),this.$search.val(b.text),this.handleSearch()},d.prototype.resizeSearch=function(){this.$search.css("width","25px");var a="";if(""!==this.$search.attr("placeholder"))a=this.$selection.find(".select2-selection__rendered").innerWidth();else{var b=this.$search.val().length+1;a=.75*b+"em"}this.$search.css("width",a)},d}),b.define("select2/selection/eventRelay",["jquery"],function(a){function b(){}return b.prototype.bind=function(b,c,d){var e=this,f=["open","opening","close","closing","select","selecting","unselect","unselecting"],g=["opening","closing","selecting","unselecting"];b.call(this,c,d),c.on("*",function(b,c){if(-1!==a.inArray(b,f)){c=c||{};var d=a.Event("select2:"+b,{params:c});e.$element.trigger(d),-1!==a.inArray(b,g)&&(c.prevented=d.isDefaultPrevented())}})},b}),b.define("select2/translation",["jquery","require"],function(a,b){function c(a){this.dict=a||{}}return c.prototype.all=function(){return this.dict},c.prototype.get=function(a){return this.dict[a]},c.prototype.extend=function(b){this.dict=a.extend({},b.all(),this.dict)},c._cache={},c.loadPath=function(a){if(!(a in c._cache)){var d=b(a);c._cache[a]=d}return new c(c._cache[a])},c}),b.define("select2/diacritics",[],function(){var a={"Ⓐ":"A","Ａ":"A","À":"A","Á":"A","Â":"A","Ầ":"A","Ấ":"A","Ẫ":"A","Ẩ":"A","Ã":"A","Ā":"A","Ă":"A","Ằ":"A","Ắ":"A","Ẵ":"A","Ẳ":"A","Ȧ":"A","Ǡ":"A","Ä":"A","Ǟ":"A","Ả":"A","Å":"A","Ǻ":"A","Ǎ":"A","Ȁ":"A","Ȃ":"A","Ạ":"A","Ậ":"A","Ặ":"A","Ḁ":"A","Ą":"A","Ⱥ":"A","Ɐ":"A","Ꜳ":"AA","Æ":"AE","Ǽ":"AE","Ǣ":"AE","Ꜵ":"AO","Ꜷ":"AU","Ꜹ":"AV","Ꜻ":"AV","Ꜽ":"AY","Ⓑ":"B","Ｂ":"B","Ḃ":"B","Ḅ":"B","Ḇ":"B","Ƀ":"B","Ƃ":"B","Ɓ":"B","Ⓒ":"C","Ｃ":"C","Ć":"C","Ĉ":"C","Ċ":"C","Č":"C","Ç":"C","Ḉ":"C","Ƈ":"C","Ȼ":"C","Ꜿ":"C","Ⓓ":"D","Ｄ":"D","Ḋ":"D","Ď":"D","Ḍ":"D","Ḑ":"D","Ḓ":"D","Ḏ":"D","Đ":"D","Ƌ":"D","Ɗ":"D","Ɖ":"D","Ꝺ":"D","Ǳ":"DZ","Ǆ":"DZ","ǲ":"Dz","ǅ":"Dz","Ⓔ":"E","Ｅ":"E","È":"E","É":"E","Ê":"E","Ề":"E","Ế":"E","Ễ":"E","Ể":"E","Ẽ":"E","Ē":"E","Ḕ":"E","Ḗ":"E","Ĕ":"E","Ė":"E","Ë":"E","Ẻ":"E","Ě":"E","Ȅ":"E","Ȇ":"E","Ẹ":"E","Ệ":"E","Ȩ":"E","Ḝ":"E","Ę":"E","Ḙ":"E","Ḛ":"E","Ɛ":"E","Ǝ":"E","Ⓕ":"F","Ｆ":"F","Ḟ":"F","Ƒ":"F","Ꝼ":"F","Ⓖ":"G","Ｇ":"G","Ǵ":"G","Ĝ":"G","Ḡ":"G","Ğ":"G","Ġ":"G","Ǧ":"G","Ģ":"G","Ǥ":"G","Ɠ":"G","Ꞡ":"G","Ᵹ":"G","Ꝿ":"G","Ⓗ":"H","Ｈ":"H","Ĥ":"H","Ḣ":"H","Ḧ":"H","Ȟ":"H","Ḥ":"H","Ḩ":"H","Ḫ":"H","Ħ":"H","Ⱨ":"H","Ⱶ":"H","Ɥ":"H","Ⓘ":"I","Ｉ":"I","Ì":"I","Í":"I","Î":"I","Ĩ":"I","Ī":"I","Ĭ":"I","İ":"I","Ï":"I","Ḯ":"I","Ỉ":"I","Ǐ":"I","Ȉ":"I","Ȋ":"I","Ị":"I","Į":"I","Ḭ":"I","Ɨ":"I","Ⓙ":"J","Ｊ":"J","Ĵ":"J","Ɉ":"J","Ⓚ":"K","Ｋ":"K","Ḱ":"K","Ǩ":"K","Ḳ":"K","Ķ":"K","Ḵ":"K","Ƙ":"K","Ⱪ":"K","Ꝁ":"K","Ꝃ":"K","Ꝅ":"K","Ꞣ":"K","Ⓛ":"L","Ｌ":"L","Ŀ":"L","Ĺ":"L","Ľ":"L","Ḷ":"L","Ḹ":"L","Ļ":"L","Ḽ":"L","Ḻ":"L","Ł":"L","Ƚ":"L","Ɫ":"L","Ⱡ":"L","Ꝉ":"L","Ꝇ":"L","Ꞁ":"L","Ǉ":"LJ","ǈ":"Lj","Ⓜ":"M","Ｍ":"M","Ḿ":"M","Ṁ":"M","Ṃ":"M","Ɱ":"M","Ɯ":"M","Ⓝ":"N","Ｎ":"N","Ǹ":"N","Ń":"N","Ñ":"N","Ṅ":"N","Ň":"N","Ṇ":"N","Ņ":"N","Ṋ":"N","Ṉ":"N","Ƞ":"N","Ɲ":"N","Ꞑ":"N","Ꞥ":"N","Ǌ":"NJ","ǋ":"Nj","Ⓞ":"O","Ｏ":"O","Ò":"O","Ó":"O","Ô":"O","Ồ":"O","Ố":"O","Ỗ":"O","Ổ":"O","Õ":"O","Ṍ":"O","Ȭ":"O","Ṏ":"O","Ō":"O","Ṑ":"O","Ṓ":"O","Ŏ":"O","Ȯ":"O","Ȱ":"O","Ö":"O","Ȫ":"O","Ỏ":"O","Ő":"O","Ǒ":"O","Ȍ":"O","Ȏ":"O","Ơ":"O","Ờ":"O","Ớ":"O","Ỡ":"O","Ở":"O","Ợ":"O","Ọ":"O","Ộ":"O","Ǫ":"O","Ǭ":"O","Ø":"O","Ǿ":"O","Ɔ":"O","Ɵ":"O","Ꝋ":"O","Ꝍ":"O","Ƣ":"OI","Ꝏ":"OO","Ȣ":"OU","Ⓟ":"P","Ｐ":"P","Ṕ":"P","Ṗ":"P","Ƥ":"P","Ᵽ":"P","Ꝑ":"P","Ꝓ":"P","Ꝕ":"P","Ⓠ":"Q","Ｑ":"Q","Ꝗ":"Q","Ꝙ":"Q","Ɋ":"Q","Ⓡ":"R","Ｒ":"R","Ŕ":"R","Ṙ":"R","Ř":"R","Ȑ":"R","Ȓ":"R","Ṛ":"R","Ṝ":"R","Ŗ":"R","Ṟ":"R","Ɍ":"R","Ɽ":"R","Ꝛ":"R","Ꞧ":"R","Ꞃ":"R","Ⓢ":"S","Ｓ":"S","ẞ":"S","Ś":"S","Ṥ":"S","Ŝ":"S","Ṡ":"S","Š":"S","Ṧ":"S","Ṣ":"S","Ṩ":"S","Ș":"S","Ş":"S","Ȿ":"S","Ꞩ":"S","Ꞅ":"S","Ⓣ":"T","Ｔ":"T","Ṫ":"T","Ť":"T","Ṭ":"T","Ț":"T","Ţ":"T","Ṱ":"T","Ṯ":"T","Ŧ":"T","Ƭ":"T","Ʈ":"T","Ⱦ":"T","Ꞇ":"T","Ꜩ":"TZ","Ⓤ":"U","Ｕ":"U","Ù":"U","Ú":"U","Û":"U","Ũ":"U","Ṹ":"U","Ū":"U","Ṻ":"U","Ŭ":"U","Ü":"U","Ǜ":"U","Ǘ":"U","Ǖ":"U","Ǚ":"U","Ủ":"U","Ů":"U","Ű":"U","Ǔ":"U","Ȕ":"U","Ȗ":"U","Ư":"U","Ừ":"U","Ứ":"U","Ữ":"U","Ử":"U","Ự":"U","Ụ":"U","Ṳ":"U","Ų":"U","Ṷ":"U","Ṵ":"U","Ʉ":"U","Ⓥ":"V","Ｖ":"V","Ṽ":"V","Ṿ":"V","Ʋ":"V","Ꝟ":"V","Ʌ":"V","Ꝡ":"VY","Ⓦ":"W","Ｗ":"W","Ẁ":"W","Ẃ":"W","Ŵ":"W","Ẇ":"W","Ẅ":"W","Ẉ":"W","Ⱳ":"W","Ⓧ":"X","Ｘ":"X","Ẋ":"X","Ẍ":"X","Ⓨ":"Y","Ｙ":"Y","Ỳ":"Y","Ý":"Y","Ŷ":"Y","Ỹ":"Y","Ȳ":"Y","Ẏ":"Y","Ÿ":"Y","Ỷ":"Y","Ỵ":"Y","Ƴ":"Y","Ɏ":"Y","Ỿ":"Y","Ⓩ":"Z","Ｚ":"Z","Ź":"Z","Ẑ":"Z","Ż":"Z","Ž":"Z","Ẓ":"Z","Ẕ":"Z","Ƶ":"Z","Ȥ":"Z","Ɀ":"Z","Ⱬ":"Z","Ꝣ":"Z","ⓐ":"a","ａ":"a","ẚ":"a","à":"a","á":"a","â":"a","ầ":"a","ấ":"a","ẫ":"a","ẩ":"a","ã":"a","ā":"a","ă":"a","ằ":"a","ắ":"a","ẵ":"a","ẳ":"a","ȧ":"a","ǡ":"a","ä":"a","ǟ":"a","ả":"a","å":"a","ǻ":"a","ǎ":"a","ȁ":"a","ȃ":"a","ạ":"a","ậ":"a","ặ":"a","ḁ":"a","ą":"a","ⱥ":"a","ɐ":"a","ꜳ":"aa","æ":"ae","ǽ":"ae","ǣ":"ae","ꜵ":"ao","ꜷ":"au","ꜹ":"av","ꜻ":"av","ꜽ":"ay","ⓑ":"b","ｂ":"b","ḃ":"b","ḅ":"b","ḇ":"b","ƀ":"b","ƃ":"b","ɓ":"b","ⓒ":"c","ｃ":"c","ć":"c","ĉ":"c","ċ":"c","č":"c","ç":"c","ḉ":"c","ƈ":"c","ȼ":"c","ꜿ":"c","ↄ":"c","ⓓ":"d","ｄ":"d","ḋ":"d","ď":"d","ḍ":"d","ḑ":"d","ḓ":"d","ḏ":"d","đ":"d","ƌ":"d","ɖ":"d","ɗ":"d","ꝺ":"d","ǳ":"dz","ǆ":"dz","ⓔ":"e","ｅ":"e","è":"e","é":"e","ê":"e","ề":"e","ế":"e","ễ":"e","ể":"e","ẽ":"e","ē":"e","ḕ":"e","ḗ":"e","ĕ":"e","ė":"e","ë":"e","ẻ":"e","ě":"e","ȅ":"e","ȇ":"e","ẹ":"e","ệ":"e","ȩ":"e","ḝ":"e","ę":"e","ḙ":"e","ḛ":"e","ɇ":"e","ɛ":"e","ǝ":"e","ⓕ":"f","ｆ":"f","ḟ":"f","ƒ":"f","ꝼ":"f","ⓖ":"g","ｇ":"g","ǵ":"g","ĝ":"g","ḡ":"g","ğ":"g","ġ":"g","ǧ":"g","ģ":"g","ǥ":"g","ɠ":"g","ꞡ":"g","ᵹ":"g","ꝿ":"g","ⓗ":"h","ｈ":"h","ĥ":"h","ḣ":"h","ḧ":"h","ȟ":"h","ḥ":"h","ḩ":"h","ḫ":"h","ẖ":"h","ħ":"h","ⱨ":"h","ⱶ":"h","ɥ":"h","ƕ":"hv","ⓘ":"i","ｉ":"i","ì":"i","í":"i","î":"i","ĩ":"i","ī":"i","ĭ":"i","ï":"i","ḯ":"i","ỉ":"i","ǐ":"i","ȉ":"i","ȋ":"i","ị":"i","į":"i","ḭ":"i","ɨ":"i","ı":"i","ⓙ":"j","ｊ":"j","ĵ":"j","ǰ":"j","ɉ":"j","ⓚ":"k","ｋ":"k","ḱ":"k","ǩ":"k","ḳ":"k","ķ":"k","ḵ":"k","ƙ":"k","ⱪ":"k","ꝁ":"k","ꝃ":"k","ꝅ":"k","ꞣ":"k","ⓛ":"l","ｌ":"l","ŀ":"l","ĺ":"l","ľ":"l","ḷ":"l","ḹ":"l","ļ":"l","ḽ":"l","ḻ":"l","ſ":"l","ł":"l","ƚ":"l","ɫ":"l","ⱡ":"l","ꝉ":"l","ꞁ":"l","ꝇ":"l","ǉ":"lj","ⓜ":"m","ｍ":"m","ḿ":"m","ṁ":"m","ṃ":"m","ɱ":"m","ɯ":"m","ⓝ":"n","ｎ":"n","ǹ":"n","ń":"n","ñ":"n","ṅ":"n","ň":"n","ṇ":"n","ņ":"n","ṋ":"n","ṉ":"n","ƞ":"n","ɲ":"n","ŉ":"n","ꞑ":"n","ꞥ":"n","ǌ":"nj","ⓞ":"o","ｏ":"o","ò":"o","ó":"o","ô":"o","ồ":"o","ố":"o","ỗ":"o","ổ":"o","õ":"o","ṍ":"o","ȭ":"o","ṏ":"o","ō":"o","ṑ":"o","ṓ":"o","ŏ":"o","ȯ":"o","ȱ":"o","ö":"o","ȫ":"o","ỏ":"o","ő":"o","ǒ":"o","ȍ":"o","ȏ":"o","ơ":"o","ờ":"o","ớ":"o","ỡ":"o","ở":"o","ợ":"o","ọ":"o","ộ":"o","ǫ":"o","ǭ":"o","ø":"o","ǿ":"o","ɔ":"o","ꝋ":"o","ꝍ":"o","ɵ":"o","ƣ":"oi","ȣ":"ou","ꝏ":"oo","ⓟ":"p","ｐ":"p","ṕ":"p","ṗ":"p","ƥ":"p","ᵽ":"p","ꝑ":"p","ꝓ":"p","ꝕ":"p","ⓠ":"q","ｑ":"q","ɋ":"q","ꝗ":"q","ꝙ":"q","ⓡ":"r","ｒ":"r","ŕ":"r","ṙ":"r","ř":"r","ȑ":"r","ȓ":"r","ṛ":"r","ṝ":"r","ŗ":"r","ṟ":"r","ɍ":"r","ɽ":"r","ꝛ":"r","ꞧ":"r","ꞃ":"r","ⓢ":"s","ｓ":"s","ß":"s","ś":"s","ṥ":"s","ŝ":"s","ṡ":"s","š":"s","ṧ":"s","ṣ":"s","ṩ":"s","ș":"s","ş":"s","ȿ":"s","ꞩ":"s","ꞅ":"s","ẛ":"s","ⓣ":"t","ｔ":"t","ṫ":"t","ẗ":"t","ť":"t","ṭ":"t","ț":"t","ţ":"t","ṱ":"t","ṯ":"t","ŧ":"t","ƭ":"t","ʈ":"t","ⱦ":"t","ꞇ":"t","ꜩ":"tz","ⓤ":"u","ｕ":"u","ù":"u","ú":"u","û":"u","ũ":"u","ṹ":"u","ū":"u","ṻ":"u","ŭ":"u","ü":"u","ǜ":"u","ǘ":"u","ǖ":"u","ǚ":"u","ủ":"u","ů":"u","ű":"u","ǔ":"u","ȕ":"u","ȗ":"u","ư":"u","ừ":"u","ứ":"u","ữ":"u","ử":"u","ự":"u","ụ":"u","ṳ":"u","ų":"u","ṷ":"u","ṵ":"u","ʉ":"u","ⓥ":"v","ｖ":"v","ṽ":"v","ṿ":"v","ʋ":"v","ꝟ":"v","ʌ":"v","ꝡ":"vy","ⓦ":"w","ｗ":"w","ẁ":"w","ẃ":"w","ŵ":"w","ẇ":"w","ẅ":"w","ẘ":"w","ẉ":"w","ⱳ":"w","ⓧ":"x","ｘ":"x","ẋ":"x","ẍ":"x","ⓨ":"y","ｙ":"y","ỳ":"y","ý":"y","ŷ":"y","ỹ":"y","ȳ":"y","ẏ":"y","ÿ":"y","ỷ":"y","ẙ":"y","ỵ":"y","ƴ":"y","ɏ":"y","ỿ":"y","ⓩ":"z","ｚ":"z","ź":"z","ẑ":"z","ż":"z","ž":"z","ẓ":"z","ẕ":"z","ƶ":"z","ȥ":"z","ɀ":"z","ⱬ":"z","ꝣ":"z","Ά":"Α","Έ":"Ε","Ή":"Η","Ί":"Ι","Ϊ":"Ι","Ό":"Ο","Ύ":"Υ","Ϋ":"Υ","Ώ":"Ω","ά":"α","έ":"ε","ή":"η","ί":"ι","ϊ":"ι","ΐ":"ι","ό":"ο","ύ":"υ","ϋ":"υ","ΰ":"υ","ω":"ω","ς":"σ"};return a}),b.define("select2/data/base",["../utils"],function(a){function b(a,c){b.__super__.constructor.call(this)}return a.Extend(b,a.Observable),b.prototype.current=function(a){throw new Error("The `current` method must be defined in child classes.")},b.prototype.query=function(a,b){throw new Error("The `query` method must be defined in child classes.")},b.prototype.bind=function(a,b){},b.prototype.destroy=function(){},b.prototype.generateResultId=function(b,c){var d=b.id+"-result-";return d+=a.generateChars(4),d+=null!=c.id?"-"+c.id.toString():"-"+a.generateChars(4)},b}),b.define("select2/data/select",["./base","../utils","jquery"],function(a,b,c){function d(a,b){this.$element=a,this.options=b,d.__super__.constructor.call(this)}return b.Extend(d,a),d.prototype.current=function(a){var b=[],d=this;this.$element.find(":selected").each(function(){var a=c(this),e=d.item(a);b.push(e)}),a(b)},d.prototype.select=function(a){var b=this;if(a.selected=!0,c(a.element).is("option"))return a.element.selected=!0,void this.$element.trigger("change");
if(this.$element.prop("multiple"))this.current(function(d){var e=[];a=[a],a.push.apply(a,d);for(var f=0;f<a.length;f++){var g=a[f].id;-1===c.inArray(g,e)&&e.push(g)}b.$element.val(e),b.$element.trigger("change")});else{var d=a.id;this.$element.val(d),this.$element.trigger("change")}},d.prototype.unselect=function(a){var b=this;if(this.$element.prop("multiple"))return a.selected=!1,c(a.element).is("option")?(a.element.selected=!1,void this.$element.trigger("change")):void this.current(function(d){for(var e=[],f=0;f<d.length;f++){var g=d[f].id;g!==a.id&&-1===c.inArray(g,e)&&e.push(g)}b.$element.val(e),b.$element.trigger("change")})},d.prototype.bind=function(a,b){var c=this;this.container=a,a.on("select",function(a){c.select(a.data)}),a.on("unselect",function(a){c.unselect(a.data)})},d.prototype.destroy=function(){this.$element.find("*").each(function(){c.removeData(this,"data")})},d.prototype.query=function(a,b){var d=[],e=this,f=this.$element.children();f.each(function(){var b=c(this);if(b.is("option")||b.is("optgroup")){var f=e.item(b),g=e.matches(a,f);null!==g&&d.push(g)}}),b({results:d})},d.prototype.addOptions=function(a){b.appendMany(this.$element,a)},d.prototype.option=function(a){var b;a.children?(b=document.createElement("optgroup"),b.label=a.text):(b=document.createElement("option"),void 0!==b.textContent?b.textContent=a.text:b.innerText=a.text),a.id&&(b.value=a.id),a.disabled&&(b.disabled=!0),a.selected&&(b.selected=!0),a.title&&(b.title=a.title);var d=c(b),e=this._normalizeItem(a);return e.element=b,c.data(b,"data",e),d},d.prototype.item=function(a){var b={};if(b=c.data(a[0],"data"),null!=b)return b;if(a.is("option"))b={id:a.val(),text:a.text(),disabled:a.prop("disabled"),selected:a.prop("selected"),title:a.prop("title")};else if(a.is("optgroup")){b={text:a.prop("label"),children:[],title:a.prop("title")};for(var d=a.children("option"),e=[],f=0;f<d.length;f++){var g=c(d[f]),h=this.item(g);e.push(h)}b.children=e}return b=this._normalizeItem(b),b.element=a[0],c.data(a[0],"data",b),b},d.prototype._normalizeItem=function(a){c.isPlainObject(a)||(a={id:a,text:a}),a=c.extend({},{text:""},a);var b={selected:!1,disabled:!1};return null!=a.id&&(a.id=a.id.toString()),null!=a.text&&(a.text=a.text.toString()),null==a._resultId&&a.id&&null!=this.container&&(a._resultId=this.generateResultId(this.container,a)),c.extend({},b,a)},d.prototype.matches=function(a,b){var c=this.options.get("matcher");return c(a,b)},d}),b.define("select2/data/array",["./select","../utils","jquery"],function(a,b,c){function d(a,b){var c=b.get("data")||[];d.__super__.constructor.call(this,a,b),this.addOptions(this.convertToOptions(c))}return b.Extend(d,a),d.prototype.select=function(a){var b=this.$element.find("option").filter(function(b,c){return c.value==a.id.toString()});0===b.length&&(b=this.option(a),this.addOptions(b)),d.__super__.select.call(this,a)},d.prototype.convertToOptions=function(a){function d(a){return function(){return c(this).val()==a.id}}for(var e=this,f=this.$element.find("option"),g=f.map(function(){return e.item(c(this)).id}).get(),h=[],i=0;i<a.length;i++){var j=this._normalizeItem(a[i]);if(c.inArray(j.id,g)>=0){var k=f.filter(d(j)),l=this.item(k),m=c.extend(!0,{},j,l),n=this.option(m);k.replaceWith(n)}else{var o=this.option(j);if(j.children){var p=this.convertToOptions(j.children);b.appendMany(o,p)}h.push(o)}}return h},d}),b.define("select2/data/ajax",["./array","../utils","jquery"],function(a,b,c){function d(a,b){this.ajaxOptions=this._applyDefaults(b.get("ajax")),null!=this.ajaxOptions.processResults&&(this.processResults=this.ajaxOptions.processResults),d.__super__.constructor.call(this,a,b)}return b.Extend(d,a),d.prototype._applyDefaults=function(a){var b={data:function(a){return c.extend({},a,{q:a.term})},transport:function(a,b,d){var e=c.ajax(a);return e.then(b),e.fail(d),e}};return c.extend({},b,a,!0)},d.prototype.processResults=function(a){return a},d.prototype.query=function(a,b){function d(){var d=f.transport(f,function(d){var f=e.processResults(d,a);e.options.get("debug")&&window.console&&console.error&&(f&&f.results&&c.isArray(f.results)||console.error("Select2: The AJAX results did not return an array in the `results` key of the response.")),b(f)},function(){d.status&&"0"===d.status||e.trigger("results:message",{message:"errorLoading"})});e._request=d}var e=this;null!=this._request&&(c.isFunction(this._request.abort)&&this._request.abort(),this._request=null);var f=c.extend({type:"GET"},this.ajaxOptions);"function"==typeof f.url&&(f.url=f.url.call(this.$element,a)),"function"==typeof f.data&&(f.data=f.data.call(this.$element,a)),this.ajaxOptions.delay&&null!=a.term?(this._queryTimeout&&window.clearTimeout(this._queryTimeout),this._queryTimeout=window.setTimeout(d,this.ajaxOptions.delay)):d()},d}),b.define("select2/data/tags",["jquery"],function(a){function b(b,c,d){var e=d.get("tags"),f=d.get("createTag");void 0!==f&&(this.createTag=f);var g=d.get("insertTag");if(void 0!==g&&(this.insertTag=g),b.call(this,c,d),a.isArray(e))for(var h=0;h<e.length;h++){var i=e[h],j=this._normalizeItem(i),k=this.option(j);this.$element.append(k)}}return b.prototype.query=function(a,b,c){function d(a,f){for(var g=a.results,h=0;h<g.length;h++){var i=g[h],j=null!=i.children&&!d({results:i.children},!0),k=i.text===b.term;if(k||j)return f?!1:(a.data=g,void c(a))}if(f)return!0;var l=e.createTag(b);if(null!=l){var m=e.option(l);m.attr("data-select2-tag",!0),e.addOptions([m]),e.insertTag(g,l)}a.results=g,c(a)}var e=this;return this._removeOldTags(),null==b.term||null!=b.page?void a.call(this,b,c):void a.call(this,b,d)},b.prototype.createTag=function(b,c){var d=a.trim(c.term);return""===d?null:{id:d,text:d}},b.prototype.insertTag=function(a,b,c){b.unshift(c)},b.prototype._removeOldTags=function(b){var c=(this._lastTag,this.$element.find("option[data-select2-tag]"));c.each(function(){this.selected||a(this).remove()})},b}),b.define("select2/data/tokenizer",["jquery"],function(a){function b(a,b,c){var d=c.get("tokenizer");void 0!==d&&(this.tokenizer=d),a.call(this,b,c)}return b.prototype.bind=function(a,b,c){a.call(this,b,c),this.$search=b.dropdown.$search||b.selection.$search||c.find(".select2-search__field")},b.prototype.query=function(b,c,d){function e(b){var c=g._normalizeItem(b),d=g.$element.find("option").filter(function(){return a(this).val()===c.id});if(!d.length){var e=g.option(c);e.attr("data-select2-tag",!0),g._removeOldTags(),g.addOptions([e])}f(c)}function f(a){g.trigger("select",{data:a})}var g=this;c.term=c.term||"";var h=this.tokenizer(c,this.options,e);h.term!==c.term&&(this.$search.length&&(this.$search.val(h.term),this.$search.focus()),c.term=h.term),b.call(this,c,d)},b.prototype.tokenizer=function(b,c,d,e){for(var f=d.get("tokenSeparators")||[],g=c.term,h=0,i=this.createTag||function(a){return{id:a.term,text:a.term}};h<g.length;){var j=g[h];if(-1!==a.inArray(j,f)){var k=g.substr(0,h),l=a.extend({},c,{term:k}),m=i(l);null!=m?(e(m),g=g.substr(h+1)||"",h=0):h++}else h++}return{term:g}},b}),b.define("select2/data/minimumInputLength",[],function(){function a(a,b,c){this.minimumInputLength=c.get("minimumInputLength"),a.call(this,b,c)}return a.prototype.query=function(a,b,c){return b.term=b.term||"",b.term.length<this.minimumInputLength?void this.trigger("results:message",{message:"inputTooShort",args:{minimum:this.minimumInputLength,input:b.term,params:b}}):void a.call(this,b,c)},a}),b.define("select2/data/maximumInputLength",[],function(){function a(a,b,c){this.maximumInputLength=c.get("maximumInputLength"),a.call(this,b,c)}return a.prototype.query=function(a,b,c){return b.term=b.term||"",this.maximumInputLength>0&&b.term.length>this.maximumInputLength?void this.trigger("results:message",{message:"inputTooLong",args:{maximum:this.maximumInputLength,input:b.term,params:b}}):void a.call(this,b,c)},a}),b.define("select2/data/maximumSelectionLength",[],function(){function a(a,b,c){this.maximumSelectionLength=c.get("maximumSelectionLength"),a.call(this,b,c)}return a.prototype.query=function(a,b,c){var d=this;this.current(function(e){var f=null!=e?e.length:0;return d.maximumSelectionLength>0&&f>=d.maximumSelectionLength?void d.trigger("results:message",{message:"maximumSelected",args:{maximum:d.maximumSelectionLength}}):void a.call(d,b,c)})},a}),b.define("select2/dropdown",["jquery","./utils"],function(a,b){function c(a,b){this.$element=a,this.options=b,c.__super__.constructor.call(this)}return b.Extend(c,b.Observable),c.prototype.render=function(){var b=a('<span class="select2-dropdown"><span class="select2-results"></span></span>');return b.attr("dir",this.options.get("dir")),this.$dropdown=b,b},c.prototype.bind=function(){},c.prototype.position=function(a,b){},c.prototype.destroy=function(){this.$dropdown.remove()},c}),b.define("select2/dropdown/search",["jquery","../utils"],function(a,b){function c(){}return c.prototype.render=function(b){var c=b.call(this),d=a('<span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" /></span>');return this.$searchContainer=d,this.$search=d.find("input"),c.prepend(d),c},c.prototype.bind=function(b,c,d){var e=this;b.call(this,c,d),this.$search.on("keydown",function(a){e.trigger("keypress",a),e._keyUpPrevented=a.isDefaultPrevented()}),this.$search.on("input",function(b){a(this).off("keyup")}),this.$search.on("keyup input",function(a){e.handleSearch(a)}),c.on("open",function(){e.$search.attr("tabindex",0),e.$search.focus(),window.setTimeout(function(){e.$search.focus()},0)}),c.on("close",function(){e.$search.attr("tabindex",-1),e.$search.val("")}),c.on("focus",function(){c.isOpen()&&e.$search.focus()}),c.on("results:all",function(a){if(null==a.query.term||""===a.query.term){var b=e.showSearch(a);b?e.$searchContainer.removeClass("select2-search--hide"):e.$searchContainer.addClass("select2-search--hide")}})},c.prototype.handleSearch=function(a){if(!this._keyUpPrevented){var b=this.$search.val();this.trigger("query",{term:b})}this._keyUpPrevented=!1},c.prototype.showSearch=function(a,b){return!0},c}),b.define("select2/dropdown/hidePlaceholder",[],function(){function a(a,b,c,d){this.placeholder=this.normalizePlaceholder(c.get("placeholder")),a.call(this,b,c,d)}return a.prototype.append=function(a,b){b.results=this.removePlaceholder(b.results),a.call(this,b)},a.prototype.normalizePlaceholder=function(a,b){return"string"==typeof b&&(b={id:"",text:b}),b},a.prototype.removePlaceholder=function(a,b){for(var c=b.slice(0),d=b.length-1;d>=0;d--){var e=b[d];this.placeholder.id===e.id&&c.splice(d,1)}return c},a}),b.define("select2/dropdown/infiniteScroll",["jquery"],function(a){function b(a,b,c,d){this.lastParams={},a.call(this,b,c,d),this.$loadingMore=this.createLoadingMore(),this.loading=!1}return b.prototype.append=function(a,b){this.$loadingMore.remove(),this.loading=!1,a.call(this,b),this.showLoadingMore(b)&&this.$results.append(this.$loadingMore)},b.prototype.bind=function(b,c,d){var e=this;b.call(this,c,d),c.on("query",function(a){e.lastParams=a,e.loading=!0}),c.on("query:append",function(a){e.lastParams=a,e.loading=!0}),this.$results.on("scroll",function(){var b=a.contains(document.documentElement,e.$loadingMore[0]);if(!e.loading&&b){var c=e.$results.offset().top+e.$results.outerHeight(!1),d=e.$loadingMore.offset().top+e.$loadingMore.outerHeight(!1);c+50>=d&&e.loadMore()}})},b.prototype.loadMore=function(){this.loading=!0;var b=a.extend({},{page:1},this.lastParams);b.page++,this.trigger("query:append",b)},b.prototype.showLoadingMore=function(a,b){return b.pagination&&b.pagination.more},b.prototype.createLoadingMore=function(){var b=a('<li class="select2-results__option select2-results__option--load-more"role="treeitem" aria-disabled="true"></li>'),c=this.options.get("translations").get("loadingMore");return b.html(c(this.lastParams)),b},b}),b.define("select2/dropdown/attachBody",["jquery","../utils"],function(a,b){function c(b,c,d){this.$dropdownParent=d.get("dropdownParent")||a(document.body),b.call(this,c,d)}return c.prototype.bind=function(a,b,c){var d=this,e=!1;a.call(this,b,c),b.on("open",function(){d._showDropdown(),d._attachPositioningHandler(b),e||(e=!0,b.on("results:all",function(){d._positionDropdown(),d._resizeDropdown()}),b.on("results:append",function(){d._positionDropdown(),d._resizeDropdown()}))}),b.on("close",function(){d._hideDropdown(),d._detachPositioningHandler(b)}),this.$dropdownContainer.on("mousedown",function(a){a.stopPropagation()})},c.prototype.destroy=function(a){a.call(this),this.$dropdownContainer.remove()},c.prototype.position=function(a,b,c){b.attr("class",c.attr("class")),b.removeClass("select2"),b.addClass("select2-container--open"),b.css({position:"absolute",top:-999999}),this.$container=c},c.prototype.render=function(b){var c=a("<span></span>"),d=b.call(this);return c.append(d),this.$dropdownContainer=c,c},c.prototype._hideDropdown=function(a){this.$dropdownContainer.detach()},c.prototype._attachPositioningHandler=function(c,d){var e=this,f="scroll.select2."+d.id,g="resize.select2."+d.id,h="orientationchange.select2."+d.id,i=this.$container.parents().filter(b.hasScroll);i.each(function(){a(this).data("select2-scroll-position",{x:a(this).scrollLeft(),y:a(this).scrollTop()})}),i.on(f,function(b){var c=a(this).data("select2-scroll-position");a(this).scrollTop(c.y)}),a(window).on(f+" "+g+" "+h,function(a){e._positionDropdown(),e._resizeDropdown()})},c.prototype._detachPositioningHandler=function(c,d){var e="scroll.select2."+d.id,f="resize.select2."+d.id,g="orientationchange.select2."+d.id,h=this.$container.parents().filter(b.hasScroll);h.off(e),a(window).off(e+" "+f+" "+g)},c.prototype._positionDropdown=function(){var b=a(window),c=this.$dropdown.hasClass("select2-dropdown--above"),d=this.$dropdown.hasClass("select2-dropdown--below"),e=null,f=this.$container.offset();f.bottom=f.top+this.$container.outerHeight(!1);var g={height:this.$container.outerHeight(!1)};g.top=f.top,g.bottom=f.top+g.height;var h={height:this.$dropdown.outerHeight(!1)},i={top:b.scrollTop(),bottom:b.scrollTop()+b.height()},j=i.top<f.top-h.height,k=i.bottom>f.bottom+h.height,l={left:f.left,top:g.bottom},m=this.$dropdownParent;"static"===m.css("position")&&(m=m.offsetParent());var n=m.offset();l.top-=n.top,l.left-=n.left,c||d||(e="below"),k||!j||c?!j&&k&&c&&(e="below"):e="above",("above"==e||c&&"below"!==e)&&(l.top=g.top-n.top-h.height),null!=e&&(this.$dropdown.removeClass("select2-dropdown--below select2-dropdown--above").addClass("select2-dropdown--"+e),this.$container.removeClass("select2-container--below select2-container--above").addClass("select2-container--"+e)),this.$dropdownContainer.css(l)},c.prototype._resizeDropdown=function(){var a={width:this.$container.outerWidth(!1)+"px"};this.options.get("dropdownAutoWidth")&&(a.minWidth=a.width,a.position="relative",a.width="auto"),this.$dropdown.css(a)},c.prototype._showDropdown=function(a){this.$dropdownContainer.appendTo(this.$dropdownParent),this._positionDropdown(),this._resizeDropdown()},c}),b.define("select2/dropdown/minimumResultsForSearch",[],function(){function a(b){for(var c=0,d=0;d<b.length;d++){var e=b[d];e.children?c+=a(e.children):c++}return c}function b(a,b,c,d){this.minimumResultsForSearch=c.get("minimumResultsForSearch"),this.minimumResultsForSearch<0&&(this.minimumResultsForSearch=1/0),a.call(this,b,c,d)}return b.prototype.showSearch=function(b,c){return a(c.data.results)<this.minimumResultsForSearch?!1:b.call(this,c)},b}),b.define("select2/dropdown/selectOnClose",[],function(){function a(){}return a.prototype.bind=function(a,b,c){var d=this;a.call(this,b,c),b.on("close",function(a){d._handleSelectOnClose(a)})},a.prototype._handleSelectOnClose=function(a,b){if(b&&null!=b.originalSelect2Event){var c=b.originalSelect2Event;if("select"===c._type||"unselect"===c._type)return}var d=this.getHighlightedResults();if(!(d.length<1)){var e=d.data("data");null!=e.element&&e.element.selected||null==e.element&&e.selected||this.trigger("select",{data:e})}},a}),b.define("select2/dropdown/closeOnSelect",[],function(){function a(){}return a.prototype.bind=function(a,b,c){var d=this;a.call(this,b,c),b.on("select",function(a){d._selectTriggered(a)}),b.on("unselect",function(a){d._selectTriggered(a)})},a.prototype._selectTriggered=function(a,b){var c=b.originalEvent;c&&c.ctrlKey||this.trigger("close",{originalEvent:c,originalSelect2Event:b})},a}),b.define("select2/i18n/en",[],function(){return{errorLoading:function(){return"The results could not be loaded."},inputTooLong:function(a){var b=a.input.length-a.maximum,c="Please delete "+b+" character";return 1!=b&&(c+="s"),c},inputTooShort:function(a){var b=a.minimum-a.input.length,c="Please enter "+b+" or more characters";return c},loadingMore:function(){return"Loading more results…"},maximumSelected:function(a){var b="You can only select "+a.maximum+" item";return 1!=a.maximum&&(b+="s"),b},noResults:function(){return"No results found"},searching:function(){return"Searching…"}}}),b.define("select2/defaults",["jquery","require","./results","./selection/single","./selection/multiple","./selection/placeholder","./selection/allowClear","./selection/search","./selection/eventRelay","./utils","./translation","./diacritics","./data/select","./data/array","./data/ajax","./data/tags","./data/tokenizer","./data/minimumInputLength","./data/maximumInputLength","./data/maximumSelectionLength","./dropdown","./dropdown/search","./dropdown/hidePlaceholder","./dropdown/infiniteScroll","./dropdown/attachBody","./dropdown/minimumResultsForSearch","./dropdown/selectOnClose","./dropdown/closeOnSelect","./i18n/en"],function(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C){function D(){this.reset()}D.prototype.apply=function(l){if(l=a.extend(!0,{},this.defaults,l),null==l.dataAdapter){if(null!=l.ajax?l.dataAdapter=o:null!=l.data?l.dataAdapter=n:l.dataAdapter=m,l.minimumInputLength>0&&(l.dataAdapter=j.Decorate(l.dataAdapter,r)),l.maximumInputLength>0&&(l.dataAdapter=j.Decorate(l.dataAdapter,s)),l.maximumSelectionLength>0&&(l.dataAdapter=j.Decorate(l.dataAdapter,t)),l.tags&&(l.dataAdapter=j.Decorate(l.dataAdapter,p)),(null!=l.tokenSeparators||null!=l.tokenizer)&&(l.dataAdapter=j.Decorate(l.dataAdapter,q)),null!=l.query){var C=b(l.amdBase+"compat/query");l.dataAdapter=j.Decorate(l.dataAdapter,C)}if(null!=l.initSelection){var D=b(l.amdBase+"compat/initSelection");l.dataAdapter=j.Decorate(l.dataAdapter,D)}}if(null==l.resultsAdapter&&(l.resultsAdapter=c,null!=l.ajax&&(l.resultsAdapter=j.Decorate(l.resultsAdapter,x)),null!=l.placeholder&&(l.resultsAdapter=j.Decorate(l.resultsAdapter,w)),l.selectOnClose&&(l.resultsAdapter=j.Decorate(l.resultsAdapter,A))),null==l.dropdownAdapter){if(l.multiple)l.dropdownAdapter=u;else{var E=j.Decorate(u,v);l.dropdownAdapter=E}if(0!==l.minimumResultsForSearch&&(l.dropdownAdapter=j.Decorate(l.dropdownAdapter,z)),l.closeOnSelect&&(l.dropdownAdapter=j.Decorate(l.dropdownAdapter,B)),null!=l.dropdownCssClass||null!=l.dropdownCss||null!=l.adaptDropdownCssClass){var F=b(l.amdBase+"compat/dropdownCss");l.dropdownAdapter=j.Decorate(l.dropdownAdapter,F)}l.dropdownAdapter=j.Decorate(l.dropdownAdapter,y)}if(null==l.selectionAdapter){if(l.multiple?l.selectionAdapter=e:l.selectionAdapter=d,null!=l.placeholder&&(l.selectionAdapter=j.Decorate(l.selectionAdapter,f)),l.allowClear&&(l.selectionAdapter=j.Decorate(l.selectionAdapter,g)),l.multiple&&(l.selectionAdapter=j.Decorate(l.selectionAdapter,h)),null!=l.containerCssClass||null!=l.containerCss||null!=l.adaptContainerCssClass){var G=b(l.amdBase+"compat/containerCss");l.selectionAdapter=j.Decorate(l.selectionAdapter,G)}l.selectionAdapter=j.Decorate(l.selectionAdapter,i)}if("string"==typeof l.language)if(l.language.indexOf("-")>0){var H=l.language.split("-"),I=H[0];l.language=[l.language,I]}else l.language=[l.language];if(a.isArray(l.language)){var J=new k;l.language.push("en");for(var K=l.language,L=0;L<K.length;L++){var M=K[L],N={};try{N=k.loadPath(M)}catch(O){try{M=this.defaults.amdLanguageBase+M,N=k.loadPath(M)}catch(P){l.debug&&window.console&&console.warn&&console.warn('Select2: The language file for "'+M+'" could not be automatically loaded. A fallback will be used instead.');continue}}J.extend(N)}l.translations=J}else{var Q=k.loadPath(this.defaults.amdLanguageBase+"en"),R=new k(l.language);R.extend(Q),l.translations=R}return l},D.prototype.reset=function(){function b(a){function b(a){return l[a]||a}return a.replace(/[^\u0000-\u007E]/g,b)}function c(d,e){if(""===a.trim(d.term))return e;if(e.children&&e.children.length>0){for(var f=a.extend(!0,{},e),g=e.children.length-1;g>=0;g--){var h=e.children[g],i=c(d,h);null==i&&f.children.splice(g,1)}return f.children.length>0?f:c(d,f)}var j=b(e.text).toUpperCase(),k=b(d.term).toUpperCase();return j.indexOf(k)>-1?e:null}this.defaults={amdBase:"./",amdLanguageBase:"./i18n/",closeOnSelect:!0,debug:!1,dropdownAutoWidth:!1,escapeMarkup:j.escapeMarkup,language:C,matcher:c,minimumInputLength:0,maximumInputLength:0,maximumSelectionLength:0,minimumResultsForSearch:0,selectOnClose:!1,sorter:function(a){return a},templateResult:function(a){return a.text},templateSelection:function(a){return a.text},theme:"default",width:"resolve"}},D.prototype.set=function(b,c){var d=a.camelCase(b),e={};e[d]=c;var f=j._convertData(e);a.extend(this.defaults,f)};var E=new D;return E}),b.define("select2/options",["require","jquery","./defaults","./utils"],function(a,b,c,d){function e(b,e){if(this.options=b,null!=e&&this.fromElement(e),this.options=c.apply(this.options),e&&e.is("input")){var f=a(this.get("amdBase")+"compat/inputData");this.options.dataAdapter=d.Decorate(this.options.dataAdapter,f)}}return e.prototype.fromElement=function(a){var c=["select2"];null==this.options.multiple&&(this.options.multiple=a.prop("multiple")),null==this.options.disabled&&(this.options.disabled=a.prop("disabled")),null==this.options.language&&(a.prop("lang")?this.options.language=a.prop("lang").toLowerCase():a.closest("[lang]").prop("lang")&&(this.options.language=a.closest("[lang]").prop("lang"))),null==this.options.dir&&(a.prop("dir")?this.options.dir=a.prop("dir"):a.closest("[dir]").prop("dir")?this.options.dir=a.closest("[dir]").prop("dir"):this.options.dir="ltr"),a.prop("disabled",this.options.disabled),a.prop("multiple",this.options.multiple),a.data("select2Tags")&&(this.options.debug&&window.console&&console.warn&&console.warn('Select2: The `data-select2-tags` attribute has been changed to use the `data-data` and `data-tags="true"` attributes and will be removed in future versions of Select2.'),a.data("data",a.data("select2Tags")),a.data("tags",!0)),a.data("ajaxUrl")&&(this.options.debug&&window.console&&console.warn&&console.warn("Select2: The `data-ajax-url` attribute has been changed to `data-ajax--url` and support for the old attribute will be removed in future versions of Select2."),a.attr("ajax--url",a.data("ajaxUrl")),a.data("ajax--url",a.data("ajaxUrl")));var e={};e=b.fn.jquery&&"1."==b.fn.jquery.substr(0,2)&&a[0].dataset?b.extend(!0,{},a[0].dataset,a.data()):a.data();var f=b.extend(!0,{},e);f=d._convertData(f);for(var g in f)b.inArray(g,c)>-1||(b.isPlainObject(this.options[g])?b.extend(this.options[g],f[g]):this.options[g]=f[g]);return this},e.prototype.get=function(a){return this.options[a]},e.prototype.set=function(a,b){this.options[a]=b},e}),b.define("select2/core",["jquery","./options","./utils","./keys"],function(a,b,c,d){var e=function(a,c){null!=a.data("select2")&&a.data("select2").destroy(),this.$element=a,this.id=this._generateId(a),c=c||{},this.options=new b(c,a),e.__super__.constructor.call(this);var d=a.attr("tabindex")||0;a.data("old-tabindex",d),a.attr("tabindex","-1");var f=this.options.get("dataAdapter");this.dataAdapter=new f(a,this.options);var g=this.render();this._placeContainer(g);var h=this.options.get("selectionAdapter");this.selection=new h(a,this.options),this.$selection=this.selection.render(),this.selection.position(this.$selection,g);var i=this.options.get("dropdownAdapter");this.dropdown=new i(a,this.options),this.$dropdown=this.dropdown.render(),this.dropdown.position(this.$dropdown,g);var j=this.options.get("resultsAdapter");this.results=new j(a,this.options,this.dataAdapter),this.$results=this.results.render(),this.results.position(this.$results,this.$dropdown);var k=this;this._bindAdapters(),this._registerDomEvents(),this._registerDataEvents(),this._registerSelectionEvents(),this._registerDropdownEvents(),this._registerResultsEvents(),this._registerEvents(),this.dataAdapter.current(function(a){k.trigger("selection:update",{data:a})}),a.addClass("select2-hidden-accessible"),a.attr("aria-hidden","true"),this._syncAttributes(),a.data("select2",this)};return c.Extend(e,c.Observable),e.prototype._generateId=function(a){var b="";return b=null!=a.attr("id")?a.attr("id"):null!=a.attr("name")?a.attr("name")+"-"+c.generateChars(2):c.generateChars(4),b=b.replace(/(:|\.|\[|\]|,)/g,""),b="select2-"+b},e.prototype._placeContainer=function(a){a.insertAfter(this.$element);var b=this._resolveWidth(this.$element,this.options.get("width"));null!=b&&a.css("width",b)},e.prototype._resolveWidth=function(a,b){var c=/^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i;if("resolve"==b){var d=this._resolveWidth(a,"style");return null!=d?d:this._resolveWidth(a,"element")}if("element"==b){var e=a.outerWidth(!1);return 0>=e?"auto":e+"px"}if("style"==b){var f=a.attr("style");if("string"!=typeof f)return null;for(var g=f.split(";"),h=0,i=g.length;i>h;h+=1){var j=g[h].replace(/\s/g,""),k=j.match(c);if(null!==k&&k.length>=1)return k[1]}return null}return b},e.prototype._bindAdapters=function(){this.dataAdapter.bind(this,this.$container),this.selection.bind(this,this.$container),this.dropdown.bind(this,this.$container),this.results.bind(this,this.$container)},e.prototype._registerDomEvents=function(){var b=this;this.$element.on("change.select2",function(){b.dataAdapter.current(function(a){b.trigger("selection:update",{data:a})})}),this.$element.on("focus.select2",function(a){b.trigger("focus",a)}),this._syncA=c.bind(this._syncAttributes,this),this._syncS=c.bind(this._syncSubtree,this),this.$element[0].attachEvent&&this.$element[0].attachEvent("onpropertychange",this._syncA);var d=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver;null!=d?(this._observer=new d(function(c){a.each(c,b._syncA),a.each(c,b._syncS)}),this._observer.observe(this.$element[0],{attributes:!0,childList:!0,subtree:!1})):this.$element[0].addEventListener&&(this.$element[0].addEventListener("DOMAttrModified",b._syncA,!1),this.$element[0].addEventListener("DOMNodeInserted",b._syncS,!1),this.$element[0].addEventListener("DOMNodeRemoved",b._syncS,!1))},e.prototype._registerDataEvents=function(){var a=this;this.dataAdapter.on("*",function(b,c){a.trigger(b,c)})},e.prototype._registerSelectionEvents=function(){var b=this,c=["toggle","focus"];this.selection.on("toggle",function(){b.toggleDropdown()}),this.selection.on("focus",function(a){b.focus(a)}),this.selection.on("*",function(d,e){-1===a.inArray(d,c)&&b.trigger(d,e)})},e.prototype._registerDropdownEvents=function(){var a=this;this.dropdown.on("*",function(b,c){a.trigger(b,c)})},e.prototype._registerResultsEvents=function(){var a=this;this.results.on("*",function(b,c){a.trigger(b,c)})},e.prototype._registerEvents=function(){var a=this;this.on("open",function(){a.$container.addClass("select2-container--open")}),this.on("close",function(){a.$container.removeClass("select2-container--open")}),this.on("enable",function(){a.$container.removeClass("select2-container--disabled")}),this.on("disable",function(){a.$container.addClass("select2-container--disabled")}),this.on("blur",function(){a.$container.removeClass("select2-container--focus")}),this.on("query",function(b){a.isOpen()||a.trigger("open",{}),this.dataAdapter.query(b,function(c){a.trigger("results:all",{data:c,query:b})})}),this.on("query:append",function(b){this.dataAdapter.query(b,function(c){a.trigger("results:append",{data:c,query:b})})}),this.on("keypress",function(b){var c=b.which;a.isOpen()?c===d.ESC||c===d.TAB||c===d.UP&&b.altKey?(a.close(),b.preventDefault()):c===d.ENTER?(a.trigger("results:select",{}),b.preventDefault()):c===d.SPACE&&b.ctrlKey?(a.trigger("results:toggle",{}),b.preventDefault()):c===d.UP?(a.trigger("results:previous",{}),b.preventDefault()):c===d.DOWN&&(a.trigger("results:next",{}),b.preventDefault()):(c===d.ENTER||c===d.SPACE||c===d.DOWN&&b.altKey)&&(a.open(),b.preventDefault())})},e.prototype._syncAttributes=function(){this.options.set("disabled",this.$element.prop("disabled")),this.options.get("disabled")?(this.isOpen()&&this.close(),this.trigger("disable",{})):this.trigger("enable",{})},e.prototype._syncSubtree=function(a,b){var c=!1,d=this;if(!a||!a.target||"OPTION"===a.target.nodeName||"OPTGROUP"===a.target.nodeName){if(b)if(b.addedNodes&&b.addedNodes.length>0)for(var e=0;e<b.addedNodes.length;e++){var f=b.addedNodes[e];f.selected&&(c=!0)}else b.removedNodes&&b.removedNodes.length>0&&(c=!0);else c=!0;c&&this.dataAdapter.current(function(a){d.trigger("selection:update",{data:a})})}},e.prototype.trigger=function(a,b){var c=e.__super__.trigger,d={open:"opening",close:"closing",select:"selecting",unselect:"unselecting"};if(void 0===b&&(b={}),a in d){var f=d[a],g={prevented:!1,name:a,args:b};if(c.call(this,f,g),g.prevented)return void(b.prevented=!0)}c.call(this,a,b)},e.prototype.toggleDropdown=function(){this.options.get("disabled")||(this.isOpen()?this.close():this.open())},e.prototype.open=function(){this.isOpen()||this.trigger("query",{})},e.prototype.close=function(){this.isOpen()&&this.trigger("close",{})},e.prototype.isOpen=function(){return this.$container.hasClass("select2-container--open")},e.prototype.hasFocus=function(){return this.$container.hasClass("select2-container--focus")},e.prototype.focus=function(a){this.hasFocus()||(this.$container.addClass("select2-container--focus"),this.trigger("focus",{}))},e.prototype.enable=function(a){this.options.get("debug")&&window.console&&console.warn&&console.warn('Select2: The `select2("enable")` method has been deprecated and will be removed in later Select2 versions. Use $element.prop("disabled") instead.'),(null==a||0===a.length)&&(a=[!0]);var b=!a[0];this.$element.prop("disabled",b)},e.prototype.data=function(){this.options.get("debug")&&arguments.length>0&&window.console&&console.warn&&console.warn('Select2: Data can no longer be set using `select2("data")`. You should consider setting the value instead using `$element.val()`.');var a=[];return this.dataAdapter.current(function(b){a=b}),a},e.prototype.val=function(b){if(this.options.get("debug")&&window.console&&console.warn&&console.warn('Select2: The `select2("val")` method has been deprecated and will be removed in later Select2 versions. Use $element.val() instead.'),null==b||0===b.length)return this.$element.val();var c=b[0];a.isArray(c)&&(c=a.map(c,function(a){return a.toString()})),this.$element.val(c).trigger("change")},e.prototype.destroy=function(){this.$container.remove(),this.$element[0].detachEvent&&this.$element[0].detachEvent("onpropertychange",this._syncA),null!=this._observer?(this._observer.disconnect(),this._observer=null):this.$element[0].removeEventListener&&(this.$element[0].removeEventListener("DOMAttrModified",this._syncA,!1),this.$element[0].removeEventListener("DOMNodeInserted",this._syncS,!1),this.$element[0].removeEventListener("DOMNodeRemoved",this._syncS,!1)),this._syncA=null,this._syncS=null,this.$element.off(".select2"),this.$element.attr("tabindex",this.$element.data("old-tabindex")),this.$element.removeClass("select2-hidden-accessible"),this.$element.attr("aria-hidden","false"),this.$element.removeData("select2"),this.dataAdapter.destroy(),this.selection.destroy(),this.dropdown.destroy(),this.results.destroy(),this.dataAdapter=null,this.selection=null,this.dropdown=null,this.results=null;
},e.prototype.render=function(){var b=a('<span class="select2 select2-container"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>');return b.attr("dir",this.options.get("dir")),this.$container=b,this.$container.addClass("select2-container--"+this.options.get("theme")),b.data("element",this.$element),b},e}),b.define("select2/compat/utils",["jquery"],function(a){function b(b,c,d){var e,f,g=[];e=a.trim(b.attr("class")),e&&(e=""+e,a(e.split(/\s+/)).each(function(){0===this.indexOf("select2-")&&g.push(this)})),e=a.trim(c.attr("class")),e&&(e=""+e,a(e.split(/\s+/)).each(function(){0!==this.indexOf("select2-")&&(f=d(this),null!=f&&g.push(f))})),b.attr("class",g.join(" "))}return{syncCssClasses:b}}),b.define("select2/compat/containerCss",["jquery","./utils"],function(a,b){function c(a){return null}function d(){}return d.prototype.render=function(d){var e=d.call(this),f=this.options.get("containerCssClass")||"";a.isFunction(f)&&(f=f(this.$element));var g=this.options.get("adaptContainerCssClass");if(g=g||c,-1!==f.indexOf(":all:")){f=f.replace(":all:","");var h=g;g=function(a){var b=h(a);return null!=b?b+" "+a:a}}var i=this.options.get("containerCss")||{};return a.isFunction(i)&&(i=i(this.$element)),b.syncCssClasses(e,this.$element,g),e.css(i),e.addClass(f),e},d}),b.define("select2/compat/dropdownCss",["jquery","./utils"],function(a,b){function c(a){return null}function d(){}return d.prototype.render=function(d){var e=d.call(this),f=this.options.get("dropdownCssClass")||"";a.isFunction(f)&&(f=f(this.$element));var g=this.options.get("adaptDropdownCssClass");if(g=g||c,-1!==f.indexOf(":all:")){f=f.replace(":all:","");var h=g;g=function(a){var b=h(a);return null!=b?b+" "+a:a}}var i=this.options.get("dropdownCss")||{};return a.isFunction(i)&&(i=i(this.$element)),b.syncCssClasses(e,this.$element,g),e.css(i),e.addClass(f),e},d}),b.define("select2/compat/initSelection",["jquery"],function(a){function b(a,b,c){c.get("debug")&&window.console&&console.warn&&console.warn("Select2: The `initSelection` option has been deprecated in favor of a custom data adapter that overrides the `current` method. This method is now called multiple times instead of a single time when the instance is initialized. Support will be removed for the `initSelection` option in future versions of Select2"),this.initSelection=c.get("initSelection"),this._isInitialized=!1,a.call(this,b,c)}return b.prototype.current=function(b,c){var d=this;return this._isInitialized?void b.call(this,c):void this.initSelection.call(null,this.$element,function(b){d._isInitialized=!0,a.isArray(b)||(b=[b]),c(b)})},b}),b.define("select2/compat/inputData",["jquery"],function(a){function b(a,b,c){this._currentData=[],this._valueSeparator=c.get("valueSeparator")||",","hidden"===b.prop("type")&&c.get("debug")&&console&&console.warn&&console.warn("Select2: Using a hidden input with Select2 is no longer supported and may stop working in the future. It is recommended to use a `<select>` element instead."),a.call(this,b,c)}return b.prototype.current=function(b,c){function d(b,c){var e=[];return b.selected||-1!==a.inArray(b.id,c)?(b.selected=!0,e.push(b)):b.selected=!1,b.children&&e.push.apply(e,d(b.children,c)),e}for(var e=[],f=0;f<this._currentData.length;f++){var g=this._currentData[f];e.push.apply(e,d(g,this.$element.val().split(this._valueSeparator)))}c(e)},b.prototype.select=function(b,c){if(this.options.get("multiple")){var d=this.$element.val();d+=this._valueSeparator+c.id,this.$element.val(d),this.$element.trigger("change")}else this.current(function(b){a.map(b,function(a){a.selected=!1})}),this.$element.val(c.id),this.$element.trigger("change")},b.prototype.unselect=function(a,b){var c=this;b.selected=!1,this.current(function(a){for(var d=[],e=0;e<a.length;e++){var f=a[e];b.id!=f.id&&d.push(f.id)}c.$element.val(d.join(c._valueSeparator)),c.$element.trigger("change")})},b.prototype.query=function(a,b,c){for(var d=[],e=0;e<this._currentData.length;e++){var f=this._currentData[e],g=this.matches(b,f);null!==g&&d.push(g)}c({results:d})},b.prototype.addOptions=function(b,c){var d=a.map(c,function(b){return a.data(b[0],"data")});this._currentData.push.apply(this._currentData,d)},b}),b.define("select2/compat/matcher",["jquery"],function(a){function b(b){function c(c,d){var e=a.extend(!0,{},d);if(null==c.term||""===a.trim(c.term))return e;if(d.children){for(var f=d.children.length-1;f>=0;f--){var g=d.children[f],h=b(c.term,g.text,g);h||e.children.splice(f,1)}if(e.children.length>0)return e}return b(c.term,d.text,d)?e:null}return c}return b}),b.define("select2/compat/query",[],function(){function a(a,b,c){c.get("debug")&&window.console&&console.warn&&console.warn("Select2: The `query` option has been deprecated in favor of a custom data adapter that overrides the `query` method. Support will be removed for the `query` option in future versions of Select2."),a.call(this,b,c)}return a.prototype.query=function(a,b,c){b.callback=c;var d=this.options.get("query");d.call(null,b)},a}),b.define("select2/dropdown/attachContainer",[],function(){function a(a,b,c){a.call(this,b,c)}return a.prototype.position=function(a,b,c){var d=c.find(".dropdown-wrapper");d.append(b),b.addClass("select2-dropdown--below"),c.addClass("select2-container--below")},a}),b.define("select2/dropdown/stopPropagation",[],function(){function a(){}return a.prototype.bind=function(a,b,c){a.call(this,b,c);var d=["blur","change","click","dblclick","focus","focusin","focusout","input","keydown","keyup","keypress","mousedown","mouseenter","mouseleave","mousemove","mouseover","mouseup","search","touchend","touchstart"];this.$dropdown.on(d.join(" "),function(a){a.stopPropagation()})},a}),b.define("select2/selection/stopPropagation",[],function(){function a(){}return a.prototype.bind=function(a,b,c){a.call(this,b,c);var d=["blur","change","click","dblclick","focus","focusin","focusout","input","keydown","keyup","keypress","mousedown","mouseenter","mouseleave","mousemove","mouseover","mouseup","search","touchend","touchstart"];this.$selection.on(d.join(" "),function(a){a.stopPropagation()})},a}),function(c){"function"==typeof b.define&&b.define.amd?b.define("jquery-mousewheel",["jquery"],c):"object"==typeof exports?module.exports=c:c(a)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})}),b.define("jquery.select2",["jquery","jquery-mousewheel","./select2/core","./select2/defaults"],function(a,b,c,d){if(null==a.fn.select2){var e=["open","close","destroy"];a.fn.select2=function(b){if(b=b||{},"object"==typeof b)return this.each(function(){var d=a.extend(!0,{},b);new c(a(this),d)}),this;if("string"==typeof b){var d,f=Array.prototype.slice.call(arguments,1);return this.each(function(){var c=a(this).data("select2");null==c&&window.console&&console.error&&console.error("The select2('"+b+"') method was called on an element that is not using Select2."),d=c[b].apply(c,f)}),a.inArray(b,e)>-1?this:d}throw new Error("Invalid arguments for Select2: "+b)}}return null==a.fn.select2.defaults&&(a.fn.select2.defaults=d),c}),{define:b.define,require:b.require}}(),c=b.require("jquery.select2");return a.fn.select2.amd=b,c});;
/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
(function(r,G,f,v){var J=f("html"),n=f(r),p=f(G),b=f.fancybox=function(){b.open.apply(this,arguments)},I=navigator.userAgent.match(/msie/i),B=null,s=G.createTouch!==v,t=function(a){return a&&a.hasOwnProperty&&a instanceof f},q=function(a){return a&&"string"===f.type(a)},E=function(a){return q(a)&&0<a.indexOf("%")},l=function(a,d){var e=parseInt(a,10)||0;d&&E(a)&&(e*=b.getViewport()[d]/100);return Math.ceil(e)},w=function(a,b){return l(a,b)+"px"};f.extend(b,{version:"2.1.5",defaults:{padding:15,margin:20,
width:800,height:600,minWidth:100,minHeight:100,maxWidth:9999,maxHeight:9999,pixelRatio:1,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!0,autoCenter:!s,fitToView:!0,aspectRatio:!1,topRatio:0.5,leftRatio:0.5,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3E3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},swf:{wmode:"transparent",allowfullscreen:"true",allowscriptaccess:"always"},
keys:{next:{13:"left",34:"up",39:"left",40:"up"},prev:{8:"right",33:"down",37:"right",38:"down"},close:[27],play:[32],toggle:[70]},direction:{next:"left",prev:"right"},scrollOutside:!0,index:0,type:null,href:null,content:null,title:null,tpl:{wrap:'<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen'+
(I?' allowtransparency="true"':"")+"></iframe>",error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',next:'<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",openOpacity:!0,
openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:!0,title:!0},onCancel:f.noop,beforeLoad:f.noop,afterLoad:f.noop,beforeShow:f.noop,afterShow:f.noop,beforeChange:f.noop,beforeClose:f.noop,afterClose:f.noop},group:{},opts:{},previous:null,coming:null,current:null,isActive:!1,
isOpen:!1,isOpened:!1,wrap:null,skin:null,outer:null,inner:null,player:{timer:null,isActive:!1},ajaxLoad:null,imgPreload:null,transitions:{},helpers:{},open:function(a,d){if(a&&(f.isPlainObject(d)||(d={}),!1!==b.close(!0)))return f.isArray(a)||(a=t(a)?f(a).get():[a]),f.each(a,function(e,c){var k={},g,h,j,m,l;"object"===f.type(c)&&(c.nodeType&&(c=f(c)),t(c)?(k={href:c.data("fancybox-href")||c.attr("href"),title:c.data("fancybox-title")||c.attr("title"),isDom:!0,element:c},f.metadata&&f.extend(!0,k,
c.metadata())):k=c);g=d.href||k.href||(q(c)?c:null);h=d.title!==v?d.title:k.title||"";m=(j=d.content||k.content)?"html":d.type||k.type;!m&&k.isDom&&(m=c.data("fancybox-type"),m||(m=(m=c.prop("class").match(/fancybox\.(\w+)/))?m[1]:null));q(g)&&(m||(b.isImage(g)?m="image":b.isSWF(g)?m="swf":"#"===g.charAt(0)?m="inline":q(c)&&(m="html",j=c)),"ajax"===m&&(l=g.split(/\s+/,2),g=l.shift(),l=l.shift()));j||("inline"===m?g?j=f(q(g)?g.replace(/.*(?=#[^\s]+$)/,""):g):k.isDom&&(j=c):"html"===m?j=g:!m&&(!g&&
k.isDom)&&(m="inline",j=c));f.extend(k,{href:g,type:m,content:j,title:h,selector:l});a[e]=k}),b.opts=f.extend(!0,{},b.defaults,d),d.keys!==v&&(b.opts.keys=d.keys?f.extend({},b.defaults.keys,d.keys):!1),b.group=a,b._start(b.opts.index)},cancel:function(){var a=b.coming;a&&!1!==b.trigger("onCancel")&&(b.hideLoading(),b.ajaxLoad&&b.ajaxLoad.abort(),b.ajaxLoad=null,b.imgPreload&&(b.imgPreload.onload=b.imgPreload.onerror=null),a.wrap&&a.wrap.stop(!0,!0).trigger("onReset").remove(),b.coming=null,b.current||
b._afterZoomOut(a))},close:function(a){b.cancel();!1!==b.trigger("beforeClose")&&(b.unbindEvents(),b.isActive&&(!b.isOpen||!0===a?(f(".fancybox-wrap").stop(!0).trigger("onReset").remove(),b._afterZoomOut()):(b.isOpen=b.isOpened=!1,b.isClosing=!0,f(".fancybox-item, .fancybox-nav").remove(),b.wrap.stop(!0,!0).removeClass("fancybox-opened"),b.transitions[b.current.closeMethod]())))},play:function(a){var d=function(){clearTimeout(b.player.timer)},e=function(){d();b.current&&b.player.isActive&&(b.player.timer=
setTimeout(b.next,b.current.playSpeed))},c=function(){d();p.unbind(".player");b.player.isActive=!1;b.trigger("onPlayEnd")};if(!0===a||!b.player.isActive&&!1!==a){if(b.current&&(b.current.loop||b.current.index<b.group.length-1))b.player.isActive=!0,p.bind({"onCancel.player beforeClose.player":c,"onUpdate.player":e,"beforeLoad.player":d}),e(),b.trigger("onPlayStart")}else c()},next:function(a){var d=b.current;d&&(q(a)||(a=d.direction.next),b.jumpto(d.index+1,a,"next"))},prev:function(a){var d=b.current;
d&&(q(a)||(a=d.direction.prev),b.jumpto(d.index-1,a,"prev"))},jumpto:function(a,d,e){var c=b.current;c&&(a=l(a),b.direction=d||c.direction[a>=c.index?"next":"prev"],b.router=e||"jumpto",c.loop&&(0>a&&(a=c.group.length+a%c.group.length),a%=c.group.length),c.group[a]!==v&&(b.cancel(),b._start(a)))},reposition:function(a,d){var e=b.current,c=e?e.wrap:null,k;c&&(k=b._getPosition(d),a&&"scroll"===a.type?(delete k.position,c.stop(!0,!0).animate(k,200)):(c.css(k),e.pos=f.extend({},e.dim,k)))},update:function(a){var d=
a&&a.type,e=!d||"orientationchange"===d;e&&(clearTimeout(B),B=null);b.isOpen&&!B&&(B=setTimeout(function(){var c=b.current;c&&!b.isClosing&&(b.wrap.removeClass("fancybox-tmp"),(e||"load"===d||"resize"===d&&c.autoResize)&&b._setDimension(),"scroll"===d&&c.canShrink||b.reposition(a),b.trigger("onUpdate"),B=null)},e&&!s?0:300))},toggle:function(a){b.isOpen&&(b.current.fitToView="boolean"===f.type(a)?a:!b.current.fitToView,s&&(b.wrap.removeAttr("style").addClass("fancybox-tmp"),b.trigger("onUpdate")),
b.update())},hideLoading:function(){p.unbind(".loading");f("#fancybox-loading").remove()},showLoading:function(){var a,d;b.hideLoading();a=f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");p.bind("keydown.loading",function(a){if(27===(a.which||a.keyCode))a.preventDefault(),b.cancel()});b.defaults.fixed||(d=b.getViewport(),a.css({position:"absolute",top:0.5*d.h+d.y,left:0.5*d.w+d.x}))},getViewport:function(){var a=b.current&&b.current.locked||!1,d={x:n.scrollLeft(),
y:n.scrollTop()};a?(d.w=a[0].clientWidth,d.h=a[0].clientHeight):(d.w=s&&r.innerWidth?r.innerWidth:n.width(),d.h=s&&r.innerHeight?r.innerHeight:n.height());return d},unbindEvents:function(){b.wrap&&t(b.wrap)&&b.wrap.unbind(".fb");p.unbind(".fb");n.unbind(".fb")},bindEvents:function(){var a=b.current,d;a&&(n.bind("orientationchange.fb"+(s?"":" resize.fb")+(a.autoCenter&&!a.locked?" scroll.fb":""),b.update),(d=a.keys)&&p.bind("keydown.fb",function(e){var c=e.which||e.keyCode,k=e.target||e.srcElement;
if(27===c&&b.coming)return!1;!e.ctrlKey&&(!e.altKey&&!e.shiftKey&&!e.metaKey&&(!k||!k.type&&!f(k).is("[contenteditable]")))&&f.each(d,function(d,k){if(1<a.group.length&&k[c]!==v)return b[d](k[c]),e.preventDefault(),!1;if(-1<f.inArray(c,k))return b[d](),e.preventDefault(),!1})}),f.fn.mousewheel&&a.mouseWheel&&b.wrap.bind("mousewheel.fb",function(d,c,k,g){for(var h=f(d.target||null),j=!1;h.length&&!j&&!h.is(".fancybox-skin")&&!h.is(".fancybox-wrap");)j=h[0]&&!(h[0].style.overflow&&"hidden"===h[0].style.overflow)&&
(h[0].clientWidth&&h[0].scrollWidth>h[0].clientWidth||h[0].clientHeight&&h[0].scrollHeight>h[0].clientHeight),h=f(h).parent();if(0!==c&&!j&&1<b.group.length&&!a.canShrink){if(0<g||0<k)b.prev(0<g?"down":"left");else if(0>g||0>k)b.next(0>g?"up":"right");d.preventDefault()}}))},trigger:function(a,d){var e,c=d||b.coming||b.current;if(c){f.isFunction(c[a])&&(e=c[a].apply(c,Array.prototype.slice.call(arguments,1)));if(!1===e)return!1;c.helpers&&f.each(c.helpers,function(d,e){if(e&&b.helpers[d]&&f.isFunction(b.helpers[d][a]))b.helpers[d][a](f.extend(!0,
{},b.helpers[d].defaults,e),c)});p.trigger(a)}},isImage:function(a){return q(a)&&a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)},isSWF:function(a){return q(a)&&a.match(/\.(swf)((\?|#).*)?$/i)},_start:function(a){var d={},e,c;a=l(a);e=b.group[a]||null;if(!e)return!1;d=f.extend(!0,{},b.opts,e);e=d.margin;c=d.padding;"number"===f.type(e)&&(d.margin=[e,e,e,e]);"number"===f.type(c)&&(d.padding=[c,c,c,c]);d.modal&&f.extend(!0,d,{closeBtn:!1,closeClick:!1,nextClick:!1,arrows:!1,
mouseWheel:!1,keys:null,helpers:{overlay:{closeClick:!1}}});d.autoSize&&(d.autoWidth=d.autoHeight=!0);"auto"===d.width&&(d.autoWidth=!0);"auto"===d.height&&(d.autoHeight=!0);d.group=b.group;d.index=a;b.coming=d;if(!1===b.trigger("beforeLoad"))b.coming=null;else{c=d.type;e=d.href;if(!c)return b.coming=null,b.current&&b.router&&"jumpto"!==b.router?(b.current.index=a,b[b.router](b.direction)):!1;b.isActive=!0;if("image"===c||"swf"===c)d.autoHeight=d.autoWidth=!1,d.scrolling="visible";"image"===c&&(d.aspectRatio=
!0);"iframe"===c&&s&&(d.scrolling="scroll");d.wrap=f(d.tpl.wrap).addClass("fancybox-"+(s?"mobile":"desktop")+" fancybox-type-"+c+" fancybox-tmp "+d.wrapCSS).appendTo(d.parent||"body");f.extend(d,{skin:f(".fancybox-skin",d.wrap),outer:f(".fancybox-outer",d.wrap),inner:f(".fancybox-inner",d.wrap)});f.each(["Top","Right","Bottom","Left"],function(a,b){d.skin.css("padding"+b,w(d.padding[a]))});b.trigger("onReady");if("inline"===c||"html"===c){if(!d.content||!d.content.length)return b._error("content")}else if(!e)return b._error("href");
"image"===c?b._loadImage():"ajax"===c?b._loadAjax():"iframe"===c?b._loadIframe():b._afterLoad()}},_error:function(a){f.extend(b.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:a,content:b.coming.tpl.error});b._afterLoad()},_loadImage:function(){var a=b.imgPreload=new Image;a.onload=function(){this.onload=this.onerror=null;b.coming.width=this.width/b.opts.pixelRatio;b.coming.height=this.height/b.opts.pixelRatio;b._afterLoad()};a.onerror=function(){this.onload=
this.onerror=null;b._error("image")};a.src=b.coming.href;!0!==a.complete&&b.showLoading()},_loadAjax:function(){var a=b.coming;b.showLoading();b.ajaxLoad=f.ajax(f.extend({},a.ajax,{url:a.href,error:function(a,e){b.coming&&"abort"!==e?b._error("ajax",a):b.hideLoading()},success:function(d,e){"success"===e&&(a.content=d,b._afterLoad())}}))},_loadIframe:function(){var a=b.coming,d=f(a.tpl.iframe.replace(/\{rnd\}/g,(new Date).getTime())).attr("scrolling",s?"auto":a.iframe.scrolling).attr("src",a.href);
f(a.wrap).bind("onReset",function(){try{f(this).find("iframe").hide().attr("src","//about:blank").end().empty()}catch(a){}});a.iframe.preload&&(b.showLoading(),d.one("load",function(){f(this).data("ready",1);s||f(this).bind("load.fb",b.update);f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();b._afterLoad()}));a.content=d.appendTo(a.inner);a.iframe.preload||b._afterLoad()},_preloadImages:function(){var a=b.group,d=b.current,e=a.length,c=d.preload?Math.min(d.preload,
e-1):0,f,g;for(g=1;g<=c;g+=1)f=a[(d.index+g)%e],"image"===f.type&&f.href&&((new Image).src=f.href)},_afterLoad:function(){var a=b.coming,d=b.current,e,c,k,g,h;b.hideLoading();if(a&&!1!==b.isActive)if(!1===b.trigger("afterLoad",a,d))a.wrap.stop(!0).trigger("onReset").remove(),b.coming=null;else{d&&(b.trigger("beforeChange",d),d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());b.unbindEvents();e=a.content;c=a.type;k=a.scrolling;f.extend(b,{wrap:a.wrap,skin:a.skin,
outer:a.outer,inner:a.inner,current:a,previous:d});g=a.href;switch(c){case "inline":case "ajax":case "html":a.selector?e=f("<div>").html(e).find(a.selector):t(e)&&(e.data("fancybox-placeholder")||e.data("fancybox-placeholder",f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()),e=e.show().detach(),a.wrap.bind("onReset",function(){f(this).find(e).length&&e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder",!1)}));break;case "image":e=a.tpl.image.replace("{href}",
g);break;case "swf":e='<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="'+g+'"></param>',h="",f.each(a.swf,function(a,b){e+='<param name="'+a+'" value="'+b+'"></param>';h+=" "+a+'="'+b+'"'}),e+='<embed src="'+g+'" type="application/x-shockwave-flash" width="100%" height="100%"'+h+"></embed></object>"}(!t(e)||!e.parent().is(a.inner))&&a.inner.append(e);b.trigger("beforeShow");a.inner.css("overflow","yes"===k?"scroll":
"no"===k?"hidden":k);b._setDimension();b.reposition();b.isOpen=!1;b.coming=null;b.bindEvents();if(b.isOpened){if(d.prevMethod)b.transitions[d.prevMethod]()}else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();b.transitions[b.isOpened?a.nextMethod:a.openMethod]();b._preloadImages()}},_setDimension:function(){var a=b.getViewport(),d=0,e=!1,c=!1,e=b.wrap,k=b.skin,g=b.inner,h=b.current,c=h.width,j=h.height,m=h.minWidth,u=h.minHeight,n=h.maxWidth,p=h.maxHeight,s=h.scrolling,q=h.scrollOutside?
h.scrollbarWidth:0,x=h.margin,y=l(x[1]+x[3]),r=l(x[0]+x[2]),v,z,t,C,A,F,B,D,H;e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");x=l(k.outerWidth(!0)-k.width());v=l(k.outerHeight(!0)-k.height());z=y+x;t=r+v;C=E(c)?(a.w-z)*l(c)/100:c;A=E(j)?(a.h-t)*l(j)/100:j;if("iframe"===h.type){if(H=h.content,h.autoHeight&&1===H.data("ready"))try{H[0].contentWindow.document.location&&(g.width(C).height(9999),F=H.contents().find("body"),q&&F.css("overflow-x","hidden"),A=F.outerHeight(!0))}catch(G){}}else if(h.autoWidth||
h.autoHeight)g.addClass("fancybox-tmp"),h.autoWidth||g.width(C),h.autoHeight||g.height(A),h.autoWidth&&(C=g.width()),h.autoHeight&&(A=g.height()),g.removeClass("fancybox-tmp");c=l(C);j=l(A);D=C/A;m=l(E(m)?l(m,"w")-z:m);n=l(E(n)?l(n,"w")-z:n);u=l(E(u)?l(u,"h")-t:u);p=l(E(p)?l(p,"h")-t:p);F=n;B=p;h.fitToView&&(n=Math.min(a.w-z,n),p=Math.min(a.h-t,p));z=a.w-y;r=a.h-r;h.aspectRatio?(c>n&&(c=n,j=l(c/D)),j>p&&(j=p,c=l(j*D)),c<m&&(c=m,j=l(c/D)),j<u&&(j=u,c=l(j*D))):(c=Math.max(m,Math.min(c,n)),h.autoHeight&&
"iframe"!==h.type&&(g.width(c),j=g.height()),j=Math.max(u,Math.min(j,p)));if(h.fitToView)if(g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height(),h.aspectRatio)for(;(a>z||y>r)&&(c>m&&j>u)&&!(19<d++);)j=Math.max(u,Math.min(p,j-10)),c=l(j*D),c<m&&(c=m,j=l(c/D)),c>n&&(c=n,j=l(c/D)),g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height();else c=Math.max(m,Math.min(c,c-(a-z))),j=Math.max(u,Math.min(j,j-(y-r)));q&&("auto"===s&&j<A&&c+x+q<z)&&(c+=q);g.width(c).height(j);e.width(c+x);a=e.width();
y=e.height();e=(a>z||y>r)&&c>m&&j>u;c=h.aspectRatio?c<F&&j<B&&c<C&&j<A:(c<F||j<B)&&(c<C||j<A);f.extend(h,{dim:{width:w(a),height:w(y)},origWidth:C,origHeight:A,canShrink:e,canExpand:c,wPadding:x,hPadding:v,wrapSpace:y-k.outerHeight(!0),skinSpace:k.height()-j});!H&&(h.autoHeight&&j>u&&j<p&&!c)&&g.height("auto")},_getPosition:function(a){var d=b.current,e=b.getViewport(),c=d.margin,f=b.wrap.width()+c[1]+c[3],g=b.wrap.height()+c[0]+c[2],c={position:"absolute",top:c[0],left:c[3]};d.autoCenter&&d.fixed&&
!a&&g<=e.h&&f<=e.w?c.position="fixed":d.locked||(c.top+=e.y,c.left+=e.x);c.top=w(Math.max(c.top,c.top+(e.h-g)*d.topRatio));c.left=w(Math.max(c.left,c.left+(e.w-f)*d.leftRatio));return c},_afterZoomIn:function(){var a=b.current;a&&(b.isOpen=b.isOpened=!0,b.wrap.css("overflow","visible").addClass("fancybox-opened"),b.update(),(a.closeClick||a.nextClick&&1<b.group.length)&&b.inner.css("cursor","pointer").bind("click.fb",function(d){!f(d.target).is("a")&&!f(d.target).parent().is("a")&&(d.preventDefault(),
b[a.closeClick?"close":"next"]())}),a.closeBtn&&f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb",function(a){a.preventDefault();b.close()}),a.arrows&&1<b.group.length&&((a.loop||0<a.index)&&f(a.tpl.prev).appendTo(b.outer).bind("click.fb",b.prev),(a.loop||a.index<b.group.length-1)&&f(a.tpl.next).appendTo(b.outer).bind("click.fb",b.next)),b.trigger("afterShow"),!a.loop&&a.index===a.group.length-1?b.play(!1):b.opts.autoPlay&&!b.player.isActive&&(b.opts.autoPlay=!1,b.play()))},_afterZoomOut:function(a){a=
a||b.current;f(".fancybox-wrap").trigger("onReset").remove();f.extend(b,{group:{},opts:{},router:!1,current:null,isActive:!1,isOpened:!1,isOpen:!1,isClosing:!1,wrap:null,skin:null,outer:null,inner:null});b.trigger("afterClose",a)}});b.transitions={getOrigPosition:function(){var a=b.current,d=a.element,e=a.orig,c={},f=50,g=50,h=a.hPadding,j=a.wPadding,m=b.getViewport();!e&&(a.isDom&&d.is(":visible"))&&(e=d.find("img:first"),e.length||(e=d));t(e)?(c=e.offset(),e.is("img")&&(f=e.outerWidth(),g=e.outerHeight())):
(c.top=m.y+(m.h-g)*a.topRatio,c.left=m.x+(m.w-f)*a.leftRatio);if("fixed"===b.wrap.css("position")||a.locked)c.top-=m.y,c.left-=m.x;return c={top:w(c.top-h*a.topRatio),left:w(c.left-j*a.leftRatio),width:w(f+j),height:w(g+h)}},step:function(a,d){var e,c,f=d.prop;c=b.current;var g=c.wrapSpace,h=c.skinSpace;if("width"===f||"height"===f)e=d.end===d.start?1:(a-d.start)/(d.end-d.start),b.isClosing&&(e=1-e),c="width"===f?c.wPadding:c.hPadding,c=a-c,b.skin[f](l("width"===f?c:c-g*e)),b.inner[f](l("width"===
f?c:c-g*e-h*e))},zoomIn:function(){var a=b.current,d=a.pos,e=a.openEffect,c="elastic"===e,k=f.extend({opacity:1},d);delete k.position;c?(d=this.getOrigPosition(),a.openOpacity&&(d.opacity=0.1)):"fade"===e&&(d.opacity=0.1);b.wrap.css(d).animate(k,{duration:"none"===e?0:a.openSpeed,easing:a.openEasing,step:c?this.step:null,complete:b._afterZoomIn})},zoomOut:function(){var a=b.current,d=a.closeEffect,e="elastic"===d,c={opacity:0.1};e&&(c=this.getOrigPosition(),a.closeOpacity&&(c.opacity=0.1));b.wrap.animate(c,
{duration:"none"===d?0:a.closeSpeed,easing:a.closeEasing,step:e?this.step:null,complete:b._afterZoomOut})},changeIn:function(){var a=b.current,d=a.nextEffect,e=a.pos,c={opacity:1},f=b.direction,g;e.opacity=0.1;"elastic"===d&&(g="down"===f||"up"===f?"top":"left","down"===f||"right"===f?(e[g]=w(l(e[g])-200),c[g]="+=200px"):(e[g]=w(l(e[g])+200),c[g]="-=200px"));"none"===d?b._afterZoomIn():b.wrap.css(e).animate(c,{duration:a.nextSpeed,easing:a.nextEasing,complete:b._afterZoomIn})},changeOut:function(){var a=
b.previous,d=a.prevEffect,e={opacity:0.1},c=b.direction;"elastic"===d&&(e["down"===c||"up"===c?"top":"left"]=("up"===c||"left"===c?"-":"+")+"=200px");a.wrap.animate(e,{duration:"none"===d?0:a.prevSpeed,easing:a.prevEasing,complete:function(){f(this).trigger("onReset").remove()}})}};b.helpers.overlay={defaults:{closeClick:!0,speedOut:200,showEarly:!0,css:{},locked:!s,fixed:!0},overlay:null,fixed:!1,el:f("html"),create:function(a){a=f.extend({},this.defaults,a);this.overlay&&this.close();this.overlay=
f('<div class="fancybox-overlay"></div>').appendTo(b.coming?b.coming.parent:a.parent);this.fixed=!1;a.fixed&&b.defaults.fixed&&(this.overlay.addClass("fancybox-overlay-fixed"),this.fixed=!0)},open:function(a){var d=this;a=f.extend({},this.defaults,a);this.overlay?this.overlay.unbind(".overlay").width("auto").height("auto"):this.create(a);this.fixed||(n.bind("resize.overlay",f.proxy(this.update,this)),this.update());a.closeClick&&this.overlay.bind("click.overlay",function(a){if(f(a.target).hasClass("fancybox-overlay"))return b.isActive?
b.close():d.close(),!1});this.overlay.css(a.css).show()},close:function(){var a,b;n.unbind("resize.overlay");this.el.hasClass("fancybox-lock")&&(f(".fancybox-margin").removeClass("fancybox-margin"),a=n.scrollTop(),b=n.scrollLeft(),this.el.removeClass("fancybox-lock"),n.scrollTop(a).scrollLeft(b));f(".fancybox-overlay").remove().hide();f.extend(this,{overlay:null,fixed:!1})},update:function(){var a="100%",b;this.overlay.width(a).height("100%");I?(b=Math.max(G.documentElement.offsetWidth,G.body.offsetWidth),
p.width()>b&&(a=p.width())):p.width()>n.width()&&(a=p.width());this.overlay.width(a).height(p.height())},onReady:function(a,b){var e=this.overlay;f(".fancybox-overlay").stop(!0,!0);e||this.create(a);a.locked&&(this.fixed&&b.fixed)&&(e||(this.margin=p.height()>n.height()?f("html").css("margin-right").replace("px",""):!1),b.locked=this.overlay.append(b.wrap),b.fixed=!1);!0===a.showEarly&&this.beforeShow.apply(this,arguments)},beforeShow:function(a,b){var e,c;b.locked&&(!1!==this.margin&&(f("*").filter(function(){return"fixed"===
f(this).css("position")&&!f(this).hasClass("fancybox-overlay")&&!f(this).hasClass("fancybox-wrap")}).addClass("fancybox-margin"),this.el.addClass("fancybox-margin")),e=n.scrollTop(),c=n.scrollLeft(),this.el.addClass("fancybox-lock"),n.scrollTop(e).scrollLeft(c));this.open(a)},onUpdate:function(){this.fixed||this.update()},afterClose:function(a){this.overlay&&!b.coming&&this.overlay.fadeOut(a.speedOut,f.proxy(this.close,this))}};b.helpers.title={defaults:{type:"float",position:"bottom"},beforeShow:function(a){var d=
b.current,e=d.title,c=a.type;f.isFunction(e)&&(e=e.call(d.element,d));if(q(e)&&""!==f.trim(e)){d=f('<div class="fancybox-title fancybox-title-'+c+'-wrap">'+e+"</div>");switch(c){case "inside":c=b.skin;break;case "outside":c=b.wrap;break;case "over":c=b.inner;break;default:c=b.skin,d.appendTo("body"),I&&d.width(d.width()),d.wrapInner('<span class="child"></span>'),b.current.margin[2]+=Math.abs(l(d.css("margin-bottom")))}d["top"===a.position?"prependTo":"appendTo"](c)}}};f.fn.fancybox=function(a){var d,
e=f(this),c=this.selector||"",k=function(g){var h=f(this).blur(),j=d,k,l;!g.ctrlKey&&(!g.altKey&&!g.shiftKey&&!g.metaKey)&&!h.is(".fancybox-wrap")&&(k=a.groupAttr||"data-fancybox-group",l=h.attr(k),l||(k="rel",l=h.get(0)[k]),l&&(""!==l&&"nofollow"!==l)&&(h=c.length?f(c):e,h=h.filter("["+k+'="'+l+'"]'),j=h.index(this)),a.index=j,!1!==b.open(h,a)&&g.preventDefault())};a=a||{};d=a.index||0;!c||!1===a.live?e.unbind("click.fb-start").bind("click.fb-start",k):p.undelegate(c,"click.fb-start").delegate(c+
":not('.fancybox-item, .fancybox-nav')","click.fb-start",k);this.filter("[data-fancybox-start=1]").trigger("click");return this};p.ready(function(){var a,d;f.scrollbarWidth===v&&(f.scrollbarWidth=function(){var a=f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),b=a.children(),b=b.innerWidth()-b.height(99).innerWidth();a.remove();return b});if(f.support.fixedPosition===v){a=f.support;d=f('<div style="position:fixed;top:20px;"></div>').appendTo("body");var e=20===
d[0].offsetTop||15===d[0].offsetTop;d.remove();a.fixedPosition=e}f.extend(b.defaults,{scrollbarWidth:f.scrollbarWidth(),fixed:f.support.fixedPosition,parent:f("body")});a=f(r).width();J.addClass("fancybox-lock-test");d=f(r).width();J.removeClass("fancybox-lock-test");f("<style type='text/css'>.fancybox-margin{margin-right:"+(d-a)+"px;}</style>").appendTo("head")})})(window,document,jQuery);;
/* qtip2 v3.0.3 | Plugins: tips viewport imagemap svg modal | Styles: core | qtip2.com | Licensed MIT | Fri May 20 2016 08:25:31 */

!function (a, b, c) {
	!function (a) { "use strict"; "function" == typeof define && define.amd ? define(["jquery"], a) : jQuery && !jQuery.fn.qtip && a(jQuery) }(function (d) {
		"use strict"; function e(a, b, c, e) { this.id = c, this.target = a, this.tooltip = E, this.elements = { target: a }, this._id = R + "-" + c, this.timers = { img: {} }, this.options = b, this.plugins = {}, this.cache = { event: {}, target: d(), disabled: D, attr: e, onTooltip: D, lastClass: "" }, this.rendered = this.destroyed = this.disabled = this.waiting = this.hiddenDuringWait = this.positioning = this.triggering = D } function f(a) { return a === E || "object" !== d.type(a) } function g(a) { return !(d.isFunction(a) || a && a.attr || a.length || "object" === d.type(a) && (a.jquery || a.then)) } function h(a) { var b, c, e, h; return f(a) ? D : (f(a.metadata) && (a.metadata = { type: a.metadata }), "content" in a && (b = a.content, f(b) || b.jquery || b.done ? (c = g(b) ? D : b, b = a.content = { text: c }) : c = b.text, "ajax" in b && (e = b.ajax, h = e && e.once !== D, delete b.ajax, b.text = function (a, b) { var f = c || d(this).attr(b.options.content.attr) || "Loading...", g = d.ajax(d.extend({}, e, { context: b })).then(e.success, E, e.error).then(function (a) { return a && h && b.set("content.text", a), a }, function (a, c, d) { b.destroyed || 0 === a.status || b.set("content.text", c + ": " + d) }); return h ? f : (b.set("content.text", f), g) }), "title" in b && (d.isPlainObject(b.title) && (b.button = b.title.button, b.title = b.title.text), g(b.title || D) && (b.title = D))), "position" in a && f(a.position) && (a.position = { my: a.position, at: a.position }), "show" in a && f(a.show) && (a.show = a.show.jquery ? { target: a.show } : a.show === C ? { ready: C } : { event: a.show }), "hide" in a && f(a.hide) && (a.hide = a.hide.jquery ? { target: a.hide } : { event: a.hide }), "style" in a && f(a.style) && (a.style = { classes: a.style }), d.each(Q, function () { this.sanitize && this.sanitize(a) }), a) } function i(a, b) { for (var c, d = 0, e = a, f = b.split(".") ; e = e[f[d++]];) d < f.length && (c = e); return [c || a, f.pop()] } function j(a, b) { var c, d, e; for (c in this.checks) if (this.checks.hasOwnProperty(c)) for (d in this.checks[c]) this.checks[c].hasOwnProperty(d) && (e = new RegExp(d, "i").exec(a)) && (b.push(e), ("builtin" === c || this.plugins[c]) && this.checks[c][d].apply(this.plugins[c] || this, b)) } function k(a) { return U.concat("").join(a ? "-" + a + " " : " ") } function l(a, b) { return b > 0 ? setTimeout(d.proxy(a, this), b) : void a.call(this) } function m(a) { this.tooltip.hasClass(_) || (clearTimeout(this.timers.show), clearTimeout(this.timers.hide), this.timers.show = l.call(this, function () { this.toggle(C, a) }, this.options.show.delay)) } function n(a) { if (!this.tooltip.hasClass(_) && !this.destroyed) { var b = d(a.relatedTarget), c = b.closest(V)[0] === this.tooltip[0], e = b[0] === this.options.show.target[0]; if (clearTimeout(this.timers.show), clearTimeout(this.timers.hide), this !== b[0] && "mouse" === this.options.position.target && c || this.options.hide.fixed && /mouse(out|leave|move)/.test(a.type) && (c || e)) try { a.preventDefault(), a.stopImmediatePropagation() } catch (f) { } else this.timers.hide = l.call(this, function () { this.toggle(D, a) }, this.options.hide.delay, this) } } function o(a) { !this.tooltip.hasClass(_) && this.options.hide.inactive && (clearTimeout(this.timers.inactive), this.timers.inactive = l.call(this, function () { this.hide(a) }, this.options.hide.inactive)) } function p(a) { this.rendered && this.tooltip[0].offsetWidth > 0 && this.reposition(a) } function q(a, c, e) { d(b.body).delegate(a, (c.split ? c : c.join("." + R + " ")) + "." + R, function () { var a = x.api[d.attr(this, T)]; a && !a.disabled && e.apply(a, arguments) }) } function r(a, c, f) { var g, i, j, k, l, m = d(b.body), n = a[0] === b ? m : a, o = a.metadata ? a.metadata(f.metadata) : E, p = "html5" === f.metadata.type && o ? o[f.metadata.name] : E, q = a.data(f.metadata.name || "qtipopts"); try { q = "string" == typeof q ? d.parseJSON(q) : q } catch (r) { } if (k = d.extend(C, {}, x.defaults, f, "object" == typeof q ? h(q) : E, h(p || o)), i = k.position, k.id = c, "boolean" == typeof k.content.text) { if (j = a.attr(k.content.attr), k.content.attr === D || !j) return D; k.content.text = j } if (i.container.length || (i.container = m), i.target === D && (i.target = n), k.show.target === D && (k.show.target = n), k.show.solo === C && (k.show.solo = i.container.closest("body")), k.hide.target === D && (k.hide.target = n), k.position.viewport === C && (k.position.viewport = i.container), i.container = i.container.eq(0), i.at = new z(i.at, C), i.my = new z(i.my), a.data(R)) if (k.overwrite) a.qtip("destroy", !0); else if (k.overwrite === D) return D; return a.attr(S, c), k.suppress && (l = a.attr("title")) && a.removeAttr("title").attr(ba, l).attr("title", ""), g = new e(a, k, c, !!j), a.data(R, g), g } function s(a) { return a.charAt(0).toUpperCase() + a.slice(1) } function t(a, b) { var d, e, f = b.charAt(0).toUpperCase() + b.slice(1), g = (b + " " + ua.join(f + " ") + f).split(" "), h = 0; if (ta[b]) return a.css(ta[b]); for (; d = g[h++];) if ((e = a.css(d)) !== c) return ta[b] = d, e } function u(a, b) { return Math.ceil(parseFloat(t(a, b))) } function v(a, b) { this._ns = "tip", this.options = b, this.offset = b.offset, this.size = [b.width, b.height], this.qtip = a, this.init(a) } function w(a, b) { this.options = b, this._ns = "-modal", this.qtip = a, this.init(a) } var x, y, z, A, B, C = !0, D = !1, E = null, F = "x", G = "y", H = "width", I = "height", J = "top", K = "left", L = "bottom", M = "right", N = "center", O = "flipinvert", P = "shift", Q = {}, R = "qtip", S = "data-hasqtip", T = "data-qtip-id", U = ["ui-widget", "ui-tooltip"], V = "." + R, W = "click dblclick mousedown mouseup mousemove mouseleave mouseenter".split(" "), X = R + "-fixed", Y = R + "-default", Z = R + "-focus", $ = R + "-hover", _ = R + "-disabled", aa = "_replacedByqTip", ba = "oldtitle", ca = { ie: function () { var a, c; for (a = 4, c = b.createElement("div") ; (c.innerHTML = "<!--[if gt IE " + a + "]><i></i><![endif]-->") && c.getElementsByTagName("i")[0]; a += 1); return a > 4 ? a : NaN }(), iOS: parseFloat(("" + (/CPU.*OS ([0-9_]{1,5})|(CPU like).*AppleWebKit.*Mobile/i.exec(navigator.userAgent) || [0, ""])[1]).replace("undefined", "3_2").replace("_", ".").replace("_", "")) || D }; y = e.prototype, y._when = function (a) { return d.when.apply(d, a) }, y.render = function (a) { if (this.rendered || this.destroyed) return this; var b = this, c = this.options, e = this.cache, f = this.elements, g = c.content.text, h = c.content.title, i = c.content.button, j = c.position, k = []; return d.attr(this.target[0], "aria-describedby", this._id), e.posClass = this._createPosClass((this.position = { my: j.my, at: j.at }).my), this.tooltip = f.tooltip = d("<div/>", { id: this._id, "class": [R, Y, c.style.classes, e.posClass].join(" "), width: c.style.width || "", height: c.style.height || "", tracking: "mouse" === j.target && j.adjust.mouse, role: "alert", "aria-live": "polite", "aria-atomic": D, "aria-describedby": this._id + "-content", "aria-hidden": C }).toggleClass(_, this.disabled).attr(T, this.id).data(R, this).appendTo(j.container).append(f.content = d("<div />", { "class": R + "-content", id: this._id + "-content", "aria-atomic": C })), this.rendered = -1, this.positioning = C, h && (this._createTitle(), d.isFunction(h) || k.push(this._updateTitle(h, D))), i && this._createButton(), d.isFunction(g) || k.push(this._updateContent(g, D)), this.rendered = C, this._setWidget(), d.each(Q, function (a) { var c; "render" === this.initialize && (c = this(b)) && (b.plugins[a] = c) }), this._unassignEvents(), this._assignEvents(), this._when(k).then(function () { b._trigger("render"), b.positioning = D, b.hiddenDuringWait || !c.show.ready && !a || b.toggle(C, e.event, D), b.hiddenDuringWait = D }), x.api[this.id] = this, this }, y.destroy = function (a) { function b() { if (!this.destroyed) { this.destroyed = C; var a, b = this.target, c = b.attr(ba); this.rendered && this.tooltip.stop(1, 0).find("*").remove().end().remove(), d.each(this.plugins, function () { this.destroy && this.destroy() }); for (a in this.timers) this.timers.hasOwnProperty(a) && clearTimeout(this.timers[a]); b.removeData(R).removeAttr(T).removeAttr(S).removeAttr("aria-describedby"), this.options.suppress && c && b.attr("title", c).removeAttr(ba), this._unassignEvents(), this.options = this.elements = this.cache = this.timers = this.plugins = this.mouse = E, delete x.api[this.id] } } return this.destroyed ? this.target : (a === C && "hide" !== this.triggering || !this.rendered ? b.call(this) : (this.tooltip.one("tooltiphidden", d.proxy(b, this)), !this.triggering && this.hide()), this.target) }, A = y.checks = { builtin: { "^id$": function (a, b, c, e) { var f = c === C ? x.nextid : c, g = R + "-" + f; f !== D && f.length > 0 && !d("#" + g).length ? (this._id = g, this.rendered && (this.tooltip[0].id = this._id, this.elements.content[0].id = this._id + "-content", this.elements.title[0].id = this._id + "-title")) : a[b] = e }, "^prerender": function (a, b, c) { c && !this.rendered && this.render(this.options.show.ready) }, "^content.text$": function (a, b, c) { this._updateContent(c) }, "^content.attr$": function (a, b, c, d) { this.options.content.text === this.target.attr(d) && this._updateContent(this.target.attr(c)) }, "^content.title$": function (a, b, c) { return c ? (c && !this.elements.title && this._createTitle(), void this._updateTitle(c)) : this._removeTitle() }, "^content.button$": function (a, b, c) { this._updateButton(c) }, "^content.title.(text|button)$": function (a, b, c) { this.set("content." + b, c) }, "^position.(my|at)$": function (a, b, c) { "string" == typeof c && (this.position[b] = a[b] = new z(c, "at" === b)) }, "^position.container$": function (a, b, c) { this.rendered && this.tooltip.appendTo(c) }, "^show.ready$": function (a, b, c) { c && (!this.rendered && this.render(C) || this.toggle(C)) }, "^style.classes$": function (a, b, c, d) { this.rendered && this.tooltip.removeClass(d).addClass(c) }, "^style.(width|height)": function (a, b, c) { this.rendered && this.tooltip.css(b, c) }, "^style.widget|content.title": function () { this.rendered && this._setWidget() }, "^style.def": function (a, b, c) { this.rendered && this.tooltip.toggleClass(Y, !!c) }, "^events.(render|show|move|hide|focus|blur)$": function (a, b, c) { this.rendered && this.tooltip[(d.isFunction(c) ? "" : "un") + "bind"]("tooltip" + b, c) }, "^(show|hide|position).(event|target|fixed|inactive|leave|distance|viewport|adjust)": function () { if (this.rendered) { var a = this.options.position; this.tooltip.attr("tracking", "mouse" === a.target && a.adjust.mouse), this._unassignEvents(), this._assignEvents() } } } }, y.get = function (a) { if (this.destroyed) return this; var b = i(this.options, a.toLowerCase()), c = b[0][b[1]]; return c.precedance ? c.string() : c }; var da = /^position\.(my|at|adjust|target|container|viewport)|style|content|show\.ready/i, ea = /^prerender|show\.ready/i; y.set = function (a, b) { if (this.destroyed) return this; var c, e = this.rendered, f = D, g = this.options; return "string" == typeof a ? (c = a, a = {}, a[c] = b) : a = d.extend({}, a), d.each(a, function (b, c) { if (e && ea.test(b)) return void delete a[b]; var h, j = i(g, b.toLowerCase()); h = j[0][j[1]], j[0][j[1]] = c && c.nodeType ? d(c) : c, f = da.test(b) || f, a[b] = [j[0], j[1], c, h] }), h(g), this.positioning = C, d.each(a, d.proxy(j, this)), this.positioning = D, this.rendered && this.tooltip[0].offsetWidth > 0 && f && this.reposition("mouse" === g.position.target ? E : this.cache.event), this }, y._update = function (a, b) { var c = this, e = this.cache; return this.rendered && a ? (d.isFunction(a) && (a = a.call(this.elements.target, e.event, this) || ""), d.isFunction(a.then) ? (e.waiting = C, a.then(function (a) { return e.waiting = D, c._update(a, b) }, E, function (a) { return c._update(a, b) })) : a === D || !a && "" !== a ? D : (a.jquery && a.length > 0 ? b.empty().append(a.css({ display: "block", visibility: "visible" })) : b.html(a), this._waitForContent(b).then(function (a) { c.rendered && c.tooltip[0].offsetWidth > 0 && c.reposition(e.event, !a.length) }))) : D }, y._waitForContent = function (a) { var b = this.cache; return b.waiting = C, (d.fn.imagesLoaded ? a.imagesLoaded() : (new d.Deferred).resolve([])).done(function () { b.waiting = D }).promise() }, y._updateContent = function (a, b) { this._update(a, this.elements.content, b) }, y._updateTitle = function (a, b) { this._update(a, this.elements.title, b) === D && this._removeTitle(D) }, y._createTitle = function () { var a = this.elements, b = this._id + "-title"; a.titlebar && this._removeTitle(), a.titlebar = d("<div />", { "class": R + "-titlebar " + (this.options.style.widget ? k("header") : "") }).append(a.title = d("<div />", { id: b, "class": R + "-title", "aria-atomic": C })).insertBefore(a.content).delegate(".qtip-close", "mousedown keydown mouseup keyup mouseout", function (a) { d(this).toggleClass("ui-state-active ui-state-focus", "down" === a.type.substr(-4)) }).delegate(".qtip-close", "mouseover mouseout", function (a) { d(this).toggleClass("ui-state-hover", "mouseover" === a.type) }), this.options.content.button && this._createButton() }, y._removeTitle = function (a) { var b = this.elements; b.title && (b.titlebar.remove(), b.titlebar = b.title = b.button = E, a !== D && this.reposition()) }, y._createPosClass = function (a) { return R + "-pos-" + (a || this.options.position.my).abbrev() }, y.reposition = function (c, e) { if (!this.rendered || this.positioning || this.destroyed) return this; this.positioning = C; var f, g, h, i, j = this.cache, k = this.tooltip, l = this.options.position, m = l.target, n = l.my, o = l.at, p = l.viewport, q = l.container, r = l.adjust, s = r.method.split(" "), t = k.outerWidth(D), u = k.outerHeight(D), v = 0, w = 0, x = k.css("position"), y = { left: 0, top: 0 }, z = k[0].offsetWidth > 0, A = c && "scroll" === c.type, B = d(a), E = q[0].ownerDocument, F = this.mouse; if (d.isArray(m) && 2 === m.length) o = { x: K, y: J }, y = { left: m[0], top: m[1] }; else if ("mouse" === m) o = { x: K, y: J }, (!r.mouse || this.options.hide.distance) && j.origin && j.origin.pageX ? c = j.origin : !c || c && ("resize" === c.type || "scroll" === c.type) ? c = j.event : F && F.pageX && (c = F), "static" !== x && (y = q.offset()), E.body.offsetWidth !== (a.innerWidth || E.documentElement.clientWidth) && (g = d(b.body).offset()), y = { left: c.pageX - y.left + (g && g.left || 0), top: c.pageY - y.top + (g && g.top || 0) }, r.mouse && A && F && (y.left -= (F.scrollX || 0) - B.scrollLeft(), y.top -= (F.scrollY || 0) - B.scrollTop()); else { if ("event" === m ? c && c.target && "scroll" !== c.type && "resize" !== c.type ? j.target = d(c.target) : c.target || (j.target = this.elements.target) : "event" !== m && (j.target = d(m.jquery ? m : this.elements.target)), m = j.target, m = d(m).eq(0), 0 === m.length) return this; m[0] === b || m[0] === a ? (v = ca.iOS ? a.innerWidth : m.width(), w = ca.iOS ? a.innerHeight : m.height(), m[0] === a && (y = { top: (p || m).scrollTop(), left: (p || m).scrollLeft() })) : Q.imagemap && m.is("area") ? f = Q.imagemap(this, m, o, Q.viewport ? s : D) : Q.svg && m && m[0].ownerSVGElement ? f = Q.svg(this, m, o, Q.viewport ? s : D) : (v = m.outerWidth(D), w = m.outerHeight(D), y = m.offset()), f && (v = f.width, w = f.height, g = f.offset, y = f.position), y = this.reposition.offset(m, y, q), (ca.iOS > 3.1 && ca.iOS < 4.1 || ca.iOS >= 4.3 && ca.iOS < 4.33 || !ca.iOS && "fixed" === x) && (y.left -= B.scrollLeft(), y.top -= B.scrollTop()), (!f || f && f.adjustable !== D) && (y.left += o.x === M ? v : o.x === N ? v / 2 : 0, y.top += o.y === L ? w : o.y === N ? w / 2 : 0) } return y.left += r.x + (n.x === M ? -t : n.x === N ? -t / 2 : 0), y.top += r.y + (n.y === L ? -u : n.y === N ? -u / 2 : 0), Q.viewport ? (h = y.adjusted = Q.viewport(this, y, l, v, w, t, u), g && h.left && (y.left += g.left), g && h.top && (y.top += g.top), h.my && (this.position.my = h.my)) : y.adjusted = { left: 0, top: 0 }, j.posClass !== (i = this._createPosClass(this.position.my)) && (j.posClass = i, k.removeClass(j.posClass).addClass(i)), this._trigger("move", [y, p.elem || p], c) ? (delete y.adjusted, e === D || !z || isNaN(y.left) || isNaN(y.top) || "mouse" === m || !d.isFunction(l.effect) ? k.css(y) : d.isFunction(l.effect) && (l.effect.call(k, this, d.extend({}, y)), k.queue(function (a) { d(this).css({ opacity: "", height: "" }), ca.ie && this.style.removeAttribute("filter"), a() })), this.positioning = D, this) : this }, y.reposition.offset = function (a, c, e) { function f(a, b) { c.left += b * a.scrollLeft(), c.top += b * a.scrollTop() } if (!e[0]) return c; var g, h, i, j, k = d(a[0].ownerDocument), l = !!ca.ie && "CSS1Compat" !== b.compatMode, m = e[0]; do "static" !== (h = d.css(m, "position")) && ("fixed" === h ? (i = m.getBoundingClientRect(), f(k, -1)) : (i = d(m).position(), i.left += parseFloat(d.css(m, "borderLeftWidth")) || 0, i.top += parseFloat(d.css(m, "borderTopWidth")) || 0), c.left -= i.left + (parseFloat(d.css(m, "marginLeft")) || 0), c.top -= i.top + (parseFloat(d.css(m, "marginTop")) || 0), g || "hidden" === (j = d.css(m, "overflow")) || "visible" === j || (g = d(m))); while (m = m.offsetParent); return g && (g[0] !== k[0] || l) && f(g, 1), c }; var fa = (z = y.reposition.Corner = function (a, b) { a = ("" + a).replace(/([A-Z])/, " $1").replace(/middle/gi, N).toLowerCase(), this.x = (a.match(/left|right/i) || a.match(/center/) || ["inherit"])[0].toLowerCase(), this.y = (a.match(/top|bottom|center/i) || ["inherit"])[0].toLowerCase(), this.forceY = !!b; var c = a.charAt(0); this.precedance = "t" === c || "b" === c ? G : F }).prototype; fa.invert = function (a, b) { this[a] = this[a] === K ? M : this[a] === M ? K : b || this[a] }, fa.string = function (a) { var b = this.x, c = this.y, d = b !== c ? "center" === b || "center" !== c && (this.precedance === G || this.forceY) ? [c, b] : [b, c] : [b]; return a !== !1 ? d.join(" ") : d }, fa.abbrev = function () { var a = this.string(!1); return a[0].charAt(0) + (a[1] && a[1].charAt(0) || "") }, fa.clone = function () { return new z(this.string(), this.forceY) }, y.toggle = function (a, c) { var e = this.cache, f = this.options, g = this.tooltip; if (c) { if (/over|enter/.test(c.type) && e.event && /out|leave/.test(e.event.type) && f.show.target.add(c.target).length === f.show.target.length && g.has(c.relatedTarget).length) return this; e.event = d.event.fix(c) } if (this.waiting && !a && (this.hiddenDuringWait = C), !this.rendered) return a ? this.render(1) : this; if (this.destroyed || this.disabled) return this; var h, i, j, k = a ? "show" : "hide", l = this.options[k], m = this.options.position, n = this.options.content, o = this.tooltip.css("width"), p = this.tooltip.is(":visible"), q = a || 1 === l.target.length, r = !c || l.target.length < 2 || e.target[0] === c.target; return (typeof a).search("boolean|number") && (a = !p), h = !g.is(":animated") && p === a && r, i = h ? E : !!this._trigger(k, [90]), this.destroyed ? this : (i !== D && a && this.focus(c), !i || h ? this : (d.attr(g[0], "aria-hidden", !a), a ? (this.mouse && (e.origin = d.event.fix(this.mouse)), d.isFunction(n.text) && this._updateContent(n.text, D), d.isFunction(n.title) && this._updateTitle(n.title, D), !B && "mouse" === m.target && m.adjust.mouse && (d(b).bind("mousemove." + R, this._storeMouse), B = C), o || g.css("width", g.outerWidth(D)), this.reposition(c, arguments[2]), o || g.css("width", ""), l.solo && ("string" == typeof l.solo ? d(l.solo) : d(V, l.solo)).not(g).not(l.target).qtip("hide", new d.Event("tooltipsolo"))) : (clearTimeout(this.timers.show), delete e.origin, B && !d(V + '[tracking="true"]:visible', l.solo).not(g).length && (d(b).unbind("mousemove." + R), B = D), this.blur(c)), j = d.proxy(function () { a ? (ca.ie && g[0].style.removeAttribute("filter"), g.css("overflow", ""), "string" == typeof l.autofocus && d(this.options.show.autofocus, g).focus(), this.options.show.target.trigger("qtip-" + this.id + "-inactive")) : g.css({ display: "", visibility: "", opacity: "", left: "", top: "" }), this._trigger(a ? "visible" : "hidden") }, this), l.effect === D || q === D ? (g[k](), j()) : d.isFunction(l.effect) ? (g.stop(1, 1), l.effect.call(g, this), g.queue("fx", function (a) { j(), a() })) : g.fadeTo(90, a ? 1 : 0, j), a && l.target.trigger("qtip-" + this.id + "-inactive"), this)) }, y.show = function (a) { return this.toggle(C, a) }, y.hide = function (a) { return this.toggle(D, a) }, y.focus = function (a) { if (!this.rendered || this.destroyed) return this; var b = d(V), c = this.tooltip, e = parseInt(c[0].style.zIndex, 10), f = x.zindex + b.length; return c.hasClass(Z) || this._trigger("focus", [f], a) && (e !== f && (b.each(function () { this.style.zIndex > e && (this.style.zIndex = this.style.zIndex - 1) }), b.filter("." + Z).qtip("blur", a)), c.addClass(Z)[0].style.zIndex = f), this }, y.blur = function (a) { return !this.rendered || this.destroyed ? this : (this.tooltip.removeClass(Z), this._trigger("blur", [this.tooltip.css("zIndex")], a), this) }, y.disable = function (a) { return this.destroyed ? this : ("toggle" === a ? a = !(this.rendered ? this.tooltip.hasClass(_) : this.disabled) : "boolean" != typeof a && (a = C), this.rendered && this.tooltip.toggleClass(_, a).attr("aria-disabled", a), this.disabled = !!a, this) }, y.enable = function () { return this.disable(D) }, y._createButton = function () { var a = this, b = this.elements, c = b.tooltip, e = this.options.content.button, f = "string" == typeof e, g = f ? e : "Close tooltip"; b.button && b.button.remove(), e.jquery ? b.button = e : b.button = d("<a />", { "class": "qtip-close " + (this.options.style.widget ? "" : R + "-icon"), title: g, "aria-label": g }).prepend(d("<span />", { "class": "ui-icon ui-icon-close", html: "&times;" })), b.button.appendTo(b.titlebar || c).attr("role", "button").click(function (b) { return c.hasClass(_) || a.hide(b), D }) }, y._updateButton = function (a) { if (!this.rendered) return D; var b = this.elements.button; a ? this._createButton() : b.remove() }, y._setWidget = function () { var a = this.options.style.widget, b = this.elements, c = b.tooltip, d = c.hasClass(_); c.removeClass(_), _ = a ? "ui-state-disabled" : "qtip-disabled", c.toggleClass(_, d), c.toggleClass("ui-helper-reset " + k(), a).toggleClass(Y, this.options.style.def && !a), b.content && b.content.toggleClass(k("content"), a), b.titlebar && b.titlebar.toggleClass(k("header"), a), b.button && b.button.toggleClass(R + "-icon", !a) }, y._storeMouse = function (a) { return (this.mouse = d.event.fix(a)).type = "mousemove", this }, y._bind = function (a, b, c, e, f) { if (a && c && b.length) { var g = "." + this._id + (e ? "-" + e : ""); return d(a).bind((b.split ? b : b.join(g + " ")) + g, d.proxy(c, f || this)), this } }, y._unbind = function (a, b) { return a && d(a).unbind("." + this._id + (b ? "-" + b : "")), this }, y._trigger = function (a, b, c) { var e = new d.Event("tooltip" + a); return e.originalEvent = c && d.extend({}, c) || this.cache.event || E, this.triggering = a, this.tooltip.trigger(e, [this].concat(b || [])), this.triggering = D, !e.isDefaultPrevented() }, y._bindEvents = function (a, b, c, e, f, g) { var h = c.filter(e).add(e.filter(c)), i = []; h.length && (d.each(b, function (b, c) { var e = d.inArray(c, a); e > -1 && i.push(a.splice(e, 1)[0]) }), i.length && (this._bind(h, i, function (a) { var b = this.rendered ? this.tooltip[0].offsetWidth > 0 : !1; (b ? g : f).call(this, a) }), c = c.not(h), e = e.not(h))), this._bind(c, a, f), this._bind(e, b, g) }, y._assignInitialEvents = function (a) { function b(a) { return this.disabled || this.destroyed ? D : (this.cache.event = a && d.event.fix(a), this.cache.target = a && d(a.target), clearTimeout(this.timers.show), void (this.timers.show = l.call(this, function () { this.render("object" == typeof a || c.show.ready) }, c.prerender ? 0 : c.show.delay))) } var c = this.options, e = c.show.target, f = c.hide.target, g = c.show.event ? d.trim("" + c.show.event).split(" ") : [], h = c.hide.event ? d.trim("" + c.hide.event).split(" ") : []; this._bind(this.elements.target, ["remove", "removeqtip"], function () { this.destroy(!0) }, "destroy"), /mouse(over|enter)/i.test(c.show.event) && !/mouse(out|leave)/i.test(c.hide.event) && h.push("mouseleave"), this._bind(e, "mousemove", function (a) { this._storeMouse(a), this.cache.onTarget = C }), this._bindEvents(g, h, e, f, b, function () { return this.timers ? void clearTimeout(this.timers.show) : D }), (c.show.ready || c.prerender) && b.call(this, a) }, y._assignEvents = function () { var c = this, e = this.options, f = e.position, g = this.tooltip, h = e.show.target, i = e.hide.target, j = f.container, k = f.viewport, l = d(b), q = d(a), r = e.show.event ? d.trim("" + e.show.event).split(" ") : [], s = e.hide.event ? d.trim("" + e.hide.event).split(" ") : []; d.each(e.events, function (a, b) { c._bind(g, "toggle" === a ? ["tooltipshow", "tooltiphide"] : ["tooltip" + a], b, null, g) }), /mouse(out|leave)/i.test(e.hide.event) && "window" === e.hide.leave && this._bind(l, ["mouseout", "blur"], function (a) { /select|option/.test(a.target.nodeName) || a.relatedTarget || this.hide(a) }), e.hide.fixed ? i = i.add(g.addClass(X)) : /mouse(over|enter)/i.test(e.show.event) && this._bind(i, "mouseleave", function () { clearTimeout(this.timers.show) }), ("" + e.hide.event).indexOf("unfocus") > -1 && this._bind(j.closest("html"), ["mousedown", "touchstart"], function (a) { var b = d(a.target), c = this.rendered && !this.tooltip.hasClass(_) && this.tooltip[0].offsetWidth > 0, e = b.parents(V).filter(this.tooltip[0]).length > 0; b[0] === this.target[0] || b[0] === this.tooltip[0] || e || this.target.has(b[0]).length || !c || this.hide(a) }), "number" == typeof e.hide.inactive && (this._bind(h, "qtip-" + this.id + "-inactive", o, "inactive"), this._bind(i.add(g), x.inactiveEvents, o)), this._bindEvents(r, s, h, i, m, n), this._bind(h.add(g), "mousemove", function (a) { if ("number" == typeof e.hide.distance) { var b = this.cache.origin || {}, c = this.options.hide.distance, d = Math.abs; (d(a.pageX - b.pageX) >= c || d(a.pageY - b.pageY) >= c) && this.hide(a) } this._storeMouse(a) }), "mouse" === f.target && f.adjust.mouse && (e.hide.event && this._bind(h, ["mouseenter", "mouseleave"], function (a) { return this.cache ? void (this.cache.onTarget = "mouseenter" === a.type) : D }), this._bind(l, "mousemove", function (a) { this.rendered && this.cache.onTarget && !this.tooltip.hasClass(_) && this.tooltip[0].offsetWidth > 0 && this.reposition(a) })), (f.adjust.resize || k.length) && this._bind(d.event.special.resize ? k : q, "resize", p), f.adjust.scroll && this._bind(q.add(f.container), "scroll", p) }, y._unassignEvents = function () { var c = this.options, e = c.show.target, f = c.hide.target, g = d.grep([this.elements.target[0], this.rendered && this.tooltip[0], c.position.container[0], c.position.viewport[0], c.position.container.closest("html")[0], a, b], function (a) { return "object" == typeof a }); e && e.toArray && (g = g.concat(e.toArray())), f && f.toArray && (g = g.concat(f.toArray())), this._unbind(g)._unbind(g, "destroy")._unbind(g, "inactive") }, d(function () { q(V, ["mouseenter", "mouseleave"], function (a) { var b = "mouseenter" === a.type, c = d(a.currentTarget), e = d(a.relatedTarget || a.target), f = this.options; b ? (this.focus(a), c.hasClass(X) && !c.hasClass(_) && clearTimeout(this.timers.hide)) : "mouse" === f.position.target && f.position.adjust.mouse && f.hide.event && f.show.target && !e.closest(f.show.target[0]).length && this.hide(a), c.toggleClass($, b) }), q("[" + T + "]", W, o) }), x = d.fn.qtip = function (a, b, e) { var f = ("" + a).toLowerCase(), g = E, i = d.makeArray(arguments).slice(1), j = i[i.length - 1], k = this[0] ? d.data(this[0], R) : E; return !arguments.length && k || "api" === f ? k : "string" == typeof a ? (this.each(function () { var a = d.data(this, R); if (!a) return C; if (j && j.timeStamp && (a.cache.event = j), !b || "option" !== f && "options" !== f) a[f] && a[f].apply(a, i); else { if (e === c && !d.isPlainObject(b)) return g = a.get(b), D; a.set(b, e) } }), g !== E ? g : this) : "object" != typeof a && arguments.length ? void 0 : (k = h(d.extend(C, {}, a)), this.each(function (a) { var b, c; return c = d.isArray(k.id) ? k.id[a] : k.id, c = !c || c === D || c.length < 1 || x.api[c] ? x.nextid++ : c, b = r(d(this), c, k), b === D ? C : (x.api[c] = b, d.each(Q, function () { "initialize" === this.initialize && this(b) }), void b._assignInitialEvents(j)) })) }, d.qtip = e, x.api = {}, d.each({ attr: function (a, b) { if (this.length) { var c = this[0], e = "title", f = d.data(c, "qtip"); if (a === e && f && f.options && "object" == typeof f && "object" == typeof f.options && f.options.suppress) return arguments.length < 2 ? d.attr(c, ba) : (f && f.options.content.attr === e && f.cache.attr && f.set("content.text", b), this.attr(ba, b)) } return d.fn["attr" + aa].apply(this, arguments) }, clone: function (a) { var b = d.fn["clone" + aa].apply(this, arguments); return a || b.filter("[" + ba + "]").attr("title", function () { return d.attr(this, ba) }).removeAttr(ba), b } }, function (a, b) { if (!b || d.fn[a + aa]) return C; var c = d.fn[a + aa] = d.fn[a]; d.fn[a] = function () { return b.apply(this, arguments) || c.apply(this, arguments) } }), d.ui || (d["cleanData" + aa] = d.cleanData, d.cleanData = function (a) { for (var b, c = 0; (b = d(a[c])).length; c++) if (b.attr(S)) try { b.triggerHandler("removeqtip") } catch (e) { } d["cleanData" + aa].apply(this, arguments) }), x.version = "3.0.3", x.nextid = 0, x.inactiveEvents = W, x.zindex = 15e3, x.defaults = { prerender: D, id: D, overwrite: C, suppress: C, content: { text: C, attr: "title", title: D, button: D }, position: { my: "top left", at: "bottom right", target: D, container: D, viewport: D, adjust: { x: 0, y: 0, mouse: C, scroll: C, resize: C, method: "flipinvert flipinvert" }, effect: function (a, b) { d(this).animate(b, { duration: 200, queue: D }) } }, show: { target: D, event: "mouseenter", effect: C, delay: 90, solo: D, ready: D, autofocus: D }, hide: { target: D, event: "mouseleave", effect: C, delay: 0, fixed: D, inactive: D, leave: "window", distance: D }, style: { classes: "", widget: D, width: D, height: D, def: C }, events: { render: E, move: E, show: E, hide: E, toggle: E, visible: E, hidden: E, focus: E, blur: E } }; var ga, ha, ia, ja, ka, la = "margin", ma = "border", na = "color", oa = "background-color", pa = "transparent", qa = " !important", ra = !!b.createElement("canvas").getContext, sa = /rgba?\(0, 0, 0(, 0)?\)|transparent|#123456/i, ta = {}, ua = ["Webkit", "O", "Moz", "ms"]; ra ? (ja = a.devicePixelRatio || 1, ka = function () { var a = b.createElement("canvas").getContext("2d"); return a.backingStorePixelRatio || a.webkitBackingStorePixelRatio || a.mozBackingStorePixelRatio || a.msBackingStorePixelRatio || a.oBackingStorePixelRatio || 1 }(), ia = ja / ka) : ha = function (a, b, c) { return "<qtipvml:" + a + ' xmlns="urn:schemas-microsoft.com:vml" class="qtip-vml" ' + (b || "") + ' style="behavior: url(#default#VML); ' + (c || "") + '" />' }, d.extend(v.prototype, {
			init: function (a) { var b, c; c = this.element = a.elements.tip = d("<div />", { "class": R + "-tip" }).prependTo(a.tooltip), ra ? (b = d("<canvas />").appendTo(this.element)[0].getContext("2d"), b.lineJoin = "miter", b.miterLimit = 1e5, b.save()) : (b = ha("shape", 'coordorigin="0,0"', "position:absolute;"), this.element.html(b + b), a._bind(d("*", c).add(c), ["click", "mousedown"], function (a) { a.stopPropagation() }, this._ns)), a._bind(a.tooltip, "tooltipmove", this.reposition, this._ns, this), this.create() }, _swapDimensions: function () { this.size[0] = this.options.height, this.size[1] = this.options.width }, _resetDimensions: function () { this.size[0] = this.options.width, this.size[1] = this.options.height }, _useTitle: function (a) { var b = this.qtip.elements.titlebar; return b && (a.y === J || a.y === N && this.element.position().top + this.size[1] / 2 + this.options.offset < b.outerHeight(C)) }, _parseCorner: function (a) { var b = this.qtip.options.position.my; return a === D || b === D ? a = D : a === C ? a = new z(b.string()) : a.string || (a = new z(a), a.fixed = C), a }, _parseWidth: function (a, b, c) { var d = this.qtip.elements, e = ma + s(b) + "Width"; return (c ? u(c, e) : u(d.content, e) || u(this._useTitle(a) && d.titlebar || d.content, e) || u(d.tooltip, e)) || 0 }, _parseRadius: function (a) { var b = this.qtip.elements, c = ma + s(a.y) + s(a.x) + "Radius"; return ca.ie < 9 ? 0 : u(this._useTitle(a) && b.titlebar || b.content, c) || u(b.tooltip, c) || 0 }, _invalidColour: function (a, b, c) { var d = a.css(b); return !d || c && d === a.css(c) || sa.test(d) ? D : d }, _parseColours: function (a) { var b = this.qtip.elements, c = this.element.css("cssText", ""), e = ma + s(a[a.precedance]) + s(na), f = this._useTitle(a) && b.titlebar || b.content, g = this._invalidColour, h = []; return h[0] = g(c, oa) || g(f, oa) || g(b.content, oa) || g(b.tooltip, oa) || c.css(oa), h[1] = g(c, e, na) || g(f, e, na) || g(b.content, e, na) || g(b.tooltip, e, na) || b.tooltip.css(e), d("*", c).add(c).css("cssText", oa + ":" + pa + qa + ";" + ma + ":0" + qa + ";"), h }, _calculateSize: function (a) { var b, c, d, e = a.precedance === G, f = this.options.width, g = this.options.height, h = "c" === a.abbrev(), i = (e ? f : g) * (h ? .5 : 1), j = Math.pow, k = Math.round, l = Math.sqrt(j(i, 2) + j(g, 2)), m = [this.border / i * l, this.border / g * l]; return m[2] = Math.sqrt(j(m[0], 2) - j(this.border, 2)), m[3] = Math.sqrt(j(m[1], 2) - j(this.border, 2)), b = l + m[2] + m[3] + (h ? 0 : m[0]), c = b / l, d = [k(c * f), k(c * g)], e ? d : d.reverse() }, _calculateTip: function (a, b, c) { c = c || 1, b = b || this.size; var d = b[0] * c, e = b[1] * c, f = Math.ceil(d / 2), g = Math.ceil(e / 2), h = { br: [0, 0, d, e, d, 0], bl: [0, 0, d, 0, 0, e], tr: [0, e, d, 0, d, e], tl: [0, 0, 0, e, d, e], tc: [0, e, f, 0, d, e], bc: [0, 0, d, 0, f, e], rc: [0, 0, d, g, 0, e], lc: [d, 0, d, e, 0, g] }; return h.lt = h.br, h.rt = h.bl, h.lb = h.tr, h.rb = h.tl, h[a.abbrev()] }, _drawCoords: function (a, b) { a.beginPath(), a.moveTo(b[0], b[1]), a.lineTo(b[2], b[3]), a.lineTo(b[4], b[5]), a.closePath() }, create: function () { var a = this.corner = (ra || ca.ie) && this._parseCorner(this.options.corner); return this.enabled = !!this.corner && "c" !== this.corner.abbrev(), this.enabled && (this.qtip.cache.corner = a.clone(), this.update()), this.element.toggle(this.enabled), this.corner }, update: function (b, c) { if (!this.enabled) return this; var e, f, g, h, i, j, k, l, m = this.qtip.elements, n = this.element, o = n.children(), p = this.options, q = this.size, r = p.mimic, s = Math.round; b || (b = this.qtip.cache.corner || this.corner), r === D ? r = b : (r = new z(r), r.precedance = b.precedance, "inherit" === r.x ? r.x = b.x : "inherit" === r.y ? r.y = b.y : r.x === r.y && (r[b.precedance] = b[b.precedance])), f = r.precedance, b.precedance === F ? this._swapDimensions() : this._resetDimensions(), e = this.color = this._parseColours(b), e[1] !== pa ? (l = this.border = this._parseWidth(b, b[b.precedance]), p.border && 1 > l && !sa.test(e[1]) && (e[0] = e[1]), this.border = l = p.border !== C ? p.border : l) : this.border = l = 0, k = this.size = this._calculateSize(b), n.css({ width: k[0], height: k[1], lineHeight: k[1] + "px" }), j = b.precedance === G ? [s(r.x === K ? l : r.x === M ? k[0] - q[0] - l : (k[0] - q[0]) / 2), s(r.y === J ? k[1] - q[1] : 0)] : [s(r.x === K ? k[0] - q[0] : 0), s(r.y === J ? l : r.y === L ? k[1] - q[1] - l : (k[1] - q[1]) / 2)], ra ? (g = o[0].getContext("2d"), g.restore(), g.save(), g.clearRect(0, 0, 6e3, 6e3), h = this._calculateTip(r, q, ia), i = this._calculateTip(r, this.size, ia), o.attr(H, k[0] * ia).attr(I, k[1] * ia), o.css(H, k[0]).css(I, k[1]), this._drawCoords(g, i), g.fillStyle = e[1], g.fill(), g.translate(j[0] * ia, j[1] * ia), this._drawCoords(g, h), g.fillStyle = e[0], g.fill()) : (h = this._calculateTip(r), h = "m" + h[0] + "," + h[1] + " l" + h[2] + "," + h[3] + " " + h[4] + "," + h[5] + " xe", j[2] = l && /^(r|b)/i.test(b.string()) ? 8 === ca.ie ? 2 : 1 : 0, o.css({ coordsize: k[0] + l + " " + k[1] + l, antialias: "" + (r.string().indexOf(N) > -1), left: j[0] - j[2] * Number(f === F), top: j[1] - j[2] * Number(f === G), width: k[0] + l, height: k[1] + l }).each(function (a) { var b = d(this); b[b.prop ? "prop" : "attr"]({ coordsize: k[0] + l + " " + k[1] + l, path: h, fillcolor: e[0], filled: !!a, stroked: !a }).toggle(!(!l && !a)), !a && b.html(ha("stroke", 'weight="' + 2 * l + 'px" color="' + e[1] + '" miterlimit="1000" joinstyle="miter"')) })), a.opera && setTimeout(function () { m.tip.css({ display: "inline-block", visibility: "visible" }) }, 1), c !== D && this.calculate(b, k) }, calculate: function (a, b) {
				if (!this.enabled) return D; var c, e, f = this, g = this.qtip.elements, h = this.element, i = this.options.offset, j = {}; return a = a || this.corner,
				c = a.precedance, b = b || this._calculateSize(a), e = [a.x, a.y], c === F && e.reverse(), d.each(e, function (d, e) { var h, k, l; e === N ? (h = c === G ? K : J, j[h] = "50%", j[la + "-" + h] = -Math.round(b[c === G ? 0 : 1] / 2) + i) : (h = f._parseWidth(a, e, g.tooltip), k = f._parseWidth(a, e, g.content), l = f._parseRadius(a), j[e] = Math.max(-f.border, d ? k : i + (l > h ? l : -h))) }), j[a[c]] -= b[c === F ? 0 : 1], h.css({ margin: "", top: "", bottom: "", left: "", right: "" }).css(j), j
			}, reposition: function (a, b, d) { function e(a, b, c, d, e) { a === P && j.precedance === b && k[d] && j[c] !== N ? j.precedance = j.precedance === F ? G : F : a !== P && k[d] && (j[b] = j[b] === N ? k[d] > 0 ? d : e : j[b] === d ? e : d) } function f(a, b, e) { j[a] === N ? p[la + "-" + b] = o[a] = g[la + "-" + b] - k[b] : (h = g[e] !== c ? [k[b], -g[b]] : [-k[b], g[b]], (o[a] = Math.max(h[0], h[1])) > h[0] && (d[b] -= k[b], o[b] = D), p[g[e] !== c ? e : b] = o[a]) } if (this.enabled) { var g, h, i = b.cache, j = this.corner.clone(), k = d.adjusted, l = b.options.position.adjust.method.split(" "), m = l[0], n = l[1] || l[0], o = { left: D, top: D, x: 0, y: 0 }, p = {}; this.corner.fixed !== C && (e(m, F, G, K, M), e(n, G, F, J, L), j.string() === i.corner.string() && i.cornerTop === k.top && i.cornerLeft === k.left || this.update(j, D)), g = this.calculate(j), g.right !== c && (g.left = -g.right), g.bottom !== c && (g.top = -g.bottom), g.user = this.offset, o.left = m === P && !!k.left, o.left && f(F, K, M), o.top = n === P && !!k.top, o.top && f(G, J, L), this.element.css(p).toggle(!(o.x && o.y || j.x === N && o.y || j.y === N && o.x)), d.left -= g.left.charAt ? g.user : m !== P || o.top || !o.left && !o.top ? g.left + this.border : 0, d.top -= g.top.charAt ? g.user : n !== P || o.left || !o.left && !o.top ? g.top + this.border : 0, i.cornerLeft = k.left, i.cornerTop = k.top, i.corner = j.clone() } }, destroy: function () { this.qtip._unbind(this.qtip.tooltip, this._ns), this.qtip.elements.tip && this.qtip.elements.tip.find("*").remove().end().remove() }
		}), ga = Q.tip = function (a) { return new v(a, a.options.style.tip) }, ga.initialize = "render", ga.sanitize = function (a) { if (a.style && "tip" in a.style) { var b = a.style.tip; "object" != typeof b && (b = a.style.tip = { corner: b }), /string|boolean/i.test(typeof b.corner) || (b.corner = C) } }, A.tip = { "^position.my|style.tip.(corner|mimic|border)$": function () { this.create(), this.qtip.reposition() }, "^style.tip.(height|width)$": function (a) { this.size = [a.width, a.height], this.update(), this.qtip.reposition() }, "^content.title|style.(classes|widget)$": function () { this.update() } }, d.extend(C, x.defaults, { style: { tip: { corner: C, mimic: D, width: 6, height: 6, border: C, offset: 0 } } }), Q.viewport = function (c, d, e, f, g, h, i) { function j(a, b, c, e, f, g, h, i, j) { var k = d[f], s = u[a], t = v[a], w = c === P, x = s === f ? j : s === g ? -j : -j / 2, y = t === f ? i : t === g ? -i : -i / 2, z = q[f] + r[f] - (n ? 0 : m[f]), A = z - k, B = k + j - (h === H ? o : p) - z, C = x - (u.precedance === a || s === u[b] ? y : 0) - (t === N ? i / 2 : 0); return w ? (C = (s === f ? 1 : -1) * x, d[f] += A > 0 ? A : B > 0 ? -B : 0, d[f] = Math.max(-m[f] + r[f], k - C, Math.min(Math.max(-m[f] + r[f] + (h === H ? o : p), k + C), d[f], "center" === s ? k - x : 1e9))) : (e *= c === O ? 2 : 0, A > 0 && (s !== f || B > 0) ? (d[f] -= C + e, l.invert(a, f)) : B > 0 && (s !== g || A > 0) && (d[f] -= (s === N ? -C : C) + e, l.invert(a, g)), d[f] < q[f] && -d[f] > B && (d[f] = k, l = u.clone())), d[f] - k } var k, l, m, n, o, p, q, r, s = e.target, t = c.elements.tooltip, u = e.my, v = e.at, w = e.adjust, x = w.method.split(" "), y = x[0], z = x[1] || x[0], A = e.viewport, B = e.container, C = { left: 0, top: 0 }; return A.jquery && s[0] !== a && s[0] !== b.body && "none" !== w.method ? (m = B.offset() || C, n = "static" === B.css("position"), k = "fixed" === t.css("position"), o = A[0] === a ? A.width() : A.outerWidth(D), p = A[0] === a ? A.height() : A.outerHeight(D), q = { left: k ? 0 : A.scrollLeft(), top: k ? 0 : A.scrollTop() }, r = A.offset() || C, "shift" === y && "shift" === z || (l = u.clone()), C = { left: "none" !== y ? j(F, G, y, w.x, K, M, H, f, h) : 0, top: "none" !== z ? j(G, F, z, w.y, J, L, I, g, i) : 0, my: l }) : C }, Q.polys = { polygon: function (a, b) { var c, d, e, f = { width: 0, height: 0, position: { top: 1e10, right: 0, bottom: 0, left: 1e10 }, adjustable: D }, g = 0, h = [], i = 1, j = 1, k = 0, l = 0; for (g = a.length; g--;) c = [parseInt(a[--g], 10), parseInt(a[g + 1], 10)], c[0] > f.position.right && (f.position.right = c[0]), c[0] < f.position.left && (f.position.left = c[0]), c[1] > f.position.bottom && (f.position.bottom = c[1]), c[1] < f.position.top && (f.position.top = c[1]), h.push(c); if (d = f.width = Math.abs(f.position.right - f.position.left), e = f.height = Math.abs(f.position.bottom - f.position.top), "c" === b.abbrev()) f.position = { left: f.position.left + f.width / 2, top: f.position.top + f.height / 2 }; else { for (; d > 0 && e > 0 && i > 0 && j > 0;) for (d = Math.floor(d / 2), e = Math.floor(e / 2), b.x === K ? i = d : b.x === M ? i = f.width - d : i += Math.floor(d / 2), b.y === J ? j = e : b.y === L ? j = f.height - e : j += Math.floor(e / 2), g = h.length; g-- && !(h.length < 2) ;) k = h[g][0] - f.position.left, l = h[g][1] - f.position.top, (b.x === K && k >= i || b.x === M && i >= k || b.x === N && (i > k || k > f.width - i) || b.y === J && l >= j || b.y === L && j >= l || b.y === N && (j > l || l > f.height - j)) && h.splice(g, 1); f.position = { left: h[0][0], top: h[0][1] } } return f }, rect: function (a, b, c, d) { return { width: Math.abs(c - a), height: Math.abs(d - b), position: { left: Math.min(a, c), top: Math.min(b, d) } } }, _angles: { tc: 1.5, tr: 7 / 4, tl: 5 / 4, bc: .5, br: .25, bl: .75, rc: 2, lc: 1, c: 0 }, ellipse: function (a, b, c, d, e) { var f = Q.polys._angles[e.abbrev()], g = 0 === f ? 0 : c * Math.cos(f * Math.PI), h = d * Math.sin(f * Math.PI); return { width: 2 * c - Math.abs(g), height: 2 * d - Math.abs(h), position: { left: a + g, top: b + h }, adjustable: D } }, circle: function (a, b, c, d) { return Q.polys.ellipse(a, b, c, c, d) } }, Q.imagemap = function (a, b, c) { b.jquery || (b = d(b)); var e, f, g, h, i, j = (b.attr("shape") || "rect").toLowerCase().replace("poly", "polygon"), k = d('img[usemap="#' + b.parent("map").attr("name") + '"]'), l = d.trim(b.attr("coords")), m = l.replace(/,$/, "").split(","); if (!k.length) return D; if ("polygon" === j) h = Q.polys.polygon(m, c); else { if (!Q.polys[j]) return D; for (g = -1, i = m.length, f = []; ++g < i;) f.push(parseInt(m[g], 10)); h = Q.polys[j].apply(this, f.concat(c)) } return e = k.offset(), e.left += Math.ceil((k.outerWidth(D) - k.width()) / 2), e.top += Math.ceil((k.outerHeight(D) - k.height()) / 2), h.position.left += e.left, h.position.top += e.top, h }, Q.svg = function (a, c, e) { for (var f, g, h, i, j, k, l, m, n, o = c[0], p = d(o.ownerSVGElement), q = o.ownerDocument, r = (parseInt(c.css("stroke-width"), 10) || 0) / 2; !o.getBBox;) o = o.parentNode; if (!o.getBBox || !o.parentNode) return D; switch (o.nodeName) { case "ellipse": case "circle": m = Q.polys.ellipse(o.cx.baseVal.value, o.cy.baseVal.value, (o.rx || o.r).baseVal.value + r, (o.ry || o.r).baseVal.value + r, e); break; case "line": case "polygon": case "polyline": for (l = o.points || [{ x: o.x1.baseVal.value, y: o.y1.baseVal.value }, { x: o.x2.baseVal.value, y: o.y2.baseVal.value }], m = [], k = -1, i = l.numberOfItems || l.length; ++k < i;) j = l.getItem ? l.getItem(k) : l[k], m.push.apply(m, [j.x, j.y]); m = Q.polys.polygon(m, e); break; default: m = o.getBBox(), m = { width: m.width, height: m.height, position: { left: m.x, top: m.y } } } return n = m.position, p = p[0], p.createSVGPoint && (g = o.getScreenCTM(), l = p.createSVGPoint(), l.x = n.left, l.y = n.top, h = l.matrixTransform(g), n.left = h.x, n.top = h.y), q !== b && "mouse" !== a.position.target && (f = d((q.defaultView || q.parentWindow).frameElement).offset(), f && (n.left += f.left, n.top += f.top)), q = d(q), n.left += q.scrollLeft(), n.top += q.scrollTop(), m }; var va, wa, xa = "qtip-modal", ya = "." + xa; wa = function () { function a(a) { if (d.expr[":"].focusable) return d.expr[":"].focusable; var b, c, e, f = !isNaN(d.attr(a, "tabindex")), g = a.nodeName && a.nodeName.toLowerCase(); return "area" === g ? (b = a.parentNode, c = b.name, a.href && c && "map" === b.nodeName.toLowerCase() ? (e = d("img[usemap=#" + c + "]")[0], !!e && e.is(":visible")) : !1) : /input|select|textarea|button|object/.test(g) ? !a.disabled : "a" === g ? a.href || f : f } function c(a) { j.length < 1 && a.length ? a.not("body").blur() : j.first().focus() } function e(a) { if (h.is(":visible")) { var b, e = d(a.target), g = f.tooltip, i = e.closest(V); b = i.length < 1 ? D : parseInt(i[0].style.zIndex, 10) > parseInt(g[0].style.zIndex, 10), b || e.closest(V)[0] === g[0] || c(e) } } var f, g, h, i = this, j = {}; d.extend(i, { init: function () { return h = i.elem = d("<div />", { id: "qtip-overlay", html: "<div></div>", mousedown: function () { return D } }).hide(), d(b.body).bind("focusin" + ya, e), d(b).bind("keydown" + ya, function (a) { f && f.options.show.modal.escape && 27 === a.keyCode && f.hide(a) }), h.bind("click" + ya, function (a) { f && f.options.show.modal.blur && f.hide(a) }), i }, update: function (b) { f = b, j = b.options.show.modal.stealfocus !== D ? b.tooltip.find("*").filter(function () { return a(this) }) : [] }, toggle: function (a, e, j) { var k = a.tooltip, l = a.options.show.modal, m = l.effect, n = e ? "show" : "hide", o = h.is(":visible"), p = d(ya).filter(":visible:not(:animated)").not(k); return i.update(a), e && l.stealfocus !== D && c(d(":focus")), h.toggleClass("blurs", l.blur), e && h.appendTo(b.body), h.is(":animated") && o === e && g !== D || !e && p.length ? i : (h.stop(C, D), d.isFunction(m) ? m.call(h, e) : m === D ? h[n]() : h.fadeTo(parseInt(j, 10) || 90, e ? 1 : 0, function () { e || h.hide() }), e || h.queue(function (a) { h.css({ left: "", top: "" }), d(ya).length || h.detach(), a() }), g = e, f.destroyed && (f = E), i) } }), i.init() }, wa = new wa, d.extend(w.prototype, { init: function (a) { var b = a.tooltip; return this.options.on ? (a.elements.overlay = wa.elem, b.addClass(xa).css("z-index", x.modal_zindex + d(ya).length), a._bind(b, ["tooltipshow", "tooltiphide"], function (a, c, e) { var f = a.originalEvent; if (a.target === b[0]) if (f && "tooltiphide" === a.type && /mouse(leave|enter)/.test(f.type) && d(f.relatedTarget).closest(wa.elem[0]).length) try { a.preventDefault() } catch (g) { } else (!f || f && "tooltipsolo" !== f.type) && this.toggle(a, "tooltipshow" === a.type, e) }, this._ns, this), a._bind(b, "tooltipfocus", function (a, c) { if (!a.isDefaultPrevented() && a.target === b[0]) { var e = d(ya), f = x.modal_zindex + e.length, g = parseInt(b[0].style.zIndex, 10); wa.elem[0].style.zIndex = f - 1, e.each(function () { this.style.zIndex > g && (this.style.zIndex -= 1) }), e.filter("." + Z).qtip("blur", a.originalEvent), b.addClass(Z)[0].style.zIndex = f, wa.update(c); try { a.preventDefault() } catch (h) { } } }, this._ns, this), void a._bind(b, "tooltiphide", function (a) { a.target === b[0] && d(ya).filter(":visible").not(b).last().qtip("focus", a) }, this._ns, this)) : this }, toggle: function (a, b, c) { return a && a.isDefaultPrevented() ? this : void wa.toggle(this.qtip, !!b, c) }, destroy: function () { this.qtip.tooltip.removeClass(xa), this.qtip._unbind(this.qtip.tooltip, this._ns), wa.toggle(this.qtip, D), delete this.qtip.elements.overlay } }), va = Q.modal = function (a) { return new w(a, a.options.show.modal) }, va.sanitize = function (a) { a.show && ("object" != typeof a.show.modal ? a.show.modal = { on: !!a.show.modal } : "undefined" == typeof a.show.modal.on && (a.show.modal.on = C)) }, x.modal_zindex = x.zindex - 200, va.initialize = "render", A.modal = { "^show.modal.(on|blur)$": function () { this.destroy(), this.init(), this.qtip.elems.overlay.toggle(this.qtip.tooltip[0].offsetWidth > 0) } }, d.extend(C, x.defaults, { show: { modal: { on: D, effect: C, blur: C, stealfocus: C, escape: C } } })
	})
}(window, document);
//# sourceMappingURL=jquery.qtip.min.map;
/*! jQuery Validation Plugin - v1.15.0 - 2/24/2016
 * http://jqueryvalidation.org/
 * Copyright (c) 2016 JÃ¶rn Zaefferer; Licensed MIT */
!function (a) { "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof module && module.exports ? module.exports = a(require("jquery")) : a(jQuery) }(function (a) { a.extend(a.fn, { validate: function (b) { if (!this.length) return void (b && b.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing.")); var c = a.data(this[0], "validator"); return c ? c : (this.attr("novalidate", "novalidate"), c = new a.validator(b, this[0]), a.data(this[0], "validator", c), c.settings.onsubmit && (this.on("click.validate", ":submit", function (b) { c.settings.submitHandler && (c.submitButton = b.target), a(this).hasClass("cancel") && (c.cancelSubmit = !0), void 0 !== a(this).attr("formnovalidate") && (c.cancelSubmit = !0) }), this.on("submit.validate", function (b) { function d() { var d, e; return c.settings.submitHandler ? (c.submitButton && (d = a("<input type='hidden'/>").attr("name", c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)), e = c.settings.submitHandler.call(c, c.currentForm, b), c.submitButton && d.remove(), void 0 !== e ? e : !1) : !0 } return c.settings.debug && b.preventDefault(), c.cancelSubmit ? (c.cancelSubmit = !1, d()) : c.form() ? c.pendingRequest ? (c.formSubmitted = !0, !1) : d() : (c.focusInvalid(), !1) })), c) }, valid: function () { var b, c, d; return a(this[0]).is("form") ? b = this.validate().form() : (d = [], b = !0, c = a(this[0].form).validate(), this.each(function () { b = c.element(this) && b, b || (d = d.concat(c.errorList)) }), c.errorList = d), b }, rules: function (b, c) { if (this.length) { var d, e, f, g, h, i, j = this[0]; if (b) switch (d = a.data(j.form, "validator").settings, e = d.rules, f = a.validator.staticRules(j), b) { case "add": a.extend(f, a.validator.normalizeRule(c)), delete f.messages, e[j.name] = f, c.messages && (d.messages[j.name] = a.extend(d.messages[j.name], c.messages)); break; case "remove": return c ? (i = {}, a.each(c.split(/\s/), function (b, c) { i[c] = f[c], delete f[c], "required" === c && a(j).removeAttr("aria-required") }), i) : (delete e[j.name], f) } return g = a.validator.normalizeRules(a.extend({}, a.validator.classRules(j), a.validator.attributeRules(j), a.validator.dataRules(j), a.validator.staticRules(j)), j), g.required && (h = g.required, delete g.required, g = a.extend({ required: h }, g), a(j).attr("aria-required", "true")), g.remote && (h = g.remote, delete g.remote, g = a.extend(g, { remote: h })), g } } }), a.extend(a.expr[":"], { blank: function (b) { return !a.trim("" + a(b).val()) }, filled: function (b) { var c = a(b).val(); return null !== c && !!a.trim("" + c) }, unchecked: function (b) { return !a(b).prop("checked") } }), a.validator = function (b, c) { this.settings = a.extend(!0, {}, a.validator.defaults, b), this.currentForm = c, this.init() }, a.validator.format = function (b, c) { return 1 === arguments.length ? function () { var c = a.makeArray(arguments); return c.unshift(b), a.validator.format.apply(this, c) } : void 0 === c ? b : (arguments.length > 2 && c.constructor !== Array && (c = a.makeArray(arguments).slice(1)), c.constructor !== Array && (c = [c]), a.each(c, function (a, c) { b = b.replace(new RegExp("\\{" + a + "\\}", "g"), function () { return c }) }), b) }, a.extend(a.validator, { defaults: { messages: {}, groups: {}, rules: {}, errorClass: "error", pendingClass: "pending", validClass: "valid", errorElement: "label", focusCleanup: !1, focusInvalid: !0, errorContainer: a([]), errorLabelContainer: a([]), onsubmit: !0, ignore: ":hidden", ignoreTitle: !1, onfocusin: function (a) { this.lastActive = a, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, a, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(a))) }, onfocusout: function (a) { this.checkable(a) || !(a.name in this.submitted) && this.optional(a) || this.element(a) }, onkeyup: function (b, c) { var d = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225]; 9 === c.which && "" === this.elementValue(b) || -1 !== a.inArray(c.keyCode, d) || (b.name in this.submitted || b.name in this.invalid) && this.element(b) }, onclick: function (a) { a.name in this.submitted ? this.element(a) : a.parentNode.name in this.submitted && this.element(a.parentNode) }, highlight: function (b, c, d) { "radio" === b.type ? this.findByName(b.name).addClass(c).removeClass(d) : a(b).addClass(c).removeClass(d) }, unhighlight: function (b, c, d) { "radio" === b.type ? this.findByName(b.name).removeClass(c).addClass(d) : a(b).removeClass(c).addClass(d) } }, setDefaults: function (b) { a.extend(a.validator.defaults, b) }, messages: { required: "This field is required.", remote: "Please fix this field.", email: "Please enter a valid email address.", url: "Please enter a valid URL.", date: "Please enter a valid date.", dateISO: "Please enter a valid date ( ISO ).", number: "Please enter a valid number.", digits: "Please enter only digits.", equalTo: "Please enter the same value again.", maxlength: a.validator.format("Please enter no more than {0} characters."), minlength: a.validator.format("Please enter at least {0} characters."), rangelength: a.validator.format("Please enter a value between {0} and {1} characters long."), range: a.validator.format("Please enter a value between {0} and {1}."), max: a.validator.format("Please enter a value less than or equal to {0}."), min: a.validator.format("Please enter a value greater than or equal to {0}."), step: a.validator.format("Please enter a multiple of {0}.") }, autoCreateRanges: !1, prototype: { init: function () { function b(b) { var c = a.data(this.form, "validator"), d = "on" + b.type.replace(/^validate/, ""), e = c.settings; e[d] && !a(this).is(e.ignore) && e[d].call(c, this, b) } this.labelContainer = a(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || a(this.currentForm), this.containers = a(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset(); var c, d = this.groups = {}; a.each(this.settings.groups, function (b, c) { "string" == typeof c && (c = c.split(/\s/)), a.each(c, function (a, c) { d[c] = b }) }), c = this.settings.rules, a.each(c, function (b, d) { c[b] = a.validator.normalizeRule(d) }), a(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable]", b).on("click.validate", "select, option, [type='radio'], [type='checkbox']", b), this.settings.invalidHandler && a(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler), a(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required", "true") }, form: function () { return this.checkForm(), a.extend(this.submitted, this.errorMap), this.invalid = a.extend({}, this.errorMap), this.valid() || a(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid() }, checkForm: function () { this.prepareForm(); for (var a = 0, b = this.currentElements = this.elements() ; b[a]; a++) this.check(b[a]); return this.valid() }, element: function (b) { var c, d, e = this.clean(b), f = this.validationTargetFor(e), g = this, h = !0; return void 0 === f ? delete this.invalid[e.name] : (this.prepareElement(f), this.currentElements = a(f), d = this.groups[f.name], d && a.each(this.groups, function (a, b) { b === d && a !== f.name && (e = g.validationTargetFor(g.clean(g.findByName(a))), e && e.name in g.invalid && (g.currentElements.push(e), h = h && g.check(e))) }), c = this.check(f) !== !1, h = h && c, c ? this.invalid[f.name] = !1 : this.invalid[f.name] = !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), a(b).attr("aria-invalid", !c)), h }, showErrors: function (b) { if (b) { var c = this; a.extend(this.errorMap, b), this.errorList = a.map(this.errorMap, function (a, b) { return { message: a, element: c.findByName(b)[0] } }), this.successList = a.grep(this.successList, function (a) { return !(a.name in b) }) } this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors() }, resetForm: function () { a.fn.resetForm && a(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors(); var b = this.elements().removeData("previousValue").removeAttr("aria-invalid"); this.resetElements(b) }, resetElements: function (a) { var b; if (this.settings.unhighlight) for (b = 0; a[b]; b++) this.settings.unhighlight.call(this, a[b], this.settings.errorClass, ""), this.findByName(a[b].name).removeClass(this.settings.validClass); else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass) }, numberOfInvalids: function () { return this.objectLength(this.invalid) }, objectLength: function (a) { var b, c = 0; for (b in a) a[b] && c++; return c }, hideErrors: function () { this.hideThese(this.toHide) }, hideThese: function (a) { a.not(this.containers).text(""), this.addWrapper(a).hide() }, valid: function () { return 0 === this.size() }, size: function () { return this.errorList.length }, focusInvalid: function () { if (this.settings.focusInvalid) try { a(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin") } catch (b) { } }, findLastActive: function () { var b = this.lastActive; return b && 1 === a.grep(this.errorList, function (a) { return a.element.name === b.name }).length && b }, elements: function () { var b = this, c = {}; return a(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function () { var d = this.name || a(this).attr("name"); return !d && b.settings.debug && window.console && console.error("%o has no name assigned", this), this.hasAttribute("contenteditable") && (this.form = a(this).closest("form")[0]), d in c || !b.objectLength(a(this).rules()) ? !1 : (c[d] = !0, !0) }) }, clean: function (b) { return a(b)[0] }, errors: function () { var b = this.settings.errorClass.split(" ").join("."); return a(this.settings.errorElement + "." + b, this.errorContext) }, resetInternals: function () { this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = a([]), this.toHide = a([]) }, reset: function () { this.resetInternals(), this.currentElements = a([]) }, prepareForm: function () { this.reset(), this.toHide = this.errors().add(this.containers) }, prepareElement: function (a) { this.reset(), this.toHide = this.errorsFor(a) }, elementValue: function (b) { var c, d, e = a(b), f = b.type; return "radio" === f || "checkbox" === f ? this.findByName(b.name).filter(":checked").val() : "number" === f && "undefined" != typeof b.validity ? b.validity.badInput ? "NaN" : e.val() : (c = b.hasAttribute("contenteditable") ? e.text() : e.val(), "file" === f ? "C:\\fakepath\\" === c.substr(0, 12) ? c.substr(12) : (d = c.lastIndexOf("/"), d >= 0 ? c.substr(d + 1) : (d = c.lastIndexOf("\\"), d >= 0 ? c.substr(d + 1) : c)) : "string" == typeof c ? c.replace(/\r/g, "") : c) }, check: function (b) { b = this.validationTargetFor(this.clean(b)); var c, d, e, f = a(b).rules(), g = a.map(f, function (a, b) { return b }).length, h = !1, i = this.elementValue(b); if ("function" == typeof f.normalizer) { if (i = f.normalizer.call(b, i), "string" != typeof i) throw new TypeError("The normalizer should return a string value."); delete f.normalizer } for (d in f) { e = { method: d, parameters: f[d] }; try { if (c = a.validator.methods[d].call(this, i, b, e.parameters), "dependency-mismatch" === c && 1 === g) { h = !0; continue } if (h = !1, "pending" === c) return void (this.toHide = this.toHide.not(this.errorsFor(b))); if (!c) return this.formatAndAdd(b, e), !1 } catch (j) { throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method.", j), j instanceof TypeError && (j.message += ".  Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method."), j } } if (!h) return this.objectLength(f) && this.successList.push(b), !0 }, customDataMessage: function (b, c) { return a(b).data("msg" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()) || a(b).data("msg") }, customMessage: function (a, b) { var c = this.settings.messages[a]; return c && (c.constructor === String ? c : c[b]) }, findDefined: function () { for (var a = 0; a < arguments.length; a++) if (void 0 !== arguments[a]) return arguments[a] }, defaultMessage: function (b, c) { var d = this.findDefined(this.customMessage(b.name, c.method), this.customDataMessage(b, c.method), !this.settings.ignoreTitle && b.title || void 0, a.validator.messages[c.method], "<strong>Warning: No message defined for " + b.name + "</strong>"), e = /\$?\{(\d+)\}/g; return "function" == typeof d ? d = d.call(this, c.parameters, b) : e.test(d) && (d = a.validator.format(d.replace(e, "{$1}"), c.parameters)), d }, formatAndAdd: function (a, b) { var c = this.defaultMessage(a, b); this.errorList.push({ message: c, element: a, method: b.method }), this.errorMap[a.name] = c, this.submitted[a.name] = c }, addWrapper: function (a) { return this.settings.wrapper && (a = a.add(a.parent(this.settings.wrapper))), a }, defaultShowErrors: function () { var a, b, c; for (a = 0; this.errorList[a]; a++) c = this.errorList[a], this.settings.highlight && this.settings.highlight.call(this, c.element, this.settings.errorClass, this.settings.validClass), this.showLabel(c.element, c.message); if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success) for (a = 0; this.successList[a]; a++) this.showLabel(this.successList[a]); if (this.settings.unhighlight) for (a = 0, b = this.validElements() ; b[a]; a++) this.settings.unhighlight.call(this, b[a], this.settings.errorClass, this.settings.validClass); this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show() }, validElements: function () { return this.currentElements.not(this.invalidElements()) }, invalidElements: function () { return a(this.errorList).map(function () { return this.element }) }, showLabel: function (b, c) { var d, e, f, g, h = this.errorsFor(b), i = this.idOrName(b), j = a(b).attr("aria-describedby"); h.length ? (h.removeClass(this.settings.validClass).addClass(this.settings.errorClass), h.html(c)) : (h = a("<" + this.settings.errorElement + ">").attr("id", i + "-error").addClass(this.settings.errorClass).html(c || ""), d = h, this.settings.wrapper && (d = h.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(d) : this.settings.errorPlacement ? this.settings.errorPlacement(d, a(b)) : d.insertAfter(b), h.is("label") ? h.attr("for", i) : 0 === h.parents("label[for='" + this.escapeCssMeta(i) + "']").length && (f = h.attr("id"), j ? j.match(new RegExp("\\b" + this.escapeCssMeta(f) + "\\b")) || (j += " " + f) : j = f, a(b).attr("aria-describedby", j), e = this.groups[b.name], e && (g = this, a.each(g.groups, function (b, c) { c === e && a("[name='" + g.escapeCssMeta(b) + "']", g.currentForm).attr("aria-describedby", h.attr("id")) })))), !c && this.settings.success && (h.text(""), "string" == typeof this.settings.success ? h.addClass(this.settings.success) : this.settings.success(h, b)), this.toShow = this.toShow.add(h) }, errorsFor: function (b) { var c = this.escapeCssMeta(this.idOrName(b)), d = a(b).attr("aria-describedby"), e = "label[for='" + c + "'], label[for='" + c + "'] *"; return d && (e = e + ", #" + this.escapeCssMeta(d).replace(/\s+/g, ", #")), this.errors().filter(e) }, escapeCssMeta: function (a) { return a.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1") }, idOrName: function (a) { return this.groups[a.name] || (this.checkable(a) ? a.name : a.id || a.name) }, validationTargetFor: function (b) { return this.checkable(b) && (b = this.findByName(b.name)), a(b).not(this.settings.ignore)[0] }, checkable: function (a) { return /radio|checkbox/i.test(a.type) }, findByName: function (b) { return a(this.currentForm).find("[name='" + this.escapeCssMeta(b) + "']") }, getLength: function (b, c) { switch (c.nodeName.toLowerCase()) { case "select": return a("option:selected", c).length; case "input": if (this.checkable(c)) return this.findByName(c.name).filter(":checked").length } return b.length }, depend: function (a, b) { return this.dependTypes[typeof a] ? this.dependTypes[typeof a](a, b) : !0 }, dependTypes: { "boolean": function (a) { return a }, string: function (b, c) { return !!a(b, c.form).length }, "function": function (a, b) { return a(b) } }, optional: function (b) { var c = this.elementValue(b); return !a.validator.methods.required.call(this, c, b) && "dependency-mismatch" }, startRequest: function (b) { this.pending[b.name] || (this.pendingRequest++, a(b).addClass(this.settings.pendingClass), this.pending[b.name] = !0) }, stopRequest: function (b, c) { this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[b.name], a(b).removeClass(this.settings.pendingClass), c && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (a(this.currentForm).submit(), this.formSubmitted = !1) : !c && 0 === this.pendingRequest && this.formSubmitted && (a(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1) }, previousValue: function (b, c) { return a.data(b, "previousValue") || a.data(b, "previousValue", { old: null, valid: !0, message: this.defaultMessage(b, { method: c }) }) }, destroy: function () { this.resetForm(), a(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur") } }, classRuleSettings: { required: { required: !0 }, email: { email: !0 }, url: { url: !0 }, date: { date: !0 }, dateISO: { dateISO: !0 }, number: { number: !0 }, digits: { digits: !0 }, creditcard: { creditcard: !0 } }, addClassRules: function (b, c) { b.constructor === String ? this.classRuleSettings[b] = c : a.extend(this.classRuleSettings, b) }, classRules: function (b) { var c = {}, d = a(b).attr("class"); return d && a.each(d.split(" "), function () { this in a.validator.classRuleSettings && a.extend(c, a.validator.classRuleSettings[this]) }), c }, normalizeAttributeRule: function (a, b, c, d) { /min|max|step/.test(c) && (null === b || /number|range|text/.test(b)) && (d = Number(d), isNaN(d) && (d = void 0)), d || 0 === d ? a[c] = d : b === c && "range" !== b && (a[c] = !0) }, attributeRules: function (b) { var c, d, e = {}, f = a(b), g = b.getAttribute("type"); for (c in a.validator.methods) "required" === c ? (d = b.getAttribute(c), "" === d && (d = !0), d = !!d) : d = f.attr(c), this.normalizeAttributeRule(e, g, c, d); return e.maxlength && /-1|2147483647|524288/.test(e.maxlength) && delete e.maxlength, e }, dataRules: function (b) { var c, d, e = {}, f = a(b), g = b.getAttribute("type"); for (c in a.validator.methods) d = f.data("rule" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()), this.normalizeAttributeRule(e, g, c, d); return e }, staticRules: function (b) { var c = {}, d = a.data(b.form, "validator"); return d.settings.rules && (c = a.validator.normalizeRule(d.settings.rules[b.name]) || {}), c }, normalizeRules: function (b, c) { return a.each(b, function (d, e) { if (e === !1) return void delete b[d]; if (e.param || e.depends) { var f = !0; switch (typeof e.depends) { case "string": f = !!a(e.depends, c.form).length; break; case "function": f = e.depends.call(c, c) } f ? b[d] = void 0 !== e.param ? e.param : !0 : (a.data(c.form, "validator").resetElements(a(c)), delete b[d]) } }), a.each(b, function (d, e) { b[d] = a.isFunction(e) && "normalizer" !== d ? e(c) : e }), a.each(["minlength", "maxlength"], function () { b[this] && (b[this] = Number(b[this])) }), a.each(["rangelength", "range"], function () { var c; b[this] && (a.isArray(b[this]) ? b[this] = [Number(b[this][0]), Number(b[this][1])] : "string" == typeof b[this] && (c = b[this].replace(/[\[\]]/g, "").split(/[\s,]+/), b[this] = [Number(c[0]), Number(c[1])])) }), a.validator.autoCreateRanges && (null != b.min && null != b.max && (b.range = [b.min, b.max], delete b.min, delete b.max), null != b.minlength && null != b.maxlength && (b.rangelength = [b.minlength, b.maxlength], delete b.minlength, delete b.maxlength)), b }, normalizeRule: function (b) { if ("string" == typeof b) { var c = {}; a.each(b.split(/\s/), function () { c[this] = !0 }), b = c } return b }, addMethod: function (b, c, d) { a.validator.methods[b] = c, a.validator.messages[b] = void 0 !== d ? d : a.validator.messages[b], c.length < 3 && a.validator.addClassRules(b, a.validator.normalizeRule(b)) }, methods: { required: function (b, c, d) { if (!this.depend(d, c)) return "dependency-mismatch"; if ("select" === c.nodeName.toLowerCase()) { var e = a(c).val(); return e && e.length > 0 } return this.checkable(c) ? this.getLength(b, c) > 0 : b.length > 0 }, email: function (a, b) { return this.optional(b) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a) }, url: function (a, b) { return this.optional(b) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(a) }, date: function (a, b) { return this.optional(b) || !/Invalid|NaN/.test(new Date(a).toString()) }, dateISO: function (a, b) { return this.optional(b) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a) }, number: function (a, b) { return this.optional(b) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a) }, digits: function (a, b) { return this.optional(b) || /^\d+$/.test(a) }, minlength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || e >= d }, maxlength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || d >= e }, rangelength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || e >= d[0] && e <= d[1] }, min: function (a, b, c) { return this.optional(b) || a >= c }, max: function (a, b, c) { return this.optional(b) || c >= a }, range: function (a, b, c) { return this.optional(b) || a >= c[0] && a <= c[1] }, step: function (b, c, d) { var e = a(c).attr("type"), f = "Step attribute on input type " + e + " is not supported.", g = ["text", "number", "range"], h = new RegExp("\\b" + e + "\\b"), i = e && !h.test(g.join()); if (i) throw new Error(f); return this.optional(c) || b % d === 0 }, equalTo: function (b, c, d) { var e = a(d); return this.settings.onfocusout && e.not(".validate-equalTo-blur").length && e.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function () { a(c).valid() }), b === e.val() }, remote: function (b, c, d, e) { if (this.optional(c)) return "dependency-mismatch"; e = "string" == typeof e && e || "remote"; var f, g, h, i = this.previousValue(c, e); return this.settings.messages[c.name] || (this.settings.messages[c.name] = {}), i.originalMessage = i.originalMessage || this.settings.messages[c.name][e], this.settings.messages[c.name][e] = i.message, d = "string" == typeof d && { url: d } || d, h = a.param(a.extend({ data: b }, d.data)), i.old === h ? i.valid : (i.old = h, f = this, this.startRequest(c), g = {}, g[c.name] = b, a.ajax(a.extend(!0, { mode: "abort", port: "validate" + c.name, dataType: "json", data: g, context: f.currentForm, success: function (a) { var d, g, h, j = a === !0 || "true" === a; f.settings.messages[c.name][e] = i.originalMessage, j ? (h = f.formSubmitted, f.resetInternals(), f.toHide = f.errorsFor(c), f.formSubmitted = h, f.successList.push(c), f.invalid[c.name] = !1, f.showErrors()) : (d = {}, g = a || f.defaultMessage(c, { method: e, parameters: b }), d[c.name] = i.message = g, f.invalid[c.name] = !0, f.showErrors(d)), i.valid = j, f.stopRequest(c, j) } }, d)), "pending") } } }); var b, c = {}; a.ajaxPrefilter ? a.ajaxPrefilter(function (a, b, d) { var e = a.port; "abort" === a.mode && (c[e] && c[e].abort(), c[e] = d) }) : (b = a.ajax, a.ajax = function (d) { var e = ("mode" in d ? d : a.ajaxSettings).mode, f = ("port" in d ? d : a.ajaxSettings).port; return "abort" === e ? (c[f] && c[f].abort(), c[f] = b.apply(this, arguments), c[f]) : b.apply(this, arguments) }) });

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: CS (Czech; čeština, český jazyk)
 */
(function ($) {
	$.extend($.validator.messages, {
		required: "Tento údaj je povinný.",
		remote: "Prosím, opravte tento údaj.",
		email: "Prosím, zadejte platný e-mail.",
		url: "Prosím, zadejte platné URL.",
		date: "Prosím, zadejte platné datum.",
		dateISO: "Prosím, zadejte platné datum (ISO).",
		number: "Prosím, zadejte číslo.",
		digits: "Prosím, zadávejte pouze číslice.",
		creditcard: "Prosím, zadejte číslo kreditní karty.",
		equalTo: "Prosím, zadejte znovu stejnou hodnotu.",
		accept: "Prosím, zadejte soubor se správnou příponou.",
		maxlength: $.validator.format("Prosím, zadejte nejvíce {0} znaků."),
		minlength: $.validator.format("Prosím, zadejte nejméně {0} znaků."),
		rangelength: $.validator.format("Prosím, zadejte od {0} do {1} znaků."),
		range: $.validator.format("Prosím, zadejte hodnotu od {0} do {1}."),
		max: $.validator.format("Prosím, zadejte hodnotu menší nebo rovnu {0}."),
		min: $.validator.format("Prosím, zadejte hodnotu větší nebo rovnu {0}.")
	});
}(jQuery));;
/*
 * =============================================================
 * Plugin pro vypis zprav by Jarda Sarzik
 * =============================================================
 */

(function ($) {

	// urcuje jakym zpusobem bude hlaska zobrazena
	var _displayMethodEnum = {
		STATIC_BAR: 'staticBar',
		FIXED_BAR: 'fixedBar',
		POPUP: 'popUp'
	};

	// urcuje jakym zpusobem budou jednotlive typy hlasek zobrazeny - bud oddelene dle typu a nebo vsechny v jednom divu
	var _displayMessagessMethodEnum = {
		ALL: 'all',
		SEPARATE: 'separate'
	};

	// enum pro css tridu dle interlinku
	var _typeCssEnum = {
		NONE: 0,
		MESSAGE: 1,
		ERROR: 2,
		IMPORTANT_MESSAGE: 3,
		INFO: 4
	};

	// objekt cMessage dle interlinku
	function _objcMessage() {
		this.getCssClass = function () {
			switch (this.type) {
				case _typeCssEnum.ERROR:
					return "alert";
				case _typeCssEnum.MESSAGE:
					return "info";
				case _typeCssEnum.IMPORTANT_MESSAGE:
					return "important_message";
				case _typeCssEnum.INFO:
					return "info";
				default:
					return "";
			}
		};

		this.MsgInput = "";
		this.Msg = "";
		this.MsgDictionery = "";
		this.MsgDefault = "";
		this.type = _typeCssEnum.NONE;
		this.CssClass = "";
	};

	// vrati hodnotu enumu pro messageClass dle stringu
	function _getTypeCssEnum(messageClass) {

		if ('undefined' === typeof messageClass) {
			return _typeCssEnum.NONE;
		}

		switch (messageClass) {
			case 'info':
				return _typeCssEnum.MESSAGE;
			case 'alert':
				return _typeCssEnum.ERROR;
			case 'important_message':
				return _typeCssEnum.IMPORTANT_MESSAGE;
			default:
				return _typeCssEnum.NONE;
		}
	}

	// vytvoreni instance objektu cMessage
	function _createMessage(message, msgInput, msgDictionary, msgDefault, type) {

		var cMessage = new _objcMessage();
		cMessage.Msg = message;
		cMessage.MsgInput = msgInput;
		cMessage.MsgDefault = msgDefault;
		cMessage.type = type;
		cMessage.CssClass = cMessage.getCssClass();

		return cMessage;
	};


	// sablona pro skupinu hlasek
	function _tplMsgGroupItem(messageClass, cMessages) {

		if ('undefined' === typeof messageClass) {
			messageClass = ''
		}

		if ('undefined' === typeof cMessages) {
			cMessages = '';
		}

		if ('object' === typeof cMessages) {
			cMessages = cMessages.join(' ');
		}

		return '<div class="msg-item ' + messageClass + '"><div class="box-in container">' + cMessages + '</div></div>';
	}

	// vrati hlasky rozdelene dle typu
	function _getSeparateMessagess(cMessages) {

		if ('undefined' === typeof cMessages && 'object' !== cMessages && 0 === cMessages.length) {
			return '';
		}

		var messagessWrap = '';

		var msgs_none = [],
			msgs_message = [],
			msgs_error = [],
			msgs_important = [],
			msgs_info = [];

		var opts = $.displayMessages.opts;

		for (var i = 0; i < cMessages.length; i++) {

			var cMessage = cMessages[i];

			if (cMessage.Msg.length === 0) {
				continue;
			}

			cMessage.Msg = '<div class="c-message">' + cMessage.Msg + '</div>';

			switch (cMessage.type) {
				case _typeCssEnum.ERROR:
					msgs_error.push(cMessage.Msg);
					break;
				case _typeCssEnum.MESSAGE:
					msgs_message.push(cMessage.Msg);
					break;
				case _typeCssEnum.IMPORTANT_MESSAGE:
					msgs_important.push(cMessage.Msg);
					break;
				case _typeCssEnum.INFO:
					msgs_info.push(cMessage.Msg);
					break;
				default:
					msgs_none.push(cMessage.Msg);
			}
		}

		if (msgs_error.length > 0) {
			messagessWrap += _tplMsgGroupItem(opts.importantClass ? opts.messageClass : 'alert', msgs_error);
		}

		if (msgs_message.length > 0) {
			messagessWrap += _tplMsgGroupItem(opts.importantClass ? opts.messageClass : 'info', msgs_message);
		}

		if (msgs_info.length > 0) {
			messagessWrap += _tplMsgGroupItem(opts.importantClass ? opts.messageClass : 'info', msgs_info);
		}

		if (msgs_important.length > 0) {
			messagessWrap += _tplMsgGroupItem(opts.importantClass ? opts.messageClass : 'important_message', msgs_important);
		}

		if (msgs_none.length > 0) {
			messagessWrap += _tplMsgGroupItem(opts.importantClass ? opts.messageClass : '', msgs_none);
		}

		return messagessWrap;
	}

	// vrati vsechny hlasky bez rozdeleni dle typu
	function _getAllMessagess(cMessages) {

		if ('undefined' === typeof cMessages && 'object' !== cMessages && 0 === cMessages.length) {
			return '';
		}

		var messagessWrap = '';

		var msgs = [];

		for (var i = 0; i < cMessages.length; i++) {

			var cMessage = cMessages[i];

			if (cMessage.Msg.length === 0) {
				continue;
			}

			cMessage.Msg = '<div class="c-message ' + cMessage.CssClass + '">' + cMessage.Msg + '</div>';

			msgs.push(cMessage.Msg);
		}

		messagessWrap += _tplMsgGroupItem('', msgs);

		return messagessWrap;
	}

	var dMsg = $.displayMessages = function (options) {
		dMsg.opts = {};
		dMsg.opts = $.extend(true, {}, dMsg.defaults, options);
		dMsg.init.apply(this, arguments);
	}

	$.extend(dMsg, {
		defaults: {
			messages: [], // pole cMessage nebo string
			messageClass: '', // css trida pro hlasku ktera neni objektem cMessage [alert, info, important_message, nebo vlastni ale s kombinaci importantClass] 
			importantClass: false, // vzdy pouzit zvoleny messageClass
			boxClass: '', // css trida pro obalujici box
			mode: _displayMethodEnum.FIXED_BAR, // urcuje jakym zpusobem bude hlaska zobrazena ['staticBar', 'fixedBar', 'popUp']
			showMessagesMode: _displayMessagessMethodEnum.SEPARATE // urcuje jakym zpusobem budou jednotlive typy hlasek zobrazeny [all (vsechny dohromady v jednom boxu), separate(kazda ve svem boxu)]
		},

		opts: {},

		tpl: {
			fixedAlertBar: $('<div class="fixed-alert-bar"><div class="msg-list"></div></div>'),
			btnClose: $('<button type="button" class="btn-close"><i class="icon-close"></i><span class="label">' + dictionary.GetValue('msg_close') + '</span></button>')
		},

		init: function () {
			var _messagessWrap = '',
				_opts = dMsg.opts;

			// pokud je v messages pouze string a ne object tak jej vyrobim
			if (typeof _opts.messages === 'string') {
				var cMessage = _createMessage(_opts.messages, '', '', '', _getTypeCssEnum(_opts.messageClass));

				// pokud se ma pouzit jakakoliv libovolna vlastni css trida pro hlasku tak ji nastav
				if (_opts.importantClass) {
					cMessage.CssClass = _opts.messageClass;
				}

				_opts.messages = [];
				_opts.messages.push(cMessage);
			}

			// pokud maji byt hlasky rozdeleny dle typu
			if (_opts.showMessagesMode == _displayMessagessMethodEnum.SEPARATE) {
				_messagessWrap += _getSeparateMessagess(_opts.messages);
			} else {
				_messagessWrap += _getAllMessagess(_opts.messages);
			}

			switch (_opts.mode) {
				case _displayMethodEnum.STATIC_BAR:
					// TODO doresit vypis hlasek staticky
					break;
				case _displayMethodEnum.POPUP:
					dMsg._showPopUp(_messagessWrap, _opts.boxClass);
					break;
				default:
					dMsg._showFixedBar(_messagessWrap, _opts.boxClass);

			}
		},

		close: function () {
			if ($.isEmptyObject(dMsg.opts)) {
				dMsg._setOptions(dMsg.opts);
			}

			if (dMsg.opts.mode == 'popUp') {
				$.fancybox.close(true);
			} else {
				$('.fixed-alert-bar').remove();
			}
		},

		_showFixedBar: function (content, boxClass) {

			var $fixedAlertBar = dMsg.tpl.fixedAlertBar;
			var fixedAlertBar_y = 0;

			$('body').append($fixedAlertBar);

			$fixedAlertBar.css({ 'width': '100%', 'position': 'fixed', 'top': '-100%', 'left': '0', 'z-index': '99999' });

			$fixedAlertBar.addClass(boxClass);
			$fixedAlertBar.find('.msg-list').html(content);

			//$fixedAlertBar.delay(1000).animate({ top: fixedAlertBar_y + 'px', opacity: '1' }, { duration: 300, queue: true });

			// binding tlacitka pro zavreni zpravy
			dMsg._closeBtn($fixedAlertBar);


			// pokud je zobrazen horni fixni bar - specialita pro ed
			dMsg._controlTopFixedBar($fixedAlertBar);

			$(window).scroll(function () {
				dMsg._controlTopFixedBar($fixedAlertBar);
			});

		},

		_showPopUp: function (content, boxClass) {
			fancyPopup({ content: content, wrapCSS: 'popUp-alert-box popUp_' + boxClass });
		},

		_closeBtn: function ($box) {

			var $btnClose = dMsg.tpl.btnClose;

			$box.find('.msg-item .box-in').append($btnClose);
			$box.find('.btn-close').bind('click', function () {
				$(this).closest('.msg-item').remove();

				if ($box.find('.msg-item').length == 0) {
					$box.remove();
				}
			});
		},

		// specialita pro ed
		_controlTopFixedBar: function ($fixedAlertBar) {

			var $topFixedBar = $('.header-fixed-bar');

			if (0 == $topFixedBar.length || $.fancybox.isOpen) {
				if ($fixedAlertBar.position().top != 0) {
					$fixedAlertBar.animate({ top: '0px', opacity: '1' }, { duration: 300, queue: true });
				}
			} else {
				var animate = setInterval(function () {
					$fixedAlertBar.css({ 'top': $topFixedBar.position().top + $topFixedBar.outerHeight(true) + 'px' });

					if ($topFixedBar.position().top == 0) {
						clearInterval(animate);
					}

				}, 100);
			}
		},

		_setOptions: function (opts) {
			dMsg.opts = $.extend(true, {}, dMsg.defaults, opts);
		},
	});

	// zobrazeni staticke hlasky ktera je v tele stranky
	function displayStaticAlertBar() {
		// zobrazeni inline serverovych hlasek

		if (0 === $('.messagess-report-list').length) {
			return;
		}

		var $messagessReportList = $('.messagess-report-list'),
			cMessagess = [];

		$messagessReportList.each(function () {

			var $me = $(this),
				messageClass = '';

			if ($me.hasClass('alert-error')) {
				messageClass = 'alert';
			} else if ($me.hasClass('alert-success')) {
				messageClass = 'info';
			} else if ($me.hasClass('alert-info')) {
				messageClass = 'info';
			}

			$me.find('ul > li').each(function () {
				var cMessage = _createMessage($(this).html(), '', '', '', _getTypeCssEnum(messageClass));
				cMessagess.push(cMessage);
			});
		});

		if (cMessagess.length === 0) {
			return;
		}

		setTimeout(function () {
			$.displayMessages({
				messages: cMessagess,
			});
		}, 500);
	}

	$(document).ready(function (e) {
		displayStaticAlertBar();
	});

	$(document).keyup(function (e) {
		if (27 == e.keyCode) {
			try {
				$.displayMessages.close();
			} catch (err) {
				console.log('err: $.displayMessages.close()');
			}
		}
	});

}(jQuery));

function displayErrorMessage(cMessagess, popup) {

	var params = {
		messages: cMessagess
	}

	if (typeof cMessagess === 'string') {
		params.messageClass = 'alert';
	}

	$.displayMessages(params);
}

function displayMessages(cMessagess, popup) {
	$.displayMessages({
		messages: cMessagess
	});
}

function displayInfoMessage(cMessagess, popup) {
	$.displayMessages({
		messages: cMessagess,
		messageClass: 'info'
	});
}

function displayDialogReport(cMessagess, container, headerText) {
	$.displayMessages({
		messages: cMessagess,
		mode: 'popUp'
	});
}

function messagesErrorOrImportant(messages) {
	var messagesNew = [];
	for (var i = 0; i < messages.length; i++) {
		if (messages[i].CssClass.toLowerCase() == 'alert' || messages[i].CssClass.toLowerCase() == 'important_message') {
			messagesNew.push(messages[i]);
		}
	}
	return messagesNew;
}

function closeDialogReport() {
	$.displayMessages.close();
	if ($().fancybox) {
		$.fancybox.close(true);
	}
	return false;
};
/*!
  hey, [be]Lazy.js - v1.8.2 - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
  (function(q,m){"function"===typeof define&&define.amd?define(m):"object"===typeof exports?module.exports=m():q.Blazy=m()})(this,function(){function q(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&l(b.options.container,function(a){n(a,"scroll",c.validateT)}),n(window,"resize",c.saveViewportOffsetT),n(window,"resize",c.validateT),n(window,"scroll",c.validateT));m(b)}function m(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a],e;a:{var g=d;e=b.options;var p=g.getBoundingClientRect();if(e.container&&y&&(g=g.closest(e.containerClass))){g=g.getBoundingClientRect();e=r(g,f)?r(p,{top:g.top-e.offset,right:g.right+e.offset,bottom:g.bottom+e.offset,left:g.left-e.offset}):!1;break a}e=r(p,f)}if(e||t(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function r(b,c){return b.right>=c.left&&b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!t(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight))if(c=b.getAttribute(u)||b.getAttribute(a.src)){c=c.split(a.separator);var d=c[A&&1<c.length?1:0],e=b.getAttribute(a.srcset),g="img"===b.nodeName.toLowerCase(),p=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(g||void 0===b.src){var h=new Image,w=function(){a.error&&a.error(b,"invalid");v(b,a.errorClass);k(h,"error",w);k(h,"load",f)},f=function(){g?p||B(b,d,e):b.style.backgroundImage='url("'+d+'")';x(b,a);k(h,"load",f);k(h,"error",w)};p&&(h=b,l(c.getElementsByTagName("source"),function(b){var c=a.srcset,e=b.getAttribute(c);e&&(b.setAttribute("srcset",e),b.removeAttribute(c))}));n(h,"error",w);n(h,"load",f);B(h,d,e)}else b.src=d,x(b,a)}else"video"===b.nodeName.toLowerCase()?(l(b.getElementsByTagName("source"),function(b){var c=a.src,e=b.getAttribute(c);e&&(b.setAttribute("src",e),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),v(b,a.errorClass))}function x(b,c){v(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);l(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function t(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function v(b,c){t(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){f.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;f.right=(window.innerWidth||document.documentElement.clientWidth)+b}function n(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function l(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],d);d++);}function D(b,c,a){var d=0;return function(){var e=+new Date;e-d<c||(d=e,b.apply(a,arguments))}}var u,f,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,h,f){f=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(h=f.length;h--;)f[h].currentStyle.k&&b.push(f[h]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=u=a.options.src||"data-src";y=Element.prototype.closest;A=1<window.devicePixelRatio;f={};f.top=0-a.options.offset;f.left=0-a.options.offset;a.revalidate=function(){q(a)};a.load=function(a,b){var c=this.options;void 0===a.length?z(a,b,c):l(a,function(a){z(a,b,c)})};a.destroy=function(){var a=this._util;this.options.container&&l(this.options.container,function(b){k(b,"scroll",a.validateT)});k(window,"scroll",a.validateT);k(window,"resize",a.validateT);k(window,"resize",a.saveViewportOffsetT);a.count=0;a.elements.length=0;a.destroyed=!0};d.validateT=D(function(){m(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,a);C(a.options.offset);l(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return u=a.src,!1});setTimeout(function(){q(a)})}});;
$.widget('custom.autocomplete_CAT', $.ui.autocomplete, {
	_renderMenu: function (f, d) {
		var c = this, e = c.term, b = '<strong class="ui-autocomplete-term">$1</strong>', a = '';
		e = e.replace(/,+|\+/g, ' ');
		e = e.replace(/\s+/g, ' ');
		e = e.replace(/([\^\$\(\)\[\]\{\}\*\.\+\?\|\\])/gi, '\\$1');
		e = jQuery.trim(e);
		e = e.split(' ').join('|');

		$.each(d, function (g, h) {
			if (h.showname != a) {
				f.append('<li class="ui-autocomplete-category whisperer_item whisperer_header">' + h.showname + '</li>');
				a = h.showname;
			}
			var li = c._renderItem(f, h);
			$(li).children('a').attr('href', h.URL);
		});

		f.addClass('whisperer');

		f.find('.whisperer_name').each(function () {
			var g = $(this);
			g.html(g.text().replace(new RegExp('(' + e + ')', 'gi'), b));
		}); f.css({ 'z-index': '100' });


		// uprava vysky rozbaleneho menu podle okna kvuli scrollovani 
		var fixHeight = $(window).height() - 60;
		f.css('max-height', fixHeight);

	},
	_renderItem: function (ul, item) {
		var $item = $('<li></li>').data('ui-autocomplete-item', item),
			itemText = item.phrase;

		$item.addClass('whisperer_item');

		if (item.Status.length != 0) {
			itemText = itemText + '<span class="status">(' + item.Status + ')</span>';
		}

		if (item.wstId == 3) {
			$item.prepend($('<a class="whisperer_name whisperer_name--category item-category"></a>').text(itemText));
		} else if (item.wstId == 4) {
			$item.prepend($('<a class="whisperer_name whisperer_name--vendor item-vendor" data-vendor-id="' + item.id + '"></a>').text(itemText));
		} else {
			$item.prepend($('<a class="whisperer_name"></a>').text(itemText));
		}

		$item.prepend($('<a href="#" class="whisperer_box-img' + (item.wstId == 4 ? ' whisperer_box-img--vendor' : '') + '"><img class="pro-img" src="' + item.Thumbnail + '" alt=""/></a>'));

		if (item.wstId == 1) {
			$item.append($('<div class="whisperer_action"><input type="hidden" id="txtQty_' + item.id + '" value="1"/><button type="button" class="btn btn-add-basket whisperer_btn-add-basket" title="' + dictionary.GetValue('tip_add_basket') + '" aria-label="' + dictionary.GetValue('tip_add_basket') + '" data-product-id="' + item.id + '" data-type="basket"><i class="icon-basket btn_icon"></i></button></div>'));
		}

		$item.appendTo(ul);

		return $item;
	}
});

$(function () {

	$('#quick_search_fulltext').keypress(function (b) {
		var $me = $(this);

		if (b.keyCode == 13) {
			var sText = fixedEncodeURIComponent($.trim($me.val()));

			if (sText.length > 0) {
				if (sText.length < 2) {
					displayErrorMessage(dictionary.GetValue('msg_fullt_err'), true);
				} else {
					window.location.href = g_root + '/pages/productlist.aspx?fulltext=' + sText + "&sortpar=15&sortdir=asc";
					return false;
				}
			}
			
			return false;
		}
	});

	var a = {};
	$('#quick_search_fulltext').autocomplete_CAT({
		minLength: 2,
		select: function (b, c) {
			b.preventDefault();

			GAAction(4, 0, c.item.phrase,1);

			if (c.item.wstId == 4) {
				showSubCatWhisper(b, c);
				return false;
			} else {
				window.location.href = c.item.URL;
			}
		},
		focus: function (event, ui) {
			$('.ui-autocomplete li').removeClass('ui-state-focus');
			$('.ui-autocomplete').find('li:has(a.ui-state-focus)').addClass('ui-state-focus');

			return false
		},
		appendTo: $('body').find('.search-form .search-form_in'),
		source: function (c, b) {
			var term = c.term;
			term = jQuery.trim(term.replace(/,+|\+/g, " "));
			term = term.replace(/([\^\$\(\)\[\]\{\}\*\+\?\|\\])/gi, "\\$1");
			term = term.replace(/\s+/g, "|");
			c.term = term;
			c.term = jQuery.trim(c.term);
			if (c.term in a) {
				b(a[c.term]); return;
			}
			// nevolat .asmx pokud neni min.pocet znaku
			if (jQuery.trim(c.term).length < 2) {
				return;
			}
			$.ajax({
				type: "POST",
				cache: false,
				url: g_root + "/asmx/wssearch.asmx/SearchWords",
				data: "{'param' : '" + c.term + "'}",
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				global: false,
				beforeSend: function(){
					$('.whisper-loader').show();
				},
				success: function (data) {
					a[c.term] = data.d.additionalData;
					b(data.d.additionalData);
					$('.whisper-loader').hide();
				},
				error: function (data) {
					if (data != null) {
						if (data.readyState == 4 && data.status == 401) {
							App.pageReload();
							return;
						}
					}
				}
			});
		},
		messages: {
			noResults: '',
			results: function () { }
		},
		open: function (event, ui) {

			$('body').find('.search-form').addClass('whisperer--is-open');

			$('.whisperer_btn-add-basket[data-type="basket"]').on('click', function () {
				var productId = $(this).data('product-id');

				addToBasketFromListExternal(productId, listBasketSuccess);

				return false;
			});

			$('.whisperer_name--category').on('click', function () {
				GAAction(4, 0, $(this));
			});

			$('.whisperer_name--vendor').on('click', function (e) {
				showSubCatWhisper(event, this);

				return false;
				event.preventDefault();
			});
		},
		close: function (event, ui) {
			$('body').find('.search-form').removeClass('whisperer--is-open');
		}
	});
});;
// https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/

jQuery.fn.putCursorAtEnd = function () {

	return this.each(function () {

		// Cache references
		var $el = $(this),
			el = this;

		// Only focus if input isn't already
		if (!$el.is(":focus")) {
			$el.focus();
		}

		// If this function exists... (IE 9+)
		if (el.setSelectionRange) {

			// Double the length because Opera is inconsistent about whether a carriage return is one character or two.
			var len = $el.val().length * 2;

			// Timeout seems to be required for Blink
			setTimeout(function () {
				el.setSelectionRange(len, len);
			}, 1);

		} else {

			// As a fallback, replace the contents with itself
			// Doesn't work in Chrome, but Chrome supports setSelectionRange
			$el.val($el.val());

		}

		// Scroll to the bottom, in case we're in a tall textarea
		// (Necessary for Firefox and Chrome)
		this.scrollTop = 999999;

	});

};;
/*!
 * 
 *         SimpleBar.js - v2.6.1
 *         Scrollbars, simpler.
 *         https://grsmto.github.io/simplebar/
 *         
 *         Made by Adrien Grsmto from a fork by Jonathan Nicol
 *         Under MIT License
 *       
 */
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.SimpleBar=e():t.SimpleBar=e()}(this,function(){return function(t){function e(r){if(n[r])return n[r].exports;var i=n[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,e),i.l=!0,i.exports}var n={};return e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:r})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=27)}([function(t,e,n){var r=n(23)("wks"),i=n(12),o=n(1).Symbol,s="function"==typeof o;(t.exports=function(t){return r[t]||(r[t]=s&&o[t]||(s?o:i)("Symbol."+t))}).store=r},function(t,e){var n=t.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=n)},function(t,e){var n={}.hasOwnProperty;t.exports=function(t,e){return n.call(t,e)}},function(t,e){var n=t.exports={version:"2.5.1"};"number"==typeof __e&&(__e=n)},function(t,e,n){var r=n(5),i=n(11);t.exports=n(7)?function(t,e,n){return r.f(t,e,i(1,n))}:function(t,e,n){return t[e]=n,t}},function(t,e,n){var r=n(6),i=n(33),o=n(34),s=Object.defineProperty;e.f=n(7)?Object.defineProperty:function(t,e,n){if(r(t),e=o(e,!0),r(n),i)try{return s(t,e,n)}catch(t){}if("get"in n||"set"in n)throw TypeError("Accessors not supported!");return"value"in n&&(t[e]=n.value),t}},function(t,e,n){var r=n(10);t.exports=function(t){if(!r(t))throw TypeError(t+" is not an object!");return t}},function(t,e,n){t.exports=!n(16)(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a})},function(t,e){var n=Math.ceil,r=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?r:n)(t)}},function(t,e){t.exports=function(t){if(void 0==t)throw TypeError("Can't call method on  "+t);return t}},function(t,e){t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},function(t,e){t.exports=function(t,e){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:e}}},function(t,e){var n=0,r=Math.random();t.exports=function(t){return"Symbol(".concat(void 0===t?"":t,")_",(++n+r).toString(36))}},function(t,e){t.exports={}},function(t,e,n){var r=n(23)("keys"),i=n(12);t.exports=function(t){return r[t]||(r[t]=i(t))}},function(t,e,n){var r=n(1),i=n(3),o=n(4),s=n(18),c=n(19),a=function(t,e,n){var u,l,f,h,d=t&a.F,p=t&a.G,v=t&a.S,b=t&a.P,y=t&a.B,m=p?r:v?r[e]||(r[e]={}):(r[e]||{}).prototype,g=p?i:i[e]||(i[e]={}),E=g.prototype||(g.prototype={});p&&(n=e);for(u in n)l=!d&&m&&void 0!==m[u],f=(l?m:n)[u],h=y&&l?c(f,r):b&&"function"==typeof f?c(Function.call,f):f,m&&s(m,u,f,t&a.U),g[u]!=f&&o(g,u,h),b&&E[u]!=f&&(E[u]=f)};r.core=i,a.F=1,a.G=2,a.S=4,a.P=8,a.B=16,a.W=32,a.U=64,a.R=128,t.exports=a},function(t,e){t.exports=function(t){try{return!!t()}catch(t){return!0}}},function(t,e,n){var r=n(10),i=n(1).document,o=r(i)&&r(i.createElement);t.exports=function(t){return o?i.createElement(t):{}}},function(t,e,n){var r=n(1),i=n(4),o=n(2),s=n(12)("src"),c=Function.toString,a=(""+c).split("toString");n(3).inspectSource=function(t){return c.call(t)},(t.exports=function(t,e,n,c){var u="function"==typeof n;u&&(o(n,"name")||i(n,"name",e)),t[e]!==n&&(u&&(o(n,s)||i(n,s,t[e]?""+t[e]:a.join(String(e)))),t===r?t[e]=n:c?t[e]?t[e]=n:i(t,e,n):(delete t[e],i(t,e,n)))})(Function.prototype,"toString",function(){return"function"==typeof this&&this[s]||c.call(this)})},function(t,e,n){var r=n(35);t.exports=function(t,e,n){if(r(t),void 0===e)return t;switch(n){case 1:return function(n){return t.call(e,n)};case 2:return function(n,r){return t.call(e,n,r)};case 3:return function(n,r,i){return t.call(e,n,r,i)}}return function(){return t.apply(e,arguments)}}},function(t,e,n){var r=n(41),i=n(9);t.exports=function(t){return r(i(t))}},function(t,e){var n={}.toString;t.exports=function(t){return n.call(t).slice(8,-1)}},function(t,e,n){var r=n(8),i=Math.min;t.exports=function(t){return t>0?i(r(t),9007199254740991):0}},function(t,e,n){var r=n(1),i=r["__core-js_shared__"]||(r["__core-js_shared__"]={});t.exports=function(t){return i[t]||(i[t]={})}},function(t,e){t.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},function(t,e,n){var r=n(5).f,i=n(2),o=n(0)("toStringTag");t.exports=function(t,e,n){t&&!i(t=n?t:t.prototype,o)&&r(t,o,{configurable:!0,value:e})}},function(t,e,n){var r=n(9);t.exports=function(t){return Object(r(t))}},function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{default:t}}function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function o(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function s(t,e,n){return e&&o(t.prototype,e),n&&o(t,n),t}Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,n(28);var c=r(n(53)),a=r(n(54)),u=r(n(56));n(57),Object.assign=n(58);var l=function(){function t(e,n){i(this,t),this.el=e,this.flashTimeout,this.contentEl,this.scrollContentEl,this.dragOffset={x:0,y:0},this.isVisible={x:!0,y:!0},this.scrollOffsetAttr={x:"scrollLeft",y:"scrollTop"},this.sizeAttr={x:"offsetWidth",y:"offsetHeight"},this.scrollSizeAttr={x:"scrollWidth",y:"scrollHeight"},this.offsetAttr={x:"left",y:"top"},this.globalObserver,this.mutationObserver,this.resizeObserver,this.currentAxis,this.isRtl,this.options=Object.assign({},t.defaultOptions,n),this.classNames=this.options.classNames,this.scrollbarWidth=(0,c.default)(),this.offsetSize=20,this.flashScrollbar=this.flashScrollbar.bind(this),this.onDragY=this.onDragY.bind(this),this.onDragX=this.onDragX.bind(this),this.onScrollY=this.onScrollY.bind(this),this.onScrollX=this.onScrollX.bind(this),this.drag=this.drag.bind(this),this.onEndDrag=this.onEndDrag.bind(this),this.onMouseEnter=this.onMouseEnter.bind(this),this.recalculate=(0,a.default)(this.recalculate,100,{leading:!0}),this.init()}return s(t,[{key:"init",value:function(){this.el.SimpleBar=this,this.initDOM(),this.scrollbarX=this.trackX.querySelector(".".concat(this.classNames.scrollbar)),this.scrollbarY=this.trackY.querySelector(".".concat(this.classNames.scrollbar)),this.isRtl="rtl"===getComputedStyle(this.contentEl).direction,this.scrollContentEl.style[this.isRtl?"paddingLeft":"paddingRight"]="".concat(this.scrollbarWidth||this.offsetSize,"px"),this.scrollContentEl.style.marginBottom="-".concat(2*this.scrollbarWidth||this.offsetSize,"px"),this.contentEl.style.paddingBottom="".concat(this.scrollbarWidth||this.offsetSize,"px"),0!==this.scrollbarWidth&&(this.contentEl.style[this.isRtl?"marginLeft":"marginRight"]="-".concat(this.scrollbarWidth,"px")),this.recalculate(),this.initListeners()}},{key:"initDOM",value:function(){var t=this;if(Array.from(this.el.children).filter(function(e){return e.classList.contains(t.classNames.scrollContent)}).length)this.trackX=this.el.querySelector(".".concat(this.classNames.track,".horizontal")),this.trackY=this.el.querySelector(".".concat(this.classNames.track,".vertical")),this.scrollContentEl=this.el.querySelector(".".concat(this.classNames.scrollContent)),this.contentEl=this.el.querySelector(".".concat(this.classNames.content));else{for(this.scrollContentEl=document.createElement("div"),this.contentEl=document.createElement("div"),this.scrollContentEl.classList.add(this.classNames.scrollContent),this.contentEl.classList.add(this.classNames.content);this.el.firstChild;)this.contentEl.appendChild(this.el.firstChild);this.scrollContentEl.appendChild(this.contentEl),this.el.appendChild(this.scrollContentEl)}if(!this.trackX||!this.trackY){var e=document.createElement("div"),n=document.createElement("div");e.classList.add(this.classNames.track),n.classList.add(this.classNames.scrollbar),e.appendChild(n),this.trackX=e.cloneNode(!0),this.trackX.classList.add("horizontal"),this.trackY=e.cloneNode(!0),this.trackY.classList.add("vertical"),this.el.insertBefore(this.trackX,this.el.firstChild),this.el.insertBefore(this.trackY,this.el.firstChild)}this.el.setAttribute("data-simplebar","init")}},{key:"initListeners",value:function(){var t=this;this.options.autoHide&&this.el.addEventListener("mouseenter",this.onMouseEnter),this.scrollbarY.addEventListener("mousedown",this.onDragY),this.scrollbarX.addEventListener("mousedown",this.onDragX),this.scrollContentEl.addEventListener("scroll",this.onScrollY),this.contentEl.addEventListener("scroll",this.onScrollX),"undefined"!=typeof MutationObserver&&(this.mutationObserver=new MutationObserver(function(e){e.forEach(function(e){(t.isChildNode(e.target)||e.addedNodes.length)&&t.recalculate()})}),this.mutationObserver.observe(this.el,{attributes:!0,childList:!0,characterData:!0,subtree:!0})),this.resizeObserver=new u.default(this.recalculate.bind(this)),this.resizeObserver.observe(this.el)}},{key:"removeListeners",value:function(){this.options.autoHide&&this.el.removeEventListener("mouseenter",this.onMouseEnter),this.scrollbarX.removeEventListener("mousedown",this.onDragX),this.scrollbarY.removeEventListener("mousedown",this.onDragY),this.scrollContentEl.removeEventListener("scroll",this.onScrollY),this.contentEl.removeEventListener("scroll",this.onScrollX),this.mutationObserver.disconnect(),this.resizeObserver.disconnect()}},{key:"onDragX",value:function(t){this.onDrag(t,"x")}},{key:"onDragY",value:function(t){this.onDrag(t,"y")}},{key:"onDrag",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"y";t.preventDefault();var n="y"===e?this.scrollbarY:this.scrollbarX,r="y"===e?t.pageY:t.pageX;this.dragOffset[e]=r-n.getBoundingClientRect()[this.offsetAttr[e]],this.currentAxis=e,document.addEventListener("mousemove",this.drag),document.addEventListener("mouseup",this.onEndDrag)}},{key:"drag",value:function(t){var e,n,r;t.preventDefault(),"y"===this.currentAxis?(e=t.pageY,n=this.trackY,r=this.scrollContentEl):(e=t.pageX,n=this.trackX,r=this.contentEl);var i=e-n.getBoundingClientRect()[this.offsetAttr[this.currentAxis]]-this.dragOffset[this.currentAxis],o=i/n[this.sizeAttr[this.currentAxis]],s=o*this.contentEl[this.scrollSizeAttr[this.currentAxis]];r[this.scrollOffsetAttr[this.currentAxis]]=s}},{key:"onEndDrag",value:function(){document.removeEventListener("mousemove",this.drag),document.removeEventListener("mouseup",this.onEndDrag)}},{key:"resizeScrollbar",value:function(){var t,e,n,r,i,o=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"y";"x"===o?(t=this.trackX,e=this.scrollbarX,n=this.contentEl[this.scrollOffsetAttr[o]],r=this.contentSizeX,i=this.scrollbarXSize):(t=this.trackY,e=this.scrollbarY,n=this.scrollContentEl[this.scrollOffsetAttr[o]],r=this.contentSizeY,i=this.scrollbarYSize);var s=i/r,c=n/(r-i),a=Math.max(~~(s*i),this.options.scrollbarMinSize),u=~~((i-a)*c);this.isVisible[o]=i<r,this.isVisible[o]||this.options.forceVisible?(t.style.visibility="visible",this.options.forceVisible?e.style.visibility="hidden":e.style.visibility="visible","x"===o?(e.style.left="".concat(u,"px"),e.style.width="".concat(a,"px")):(e.style.top="".concat(u,"px"),e.style.height="".concat(a,"px"))):t.style.visibility="hidden"}},{key:"onScrollX",value:function(){this.flashScrollbar("x")}},{key:"onScrollY",value:function(){this.flashScrollbar("y")}},{key:"onMouseEnter",value:function(){this.flashScrollbar("x"),this.flashScrollbar("y")}},{key:"flashScrollbar",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"y";this.resizeScrollbar(t),this.showScrollbar(t)}},{key:"showScrollbar",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"y";this.isVisible[t]&&("x"===t?this.scrollbarX.classList.add("visible"):this.scrollbarY.classList.add("visible"),this.options.autoHide&&("number"==typeof this.flashTimeout&&window.clearTimeout(this.flashTimeout),this.flashTimeout=window.setTimeout(this.hideScrollbar.bind(this),1e3)))}},{key:"hideScrollbar",value:function(){this.scrollbarX.classList.remove("visible"),this.scrollbarY.classList.remove("visible"),"number"==typeof this.flashTimeout&&window.clearTimeout(this.flashTimeout)}},{key:"recalculate",value:function(){this.contentSizeX=this.contentEl[this.scrollSizeAttr.x],this.contentSizeY=this.contentEl[this.scrollSizeAttr.y]-(this.scrollbarWidth||this.offsetSize),this.scrollbarXSize=this.trackX[this.sizeAttr.x],this.scrollbarYSize=this.trackY[this.sizeAttr.y],this.resizeScrollbar("x"),this.resizeScrollbar("y"),this.options.autoHide||(this.showScrollbar("x"),this.showScrollbar("y"))}},{key:"getScrollElement",value:function(){return"y"===(arguments.length>0&&void 0!==arguments[0]?arguments[0]:"y")?this.scrollContentEl:this.contentEl}},{key:"getContentElement",value:function(){return this.contentEl}},{key:"unMount",value:function(){this.removeListeners(),this.el.SimpleBar=null}},{key:"isChildNode",value:function(t){return null!==t&&(t===this.el||this.isChildNode(t.parentNode))}}],[{key:"initHtmlApi",value:function(){this.initDOMLoadedElements=this.initDOMLoadedElements.bind(this),"undefined"!=typeof MutationObserver&&(this.globalObserver=new MutationObserver(function(e){e.forEach(function(e){Array.from(e.addedNodes).forEach(function(e){1===e.nodeType&&(e.hasAttribute("data-simplebar")?!e.SimpleBar&&new t(e,t.getElOptions(e)):Array.from(e.querySelectorAll("[data-simplebar]")).forEach(function(e){!e.SimpleBar&&new t(e,t.getElOptions(e))}))}),Array.from(e.removedNodes).forEach(function(t){1===t.nodeType&&(t.hasAttribute("data-simplebar")?t.SimpleBar&&t.SimpleBar.unMount():Array.from(t.querySelectorAll("[data-simplebar]")).forEach(function(t){t.SimpleBar&&t.SimpleBar.unMount()}))})})}),this.globalObserver.observe(document,{childList:!0,subtree:!0})),"complete"===document.readyState||"loading"!==document.readyState&&!document.documentElement.doScroll?window.setTimeout(this.initDOMLoadedElements.bind(this)):(document.addEventListener("DOMContentLoaded",this.initDOMLoadedElements),window.addEventListener("load",this.initDOMLoadedElements))}},{key:"getElOptions",value:function(e){return Object.keys(t.htmlAttributes).reduce(function(n,r){var i=t.htmlAttributes[r];return e.hasAttribute(i)&&(n[r]=JSON.parse(e.getAttribute(i)||!0)),n},{})}},{key:"removeObserver",value:function(){this.globalObserver.disconnect()}},{key:"initDOMLoadedElements",value:function(){document.removeEventListener("DOMContentLoaded",this.initDOMLoadedElements),window.removeEventListener("load",this.initDOMLoadedElements),Array.from(document.querySelectorAll("[data-simplebar]")).forEach(function(e){e.SimpleBar||new t(e,t.getElOptions(e))})}},{key:"defaultOptions",get:function(){return{autoHide:!0,forceVisible:!1,classNames:{content:"simplebar-content",scrollContent:"simplebar-scroll-content",scrollbar:"simplebar-scrollbar",track:"simplebar-track"},scrollbarMinSize:25}}},{key:"htmlAttributes",get:function(){return{autoHide:"data-simplebar-auto-hide",forceVisible:"data-simplebar-force-visible",scrollbarMinSize:"data-simplebar-scrollbar-min-size"}}}]),t}();e.default=l,l.initHtmlApi()},function(t,e,n){n(29),n(46),t.exports=n(3).Array.from},function(t,e,n){"use strict";var r=n(30)(!0);n(31)(String,"String",function(t){this._t=String(t),this._i=0},function(){var t,e=this._t,n=this._i;return n>=e.length?{value:void 0,done:!0}:(t=r(e,n),this._i+=t.length,{value:t,done:!1})})},function(t,e,n){var r=n(8),i=n(9);t.exports=function(t){return function(e,n){var o,s,c=String(i(e)),a=r(n),u=c.length;return a<0||a>=u?t?"":void 0:(o=c.charCodeAt(a),o<55296||o>56319||a+1===u||(s=c.charCodeAt(a+1))<56320||s>57343?t?c.charAt(a):o:t?c.slice(a,a+2):s-56320+(o-55296<<10)+65536)}}},function(t,e,n){"use strict";var r=n(32),i=n(15),o=n(18),s=n(4),c=n(2),a=n(13),u=n(36),l=n(25),f=n(45),h=n(0)("iterator"),d=!([].keys&&"next"in[].keys()),p=function(){return this};t.exports=function(t,e,n,v,b,y,m){u(n,e,v);var g,E,O,_=function(t){if(!d&&t in A)return A[t];switch(t){case"keys":case"values":return function(){return new n(this,t)}}return function(){return new n(this,t)}},x=e+" Iterator",w="values"==b,S=!1,A=t.prototype,k=A[h]||A["@@iterator"]||b&&A[b],j=k||_(b),M=b?w?_("entries"):j:void 0,L="Array"==e?A.entries||k:k;if(L&&(O=f(L.call(new t)))!==Object.prototype&&O.next&&(l(O,x,!0),r||c(O,h)||s(O,h,p)),w&&k&&"values"!==k.name&&(S=!0,j=function(){return k.call(this)}),r&&!m||!d&&!S&&A[h]||s(A,h,j),a[e]=j,a[x]=p,b)if(g={values:w?j:_("values"),keys:y?j:_("keys"),entries:M},m)for(E in g)E in A||o(A,E,g[E]);else i(i.P+i.F*(d||S),e,g);return g}},function(t,e){t.exports=!1},function(t,e,n){t.exports=!n(7)&&!n(16)(function(){return 7!=Object.defineProperty(n(17)("div"),"a",{get:function(){return 7}}).a})},function(t,e,n){var r=n(10);t.exports=function(t,e){if(!r(t))return t;var n,i;if(e&&"function"==typeof(n=t.toString)&&!r(i=n.call(t)))return i;if("function"==typeof(n=t.valueOf)&&!r(i=n.call(t)))return i;if(!e&&"function"==typeof(n=t.toString)&&!r(i=n.call(t)))return i;throw TypeError("Can't convert object to primitive value")}},function(t,e){t.exports=function(t){if("function"!=typeof t)throw TypeError(t+" is not a function!");return t}},function(t,e,n){"use strict";var r=n(37),i=n(11),o=n(25),s={};n(4)(s,n(0)("iterator"),function(){return this}),t.exports=function(t,e,n){t.prototype=r(s,{next:i(1,n)}),o(t,e+" Iterator")}},function(t,e,n){var r=n(6),i=n(38),o=n(24),s=n(14)("IE_PROTO"),c=function(){},a=function(){var t,e=n(17)("iframe"),r=o.length;for(e.style.display="none",n(44).appendChild(e),e.src="javascript:",t=e.contentWindow.document,t.open(),t.write("<script>document.F=Object<\/script>"),t.close(),a=t.F;r--;)delete a.prototype[o[r]];return a()};t.exports=Object.create||function(t,e){var n;return null!==t?(c.prototype=r(t),n=new c,c.prototype=null,n[s]=t):n=a(),void 0===e?n:i(n,e)}},function(t,e,n){var r=n(5),i=n(6),o=n(39);t.exports=n(7)?Object.defineProperties:function(t,e){i(t);for(var n,s=o(e),c=s.length,a=0;c>a;)r.f(t,n=s[a++],e[n]);return t}},function(t,e,n){var r=n(40),i=n(24);t.exports=Object.keys||function(t){return r(t,i)}},function(t,e,n){var r=n(2),i=n(20),o=n(42)(!1),s=n(14)("IE_PROTO");t.exports=function(t,e){var n,c=i(t),a=0,u=[];for(n in c)n!=s&&r(c,n)&&u.push(n);for(;e.length>a;)r(c,n=e[a++])&&(~o(u,n)||u.push(n));return u}},function(t,e,n){var r=n(21);t.exports=Object("z").propertyIsEnumerable(0)?Object:function(t){return"String"==r(t)?t.split(""):Object(t)}},function(t,e,n){var r=n(20),i=n(22),o=n(43);t.exports=function(t){return function(e,n,s){var c,a=r(e),u=i(a.length),l=o(s,u);if(t&&n!=n){for(;u>l;)if((c=a[l++])!=c)return!0}else for(;u>l;l++)if((t||l in a)&&a[l]===n)return t||l||0;return!t&&-1}}},function(t,e,n){var r=n(8),i=Math.max,o=Math.min;t.exports=function(t,e){return t=r(t),t<0?i(t+e,0):o(t,e)}},function(t,e,n){var r=n(1).document;t.exports=r&&r.documentElement},function(t,e,n){var r=n(2),i=n(26),o=n(14)("IE_PROTO"),s=Object.prototype;t.exports=Object.getPrototypeOf||function(t){return t=i(t),r(t,o)?t[o]:"function"==typeof t.constructor&&t instanceof t.constructor?t.constructor.prototype:t instanceof Object?s:null}},function(t,e,n){"use strict";var r=n(19),i=n(15),o=n(26),s=n(47),c=n(48),a=n(22),u=n(49),l=n(50);i(i.S+i.F*!n(52)(function(t){Array.from(t)}),"Array",{from:function(t){var e,n,i,f,h=o(t),d="function"==typeof this?this:Array,p=arguments.length,v=p>1?arguments[1]:void 0,b=void 0!==v,y=0,m=l(h);if(b&&(v=r(v,p>2?arguments[2]:void 0,2)),void 0==m||d==Array&&c(m))for(e=a(h.length),n=new d(e);e>y;y++)u(n,y,b?v(h[y],y):h[y]);else for(f=m.call(h),n=new d;!(i=f.next()).done;y++)u(n,y,b?s(f,v,[i.value,y],!0):i.value);return n.length=y,n}})},function(t,e,n){var r=n(6);t.exports=function(t,e,n,i){try{return i?e(r(n)[0],n[1]):e(n)}catch(e){var o=t.return;throw void 0!==o&&r(o.call(t)),e}}},function(t,e,n){var r=n(13),i=n(0)("iterator"),o=Array.prototype;t.exports=function(t){return void 0!==t&&(r.Array===t||o[i]===t)}},function(t,e,n){"use strict";var r=n(5),i=n(11);t.exports=function(t,e,n){e in t?r.f(t,e,i(0,n)):t[e]=n}},function(t,e,n){var r=n(51),i=n(0)("iterator"),o=n(13);t.exports=n(3).getIteratorMethod=function(t){if(void 0!=t)return t[i]||t["@@iterator"]||o[r(t)]}},function(t,e,n){var r=n(21),i=n(0)("toStringTag"),o="Arguments"==r(function(){return arguments}()),s=function(t,e){try{return t[e]}catch(t){}};t.exports=function(t){var e,n,c;return void 0===t?"Undefined":null===t?"Null":"string"==typeof(n=s(e=Object(t),i))?n:o?r(e):"Object"==(c=r(e))&&"function"==typeof e.callee?"Arguments":c}},function(t,e,n){var r=n(0)("iterator"),i=!1;try{var o=[7][r]();o.return=function(){i=!0},Array.from(o,function(){throw 2})}catch(t){}t.exports=function(t,e){if(!e&&!i)return!1;var n=!1;try{var o=[7],s=o[r]();s.next=function(){return{done:n=!0}},o[r]=function(){return s},t(o)}catch(t){}return n}},function(t,e,n){var r,i,o;/*! scrollbarWidth.js v0.1.3 | felixexter | MIT | https://github.com/felixexter/scrollbarWidth */
!function(n,s){i=[],r=s,void 0!==(o="function"==typeof r?r.apply(e,i):r)&&(t.exports=o)}(0,function(){"use strict";function t(){if("undefined"==typeof document)return 0;var t,e=document.body,n=document.createElement("div"),r=n.style;return r.position="absolute",r.top=r.left="-9999px",r.width=r.height="100px",r.overflow="scroll",e.appendChild(n),t=n.offsetWidth-n.clientWidth,e.removeChild(n),t}return t})},function(t,e,n){(function(e){function n(t,e,n){function i(e){var n=v,r=b;return v=b=void 0,w=e,m=t.apply(r,n)}function o(t){return w=t,g=setTimeout(l,e),S?i(t):m}function a(t){var n=t-x,r=t-w,i=e-n;return A?O(i,y-r):i}function u(t){var n=t-x,r=t-w;return void 0===x||n>=e||n<0||A&&r>=y}function l(){var t=_();if(u(t))return f(t);g=setTimeout(l,a(t))}function f(t){return g=void 0,k&&v?i(t):(v=b=void 0,m)}function h(){void 0!==g&&clearTimeout(g),w=0,v=x=b=g=void 0}function d(){return void 0===g?m:f(_())}function p(){var t=_(),n=u(t);if(v=arguments,b=this,x=t,n){if(void 0===g)return o(x);if(A)return g=setTimeout(l,e),i(x)}return void 0===g&&(g=setTimeout(l,e)),m}var v,b,y,m,g,x,w=0,S=!1,A=!1,k=!0;if("function"!=typeof t)throw new TypeError(c);return e=s(e)||0,r(n)&&(S=!!n.leading,A="maxWait"in n,y=A?E(s(n.maxWait)||0,e):y,k="trailing"in n?!!n.trailing:k),p.cancel=h,p.flush=d,p}function r(t){var e=typeof t;return!!t&&("object"==e||"function"==e)}function i(t){return!!t&&"object"==typeof t}function o(t){return"symbol"==typeof t||i(t)&&g.call(t)==u}function s(t){if("number"==typeof t)return t;if(o(t))return a;if(r(t)){var e="function"==typeof t.valueOf?t.valueOf():t;t=r(e)?e+"":e}if("string"!=typeof t)return 0===t?t:+t;t=t.replace(l,"");var n=h.test(t);return n||d.test(t)?p(t.slice(2),n?2:8):f.test(t)?a:+t}var c="Expected a function",a=NaN,u="[object Symbol]",l=/^\s+|\s+$/g,f=/^[-+]0x[0-9a-f]+$/i,h=/^0b[01]+$/i,d=/^0o[0-7]+$/i,p=parseInt,v="object"==typeof e&&e&&e.Object===Object&&e,b="object"==typeof self&&self&&self.Object===Object&&self,y=v||b||Function("return this")(),m=Object.prototype,g=m.toString,E=Math.max,O=Math.min,_=function(){return y.Date.now()};t.exports=n}).call(e,n(55))},function(t,e){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(t){"object"==typeof window&&(n=window)}t.exports=n},function(t,e,n){"use strict";function r(t){return parseFloat(t)||0}function i(t){return Array.prototype.slice.call(arguments,1).reduce(function(e,n){return e+r(t["border-"+n+"-width"])},0)}function o(t){for(var e=["top","right","bottom","left"],n={},i=0,o=e;i<o.length;i+=1){var s=o[i],c=t["padding-"+s];n[s]=r(c)}return n}function s(t){var e=t.getBBox();return f(0,0,e.width,e.height)}function c(t){var e=t.clientWidth,n=t.clientHeight;if(!e&&!n)return _;var s=getComputedStyle(t),c=o(s),u=c.left+c.right,l=c.top+c.bottom,h=r(s.width),d=r(s.height);if("border-box"===s.boxSizing&&(Math.round(h+u)!==e&&(h-=i(s,"left","right")+u),Math.round(d+l)!==n&&(d-=i(s,"top","bottom")+l)),!a(t)){var p=Math.round(h+u)-e,v=Math.round(d+l)-n;1!==Math.abs(p)&&(h-=p),1!==Math.abs(v)&&(d-=v)}return f(c.left,c.top,h,d)}function a(t){return t===document.documentElement}function u(t){return d?x(t)?s(t):c(t):_}function l(t){var e=t.x,n=t.y,r=t.width,i=t.height,o="undefined"!=typeof DOMRectReadOnly?DOMRectReadOnly:Object,s=Object.create(o.prototype);return O(s,{x:e,y:n,width:r,height:i,top:n,right:e+r,bottom:i+n,left:e}),s}function f(t,e,n,r){return{x:t,y:e,width:n,height:r}}Object.defineProperty(e,"__esModule",{value:!0});var h=function(){function t(t,e){var n=-1;return t.some(function(t,r){return t[0]===e&&(n=r,!0)}),n}return"undefined"!=typeof Map?Map:function(){function e(){this.__entries__=[]}var n={size:{}};return n.size.get=function(){return this.__entries__.length},e.prototype.get=function(e){var n=t(this.__entries__,e),r=this.__entries__[n];return r&&r[1]},e.prototype.set=function(e,n){var r=t(this.__entries__,e);~r?this.__entries__[r][1]=n:this.__entries__.push([e,n])},e.prototype.delete=function(e){var n=this.__entries__,r=t(n,e);~r&&n.splice(r,1)},e.prototype.has=function(e){return!!~t(this.__entries__,e)},e.prototype.clear=function(){this.__entries__.splice(0)},e.prototype.forEach=function(t,e){void 0===e&&(e=null);for(var n=0,r=this.__entries__;n<r.length;n+=1){var i=r[n];t.call(e,i[1],i[0])}},Object.defineProperties(e.prototype,n),e}()}(),d="undefined"!=typeof window&&"undefined"!=typeof document&&window.document===document,p=function(){return"function"==typeof requestAnimationFrame?requestAnimationFrame:function(t){return setTimeout(function(){return t(Date.now())},1e3/60)}}(),v=2,b=function(t,e){function n(){o&&(o=!1,t()),s&&i()}function r(){p(n)}function i(){var t=Date.now();if(o){if(t-c<v)return;s=!0}else o=!0,s=!1,setTimeout(r,e);c=t}var o=!1,s=!1,c=0;return i},y=["top","right","bottom","left","width","height","size","weight"],m="undefined"!=typeof navigator&&/Trident\/.*rv:11/.test(navigator.userAgent),g="undefined"!=typeof MutationObserver&&!m,E=function(){this.connected_=!1,this.mutationEventsAdded_=!1,this.mutationsObserver_=null,this.observers_=[],this.onTransitionEnd_=this.onTransitionEnd_.bind(this),this.refresh=b(this.refresh.bind(this),20)};E.prototype.addObserver=function(t){~this.observers_.indexOf(t)||this.observers_.push(t),this.connected_||this.connect_()},E.prototype.removeObserver=function(t){var e=this.observers_,n=e.indexOf(t);~n&&e.splice(n,1),!e.length&&this.connected_&&this.disconnect_()},E.prototype.refresh=function(){this.updateObservers_()&&this.refresh()},E.prototype.updateObservers_=function(){var t=this.observers_.filter(function(t){return t.gatherActive(),t.hasActive()});return t.forEach(function(t){return t.broadcastActive()}),t.length>0},E.prototype.connect_=function(){d&&!this.connected_&&(document.addEventListener("transitionend",this.onTransitionEnd_),window.addEventListener("resize",this.refresh),g?(this.mutationsObserver_=new MutationObserver(this.refresh),this.mutationsObserver_.observe(document,{attributes:!0,childList:!0,characterData:!0,subtree:!0})):(document.addEventListener("DOMSubtreeModified",this.refresh),this.mutationEventsAdded_=!0),this.connected_=!0)},E.prototype.disconnect_=function(){d&&this.connected_&&(document.removeEventListener("transitionend",this.onTransitionEnd_),window.removeEventListener("resize",this.refresh),this.mutationsObserver_&&this.mutationsObserver_.disconnect(),this.mutationEventsAdded_&&document.removeEventListener("DOMSubtreeModified",this.refresh),this.mutationsObserver_=null,this.mutationEventsAdded_=!1,this.connected_=!1)},E.prototype.onTransitionEnd_=function(t){var e=t.propertyName;y.some(function(t){return!!~e.indexOf(t)})&&this.refresh()},E.getInstance=function(){return this.instance_||(this.instance_=new E),this.instance_},E.instance_=null;var O=function(t,e){for(var n=0,r=Object.keys(e);n<r.length;n+=1){var i=r[n];Object.defineProperty(t,i,{value:e[i],enumerable:!1,writable:!1,configurable:!0})}return t},_=f(0,0,0,0),x=function(){return"undefined"!=typeof SVGGraphicsElement?function(t){return t instanceof SVGGraphicsElement}:function(t){return t instanceof SVGElement&&"function"==typeof t.getBBox}}(),w=function(t){this.broadcastWidth=0,this.broadcastHeight=0,this.contentRect_=f(0,0,0,0),this.target=t};w.prototype.isActive=function(){var t=u(this.target);return this.contentRect_=t,t.width!==this.broadcastWidth||t.height!==this.broadcastHeight},w.prototype.broadcastRect=function(){var t=this.contentRect_;return this.broadcastWidth=t.width,this.broadcastHeight=t.height,t};var S=function(t,e){var n=l(e);O(this,{target:t,contentRect:n})},A=function(t,e,n){if("function"!=typeof t)throw new TypeError("The callback provided as parameter 1 is not a function.");this.activeObservations_=[],this.observations_=new h,this.callback_=t,this.controller_=e,this.callbackCtx_=n};A.prototype.observe=function(t){if(!arguments.length)throw new TypeError("1 argument required, but only 0 present.");if("undefined"!=typeof Element&&Element instanceof Object){if(!(t instanceof Element))throw new TypeError('parameter 1 is not of type "Element".');var e=this.observations_;e.has(t)||(e.set(t,new w(t)),this.controller_.addObserver(this),this.controller_.refresh())}},A.prototype.unobserve=function(t){if(!arguments.length)throw new TypeError("1 argument required, but only 0 present.");if("undefined"!=typeof Element&&Element instanceof Object){if(!(t instanceof Element))throw new TypeError('parameter 1 is not of type "Element".');var e=this.observations_;e.has(t)&&(e.delete(t),e.size||this.controller_.removeObserver(this))}},A.prototype.disconnect=function(){this.clearActive(),this.observations_.clear(),this.controller_.removeObserver(this)},A.prototype.gatherActive=function(){var t=this;this.clearActive(),this.observations_.forEach(function(e){e.isActive()&&t.activeObservations_.push(e)})},A.prototype.broadcastActive=function(){if(this.hasActive()){var t=this.callbackCtx_,e=this.activeObservations_.map(function(t){return new S(t.target,t.broadcastRect())});this.callback_.call(t,e,t),this.clearActive()}},A.prototype.clearActive=function(){this.activeObservations_.splice(0)},A.prototype.hasActive=function(){return this.activeObservations_.length>0};var k="undefined"!=typeof WeakMap?new WeakMap:new h,j=function(t){if(!(this instanceof j))throw new TypeError("Cannot call a class as a function");if(!arguments.length)throw new TypeError("1 argument required, but only 0 present.");var e=E.getInstance(),n=new A(t,e,this);k.set(this,n)};["observe","unobserve","disconnect"].forEach(function(t){j.prototype[t]=function(){return(e=k.get(this))[t].apply(e,arguments);var e}});var M=function(){return"undefined"!=typeof ResizeObserver?ResizeObserver:j}();e.default=M},function(t,e){},function(t,e,n){"use strict";function r(t){if(null===t||void 0===t)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(t)}/*
object-assign
(c) Sindre Sorhus
@license MIT
*/
var i=Object.getOwnPropertySymbols,o=Object.prototype.hasOwnProperty,s=Object.prototype.propertyIsEnumerable;t.exports=function(){try{if(!Object.assign)return!1;var t=new String("abc");if(t[5]="de","5"===Object.getOwnPropertyNames(t)[0])return!1;for(var e={},n=0;n<10;n++)e["_"+String.fromCharCode(n)]=n;if("0123456789"!==Object.getOwnPropertyNames(e).map(function(t){return e[t]}).join(""))return!1;var r={};return"abcdefghijklmnopqrst".split("").forEach(function(t){r[t]=t}),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},r)).join("")}catch(t){return!1}}()?Object.assign:function(t,e){for(var n,c,a=r(t),u=1;u<arguments.length;u++){n=Object(arguments[u]);for(var l in n)o.call(n,l)&&(a[l]=n[l]);if(i){c=i(n);for(var f=0;f<c.length;f++)s.call(n,c[f])&&(a[c[f]]=n[c[f]])}}return a}}]).default});;
/*
 * =============================================================
 * ElxPreloader by Jarda Sarzik
 * =============================================================
 */

(function (window, document, $) {

	var _objInstances = [];

	function _getExistInstance(el) {
		var instance = {};

		for (var i = 0; i < _objInstances.length; i++) {
			if (!$(el).is(_objInstances[i].$el)) {
				continue;
			}

			instance = _objInstances[i];
		}

		return instance;
	}

	var _ElxPreloader = function (el, opts) {
		this.$el = $(el);
		this.opts = {
			preloaderTpl: '<div class="preloader">' +
				'<div class="preloader_el-1 preloader_el"></div>' +
				'<div class="preloader_el-2 preloader_el"></div>' +
				'<div class="preloader_el-3 preloader_el"></div>' +
				'<div class="preloader_el-4 preloader_el"></div>' +
				'<div class="preloader_el-5 preloader_el"></div>' +
				'<div class="preloader_el-6 preloader_el"></div>' +
				'<div class="preloader_el-7 preloader_el"></div>' +
				'<div class="preloader_el-8 preloader_el"></div>' +
				'<div class="preloader_el-9 preloader_el"></div>' +
				'<div class="preloader_el-10 preloader_el"></div>' +
				'<div class="preloader_el-11 preloader_el"></div>' +
				'<div class="preloader_el-12 preloader_el"></div>' +
				'</div>',
			displayMode: 'beforeEl' // beforeEl - pred element, replaceEl - misto elementu
		};

		if (typeof opts !== 'undefined') {
			this.opts = $.extend({}, this.opts, opts);
		}

		this.$preloader = $(this.opts.preloaderTpl);

		_objInstances.push(this);
	};

	_ElxPreloader.prototype.start = function () {
		var _elxPreloader = this;

		if (_elxPreloader.opts.displayMode === 'beforeEl') {

			if (_elxPreloader.$el.find(_elxPreloader.$preloader).length === 0) {
				_elxPreloader.$el.prepend(_elxPreloader.$preloader);
			}

			_elxPreloader.$preloader.show();
		}

		if (_elxPreloader.opts.displayMode === 'replaceEl') {
			_elxPreloader.$el.hide();

			if (_elxPreloader.$el.find(_elxPreloader.$preloader).length === 0) {
				_elxPreloader.$el.before(_elxPreloader.$preloader);
			}
		}
	};

	_ElxPreloader.prototype.stop = function () {
		var _elxPreloader = this;

		if (_elxPreloader.opts.displayMode === 'beforeEl') {
			_elxPreloader.$preloader.hide();
			_elxPreloader.$preloader.remove();
		}

		if (_elxPreloader.opts.displayMode === 'replaceEl') {
			_elxPreloader.$el.prev(_elxPreloader.$preloader).remove();
			_elxPreloader.$el.show();
		}
	};

	_ElxPreloader.prototype.getInstance = function (el) {
		return _getExistInstance(el);
	};

	// konstruktor
	var ElxPreloader = function (el, opts) {
		var instance = _getExistInstance(el);

		if (!$.isEmptyObject(instance)) {
			return instance;
		}

		return new _ElxPreloader(el, opts);
	};

	// vlozeni objektu do objektu window aby byl pristupny odkudkoliv
	window.ElxPreloader = ElxPreloader;

}(window, document, jQuery));;
/*
 * Togle switch plugin - prepinatko doleva a doprava
 * Jaroslav Šaržík
 * */
(function ($) {

	$.fn.toggleSwitch = function (options) {

		let $componentInitEl = this,
			$componentInitElCloned = $componentInitEl.clone();

		let component_name = 'toggleSwitch', // nazev komponenty
			component_id = $componentInitEl.attr("id") || $componentInitEl.attr("name") || component_name + '_component', // id pro komponentu
			component_rootId = component_name + '_' + component_id, // id pro root komponentu
			cssClasses = {
				componentRoot: component_name,
				componentRoot_checked: component_name + '--checked',
				componentRoot_noChecked: component_name + '--nochecked',
				componentSwitch: component_name + '_switch',
				componentTrack: component_name + '_switch-track',
				componentLabel: component_name + '_label',
				componentCheckbox: component_name + '_checkbox',
				freezeValue: component_name + '_freezeValue'
			};

		// defaultni nastaveni
		let _defaultOpts = {
			labels: {
				false: '',
				true: ''
			}
		};

		// merge nastaveni
		let _opts = $.extend(_defaultOpts, options);

		// nastaveni primo na elementu pres data atribut
		if (typeof $componentInitEl.data('options') === 'object') {
			_opts = $.extend(_opts, $componentInitEl.data('options'));
		}

		const { labels, freezeValue, onClickCallback } = _opts || {};

		// aktualni stav komponenty
		let state = {
			isChecked: $componentInitEl.prop('checked'),
			isDisabled: $componentInitEl.prop('disabled')
		};

		// obal cele komponenty
		let $componentRoot = $('<div/>', {
			class: cssClasses.componentRoot + ' ' + (state.isChecked ? cssClasses.componentRoot_checked : cssClasses.componentRoot_noChecked),
			id: component_rootId
		});

		// obal prepinace
		let $switchWrapper = $('<div/>', { class: cssClasses.componentSwitch });

		function onClick() {

			if (state.isChecked) {
				$componentRoot.addClass(cssClasses.componentRoot_checked).removeClass(cssClasses.componentRoot_noChecked);
			}

			if (!state.isChecked) {
				$componentRoot.removeClass(cssClasses.componentRoot_checked).addClass(cssClasses.componentRoot_noChecked);
			}
		}

		// draha pro prepinac
		function getSwitchTrack() {

			const classes = [cssClasses.componentTrack];

			// pokud ma byt nejaka hodnota fixnuta dopln css tridu
			if (state.isDisabled) {
				classes.push(cssClasses.freezeValue);
			}

			const attributes = {
				class: classes.join(" "),
				'for': component_id,
			}

			// pokud ma byt nejaka hodnota fixnuta tak nedava smysl klikani
			if (!state.isDisabled) {
				attributes.click = () => {
					
					state.isChecked = !state.isChecked;

					onClick();

					if (typeof onClickCallback === 'function') {
						onClickCallback.call(this, state);
					}
				}
			}

			return $('<label/>', attributes);
		}

		function createElementLabel(label, labelPosition, value) {
			const classes = [cssClasses.componentLabel, `${cssClasses.componentLabel}--${labelPosition}`];

			if (state.isDisabled && value !== state.isChecked) {
				classes.push(cssClasses.freezeValue);
			}

			let $label = $('<span/>', {
				class: classes.join(" "),
				text: label
			});

			return $label;
		}

		const $switchTrack = getSwitchTrack();

		$componentRoot.insertAfter($componentInitEl);
		$switchWrapper.append($componentInitElCloned.addClass(cssClasses.componentCheckbox));
		$switchWrapper.appendTo($componentRoot);
		$switchTrack.appendTo($switchWrapper);

		if (labels.false.length > 0) {
			$componentRoot.prepend(createElementLabel(labels.false, 'before', false));
		}

		if (labels.true.length > 0) {
			$componentRoot.append(createElementLabel(labels.true, 'after', true));
		}

		$componentInitEl.remove();
	};
}(jQuery));;
/*! CookieConsent version 1.1.0 | License info in static/js/bundle.min.js.LICENSE.txt */
!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=93)}([function(e,t,n){"use strict";e.exports=n(71)},function(e,t,n){"use strict";function r(){return r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},r.apply(this,arguments)}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";e.exports=n(89)},function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(19);function o(e,t){if(null==e)return{};var n,o,i=Object(r.a)(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(o=0;o<a.length;o++)n=a[o],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(i[n]=e[n])}return i}},function(e,t,n){"use strict";function r(e){var t,n,o="";if("string"===typeof e||"number"===typeof e)o+=e;else if("object"===typeof e)if(Array.isArray(e))for(t=0;t<e.length;t++)e[t]&&(n=r(e[t]))&&(o&&(o+=" "),o+=n);else for(t in e)e[t]&&(o&&(o+=" "),o+=t);return o}t.a=function(){for(var e,t,n=0,o="";n<arguments.length;)(e=arguments[n++])&&(t=r(e))&&(o&&(o+=" "),o+=t);return o}},function(e,t,n){"use strict";var r=n(1),o=n(3),i=n(0),a=n.n(i),l=(n(6),n(44)),u=n.n(l),s=n(116),c=n(115),f=n(114),d=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return function(n){var i=t.defaultTheme,l=t.withTheme,d=void 0!==l&&l,p=t.name,h=Object(o.a)(t,["defaultTheme","withTheme","name"]);var m=p,y=Object(s.a)(e,Object(r.a)({defaultTheme:i,Component:n,name:p||n.displayName,classNamePrefix:m},h)),g=a.a.forwardRef((function(e,t){e.classes;var l,u=e.innerRef,s=Object(o.a)(e,["classes","innerRef"]),h=y(Object(r.a)({},n.defaultProps,e)),m=s;return("string"===typeof p||d)&&(l=Object(f.a)()||i,p&&(m=Object(c.a)({theme:l,name:p,props:s})),d&&!m.theme&&(m.theme=l)),a.a.createElement(n,Object(r.a)({ref:u||t,classes:h},m))}));return u()(g,n),g}},p=n(20);t.a=function(e,t){return d(e,Object(r.a)({defaultTheme:p.a},t))}},function(e,t,n){e.exports=n(75)()},function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(63);function o(e){if("string"!==typeof e)throw new Error(Object(r.a)(7));return e.charAt(0).toUpperCase()+e.slice(1)}},,function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var r=n(0),o=n(21);function i(e,t){return r.useMemo((function(){return null==e&&null==t?null:function(n){Object(o.a)(e,n),Object(o.a)(t,n)}}),[e,t])}},function(e,t,n){"use strict";!function e(){if("undefined"!==typeof __REACT_DEVTOOLS_GLOBAL_HOOK__&&"function"===typeof __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE)try{__REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE(e)}catch(t){console.error(t)}}(),e.exports=n(72)},function(e,t,n){"use strict";n.d(t,"c",(function(){return l})),n.d(t,"a",(function(){return s})),n.d(t,"b",(function(){return c})),n.d(t,"d",(function(){return f}));var r=n(63);function o(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1;return Math.min(Math.max(t,e),n)}function i(e){if(e.type)return e;if("#"===e.charAt(0))return i(function(e){e=e.substr(1);var t=new RegExp(".{1,".concat(e.length>=6?2:1,"}"),"g"),n=e.match(t);return n&&1===n[0].length&&(n=n.map((function(e){return e+e}))),n?"rgb".concat(4===n.length?"a":"","(").concat(n.map((function(e,t){return t<3?parseInt(e,16):Math.round(parseInt(e,16)/255*1e3)/1e3})).join(", "),")"):""}(e));var t=e.indexOf("("),n=e.substring(0,t);if(-1===["rgb","rgba","hsl","hsla"].indexOf(n))throw new Error(Object(r.a)(3,e));var o=e.substring(t+1,e.length-1).split(",");return{type:n,values:o=o.map((function(e){return parseFloat(e)}))}}function a(e){var t=e.type,n=e.values;return-1!==t.indexOf("rgb")?n=n.map((function(e,t){return t<3?parseInt(e,10):e})):-1!==t.indexOf("hsl")&&(n[1]="".concat(n[1],"%"),n[2]="".concat(n[2],"%")),"".concat(t,"(").concat(n.join(", "),")")}function l(e,t){var n=u(e),r=u(t);return(Math.max(n,r)+.05)/(Math.min(n,r)+.05)}function u(e){var t="hsl"===(e=i(e)).type?i(function(e){var t=(e=i(e)).values,n=t[0],r=t[1]/100,o=t[2]/100,l=r*Math.min(o,1-o),u=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:(e+n/30)%12;return o-l*Math.max(Math.min(t-3,9-t,1),-1)},s="rgb",c=[Math.round(255*u(0)),Math.round(255*u(8)),Math.round(255*u(4))];return"hsla"===e.type&&(s+="a",c.push(t[3])),a({type:s,values:c})}(e)).values:e.values;return t=t.map((function(e){return(e/=255)<=.03928?e/12.92:Math.pow((e+.055)/1.055,2.4)})),Number((.2126*t[0]+.7152*t[1]+.0722*t[2]).toFixed(3))}function s(e,t){return e=i(e),t=o(t),"rgb"!==e.type&&"hsl"!==e.type||(e.type+="a"),e.values[3]=t,a(e)}function c(e,t){if(e=i(e),t=o(t),-1!==e.type.indexOf("hsl"))e.values[2]*=1-t;else if(-1!==e.type.indexOf("rgb"))for(var n=0;n<3;n+=1)e.values[n]*=1-t;return a(e)}function f(e,t){if(e=i(e),t=o(t),-1!==e.type.indexOf("hsl"))e.values[2]+=(100-e.values[2])*t;else if(-1!==e.type.indexOf("rgb"))for(var n=0;n<3;n+=1)e.values[n]+=(255-e.values[n])*t;return a(e)}},function(e,t,n){"use strict";n.d(t,"b",(function(){return i}));var r=n(3),o={easeInOut:"cubic-bezier(0.4, 0, 0.2, 1)",easeOut:"cubic-bezier(0.0, 0, 0.2, 1)",easeIn:"cubic-bezier(0.4, 0, 1, 1)",sharp:"cubic-bezier(0.4, 0, 0.6, 1)"},i={shortest:150,shorter:200,short:250,standard:300,complex:375,enteringScreen:225,leavingScreen:195};function a(e){return"".concat(Math.round(e),"ms")}t.a={easing:o,duration:i,create:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:["all"],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.duration,l=void 0===n?i.standard:n,u=t.easing,s=void 0===u?o.easeInOut:u,c=t.delay,f=void 0===c?0:c;Object(r.a)(t,["duration","easing","delay"]);return(Array.isArray(e)?e:[e]).map((function(e){return"".concat(e," ").concat("string"===typeof l?l:a(l)," ").concat(s," ").concat("string"===typeof f?f:a(f))})).join(",")},getAutoHeightDuration:function(e){if(!e)return 0;var t=e/36;return Math.round(10*(4+15*Math.pow(t,.25)+t/5))}}},function(e,t,n){"use strict";function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var r=n(0),o="undefined"!==typeof window?r.useLayoutEffect:r.useEffect;function i(e){var t=r.useRef(e);return o((function(){t.current=e})),r.useCallback((function(){return t.current.apply(void 0,arguments)}),[])}},function(e,t,n){"use strict";function r(e){return e&&e.ownerDocument||document}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var r=n(33);var o=n(39);function i(e){return function(e){if(Array.isArray(e))return Object(r.a)(e)}(e)||function(e){if("undefined"!==typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||Object(o.a)(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},function(e,t,n){"use strict";var r=n(94);t.a=function(e,t){return t?Object(r.a)(e,t,{clone:!1}):e}},function(e,t,n){"use strict";function r(e,t){return function(){return null}}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";function r(e,t){if(null==e)return{};var n,r,o={},i=Object.keys(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";var r=n(62),o=Object(r.a)();t.a=o},function(e,t,n){"use strict";function r(e,t){"function"===typeof e?e(t):e&&(e.current=t)}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(39);function o(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=n){var r,o,i=[],a=!0,l=!1;try{for(n=n.call(e);!(a=(r=n.next()).done)&&(i.push(r.value),!t||i.length!==t);a=!0);}catch(u){l=!0,o=u}finally{try{a||null==n.return||n.return()}finally{if(l)throw o}}return i}}(e,t)||Object(r.a)(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},function(e,t,n){"use strict";function r(e,t){return r=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},r(e,t)}function o(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,r(e,t)}n.d(t,"a",(function(){return o}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return h}));var r=n(0),o=n(10),i=!0,a=!1,l=null,u={text:!0,search:!0,url:!0,tel:!0,email:!0,password:!0,number:!0,date:!0,month:!0,week:!0,time:!0,datetime:!0,"datetime-local":!0};function s(e){e.metaKey||e.altKey||e.ctrlKey||(i=!0)}function c(){i=!1}function f(){"hidden"===this.visibilityState&&a&&(i=!0)}function d(e){var t=e.target;try{return t.matches(":focus-visible")}catch(n){}return i||function(e){var t=e.type,n=e.tagName;return!("INPUT"!==n||!u[t]||e.readOnly)||"TEXTAREA"===n&&!e.readOnly||!!e.isContentEditable}(t)}function p(){a=!0,window.clearTimeout(l),l=window.setTimeout((function(){a=!1}),100)}function h(){return{isFocusVisible:d,onBlurVisible:p,ref:r.useCallback((function(e){var t,n=o.findDOMNode(e);null!=n&&((t=n.ownerDocument).addEventListener("keydown",s,!0),t.addEventListener("mousedown",c,!0),t.addEventListener("pointerdown",c,!0),t.addEventListener("touchstart",c,!0),t.addEventListener("visibilitychange",f,!0))}),[])}}},function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function o(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),e}n.d(t,"a",(function(){return o}))},function(e,t,n){"use strict";t.parse=function(e,t){if("string"!==typeof e)throw new TypeError("argument str must be a string");for(var n={},o=t||{},a=e.split(i),u=o.decode||r,s=0;s<a.length;s++){var c=a[s],f=c.indexOf("=");if(!(f<0)){var d=c.substr(0,f).trim(),p=c.substr(++f,c.length).trim();'"'==p[0]&&(p=p.slice(1,-1)),void 0==n[d]&&(n[d]=l(p,u))}}return n},t.serialize=function(e,t,n){var r=n||{},i=r.encode||o;if("function"!==typeof i)throw new TypeError("option encode is invalid");if(!a.test(e))throw new TypeError("argument name is invalid");var l=i(t);if(l&&!a.test(l))throw new TypeError("argument val is invalid");var u=e+"="+l;if(null!=r.maxAge){var s=r.maxAge-0;if(isNaN(s)||!isFinite(s))throw new TypeError("option maxAge is invalid");u+="; Max-Age="+Math.floor(s)}if(r.domain){if(!a.test(r.domain))throw new TypeError("option domain is invalid");u+="; Domain="+r.domain}if(r.path){if(!a.test(r.path))throw new TypeError("option path is invalid");u+="; Path="+r.path}if(r.expires){if("function"!==typeof r.expires.toUTCString)throw new TypeError("option expires is invalid");u+="; Expires="+r.expires.toUTCString()}r.httpOnly&&(u+="; HttpOnly");r.secure&&(u+="; Secure");if(r.sameSite){switch("string"===typeof r.sameSite?r.sameSite.toLowerCase():r.sameSite){case!0:u+="; SameSite=Strict";break;case"lax":u+="; SameSite=Lax";break;case"strict":u+="; SameSite=Strict";break;case"none":u+="; SameSite=None";break;default:throw new TypeError("option sameSite is invalid")}}return u};var r=decodeURIComponent,o=encodeURIComponent,i=/; */,a=/^[\u0009\u0020-\u007e\u0080-\u00ff]+$/;function l(e,t){try{return t(e)}catch(n){return e}}},function(e,t,n){var r=n(77),o=n(53),i=n(84),a={lowerCaseAttributeNames:!1};function l(e,t){if("string"!==typeof e)throw new TypeError("First argument must be a string");return""===e?[]:r(i(e,(t=t||{}).htmlparser2||a),t)}l.domToReact=r,l.htmlToDOM=i,l.attributesToProps=o,l.Element=n(88).Element,e.exports=l,e.exports.default=l},,,,function(e,t,n){"use strict";function r(e){return r="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},r(e)}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";function r(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return t.reduce((function(e,t){return null==t?e:function(){for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];e.apply(this,r),t.apply(this,r)}}),(function(){}))}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";function r(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";function r(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}n.d(t,"a",(function(){return r}))},,function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(0);function o(e){var t=e.controlled,n=e.default,o=(e.name,e.state,r.useRef(void 0!==t).current),i=r.useState(n),a=i[0],l=i[1];return[o?t:a,r.useCallback((function(e){o||l(e)}),[])]}},function(e,t,n){"use strict";function r(e){var t,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:166;function r(){for(var r=arguments.length,o=new Array(r),i=0;i<r;i++)o[i]=arguments[i];var a=this,l=function(){e.apply(a,o)};clearTimeout(t),t=setTimeout(l,n)}return r.clear=function(){clearTimeout(t)},r}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(15);function o(e){return Object(r.a)(e).defaultView||window}},function(e,t,n){"use strict";n.d(t,"a",(function(){return o}));var r=n(33);function o(e,t){if(e){if("string"===typeof e)return Object(r.a)(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Object(r.a)(e,t):void 0}}},function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));n(16),n(1);var r=n(31),o=(n(6),n(17),{xs:0,sm:600,md:960,lg:1280,xl:1920}),i={keys:["xs","sm","md","lg","xl"],up:function(e){return"@media (min-width:".concat(o[e],"px)")}};function a(e,t,n){if(Array.isArray(t)){var o=e.theme.breakpoints||i;return t.reduce((function(e,r,i){return e[o.up(o.keys[i])]=n(t[i]),e}),{})}if("object"===Object(r.a)(t)){var a=e.theme.breakpoints||i;return Object.keys(t).reduce((function(e,r){return e[a.up(r)]=n(t[r]),e}),{})}return n(t)}},function(e,t,n){"use strict";t.a={mobileStepper:1e3,speedDial:1050,appBar:1100,drawer:1200,modal:1300,snackbar:1400,tooltip:1500}},function(e,t,n){"use strict";var r=n(0),o=n.n(r).a.createContext(null);t.a=o},function(e,t,n){"use strict";var r="function"===typeof Symbol&&Symbol.for;t.a=r?Symbol.for("mui.nested"):"__THEME_NESTED__"},function(e,t,n){"use strict";var r=n(90),o={childContextTypes:!0,contextType:!0,contextTypes:!0,defaultProps:!0,displayName:!0,getDefaultProps:!0,getDerivedStateFromError:!0,getDerivedStateFromProps:!0,mixins:!0,propTypes:!0,type:!0},i={name:!0,length:!0,prototype:!0,caller:!0,callee:!0,arguments:!0,arity:!0},a={$$typeof:!0,compare:!0,defaultProps:!0,displayName:!0,propTypes:!0,type:!0},l={};function u(e){return r.isMemo(e)?a:l[e.$$typeof]||o}l[r.ForwardRef]={$$typeof:!0,render:!0,defaultProps:!0,displayName:!0,propTypes:!0},l[r.Memo]=a;var s=Object.defineProperty,c=Object.getOwnPropertyNames,f=Object.getOwnPropertySymbols,d=Object.getOwnPropertyDescriptor,p=Object.getPrototypeOf,h=Object.prototype;e.exports=function e(t,n,r){if("string"!==typeof n){if(h){var o=p(n);o&&o!==h&&e(t,o,r)}var a=c(n);f&&(a=a.concat(f(n)));for(var l=u(t),m=u(n),y=0;y<a.length;++y){var g=a[y];if(!i[g]&&(!r||!r[g])&&(!m||!m[g])&&(!l||!l[g])){var v=d(n,g);try{s(t,g,v)}catch(b){}}}}return t}},function(e,t,n){"use strict";var r=n(57),o=n(58);Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=o(n(0)),a=(0,r(n(59)).default)(i.createElement("path",{d:"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"}),"Close");t.default=a},,,function(e,t,n){"use strict";var r=Object.getOwnPropertySymbols,o=Object.prototype.hasOwnProperty,i=Object.prototype.propertyIsEnumerable;function a(e){if(null===e||void 0===e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var t={},n=0;n<10;n++)t["_"+String.fromCharCode(n)]=n;if("0123456789"!==Object.getOwnPropertyNames(t).map((function(e){return t[e]})).join(""))return!1;var r={};return"abcdefghijklmnopqrst".split("").forEach((function(e){r[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},r)).join("")}catch(o){return!1}}()?Object.assign:function(e,t){for(var n,l,u=a(e),s=1;s<arguments.length;s++){for(var c in n=Object(arguments[s]))o.call(n,c)&&(u[c]=n[c]);if(r){l=r(n);for(var f=0;f<l.length;f++)i.call(n,l[f])&&(u[l[f]]=n[l[f]])}}return u}},function(e,t,n){"use strict";function r(e){return function(){return null}}n.d(t,"a",(function(){return r}))},,,,function(e,t,n){var r=n(78),o=n(54);e.exports=function(e){var t,n,i,a,l;e=e||{};var u={};for(t in e)if(i=e[t],r.isCustomAttribute(t))u[t]=i;else if(n=t.toLowerCase(),a=r.possibleStandardNames[n])switch(u[a]=i,(l=r.getPropertyInfo(a))&&l.type){case r.BOOLEAN:u[a]=!0;break;case r.OVERLOADED_BOOLEAN:""===i&&(u[a]=!0)}else o.PRESERVE_CUSTOM_ATTRIBUTES&&(u[t]=i);return o.setStyleProp(e.style,u),u}},function(e,t,n){var r=n(0),o=n(80).default;var i={reactCompat:!0};var a=r.version.split(".")[0]>=16;e.exports={PRESERVE_CUSTOM_ATTRIBUTES:a,invertObject:function(e,t){if(!e||"object"!==typeof e)throw new TypeError("First argument must be an object");var n,r,o="function"===typeof t,i={},a={};for(n in e)r=e[n],o&&(i=t(n,r))&&2===i.length?a[i[0]]=i[1]:"string"===typeof r&&(a[r]=n);return a},isCustomComponent:function(e,t){if(-1===e.indexOf("-"))return t&&"string"===typeof t.is;switch(e){case"annotation-xml":case"color-profile":case"font-face":case"font-face-src":case"font-face-uri":case"font-face-format":case"font-face-name":case"missing-glyph":return!1;default:return!0}},setStyleProp:function(e,t){if(null!==e&&void 0!==e)try{t.style=o(e,i)}catch(n){t.style={}}}}},function(e,t,n){for(var r,o=n(86),i=n(87),a=o.CASE_SENSITIVE_TAG_NAMES,l=i.Comment,u=i.Element,s=i.ProcessingInstruction,c=i.Text,f={},d=0,p=a.length;d<p;d++)r=a[d],f[r.toLowerCase()]=r;function h(e){for(var t,n={},r=0,o=e.length;r<o;r++)n[(t=e[r]).name]=t.value;return n}function m(e){var t=function(e){return f[e]}(e=e.toLowerCase());return t||e}e.exports={formatAttributes:h,formatDOM:function e(t,n,r){n=n||null;for(var o=[],i=0,a=t.length;i<a;i++){var f,d=t[i];switch(d.nodeType){case 1:(f=new u(m(d.nodeName),h(d.attributes))).children=e(d.childNodes,f);break;case 3:f=new c(d.nodeValue);break;case 8:f=new l(d.nodeValue);break;default:continue}var p=o[i-1]||null;p&&(p.next=f),f.parent=n,f.prev=p,f.next=null,o.push(f)}return r&&((f=new s(r.substring(0,r.indexOf(" ")).toLowerCase(),r)).next=o[0]||null,f.parent=n,o.unshift(f),o[1]&&(o[1].prev=o[0])),o},isIE:function(){return/(MSIE |Trident\/|Edge\/)/.test(navigator.userAgent)}}},function(e,t,n){"use strict";var r;Object.defineProperty(t,"__esModule",{value:!0}),t.Doctype=t.CDATA=t.Tag=t.Style=t.Script=t.Comment=t.Directive=t.Text=t.Root=t.isTag=t.ElementType=void 0,function(e){e.Root="root",e.Text="text",e.Directive="directive",e.Comment="comment",e.Script="script",e.Style="style",e.Tag="tag",e.CDATA="cdata",e.Doctype="doctype"}(r=t.ElementType||(t.ElementType={})),t.isTag=function(e){return e.type===r.Tag||e.type===r.Script||e.type===r.Style},t.Root=r.Root,t.Text=r.Text,t.Directive=r.Directive,t.Comment=r.Comment,t.Script=r.Script,t.Style=r.Style,t.Tag=r.Tag,t.CDATA=r.CDATA,t.Doctype=r.Doctype},function(e,t){e.exports=function(e){return e&&e.__esModule?e:{default:e}},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,n){var r=n(92).default;function o(e){if("function"!==typeof WeakMap)return null;var t=new WeakMap,n=new WeakMap;return(o=function(e){return e?n:t})(e)}e.exports=function(e,t){if(!t&&e&&e.__esModule)return e;if(null===e||"object"!==r(e)&&"function"!==typeof e)return{default:e};var n=o(t);if(n&&n.has(e))return n.get(e);var i={},a=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var l in e)if("default"!==l&&Object.prototype.hasOwnProperty.call(e,l)){var u=a?Object.getOwnPropertyDescriptor(e,l):null;u&&(u.get||u.set)?Object.defineProperty(i,l,u):i[l]=e[l]}return i.default=e,n&&n.set(e,i),i},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"default",{enumerable:!0,get:function(){return r.createSvgIcon}});var r=n(60)},function(e,t,n){"use strict";n.r(t),n.d(t,"capitalize",(function(){return r.a})),n.d(t,"createChainedFunction",(function(){return o.a})),n.d(t,"createSvgIcon",(function(){return p})),n.d(t,"debounce",(function(){return h.a})),n.d(t,"deprecatedPropType",(function(){return m.a})),n.d(t,"isMuiElement",(function(){return y})),n.d(t,"ownerDocument",(function(){return g.a})),n.d(t,"ownerWindow",(function(){return v.a})),n.d(t,"requirePropFactory",(function(){return b.a})),n.d(t,"setRef",(function(){return x.a})),n.d(t,"unsupportedProp",(function(){return k})),n.d(t,"useControlled",(function(){return w.a})),n.d(t,"useEventCallback",(function(){return S.a})),n.d(t,"useForkRef",(function(){return E.a})),n.d(t,"unstable_useId",(function(){return O})),n.d(t,"useIsFocusVisible",(function(){return C.a}));var r=n(7),o=n(32),i=n(1),a=n(0),l=n.n(a),u=n(3),s=(n(6),n(4)),c=n(5),f=a.forwardRef((function(e,t){var n=e.children,o=e.classes,l=e.className,c=e.color,f=void 0===c?"inherit":c,d=e.component,p=void 0===d?"svg":d,h=e.fontSize,m=void 0===h?"medium":h,y=e.htmlColor,g=e.titleAccess,v=e.viewBox,b=void 0===v?"0 0 24 24":v,x=Object(u.a)(e,["children","classes","className","color","component","fontSize","htmlColor","titleAccess","viewBox"]);return a.createElement(p,Object(i.a)({className:Object(s.a)(o.root,l,"inherit"!==f&&o["color".concat(Object(r.a)(f))],"default"!==m&&"medium"!==m&&o["fontSize".concat(Object(r.a)(m))]),focusable:"false",viewBox:b,color:y,"aria-hidden":!g||void 0,role:g?"img":void 0,ref:t},x),n,g?a.createElement("title",null,g):null)}));f.muiName="SvgIcon";var d=Object(c.a)((function(e){return{root:{userSelect:"none",width:"1em",height:"1em",display:"inline-block",fill:"currentColor",flexShrink:0,fontSize:e.typography.pxToRem(24),transition:e.transitions.create("fill",{duration:e.transitions.duration.shorter})},colorPrimary:{color:e.palette.primary.main},colorSecondary:{color:e.palette.secondary.main},colorAction:{color:e.palette.action.active},colorError:{color:e.palette.error.main},colorDisabled:{color:e.palette.action.disabled},fontSizeInherit:{fontSize:"inherit"},fontSizeSmall:{fontSize:e.typography.pxToRem(20)},fontSizeLarge:{fontSize:e.typography.pxToRem(35)}}}),{name:"MuiSvgIcon"})(f);function p(e,t){var n=function(t,n){return l.a.createElement(d,Object(i.a)({ref:n},t),e)};return n.muiName=d.muiName,l.a.memo(l.a.forwardRef(n))}var h=n(37),m=n(18);function y(e,t){return a.isValidElement(e)&&-1!==t.indexOf(e.type.muiName)}var g=n(15),v=n(38),b=n(49),x=n(21);function k(e,t,n,r,o){return null}var w=n(36),S=n(14),E=n(9);function O(e){var t=a.useState(e),n=t[0],r=t[1],o=e||n;return a.useEffect((function(){null==n&&r("mui-".concat(Math.round(1e5*Math.random())))}),[n]),o}var C=n(24)},function(e,t,n){"use strict";var r=n(57),o=n(58);Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=o(n(0)),a=(0,r(n(59)).default)(i.createElement("path",{d:"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"}),"KeyboardArrowDownOutlined");t.default=a},function(e,t,n){"use strict";var r=n(13),o=n(3),i=n(94),a=n(1),l=["xs","sm","md","lg","xl"];function u(e){var t=e.values,n=void 0===t?{xs:0,sm:600,md:960,lg:1280,xl:1920}:t,r=e.unit,i=void 0===r?"px":r,u=e.step,s=void 0===u?5:u,c=Object(o.a)(e,["values","unit","step"]);function f(e){var t="number"===typeof n[e]?n[e]:e;return"@media (min-width:".concat(t).concat(i,")")}function d(e,t){var r=l.indexOf(t);return r===l.length-1?f(e):"@media (min-width:".concat("number"===typeof n[e]?n[e]:e).concat(i,") and ")+"(max-width:".concat((-1!==r&&"number"===typeof n[l[r+1]]?n[l[r+1]]:t)-s/100).concat(i,")")}return Object(a.a)({keys:l,values:n,up:f,down:function(e){var t=l.indexOf(e)+1,r=n[l[t]];return t===l.length?f("xs"):"@media (max-width:".concat(("number"===typeof r&&t>0?r:e)-s/100).concat(i,")")},between:d,only:function(e){return d(e,e)},width:function(e){return n[e]}},c)}function s(e,t,n){var o;return Object(a.a)({gutters:function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return console.warn(["Material-UI: theme.mixins.gutters() is deprecated.","You can use the source of the mixin directly:","\n      paddingLeft: theme.spacing(2),\n      paddingRight: theme.spacing(2),\n      [theme.breakpoints.up('sm')]: {\n        paddingLeft: theme.spacing(3),\n        paddingRight: theme.spacing(3),\n      },\n      "].join("\n")),Object(a.a)({paddingLeft:t(2),paddingRight:t(2)},n,Object(r.a)({},e.up("sm"),Object(a.a)({paddingLeft:t(3),paddingRight:t(3)},n[e.up("sm")])))},toolbar:(o={minHeight:56},Object(r.a)(o,"".concat(e.up("xs")," and (orientation: landscape)"),{minHeight:48}),Object(r.a)(o,e.up("sm"),{minHeight:64}),o)},n)}var c=n(63),f={black:"#000",white:"#fff"},d={50:"#fafafa",100:"#f5f5f5",200:"#eeeeee",300:"#e0e0e0",400:"#bdbdbd",500:"#9e9e9e",600:"#757575",700:"#616161",800:"#424242",900:"#212121",A100:"#d5d5d5",A200:"#aaaaaa",A400:"#303030",A700:"#616161"},p={50:"#e8eaf6",100:"#c5cae9",200:"#9fa8da",300:"#7986cb",400:"#5c6bc0",500:"#3f51b5",600:"#3949ab",700:"#303f9f",800:"#283593",900:"#1a237e",A100:"#8c9eff",A200:"#536dfe",A400:"#3d5afe",A700:"#304ffe"},h={50:"#fce4ec",100:"#f8bbd0",200:"#f48fb1",300:"#f06292",400:"#ec407a",500:"#e91e63",600:"#d81b60",700:"#c2185b",800:"#ad1457",900:"#880e4f",A100:"#ff80ab",A200:"#ff4081",A400:"#f50057",A700:"#c51162"},m={50:"#ffebee",100:"#ffcdd2",200:"#ef9a9a",300:"#e57373",400:"#ef5350",500:"#f44336",600:"#e53935",700:"#d32f2f",800:"#c62828",900:"#b71c1c",A100:"#ff8a80",A200:"#ff5252",A400:"#ff1744",A700:"#d50000"},y={50:"#fff3e0",100:"#ffe0b2",200:"#ffcc80",300:"#ffb74d",400:"#ffa726",500:"#ff9800",600:"#fb8c00",700:"#f57c00",800:"#ef6c00",900:"#e65100",A100:"#ffd180",A200:"#ffab40",A400:"#ff9100",A700:"#ff6d00"},g={50:"#e3f2fd",100:"#bbdefb",200:"#90caf9",300:"#64b5f6",400:"#42a5f5",500:"#2196f3",600:"#1e88e5",700:"#1976d2",800:"#1565c0",900:"#0d47a1",A100:"#82b1ff",A200:"#448aff",A400:"#2979ff",A700:"#2962ff"},v={50:"#e8f5e9",100:"#c8e6c9",200:"#a5d6a7",300:"#81c784",400:"#66bb6a",500:"#4caf50",600:"#43a047",700:"#388e3c",800:"#2e7d32",900:"#1b5e20",A100:"#b9f6ca",A200:"#69f0ae",A400:"#00e676",A700:"#00c853"},b=n(11),x={text:{primary:"rgba(0, 0, 0, 0.87)",secondary:"rgba(0, 0, 0, 0.54)",disabled:"rgba(0, 0, 0, 0.38)",hint:"rgba(0, 0, 0, 0.38)"},divider:"rgba(0, 0, 0, 0.12)",background:{paper:f.white,default:d[50]},action:{active:"rgba(0, 0, 0, 0.54)",hover:"rgba(0, 0, 0, 0.04)",hoverOpacity:.04,selected:"rgba(0, 0, 0, 0.08)",selectedOpacity:.08,disabled:"rgba(0, 0, 0, 0.26)",disabledBackground:"rgba(0, 0, 0, 0.12)",disabledOpacity:.38,focus:"rgba(0, 0, 0, 0.12)",focusOpacity:.12,activatedOpacity:.12}},k={text:{primary:f.white,secondary:"rgba(255, 255, 255, 0.7)",disabled:"rgba(255, 255, 255, 0.5)",hint:"rgba(255, 255, 255, 0.5)",icon:"rgba(255, 255, 255, 0.5)"},divider:"rgba(255, 255, 255, 0.12)",background:{paper:d[800],default:"#303030"},action:{active:f.white,hover:"rgba(255, 255, 255, 0.08)",hoverOpacity:.08,selected:"rgba(255, 255, 255, 0.16)",selectedOpacity:.16,disabled:"rgba(255, 255, 255, 0.3)",disabledBackground:"rgba(255, 255, 255, 0.12)",disabledOpacity:.38,focus:"rgba(255, 255, 255, 0.12)",focusOpacity:.12,activatedOpacity:.24}};function w(e,t,n,r){var o=r.light||r,i=r.dark||1.5*r;e[t]||(e.hasOwnProperty(n)?e[t]=e[n]:"light"===t?e.light=Object(b.d)(e.main,o):"dark"===t&&(e.dark=Object(b.b)(e.main,i)))}function S(e){var t=e.primary,n=void 0===t?{light:p[300],main:p[500],dark:p[700]}:t,r=e.secondary,l=void 0===r?{light:h.A200,main:h.A400,dark:h.A700}:r,u=e.error,s=void 0===u?{light:m[300],main:m[500],dark:m[700]}:u,S=e.warning,E=void 0===S?{light:y[300],main:y[500],dark:y[700]}:S,O=e.info,C=void 0===O?{light:g[300],main:g[500],dark:g[700]}:O,j=e.success,T=void 0===j?{light:v[300],main:v[500],dark:v[700]}:j,P=e.type,R=void 0===P?"light":P,N=e.contrastThreshold,_=void 0===N?3:N,z=e.tonalOffset,M=void 0===z?.2:z,A=Object(o.a)(e,["primary","secondary","error","warning","info","success","type","contrastThreshold","tonalOffset"]);function I(e){return Object(b.c)(e,k.text.primary)>=_?k.text.primary:x.text.primary}var D=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:500,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:300,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:700;if(!(e=Object(a.a)({},e)).main&&e[t]&&(e.main=e[t]),!e.main)throw new Error(Object(c.a)(4,t));if("string"!==typeof e.main)throw new Error(Object(c.a)(5,JSON.stringify(e.main)));return w(e,"light",n,M),w(e,"dark",r,M),e.contrastText||(e.contrastText=I(e.main)),e},L={dark:k,light:x};return Object(i.a)(Object(a.a)({common:f,type:R,primary:D(n),secondary:D(l,"A400","A200","A700"),error:D(s),warning:D(E),info:D(C),success:D(T),grey:d,contrastThreshold:_,getContrastText:I,augmentColor:D,tonalOffset:M},L[R]),A)}function E(e){return Math.round(1e5*e)/1e5}function O(e){return E(e)}var C={textTransform:"uppercase"},j='"Roboto", "Helvetica", "Arial", sans-serif';function T(e,t){var n="function"===typeof t?t(e):t,r=n.fontFamily,l=void 0===r?j:r,u=n.fontSize,s=void 0===u?14:u,c=n.fontWeightLight,f=void 0===c?300:c,d=n.fontWeightRegular,p=void 0===d?400:d,h=n.fontWeightMedium,m=void 0===h?500:h,y=n.fontWeightBold,g=void 0===y?700:y,v=n.htmlFontSize,b=void 0===v?16:v,x=n.allVariants,k=n.pxToRem,w=Object(o.a)(n,["fontFamily","fontSize","fontWeightLight","fontWeightRegular","fontWeightMedium","fontWeightBold","htmlFontSize","allVariants","pxToRem"]);var S=s/14,T=k||function(e){return"".concat(e/b*S,"rem")},P=function(e,t,n,r,o){return Object(a.a)({fontFamily:l,fontWeight:e,fontSize:T(t),lineHeight:n},l===j?{letterSpacing:"".concat(E(r/t),"em")}:{},o,x)},R={h1:P(f,96,1.167,-1.5),h2:P(f,60,1.2,-.5),h3:P(p,48,1.167,0),h4:P(p,34,1.235,.25),h5:P(p,24,1.334,0),h6:P(m,20,1.6,.15),subtitle1:P(p,16,1.75,.15),subtitle2:P(m,14,1.57,.1),body1:P(p,16,1.5,.15),body2:P(p,14,1.43,.15),button:P(m,14,1.75,.4,C),caption:P(p,12,1.66,.4),overline:P(p,12,2.66,1,C)};return Object(i.a)(Object(a.a)({htmlFontSize:b,pxToRem:T,round:O,fontFamily:l,fontSize:s,fontWeightLight:f,fontWeightRegular:p,fontWeightMedium:m,fontWeightBold:g},R),w,{clone:!1})}function P(){return["".concat(arguments.length<=0?void 0:arguments[0],"px ").concat(arguments.length<=1?void 0:arguments[1],"px ").concat(arguments.length<=2?void 0:arguments[2],"px ").concat(arguments.length<=3?void 0:arguments[3],"px rgba(0,0,0,").concat(.2,")"),"".concat(arguments.length<=4?void 0:arguments[4],"px ").concat(arguments.length<=5?void 0:arguments[5],"px ").concat(arguments.length<=6?void 0:arguments[6],"px ").concat(arguments.length<=7?void 0:arguments[7],"px rgba(0,0,0,").concat(.14,")"),"".concat(arguments.length<=8?void 0:arguments[8],"px ").concat(arguments.length<=9?void 0:arguments[9],"px ").concat(arguments.length<=10?void 0:arguments[10],"px ").concat(arguments.length<=11?void 0:arguments[11],"px rgba(0,0,0,").concat(.12,")")].join(",")}var R=["none",P(0,2,1,-1,0,1,1,0,0,1,3,0),P(0,3,1,-2,0,2,2,0,0,1,5,0),P(0,3,3,-2,0,3,4,0,0,1,8,0),P(0,2,4,-1,0,4,5,0,0,1,10,0),P(0,3,5,-1,0,5,8,0,0,1,14,0),P(0,3,5,-1,0,6,10,0,0,1,18,0),P(0,4,5,-2,0,7,10,1,0,2,16,1),P(0,5,5,-3,0,8,10,1,0,3,14,2),P(0,5,6,-3,0,9,12,1,0,3,16,2),P(0,6,6,-3,0,10,14,1,0,4,18,3),P(0,6,7,-4,0,11,15,1,0,4,20,3),P(0,7,8,-4,0,12,17,2,0,5,22,4),P(0,7,8,-4,0,13,19,2,0,5,24,4),P(0,7,9,-4,0,14,21,2,0,5,26,4),P(0,8,9,-5,0,15,22,2,0,6,28,5),P(0,8,10,-5,0,16,24,2,0,6,30,5),P(0,8,11,-5,0,17,26,2,0,6,32,5),P(0,9,11,-5,0,18,28,2,0,7,34,6),P(0,9,12,-6,0,19,29,2,0,7,36,6),P(0,10,13,-6,0,20,31,3,0,8,38,7),P(0,10,13,-6,0,21,33,3,0,8,40,7),P(0,10,14,-6,0,22,35,3,0,8,42,7),P(0,11,14,-7,0,23,36,3,0,9,44,8),P(0,11,15,-7,0,24,38,3,0,9,46,8)],N={borderRadius:4},_=n(117);function z(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:8;if(e.mui)return e;var t=Object(_.a)({spacing:e}),n=function(){for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return 0===n.length?t(1):1===n.length?t(n[0]):n.map((function(e){if("string"===typeof e)return e;var n=t(e);return"number"===typeof n?"".concat(n,"px"):n})).join(" ")};return Object.defineProperty(n,"unit",{get:function(){return e}}),n.mui=!0,n}var M=n(12),A=n(41);function I(){for(var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.breakpoints,n=void 0===t?{}:t,r=e.mixins,a=void 0===r?{}:r,l=e.palette,c=void 0===l?{}:l,f=e.spacing,d=e.typography,p=void 0===d?{}:d,h=Object(o.a)(e,["breakpoints","mixins","palette","spacing","typography"]),m=S(c),y=u(n),g=z(f),v=Object(i.a)({breakpoints:y,direction:"ltr",mixins:s(y,g,a),overrides:{},palette:m,props:{},shadows:R,typography:T(m,p),spacing:g,shape:N,transitions:M.a,zIndex:A.a},h),b=arguments.length,x=new Array(b>1?b-1:0),k=1;k<b;k++)x[k-1]=arguments[k];return v=x.reduce((function(e,t){return Object(i.a)(e,t)}),v)}t.a=I},function(e,t,n){"use strict";function r(e){for(var t="https://material-ui.com/production-error/?code="+e,n=1;n<arguments.length;n+=1)t+="&args[]="+encodeURIComponent(arguments[n]);return"Minified Material-UI error #"+e+"; visit "+t+" for the full message."}n.d(t,"a",(function(){return r}))},,,,,,,,function(e,t,n){"use strict";var r=n(48),o=60103,i=60106;t.Fragment=60107,t.StrictMode=60108,t.Profiler=60114;var a=60109,l=60110,u=60112;t.Suspense=60113;var s=60115,c=60116;if("function"===typeof Symbol&&Symbol.for){var f=Symbol.for;o=f("react.element"),i=f("react.portal"),t.Fragment=f("react.fragment"),t.StrictMode=f("react.strict_mode"),t.Profiler=f("react.profiler"),a=f("react.provider"),l=f("react.context"),u=f("react.forward_ref"),t.Suspense=f("react.suspense"),s=f("react.memo"),c=f("react.lazy")}var d="function"===typeof Symbol&&Symbol.iterator;function p(e){for(var t="https://reactjs.org/docs/error-decoder.html?invariant="+e,n=1;n<arguments.length;n++)t+="&args[]="+encodeURIComponent(arguments[n]);return"Minified React error #"+e+"; visit "+t+" for the full message or use the non-minified dev environment for full errors and additional helpful warnings."}var h={isMounted:function(){return!1},enqueueForceUpdate:function(){},enqueueReplaceState:function(){},enqueueSetState:function(){}},m={};function y(e,t,n){this.props=e,this.context=t,this.refs=m,this.updater=n||h}function g(){}function v(e,t,n){this.props=e,this.context=t,this.refs=m,this.updater=n||h}y.prototype.isReactComponent={},y.prototype.setState=function(e,t){if("object"!==typeof e&&"function"!==typeof e&&null!=e)throw Error(p(85));this.updater.enqueueSetState(this,e,t,"setState")},y.prototype.forceUpdate=function(e){this.updater.enqueueForceUpdate(this,e,"forceUpdate")},g.prototype=y.prototype;var b=v.prototype=new g;b.constructor=v,r(b,y.prototype),b.isPureReactComponent=!0;var x={current:null},k=Object.prototype.hasOwnProperty,w={key:!0,ref:!0,__self:!0,__source:!0};function S(e,t,n){var r,i={},a=null,l=null;if(null!=t)for(r in void 0!==t.ref&&(l=t.ref),void 0!==t.key&&(a=""+t.key),t)k.call(t,r)&&!w.hasOwnProperty(r)&&(i[r]=t[r]);var u=arguments.length-2;if(1===u)i.children=n;else if(1<u){for(var s=Array(u),c=0;c<u;c++)s[c]=arguments[c+2];i.children=s}if(e&&e.defaultProps)for(r in u=e.defaultProps)void 0===i[r]&&(i[r]=u[r]);return{$$typeof:o,type:e,key:a,ref:l,props:i,_owner:x.current}}function E(e){return"object"===typeof e&&null!==e&&e.$$typeof===o}var O=/\/+/g;function C(e,t){return"object"===typeof e&&null!==e&&null!=e.key?function(e){var t={"=":"=0",":":"=2"};return"$"+e.replace(/[=:]/g,(function(e){return t[e]}))}(""+e.key):t.toString(36)}function j(e,t,n,r,a){var l=typeof e;"undefined"!==l&&"boolean"!==l||(e=null);var u=!1;if(null===e)u=!0;else switch(l){case"string":case"number":u=!0;break;case"object":switch(e.$$typeof){case o:case i:u=!0}}if(u)return a=a(u=e),e=""===r?"."+C(u,0):r,Array.isArray(a)?(n="",null!=e&&(n=e.replace(O,"$&/")+"/"),j(a,t,n,"",(function(e){return e}))):null!=a&&(E(a)&&(a=function(e,t){return{$$typeof:o,type:e.type,key:t,ref:e.ref,props:e.props,_owner:e._owner}}(a,n+(!a.key||u&&u.key===a.key?"":(""+a.key).replace(O,"$&/")+"/")+e)),t.push(a)),1;if(u=0,r=""===r?".":r+":",Array.isArray(e))for(var s=0;s<e.length;s++){var c=r+C(l=e[s],s);u+=j(l,t,n,c,a)}else if(c=function(e){return null===e||"object"!==typeof e?null:"function"===typeof(e=d&&e[d]||e["@@iterator"])?e:null}(e),"function"===typeof c)for(e=c.call(e),s=0;!(l=e.next()).done;)u+=j(l=l.value,t,n,c=r+C(l,s++),a);else if("object"===l)throw t=""+e,Error(p(31,"[object Object]"===t?"object with keys {"+Object.keys(e).join(", ")+"}":t));return u}function T(e,t,n){if(null==e)return e;var r=[],o=0;return j(e,r,"","",(function(e){return t.call(n,e,o++)})),r}function P(e){if(-1===e._status){var t=e._result;t=t(),e._status=0,e._result=t,t.then((function(t){0===e._status&&(t=t.default,e._status=1,e._result=t)}),(function(t){0===e._status&&(e._status=2,e._result=t)}))}if(1===e._status)return e._result;throw e._result}var R={current:null};function N(){var e=R.current;if(null===e)throw Error(p(321));return e}var _={ReactCurrentDispatcher:R,ReactCurrentBatchConfig:{transition:0},ReactCurrentOwner:x,IsSomeRendererActing:{current:!1},assign:r};t.Children={map:T,forEach:function(e,t,n){T(e,(function(){t.apply(this,arguments)}),n)},count:function(e){var t=0;return T(e,(function(){t++})),t},toArray:function(e){return T(e,(function(e){return e}))||[]},only:function(e){if(!E(e))throw Error(p(143));return e}},t.Component=y,t.PureComponent=v,t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=_,t.cloneElement=function(e,t,n){if(null===e||void 0===e)throw Error(p(267,e));var i=r({},e.props),a=e.key,l=e.ref,u=e._owner;if(null!=t){if(void 0!==t.ref&&(l=t.ref,u=x.current),void 0!==t.key&&(a=""+t.key),e.type&&e.type.defaultProps)var s=e.type.defaultProps;for(c in t)k.call(t,c)&&!w.hasOwnProperty(c)&&(i[c]=void 0===t[c]&&void 0!==s?s[c]:t[c])}var c=arguments.length-2;if(1===c)i.children=n;else if(1<c){s=Array(c);for(var f=0;f<c;f++)s[f]=arguments[f+2];i.children=s}return{$$typeof:o,type:e.type,key:a,ref:l,props:i,_owner:u}},t.createContext=function(e,t){return void 0===t&&(t=null),(e={$$typeof:l,_calculateChangedBits:t,_currentValue:e,_currentValue2:e,_threadCount:0,Provider:null,Consumer:null}).Provider={$$typeof:a,_context:e},e.Consumer=e},t.createElement=S,t.createFactory=function(e){var t=S.bind(null,e);return t.type=e,t},t.createRef=function(){return{current:null}},t.forwardRef=function(e){return{$$typeof:u,render:e}},t.isValidElement=E,t.lazy=function(e){return{$$typeof:c,_payload:{_status:-1,_result:e},_init:P}},t.memo=function(e,t){return{$$typeof:s,type:e,compare:void 0===t?null:t}},t.useCallback=function(e,t){return N().useCallback(e,t)},t.useContext=function(e,t){return N().useContext(e,t)},t.useDebugValue=function(){},t.useEffect=function(e,t){return N().useEffect(e,t)},t.useImperativeHandle=function(e,t,n){return N().useImperativeHandle(e,t,n)},t.useLayoutEffect=function(e,t){return N().useLayoutEffect(e,t)},t.useMemo=function(e,t){return N().useMemo(e,t)},t.useReducer=function(e,t,n){return N().useReducer(e,t,n)},t.useRef=function(e){return N().useRef(e)},t.useState=function(e){return N().useState(e)},t.version="17.0.2"},function(e,t,n){"use strict";var r=n(0),o=n(48),i=n(73);function a(e){for(var t="https://reactjs.org/docs/error-decoder.html?invariant="+e,n=1;n<arguments.length;n++)t+="&args[]="+encodeURIComponent(arguments[n]);return"Minified React error #"+e+"; visit "+t+" for the full message or use the non-minified dev environment for full errors and additional helpful warnings."}if(!r)throw Error(a(227));var l=new Set,u={};function s(e,t){c(e,t),c(e+"Capture",t)}function c(e,t){for(u[e]=t,e=0;e<t.length;e++)l.add(t[e])}var f=!("undefined"===typeof window||"undefined"===typeof window.document||"undefined"===typeof window.document.createElement),d=/^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/,p=Object.prototype.hasOwnProperty,h={},m={};function y(e,t,n,r,o,i,a){this.acceptsBooleans=2===t||3===t||4===t,this.attributeName=r,this.attributeNamespace=o,this.mustUseProperty=n,this.propertyName=e,this.type=t,this.sanitizeURL=i,this.removeEmptyString=a}var g={};"children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style".split(" ").forEach((function(e){g[e]=new y(e,0,!1,e,null,!1,!1)})),[["acceptCharset","accept-charset"],["className","class"],["htmlFor","for"],["httpEquiv","http-equiv"]].forEach((function(e){var t=e[0];g[t]=new y(t,1,!1,e[1],null,!1,!1)})),["contentEditable","draggable","spellCheck","value"].forEach((function(e){g[e]=new y(e,2,!1,e.toLowerCase(),null,!1,!1)})),["autoReverse","externalResourcesRequired","focusable","preserveAlpha"].forEach((function(e){g[e]=new y(e,2,!1,e,null,!1,!1)})),"allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope".split(" ").forEach((function(e){g[e]=new y(e,3,!1,e.toLowerCase(),null,!1,!1)})),["checked","multiple","muted","selected"].forEach((function(e){g[e]=new y(e,3,!0,e,null,!1,!1)})),["capture","download"].forEach((function(e){g[e]=new y(e,4,!1,e,null,!1,!1)})),["cols","rows","size","span"].forEach((function(e){g[e]=new y(e,6,!1,e,null,!1,!1)})),["rowSpan","start"].forEach((function(e){g[e]=new y(e,5,!1,e.toLowerCase(),null,!1,!1)}));var v=/[\-:]([a-z])/g;function b(e){return e[1].toUpperCase()}function x(e,t,n,r){var o=g.hasOwnProperty(t)?g[t]:null;(null!==o?0===o.type:!r&&(2<t.length&&("o"===t[0]||"O"===t[0])&&("n"===t[1]||"N"===t[1])))||(function(e,t,n,r){if(null===t||"undefined"===typeof t||function(e,t,n,r){if(null!==n&&0===n.type)return!1;switch(typeof t){case"function":case"symbol":return!0;case"boolean":return!r&&(null!==n?!n.acceptsBooleans:"data-"!==(e=e.toLowerCase().slice(0,5))&&"aria-"!==e);default:return!1}}(e,t,n,r))return!0;if(r)return!1;if(null!==n)switch(n.type){case 3:return!t;case 4:return!1===t;case 5:return isNaN(t);case 6:return isNaN(t)||1>t}return!1}(t,n,o,r)&&(n=null),r||null===o?function(e){return!!p.call(m,e)||!p.call(h,e)&&(d.test(e)?m[e]=!0:(h[e]=!0,!1))}(t)&&(null===n?e.removeAttribute(t):e.setAttribute(t,""+n)):o.mustUseProperty?e[o.propertyName]=null===n?3!==o.type&&"":n:(t=o.attributeName,r=o.attributeNamespace,null===n?e.removeAttribute(t):(n=3===(o=o.type)||4===o&&!0===n?"":""+n,r?e.setAttributeNS(r,t,n):e.setAttribute(t,n))))}"accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height".split(" ").forEach((function(e){var t=e.replace(v,b);g[t]=new y(t,1,!1,e,null,!1,!1)})),"xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type".split(" ").forEach((function(e){var t=e.replace(v,b);g[t]=new y(t,1,!1,e,"http://www.w3.org/1999/xlink",!1,!1)})),["xml:base","xml:lang","xml:space"].forEach((function(e){var t=e.replace(v,b);g[t]=new y(t,1,!1,e,"http://www.w3.org/XML/1998/namespace",!1,!1)})),["tabIndex","crossOrigin"].forEach((function(e){g[e]=new y(e,1,!1,e.toLowerCase(),null,!1,!1)})),g.xlinkHref=new y("xlinkHref",1,!1,"xlink:href","http://www.w3.org/1999/xlink",!0,!1),["src","href","action","formAction"].forEach((function(e){g[e]=new y(e,1,!1,e.toLowerCase(),null,!0,!0)}));var k=r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED,w=60103,S=60106,E=60107,O=60108,C=60114,j=60109,T=60110,P=60112,R=60113,N=60120,_=60115,z=60116,M=60121,A=60128,I=60129,D=60130,L=60131;if("function"===typeof Symbol&&Symbol.for){var F=Symbol.for;w=F("react.element"),S=F("react.portal"),E=F("react.fragment"),O=F("react.strict_mode"),C=F("react.profiler"),j=F("react.provider"),T=F("react.context"),P=F("react.forward_ref"),R=F("react.suspense"),N=F("react.suspense_list"),_=F("react.memo"),z=F("react.lazy"),M=F("react.block"),F("react.scope"),A=F("react.opaque.id"),I=F("react.debug_trace_mode"),D=F("react.offscreen"),L=F("react.legacy_hidden")}var B,W="function"===typeof Symbol&&Symbol.iterator;function U(e){return null===e||"object"!==typeof e?null:"function"===typeof(e=W&&e[W]||e["@@iterator"])?e:null}function V(e){if(void 0===B)try{throw Error()}catch(n){var t=n.stack.trim().match(/\n( *(at )?)/);B=t&&t[1]||""}return"\n"+B+e}var $=!1;function H(e,t){if(!e||$)return"";$=!0;var n=Error.prepareStackTrace;Error.prepareStackTrace=void 0;try{if(t)if(t=function(){throw Error()},Object.defineProperty(t.prototype,"props",{set:function(){throw Error()}}),"object"===typeof Reflect&&Reflect.construct){try{Reflect.construct(t,[])}catch(u){var r=u}Reflect.construct(e,[],t)}else{try{t.call()}catch(u){r=u}e.call(t.prototype)}else{try{throw Error()}catch(u){r=u}e()}}catch(u){if(u&&r&&"string"===typeof u.stack){for(var o=u.stack.split("\n"),i=r.stack.split("\n"),a=o.length-1,l=i.length-1;1<=a&&0<=l&&o[a]!==i[l];)l--;for(;1<=a&&0<=l;a--,l--)if(o[a]!==i[l]){if(1!==a||1!==l)do{if(a--,0>--l||o[a]!==i[l])return"\n"+o[a].replace(" at new "," at ")}while(1<=a&&0<=l);break}}}finally{$=!1,Error.prepareStackTrace=n}return(e=e?e.displayName||e.name:"")?V(e):""}function K(e){switch(e.tag){case 5:return V(e.type);case 16:return V("Lazy");case 13:return V("Suspense");case 19:return V("SuspenseList");case 0:case 2:case 15:return e=H(e.type,!1);case 11:return e=H(e.type.render,!1);case 22:return e=H(e.type._render,!1);case 1:return e=H(e.type,!0);default:return""}}function q(e){if(null==e)return null;if("function"===typeof e)return e.displayName||e.name||null;if("string"===typeof e)return e;switch(e){case E:return"Fragment";case S:return"Portal";case C:return"Profiler";case O:return"StrictMode";case R:return"Suspense";case N:return"SuspenseList"}if("object"===typeof e)switch(e.$$typeof){case T:return(e.displayName||"Context")+".Consumer";case j:return(e._context.displayName||"Context")+".Provider";case P:var t=e.render;return t=t.displayName||t.name||"",e.displayName||(""!==t?"ForwardRef("+t+")":"ForwardRef");case _:return q(e.type);case M:return q(e._render);case z:t=e._payload,e=e._init;try{return q(e(t))}catch(n){}}return null}function Q(e){switch(typeof e){case"boolean":case"number":case"object":case"string":case"undefined":return e;default:return""}}function Y(e){var t=e.type;return(e=e.nodeName)&&"input"===e.toLowerCase()&&("checkbox"===t||"radio"===t)}function X(e){e._valueTracker||(e._valueTracker=function(e){var t=Y(e)?"checked":"value",n=Object.getOwnPropertyDescriptor(e.constructor.prototype,t),r=""+e[t];if(!e.hasOwnProperty(t)&&"undefined"!==typeof n&&"function"===typeof n.get&&"function"===typeof n.set){var o=n.get,i=n.set;return Object.defineProperty(e,t,{configurable:!0,get:function(){return o.call(this)},set:function(e){r=""+e,i.call(this,e)}}),Object.defineProperty(e,t,{enumerable:n.enumerable}),{getValue:function(){return r},setValue:function(e){r=""+e},stopTracking:function(){e._valueTracker=null,delete e[t]}}}}(e))}function G(e){if(!e)return!1;var t=e._valueTracker;if(!t)return!0;var n=t.getValue(),r="";return e&&(r=Y(e)?e.checked?"true":"false":e.value),(e=r)!==n&&(t.setValue(e),!0)}function J(e){if("undefined"===typeof(e=e||("undefined"!==typeof document?document:void 0)))return null;try{return e.activeElement||e.body}catch(t){return e.body}}function Z(e,t){var n=t.checked;return o({},t,{defaultChecked:void 0,defaultValue:void 0,value:void 0,checked:null!=n?n:e._wrapperState.initialChecked})}function ee(e,t){var n=null==t.defaultValue?"":t.defaultValue,r=null!=t.checked?t.checked:t.defaultChecked;n=Q(null!=t.value?t.value:n),e._wrapperState={initialChecked:r,initialValue:n,controlled:"checkbox"===t.type||"radio"===t.type?null!=t.checked:null!=t.value}}function te(e,t){null!=(t=t.checked)&&x(e,"checked",t,!1)}function ne(e,t){te(e,t);var n=Q(t.value),r=t.type;if(null!=n)"number"===r?(0===n&&""===e.value||e.value!=n)&&(e.value=""+n):e.value!==""+n&&(e.value=""+n);else if("submit"===r||"reset"===r)return void e.removeAttribute("value");t.hasOwnProperty("value")?oe(e,t.type,n):t.hasOwnProperty("defaultValue")&&oe(e,t.type,Q(t.defaultValue)),null==t.checked&&null!=t.defaultChecked&&(e.defaultChecked=!!t.defaultChecked)}function re(e,t,n){if(t.hasOwnProperty("value")||t.hasOwnProperty("defaultValue")){var r=t.type;if(!("submit"!==r&&"reset"!==r||void 0!==t.value&&null!==t.value))return;t=""+e._wrapperState.initialValue,n||t===e.value||(e.value=t),e.defaultValue=t}""!==(n=e.name)&&(e.name=""),e.defaultChecked=!!e._wrapperState.initialChecked,""!==n&&(e.name=n)}function oe(e,t,n){"number"===t&&J(e.ownerDocument)===e||(null==n?e.defaultValue=""+e._wrapperState.initialValue:e.defaultValue!==""+n&&(e.defaultValue=""+n))}function ie(e,t){return e=o({children:void 0},t),(t=function(e){var t="";return r.Children.forEach(e,(function(e){null!=e&&(t+=e)})),t}(t.children))&&(e.children=t),e}function ae(e,t,n,r){if(e=e.options,t){t={};for(var o=0;o<n.length;o++)t["$"+n[o]]=!0;for(n=0;n<e.length;n++)o=t.hasOwnProperty("$"+e[n].value),e[n].selected!==o&&(e[n].selected=o),o&&r&&(e[n].defaultSelected=!0)}else{for(n=""+Q(n),t=null,o=0;o<e.length;o++){if(e[o].value===n)return e[o].selected=!0,void(r&&(e[o].defaultSelected=!0));null!==t||e[o].disabled||(t=e[o])}null!==t&&(t.selected=!0)}}function le(e,t){if(null!=t.dangerouslySetInnerHTML)throw Error(a(91));return o({},t,{value:void 0,defaultValue:void 0,children:""+e._wrapperState.initialValue})}function ue(e,t){var n=t.value;if(null==n){if(n=t.children,t=t.defaultValue,null!=n){if(null!=t)throw Error(a(92));if(Array.isArray(n)){if(!(1>=n.length))throw Error(a(93));n=n[0]}t=n}null==t&&(t=""),n=t}e._wrapperState={initialValue:Q(n)}}function se(e,t){var n=Q(t.value),r=Q(t.defaultValue);null!=n&&((n=""+n)!==e.value&&(e.value=n),null==t.defaultValue&&e.defaultValue!==n&&(e.defaultValue=n)),null!=r&&(e.defaultValue=""+r)}function ce(e){var t=e.textContent;t===e._wrapperState.initialValue&&""!==t&&null!==t&&(e.value=t)}var fe="http://www.w3.org/1999/xhtml",de="http://www.w3.org/2000/svg";function pe(e){switch(e){case"svg":return"http://www.w3.org/2000/svg";case"math":return"http://www.w3.org/1998/Math/MathML";default:return"http://www.w3.org/1999/xhtml"}}function he(e,t){return null==e||"http://www.w3.org/1999/xhtml"===e?pe(t):"http://www.w3.org/2000/svg"===e&&"foreignObject"===t?"http://www.w3.org/1999/xhtml":e}var me,ye,ge=(ye=function(e,t){if(e.namespaceURI!==de||"innerHTML"in e)e.innerHTML=t;else{for((me=me||document.createElement("div")).innerHTML="<svg>"+t.valueOf().toString()+"</svg>",t=me.firstChild;e.firstChild;)e.removeChild(e.firstChild);for(;t.firstChild;)e.appendChild(t.firstChild)}},"undefined"!==typeof MSApp&&MSApp.execUnsafeLocalFunction?function(e,t,n,r){MSApp.execUnsafeLocalFunction((function(){return ye(e,t)}))}:ye);function ve(e,t){if(t){var n=e.firstChild;if(n&&n===e.lastChild&&3===n.nodeType)return void(n.nodeValue=t)}e.textContent=t}var be={animationIterationCount:!0,borderImageOutset:!0,borderImageSlice:!0,borderImageWidth:!0,boxFlex:!0,boxFlexGroup:!0,boxOrdinalGroup:!0,columnCount:!0,columns:!0,flex:!0,flexGrow:!0,flexPositive:!0,flexShrink:!0,flexNegative:!0,flexOrder:!0,gridArea:!0,gridRow:!0,gridRowEnd:!0,gridRowSpan:!0,gridRowStart:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnSpan:!0,gridColumnStart:!0,fontWeight:!0,lineClamp:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,tabSize:!0,widows:!0,zIndex:!0,zoom:!0,fillOpacity:!0,floodOpacity:!0,stopOpacity:!0,strokeDasharray:!0,strokeDashoffset:!0,strokeMiterlimit:!0,strokeOpacity:!0,strokeWidth:!0},xe=["Webkit","ms","Moz","O"];function ke(e,t,n){return null==t||"boolean"===typeof t||""===t?"":n||"number"!==typeof t||0===t||be.hasOwnProperty(e)&&be[e]?(""+t).trim():t+"px"}function we(e,t){for(var n in e=e.style,t)if(t.hasOwnProperty(n)){var r=0===n.indexOf("--"),o=ke(n,t[n],r);"float"===n&&(n="cssFloat"),r?e.setProperty(n,o):e[n]=o}}Object.keys(be).forEach((function(e){xe.forEach((function(t){t=t+e.charAt(0).toUpperCase()+e.substring(1),be[t]=be[e]}))}));var Se=o({menuitem:!0},{area:!0,base:!0,br:!0,col:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0});function Ee(e,t){if(t){if(Se[e]&&(null!=t.children||null!=t.dangerouslySetInnerHTML))throw Error(a(137,e));if(null!=t.dangerouslySetInnerHTML){if(null!=t.children)throw Error(a(60));if("object"!==typeof t.dangerouslySetInnerHTML||!("__html"in t.dangerouslySetInnerHTML))throw Error(a(61))}if(null!=t.style&&"object"!==typeof t.style)throw Error(a(62))}}function Oe(e,t){if(-1===e.indexOf("-"))return"string"===typeof t.is;switch(e){case"annotation-xml":case"color-profile":case"font-face":case"font-face-src":case"font-face-uri":case"font-face-format":case"font-face-name":case"missing-glyph":return!1;default:return!0}}function Ce(e){return(e=e.target||e.srcElement||window).correspondingUseElement&&(e=e.correspondingUseElement),3===e.nodeType?e.parentNode:e}var je=null,Te=null,Pe=null;function Re(e){if(e=ro(e)){if("function"!==typeof je)throw Error(a(280));var t=e.stateNode;t&&(t=io(t),je(e.stateNode,e.type,t))}}function Ne(e){Te?Pe?Pe.push(e):Pe=[e]:Te=e}function _e(){if(Te){var e=Te,t=Pe;if(Pe=Te=null,Re(e),t)for(e=0;e<t.length;e++)Re(t[e])}}function ze(e,t){return e(t)}function Me(e,t,n,r,o){return e(t,n,r,o)}function Ae(){}var Ie=ze,De=!1,Le=!1;function Fe(){null===Te&&null===Pe||(Ae(),_e())}function Be(e,t){var n=e.stateNode;if(null===n)return null;var r=io(n);if(null===r)return null;n=r[t];e:switch(t){case"onClick":case"onClickCapture":case"onDoubleClick":case"onDoubleClickCapture":case"onMouseDown":case"onMouseDownCapture":case"onMouseMove":case"onMouseMoveCapture":case"onMouseUp":case"onMouseUpCapture":case"onMouseEnter":(r=!r.disabled)||(r=!("button"===(e=e.type)||"input"===e||"select"===e||"textarea"===e)),e=!r;break e;default:e=!1}if(e)return null;if(n&&"function"!==typeof n)throw Error(a(231,t,typeof n));return n}var We=!1;if(f)try{var Ue={};Object.defineProperty(Ue,"passive",{get:function(){We=!0}}),window.addEventListener("test",Ue,Ue),window.removeEventListener("test",Ue,Ue)}catch(ye){We=!1}function Ve(e,t,n,r,o,i,a,l,u){var s=Array.prototype.slice.call(arguments,3);try{t.apply(n,s)}catch(c){this.onError(c)}}var $e=!1,He=null,Ke=!1,qe=null,Qe={onError:function(e){$e=!0,He=e}};function Ye(e,t,n,r,o,i,a,l,u){$e=!1,He=null,Ve.apply(Qe,arguments)}function Xe(e){var t=e,n=e;if(e.alternate)for(;t.return;)t=t.return;else{e=t;do{0!==(1026&(t=e).flags)&&(n=t.return),e=t.return}while(e)}return 3===t.tag?n:null}function Ge(e){if(13===e.tag){var t=e.memoizedState;if(null===t&&(null!==(e=e.alternate)&&(t=e.memoizedState)),null!==t)return t.dehydrated}return null}function Je(e){if(Xe(e)!==e)throw Error(a(188))}function Ze(e){if(e=function(e){var t=e.alternate;if(!t){if(null===(t=Xe(e)))throw Error(a(188));return t!==e?null:e}for(var n=e,r=t;;){var o=n.return;if(null===o)break;var i=o.alternate;if(null===i){if(null!==(r=o.return)){n=r;continue}break}if(o.child===i.child){for(i=o.child;i;){if(i===n)return Je(o),e;if(i===r)return Je(o),t;i=i.sibling}throw Error(a(188))}if(n.return!==r.return)n=o,r=i;else{for(var l=!1,u=o.child;u;){if(u===n){l=!0,n=o,r=i;break}if(u===r){l=!0,r=o,n=i;break}u=u.sibling}if(!l){for(u=i.child;u;){if(u===n){l=!0,n=i,r=o;break}if(u===r){l=!0,r=i,n=o;break}u=u.sibling}if(!l)throw Error(a(189))}}if(n.alternate!==r)throw Error(a(190))}if(3!==n.tag)throw Error(a(188));return n.stateNode.current===n?e:t}(e),!e)return null;for(var t=e;;){if(5===t.tag||6===t.tag)return t;if(t.child)t.child.return=t,t=t.child;else{if(t===e)break;for(;!t.sibling;){if(!t.return||t.return===e)return null;t=t.return}t.sibling.return=t.return,t=t.sibling}}return null}function et(e,t){for(var n=e.alternate;null!==t;){if(t===e||t===n)return!0;t=t.return}return!1}var tt,nt,rt,ot,it=!1,at=[],lt=null,ut=null,st=null,ct=new Map,ft=new Map,dt=[],pt="mousedown mouseup touchcancel touchend touchstart auxclick dblclick pointercancel pointerdown pointerup dragend dragstart drop compositionend compositionstart keydown keypress keyup input textInput copy cut paste click change contextmenu reset submit".split(" ");function ht(e,t,n,r,o){return{blockedOn:e,domEventName:t,eventSystemFlags:16|n,nativeEvent:o,targetContainers:[r]}}function mt(e,t){switch(e){case"focusin":case"focusout":lt=null;break;case"dragenter":case"dragleave":ut=null;break;case"mouseover":case"mouseout":st=null;break;case"pointerover":case"pointerout":ct.delete(t.pointerId);break;case"gotpointercapture":case"lostpointercapture":ft.delete(t.pointerId)}}function yt(e,t,n,r,o,i){return null===e||e.nativeEvent!==i?(e=ht(t,n,r,o,i),null!==t&&(null!==(t=ro(t))&&nt(t)),e):(e.eventSystemFlags|=r,t=e.targetContainers,null!==o&&-1===t.indexOf(o)&&t.push(o),e)}function gt(e){var t=no(e.target);if(null!==t){var n=Xe(t);if(null!==n)if(13===(t=n.tag)){if(null!==(t=Ge(n)))return e.blockedOn=t,void ot(e.lanePriority,(function(){i.unstable_runWithPriority(e.priority,(function(){rt(n)}))}))}else if(3===t&&n.stateNode.hydrate)return void(e.blockedOn=3===n.tag?n.stateNode.containerInfo:null)}e.blockedOn=null}function vt(e){if(null!==e.blockedOn)return!1;for(var t=e.targetContainers;0<t.length;){var n=Zt(e.domEventName,e.eventSystemFlags,t[0],e.nativeEvent);if(null!==n)return null!==(t=ro(n))&&nt(t),e.blockedOn=n,!1;t.shift()}return!0}function bt(e,t,n){vt(e)&&n.delete(t)}function xt(){for(it=!1;0<at.length;){var e=at[0];if(null!==e.blockedOn){null!==(e=ro(e.blockedOn))&&tt(e);break}for(var t=e.targetContainers;0<t.length;){var n=Zt(e.domEventName,e.eventSystemFlags,t[0],e.nativeEvent);if(null!==n){e.blockedOn=n;break}t.shift()}null===e.blockedOn&&at.shift()}null!==lt&&vt(lt)&&(lt=null),null!==ut&&vt(ut)&&(ut=null),null!==st&&vt(st)&&(st=null),ct.forEach(bt),ft.forEach(bt)}function kt(e,t){e.blockedOn===t&&(e.blockedOn=null,it||(it=!0,i.unstable_scheduleCallback(i.unstable_NormalPriority,xt)))}function wt(e){function t(t){return kt(t,e)}if(0<at.length){kt(at[0],e);for(var n=1;n<at.length;n++){var r=at[n];r.blockedOn===e&&(r.blockedOn=null)}}for(null!==lt&&kt(lt,e),null!==ut&&kt(ut,e),null!==st&&kt(st,e),ct.forEach(t),ft.forEach(t),n=0;n<dt.length;n++)(r=dt[n]).blockedOn===e&&(r.blockedOn=null);for(;0<dt.length&&null===(n=dt[0]).blockedOn;)gt(n),null===n.blockedOn&&dt.shift()}function St(e,t){var n={};return n[e.toLowerCase()]=t.toLowerCase(),n["Webkit"+e]="webkit"+t,n["Moz"+e]="moz"+t,n}var Et={animationend:St("Animation","AnimationEnd"),animationiteration:St("Animation","AnimationIteration"),animationstart:St("Animation","AnimationStart"),transitionend:St("Transition","TransitionEnd")},Ot={},Ct={};function jt(e){if(Ot[e])return Ot[e];if(!Et[e])return e;var t,n=Et[e];for(t in n)if(n.hasOwnProperty(t)&&t in Ct)return Ot[e]=n[t];return e}f&&(Ct=document.createElement("div").style,"AnimationEvent"in window||(delete Et.animationend.animation,delete Et.animationiteration.animation,delete Et.animationstart.animation),"TransitionEvent"in window||delete Et.transitionend.transition);var Tt=jt("animationend"),Pt=jt("animationiteration"),Rt=jt("animationstart"),Nt=jt("transitionend"),_t=new Map,zt=new Map,Mt=["abort","abort",Tt,"animationEnd",Pt,"animationIteration",Rt,"animationStart","canplay","canPlay","canplaythrough","canPlayThrough","durationchange","durationChange","emptied","emptied","encrypted","encrypted","ended","ended","error","error","gotpointercapture","gotPointerCapture","load","load","loadeddata","loadedData","loadedmetadata","loadedMetadata","loadstart","loadStart","lostpointercapture","lostPointerCapture","playing","playing","progress","progress","seeking","seeking","stalled","stalled","suspend","suspend","timeupdate","timeUpdate",Nt,"transitionEnd","waiting","waiting"];function At(e,t){for(var n=0;n<e.length;n+=2){var r=e[n],o=e[n+1];o="on"+(o[0].toUpperCase()+o.slice(1)),zt.set(r,t),_t.set(r,o),s(o,[r])}}(0,i.unstable_now)();var It=8;function Dt(e){if(0!==(1&e))return It=15,1;if(0!==(2&e))return It=14,2;if(0!==(4&e))return It=13,4;var t=24&e;return 0!==t?(It=12,t):0!==(32&e)?(It=11,32):0!==(t=192&e)?(It=10,t):0!==(256&e)?(It=9,256):0!==(t=3584&e)?(It=8,t):0!==(4096&e)?(It=7,4096):0!==(t=4186112&e)?(It=6,t):0!==(t=62914560&e)?(It=5,t):67108864&e?(It=4,67108864):0!==(134217728&e)?(It=3,134217728):0!==(t=805306368&e)?(It=2,t):0!==(1073741824&e)?(It=1,1073741824):(It=8,e)}function Lt(e,t){var n=e.pendingLanes;if(0===n)return It=0;var r=0,o=0,i=e.expiredLanes,a=e.suspendedLanes,l=e.pingedLanes;if(0!==i)r=i,o=It=15;else if(0!==(i=134217727&n)){var u=i&~a;0!==u?(r=Dt(u),o=It):0!==(l&=i)&&(r=Dt(l),o=It)}else 0!==(i=n&~a)?(r=Dt(i),o=It):0!==l&&(r=Dt(l),o=It);if(0===r)return 0;if(r=n&((0>(r=31-$t(r))?0:1<<r)<<1)-1,0!==t&&t!==r&&0===(t&a)){if(Dt(t),o<=It)return t;It=o}if(0!==(t=e.entangledLanes))for(e=e.entanglements,t&=r;0<t;)o=1<<(n=31-$t(t)),r|=e[n],t&=~o;return r}function Ft(e){return 0!==(e=-1073741825&e.pendingLanes)?e:1073741824&e?1073741824:0}function Bt(e,t){switch(e){case 15:return 1;case 14:return 2;case 12:return 0===(e=Wt(24&~t))?Bt(10,t):e;case 10:return 0===(e=Wt(192&~t))?Bt(8,t):e;case 8:return 0===(e=Wt(3584&~t))&&(0===(e=Wt(4186112&~t))&&(e=512)),e;case 2:return 0===(t=Wt(805306368&~t))&&(t=268435456),t}throw Error(a(358,e))}function Wt(e){return e&-e}function Ut(e){for(var t=[],n=0;31>n;n++)t.push(e);return t}function Vt(e,t,n){e.pendingLanes|=t;var r=t-1;e.suspendedLanes&=r,e.pingedLanes&=r,(e=e.eventTimes)[t=31-$t(t)]=n}var $t=Math.clz32?Math.clz32:function(e){return 0===e?32:31-(Ht(e)/Kt|0)|0},Ht=Math.log,Kt=Math.LN2;var qt=i.unstable_UserBlockingPriority,Qt=i.unstable_runWithPriority,Yt=!0;function Xt(e,t,n,r){De||Ae();var o=Jt,i=De;De=!0;try{Me(o,e,t,n,r)}finally{(De=i)||Fe()}}function Gt(e,t,n,r){Qt(qt,Jt.bind(null,e,t,n,r))}function Jt(e,t,n,r){var o;if(Yt)if((o=0===(4&t))&&0<at.length&&-1<pt.indexOf(e))e=ht(null,e,t,n,r),at.push(e);else{var i=Zt(e,t,n,r);if(null===i)o&&mt(e,r);else{if(o){if(-1<pt.indexOf(e))return e=ht(i,e,t,n,r),void at.push(e);if(function(e,t,n,r,o){switch(t){case"focusin":return lt=yt(lt,e,t,n,r,o),!0;case"dragenter":return ut=yt(ut,e,t,n,r,o),!0;case"mouseover":return st=yt(st,e,t,n,r,o),!0;case"pointerover":var i=o.pointerId;return ct.set(i,yt(ct.get(i)||null,e,t,n,r,o)),!0;case"gotpointercapture":return i=o.pointerId,ft.set(i,yt(ft.get(i)||null,e,t,n,r,o)),!0}return!1}(i,e,t,n,r))return;mt(e,r)}Ar(e,t,r,null,n)}}}function Zt(e,t,n,r){var o=Ce(r);if(null!==(o=no(o))){var i=Xe(o);if(null===i)o=null;else{var a=i.tag;if(13===a){if(null!==(o=Ge(i)))return o;o=null}else if(3===a){if(i.stateNode.hydrate)return 3===i.tag?i.stateNode.containerInfo:null;o=null}else i!==o&&(o=null)}}return Ar(e,t,r,o,n),null}var en=null,tn=null,nn=null;function rn(){if(nn)return nn;var e,t,n=tn,r=n.length,o="value"in en?en.value:en.textContent,i=o.length;for(e=0;e<r&&n[e]===o[e];e++);var a=r-e;for(t=1;t<=a&&n[r-t]===o[i-t];t++);return nn=o.slice(e,1<t?1-t:void 0)}function on(e){var t=e.keyCode;return"charCode"in e?0===(e=e.charCode)&&13===t&&(e=13):e=t,10===e&&(e=13),32<=e||13===e?e:0}function an(){return!0}function ln(){return!1}function un(e){function t(t,n,r,o,i){for(var a in this._reactName=t,this._targetInst=r,this.type=n,this.nativeEvent=o,this.target=i,this.currentTarget=null,e)e.hasOwnProperty(a)&&(t=e[a],this[a]=t?t(o):o[a]);return this.isDefaultPrevented=(null!=o.defaultPrevented?o.defaultPrevented:!1===o.returnValue)?an:ln,this.isPropagationStopped=ln,this}return o(t.prototype,{preventDefault:function(){this.defaultPrevented=!0;var e=this.nativeEvent;e&&(e.preventDefault?e.preventDefault():"unknown"!==typeof e.returnValue&&(e.returnValue=!1),this.isDefaultPrevented=an)},stopPropagation:function(){var e=this.nativeEvent;e&&(e.stopPropagation?e.stopPropagation():"unknown"!==typeof e.cancelBubble&&(e.cancelBubble=!0),this.isPropagationStopped=an)},persist:function(){},isPersistent:an}),t}var sn,cn,fn,dn={eventPhase:0,bubbles:0,cancelable:0,timeStamp:function(e){return e.timeStamp||Date.now()},defaultPrevented:0,isTrusted:0},pn=un(dn),hn=o({},dn,{view:0,detail:0}),mn=un(hn),yn=o({},hn,{screenX:0,screenY:0,clientX:0,clientY:0,pageX:0,pageY:0,ctrlKey:0,shiftKey:0,altKey:0,metaKey:0,getModifierState:Tn,button:0,buttons:0,relatedTarget:function(e){return void 0===e.relatedTarget?e.fromElement===e.srcElement?e.toElement:e.fromElement:e.relatedTarget},movementX:function(e){return"movementX"in e?e.movementX:(e!==fn&&(fn&&"mousemove"===e.type?(sn=e.screenX-fn.screenX,cn=e.screenY-fn.screenY):cn=sn=0,fn=e),sn)},movementY:function(e){return"movementY"in e?e.movementY:cn}}),gn=un(yn),vn=un(o({},yn,{dataTransfer:0})),bn=un(o({},hn,{relatedTarget:0})),xn=un(o({},dn,{animationName:0,elapsedTime:0,pseudoElement:0})),kn=o({},dn,{clipboardData:function(e){return"clipboardData"in e?e.clipboardData:window.clipboardData}}),wn=un(kn),Sn=un(o({},dn,{data:0})),En={Esc:"Escape",Spacebar:" ",Left:"ArrowLeft",Up:"ArrowUp",Right:"ArrowRight",Down:"ArrowDown",Del:"Delete",Win:"OS",Menu:"ContextMenu",Apps:"ContextMenu",Scroll:"ScrollLock",MozPrintableKey:"Unidentified"},On={8:"Backspace",9:"Tab",12:"Clear",13:"Enter",16:"Shift",17:"Control",18:"Alt",19:"Pause",20:"CapsLock",27:"Escape",32:" ",33:"PageUp",34:"PageDown",35:"End",36:"Home",37:"ArrowLeft",38:"ArrowUp",39:"ArrowRight",40:"ArrowDown",45:"Insert",46:"Delete",112:"F1",113:"F2",114:"F3",115:"F4",116:"F5",117:"F6",118:"F7",119:"F8",120:"F9",121:"F10",122:"F11",123:"F12",144:"NumLock",145:"ScrollLock",224:"Meta"},Cn={Alt:"altKey",Control:"ctrlKey",Meta:"metaKey",Shift:"shiftKey"};function jn(e){var t=this.nativeEvent;return t.getModifierState?t.getModifierState(e):!!(e=Cn[e])&&!!t[e]}function Tn(){return jn}var Pn=o({},hn,{key:function(e){if(e.key){var t=En[e.key]||e.key;if("Unidentified"!==t)return t}return"keypress"===e.type?13===(e=on(e))?"Enter":String.fromCharCode(e):"keydown"===e.type||"keyup"===e.type?On[e.keyCode]||"Unidentified":""},code:0,location:0,ctrlKey:0,shiftKey:0,altKey:0,metaKey:0,repeat:0,locale:0,getModifierState:Tn,charCode:function(e){return"keypress"===e.type?on(e):0},keyCode:function(e){return"keydown"===e.type||"keyup"===e.type?e.keyCode:0},which:function(e){return"keypress"===e.type?on(e):"keydown"===e.type||"keyup"===e.type?e.keyCode:0}}),Rn=un(Pn),Nn=un(o({},yn,{pointerId:0,width:0,height:0,pressure:0,tangentialPressure:0,tiltX:0,tiltY:0,twist:0,pointerType:0,isPrimary:0})),_n=un(o({},hn,{touches:0,targetTouches:0,changedTouches:0,altKey:0,metaKey:0,ctrlKey:0,shiftKey:0,getModifierState:Tn})),zn=un(o({},dn,{propertyName:0,elapsedTime:0,pseudoElement:0})),Mn=o({},yn,{deltaX:function(e){return"deltaX"in e?e.deltaX:"wheelDeltaX"in e?-e.wheelDeltaX:0},deltaY:function(e){return"deltaY"in e?e.deltaY:"wheelDeltaY"in e?-e.wheelDeltaY:"wheelDelta"in e?-e.wheelDelta:0},deltaZ:0,deltaMode:0}),An=un(Mn),In=[9,13,27,32],Dn=f&&"CompositionEvent"in window,Ln=null;f&&"documentMode"in document&&(Ln=document.documentMode);var Fn=f&&"TextEvent"in window&&!Ln,Bn=f&&(!Dn||Ln&&8<Ln&&11>=Ln),Wn=String.fromCharCode(32),Un=!1;function Vn(e,t){switch(e){case"keyup":return-1!==In.indexOf(t.keyCode);case"keydown":return 229!==t.keyCode;case"keypress":case"mousedown":case"focusout":return!0;default:return!1}}function $n(e){return"object"===typeof(e=e.detail)&&"data"in e?e.data:null}var Hn=!1;var Kn={color:!0,date:!0,datetime:!0,"datetime-local":!0,email:!0,month:!0,number:!0,password:!0,range:!0,search:!0,tel:!0,text:!0,time:!0,url:!0,week:!0};function qn(e){var t=e&&e.nodeName&&e.nodeName.toLowerCase();return"input"===t?!!Kn[e.type]:"textarea"===t}function Qn(e,t,n,r){Ne(r),0<(t=Dr(t,"onChange")).length&&(n=new pn("onChange","change",null,n,r),e.push({event:n,listeners:t}))}var Yn=null,Xn=null;function Gn(e){Pr(e,0)}function Jn(e){if(G(oo(e)))return e}function Zn(e,t){if("change"===e)return t}var er=!1;if(f){var tr;if(f){var nr="oninput"in document;if(!nr){var rr=document.createElement("div");rr.setAttribute("oninput","return;"),nr="function"===typeof rr.oninput}tr=nr}else tr=!1;er=tr&&(!document.documentMode||9<document.documentMode)}function or(){Yn&&(Yn.detachEvent("onpropertychange",ir),Xn=Yn=null)}function ir(e){if("value"===e.propertyName&&Jn(Xn)){var t=[];if(Qn(t,Xn,e,Ce(e)),e=Gn,De)e(t);else{De=!0;try{ze(e,t)}finally{De=!1,Fe()}}}}function ar(e,t,n){"focusin"===e?(or(),Xn=n,(Yn=t).attachEvent("onpropertychange",ir)):"focusout"===e&&or()}function lr(e){if("selectionchange"===e||"keyup"===e||"keydown"===e)return Jn(Xn)}function ur(e,t){if("click"===e)return Jn(t)}function sr(e,t){if("input"===e||"change"===e)return Jn(t)}var cr="function"===typeof Object.is?Object.is:function(e,t){return e===t&&(0!==e||1/e===1/t)||e!==e&&t!==t},fr=Object.prototype.hasOwnProperty;function dr(e,t){if(cr(e,t))return!0;if("object"!==typeof e||null===e||"object"!==typeof t||null===t)return!1;var n=Object.keys(e),r=Object.keys(t);if(n.length!==r.length)return!1;for(r=0;r<n.length;r++)if(!fr.call(t,n[r])||!cr(e[n[r]],t[n[r]]))return!1;return!0}function pr(e){for(;e&&e.firstChild;)e=e.firstChild;return e}function hr(e,t){var n,r=pr(e);for(e=0;r;){if(3===r.nodeType){if(n=e+r.textContent.length,e<=t&&n>=t)return{node:r,offset:t-e};e=n}e:{for(;r;){if(r.nextSibling){r=r.nextSibling;break e}r=r.parentNode}r=void 0}r=pr(r)}}function mr(e,t){return!(!e||!t)&&(e===t||(!e||3!==e.nodeType)&&(t&&3===t.nodeType?mr(e,t.parentNode):"contains"in e?e.contains(t):!!e.compareDocumentPosition&&!!(16&e.compareDocumentPosition(t))))}function yr(){for(var e=window,t=J();t instanceof e.HTMLIFrameElement;){try{var n="string"===typeof t.contentWindow.location.href}catch(r){n=!1}if(!n)break;t=J((e=t.contentWindow).document)}return t}function gr(e){var t=e&&e.nodeName&&e.nodeName.toLowerCase();return t&&("input"===t&&("text"===e.type||"search"===e.type||"tel"===e.type||"url"===e.type||"password"===e.type)||"textarea"===t||"true"===e.contentEditable)}var vr=f&&"documentMode"in document&&11>=document.documentMode,br=null,xr=null,kr=null,wr=!1;function Sr(e,t,n){var r=n.window===n?n.document:9===n.nodeType?n:n.ownerDocument;wr||null==br||br!==J(r)||("selectionStart"in(r=br)&&gr(r)?r={start:r.selectionStart,end:r.selectionEnd}:r={anchorNode:(r=(r.ownerDocument&&r.ownerDocument.defaultView||window).getSelection()).anchorNode,anchorOffset:r.anchorOffset,focusNode:r.focusNode,focusOffset:r.focusOffset},kr&&dr(kr,r)||(kr=r,0<(r=Dr(xr,"onSelect")).length&&(t=new pn("onSelect","select",null,t,n),e.push({event:t,listeners:r}),t.target=br)))}At("cancel cancel click click close close contextmenu contextMenu copy copy cut cut auxclick auxClick dblclick doubleClick dragend dragEnd dragstart dragStart drop drop focusin focus focusout blur input input invalid invalid keydown keyDown keypress keyPress keyup keyUp mousedown mouseDown mouseup mouseUp paste paste pause pause play play pointercancel pointerCancel pointerdown pointerDown pointerup pointerUp ratechange rateChange reset reset seeked seeked submit submit touchcancel touchCancel touchend touchEnd touchstart touchStart volumechange volumeChange".split(" "),0),At("drag drag dragenter dragEnter dragexit dragExit dragleave dragLeave dragover dragOver mousemove mouseMove mouseout mouseOut mouseover mouseOver pointermove pointerMove pointerout pointerOut pointerover pointerOver scroll scroll toggle toggle touchmove touchMove wheel wheel".split(" "),1),At(Mt,2);for(var Er="change selectionchange textInput compositionstart compositionend compositionupdate".split(" "),Or=0;Or<Er.length;Or++)zt.set(Er[Or],0);c("onMouseEnter",["mouseout","mouseover"]),c("onMouseLeave",["mouseout","mouseover"]),c("onPointerEnter",["pointerout","pointerover"]),c("onPointerLeave",["pointerout","pointerover"]),s("onChange","change click focusin focusout input keydown keyup selectionchange".split(" ")),s("onSelect","focusout contextmenu dragend focusin keydown keyup mousedown mouseup selectionchange".split(" ")),s("onBeforeInput",["compositionend","keypress","textInput","paste"]),s("onCompositionEnd","compositionend focusout keydown keypress keyup mousedown".split(" ")),s("onCompositionStart","compositionstart focusout keydown keypress keyup mousedown".split(" ")),s("onCompositionUpdate","compositionupdate focusout keydown keypress keyup mousedown".split(" "));var Cr="abort canplay canplaythrough durationchange emptied encrypted ended error loadeddata loadedmetadata loadstart pause play playing progress ratechange seeked seeking stalled suspend timeupdate volumechange waiting".split(" "),jr=new Set("cancel close invalid load scroll toggle".split(" ").concat(Cr));function Tr(e,t,n){var r=e.type||"unknown-event";e.currentTarget=n,function(e,t,n,r,o,i,l,u,s){if(Ye.apply(this,arguments),$e){if(!$e)throw Error(a(198));var c=He;$e=!1,He=null,Ke||(Ke=!0,qe=c)}}(r,t,void 0,e),e.currentTarget=null}function Pr(e,t){t=0!==(4&t);for(var n=0;n<e.length;n++){var r=e[n],o=r.event;r=r.listeners;e:{var i=void 0;if(t)for(var a=r.length-1;0<=a;a--){var l=r[a],u=l.instance,s=l.currentTarget;if(l=l.listener,u!==i&&o.isPropagationStopped())break e;Tr(o,l,s),i=u}else for(a=0;a<r.length;a++){if(u=(l=r[a]).instance,s=l.currentTarget,l=l.listener,u!==i&&o.isPropagationStopped())break e;Tr(o,l,s),i=u}}}if(Ke)throw e=qe,Ke=!1,qe=null,e}function Rr(e,t){var n=ao(t),r=e+"__bubble";n.has(r)||(Mr(t,e,2,!1),n.add(r))}var Nr="_reactListening"+Math.random().toString(36).slice(2);function _r(e){e[Nr]||(e[Nr]=!0,l.forEach((function(t){jr.has(t)||zr(t,!1,e,null),zr(t,!0,e,null)})))}function zr(e,t,n,r){var o=4<arguments.length&&void 0!==arguments[4]?arguments[4]:0,i=n;if("selectionchange"===e&&9!==n.nodeType&&(i=n.ownerDocument),null!==r&&!t&&jr.has(e)){if("scroll"!==e)return;o|=2,i=r}var a=ao(i),l=e+"__"+(t?"capture":"bubble");a.has(l)||(t&&(o|=4),Mr(i,e,o,t),a.add(l))}function Mr(e,t,n,r){var o=zt.get(t);switch(void 0===o?2:o){case 0:o=Xt;break;case 1:o=Gt;break;default:o=Jt}n=o.bind(null,t,n,e),o=void 0,!We||"touchstart"!==t&&"touchmove"!==t&&"wheel"!==t||(o=!0),r?void 0!==o?e.addEventListener(t,n,{capture:!0,passive:o}):e.addEventListener(t,n,!0):void 0!==o?e.addEventListener(t,n,{passive:o}):e.addEventListener(t,n,!1)}function Ar(e,t,n,r,o){var i=r;if(0===(1&t)&&0===(2&t)&&null!==r)e:for(;;){if(null===r)return;var a=r.tag;if(3===a||4===a){var l=r.stateNode.containerInfo;if(l===o||8===l.nodeType&&l.parentNode===o)break;if(4===a)for(a=r.return;null!==a;){var u=a.tag;if((3===u||4===u)&&((u=a.stateNode.containerInfo)===o||8===u.nodeType&&u.parentNode===o))return;a=a.return}for(;null!==l;){if(null===(a=no(l)))return;if(5===(u=a.tag)||6===u){r=i=a;continue e}l=l.parentNode}}r=r.return}!function(e,t,n){if(Le)return e(t,n);Le=!0;try{Ie(e,t,n)}finally{Le=!1,Fe()}}((function(){var r=i,o=Ce(n),a=[];e:{var l=_t.get(e);if(void 0!==l){var u=pn,s=e;switch(e){case"keypress":if(0===on(n))break e;case"keydown":case"keyup":u=Rn;break;case"focusin":s="focus",u=bn;break;case"focusout":s="blur",u=bn;break;case"beforeblur":case"afterblur":u=bn;break;case"click":if(2===n.button)break e;case"auxclick":case"dblclick":case"mousedown":case"mousemove":case"mouseup":case"mouseout":case"mouseover":case"contextmenu":u=gn;break;case"drag":case"dragend":case"dragenter":case"dragexit":case"dragleave":case"dragover":case"dragstart":case"drop":u=vn;break;case"touchcancel":case"touchend":case"touchmove":case"touchstart":u=_n;break;case Tt:case Pt:case Rt:u=xn;break;case Nt:u=zn;break;case"scroll":u=mn;break;case"wheel":u=An;break;case"copy":case"cut":case"paste":u=wn;break;case"gotpointercapture":case"lostpointercapture":case"pointercancel":case"pointerdown":case"pointermove":case"pointerout":case"pointerover":case"pointerup":u=Nn}var c=0!==(4&t),f=!c&&"scroll"===e,d=c?null!==l?l+"Capture":null:l;c=[];for(var p,h=r;null!==h;){var m=(p=h).stateNode;if(5===p.tag&&null!==m&&(p=m,null!==d&&(null!=(m=Be(h,d))&&c.push(Ir(h,m,p)))),f)break;h=h.return}0<c.length&&(l=new u(l,s,null,n,o),a.push({event:l,listeners:c}))}}if(0===(7&t)){if(u="mouseout"===e||"pointerout"===e,(!(l="mouseover"===e||"pointerover"===e)||0!==(16&t)||!(s=n.relatedTarget||n.fromElement)||!no(s)&&!s[eo])&&(u||l)&&(l=o.window===o?o:(l=o.ownerDocument)?l.defaultView||l.parentWindow:window,u?(u=r,null!==(s=(s=n.relatedTarget||n.toElement)?no(s):null)&&(s!==(f=Xe(s))||5!==s.tag&&6!==s.tag)&&(s=null)):(u=null,s=r),u!==s)){if(c=gn,m="onMouseLeave",d="onMouseEnter",h="mouse","pointerout"!==e&&"pointerover"!==e||(c=Nn,m="onPointerLeave",d="onPointerEnter",h="pointer"),f=null==u?l:oo(u),p=null==s?l:oo(s),(l=new c(m,h+"leave",u,n,o)).target=f,l.relatedTarget=p,m=null,no(o)===r&&((c=new c(d,h+"enter",s,n,o)).target=p,c.relatedTarget=f,m=c),f=m,u&&s)e:{for(d=s,h=0,p=c=u;p;p=Lr(p))h++;for(p=0,m=d;m;m=Lr(m))p++;for(;0<h-p;)c=Lr(c),h--;for(;0<p-h;)d=Lr(d),p--;for(;h--;){if(c===d||null!==d&&c===d.alternate)break e;c=Lr(c),d=Lr(d)}c=null}else c=null;null!==u&&Fr(a,l,u,c,!1),null!==s&&null!==f&&Fr(a,f,s,c,!0)}if("select"===(u=(l=r?oo(r):window).nodeName&&l.nodeName.toLowerCase())||"input"===u&&"file"===l.type)var y=Zn;else if(qn(l))if(er)y=sr;else{y=lr;var g=ar}else(u=l.nodeName)&&"input"===u.toLowerCase()&&("checkbox"===l.type||"radio"===l.type)&&(y=ur);switch(y&&(y=y(e,r))?Qn(a,y,n,o):(g&&g(e,l,r),"focusout"===e&&(g=l._wrapperState)&&g.controlled&&"number"===l.type&&oe(l,"number",l.value)),g=r?oo(r):window,e){case"focusin":(qn(g)||"true"===g.contentEditable)&&(br=g,xr=r,kr=null);break;case"focusout":kr=xr=br=null;break;case"mousedown":wr=!0;break;case"contextmenu":case"mouseup":case"dragend":wr=!1,Sr(a,n,o);break;case"selectionchange":if(vr)break;case"keydown":case"keyup":Sr(a,n,o)}var v;if(Dn)e:{switch(e){case"compositionstart":var b="onCompositionStart";break e;case"compositionend":b="onCompositionEnd";break e;case"compositionupdate":b="onCompositionUpdate";break e}b=void 0}else Hn?Vn(e,n)&&(b="onCompositionEnd"):"keydown"===e&&229===n.keyCode&&(b="onCompositionStart");b&&(Bn&&"ko"!==n.locale&&(Hn||"onCompositionStart"!==b?"onCompositionEnd"===b&&Hn&&(v=rn()):(tn="value"in(en=o)?en.value:en.textContent,Hn=!0)),0<(g=Dr(r,b)).length&&(b=new Sn(b,e,null,n,o),a.push({event:b,listeners:g}),v?b.data=v:null!==(v=$n(n))&&(b.data=v))),(v=Fn?function(e,t){switch(e){case"compositionend":return $n(t);case"keypress":return 32!==t.which?null:(Un=!0,Wn);case"textInput":return(e=t.data)===Wn&&Un?null:e;default:return null}}(e,n):function(e,t){if(Hn)return"compositionend"===e||!Dn&&Vn(e,t)?(e=rn(),nn=tn=en=null,Hn=!1,e):null;switch(e){case"paste":default:return null;case"keypress":if(!(t.ctrlKey||t.altKey||t.metaKey)||t.ctrlKey&&t.altKey){if(t.char&&1<t.char.length)return t.char;if(t.which)return String.fromCharCode(t.which)}return null;case"compositionend":return Bn&&"ko"!==t.locale?null:t.data}}(e,n))&&(0<(r=Dr(r,"onBeforeInput")).length&&(o=new Sn("onBeforeInput","beforeinput",null,n,o),a.push({event:o,listeners:r}),o.data=v))}Pr(a,t)}))}function Ir(e,t,n){return{instance:e,listener:t,currentTarget:n}}function Dr(e,t){for(var n=t+"Capture",r=[];null!==e;){var o=e,i=o.stateNode;5===o.tag&&null!==i&&(o=i,null!=(i=Be(e,n))&&r.unshift(Ir(e,i,o)),null!=(i=Be(e,t))&&r.push(Ir(e,i,o))),e=e.return}return r}function Lr(e){if(null===e)return null;do{e=e.return}while(e&&5!==e.tag);return e||null}function Fr(e,t,n,r,o){for(var i=t._reactName,a=[];null!==n&&n!==r;){var l=n,u=l.alternate,s=l.stateNode;if(null!==u&&u===r)break;5===l.tag&&null!==s&&(l=s,o?null!=(u=Be(n,i))&&a.unshift(Ir(n,u,l)):o||null!=(u=Be(n,i))&&a.push(Ir(n,u,l))),n=n.return}0!==a.length&&e.push({event:t,listeners:a})}function Br(){}var Wr=null,Ur=null;function Vr(e,t){switch(e){case"button":case"input":case"select":case"textarea":return!!t.autoFocus}return!1}function $r(e,t){return"textarea"===e||"option"===e||"noscript"===e||"string"===typeof t.children||"number"===typeof t.children||"object"===typeof t.dangerouslySetInnerHTML&&null!==t.dangerouslySetInnerHTML&&null!=t.dangerouslySetInnerHTML.__html}var Hr="function"===typeof setTimeout?setTimeout:void 0,Kr="function"===typeof clearTimeout?clearTimeout:void 0;function qr(e){1===e.nodeType?e.textContent="":9===e.nodeType&&(null!=(e=e.body)&&(e.textContent=""))}function Qr(e){for(;null!=e;e=e.nextSibling){var t=e.nodeType;if(1===t||3===t)break}return e}function Yr(e){e=e.previousSibling;for(var t=0;e;){if(8===e.nodeType){var n=e.data;if("$"===n||"$!"===n||"$?"===n){if(0===t)return e;t--}else"/$"===n&&t++}e=e.previousSibling}return null}var Xr=0;var Gr=Math.random().toString(36).slice(2),Jr="__reactFiber$"+Gr,Zr="__reactProps$"+Gr,eo="__reactContainer$"+Gr,to="__reactEvents$"+Gr;function no(e){var t=e[Jr];if(t)return t;for(var n=e.parentNode;n;){if(t=n[eo]||n[Jr]){if(n=t.alternate,null!==t.child||null!==n&&null!==n.child)for(e=Yr(e);null!==e;){if(n=e[Jr])return n;e=Yr(e)}return t}n=(e=n).parentNode}return null}function ro(e){return!(e=e[Jr]||e[eo])||5!==e.tag&&6!==e.tag&&13!==e.tag&&3!==e.tag?null:e}function oo(e){if(5===e.tag||6===e.tag)return e.stateNode;throw Error(a(33))}function io(e){return e[Zr]||null}function ao(e){var t=e[to];return void 0===t&&(t=e[to]=new Set),t}var lo=[],uo=-1;function so(e){return{current:e}}function co(e){0>uo||(e.current=lo[uo],lo[uo]=null,uo--)}function fo(e,t){uo++,lo[uo]=e.current,e.current=t}var po={},ho=so(po),mo=so(!1),yo=po;function go(e,t){var n=e.type.contextTypes;if(!n)return po;var r=e.stateNode;if(r&&r.__reactInternalMemoizedUnmaskedChildContext===t)return r.__reactInternalMemoizedMaskedChildContext;var o,i={};for(o in n)i[o]=t[o];return r&&((e=e.stateNode).__reactInternalMemoizedUnmaskedChildContext=t,e.__reactInternalMemoizedMaskedChildContext=i),i}function vo(e){return null!==(e=e.childContextTypes)&&void 0!==e}function bo(){co(mo),co(ho)}function xo(e,t,n){if(ho.current!==po)throw Error(a(168));fo(ho,t),fo(mo,n)}function ko(e,t,n){var r=e.stateNode;if(e=t.childContextTypes,"function"!==typeof r.getChildContext)return n;for(var i in r=r.getChildContext())if(!(i in e))throw Error(a(108,q(t)||"Unknown",i));return o({},n,r)}function wo(e){return e=(e=e.stateNode)&&e.__reactInternalMemoizedMergedChildContext||po,yo=ho.current,fo(ho,e),fo(mo,mo.current),!0}function So(e,t,n){var r=e.stateNode;if(!r)throw Error(a(169));n?(e=ko(e,t,yo),r.__reactInternalMemoizedMergedChildContext=e,co(mo),co(ho),fo(ho,e)):co(mo),fo(mo,n)}var Eo=null,Oo=null,Co=i.unstable_runWithPriority,jo=i.unstable_scheduleCallback,To=i.unstable_cancelCallback,Po=i.unstable_shouldYield,Ro=i.unstable_requestPaint,No=i.unstable_now,_o=i.unstable_getCurrentPriorityLevel,zo=i.unstable_ImmediatePriority,Mo=i.unstable_UserBlockingPriority,Ao=i.unstable_NormalPriority,Io=i.unstable_LowPriority,Do=i.unstable_IdlePriority,Lo={},Fo=void 0!==Ro?Ro:function(){},Bo=null,Wo=null,Uo=!1,Vo=No(),$o=1e4>Vo?No:function(){return No()-Vo};function Ho(){switch(_o()){case zo:return 99;case Mo:return 98;case Ao:return 97;case Io:return 96;case Do:return 95;default:throw Error(a(332))}}function Ko(e){switch(e){case 99:return zo;case 98:return Mo;case 97:return Ao;case 96:return Io;case 95:return Do;default:throw Error(a(332))}}function qo(e,t){return e=Ko(e),Co(e,t)}function Qo(e,t,n){return e=Ko(e),jo(e,t,n)}function Yo(){if(null!==Wo){var e=Wo;Wo=null,To(e)}Xo()}function Xo(){if(!Uo&&null!==Bo){Uo=!0;var e=0;try{var t=Bo;qo(99,(function(){for(;e<t.length;e++){var n=t[e];do{n=n(!0)}while(null!==n)}})),Bo=null}catch(n){throw null!==Bo&&(Bo=Bo.slice(e+1)),jo(zo,Yo),n}finally{Uo=!1}}}var Go=k.ReactCurrentBatchConfig;function Jo(e,t){if(e&&e.defaultProps){for(var n in t=o({},t),e=e.defaultProps)void 0===t[n]&&(t[n]=e[n]);return t}return t}var Zo=so(null),ei=null,ti=null,ni=null;function ri(){ni=ti=ei=null}function oi(e){var t=Zo.current;co(Zo),e.type._context._currentValue=t}function ii(e,t){for(;null!==e;){var n=e.alternate;if((e.childLanes&t)===t){if(null===n||(n.childLanes&t)===t)break;n.childLanes|=t}else e.childLanes|=t,null!==n&&(n.childLanes|=t);e=e.return}}function ai(e,t){ei=e,ni=ti=null,null!==(e=e.dependencies)&&null!==e.firstContext&&(0!==(e.lanes&t)&&(Da=!0),e.firstContext=null)}function li(e,t){if(ni!==e&&!1!==t&&0!==t)if("number"===typeof t&&1073741823!==t||(ni=e,t=1073741823),t={context:e,observedBits:t,next:null},null===ti){if(null===ei)throw Error(a(308));ti=t,ei.dependencies={lanes:0,firstContext:t,responders:null}}else ti=ti.next=t;return e._currentValue}var ui=!1;function si(e){e.updateQueue={baseState:e.memoizedState,firstBaseUpdate:null,lastBaseUpdate:null,shared:{pending:null},effects:null}}function ci(e,t){e=e.updateQueue,t.updateQueue===e&&(t.updateQueue={baseState:e.baseState,firstBaseUpdate:e.firstBaseUpdate,lastBaseUpdate:e.lastBaseUpdate,shared:e.shared,effects:e.effects})}function fi(e,t){return{eventTime:e,lane:t,tag:0,payload:null,callback:null,next:null}}function di(e,t){if(null!==(e=e.updateQueue)){var n=(e=e.shared).pending;null===n?t.next=t:(t.next=n.next,n.next=t),e.pending=t}}function pi(e,t){var n=e.updateQueue,r=e.alternate;if(null!==r&&n===(r=r.updateQueue)){var o=null,i=null;if(null!==(n=n.firstBaseUpdate)){do{var a={eventTime:n.eventTime,lane:n.lane,tag:n.tag,payload:n.payload,callback:n.callback,next:null};null===i?o=i=a:i=i.next=a,n=n.next}while(null!==n);null===i?o=i=t:i=i.next=t}else o=i=t;return n={baseState:r.baseState,firstBaseUpdate:o,lastBaseUpdate:i,shared:r.shared,effects:r.effects},void(e.updateQueue=n)}null===(e=n.lastBaseUpdate)?n.firstBaseUpdate=t:e.next=t,n.lastBaseUpdate=t}function hi(e,t,n,r){var i=e.updateQueue;ui=!1;var a=i.firstBaseUpdate,l=i.lastBaseUpdate,u=i.shared.pending;if(null!==u){i.shared.pending=null;var s=u,c=s.next;s.next=null,null===l?a=c:l.next=c,l=s;var f=e.alternate;if(null!==f){var d=(f=f.updateQueue).lastBaseUpdate;d!==l&&(null===d?f.firstBaseUpdate=c:d.next=c,f.lastBaseUpdate=s)}}if(null!==a){for(d=i.baseState,l=0,f=c=s=null;;){u=a.lane;var p=a.eventTime;if((r&u)===u){null!==f&&(f=f.next={eventTime:p,lane:0,tag:a.tag,payload:a.payload,callback:a.callback,next:null});e:{var h=e,m=a;switch(u=t,p=n,m.tag){case 1:if("function"===typeof(h=m.payload)){d=h.call(p,d,u);break e}d=h;break e;case 3:h.flags=-4097&h.flags|64;case 0:if(null===(u="function"===typeof(h=m.payload)?h.call(p,d,u):h)||void 0===u)break e;d=o({},d,u);break e;case 2:ui=!0}}null!==a.callback&&(e.flags|=32,null===(u=i.effects)?i.effects=[a]:u.push(a))}else p={eventTime:p,lane:u,tag:a.tag,payload:a.payload,callback:a.callback,next:null},null===f?(c=f=p,s=d):f=f.next=p,l|=u;if(null===(a=a.next)){if(null===(u=i.shared.pending))break;a=u.next,u.next=null,i.lastBaseUpdate=u,i.shared.pending=null}}null===f&&(s=d),i.baseState=s,i.firstBaseUpdate=c,i.lastBaseUpdate=f,Wl|=l,e.lanes=l,e.memoizedState=d}}function mi(e,t,n){if(e=t.effects,t.effects=null,null!==e)for(t=0;t<e.length;t++){var r=e[t],o=r.callback;if(null!==o){if(r.callback=null,r=n,"function"!==typeof o)throw Error(a(191,o));o.call(r)}}}var yi=(new r.Component).refs;function gi(e,t,n,r){n=null===(n=n(r,t=e.memoizedState))||void 0===n?t:o({},t,n),e.memoizedState=n,0===e.lanes&&(e.updateQueue.baseState=n)}var vi={isMounted:function(e){return!!(e=e._reactInternals)&&Xe(e)===e},enqueueSetState:function(e,t,n){e=e._reactInternals;var r=du(),o=pu(e),i=fi(r,o);i.payload=t,void 0!==n&&null!==n&&(i.callback=n),di(e,i),hu(e,o,r)},enqueueReplaceState:function(e,t,n){e=e._reactInternals;var r=du(),o=pu(e),i=fi(r,o);i.tag=1,i.payload=t,void 0!==n&&null!==n&&(i.callback=n),di(e,i),hu(e,o,r)},enqueueForceUpdate:function(e,t){e=e._reactInternals;var n=du(),r=pu(e),o=fi(n,r);o.tag=2,void 0!==t&&null!==t&&(o.callback=t),di(e,o),hu(e,r,n)}};function bi(e,t,n,r,o,i,a){return"function"===typeof(e=e.stateNode).shouldComponentUpdate?e.shouldComponentUpdate(r,i,a):!t.prototype||!t.prototype.isPureReactComponent||(!dr(n,r)||!dr(o,i))}function xi(e,t,n){var r=!1,o=po,i=t.contextType;return"object"===typeof i&&null!==i?i=li(i):(o=vo(t)?yo:ho.current,i=(r=null!==(r=t.contextTypes)&&void 0!==r)?go(e,o):po),t=new t(n,i),e.memoizedState=null!==t.state&&void 0!==t.state?t.state:null,t.updater=vi,e.stateNode=t,t._reactInternals=e,r&&((e=e.stateNode).__reactInternalMemoizedUnmaskedChildContext=o,e.__reactInternalMemoizedMaskedChildContext=i),t}function ki(e,t,n,r){e=t.state,"function"===typeof t.componentWillReceiveProps&&t.componentWillReceiveProps(n,r),"function"===typeof t.UNSAFE_componentWillReceiveProps&&t.UNSAFE_componentWillReceiveProps(n,r),t.state!==e&&vi.enqueueReplaceState(t,t.state,null)}function wi(e,t,n,r){var o=e.stateNode;o.props=n,o.state=e.memoizedState,o.refs=yi,si(e);var i=t.contextType;"object"===typeof i&&null!==i?o.context=li(i):(i=vo(t)?yo:ho.current,o.context=go(e,i)),hi(e,n,o,r),o.state=e.memoizedState,"function"===typeof(i=t.getDerivedStateFromProps)&&(gi(e,t,i,n),o.state=e.memoizedState),"function"===typeof t.getDerivedStateFromProps||"function"===typeof o.getSnapshotBeforeUpdate||"function"!==typeof o.UNSAFE_componentWillMount&&"function"!==typeof o.componentWillMount||(t=o.state,"function"===typeof o.componentWillMount&&o.componentWillMount(),"function"===typeof o.UNSAFE_componentWillMount&&o.UNSAFE_componentWillMount(),t!==o.state&&vi.enqueueReplaceState(o,o.state,null),hi(e,n,o,r),o.state=e.memoizedState),"function"===typeof o.componentDidMount&&(e.flags|=4)}var Si=Array.isArray;function Ei(e,t,n){if(null!==(e=n.ref)&&"function"!==typeof e&&"object"!==typeof e){if(n._owner){if(n=n._owner){if(1!==n.tag)throw Error(a(309));var r=n.stateNode}if(!r)throw Error(a(147,e));var o=""+e;return null!==t&&null!==t.ref&&"function"===typeof t.ref&&t.ref._stringRef===o?t.ref:(t=function(e){var t=r.refs;t===yi&&(t=r.refs={}),null===e?delete t[o]:t[o]=e},t._stringRef=o,t)}if("string"!==typeof e)throw Error(a(284));if(!n._owner)throw Error(a(290,e))}return e}function Oi(e,t){if("textarea"!==e.type)throw Error(a(31,"[object Object]"===Object.prototype.toString.call(t)?"object with keys {"+Object.keys(t).join(", ")+"}":t))}function Ci(e){function t(t,n){if(e){var r=t.lastEffect;null!==r?(r.nextEffect=n,t.lastEffect=n):t.firstEffect=t.lastEffect=n,n.nextEffect=null,n.flags=8}}function n(n,r){if(!e)return null;for(;null!==r;)t(n,r),r=r.sibling;return null}function r(e,t){for(e=new Map;null!==t;)null!==t.key?e.set(t.key,t):e.set(t.index,t),t=t.sibling;return e}function o(e,t){return(e=Ku(e,t)).index=0,e.sibling=null,e}function i(t,n,r){return t.index=r,e?null!==(r=t.alternate)?(r=r.index)<n?(t.flags=2,n):r:(t.flags=2,n):n}function l(t){return e&&null===t.alternate&&(t.flags=2),t}function u(e,t,n,r){return null===t||6!==t.tag?((t=Xu(n,e.mode,r)).return=e,t):((t=o(t,n)).return=e,t)}function s(e,t,n,r){return null!==t&&t.elementType===n.type?((r=o(t,n.props)).ref=Ei(e,t,n),r.return=e,r):((r=qu(n.type,n.key,n.props,null,e.mode,r)).ref=Ei(e,t,n),r.return=e,r)}function c(e,t,n,r){return null===t||4!==t.tag||t.stateNode.containerInfo!==n.containerInfo||t.stateNode.implementation!==n.implementation?((t=Gu(n,e.mode,r)).return=e,t):((t=o(t,n.children||[])).return=e,t)}function f(e,t,n,r,i){return null===t||7!==t.tag?((t=Qu(n,e.mode,r,i)).return=e,t):((t=o(t,n)).return=e,t)}function d(e,t,n){if("string"===typeof t||"number"===typeof t)return(t=Xu(""+t,e.mode,n)).return=e,t;if("object"===typeof t&&null!==t){switch(t.$$typeof){case w:return(n=qu(t.type,t.key,t.props,null,e.mode,n)).ref=Ei(e,null,t),n.return=e,n;case S:return(t=Gu(t,e.mode,n)).return=e,t}if(Si(t)||U(t))return(t=Qu(t,e.mode,n,null)).return=e,t;Oi(e,t)}return null}function p(e,t,n,r){var o=null!==t?t.key:null;if("string"===typeof n||"number"===typeof n)return null!==o?null:u(e,t,""+n,r);if("object"===typeof n&&null!==n){switch(n.$$typeof){case w:return n.key===o?n.type===E?f(e,t,n.props.children,r,o):s(e,t,n,r):null;case S:return n.key===o?c(e,t,n,r):null}if(Si(n)||U(n))return null!==o?null:f(e,t,n,r,null);Oi(e,n)}return null}function h(e,t,n,r,o){if("string"===typeof r||"number"===typeof r)return u(t,e=e.get(n)||null,""+r,o);if("object"===typeof r&&null!==r){switch(r.$$typeof){case w:return e=e.get(null===r.key?n:r.key)||null,r.type===E?f(t,e,r.props.children,o,r.key):s(t,e,r,o);case S:return c(t,e=e.get(null===r.key?n:r.key)||null,r,o)}if(Si(r)||U(r))return f(t,e=e.get(n)||null,r,o,null);Oi(t,r)}return null}function m(o,a,l,u){for(var s=null,c=null,f=a,m=a=0,y=null;null!==f&&m<l.length;m++){f.index>m?(y=f,f=null):y=f.sibling;var g=p(o,f,l[m],u);if(null===g){null===f&&(f=y);break}e&&f&&null===g.alternate&&t(o,f),a=i(g,a,m),null===c?s=g:c.sibling=g,c=g,f=y}if(m===l.length)return n(o,f),s;if(null===f){for(;m<l.length;m++)null!==(f=d(o,l[m],u))&&(a=i(f,a,m),null===c?s=f:c.sibling=f,c=f);return s}for(f=r(o,f);m<l.length;m++)null!==(y=h(f,o,m,l[m],u))&&(e&&null!==y.alternate&&f.delete(null===y.key?m:y.key),a=i(y,a,m),null===c?s=y:c.sibling=y,c=y);return e&&f.forEach((function(e){return t(o,e)})),s}function y(o,l,u,s){var c=U(u);if("function"!==typeof c)throw Error(a(150));if(null==(u=c.call(u)))throw Error(a(151));for(var f=c=null,m=l,y=l=0,g=null,v=u.next();null!==m&&!v.done;y++,v=u.next()){m.index>y?(g=m,m=null):g=m.sibling;var b=p(o,m,v.value,s);if(null===b){null===m&&(m=g);break}e&&m&&null===b.alternate&&t(o,m),l=i(b,l,y),null===f?c=b:f.sibling=b,f=b,m=g}if(v.done)return n(o,m),c;if(null===m){for(;!v.done;y++,v=u.next())null!==(v=d(o,v.value,s))&&(l=i(v,l,y),null===f?c=v:f.sibling=v,f=v);return c}for(m=r(o,m);!v.done;y++,v=u.next())null!==(v=h(m,o,y,v.value,s))&&(e&&null!==v.alternate&&m.delete(null===v.key?y:v.key),l=i(v,l,y),null===f?c=v:f.sibling=v,f=v);return e&&m.forEach((function(e){return t(o,e)})),c}return function(e,r,i,u){var s="object"===typeof i&&null!==i&&i.type===E&&null===i.key;s&&(i=i.props.children);var c="object"===typeof i&&null!==i;if(c)switch(i.$$typeof){case w:e:{for(c=i.key,s=r;null!==s;){if(s.key===c){if(7===s.tag){if(i.type===E){n(e,s.sibling),(r=o(s,i.props.children)).return=e,e=r;break e}}else if(s.elementType===i.type){n(e,s.sibling),(r=o(s,i.props)).ref=Ei(e,s,i),r.return=e,e=r;break e}n(e,s);break}t(e,s),s=s.sibling}i.type===E?((r=Qu(i.props.children,e.mode,u,i.key)).return=e,e=r):((u=qu(i.type,i.key,i.props,null,e.mode,u)).ref=Ei(e,r,i),u.return=e,e=u)}return l(e);case S:e:{for(s=i.key;null!==r;){if(r.key===s){if(4===r.tag&&r.stateNode.containerInfo===i.containerInfo&&r.stateNode.implementation===i.implementation){n(e,r.sibling),(r=o(r,i.children||[])).return=e,e=r;break e}n(e,r);break}t(e,r),r=r.sibling}(r=Gu(i,e.mode,u)).return=e,e=r}return l(e)}if("string"===typeof i||"number"===typeof i)return i=""+i,null!==r&&6===r.tag?(n(e,r.sibling),(r=o(r,i)).return=e,e=r):(n(e,r),(r=Xu(i,e.mode,u)).return=e,e=r),l(e);if(Si(i))return m(e,r,i,u);if(U(i))return y(e,r,i,u);if(c&&Oi(e,i),"undefined"===typeof i&&!s)switch(e.tag){case 1:case 22:case 0:case 11:case 15:throw Error(a(152,q(e.type)||"Component"))}return n(e,r)}}var ji=Ci(!0),Ti=Ci(!1),Pi={},Ri=so(Pi),Ni=so(Pi),_i=so(Pi);function zi(e){if(e===Pi)throw Error(a(174));return e}function Mi(e,t){switch(fo(_i,t),fo(Ni,e),fo(Ri,Pi),e=t.nodeType){case 9:case 11:t=(t=t.documentElement)?t.namespaceURI:he(null,"");break;default:t=he(t=(e=8===e?t.parentNode:t).namespaceURI||null,e=e.tagName)}co(Ri),fo(Ri,t)}function Ai(){co(Ri),co(Ni),co(_i)}function Ii(e){zi(_i.current);var t=zi(Ri.current),n=he(t,e.type);t!==n&&(fo(Ni,e),fo(Ri,n))}function Di(e){Ni.current===e&&(co(Ri),co(Ni))}var Li=so(0);function Fi(e){for(var t=e;null!==t;){if(13===t.tag){var n=t.memoizedState;if(null!==n&&(null===(n=n.dehydrated)||"$?"===n.data||"$!"===n.data))return t}else if(19===t.tag&&void 0!==t.memoizedProps.revealOrder){if(0!==(64&t.flags))return t}else if(null!==t.child){t.child.return=t,t=t.child;continue}if(t===e)break;for(;null===t.sibling;){if(null===t.return||t.return===e)return null;t=t.return}t.sibling.return=t.return,t=t.sibling}return null}var Bi=null,Wi=null,Ui=!1;function Vi(e,t){var n=$u(5,null,null,0);n.elementType="DELETED",n.type="DELETED",n.stateNode=t,n.return=e,n.flags=8,null!==e.lastEffect?(e.lastEffect.nextEffect=n,e.lastEffect=n):e.firstEffect=e.lastEffect=n}function $i(e,t){switch(e.tag){case 5:var n=e.type;return null!==(t=1!==t.nodeType||n.toLowerCase()!==t.nodeName.toLowerCase()?null:t)&&(e.stateNode=t,!0);case 6:return null!==(t=""===e.pendingProps||3!==t.nodeType?null:t)&&(e.stateNode=t,!0);default:return!1}}function Hi(e){if(Ui){var t=Wi;if(t){var n=t;if(!$i(e,t)){if(!(t=Qr(n.nextSibling))||!$i(e,t))return e.flags=-1025&e.flags|2,Ui=!1,void(Bi=e);Vi(Bi,n)}Bi=e,Wi=Qr(t.firstChild)}else e.flags=-1025&e.flags|2,Ui=!1,Bi=e}}function Ki(e){for(e=e.return;null!==e&&5!==e.tag&&3!==e.tag&&13!==e.tag;)e=e.return;Bi=e}function qi(e){if(e!==Bi)return!1;if(!Ui)return Ki(e),Ui=!0,!1;var t=e.type;if(5!==e.tag||"head"!==t&&"body"!==t&&!$r(t,e.memoizedProps))for(t=Wi;t;)Vi(e,t),t=Qr(t.nextSibling);if(Ki(e),13===e.tag){if(!(e=null!==(e=e.memoizedState)?e.dehydrated:null))throw Error(a(317));e:{for(e=e.nextSibling,t=0;e;){if(8===e.nodeType){var n=e.data;if("/$"===n){if(0===t){Wi=Qr(e.nextSibling);break e}t--}else"$"!==n&&"$!"!==n&&"$?"!==n||t++}e=e.nextSibling}Wi=null}}else Wi=Bi?Qr(e.stateNode.nextSibling):null;return!0}function Qi(){Wi=Bi=null,Ui=!1}var Yi=[];function Xi(){for(var e=0;e<Yi.length;e++)Yi[e]._workInProgressVersionPrimary=null;Yi.length=0}var Gi=k.ReactCurrentDispatcher,Ji=k.ReactCurrentBatchConfig,Zi=0,ea=null,ta=null,na=null,ra=!1,oa=!1;function ia(){throw Error(a(321))}function aa(e,t){if(null===t)return!1;for(var n=0;n<t.length&&n<e.length;n++)if(!cr(e[n],t[n]))return!1;return!0}function la(e,t,n,r,o,i){if(Zi=i,ea=t,t.memoizedState=null,t.updateQueue=null,t.lanes=0,Gi.current=null===e||null===e.memoizedState?za:Ma,e=n(r,o),oa){i=0;do{if(oa=!1,!(25>i))throw Error(a(301));i+=1,na=ta=null,t.updateQueue=null,Gi.current=Aa,e=n(r,o)}while(oa)}if(Gi.current=_a,t=null!==ta&&null!==ta.next,Zi=0,na=ta=ea=null,ra=!1,t)throw Error(a(300));return e}function ua(){var e={memoizedState:null,baseState:null,baseQueue:null,queue:null,next:null};return null===na?ea.memoizedState=na=e:na=na.next=e,na}function sa(){if(null===ta){var e=ea.alternate;e=null!==e?e.memoizedState:null}else e=ta.next;var t=null===na?ea.memoizedState:na.next;if(null!==t)na=t,ta=e;else{if(null===e)throw Error(a(310));e={memoizedState:(ta=e).memoizedState,baseState:ta.baseState,baseQueue:ta.baseQueue,queue:ta.queue,next:null},null===na?ea.memoizedState=na=e:na=na.next=e}return na}function ca(e,t){return"function"===typeof t?t(e):t}function fa(e){var t=sa(),n=t.queue;if(null===n)throw Error(a(311));n.lastRenderedReducer=e;var r=ta,o=r.baseQueue,i=n.pending;if(null!==i){if(null!==o){var l=o.next;o.next=i.next,i.next=l}r.baseQueue=o=i,n.pending=null}if(null!==o){o=o.next,r=r.baseState;var u=l=i=null,s=o;do{var c=s.lane;if((Zi&c)===c)null!==u&&(u=u.next={lane:0,action:s.action,eagerReducer:s.eagerReducer,eagerState:s.eagerState,next:null}),r=s.eagerReducer===e?s.eagerState:e(r,s.action);else{var f={lane:c,action:s.action,eagerReducer:s.eagerReducer,eagerState:s.eagerState,next:null};null===u?(l=u=f,i=r):u=u.next=f,ea.lanes|=c,Wl|=c}s=s.next}while(null!==s&&s!==o);null===u?i=r:u.next=l,cr(r,t.memoizedState)||(Da=!0),t.memoizedState=r,t.baseState=i,t.baseQueue=u,n.lastRenderedState=r}return[t.memoizedState,n.dispatch]}function da(e){var t=sa(),n=t.queue;if(null===n)throw Error(a(311));n.lastRenderedReducer=e;var r=n.dispatch,o=n.pending,i=t.memoizedState;if(null!==o){n.pending=null;var l=o=o.next;do{i=e(i,l.action),l=l.next}while(l!==o);cr(i,t.memoizedState)||(Da=!0),t.memoizedState=i,null===t.baseQueue&&(t.baseState=i),n.lastRenderedState=i}return[i,r]}function pa(e,t,n){var r=t._getVersion;r=r(t._source);var o=t._workInProgressVersionPrimary;if(null!==o?e=o===r:(e=e.mutableReadLanes,(e=(Zi&e)===e)&&(t._workInProgressVersionPrimary=r,Yi.push(t))),e)return n(t._source);throw Yi.push(t),Error(a(350))}function ha(e,t,n,r){var o=zl;if(null===o)throw Error(a(349));var i=t._getVersion,l=i(t._source),u=Gi.current,s=u.useState((function(){return pa(o,t,n)})),c=s[1],f=s[0];s=na;var d=e.memoizedState,p=d.refs,h=p.getSnapshot,m=d.source;d=d.subscribe;var y=ea;return e.memoizedState={refs:p,source:t,subscribe:r},u.useEffect((function(){p.getSnapshot=n,p.setSnapshot=c;var e=i(t._source);if(!cr(l,e)){e=n(t._source),cr(f,e)||(c(e),e=pu(y),o.mutableReadLanes|=e&o.pendingLanes),e=o.mutableReadLanes,o.entangledLanes|=e;for(var r=o.entanglements,a=e;0<a;){var u=31-$t(a),s=1<<u;r[u]|=e,a&=~s}}}),[n,t,r]),u.useEffect((function(){return r(t._source,(function(){var e=p.getSnapshot,n=p.setSnapshot;try{n(e(t._source));var r=pu(y);o.mutableReadLanes|=r&o.pendingLanes}catch(i){n((function(){throw i}))}}))}),[t,r]),cr(h,n)&&cr(m,t)&&cr(d,r)||((e={pending:null,dispatch:null,lastRenderedReducer:ca,lastRenderedState:f}).dispatch=c=Na.bind(null,ea,e),s.queue=e,s.baseQueue=null,f=pa(o,t,n),s.memoizedState=s.baseState=f),f}function ma(e,t,n){return ha(sa(),e,t,n)}function ya(e){var t=ua();return"function"===typeof e&&(e=e()),t.memoizedState=t.baseState=e,e=(e=t.queue={pending:null,dispatch:null,lastRenderedReducer:ca,lastRenderedState:e}).dispatch=Na.bind(null,ea,e),[t.memoizedState,e]}function ga(e,t,n,r){return e={tag:e,create:t,destroy:n,deps:r,next:null},null===(t=ea.updateQueue)?(t={lastEffect:null},ea.updateQueue=t,t.lastEffect=e.next=e):null===(n=t.lastEffect)?t.lastEffect=e.next=e:(r=n.next,n.next=e,e.next=r,t.lastEffect=e),e}function va(e){return e={current:e},ua().memoizedState=e}function ba(){return sa().memoizedState}function xa(e,t,n,r){var o=ua();ea.flags|=e,o.memoizedState=ga(1|t,n,void 0,void 0===r?null:r)}function ka(e,t,n,r){var o=sa();r=void 0===r?null:r;var i=void 0;if(null!==ta){var a=ta.memoizedState;if(i=a.destroy,null!==r&&aa(r,a.deps))return void ga(t,n,i,r)}ea.flags|=e,o.memoizedState=ga(1|t,n,i,r)}function wa(e,t){return xa(516,4,e,t)}function Sa(e,t){return ka(516,4,e,t)}function Ea(e,t){return ka(4,2,e,t)}function Oa(e,t){return"function"===typeof t?(e=e(),t(e),function(){t(null)}):null!==t&&void 0!==t?(e=e(),t.current=e,function(){t.current=null}):void 0}function Ca(e,t,n){return n=null!==n&&void 0!==n?n.concat([e]):null,ka(4,2,Oa.bind(null,t,e),n)}function ja(){}function Ta(e,t){var n=sa();t=void 0===t?null:t;var r=n.memoizedState;return null!==r&&null!==t&&aa(t,r[1])?r[0]:(n.memoizedState=[e,t],e)}function Pa(e,t){var n=sa();t=void 0===t?null:t;var r=n.memoizedState;return null!==r&&null!==t&&aa(t,r[1])?r[0]:(e=e(),n.memoizedState=[e,t],e)}function Ra(e,t){var n=Ho();qo(98>n?98:n,(function(){e(!0)})),qo(97<n?97:n,(function(){var n=Ji.transition;Ji.transition=1;try{e(!1),t()}finally{Ji.transition=n}}))}function Na(e,t,n){var r=du(),o=pu(e),i={lane:o,action:n,eagerReducer:null,eagerState:null,next:null},a=t.pending;if(null===a?i.next=i:(i.next=a.next,a.next=i),t.pending=i,a=e.alternate,e===ea||null!==a&&a===ea)oa=ra=!0;else{if(0===e.lanes&&(null===a||0===a.lanes)&&null!==(a=t.lastRenderedReducer))try{var l=t.lastRenderedState,u=a(l,n);if(i.eagerReducer=a,i.eagerState=u,cr(u,l))return}catch(s){}hu(e,o,r)}}var _a={readContext:li,useCallback:ia,useContext:ia,useEffect:ia,useImperativeHandle:ia,useLayoutEffect:ia,useMemo:ia,useReducer:ia,useRef:ia,useState:ia,useDebugValue:ia,useDeferredValue:ia,useTransition:ia,useMutableSource:ia,useOpaqueIdentifier:ia,unstable_isNewReconciler:!1},za={readContext:li,useCallback:function(e,t){return ua().memoizedState=[e,void 0===t?null:t],e},useContext:li,useEffect:wa,useImperativeHandle:function(e,t,n){return n=null!==n&&void 0!==n?n.concat([e]):null,xa(4,2,Oa.bind(null,t,e),n)},useLayoutEffect:function(e,t){return xa(4,2,e,t)},useMemo:function(e,t){var n=ua();return t=void 0===t?null:t,e=e(),n.memoizedState=[e,t],e},useReducer:function(e,t,n){var r=ua();return t=void 0!==n?n(t):t,r.memoizedState=r.baseState=t,e=(e=r.queue={pending:null,dispatch:null,lastRenderedReducer:e,lastRenderedState:t}).dispatch=Na.bind(null,ea,e),[r.memoizedState,e]},useRef:va,useState:ya,useDebugValue:ja,useDeferredValue:function(e){var t=ya(e),n=t[0],r=t[1];return wa((function(){var t=Ji.transition;Ji.transition=1;try{r(e)}finally{Ji.transition=t}}),[e]),n},useTransition:function(){var e=ya(!1),t=e[0];return va(e=Ra.bind(null,e[1])),[e,t]},useMutableSource:function(e,t,n){var r=ua();return r.memoizedState={refs:{getSnapshot:t,setSnapshot:null},source:e,subscribe:n},ha(r,e,t,n)},useOpaqueIdentifier:function(){if(Ui){var e=!1,t=function(e){return{$$typeof:A,toString:e,valueOf:e}}((function(){throw e||(e=!0,n("r:"+(Xr++).toString(36))),Error(a(355))})),n=ya(t)[1];return 0===(2&ea.mode)&&(ea.flags|=516,ga(5,(function(){n("r:"+(Xr++).toString(36))}),void 0,null)),t}return ya(t="r:"+(Xr++).toString(36)),t},unstable_isNewReconciler:!1},Ma={readContext:li,useCallback:Ta,useContext:li,useEffect:Sa,useImperativeHandle:Ca,useLayoutEffect:Ea,useMemo:Pa,useReducer:fa,useRef:ba,useState:function(){return fa(ca)},useDebugValue:ja,useDeferredValue:function(e){var t=fa(ca),n=t[0],r=t[1];return Sa((function(){var t=Ji.transition;Ji.transition=1;try{r(e)}finally{Ji.transition=t}}),[e]),n},useTransition:function(){var e=fa(ca)[0];return[ba().current,e]},useMutableSource:ma,useOpaqueIdentifier:function(){return fa(ca)[0]},unstable_isNewReconciler:!1},Aa={readContext:li,useCallback:Ta,useContext:li,useEffect:Sa,useImperativeHandle:Ca,useLayoutEffect:Ea,useMemo:Pa,useReducer:da,useRef:ba,useState:function(){return da(ca)},useDebugValue:ja,useDeferredValue:function(e){var t=da(ca),n=t[0],r=t[1];return Sa((function(){var t=Ji.transition;Ji.transition=1;try{r(e)}finally{Ji.transition=t}}),[e]),n},useTransition:function(){var e=da(ca)[0];return[ba().current,e]},useMutableSource:ma,useOpaqueIdentifier:function(){return da(ca)[0]},unstable_isNewReconciler:!1},Ia=k.ReactCurrentOwner,Da=!1;function La(e,t,n,r){t.child=null===e?Ti(t,null,n,r):ji(t,e.child,n,r)}function Fa(e,t,n,r,o){n=n.render;var i=t.ref;return ai(t,o),r=la(e,t,n,r,i,o),null===e||Da?(t.flags|=1,La(e,t,r,o),t.child):(t.updateQueue=e.updateQueue,t.flags&=-517,e.lanes&=~o,il(e,t,o))}function Ba(e,t,n,r,o,i){if(null===e){var a=n.type;return"function"!==typeof a||Hu(a)||void 0!==a.defaultProps||null!==n.compare||void 0!==n.defaultProps?((e=qu(n.type,null,r,t,t.mode,i)).ref=t.ref,e.return=t,t.child=e):(t.tag=15,t.type=a,Wa(e,t,a,r,o,i))}return a=e.child,0===(o&i)&&(o=a.memoizedProps,(n=null!==(n=n.compare)?n:dr)(o,r)&&e.ref===t.ref)?il(e,t,i):(t.flags|=1,(e=Ku(a,r)).ref=t.ref,e.return=t,t.child=e)}function Wa(e,t,n,r,o,i){if(null!==e&&dr(e.memoizedProps,r)&&e.ref===t.ref){if(Da=!1,0===(i&o))return t.lanes=e.lanes,il(e,t,i);0!==(16384&e.flags)&&(Da=!0)}return $a(e,t,n,r,i)}function Ua(e,t,n){var r=t.pendingProps,o=r.children,i=null!==e?e.memoizedState:null;if("hidden"===r.mode||"unstable-defer-without-hiding"===r.mode)if(0===(4&t.mode))t.memoizedState={baseLanes:0},wu(t,n);else{if(0===(1073741824&n))return e=null!==i?i.baseLanes|n:n,t.lanes=t.childLanes=1073741824,t.memoizedState={baseLanes:e},wu(t,e),null;t.memoizedState={baseLanes:0},wu(t,null!==i?i.baseLanes:n)}else null!==i?(r=i.baseLanes|n,t.memoizedState=null):r=n,wu(t,r);return La(e,t,o,n),t.child}function Va(e,t){var n=t.ref;(null===e&&null!==n||null!==e&&e.ref!==n)&&(t.flags|=128)}function $a(e,t,n,r,o){var i=vo(n)?yo:ho.current;return i=go(t,i),ai(t,o),n=la(e,t,n,r,i,o),null===e||Da?(t.flags|=1,La(e,t,n,o),t.child):(t.updateQueue=e.updateQueue,t.flags&=-517,e.lanes&=~o,il(e,t,o))}function Ha(e,t,n,r,o){if(vo(n)){var i=!0;wo(t)}else i=!1;if(ai(t,o),null===t.stateNode)null!==e&&(e.alternate=null,t.alternate=null,t.flags|=2),xi(t,n,r),wi(t,n,r,o),r=!0;else if(null===e){var a=t.stateNode,l=t.memoizedProps;a.props=l;var u=a.context,s=n.contextType;"object"===typeof s&&null!==s?s=li(s):s=go(t,s=vo(n)?yo:ho.current);var c=n.getDerivedStateFromProps,f="function"===typeof c||"function"===typeof a.getSnapshotBeforeUpdate;f||"function"!==typeof a.UNSAFE_componentWillReceiveProps&&"function"!==typeof a.componentWillReceiveProps||(l!==r||u!==s)&&ki(t,a,r,s),ui=!1;var d=t.memoizedState;a.state=d,hi(t,r,a,o),u=t.memoizedState,l!==r||d!==u||mo.current||ui?("function"===typeof c&&(gi(t,n,c,r),u=t.memoizedState),(l=ui||bi(t,n,l,r,d,u,s))?(f||"function"!==typeof a.UNSAFE_componentWillMount&&"function"!==typeof a.componentWillMount||("function"===typeof a.componentWillMount&&a.componentWillMount(),"function"===typeof a.UNSAFE_componentWillMount&&a.UNSAFE_componentWillMount()),"function"===typeof a.componentDidMount&&(t.flags|=4)):("function"===typeof a.componentDidMount&&(t.flags|=4),t.memoizedProps=r,t.memoizedState=u),a.props=r,a.state=u,a.context=s,r=l):("function"===typeof a.componentDidMount&&(t.flags|=4),r=!1)}else{a=t.stateNode,ci(e,t),l=t.memoizedProps,s=t.type===t.elementType?l:Jo(t.type,l),a.props=s,f=t.pendingProps,d=a.context,"object"===typeof(u=n.contextType)&&null!==u?u=li(u):u=go(t,u=vo(n)?yo:ho.current);var p=n.getDerivedStateFromProps;(c="function"===typeof p||"function"===typeof a.getSnapshotBeforeUpdate)||"function"!==typeof a.UNSAFE_componentWillReceiveProps&&"function"!==typeof a.componentWillReceiveProps||(l!==f||d!==u)&&ki(t,a,r,u),ui=!1,d=t.memoizedState,a.state=d,hi(t,r,a,o);var h=t.memoizedState;l!==f||d!==h||mo.current||ui?("function"===typeof p&&(gi(t,n,p,r),h=t.memoizedState),(s=ui||bi(t,n,s,r,d,h,u))?(c||"function"!==typeof a.UNSAFE_componentWillUpdate&&"function"!==typeof a.componentWillUpdate||("function"===typeof a.componentWillUpdate&&a.componentWillUpdate(r,h,u),"function"===typeof a.UNSAFE_componentWillUpdate&&a.UNSAFE_componentWillUpdate(r,h,u)),"function"===typeof a.componentDidUpdate&&(t.flags|=4),"function"===typeof a.getSnapshotBeforeUpdate&&(t.flags|=256)):("function"!==typeof a.componentDidUpdate||l===e.memoizedProps&&d===e.memoizedState||(t.flags|=4),"function"!==typeof a.getSnapshotBeforeUpdate||l===e.memoizedProps&&d===e.memoizedState||(t.flags|=256),t.memoizedProps=r,t.memoizedState=h),a.props=r,a.state=h,a.context=u,r=s):("function"!==typeof a.componentDidUpdate||l===e.memoizedProps&&d===e.memoizedState||(t.flags|=4),"function"!==typeof a.getSnapshotBeforeUpdate||l===e.memoizedProps&&d===e.memoizedState||(t.flags|=256),r=!1)}return Ka(e,t,n,r,i,o)}function Ka(e,t,n,r,o,i){Va(e,t);var a=0!==(64&t.flags);if(!r&&!a)return o&&So(t,n,!1),il(e,t,i);r=t.stateNode,Ia.current=t;var l=a&&"function"!==typeof n.getDerivedStateFromError?null:r.render();return t.flags|=1,null!==e&&a?(t.child=ji(t,e.child,null,i),t.child=ji(t,null,l,i)):La(e,t,l,i),t.memoizedState=r.state,o&&So(t,n,!0),t.child}function qa(e){var t=e.stateNode;t.pendingContext?xo(0,t.pendingContext,t.pendingContext!==t.context):t.context&&xo(0,t.context,!1),Mi(e,t.containerInfo)}var Qa,Ya,Xa,Ga={dehydrated:null,retryLane:0};function Ja(e,t,n){var r,o=t.pendingProps,i=Li.current,a=!1;return(r=0!==(64&t.flags))||(r=(null===e||null!==e.memoizedState)&&0!==(2&i)),r?(a=!0,t.flags&=-65):null!==e&&null===e.memoizedState||void 0===o.fallback||!0===o.unstable_avoidThisFallback||(i|=1),fo(Li,1&i),null===e?(void 0!==o.fallback&&Hi(t),e=o.children,i=o.fallback,a?(e=Za(t,e,i,n),t.child.memoizedState={baseLanes:n},t.memoizedState=Ga,e):"number"===typeof o.unstable_expectedLoadTime?(e=Za(t,e,i,n),t.child.memoizedState={baseLanes:n},t.memoizedState=Ga,t.lanes=33554432,e):((n=Yu({mode:"visible",children:e},t.mode,n,null)).return=t,t.child=n)):(e.memoizedState,a?(o=tl(e,t,o.children,o.fallback,n),a=t.child,i=e.child.memoizedState,a.memoizedState=null===i?{baseLanes:n}:{baseLanes:i.baseLanes|n},a.childLanes=e.childLanes&~n,t.memoizedState=Ga,o):(n=el(e,t,o.children,n),t.memoizedState=null,n))}function Za(e,t,n,r){var o=e.mode,i=e.child;return t={mode:"hidden",children:t},0===(2&o)&&null!==i?(i.childLanes=0,i.pendingProps=t):i=Yu(t,o,0,null),n=Qu(n,o,r,null),i.return=e,n.return=e,i.sibling=n,e.child=i,n}function el(e,t,n,r){var o=e.child;return e=o.sibling,n=Ku(o,{mode:"visible",children:n}),0===(2&t.mode)&&(n.lanes=r),n.return=t,n.sibling=null,null!==e&&(e.nextEffect=null,e.flags=8,t.firstEffect=t.lastEffect=e),t.child=n}function tl(e,t,n,r,o){var i=t.mode,a=e.child;e=a.sibling;var l={mode:"hidden",children:n};return 0===(2&i)&&t.child!==a?((n=t.child).childLanes=0,n.pendingProps=l,null!==(a=n.lastEffect)?(t.firstEffect=n.firstEffect,t.lastEffect=a,a.nextEffect=null):t.firstEffect=t.lastEffect=null):n=Ku(a,l),null!==e?r=Ku(e,r):(r=Qu(r,i,o,null)).flags|=2,r.return=t,n.return=t,n.sibling=r,t.child=n,r}function nl(e,t){e.lanes|=t;var n=e.alternate;null!==n&&(n.lanes|=t),ii(e.return,t)}function rl(e,t,n,r,o,i){var a=e.memoizedState;null===a?e.memoizedState={isBackwards:t,rendering:null,renderingStartTime:0,last:r,tail:n,tailMode:o,lastEffect:i}:(a.isBackwards=t,a.rendering=null,a.renderingStartTime=0,a.last=r,a.tail=n,a.tailMode=o,a.lastEffect=i)}function ol(e,t,n){var r=t.pendingProps,o=r.revealOrder,i=r.tail;if(La(e,t,r.children,n),0!==(2&(r=Li.current)))r=1&r|2,t.flags|=64;else{if(null!==e&&0!==(64&e.flags))e:for(e=t.child;null!==e;){if(13===e.tag)null!==e.memoizedState&&nl(e,n);else if(19===e.tag)nl(e,n);else if(null!==e.child){e.child.return=e,e=e.child;continue}if(e===t)break e;for(;null===e.sibling;){if(null===e.return||e.return===t)break e;e=e.return}e.sibling.return=e.return,e=e.sibling}r&=1}if(fo(Li,r),0===(2&t.mode))t.memoizedState=null;else switch(o){case"forwards":for(n=t.child,o=null;null!==n;)null!==(e=n.alternate)&&null===Fi(e)&&(o=n),n=n.sibling;null===(n=o)?(o=t.child,t.child=null):(o=n.sibling,n.sibling=null),rl(t,!1,o,n,i,t.lastEffect);break;case"backwards":for(n=null,o=t.child,t.child=null;null!==o;){if(null!==(e=o.alternate)&&null===Fi(e)){t.child=o;break}e=o.sibling,o.sibling=n,n=o,o=e}rl(t,!0,n,null,i,t.lastEffect);break;case"together":rl(t,!1,null,null,void 0,t.lastEffect);break;default:t.memoizedState=null}return t.child}function il(e,t,n){if(null!==e&&(t.dependencies=e.dependencies),Wl|=t.lanes,0!==(n&t.childLanes)){if(null!==e&&t.child!==e.child)throw Error(a(153));if(null!==t.child){for(n=Ku(e=t.child,e.pendingProps),t.child=n,n.return=t;null!==e.sibling;)e=e.sibling,(n=n.sibling=Ku(e,e.pendingProps)).return=t;n.sibling=null}return t.child}return null}function al(e,t){if(!Ui)switch(e.tailMode){case"hidden":t=e.tail;for(var n=null;null!==t;)null!==t.alternate&&(n=t),t=t.sibling;null===n?e.tail=null:n.sibling=null;break;case"collapsed":n=e.tail;for(var r=null;null!==n;)null!==n.alternate&&(r=n),n=n.sibling;null===r?t||null===e.tail?e.tail=null:e.tail.sibling=null:r.sibling=null}}function ll(e,t,n){var r=t.pendingProps;switch(t.tag){case 2:case 16:case 15:case 0:case 11:case 7:case 8:case 12:case 9:case 14:return null;case 1:case 17:return vo(t.type)&&bo(),null;case 3:return Ai(),co(mo),co(ho),Xi(),(r=t.stateNode).pendingContext&&(r.context=r.pendingContext,r.pendingContext=null),null!==e&&null!==e.child||(qi(t)?t.flags|=4:r.hydrate||(t.flags|=256)),null;case 5:Di(t);var i=zi(_i.current);if(n=t.type,null!==e&&null!=t.stateNode)Ya(e,t,n,r),e.ref!==t.ref&&(t.flags|=128);else{if(!r){if(null===t.stateNode)throw Error(a(166));return null}if(e=zi(Ri.current),qi(t)){r=t.stateNode,n=t.type;var l=t.memoizedProps;switch(r[Jr]=t,r[Zr]=l,n){case"dialog":Rr("cancel",r),Rr("close",r);break;case"iframe":case"object":case"embed":Rr("load",r);break;case"video":case"audio":for(e=0;e<Cr.length;e++)Rr(Cr[e],r);break;case"source":Rr("error",r);break;case"img":case"image":case"link":Rr("error",r),Rr("load",r);break;case"details":Rr("toggle",r);break;case"input":ee(r,l),Rr("invalid",r);break;case"select":r._wrapperState={wasMultiple:!!l.multiple},Rr("invalid",r);break;case"textarea":ue(r,l),Rr("invalid",r)}for(var s in Ee(n,l),e=null,l)l.hasOwnProperty(s)&&(i=l[s],"children"===s?"string"===typeof i?r.textContent!==i&&(e=["children",i]):"number"===typeof i&&r.textContent!==""+i&&(e=["children",""+i]):u.hasOwnProperty(s)&&null!=i&&"onScroll"===s&&Rr("scroll",r));switch(n){case"input":X(r),re(r,l,!0);break;case"textarea":X(r),ce(r);break;case"select":case"option":break;default:"function"===typeof l.onClick&&(r.onclick=Br)}r=e,t.updateQueue=r,null!==r&&(t.flags|=4)}else{switch(s=9===i.nodeType?i:i.ownerDocument,e===fe&&(e=pe(n)),e===fe?"script"===n?((e=s.createElement("div")).innerHTML="<script><\/script>",e=e.removeChild(e.firstChild)):"string"===typeof r.is?e=s.createElement(n,{is:r.is}):(e=s.createElement(n),"select"===n&&(s=e,r.multiple?s.multiple=!0:r.size&&(s.size=r.size))):e=s.createElementNS(e,n),e[Jr]=t,e[Zr]=r,Qa(e,t),t.stateNode=e,s=Oe(n,r),n){case"dialog":Rr("cancel",e),Rr("close",e),i=r;break;case"iframe":case"object":case"embed":Rr("load",e),i=r;break;case"video":case"audio":for(i=0;i<Cr.length;i++)Rr(Cr[i],e);i=r;break;case"source":Rr("error",e),i=r;break;case"img":case"image":case"link":Rr("error",e),Rr("load",e),i=r;break;case"details":Rr("toggle",e),i=r;break;case"input":ee(e,r),i=Z(e,r),Rr("invalid",e);break;case"option":i=ie(e,r);break;case"select":e._wrapperState={wasMultiple:!!r.multiple},i=o({},r,{value:void 0}),Rr("invalid",e);break;case"textarea":ue(e,r),i=le(e,r),Rr("invalid",e);break;default:i=r}Ee(n,i);var c=i;for(l in c)if(c.hasOwnProperty(l)){var f=c[l];"style"===l?we(e,f):"dangerouslySetInnerHTML"===l?null!=(f=f?f.__html:void 0)&&ge(e,f):"children"===l?"string"===typeof f?("textarea"!==n||""!==f)&&ve(e,f):"number"===typeof f&&ve(e,""+f):"suppressContentEditableWarning"!==l&&"suppressHydrationWarning"!==l&&"autoFocus"!==l&&(u.hasOwnProperty(l)?null!=f&&"onScroll"===l&&Rr("scroll",e):null!=f&&x(e,l,f,s))}switch(n){case"input":X(e),re(e,r,!1);break;case"textarea":X(e),ce(e);break;case"option":null!=r.value&&e.setAttribute("value",""+Q(r.value));break;case"select":e.multiple=!!r.multiple,null!=(l=r.value)?ae(e,!!r.multiple,l,!1):null!=r.defaultValue&&ae(e,!!r.multiple,r.defaultValue,!0);break;default:"function"===typeof i.onClick&&(e.onclick=Br)}Vr(n,r)&&(t.flags|=4)}null!==t.ref&&(t.flags|=128)}return null;case 6:if(e&&null!=t.stateNode)Xa(0,t,e.memoizedProps,r);else{if("string"!==typeof r&&null===t.stateNode)throw Error(a(166));n=zi(_i.current),zi(Ri.current),qi(t)?(r=t.stateNode,n=t.memoizedProps,r[Jr]=t,r.nodeValue!==n&&(t.flags|=4)):((r=(9===n.nodeType?n:n.ownerDocument).createTextNode(r))[Jr]=t,t.stateNode=r)}return null;case 13:return co(Li),r=t.memoizedState,0!==(64&t.flags)?(t.lanes=n,t):(r=null!==r,n=!1,null===e?void 0!==t.memoizedProps.fallback&&qi(t):n=null!==e.memoizedState,r&&!n&&0!==(2&t.mode)&&(null===e&&!0!==t.memoizedProps.unstable_avoidThisFallback||0!==(1&Li.current)?0===Ll&&(Ll=3):(0!==Ll&&3!==Ll||(Ll=4),null===zl||0===(134217727&Wl)&&0===(134217727&Ul)||vu(zl,Al))),(r||n)&&(t.flags|=4),null);case 4:return Ai(),null===e&&_r(t.stateNode.containerInfo),null;case 10:return oi(t),null;case 19:if(co(Li),null===(r=t.memoizedState))return null;if(l=0!==(64&t.flags),null===(s=r.rendering))if(l)al(r,!1);else{if(0!==Ll||null!==e&&0!==(64&e.flags))for(e=t.child;null!==e;){if(null!==(s=Fi(e))){for(t.flags|=64,al(r,!1),null!==(l=s.updateQueue)&&(t.updateQueue=l,t.flags|=4),null===r.lastEffect&&(t.firstEffect=null),t.lastEffect=r.lastEffect,r=n,n=t.child;null!==n;)e=r,(l=n).flags&=2,l.nextEffect=null,l.firstEffect=null,l.lastEffect=null,null===(s=l.alternate)?(l.childLanes=0,l.lanes=e,l.child=null,l.memoizedProps=null,l.memoizedState=null,l.updateQueue=null,l.dependencies=null,l.stateNode=null):(l.childLanes=s.childLanes,l.lanes=s.lanes,l.child=s.child,l.memoizedProps=s.memoizedProps,l.memoizedState=s.memoizedState,l.updateQueue=s.updateQueue,l.type=s.type,e=s.dependencies,l.dependencies=null===e?null:{lanes:e.lanes,firstContext:e.firstContext}),n=n.sibling;return fo(Li,1&Li.current|2),t.child}e=e.sibling}null!==r.tail&&$o()>Kl&&(t.flags|=64,l=!0,al(r,!1),t.lanes=33554432)}else{if(!l)if(null!==(e=Fi(s))){if(t.flags|=64,l=!0,null!==(n=e.updateQueue)&&(t.updateQueue=n,t.flags|=4),al(r,!0),null===r.tail&&"hidden"===r.tailMode&&!s.alternate&&!Ui)return null!==(t=t.lastEffect=r.lastEffect)&&(t.nextEffect=null),null}else 2*$o()-r.renderingStartTime>Kl&&1073741824!==n&&(t.flags|=64,l=!0,al(r,!1),t.lanes=33554432);r.isBackwards?(s.sibling=t.child,t.child=s):(null!==(n=r.last)?n.sibling=s:t.child=s,r.last=s)}return null!==r.tail?(n=r.tail,r.rendering=n,r.tail=n.sibling,r.lastEffect=t.lastEffect,r.renderingStartTime=$o(),n.sibling=null,t=Li.current,fo(Li,l?1&t|2:1&t),n):null;case 23:case 24:return Su(),null!==e&&null!==e.memoizedState!==(null!==t.memoizedState)&&"unstable-defer-without-hiding"!==r.mode&&(t.flags|=4),null}throw Error(a(156,t.tag))}function ul(e){switch(e.tag){case 1:vo(e.type)&&bo();var t=e.flags;return 4096&t?(e.flags=-4097&t|64,e):null;case 3:if(Ai(),co(mo),co(ho),Xi(),0!==(64&(t=e.flags)))throw Error(a(285));return e.flags=-4097&t|64,e;case 5:return Di(e),null;case 13:return co(Li),4096&(t=e.flags)?(e.flags=-4097&t|64,e):null;case 19:return co(Li),null;case 4:return Ai(),null;case 10:return oi(e),null;case 23:case 24:return Su(),null;default:return null}}function sl(e,t){try{var n="",r=t;do{n+=K(r),r=r.return}while(r);var o=n}catch(i){o="\nError generating stack: "+i.message+"\n"+i.stack}return{value:e,source:t,stack:o}}function cl(e,t){try{console.error(t.value)}catch(n){setTimeout((function(){throw n}))}}Qa=function(e,t){for(var n=t.child;null!==n;){if(5===n.tag||6===n.tag)e.appendChild(n.stateNode);else if(4!==n.tag&&null!==n.child){n.child.return=n,n=n.child;continue}if(n===t)break;for(;null===n.sibling;){if(null===n.return||n.return===t)return;n=n.return}n.sibling.return=n.return,n=n.sibling}},Ya=function(e,t,n,r){var i=e.memoizedProps;if(i!==r){e=t.stateNode,zi(Ri.current);var a,l=null;switch(n){case"input":i=Z(e,i),r=Z(e,r),l=[];break;case"option":i=ie(e,i),r=ie(e,r),l=[];break;case"select":i=o({},i,{value:void 0}),r=o({},r,{value:void 0}),l=[];break;case"textarea":i=le(e,i),r=le(e,r),l=[];break;default:"function"!==typeof i.onClick&&"function"===typeof r.onClick&&(e.onclick=Br)}for(f in Ee(n,r),n=null,i)if(!r.hasOwnProperty(f)&&i.hasOwnProperty(f)&&null!=i[f])if("style"===f){var s=i[f];for(a in s)s.hasOwnProperty(a)&&(n||(n={}),n[a]="")}else"dangerouslySetInnerHTML"!==f&&"children"!==f&&"suppressContentEditableWarning"!==f&&"suppressHydrationWarning"!==f&&"autoFocus"!==f&&(u.hasOwnProperty(f)?l||(l=[]):(l=l||[]).push(f,null));for(f in r){var c=r[f];if(s=null!=i?i[f]:void 0,r.hasOwnProperty(f)&&c!==s&&(null!=c||null!=s))if("style"===f)if(s){for(a in s)!s.hasOwnProperty(a)||c&&c.hasOwnProperty(a)||(n||(n={}),n[a]="");for(a in c)c.hasOwnProperty(a)&&s[a]!==c[a]&&(n||(n={}),n[a]=c[a])}else n||(l||(l=[]),l.push(f,n)),n=c;else"dangerouslySetInnerHTML"===f?(c=c?c.__html:void 0,s=s?s.__html:void 0,null!=c&&s!==c&&(l=l||[]).push(f,c)):"children"===f?"string"!==typeof c&&"number"!==typeof c||(l=l||[]).push(f,""+c):"suppressContentEditableWarning"!==f&&"suppressHydrationWarning"!==f&&(u.hasOwnProperty(f)?(null!=c&&"onScroll"===f&&Rr("scroll",e),l||s===c||(l=[])):"object"===typeof c&&null!==c&&c.$$typeof===A?c.toString():(l=l||[]).push(f,c))}n&&(l=l||[]).push("style",n);var f=l;(t.updateQueue=f)&&(t.flags|=4)}},Xa=function(e,t,n,r){n!==r&&(t.flags|=4)};var fl="function"===typeof WeakMap?WeakMap:Map;function dl(e,t,n){(n=fi(-1,n)).tag=3,n.payload={element:null};var r=t.value;return n.callback=function(){Xl||(Xl=!0,Gl=r),cl(0,t)},n}function pl(e,t,n){(n=fi(-1,n)).tag=3;var r=e.type.getDerivedStateFromError;if("function"===typeof r){var o=t.value;n.payload=function(){return cl(0,t),r(o)}}var i=e.stateNode;return null!==i&&"function"===typeof i.componentDidCatch&&(n.callback=function(){"function"!==typeof r&&(null===Jl?Jl=new Set([this]):Jl.add(this),cl(0,t));var e=t.stack;this.componentDidCatch(t.value,{componentStack:null!==e?e:""})}),n}var hl="function"===typeof WeakSet?WeakSet:Set;function ml(e){var t=e.ref;if(null!==t)if("function"===typeof t)try{t(null)}catch(n){Bu(e,n)}else t.current=null}function yl(e,t){switch(t.tag){case 0:case 11:case 15:case 22:case 5:case 6:case 4:case 17:return;case 1:if(256&t.flags&&null!==e){var n=e.memoizedProps,r=e.memoizedState;t=(e=t.stateNode).getSnapshotBeforeUpdate(t.elementType===t.type?n:Jo(t.type,n),r),e.__reactInternalSnapshotBeforeUpdate=t}return;case 3:return void(256&t.flags&&qr(t.stateNode.containerInfo))}throw Error(a(163))}function gl(e,t,n){switch(n.tag){case 0:case 11:case 15:case 22:if(null!==(t=null!==(t=n.updateQueue)?t.lastEffect:null)){e=t=t.next;do{if(3===(3&e.tag)){var r=e.create;e.destroy=r()}e=e.next}while(e!==t)}if(null!==(t=null!==(t=n.updateQueue)?t.lastEffect:null)){e=t=t.next;do{var o=e;r=o.next,0!==(4&(o=o.tag))&&0!==(1&o)&&(Du(n,e),Iu(n,e)),e=r}while(e!==t)}return;case 1:return e=n.stateNode,4&n.flags&&(null===t?e.componentDidMount():(r=n.elementType===n.type?t.memoizedProps:Jo(n.type,t.memoizedProps),e.componentDidUpdate(r,t.memoizedState,e.__reactInternalSnapshotBeforeUpdate))),void(null!==(t=n.updateQueue)&&mi(n,t,e));case 3:if(null!==(t=n.updateQueue)){if(e=null,null!==n.child)switch(n.child.tag){case 5:case 1:e=n.child.stateNode}mi(n,t,e)}return;case 5:return e=n.stateNode,void(null===t&&4&n.flags&&Vr(n.type,n.memoizedProps)&&e.focus());case 6:case 4:case 12:case 19:case 17:case 20:case 21:case 23:case 24:return;case 13:return void(null===n.memoizedState&&(n=n.alternate,null!==n&&(n=n.memoizedState,null!==n&&(n=n.dehydrated,null!==n&&wt(n)))))}throw Error(a(163))}function vl(e,t){for(var n=e;;){if(5===n.tag){var r=n.stateNode;if(t)"function"===typeof(r=r.style).setProperty?r.setProperty("display","none","important"):r.display="none";else{r=n.stateNode;var o=n.memoizedProps.style;o=void 0!==o&&null!==o&&o.hasOwnProperty("display")?o.display:null,r.style.display=ke("display",o)}}else if(6===n.tag)n.stateNode.nodeValue=t?"":n.memoizedProps;else if((23!==n.tag&&24!==n.tag||null===n.memoizedState||n===e)&&null!==n.child){n.child.return=n,n=n.child;continue}if(n===e)break;for(;null===n.sibling;){if(null===n.return||n.return===e)return;n=n.return}n.sibling.return=n.return,n=n.sibling}}function bl(e,t){if(Oo&&"function"===typeof Oo.onCommitFiberUnmount)try{Oo.onCommitFiberUnmount(Eo,t)}catch(i){}switch(t.tag){case 0:case 11:case 14:case 15:case 22:if(null!==(e=t.updateQueue)&&null!==(e=e.lastEffect)){var n=e=e.next;do{var r=n,o=r.destroy;if(r=r.tag,void 0!==o)if(0!==(4&r))Du(t,n);else{r=t;try{o()}catch(i){Bu(r,i)}}n=n.next}while(n!==e)}break;case 1:if(ml(t),"function"===typeof(e=t.stateNode).componentWillUnmount)try{e.props=t.memoizedProps,e.state=t.memoizedState,e.componentWillUnmount()}catch(i){Bu(t,i)}break;case 5:ml(t);break;case 4:Ol(e,t)}}function xl(e){e.alternate=null,e.child=null,e.dependencies=null,e.firstEffect=null,e.lastEffect=null,e.memoizedProps=null,e.memoizedState=null,e.pendingProps=null,e.return=null,e.updateQueue=null}function kl(e){return 5===e.tag||3===e.tag||4===e.tag}function wl(e){e:{for(var t=e.return;null!==t;){if(kl(t))break e;t=t.return}throw Error(a(160))}var n=t;switch(t=n.stateNode,n.tag){case 5:var r=!1;break;case 3:case 4:t=t.containerInfo,r=!0;break;default:throw Error(a(161))}16&n.flags&&(ve(t,""),n.flags&=-17);e:t:for(n=e;;){for(;null===n.sibling;){if(null===n.return||kl(n.return)){n=null;break e}n=n.return}for(n.sibling.return=n.return,n=n.sibling;5!==n.tag&&6!==n.tag&&18!==n.tag;){if(2&n.flags)continue t;if(null===n.child||4===n.tag)continue t;n.child.return=n,n=n.child}if(!(2&n.flags)){n=n.stateNode;break e}}r?Sl(e,n,t):El(e,n,t)}function Sl(e,t,n){var r=e.tag,o=5===r||6===r;if(o)e=o?e.stateNode:e.stateNode.instance,t?8===n.nodeType?n.parentNode.insertBefore(e,t):n.insertBefore(e,t):(8===n.nodeType?(t=n.parentNode).insertBefore(e,n):(t=n).appendChild(e),null!==(n=n._reactRootContainer)&&void 0!==n||null!==t.onclick||(t.onclick=Br));else if(4!==r&&null!==(e=e.child))for(Sl(e,t,n),e=e.sibling;null!==e;)Sl(e,t,n),e=e.sibling}function El(e,t,n){var r=e.tag,o=5===r||6===r;if(o)e=o?e.stateNode:e.stateNode.instance,t?n.insertBefore(e,t):n.appendChild(e);else if(4!==r&&null!==(e=e.child))for(El(e,t,n),e=e.sibling;null!==e;)El(e,t,n),e=e.sibling}function Ol(e,t){for(var n,r,o=t,i=!1;;){if(!i){i=o.return;e:for(;;){if(null===i)throw Error(a(160));switch(n=i.stateNode,i.tag){case 5:r=!1;break e;case 3:case 4:n=n.containerInfo,r=!0;break e}i=i.return}i=!0}if(5===o.tag||6===o.tag){e:for(var l=e,u=o,s=u;;)if(bl(l,s),null!==s.child&&4!==s.tag)s.child.return=s,s=s.child;else{if(s===u)break e;for(;null===s.sibling;){if(null===s.return||s.return===u)break e;s=s.return}s.sibling.return=s.return,s=s.sibling}r?(l=n,u=o.stateNode,8===l.nodeType?l.parentNode.removeChild(u):l.removeChild(u)):n.removeChild(o.stateNode)}else if(4===o.tag){if(null!==o.child){n=o.stateNode.containerInfo,r=!0,o.child.return=o,o=o.child;continue}}else if(bl(e,o),null!==o.child){o.child.return=o,o=o.child;continue}if(o===t)break;for(;null===o.sibling;){if(null===o.return||o.return===t)return;4===(o=o.return).tag&&(i=!1)}o.sibling.return=o.return,o=o.sibling}}function Cl(e,t){switch(t.tag){case 0:case 11:case 14:case 15:case 22:var n=t.updateQueue;if(null!==(n=null!==n?n.lastEffect:null)){var r=n=n.next;do{3===(3&r.tag)&&(e=r.destroy,r.destroy=void 0,void 0!==e&&e()),r=r.next}while(r!==n)}return;case 1:case 12:case 17:return;case 5:if(null!=(n=t.stateNode)){r=t.memoizedProps;var o=null!==e?e.memoizedProps:r;e=t.type;var i=t.updateQueue;if(t.updateQueue=null,null!==i){for(n[Zr]=r,"input"===e&&"radio"===r.type&&null!=r.name&&te(n,r),Oe(e,o),t=Oe(e,r),o=0;o<i.length;o+=2){var l=i[o],u=i[o+1];"style"===l?we(n,u):"dangerouslySetInnerHTML"===l?ge(n,u):"children"===l?ve(n,u):x(n,l,u,t)}switch(e){case"input":ne(n,r);break;case"textarea":se(n,r);break;case"select":e=n._wrapperState.wasMultiple,n._wrapperState.wasMultiple=!!r.multiple,null!=(i=r.value)?ae(n,!!r.multiple,i,!1):e!==!!r.multiple&&(null!=r.defaultValue?ae(n,!!r.multiple,r.defaultValue,!0):ae(n,!!r.multiple,r.multiple?[]:"",!1))}}}return;case 6:if(null===t.stateNode)throw Error(a(162));return void(t.stateNode.nodeValue=t.memoizedProps);case 3:return void((n=t.stateNode).hydrate&&(n.hydrate=!1,wt(n.containerInfo)));case 13:return null!==t.memoizedState&&(Hl=$o(),vl(t.child,!0)),void jl(t);case 19:return void jl(t);case 23:case 24:return void vl(t,null!==t.memoizedState)}throw Error(a(163))}function jl(e){var t=e.updateQueue;if(null!==t){e.updateQueue=null;var n=e.stateNode;null===n&&(n=e.stateNode=new hl),t.forEach((function(t){var r=Uu.bind(null,e,t);n.has(t)||(n.add(t),t.then(r,r))}))}}function Tl(e,t){return null!==e&&(null===(e=e.memoizedState)||null!==e.dehydrated)&&(null!==(t=t.memoizedState)&&null===t.dehydrated)}var Pl=Math.ceil,Rl=k.ReactCurrentDispatcher,Nl=k.ReactCurrentOwner,_l=0,zl=null,Ml=null,Al=0,Il=0,Dl=so(0),Ll=0,Fl=null,Bl=0,Wl=0,Ul=0,Vl=0,$l=null,Hl=0,Kl=1/0;function ql(){Kl=$o()+500}var Ql,Yl=null,Xl=!1,Gl=null,Jl=null,Zl=!1,eu=null,tu=90,nu=[],ru=[],ou=null,iu=0,au=null,lu=-1,uu=0,su=0,cu=null,fu=!1;function du(){return 0!==(48&_l)?$o():-1!==lu?lu:lu=$o()}function pu(e){if(0===(2&(e=e.mode)))return 1;if(0===(4&e))return 99===Ho()?1:2;if(0===uu&&(uu=Bl),0!==Go.transition){0!==su&&(su=null!==$l?$l.pendingLanes:0),e=uu;var t=4186112&~su;return 0===(t&=-t)&&(0===(t=(e=4186112&~e)&-e)&&(t=8192)),t}return e=Ho(),0!==(4&_l)&&98===e?e=Bt(12,uu):e=Bt(e=function(e){switch(e){case 99:return 15;case 98:return 10;case 97:case 96:return 8;case 95:return 2;default:return 0}}(e),uu),e}function hu(e,t,n){if(50<iu)throw iu=0,au=null,Error(a(185));if(null===(e=mu(e,t)))return null;Vt(e,t,n),e===zl&&(Ul|=t,4===Ll&&vu(e,Al));var r=Ho();1===t?0!==(8&_l)&&0===(48&_l)?bu(e):(yu(e,n),0===_l&&(ql(),Yo())):(0===(4&_l)||98!==r&&99!==r||(null===ou?ou=new Set([e]):ou.add(e)),yu(e,n)),$l=e}function mu(e,t){e.lanes|=t;var n=e.alternate;for(null!==n&&(n.lanes|=t),n=e,e=e.return;null!==e;)e.childLanes|=t,null!==(n=e.alternate)&&(n.childLanes|=t),n=e,e=e.return;return 3===n.tag?n.stateNode:null}function yu(e,t){for(var n=e.callbackNode,r=e.suspendedLanes,o=e.pingedLanes,i=e.expirationTimes,l=e.pendingLanes;0<l;){var u=31-$t(l),s=1<<u,c=i[u];if(-1===c){if(0===(s&r)||0!==(s&o)){c=t,Dt(s);var f=It;i[u]=10<=f?c+250:6<=f?c+5e3:-1}}else c<=t&&(e.expiredLanes|=s);l&=~s}if(r=Lt(e,e===zl?Al:0),t=It,0===r)null!==n&&(n!==Lo&&To(n),e.callbackNode=null,e.callbackPriority=0);else{if(null!==n){if(e.callbackPriority===t)return;n!==Lo&&To(n)}15===t?(n=bu.bind(null,e),null===Bo?(Bo=[n],Wo=jo(zo,Xo)):Bo.push(n),n=Lo):14===t?n=Qo(99,bu.bind(null,e)):(n=function(e){switch(e){case 15:case 14:return 99;case 13:case 12:case 11:case 10:return 98;case 9:case 8:case 7:case 6:case 4:case 5:return 97;case 3:case 2:case 1:return 95;case 0:return 90;default:throw Error(a(358,e))}}(t),n=Qo(n,gu.bind(null,e))),e.callbackPriority=t,e.callbackNode=n}}function gu(e){if(lu=-1,su=uu=0,0!==(48&_l))throw Error(a(327));var t=e.callbackNode;if(Au()&&e.callbackNode!==t)return null;var n=Lt(e,e===zl?Al:0);if(0===n)return null;var r=n,o=_l;_l|=16;var i=Cu();for(zl===e&&Al===r||(ql(),Eu(e,r));;)try{Pu();break}catch(u){Ou(e,u)}if(ri(),Rl.current=i,_l=o,null!==Ml?r=0:(zl=null,Al=0,r=Ll),0!==(Bl&Ul))Eu(e,0);else if(0!==r){if(2===r&&(_l|=64,e.hydrate&&(e.hydrate=!1,qr(e.containerInfo)),0!==(n=Ft(e))&&(r=ju(e,n))),1===r)throw t=Fl,Eu(e,0),vu(e,n),yu(e,$o()),t;switch(e.finishedWork=e.current.alternate,e.finishedLanes=n,r){case 0:case 1:throw Error(a(345));case 2:case 5:_u(e);break;case 3:if(vu(e,n),(62914560&n)===n&&10<(r=Hl+500-$o())){if(0!==Lt(e,0))break;if(((o=e.suspendedLanes)&n)!==n){du(),e.pingedLanes|=e.suspendedLanes&o;break}e.timeoutHandle=Hr(_u.bind(null,e),r);break}_u(e);break;case 4:if(vu(e,n),(4186112&n)===n)break;for(r=e.eventTimes,o=-1;0<n;){var l=31-$t(n);i=1<<l,(l=r[l])>o&&(o=l),n&=~i}if(n=o,10<(n=(120>(n=$o()-n)?120:480>n?480:1080>n?1080:1920>n?1920:3e3>n?3e3:4320>n?4320:1960*Pl(n/1960))-n)){e.timeoutHandle=Hr(_u.bind(null,e),n);break}_u(e);break;default:throw Error(a(329))}}return yu(e,$o()),e.callbackNode===t?gu.bind(null,e):null}function vu(e,t){for(t&=~Vl,t&=~Ul,e.suspendedLanes|=t,e.pingedLanes&=~t,e=e.expirationTimes;0<t;){var n=31-$t(t),r=1<<n;e[n]=-1,t&=~r}}function bu(e){if(0!==(48&_l))throw Error(a(327));if(Au(),e===zl&&0!==(e.expiredLanes&Al)){var t=Al,n=ju(e,t);0!==(Bl&Ul)&&(n=ju(e,t=Lt(e,t)))}else n=ju(e,t=Lt(e,0));if(0!==e.tag&&2===n&&(_l|=64,e.hydrate&&(e.hydrate=!1,qr(e.containerInfo)),0!==(t=Ft(e))&&(n=ju(e,t))),1===n)throw n=Fl,Eu(e,0),vu(e,t),yu(e,$o()),n;return e.finishedWork=e.current.alternate,e.finishedLanes=t,_u(e),yu(e,$o()),null}function xu(e,t){var n=_l;_l|=1;try{return e(t)}finally{0===(_l=n)&&(ql(),Yo())}}function ku(e,t){var n=_l;_l&=-2,_l|=8;try{return e(t)}finally{0===(_l=n)&&(ql(),Yo())}}function wu(e,t){fo(Dl,Il),Il|=t,Bl|=t}function Su(){Il=Dl.current,co(Dl)}function Eu(e,t){e.finishedWork=null,e.finishedLanes=0;var n=e.timeoutHandle;if(-1!==n&&(e.timeoutHandle=-1,Kr(n)),null!==Ml)for(n=Ml.return;null!==n;){var r=n;switch(r.tag){case 1:null!==(r=r.type.childContextTypes)&&void 0!==r&&bo();break;case 3:Ai(),co(mo),co(ho),Xi();break;case 5:Di(r);break;case 4:Ai();break;case 13:case 19:co(Li);break;case 10:oi(r);break;case 23:case 24:Su()}n=n.return}zl=e,Ml=Ku(e.current,null),Al=Il=Bl=t,Ll=0,Fl=null,Vl=Ul=Wl=0}function Ou(e,t){for(;;){var n=Ml;try{if(ri(),Gi.current=_a,ra){for(var r=ea.memoizedState;null!==r;){var o=r.queue;null!==o&&(o.pending=null),r=r.next}ra=!1}if(Zi=0,na=ta=ea=null,oa=!1,Nl.current=null,null===n||null===n.return){Ll=1,Fl=t,Ml=null;break}e:{var i=e,a=n.return,l=n,u=t;if(t=Al,l.flags|=2048,l.firstEffect=l.lastEffect=null,null!==u&&"object"===typeof u&&"function"===typeof u.then){var s=u;if(0===(2&l.mode)){var c=l.alternate;c?(l.updateQueue=c.updateQueue,l.memoizedState=c.memoizedState,l.lanes=c.lanes):(l.updateQueue=null,l.memoizedState=null)}var f=0!==(1&Li.current),d=a;do{var p;if(p=13===d.tag){var h=d.memoizedState;if(null!==h)p=null!==h.dehydrated;else{var m=d.memoizedProps;p=void 0!==m.fallback&&(!0!==m.unstable_avoidThisFallback||!f)}}if(p){var y=d.updateQueue;if(null===y){var g=new Set;g.add(s),d.updateQueue=g}else y.add(s);if(0===(2&d.mode)){if(d.flags|=64,l.flags|=16384,l.flags&=-2981,1===l.tag)if(null===l.alternate)l.tag=17;else{var v=fi(-1,1);v.tag=2,di(l,v)}l.lanes|=1;break e}u=void 0,l=t;var b=i.pingCache;if(null===b?(b=i.pingCache=new fl,u=new Set,b.set(s,u)):void 0===(u=b.get(s))&&(u=new Set,b.set(s,u)),!u.has(l)){u.add(l);var x=Wu.bind(null,i,s,l);s.then(x,x)}d.flags|=4096,d.lanes=t;break e}d=d.return}while(null!==d);u=Error((q(l.type)||"A React component")+" suspended while rendering, but no fallback UI was specified.\n\nAdd a <Suspense fallback=...> component higher in the tree to provide a loading indicator or placeholder to display.")}5!==Ll&&(Ll=2),u=sl(u,l),d=a;do{switch(d.tag){case 3:i=u,d.flags|=4096,t&=-t,d.lanes|=t,pi(d,dl(0,i,t));break e;case 1:i=u;var k=d.type,w=d.stateNode;if(0===(64&d.flags)&&("function"===typeof k.getDerivedStateFromError||null!==w&&"function"===typeof w.componentDidCatch&&(null===Jl||!Jl.has(w)))){d.flags|=4096,t&=-t,d.lanes|=t,pi(d,pl(d,i,t));break e}}d=d.return}while(null!==d)}Nu(n)}catch(S){t=S,Ml===n&&null!==n&&(Ml=n=n.return);continue}break}}function Cu(){var e=Rl.current;return Rl.current=_a,null===e?_a:e}function ju(e,t){var n=_l;_l|=16;var r=Cu();for(zl===e&&Al===t||Eu(e,t);;)try{Tu();break}catch(o){Ou(e,o)}if(ri(),_l=n,Rl.current=r,null!==Ml)throw Error(a(261));return zl=null,Al=0,Ll}function Tu(){for(;null!==Ml;)Ru(Ml)}function Pu(){for(;null!==Ml&&!Po();)Ru(Ml)}function Ru(e){var t=Ql(e.alternate,e,Il);e.memoizedProps=e.pendingProps,null===t?Nu(e):Ml=t,Nl.current=null}function Nu(e){var t=e;do{var n=t.alternate;if(e=t.return,0===(2048&t.flags)){if(null!==(n=ll(n,t,Il)))return void(Ml=n);if(24!==(n=t).tag&&23!==n.tag||null===n.memoizedState||0!==(1073741824&Il)||0===(4&n.mode)){for(var r=0,o=n.child;null!==o;)r|=o.lanes|o.childLanes,o=o.sibling;n.childLanes=r}null!==e&&0===(2048&e.flags)&&(null===e.firstEffect&&(e.firstEffect=t.firstEffect),null!==t.lastEffect&&(null!==e.lastEffect&&(e.lastEffect.nextEffect=t.firstEffect),e.lastEffect=t.lastEffect),1<t.flags&&(null!==e.lastEffect?e.lastEffect.nextEffect=t:e.firstEffect=t,e.lastEffect=t))}else{if(null!==(n=ul(t)))return n.flags&=2047,void(Ml=n);null!==e&&(e.firstEffect=e.lastEffect=null,e.flags|=2048)}if(null!==(t=t.sibling))return void(Ml=t);Ml=t=e}while(null!==t);0===Ll&&(Ll=5)}function _u(e){var t=Ho();return qo(99,zu.bind(null,e,t)),null}function zu(e,t){do{Au()}while(null!==eu);if(0!==(48&_l))throw Error(a(327));var n=e.finishedWork;if(null===n)return null;if(e.finishedWork=null,e.finishedLanes=0,n===e.current)throw Error(a(177));e.callbackNode=null;var r=n.lanes|n.childLanes,o=r,i=e.pendingLanes&~o;e.pendingLanes=o,e.suspendedLanes=0,e.pingedLanes=0,e.expiredLanes&=o,e.mutableReadLanes&=o,e.entangledLanes&=o,o=e.entanglements;for(var l=e.eventTimes,u=e.expirationTimes;0<i;){var s=31-$t(i),c=1<<s;o[s]=0,l[s]=-1,u[s]=-1,i&=~c}if(null!==ou&&0===(24&r)&&ou.has(e)&&ou.delete(e),e===zl&&(Ml=zl=null,Al=0),1<n.flags?null!==n.lastEffect?(n.lastEffect.nextEffect=n,r=n.firstEffect):r=n:r=n.firstEffect,null!==r){if(o=_l,_l|=32,Nl.current=null,Wr=Yt,gr(l=yr())){if("selectionStart"in l)u={start:l.selectionStart,end:l.selectionEnd};else e:if(u=(u=l.ownerDocument)&&u.defaultView||window,(c=u.getSelection&&u.getSelection())&&0!==c.rangeCount){u=c.anchorNode,i=c.anchorOffset,s=c.focusNode,c=c.focusOffset;try{u.nodeType,s.nodeType}catch(C){u=null;break e}var f=0,d=-1,p=-1,h=0,m=0,y=l,g=null;t:for(;;){for(var v;y!==u||0!==i&&3!==y.nodeType||(d=f+i),y!==s||0!==c&&3!==y.nodeType||(p=f+c),3===y.nodeType&&(f+=y.nodeValue.length),null!==(v=y.firstChild);)g=y,y=v;for(;;){if(y===l)break t;if(g===u&&++h===i&&(d=f),g===s&&++m===c&&(p=f),null!==(v=y.nextSibling))break;g=(y=g).parentNode}y=v}u=-1===d||-1===p?null:{start:d,end:p}}else u=null;u=u||{start:0,end:0}}else u=null;Ur={focusedElem:l,selectionRange:u},Yt=!1,cu=null,fu=!1,Yl=r;do{try{Mu()}catch(C){if(null===Yl)throw Error(a(330));Bu(Yl,C),Yl=Yl.nextEffect}}while(null!==Yl);cu=null,Yl=r;do{try{for(l=e;null!==Yl;){var b=Yl.flags;if(16&b&&ve(Yl.stateNode,""),128&b){var x=Yl.alternate;if(null!==x){var k=x.ref;null!==k&&("function"===typeof k?k(null):k.current=null)}}switch(1038&b){case 2:wl(Yl),Yl.flags&=-3;break;case 6:wl(Yl),Yl.flags&=-3,Cl(Yl.alternate,Yl);break;case 1024:Yl.flags&=-1025;break;case 1028:Yl.flags&=-1025,Cl(Yl.alternate,Yl);break;case 4:Cl(Yl.alternate,Yl);break;case 8:Ol(l,u=Yl);var w=u.alternate;xl(u),null!==w&&xl(w)}Yl=Yl.nextEffect}}catch(C){if(null===Yl)throw Error(a(330));Bu(Yl,C),Yl=Yl.nextEffect}}while(null!==Yl);if(k=Ur,x=yr(),b=k.focusedElem,l=k.selectionRange,x!==b&&b&&b.ownerDocument&&mr(b.ownerDocument.documentElement,b)){null!==l&&gr(b)&&(x=l.start,void 0===(k=l.end)&&(k=x),"selectionStart"in b?(b.selectionStart=x,b.selectionEnd=Math.min(k,b.value.length)):(k=(x=b.ownerDocument||document)&&x.defaultView||window).getSelection&&(k=k.getSelection(),u=b.textContent.length,w=Math.min(l.start,u),l=void 0===l.end?w:Math.min(l.end,u),!k.extend&&w>l&&(u=l,l=w,w=u),u=hr(b,w),i=hr(b,l),u&&i&&(1!==k.rangeCount||k.anchorNode!==u.node||k.anchorOffset!==u.offset||k.focusNode!==i.node||k.focusOffset!==i.offset)&&((x=x.createRange()).setStart(u.node,u.offset),k.removeAllRanges(),w>l?(k.addRange(x),k.extend(i.node,i.offset)):(x.setEnd(i.node,i.offset),k.addRange(x))))),x=[];for(k=b;k=k.parentNode;)1===k.nodeType&&x.push({element:k,left:k.scrollLeft,top:k.scrollTop});for("function"===typeof b.focus&&b.focus(),b=0;b<x.length;b++)(k=x[b]).element.scrollLeft=k.left,k.element.scrollTop=k.top}Yt=!!Wr,Ur=Wr=null,e.current=n,Yl=r;do{try{for(b=e;null!==Yl;){var S=Yl.flags;if(36&S&&gl(b,Yl.alternate,Yl),128&S){x=void 0;var E=Yl.ref;if(null!==E){var O=Yl.stateNode;Yl.tag,x=O,"function"===typeof E?E(x):E.current=x}}Yl=Yl.nextEffect}}catch(C){if(null===Yl)throw Error(a(330));Bu(Yl,C),Yl=Yl.nextEffect}}while(null!==Yl);Yl=null,Fo(),_l=o}else e.current=n;if(Zl)Zl=!1,eu=e,tu=t;else for(Yl=r;null!==Yl;)t=Yl.nextEffect,Yl.nextEffect=null,8&Yl.flags&&((S=Yl).sibling=null,S.stateNode=null),Yl=t;if(0===(r=e.pendingLanes)&&(Jl=null),1===r?e===au?iu++:(iu=0,au=e):iu=0,n=n.stateNode,Oo&&"function"===typeof Oo.onCommitFiberRoot)try{Oo.onCommitFiberRoot(Eo,n,void 0,64===(64&n.current.flags))}catch(C){}if(yu(e,$o()),Xl)throw Xl=!1,e=Gl,Gl=null,e;return 0!==(8&_l)||Yo(),null}function Mu(){for(;null!==Yl;){var e=Yl.alternate;fu||null===cu||(0!==(8&Yl.flags)?et(Yl,cu)&&(fu=!0):13===Yl.tag&&Tl(e,Yl)&&et(Yl,cu)&&(fu=!0));var t=Yl.flags;0!==(256&t)&&yl(e,Yl),0===(512&t)||Zl||(Zl=!0,Qo(97,(function(){return Au(),null}))),Yl=Yl.nextEffect}}function Au(){if(90!==tu){var e=97<tu?97:tu;return tu=90,qo(e,Lu)}return!1}function Iu(e,t){nu.push(t,e),Zl||(Zl=!0,Qo(97,(function(){return Au(),null})))}function Du(e,t){ru.push(t,e),Zl||(Zl=!0,Qo(97,(function(){return Au(),null})))}function Lu(){if(null===eu)return!1;var e=eu;if(eu=null,0!==(48&_l))throw Error(a(331));var t=_l;_l|=32;var n=ru;ru=[];for(var r=0;r<n.length;r+=2){var o=n[r],i=n[r+1],l=o.destroy;if(o.destroy=void 0,"function"===typeof l)try{l()}catch(s){if(null===i)throw Error(a(330));Bu(i,s)}}for(n=nu,nu=[],r=0;r<n.length;r+=2){o=n[r],i=n[r+1];try{var u=o.create;o.destroy=u()}catch(s){if(null===i)throw Error(a(330));Bu(i,s)}}for(u=e.current.firstEffect;null!==u;)e=u.nextEffect,u.nextEffect=null,8&u.flags&&(u.sibling=null,u.stateNode=null),u=e;return _l=t,Yo(),!0}function Fu(e,t,n){di(e,t=dl(0,t=sl(n,t),1)),t=du(),null!==(e=mu(e,1))&&(Vt(e,1,t),yu(e,t))}function Bu(e,t){if(3===e.tag)Fu(e,e,t);else for(var n=e.return;null!==n;){if(3===n.tag){Fu(n,e,t);break}if(1===n.tag){var r=n.stateNode;if("function"===typeof n.type.getDerivedStateFromError||"function"===typeof r.componentDidCatch&&(null===Jl||!Jl.has(r))){var o=pl(n,e=sl(t,e),1);if(di(n,o),o=du(),null!==(n=mu(n,1)))Vt(n,1,o),yu(n,o);else if("function"===typeof r.componentDidCatch&&(null===Jl||!Jl.has(r)))try{r.componentDidCatch(t,e)}catch(i){}break}}n=n.return}}function Wu(e,t,n){var r=e.pingCache;null!==r&&r.delete(t),t=du(),e.pingedLanes|=e.suspendedLanes&n,zl===e&&(Al&n)===n&&(4===Ll||3===Ll&&(62914560&Al)===Al&&500>$o()-Hl?Eu(e,0):Vl|=n),yu(e,t)}function Uu(e,t){var n=e.stateNode;null!==n&&n.delete(t),0===(t=0)&&(0===(2&(t=e.mode))?t=1:0===(4&t)?t=99===Ho()?1:2:(0===uu&&(uu=Bl),0===(t=Wt(62914560&~uu))&&(t=4194304))),n=du(),null!==(e=mu(e,t))&&(Vt(e,t,n),yu(e,n))}function Vu(e,t,n,r){this.tag=e,this.key=n,this.sibling=this.child=this.return=this.stateNode=this.type=this.elementType=null,this.index=0,this.ref=null,this.pendingProps=t,this.dependencies=this.memoizedState=this.updateQueue=this.memoizedProps=null,this.mode=r,this.flags=0,this.lastEffect=this.firstEffect=this.nextEffect=null,this.childLanes=this.lanes=0,this.alternate=null}function $u(e,t,n,r){return new Vu(e,t,n,r)}function Hu(e){return!(!(e=e.prototype)||!e.isReactComponent)}function Ku(e,t){var n=e.alternate;return null===n?((n=$u(e.tag,t,e.key,e.mode)).elementType=e.elementType,n.type=e.type,n.stateNode=e.stateNode,n.alternate=e,e.alternate=n):(n.pendingProps=t,n.type=e.type,n.flags=0,n.nextEffect=null,n.firstEffect=null,n.lastEffect=null),n.childLanes=e.childLanes,n.lanes=e.lanes,n.child=e.child,n.memoizedProps=e.memoizedProps,n.memoizedState=e.memoizedState,n.updateQueue=e.updateQueue,t=e.dependencies,n.dependencies=null===t?null:{lanes:t.lanes,firstContext:t.firstContext},n.sibling=e.sibling,n.index=e.index,n.ref=e.ref,n}function qu(e,t,n,r,o,i){var l=2;if(r=e,"function"===typeof e)Hu(e)&&(l=1);else if("string"===typeof e)l=5;else e:switch(e){case E:return Qu(n.children,o,i,t);case I:l=8,o|=16;break;case O:l=8,o|=1;break;case C:return(e=$u(12,n,t,8|o)).elementType=C,e.type=C,e.lanes=i,e;case R:return(e=$u(13,n,t,o)).type=R,e.elementType=R,e.lanes=i,e;case N:return(e=$u(19,n,t,o)).elementType=N,e.lanes=i,e;case D:return Yu(n,o,i,t);case L:return(e=$u(24,n,t,o)).elementType=L,e.lanes=i,e;default:if("object"===typeof e&&null!==e)switch(e.$$typeof){case j:l=10;break e;case T:l=9;break e;case P:l=11;break e;case _:l=14;break e;case z:l=16,r=null;break e;case M:l=22;break e}throw Error(a(130,null==e?e:typeof e,""))}return(t=$u(l,n,t,o)).elementType=e,t.type=r,t.lanes=i,t}function Qu(e,t,n,r){return(e=$u(7,e,r,t)).lanes=n,e}function Yu(e,t,n,r){return(e=$u(23,e,r,t)).elementType=D,e.lanes=n,e}function Xu(e,t,n){return(e=$u(6,e,null,t)).lanes=n,e}function Gu(e,t,n){return(t=$u(4,null!==e.children?e.children:[],e.key,t)).lanes=n,t.stateNode={containerInfo:e.containerInfo,pendingChildren:null,implementation:e.implementation},t}function Ju(e,t,n){this.tag=t,this.containerInfo=e,this.finishedWork=this.pingCache=this.current=this.pendingChildren=null,this.timeoutHandle=-1,this.pendingContext=this.context=null,this.hydrate=n,this.callbackNode=null,this.callbackPriority=0,this.eventTimes=Ut(0),this.expirationTimes=Ut(-1),this.entangledLanes=this.finishedLanes=this.mutableReadLanes=this.expiredLanes=this.pingedLanes=this.suspendedLanes=this.pendingLanes=0,this.entanglements=Ut(0),this.mutableSourceEagerHydrationData=null}function Zu(e,t,n){var r=3<arguments.length&&void 0!==arguments[3]?arguments[3]:null;return{$$typeof:S,key:null==r?null:""+r,children:e,containerInfo:t,implementation:n}}function es(e,t,n,r){var o=t.current,i=du(),l=pu(o);e:if(n){t:{if(Xe(n=n._reactInternals)!==n||1!==n.tag)throw Error(a(170));var u=n;do{switch(u.tag){case 3:u=u.stateNode.context;break t;case 1:if(vo(u.type)){u=u.stateNode.__reactInternalMemoizedMergedChildContext;break t}}u=u.return}while(null!==u);throw Error(a(171))}if(1===n.tag){var s=n.type;if(vo(s)){n=ko(n,s,u);break e}}n=u}else n=po;return null===t.context?t.context=n:t.pendingContext=n,(t=fi(i,l)).payload={element:e},null!==(r=void 0===r?null:r)&&(t.callback=r),di(o,t),hu(o,l,i),l}function ts(e){return(e=e.current).child?(e.child.tag,e.child.stateNode):null}function ns(e,t){if(null!==(e=e.memoizedState)&&null!==e.dehydrated){var n=e.retryLane;e.retryLane=0!==n&&n<t?n:t}}function rs(e,t){ns(e,t),(e=e.alternate)&&ns(e,t)}function os(e,t,n){var r=null!=n&&null!=n.hydrationOptions&&n.hydrationOptions.mutableSources||null;if(n=new Ju(e,t,null!=n&&!0===n.hydrate),t=$u(3,null,null,2===t?7:1===t?3:0),n.current=t,t.stateNode=n,si(t),e[eo]=n.current,_r(8===e.nodeType?e.parentNode:e),r)for(e=0;e<r.length;e++){var o=(t=r[e])._getVersion;o=o(t._source),null==n.mutableSourceEagerHydrationData?n.mutableSourceEagerHydrationData=[t,o]:n.mutableSourceEagerHydrationData.push(t,o)}this._internalRoot=n}function is(e){return!(!e||1!==e.nodeType&&9!==e.nodeType&&11!==e.nodeType&&(8!==e.nodeType||" react-mount-point-unstable "!==e.nodeValue))}function as(e,t,n,r,o){var i=n._reactRootContainer;if(i){var a=i._internalRoot;if("function"===typeof o){var l=o;o=function(){var e=ts(a);l.call(e)}}es(t,a,e,o)}else{if(i=n._reactRootContainer=function(e,t){if(t||(t=!(!(t=e?9===e.nodeType?e.documentElement:e.firstChild:null)||1!==t.nodeType||!t.hasAttribute("data-reactroot"))),!t)for(var n;n=e.lastChild;)e.removeChild(n);return new os(e,0,t?{hydrate:!0}:void 0)}(n,r),a=i._internalRoot,"function"===typeof o){var u=o;o=function(){var e=ts(a);u.call(e)}}ku((function(){es(t,a,e,o)}))}return ts(a)}function ls(e,t){var n=2<arguments.length&&void 0!==arguments[2]?arguments[2]:null;if(!is(t))throw Error(a(200));return Zu(e,t,null,n)}Ql=function(e,t,n){var r=t.lanes;if(null!==e)if(e.memoizedProps!==t.pendingProps||mo.current)Da=!0;else{if(0===(n&r)){switch(Da=!1,t.tag){case 3:qa(t),Qi();break;case 5:Ii(t);break;case 1:vo(t.type)&&wo(t);break;case 4:Mi(t,t.stateNode.containerInfo);break;case 10:r=t.memoizedProps.value;var o=t.type._context;fo(Zo,o._currentValue),o._currentValue=r;break;case 13:if(null!==t.memoizedState)return 0!==(n&t.child.childLanes)?Ja(e,t,n):(fo(Li,1&Li.current),null!==(t=il(e,t,n))?t.sibling:null);fo(Li,1&Li.current);break;case 19:if(r=0!==(n&t.childLanes),0!==(64&e.flags)){if(r)return ol(e,t,n);t.flags|=64}if(null!==(o=t.memoizedState)&&(o.rendering=null,o.tail=null,o.lastEffect=null),fo(Li,Li.current),r)break;return null;case 23:case 24:return t.lanes=0,Ua(e,t,n)}return il(e,t,n)}Da=0!==(16384&e.flags)}else Da=!1;switch(t.lanes=0,t.tag){case 2:if(r=t.type,null!==e&&(e.alternate=null,t.alternate=null,t.flags|=2),e=t.pendingProps,o=go(t,ho.current),ai(t,n),o=la(null,t,r,e,o,n),t.flags|=1,"object"===typeof o&&null!==o&&"function"===typeof o.render&&void 0===o.$$typeof){if(t.tag=1,t.memoizedState=null,t.updateQueue=null,vo(r)){var i=!0;wo(t)}else i=!1;t.memoizedState=null!==o.state&&void 0!==o.state?o.state:null,si(t);var l=r.getDerivedStateFromProps;"function"===typeof l&&gi(t,r,l,e),o.updater=vi,t.stateNode=o,o._reactInternals=t,wi(t,r,e,n),t=Ka(null,t,r,!0,i,n)}else t.tag=0,La(null,t,o,n),t=t.child;return t;case 16:o=t.elementType;e:{switch(null!==e&&(e.alternate=null,t.alternate=null,t.flags|=2),e=t.pendingProps,o=(i=o._init)(o._payload),t.type=o,i=t.tag=function(e){if("function"===typeof e)return Hu(e)?1:0;if(void 0!==e&&null!==e){if((e=e.$$typeof)===P)return 11;if(e===_)return 14}return 2}(o),e=Jo(o,e),i){case 0:t=$a(null,t,o,e,n);break e;case 1:t=Ha(null,t,o,e,n);break e;case 11:t=Fa(null,t,o,e,n);break e;case 14:t=Ba(null,t,o,Jo(o.type,e),r,n);break e}throw Error(a(306,o,""))}return t;case 0:return r=t.type,o=t.pendingProps,$a(e,t,r,o=t.elementType===r?o:Jo(r,o),n);case 1:return r=t.type,o=t.pendingProps,Ha(e,t,r,o=t.elementType===r?o:Jo(r,o),n);case 3:if(qa(t),r=t.updateQueue,null===e||null===r)throw Error(a(282));if(r=t.pendingProps,o=null!==(o=t.memoizedState)?o.element:null,ci(e,t),hi(t,r,null,n),(r=t.memoizedState.element)===o)Qi(),t=il(e,t,n);else{if((i=(o=t.stateNode).hydrate)&&(Wi=Qr(t.stateNode.containerInfo.firstChild),Bi=t,i=Ui=!0),i){if(null!=(e=o.mutableSourceEagerHydrationData))for(o=0;o<e.length;o+=2)(i=e[o])._workInProgressVersionPrimary=e[o+1],Yi.push(i);for(n=Ti(t,null,r,n),t.child=n;n;)n.flags=-3&n.flags|1024,n=n.sibling}else La(e,t,r,n),Qi();t=t.child}return t;case 5:return Ii(t),null===e&&Hi(t),r=t.type,o=t.pendingProps,i=null!==e?e.memoizedProps:null,l=o.children,$r(r,o)?l=null:null!==i&&$r(r,i)&&(t.flags|=16),Va(e,t),La(e,t,l,n),t.child;case 6:return null===e&&Hi(t),null;case 13:return Ja(e,t,n);case 4:return Mi(t,t.stateNode.containerInfo),r=t.pendingProps,null===e?t.child=ji(t,null,r,n):La(e,t,r,n),t.child;case 11:return r=t.type,o=t.pendingProps,Fa(e,t,r,o=t.elementType===r?o:Jo(r,o),n);case 7:return La(e,t,t.pendingProps,n),t.child;case 8:case 12:return La(e,t,t.pendingProps.children,n),t.child;case 10:e:{r=t.type._context,o=t.pendingProps,l=t.memoizedProps,i=o.value;var u=t.type._context;if(fo(Zo,u._currentValue),u._currentValue=i,null!==l)if(u=l.value,0===(i=cr(u,i)?0:0|("function"===typeof r._calculateChangedBits?r._calculateChangedBits(u,i):1073741823))){if(l.children===o.children&&!mo.current){t=il(e,t,n);break e}}else for(null!==(u=t.child)&&(u.return=t);null!==u;){var s=u.dependencies;if(null!==s){l=u.child;for(var c=s.firstContext;null!==c;){if(c.context===r&&0!==(c.observedBits&i)){1===u.tag&&((c=fi(-1,n&-n)).tag=2,di(u,c)),u.lanes|=n,null!==(c=u.alternate)&&(c.lanes|=n),ii(u.return,n),s.lanes|=n;break}c=c.next}}else l=10===u.tag&&u.type===t.type?null:u.child;if(null!==l)l.return=u;else for(l=u;null!==l;){if(l===t){l=null;break}if(null!==(u=l.sibling)){u.return=l.return,l=u;break}l=l.return}u=l}La(e,t,o.children,n),t=t.child}return t;case 9:return o=t.type,r=(i=t.pendingProps).children,ai(t,n),r=r(o=li(o,i.unstable_observedBits)),t.flags|=1,La(e,t,r,n),t.child;case 14:return i=Jo(o=t.type,t.pendingProps),Ba(e,t,o,i=Jo(o.type,i),r,n);case 15:return Wa(e,t,t.type,t.pendingProps,r,n);case 17:return r=t.type,o=t.pendingProps,o=t.elementType===r?o:Jo(r,o),null!==e&&(e.alternate=null,t.alternate=null,t.flags|=2),t.tag=1,vo(r)?(e=!0,wo(t)):e=!1,ai(t,n),xi(t,r,o),wi(t,r,o,n),Ka(null,t,r,!0,e,n);case 19:return ol(e,t,n);case 23:case 24:return Ua(e,t,n)}throw Error(a(156,t.tag))},os.prototype.render=function(e){es(e,this._internalRoot,null,null)},os.prototype.unmount=function(){var e=this._internalRoot,t=e.containerInfo;es(null,e,null,(function(){t[eo]=null}))},tt=function(e){13===e.tag&&(hu(e,4,du()),rs(e,4))},nt=function(e){13===e.tag&&(hu(e,67108864,du()),rs(e,67108864))},rt=function(e){if(13===e.tag){var t=du(),n=pu(e);hu(e,n,t),rs(e,n)}},ot=function(e,t){return t()},je=function(e,t,n){switch(t){case"input":if(ne(e,n),t=n.name,"radio"===n.type&&null!=t){for(n=e;n.parentNode;)n=n.parentNode;for(n=n.querySelectorAll("input[name="+JSON.stringify(""+t)+'][type="radio"]'),t=0;t<n.length;t++){var r=n[t];if(r!==e&&r.form===e.form){var o=io(r);if(!o)throw Error(a(90));G(r),ne(r,o)}}}break;case"textarea":se(e,n);break;case"select":null!=(t=n.value)&&ae(e,!!n.multiple,t,!1)}},ze=xu,Me=function(e,t,n,r,o){var i=_l;_l|=4;try{return qo(98,e.bind(null,t,n,r,o))}finally{0===(_l=i)&&(ql(),Yo())}},Ae=function(){0===(49&_l)&&(function(){if(null!==ou){var e=ou;ou=null,e.forEach((function(e){e.expiredLanes|=24&e.pendingLanes,yu(e,$o())}))}Yo()}(),Au())},Ie=function(e,t){var n=_l;_l|=2;try{return e(t)}finally{0===(_l=n)&&(ql(),Yo())}};var us={Events:[ro,oo,io,Ne,_e,Au,{current:!1}]},ss={findFiberByHostInstance:no,bundleType:0,version:"17.0.2",rendererPackageName:"react-dom"},cs={bundleType:ss.bundleType,version:ss.version,rendererPackageName:ss.rendererPackageName,rendererConfig:ss.rendererConfig,overrideHookState:null,overrideHookStateDeletePath:null,overrideHookStateRenamePath:null,overrideProps:null,overridePropsDeletePath:null,overridePropsRenamePath:null,setSuspenseHandler:null,scheduleUpdate:null,currentDispatcherRef:k.ReactCurrentDispatcher,findHostInstanceByFiber:function(e){return null===(e=Ze(e))?null:e.stateNode},findFiberByHostInstance:ss.findFiberByHostInstance||function(){return null},findHostInstancesForRefresh:null,scheduleRefresh:null,scheduleRoot:null,setRefreshHandler:null,getCurrentFiber:null};if("undefined"!==typeof __REACT_DEVTOOLS_GLOBAL_HOOK__){var fs=__REACT_DEVTOOLS_GLOBAL_HOOK__;if(!fs.isDisabled&&fs.supportsFiber)try{Eo=fs.inject(cs),Oo=fs}catch(ye){}}t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=us,t.createPortal=ls,t.findDOMNode=function(e){if(null==e)return null;if(1===e.nodeType)return e;var t=e._reactInternals;if(void 0===t){if("function"===typeof e.render)throw Error(a(188));throw Error(a(268,Object.keys(e)))}return e=null===(e=Ze(t))?null:e.stateNode},t.flushSync=function(e,t){var n=_l;if(0!==(48&n))return e(t);_l|=1;try{if(e)return qo(99,e.bind(null,t))}finally{_l=n,Yo()}},t.hydrate=function(e,t,n){if(!is(t))throw Error(a(200));return as(null,e,t,!0,n)},t.render=function(e,t,n){if(!is(t))throw Error(a(200));return as(null,e,t,!1,n)},t.unmountComponentAtNode=function(e){if(!is(e))throw Error(a(40));return!!e._reactRootContainer&&(ku((function(){as(null,null,e,!1,(function(){e._reactRootContainer=null,e[eo]=null}))})),!0)},t.unstable_batchedUpdates=xu,t.unstable_createPortal=function(e,t){return ls(e,t,2<arguments.length&&void 0!==arguments[2]?arguments[2]:null)},t.unstable_renderSubtreeIntoContainer=function(e,t,n,r){if(!is(n))throw Error(a(200));if(null==e||void 0===e._reactInternals)throw Error(a(38));return as(e,t,n,!1,r)},t.version="17.0.2"},function(e,t,n){"use strict";e.exports=n(74)},function(e,t,n){"use strict";var r,o,i,a;if("object"===typeof performance&&"function"===typeof performance.now){var l=performance;t.unstable_now=function(){return l.now()}}else{var u=Date,s=u.now();t.unstable_now=function(){return u.now()-s}}if("undefined"===typeof window||"function"!==typeof MessageChannel){var c=null,f=null,d=function e(){if(null!==c)try{var n=t.unstable_now();c(!0,n),c=null}catch(r){throw setTimeout(e,0),r}};r=function(e){null!==c?setTimeout(r,0,e):(c=e,setTimeout(d,0))},o=function(e,t){f=setTimeout(e,t)},i=function(){clearTimeout(f)},t.unstable_shouldYield=function(){return!1},a=t.unstable_forceFrameRate=function(){}}else{var p=window.setTimeout,h=window.clearTimeout;if("undefined"!==typeof console){var m=window.cancelAnimationFrame;"function"!==typeof window.requestAnimationFrame&&console.error("This browser doesn't support requestAnimationFrame. Make sure that you load a polyfill in older browsers. https://reactjs.org/link/react-polyfills"),"function"!==typeof m&&console.error("This browser doesn't support cancelAnimationFrame. Make sure that you load a polyfill in older browsers. https://reactjs.org/link/react-polyfills")}var y=!1,g=null,v=-1,b=5,x=0;t.unstable_shouldYield=function(){return t.unstable_now()>=x},a=function(){},t.unstable_forceFrameRate=function(e){0>e||125<e?console.error("forceFrameRate takes a positive int between 0 and 125, forcing frame rates higher than 125 fps is not supported"):b=0<e?Math.floor(1e3/e):5};var k=new MessageChannel,w=k.port2;k.port1.onmessage=function(){if(null!==g){var e=t.unstable_now();x=e+b;try{g(!0,e)?w.postMessage(null):(y=!1,g=null)}catch(n){throw w.postMessage(null),n}}else y=!1},r=function(e){g=e,y||(y=!0,w.postMessage(null))},o=function(e,n){v=p((function(){e(t.unstable_now())}),n)},i=function(){h(v),v=-1}}function S(e,t){var n=e.length;e.push(t);e:for(;;){var r=n-1>>>1,o=e[r];if(!(void 0!==o&&0<C(o,t)))break e;e[r]=t,e[n]=o,n=r}}function E(e){return void 0===(e=e[0])?null:e}function O(e){var t=e[0];if(void 0!==t){var n=e.pop();if(n!==t){e[0]=n;e:for(var r=0,o=e.length;r<o;){var i=2*(r+1)-1,a=e[i],l=i+1,u=e[l];if(void 0!==a&&0>C(a,n))void 0!==u&&0>C(u,a)?(e[r]=u,e[l]=n,r=l):(e[r]=a,e[i]=n,r=i);else{if(!(void 0!==u&&0>C(u,n)))break e;e[r]=u,e[l]=n,r=l}}}return t}return null}function C(e,t){var n=e.sortIndex-t.sortIndex;return 0!==n?n:e.id-t.id}var j=[],T=[],P=1,R=null,N=3,_=!1,z=!1,M=!1;function A(e){for(var t=E(T);null!==t;){if(null===t.callback)O(T);else{if(!(t.startTime<=e))break;O(T),t.sortIndex=t.expirationTime,S(j,t)}t=E(T)}}function I(e){if(M=!1,A(e),!z)if(null!==E(j))z=!0,r(D);else{var t=E(T);null!==t&&o(I,t.startTime-e)}}function D(e,n){z=!1,M&&(M=!1,i()),_=!0;var r=N;try{for(A(n),R=E(j);null!==R&&(!(R.expirationTime>n)||e&&!t.unstable_shouldYield());){var a=R.callback;if("function"===typeof a){R.callback=null,N=R.priorityLevel;var l=a(R.expirationTime<=n);n=t.unstable_now(),"function"===typeof l?R.callback=l:R===E(j)&&O(j),A(n)}else O(j);R=E(j)}if(null!==R)var u=!0;else{var s=E(T);null!==s&&o(I,s.startTime-n),u=!1}return u}finally{R=null,N=r,_=!1}}var L=a;t.unstable_IdlePriority=5,t.unstable_ImmediatePriority=1,t.unstable_LowPriority=4,t.unstable_NormalPriority=3,t.unstable_Profiling=null,t.unstable_UserBlockingPriority=2,t.unstable_cancelCallback=function(e){e.callback=null},t.unstable_continueExecution=function(){z||_||(z=!0,r(D))},t.unstable_getCurrentPriorityLevel=function(){return N},t.unstable_getFirstCallbackNode=function(){return E(j)},t.unstable_next=function(e){switch(N){case 1:case 2:case 3:var t=3;break;default:t=N}var n=N;N=t;try{return e()}finally{N=n}},t.unstable_pauseExecution=function(){},t.unstable_requestPaint=L,t.unstable_runWithPriority=function(e,t){switch(e){case 1:case 2:case 3:case 4:case 5:break;default:e=3}var n=N;N=e;try{return t()}finally{N=n}},t.unstable_scheduleCallback=function(e,n,a){var l=t.unstable_now();switch("object"===typeof a&&null!==a?a="number"===typeof(a=a.delay)&&0<a?l+a:l:a=l,e){case 1:var u=-1;break;case 2:u=250;break;case 5:u=1073741823;break;case 4:u=1e4;break;default:u=5e3}return e={id:P++,callback:n,priorityLevel:e,startTime:a,expirationTime:u=a+u,sortIndex:-1},a>l?(e.sortIndex=a,S(T,e),null===E(j)&&e===E(T)&&(M?i():M=!0,o(I,a-l))):(e.sortIndex=u,S(j,e),z||_||(z=!0,r(D))),e},t.unstable_wrapCallback=function(e){var t=N;return function(){var n=N;N=t;try{return e.apply(this,arguments)}finally{N=n}}}},function(e,t,n){"use strict";var r=n(76);function o(){}function i(){}i.resetWarningCache=o,e.exports=function(){function e(e,t,n,o,i,a){if(a!==r){var l=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw l.name="Invariant Violation",l}}function t(){return e}e.isRequired=e;var n={array:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:i,resetWarningCache:o};return n.PropTypes=n,n}},function(e,t,n){"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},function(e,t,n){var r=n(0),o=n(53),i=n(54),a=i.setStyleProp;function l(e){return i.PRESERVE_CUSTOM_ATTRIBUTES&&"tag"===e.type&&i.isCustomComponent(e.name,e.attribs)}e.exports=function e(t,n){for(var i,u,s,c,f=(n=n||{}).library||r,d=f.cloneElement,p=f.createElement,h=f.isValidElement,m=[],y="function"===typeof n.replace,g=n.trim,v=0,b=t.length;v<b;v++)if(i=t[v],y&&h(u=n.replace(i)))b>1&&(u=d(u,{key:u.key||v})),m.push(u);else if("text"!==i.type){switch(s=i.attribs,l(i)?a(s.style,s):s&&(s=o(s)),c=null,i.type){case"script":case"style":i.children[0]&&(s.dangerouslySetInnerHTML={__html:i.children[0].data});break;case"tag":"textarea"===i.name&&i.children[0]?s.defaultValue=i.children[0].data:i.children&&i.children.length&&(c=e(i.children,n));break;default:continue}b>1&&(s.key=v),m.push(p(i.name,s,c))}else g?i.data.trim()&&m.push(i.data):m.push(i.data);return 1===m.length?m[0]:m}},function(e,t,n){"use strict";function r(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var r,o,i=[],a=!0,l=!1;try{for(n=n.call(e);!(a=(r=n.next()).done)&&(i.push(r.value),!t||i.length!==t);a=!0);}catch(u){l=!0,o=u}finally{try{a||null==n.return||n.return()}finally{if(l)throw o}}return i}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return o(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}Object.defineProperty(t,"__esModule",{value:!0});function i(e,t,n,r,o,i,a){this.acceptsBooleans=2===t||3===t||4===t,this.attributeName=r,this.attributeNamespace=o,this.mustUseProperty=n,this.propertyName=e,this.type=t,this.sanitizeURL=i,this.removeEmptyString=a}var a={};["children","dangerouslySetInnerHTML","defaultValue","defaultChecked","innerHTML","suppressContentEditableWarning","suppressHydrationWarning","style"].forEach((function(e){a[e]=new i(e,0,!1,e,null,!1,!1)})),[["acceptCharset","accept-charset"],["className","class"],["htmlFor","for"],["httpEquiv","http-equiv"]].forEach((function(e){var t=r(e,2),n=t[0],o=t[1];a[n]=new i(n,1,!1,o,null,!1,!1)})),["contentEditable","draggable","spellCheck","value"].forEach((function(e){a[e]=new i(e,2,!1,e.toLowerCase(),null,!1,!1)})),["autoReverse","externalResourcesRequired","focusable","preserveAlpha"].forEach((function(e){a[e]=new i(e,2,!1,e,null,!1,!1)})),["allowFullScreen","async","autoFocus","autoPlay","controls","default","defer","disabled","disablePictureInPicture","disableRemotePlayback","formNoValidate","hidden","loop","noModule","noValidate","open","playsInline","readOnly","required","reversed","scoped","seamless","itemScope"].forEach((function(e){a[e]=new i(e,3,!1,e.toLowerCase(),null,!1,!1)})),["checked","multiple","muted","selected"].forEach((function(e){a[e]=new i(e,3,!0,e,null,!1,!1)})),["capture","download"].forEach((function(e){a[e]=new i(e,4,!1,e,null,!1,!1)})),["cols","rows","size","span"].forEach((function(e){a[e]=new i(e,6,!1,e,null,!1,!1)})),["rowSpan","start"].forEach((function(e){a[e]=new i(e,5,!1,e.toLowerCase(),null,!1,!1)}));var l=/[\-\:]([a-z])/g,u=function(e){return e[1].toUpperCase()};["accent-height","alignment-baseline","arabic-form","baseline-shift","cap-height","clip-path","clip-rule","color-interpolation","color-interpolation-filters","color-profile","color-rendering","dominant-baseline","enable-background","fill-opacity","fill-rule","flood-color","flood-opacity","font-family","font-size","font-size-adjust","font-stretch","font-style","font-variant","font-weight","glyph-name","glyph-orientation-horizontal","glyph-orientation-vertical","horiz-adv-x","horiz-origin-x","image-rendering","letter-spacing","lighting-color","marker-end","marker-mid","marker-start","overline-position","overline-thickness","paint-order","panose-1","pointer-events","rendering-intent","shape-rendering","stop-color","stop-opacity","strikethrough-position","strikethrough-thickness","stroke-dasharray","stroke-dashoffset","stroke-linecap","stroke-linejoin","stroke-miterlimit","stroke-opacity","stroke-width","text-anchor","text-decoration","text-rendering","underline-position","underline-thickness","unicode-bidi","unicode-range","units-per-em","v-alphabetic","v-hanging","v-ideographic","v-mathematical","vector-effect","vert-adv-y","vert-origin-x","vert-origin-y","word-spacing","writing-mode","xmlns:xlink","x-height"].forEach((function(e){var t=e.replace(l,u);a[t]=new i(t,1,!1,e,null,!1,!1)})),["xlink:actuate","xlink:arcrole","xlink:role","xlink:show","xlink:title","xlink:type"].forEach((function(e){var t=e.replace(l,u);a[t]=new i(t,1,!1,e,"http://www.w3.org/1999/xlink",!1,!1)})),["xml:base","xml:lang","xml:space"].forEach((function(e){var t=e.replace(l,u);a[t]=new i(t,1,!1,e,"http://www.w3.org/XML/1998/namespace",!1,!1)})),["tabIndex","crossOrigin"].forEach((function(e){a[e]=new i(e,1,!1,e.toLowerCase(),null,!1,!1)}));a.xlinkHref=new i("xlinkHref",1,!1,"xlink:href","http://www.w3.org/1999/xlink",!0,!1),["src","href","action","formAction"].forEach((function(e){a[e]=new i(e,1,!1,e.toLowerCase(),null,!0,!0)}));var s=n(79),c=s.CAMELCASE,f=s.SAME,d=s.possibleStandardNames,p=RegExp.prototype.test.bind(new RegExp("^(data|aria)-[:A-Z_a-z\\u00C0-\\u00D6\\u00D8-\\u00F6\\u00F8-\\u02FF\\u0370-\\u037D\\u037F-\\u1FFF\\u200C-\\u200D\\u2070-\\u218F\\u2C00-\\u2FEF\\u3001-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFFD\\-.0-9\\u00B7\\u0300-\\u036F\\u203F-\\u2040]*$")),h=Object.keys(d).reduce((function(e,t){var n=d[t];return n===f?e[t]=t:n===c?e[t.toLowerCase()]=t:e[t]=n,e}),{});t.BOOLEAN=3,t.BOOLEANISH_STRING=2,t.NUMERIC=5,t.OVERLOADED_BOOLEAN=4,t.POSITIVE_NUMERIC=6,t.RESERVED=0,t.STRING=1,t.getPropertyInfo=function(e){return a.hasOwnProperty(e)?a[e]:null},t.isCustomAttribute=p,t.possibleStandardNames=h},function(e,t){t.SAME=0;t.CAMELCASE=1,t.possibleStandardNames={accept:0,acceptCharset:1,"accept-charset":"acceptCharset",accessKey:1,action:0,allowFullScreen:1,alt:0,as:0,async:0,autoCapitalize:1,autoComplete:1,autoCorrect:1,autoFocus:1,autoPlay:1,autoSave:1,capture:0,cellPadding:1,cellSpacing:1,challenge:0,charSet:1,checked:0,children:0,cite:0,class:"className",classID:1,className:1,cols:0,colSpan:1,content:0,contentEditable:1,contextMenu:1,controls:0,controlsList:1,coords:0,crossOrigin:1,dangerouslySetInnerHTML:1,data:0,dateTime:1,default:0,defaultChecked:1,defaultValue:1,defer:0,dir:0,disabled:0,disablePictureInPicture:1,disableRemotePlayback:1,download:0,draggable:0,encType:1,enterKeyHint:1,for:"htmlFor",form:0,formMethod:1,formAction:1,formEncType:1,formNoValidate:1,formTarget:1,frameBorder:1,headers:0,height:0,hidden:0,high:0,href:0,hrefLang:1,htmlFor:1,httpEquiv:1,"http-equiv":"httpEquiv",icon:0,id:0,innerHTML:1,inputMode:1,integrity:0,is:0,itemID:1,itemProp:1,itemRef:1,itemScope:1,itemType:1,keyParams:1,keyType:1,kind:0,label:0,lang:0,list:0,loop:0,low:0,manifest:0,marginWidth:1,marginHeight:1,max:0,maxLength:1,media:0,mediaGroup:1,method:0,min:0,minLength:1,multiple:0,muted:0,name:0,noModule:1,nonce:0,noValidate:1,open:0,optimum:0,pattern:0,placeholder:0,playsInline:1,poster:0,preload:0,profile:0,radioGroup:1,readOnly:1,referrerPolicy:1,rel:0,required:0,reversed:0,role:0,rows:0,rowSpan:1,sandbox:0,scope:0,scoped:0,scrolling:0,seamless:0,selected:0,shape:0,size:0,sizes:0,span:0,spellCheck:1,src:0,srcDoc:1,srcLang:1,srcSet:1,start:0,step:0,style:0,summary:0,tabIndex:1,target:0,title:0,type:0,useMap:1,value:0,width:0,wmode:0,wrap:0,about:0,accentHeight:1,"accent-height":"accentHeight",accumulate:0,additive:0,alignmentBaseline:1,"alignment-baseline":"alignmentBaseline",allowReorder:1,alphabetic:0,amplitude:0,arabicForm:1,"arabic-form":"arabicForm",ascent:0,attributeName:1,attributeType:1,autoReverse:1,azimuth:0,baseFrequency:1,baselineShift:1,"baseline-shift":"baselineShift",baseProfile:1,bbox:0,begin:0,bias:0,by:0,calcMode:1,capHeight:1,"cap-height":"capHeight",clip:0,clipPath:1,"clip-path":"clipPath",clipPathUnits:1,clipRule:1,"clip-rule":"clipRule",color:0,colorInterpolation:1,"color-interpolation":"colorInterpolation",colorInterpolationFilters:1,"color-interpolation-filters":"colorInterpolationFilters",colorProfile:1,"color-profile":"colorProfile",colorRendering:1,"color-rendering":"colorRendering",contentScriptType:1,contentStyleType:1,cursor:0,cx:0,cy:0,d:0,datatype:0,decelerate:0,descent:0,diffuseConstant:1,direction:0,display:0,divisor:0,dominantBaseline:1,"dominant-baseline":"dominantBaseline",dur:0,dx:0,dy:0,edgeMode:1,elevation:0,enableBackground:1,"enable-background":"enableBackground",end:0,exponent:0,externalResourcesRequired:1,fill:0,fillOpacity:1,"fill-opacity":"fillOpacity",fillRule:1,"fill-rule":"fillRule",filter:0,filterRes:1,filterUnits:1,floodOpacity:1,"flood-opacity":"floodOpacity",floodColor:1,"flood-color":"floodColor",focusable:0,fontFamily:1,"font-family":"fontFamily",fontSize:1,"font-size":"fontSize",fontSizeAdjust:1,"font-size-adjust":"fontSizeAdjust",fontStretch:1,"font-stretch":"fontStretch",fontStyle:1,"font-style":"fontStyle",fontVariant:1,"font-variant":"fontVariant",fontWeight:1,"font-weight":"fontWeight",format:0,from:0,fx:0,fy:0,g1:0,g2:0,glyphName:1,"glyph-name":"glyphName",glyphOrientationHorizontal:1,"glyph-orientation-horizontal":"glyphOrientationHorizontal",glyphOrientationVertical:1,"glyph-orientation-vertical":"glyphOrientationVertical",glyphRef:1,gradientTransform:1,gradientUnits:1,hanging:0,horizAdvX:1,"horiz-adv-x":"horizAdvX",horizOriginX:1,"horiz-origin-x":"horizOriginX",ideographic:0,imageRendering:1,"image-rendering":"imageRendering",in2:0,in:0,inlist:0,intercept:0,k1:0,k2:0,k3:0,k4:0,k:0,kernelMatrix:1,kernelUnitLength:1,kerning:0,keyPoints:1,keySplines:1,keyTimes:1,lengthAdjust:1,letterSpacing:1,"letter-spacing":"letterSpacing",lightingColor:1,"lighting-color":"lightingColor",limitingConeAngle:1,local:0,markerEnd:1,"marker-end":"markerEnd",markerHeight:1,markerMid:1,"marker-mid":"markerMid",markerStart:1,"marker-start":"markerStart",markerUnits:1,markerWidth:1,mask:0,maskContentUnits:1,maskUnits:1,mathematical:0,mode:0,numOctaves:1,offset:0,opacity:0,operator:0,order:0,orient:0,orientation:0,origin:0,overflow:0,overlinePosition:1,"overline-position":"overlinePosition",overlineThickness:1,"overline-thickness":"overlineThickness",paintOrder:1,"paint-order":"paintOrder",panose1:0,"panose-1":"panose1",pathLength:1,patternContentUnits:1,patternTransform:1,patternUnits:1,pointerEvents:1,"pointer-events":"pointerEvents",points:0,pointsAtX:1,pointsAtY:1,pointsAtZ:1,prefix:0,preserveAlpha:1,preserveAspectRatio:1,primitiveUnits:1,property:0,r:0,radius:0,refX:1,refY:1,renderingIntent:1,"rendering-intent":"renderingIntent",repeatCount:1,repeatDur:1,requiredExtensions:1,requiredFeatures:1,resource:0,restart:0,result:0,results:0,rotate:0,rx:0,ry:0,scale:0,security:0,seed:0,shapeRendering:1,"shape-rendering":"shapeRendering",slope:0,spacing:0,specularConstant:1,specularExponent:1,speed:0,spreadMethod:1,startOffset:1,stdDeviation:1,stemh:0,stemv:0,stitchTiles:1,stopColor:1,"stop-color":"stopColor",stopOpacity:1,"stop-opacity":"stopOpacity",strikethroughPosition:1,"strikethrough-position":"strikethroughPosition",strikethroughThickness:1,"strikethrough-thickness":"strikethroughThickness",string:0,stroke:0,strokeDasharray:1,"stroke-dasharray":"strokeDasharray",strokeDashoffset:1,"stroke-dashoffset":"strokeDashoffset",strokeLinecap:1,"stroke-linecap":"strokeLinecap",strokeLinejoin:1,"stroke-linejoin":"strokeLinejoin",strokeMiterlimit:1,"stroke-miterlimit":"strokeMiterlimit",strokeWidth:1,"stroke-width":"strokeWidth",strokeOpacity:1,"stroke-opacity":"strokeOpacity",suppressContentEditableWarning:1,suppressHydrationWarning:1,surfaceScale:1,systemLanguage:1,tableValues:1,targetX:1,targetY:1,textAnchor:1,"text-anchor":"textAnchor",textDecoration:1,"text-decoration":"textDecoration",textLength:1,textRendering:1,"text-rendering":"textRendering",to:0,transform:0,typeof:0,u1:0,u2:0,underlinePosition:1,"underline-position":"underlinePosition",underlineThickness:1,"underline-thickness":"underlineThickness",unicode:0,unicodeBidi:1,"unicode-bidi":"unicodeBidi",unicodeRange:1,"unicode-range":"unicodeRange",unitsPerEm:1,"units-per-em":"unitsPerEm",unselectable:0,vAlphabetic:1,"v-alphabetic":"vAlphabetic",values:0,vectorEffect:1,"vector-effect":"vectorEffect",version:0,vertAdvY:1,"vert-adv-y":"vertAdvY",vertOriginX:1,"vert-origin-x":"vertOriginX",vertOriginY:1,"vert-origin-y":"vertOriginY",vHanging:1,"v-hanging":"vHanging",vIdeographic:1,"v-ideographic":"vIdeographic",viewBox:1,viewTarget:1,visibility:0,vMathematical:1,"v-mathematical":"vMathematical",vocab:0,widths:0,wordSpacing:1,"word-spacing":"wordSpacing",writingMode:1,"writing-mode":"writingMode",x1:0,x2:0,x:0,xChannelSelector:1,xHeight:1,"x-height":"xHeight",xlinkActuate:1,"xlink:actuate":"xlinkActuate",xlinkArcrole:1,"xlink:arcrole":"xlinkArcrole",xlinkHref:1,"xlink:href":"xlinkHref",xlinkRole:1,"xlink:role":"xlinkRole",xlinkShow:1,"xlink:show":"xlinkShow",xlinkTitle:1,"xlink:title":"xlinkTitle",xlinkType:1,"xlink:type":"xlinkType",xmlBase:1,"xml:base":"xmlBase",xmlLang:1,"xml:lang":"xmlLang",xmlns:0,"xml:space":"xmlSpace",xmlnsXlink:1,"xmlns:xlink":"xmlnsXlink",xmlSpace:1,y1:0,y2:0,y:0,yChannelSelector:1,z:0,zoomAndPan:1}},function(e,t,n){"use strict";var r=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};t.__esModule=!0;var o=r(n(81)),i=n(83);t.default=function(e,t){var n={};return e&&"string"===typeof e?(o.default(e,(function(e,r){e&&r&&(n[i.camelCase(e,t)]=r)})),n):n}},function(e,t,n){var r=n(82);e.exports=function(e,t){var n,o=null;if(!e||"string"!==typeof e)return o;for(var i,a,l=r(e),u="function"===typeof t,s=0,c=l.length;s<c;s++)i=(n=l[s]).property,a=n.value,u?t(i,a,n):a&&(o||(o={}),o[i]=a);return o}},function(e,t){var n=/\/\*[^*]*\*+([^/*][^*]*\*+)*\//g,r=/\n/g,o=/^\s*/,i=/^(\*?[-#/*\\\w]+(\[[0-9a-z_-]+\])?)\s*/,a=/^:\s*/,l=/^((?:'(?:\\'|.)*?'|"(?:\\"|.)*?"|\([^)]*?\)|[^};])+)/,u=/^[;\s]*/,s=/^\s+|\s+$/g,c="";function f(e){return e?e.replace(s,c):c}e.exports=function(e,t){if("string"!==typeof e)throw new TypeError("First argument must be a string");if(!e)return[];t=t||{};var s=1,d=1;function p(e){var t=e.match(r);t&&(s+=t.length);var n=e.lastIndexOf("\n");d=~n?e.length-n:d+e.length}function h(){var e={line:s,column:d};return function(t){return t.position=new m(e),b(),t}}function m(e){this.start=e,this.end={line:s,column:d},this.source=t.source}m.prototype.content=e;var y=[];function g(n){var r=new Error(t.source+":"+s+":"+d+": "+n);if(r.reason=n,r.filename=t.source,r.line=s,r.column=d,r.source=e,!t.silent)throw r;y.push(r)}function v(t){var n=t.exec(e);if(n){var r=n[0];return p(r),e=e.slice(r.length),n}}function b(){v(o)}function x(e){var t;for(e=e||[];t=k();)!1!==t&&e.push(t);return e}function k(){var t=h();if("/"==e.charAt(0)&&"*"==e.charAt(1)){for(var n=2;c!=e.charAt(n)&&("*"!=e.charAt(n)||"/"!=e.charAt(n+1));)++n;if(n+=2,c===e.charAt(n-1))return g("End of comment missing");var r=e.slice(2,n-2);return d+=2,p(r),e=e.slice(n),d+=2,t({type:"comment",comment:r})}}function w(){var e=h(),t=v(i);if(t){if(k(),!v(a))return g("property missing ':'");var r=v(l),o=e({type:"declaration",property:f(t[0].replace(n,c)),value:r?f(r[0].replace(n,c)):c});return v(u),o}}return b(),function(){var e,t=[];for(x(t);e=w();)!1!==e&&(t.push(e),x(t));return t}()}},function(e,t,n){"use strict";t.__esModule=!0,t.camelCase=void 0;var r=/^--[a-zA-Z0-9-]+$/,o=/-([a-z])/g,i=/^[^-]+$/,a=/^-(webkit|moz|ms|o|khtml)-/,l=function(e,t){return t.toUpperCase()},u=function(e,t){return t+"-"};t.camelCase=function(e,t){return void 0===t&&(t={}),function(e){return!e||i.test(e)||r.test(e)}(e)?e:(e=e.toLowerCase(),t.reactCompat||(e=e.replace(a,u)),e.replace(o,l))}},function(e,t,n){var r=n(85),o=n(55).formatDOM,i=/<(![a-zA-Z\s]+)>/;e.exports=function(e){if("string"!==typeof e)throw new TypeError("First argument must be a string");if(""===e)return[];var t,n=e.match(i);return n&&n[1]&&(t=n[1]),o(r(e),null,t)}},function(e,t,n){var r="html",o="head",i="body",a=/<([a-zA-Z]+[0-9]?)/,l=/<head.*>/i,u=/<body.*>/i,s=function(){throw new Error("This browser does not support `document.implementation.createHTMLDocument`")},c=function(){throw new Error("This browser does not support `DOMParser.prototype.parseFromString`")};if("function"===typeof window.DOMParser){var f=new window.DOMParser;s=c=function(e,t){return t&&(e="<"+t+">"+e+"</"+t+">"),f.parseFromString(e,"text/html")}}if(document.implementation){var d=n(55).isIE,p=document.implementation.createHTMLDocument(d()?"html-dom-parser":void 0);s=function(e,t){return t?(p.documentElement.getElementsByTagName(t)[0].innerHTML=e,p):(p.documentElement.innerHTML=e,p)}}var h,m=document.createElement("template");m.content&&(h=function(e){return m.innerHTML=e,m.content.childNodes}),e.exports=function(e){var t,n,f,d,p=e.match(a);switch(p&&p[1]&&(t=p[1].toLowerCase()),t){case r:return n=c(e),l.test(e)||(f=n.getElementsByTagName(o)[0])&&f.parentNode.removeChild(f),u.test(e)||(f=n.getElementsByTagName(i)[0])&&f.parentNode.removeChild(f),n.getElementsByTagName(r);case o:case i:return d=s(e).getElementsByTagName(t),u.test(e)&&l.test(e)?d[0].parentNode.childNodes:d;default:return h?h(e):s(e,i).getElementsByTagName(i)[0].childNodes}}},function(e,t){e.exports={CASE_SENSITIVE_TAG_NAMES:["animateMotion","animateTransform","clipPath","feBlend","feColorMatrix","feComponentTransfer","feComposite","feConvolveMatrix","feDiffuseLighting","feDisplacementMap","feDropShadow","feFlood","feFuncA","feFuncB","feFuncG","feFuncR","feGaussainBlur","feImage","feMerge","feMergeNode","feMorphology","feOffset","fePointLight","feSpecularLighting","feSpotLight","feTile","feTurbulence","foreignObject","linearGradient","radialGradient","textPath"]}},function(e,t,n){"use strict";var r=this&&this.__extends||function(){var e=function(t,n){return e=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])},e(t,n)};return function(t,n){if("function"!==typeof n&&null!==n)throw new TypeError("Class extends value "+String(n)+" is not a constructor or null");function r(){this.constructor=t}e(t,n),t.prototype=null===n?Object.create(n):(r.prototype=n.prototype,new r)}}(),o=this&&this.__assign||function(){return o=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e},o.apply(this,arguments)};Object.defineProperty(t,"__esModule",{value:!0}),t.cloneNode=t.hasChildren=t.isDocument=t.isDirective=t.isComment=t.isText=t.isCDATA=t.isTag=t.Element=t.Document=t.NodeWithChildren=t.ProcessingInstruction=t.Comment=t.Text=t.DataNode=t.Node=void 0;var i=n(56),a=new Map([[i.ElementType.Tag,1],[i.ElementType.Script,1],[i.ElementType.Style,1],[i.ElementType.Directive,1],[i.ElementType.Text,3],[i.ElementType.CDATA,4],[i.ElementType.Comment,8],[i.ElementType.Root,9]]),l=function(){function e(e){this.type=e,this.parent=null,this.prev=null,this.next=null,this.startIndex=null,this.endIndex=null}return Object.defineProperty(e.prototype,"nodeType",{get:function(){var e;return null!==(e=a.get(this.type))&&void 0!==e?e:1},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"parentNode",{get:function(){return this.parent},set:function(e){this.parent=e},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"previousSibling",{get:function(){return this.prev},set:function(e){this.prev=e},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"nextSibling",{get:function(){return this.next},set:function(e){this.next=e},enumerable:!1,configurable:!0}),e.prototype.cloneNode=function(e){return void 0===e&&(e=!1),k(this,e)},e}();t.Node=l;var u=function(e){function t(t,n){var r=e.call(this,t)||this;return r.data=n,r}return r(t,e),Object.defineProperty(t.prototype,"nodeValue",{get:function(){return this.data},set:function(e){this.data=e},enumerable:!1,configurable:!0}),t}(l);t.DataNode=u;var s=function(e){function t(t){return e.call(this,i.ElementType.Text,t)||this}return r(t,e),t}(u);t.Text=s;var c=function(e){function t(t){return e.call(this,i.ElementType.Comment,t)||this}return r(t,e),t}(u);t.Comment=c;var f=function(e){function t(t,n){var r=e.call(this,i.ElementType.Directive,n)||this;return r.name=t,r}return r(t,e),t}(u);t.ProcessingInstruction=f;var d=function(e){function t(t,n){var r=e.call(this,t)||this;return r.children=n,r}return r(t,e),Object.defineProperty(t.prototype,"firstChild",{get:function(){var e;return null!==(e=this.children[0])&&void 0!==e?e:null},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"lastChild",{get:function(){return this.children.length>0?this.children[this.children.length-1]:null},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"childNodes",{get:function(){return this.children},set:function(e){this.children=e},enumerable:!1,configurable:!0}),t}(l);t.NodeWithChildren=d;var p=function(e){function t(t){return e.call(this,i.ElementType.Root,t)||this}return r(t,e),t}(d);t.Document=p;var h=function(e){function t(t,n,r,o){void 0===r&&(r=[]),void 0===o&&(o="script"===t?i.ElementType.Script:"style"===t?i.ElementType.Style:i.ElementType.Tag);var a=e.call(this,o,r)||this;return a.name=t,a.attribs=n,a}return r(t,e),Object.defineProperty(t.prototype,"tagName",{get:function(){return this.name},set:function(e){this.name=e},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"attributes",{get:function(){var e=this;return Object.keys(this.attribs).map((function(t){var n,r;return{name:t,value:e.attribs[t],namespace:null===(n=e["x-attribsNamespace"])||void 0===n?void 0:n[t],prefix:null===(r=e["x-attribsPrefix"])||void 0===r?void 0:r[t]}}))},enumerable:!1,configurable:!0}),t}(d);function m(e){return(0,i.isTag)(e)}function y(e){return e.type===i.ElementType.CDATA}function g(e){return e.type===i.ElementType.Text}function v(e){return e.type===i.ElementType.Comment}function b(e){return e.type===i.ElementType.Directive}function x(e){return e.type===i.ElementType.Root}function k(e,t){var n;if(void 0===t&&(t=!1),g(e))n=new s(e.data);else if(v(e))n=new c(e.data);else if(m(e)){var r=t?w(e.children):[],a=new h(e.name,o({},e.attribs),r);r.forEach((function(e){return e.parent=a})),e["x-attribsNamespace"]&&(a["x-attribsNamespace"]=o({},e["x-attribsNamespace"])),e["x-attribsPrefix"]&&(a["x-attribsPrefix"]=o({},e["x-attribsPrefix"])),n=a}else if(y(e)){r=t?w(e.children):[];var l=new d(i.ElementType.CDATA,r);r.forEach((function(e){return e.parent=l})),n=l}else if(x(e)){r=t?w(e.children):[];var u=new p(r);r.forEach((function(e){return e.parent=u})),e["x-mode"]&&(u["x-mode"]=e["x-mode"]),n=u}else{if(!b(e))throw new Error("Not implemented yet: "+e.type);var k=new f(e.name,e.data);null!=e["x-name"]&&(k["x-name"]=e["x-name"],k["x-publicId"]=e["x-publicId"],k["x-systemId"]=e["x-systemId"]),n=k}return n.startIndex=e.startIndex,n.endIndex=e.endIndex,n}function w(e){for(var t=e.map((function(e){return k(e,!0)})),n=1;n<t.length;n++)t[n].prev=t[n-1],t[n-1].next=t[n];return t}t.Element=h,t.isTag=m,t.isCDATA=y,t.isText=g,t.isComment=v,t.isDirective=b,t.isDocument=x,t.hasChildren=function(e){return Object.prototype.hasOwnProperty.call(e,"children")},t.cloneNode=k},function(e,t,n){"use strict";var r=this&&this.__extends||function(){var e=function(t,n){return e=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])},e(t,n)};return function(t,n){if("function"!==typeof n&&null!==n)throw new TypeError("Class extends value "+String(n)+" is not a constructor or null");function r(){this.constructor=t}e(t,n),t.prototype=null===n?Object.create(n):(r.prototype=n.prototype,new r)}}(),o=this&&this.__assign||function(){return o=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e},o.apply(this,arguments)};Object.defineProperty(t,"__esModule",{value:!0}),t.cloneNode=t.hasChildren=t.isDocument=t.isDirective=t.isComment=t.isText=t.isCDATA=t.isTag=t.Element=t.Document=t.NodeWithChildren=t.ProcessingInstruction=t.Comment=t.Text=t.DataNode=t.Node=void 0;var i=n(56),a=new Map([[i.ElementType.Tag,1],[i.ElementType.Script,1],[i.ElementType.Style,1],[i.ElementType.Directive,1],[i.ElementType.Text,3],[i.ElementType.CDATA,4],[i.ElementType.Comment,8],[i.ElementType.Root,9]]),l=function(){function e(e){this.type=e,this.parent=null,this.prev=null,this.next=null,this.startIndex=null,this.endIndex=null}return Object.defineProperty(e.prototype,"nodeType",{get:function(){var e;return null!==(e=a.get(this.type))&&void 0!==e?e:1},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"parentNode",{get:function(){return this.parent},set:function(e){this.parent=e},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"previousSibling",{get:function(){return this.prev},set:function(e){this.prev=e},enumerable:!1,configurable:!0}),Object.defineProperty(e.prototype,"nextSibling",{get:function(){return this.next},set:function(e){this.next=e},enumerable:!1,configurable:!0}),e.prototype.cloneNode=function(e){return void 0===e&&(e=!1),k(this,e)},e}();t.Node=l;var u=function(e){function t(t,n){var r=e.call(this,t)||this;return r.data=n,r}return r(t,e),Object.defineProperty(t.prototype,"nodeValue",{get:function(){return this.data},set:function(e){this.data=e},enumerable:!1,configurable:!0}),t}(l);t.DataNode=u;var s=function(e){function t(t){return e.call(this,i.ElementType.Text,t)||this}return r(t,e),t}(u);t.Text=s;var c=function(e){function t(t){return e.call(this,i.ElementType.Comment,t)||this}return r(t,e),t}(u);t.Comment=c;var f=function(e){function t(t,n){var r=e.call(this,i.ElementType.Directive,n)||this;return r.name=t,r}return r(t,e),t}(u);t.ProcessingInstruction=f;var d=function(e){function t(t,n){var r=e.call(this,t)||this;return r.children=n,r}return r(t,e),Object.defineProperty(t.prototype,"firstChild",{get:function(){var e;return null!==(e=this.children[0])&&void 0!==e?e:null},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"lastChild",{get:function(){return this.children.length>0?this.children[this.children.length-1]:null},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"childNodes",{get:function(){return this.children},set:function(e){this.children=e},enumerable:!1,configurable:!0}),t}(l);t.NodeWithChildren=d;var p=function(e){function t(t){return e.call(this,i.ElementType.Root,t)||this}return r(t,e),t}(d);t.Document=p;var h=function(e){function t(t,n,r,o){void 0===r&&(r=[]),void 0===o&&(o="script"===t?i.ElementType.Script:"style"===t?i.ElementType.Style:i.ElementType.Tag);var a=e.call(this,o,r)||this;return a.name=t,a.attribs=n,a}return r(t,e),Object.defineProperty(t.prototype,"tagName",{get:function(){return this.name},set:function(e){this.name=e},enumerable:!1,configurable:!0}),Object.defineProperty(t.prototype,"attributes",{get:function(){var e=this;return Object.keys(this.attribs).map((function(t){var n,r;return{name:t,value:e.attribs[t],namespace:null===(n=e["x-attribsNamespace"])||void 0===n?void 0:n[t],prefix:null===(r=e["x-attribsPrefix"])||void 0===r?void 0:r[t]}}))},enumerable:!1,configurable:!0}),t}(d);function m(e){return(0,i.isTag)(e)}function y(e){return e.type===i.ElementType.CDATA}function g(e){return e.type===i.ElementType.Text}function v(e){return e.type===i.ElementType.Comment}function b(e){return e.type===i.ElementType.Directive}function x(e){return e.type===i.ElementType.Root}function k(e,t){var n;if(void 0===t&&(t=!1),g(e))n=new s(e.data);else if(v(e))n=new c(e.data);else if(m(e)){var r=t?w(e.children):[],a=new h(e.name,o({},e.attribs),r);r.forEach((function(e){return e.parent=a})),e["x-attribsNamespace"]&&(a["x-attribsNamespace"]=o({},e["x-attribsNamespace"])),e["x-attribsPrefix"]&&(a["x-attribsPrefix"]=o({},e["x-attribsPrefix"])),n=a}else if(y(e)){r=t?w(e.children):[];var l=new d(i.ElementType.CDATA,r);r.forEach((function(e){return e.parent=l})),n=l}else if(x(e)){r=t?w(e.children):[];var u=new p(r);r.forEach((function(e){return e.parent=u})),e["x-mode"]&&(u["x-mode"]=e["x-mode"]),n=u}else{if(!b(e))throw new Error("Not implemented yet: "+e.type);var k=new f(e.name,e.data);null!=e["x-name"]&&(k["x-name"]=e["x-name"],k["x-publicId"]=e["x-publicId"],k["x-systemId"]=e["x-systemId"]),n=k}return n.startIndex=e.startIndex,n.endIndex=e.endIndex,n}function w(e){for(var t=e.map((function(e){return k(e,!0)})),n=1;n<t.length;n++)t[n].prev=t[n-1],t[n-1].next=t[n];return t}t.Element=h,t.isTag=m,t.isCDATA=y,t.isText=g,t.isComment=v,t.isDirective=b,t.isDocument=x,t.hasChildren=function(e){return Object.prototype.hasOwnProperty.call(e,"children")},t.cloneNode=k},function(e,t,n){"use strict";n(48);var r=n(0),o=60103;if(t.Fragment=60107,"function"===typeof Symbol&&Symbol.for){var i=Symbol.for;o=i("react.element"),t.Fragment=i("react.fragment")}var a=r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,l=Object.prototype.hasOwnProperty,u={key:!0,ref:!0,__self:!0,__source:!0};function s(e,t,n){var r,i={},s=null,c=null;for(r in void 0!==n&&(s=""+n),void 0!==t.key&&(s=""+t.key),void 0!==t.ref&&(c=t.ref),t)l.call(t,r)&&!u.hasOwnProperty(r)&&(i[r]=t[r]);if(e&&e.defaultProps)for(r in t=e.defaultProps)void 0===i[r]&&(i[r]=t[r]);return{$$typeof:o,type:e,key:s,ref:c,props:i,_owner:a.current}}t.jsx=s,t.jsxs=s},function(e,t,n){"use strict";e.exports=n(91)},function(e,t,n){"use strict";var r="function"===typeof Symbol&&Symbol.for,o=r?Symbol.for("react.element"):60103,i=r?Symbol.for("react.portal"):60106,a=r?Symbol.for("react.fragment"):60107,l=r?Symbol.for("react.strict_mode"):60108,u=r?Symbol.for("react.profiler"):60114,s=r?Symbol.for("react.provider"):60109,c=r?Symbol.for("react.context"):60110,f=r?Symbol.for("react.async_mode"):60111,d=r?Symbol.for("react.concurrent_mode"):60111,p=r?Symbol.for("react.forward_ref"):60112,h=r?Symbol.for("react.suspense"):60113,m=r?Symbol.for("react.suspense_list"):60120,y=r?Symbol.for("react.memo"):60115,g=r?Symbol.for("react.lazy"):60116,v=r?Symbol.for("react.block"):60121,b=r?Symbol.for("react.fundamental"):60117,x=r?Symbol.for("react.responder"):60118,k=r?Symbol.for("react.scope"):60119;function w(e){if("object"===typeof e&&null!==e){var t=e.$$typeof;switch(t){case o:switch(e=e.type){case f:case d:case a:case u:case l:case h:return e;default:switch(e=e&&e.$$typeof){case c:case p:case g:case y:case s:return e;default:return t}}case i:return t}}}function S(e){return w(e)===d}t.AsyncMode=f,t.ConcurrentMode=d,t.ContextConsumer=c,t.ContextProvider=s,t.Element=o,t.ForwardRef=p,t.Fragment=a,t.Lazy=g,t.Memo=y,t.Portal=i,t.Profiler=u,t.StrictMode=l,t.Suspense=h,t.isAsyncMode=function(e){return S(e)||w(e)===f},t.isConcurrentMode=S,t.isContextConsumer=function(e){return w(e)===c},t.isContextProvider=function(e){return w(e)===s},t.isElement=function(e){return"object"===typeof e&&null!==e&&e.$$typeof===o},t.isForwardRef=function(e){return w(e)===p},t.isFragment=function(e){return w(e)===a},t.isLazy=function(e){return w(e)===g},t.isMemo=function(e){return w(e)===y},t.isPortal=function(e){return w(e)===i},t.isProfiler=function(e){return w(e)===u},t.isStrictMode=function(e){return w(e)===l},t.isSuspense=function(e){return w(e)===h},t.isValidElementType=function(e){return"string"===typeof e||"function"===typeof e||e===a||e===d||e===u||e===l||e===h||e===m||"object"===typeof e&&null!==e&&(e.$$typeof===g||e.$$typeof===y||e.$$typeof===s||e.$$typeof===c||e.$$typeof===p||e.$$typeof===b||e.$$typeof===x||e.$$typeof===k||e.$$typeof===v)},t.typeOf=w},function(e,t){function n(t){return"function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?(e.exports=n=function(e){return typeof e},e.exports.default=e.exports,e.exports.__esModule=!0):(e.exports=n=function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e.exports.default=e.exports,e.exports.__esModule=!0),n(t)}e.exports=n,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,n){"use strict";n.r(t);var r=n(0),o=n.n(r),i=n(10),a=n.n(i),l=n(1),u=(n(6),n(42)),s=n(114),c=n(43);var f=function(e){var t=e.children,n=e.theme,r=Object(s.a)(),i=o.a.useMemo((function(){var e=null===r?n:function(e,t){return"function"===typeof t?t(e):Object(l.a)({},e,t)}(r,n);return null!=e&&(e[c.a]=null!==r),e}),[n,r]);return o.a.createElement(u.a.Provider,{value:i},t)};function d(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function p(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function h(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?p(Object(n),!0).forEach((function(t){d(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):p(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var m=n(62),y=function(e,t){if(t&&t.palette)return t.palette[e]},g=function(e){var t=Object(m.a)({typography:{htmlFontSize:16}}),n={h1:{fontSize:t.typography.pxToRem(28),lineHeight:v(36,28),fontWeight:600},h2:{fontSize:t.typography.pxToRem(24),lineHeight:v(32,24),fontWeight:600},h3:{fontSize:t.typography.pxToRem(20),lineHeight:v(24,20),fontWeight:600},h4:{fontSize:t.typography.pxToRem(16),lineHeight:v(24,16),fontWeight:600},h5:{fontSize:t.typography.pxToRem(16),lineHeight:v(24,16),fontWeight:600},h6:{fontSize:t.typography.pxToRem(14),lineHeight:v(20,14),fontWeight:600},body2:{fontSize:t.typography.pxToRem(14)}},r={typography:e?h(h({},n),e.typography):n,palette:{primary:{main:y("primaryColor",e)||"#1976d2"},secondary:{main:y("secondaryColor",e)||"#9c27b0"},text:{primary:y("textColor",e)||"rgba(0, 0, 0, 0.87)"}}};return Object(m.a)(r)};function v(e,t){return e/t}function b(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function x(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){if("undefined"!==typeof Symbol&&Symbol.iterator in Object(e)){var n=[],r=!0,o=!1,i=void 0;try{for(var a,l=e[Symbol.iterator]();!(r=(a=l.next()).done)&&(n.push(a.value),!t||n.length!==t);r=!0);}catch(u){o=!0,i=u}finally{try{r||null==l.return||l.return()}finally{if(o)throw i}}return n}}(e,t)||function(e,t){if(e){if("string"===typeof e)return b(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?b(e,t):void 0}}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var k=n(26);function w(e,t){void 0===t&&(t={});var n=function(e){if(e&&"j"===e[0]&&":"===e[1])return e.substr(2);return e}(e);if(function(e,t){return"undefined"===typeof t&&(t=!e||"{"!==e[0]&&"["!==e[0]&&'"'!==e[0]),!t}(n,t.doNotParse))try{return JSON.parse(n)}catch(r){}return e}var S,E=function(){return E=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e},E.apply(this,arguments)},O=function(){function e(e,t){var n=this;this.changeListeners=[],this.HAS_DOCUMENT_COOKIE=!1,this.cookies=function(e,t){return"string"===typeof e?k.parse(e,t):"object"===typeof e&&null!==e?e:{}}(e,t),new Promise((function(){n.HAS_DOCUMENT_COOKIE="object"===typeof document&&"string"===typeof document.cookie})).catch((function(){}))}return e.prototype._updateBrowserValues=function(e){this.HAS_DOCUMENT_COOKIE&&(this.cookies=k.parse(document.cookie,e))},e.prototype._emitChange=function(e){for(var t=0;t<this.changeListeners.length;++t)this.changeListeners[t](e)},e.prototype.get=function(e,t,n){return void 0===t&&(t={}),this._updateBrowserValues(n),w(this.cookies[e],t)},e.prototype.getAll=function(e,t){void 0===e&&(e={}),this._updateBrowserValues(t);var n={};for(var r in this.cookies)n[r]=w(this.cookies[r],e);return n},e.prototype.set=function(e,t,n){var r;"object"===typeof t&&(t=JSON.stringify(t)),this.cookies=E(E({},this.cookies),((r={})[e]=t,r)),this.HAS_DOCUMENT_COOKIE&&(document.cookie=k.serialize(e,t,n)),this._emitChange({name:e,value:t,options:n})},e.prototype.remove=function(e,t){var n=t=E(E({},t),{expires:new Date(1970,1,1,0,0,1),maxAge:0});this.cookies=E({},this.cookies),delete this.cookies[e],this.HAS_DOCUMENT_COOKIE&&(document.cookie=k.serialize(e,"",n)),this._emitChange({name:e,value:void 0,options:t})},e.prototype.addChangeListener=function(e){this.changeListeners.push(e)},e.prototype.removeChangeListener=function(e){var t=this.changeListeners.indexOf(e);t>=0&&this.changeListeners.splice(t,1)},e}();!function(e){e.Sidebar="sidebar",e.Dialog="dialog"}(S||(S={}));var C=S,j=n(3),T=n(37),P=n(19),R=n(23),N=!1,_=o.a.createContext(null),z="unmounted",M="exited",A="entering",I="entered",D="exiting",L=function(e){function t(t,n){var r;r=e.call(this,t,n)||this;var o,i=n&&!n.isMounting?t.enter:t.appear;return r.appearStatus=null,t.in?i?(o=M,r.appearStatus=A):o=I:o=t.unmountOnExit||t.mountOnEnter?z:M,r.state={status:o},r.nextCallback=null,r}Object(R.a)(t,e),t.getDerivedStateFromProps=function(e,t){return e.in&&t.status===z?{status:M}:null};var n=t.prototype;return n.componentDidMount=function(){this.updateStatus(!0,this.appearStatus)},n.componentDidUpdate=function(e){var t=null;if(e!==this.props){var n=this.state.status;this.props.in?n!==A&&n!==I&&(t=A):n!==A&&n!==I||(t=D)}this.updateStatus(!1,t)},n.componentWillUnmount=function(){this.cancelNextCallback()},n.getTimeouts=function(){var e,t,n,r=this.props.timeout;return e=t=n=r,null!=r&&"number"!==typeof r&&(e=r.exit,t=r.enter,n=void 0!==r.appear?r.appear:t),{exit:e,enter:t,appear:n}},n.updateStatus=function(e,t){void 0===e&&(e=!1),null!==t?(this.cancelNextCallback(),t===A?this.performEnter(e):this.performExit()):this.props.unmountOnExit&&this.state.status===M&&this.setState({status:z})},n.performEnter=function(e){var t=this,n=this.props.enter,r=this.context?this.context.isMounting:e,o=this.props.nodeRef?[r]:[a.a.findDOMNode(this),r],i=o[0],l=o[1],u=this.getTimeouts(),s=r?u.appear:u.enter;!e&&!n||N?this.safeSetState({status:I},(function(){t.props.onEntered(i)})):(this.props.onEnter(i,l),this.safeSetState({status:A},(function(){t.props.onEntering(i,l),t.onTransitionEnd(s,(function(){t.safeSetState({status:I},(function(){t.props.onEntered(i,l)}))}))})))},n.performExit=function(){var e=this,t=this.props.exit,n=this.getTimeouts(),r=this.props.nodeRef?void 0:a.a.findDOMNode(this);t&&!N?(this.props.onExit(r),this.safeSetState({status:D},(function(){e.props.onExiting(r),e.onTransitionEnd(n.exit,(function(){e.safeSetState({status:M},(function(){e.props.onExited(r)}))}))}))):this.safeSetState({status:M},(function(){e.props.onExited(r)}))},n.cancelNextCallback=function(){null!==this.nextCallback&&(this.nextCallback.cancel(),this.nextCallback=null)},n.safeSetState=function(e,t){t=this.setNextCallback(t),this.setState(e,t)},n.setNextCallback=function(e){var t=this,n=!0;return this.nextCallback=function(r){n&&(n=!1,t.nextCallback=null,e(r))},this.nextCallback.cancel=function(){n=!1},this.nextCallback},n.onTransitionEnd=function(e,t){this.setNextCallback(t);var n=this.props.nodeRef?this.props.nodeRef.current:a.a.findDOMNode(this),r=null==e&&!this.props.addEndListener;if(n&&!r){if(this.props.addEndListener){var o=this.props.nodeRef?[this.nextCallback]:[n,this.nextCallback],i=o[0],l=o[1];this.props.addEndListener(i,l)}null!=e&&setTimeout(this.nextCallback,e)}else setTimeout(this.nextCallback,0)},n.render=function(){var e=this.state.status;if(e===z)return null;var t=this.props,n=t.children,r=(t.in,t.mountOnEnter,t.unmountOnExit,t.appear,t.enter,t.exit,t.timeout,t.addEndListener,t.onEnter,t.onEntering,t.onEntered,t.onExit,t.onExiting,t.onExited,t.nodeRef,Object(P.a)(t,["children","in","mountOnEnter","unmountOnExit","appear","enter","exit","timeout","addEndListener","onEnter","onEntering","onEntered","onExit","onExiting","onExited","nodeRef"]));return o.a.createElement(_.Provider,{value:null},"function"===typeof n?n(e,r):o.a.cloneElement(o.a.Children.only(n),r))},t}(o.a.Component);function F(){}L.contextType=_,L.propTypes={},L.defaultProps={in:!1,mountOnEnter:!1,unmountOnExit:!1,appear:!1,enter:!0,exit:!0,onEnter:F,onEntering:F,onEntered:F,onExit:F,onExiting:F,onExited:F},L.UNMOUNTED=z,L.EXITED=M,L.ENTERING=A,L.ENTERED=I,L.EXITING=D;var B=L,W=n(9),U=n(20);function V(){return Object(s.a)()||U.a}var $=n(12),H=function(e){return e.scrollTop};function K(e,t){var n=e.timeout,r=e.style,o=void 0===r?{}:r;return{duration:o.transitionDuration||"number"===typeof n?n:n[t.mode]||0,delay:o.transitionDelay}}function q(e,t){var n=function(e,t){var n,r=t.getBoundingClientRect();if(t.fakeTransform)n=t.fakeTransform;else{var o=window.getComputedStyle(t);n=o.getPropertyValue("-webkit-transform")||o.getPropertyValue("transform")}var i=0,a=0;if(n&&"none"!==n&&"string"===typeof n){var l=n.split("(")[1].split(")")[0].split(",");i=parseInt(l[4],10),a=parseInt(l[5],10)}return"left"===e?"translateX(".concat(window.innerWidth,"px) translateX(").concat(i-r.left,"px)"):"right"===e?"translateX(-".concat(r.left+r.width-i,"px)"):"up"===e?"translateY(".concat(window.innerHeight,"px) translateY(").concat(a-r.top,"px)"):"translateY(-".concat(r.top+r.height-a,"px)")}(e,t);n&&(t.style.webkitTransform=n,t.style.transform=n)}var Q={enter:$.b.enteringScreen,exit:$.b.leavingScreen},Y=r.forwardRef((function(e,t){var n=e.children,o=e.direction,a=void 0===o?"down":o,u=e.in,s=e.onEnter,c=e.onEntered,f=e.onEntering,d=e.onExit,p=e.onExited,h=e.onExiting,m=e.style,y=e.timeout,g=void 0===y?Q:y,v=e.TransitionComponent,b=void 0===v?B:v,x=Object(j.a)(e,["children","direction","in","onEnter","onEntered","onEntering","onExit","onExited","onExiting","style","timeout","TransitionComponent"]),k=V(),w=r.useRef(null),S=r.useCallback((function(e){w.current=i.findDOMNode(e)}),[]),E=Object(W.a)(n.ref,S),O=Object(W.a)(E,t),C=function(e){return function(t){e&&(void 0===t?e(w.current):e(w.current,t))}},P=C((function(e,t){q(a,e),H(e),s&&s(e,t)})),R=C((function(e,t){var n=K({timeout:g,style:m},{mode:"enter"});e.style.webkitTransition=k.transitions.create("-webkit-transform",Object(l.a)({},n,{easing:k.transitions.easing.easeOut})),e.style.transition=k.transitions.create("transform",Object(l.a)({},n,{easing:k.transitions.easing.easeOut})),e.style.webkitTransform="none",e.style.transform="none",f&&f(e,t)})),N=C(c),_=C(h),z=C((function(e){var t=K({timeout:g,style:m},{mode:"exit"});e.style.webkitTransition=k.transitions.create("-webkit-transform",Object(l.a)({},t,{easing:k.transitions.easing.sharp})),e.style.transition=k.transitions.create("transform",Object(l.a)({},t,{easing:k.transitions.easing.sharp})),q(a,e),d&&d(e)})),M=C((function(e){e.style.webkitTransition="",e.style.transition="",p&&p(e)})),A=r.useCallback((function(){w.current&&q(a,w.current)}),[a]);return r.useEffect((function(){if(!u&&"down"!==a&&"right"!==a){var e=Object(T.a)((function(){w.current&&q(a,w.current)}));return window.addEventListener("resize",e),function(){e.clear(),window.removeEventListener("resize",e)}}}),[a,u]),r.useEffect((function(){u||A()}),[u,A]),r.createElement(b,Object(l.a)({nodeRef:w,onEnter:P,onEntered:N,onEntering:R,onExit:z,onExited:M,onExiting:_,appear:!0,in:u,timeout:g},x),(function(e,t){return r.cloneElement(n,Object(l.a)({ref:O,style:Object(l.a)({visibility:"exited"!==e||u?void 0:"hidden"},m,n.props.style)},t))}))})),X=n(4),G=n(5),J=r.forwardRef((function(e,t){var n=e.classes,o=e.className,i=e.component,a=void 0===i?"div":i,u=e.square,s=void 0!==u&&u,c=e.elevation,f=void 0===c?1:c,d=e.variant,p=void 0===d?"elevation":d,h=Object(j.a)(e,["classes","className","component","square","elevation","variant"]);return r.createElement(a,Object(l.a)({className:Object(X.a)(n.root,o,"outlined"===p?n.outlined:n["elevation".concat(f)],!s&&n.rounded),ref:t},h))})),Z=Object(G.a)((function(e){var t={};return e.shadows.forEach((function(e,n){t["elevation".concat(n)]={boxShadow:e}})),Object(l.a)({root:{backgroundColor:e.palette.background.paper,color:e.palette.text.primary,transition:e.transitions.create("box-shadow")},rounded:{borderRadius:e.shape.borderRadius},outlined:{border:"1px solid ".concat(e.palette.divider)}},t)}),{name:"MuiPaper"})(J),ee=n(22),te=r.forwardRef((function(e,t){var n=e.children,o=e.classes,i=e.className,a=e.collapsedHeight,u=e.collapsedSize,s=void 0===u?"0px":u,c=e.component,f=void 0===c?"div":c,d=e.disableStrictModeCompat,p=void 0!==d&&d,h=e.in,m=e.onEnter,y=e.onEntered,g=e.onEntering,v=e.onExit,b=e.onExited,x=e.onExiting,k=e.style,w=e.timeout,S=void 0===w?$.b.standard:w,E=e.TransitionComponent,O=void 0===E?B:E,C=Object(j.a)(e,["children","classes","className","collapsedHeight","collapsedSize","component","disableStrictModeCompat","in","onEnter","onEntered","onEntering","onExit","onExited","onExiting","style","timeout","TransitionComponent"]),T=V(),P=r.useRef(),R=r.useRef(null),N=r.useRef(),_="number"===typeof(a||s)?"".concat(a||s,"px"):a||s;r.useEffect((function(){return function(){clearTimeout(P.current)}}),[]);var z=T.unstable_strictMode&&!p,M=r.useRef(null),A=Object(W.a)(t,z?M:void 0),I=function(e){return function(t,n){if(e){var r=z?[M.current,t]:[t,n],o=Object(ee.a)(r,2),i=o[0],a=o[1];void 0===a?e(i):e(i,a)}}},D=I((function(e,t){e.style.height=_,m&&m(e,t)})),L=I((function(e,t){var n=R.current?R.current.clientHeight:0,r=K({style:k,timeout:S},{mode:"enter"}).duration;if("auto"===S){var o=T.transitions.getAutoHeightDuration(n);e.style.transitionDuration="".concat(o,"ms"),N.current=o}else e.style.transitionDuration="string"===typeof r?r:"".concat(r,"ms");e.style.height="".concat(n,"px"),g&&g(e,t)})),F=I((function(e,t){e.style.height="auto",y&&y(e,t)})),U=I((function(e){var t=R.current?R.current.clientHeight:0;e.style.height="".concat(t,"px"),v&&v(e)})),H=I(b),q=I((function(e){var t=R.current?R.current.clientHeight:0,n=K({style:k,timeout:S},{mode:"exit"}).duration;if("auto"===S){var r=T.transitions.getAutoHeightDuration(t);e.style.transitionDuration="".concat(r,"ms"),N.current=r}else e.style.transitionDuration="string"===typeof n?n:"".concat(n,"ms");e.style.height=_,x&&x(e)}));return r.createElement(O,Object(l.a)({in:h,onEnter:D,onEntered:F,onEntering:L,onExit:U,onExited:H,onExiting:q,addEndListener:function(e,t){var n=z?e:t;"auto"===S&&(P.current=setTimeout(n,N.current||0))},nodeRef:z?M:void 0,timeout:"auto"===S?null:S},C),(function(e,t){return r.createElement(f,Object(l.a)({className:Object(X.a)(o.root,o.container,i,{entered:o.entered,exited:!h&&"0px"===_&&o.hidden}[e]),style:Object(l.a)({minHeight:_},k),ref:A},t),r.createElement("div",{className:o.wrapper,ref:R},r.createElement("div",{className:o.wrapperInner},n)))}))}));te.muiSupportAuto=!0;var ne=Object(G.a)((function(e){return{root:{height:0,overflow:"hidden",transition:e.transitions.create("height")},entered:{height:"auto",overflow:"visible"},hidden:{visibility:"hidden"},wrapper:{display:"flex"},wrapperInner:{width:"100%"}}}),{name:"MuiCollapse"})(te),re=[0,1,2,3,4,5,6,7,8,9,10],oe=["auto",!0,1,2,3,4,5,6,7,8,9,10,11,12];function ie(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=parseFloat(e);return"".concat(n/t).concat(String(e).replace(String(n),"")||"px")}var ae=r.forwardRef((function(e,t){var n=e.alignContent,o=void 0===n?"stretch":n,i=e.alignItems,a=void 0===i?"stretch":i,u=e.classes,s=e.className,c=e.component,f=void 0===c?"div":c,d=e.container,p=void 0!==d&&d,h=e.direction,m=void 0===h?"row":h,y=e.item,g=void 0!==y&&y,v=e.justify,b=e.justifyContent,x=void 0===b?"flex-start":b,k=e.lg,w=void 0!==k&&k,S=e.md,E=void 0!==S&&S,O=e.sm,C=void 0!==O&&O,T=e.spacing,P=void 0===T?0:T,R=e.wrap,N=void 0===R?"wrap":R,_=e.xl,z=void 0!==_&&_,M=e.xs,A=void 0!==M&&M,I=e.zeroMinWidth,D=void 0!==I&&I,L=Object(j.a)(e,["alignContent","alignItems","classes","className","component","container","direction","item","justify","justifyContent","lg","md","sm","spacing","wrap","xl","xs","zeroMinWidth"]),F=Object(X.a)(u.root,s,p&&[u.container,0!==P&&u["spacing-xs-".concat(String(P))]],g&&u.item,D&&u.zeroMinWidth,"row"!==m&&u["direction-xs-".concat(String(m))],"wrap"!==N&&u["wrap-xs-".concat(String(N))],"stretch"!==a&&u["align-items-xs-".concat(String(a))],"stretch"!==o&&u["align-content-xs-".concat(String(o))],"flex-start"!==(v||x)&&u["justify-content-xs-".concat(String(v||x))],!1!==A&&u["grid-xs-".concat(String(A))],!1!==C&&u["grid-sm-".concat(String(C))],!1!==E&&u["grid-md-".concat(String(E))],!1!==w&&u["grid-lg-".concat(String(w))],!1!==z&&u["grid-xl-".concat(String(z))]);return r.createElement(f,Object(l.a)({className:F,ref:t},L))})),le=Object(G.a)((function(e){return Object(l.a)({root:{},container:{boxSizing:"border-box",display:"flex",flexWrap:"wrap",width:"100%"},item:{boxSizing:"border-box",margin:"0"},zeroMinWidth:{minWidth:0},"direction-xs-column":{flexDirection:"column"},"direction-xs-column-reverse":{flexDirection:"column-reverse"},"direction-xs-row-reverse":{flexDirection:"row-reverse"},"wrap-xs-nowrap":{flexWrap:"nowrap"},"wrap-xs-wrap-reverse":{flexWrap:"wrap-reverse"},"align-items-xs-center":{alignItems:"center"},"align-items-xs-flex-start":{alignItems:"flex-start"},"align-items-xs-flex-end":{alignItems:"flex-end"},"align-items-xs-baseline":{alignItems:"baseline"},"align-content-xs-center":{alignContent:"center"},"align-content-xs-flex-start":{alignContent:"flex-start"},"align-content-xs-flex-end":{alignContent:"flex-end"},"align-content-xs-space-between":{alignContent:"space-between"},"align-content-xs-space-around":{alignContent:"space-around"},"justify-content-xs-center":{justifyContent:"center"},"justify-content-xs-flex-end":{justifyContent:"flex-end"},"justify-content-xs-space-between":{justifyContent:"space-between"},"justify-content-xs-space-around":{justifyContent:"space-around"},"justify-content-xs-space-evenly":{justifyContent:"space-evenly"}},function(e,t){var n={};return re.forEach((function(r){var o=e.spacing(r);0!==o&&(n["spacing-".concat(t,"-").concat(r)]={margin:"-".concat(ie(o,2)),width:"calc(100% + ".concat(ie(o),")"),"& > $item":{padding:ie(o,2)}})})),n}(e,"xs"),e.breakpoints.keys.reduce((function(t,n){return function(e,t,n){var r={};oe.forEach((function(e){var t="grid-".concat(n,"-").concat(e);if(!0!==e)if("auto"!==e){var o="".concat(Math.round(e/12*1e8)/1e6,"%");r[t]={flexBasis:o,flexGrow:0,maxWidth:o}}else r[t]={flexBasis:"auto",flexGrow:0,maxWidth:"none"};else r[t]={flexBasis:0,flexGrow:1,maxWidth:"100%"}})),"xs"===n?Object(l.a)(e,r):e[t.breakpoints.up(n)]=r}(t,e,n),t}),{}))}),{name:"MuiGrid"})(ae),ue=le,se=n(11),ce=n(14),fe=n(24),de=n(16),pe=n(34);function he(e,t){var n=Object.create(null);return e&&r.Children.map(e,(function(e){return e})).forEach((function(e){n[e.key]=function(e){return t&&Object(r.isValidElement)(e)?t(e):e}(e)})),n}function me(e,t,n){return null!=n[t]?n[t]:e.props[t]}function ye(e,t,n){var o=he(e.children),i=function(e,t){function n(n){return n in t?t[n]:e[n]}e=e||{},t=t||{};var r,o=Object.create(null),i=[];for(var a in e)a in t?i.length&&(o[a]=i,i=[]):i.push(a);var l={};for(var u in t){if(o[u])for(r=0;r<o[u].length;r++){var s=o[u][r];l[o[u][r]]=n(s)}l[u]=n(u)}for(r=0;r<i.length;r++)l[i[r]]=n(i[r]);return l}(t,o);return Object.keys(i).forEach((function(a){var l=i[a];if(Object(r.isValidElement)(l)){var u=a in t,s=a in o,c=t[a],f=Object(r.isValidElement)(c)&&!c.props.in;!s||u&&!f?s||!u||f?s&&u&&Object(r.isValidElement)(c)&&(i[a]=Object(r.cloneElement)(l,{onExited:n.bind(null,l),in:c.props.in,exit:me(l,"exit",e),enter:me(l,"enter",e)})):i[a]=Object(r.cloneElement)(l,{in:!1}):i[a]=Object(r.cloneElement)(l,{onExited:n.bind(null,l),in:!0,exit:me(l,"exit",e),enter:me(l,"enter",e)})}})),i}var ge=Object.values||function(e){return Object.keys(e).map((function(t){return e[t]}))},ve=function(e){function t(t,n){var r,o=(r=e.call(this,t,n)||this).handleExited.bind(Object(pe.a)(r));return r.state={contextValue:{isMounting:!0},handleExited:o,firstRender:!0},r}Object(R.a)(t,e);var n=t.prototype;return n.componentDidMount=function(){this.mounted=!0,this.setState({contextValue:{isMounting:!1}})},n.componentWillUnmount=function(){this.mounted=!1},t.getDerivedStateFromProps=function(e,t){var n,o,i=t.children,a=t.handleExited;return{children:t.firstRender?(n=e,o=a,he(n.children,(function(e){return Object(r.cloneElement)(e,{onExited:o.bind(null,e),in:!0,appear:me(e,"appear",n),enter:me(e,"enter",n),exit:me(e,"exit",n)})}))):ye(e,i,a),firstRender:!1}},n.handleExited=function(e,t){var n=he(this.props.children);e.key in n||(e.props.onExited&&e.props.onExited(t),this.mounted&&this.setState((function(t){var n=Object(l.a)({},t.children);return delete n[e.key],{children:n}})))},n.render=function(){var e=this.props,t=e.component,n=e.childFactory,r=Object(P.a)(e,["component","childFactory"]),i=this.state.contextValue,a=ge(this.state.children).map(n);return delete r.appear,delete r.enter,delete r.exit,null===t?o.a.createElement(_.Provider,{value:i},a):o.a.createElement(_.Provider,{value:i},o.a.createElement(t,r,a))},t}(o.a.Component);ve.propTypes={},ve.defaultProps={component:"div",childFactory:function(e){return e}};var be=ve,xe="undefined"===typeof window?r.useEffect:r.useLayoutEffect;var ke=function(e){var t=e.classes,n=e.pulsate,o=void 0!==n&&n,i=e.rippleX,a=e.rippleY,l=e.rippleSize,u=e.in,s=e.onExited,c=void 0===s?function(){}:s,f=e.timeout,d=r.useState(!1),p=d[0],h=d[1],m=Object(X.a)(t.ripple,t.rippleVisible,o&&t.ripplePulsate),y={width:l,height:l,top:-l/2+a,left:-l/2+i},g=Object(X.a)(t.child,p&&t.childLeaving,o&&t.childPulsate),v=Object(ce.a)(c);return xe((function(){if(!u){h(!0);var e=setTimeout(v,f);return function(){clearTimeout(e)}}}),[v,u,f]),r.createElement("span",{className:m,style:y},r.createElement("span",{className:g}))},we=r.forwardRef((function(e,t){var n=e.center,o=void 0!==n&&n,i=e.classes,a=e.className,u=Object(j.a)(e,["center","classes","className"]),s=r.useState([]),c=s[0],f=s[1],d=r.useRef(0),p=r.useRef(null);r.useEffect((function(){p.current&&(p.current(),p.current=null)}),[c]);var h=r.useRef(!1),m=r.useRef(null),y=r.useRef(null),g=r.useRef(null);r.useEffect((function(){return function(){clearTimeout(m.current)}}),[]);var v=r.useCallback((function(e){var t=e.pulsate,n=e.rippleX,o=e.rippleY,a=e.rippleSize,l=e.cb;f((function(e){return[].concat(Object(de.a)(e),[r.createElement(ke,{key:d.current,classes:i,timeout:550,pulsate:t,rippleX:n,rippleY:o,rippleSize:a})])})),d.current+=1,p.current=l}),[i]),b=r.useCallback((function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=arguments.length>2?arguments[2]:void 0,r=t.pulsate,i=void 0!==r&&r,a=t.center,l=void 0===a?o||t.pulsate:a,u=t.fakeElement,s=void 0!==u&&u;if("mousedown"===e.type&&h.current)h.current=!1;else{"touchstart"===e.type&&(h.current=!0);var c,f,d,p=s?null:g.current,b=p?p.getBoundingClientRect():{width:0,height:0,left:0,top:0};if(l||0===e.clientX&&0===e.clientY||!e.clientX&&!e.touches)c=Math.round(b.width/2),f=Math.round(b.height/2);else{var x=e.touches?e.touches[0]:e,k=x.clientX,w=x.clientY;c=Math.round(k-b.left),f=Math.round(w-b.top)}if(l)(d=Math.sqrt((2*Math.pow(b.width,2)+Math.pow(b.height,2))/3))%2===0&&(d+=1);else{var S=2*Math.max(Math.abs((p?p.clientWidth:0)-c),c)+2,E=2*Math.max(Math.abs((p?p.clientHeight:0)-f),f)+2;d=Math.sqrt(Math.pow(S,2)+Math.pow(E,2))}e.touches?null===y.current&&(y.current=function(){v({pulsate:i,rippleX:c,rippleY:f,rippleSize:d,cb:n})},m.current=setTimeout((function(){y.current&&(y.current(),y.current=null)}),80)):v({pulsate:i,rippleX:c,rippleY:f,rippleSize:d,cb:n})}}),[o,v]),x=r.useCallback((function(){b({},{pulsate:!0})}),[b]),k=r.useCallback((function(e,t){if(clearTimeout(m.current),"touchend"===e.type&&y.current)return e.persist(),y.current(),y.current=null,void(m.current=setTimeout((function(){k(e,t)})));y.current=null,f((function(e){return e.length>0?e.slice(1):e})),p.current=t}),[]);return r.useImperativeHandle(t,(function(){return{pulsate:x,start:b,stop:k}}),[x,b,k]),r.createElement("span",Object(l.a)({className:Object(X.a)(i.root,a),ref:g},u),r.createElement(be,{component:null,exit:!0},c))})),Se=Object(G.a)((function(e){return{root:{overflow:"hidden",pointerEvents:"none",position:"absolute",zIndex:0,top:0,right:0,bottom:0,left:0,borderRadius:"inherit"},ripple:{opacity:0,position:"absolute"},rippleVisible:{opacity:.3,transform:"scale(1)",animation:"$enter ".concat(550,"ms ").concat(e.transitions.easing.easeInOut)},ripplePulsate:{animationDuration:"".concat(e.transitions.duration.shorter,"ms")},child:{opacity:1,display:"block",width:"100%",height:"100%",borderRadius:"50%",backgroundColor:"currentColor"},childLeaving:{opacity:0,animation:"$exit ".concat(550,"ms ").concat(e.transitions.easing.easeInOut)},childPulsate:{position:"absolute",left:0,top:0,animation:"$pulsate 2500ms ".concat(e.transitions.easing.easeInOut," 200ms infinite")},"@keyframes enter":{"0%":{transform:"scale(0)",opacity:.1},"100%":{transform:"scale(1)",opacity:.3}},"@keyframes exit":{"0%":{opacity:1},"100%":{opacity:0}},"@keyframes pulsate":{"0%":{transform:"scale(1)"},"50%":{transform:"scale(0.92)"},"100%":{transform:"scale(1)"}}}}),{flip:!1,name:"MuiTouchRipple"})(r.memo(we)),Ee=r.forwardRef((function(e,t){var n=e.action,o=e.buttonRef,a=e.centerRipple,u=void 0!==a&&a,s=e.children,c=e.classes,f=e.className,d=e.component,p=void 0===d?"button":d,h=e.disabled,m=void 0!==h&&h,y=e.disableRipple,g=void 0!==y&&y,v=e.disableTouchRipple,b=void 0!==v&&v,x=e.focusRipple,k=void 0!==x&&x,w=e.focusVisibleClassName,S=e.onBlur,E=e.onClick,O=e.onFocus,C=e.onFocusVisible,T=e.onKeyDown,P=e.onKeyUp,R=e.onMouseDown,N=e.onMouseLeave,_=e.onMouseUp,z=e.onTouchEnd,M=e.onTouchMove,A=e.onTouchStart,I=e.onDragLeave,D=e.tabIndex,L=void 0===D?0:D,F=e.TouchRippleProps,B=e.type,U=void 0===B?"button":B,V=Object(j.a)(e,["action","buttonRef","centerRipple","children","classes","className","component","disabled","disableRipple","disableTouchRipple","focusRipple","focusVisibleClassName","onBlur","onClick","onFocus","onFocusVisible","onKeyDown","onKeyUp","onMouseDown","onMouseLeave","onMouseUp","onTouchEnd","onTouchMove","onTouchStart","onDragLeave","tabIndex","TouchRippleProps","type"]),$=r.useRef(null);var H=r.useRef(null),K=r.useState(!1),q=K[0],Q=K[1];m&&q&&Q(!1);var Y=Object(fe.a)(),G=Y.isFocusVisible,J=Y.onBlurVisible,Z=Y.ref;function ee(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:b;return Object(ce.a)((function(r){return t&&t(r),!n&&H.current&&H.current[e](r),!0}))}r.useImperativeHandle(n,(function(){return{focusVisible:function(){Q(!0),$.current.focus()}}}),[]),r.useEffect((function(){q&&k&&!g&&H.current.pulsate()}),[g,k,q]);var te=ee("start",R),ne=ee("stop",I),re=ee("stop",_),oe=ee("stop",(function(e){q&&e.preventDefault(),N&&N(e)})),ie=ee("start",A),ae=ee("stop",z),le=ee("stop",M),ue=ee("stop",(function(e){q&&(J(e),Q(!1)),S&&S(e)}),!1),se=Object(ce.a)((function(e){$.current||($.current=e.currentTarget),G(e)&&(Q(!0),C&&C(e)),O&&O(e)})),de=function(){var e=i.findDOMNode($.current);return p&&"button"!==p&&!("A"===e.tagName&&e.href)},pe=r.useRef(!1),he=Object(ce.a)((function(e){k&&!pe.current&&q&&H.current&&" "===e.key&&(pe.current=!0,e.persist(),H.current.stop(e,(function(){H.current.start(e)}))),e.target===e.currentTarget&&de()&&" "===e.key&&e.preventDefault(),T&&T(e),e.target===e.currentTarget&&de()&&"Enter"===e.key&&!m&&(e.preventDefault(),E&&E(e))})),me=Object(ce.a)((function(e){k&&" "===e.key&&H.current&&q&&!e.defaultPrevented&&(pe.current=!1,e.persist(),H.current.stop(e,(function(){H.current.pulsate(e)}))),P&&P(e),E&&e.target===e.currentTarget&&de()&&" "===e.key&&!e.defaultPrevented&&E(e)})),ye=p;"button"===ye&&V.href&&(ye="a");var ge={};"button"===ye?(ge.type=U,ge.disabled=m):("a"===ye&&V.href||(ge.role="button"),ge["aria-disabled"]=m);var ve=Object(W.a)(o,t),be=Object(W.a)(Z,$),xe=Object(W.a)(ve,be),ke=r.useState(!1),we=ke[0],Ee=ke[1];r.useEffect((function(){Ee(!0)}),[]);var Oe=we&&!g&&!m;return r.createElement(ye,Object(l.a)({className:Object(X.a)(c.root,f,q&&[c.focusVisible,w],m&&c.disabled),onBlur:ue,onClick:E,onFocus:se,onKeyDown:he,onKeyUp:me,onMouseDown:te,onMouseLeave:oe,onMouseUp:re,onDragLeave:ne,onTouchEnd:ae,onTouchMove:le,onTouchStart:ie,ref:xe,tabIndex:m?-1:L},ge,V),s,Oe?r.createElement(Se,Object(l.a)({ref:H,center:u},F)):null)})),Oe=Object(G.a)({root:{display:"inline-flex",alignItems:"center",justifyContent:"center",position:"relative",WebkitTapHighlightColor:"transparent",backgroundColor:"transparent",outline:0,border:0,margin:0,borderRadius:0,padding:0,cursor:"pointer",userSelect:"none",verticalAlign:"middle","-moz-appearance":"none","-webkit-appearance":"none",textDecoration:"none",color:"inherit","&::-moz-focus-inner":{borderStyle:"none"},"&$disabled":{pointerEvents:"none",cursor:"default"},"@media print":{colorAdjust:"exact"}},disabled:{},focusVisible:{}},{name:"MuiButtonBase"})(Ee),Ce=n(7),je=r.forwardRef((function(e,t){var n=e.children,o=e.classes,i=e.className,a=e.color,u=void 0===a?"default":a,s=e.component,c=void 0===s?"button":s,f=e.disabled,d=void 0!==f&&f,p=e.disableElevation,h=void 0!==p&&p,m=e.disableFocusRipple,y=void 0!==m&&m,g=e.endIcon,v=e.focusVisibleClassName,b=e.fullWidth,x=void 0!==b&&b,k=e.size,w=void 0===k?"medium":k,S=e.startIcon,E=e.type,O=void 0===E?"button":E,C=e.variant,T=void 0===C?"text":C,P=Object(j.a)(e,["children","classes","className","color","component","disabled","disableElevation","disableFocusRipple","endIcon","focusVisibleClassName","fullWidth","size","startIcon","type","variant"]),R=S&&r.createElement("span",{className:Object(X.a)(o.startIcon,o["iconSize".concat(Object(Ce.a)(w))])},S),N=g&&r.createElement("span",{className:Object(X.a)(o.endIcon,o["iconSize".concat(Object(Ce.a)(w))])},g);return r.createElement(Oe,Object(l.a)({className:Object(X.a)(o.root,o[T],i,"inherit"===u?o.colorInherit:"default"!==u&&o["".concat(T).concat(Object(Ce.a)(u))],"medium"!==w&&[o["".concat(T,"Size").concat(Object(Ce.a)(w))],o["size".concat(Object(Ce.a)(w))]],h&&o.disableElevation,d&&o.disabled,x&&o.fullWidth),component:c,disabled:d,focusRipple:!y,focusVisibleClassName:Object(X.a)(o.focusVisible,v),ref:t,type:O},P),r.createElement("span",{className:o.label},R,n,N))})),Te=Object(G.a)((function(e){return{root:Object(l.a)({},e.typography.button,{boxSizing:"border-box",minWidth:64,padding:"6px 16px",borderRadius:e.shape.borderRadius,color:e.palette.text.primary,transition:e.transitions.create(["background-color","box-shadow","border"],{duration:e.transitions.duration.short}),"&:hover":{textDecoration:"none",backgroundColor:Object(se.a)(e.palette.text.primary,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"},"&$disabled":{backgroundColor:"transparent"}},"&$disabled":{color:e.palette.action.disabled}}),label:{width:"100%",display:"inherit",alignItems:"inherit",justifyContent:"inherit"},text:{padding:"6px 8px"},textPrimary:{color:e.palette.primary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.primary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},textSecondary:{color:e.palette.secondary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.secondary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},outlined:{padding:"5px 15px",border:"1px solid ".concat("light"===e.palette.type?"rgba(0, 0, 0, 0.23)":"rgba(255, 255, 255, 0.23)"),"&$disabled":{border:"1px solid ".concat(e.palette.action.disabledBackground)}},outlinedPrimary:{color:e.palette.primary.main,border:"1px solid ".concat(Object(se.a)(e.palette.primary.main,.5)),"&:hover":{border:"1px solid ".concat(e.palette.primary.main),backgroundColor:Object(se.a)(e.palette.primary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},outlinedSecondary:{color:e.palette.secondary.main,border:"1px solid ".concat(Object(se.a)(e.palette.secondary.main,.5)),"&:hover":{border:"1px solid ".concat(e.palette.secondary.main),backgroundColor:Object(se.a)(e.palette.secondary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}},"&$disabled":{border:"1px solid ".concat(e.palette.action.disabled)}},contained:{color:e.palette.getContrastText(e.palette.grey[300]),backgroundColor:e.palette.grey[300],boxShadow:e.shadows[2],"&:hover":{backgroundColor:e.palette.grey.A100,boxShadow:e.shadows[4],"@media (hover: none)":{boxShadow:e.shadows[2],backgroundColor:e.palette.grey[300]},"&$disabled":{backgroundColor:e.palette.action.disabledBackground}},"&$focusVisible":{boxShadow:e.shadows[6]},"&:active":{boxShadow:e.shadows[8]},"&$disabled":{color:e.palette.action.disabled,boxShadow:e.shadows[0],backgroundColor:e.palette.action.disabledBackground}},containedPrimary:{color:e.palette.primary.contrastText,backgroundColor:e.palette.primary.main,"&:hover":{backgroundColor:e.palette.primary.dark,"@media (hover: none)":{backgroundColor:e.palette.primary.main}}},containedSecondary:{color:e.palette.secondary.contrastText,backgroundColor:e.palette.secondary.main,"&:hover":{backgroundColor:e.palette.secondary.dark,"@media (hover: none)":{backgroundColor:e.palette.secondary.main}}},disableElevation:{boxShadow:"none","&:hover":{boxShadow:"none"},"&$focusVisible":{boxShadow:"none"},"&:active":{boxShadow:"none"},"&$disabled":{boxShadow:"none"}},focusVisible:{},disabled:{},colorInherit:{color:"inherit",borderColor:"currentColor"},textSizeSmall:{padding:"4px 5px",fontSize:e.typography.pxToRem(13)},textSizeLarge:{padding:"8px 11px",fontSize:e.typography.pxToRem(15)},outlinedSizeSmall:{padding:"3px 9px",fontSize:e.typography.pxToRem(13)},outlinedSizeLarge:{padding:"7px 21px",fontSize:e.typography.pxToRem(15)},containedSizeSmall:{padding:"4px 10px",fontSize:e.typography.pxToRem(13)},containedSizeLarge:{padding:"8px 22px",fontSize:e.typography.pxToRem(15)},sizeSmall:{},sizeLarge:{},fullWidth:{width:"100%"},startIcon:{display:"inherit",marginRight:8,marginLeft:-4,"&$iconSizeSmall":{marginLeft:-2}},endIcon:{display:"inherit",marginRight:-4,marginLeft:8,"&$iconSizeSmall":{marginRight:-2}},iconSizeSmall:{"& > *:first-child":{fontSize:18}},iconSizeMedium:{"& > *:first-child":{fontSize:20}},iconSizeLarge:{"& > *:first-child":{fontSize:22}}}}),{name:"MuiButton"})(je),Pe={h1:"h1",h2:"h2",h3:"h3",h4:"h4",h5:"h5",h6:"h6",subtitle1:"h6",subtitle2:"h6",body1:"p",body2:"p"},Re=r.forwardRef((function(e,t){var n=e.align,o=void 0===n?"inherit":n,i=e.classes,a=e.className,u=e.color,s=void 0===u?"initial":u,c=e.component,f=e.display,d=void 0===f?"initial":f,p=e.gutterBottom,h=void 0!==p&&p,m=e.noWrap,y=void 0!==m&&m,g=e.paragraph,v=void 0!==g&&g,b=e.variant,x=void 0===b?"body1":b,k=e.variantMapping,w=void 0===k?Pe:k,S=Object(j.a)(e,["align","classes","className","color","component","display","gutterBottom","noWrap","paragraph","variant","variantMapping"]),E=c||(v?"p":w[x]||Pe[x])||"span";return r.createElement(E,Object(l.a)({className:Object(X.a)(i.root,a,"inherit"!==x&&i[x],"initial"!==s&&i["color".concat(Object(Ce.a)(s))],y&&i.noWrap,h&&i.gutterBottom,v&&i.paragraph,"inherit"!==o&&i["align".concat(Object(Ce.a)(o))],"initial"!==d&&i["display".concat(Object(Ce.a)(d))]),ref:t},S))})),Ne=Object(G.a)((function(e){return{root:{margin:0},body2:e.typography.body2,body1:e.typography.body1,caption:e.typography.caption,button:e.typography.button,h1:e.typography.h1,h2:e.typography.h2,h3:e.typography.h3,h4:e.typography.h4,h5:e.typography.h5,h6:e.typography.h6,subtitle1:e.typography.subtitle1,subtitle2:e.typography.subtitle2,overline:e.typography.overline,srOnly:{position:"absolute",height:1,width:1,overflow:"hidden"},alignLeft:{textAlign:"left"},alignCenter:{textAlign:"center"},alignRight:{textAlign:"right"},alignJustify:{textAlign:"justify"},noWrap:{overflow:"hidden",textOverflow:"ellipsis",whiteSpace:"nowrap"},gutterBottom:{marginBottom:"0.35em"},paragraph:{marginBottom:16},colorInherit:{color:"inherit"},colorPrimary:{color:e.palette.primary.main},colorSecondary:{color:e.palette.secondary.main},colorTextPrimary:{color:e.palette.text.primary},colorTextSecondary:{color:e.palette.text.secondary},colorError:{color:e.palette.error.main},displayInline:{display:"inline"},displayBlock:{display:"block"}}}),{name:"MuiTypography"})(Re),_e=n(17);function ze(e,t){var n={};return Object.keys(e).forEach((function(r){-1===t.indexOf(r)&&(n[r]=e[r])})),n}function Me(e){var t=function(t){var n=e(t);return t.css?Object(l.a)({},Object(_e.a)(n,e(Object(l.a)({theme:t.theme},t.css))),ze(t.css,[e.filterProps])):t.sx?Object(l.a)({},Object(_e.a)(n,e(Object(l.a)({theme:t.theme},t.sx))),ze(t.sx,[e.filterProps])):n};return t.propTypes={},t.filterProps=["css","sx"].concat(Object(de.a)(e.filterProps)),t}var Ae=Me;var Ie=function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];var r=function(e){return t.reduce((function(t,n){var r=n(e);return r?Object(_e.a)(t,r):t}),{})};return r.propTypes={},r.filterProps=t.reduce((function(e,t){return e.concat(t.filterProps)}),[]),r},De=n(13),Le=n(40);function Fe(e,t){return t&&"string"===typeof t?t.split(".").reduce((function(e,t){return e&&e[t]?e[t]:null}),e):null}var Be=function(e){var t=e.prop,n=e.cssProperty,r=void 0===n?e.prop:n,o=e.themeKey,i=e.transform,a=function(e){if(null==e[t])return null;var n=e[t],a=Fe(e.theme,o)||{};return Object(Le.a)(e,n,(function(e){var t;return"function"===typeof a?t=a(e):Array.isArray(a)?t=a[e]||e:(t=Fe(a,e)||e,i&&(t=i(t))),!1===r?t:Object(De.a)({},r,t)}))};return a.propTypes={},a.filterProps=[t],a};function We(e){return"number"!==typeof e?e:"".concat(e,"px solid")}var Ue=Ie(Be({prop:"border",themeKey:"borders",transform:We}),Be({prop:"borderTop",themeKey:"borders",transform:We}),Be({prop:"borderRight",themeKey:"borders",transform:We}),Be({prop:"borderBottom",themeKey:"borders",transform:We}),Be({prop:"borderLeft",themeKey:"borders",transform:We}),Be({prop:"borderColor",themeKey:"palette"}),Be({prop:"borderRadius",themeKey:"shape"})),Ve=Ie(Be({prop:"displayPrint",cssProperty:!1,transform:function(e){return{"@media print":{display:e}}}}),Be({prop:"display"}),Be({prop:"overflow"}),Be({prop:"textOverflow"}),Be({prop:"visibility"}),Be({prop:"whiteSpace"})),$e=Ie(Be({prop:"flexBasis"}),Be({prop:"flexDirection"}),Be({prop:"flexWrap"}),Be({prop:"justifyContent"}),Be({prop:"alignItems"}),Be({prop:"alignContent"}),Be({prop:"order"}),Be({prop:"flex"}),Be({prop:"flexGrow"}),Be({prop:"flexShrink"}),Be({prop:"alignSelf"}),Be({prop:"justifyItems"}),Be({prop:"justifySelf"})),He=Ie(Be({prop:"gridGap"}),Be({prop:"gridColumnGap"}),Be({prop:"gridRowGap"}),Be({prop:"gridColumn"}),Be({prop:"gridRow"}),Be({prop:"gridAutoFlow"}),Be({prop:"gridAutoColumns"}),Be({prop:"gridAutoRows"}),Be({prop:"gridTemplateColumns"}),Be({prop:"gridTemplateRows"}),Be({prop:"gridTemplateAreas"}),Be({prop:"gridArea"})),Ke=Ie(Be({prop:"position"}),Be({prop:"zIndex",themeKey:"zIndex"}),Be({prop:"top"}),Be({prop:"right"}),Be({prop:"bottom"}),Be({prop:"left"})),qe=Ie(Be({prop:"color",themeKey:"palette"}),Be({prop:"bgcolor",cssProperty:"backgroundColor",themeKey:"palette"})),Qe=Be({prop:"boxShadow",themeKey:"shadows"});function Ye(e){return e<=1?"".concat(100*e,"%"):e}var Xe=Be({prop:"width",transform:Ye}),Ge=Be({prop:"maxWidth",transform:Ye}),Je=Be({prop:"minWidth",transform:Ye}),Ze=Be({prop:"height",transform:Ye}),et=Be({prop:"maxHeight",transform:Ye}),tt=Be({prop:"minHeight",transform:Ye}),nt=(Be({prop:"size",cssProperty:"width",transform:Ye}),Be({prop:"size",cssProperty:"height",transform:Ye}),Ie(Xe,Ge,Je,Ze,et,tt,Be({prop:"boxSizing"}))),rt=n(117),ot=Ie(Be({prop:"fontFamily",themeKey:"typography"}),Be({prop:"fontSize",themeKey:"typography"}),Be({prop:"fontStyle",themeKey:"typography"}),Be({prop:"fontWeight",themeKey:"typography"}),Be({prop:"letterSpacing"}),Be({prop:"lineHeight"}),Be({prop:"textAlign"})),it=n(44),at=n.n(it),lt=n(116);function ut(e,t){var n={};return Object.keys(e).forEach((function(r){-1===t.indexOf(r)&&(n[r]=e[r])})),n}var st=function(e){var t=function(e){return function(t){var n,r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},i=r.name,a=Object(j.a)(r,["name"]),u=i,s="function"===typeof t?function(e){return{root:function(n){return t(Object(l.a)({theme:e},n))}}}:{root:t},c=Object(lt.a)(s,Object(l.a)({Component:e,name:i||e.displayName,classNamePrefix:u},a));t.filterProps&&(n=t.filterProps,delete t.filterProps),t.propTypes&&(t.propTypes,delete t.propTypes);var f=o.a.forwardRef((function(t,r){var i=t.children,a=t.className,u=t.clone,s=t.component,f=Object(j.a)(t,["children","className","clone","component"]),d=c(t),p=Object(X.a)(d.root,a),h=f;if(n&&(h=ut(h,n)),u)return o.a.cloneElement(i,Object(l.a)({className:Object(X.a)(i.props.className,p)},h));if("function"===typeof i)return i(Object(l.a)({className:p},h));var m=s||e;return o.a.createElement(m,Object(l.a)({ref:r,className:p},h),i)}));return at()(f,e),f}}(e);return function(e,n){return t(e,Object(l.a)({defaultTheme:U.a},n))}},ct=Ae(Ie(Ue,Ve,$e,He,Ke,qe,Qe,nt,rt.b,ot)),ft=st("div")(ct,{name:"MuiBox"}),dt=r.forwardRef((function(e,t){var n=e.edge,o=void 0!==n&&n,i=e.children,a=e.classes,u=e.className,s=e.color,c=void 0===s?"default":s,f=e.disabled,d=void 0!==f&&f,p=e.disableFocusRipple,h=void 0!==p&&p,m=e.size,y=void 0===m?"medium":m,g=Object(j.a)(e,["edge","children","classes","className","color","disabled","disableFocusRipple","size"]);return r.createElement(Oe,Object(l.a)({className:Object(X.a)(a.root,u,"default"!==c&&a["color".concat(Object(Ce.a)(c))],d&&a.disabled,"small"===y&&a["size".concat(Object(Ce.a)(y))],{start:a.edgeStart,end:a.edgeEnd}[o]),centerRipple:!0,focusRipple:!h,disabled:d,ref:t},g),r.createElement("span",{className:a.label},i))})),pt=Object(G.a)((function(e){return{root:{textAlign:"center",flex:"0 0 auto",fontSize:e.typography.pxToRem(24),padding:12,borderRadius:"50%",overflow:"visible",color:e.palette.action.active,transition:e.transitions.create("background-color",{duration:e.transitions.duration.shortest}),"&:hover":{backgroundColor:Object(se.a)(e.palette.action.active,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}},"&$disabled":{backgroundColor:"transparent",color:e.palette.action.disabled}},edgeStart:{marginLeft:-12,"$sizeSmall&":{marginLeft:-3}},edgeEnd:{marginRight:-12,"$sizeSmall&":{marginRight:-3}},colorInherit:{color:"inherit"},colorPrimary:{color:e.palette.primary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.primary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},colorSecondary:{color:e.palette.secondary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.secondary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},disabled:{},sizeSmall:{padding:3,fontSize:e.typography.pxToRem(18)},label:{width:"100%",display:"flex",alignItems:"inherit",justifyContent:"inherit"}}}),{name:"MuiIconButton"})(dt),ht=n(27),mt=(ht.domToReact,ht.htmlToDOM,ht.attributesToProps,ht.Element,ht),yt=n(45),gt=n.n(yt),vt=r.forwardRef((function(e,t){var n=e.classes,o=e.className,i=e.color,a=void 0===i?"primary":i,u=e.component,s=void 0===u?"a":u,c=e.onBlur,f=e.onFocus,d=e.TypographyClasses,p=e.underline,h=void 0===p?"hover":p,m=e.variant,y=void 0===m?"inherit":m,g=Object(j.a)(e,["classes","className","color","component","onBlur","onFocus","TypographyClasses","underline","variant"]),v=Object(fe.a)(),b=v.isFocusVisible,x=v.onBlurVisible,k=v.ref,w=r.useState(!1),S=w[0],E=w[1],O=Object(W.a)(t,k);return r.createElement(Ne,Object(l.a)({className:Object(X.a)(n.root,n["underline".concat(Object(Ce.a)(h))],o,S&&n.focusVisible,"button"===s&&n.button),classes:d,color:a,component:s,onBlur:function(e){S&&(x(),E(!1)),c&&c(e)},onFocus:function(e){b(e)&&E(!0),f&&f(e)},ref:O,variant:y},g))})),bt=Object(G.a)({root:{},underlineNone:{textDecoration:"none"},underlineHover:{textDecoration:"none","&:hover":{textDecoration:"underline"}},underlineAlways:{textDecoration:"underline"},button:{position:"relative",WebkitTapHighlightColor:"transparent",backgroundColor:"transparent",outline:0,border:0,margin:0,borderRadius:0,padding:0,cursor:"pointer",userSelect:"none",verticalAlign:"middle","-moz-appearance":"none","-webkit-appearance":"none","&::-moz-focus-inner":{borderStyle:"none"},"&$focusVisible":{outline:"auto"}},focusVisible:{}},{name:"MuiLink"})(vt),xt=n(36),kt=r.createContext();var wt=kt;var St=r.forwardRef((function(e,t){var n=e.autoFocus,o=e.checked,i=e.checkedIcon,a=e.classes,u=e.className,s=e.defaultChecked,c=e.disabled,f=e.icon,d=e.id,p=e.inputProps,h=e.inputRef,m=e.name,y=e.onBlur,g=e.onChange,v=e.onFocus,b=e.readOnly,x=e.required,k=e.tabIndex,w=e.type,S=e.value,E=Object(j.a)(e,["autoFocus","checked","checkedIcon","classes","className","defaultChecked","disabled","icon","id","inputProps","inputRef","name","onBlur","onChange","onFocus","readOnly","required","tabIndex","type","value"]),O=Object(xt.a)({controlled:o,default:Boolean(s),name:"SwitchBase",state:"checked"}),C=Object(ee.a)(O,2),T=C[0],P=C[1],R=r.useContext(wt),N=c;R&&"undefined"===typeof N&&(N=R.disabled);var _="checkbox"===w||"radio"===w;return r.createElement(pt,Object(l.a)({component:"span",className:Object(X.a)(a.root,u,T&&a.checked,N&&a.disabled),disabled:N,tabIndex:null,role:void 0,onFocus:function(e){v&&v(e),R&&R.onFocus&&R.onFocus(e)},onBlur:function(e){y&&y(e),R&&R.onBlur&&R.onBlur(e)},ref:t},E),r.createElement("input",Object(l.a)({autoFocus:n,checked:o,defaultChecked:s,className:a.input,disabled:N,id:_&&d,name:m,onChange:function(e){var t=e.target.checked;P(t),g&&g(e,t)},readOnly:b,ref:h,required:x,tabIndex:k,type:w,value:S},p)),T?i:f)})),Et=Object(G.a)({root:{padding:9},checked:{},disabled:{},input:{cursor:"inherit",position:"absolute",opacity:0,width:"100%",height:"100%",top:0,left:0,margin:0,padding:0,zIndex:1}},{name:"PrivateSwitchBase"})(St),Ot=r.forwardRef((function(e,t){var n=e.classes,o=e.className,i=e.color,a=void 0===i?"secondary":i,u=e.edge,s=void 0!==u&&u,c=e.size,f=void 0===c?"medium":c,d=Object(j.a)(e,["classes","className","color","edge","size"]),p=r.createElement("span",{className:n.thumb});return r.createElement("span",{className:Object(X.a)(n.root,o,{start:n.edgeStart,end:n.edgeEnd}[s],"small"===f&&n["size".concat(Object(Ce.a)(f))])},r.createElement(Et,Object(l.a)({type:"checkbox",icon:p,checkedIcon:p,classes:{root:Object(X.a)(n.switchBase,n["color".concat(Object(Ce.a)(a))]),input:n.input,checked:n.checked,disabled:n.disabled},ref:t},d)),r.createElement("span",{className:n.track}))})),Ct=Object(G.a)((function(e){return{root:{display:"inline-flex",width:58,height:38,overflow:"hidden",padding:12,boxSizing:"border-box",position:"relative",flexShrink:0,zIndex:0,verticalAlign:"middle","@media print":{colorAdjust:"exact"}},edgeStart:{marginLeft:-8},edgeEnd:{marginRight:-8},switchBase:{position:"absolute",top:0,left:0,zIndex:1,color:"light"===e.palette.type?e.palette.grey[50]:e.palette.grey[400],transition:e.transitions.create(["left","transform"],{duration:e.transitions.duration.shortest}),"&$checked":{transform:"translateX(20px)"},"&$disabled":{color:"light"===e.palette.type?e.palette.grey[400]:e.palette.grey[800]},"&$checked + $track":{opacity:.5},"&$disabled + $track":{opacity:"light"===e.palette.type?.12:.1}},colorPrimary:{"&$checked":{color:e.palette.primary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.primary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},"&$disabled":{color:"light"===e.palette.type?e.palette.grey[400]:e.palette.grey[800]},"&$checked + $track":{backgroundColor:e.palette.primary.main},"&$disabled + $track":{backgroundColor:"light"===e.palette.type?e.palette.common.black:e.palette.common.white}},colorSecondary:{"&$checked":{color:e.palette.secondary.main,"&:hover":{backgroundColor:Object(se.a)(e.palette.secondary.main,e.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:"transparent"}}},"&$disabled":{color:"light"===e.palette.type?e.palette.grey[400]:e.palette.grey[800]},"&$checked + $track":{backgroundColor:e.palette.secondary.main},"&$disabled + $track":{backgroundColor:"light"===e.palette.type?e.palette.common.black:e.palette.common.white}},sizeSmall:{width:40,height:24,padding:7,"& $thumb":{width:16,height:16},"& $switchBase":{padding:4,"&$checked":{transform:"translateX(16px)"}}},checked:{},disabled:{},input:{left:"-100%",width:"300%"},thumb:{boxShadow:e.shadows[1],backgroundColor:"currentColor",width:20,height:20,borderRadius:"50%"},track:{height:"100%",width:"100%",borderRadius:7,zIndex:-1,transition:e.transitions.create(["opacity","background-color"],{duration:e.transitions.duration.shortest}),backgroundColor:"light"===e.palette.type?e.palette.common.black:e.palette.common.white,opacity:"light"===e.palette.type?.38:.3}}}),{name:"MuiSwitch"})(Ot);var jt=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(lt.a)(e,Object(l.a)({defaultTheme:U.a},t))};var Tt=jt((function(e){return{root:{margin:e.spacing(2,0,3,0)},header:{display:"flex"},header_label:{flex:1},btnMore:{margin:e.spacing(1,0,0,0)}}}),{name:"MuiCookieRuleItem"}),Pt=n(2),Rt=function(e){var t=e.item,n=e.localization,o=e.onChange,i=Tt(),a=x(Object(r.useState)(!1),2),l=a[0],u=a[1];return Object(Pt.jsxs)(ft,{className:i.root,children:[Object(Pt.jsxs)(ft,{className:i.header,display:"flex",alignItems:"center",children:[Object(Pt.jsx)(Ne,{variant:"h4",classes:{root:i.header_label},children:t.label}),Object(Pt.jsx)(Ct,{checked:t.checked,name:t.code,onChange:o,disabled:t.disabled})]}),Object(Pt.jsx)(ft,{children:Object(Pt.jsx)(Ne,{variant:"body2",children:t.summary})}),t.description&&Object(Pt.jsxs)(ft,{children:[Object(Pt.jsx)(ne,{in:l,children:Object(Pt.jsx)(Ne,{variant:"body2",component:"div",children:mt(t.description)})}),Object(Pt.jsx)(ft,{className:i.btnMore,children:Object(Pt.jsx)(Ne,{variant:"body2",component:"div",children:Object(Pt.jsx)(bt,{href:"#",onClick:function(){return u(!l)},children:l?n.btnLess:n.btnMore})})})]})]},t.code)},Nt=jt((function(e){return{root:d({width:500,position:"fixed",top:function(e){return e.maximalized?0:"auto"},right:0,bottom:0,zIndex:e.zIndex.drawer,background:e.palette.background.paper},e.breakpoints.down("xs"),{width:"100vw"}),paper:{width:"100%",position:"absolute",top:function(e){return e.maximalized?0:"auto"},bottom:0,display:"flex",flexDirection:"column",background:e.palette.background.default,overflowY:"auto",paddingBottom:e.spacing(2)},btnClose:{position:"absolute",top:0,right:0},body:{height:"100%",display:"flex",flexDirection:"column"},header:{padding:e.spacing(6,3,2,3)},buttonsArea:{display:"flex",justifyContent:"flex-end",padding:e.spacing(2,3)},content:{flex:1,padding:e.spacing(3,3,0,3),borderTop:"1px solid ".concat(e.palette.divider)},btnSetAll:{"& .MuiButton-label":{display:"block"},"& small":{display:"block",fontWeight:300,fontSize:e.typography.body2.fontSize,opacity:.8}}}}),{name:"MuiCookieConsentDisplayInSidebar"}),_t=function(e){var t=e.heading,n=e.description,r=Nt({});return t||n?Object(Pt.jsxs)(ft,{className:r.header,children:[t&&Object(Pt.jsx)(Ne,{variant:"h2",children:t}),n&&"string"===typeof n&&Object(Pt.jsx)(Ne,{variant:"body2",component:"div",children:mt(n)})]}):null},zt=function(e){var t=Nt({open:e.open});return Object(Pt.jsx)(r.Fragment,{children:Object(Pt.jsx)(ft,{className:t.buttonsArea,children:Object(Pt.jsxs)(ue,{container:!0,spacing:2,children:[!e.maximalize&&Object(Pt.jsx)(ue,{item:!0,xs:12,sm:6,children:Object(Pt.jsx)(Te,{color:"primary",variant:"outlined",fullWidth:!0,onClick:function(){e.onMaximalizeClick&&e.onMaximalizeClick(!0)},children:e.localization.btnCustomChoices})}),Object(Pt.jsx)(ue,{item:!0,xs:12,sm:e.maximalize?12:6,children:Object(Pt.jsx)(Te,{color:"primary",variant:"contained",fullWidth:!0,onClick:function(){return e.onSubmit(!0)},className:t.btnSetAll,children:mt(e.localization.btnSetAll)})})]})})})},Mt=n(61),At=n.n(Mt),It=function(e){var t=Nt({open:e.open});return Object(Pt.jsxs)(r.Fragment,{children:[Object(Pt.jsx)(ft,{className:t.buttonsArea,children:Object(Pt.jsxs)(ue,{container:!0,spacing:2,children:[Object(Pt.jsx)(ue,{item:!0,xs:12,sm:6,children:Object(Pt.jsx)(Te,{color:"primary",variant:"outlined",fullWidth:!0,onClick:function(){return e.onSubmit(!1)},children:mt(e.localization.btnReject)})}),Object(Pt.jsx)(ue,{item:!0,xs:12,sm:6,children:Object(Pt.jsx)(Te,{color:"primary",variant:"contained",fullWidth:!0,onClick:function(){return e.onSubmit(!0)},className:t.btnSetAll,children:mt(e.localization.btnSetAll)})})]})}),!e.maximalize&&Object(Pt.jsx)(ft,{display:"flex",justifyContent:"center",children:Object(Pt.jsx)(Te,{endIcon:Object(Pt.jsx)(At.a,{}),onClick:function(){e.onMaximalizeClick&&e.onMaximalizeClick(!0)},children:e.localization.btnCustomChoices})})]})},Dt=function(e){var t,n,o=x(Object(r.useState)(null!==(t=null===(n=e.options)||void 0===n?void 0:n.maximalize)&&void 0!==t&&t),2),i=o[0],a=o[1],l=Nt({open:e.open,maximalized:i}),u=h(h({},{btnRejectInvisible:!1}),e.options);return Object(Pt.jsx)(Y,{in:e.open,direction:"left",onExited:e.afterOnClosed,children:Object(Pt.jsx)(ft,{className:l.root,children:Object(Pt.jsxs)(Z,{className:l.paper,children:[e.isExistCookieConsent&&Object(Pt.jsx)(ft,{className:l.btnClose,children:Object(Pt.jsx)(pt,{onClick:e.onClose,"aria-label":"Zav\u0159\xedt",children:Object(Pt.jsx)(gt.a,{})})}),Object(Pt.jsxs)(ft,{className:l.body,children:[Object(Pt.jsx)(_t,{heading:e.localization.heading,description:e.localization.description}),!0===u.btnRejectInvisible?Object(Pt.jsx)(zt,h({maximalize:i,onMaximalizeClick:function(){return a(!0)}},e)):Object(Pt.jsx)(It,h({maximalize:i,onMaximalizeClick:function(){return a(!0)}},e)),Object(Pt.jsxs)(ne,{in:i,children:[Object(Pt.jsxs)(ft,{className:l.content,children:[Object(Pt.jsx)(Ne,{variant:"h3",children:e.localization.headingContent}),e.cookieRules.map((function(t,n){return Object(Pt.jsx)(Rt,{item:t,localization:e.localization,onChange:e.onCookieRuleChange},"cookieRuleItem_".concat(n))}))]}),Object(Pt.jsx)(ft,{className:l.buttonsArea,children:Object(Pt.jsxs)(ue,{container:!0,spacing:2,children:[!0===u.btnRejectInvisible&&Object(Pt.jsx)(ue,{item:!0,xs:12,sm:6,children:Object(Pt.jsx)(Te,{color:"primary",variant:"outlined",fullWidth:!0,onClick:function(){return e.onSubmit(!1)},children:mt(e.localization.btnReject)})}),Object(Pt.jsx)(ue,{item:!0,xs:12,sm:!0===u.btnRejectInvisible?6:12,children:Object(Pt.jsx)(Te,{color:"primary",variant:"contained",fullWidth:!0,onClick:function(){return e.onSubmit()},children:e.localization.btnSetCustom})})]})})]})]})]})})})},Lt=n(115),Ft=n(15),Bt=n(21);var Wt="undefined"!==typeof window?r.useLayoutEffect:r.useEffect;var Ut=r.forwardRef((function(e,t){var n=e.children,o=e.container,a=e.disablePortal,l=void 0!==a&&a,u=e.onRendered,s=r.useState(null),c=s[0],f=s[1],d=Object(W.a)(r.isValidElement(n)?n.ref:null,t);return Wt((function(){l||f(function(e){return e="function"===typeof e?e():e,i.findDOMNode(e)}(o)||document.body)}),[o,l]),Wt((function(){if(c&&!l)return Object(Bt.a)(t,c),function(){Object(Bt.a)(t,null)}}),[t,c,l]),Wt((function(){u&&(c||l)&&u()}),[u,c,l]),l?r.isValidElement(n)?r.cloneElement(n,{ref:d}):n:c?i.createPortal(n,c):c})),Vt=n(32),$t=n(41);var Ht=n(25);var Kt=n(38);function qt(e,t){t?e.setAttribute("aria-hidden","true"):e.removeAttribute("aria-hidden")}function Qt(e){return parseInt(window.getComputedStyle(e)["padding-right"],10)||0}function Yt(e,t,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:[],o=arguments.length>4?arguments[4]:void 0,i=[t,n].concat(Object(de.a)(r)),a=["TEMPLATE","SCRIPT","STYLE"];[].forEach.call(e.children,(function(e){1===e.nodeType&&-1===i.indexOf(e)&&-1===a.indexOf(e.tagName)&&qt(e,o)}))}function Xt(e,t){var n=-1;return e.some((function(e,r){return!!t(e)&&(n=r,!0)})),n}function Gt(e,t){var n,r=[],o=[],i=e.container;if(!t.disableScrollLock){if(function(e){var t=Object(Ft.a)(e);return t.body===e?Object(Kt.a)(t).innerWidth>t.documentElement.clientWidth:e.scrollHeight>e.clientHeight}(i)){var a=function(){var e=document.createElement("div");e.style.width="99px",e.style.height="99px",e.style.position="absolute",e.style.top="-9999px",e.style.overflow="scroll",document.body.appendChild(e);var t=e.offsetWidth-e.clientWidth;return document.body.removeChild(e),t}();r.push({value:i.style.paddingRight,key:"padding-right",el:i}),i.style["padding-right"]="".concat(Qt(i)+a,"px"),n=Object(Ft.a)(i).querySelectorAll(".mui-fixed"),[].forEach.call(n,(function(e){o.push(e.style.paddingRight),e.style.paddingRight="".concat(Qt(e)+a,"px")}))}var l=i.parentElement,u="HTML"===l.nodeName&&"scroll"===window.getComputedStyle(l)["overflow-y"]?l:i;r.push({value:u.style.overflow,key:"overflow",el:u}),u.style.overflow="hidden"}return function(){n&&[].forEach.call(n,(function(e,t){o[t]?e.style.paddingRight=o[t]:e.style.removeProperty("padding-right")})),r.forEach((function(e){var t=e.value,n=e.el,r=e.key;t?n.style.setProperty(r,t):n.style.removeProperty(r)}))}}var Jt=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.modals=[],this.containers=[]}return Object(Ht.a)(e,[{key:"add",value:function(e,t){var n=this.modals.indexOf(e);if(-1!==n)return n;n=this.modals.length,this.modals.push(e),e.modalRef&&qt(e.modalRef,!1);var r=function(e){var t=[];return[].forEach.call(e.children,(function(e){e.getAttribute&&"true"===e.getAttribute("aria-hidden")&&t.push(e)})),t}(t);Yt(t,e.mountNode,e.modalRef,r,!0);var o=Xt(this.containers,(function(e){return e.container===t}));return-1!==o?(this.containers[o].modals.push(e),n):(this.containers.push({modals:[e],container:t,restore:null,hiddenSiblingNodes:r}),n)}},{key:"mount",value:function(e,t){var n=Xt(this.containers,(function(t){return-1!==t.modals.indexOf(e)})),r=this.containers[n];r.restore||(r.restore=Gt(r,t))}},{key:"remove",value:function(e){var t=this.modals.indexOf(e);if(-1===t)return t;var n=Xt(this.containers,(function(t){return-1!==t.modals.indexOf(e)})),r=this.containers[n];if(r.modals.splice(r.modals.indexOf(e),1),this.modals.splice(t,1),0===r.modals.length)r.restore&&r.restore(),e.modalRef&&qt(e.modalRef,!0),Yt(r.container,e.mountNode,e.modalRef,r.hiddenSiblingNodes,!1),this.containers.splice(n,1);else{var o=r.modals[r.modals.length-1];o.modalRef&&qt(o.modalRef,!1)}return t}},{key:"isTopModal",value:function(e){return this.modals.length>0&&this.modals[this.modals.length-1]===e}}]),e}();var Zt=function(e){var t=e.children,n=e.disableAutoFocus,o=void 0!==n&&n,a=e.disableEnforceFocus,l=void 0!==a&&a,u=e.disableRestoreFocus,s=void 0!==u&&u,c=e.getDoc,f=e.isEnabled,d=e.open,p=r.useRef(),h=r.useRef(null),m=r.useRef(null),y=r.useRef(),g=r.useRef(null),v=r.useCallback((function(e){g.current=i.findDOMNode(e)}),[]),b=Object(W.a)(t.ref,v),x=r.useRef();return r.useEffect((function(){x.current=d}),[d]),!x.current&&d&&"undefined"!==typeof window&&(y.current=c().activeElement),r.useEffect((function(){if(d){var e=Object(Ft.a)(g.current);o||!g.current||g.current.contains(e.activeElement)||(g.current.hasAttribute("tabIndex")||g.current.setAttribute("tabIndex",-1),g.current.focus());var t=function(){null!==g.current&&(e.hasFocus()&&!l&&f()&&!p.current?g.current&&!g.current.contains(e.activeElement)&&g.current.focus():p.current=!1)},n=function(t){!l&&f()&&9===t.keyCode&&e.activeElement===g.current&&(p.current=!0,t.shiftKey?m.current.focus():h.current.focus())};e.addEventListener("focus",t,!0),e.addEventListener("keydown",n,!0);var r=setInterval((function(){t()}),50);return function(){clearInterval(r),e.removeEventListener("focus",t,!0),e.removeEventListener("keydown",n,!0),s||(y.current&&y.current.focus&&y.current.focus(),y.current=null)}}}),[o,l,s,f,d]),r.createElement(r.Fragment,null,r.createElement("div",{tabIndex:0,ref:h,"data-test":"sentinelStart"}),r.cloneElement(t,{ref:b}),r.createElement("div",{tabIndex:0,ref:m,"data-test":"sentinelEnd"}))},en={root:{zIndex:-1,position:"fixed",right:0,bottom:0,top:0,left:0,backgroundColor:"rgba(0, 0, 0, 0.5)",WebkitTapHighlightColor:"transparent"},invisible:{backgroundColor:"transparent"}},tn=r.forwardRef((function(e,t){var n=e.invisible,o=void 0!==n&&n,i=e.open,a=Object(j.a)(e,["invisible","open"]);return i?r.createElement("div",Object(l.a)({"aria-hidden":!0,ref:t},a,{style:Object(l.a)({},en.root,o?en.invisible:{},a.style)})):null}));var nn=new Jt,rn=r.forwardRef((function(e,t){var n=Object(s.a)(),o=Object(Lt.a)({name:"MuiModal",props:Object(l.a)({},e),theme:n}),a=o.BackdropComponent,u=void 0===a?tn:a,c=o.BackdropProps,f=o.children,d=o.closeAfterTransition,p=void 0!==d&&d,h=o.container,m=o.disableAutoFocus,y=void 0!==m&&m,g=o.disableBackdropClick,v=void 0!==g&&g,b=o.disableEnforceFocus,x=void 0!==b&&b,k=o.disableEscapeKeyDown,w=void 0!==k&&k,S=o.disablePortal,E=void 0!==S&&S,O=o.disableRestoreFocus,C=void 0!==O&&O,T=o.disableScrollLock,P=void 0!==T&&T,R=o.hideBackdrop,N=void 0!==R&&R,_=o.keepMounted,z=void 0!==_&&_,M=o.manager,A=void 0===M?nn:M,I=o.onBackdropClick,D=o.onClose,L=o.onEscapeKeyDown,F=o.onRendered,B=o.open,U=Object(j.a)(o,["BackdropComponent","BackdropProps","children","closeAfterTransition","container","disableAutoFocus","disableBackdropClick","disableEnforceFocus","disableEscapeKeyDown","disablePortal","disableRestoreFocus","disableScrollLock","hideBackdrop","keepMounted","manager","onBackdropClick","onClose","onEscapeKeyDown","onRendered","open"]),V=r.useState(!0),$=V[0],H=V[1],K=r.useRef({}),q=r.useRef(null),Q=r.useRef(null),Y=Object(W.a)(Q,t),X=function(e){return!!e.children&&e.children.props.hasOwnProperty("in")}(o),G=function(){return Object(Ft.a)(q.current)},J=function(){return K.current.modalRef=Q.current,K.current.mountNode=q.current,K.current},Z=function(){A.mount(J(),{disableScrollLock:P}),Q.current.scrollTop=0},ee=Object(ce.a)((function(){var e=function(e){return e="function"===typeof e?e():e,i.findDOMNode(e)}(h)||G().body;A.add(J(),e),Q.current&&Z()})),te=r.useCallback((function(){return A.isTopModal(J())}),[A]),ne=Object(ce.a)((function(e){q.current=e,e&&(F&&F(),B&&te()?Z():qt(Q.current,!0))})),re=r.useCallback((function(){A.remove(J())}),[A]);if(r.useEffect((function(){return function(){re()}}),[re]),r.useEffect((function(){B?ee():X&&p||re()}),[B,re,X,p,ee]),!z&&!B&&(!X||$))return null;var oe=function(e){return{root:{position:"fixed",zIndex:e.zIndex.modal,right:0,bottom:0,top:0,left:0},hidden:{visibility:"hidden"}}}(n||{zIndex:$t.a}),ie={};return void 0===f.props.tabIndex&&(ie.tabIndex=f.props.tabIndex||"-1"),X&&(ie.onEnter=Object(Vt.a)((function(){H(!1)}),f.props.onEnter),ie.onExited=Object(Vt.a)((function(){H(!0),p&&re()}),f.props.onExited)),r.createElement(Ut,{ref:ne,container:h,disablePortal:E},r.createElement("div",Object(l.a)({ref:Y,onKeyDown:function(e){"Escape"===e.key&&te()&&(L&&L(e),w||(e.stopPropagation(),D&&D(e,"escapeKeyDown")))},role:"presentation"},U,{style:Object(l.a)({},oe.root,!B&&$?oe.hidden:{},U.style)}),N?null:r.createElement(u,Object(l.a)({open:B,onClick:function(e){e.target===e.currentTarget&&(I&&I(e),!v&&D&&D(e,"backdropClick"))}},c)),r.createElement(Zt,{disableEnforceFocus:x,disableAutoFocus:y,disableRestoreFocus:C,getDoc:G,isEnabled:te,open:B},r.cloneElement(f,ie))))})),on={entering:{opacity:1},entered:{opacity:1}},an={enter:$.b.enteringScreen,exit:$.b.leavingScreen},ln=r.forwardRef((function(e,t){var n=e.children,o=e.disableStrictModeCompat,i=void 0!==o&&o,a=e.in,u=e.onEnter,s=e.onEntered,c=e.onEntering,f=e.onExit,d=e.onExited,p=e.onExiting,h=e.style,m=e.TransitionComponent,y=void 0===m?B:m,g=e.timeout,v=void 0===g?an:g,b=Object(j.a)(e,["children","disableStrictModeCompat","in","onEnter","onEntered","onEntering","onExit","onExited","onExiting","style","TransitionComponent","timeout"]),x=V(),k=x.unstable_strictMode&&!i,w=r.useRef(null),S=Object(W.a)(n.ref,t),E=Object(W.a)(k?w:void 0,S),O=function(e){return function(t,n){if(e){var r=k?[w.current,t]:[t,n],o=Object(ee.a)(r,2),i=o[0],a=o[1];void 0===a?e(i):e(i,a)}}},C=O(c),T=O((function(e,t){H(e);var n=K({style:h,timeout:v},{mode:"enter"});e.style.webkitTransition=x.transitions.create("opacity",n),e.style.transition=x.transitions.create("opacity",n),u&&u(e,t)})),P=O(s),R=O(p),N=O((function(e){var t=K({style:h,timeout:v},{mode:"exit"});e.style.webkitTransition=x.transitions.create("opacity",t),e.style.transition=x.transitions.create("opacity",t),f&&f(e)})),_=O(d);return r.createElement(y,Object(l.a)({appear:!0,in:a,nodeRef:k?w:void 0,onEnter:T,onEntered:P,onEntering:C,onExit:N,onExited:_,onExiting:R,timeout:v},b),(function(e,t){return r.cloneElement(n,Object(l.a)({style:Object(l.a)({opacity:0,visibility:"exited"!==e||a?void 0:"hidden"},on[e],h,n.props.style),ref:E},t))}))})),un=r.forwardRef((function(e,t){var n=e.children,o=e.classes,i=e.className,a=e.invisible,u=void 0!==a&&a,s=e.open,c=e.transitionDuration,f=e.TransitionComponent,d=void 0===f?ln:f,p=Object(j.a)(e,["children","classes","className","invisible","open","transitionDuration","TransitionComponent"]);return r.createElement(d,Object(l.a)({in:s,timeout:c},p),r.createElement("div",{className:Object(X.a)(o.root,i,u&&o.invisible),"aria-hidden":!0,ref:t},n))})),sn=Object(G.a)({root:{zIndex:-1,position:"fixed",display:"flex",alignItems:"center",justifyContent:"center",right:0,bottom:0,top:0,left:0,backgroundColor:"rgba(0, 0, 0, 0.5)",WebkitTapHighlightColor:"transparent"},invisible:{backgroundColor:"transparent"}},{name:"MuiBackdrop"})(un),cn={enter:$.b.enteringScreen,exit:$.b.leavingScreen},fn=r.forwardRef((function(e,t){var n=e.BackdropProps,o=e.children,i=e.classes,a=e.className,u=e.disableBackdropClick,s=void 0!==u&&u,c=e.disableEscapeKeyDown,f=void 0!==c&&c,d=e.fullScreen,p=void 0!==d&&d,h=e.fullWidth,m=void 0!==h&&h,y=e.maxWidth,g=void 0===y?"sm":y,v=e.onBackdropClick,b=e.onClose,x=e.onEnter,k=e.onEntered,w=e.onEntering,S=e.onEscapeKeyDown,E=e.onExit,O=e.onExited,C=e.onExiting,T=e.open,P=e.PaperComponent,R=void 0===P?Z:P,N=e.PaperProps,_=void 0===N?{}:N,z=e.scroll,M=void 0===z?"paper":z,A=e.TransitionComponent,I=void 0===A?ln:A,D=e.transitionDuration,L=void 0===D?cn:D,F=e.TransitionProps,B=e["aria-describedby"],W=e["aria-labelledby"],U=Object(j.a)(e,["BackdropProps","children","classes","className","disableBackdropClick","disableEscapeKeyDown","fullScreen","fullWidth","maxWidth","onBackdropClick","onClose","onEnter","onEntered","onEntering","onEscapeKeyDown","onExit","onExited","onExiting","open","PaperComponent","PaperProps","scroll","TransitionComponent","transitionDuration","TransitionProps","aria-describedby","aria-labelledby"]),V=r.useRef();return r.createElement(rn,Object(l.a)({className:Object(X.a)(i.root,a),BackdropComponent:sn,BackdropProps:Object(l.a)({transitionDuration:L},n),closeAfterTransition:!0},s?{disableBackdropClick:s}:{},{disableEscapeKeyDown:f,onEscapeKeyDown:S,onClose:b,open:T,ref:t},U),r.createElement(I,Object(l.a)({appear:!0,in:T,timeout:L,onEnter:x,onEntering:w,onEntered:k,onExit:E,onExiting:C,onExited:O,role:"none presentation"},F),r.createElement("div",{className:Object(X.a)(i.container,i["scroll".concat(Object(Ce.a)(M))]),onMouseUp:function(e){e.target===e.currentTarget&&e.target===V.current&&(V.current=null,v&&v(e),!s&&b&&b(e,"backdropClick"))},onMouseDown:function(e){V.current=e.target}},r.createElement(R,Object(l.a)({elevation:24,role:"dialog","aria-describedby":B,"aria-labelledby":W},_,{className:Object(X.a)(i.paper,i["paperScroll".concat(Object(Ce.a)(M))],i["paperWidth".concat(Object(Ce.a)(String(g)))],_.className,p&&i.paperFullScreen,m&&i.paperFullWidth)}),o))))})),dn=Object(G.a)((function(e){return{root:{"@media print":{position:"absolute !important"}},scrollPaper:{display:"flex",justifyContent:"center",alignItems:"center"},scrollBody:{overflowY:"auto",overflowX:"hidden",textAlign:"center","&:after":{content:'""',display:"inline-block",verticalAlign:"middle",height:"100%",width:"0"}},container:{height:"100%","@media print":{height:"auto"},outline:0},paper:{margin:32,position:"relative",overflowY:"auto","@media print":{overflowY:"visible",boxShadow:"none"}},paperScrollPaper:{display:"flex",flexDirection:"column",maxHeight:"calc(100% - 64px)"},paperScrollBody:{display:"inline-block",verticalAlign:"middle",textAlign:"left"},paperWidthFalse:{maxWidth:"calc(100% - 64px)"},paperWidthXs:{maxWidth:Math.max(e.breakpoints.values.xs,444),"&$paperScrollBody":Object(De.a)({},e.breakpoints.down(Math.max(e.breakpoints.values.xs,444)+64),{maxWidth:"calc(100% - 64px)"})},paperWidthSm:{maxWidth:e.breakpoints.values.sm,"&$paperScrollBody":Object(De.a)({},e.breakpoints.down(e.breakpoints.values.sm+64),{maxWidth:"calc(100% - 64px)"})},paperWidthMd:{maxWidth:e.breakpoints.values.md,"&$paperScrollBody":Object(De.a)({},e.breakpoints.down(e.breakpoints.values.md+64),{maxWidth:"calc(100% - 64px)"})},paperWidthLg:{maxWidth:e.breakpoints.values.lg,"&$paperScrollBody":Object(De.a)({},e.breakpoints.down(e.breakpoints.values.lg+64),{maxWidth:"calc(100% - 64px)"})},paperWidthXl:{maxWidth:e.breakpoints.values.xl,"&$paperScrollBody":Object(De.a)({},e.breakpoints.down(e.breakpoints.values.xl+64),{maxWidth:"calc(100% - 64px)"})},paperFullWidth:{width:"calc(100% - 64px)"},paperFullScreen:{margin:0,width:"100%",maxWidth:"100%",height:"100%",maxHeight:"none",borderRadius:0,"&$paperScrollBody":{margin:0,maxWidth:"100%"}}}}),{name:"MuiDialog"})(fn),pn=r.forwardRef((function(e,t){var n=e.disableSpacing,o=void 0!==n&&n,i=e.classes,a=e.className,u=Object(j.a)(e,["disableSpacing","classes","className"]);return r.createElement("div",Object(l.a)({className:Object(X.a)(i.root,a,!o&&i.spacing),ref:t},u))})),hn=Object(G.a)({root:{display:"flex",alignItems:"center",padding:8,justifyContent:"flex-end",flex:"0 0 auto"},spacing:{"& > :not(:first-child)":{marginLeft:8}}},{name:"MuiDialogActions"})(pn),mn=r.forwardRef((function(e,t){var n=e.classes,o=e.className,i=e.dividers,a=void 0!==i&&i,u=Object(j.a)(e,["classes","className","dividers"]);return r.createElement("div",Object(l.a)({className:Object(X.a)(n.root,o,a&&n.dividers),ref:t},u))})),yn=Object(G.a)((function(e){return{root:{flex:"1 1 auto",WebkitOverflowScrolling:"touch",overflowY:"auto",padding:"8px 24px","&:first-child":{paddingTop:20}},dividers:{padding:"16px 24px",borderTop:"1px solid ".concat(e.palette.divider),borderBottom:"1px solid ".concat(e.palette.divider)}}}),{name:"MuiDialogContent"})(mn),gn=r.forwardRef((function(e,t){var n=e.children,o=e.classes,i=e.className,a=e.disableTypography,u=void 0!==a&&a,s=Object(j.a)(e,["children","classes","className","disableTypography"]);return r.createElement("div",Object(l.a)({className:Object(X.a)(o.root,i),ref:t},s),u?n:r.createElement(Ne,{component:"h2",variant:"h6"},n))})),vn=Object(G.a)({root:{margin:0,padding:"16px 24px",flex:"0 0 auto"}},{name:"MuiDialogTitle"})(gn),bn=jt((function(e){return{btnClose:{alignSelf:"end"},header:{display:"flex",flexDirection:"column",alignItems:"center"},content:{height:300,display:"flex",flexDirection:"column"},contentIn:{flex:"1 1 auto",overflowY:"auto",padding:e.spacing(1,3),border:"1px solid ".concat(e.palette.divider)},footer:{display:"flex",flexDirection:"column",alignItems:"center",padding:e.spacing(3,3)},btnSetAll:{margin:e.spacing(2,0),textTransform:"inherit",fontSize:e.typography.pxToRem(24),fontWeight:700,borderRadius:2*e.shape.borderRadius,"& .MuiButton-label":{display:"block"},"& small":{display:"block",fontWeight:300,fontSize:e.typography.body2.fontSize,opacity:.8}},btnSetCustom:{margin:e.spacing(2,0),textTransform:"inherit"}}}),{name:"MuiCookieConsentDisplayInDialog"}),xn=function(e){var t=bn({open:e.open});return Object(Pt.jsxs)(dn,{open:e.open,TransitionProps:{onExited:e.afterOnClosed},hideBackdrop:!0,children:[Object(Pt.jsxs)(vn,{disableTypography:!0,className:t.header,children:[Object(Pt.jsx)(pt,{onClick:e.onClose,"aria-label":e.localization.btnClose,className:t.btnClose,children:Object(Pt.jsx)(gt.a,{})}),e.localization.heading&&Object(Pt.jsx)(Ne,{variant:"h1",color:"primary",children:e.localization.heading})]}),Object(Pt.jsx)(yn,{className:t.content,children:Object(Pt.jsxs)(ft,{className:t.contentIn,children:[e.localization.description&&"string"===typeof e.localization.description&&Object(Pt.jsx)(Ne,{variant:"body2",component:"div",children:mt(e.localization.description)}),e.cookieRules.map((function(t,n){return Object(Pt.jsx)(Rt,{item:t,localization:e.localization,onChange:e.onCookieRuleChange},"cookieRuleItem_".concat(n))}))]})}),Object(Pt.jsxs)(hn,{disableSpacing:!0,className:t.footer,children:[Object(Pt.jsx)(Te,{color:"primary",variant:"contained",size:"large",onClick:function(){return e.onSubmit(!0)},className:t.btnSetAll,children:mt(e.localization.btnSetAll)}),Object(Pt.jsx)(Te,{color:"default",variant:"contained",size:"small",onClick:function(){return e.onSubmit()},className:t.btnSetCustom,children:e.localization.btnSetCustom})]})]})};function kn(){var e=new O;return{cookiesConsent:e.get("cookiesConsent"),cookiesConsentDate:e.get("cookiesConsentDate")}}function wn(e){var t=function(e){var t=(new O).get("cookiesConsent");if(t)return function(e,t){for(var n=e+"";n.length<t;)n="0"+n;return n}(parseInt(parseInt(t).toString(2)),e).split("").map(Number).reverse()}(e.length);return e.map((function(e,n){var r,o=null!==(r=e.checked)&&void 0!==r&&r;if(t){var i=t[n];i&&(o=Boolean(i))}return h(h({},e),{},{checked:o})}))}function Sn(e,t,n){return n?e.map((function(e){return e.code!==n||(e.checked=t),e})):e.map((function(e){return e.disabled||(e.checked=t),e}))}var En=o.a.forwardRef((function(e,t){var n=e.initialConfig,o=x(Object(r.useState)(!1),2),i=o[0],a=o[1],l=x(Object(r.useState)(wn(n.cookieRules)),2),u=l[0],s=l[1],c=function(e){return h(h({},{heading:"Nastaven\xed cookies",headingContent:"Vlastn\xed nastaven\xed souhlas\u016f",description:"",btnSetAll:"Povolit v\u0161echny cookies",btnSetCustom:"Povolit jen vybran\xe9",btnReject:"Odm\xedtnout",btnCustomChoices:"Vlastn\xed nastaven\xed",btnMore:"V\xedce...",btnLess:"M\xe9n\u011b...",btnClose:"Zav\u0159\xedt"}),e)}(n.localization),f=Object(r.useCallback)((function(){s((function(e){return e.map((function(e){var t=n.cookieRules.filter((function(t){return t.code===e.code}))[0];return e.checked=t.checked||!1,e}))}))}),[]),d=Object(r.useCallback)((function(e,t){s((function(n){return Sn(n,t,e.target.name)}))}),[]),p=Object(r.useCallback)((function(e){"undefined"!==typeof e&&s((function(t){return Sn(t,e)}));var t=function(e){var t=e.map((function(e){return e.checked?1:0}));return parseInt(t.reverse().join(""),2)}(u),n=new O,r=new Date,o=new Date(r.setFullYear(r.getFullYear()+1));n.set("cookiesConsentDate",(new Date).toISOString(),{expires:o,path:"/",encode:function(e){return e}}),n.set("cookiesConsent",t,{expires:o,path:"/"}),a(!1)}),[u]),m=function(){kn().cookiesConsent?a(!1):(f(),p())},y=function(){s(wn(n.cookieRules))};return Object(r.useImperativeHandle)(t,(function(){return{open:function(){return a(!0)},close:function(){return a(!1)}}})),Object(r.useEffect)((function(){!function(){var e,t=null===(e=n.options)||void 0===e?void 0:e.updateDate,r=kn();(!r.cookiesConsent||t&&!r.cookiesConsentDate||t&&r.cookiesConsentDate&&new Date(r.cookiesConsentDate).getTime()<new Date(t).getTime())&&a(!0)}()}),[]),n.layout===C.Dialog?Object(Pt.jsx)(xn,{open:i,localization:c,cookieRules:u,isExistCookieConsent:Boolean(kn().cookiesConsent),onClose:m,afterOnClosed:y,onCookieRuleChange:d,onSubmit:p}):Object(Pt.jsx)(Dt,{open:i,localization:c,cookieRules:u,isExistCookieConsent:Boolean(kn().cookiesConsent),onClose:m,afterOnClosed:y,onCookieRuleChange:d,onSubmit:p,options:n.options})})),On=Object(r.createRef)();window.cookieConsent={init:function(e){if(!e)throw new Error("CookieConsent: nen\xed zad\xe1n objekt s konfigurac\xed.");var t="cookieconsent_root",n=document.getElementById(t);if(!n){var r=document.createElement("div");r.id=t,n=r,document.body.appendChild(r)}Object(i.render)(Object(Pt.jsx)(f,{theme:g({palette:e.palette,typography:e.typography}),children:Object(Pt.jsx)(En,{initialConfig:e,ref:On})}),n)},open:function(){On.current&&On.current.open()},close:function(){On.current&&On.current.close()}}},function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var r=n(1),o=n(31);function i(e){return e&&"object"===Object(o.a)(e)&&e.constructor===Object}function a(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{clone:!0},o=n.clone?Object(r.a)({},e):e;return i(e)&&i(t)&&Object.keys(t).forEach((function(r){"__proto__"!==r&&(i(t[r])&&r in e?o[r]=a(e[r],t[r],n):o[r]=t[r])})),o}},,,,,,,,,,,,,,,,,,,,function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var r=n(0),o=n.n(r),i=n(42);function a(){return o.a.useContext(i.a)}},function(e,t,n){"use strict";function r(e){var t=e.theme,n=e.name,r=e.props;if(!t||!t.props||!t.props[n])return r;var o,i=t.props[n];for(o in i)void 0===r[o]&&(r[o]=i[o]);return r}n.d(t,"a",(function(){return r}))},function(e,t,n){"use strict";n.d(t,"a",(function(){return vn}));var r=n(3),o=n(1),i=n(0),a=n.n(i),l="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},u="object"===("undefined"===typeof window?"undefined":l(window))&&"object"===("undefined"===typeof document?"undefined":l(document))&&9===document.nodeType;var s=n(25),c=n(23),f=n(34),d=n(19),p={}.constructor;function h(e){if(null==e||"object"!==typeof e)return e;if(Array.isArray(e))return e.map(h);if(e.constructor!==p)return e;var t={};for(var n in e)t[n]=h(e[n]);return t}function m(e,t,n){void 0===e&&(e="unnamed");var r=n.jss,o=h(t),i=r.plugins.onCreateRule(e,o,n);return i||(e[0],null)}var y=function(e,t){for(var n="",r=0;r<e.length&&"!important"!==e[r];r++)n&&(n+=t),n+=e[r];return n},g=function(e,t){if(void 0===t&&(t=!1),!Array.isArray(e))return e;var n="";if(Array.isArray(e[0]))for(var r=0;r<e.length&&"!important"!==e[r];r++)n&&(n+=", "),n+=y(e[r]," ");else n=y(e,", ");return t||"!important"!==e[e.length-1]||(n+=" !important"),n};function v(e){return e&&!1===e.format?{linebreak:"",space:""}:{linebreak:"\n",space:" "}}function b(e,t){for(var n="",r=0;r<t;r++)n+="  ";return n+e}function x(e,t,n){void 0===n&&(n={});var r="";if(!t)return r;var o=n.indent,i=void 0===o?0:o,a=t.fallbacks;!1===n.format&&(i=-1/0);var l=v(n),u=l.linebreak,s=l.space;if(e&&i++,a)if(Array.isArray(a))for(var c=0;c<a.length;c++){var f=a[c];for(var d in f){var p=f[d];null!=p&&(r&&(r+=u),r+=b(d+":"+s+g(p)+";",i))}}else for(var h in a){var m=a[h];null!=m&&(r&&(r+=u),r+=b(h+":"+s+g(m)+";",i))}for(var y in t){var x=t[y];null!=x&&"fallbacks"!==y&&(r&&(r+=u),r+=b(y+":"+s+g(x)+";",i))}return(r||n.allowEmpty)&&e?(r&&(r=""+u+r+u),b(""+e+s+"{"+r,--i)+b("}",i)):r}var k=/([[\].#*$><+~=|^:(),"'`\s])/g,w="undefined"!==typeof CSS&&CSS.escape,S=function(e){return w?w(e):e.replace(k,"\\$1")},E=function(){function e(e,t,n){this.type="style",this.isProcessed=!1;var r=n.sheet,o=n.Renderer;this.key=e,this.options=n,this.style=t,r?this.renderer=r.renderer:o&&(this.renderer=new o)}return e.prototype.prop=function(e,t,n){if(void 0===t)return this.style[e];var r=!!n&&n.force;if(!r&&this.style[e]===t)return this;var o=t;n&&!1===n.process||(o=this.options.jss.plugins.onChangeValue(t,e,this));var i=null==o||!1===o,a=e in this.style;if(i&&!a&&!r)return this;var l=i&&a;if(l?delete this.style[e]:this.style[e]=o,this.renderable&&this.renderer)return l?this.renderer.removeProperty(this.renderable,e):this.renderer.setProperty(this.renderable,e,o),this;var u=this.options.sheet;return u&&u.attached,this},e}(),O=function(e){function t(t,n,r){var o;o=e.call(this,t,n,r)||this;var i=r.selector,a=r.scoped,l=r.sheet,u=r.generateId;return i?o.selectorText=i:!1!==a&&(o.id=u(Object(f.a)(Object(f.a)(o)),l),o.selectorText="."+S(o.id)),o}Object(c.a)(t,e);var n=t.prototype;return n.applyTo=function(e){var t=this.renderer;if(t){var n=this.toJSON();for(var r in n)t.setProperty(e,r,n[r])}return this},n.toJSON=function(){var e={};for(var t in this.style){var n=this.style[t];"object"!==typeof n?e[t]=n:Array.isArray(n)&&(e[t]=g(n))}return e},n.toString=function(e){var t=this.options.sheet,n=!!t&&t.options.link?Object(o.a)({},e,{allowEmpty:!0}):e;return x(this.selectorText,this.style,n)},Object(s.a)(t,[{key:"selector",set:function(e){if(e!==this.selectorText){this.selectorText=e;var t=this.renderer,n=this.renderable;if(n&&t)t.setSelector(n,e)||t.replaceRule(n,this)}},get:function(){return this.selectorText}}]),t}(E),C={onCreateRule:function(e,t,n){return"@"===e[0]||n.parent&&"keyframes"===n.parent.type?null:new O(e,t,n)}},j={indent:1,children:!0},T=/@([\w-]+)/,P=function(){function e(e,t,n){this.type="conditional",this.isProcessed=!1,this.key=e;var r=e.match(T);for(var i in this.at=r?r[1]:"unknown",this.query=n.name||"@"+this.at,this.options=n,this.rules=new J(Object(o.a)({},n,{parent:this})),t)this.rules.add(i,t[i]);this.rules.process()}var t=e.prototype;return t.getRule=function(e){return this.rules.get(e)},t.indexOf=function(e){return this.rules.indexOf(e)},t.addRule=function(e,t,n){var r=this.rules.add(e,t,n);return r?(this.options.jss.plugins.onProcessRule(r),r):null},t.toString=function(e){void 0===e&&(e=j);var t=v(e).linebreak;if(null==e.indent&&(e.indent=j.indent),null==e.children&&(e.children=j.children),!1===e.children)return this.query+" {}";var n=this.rules.toString(e);return n?this.query+" {"+t+n+t+"}":""},e}(),R=/@media|@supports\s+/,N={onCreateRule:function(e,t,n){return R.test(e)?new P(e,t,n):null}},_={indent:1,children:!0},z=/@keyframes\s+([\w-]+)/,M=function(){function e(e,t,n){this.type="keyframes",this.at="@keyframes",this.isProcessed=!1;var r=e.match(z);r&&r[1]?this.name=r[1]:this.name="noname",this.key=this.type+"-"+this.name,this.options=n;var i=n.scoped,a=n.sheet,l=n.generateId;for(var u in this.id=!1===i?this.name:S(l(this,a)),this.rules=new J(Object(o.a)({},n,{parent:this})),t)this.rules.add(u,t[u],Object(o.a)({},n,{parent:this}));this.rules.process()}return e.prototype.toString=function(e){void 0===e&&(e=_);var t=v(e).linebreak;if(null==e.indent&&(e.indent=_.indent),null==e.children&&(e.children=_.children),!1===e.children)return this.at+" "+this.id+" {}";var n=this.rules.toString(e);return n&&(n=""+t+n+t),this.at+" "+this.id+" {"+n+"}"},e}(),A=/@keyframes\s+/,I=/\$([\w-]+)/g,D=function(e,t){return"string"===typeof e?e.replace(I,(function(e,n){return n in t?t[n]:e})):e},L=function(e,t,n){var r=e[t],o=D(r,n);o!==r&&(e[t]=o)},F={onCreateRule:function(e,t,n){return"string"===typeof e&&A.test(e)?new M(e,t,n):null},onProcessStyle:function(e,t,n){return"style"===t.type&&n?("animation-name"in e&&L(e,"animation-name",n.keyframes),"animation"in e&&L(e,"animation",n.keyframes),e):e},onChangeValue:function(e,t,n){var r=n.options.sheet;if(!r)return e;switch(t){case"animation":case"animation-name":return D(e,r.keyframes);default:return e}}},B=function(e){function t(){return e.apply(this,arguments)||this}return Object(c.a)(t,e),t.prototype.toString=function(e){var t=this.options.sheet,n=!!t&&t.options.link?Object(o.a)({},e,{allowEmpty:!0}):e;return x(this.key,this.style,n)},t}(E),W={onCreateRule:function(e,t,n){return n.parent&&"keyframes"===n.parent.type?new B(e,t,n):null}},U=function(){function e(e,t,n){this.type="font-face",this.at="@font-face",this.isProcessed=!1,this.key=e,this.style=t,this.options=n}return e.prototype.toString=function(e){var t=v(e).linebreak;if(Array.isArray(this.style)){for(var n="",r=0;r<this.style.length;r++)n+=x(this.at,this.style[r]),this.style[r+1]&&(n+=t);return n}return x(this.at,this.style,e)},e}(),V=/@font-face/,$={onCreateRule:function(e,t,n){return V.test(e)?new U(e,t,n):null}},H=function(){function e(e,t,n){this.type="viewport",this.at="@viewport",this.isProcessed=!1,this.key=e,this.style=t,this.options=n}return e.prototype.toString=function(e){return x(this.key,this.style,e)},e}(),K={onCreateRule:function(e,t,n){return"@viewport"===e||"@-ms-viewport"===e?new H(e,t,n):null}},q=function(){function e(e,t,n){this.type="simple",this.isProcessed=!1,this.key=e,this.value=t,this.options=n}return e.prototype.toString=function(e){if(Array.isArray(this.value)){for(var t="",n=0;n<this.value.length;n++)t+=this.key+" "+this.value[n]+";",this.value[n+1]&&(t+="\n");return t}return this.key+" "+this.value+";"},e}(),Q={"@charset":!0,"@import":!0,"@namespace":!0},Y=[C,N,F,W,$,K,{onCreateRule:function(e,t,n){return e in Q?new q(e,t,n):null}}],X={process:!0},G={force:!0,process:!0},J=function(){function e(e){this.map={},this.raw={},this.index=[],this.counter=0,this.options=e,this.classes=e.classes,this.keyframes=e.keyframes}var t=e.prototype;return t.add=function(e,t,n){var r=this.options,i=r.parent,a=r.sheet,l=r.jss,u=r.Renderer,s=r.generateId,c=r.scoped,f=Object(o.a)({classes:this.classes,parent:i,sheet:a,jss:l,Renderer:u,generateId:s,scoped:c,name:e,keyframes:this.keyframes,selector:void 0},n),d=e;e in this.raw&&(d=e+"-d"+this.counter++),this.raw[d]=t,d in this.classes&&(f.selector="."+S(this.classes[d]));var p=m(d,t,f);if(!p)return null;this.register(p);var h=void 0===f.index?this.index.length:f.index;return this.index.splice(h,0,p),p},t.get=function(e){return this.map[e]},t.remove=function(e){this.unregister(e),delete this.raw[e.key],this.index.splice(this.index.indexOf(e),1)},t.indexOf=function(e){return this.index.indexOf(e)},t.process=function(){var e=this.options.jss.plugins;this.index.slice(0).forEach(e.onProcessRule,e)},t.register=function(e){this.map[e.key]=e,e instanceof O?(this.map[e.selector]=e,e.id&&(this.classes[e.key]=e.id)):e instanceof M&&this.keyframes&&(this.keyframes[e.name]=e.id)},t.unregister=function(e){delete this.map[e.key],e instanceof O?(delete this.map[e.selector],delete this.classes[e.key]):e instanceof M&&delete this.keyframes[e.name]},t.update=function(){var e,t,n;if("string"===typeof(arguments.length<=0?void 0:arguments[0])?(e=arguments.length<=0?void 0:arguments[0],t=arguments.length<=1?void 0:arguments[1],n=arguments.length<=2?void 0:arguments[2]):(t=arguments.length<=0?void 0:arguments[0],n=arguments.length<=1?void 0:arguments[1],e=null),e)this.updateOne(this.map[e],t,n);else for(var r=0;r<this.index.length;r++)this.updateOne(this.index[r],t,n)},t.updateOne=function(t,n,r){void 0===r&&(r=X);var o=this.options,i=o.jss.plugins,a=o.sheet;if(t.rules instanceof e)t.rules.update(n,r);else{var l=t.style;if(i.onUpdate(n,t,a,r),r.process&&l&&l!==t.style){for(var u in i.onProcessStyle(t.style,t,a),t.style){var s=t.style[u];s!==l[u]&&t.prop(u,s,G)}for(var c in l){var f=t.style[c],d=l[c];null==f&&f!==d&&t.prop(c,null,G)}}}},t.toString=function(e){for(var t="",n=this.options.sheet,r=!!n&&n.options.link,o=v(e).linebreak,i=0;i<this.index.length;i++){var a=this.index[i].toString(e);(a||r)&&(t&&(t+=o),t+=a)}return t},e}(),Z=function(){function e(e,t){for(var n in this.attached=!1,this.deployed=!1,this.classes={},this.keyframes={},this.options=Object(o.a)({},t,{sheet:this,parent:this,classes:this.classes,keyframes:this.keyframes}),t.Renderer&&(this.renderer=new t.Renderer(this)),this.rules=new J(this.options),e)this.rules.add(n,e[n]);this.rules.process()}var t=e.prototype;return t.attach=function(){return this.attached||(this.renderer&&this.renderer.attach(),this.attached=!0,this.deployed||this.deploy()),this},t.detach=function(){return this.attached?(this.renderer&&this.renderer.detach(),this.attached=!1,this):this},t.addRule=function(e,t,n){var r=this.queue;this.attached&&!r&&(this.queue=[]);var o=this.rules.add(e,t,n);return o?(this.options.jss.plugins.onProcessRule(o),this.attached?this.deployed?(r?r.push(o):(this.insertRule(o),this.queue&&(this.queue.forEach(this.insertRule,this),this.queue=void 0)),o):o:(this.deployed=!1,o)):null},t.insertRule=function(e){this.renderer&&this.renderer.insertRule(e)},t.addRules=function(e,t){var n=[];for(var r in e){var o=this.addRule(r,e[r],t);o&&n.push(o)}return n},t.getRule=function(e){return this.rules.get(e)},t.deleteRule=function(e){var t="object"===typeof e?e:this.rules.get(e);return!(!t||this.attached&&!t.renderable)&&(this.rules.remove(t),!(this.attached&&t.renderable&&this.renderer)||this.renderer.deleteRule(t.renderable))},t.indexOf=function(e){return this.rules.indexOf(e)},t.deploy=function(){return this.renderer&&this.renderer.deploy(),this.deployed=!0,this},t.update=function(){var e;return(e=this.rules).update.apply(e,arguments),this},t.updateOne=function(e,t,n){return this.rules.updateOne(e,t,n),this},t.toString=function(e){return this.rules.toString(e)},e}(),ee=function(){function e(){this.plugins={internal:[],external:[]},this.registry={}}var t=e.prototype;return t.onCreateRule=function(e,t,n){for(var r=0;r<this.registry.onCreateRule.length;r++){var o=this.registry.onCreateRule[r](e,t,n);if(o)return o}return null},t.onProcessRule=function(e){if(!e.isProcessed){for(var t=e.options.sheet,n=0;n<this.registry.onProcessRule.length;n++)this.registry.onProcessRule[n](e,t);e.style&&this.onProcessStyle(e.style,e,t),e.isProcessed=!0}},t.onProcessStyle=function(e,t,n){for(var r=0;r<this.registry.onProcessStyle.length;r++)t.style=this.registry.onProcessStyle[r](t.style,t,n)},t.onProcessSheet=function(e){for(var t=0;t<this.registry.onProcessSheet.length;t++)this.registry.onProcessSheet[t](e)},t.onUpdate=function(e,t,n,r){for(var o=0;o<this.registry.onUpdate.length;o++)this.registry.onUpdate[o](e,t,n,r)},t.onChangeValue=function(e,t,n){for(var r=e,o=0;o<this.registry.onChangeValue.length;o++)r=this.registry.onChangeValue[o](r,t,n);return r},t.use=function(e,t){void 0===t&&(t={queue:"external"});var n=this.plugins[t.queue];-1===n.indexOf(e)&&(n.push(e),this.registry=[].concat(this.plugins.external,this.plugins.internal).reduce((function(e,t){for(var n in t)n in e&&e[n].push(t[n]);return e}),{onCreateRule:[],onProcessRule:[],onProcessStyle:[],onProcessSheet:[],onChangeValue:[],onUpdate:[]}))},e}(),te=new(function(){function e(){this.registry=[]}var t=e.prototype;return t.add=function(e){var t=this.registry,n=e.options.index;if(-1===t.indexOf(e))if(0===t.length||n>=this.index)t.push(e);else for(var r=0;r<t.length;r++)if(t[r].options.index>n)return void t.splice(r,0,e)},t.reset=function(){this.registry=[]},t.remove=function(e){var t=this.registry.indexOf(e);this.registry.splice(t,1)},t.toString=function(e){for(var t=void 0===e?{}:e,n=t.attached,r=Object(d.a)(t,["attached"]),o=v(r).linebreak,i="",a=0;a<this.registry.length;a++){var l=this.registry[a];null!=n&&l.attached!==n||(i&&(i+=o),i+=l.toString(r))}return i},Object(s.a)(e,[{key:"index",get:function(){return 0===this.registry.length?0:this.registry[this.registry.length-1].options.index}}]),e}()),ne="undefined"!==typeof globalThis?globalThis:"undefined"!==typeof window&&window.Math===Math?window:"undefined"!==typeof self&&self.Math===Math?self:Function("return this")(),re="2f1acc6c3a606b082e5eef5e54414ffb";null==ne[re]&&(ne[re]=0);var oe=ne[re]++,ie=function(e){void 0===e&&(e={});var t=0;return function(n,r){t+=1;var o="",i="";return r&&(r.options.classNamePrefix&&(i=r.options.classNamePrefix),null!=r.options.jss.id&&(o=String(r.options.jss.id))),e.minify?""+(i||"c")+oe+o+t:i+n.key+"-"+oe+(o?"-"+o:"")+"-"+t}},ae=function(e){var t;return function(){return t||(t=e()),t}},le=function(e,t){try{return e.attributeStyleMap?e.attributeStyleMap.get(t):e.style.getPropertyValue(t)}catch(n){return""}},ue=function(e,t,n){try{var r=n;if(Array.isArray(n)&&(r=g(n,!0),"!important"===n[n.length-1]))return e.style.setProperty(t,r,"important"),!0;e.attributeStyleMap?e.attributeStyleMap.set(t,r):e.style.setProperty(t,r)}catch(o){return!1}return!0},se=function(e,t){try{e.attributeStyleMap?e.attributeStyleMap.delete(t):e.style.removeProperty(t)}catch(n){}},ce=function(e,t){return e.selectorText=t,e.selectorText===t},fe=ae((function(){return document.querySelector("head")}));function de(e){var t=te.registry;if(t.length>0){var n=function(e,t){for(var n=0;n<e.length;n++){var r=e[n];if(r.attached&&r.options.index>t.index&&r.options.insertionPoint===t.insertionPoint)return r}return null}(t,e);if(n&&n.renderer)return{parent:n.renderer.element.parentNode,node:n.renderer.element};if(n=function(e,t){for(var n=e.length-1;n>=0;n--){var r=e[n];if(r.attached&&r.options.insertionPoint===t.insertionPoint)return r}return null}(t,e),n&&n.renderer)return{parent:n.renderer.element.parentNode,node:n.renderer.element.nextSibling}}var r=e.insertionPoint;if(r&&"string"===typeof r){var o=function(e){for(var t=fe(),n=0;n<t.childNodes.length;n++){var r=t.childNodes[n];if(8===r.nodeType&&r.nodeValue.trim()===e)return r}return null}(r);if(o)return{parent:o.parentNode,node:o.nextSibling}}return!1}var pe=ae((function(){var e=document.querySelector('meta[property="csp-nonce"]');return e?e.getAttribute("content"):null})),he=function(e,t,n){try{"insertRule"in e?e.insertRule(t,n):"appendRule"in e&&e.appendRule(t)}catch(r){return!1}return e.cssRules[n]},me=function(e,t){var n=e.cssRules.length;return void 0===t||t>n?n:t},ye=function(){function e(e){this.getPropertyValue=le,this.setProperty=ue,this.removeProperty=se,this.setSelector=ce,this.hasInsertedRules=!1,this.cssRules=[],e&&te.add(e),this.sheet=e;var t=this.sheet?this.sheet.options:{},n=t.media,r=t.meta,o=t.element;this.element=o||function(){var e=document.createElement("style");return e.textContent="\n",e}(),this.element.setAttribute("data-jss",""),n&&this.element.setAttribute("media",n),r&&this.element.setAttribute("data-meta",r);var i=pe();i&&this.element.setAttribute("nonce",i)}var t=e.prototype;return t.attach=function(){if(!this.element.parentNode&&this.sheet){!function(e,t){var n=t.insertionPoint,r=de(t);if(!1!==r&&r.parent)r.parent.insertBefore(e,r.node);else if(n&&"number"===typeof n.nodeType){var o=n,i=o.parentNode;i&&i.insertBefore(e,o.nextSibling)}else fe().appendChild(e)}(this.element,this.sheet.options);var e=Boolean(this.sheet&&this.sheet.deployed);this.hasInsertedRules&&e&&(this.hasInsertedRules=!1,this.deploy())}},t.detach=function(){if(this.sheet){var e=this.element.parentNode;e&&e.removeChild(this.element),this.sheet.options.link&&(this.cssRules=[],this.element.textContent="\n")}},t.deploy=function(){var e=this.sheet;e&&(e.options.link?this.insertRules(e.rules):this.element.textContent="\n"+e.toString()+"\n")},t.insertRules=function(e,t){for(var n=0;n<e.index.length;n++)this.insertRule(e.index[n],n,t)},t.insertRule=function(e,t,n){if(void 0===n&&(n=this.element.sheet),e.rules){var r=e,o=n;if("conditional"===e.type||"keyframes"===e.type){var i=me(n,t);if(!1===(o=he(n,r.toString({children:!1}),i)))return!1;this.refCssRule(e,i,o)}return this.insertRules(r.rules,o),o}var a=e.toString();if(!a)return!1;var l=me(n,t),u=he(n,a,l);return!1!==u&&(this.hasInsertedRules=!0,this.refCssRule(e,l,u),u)},t.refCssRule=function(e,t,n){e.renderable=n,e.options.parent instanceof Z&&(this.cssRules[t]=n)},t.deleteRule=function(e){var t=this.element.sheet,n=this.indexOf(e);return-1!==n&&(t.deleteRule(n),this.cssRules.splice(n,1),!0)},t.indexOf=function(e){return this.cssRules.indexOf(e)},t.replaceRule=function(e,t){var n=this.indexOf(e);return-1!==n&&(this.element.sheet.deleteRule(n),this.cssRules.splice(n,1),this.insertRule(t,n))},t.getRules=function(){return this.element.sheet.cssRules},e}(),ge=0,ve=function(){function e(e){this.id=ge++,this.version="10.8.2",this.plugins=new ee,this.options={id:{minify:!1},createGenerateId:ie,Renderer:u?ye:null,plugins:[]},this.generateId=ie({minify:!1});for(var t=0;t<Y.length;t++)this.plugins.use(Y[t],{queue:"internal"});this.setup(e)}var t=e.prototype;return t.setup=function(e){return void 0===e&&(e={}),e.createGenerateId&&(this.options.createGenerateId=e.createGenerateId),e.id&&(this.options.id=Object(o.a)({},this.options.id,e.id)),(e.createGenerateId||e.id)&&(this.generateId=this.options.createGenerateId(this.options.id)),null!=e.insertionPoint&&(this.options.insertionPoint=e.insertionPoint),"Renderer"in e&&(this.options.Renderer=e.Renderer),e.plugins&&this.use.apply(this,e.plugins),this},t.createStyleSheet=function(e,t){void 0===t&&(t={});var n=t.index;"number"!==typeof n&&(n=0===te.index?0:te.index+1);var r=new Z(e,Object(o.a)({},t,{jss:this,generateId:t.generateId||this.generateId,insertionPoint:this.options.insertionPoint,Renderer:this.options.Renderer,index:n}));return this.plugins.onProcessSheet(r),r},t.removeStyleSheet=function(e){return e.detach(),te.remove(e),this},t.createRule=function(e,t,n){if(void 0===t&&(t={}),void 0===n&&(n={}),"object"===typeof e)return this.createRule(void 0,e,t);var r=Object(o.a)({},n,{name:e,jss:this,Renderer:this.options.Renderer});r.generateId||(r.generateId=this.generateId),r.classes||(r.classes={}),r.keyframes||(r.keyframes={});var i=m(e,t,r);return i&&this.plugins.onProcessRule(i),i},t.use=function(){for(var e=this,t=arguments.length,n=new Array(t),r=0;r<t;r++)n[r]=arguments[r];return n.forEach((function(t){e.plugins.use(t)})),this},e}(),be=function(e){return new ve(e)},xe="object"===typeof CSS&&null!=CSS&&"number"in CSS;function ke(e){var t=null;for(var n in e){var r=e[n],o=typeof r;if("function"===o)t||(t={}),t[n]=r;else if("object"===o&&null!==r&&!Array.isArray(r)){var i=ke(r);i&&(t||(t={}),t[n]=i)}}return t}be();function we(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.baseClasses,n=e.newClasses;e.Component;if(!n)return t;var r=Object(o.a)({},t);return Object.keys(n).forEach((function(e){n[e]&&(r[e]="".concat(t[e]," ").concat(n[e]))})),r}var Se={set:function(e,t,n,r){var o=e.get(t);o||(o=new Map,e.set(t,o)),o.set(n,r)},get:function(e,t,n){var r=e.get(t);return r?r.get(n):void 0},delete:function(e,t,n){e.get(t).delete(n)}},Ee=Se,Oe=n(114),Ce=(n(6),n(43)),je=["checked","disabled","error","focused","focusVisible","required","expanded","selected"];var Te=Date.now(),Pe="fnValues"+Te,Re="fnStyle"+ ++Te,Ne=function(){return{onCreateRule:function(e,t,n){if("function"!==typeof t)return null;var r=m(e,{},n);return r[Re]=t,r},onProcessStyle:function(e,t){if(Pe in t||Re in t)return e;var n={};for(var r in e){var o=e[r];"function"===typeof o&&(delete e[r],n[r]=o)}return t[Pe]=n,e},onUpdate:function(e,t,n,r){var o=t,i=o[Re];i&&(o.style=i(e)||{});var a=o[Pe];if(a)for(var l in a)o.prop(l,a[l](e),r)}}},_e="@global",ze="@global ",Me=function(){function e(e,t,n){for(var r in this.type="global",this.at=_e,this.isProcessed=!1,this.key=e,this.options=n,this.rules=new J(Object(o.a)({},n,{parent:this})),t)this.rules.add(r,t[r]);this.rules.process()}var t=e.prototype;return t.getRule=function(e){return this.rules.get(e)},t.addRule=function(e,t,n){var r=this.rules.add(e,t,n);return r&&this.options.jss.plugins.onProcessRule(r),r},t.indexOf=function(e){return this.rules.indexOf(e)},t.toString=function(){return this.rules.toString()},e}(),Ae=function(){function e(e,t,n){this.type="global",this.at=_e,this.isProcessed=!1,this.key=e,this.options=n;var r=e.substr(ze.length);this.rule=n.jss.createRule(r,t,Object(o.a)({},n,{parent:this}))}return e.prototype.toString=function(e){return this.rule?this.rule.toString(e):""},e}(),Ie=/\s*,\s*/g;function De(e,t){for(var n=e.split(Ie),r="",o=0;o<n.length;o++)r+=t+" "+n[o].trim(),n[o+1]&&(r+=", ");return r}var Le=function(){return{onCreateRule:function(e,t,n){if(!e)return null;if(e===_e)return new Me(e,t,n);if("@"===e[0]&&e.substr(0,ze.length)===ze)return new Ae(e,t,n);var r=n.parent;return r&&("global"===r.type||r.options.parent&&"global"===r.options.parent.type)&&(n.scoped=!1),!1===n.scoped&&(n.selector=e),null},onProcessRule:function(e,t){"style"===e.type&&t&&(function(e,t){var n=e.options,r=e.style,i=r?r[_e]:null;if(i){for(var a in i)t.addRule(a,i[a],Object(o.a)({},n,{selector:De(a,e.selector)}));delete r[_e]}}(e,t),function(e,t){var n=e.options,r=e.style;for(var i in r)if("@"===i[0]&&i.substr(0,_e.length)===_e){var a=De(i.substr(_e.length),e.selector);t.addRule(a,r[i],Object(o.a)({},n,{selector:a})),delete r[i]}}(e,t))}}},Fe=/\s*,\s*/g,Be=/&/g,We=/\$([\w-]+)/g;var Ue=function(){function e(e,t){return function(n,r){var o=e.getRule(r)||t&&t.getRule(r);return o?o.selector:r}}function t(e,t){for(var n=t.split(Fe),r=e.split(Fe),o="",i=0;i<n.length;i++)for(var a=n[i],l=0;l<r.length;l++){var u=r[l];o&&(o+=", "),o+=-1!==u.indexOf("&")?u.replace(Be,a):a+" "+u}return o}function n(e,t,n){if(n)return Object(o.a)({},n,{index:n.index+1});var r=e.options.nestingLevel;r=void 0===r?1:r+1;var i=Object(o.a)({},e.options,{nestingLevel:r,index:t.indexOf(e)+1});return delete i.name,i}return{onProcessStyle:function(r,i,a){if("style"!==i.type)return r;var l,u,s=i,c=s.options.parent;for(var f in r){var d=-1!==f.indexOf("&"),p="@"===f[0];if(d||p){if(l=n(s,c,l),d){var h=t(f,s.selector);u||(u=e(c,a)),h=h.replace(We,u),c.addRule(h,r[f],Object(o.a)({},l,{selector:h}))}else p&&c.addRule(f,{},l).addRule(s.key,r[f],{selector:s.selector});delete r[f]}}return r}}},Ve=/[A-Z]/g,$e=/^ms-/,He={};function Ke(e){return"-"+e.toLowerCase()}var qe=function(e){if(He.hasOwnProperty(e))return He[e];var t=e.replace(Ve,Ke);return He[e]=$e.test(t)?"-"+t:t};function Qe(e){var t={};for(var n in e){t[0===n.indexOf("--")?n:qe(n)]=e[n]}return e.fallbacks&&(Array.isArray(e.fallbacks)?t.fallbacks=e.fallbacks.map(Qe):t.fallbacks=Qe(e.fallbacks)),t}var Ye=function(){return{onProcessStyle:function(e){if(Array.isArray(e)){for(var t=0;t<e.length;t++)e[t]=Qe(e[t]);return e}return Qe(e)},onChangeValue:function(e,t,n){if(0===t.indexOf("--"))return e;var r=qe(t);return t===r?e:(n.prop(r,e),null)}}},Xe=xe&&CSS?CSS.px:"px",Ge=xe&&CSS?CSS.ms:"ms",Je=xe&&CSS?CSS.percent:"%";function Ze(e){var t=/(-[a-z])/g,n=function(e){return e[1].toUpperCase()},r={};for(var o in e)r[o]=e[o],r[o.replace(t,n)]=e[o];return r}var et=Ze({"animation-delay":Ge,"animation-duration":Ge,"background-position":Xe,"background-position-x":Xe,"background-position-y":Xe,"background-size":Xe,border:Xe,"border-bottom":Xe,"border-bottom-left-radius":Xe,"border-bottom-right-radius":Xe,"border-bottom-width":Xe,"border-left":Xe,"border-left-width":Xe,"border-radius":Xe,"border-right":Xe,"border-right-width":Xe,"border-top":Xe,"border-top-left-radius":Xe,"border-top-right-radius":Xe,"border-top-width":Xe,"border-width":Xe,"border-block":Xe,"border-block-end":Xe,"border-block-end-width":Xe,"border-block-start":Xe,"border-block-start-width":Xe,"border-block-width":Xe,"border-inline":Xe,"border-inline-end":Xe,"border-inline-end-width":Xe,"border-inline-start":Xe,"border-inline-start-width":Xe,"border-inline-width":Xe,"border-start-start-radius":Xe,"border-start-end-radius":Xe,"border-end-start-radius":Xe,"border-end-end-radius":Xe,margin:Xe,"margin-bottom":Xe,"margin-left":Xe,"margin-right":Xe,"margin-top":Xe,"margin-block":Xe,"margin-block-end":Xe,"margin-block-start":Xe,"margin-inline":Xe,"margin-inline-end":Xe,"margin-inline-start":Xe,padding:Xe,"padding-bottom":Xe,"padding-left":Xe,"padding-right":Xe,"padding-top":Xe,"padding-block":Xe,"padding-block-end":Xe,"padding-block-start":Xe,"padding-inline":Xe,"padding-inline-end":Xe,"padding-inline-start":Xe,"mask-position-x":Xe,"mask-position-y":Xe,"mask-size":Xe,height:Xe,width:Xe,"min-height":Xe,"max-height":Xe,"min-width":Xe,"max-width":Xe,bottom:Xe,left:Xe,top:Xe,right:Xe,inset:Xe,"inset-block":Xe,"inset-block-end":Xe,"inset-block-start":Xe,"inset-inline":Xe,"inset-inline-end":Xe,"inset-inline-start":Xe,"box-shadow":Xe,"text-shadow":Xe,"column-gap":Xe,"column-rule":Xe,"column-rule-width":Xe,"column-width":Xe,"font-size":Xe,"font-size-delta":Xe,"letter-spacing":Xe,"text-decoration-thickness":Xe,"text-indent":Xe,"text-stroke":Xe,"text-stroke-width":Xe,"word-spacing":Xe,motion:Xe,"motion-offset":Xe,outline:Xe,"outline-offset":Xe,"outline-width":Xe,perspective:Xe,"perspective-origin-x":Je,"perspective-origin-y":Je,"transform-origin":Je,"transform-origin-x":Je,"transform-origin-y":Je,"transform-origin-z":Je,"transition-delay":Ge,"transition-duration":Ge,"vertical-align":Xe,"flex-basis":Xe,"shape-margin":Xe,size:Xe,gap:Xe,grid:Xe,"grid-gap":Xe,"row-gap":Xe,"grid-row-gap":Xe,"grid-column-gap":Xe,"grid-template-rows":Xe,"grid-template-columns":Xe,"grid-auto-rows":Xe,"grid-auto-columns":Xe,"box-shadow-x":Xe,"box-shadow-y":Xe,"box-shadow-blur":Xe,"box-shadow-spread":Xe,"font-line-height":Xe,"text-shadow-x":Xe,"text-shadow-y":Xe,"text-shadow-blur":Xe});function tt(e,t,n){if(null==t)return t;if(Array.isArray(t))for(var r=0;r<t.length;r++)t[r]=tt(e,t[r],n);else if("object"===typeof t)if("fallbacks"===e)for(var o in t)t[o]=tt(o,t[o],n);else for(var i in t)t[i]=tt(e+"-"+i,t[i],n);else if("number"===typeof t&&!1===isNaN(t)){var a=n[e]||et[e];return!a||0===t&&a===Xe?t.toString():"function"===typeof a?a(t).toString():""+t+a}return t}var nt=function(e){void 0===e&&(e={});var t=Ze(e);return{onProcessStyle:function(e,n){if("style"!==n.type)return e;for(var r in e)e[r]=tt(r,e[r],t);return e},onChangeValue:function(e,n){return tt(n,e,t)}}},rt=n(16),ot="",it="",at="",lt="",ut=u&&"ontouchstart"in document.documentElement;if(u){var st={Moz:"-moz-",ms:"-ms-",O:"-o-",Webkit:"-webkit-"},ct=document.createElement("p").style;for(var ft in st)if(ft+"Transform"in ct){ot=ft,it=st[ft];break}"Webkit"===ot&&"msHyphens"in ct&&(ot="ms",it=st.ms,lt="edge"),"Webkit"===ot&&"-apple-trailing-word"in ct&&(at="apple")}var dt=ot,pt=it,ht=at,mt=lt,yt=ut;var gt={noPrefill:["appearance"],supportedProperty:function(e){return"appearance"===e&&("ms"===dt?"-webkit-"+e:pt+e)}},vt={noPrefill:["color-adjust"],supportedProperty:function(e){return"color-adjust"===e&&("Webkit"===dt?pt+"print-"+e:e)}},bt=/[-\s]+(.)?/g;function xt(e,t){return t?t.toUpperCase():""}function kt(e){return e.replace(bt,xt)}function wt(e){return kt("-"+e)}var St,Et={noPrefill:["mask"],supportedProperty:function(e,t){if(!/^mask/.test(e))return!1;if("Webkit"===dt){var n="mask-image";if(kt(n)in t)return e;if(dt+wt(n)in t)return pt+e}return e}},Ot={noPrefill:["text-orientation"],supportedProperty:function(e){return"text-orientation"===e&&("apple"!==ht||yt?e:pt+e)}},Ct={noPrefill:["transform"],supportedProperty:function(e,t,n){return"transform"===e&&(n.transform?e:pt+e)}},jt={noPrefill:["transition"],supportedProperty:function(e,t,n){return"transition"===e&&(n.transition?e:pt+e)}},Tt={noPrefill:["writing-mode"],supportedProperty:function(e){return"writing-mode"===e&&("Webkit"===dt||"ms"===dt&&"edge"!==mt?pt+e:e)}},Pt={noPrefill:["user-select"],supportedProperty:function(e){return"user-select"===e&&("Moz"===dt||"ms"===dt||"apple"===ht?pt+e:e)}},Rt={supportedProperty:function(e,t){return!!/^break-/.test(e)&&("Webkit"===dt?"WebkitColumn"+wt(e)in t&&pt+"column-"+e:"Moz"===dt&&("page"+wt(e)in t&&"page-"+e))}},Nt={supportedProperty:function(e,t){if(!/^(border|margin|padding)-inline/.test(e))return!1;if("Moz"===dt)return e;var n=e.replace("-inline","");return dt+wt(n)in t&&pt+n}},_t={supportedProperty:function(e,t){return kt(e)in t&&e}},zt={supportedProperty:function(e,t){var n=wt(e);return"-"===e[0]||"-"===e[0]&&"-"===e[1]?e:dt+n in t?pt+e:"Webkit"!==dt&&"Webkit"+n in t&&"-webkit-"+e}},Mt={supportedProperty:function(e){return"scroll-snap"===e.substring(0,11)&&("ms"===dt?""+pt+e:e)}},At={supportedProperty:function(e){return"overscroll-behavior"===e&&("ms"===dt?pt+"scroll-chaining":e)}},It={"flex-grow":"flex-positive","flex-shrink":"flex-negative","flex-basis":"flex-preferred-size","justify-content":"flex-pack",order:"flex-order","align-items":"flex-align","align-content":"flex-line-pack"},Dt={supportedProperty:function(e,t){var n=It[e];return!!n&&(dt+wt(n)in t&&pt+n)}},Lt={flex:"box-flex","flex-grow":"box-flex","flex-direction":["box-orient","box-direction"],order:"box-ordinal-group","align-items":"box-align","flex-flow":["box-orient","box-direction"],"justify-content":"box-pack"},Ft=Object.keys(Lt),Bt=function(e){return pt+e},Wt=[gt,vt,Et,Ot,Ct,jt,Tt,Pt,Rt,Nt,_t,zt,Mt,At,Dt,{supportedProperty:function(e,t,n){var r=n.multiple;if(Ft.indexOf(e)>-1){var o=Lt[e];if(!Array.isArray(o))return dt+wt(o)in t&&pt+o;if(!r)return!1;for(var i=0;i<o.length;i++)if(!(dt+wt(o[0])in t))return!1;return o.map(Bt)}return!1}}],Ut=Wt.filter((function(e){return e.supportedProperty})).map((function(e){return e.supportedProperty})),Vt=Wt.filter((function(e){return e.noPrefill})).reduce((function(e,t){return e.push.apply(e,Object(rt.a)(t.noPrefill)),e}),[]),$t={};if(u){St=document.createElement("p");var Ht=window.getComputedStyle(document.documentElement,"");for(var Kt in Ht)isNaN(Kt)||($t[Ht[Kt]]=Ht[Kt]);Vt.forEach((function(e){return delete $t[e]}))}function qt(e,t){if(void 0===t&&(t={}),!St)return e;if(null!=$t[e])return $t[e];"transition"!==e&&"transform"!==e||(t[e]=e in St.style);for(var n=0;n<Ut.length&&($t[e]=Ut[n](e,St.style,t),!$t[e]);n++);try{St.style[e]=""}catch(r){return!1}return $t[e]}var Qt,Yt={},Xt={transition:1,"transition-property":1,"-webkit-transition":1,"-webkit-transition-property":1},Gt=/(^\s*[\w-]+)|, (\s*[\w-]+)(?![^()]*\))/g;function Jt(e,t,n){if("var"===t)return"var";if("all"===t)return"all";if("all"===n)return", all";var r=t?qt(t):", "+qt(n);return r||(t||n)}function Zt(e,t){var n=t;if(!Qt||"content"===e)return t;if("string"!==typeof n||!isNaN(parseInt(n,10)))return n;var r=e+n;if(null!=Yt[r])return Yt[r];try{Qt.style[e]=n}catch(o){return Yt[r]=!1,!1}if(Xt[e])n=n.replace(Gt,Jt);else if(""===Qt.style[e]&&("-ms-flex"===(n=pt+n)&&(Qt.style[e]="-ms-flexbox"),Qt.style[e]=n,""===Qt.style[e]))return Yt[r]=!1,!1;return Qt.style[e]="",Yt[r]=n,Yt[r]}u&&(Qt=document.createElement("p"));var en=function(){function e(t){for(var n in t){var r=t[n];if("fallbacks"===n&&Array.isArray(r))t[n]=r.map(e);else{var o=!1,i=qt(n);i&&i!==n&&(o=!0);var a=!1,l=Zt(i,g(r));l&&l!==r&&(a=!0),(o||a)&&(o&&delete t[n],t[i||n]=l||r)}}return t}return{onProcessRule:function(e){if("keyframes"===e.type){var t=e;t.at="-"===(n=t.at)[1]||"ms"===dt?n:"@"+pt+"keyframes"+n.substr(10)}var n},onProcessStyle:function(t,n){return"style"!==n.type?t:e(t)},onChangeValue:function(e,t){return Zt(t,g(e))||e}}};var tn=function(){var e=function(e,t){return e.length===t.length?e>t?1:-1:e.length-t.length};return{onProcessStyle:function(t,n){if("style"!==n.type)return t;for(var r={},o=Object.keys(t).sort(e),i=0;i<o.length;i++)r[o[i]]=t[o[i]];return r}}};function nn(){return{plugins:[Ne(),Le(),Ue(),Ye(),nt(),"undefined"===typeof window?null:en(),tn()]}}var rn=be(nn()),on=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.disableGlobal,n=void 0!==t&&t,r=e.productionPrefix,o=void 0===r?"jss":r,i=e.seed,a=void 0===i?"":i,l=""===a?"":"".concat(a,"-"),u=0,s=function(){return u+=1};return function(e,t){var r=t.options.name;if(r&&0===r.indexOf("Mui")&&!t.options.link&&!n){if(-1!==je.indexOf(e.key))return"Mui-".concat(e.key);var i="".concat(l).concat(r,"-").concat(e.key);return t.options.theme[Ce.a]&&""===a?"".concat(i,"-").concat(s()):i}return"".concat(l).concat(o).concat(s())}}(),an={disableGeneration:!1,generateClassName:on,jss:rn,sheetsCache:null,sheetsManager:new Map,sheetsRegistry:null},ln=a.a.createContext(an);var un=-1e9;function sn(){return un+=1}n(31);var cn=n(94);function fn(e){var t="function"===typeof e;return{create:function(n,r){var i;try{i=t?e(n):e}catch(u){throw u}if(!r||!n.overrides||!n.overrides[r])return i;var a=n.overrides[r],l=Object(o.a)({},i);return Object.keys(a).forEach((function(e){l[e]=Object(cn.a)(l[e],a[e])})),l},options:{}}}var dn={};function pn(e,t,n){var r=e.state;if(e.stylesOptions.disableGeneration)return t||{};r.cacheClasses||(r.cacheClasses={value:null,lastProp:null,lastJSS:{}});var o=!1;return r.classes!==r.cacheClasses.lastJSS&&(r.cacheClasses.lastJSS=r.classes,o=!0),t!==r.cacheClasses.lastProp&&(r.cacheClasses.lastProp=t,o=!0),o&&(r.cacheClasses.value=we({baseClasses:r.cacheClasses.lastJSS,newClasses:t,Component:n})),r.cacheClasses.value}function hn(e,t){var n=e.state,r=e.theme,i=e.stylesOptions,a=e.stylesCreator,l=e.name;if(!i.disableGeneration){var u=Ee.get(i.sheetsManager,a,r);u||(u={refs:0,staticSheet:null,dynamicStyles:null},Ee.set(i.sheetsManager,a,r,u));var s=Object(o.a)({},a.options,i,{theme:r,flip:"boolean"===typeof i.flip?i.flip:"rtl"===r.direction});s.generateId=s.serverGenerateClassName||s.generateClassName;var c=i.sheetsRegistry;if(0===u.refs){var f;i.sheetsCache&&(f=Ee.get(i.sheetsCache,a,r));var d=a.create(r,l);f||((f=i.jss.createStyleSheet(d,Object(o.a)({link:!1},s))).attach(),i.sheetsCache&&Ee.set(i.sheetsCache,a,r,f)),c&&c.add(f),u.staticSheet=f,u.dynamicStyles=ke(d)}if(u.dynamicStyles){var p=i.jss.createStyleSheet(u.dynamicStyles,Object(o.a)({link:!0},s));p.update(t),p.attach(),n.dynamicSheet=p,n.classes=we({baseClasses:u.staticSheet.classes,newClasses:p.classes}),c&&c.add(p)}else n.classes=u.staticSheet.classes;u.refs+=1}}function mn(e,t){var n=e.state;n.dynamicSheet&&n.dynamicSheet.update(t)}function yn(e){var t=e.state,n=e.theme,r=e.stylesOptions,o=e.stylesCreator;if(!r.disableGeneration){var i=Ee.get(r.sheetsManager,o,n);i.refs-=1;var a=r.sheetsRegistry;0===i.refs&&(Ee.delete(r.sheetsManager,o,n),r.jss.removeStyleSheet(i.staticSheet),a&&a.remove(i.staticSheet)),t.dynamicSheet&&(r.jss.removeStyleSheet(t.dynamicSheet),a&&a.remove(t.dynamicSheet))}}function gn(e,t){var n,r=a.a.useRef([]),o=a.a.useMemo((function(){return{}}),t);r.current!==o&&(r.current=o,n=e()),a.a.useEffect((function(){return function(){n&&n()}}),[o])}function vn(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.name,i=t.classNamePrefix,l=t.Component,u=t.defaultTheme,s=void 0===u?dn:u,c=Object(r.a)(t,["name","classNamePrefix","Component","defaultTheme"]),f=fn(e),d=n||i||"makeStyles";f.options={index:sn(),name:n,meta:d,classNamePrefix:d};var p=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=Object(Oe.a)()||s,r=Object(o.a)({},a.a.useContext(ln),c),i=a.a.useRef(),u=a.a.useRef();gn((function(){var o={name:n,state:{},stylesCreator:f,stylesOptions:r,theme:t};return hn(o,e),u.current=!1,i.current=o,function(){yn(o)}}),[t,f]),a.a.useEffect((function(){u.current&&mn(i.current,e),u.current=!0}));var d=pn(i.current,e.classes,l);return d};return p}},function(e,t,n){"use strict";n.d(t,"a",(function(){return f}));var r=n(22),o=n(40),i=n(17);var a={m:"margin",p:"padding"},l={t:"Top",r:"Right",b:"Bottom",l:"Left",x:["Left","Right"],y:["Top","Bottom"]},u={marginX:"mx",marginY:"my",paddingX:"px",paddingY:"py"},s=function(e){var t={};return function(n){return void 0===t[n]&&(t[n]=e(n)),t[n]}}((function(e){if(e.length>2){if(!u[e])return[e];e=u[e]}var t=e.split(""),n=Object(r.a)(t,2),o=n[0],i=n[1],s=a[o],c=l[i]||"";return Array.isArray(c)?c.map((function(e){return s+e})):[s+c]})),c=["m","mt","mr","mb","ml","mx","my","p","pt","pr","pb","pl","px","py","margin","marginTop","marginRight","marginBottom","marginLeft","marginX","marginY","padding","paddingTop","paddingRight","paddingBottom","paddingLeft","paddingX","paddingY"];function f(e){var t=e.spacing||8;return"number"===typeof t?function(e){return t*e}:Array.isArray(t)?function(e){return t[e]}:"function"===typeof t?t:function(){}}function d(e,t){return function(n){return e.reduce((function(e,r){return e[r]=function(e,t){if("string"===typeof t||null==t)return t;var n=e(Math.abs(t));return t>=0?n:"number"===typeof n?-n:"-".concat(n)}(t,n),e}),{})}}function p(e){var t=f(e.theme);return Object.keys(e).map((function(n){if(-1===c.indexOf(n))return null;var r=d(s(n),t),i=e[n];return Object(o.a)(e,i,r)})).reduce(i.a,{})}p.propTypes={},p.filterProps=c;t.b=p}]);
//# sourceMappingURL=bundle.min.js.map;
/* ========================================================================
 * Bootstrap: transition.js v3.3.5
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
	'use strict';

	// CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
	// ============================================================

	function transitionEnd() {
		var el = document.createElement('bootstrap');

		var transEndEventNames = {
			WebkitTransition: 'webkitTransitionEnd',
			MozTransition: 'transitionend',
			OTransition: 'oTransitionEnd otransitionend',
			transition: 'transitionend'
		};

		for (var name in transEndEventNames) {
			if (el.style[name] !== undefined) {
				return { end: transEndEventNames[name] };
			}
		}

		return false; // explicit for ie8 (  ._.)
	}

	// http://blog.alexmaccaw.com/css-transitions
	$.fn.emulateTransitionEnd = function (duration) {
		var called = false;
		var $el = this;
		$(this).one('bsTransitionEnd', function () { called = true; });
		var callback = function () { if (!called) $($el).trigger($.support.transition.end); };
		setTimeout(callback, duration);
		return this;
	};

	$(function () {
		$.support.transition = transitionEnd();

		if (!$.support.transition) return;

		$.event.special.bsTransitionEnd = {
			bindType: $.support.transition.end,
			delegateType: $.support.transition.end,
			handle: function (e) {
				if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
			}
		};
	});

}(jQuery);;
/* ========================================================================
 * Bootstrap: collapse.js v3.3.7
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.7'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);
;
/* ========================================================================
 * Bootstrap: dropdown.js v3.3.7
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.7'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);
;
// metoda pro detekci verze IE
// vraci bud cislo verze a nebo false
function detectIE() {
	var ua = window.navigator.userAgent;

	// Test values; Uncomment to check result …

	// IE 10
	// ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

	// IE 11
	// ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

	// Edge 12 (Spartan)
	// ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

	// Edge 13
	// ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

	var msie = ua.indexOf('MSIE ');
	if (msie > 0) {
		// IE 10 or older => return version number
		return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
	}

	var trident = ua.indexOf('Trident/');
	if (trident > 0) {
		// IE 11 => return version number
		var rv = ua.indexOf('rv:');
		return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
	}

	var edge = ua.indexOf('Edge/');
	if (edge > 0) {
		// Edge (IE 12+) => return version number
		return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
	}

	// other browser
	return false;
}

function lockTouchScreen(lock) {

	if (typeof lock === 'undefined' || lock == true) {
		$('html').addClass('lock-screen-touch');
	} else {
		$('html').removeClass('lock-screen-touch');
	}
}

/**
* Odeslání e-mailu
* @param {string} [sender=''] - Odesílatel.
* @param {string} senderEmail - E-mail odesílatele.
* @param {string} [receiver=''] - Příjemce.
* @param {string} receiverEmail - E-mail příjemce.
* @param {string} message - Zpráva.
* @param {string} subject - Předmět.
* @param {string} [options=''] - Parametry pro nějaké změny v procesu...
* @param {string} auth - Aut. token.
* @param {Function} [onsuccess] - Callback metoda volána při úspěšném volání služby. Vrací objekt data.
* @param {Function} [onerror] - Callback metoda volána při neúspěšném volání služby. Vrací objekt data.
*/
function send_email(sender, senderEmail, receiver, receiverEmail, message, subject, options, auth, onsuccess, onerror) {

	if (typeof senderEmail === 'undefined') {
		throw new TypeError('senderEmail is not defined.');
	}

	if (typeof receiverEmail === 'undefined') {
		throw new TypeError('receiverEmail is not defined.');
	}

	if (typeof message === 'undefined') {
		throw new TypeError('message is not defined.');
	}

	if (typeof subject === 'undefined') {
		throw new TypeError('subject is not defined.');
	}

	if (typeof auth === 'undefined') {
		throw new TypeError('auth is not defined.');
	}


	if (typeof sender === 'undefined') {
		sender = '';
	}

	if (typeof receiver === 'undefined') {
		receiver = '';
	}

	if (typeof options === 'undefined') {
		options = '';
	}

	var service = g_root + '/asmx/wsmarketing.asmx/SendEmail',
		serviceData = new Object();

	serviceData.sender = sender;
	serviceData.senderEmail = senderEmail;
	serviceData.receiver = receiver;
	serviceData.receiverEmail = receiverEmail;
	serviceData.message = message;
	serviceData.subject = subject;
	serviceData.options = options;
	serviceData.auth = auth;

	$.ajax({
		async: true,
		type: 'POST',
		global: false,
		url: service,
		data: JSON.stringify(serviceData),
		contentType: "application/json; charset=utf-8",
		dataType: 'json',
		success: function (data) {
			if (typeof onsuccess !== 'undefined') {
				onsuccess(data);
			}
		},
		error: function (data) {
			if (typeof onerror !== 'undefined') {
				onerror(data);
			}
		}
	});
};;
var App = function () {
	
	// definice metody pro overeni prihlaseneho uzivatele
	var handle_checkAuthentication = function () {
		var myResponse = false,
			httpStatus = null;

		$.ajax({
			type: 'POST',
			async: false,
			global: false,
			url: g_root + '/asmx/wsauth.asmx/checkauthentication',
			contentType: 'application/json; charset=utf-8',
			dataType: 'json',
			success: function (data) {
				var result = data.d;
				httpStatus = data.status;
				myResponse = result.success;
			},
			error: function (data) {
				httpStatus = data.status;
				myResponse = false;
			}
		});
		return myResponse;
	}

	// definice metody pro prenacteni stranky
	var handle_pageReload = function () {
		var hrefOld = window.location,
			hrefNew = hrefOld.protocol + '//' + hrefOld.hostname;

		if (hrefOld.port != '') {
			hrefNew += ':' + hrefOld.port;
		}

		hrefNew += window.location.pathname + window.location.search;
		window.location.href = hrefNew;
	}

	// definice metody pro tlacitka plus a minus
	var handle_formControlInc = function () {

		var formControlInc = function (elControl, method) {
			var $elControl = $(elControl);

			if ('inc' === method) {
				$elControl.val(function (i, oldval) {
					oldval = parseInt(oldval);

					if (typeof oldval === 'number') {
						return ++oldval;
					}

					return oldval;
				});
			}

			if ('dec' === method) {
				$elControl.val(function (i, oldval) {
					oldval = parseInt(oldval);

					if (oldval > 1) {
						return --oldval;
					}

					return oldval;
				});
			}

		};

		if (0 === $('.form-control-inc').length) {
			return;
		}

		// kvuli moznemu ajax initu aby se eventy nekumulovaly - pokud by nebylo tak pri kliknuti na sipku nahoru dochazelo k nekolikanasobnemu volani (pokud se zavalala metoda handle_formControlInc vicekrat)
		$('body').off('click', '.form-control-inc_btn-plus');
		$('body').off('click', '.form-control-inc_btn-minus');
		$('body').off('keydown', '.form-control-inc .form-control');

		$('body').on('click', '.form-control-inc_btn-plus', function (e) {
			formControlInc($(this).data('target'), 'inc');
		});

		$('body').on('click', '.form-control-inc_btn-minus', function (e) {
			formControlInc($(this).data('target'), 'dec');
		});

		$('body').on('keydown', '.form-control-inc .form-control', function (e) {
			
			var key,
				isShift,
				keyNumber = typeof e.key !== 'undefined' ? parseInt(e.key) : Number.NaN;

			if (window.event) {
				key = window.event.keyCode;
				isShift = !!window.event.shiftKey; // typecast to boolean
			} else {
				key = e.which;
				isShift = !!e.shiftKey;
			}

			// pokud je kombinace shift a nejake klavesy
			if (isShift && key !== 16) {

				// shift + (sipky, home, end, insert, delete, page up, page down) - tak povol
				if (e.keyCode >= 35 && e.keyCode <= 40) {
					return;
				} 

				// shift + cokoliv co neni cislo - tak nepovol
				if (isNaN(keyNumber)) {
					e.preventDefault();
				}
			} 

			// Allow: backspace, delete, tab, enter, escape, comma, dot
			if ($.inArray(e.keyCode, [8, 9, 13, 27, 46, 110, 188, 190]) !== -1 ||
				// Allow: Ctrl+A, Command+A
				(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||

				// Allow: home, end, left, right, down, up
				e.keyCode >= 35 && e.keyCode <= 40) {

				// sipka nahoru
				if (e.which === 38) {
					formControlInc(this, 'inc');
				}

				// sipka dolu
				if (e.which === 40) {
					formControlInc(this, 'dec');
				}

				return;
			}

			// vsechno ostatni
			if (isNaN(keyNumber)) {
				e.preventDefault();
			}

			
		});
	};

	// definice pro js comba umoznujici napr hledani
	var handle_js_combo_init = function () {
		if (!$().select2) {
			if (App.debug) {
				console.log('Chybí plugin select2.');
			}
			return;
		}

		var $js_combo = $('.js-combo');

		if (0 === $js_combo.length) {
			return;
		}

		$js_combo.select2({
			//containerCssClass: 'ux-combo',
			dropdownAutoWidth: true
		});
	}

	// definice pro bootstrap dropdowny
	var handle_bootstrap_dropdown_init = function () {
		if (!$().dropdown) {
			if (App.debug) {
				console.log('Chybí plugin bootstrap dropdown.');
			}
			return;
		}

		var $dropdown = $('.dropdown-toggle[data-toggle]');

		if (0 === $dropdown.length) {
			return;
		}

		$dropdown.dropdown();
	}

	// definice pro js tooltip
	var handle_js_tooltip_init = function () {

		if (!$.qtip) {
			if (App.debug) {
				console.log('Chybí plugin qtip.');
			}
			return;
		}

		// defaultni nastaveni
		$.fn.qtip.defaults.position.my = 'bottom right';
		$.fn.qtip.defaults.position.at = 'top center';
		$.fn.qtip.defaults.position.viewport = $(window);
		$.fn.qtip.defaults.position.adjust.method = 'flipinvert';
		$.fn.qtip.defaults.position.adjust.y = 3;

		// init tooltipu na konkretni tridu
		$(document).on('mouseover', '.js-tooltip', function (event) {

			$(this).qtip({
				content: {
					text: function (event, api) {
						var dataTitle = $(this).attr('data-title');

						if ('undefined' !== typeof dataTitle && false !== dataTitle) {
							return dictionary.GetValue(dataTitle);
						}

						return $(this).attr('title');
					}
				},
				show: {
					event: event.type,
					ready: true
				},
				hide: 'click mouseleave', // kvuli elementum, ktere jsou odstraneny z DOM - qtip zustaval zobrazeny
				events: {
					render: function (event, api) {
						// pokud se jedna o ikonkove tlacitko (pouze ikona bez textu) tak uprav pozici tooltipu kvuli paddingu na tlacitku
						if (api.target.hasClass('btn--icon')) {
							// uprava vypoctem 
							//api.set('position.adjust.x', parseInt(api.target.css('padding-left').replace('px', '')) * 2);

							// uprava presunutim targetu pro vykresleni primo na ikonku
							api.set('position.target', api.target.find('[class|="icon"]'));
							api.set('position.adjust.y', 5);
						}

						if (api.target.hasClass('js-tooltip--top-left')) {
							api.set('position.my', 'bottom left');
							api.set('position.at', 'top left');
						}
					},
					hide: function (event, api) {
						api.destroy(true); // Destroy it immediately
					}
				}
			}, event);
		});
	};

	// definice pro jquery validator
	var handle_validator_init = function() {
		if (!$().validate) {
			if (App.debug) {
				console.log('Chybí plugin validate.');
			}
			return false;
		}

		// nastaveni required symbolu na povinne elementy
		App.fields_setValidateInfo($('[data-rule-required]:not([type="search"])'));

		// defaultni nastaveni validatoru
		$.validator.setDefaults({
			focusInvalid: true,
			errorElement: 'div',
			highlight: function (element, errorClass, validClass) {
				var $parent = $(element).closest('.form-group'),
					$validateStatus = $parent.find('.form-control-validate-info'),
					$select2 = $parent.find('.select2-selection'); // autocomplete combo

				$(element).addClass(errorClass).removeClass(validClass);
				$validateStatus.addClass(errorClass).removeClass(validClass);

				// pokud je field tvoren autocomplete combem
				if ($select2.length !== 0) {
					$select2.addClass(errorClass).removeClass(validClass);
				}

			},
			unhighlight: function (element, errorClass, validClass) {
				var $parent = $(element).closest('.form-group'),
					$validateStatus = $parent.find('.form-control-validate-info'),
					$select2 = $parent.find('.select2-selection'); // autocomplete combo

				$(element).removeClass(errorClass).addClass(validClass);
				$validateStatus.removeClass(errorClass).addClass(validClass);

				// pokud je field tvoren autocomplete combem
				if ($select2.length !== 0) {
					$select2.removeClass(errorClass).addClass(validClass);
				}
			},
			errorPlacement: function (error, element) {
				var $parent = $(element).closest('.form-group');

				// pokud nema validovany input obaleni form-group tak najdi libovolny parent
				if ($parent.length == 0) {
					$parent = $(element).parent();
				}

				var $validateStatus = $parent.find('.form-control-validate-info');

				if ($validateStatus.length == 0) {
					$validateStatus = $('<span class="form-control-validate-info error"></span>');
					//$parent.prepend($validateStatus);
					$(element).after($validateStatus);
				}

				// zobrazeni hlasky pres qtip pokud je k dispozici
				if ($.qtip) {

					if ($validateStatus.hasClass('error')) {

						$validateStatus.qtip({
							position: {
								my: 'top right',
								at: 'bottom center'
							},
							content: error,
							show: {
								ready: false,
								event: 'focus keypress',
								target: $(element),
								// spozdeni kvuli css3 animaci na ikonce krizku - pokud nebylo tak se spatne pocitala pozice
								delay: 200
							},
							hide: {
								event: 'blur',
								target: $(element)
							},
							style: {
								classes: 'qtip-danger'
							}
						});
					}

				} else {
					if (App.debug) {
						console.log('Pro zobrazení chybové hlašky chybí plugin qtip.');
					}
				}
			},
			success: function (error, element) {
				
				var $parent = $(element).closest('.form-group');

				if (0 == $parent.length) {
					$parent = $(element).parent();
				}

				var $validateStatus = $parent.find('.form-control-validate-info');

				if ($.qtip) {
					// odstraneni bindingu na qtip pokud je input vyplnen spravne
					$validateStatus.qtip('destroy', true);
				}

				$validateStatus.remove();
			}
		});

		// custom metoda pro validaci vyplneni minimalne jedne polozky ve skupine
		$.validator.addMethod('require_from_group', function (value, element, options) {
			var $fields = $(options[1], element.form),
				$fieldsFirst = $fields.eq(0),
				validator = $fieldsFirst.data('valid_req_grp') ? $fieldsFirst.data('valid_req_grp') : $.extend({}, this),
				isValid = $fields.filter(function () {
					return validator.elementValue(this);
				}).length >= options[0];

			// Store the cloned validator for future validation
			$fieldsFirst.data('valid_req_grp', validator);

			// If element isn't being validated, run each require_from_group field's validation rules
			if (!$(element).data('being_validated')) {
				$fields.data('being_validated', true);
				$fields.each(function () {
					validator.element(this);
				});
				$fields.data('being_validated', false);
			}
			return isValid;
		}, jQuery.validator.format(dictionary.GetValue('msg_err_one')));

		// kontrola rozsahu mezi dvema hodnotami
		$.validator.addMethod('myrange', function (value, element, param) {
			value = strToInt(value);
			return this.optional(element) || (value >= param[0] && value <= param[1]);
		}, jQuery.validator.format(dictionary.GetValue('msg_err_value')));

		// kontrola data
		$.validator.addMethod('mydate', function (value) {

			try {
				const date = new Date(value);
				const isValid = date instanceof Date && !isNaN(date);

				if (isValid) {
					return date.toLocaleDateString();
                }

			}
			catch {
				return false
			}

			return false;
		}, jQuery.validator.format(dictionary.GetValue('msg_err_value')));

		// kontrola PSČ
		$.validator.addMethod("zip", function (value, element) {
			//povoluj zápisy 123 45 nebo 12345
			return this.optional(element) || /^\d{3} ?\d{2}$/.test(value);
		}, jQuery.validator.format(dictionary.GetValue('msg_err_zip')));

		// kontrola telefonu
		$.validator.addMethod("phone", function (value, element) {
			//telefonní číslo se musí skládat ze sekvence minimálně devíti znaků, kterými smějí být číslice 0–9, kulaté závorky, lomítko, tečka, pomlčka a mezera; této sekvenci může (ale nemusí) předcházet znak +
			return this.optional(element) || /^[+]?[()/0-9. -]{9,}$/.test(value);
		}, jQuery.validator.format(dictionary.GetValue('msg_err_phone')));

		// kontrola URL
		$.validator.addMethod("url", function (value, element) {
			const pattern = new RegExp(
				'^(https?:\\/\\/)?' + // protocol
				'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
				'((\\d{1,3}\\.){3}\\d{1,3}))' + // OR IP (v4) address
				'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
				'(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
				'(\\#[-a-z\\d_]*)?$', // fragment locator
				'i'
			);
			return this.optional(element) || pattern.test(value);
		}, jQuery.validator.format(dictionary.GetValue('msg_err_url')));

		$.validator.addMethod("notEqual", function (value, element, param) {
			return this.optional(element) || value != param;
		}, "Zadejte prosím jinou (ne výchozí) hodnotu.");

		// automaticka validace formulare s prislusnou classou validate
		$('.validate').each(function () {
			$(this).validate();
		});
	}

	// metoda pro rucni validaci formulare
	var handle_form_is_valid = function (form) {
		if (!$().validate) {
			if (App.debug) {
				console.log('Chybí plugin validate.');
			}
			return false;
		}

		if ('undefined' === typeof form) {
			console.log('Není definován form');
			return false;
		}

		if (!$(form).validate().form()) {
			return false;
		}

		return true;
	}

	// definice pro jquery kalendar
	var handle_datepicker_init = function () {

		var $js_datepicker = $('.js-datepicker');

		if (0 === $js_datepicker.length) {
			return;
		}

		if (!$().datepicker) {
			if (App.debug) {
				console.log('Chybí plugin datepicker.');
			}
			return;
		}

		$js_datepicker.datepicker({
			changeMonth: true,
			changeYear: true,
			showButtonPanel: false,
		});
	}

	// definice pro detailni nahledy obrazku
	var handle_picture_detail_init = function () {
		if (!$().fancybox) {
			if (App.debug) {
				console.log('Chybí plugin fancybox pro zobrazeni detailu obrazku.');
			}
			return;
		}

		var $picture = $('.fn-detail-pic');

		if (0 === $picture.length) {
			return;
		}

		// defaultni nastaveni pro detailni obrazky
		var defOpts = {
			nextMethod: 'resizeIn',
			nextSpeed: 250,
			prevMethod: false,
			wrapCSS: 'detail-popup-gallery'
		}

		// konkreti nastaveni pro detailni obrazky
		var imgOpts = {
			helpers: {
				title: null,
				overlay: {
					locked: false
				},
				thumbs: {
					width: 100,
					height: 100,
					source: function (current) {
						return $(current.element).data('thumbnail');
					}
				}
			}
		}

		// init pro detailni obrazky
		$('.fn-detail-pic').fancybox($.extend({}, defOpts, imgOpts));

		// uprava animace zobrazeni okna
		(function ($, F) {
			F.transitions.resizeIn = function () {
				var previous = F.previous,
					current = F.current,
					startPos = previous.wrap.stop(true).position(),
					endPos = $.extend({ opacity: 1 }, current.pos);

				startPos.width = previous.wrap.width();
				startPos.height = previous.wrap.height();

				previous.wrap.stop(true).trigger('onReset').remove();

				delete endPos.position;

				current.inner.hide();

				current.wrap.css(startPos).animate(endPos, {
					duration: current.nextSpeed,
					easing: current.nextEasing,
					step: F.transitions.step,
					complete: function () {
						F._afterZoomIn();

						current.inner.fadeIn("fast");
					}
				});
			};

		}(jQuery, jQuery.fancybox));
	}

	var handle_js_scrollbar_init = function () {
		$('.js-scrollbar').each(function () {
			new SimpleBar(this);
		});
	}

	var handle_unwanted_footer_title_collapse = function (mobile_breakpoint) {
		if (mobile_breakpoint == undefined) return;
		$anchors = $('.page-footer .panel-title a');

		const disable_collapse = function () {
			let success = false;

			// odebere možnost rozkliknutí sekce v patičce u větších rozlišení
			if (parseInt($(window).width()) > mobile_breakpoint) {
				$anchors.removeAttr('data-toggle data-target');
				success = true; 
			}
			return success;
		}

		// spuštění při změně velikosti okna
		$(window).on('resize', function () {
			if (!disable_collapse()) {
				$anchors.each(function () {
					$(this).attr({ 'data-toggle': "collapse", 'data-target': $(this).attr("href") });
				})
			}
		});

		// spuštění hned ze startu
		disable_collapse();
	}

	return {

		// debug mod - vypisuje do konzole ruzne informace a prubehu scriptu
		debug: false,
		// nastaveni jestli pouzit ajaxove overeni prihlaseneho uzivatele
		use_checkAuthentication: true,

		// nastaveni aplikace
		settings: {
			openClass: 'is-open',
			activeClass: 'active',
			maxContainerWidth: 1450,
			deviceScreens: {
				mxs: 320,
				xxs: 480,
				xs: 600,
				sm: 768,
				md: 992,
				lg: 1200,
				xl: 1450
			}
		},

		// ruzne aplikacni property potrebne pro beh nekterych scriptu
		props: {
			currMouseposition: {
				x: -1,
				y: -1
			},
			isPageHp: false,
			isShowFixedBar: false
		},

		// test zda-li jde o dotykove zarizeni
		is_touch: function () {
			return Modernizr.touchevents;
		},

		// pokud je parametr "use_checkAuthentication" nastaven na true overeni prihlaseneho uzivatele
		// vraci true nebo false
		is_logged: function() {
			if (App.use_checkAuthentication) {
				return handle_checkAuthentication();
			} else {
				return true;
			}
		},

		// overuje autetifikaci uzivatele
		checkAuthentication: function() {
			return handle_checkAuthentication();
		},

		// slouzi pro prenacteni stranky
		pageReload: function() {
			handle_pageReload();
		},

		// overi session prihlaseneho uzivatele a pokud neni prihlasen tak prenacte stranku
		checkSession: function() {
			if (!this.is_logged()) {
				this.pageReload();
				return false;
			}
			return true;
		},

		// rucni validace formulare
		form_is_valid: function (form) {
			return handle_form_is_valid(form);
		},

		// doplneni hvezdicek na elementy ktere jsou maji byt required dle vstupniho pole
		fields_setValidateInfo: function (fieldsArr) {
			if (typeof fieldsArr == 'fieldsArr' && fieldsArr.length == 0) {
				return;
			}

			$.each(fieldsArr, function (index, el) {
				var $this = $(el),
					$parent = $this.parent(),
					$validateStatus = $parent.find('.form-control-validate-info');

				$this.addClass('is-required');

				if ($validateStatus.length == 0) {
					$validateStatus = $('<span class="form-control-validate-info"></span>');
					$this.after($validateStatus);
				}
			});
		},

		// reset validatoru
		validator_reset: function (formID) {

			if ('undefined' == formID) {
				console.log('Nebylo zadáno ID pro reset validace formuláře.');
				return;
			}

			var $form = $('#' + formID);

			if (0 == $form.length) {
				console.log('Formulář neexistuje - nelze provést reset validátoru.');
			}

			$form.find('.form-control-validate-info').remove();

			$form.find('label.error').remove();
			$form.find('.error').removeClass('error');
			$form.find('.is-required').removeClass('is-required');

			// unbind validatoru z formulare pro nove nabindovani validacnich pravidel
			$.removeData($form.get(0), 'validator');
		},

		// init pluginu
		plugins: function() {
			// init pro validator
			handle_validator_init();

			// increment a decrement pro inputy s plus a minus
			handle_formControlInc();

			// javascriptove comboboxy
			handle_js_combo_init();

			// tooltip
			handle_js_tooltip_init();

			// bootstrap dropdown
			handle_bootstrap_dropdown_init();

			// jquery kalendar
		    handle_datepicker_init();

			// velke nahledy obrazku
			handle_picture_detail_init();

			// scrollbar reseny javascriptem
			handle_js_scrollbar_init();

			// vypnout sbalování po kliknutí na nadpis v patičce (na obrazovkách větších než breakpoint)
			handle_unwanted_footer_title_collapse(this.settings.deviceScreens.xs);
		},

		// pluginy ktere se maji po ajaxu znovu nabindovat + dalsi vetsi po ajaxu
		ajax_init: function() {
			// TODO
			this.plugins();
		},

		init: function () {
			this.plugins();

			// pokud se jedna o ie tak dopln do zahlavi prislusnou tridu
			var ieVersion = detectIE();
			if (ieVersion !== false) {
				$('html').addClass('ie');
			}

			// uprava pro UX kombo box aby se dal stylovat disablovany stav
			$('.ux-combo_field[disabled]').each(function () {
				$(this).closest('.ux-combo').addClass('disabled');
			});
		}
	}
}();

(function( $ ) {
	jQuery(document).ready(function () {
		App.init();
		cookiesConsent();
	});
})(jQuery);

function cookiesConsent() {
	if (!window.cookieConsent) {
		console.error("Chybí plugin 'CookieConset'.");
		return;
	}
	if (typeof GLOBAL_CONSENT !== 'undefined' && strToBool(GLOBAL_CONSENT, false)) {
		return;
	}

	cookieConsent.init({
		"cookieRules": [
			{
				"code": "necessary",
				"label": translatDic.get("c.CookieConsent.cookieRule.necessary.label"),
				"summary": translatDic.get("c.CookieConsent.cookieRule.necessary.summary"),
				"description": translatDic.get("c.CookieConsent.cookieRule.necessary.description"),
				"checked": true,
				"disabled": true
			},
			{
				"code": "functional",
				"label": translatDic.get("c.CookieConsent.cookieRule.functional.label"),
				"summary": translatDic.get("c.CookieConsent.cookieRule.functional.summary"),
				"description": translatDic.get("c.CookieConsent.cookieRule.functional.description")
			},
			{
				"code": "analytics",
				"label": translatDic.get("c.CookieConsent.cookieRule.analytics.label"),
				"summary": translatDic.get("c.CookieConsent.cookieRule.analytics.summary"),
				"description": translatDic.get("c.CookieConsent.cookieRule.analytics.description")
			},
			{
				"code": "marketing",
				"label": translatDic.get("c.CookieConsent.cookieRule.marketing.label"),
				"summary": translatDic.get("c.CookieConsent.cookieRule.marketing.summary"),
				"description": translatDic.get("c.CookieConsent.cookieRule.marketing.description")
			}
		],
		"localization": {
			"heading": translatDic.get("c.CookieConsent.localization.heading"),
			"headingContent": translatDic.get("c.CookieConsent.localization.headingContent"),
			"description": translatDic.get("c.CookieConsent.localization.description"),
			"btnSetAll": translatDic.get("c.CookieConsent.localization.btnSetAll"),
			"btnSetCustom": translatDic.get("c.CookieConsent.localization.btnSetCustom"),
			"btnReject": translatDic.get("c.CookieConsent.localization.btnReject"),
			"btnCustomChoices": translatDic.get("c.CookieConsent.localization.btnCustomChoices"),
			"btnMore": translatDic.get("c.CookieConsent.localization.btnMore"),
			"btnLess": translatDic.get("c.CookieConsent.localization.btnLess"),
			"btnClose": translatDic.get("c.CookieConsent.localization.btnClose")
		},
		"palette": {
			"primaryColor": "#e21b52",
			"secondaryColor": "#1e88e5",
			"textColor": "#000000"
		},
		"typography": {
			"fontFamily": "Gotham, sans-serif",
			"h1": {
				"fontSize": "2.2857142857142856rem",
				"fontWeight": 700
			},
			"body2": {
				"fontSize": "1rem",
				"fontWeight": 300
			}
		},
		"layout": "sidebar",
		"options": {
			"btnRejectInvisible": true,
			"maximalize": false
		}
	});
};
// definice hlavniho menu
var MainMenu = new ElxNav({
	clickCallBacks: {
		1: function (li) {
			var _elxNav = this,
				$item = $(li);

			Header.closeAllOpenBoxes('headMainMenu');

			_elxNav.navChildOpen($item);
		},
		3: function (li) {
			_loadAjxNav.call(this, li, 'head');
		}
	},
	afterInit: function (nav) {
		if (nav.device !== 'mobile' || window.innerWidth > App.settings.deviceScreens.sm) {
			return;
		}

		var $nav = nav.$menu,
			$isCurrent = $nav.find('.is-current:last');

		if ($isCurrent.length > 0) {
			$isCurrent.parents('li').addClass(nav.openClass);
		}
	}
});

// definice uzivatelskeho menu
var UserMenu = function () {
	var boxId = 'headUserMenu',
	$headUserMenu;

	return {
		open: function () {
			Header.closeAllOpenBoxes(boxId);
		},
		closeNav: function () {
			if (typeof $headUserMenu === 'undefined') {
				this.init();
			}

			$headUserMenu.find('.open').removeClass('open');
		},
		init: function () {
			var _this = this;
			$headUserMenu = $('#headUserMenu');

			$headUserMenu.find('.dropdown').on('show.bs.dropdown', function () {
				_this.open();
			});
		}
	};
}();

var Header = function () {

	/*
	 * Kosik v zahlavi (objekt)
	 */
	var basketInfo = function () {

		var inpCur = $('#BasketCurID').val(),
			boxId = 'basketInfo',
			openClass = 'is-open',
			$basketInfo = {},
			$basketInfoOverviewBox = {},
			isOpen = false;

		// init jquery objektu
		var _jQElInit = function () {
			$basketInfo = $('#' + boxId);
			$basketInfoOverviewBox = $('#' + boxId + '_overviewBox');
		}

		// nahrani boxu s polozkama kosiku
		var _loadData = function () {
			var ajxPage = 'basketinfo_ajx.aspx',
				ajxUrl = g_root + '/ajaxpages/' + ajxPage,
				inpCur = $('#BasketCurID').val(),
				preloader = new ElxPreloader($('#' + boxId + '_preloader'), { displayMode: 'replaceEl' });

			if (!App.checkSession()) {
				return;
			}

			preloader.start();

			$.ajax({
				type: 'GET',
				global: false,
				url: ajxUrl,
				dataType: 'html',
				success: function (data) {
					preloader.stop();

					$('#' + boxId + '_btnToggle').after(data);

					_jQElInit();
					
					//$("#BasketID").val($("#bas_bah_id").val());
					//$('#' + boxId + '_price').html((new Number($('#bas_price_cdp').val())).numberFormat('# ### ###' + objCurrency[inpCur].symbol));

					$basketInfo.addClass(openClass);
					isOpen = true;
				}
			});
		}

		return {
			isOpen: function() {
				return isOpen;
			},
			open: function () {
				Header.closeAllOpenBoxes(boxId);

				if (0 === $basketInfoOverviewBox.length) {
					_loadData();
				} else {
					$basketInfo.addClass(openClass);
					isOpen = true;
				}
			},
			close: function () {

				// init jQuery objektu
				_jQElInit();

				$basketInfo.removeClass(openClass);
				isOpen = false;
			},
			toggle: function () {
				if ($basketInfo.hasClass(openClass)) {
					this.close();
				} else {
					this.open();
				}
			},
			overviewBox_remove: function () {

				// init jQuery objektu
				_jQElInit();

				$basketInfoOverviewBox.remove();
			},
			init: function () {
				var _this = this;

				_jQElInit();

				// kvuli moznosti zavrit box kliknutim bokem do stranky - zastavi se probublavani na child elementy
				$('body').on('click', $basketInfo.selector, function (e) {
					e.stopPropagation();
				});

				$(document).on('click', function (e) {

					if ($basketInfo.hasClass(openClass) && !$basketInfoOverviewBox.is(e.target)) {
						_this.close();
					}
				});
			}
		}
	}();

	// binding udalosti pro ovladani kosiku v zahlavi 
	var handle_basketInfo = function() {

		basketInfo.init();

		if (App.is_touch()) {
			// otevreni a zavreni kosiku kliknutim na tlacitko
			$('body').on('click', '#basketInfo_btnToggle', function (e) {
				e.stopPropagation();
				e.preventDefault();

				basketInfo.toggle();
			});
		} else {
			$('#basketInfo').hoverIntent({
				over: function () {
					basketInfo.open();
				},
				timeout: 200,
				interval: 100,
				out: function () {
					basketInfo.close();
				}
			});
		}
	}

	/*
	 * Seznam kosiku v zahlavi (objekt)
	 */
	var basketsList = function () {
		var boxId = 'basketsList',
			openClass = 'is-open',
			current_b2c = 0;
			$basketsList = {}, // wrapper celeho baskets listu
			$basketsListItems = {}, // element se seznamem kosiku a nabided
			$placeholder = {}, // element do ktereho se vklada basket list
			isOpen = false;

		// init jquery objektu
		var _jQElInit = function () {
			$basketsList = $('#' + boxId);
			$basketsListItems = $('#' + boxId + '_items');
			$placeholder = $('#' + boxId + '_placeholder');
			current_b2c = parseInt($('input[name="b2c"]').val());
		}

		// privatni metoda pro nahrani kosiku a nabidek do boxu s polozkama kosiku
		var _loadData = function (b2c) {
			var ajxPage = 'basketlistinfo_ajx.aspx',
				ajxUrl = g_root + '/ajaxpages/' + ajxPage,
				preloader = new ElxPreloader($('#' + boxId + '_preloader'), { displayMode: 'replaceEl' });

			if (!App.checkSession()) {
				return;
			}

			preloader.start();

			$.ajax({
				type: 'GET',
				global: false,
				url: ajxUrl,
				data: { b2c: b2c },
				success: function (data) {
					preloader.stop();

					$placeholder.html(data);

					_jQElInit();
					
					$('input[name="b2c"]').val(b2c);

					_open(b2c);
				}
			});
		}

		var _setHeightListItems = function () {
			var vh = window.innerHeight,
				$basketsListOverviewBox = $('#' + boxId + '_overviewBox'),
				overviewBoxPos = $basketsListOverviewBox.offset().top - $(window).scrollTop();

			if (vh < overviewBoxPos + $basketsListOverviewBox.outerHeight(true)) {
				var $overviewBoxChilds = $basketsListOverviewBox.children().not($placeholder),
					childsHeight = 0;

				$overviewBoxChilds.each(function () {
					var _$this = $(this);
					childsHeight += _$this.outerHeight(true);
				});
				return parseInt(vh - overviewBoxPos - childsHeight);
			}

			return $basketsListItems.css('max-height');
		}

		// privatni metoda pro otevreni boxu s kosikama a nabidkama
		var _open = function (b2c) {
			var $btnShowAddForm = $('#' + boxId + '_btnShowAddForm'), // tlacitko pro otevreni formulare novy kosik nebo nabidka
				$btnBaskets = $('#' + boxId + '_btnBaskets'), // tlacitko pro zobrazeni kosiku
				$btnOffers = $('#' + boxId + '_btnOffers'), // tlacitko pro zobrazeni nabidek
				$btnGoAdmin = $('#' + boxId + '_btnGoAdmin'), // tlacitko pro prechod do administrace
				$addFormInp = $('#' + boxId + '_addForm_inp'); // input pro vlozeni nazvu nove polozky

			$btnBaskets.removeClass('selected');
			$btnOffers.removeClass('selected');

			if (b2c === 1) {
				$btnOffers.addClass('selected');
				$btnShowAddForm.find('span').html(dictionary.GetValue('title_new_offer'));
				$addFormInp.attr('placeholder', dictionary.GetValue('title_new_offer_name'));
			} else {
				$btnBaskets.addClass('selected');
				$btnShowAddForm.find('span').html(dictionary.GetValue('title_new_basket'));
				$addFormInp.attr('placeholder', dictionary.GetValue('title_new_basket_name'));
			}
			
			$btnGoAdmin.attr('href', g_root + '/pages/administration/basketadmin.aspx?fb2c=' + b2c);

			$basketsList.addClass(openClass);
			$basketsListItems.css({ 'max-height': _setHeightListItems() + 'px'});
			isOpen = true;
		}

		// privatni metoda po vlozeni noveho kosiku nebo nabidky
		var _addNewBasket_success = function (data, bah_name) {
			if ('undefined' === typeof data && 'undefined' === typeof bah_name) {
				console.log('Nejsou definovany parametry data, bah_name v metode _addNewBasket_success.');
				return;
			}

			_jQElInit();

			var $tplItem = $basketsListItems.find('.item:first-child').clone();

			$basketsListItems.find('.selected').removeClass('selected');

			$tplItem.attr('id', 'bListItem_' + data.bah_id);
			$tplItem.attr('data-itemid', data.bah_id);
			$tplItem.attr('onclick', 'Header.basketsList_control.setActiveBasket(' + data.bah_id + ')');
			$tplItem.find('.item-name').text(bah_name);

			if ($tplItem.find('.item-delete').length > 0) {
				$tplItem.find('.item-delete').attr('onclick', 'Header.basketsList_control.deleteBasketDialog(' + data.bah_id + ')');
			} else {
				$tplItem.append('<button type="button" class="btn item-delete baskets-list_item_btn-delete" onclick="Header.basketsList_control.deleteBasketDialog(' + data.bah_id + ')"><i class="btn_icon icon-delete"></i><span class="btn_label">Smazat</span></button>');
			}

			// metoda basSuccesReload je v productAction.js
			basSuccesReload(data, data.bah_id);

			basketsList.toggleShowAddForm();
			$('#' + boxId + '_addForm_inp').val('');

			$basketsListItems.find('.items-wrap').prepend($tplItem);
			_updateBasketsList();
			return false;
		}

		var _updateBasketsList = function () {
			$basketsListItems.remove();
			basketsList.open();
		}

		return {
			isOpen: function() {
				return isOpen;
			},
			open: function (b2c) {
				Header.closeAllOpenBoxes(boxId);

				// init jQuery objektu
				_jQElInit();

				if ('undefined' === typeof b2c) {
					b2c = current_b2c;
				};

				// nacti data a otevri a nebo jen otevri
				if (0 === $basketsListItems.length || b2c != current_b2c) {
					_loadData(b2c);
				} else {
					_open(b2c);
				}
			},
			close: function () {

				// init jQuery objektu
				_jQElInit();

				$basketsList.removeClass(openClass);
				$basketsListItems.css({ 'max-height': '' });
				isOpen = false;
			},
			toggle: function () {
				if ($basketsList.hasClass(openClass)) {
					this.close();
				} else {
					this.open();
				}
			},

			// metoda pro zobrazeni nebo skryti formulare pro pridani nove polozky
			toggleShowAddForm: function (e) {

				var $btnShowAddForm = $('#' + boxId + '_btnShowAddForm'), // tlacitko pro otevreni formulare novy kosik nebo nabidka
					$addForm = $('#' + boxId + '_addForm'), // formular pro pridani nove polozky
					$addFormInp = $('#' + boxId + '_addForm_inp'); // input pro vlozeni nazvu nove polozky

				$addFormInp.focus(function (e) {
					lockTouchScreen(true);

					// vypocet vysky po otevreni klavesnice
					setTimeout(function () {
						$basketsListItems.css({ 'max-height': _setHeightListItems() + 'px' });
					}, 300);
				});

				$addFormInp.blur(function () {
					lockTouchScreen(false);

					// nastavit puvodni vysku po zavreni klavesnice
					setTimeout(function () {
						$basketsListItems.css({ 'max-height': '' });
						$basketsListItems.css({ 'max-height': _setHeightListItems() + 'px' });
					}, 300);
				});

				if ($addForm.hasClass(openClass)) {
					$btnShowAddForm.removeClass(openClass);
					$addForm.removeClass(openClass);
					$addForm.parent().removeClass(openClass);
					$addForm.hide();

					$addFormInp.trigger('blur');
				} else {
					$btnShowAddForm.addClass(openClass);
					$addForm.addClass(openClass);
					$addForm.parent().addClass(openClass);
					$addForm.show();
					
					$addFormInp.trigger('focus');
				}
			},

			// metoda pro pridani noveho
			addNewBasket: function () {

				// init jQuery objektu
				_jQElInit();

				var newName = $('#' + boxId + '_addForm_inp').val();

				if (0 == newName.length && 'undefined' == typeof current_b2c) {
					return false;
				}

				// metoda addBasket je v basketAdmin.js
				addBasket(newName, _addNewBasket_success, current_b2c);
			},

			// zobrazi dialog pro archivaci nebo odstraneni kosiku
			deleteBasketDialog: function (bah_id) {
				if ('undefined' === typeof bah_id) {
					console.log('Neni definovan parametr bah_id v metode deleteBasketDialog.');
					return;
				}

				var tblBtnArchive = '<button type="button" class="btn btn--primary btn--basketList-archive" onclick="archiveBasket(' + bah_id + ', Header.basketsList_control.updateBasketHeadSuccess);$.fancybox.close( true );">' + dictionary.GetValue('btn_archive') + '</button>',
					tplBtnDelete = '<button type="button" class="btn btn--primary btn--basketList-delete" onclick="deleteBasket(' + bah_id + ', Header.basketsList_control.updateBasketHeadSuccess);$.fancybox.close( true );">' + dictionary.GetValue('btn_delete') + '</button>',
					content = '<div class="buttons-area">' + tblBtnArchive + tplBtnDelete + '</div>';

				fancyPopup({ content: content, title: '<h1>' + dictionary.GetValue('msg_delete_or_archive') + '</h1>'});
			},

			// nastavi zvoleny kosik jako aktivni
			setActiveBasket: function (bah_id) {

				if ('undefined' === typeof bah_id) {
					console.log('Neni definovan parametr bah_id v metode setActiveBasket.');
					return;
				}

				var $setActiveItem = $('#bListItem_' + bah_id),
					$basketsListWrapItems = $setActiveItem.parent(),
					itemsArr = [];

				$basketsListWrapItems.find('.selected').removeClass('selected');

				$setActiveItem.fadeOut(function () {
					$basketsListWrapItems.prepend($setActiveItem);
					$setActiveItem.addClass('selected');
					$basketsListWrapItems.find('.item').each(function () {
						itemsArr.push($(this).data('itemid'));
					});
				});

				$setActiveItem.fadeIn(function () {
					// metoda setBasket je v basketAdmin.js
					// metoda basSuccesReload je v productAction.js
					sortBasket(itemsArr.toString(), basSuccesReload);
				});
			},

			updateBasketHeadSuccess: function (data, pro_id) {

				// init jQuery objektu
				_jQElInit();

				// vymazani seznamu kosiku v zahlavi pro opetovne nacteni
				$basketsListItems.remove();

				// metoda basSuccesReload je v productAction.js
				if ('undefined' === typeof data && data == null) {
					return;
				}
				basSuccesReload(data, data.bah_id);
			},

			init: function () {
				var _this = this;

				// init jQuery objektu
				_jQElInit();

				// kvuli moznosti zavrit box kliknutim bokem do stranky - zastavi se probublavani na child elementy
				$('body').on('click', $basketsList.selector, function (e) {
					e.stopPropagation();
				});

				$(document).on('click', function (e) {

					if ($basketsList.hasClass(openClass) && !$basketsListItems.is(e.target)) {
						_this.close();
					}
				});
			}
		}
	}();

	// binding udalosti pro ovladani seznamu kosiku v zahlavi 
	var handle_basketsList = function () {

		basketsList.init();

		if (App.is_touch()) {
			// otevreni a zavreni seznamu kosiku kliknutim na tlacitko
			$('body').on('click', '#basketsList_btnToggle', function (e) {

				e.stopPropagation();
				e.preventDefault();

				basketsList.toggle();
			});
		} else {
			$('#basketsList').hoverIntent({
				over: function () {
					basketsList.open();
				},
				timeout: 200,
				interval: 100,
				out: function () {
					basketsList.close();
				}
			});
		}
	}

	/*
	 * Vyhledavaci formular
	 */
	var searchForm = function () {
		var boxId = 'searchForm',
			openClass = App.settings.openClass,
			$searchForm,
			$searchFormWrap,
			$searchFormTouchBtn,
			isOpen = false;

		$('#quick_search_fulltext').focus(function () {
			// slouzi pro nastaveni kursoru na konec retezce
			$(this).putCursorAtEnd();
		});

		return {
			open: function () {
				Header.closeAllOpenBoxes(boxId);
				$searchFormWrap.addClass(openClass);
				if ($('#quick_search_fulltext').val() != "") {
					$('#quick_search_fulltext').putCursorAtEnd().trigger('focus');
				}
				isOpen = false;
				$('body').addClass('is-search-open');
			},
			close: function () {
				$searchFormWrap.removeClass(openClass);
				isOpen = false;
				$('body').removeClass('is-search-open');
			},
			toggle: function () {
				if ($searchFormWrap.hasClass(openClass)) {
					this.close();
				} else {
					this.open();
				}
			},
			init: function () {
				var _this = this;

				$searchForm = $('#' + boxId);
				$searchFormWrap = $('#' + boxId + '_wrap');
				$searchFormTouchBtn = $('#' + boxId + '_touchBtn');

				$('body').on('click', '#' + boxId + '_wrap', function (e) {
					e.stopPropagation();
				});

				$(document).on('click', function (e) {

					if ($searchFormWrap.hasClass(openClass) && !$searchForm.is(e.target)) {
						_this.close();
					}
				});

				$('body').on('click', '#' + boxId + '_touchBtn', function (e) {
					e.stopPropagation();
					e.preventDefault();

					searchForm.toggle();
				});

				if ($('.page-hp').eq(0).length === 1) {
					searchForm.toggle();
				}
			}
		}
	}();

	return {

		basketInfo_control: function() {

			return {
				// otevreni boxu s polozkami kosiku
				open: function () {
					basketInfo.open();
				},
				// zavreni boxu s polozkami kosiku
				close: function () {
					basketInfo.close();
				},
				overviewBox_remove: function () {
					basketInfo.overviewBox_remove();
				}
			}
		}(),

		basketsList_control: function () {

			return {
				// otevreni boxu se seznamem kosiku
				open: function (b2c) {
					basketsList.open(b2c);
				},
				// zavreni boxu se seznamem kosiku
				close: function () {
					basketsList.close();
				},
				// vytvoreni noveho kosiku / nabidky
				addNewBasket: function () {
					basketsList.addNewBasket();
				},
				// metoda pro zobrazeni nebo skryti formulare pro pridani nove polozky
				toggleShowAddForm: function () {
					basketsList.toggleShowAddForm();
				},
				// metoda zobrazi dialog pro archivaci a nebo odstraneni kosiku
				deleteBasketDialog: function (bah_id) {
					basketsList.deleteBasketDialog(bah_id);
				},
				// metoda nastavi aktivni kosik
				setActiveBasket: function (bah_id) {
					basketsList.setActiveBasket(bah_id);
				},
				// metoda aktualizuje box se seznamem kosiku v zahlavi
				// metoda je volana po archivaci nebo smazani kosiku
				updateBasketHeadSuccess: function (data, pro_id) {
					basketsList.updateBasketHeadSuccess(data, pro_id);
				}
			}
		}(),

		closeAllOpenBoxes: function (openedBoxId) {

			if (typeof openedBoxId === 'undefined') {
				this.basketInfo_control.close();
				this.basketsList_control.close();
				searchForm.close();
				MainMenu.closeNav();
				UserMenu.closeNav();
				return;
			}

			subCategoryMenu.close();

			if ('basketInfo' !== openedBoxId) {
				this.basketInfo_control.close();
			}

			if ('basketsList' !== openedBoxId) {
				this.basketsList_control.close();
			}

			if ('searchForm' !== openedBoxId) {
				searchForm.close();
			}

			if ('headMainMenu' !== openedBoxId && MainMenu.isOpen) {
				MainMenu.closeNav();

				MainMenu.$menu.removeClass('main-nav_is-open');
				$('#headMainMenu_btnToggle').removeClass(App.settings.openClass);
			}

			if ('headUserMenu' !== openedBoxId) {
				UserMenu.closeNav();
			}

			return;
		},

		showQuickSettings: function () {
			var url = g_root + '/ajaxpages/quicksettings_ajx.aspx';

			$.ajax({
				type: 'POST',
				url: url,
				success: function (data) {
					fancyPopup({ content: data, wrapCSS: 'popup-quick-settings' });

				}
			});
		},

		init: function () {
			handle_basketInfo();
			handle_basketsList();
			searchForm.init();
		}
	}
}();

// top fixed bar
(function ($) {

	function headerFixedBar(options) {

		var _defaults = {
			showBar: false,
			headerID: '',
			componentsIDs: [],
			fixedBarTpl: '<div id="topFixedBar" class="header-fixed-bar"><div class="container"><div class="header-fixed-bar_in apender"></div></div></div>',
			openClass: 'is-show'
		};

		var _opts = {},
			_scrollTop = 0,
			_headerHeight = 0,
			_tolerance = 40; // cca dle vysky prvni urovne menu

		var $header = {}, // jquery objekt zahlavi
			$fixedBar = {}, // jquery objekt fixniho zahlavi
			objElements = []; // jquery objekty elemetu ktere sepresouvaji

		var _getHeaderHeight = function () {

			if (null == $header) {
				return 0;
			}

			return $header.outerHeight();
		}

		var _onscroll = function () {

			// pokud je nulova vyska zahlavi tak nema smysl pokracovat - pravdepodobne nebyl zadan header
			if (0 === _headerHeight) {
				console.log('headerFixedBar: neznámá výška záhlaví.');
				return;
			}

			// pokud neexistuji zadne komponenty pro umisteni do fixed baru tak nema smysl pokracovat
			if (0 === _opts.componentsIDs.length) {
				console.log('headerFixedBar: nejsou definovány elemnty pro přesun.');
				return;
			}

			if (0 == $fixedBar.find('.apender').length) {
				console.log('headerFixedBar: není definován apender.');
				return;
			}

			// hodnota horniho odscrolovani
			_scrollTop = $(window).scrollTop();

			// scrolujeme dolu
			if (_scrollTop > (_headerHeight - _tolerance) && false == _opts.showBar) {
				_opts.showBar = true;
				
				var _objElementsLength = objElements.length;
				for (i = 0; i < _objElementsLength; i++) {
					var $current = objElements[i];

					$('<div class="placeholder_' + _opts.componentsIDs[i] + '"></div>').insertAfter($current);
					$fixedBar.find('.apender').append($current);
				}

				$('body').append($fixedBar);

				$fixedBar.animate({
					'top': '0'
				}, {
					duration: 200,
					queue: false,
					complete: function () {
						$fixedBar.addClass(_opts.openClass);
					}
				});
			}

			// scrolujeme nahoru
			if (_scrollTop < (_headerHeight - _tolerance) && true == _opts.showBar) {
				_opts.showBar = false;
				
				$fixedBar.removeClass(_opts.openClass);

				var _objElementsLength = objElements.length;
				for (i = 0; i < _objElementsLength; i++) {
					var $current = objElements[i],
						$placeholder = $('.placeholder_' + _opts.componentsIDs[i]);

					$current.insertAfter($placeholder);
					$placeholder.remove();					
				}

				$fixedBar.animate({
					'top': $fixedBar.outerHeight() * (-1) + 'px'
				}, {
					duration: 200,
					queue: false,
					complete: function () {
						$fixedBar.remove();
					}
				});
			}
		}

		var _init = function () {
			// init jquery objetu
			$header = $('#' + _opts.headerID);
			$fixedBar = $(_opts.fixedBarTpl);

			if (0 < $('.page-hp').length) {
				$fixedBar.addClass('page-hp');
			}

			_headerHeight = _getHeaderHeight(); // celkova vyska zahlavi

			var _componentsIDsLength = _opts.componentsIDs.length;

			// vytvareni jquery objektu dle id
			for (i = 0; i < _componentsIDsLength; i++) {
				objElements.push($('#' + _opts.componentsIDs[i]));
			}
		}

		// pokud neexistuje objekt options tak ukonci
		if ('undefined' === typeof options && 'object' !== typeof options) {
			return;
		}

		// pokud neexistuje id zahlavi tak ukonci
		if ('undefined' === typeof options.headerID && 0 === options.headerID.length) {
			return;
		}

		// merging nastaveni s defaultnim nastavenim
		_opts = $.extend({}, _defaults, options);

		// prvotni init
		_init();

		// volani handleru pri scrolovani
		$(window).on('scroll', _onscroll);
	}

	$(document).ready(function () {

		new headerFixedBar({
			headerID: 'pageHeader',
			componentsIDs: ['searchForm_touchBtn', 'headerBasket', 'headMainMenu_btnToggle', 'searchForm_wrap']
		});
	});

}(jQuery));

jQuery(document).ready(function () {
	var body = $('html, body');

	// init komponent v zahlavi
	Header.init();

	// init hlavniho menu
	MainMenu.init('#headMainMenu');

	// init uzivatelskeho menu menu
	UserMenu.init();

	// kvuli tomu aby slo uplne cele hlavni menu zavrit kliknutim bokem do stranky
	MainMenu.$menu.on('click', function (e) {
		e.stopPropagation();
	});

	// tlacitko ktere je zobrazeno ve zahlavi pri scrolovani
	$('body').on('click', '#headMainMenu_btnToggle', function (e) {
		e.stopPropagation();

		var $this = $(this),
			openClass = App.settings.openClass;

		Header.closeAllOpenBoxes('headMainMenu');
		
		if (MainMenu.isOpen) {
			$this.removeClass(openClass);
			MainMenu.$menu.removeClass('main-nav_is-open');
			MainMenu.closeNav();
		} else {

			$this.addClass(openClass);
			MainMenu.$menu.addClass('main-nav_is-open');

			if (MainMenu.device === 'desktop') {
				// pokud jsem na hore tak jen otevri
				if ($(window).scrollTop() === 0) {
					MainMenu.navChildOpen(MainMenu.$menu.find('.level-1 > .is-current-floor'));
				} else {
					// jinak scroluj nahoru
					body.stop().animate({ scrollTop: 0 }, '100', 'swing', function () {
						MainMenu.navChildOpen(MainMenu.$menu.find('.level-1 > .is-current-floor'));
					});
				}
			}
			
			if (MainMenu.device === 'mobile') {
				var $currentItems = MainMenu.$menu.find('.is-current-floor, .is-current');

				$currentItems.each(function (index, item) {
					var $li = $(item);

					$li.addClass(openClass);

					// uroven ktera se donacita ajaxem - nacteni posledni urovne
					if (index === 2) {
						_loadAjxNav.call(MainMenu, $li, 'head');
					}
				});
				
				MainMenu.openNav();
			}
		}
	});

	$(document).on('click', function (e) {

		if (window.innerWidth > App.settings.deviceScreens.sm) {
			return;
		}

		if (!MainMenu.$menu.is(e.target)) {

			MainMenu.$menu.removeClass('main-nav_is-open');
			$('#headMainMenu_btnToggle').removeClass(App.settings.openClass);
		}
	});
});;
/*
*       BASKET - START
*************************************************************************************************************
*/
function listBasketSuccess(addata, pro_id) {
    basSucces(addata, pro_id);

    var $basketBox = $('#basketInfo'),
		$productBox = $('#product_' + pro_id);

	// pokud neexistuje produkt tak se podivej jestli nejde o produkt v naseptavaci
    if (0 == $productBox.length) {
    	$productBox = $('#txtQty_' + pro_id).closest('.whisperer_item');
    }

    var $img = $productBox.find('.pro-img').eq(0);

    $img.effect('transfer', { to: $basketBox }, 800);

    var $transferBox = $('.ui-effects-transfer:last');
    $transferBox.css({
        'width': $img.outerWidth() + 'px !important',
        'height': $img.outerHeight() + 'px !important',
        'background-image': 'url(' + $img.attr('src') + ')',
        'background-size': 'cover',
        'background-position': 'center center'
    });

    $basketBox.addClass('is-pro-add');

    $transferBox.animate({
        opacity: 0
    }, {
        queue: false,
        duration: 1000,
        complete: function () {
        	$basketBox.removeClass('is-pro-add');
        }
    });
}
function basSuccesReload(addata, pro_id) {
    if (window.location.href.toLowerCase().indexOf('basket') != -1) {
        reloadPage();
    } else if (window.location.href.toLowerCase().indexOf('basketadmin') != -1) {
        reloadPage();
    } else {
        basSucces(addata, pro_id);
    }
}
function basSucces(addata, pro_id) {
    // cena košíku
    var currency = $('#BasketCurID').val();
    $('#basketInfo_price').html((new Number(addata.price_cur_def_pure)).numberFormat('# ### ### ' + objCurrency[currency].symbol));
    $('#BasketID').val(addata.bah_id);

    $('#basketInfo_itemsCount').html(addata.count_items_pure);

    // smazani boxu s prehledem polozek v kosiku
    Header.basketInfo_control.overviewBox_remove();
}
function basSuccesHead(addata, bai_id) {
    // cena košíku
    var inpCur = $('#BasketCurID').val();
    $('#basketInfo_price').html((new Number(addata.price_cur_def_pure)).numberFormat('# ### ### ' + objCurrency[inpCur].symbol));
    $('#BasketID').val(addata.bah_id);
    // počet položek v košíku
    var count = $('#basketInfo_itemsCount').html();
    $('#basketInfo_itemsCount').html(count - 1);
    $('#basketInfo_overviewBox_itemsCount').html(count - 1);
    //smazání položky
    $('#divBasHead_' + bai_id).fadeOut(function () {
        $(this).remove();
        // pokud je košík prázdný, popup schovám
        if (count == 1)
        	Header.basketInfo_control.close();
    });

}

function addToBasketFromListExternal(pro_id, onsucces) {

	var $txtQty = $('#txtQty_' + pro_id),
		qtyInt = parseInt($txtQty.val());

	if (isNaN(qtyInt) || qtyInt.toString() != $txtQty.val()) {
        displayErrorMessage(dictionary.GetValue('msg_bas_qty_val'), true);
        return;
    }

	var inpCur = $("#BasketCurID").val(),
		qtyStock = 0,
		qtyStockExternal = 0,
		$productBox = $('#product_' + pro_id);

	// pokud neexistuje produkt tak se podivej jestli nejde o produkt v naseptavaci
	if (0 == $productBox.length) {
		$productBox = $('#txtQty_' + pro_id).closest('.whisperer_item');
    }

	// najde ikonu pro preloader
	// kvuli detailu produktu je potreba najit prvni tlacitko koupit v kodu protoze jinak se preloader spoustel na vsech produktech na strance
	var $btn = $productBox.find('.btn-add-basket').eq(0);

	if ($btn.length == 0) {
		// pokud je tlacitko mimo obalujici div productbox tak se jej pokus najit pres pomocny atribut data-pro-element
		$btn = $('.btn-add-basket[data-pro-element="' + pro_id + '"]');
	}
	var preloader = new ElxPreloader($btn.find('.btn_icon'), { displayMode: 'replaceEl' });

	preloader.start();

    addToBasket(pro_id, $txtQty.val(), 0, false,
        function (addata, pro_id) {
            preloader.stop();
            if (addata.hasCrosssel)
            {
                // pro cross-sel typu "Detail produktu"...
                if (addata.crossselTypes.includes(4))
                {
                    if (addata.crossselTypes.includes(1))
                    {
                        // pokud ma produkt zaroven "Produktovy CS", tak po vložení položky CS má dojít k redirectu na stránku s cross-selem
                        onsucces = function () { return redirectToCSPage(pro_id, qtyInt) };
                    }
                    // ... volám funkci pro vložení položek CS
                    addToBasketCrossSellDetail(pro_id, qtyInt, addata, onsucces);
                }
                else
                {
                    // redirect na stránku s cross-selem
                    redirectToCSPage(pro_id, qtyInt);
                }
            }
            else
            {
		        onsucces(addata, pro_id);
            }
        }, 
        0, 0, 0,
        function (addata, pro_id) {
		    preloader.stop();
        }
    );
}

function redirectToCSPage(pro_id, qtyInt) {
    url_redirect({
        url: g_root + "/pages/productpackage.aspx",
        method: "post",
        data: { "pro_id": pro_id, "qty": qtyInt, href: location.href }
    });
}

function ProductExtStockInfo() {
    this.pro_id = 0;
    this.qty = 0;
    this.qtyStock = 0;
    this.qtyStockExternal = 0;
    this.addCount = false;
    this.bai_id = 0;
}

function DeleteBasketItems(bah_id) {
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/DeleteBasketItems",
        data: "{'bah_id':" + bah_id + "}",
        //data: "{'pro_id':" + pro_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var addata = result.additionalData;
                if (addata != null && addata.errorChangeBasket) {
                    ErrorBasket(dictionary.GetValue('msg_product_del_err'));
                } else {
                    if (window.location.href.toLowerCase().indexOf("basket") != -1) {
                        reloadPage();
                    } else {
                        basSucces(result.additionalData, 0);
                    }
                }

            }
        },
        error: function (data) {
        }
    });
}
function deleteToBasketCheck(bah_id) {
    if (bah_id == "")
        return;
    var chk = $("input[name=chkAction]:checked");
    if (chk.length == 0)
        return;
    var id = [];
    chk.each(function (index) {
        if ($(this).val() > 0) {
            id.push($(this).val());
        }
    });
    if (id.length == 0)
        return;

    var items = { items: id, bah_id: bah_id };
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/deleteitems",
        data: JSON.stringify(items),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var addata = result.additionalData;
                if (addata != null && addata.errorChangeBasket) {
                    ErrorBasket(dictionary.GetValue('msg_products_del_err'));
                } else {
                    reloadPage();
                }
            }
        },
        error: function (data) {
        }
    });
}
// kopirovani polozek ze zdroje (obj_id a objSourceType) do kosiku bah_id
function copyBasketItems(bah_id, obj_id, objSourceType) {
    if (bah_id == "")
        return;
    if (obj_id == "")
        return;
    if (objSourceType == "")
        return;
    if (objSourceType == 5) {
        copyBasketItemsFromBasket(bah_id, obj_id);
    } else if (objSourceType == 6) {
        copyBasketItemsFromOrder(bah_id, obj_id);
    }
}
function copyBasketItemsFromBasket(bah_id_new, bah_id_old) {
    var chk = $("input[name=chkAction]:checked");
    if (chk.length == 0)
        return;
    var id = [];
    chk.each(function (index) {
        if ($(this).val() > 0) {
            id.push($(this).val());
        }
    });
    if (id.length == 0)
        return;

    var items = { items: id, bah_id: bah_id_new, obj_id_source: bah_id_old, objSourceType: 5};
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/copyitemsext",
        data: JSON.stringify(items),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var result = data.d;
                if (result != null && result.messages != null) {
                    var addata = result.additionalData;
                    if (addata != null && addata.errorChangeBasket) {
                        ErrorBasket(dictionary.GetValue('msg_products_del_err'));
                    } else {
                        chk.attr('checked', false);
                        displayInfoMessage(dictionary.GetValue('msg_copy_items_success'), true);
                    }
                }

            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function copyBasketItemsFromOrder(bah_id, rel_id) {
    var items = { items: null, bah_id: bah_id, obj_id_source: rel_id, objSourceType: 6 };
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/copyitemsext",
        data: JSON.stringify(items),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null){
                if(result.success) {
                    displayInfoMessage(dictionary.GetValue('msg_copy_items_success'), true);
                } else {
                    if (result.messages != null) {
                        for (var i = 0; i < result.messages.length; i++) {
                            if (result.messages[0].CssClass.toLowerCase() == 'info') {
                                result.messages[0].CssClass = 'important_message';
                            }
                        }
                        displayMessages(result.messages, true);
                    }
                    else {
                        displayErrorMessage(dictionary.GetValue('msg_server_error'), true);
                    }
                }
            }      
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function setRatePriceBasket(el, bah_id) {
	/// <summary>
	/// nastavuje marži na nabídce
	/// <summary>
    if (bah_id == 0)
        return;

    var rate_price_eu = strToInt($("#valueOffer").val());
    var rate_price_eu_type = strToInt($("#typeOffer").val());

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }

    var head = { bah_id: bah_id, rate_price_eu: rate_price_eu, rate_price_eu_type: rate_price_eu_type };
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/changeratepricebasket",
        data: JSON.stringify(head),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null && result.messages.length > 0) {
            	ErrorBasket(dictionary.GetValue('msg_basket_rate_price_err'));
	            return;
            }
            reloadPage();
        },
        error: function (data) {
        }
    });
}

function setRatePriceBasketItems(el) {
	var bah_id = parseInt($("#rate_bah_id").val());
	if (bah_id == "")
		return;

	var rate_price_eu = parseInt($("#txtRatePrice").val());
	var rate_price_eu_type = $("#sRatePriceType").val() == "1" ? true : false;

	var validate = clickValidate(el);
	if (!validate) {
		return;
	}

	var chk = $("input[name=chkAction]:checked");
	if (chk.length == 0)
		return;
	var id = [];
	chk.each(function (index) {
		if ($(this).val() > 0) {
			id.push($(this).val());
		}
	});
	if (id.length == 0)
		return;

	var items = { items: id, bah_id: bah_id, rate_price_eu: rate_price_eu, rate_price_eu_type: rate_price_eu_type };
	$.ajax({
		type: "POST",
		global: false,
		url: g_root + "/asmx/wsproductbasketmulti.asmx/changeratepriceitems",
		data: JSON.stringify(items),
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages != null) {
				var addata = result.additionalData;
				if (addata != null && addata.errorChangeBasket) {
					ErrorBasket(dictionary.GetValue('msg_products_rate_price_err'));
				} else {
					reloadPage();
				}
			}
		},
		error: function (data) {
		}
	});
}

function deleteFromBasket(bah_id, bai_id, onsucces) {
    if (bai_id == "" || bah_id == "")
        return;
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/delete",
        data: "{'bah_id':" + bah_id + ",'bai_id':" + bai_id + "}",
        //data: "{'pro_id':" + pro_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var addata = result.additionalData;
                if (addata != null && addata.errorChangeBasket) {
                    ErrorBasket(dictionary.GetValue('msg_product_del_err'));
                } else {
                    if (window.location.href.toLowerCase().indexOf("basket") != -1) {
                        reloadPage();
                    } else {
                        onsucces(result.additionalData, bai_id);
                    }
                }

            }
        },
        error: function (data) {
        }
    });
}


function addToBasket(pro_id, qty, cur_id, restricted, onsucces, pci_id, pro_id_parent, typeItem, onerror) {
    if (pro_id == "")
        return;
    if (qty <= 0)
        return;
    var bah_id = $("#BasketID").val();

    // preloader
    var box = $('#txtQty_' + pro_id).closest('[class|="product"]');
    if (box.length == 0) {
        var box = $('#txtQty_' + pro_id).closest('.ui-menu-item');
    }
    if (box.find('.add-basket .preloader').length == 0) {
        box.find('.add-basket').prepend($('<span class="preloader"></span>'));
    }
    box.find('.preloader').addClass('show').fadeIn();
    var inpCur = $("#BasketCurID").val();
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/addbase",
        data: "{'pro_id':" + pro_id + ",'pci_id':" + pci_id + ",'pro_id_parent':" + pro_id_parent + ", 'typeItem':" + typeItem + ",'qty':" + qty + ",'cur_id':" + inpCur + ",'bah_id':" + bah_id + ",'restricted': " + restricted + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var addata = result.additionalData;
				if (addata != null) {
					if (addata.errorChangeBasket) {
						ErrorBasket(dictionary.GetValue('msg_product_save_err'));
					} else {
						onsucces(addata, pro_id);
					}
				} else {
					if (typeof onerror !== 'undefined' && typeof onerror === 'function') {
						onerror(addata, pro_id);
					}
				}
                var messageErr = messagesErrorOrImportant(result.messages);
                if (messageErr != null && messageErr.length > 0) {
					displayErrorMessage(messageErr, true);
                } else {
                    closeDialogReport();
				}

                box.find('.preloader').removeClass('show').fadeOut();
                //displayMessages(result.messages, true);
            }
            //if (_gaq)_gaq.push(['_trackEvent', 'Product actions', 'Click', 'Basket ' + pro_id + ' ' + qty, 3]);
        },
        error: function (data) {
            box.find('.preloader').removeClass('show').fadeOut();
            displayErrorMessage(dictionary.GetValue('msg_server_error'), true);
        }
    });
}

function addToBasketCrossSell() {
    var item = $('input[id^="txtQty_"]');
    var id = $('#proIdParent').val();
    var cntPackage = parseInt($('#cntPackage').val());
    if (item.length == 0 || id <= 0)
        return;
    var data = [];
    var valid = true;
    item.each(function (index) {
        var cnt = parseInt($(this).val());
        if (cnt > cntPackage) valid = false;
        if (valid) {
            var param = $(this).attr('id').split('_');
            data.push({ "ProId": param[2], "Qty": $(this).val(), "CurID": 0, "PciId": param[3], "ProIdParent": id, "AddCount": false });
        }
    });
    if (data.length == 0)
        return;
    if (!valid) {
    	fancyPopup({content: dictionary.GetValue('msg_qty_limit_err')});
        return;
    }
    var bah_id = $("#BasketID").val();
    var items = { items: data, bah_id: bah_id };
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/AddCrossSell",
        data: JSON.stringify(items),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    var addata = result.additionalData;
                    if (addata != null && addata.errorChangeBasket) {
                        ErrorBasket(dictionary.GetValue('msg_crossel_update_err'));
                    } else {
                        window.location.href = g_root + "/pages/basket.aspx";
                    }

                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
        }
    });
}

function addToBasketSpecialPrices(pro_id, csp_id, csp_price, onsucces) {
    if (pro_id == "" || csp_id == "" || csp_price == "")
        return;

    var $txtQty = $('#txtQty_' + csp_id),
        qty = parseInt($txtQty.val());

    if (isNaN(qty) || qty.toString() != $txtQty.val()) {
        displayErrorMessage(dictionary.GetValue('msg_bas_qty_val'), true);
        return;
    }

    var bah_id = $("#BasketID").val();
    var inpCur = $("#BasketCurID").val();   //TODO
    var restricted = false;

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/addspecialprice",
        data: "{'pro_id':" + pro_id + ",'csp_id':" + csp_id + ",'csp_price':" + csp_price + ", 'qty':" + qty + ",'cur_id':" + inpCur + ",'bah_id':" + bah_id + ",'restricted': " + restricted + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                var addata = result.additionalData;
                if (addata != null) {
                    if (addata.errorChangeBasket) {
                        ErrorBasket(dictionary.GetValue('msg_product_save_err'));
                    } else {
                        basSucces(addata, pro_id);
                    }
                } else {
                    /*
                    if (typeof onerror !== 'undefined' && typeof onerror === 'function') {
                        onerror(addata, pro_id);
                    }
                    */
                }
                var messageErr = messagesErrorOrImportant(result.messages);
                if (messageErr != null && messageErr.length > 0) {
                    displayErrorMessage(messageErr, true);
                } else {
                    displayInfoMessage(dictionary.GetValue('msg_basket_add'), true);
                }
            }
        },
        error: function (data) {
            displayErrorMessage(dictionary.GetValue('msg_server_error'), true);
        }
    });

    return;
}

// vložení CS do košíku z detailu produktu
function addToBasketCrossSellDetail(pro_id_parent, qty, addataOrig, onsucces) {  
    // nemám vybrán žádný CS, tj. bud nejsem na detailu nebo nic není vybráno
    var items = $('.cross-sell input:checked');
    if (items.length == 0) {
        onsucces(addataOrig, pro_id_parent);
        return;
    }

    var bah_id = $("#BasketID").val();
    var data = [];
    items.each(function (index) {
        var pro_id = $(this).data("pro-id");
        var pci_id = $(this).data("pci-id");
        data.push({ "ProId": pro_id, "Qty": qty, "CurID": 0, "PciId": pci_id, "ProIdParent": pro_id_parent });

    });
    
    var itemsObject = { items: data, bah_id: bah_id };
    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/AddCrossSell",
        data: JSON.stringify(itemsObject),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    var addata = result.additionalData;
                    if (addata != null && addata.errorChangeBasket) {
                        ErrorBasket(dictionary.GetValue('msg_crossel_update_err'));
                    } else {
                        onsucces(addata, pro_id_parent);
                    }
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }
            }
        },
        error: function (data) {
        }
    });
}

function updateOwnProductToBasket(el) {
    var bai_id = parseInt($("#own_bai_id").val());
    var name = $("#own_name").val();
    var qty = parseInt($("#own_qty").val());
    var price = parseFloat(($("#own_price").val()).replace(",", "."));
    var rate = parseFloat(($("#own_rate").val()).replace(",", "."));
    var restricted = false;
    var bah_id = $("#BasketID").val();

    //if (name.length == 0 || qty.length == 0 || qty <= 0)
    //	return;

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }

    if (bai_id.length == 0)
        bai_id = 0;

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/UpdateProductOwn",
        data: JSON.stringify({ 'bai_id': bai_id, 'name': name, 'qty': qty, 'price': price, 'rate': rate, 'restricted': restricted, 'bah_id': bah_id }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null) {
                var addata = result.additionalData;
                if (addata != null && addata.errorChangeBasket) {
                    ErrorBasket(dictionary.GetValue('msg_crossel_update_err'));
                } else {
                    window.location.href = g_root + "/pages/basket.aspx";
                }
            }
        },
        error: function (data) {
        }
    });


    //$.fancybox.close(true);
}


function addNoteBasket(el) {
    var type_id = parseInt($("#hdnType").val());
    var item_id = $("#hdnItemID").val();
    var note = $("#note").val();

    //if (name.length == 0 || qty.length == 0 || qty <= 0)
    //	return;

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }

    var url = g_root + "/asmx/wsproductbasketmulti.asmx/AddBasketNote";
    $.ajax({
        type: 'POST',
        data: JSON.stringify({ item_id: item_id, type_id: type_id, note: note }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        global: false,
        url: url,
        success: function (data) {
            var result = data.d;
            if (result != null) {
                var success = result.success;
                if (success) {
                    closeDialogReport();
                } else {
                    ErrorBasket(dictionary.GetValue('msg_note_add_err'));
                }

            }
        },
        error: function (data) {
        }
    });



    //$.fancybox.close(true);
}


/*
*       BASKET - END
*************************************************************************************************************
*/

/*
*       CROSS-SELL - START
*************************************************************************************************************
*/
function SetCrossSell(group, item, pck_id) {
    var el = $("#txtQty_" + group + "_" + item + "_" + pck_id);
    var elemens = $('input[id^="txtQty_' + group + '_"]');
    var cntPackage = parseInt($('#cntPackage').val());
    if (parseInt(el.val()) < 0) {
    	fancyPopup({content: dictionary.GetValue('msg_qty_limit_err')});
        el.val(0);
        return;
    }
    if (parseInt(el.val()) > cntPackage) {
    	fancyPopup({content: dictionary.GetValue('msg_qty_limit_err_with') + ' ' + cntPackage + ' ' + dictionary.GetValue('msg_package')});
        el.val(cntPackage);
    }
    elemens.each(function () {
        if ($(this).attr('id') != el.attr('id')) {
            $(this).val(0);
        } else {
            if (parseInt($(this).val()) > cntPackage) $(this).val(cntPackage);
        }
    });
}

/*
*       CROSS-SELL - END
*************************************************************************************************************
*/

function dialogProductOwn(bai_id, qty, name, price, rate) {
    var url = g_root + "/ajaxpages/productbasketown_ajx.aspx";
	
    showLoading();

    $.ajax({
        type: 'POST',
        data: { bai_id: bai_id, qty: qty, name: name, price: price, rate: rate },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();

        	if ($.fancybox) {
            	fancyPopup({ content: data, wrapCSS: 'popup-dialog popup-basket-own', maxWidth: 480});
            } else {
                //alert(dictionary.GetValue('msg_basket_add'));
            }

            setTimeout(function () { $("#own_name").focus(); }, 500);
        }
    });
}


function dialogBasketNote(item_id, type, b2c) {
    var url = g_root + "/ajaxpages/basketnote_ajx.aspx";

    // vola funkci pro kontrolu session prihlaseneho uzivatele
    if (!App.checkSession()) {
        return;
    }

    showLoading();

    $.ajax({
        type: 'POST',
        data: { item_id: item_id, type: type, b2c: b2c },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();

        	if ($.fancybox) {
        		fancyPopup({ content: data, wrapCSS: 'popup-dialog popup-basket-note', maxWidth: deviceScreens.sm, widthToMaxWidth: true });
            } else {
                alert(dictionary.GetValue('msg_basket_note_add')); // dodelat do dictionary
            }

            setTimeout(function () { $("#own_name").focus(); }, 500);
        }
    });
}


function dialogAddKumulOrder() {
    var url = g_root + "/ajaxpages/orderlist_ajx.aspx";

    showLoading();

    $.ajax({
        type: 'POST',
        data: { chkKumul: 1, notdeliv: 1 },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();
        	fancyPopup({ content: data, wrapCSS: 'popup-order-list' });
        }
    });
}
function AddToKumulOrder(rel_id) {
	if ($.fancybox) {
		$.fancybox.close(true);
	}
    $("#addToOrderRelId").val(rel_id);
    $('#send_order').click();
}

function openDialogClaimExtWar(wae_id) {
	var url = g_root + "/ajaxpages/formclaimextwar_ajx.aspx";

	showLoading();

    $.ajax({
        type: 'POST',
        data: { wae_id: wae_id },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();
			
        	if ($.fancybox) {
        		$.fancybox.close(true);
        	}
            
			fancyPopup({ content: data, maxWidth: deviceScreens.sm, afterShow: function () { App.ajax_init(); } });
            
            setTimeout(function () { $("#TELEFON").focus(); }, 500);
        }
    });
}

function SendClaimExtWar(el) {

	var validate = clickValidate(el);
	if (!validate) {
		return;
	}

	var $form = $(el).closest('form'),
		$from = $form.find('#FROM'),
		$to = $form.find('#TO'),
		$subject = $form.find('#SUBJECT'),
		$phone = $form.find('#TELEFON'),
		$email = $form.find('#EMAIL'),
		$message = $form.find('#BODY'),
		$adr = $form.find('#ADR'),
		$pickup = $form.find('#PICKUP'),
		$hdnAuth = $form.find('#hdnAuth'),
		$cli_id = $form.find('#cli_id'),
		$con_id = $form.find('#con_id'),
		$warExt_wae_id = $form.find('#warExt_wae_id'),
		$warExt_pro_code_ext = $form.find('#warExt_pro_code_ext'),
		$warExt_pro_name_ext = $form.find('#warExt_pro_name_ext'),
		$warExt_wae_serial_no = $form.find('#warExt_wae_serial_no'),
		$warExt_wae_del_sym = $form.find('#warExt_wae_del_sym'),
		$warExt_inv_sym = $form.find('#warExt_inv_sym');

	var messageHtml = $cli_id.data('label') + ': ' + $cli_id.val() + '\n';
	messageHtml += $con_id.data('label') + ': ' + $con_id.val() + '\n';
	messageHtml += $warExt_wae_id.data('label') + ': ' + $warExt_wae_id.val() + '\n';
	messageHtml += $warExt_pro_code_ext.data('label') + ': ' + $warExt_pro_code_ext.val() + '\n';
	messageHtml += $warExt_pro_name_ext.data('label') + ': ' + $warExt_pro_name_ext.val() + '\n';
	messageHtml += $warExt_wae_serial_no.data('label') + ': ' + $warExt_wae_serial_no.val() + '\n';
	messageHtml += $warExt_wae_del_sym.data('label') + ': ' + $warExt_wae_del_sym.val() + '\n';
	messageHtml += $warExt_inv_sym.data('label') + ': ' + $warExt_inv_sym.val() + '\n';
	messageHtml += $adr.data('label') + ': ' + $adr.val() + '\n';
	messageHtml += $phone.data('label') + ': ' + $phone.val() + '\n';
	messageHtml += $email.data('label') + ': ' + $email.val() + '\n';
	messageHtml += $pickup.data('label') + ': ' + ($pickup.prop('checked') === true ? 'Ano' : 'Ne') + '\n';
	messageHtml += $message.data('label') + ': ' + $message.val();

	
	var onsucces = function (data) {
		var result = data.d;
		if (result != null && result.messages != null) {
			if (result.success) {
				closeDialogReport();
				displayInfoMessage('RMA Vám bude přidělené po ověření záruky.', true);
			} else {
				var messageErr = messagesErrorOrImportant(result.messages);
				if (messageErr != null && messageErr.length > 0) {
					displayErrorMessage(messageErr, true);
				} else {
					closeDialogReport();
				}
			}
		}
	};

	var onerror = function (data) {
		displayErrorMessage(data.statusText, true);
	};

	send_email('', $from.val(), '', $to.val(), messageHtml, $subject.val(), '', $hdnAuth.val(), onsucces, onerror);
}

function openDialogCallMe(pusr_id, pro_code, URL) {
	var url = g_root + "/ajaxpages/formcallme_ajx.aspx";

	showLoading();

    $.ajax({
        type: 'POST',
        data: { usr_id: pusr_id, pro_code: pro_code, URL: URL },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();

        	if ($.fancybox) {
        		$.fancybox.close(true);
        	}

        	fancyPopup({content: data});

            setTimeout(function () { $("#TELEFON").focus(); }, 500);
        }
    });
}

function SendCallMe(el) {

    var validate = clickValidate(el);
    if (!validate) {
        return;
	}

	var $form = $(el).closest('form'),
		$from = $form.find('#FROM'),
        $to = $form.find('#TO'),
        $email = $form.find('#EMAIL'),
		$subject = $form.find('#SUBJECT'),
		$usr_id = $form.find('#USR_ID'),
		$usr_name = $form.find('#USR_NAME'),
		$phone = $form.find('#TELEFON'),
		$message = $form.find('#BODY'),
		$pro_code = $form.find('#PRO_CODE'),
        $url = $form.find('#URL'),
        $companyName = $form.find('#COMPANYNAME'),
		$hdnAuth = $form.find('#hdnAuth');
    
	var messageHtml = $phone.data('label') + ': ' + $phone.val() + '\n';
    
    var receiver = $to.val();

    if ($email.val() !== '') {
        receiver += ';' + $email.val();
        messageHtml += $email.data('label') + ': ' + $email.val() + '\n';
    }

    if ($companyName.val() !== '') {
        messageHtml += $companyName.data('label') + ': ' + $companyName.val() + '\n';
    }

	if ($pro_code.val() !== '') {
		messageHtml += $pro_code.data('label') + ': ' + $pro_code.val() + '\n';
	}

	if ($url.val() !== '') {
		messageHtml += $url.data('label') + ': ' + $url.val() + '\n';
	}

	messageHtml += '\n';
	messageHtml += $message.val();

	var onsucces = function (data) {
		var result = data.d;
		if (result != null && result.messages != null) {
			if (result.success) {
				closeDialogReport();
				displayInfoMessage('Vaše zpráva pro ' + $usr_name.val() + ' byla úspěšně odeslána.', true);
			} else {
				var messageErr = messagesErrorOrImportant(result.messages);
				if (messageErr != null && messageErr.length > 0) {
					displayErrorMessage(messageErr, true);
				} else {
					closeDialogReport();
				}
			}
		}
	};

	var onerror = function (data) {
		displayErrorMessage(data.statusText, true);
	};

    send_email('', $from.val(), '', receiver, messageHtml, $subject.val(),'', $hdnAuth.val(), onsucces, onerror);
}

function SendLoanCalcEDRequest(el) {
    var validate = clickValidate(el);
    if (!validate) {
        return;
    };

    var $form = $(el).closest('form'),
        $from = $form.find('#FROM'),
        $to = $form.find('#TO'),
        $subject = $form.find('#SUBJECT'),
        $email = $form.find('#EMAIL'),        
        $phone = $form.find('#TELEFON'),
        $message = $form.find('#BODY'),
        $pro_code = $form.find('#PRO_CODE'),
        $userName = $form.find('#USERNAME'),
        $cliID = $form.find('#CLI_ID'),
        $conID = $form.find('#CON_ID'),
        $hdnAuth = $form.find('#hdnAuth');

    var messageHtml = $userName.data('label') + ': ' + $userName.val() + '\n';

    if ($phone.val() !== '') {
        messageHtml += $phone.data('label') + ': ' + $phone.val() + '\n';
    }    
    var receiver = $to.val();
    if ($email.val() !== '') {
        receiver += ';' + $email.val();
        messageHtml += $email.data('label') + ': ' + $email.val() + '\n';
    }
    if ($pro_code.val() !== '') {
        messageHtml += $pro_code.data('label') + ': ' + $pro_code.val() + '\n';
    }
    if ($cliID.val() !== '') {
        messageHtml += $cliID.data('label') + ': ' + $cliID.val() + '\n';
    }  
    if ($conID.val() !== '') {
        messageHtml += $conID.data('label') + ': ' + $conID.val() + '\n';
    }  

    messageHtml += '\n';
    messageHtml += $message.val();

    var onsucces = function (data) {
        var result = data.d;
        if (result != null && result.messages != null) {
            if (result.success) {
                closeDialogReport();
                displayInfoMessage('Vaše poptávka byla odeslána.', true);
            } else {
                var messageErr = messagesErrorOrImportant(result.messages);
                if (messageErr != null && messageErr.length > 0) {
                    displayErrorMessage(messageErr, true);
                } else {
                    closeDialogReport();
                }
            }
        }
    };

    var onerror = function (data) {
        displayErrorMessage(data.statusText, true);
    };

    send_email('', $from.val(), '', receiver, messageHtml, $subject.val(), '', $hdnAuth.val(), onsucces, onerror);
}

function openDialogBadDescription(pro_id, pro_code) {
    var url = g_root + "/ajaxpages/formbaddescription_ajx.aspx";

    showLoading();

    $.ajax({
        type: 'GET',
        data: { pro_id: pro_id, pro_code: pro_code },
        global: false,
        url: url,
        success: function (data) {
            hideLoading();
            fancyPopup({ content: data });
        },
        error: function (data) {
            hideLoading();
        }
    });
}

function sendBadDescription(el) {
    var validate = clickValidate(el);
    if (!validate) {
        return;
    }

    var $form = $(el).closest('form'),
        $pro_id = $form.find('#PRO_ID'),
        $message = $form.find('#MESSAGE'),
        $hdnAuth = $form.find('#hdnAuth');

    var pro_id = $pro_id.val();
    var message = $message.val();
    var auth = $hdnAuth.val();
    if (pro_id == 0)
        return;

    var params = { pro_id: pro_id, message: jsCorrect(message), auth: auth };

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductwebnotice.asmx/save",
        data: JSON.stringify(params),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    closeDialogReport();
                    displayInfoMessage(dictionary.GetValue('msg_note_send'), true);
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function openTabSpecialPrices(el, event) {

    // Přidáno z toho důvodu, kdyby bylo potřeba metodu volat pomocí onclicku na html odkazu - tímto se vyruší provolání hodnoty v href.
    event.preventDefault();

    var targetId = $(el).attr("data-targetId");
    $('#' + targetId).click();

    scrollToTabs();    
}

function url_redirect(options) {
    var $form = $("<form />");

    $form.attr("action", options.url);
    $form.attr("method", options.method);

    for (var data in options.data)
        $form.append('<input type="hidden" name="' + data + '" value="' + options.data[data] + '" />');

    $("body").append($form);
    $form.submit();
}

function ErrorBasket(text) {
	fancyPopup({content: text});
    setTimeout(function () {
        reloadPage();
    }, 3000);
}

/*
*       IMPORT TO BASKET - START
*************************************************************************************************************
*/

function openBasketImportDialog() {
	var url = g_root + "/ajaxpages/basketimport_ajx.aspx";

	showLoading();

    $.ajax({
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
        	hideLoading();

        	$.fancybox.close(true);

            if ($.fancybox) {
                if (Modernizr.mq('all and (max-height: 600px)')) {
                	fancyPopup({ content: data, wrapCSS: 'popup-basket-import', maxWidth: deviceScreens.sm, autoCenter: false});
                } else {
                	fancyPopup({content: data, wrapCSS: 'popup-basket-import', maxWidth: deviceScreens.sm});
                }
            }

            setTimeout(function () { $("#txtProducts").focus(); }, 500);
        }
    });

}
function importProductsTxt() {
    var cur_id = 0;
    var restricted = false;
    var txtval = $("#txtProducts").val();
    var bah_id = parseInt($("#bas_bah_id").val());
    if (txtval == '') {
        var text = dictionary.GetValue('msg_import_basket_txt_missing');
        displayErrorMessage(text, true);
        return;
    }

    if (bah_id <= 0) {
        displayErrorMessage(dictionary.GetValue('msg_idf_err'), true);
        return;
    }

	var options = getImportOptions(true);
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/importtext",
		data: "{'data':'" + txtval + "', 'bah_id':" + bah_id + ", 'cur_id':" + cur_id + ",'restricted': " + restricted + ", 'options' : '" + options + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    reloadPage();
                } else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayErrorMessage(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                    var addata = result.additionalData;
                    if (addata != null) {
                        $("#txtProducts").val(addata);
                    }
                }
            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}
function importProductsFile() {
    var cur_id = 0;
    var restricted = false;
    var txtval = $("#impFile").val();
    var bah_id = parseInt($("#bas_bah_id").val());
    if (txtval == '') {
        var text = dictionary.GetValue('msg_import_basket_file_missing');
        displayErrorMessage(text, true);
        return;
    }
    if (bah_id <= 0) {
        displayErrorMessage(dictionary.GetValue('msg_idf_err'), true);
        return;
	}

    var options = getImportOptions(false);
    var file_data = $('#impFile').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('bah_id', bah_id);
    form_data.append('cur_id', cur_id);
    form_data.append('restricted', restricted);
    form_data.append('options', options);
    $.ajax({
        url: g_root + '/asmx/wsproductbasketmulti.asmx/ImportFile',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (data) {
            var result = data;
            var xml = $(result);
            var state = xml.find("success").text();
            if (state == 'true') {
                reloadPage();
            } else {
                var messages = new Array();
                xml.find("cMessage").each(function () {
                    var message = new Object();
                    message.MsgDefault = $(this).find('MsgDefault').text();
                    message.MsgDictionery = $(this).find('MsgDictionery').text();
                    var mesType = $(this).find('type').text();
                    message.MsgInput = $(this).find('MsgInput').text();
                    message.Msg = $(this).find('Msg').text();
                    switch (mesType) {
                        case 'ERROR':
                            message.type = 2;
                            break;
                        case 'MESSAGE':
                            message.type = 1;
                            break;
                        case 'IMPORTANT_MESSAGE':
                            message.type = 3;
                            break;
                        case 'INFO':
                            message.type = 4;
                            break;
                        default:
                            message.type = 0;
                    }
                    messages.push(message);
                });
                displayMessages(messages, true);
            }
        },
        error: function (message) {
            displayErrorMessage(dictionary.GetValue(message), true);
        }
    });    
    return false;
}
/*
*       IMPORT TO BASKET - END
*************************************************************************************************************
*/
/*
*       PROMO AKCE - START
*************************************************************************************************************
*/

function openTabCampaigns(el) {
    var targetId = $(el).attr("data-targetId");
    $('#' + targetId).click();

    scrollToTabs();
}

/*
*        PROMO AKCE - END
*************************************************************************************************************
*/

function showBasketItemInfo(bai_id) {
    var url = g_root + "/ajaxpages/basketiteminfo_ajx.aspx";
    var bah_id = parseInt($("#BasketID").val());

	// vola funkci pro kontrolu session prihlaseneho uzivatele
    if (!App.checkSession()) {
        return;
    }

    if (bah_id <= 0) {
    	fancyPopup({content: dictionary.GetValue('msg_idf_err')});
        return;
    }

    if (parseInt(bai_id) <= 0) {
    	fancyPopup({content: dictionary.GetValue('msg_itf_err')});
        return;
    }
    $.ajax({
        type: 'POST',
        data: { bah_id: bah_id, bai_id: bai_id },
        global: false,
        url: url,
        success: function (data) {
        	fancyPopup({content: data});
        }
    });
}

$(document).ready(function () {
    $('.show-basket-item-info').mouseenter(function () {
    	var $thisItem = $(this);
    	App.checkSession();

        if ($thisItem.attr('title') == '') {
            var url = g_root + "/ajaxpages/basketiteminfo_ajx.aspx";
            var bah_id = parseInt($("#BasketID").val());
            var bai_id = $thisItem.data('basket-item-id');

            $.ajax({
                type: 'POST',
                data: { bah_id: bah_id, bai_id: bai_id },
                global: false,
                url: url,
                success: function (data) {
                    $thisItem.attr('title', data).tooltip('open');
                }
            });
        }
    });

    $('.order-box').keypress(function (e) {
        if (e.keyCode == 13) {
            $(this).closest('div.order-box').find('a.add-basket').trigger('click');
        }
    });

});

// otevreni okna z naseptavace obsahujiciho superkategorie konkretniho vyrobce
function showSubCatWhisper(e, thisEl) {
    var $thisEl = $(thisEl);
    var page = 'panelnavigatorwhispervendor_ajx.aspx';
    var url = g_root + '/ajaxpages/' + page;

    if ($thisEl.attr('data-vendor-id')) {
        var vendor = $thisEl.data('vendor-id');
        var redirurl = $thisEl.attr('href');
    } else if ($thisEl[0].hasOwnProperty('item')) {
        var vendor = $thisEl[0].item.id;
        var redirurl = $thisEl[0].item.URL;
    }

    $.ajax({
        type: 'POST',
        global: false,
        url: url,
        data: "pnp_id=" + vendor,
        success: function (data) {

        	$data = $($.parseHTML(data));
        	if ($data.filter('.sup-categories-box').length === 1) {
        		fancyPopup({
        			content: data,
        			wrapCSS: 'popup-sup-categories-box',
        			beforeClose: function () {
        				window.location.href = $('.popup-sup-categories-box').find('.fancybox-title a').attr('href');
        			}
        		});
                $('.popup-sup-categories-box').focus();
            } else {
                window.location.href = redirurl;
            }

            $("#quick_search_fulltext").autocomplete_CAT("close");

        }
    });

    e.preventDefault();

    return false;
}

/*
*       PRINT OFFER - START
*************************************************************************************************************
*/

function openPrintProductOfferDialog(pro_id) {	
	var url = g_root + "/ajaxpages/productofferprint_ajx.aspx";

	showLoading();

	$.ajax({
		type: 'GET',
		data: { pro_id: pro_id },
		global: false,
		url: url,
		success: function (data) {
			hideLoading();

			fancyPopup({ content: data });
		},
		error: function (data) {
			hideLoading();

			alert(data.statusText);
		}
	});
}

function printProductOffer(pro_id, pdf) {
	var amount = $("#valueOffer").val();
    var type = $("#typeOffer").val();
    var cur_id = $("#hdnCurId").val();
    var param = $("#paramPrint").val();
    if (type == null || IsNullOrEmpty(type)) {
        displayErrorMessage(dictionary.GetValue('msg_type_offer'), true);
        return;
    }
    if (amount == null || IsNullOrEmpty(amount)) {
    	displayErrorMessage(dictionary.GetValue('msg_amount_offer'), true);
    	$("#txtPercentage").focus();
        return;
    }
    if (pro_id == null || IsNullOrEmpty(pro_id)) {
        displayErrorMessage(dictionary.GetValue('msg_pro_offer'), true);

        return;
    }

    var url = g_root + '/reports/print/';
    if (pdf) {
        url += 'basketmultipdf.aspx';
    } else {
        url += 'offerproductprint.aspx';;
    }
    url += '?amount=' + amount + '&type=' + type + '&pro_id=' + pro_id + '&param=' + param;
    if (type == "0") {
        url += '&cur_id=' + cur_id;
    }

    if ($().fancybox && $.fancybox.isOpen) {
    	$.fancybox.close(true);
    }

    window.open(url, '_blank');

    return true;
}

/*
*       BASKET FIDELITY - START
*************************************************************************************************************
*/

function addToFidelityBasketFromList(pro_id) {
    var qty = $("#txtQty_" + pro_id).val();
    if (IsNullOrEmpty(qty)) {
        qty = 0;
    } else {
        qty = strToDouble(qty);
    }
    if (qty > 0)
        addToFidelityBasket(pro_id, qty);
    else
        displayErrorMessage(dictionary.GetValue('msg_fid_bas_qty_val'), true);
}

function addToFidelityBasket(pro_id, qty) {
    if (pro_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasket.asmx/addfidelity",
        data: "{'pro_id':" + pro_id + ",'qty':" + qty + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                displayMessages(result.messages, true);
            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function productInfo(bai_id, bah_id, pro_id, onsuccess) {
	var url = g_root + "/ajaxpages/productinfo_ajx.aspx";	
	
	// vola funkci pro kontrolu session prihlaseneho uzivatele
	if (!App.checkSession()) {
		return;
	}

	if ('undefined' === typeof (bah_id) && 0 >= parseInt(bah_id)) {
		fancyPopup({content: dictionary.GetValue('msg_idf_err')});
		return;
	}

	if ('undefined' === typeof (bai_id) && 0 >= parseInt(bai_id)) {
		fancyPopup({content: dictionary.GetValue('msg_itf_err')});
		return;
	}

	$.ajax({
		type: 'GET',
		data: { bah_id: bah_id, bai_id: bai_id, pro_id: pro_id },
		global: false,
		url: url,
		success: function (data) {
			onsuccess(data);
		},
		error: function (data) {
			alert(data.statusText);
		}
	});
}

function putToCompare(pro_id) {
    if (pro_id == "")
        return;

    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductcompare.asmx/add",
        data: "{'pro_id':" + pro_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                displayMessages(result.messages, true);
            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function getImportOptions(escaped) {
	var importType = '';
	if ($("#rbImportByCode").is(':checked')) {
		importType += "CODE";
	}
	if ($("#rbImportByPN").is(':checked')) {
		importType += "PN";
	}
	if (escaped) {
		return "{\"ImportType\": \"" + importType + "\"}";
	}
	else {
		return "{'ImportType': '" + importType + "'}";
	}
}

/*
*       BasketItemService - START
*************************************************************************************************************
*/

function dialogBasketItemService(bah_id, bai_id, bst_id) {
    var url = g_root;
    if (bst_id == 1)
        url += "/ajaxpages/basketitemservicehp_ajx.aspx";
    else if (bst_id == 2)
        url += "/ajaxpages/basketitemserviceavast_ajx.aspx";
    else if (bst_id == 3)
        url += "/ajaxpages/basketitemservicehpspecialprice_ajx.aspx";
    else
        return;

    // vola funkci pro kontrolu session prihlaseneho uzivatele
    if (!App.checkSession()) {
        return;
    }

    showLoading();

    $.ajax({
        type: 'POST',
        data: { bah_id: bah_id, bai_id: bai_id},
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
            hideLoading();

            if ($.fancybox) {
                fancyPopup({
                    content: data,
                    wrapCSS: 'popup-dialog',
                    maxWidth: deviceScreens.md,
                    widthToMaxWidth: true,
                    autoHeight: true,
                    autoSize: false,

                    afterShow: function () {

                        // Carepack - nastavení ISO date formátu
                        $(".carepack [id^=ValidDate]").each(function () {

                            // Tohle je divné, ale funguje ¯\_(ツ)_/¯
                            $(this).datepicker();

                            $(this).datepicker("option", {
                                dateFormat: "dd.mm.yy",
                            })
                        });

                        App.ajax_init();
                    }
                });
            }

            setTimeout(function () { $("#own_name").focus(); }, 500);
        }
    });
}

function copyCarepackItemContentHP(id) {
    var $item = $("[id='carepack-" + id + "']");

    const nextItemIdAttr = $item.next().attr("id");
    if (!nextItemIdAttr) return;

    const nextItemId = nextItemIdAttr.substring(nextItemIdAttr.lastIndexOf("-") + 1, nextItemIdAttr.length);

    $item.find("input, textarea").each(function () {
        const key = $(this).attr("id");
        const value = $(this).val();

        const name = key.substring(0, key.lastIndexOf("-"));

        $("input[id='" + name + "-" + nextItemId + "']").val(value);
        $("textarea[id='" + name + "-" + nextItemId + "']").val(value);
    });

    var $el = $("#carepackForm");
    if ($el) clickValidate($el);
}

function copyCarepackItemContentHPAll(id) {
    var $item = $("[id='carepack-" + id + "']");

    $item.find("input, textarea").each(function () {
        const key = $(this).attr("id");
        const value = $(this).val();
        const name = key.substring(0, key.lastIndexOf("-"));

        $item.nextAll().each(function () {
            const nextItemIdAttr = $(this).attr("id");
            console.log(nextItemIdAttr);
            const nextItemId = nextItemIdAttr.substring(nextItemIdAttr.lastIndexOf("-") + 1, nextItemIdAttr.length);
            console.log(nextItemId);
            $("input[id='" + name + "-" + nextItemId + "']").val(value);
            $("textarea[id='" + name + "-" + nextItemId + "']").val(value);
        });        
    });

    var $el = $("#carepackForm");
    if ($el) clickValidate($el);
}

function saveBasketItemServiceHP(el) {
    var bsh_id = $("#hdnBshId").val();
    var bah_id = $("#hdnBahId").val();

    var head = {
        "contactEmail": $("#contactEmail").val()
    }

    // Carepack data pro uložení
    var items = [];

    var $carepackItems = $("[id^=carepack-]");

    $carepackItems.each(function () {

        var $carepackItem = $(this);

        const carepackId = $carepackItem.attr("id");
        const id = carepackId.substring(carepackId.lastIndexOf("-") + 1, carepackId.length);

        var carepackValues = { "bsi_id": parseInt(id)};

        $carepackItem.find("input, textarea").each(function () {
            const key = $(this).attr("id");

            const name = key.substring(0, key.lastIndexOf("-"));
            const value = $(this).val();

            carepackValues[name] = value;
        });

        items.push(carepackValues);

    });



    //items.push({ "bsi_id": 1, "sn": "DSFD54DSD", "valid_date": new Date(), "cli_address_street": "Velká 20", "cli_address_city": "Ostrava", "cli_address_zip": "70900", "cli_email": "email1@email.cz", "cli_name": "Firma 1 a.s.", "cli_tel": "777888991", "con_name": "Tomáš Fuk"});
    //items.push({ "bsi_id": 2, "sn": "WAD1564AD", "valid_date": new Date(), "cli_address_street": "Velká 21", "cli_address_city": "Opava", "cli_address_zip": "55531", "cli_email": "email2@email.cz", "cli_name": "Firma 2 a.s.", "cli_tel": "777888992", "con_name": "Tomáš Fučík"});

    if (items.length == 0 || bsh_id == 0 || bah_id == 0) {
        return;
    }      
    
    var validate = clickValidate(el);
    if (!validate) {
        return;
    }    


    var params = { bah_id: bah_id, bsh_id: bsh_id, head: head, items: items };

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/saveservice",
        data: JSON.stringify(params),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    reloadPage();
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
            if (data.status == 403) {
                displayErrorMessage("Vypršela platnost formuláře. Obnovte, prosím, stránku košíku a vyplňte formulář ještě jednou.", true);
            }
            else {
                displayErrorMessage(data.statusText, true);
            }
        }
    });
}

function copyPartNoToTxtHP(sel, bsi_id) {
    if (sel.value != '') {
        $("input[id='PN-" + bsi_id + "']").val(sel.value);
    }
}

function copyCarepackItemContentAvast(id) {
    var $item = $("[id='carepack-" + id + "']");

    const nextItemIdAttr = $item.next().attr("id");
    if (!nextItemIdAttr) return;

    const nextItemId = nextItemIdAttr.substring(nextItemIdAttr.lastIndexOf("-") + 1, nextItemIdAttr.length);

    $item.find("input,select").each(function () {
        const key = $(this).attr("id");
        const value = $(this).val();

        const name = key.substring(0, key.lastIndexOf("-"));

        $("input[id='" + name + "-" + nextItemId + "']").val(value);
        $("select[id='" + name + "-" + nextItemId + "']").val(value);
    });

    var $el = $("#carepackForm");
    if ($el) clickValidate($el);
}

function saveBasketItemServiceAvast(el) {
    var bsh_id = $("#hdnBshId").val();
    var bah_id = $("#hdnBahId").val();
    var subType = $("#hdnSubType").val();

    var head = {
        "www": $("#www").val(),
        "contactEmail": $("#contactEmail").val(),
        "contactFirstName": $("#contactFirstName").val(),
        "contactLastName": $("#contactLastName").val(),
        "subType": subType
    }

    // Carepack data pro uložení
    var items = [];

    var $carepackItems = $("[id^=carepack-]");

    $carepackItems.each(function () {

        var $carepackItem = $(this);

        const carepackId = $carepackItem.attr("id");
        const id = carepackId.substring(carepackId.lastIndexOf("-") + 1, carepackId.length);

        var carepackValues = { "bsi_id": parseInt(id) };

        $carepackItem.find("input,select").each(function () {
            const key = $(this).attr("id");

            const name = key.substring(0, key.lastIndexOf("-"));
            const value = $(this).val();

            carepackValues[name] = value;
        });

        items.push(carepackValues);

    });

    if ((subType ==1 && items.length == 0) || bsh_id == 0 || bah_id == 0) {
        return;
    }

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }

    var params = { bah_id: bah_id, bsh_id: bsh_id, head: head, items: items };

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/saveservice",
        data: JSON.stringify(params),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    reloadPage();
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
            if (data.status == 403) {
                displayErrorMessage("Vypršela platnost formuláře. Obnovte, prosím, stránku košíku a vyplňte formulář ještě jednou.", true);
            }
            else {
                displayErrorMessage(data.statusText, true);
            }
        }
    });
}

function saveBasketItemServiceHPSpecialPrice(el) {
    var bsh_id = $("#hdnBshId").val();
    var bah_id = $("#hdnBahId").val();
    var cbOK = $("#cbOK");

    var head = {
        "EU": $("#EU").val(),
        "orgNo": $("#orgNo").val()
    }

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }
    if (!cbOK.is(":checked")) {
        displayErrorMessage(dictionary.GetValue('save_form_hp_special_prices_rules'), true);
        return; 
    }

    var params = { bah_id: bah_id, bsh_id: bsh_id, head: head, items: null };

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/saveservice",
        data: JSON.stringify(params),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    reloadPage();
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
            if (data.status == 403) {
                displayErrorMessage("Vypršela platnost formuláře. Obnovte, prosím, stránku košíku a vyplňte formulář ještě jednou.", true);
            }
            else {
                displayErrorMessage(data.statusText, true);
            }
        }
    });
}

function saveBasketItemServiceHPSpecialPrice(el) {
    var bsh_id = $("#hdnBshId").val();
    var bah_id = $("#hdnBahId").val();
    var cbOK = $("#cbOK");

    var head = {
        "EU": $("#EU").val(),
        "orgNo": $("#orgNo").val()
    }

    var validate = clickValidate(el);
    if (!validate) {
        return;
    }
    if (!cbOK.is(":checked")) {
        displayErrorMessage(dictionary.GetValue('save_form_hp_special_prices_rules'), true);
        return; 
    }

    var params = { bah_id: bah_id, bsh_id: bsh_id, head: head, items: null };

    $.ajax({
        type: "POST",
        global: false,
        url: g_root + "/asmx/wsproductbasketmulti.asmx/saveservice",
        data: JSON.stringify(params),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages != null) {
                if (result.success) {
                    reloadPage();
                }
                else {
                    var messageErr = messagesErrorOrImportant(result.messages);
                    if (messageErr != null && messageErr.length > 0) {
                        displayMessages(messageErr, true);
                    } else {
                        closeDialogReport();
                    }
                }

            }
        },
        error: function (data) {
            if (data.status == 403) {
                displayErrorMessage("Vypršela platnost formuláře. Obnovte, prosím, stránku košíku a vyplňte formulář ještě jednou.", true);
            }
            else {
                displayErrorMessage(data.statusText, true);
            }
        }
    });
}

/*
*       BasketItemService - END
*************************************************************************************************************
*/

/*
*       Věrnostní kamapaň - START
*************************************************************************************************************
*/

function showFidelityCampaigns(fid_ids) {
    var url = g_root + "/ajaxpages/fidelitycampaignlist_ajx.aspx";

    showLoading();

    $.ajax({
        type: 'POST',
        data: { fid_ids: fid_ids},
        global: false,
        url: url,
        success: function (data) {
            hideLoading();

            if ($.fancybox) {
                $.fancybox.close(true);
            }

            fancyPopup({ content: data, maxWidth: deviceScreens.sm });
        }
    });
}

/*
*        Věrnostní kamapaň - END
*************************************************************************************************************
*/

function openProducerInfo(pro_id){
    var url = g_root + "/ajaxpages/produceraddressinfo_ajx.aspx";

    showLoading();

    $.ajax({
        type: 'POST',
        data: { pro_id: pro_id },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
            hideLoading();
            fancyPopup({
                content: data,
                maxWidth: deviceScreens.xs,
                widthToMaxWidth: true,
                autoSize: false
            });
        }
    });
}

function scrollToTabs() {
    $('html, body').animate({
        scrollTop: $('#panelTabsLinkTarget').offset().top - 60
    }, 1000);
};
(function ($) {

	$(document).ready(function () {


	});

}(jQuery));

function queryParameters() {
	var result = {};

	var params = window.location.search.split(/\?|\&/);
	$.each(params, function (it,l) {
		if (l) {
			var param = l.split("=");
			result[param[0]] = param[1];
		}
	});

	return result;
}

// rozbalovani stromu    	
function showHide(thisEl) {
	var $thisEl = $(thisEl),
		$parent = $thisEl.parent(),
		$controlEl = $parent.find('ul'),
		openClass = 'open';

	if ($parent.hasClass(openClass)) {
		$parent.removeClass(openClass);
	} else {
		$parent.addClass(openClass);
	}
}


// funkce pro kontrolu cbx
function controlsCbx(thisCbx) {
	var $thisCbx = $(thisCbx);
	var $parentBox = $thisCbx.closest('.param-box');
	var $defaultCbx = $parentBox.find('input[type="hidden"][value="-1"]').next();

	var isAnyChecked = false;

	if(!$thisCbx.is($defaultCbx)) {
		$parentBox.find('input[type="checkbox"]').each(function() {
			if($(this).prop('checked')) {
				isAnyChecked = true;
				return;
			}
		});
	} 

	if(isAnyChecked) {
		$defaultCbx.prop('checked', false);
	} else {
		$parentBox.find('input[type="checkbox"]').prop('checked', false);
		$defaultCbx.prop('checked', true);
	}
}

function resetValues() {
	return;
	$(".attrBox").each(function () {
		var id = $(this).attr("id");
		//alert(id);
		if (id == "producerBox") {
                    
		}
		else {
			var pna_id = $(this).attr("id").replace("navAtrFrm_", "");
			//alert(pna_id);
			if (pna_id == 145)
				valueCheckId(0, pna_id);
		}
	});
}
function resetStock(obj){
	if ($(obj).is(':checked')){
		$('input[id$="chkOnStock"]').attr("checked", false);
	}
}
function resetStocks(obj){
	if ($(obj).is(':checked')){
		$('input[id*="cbStckId"]').attr("checked", false);
	}
}

// otevreni okna obsahujiciho superkategorie konkretniho vyrobce
function showSubCat(e, thisEl) {
	var $thisEl = $(thisEl),
		$parent = $thisEl.parent(),
		$controlEl = $parent.find('> ul').clone();

	if ($controlEl.length = 1) {
		e.preventDefault();

		$controlEl.removeClass('collapsed');

		var $title = $('<div><h1></h1></div>');
		var $content = $('<div></div>');

		$title.find('h1').append($parent.find('> .vendor').clone());
		$content.append($controlEl.removeClass('hide'));

		fancyPopup({ content: $content.html(), title: $title.html(), wrapCSS: 'popup-sup-categories-box', maxWidth: deviceScreens.xxs, widthToMaxWidth: true });
	} else {
		$.fancybox.close();
	}
}

// funkce pro otevreni a zavreni boxu
function openCloseBox(box) {
	var $box = $(box);
	var $defaultCbx = $box.find('input[type="hidden"][value="-1"]').next();

	if ($box.hasClass('open')) {
		$box.removeClass('open');
		$defaultCbx.trigger('click'); // preda klik na default a tim vyvola funkci controlsCbx
	} else {
		$box.addClass('open');
	}
}

function selectParam(box) {
	var $box = $(box); // vytvorim objekt jquery
	var $boxGridItem = $box.parent(); // najdu si nadrazenou polozku gridu

	var $itemsPlacehoder = $('.placeholder-selected-attrs'); // placeholder pro zcolene atributy

	var $boxPlaceholder = $('#placeholder_' + $box.attr('id'));  // placehoder pro konkretni parametr
	if ($boxPlaceholder.length == 0) {
		$boxPlaceholder = $('<div id="placeholder_' + $box.attr('id') + '"></div>');
	}

	if ($box.hasClass('open')) {
		$boxGridItem.insertAfter($boxPlaceholder);
		$boxPlaceholder.remove();
	} else {
		$boxPlaceholder.insertAfter($boxGridItem); // za zvoleny atribut vloz jeho placeholder
		$itemsPlacehoder.children().eq(0).append($boxGridItem);
	}

	openCloseBox($box); // funkce ktera na box nastavi tridu a zkontroluje zvolene cbx

	if ($itemsPlacehoder.find('.item').length > 0) {
		$itemsPlacehoder.show();
	} else {
		$itemsPlacehoder.hide();
	}
}

function resetStock(obj) {
	if ($(obj).is(':checked')) {
		$('input[id$="chkOnStock"]').attr("checked", false);
	}
}
function resetStocks(obj) {
	if ($(obj).is(':checked')) {
		$('input[id*="cbStckId"]').attr("checked", false);
	}
}

// zobrazeni a skyti kategorii
function showCategories(e, thisEl, pnp_id, pnsup_id, pnc_id, pna_id) {
	var $thisEl = $(thisEl),
		$parent = $thisEl.parent(),
		$navItems = $parent.find('ul'),
		preloader = new ElxPreloader($thisEl.find('.btn_icon'), { displayMode: 'replaceEl' }),
		openClass = 'open';

	e.preventDefault();

	$parent.closest('.nav-menu-list').find('.' + openClass).removeClass(openClass);

	if ($navItems.length == 0) {
		
		preloader.start();

		loadCategoriesData(pnp_id, pnsup_id, pnc_id, pna_id, function (result) {
			preloader.stop();

			var $result = $('<div>' + result + '</div>');

			$result.find('ul').attr('class', 'nav nav-menu-list collapsed');
			$result.find('li').attr('class', 'nav-item');
			$result.find('a').attr('class', 'nav-link');

			$parent.append($result.html());
			$parent.addClass(openClass)

			$.fancybox.update();
		});
	} else {

		if ($parent.hasClass(openClass)) {
			$parent.removeClass(openClass);
		} else {
			$parent.addClass(openClass);
		}

		$.fancybox.update();
	}
}

// nacteni kategorii
function loadCategoriesData(pnp_id, pnsup_id, pnc_id, pna_id, callback) {
	var page = 'panelnavigatorcat_ajx.aspx';
	var url = g_root + '/ajaxpages/' + page;
	var navdatapar;

	if (pna_id == 0) {
		navdatapar = pnsup_id + ',' + pnc_id + ',' + pnp_id;
	} else {
		navdatapar = pnsup_id + ',' + pnc_id + ',' + pnp_id + ',' + pna_id + ',0';
	}

	$.ajax({
		type: 'POST',
		global: false,
		url: url,
		data: { navdata: navdatapar },
		success: function (data) {
			callback(data);
		}
	});
}
;
function archiveBasket(bah_id, onsucces) {
	/// <summary>
	/// vola archivaci kosiku (bah_archive = 1)
	/// <summary>
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/archivebaskethead",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, bah_id);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function copyBasket(bah_id, onsucces) {
	/// <summary>
	/// kopiruje kosik (archivace / verzovani)
	/// <summary>
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/copybasket",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, bah_id);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function updateBasketName(bah_id, bah_name) {
	/// <summary>
	/// update nazvu kosiku
	/// <summary>
	if (bah_id == "" || bah_name == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/updatebaskethead",
		data: "{'bah_id':" + bah_id + ",'bah_name':'" + bah_name + "','cla_id_ship':-1 }",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.success == false) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function updateBasketClaIdShip(bah_id, cla_id_ship, onsucces) {
    /// <summary>
    /// update id dodaci adresy v kosiku
    /// </summary>
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/updatebaskethead",
        data: "{'bah_id':" + bah_id + ",'bah_name':'','cla_id_ship': " + cla_id_ship + " }",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null) {
                if (result.success) {
                    onsucces();
                } else {
                    for (var i = 0; i < result.messages.length; i++) {
                        if (result.messages[0].CssClass.toLowerCase() == 'info') {
                            result.messages[0].CssClass = 'important_message';
                        }
                    }
                    displayMessages(result.messages, true);
                }
            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function sortBasket(bah_id_list, onsucces) {
	/// <summary>
	/// seradi kosik
	/// bah_id_list je serazeny seznam ID hlavicek
	/// <summary>
	if (bah_id_list == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/sortbaskethead",
		data: "{'ids':'" + bah_id_list + "'}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, 0);

		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function deleteBasket(bah_id, onsucces) {
	/// <summary>
	/// vola mazani kosiku
	/// <summary>
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/deletebaskethead",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, bah_id);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function shareBasket(bah_id, onsucces) {
	/// <summary>
	/// sdileni s koncakem
	/// <summary>
	if (!g_share) {
		displayErrorMessage(dictionary.GetValue('msg_fce_disabled'), true);
		return;
	}
		
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/sharebasket",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.success == false) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}
			onsucces(result.additionalData, bah_id);
			if (result.additionalData.shared_link != "" && result.additionalData.shared_link != null) {

			    var tplBtnSend = '<a class="btn btn--submit" href="mailto:?subject=Nabídka&body=' + result.additionalData.shared_link + '">' + dictionary.GetValue('msg_send_mail') + '</a>',
			        tplBtnShowDetail = '<a class="btn btn--open-detail" href="' + result.additionalData.shared_link + '" target="_blank">' + dictionary.GetValue('msg_detail_share') + '</a>',
			        content = '<div class="buttons-area">' + tplBtnShowDetail + tplBtnSend + '</div>';

				fancyPopup({ content: content, title: '<h1>' + dictionary.GetValue('msg_basket_share') + '</h1>', wrapCSS: 'popup-dialog popup-basket-shared', afterClose: function () { reloadPage(); } });

			} else {
			    reloadPage();
			}
			
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function shareBasketEd(bah_id, onsucces) {
	/// <summary>
	/// sdileni s ed
	/// <summary>
	if (!g_share_ed) {
		displayErrorMessage(dictionary.GetValue('msg_fce_disabled'), true);
		return;
	}
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/sharebasketed",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.success == false && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, bah_id);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function addBasket(bah_name, onsucces, b2c) {
	/// <summary>
	/// vytvoreni noveho kosiku
    /// <summary>
    if (b2c == null) b2c = 0;
	if (bah_name == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/addbasket",
		data: "{'bah_name':'" + bah_name + "', 'b2c':'" + b2c + "'}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.success == false) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			onsucces(result.additionalData, bah_name);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

function loadBasketInfo(bah_id, onsucces) {
    /// <summary>
    /// nahraje skryte informace
    /// <summary>
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/loadbasketinfo",
        data: "{'bah_id':" + bah_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.success == false) {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                //displayImportantMessage(result.messages, true);
                displayMessages(result.messages, true);
            }

            onsucces(result.additionalData, bah_id);
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function templateBasket(bah_id, onsucces) {
    /// <summary>
    /// kosik jako sablona (bah_template)
    /// <summary>
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/templatebasket",
        data: "{'bah_id':" + bah_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.success == false && result.messages != null) {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                //displayImportantMessage(result.messages, true);
                displayMessages(result.messages, true);
            }

            onsucces(result.additionalData, bah_id);
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function restoreFromVersion(bah_id) {
    /// <summary>
    /// obnovi kosik z verze
    /// <summary>
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/restorefromversion",
        data: "{'bah_id':" + bah_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages.length != 0) {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                //displayImportantMessage(result.messages, true);
                displayMessages(result.messages, true);
            }
            reloadPage();
            //onsucces(result.additionalData, bah_id);
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function setActiveBasketMulti(bah_id, onsucces) {
    /// <summary>
    /// nastavi kosik jako aktivni
    /// <summary>
    //console.log(bah_id);
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/setactivebasket",
        data: "{'bah_id':" + bah_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages.length != 0) {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                //displayImportantMessage(result.messages, true);
                displayMessages(result.messages, true);
            }

            onsucces(data, bah_id);
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function restoreFromInactive(bah_id) {
    /// <summary>
    /// obnovi kosik jako aktivni
    /// <summary>
    if (bah_id == "")
        return;
    $.ajax({
        type: "POST",
        url: g_root + "/asmx/wsproductbasketmulti.asmx/restorefrominactive",
        data: "{'bah_id':" + bah_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var result = data.d;
            if (result != null && result.messages.length != 0) {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                //displayImportantMessage(result.messages, true);
                displayMessages(result.messages, true);
                
            } else {
            	reloadPage();
            }
           
            //onsucces(result.additionalData, bah_id);
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}

function setActiveBasket(bah_id) {
	/// <summary>
	/// nastavi kosik jako aktivni
	/// <summary>
	if (bah_id == "")
		return;
	$.ajax({
		type: "POST",
		url: g_root + "/asmx/wsproductbasketmulti.asmx/setactivebasket",
		data: "{'bah_id':" + bah_id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			var result = data.d;
			if (result != null && result.messages.length != 0) {
				for (var i = 0; i < result.messages.length; i++) {
					if (result.messages[0].CssClass.toLowerCase() == 'info') {
						result.messages[0].CssClass = 'important_message';
					}
				}
				//displayImportantMessage(result.messages, true);
				displayMessages(result.messages, true);
			}

			//onsucces(result.additionalData, bah_id);
		},
		error: function (data) {
			displayErrorMessage(data.statusText, true);
		}
	});
}

$(document).ready(function () {
	$('.basket-name-field').on('keypress', function (e) {
		if (e.keyCode == 13) {
			$(this).trigger('onblur');

			e.preventDefault();
			return false;
		}
	});
});

function changeBasCurr(bah_id,el) {
    var id = $(el).val();
  //  console.log(id);
    changeBasketCurrency(bah_id, id);
}
function changeBasketCurrency(bah_id,cur_id) {
    if (cur_id == "" || cur_id<=0 || cur_id == undefined)
        return;
    if (bah_id == "" || bah_id <= 0 || bah_id == undefined)
        return;
    var url = g_root + "/asmx/wsproductbasketmulti.asmx/changecurrency";
    $.ajax({
        type: 'POST',
        data: "{'bah_id':" + bah_id + ",'cur_id':" + cur_id + "}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        global: false,
        url: url,
        success: function (data) {
            var result = data.d;
            if (result.success) {
                reloadPage();
            } else {
                for (var i = 0; i < result.messages.length; i++) {
                    if (result.messages[0].CssClass.toLowerCase() == 'info') {
                        result.messages[0].CssClass = 'important_message';
                    }
                }
                displayMessages(result.messages, true);
            }
        },
        error: function (data) {
            displayErrorMessage(data.statusText, true);
        }
    });
}


// popup okno pri zvoleni kopirovani polozek
function copyBasketItemsDialog(obj_id, objSourceType) {
    var url = g_root + "/ajaxpages/basketcopyitems_ajx.aspx";

    showLoading();

    $.ajax({
        type: 'POST',
        data: { obj_id_source: obj_id, obj_source_type: objSourceType },
        dataType: "text",
        global: false,
        url: url,
        success: function (data) {
            hideLoading();
            fancyPopup({ content: data, wrapCSS: 'popup-setRate-global', maxWidth: deviceScreens.sm, widthToMaxWidth: true });
        }
    });
};
(function(C,p){"object"===typeof exports?p(exports):"function"===typeof define&&define.amd?define(["exports"],p):p(C)})(this,function(C){function p(a){this._targetElement=a;this._introItems=[];this._options={nextLabel:"Next &rarr;",prevLabel:"&larr; Back",skipLabel:"Skip",doneLabel:"Done",hidePrev:!1,hideNext:!1,tooltipPosition:"bottom",tooltipClass:"",highlightClass:"",exitOnEsc:!0,exitOnOverlayClick:!0,showStepNumbers:!0,keyboardNavigation:!0,showButtons:!0,showBullets:!0,showProgress:!1,scrollToElement:!0,
overlayOpacity:0.8,scrollPadding:30,positionPrecedence:["bottom","top","right","left"],disableInteraction:!1,hintPosition:"top-middle",hintButtonLabel:"Got it",hintAnimation:!0}}function T(a){var b=[],c=this;if(this._options.steps)for(var d=0,f=this._options.steps.length;d<f;d++){var e=y(this._options.steps[d]);e.step=b.length+1;"string"===typeof e.element&&(e.element=document.querySelector(e.element));if("undefined"===typeof e.element||null==e.element){var g=document.querySelector(".introjsFloatingElement");
null==g&&(g=document.createElement("div"),g.className="introjsFloatingElement",document.body.appendChild(g));e.element=g;e.position="floating"}null!=e.element&&b.push(e)}else{f=a.querySelectorAll("*[data-intro]");if(1>f.length)return!1;d=0;for(e=f.length;d<e;d++)if(g=f[d],"none"!=g.style.display){var l=parseInt(g.getAttribute("data-step"),10);0<l&&(b[l-1]={element:g,intro:g.getAttribute("data-intro"),step:parseInt(g.getAttribute("data-step"),10),tooltipClass:g.getAttribute("data-tooltipClass"),highlightClass:g.getAttribute("data-highlightClass"),
position:g.getAttribute("data-position")||this._options.tooltipPosition})}d=l=0;for(e=f.length;d<e;d++)if(g=f[d],null==g.getAttribute("data-step")){for(;"undefined"!=typeof b[l];)l++;b[l]={element:g,intro:g.getAttribute("data-intro"),step:l+1,tooltipClass:g.getAttribute("data-tooltipClass"),highlightClass:g.getAttribute("data-highlightClass"),position:g.getAttribute("data-position")||this._options.tooltipPosition}}}d=[];for(f=0;f<b.length;f++)b[f]&&d.push(b[f]);b=d;b.sort(function(a,b){return a.step-
b.step});c._introItems=b;U.call(c,a)&&(z.call(c),a.querySelector(".introjs-skipbutton"),a.querySelector(".introjs-nextbutton"),c._onKeyDown=function(b){if(27===b.keyCode&&!0==c._options.exitOnEsc)void 0!=c._introExitCallback&&c._introExitCallback.call(c),A.call(c,a);else if(37===b.keyCode)E.call(c);else if(39===b.keyCode)z.call(c);else if(13===b.keyCode){var d=b.target||b.srcElement;d&&0<d.className.indexOf("introjs-prevbutton")?E.call(c):d&&0<d.className.indexOf("introjs-skipbutton")?(c._introItems.length-
1==c._currentStep&&"function"===typeof c._introCompleteCallback&&c._introCompleteCallback.call(c),void 0!=c._introExitCallback&&c._introExitCallback.call(c),A.call(c,a)):z.call(c);b.preventDefault?b.preventDefault():b.returnValue=!1}},c._onResize=function(a){r.call(c,document.querySelector(".introjs-helperLayer"));r.call(c,document.querySelector(".introjs-tooltipReferenceLayer"))},window.addEventListener?(this._options.keyboardNavigation&&window.addEventListener("keydown",c._onKeyDown,!0),window.addEventListener("resize",
c._onResize,!0)):document.attachEvent&&(this._options.keyboardNavigation&&document.attachEvent("onkeydown",c._onKeyDown),document.attachEvent("onresize",c._onResize)));return!1}function y(a){if(null==a||"object"!=typeof a||"undefined"!=typeof a.nodeType)return a;var b={},c;for(c in a)b[c]="undefined"!=typeof jQuery&&a[c]instanceof jQuery?a[c]:y(a[c]);return b}function z(){this._direction="forward";"undefined"===typeof this._currentStep?this._currentStep=0:++this._currentStep;if(this._introItems.length<=
this._currentStep)"function"===typeof this._introCompleteCallback&&this._introCompleteCallback.call(this),A.call(this,this._targetElement);else{var a=this._introItems[this._currentStep];"undefined"!==typeof this._introBeforeChangeCallback&&this._introBeforeChangeCallback.call(this,a.element);N.call(this,a)}}function E(){this._direction="backward";if(0===this._currentStep)return!1;var a=this._introItems[--this._currentStep];"undefined"!==typeof this._introBeforeChangeCallback&&this._introBeforeChangeCallback.call(this,
a.element);N.call(this,a)}function A(a){var b=a.querySelectorAll(".introjs-overlay");if(b&&0<b.length)for(var c=b.length-1;0<=c;c--){var d=b[c];d.style.opacity=0;setTimeout(function(){this.parentNode&&this.parentNode.removeChild(this)}.bind(d),500)}(c=a.querySelector(".introjs-helperLayer"))&&c.parentNode.removeChild(c);(c=a.querySelector(".introjs-tooltipReferenceLayer"))&&c.parentNode.removeChild(c);(a=a.querySelector(".introjs-disableInteraction"))&&a.parentNode.removeChild(a);(a=document.querySelector(".introjsFloatingElement"))&&
a.parentNode.removeChild(a);if(a=document.querySelector(".introjs-showElement"))a.className=a.className.replace(/introjs-[a-zA-Z]+/g,"").replace(/^\s+|\s+$/g,"");if((a=document.querySelectorAll(".introjs-fixParent"))&&0<a.length)for(c=a.length-1;0<=c;c--)a[c].className=a[c].className.replace(/introjs-fixParent/g,"").replace(/^\s+|\s+$/g,"");window.removeEventListener?window.removeEventListener("keydown",this._onKeyDown,!0):document.detachEvent&&document.detachEvent("onkeydown",this._onKeyDown);this._currentStep=
void 0}function G(a,b,c,d,f){var e="",g,l;f=f||!1;b.style.top=null;b.style.right=null;b.style.bottom=null;b.style.left=null;b.style.marginLeft=null;b.style.marginTop=null;c.style.display="inherit";"undefined"!=typeof d&&null!=d&&(d.style.top=null,d.style.left=null);if(this._introItems[this._currentStep]){e=this._introItems[this._currentStep];e="string"===typeof e.tooltipClass?e.tooltipClass:this._options.tooltipClass;b.className=("introjs-tooltip "+e).replace(/^\s+|\s+$/g,"");l=this._introItems[this._currentStep].position;
if(("auto"==l||"auto"==this._options.tooltipPosition)&&"floating"!=l){e=l;g=this._options.positionPrecedence.slice();l=H();var x=t(b).height+10,q=t(b).width+20,k=t(a),m="floating";k.left+q>l.width||0>k.left+k.width/2-q?(s(g,"bottom"),s(g,"top")):(k.height+k.top+x>l.height&&s(g,"bottom"),0>k.top-x&&s(g,"top"));k.width+k.left+q>l.width&&s(g,"right");0>k.left-q&&s(g,"left");0<g.length&&(m=g[0]);e&&"auto"!=e&&-1<g.indexOf(e)&&(m=e);l=m}e=t(a);a=t(b);g=H();switch(l){case "top":c.className="introjs-arrow bottom";
I(e,f?0:15,a,g,b);b.style.bottom=e.height+20+"px";break;case "right":b.style.left=e.width+20+"px";e.top+a.height>g.height?(c.className="introjs-arrow left-bottom",b.style.top="-"+(a.height-e.height-20)+"px"):c.className="introjs-arrow left";break;case "left":f||!0!=this._options.showStepNumbers||(b.style.top="15px");e.top+a.height>g.height?(b.style.top="-"+(a.height-e.height-20)+"px",c.className="introjs-arrow right-bottom"):c.className="introjs-arrow right";b.style.right=e.width+20+"px";break;case "floating":c.style.display=
"none";b.style.left="50%";b.style.top="50%";b.style.marginLeft="-"+a.width/2+"px";b.style.marginTop="-"+a.height/2+"px";"undefined"!=typeof d&&null!=d&&(d.style.left="-"+(a.width/2+18)+"px",d.style.top="-"+(a.height/2+18)+"px");break;case "bottom-right-aligned":c.className="introjs-arrow top-right";O(e,0,a,b);b.style.top=e.height+20+"px";break;case "bottom-middle-aligned":c.className="introjs-arrow top-middle";c=e.width/2-a.width/2;f&&(c+=5);O(e,c,a,b)&&(b.style.right=null,I(e,c,a,g,b));b.style.top=
e.height+20+"px";break;default:c.className="introjs-arrow top",I(e,0,a,g,b),b.style.top=e.height+20+"px"}}}function I(a,b,c,d,f){if(a.left+b+c.width>d.width)return f.style.left=d.width-c.width-a.left+"px",!1;f.style.left=b+"px";return!0}function O(a,b,c,d){if(0>a.left+a.width-b-c.width)return d.style.left=-a.left+"px",!1;d.style.right=b+"px";return!0}function s(a,b){-1<a.indexOf(b)&&a.splice(a.indexOf(b),1)}function r(a){if(a&&this._introItems[this._currentStep]){var b=this._introItems[this._currentStep],
c=t(b.element),d=10;J(b.element)?a.className+=" introjs-fixedTooltip":a.className=a.className.replace(" introjs-fixedTooltip","");"floating"==b.position&&(d=0);a.setAttribute("style","width: "+(c.width+d)+"px; height:"+(c.height+d)+"px; top:"+(c.top-5)+"px;left: "+(c.left-5)+"px;")}}function V(){var a=document.querySelector(".introjs-disableInteraction");null===a&&(a=document.createElement("div"),a.className="introjs-disableInteraction",this._targetElement.appendChild(a));r.call(this,a)}function D(a){a.setAttribute("role",
"button");a.tabIndex=0}function N(a){"undefined"!==typeof this._introChangeCallback&&this._introChangeCallback.call(this,a.element);var b=this,c=document.querySelector(".introjs-helperLayer"),d=document.querySelector(".introjs-tooltipReferenceLayer"),f="introjs-helperLayer";t(a.element);"string"===typeof a.highlightClass&&(f+=" "+a.highlightClass);"string"===typeof this._options.highlightClass&&(f+=" "+this._options.highlightClass);if(null!=c){var e=d.querySelector(".introjs-helperNumberLayer"),g=
d.querySelector(".introjs-tooltiptext"),l=d.querySelector(".introjs-arrow"),x=d.querySelector(".introjs-tooltip"),q=d.querySelector(".introjs-skipbutton"),k=d.querySelector(".introjs-prevbutton"),m=d.querySelector(".introjs-nextbutton");c.className=f;x.style.opacity=0;x.style.display="none";if(null!=e){var h=this._introItems[0<=a.step-2?a.step-2:0];if(null!=h&&"forward"==this._direction&&"floating"==h.position||"backward"==this._direction&&"floating"==a.position)e.style.opacity=0}r.call(b,c);r.call(b,
d);if((h=document.querySelectorAll(".introjs-fixParent"))&&0<h.length)for(f=h.length-1;0<=f;f--)h[f].className=h[f].className.replace(/introjs-fixParent/g,"").replace(/^\s+|\s+$/g,"");if(h=document.querySelector(".introjs-showElement"))h.className=h.className.replace(/introjs-[a-zA-Z]+/g,"").replace(/^\s+|\s+$/g,"");b._lastShowElementTimer&&clearTimeout(b._lastShowElementTimer);b._lastShowElementTimer=setTimeout(function(){null!=e&&(e.innerHTML=a.step);g.innerHTML=a.intro;x.style.display="block";
G.call(b,a.element,x,l,e);b._options.showBullets&&(d.querySelector(".introjs-bullets li > a.active").className="",d.querySelector('.introjs-bullets li > a[data-stepnumber="'+a.step+'"]').className="active");d.querySelector(".introjs-progress .introjs-progressbar").setAttribute("style","width:"+P.call(b)+"%;");x.style.opacity=1;e&&(e.style.opacity=1);-1===m.tabIndex?q.focus():m.focus()},350)}else{var p=document.createElement("div"),k=document.createElement("div"),c=document.createElement("div"),n=
document.createElement("div"),s=document.createElement("div"),w=document.createElement("div"),F=document.createElement("div"),u=document.createElement("div");p.className=f;k.className="introjs-tooltipReferenceLayer";r.call(b,p);r.call(b,k);this._targetElement.appendChild(p);this._targetElement.appendChild(k);c.className="introjs-arrow";s.className="introjs-tooltiptext";s.innerHTML=a.intro;w.className="introjs-bullets";!1===this._options.showBullets&&(w.style.display="none");for(var p=document.createElement("ul"),
f=0,C=this._introItems.length;f<C;f++){var y=document.createElement("li"),B=document.createElement("a");B.onclick=function(){b.goToStep(this.getAttribute("data-stepnumber"))};f===a.step-1&&(B.className="active");D(B);B.innerHTML="&nbsp;";B.setAttribute("data-stepnumber",this._introItems[f].step);y.appendChild(B);p.appendChild(y)}w.appendChild(p);F.className="introjs-progress";!1===this._options.showProgress&&(F.style.display="none");f=document.createElement("div");f.className="introjs-progressbar";
f.setAttribute("style","width:"+P.call(this)+"%;");F.appendChild(f);u.className="introjs-tooltipbuttons";!1===this._options.showButtons&&(u.style.display="none");n.className="introjs-tooltip";n.appendChild(s);n.appendChild(w);n.appendChild(F);!0==this._options.showStepNumbers&&(h=document.createElement("span"),h.className="introjs-helperNumberLayer",h.innerHTML=a.step,k.appendChild(h));n.appendChild(c);k.appendChild(n);m=document.createElement("a");m.onclick=function(){b._introItems.length-1!=b._currentStep&&
z.call(b)};D(m);m.innerHTML=this._options.nextLabel;k=document.createElement("a");k.onclick=function(){0!=b._currentStep&&E.call(b)};D(k);k.innerHTML=this._options.prevLabel;q=document.createElement("a");q.className="introjs-button introjs-skipbutton";D(q);q.innerHTML=this._options.skipLabel;q.onclick=function(){b._introItems.length-1==b._currentStep&&"function"===typeof b._introCompleteCallback&&b._introCompleteCallback.call(b);b._introItems.length-1!=b._currentStep&&"function"===typeof b._introExitCallback&&
b._introExitCallback.call(b);A.call(b,b._targetElement)};u.appendChild(q);1<this._introItems.length&&(u.appendChild(k),u.appendChild(m));n.appendChild(u);G.call(b,a.element,n,c,h)}!0===this._options.disableInteraction&&V.call(b);k.removeAttribute("tabIndex");m.removeAttribute("tabIndex");0==this._currentStep&&1<this._introItems.length?(m.className="introjs-button introjs-nextbutton",!0==this._options.hidePrev?(k.className="introjs-button introjs-prevbutton introjs-hidden",m.className+=" introjs-fullbutton"):
k.className="introjs-button introjs-prevbutton introjs-disabled",k.tabIndex="-1",q.innerHTML=this._options.skipLabel):this._introItems.length-1==this._currentStep||1==this._introItems.length?(q.innerHTML=this._options.doneLabel,k.className="introjs-button introjs-prevbutton",!0==this._options.hideNext?(m.className="introjs-button introjs-nextbutton introjs-hidden",k.className+=" introjs-fullbutton"):m.className="introjs-button introjs-nextbutton introjs-disabled",m.tabIndex="-1"):(k.className="introjs-button introjs-prevbutton",
m.className="introjs-button introjs-nextbutton",q.innerHTML=this._options.skipLabel);m.focus();a.element.className+=" introjs-showElement";h=v(a.element,"position");"absolute"!==h&&("relative"!==h&&"fixed"!==h)&&(a.element.className+=" introjs-relativePosition");for(h=a.element.parentNode;null!=h&&h.tagName&&"body"!==h.tagName.toLowerCase();){c=v(h,"z-index");n=parseFloat(v(h,"opacity"));u=v(h,"transform")||v(h,"-webkit-transform")||v(h,"-moz-transform")||v(h,"-ms-transform")||v(h,"-o-transform");
if(/[0-9]+/.test(c)||1>n||"none"!==u&&void 0!==u)h.className+=" introjs-fixParent";h=h.parentNode}W(a.element)||!0!==this._options.scrollToElement||(n=a.element.getBoundingClientRect(),h=H().height,c=n.bottom-(n.bottom-n.top),n=n.bottom-h,0>c||a.element.clientHeight>h?window.scrollBy(0,c-this._options.scrollPadding):window.scrollBy(0,n+70+this._options.scrollPadding));"undefined"!==typeof this._introAfterChangeCallback&&this._introAfterChangeCallback.call(this,a.element)}function v(a,b){var c="";
a.currentStyle?c=a.currentStyle[b]:document.defaultView&&document.defaultView.getComputedStyle&&(c=document.defaultView.getComputedStyle(a,null).getPropertyValue(b));return c&&c.toLowerCase?c.toLowerCase():c}function J(a){var b=a.parentNode;return b&&"HTML"!==b.nodeName?"fixed"==v(a,"position")?!0:J(b):!1}function H(){if(void 0!=window.innerWidth)return{width:window.innerWidth,height:window.innerHeight};var a=document.documentElement;return{width:a.clientWidth,height:a.clientHeight}}function W(a){a=
a.getBoundingClientRect();return 0<=a.top&&0<=a.left&&a.bottom+80<=window.innerHeight&&a.right<=window.innerWidth}function U(a){var b=document.createElement("div"),c="",d=this;b.className="introjs-overlay";if(a.tagName&&"body"!==a.tagName.toLowerCase()){var f=t(a);f&&(c+="width: "+f.width+"px; height:"+f.height+"px; top:"+f.top+"px;left: "+f.left+"px;",b.setAttribute("style",c))}else c+="top: 0;bottom: 0; left: 0;right: 0;position: fixed;",b.setAttribute("style",c);a.appendChild(b);b.onclick=function(){!0==
d._options.exitOnOverlayClick&&(void 0!=d._introExitCallback&&d._introExitCallback.call(d),A.call(d,a))};setTimeout(function(){c+="opacity: "+d._options.overlayOpacity.toString()+";";b.setAttribute("style",c)},10);return!0}function w(){var a=this._targetElement.querySelector(".introjs-hintReference");if(a){var b=a.getAttribute("data-step");a.parentNode.removeChild(a);return b}}function Q(a){this._introItems=[];if(this._options.hints){a=0;for(var b=this._options.hints.length;a<b;a++){var c=y(this._options.hints[a]);
"string"===typeof c.element&&(c.element=document.querySelector(c.element));c.hintPosition=c.hintPosition||this._options.hintPosition;c.hintAnimation=c.hintAnimation||this._options.hintAnimation;null!=c.element&&this._introItems.push(c)}}else{c=a.querySelectorAll("*[data-hint]");if(1>c.length)return!1;a=0;for(b=c.length;a<b;a++){var d=c[a],f=d.getAttribute("data-hintAnimation"),f=f?"true"==f:this._options.hintAnimation;this._introItems.push({element:d,hint:d.getAttribute("data-hint"),hintPosition:d.getAttribute("data-hintPosition")||
this._options.hintPosition,hintAnimation:f,tooltipClass:d.getAttribute("data-tooltipClass"),position:d.getAttribute("data-position")||this._options.tooltipPosition})}}X.call(this);document.addEventListener?(document.addEventListener("click",w.bind(this),!1),window.addEventListener("resize",K.bind(this),!0)):document.attachEvent&&(document.attachEvent("onclick",w.bind(this)),document.attachEvent("onresize",K.bind(this)))}function K(){for(var a=0,b=this._introItems.length;a<b;a++){var c=this._introItems[a];
"undefined"!=typeof c.targetElement&&R.call(this,c.hintPosition,c.element,c.targetElement)}}function L(a){w.call(this);var b=this._targetElement.querySelector('.introjs-hint[data-step="'+a+'"]');b&&(b.className+=" introjs-hidehint");"undefined"!==typeof this._hintCloseCallback&&this._hintCloseCallback.call(this,a)}function S(a){if(a=this._targetElement.querySelector('.introjs-hint[data-step="'+a+'"]'))a.className=a.className.replace(/introjs\-hidehint/g,"")}function X(){var a=this,b=document.querySelector(".introjs-hints");
null==b&&(b=document.createElement("div"),b.className="introjs-hints");for(var c=0,d=this._introItems.length;c<d;c++){var f=this._introItems[c];if(!document.querySelector('.introjs-hint[data-step="'+c+'"]')){var e=document.createElement("a");D(e);(function(b,c,d){b.onclick=function(e){e=e?e:window.event;e.stopPropagation&&e.stopPropagation();null!=e.cancelBubble&&(e.cancelBubble=!0);Y.call(a,b,c,d)}})(e,f,c);e.className="introjs-hint";f.hintAnimation||(e.className+=" introjs-hint-no-anim");J(f.element)&&
(e.className+=" introjs-fixedhint");var g=document.createElement("div");g.className="introjs-hint-dot";var l=document.createElement("div");l.className="introjs-hint-pulse";e.appendChild(g);e.appendChild(l);e.setAttribute("data-step",c);f.targetElement=f.element;f.element=e;R.call(this,f.hintPosition,e,f.targetElement);b.appendChild(e)}}document.body.appendChild(b);"undefined"!==typeof this._hintsAddedCallback&&this._hintsAddedCallback.call(this)}function R(a,b,c){c=t.call(this,c);switch(a){default:case "top-left":b.style.left=
c.left+"px";b.style.top=c.top+"px";break;case "top-right":b.style.left=c.left+c.width+"px";b.style.top=c.top+"px";break;case "bottom-left":b.style.left=c.left+"px";b.style.top=c.top+c.height+"px";break;case "bottom-right":b.style.left=c.left+c.width+"px";b.style.top=c.top+c.height+"px";break;case "bottom-middle":b.style.left=c.left+c.width/2+"px";b.style.top=c.top+c.height+"px";break;case "top-middle":b.style.left=c.left+c.width/2+"px",b.style.top=c.top+"px"}}function Y(a,b,c){"undefined"!==typeof this._hintClickCallback&&
this._hintClickCallback.call(this,a,b,c);var d=w.call(this);if(parseInt(d,10)!=c){var d=document.createElement("div"),f=document.createElement("div"),e=document.createElement("div"),g=document.createElement("div");d.className="introjs-tooltip";d.onclick=function(a){a.stopPropagation?a.stopPropagation():a.cancelBubble=!0};f.className="introjs-tooltiptext";var l=document.createElement("p");l.innerHTML=b.hint;b=document.createElement("a");b.className="introjs-button";b.innerHTML=this._options.hintButtonLabel;
b.onclick=L.bind(this,c);f.appendChild(l);f.appendChild(b);e.className="introjs-arrow";d.appendChild(e);d.appendChild(f);this._currentStep=a.getAttribute("data-step");g.className="introjs-tooltipReferenceLayer introjs-hintReference";g.setAttribute("data-step",a.getAttribute("data-step"));r.call(this,g);g.appendChild(d);document.body.appendChild(g);G.call(this,a,d,e,null,!0)}}function t(a){var b={};b.width=a.offsetWidth;b.height=a.offsetHeight;for(var c=0,d=0;a&&!isNaN(a.offsetLeft)&&!isNaN(a.offsetTop);)c+=
a.offsetLeft,d+=a.offsetTop,a=a.offsetParent;b.top=d;b.left=c;return b}function P(){return 100*(parseInt(this._currentStep+1,10)/this._introItems.length)}var M=function(a){if("object"===typeof a)return new p(a);if("string"===typeof a){if(a=document.querySelector(a))return new p(a);throw Error("There is no element with given selector.");}return new p(document.body)};M.version="2.4.0";M.fn=p.prototype={clone:function(){return new p(this)},setOption:function(a,b){this._options[a]=b;return this},setOptions:function(a){var b=
this._options,c={},d;for(d in b)c[d]=b[d];for(d in a)c[d]=a[d];this._options=c;return this},start:function(){T.call(this,this._targetElement);return this},goToStep:function(a){this._currentStep=a-2;"undefined"!==typeof this._introItems&&z.call(this);return this},addStep:function(a){this._options.steps||(this._options.steps=[]);this._options.steps.push(a);return this},addSteps:function(a){if(a.length){for(var b=0;b<a.length;b++)this.addStep(a[b]);return this}},nextStep:function(){z.call(this);return this},
previousStep:function(){E.call(this);return this},exit:function(){A.call(this,this._targetElement);return this},refresh:function(){r.call(this,document.querySelector(".introjs-helperLayer"));r.call(this,document.querySelector(".introjs-tooltipReferenceLayer"));K.call(this);return this},onbeforechange:function(a){if("function"===typeof a)this._introBeforeChangeCallback=a;else throw Error("Provided callback for onbeforechange was not a function");return this},onchange:function(a){if("function"===typeof a)this._introChangeCallback=
a;else throw Error("Provided callback for onchange was not a function.");return this},onafterchange:function(a){if("function"===typeof a)this._introAfterChangeCallback=a;else throw Error("Provided callback for onafterchange was not a function");return this},oncomplete:function(a){if("function"===typeof a)this._introCompleteCallback=a;else throw Error("Provided callback for oncomplete was not a function.");return this},onhintsadded:function(a){if("function"===typeof a)this._hintsAddedCallback=a;else throw Error("Provided callback for onhintsadded was not a function.");
return this},onhintclick:function(a){if("function"===typeof a)this._hintClickCallback=a;else throw Error("Provided callback for onhintclick was not a function.");return this},onhintclose:function(a){if("function"===typeof a)this._hintCloseCallback=a;else throw Error("Provided callback for onhintclose was not a function.");return this},onexit:function(a){if("function"===typeof a)this._introExitCallback=a;else throw Error("Provided callback for onexit was not a function.");return this},addHints:function(){Q.call(this,
this._targetElement);return this},hideHint:function(a){L.call(this,a);return this},hideHints:function(){var a=this._targetElement.querySelectorAll(".introjs-hint");if(a&&0<a.length)for(var b=0;b<a.length;b++)L.call(this,a[b].getAttribute("data-step"));return this},showHint:function(a){S.call(this,a);return this},showHints:function(){var a=this._targetElement.querySelectorAll(".introjs-hint");if(a&&0<a.length)for(var b=0;b<a.length;b++)S.call(this,a[b].getAttribute("data-step"));else Q.call(this,this._targetElement);
return this}};return C.introJs=M});
;
var isTouch = Modernizr.touchevents;

// parametr kvuli mobilnim zarizenim - pokud neni dotyk tak click jinak se udalost nahradi za touchstart
var evtClickTouch = 'click';

var deviceScreens = {
	xxs: 320,
	xs: 480,
	sm: 768,
	md: 992,
	lg: 1200,
	xlg: 1450
};

// metoda pro ajaxove docteni menu
var _loadAjxNav = function (li, menuType) {
	var _elxNav = this,
		$item = $(li),
		$subMenu = $item.find('> .sub-menu:eq(0)');

	if (typeof menuType === 'undefined') {
		menuType = 'head';
	}

	var preloader = new ElxPreloader($item.find('.btn-toggle .' + menuType + '-nav_toggle-icon'), { displayMode: 'replaceEl' });

	if ($item.hasClass('has-childs')) {
		var page = 'panelnavigator_ajx.aspx',
			url = g_root + '/ajaxpages/' + page,
			pnc_id = $item.attr('data-menu-pnc'),
			pnsup_id = $item.attr('data-menu-pnsub'),
			navdata = pnsup_id + ',' + pnc_id;

		if ($subMenu.length == 0) {
			App.checkSession();

			preloader.start();

			$.ajax({
				type: 'POST',
				global: false,
				url: url,
				data: { navdata: navdata, menuType: menuType },
				success: function (data) {
					preloader.stop();

					var txt = (data.replace(/[\r\n]/g, "")).replace(/ /g, '');
					if (txt.length > 0) {
						$item.append(data);

						_elxNav.navChildOpen($item);
					}
				}
			});
		} else {
			_elxNav.navChildOpen($item);
		}
	}
}

// definice aside menu
var AsideMenu = new ElxNav({
	hoverCallBacks: {
		2: function (li) {
			_loadAjxNav.call(this, li, 'aside');
		}
	},
	clickCallBacks: {
		1: function (li) {
			var _elxNav = this,
				$item = $(li);

			_elxNav.navChildOpen($item);
		}/*,
		2: function (li) {
			_loadAjxNav.call(this, li);
		}*/
	}
});

var subCategoryMenu = function () {
	var $btn = {},
		$subCategoryMenu = {},
		openClass = App.settings.openClass,
		isOpen = false;

	// init jquery objektu
	var _jQElInit = function () {
		$btn = $.isEmptyObject($btn) ? $('#subCategoryMenuBtnToggle') : $btn;
		$subCategoryMenu = $.isEmptyObject($subCategoryMenu) ? $('#subCategoryMenu') : $subCategoryMenu;
	};

	return {
		isOpen: function () {
			return isOpen;
		},
		open: function () {
			_jQElInit();

			$btn.addClass(openClass);
			$subCategoryMenu.addClass(openClass);
			isOpen = true;
		},
		close: function () {
			_jQElInit();

			$btn.removeClass(openClass);
			$subCategoryMenu.removeClass(openClass);

			isOpen = false;
		},
		toggle: function () {
			if ($btn.hasClass(openClass)) {
				this.close();
			} else {
				this.open();
			}
		},
		init: function () {
			var _this = this;

			_jQElInit();

			// kvuli moznosti zavrit box kliknutim bokem do stranky - zastavi se probublavani na child elementy
			$('body').on('click', $subCategoryMenu.selector, function (e) {
				e.stopPropagation();
			});

			$('body').on('click', $btn.selector, function (e) {
				e.stopPropagation();
			});

			$(document).on('click', function (e) {

				if ($subCategoryMenu.hasClass(openClass) && !$btn.is(e.target)) {
					_this.close();
				}
			});
		}
	};
}();

var btnPageScrollTopControl = function () {
	var $btn = $('#btnPageScrollTop');

	if ($btn.length === 0) {
		return;
	}

	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$btn.removeClass('hide');
		} else {
			$btn.addClass('hide');
		}
	});

	$btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});
};

(function ($) {

	jQuery(document).on('mousemove', function (event) {
		App.props.currMouseposition.x = event.pageX,
		App.props.currMouseposition.y = event.pageY - $(window).scrollTop();
	});

	$(document).ready(function (e) {

		// tlacitko pro odscrolovani stranky nahoru
		btnPageScrollTopControl();

		// init aside menu
		AsideMenu.init('#subCategoryMenu');

		subCategoryMenu.init();

		// hlidani html5 storage - pokud neni stanoveno jinak tak po 30minutach dojde k vymazani
		HtmlStorageCacheControl();

		// slouzi pro identifikaci zda browser umi svg START
		if (!Modernizr.svg) {
			$('img[src*="svg"]').attr('src', function () {
				return $(this).attr('src').replace('.svg', '.png');
			});
		}

		// slouzi pro identifikaci zda browser umi autofocus START
		if (!Modernizr.input.autofocus) {
			$('[autofocus="autofocus"]').focus();
		}

		$('.focus').on('load', function () {
			$('.focus').focus();
		});

		// placeholder pro vsechny prohlizece START
		if (!Modernizr.input.placeholder) {
			$('[placeholder]').each(function () {
				if (!$(this).val()) {
					this.value = $(this).attr('placeholder');
				}
				$(this).focus(function () {
					if (this.value == $(this).attr('placeholder')) {
						this.value = '';
					}
				});
				$(this).blur(function () {
					if (this.value == '') {
						this.value = $(this).attr('placeholder');
					}
				});
			});
		} else {
			var defFieldValue = '';
			$('[placeholder]').each(function () {
				var thisEl = $(this);
				thisEl.focus(function () {
					defFieldValue = $(this).attr('placeholder');
					if ($(this).attr('placeholder') == defFieldValue) {
						$(this).attr('placeholder', '');
					}
				});
				thisEl.blur(function () {
					if ($(this).attr('placeholder') == '') {
						$(this).attr('placeholder', defFieldValue);
					}
				});
			});
		}

		// kontrola povolenych cookies
		if (!are_cookies_enabled()) {
			displayErrorMessage('Pro správné použití aplikace musíte mít povoleny Cookies. Prosím, zapněte si je.');
		}

		// nastaveni tridy pri focusu na vyhledavacim poli
		$('.search-form').find('.input-text').bind('focus', function () {
			if (!$('.search-form').hasClass('is-focus')) {
				$('.search-form').addClass('is-focus');
			}
		});

		$('.search-form').find('.input-text').bind('blur', function (e) {
			if ($('.search-form').hasClass('is-focus')) {
				$('.search-form').removeClass('is-focus open');
			}
		});


		// slouzi pro zobrazovani a skryvani boxu dle potreby
		$('.fn-toggle-el-control').togleElControl();

		// metoda pro tlacitko s moznosti rozbaleni nabidky
		$('.btn-group').find('> .btn-action').click(function (e) {
			e.stopPropagation();
			var $clickEl = $(this);
			var $elements = $('.btn-group');

			$elements.each(function () {
				if ($clickEl.get(0) != $(this).find('> .btn-action').get(0)) {
					$(this).removeClass('open');
				}
			});


			if ($(this).parent().hasClass('open')) {
				$(this).parent().removeClass('open');
			} else {
				$(this).parent().addClass('open');
			}
		});


		// skryvani boxu kliknutim bokem do stranky
		$(document).on(evtClickTouch, function (e) {

			if (isTouch) {

				if ($('.user-box .user').hasClass('open') && !$('.user-box .user').is(e.target)) {
					$('.user-box .user').removeClass('open');
				}

				if ($('.basket-list-box').hasClass('open') && !$('.basket-list-box').is(e.target)) {
					hideBasketList();
				}
			}


			if ($('.btn-group').hasClass('open') && !$('.btn-group').find('> ul').is(e.target)) {
				$('.btn-group').removeClass('open');
			}
		});

		respSrchControl();
	});


	// udalosti pri resize
	$(window).on('resize', function () {
		respSrchControl();
	});

	

	
	$.ajaxSetup({
		// Disable caching of AJAX responses
		cache: false,
		beforeSend: setCsrfToken
	});	

	$(document).ajaxStart(function () {
		showLoading();
		// vola funkci pro kontrolu session prihlaseneho uzivatele
		App.checkSession();
	});

	$(document).ajaxStop(function () {
		hideLoading();
	});

}(jQuery));


/*
 * =============================================================
 * Metoda pro puvodni nastaveni hodnot formulare (reset)
 * jako parametr opt je potreba doplni jSON objekt - viz priklad
 * var opt = { id1: '', id2: 'checked' }
 * TODO - potreba dodelat cbx, textarea, password a select
 * =============================================================
 */
function setDefaultFilterPanel(opt) {

	for (var key in opt) {

		var $obj = $('#' + key);

		if ($obj.attr('type') == 'radio') {
			var objName = $obj.attr('name');
			$('[name="' + objName + '"]').removeAttr('checked');
			$obj.attr('checked', opt[key]);
		}

		if ($obj.attr('type') == 'text') {

			if (opt[key].length == 0) {
				$obj.removeAttr('value');
			}

			$obj.val(opt[key]);
		}
	}
}


/*
 * =============================================================
 * Metoda pro kompletni smazani formulare
 * =============================================================
 * @param el - Element od kterého se má začít.
 * @param fullForm - Pokud je `true` tak se validuje celý formulář - tedy vychází se od prvního elementu form.
 */
function resetFilterPanel(el, fullForm = true) {
	const $panel = fullForm ? $(el).closest('form') : $(el);


	$panel.find(':input').each(function () {
		switch (this.type) {
			case 'select-multiple':
				$(this).removeAttr('value');
				// pro select2
				if (this.className.includes("select2")) {
					$(this).val(null).trigger('change');
				}
				break;
			case 'password':			
			case 'select-one':
			case 'text':
			case 'textarea':
				$(this).removeAttr('value');
				break;
			case 'checkbox':
			case 'radio':
				$(this).removeAttr('checked');
		}
	});

	$panel.closest('form').find('select').each(function () {
		$(this).find('option').removeAttr('selected');
	});
}


function toggleCheckCbx(cbxControl, cbxItemsClass) {
	if (!cbxItemsClass) {
		return;
	}

	var $cbxControl = $(cbxControl);
	var $cbxItems = $('.' + cbxItemsClass);



	if ($cbxControl.prop('checked')) {
		$cbxItems.prop('checked', true);
	} else {
		$cbxItems.prop('checked', false);
	}

}

/*
 * =============================================================
 * Metoda pro skryvani a odkryvani elementu by Jarda Sarzik
 * =============================================================
 */

(function ($) {

	var pluginElItems = null;

	$.togleElControl = function (el, options) {
		var base = this;

		base.$el = $(el);
		base.el = el;

		base.$el.data("togleElControl", base);

		base.elcontrol = base.$el.data('elcontrol');
		base.$elcontrol = $('.' + base.elcontrol);

		base.setDefault = function () {
			pluginElItems.each(function () {
				$(this).removeClass('open');
				$('.' + $(this).data('elcontrol')).removeClass('open');
			});
		};

		base.closeOtherBoxes = function () {

			if (base.elControlParent != '') {
				// schovani vsech otevrenych boxu v ramci parenta krome soucasne otevreneho
				pluginElItems.each(function () {
					if ($(this).parents(base.elControlParent).length == 1) {
						if (base.elcontrol != $(this).data('elcontrol')) {
							$(this).removeClass('open');
							$('.' + $(this).data('elcontrol')).removeClass('open');
						}
					}
				});
			} else {
				// schovani vsech otevrenych boxu na cele strance krome soucasne otevreneho
				pluginElItems.each(function () {
					if (base.elcontrol != $(this).data('elcontrol')) {
						$(this).removeClass('open');
						$('.' + $(this).data('elcontrol')).removeClass('open');
					}
				});
			}

		};

		base.openBox = function () {

			if (base.controlNextEl) {
				base.$elcontrol = base.$el.next();
			}

			if (base.$elcontrol.hasClass('open')) {
				base.$el.removeClass('open');
				base.$elcontrol.removeClass('open');
			} else {
				base.$el.addClass('open');
				base.$elcontrol.addClass('open');
			}
		};

		base.bindEvents = function () {

			base.$el.bind(base.options.event, function (e) {
				//e.preventDefault();
				base.closeOtherBoxes();
				base.openBox();
			});

			base.bindingEvents = true;

		};

		base.unbindEvents = function () {

			base.$el.unbind(base.options.event);
			base.setDefault();

			base.bindingEvents = false;

		};

		base.showHideEffect = function (el, action) {
			el.stop();
			if (action == 'show') {
				if (base.elcontrolanimation != '') {
					if (base.elcontrolanimation == 'toggleslide') {
						el.slideDown();
					}
				} else {
					el.show();
				}
			}

			if (action == 'hide') {
				if (base.elcontrolanimation != '') {
					if (base.elcontrolanimation == 'toggleslide') {
						el.slideUp();
					}
				} else {
					el.hide();
				}
			}
		};

		base.init = function () {
			base.options = $.extend({}, $.togleElControl.tdefault, options);
			base.onlyScreen = base.$el.data('onlyscreen') || base.options.onlyScreen;
			base.controlNextEl = base.$el.data('controlnextel') || base.options.controlNextEl;
			base.elControlParent = base.$el.data('elcontrolparent') || base.options.elControlParent;
			base.elcontrolanimation = base.$el.data('elcontrolanimation') || base.options.elcontrolanimation;
			base.bindingEvents = false;

			if (base.onlyScreen.length != 0) {

				// pri nacteni ztranky
				if (Modernizr.mq('only definedScreen and (' + base.onlyScreen + ')') && base.bindingEvents == false) {
					base.bindEvents();
				}

				$(window).on('resize', function () {

					// pri resize pokud pokud plati podminka
					if (Modernizr.mq('only definedScreen and (' + base.onlyScreen + ')') && base.bindingEvents == false) {
						base.bindEvents();
					}

					if (!Modernizr.mq('only definedScreen and (' + base.onlyScreen + ')') && base.bindingEvents == true) {
						base.unbindEvents();
					}
				});
			} else {
				base.bindEvents();
			}

		};

		base.init();
	}

	$.togleElControl.tdefault = {
		event: 'click',
		onlyScreen: '',
		controlNextEl: false,
		elControlParent: '',
		elcontrolanimation: ''
	}

	$.fn.togleElControl = function (options) {

		pluginElItems = this;

		return this.each(function () {
			(new $.togleElControl(this, options));
		});
	};

})(jQuery);

/*
 * =============================================================
 * jquery validator click
 * =============================================================
 */

function clickValidate(el) {
	var validate = $(el).closest('form').validate().form();

	if (!validate) {
		return false;
	}

	return true;
}

/*
 * =============================================================
 * Nastaveni placeholderu pro elementy vytvorene javascriptem
 * =============================================================
 */

function setPlaceholder(el) {
	if (!Modernizr.input.placeholder) {
		if (!el.val()) {
			el.value = el.attr('placeholder');
		}
		el.focus(function () {
			if (el.value == el.attr('placeholder')) {
				el.value = '';
			}
		});
		el.blur(function () {
			if (el.value == '') {
				el.value = el.attr('placeholder');
			}
		});
	} else {
		var defFieldValue = '';

		el.focus(function () {
			defFieldValue = el.attr('placeholder');
			if (el.attr('placeholder') == defFieldValue) {
				el.attr('placeholder', '');
			}
		});
		el.blur(function () {
			if (el.attr('placeholder') == '') {
				el.attr('placeholder', defFieldValue);
			}
		});
	}
}


/*
 * =============================================================
 * Ajax loading 
 * =============================================================
 */

function showLoading() {
	var $preloaderGlobal = $('.preloader-global');

	if (0 == $preloaderGlobal.length) {
		$preloaderGlobal = $('<div class="preloader-global"><div class="spinner"></div></div>');
	}

	var preloader = new ElxPreloader($preloaderGlobal.find('.spinner'));

	preloader.start();

	$('body').append($preloaderGlobal);
	$preloaderGlobal.addClass('show').stop().fadeIn();
}

function hideLoading() {
	$('.preloader-global').remove();
}


function fancyPopup(opts) {
	var wrapCSS = 'popup-default', // css trida na popup okne
		autoCenter = true, // automaticke centrovani okna
		title = null, // titulek
		content = null, // obsah
		afterShow = null, // funkce po zobrazeni popup okna
		beforeClose = null, // funkce pred zavreni popup okna
		afterClose = null, // funkce po zavreni popup okna
		maxWidth = typeof App.settings.maxContainerWidth != 'undefined' ? Number(App.settings.maxContainerWidth) : 9999, // maximalni sirka okna
		width = 'auto',
		autoSize = true,
		autoHeight = true,
		minHeight = 50,
		widthToMaxWidth = false; // pokud je na true nastavi sirku okna podle maximalani sirky containeru a nebo stranky

	if (!$().fancybox) {
		console.log('Chybí plugin fancybox pro zobrazeni popup okna.');
		return;
	}

	if ('undefined' === typeof opts && null === opts) {
		console.log('Vstupní objekt pro fancybox nebyl zadán.');
		return;
	}

	// pokud existuje parametr wrapCSS tak jej pouzij
	if ('undefined' !== typeof opts.wrapCSS && 0 < opts.wrapCSS.length) {
		wrapCSS = wrapCSS + ' ' + opts.wrapCSS;
	}

	// pokud existuje parametr autoCenter tak jej pouzij 
	if ('undefined' !== typeof opts.autoCenter && 'boolean' === typeof opts.autoCenter) {
		autoCenter = opts.autoCenter;
	}

	// pokud existuje parametr autoHeight, tak jej pouzij 
	if ('undefined' !== typeof opts.autoHeight && 'boolean' === typeof opts.autoHeight) {
		autoHeight = opts.autoHeight;
	}

	// pokud existuje parametr title tak jej pouzij 
	if ('undefined' !== typeof opts.title && 0 < opts.title.length) {
		title = opts.title;
	}

	// pokud existuje parametr content tak jej pouzij 
	if ('undefined' !== typeof opts.content && 0 < opts.content.length) {
		content = '<div class="popup-content-wrap">' + opts.content + '</div>';
	}

	// pokud existuje parametr afterShow tak jej pouzij 
	if ('undefined' !== typeof opts.afterShow) {
		afterShow = opts.afterShow;
	}

	// pokud existuje parametr beforeClose tak jej pouzij 
	if ('undefined' !== typeof opts.beforeClose) {
		beforeClose = opts.beforeClose;
	}

	// pokud existuje parametr afterClose tak jej pouzij 
	if ('undefined' !== typeof opts.afterClose) {
		afterClose = opts.afterClose;
	}

	// pokud existuje parametr maxWidth tak jej pouzij 
	if ('undefined' !== typeof opts.maxWidth) {
		maxWidth = opts.maxWidth;
	}
	// pokud existuje parametr minHeight tak jej pouzij 
	if ('undefined' !== typeof opts.minHeight) {
		minHeight = opts.minHeight;
	}

	// pokud existuje parametr widthToMaxWidth tak jej pouzij 
	if ('undefined' !== typeof opts.widthToMaxWidth && 'boolean' === typeof opts.widthToMaxWidth) {
		width = maxWidth - 30; // 30 = 2 * 15px coz je defaultni sirka paddingu fancyboxu
		autoSize = false;
	}

	// kontrola naplneni parametru content nebo title
	if (null === content && null === title) {
		console.log('Parametr content a title jsou prázdné.');
		return;
	}

	// pokud v obsahu existuje element popup-box-title tak hodnotu z tohoto elementu nastav jako title
	// obaleni divem je z toho duvodu ze muze prijit pouze cisty text bez html a pak cast nize zhavaruje
	if (0 < $(content).find('.popup-box-title').length && null === title) {
		var $content = $(content),
			$popupBoxTitle = $content.find('.popup-box-title').eq(0);

		$content.find('.popup-box-title').remove();

		title = '<h1>' + $popupBoxTitle.html() + '</h1>';
		content = $content.html();
	}

	$.fancybox({
		type: 'html',
		title: title,
		content: content,
		wrapCSS: wrapCSS,
		autoCenter: autoCenter,
		autoSize: autoSize,
		autoHeight: autoHeight,
		minHeight: minHeight,
		maxWidth: maxWidth,
		width: width,
		helpers: {
			overlay: {
				closeClick: true,
				showEarly: true,
				locked: false
			},
			title: {
				type: 'over',
				position: 'top'
			}
		},
		afterShow: afterShow,
		afterClose: afterClose,
		beforeClose: beforeClose,
		tpl: {
			closeBtn: '<a title="' + dictionary.GetValue('msg_close') + '" class="fancybox-item fancybox-close" href="javascript:;"></a>'
		}
	});
}

// kvuli update fancybox okna pri otevreni klavesnice (psani do inputu) - napr android
jQuery(window).on('resize', function () {
	if ($().fancybox && $.fancybox.isOpen) {
		$.fancybox.update();
	}
});

// Pop up pro kontakty na seznamu produktu
function openDialogUserInfo(usr_id, prs_id, pnp_id) {
	if (usr_id == 0)
		return;

	var url = g_root + '/ajaxpages/supportinfo_ajx.aspx';

	$.ajax({
		type: 'POST',
		data: { usr_id: usr_id, prs_id: prs_id, pnp_id: pnp_id },
		url: url,
		success: function (data) {
			fancyPopup({ content: data, wrapCSS: 'popup-contact-support-list', widthToMaxWidth: true });
			new Contacts({
				wrapperEl: '.people-tiles'
			});
		}
	});
}

// Pop up pro detailni skladovost produktu
function openDialogStock(pro_id,tra_id) {
	if (pro_id == 0)
		return;

	var url = g_root + '/ajaxpages/productstockinfo_ajx.aspx';

	$.ajax({
		type: 'POST',
		data: { pro_id: pro_id, tra_id: tra_id },
		url: url,
		success: function (data) {
			fancyPopup({
				content: data, title: '<h1>' + dictionary.GetValue('title_stock_info') + '</h1>', wrapCSS: 'popup-stock-list', maxWidth: 400, widthToMaxWidth: true, afterShow: function () {
					var jsScroll = new SimpleBar(document.getElementById('proStockList'), { autoHide: false });
					jsScroll.recalculate();
				}
			});
			new Contacts({
				wrapperEl: '.popup-stock-list .people-tile'
			});
		}
	});
}

function setCsrfToken(xhr) {
	var elem = document.getElementById('csrfToken');
	if (typeof elem !== 'undefined' && elem !== null) {
		var x = document.getElementById('csrfToken').value;
		xhr.setRequestHeader('X-CSRF-TOKEN', x);
	}	
}

/*
 * =============================================================
 * Slouzi pro ovladani vyhledavaciho pole pri responsive
 * =============================================================
 */

// bool zda je nabindovana metoda pro ovladani vyhledavani v zahlavi pri responsive
var resSrchMethodBind = false;

function respSrchControl() {
	if (Modernizr.mq('only definedScreen and (max-width: 601px)') && resSrchMethodBind == false) {
		var $filter = $('#fulltextadd');

		$('.btn-search').bind(evtClickTouch, function (e) {
			e.stopPropagation();
			var $thisEl = $(this);
			var $searchForm = $('.search-form');
			var $inputSearch = $searchForm.find('.input-text');

			if ($inputSearch.val() != '') {
				return e;
			}

			if (!$searchForm.hasClass('open')) {
				$searchForm.addClass('open');
				$inputSearch.focus();
				return false;
			}

			if ($inputSearch.val() == '') {
				$searchForm.removeClass('open');
				$filter.removeAttr('style');
				return false;
			}
		});

		// osetreni dofiltrovavaciho tlacitka na malych zobrazenich, kdy je tlacitko v defaultu schovano
		$filter.bind('mouseenter', function (e) {
			$(this).css('display', 'block');
			e.stopPropagation();
		}).bind('click', function () {
			$(this).removeAttr('style');
		});

		resSrchMethodBind = true;
	}

	if (Modernizr.mq('only definedScreen and (min-width: 600px)') && resSrchMethodBind == true) {
		$('.btn-search').unbind(evtClickTouch);
		resSrchMethodBind = false;
	}
}


/*
 * =============================================================
 * Kontrola jestli nevyprsela session prihlaseneho uzivatele - jinak redirect na login
 * =============================================================
 */

var httpStatus;

function AJAXAuth() {
	if (!App.checkSession()) {
		var hrefOld = window.location.href;
		window.location.href = hrefOld;
		return false;
	}
	return true;
}

function HideBox(el) {
	el.removeClass('show');
}


/*
 * =============================================================
 * Kategorie, eventy a prefixy pro Google Analytics
 * =============================================================
 */

function GACategoryName(category) {
	if (category == 1) {
		return 'Menu';
	} else if (category == 2) {
		return 'Crossroad';
	} else if (category == 3) {
		return 'Breadcrumbs';
	} else if (category == 4) {
		return 'Whisper';
	} else if (category == 5) {
		return 'Search – Category';
	} else if (category == 6) {
		return 'Search – Vendor';
	} else if (category == 7) {
		return 'Search – Commodity';
	} else if (category == 8) {
		return 'Parametric filter';
	} else if (category == 9) {
		return 'Product list - filter';
	} else if (category == 10) {
		return 'Header';
	} else if (category == 11) {
		return 'Basket';
	} else if (category == 12) {
		return 'Product list';
	} else if (category == 13) {
		return 'PopUp Forms';
	} else if (category == 14) {
		return 'Orders';
	} else if (category == 15) {
		return 'Order detail';
	} else if (category == 16) {
		return 'Invoices';
	} else if (category == 17) {
		return 'Invoice detail';
	} else if (category == 21) {
		return 'LogIn';
	} else if (category == 22) {
		return 'Tabs Filtr';
	}
	return "";
}

function GACategoryLevelPrefix(prefix) {
	if (prefix == 0) {
		return '';
	} else if (prefix == 1) {
		return 'SC-';
	} else if (prefix == 2) {
		return 'C-';
	} else if (prefix == 3) {
		return 'A-';
	} else if (prefix == 4) {
		return 'DOC-';
	}
	return "";
}


function changeCurrency(el) {
	var id = $(el).val();
	var url = g_root + "/asmx/wssetting.asmx/changecurrency";
	//fancyPopup('nejaky text', false);
	$.ajax({
		type: 'POST',
		data: "{'cur_id':" + id + "}",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		global: false,
		url: url,
		success: function (data) {
			//reloadPage();
			location.reload();
		},
		error: function (data) {
			httpStatus = data.status;
			fancyPopup({ content: httpStatus });
		}
	});
}


function msieversion() {
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");

	if (msie > 0) // If Internet Explorer, return version number
		return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
	else // If another browser, return 0
		return 0;

}


function showBreadCrumbsSelect(thisBtn, pnsup_id, pnc_id, pna_id) {
	var $thisBtn = $(thisBtn),
		$box = $thisBtn.parent(),
		$navItems = $box.find('ul');

	App.checkSession();

	if ($navItems.length == 0) {
		$thisBtn.addClass('loading');
		loadBreadCrumbsSelectData(pnsup_id, pnc_id, pna_id, function (result) {
			$box.append(result);
			$thisBtn.removeClass('loading');
		});
	}

	//$box.addClass('open');
}

function loadBreadCrumbsSelectData(pnsup_id, pnc_id, pna_id, callback) {
	var page = 'panelnavigatorcat_ajx.aspx',
		url = g_root + '/ajaxpages/' + page,
		navdatapar;

	App.checkSession();

	if (pna_id == 0) {
		navdatapar = pnsup_id + ',' + pnc_id;
	} else {
		navdatapar = pnsup_id + ',' + pnc_id + ',0,' + pna_id + ',0';
	}

	$.ajax({
		type: 'POST',
		global: false,
		url: url,
		data: { navdata: navdatapar },
		success: function (data) {
			callback(data);
		}
	});
}

/* ========================================================================================================================== */
/* ========================================================================================================================== */

/**
 * metoda pro zobrazeni preloadru u kurzoru mysi - viz stranka seznam produktu pri prefiltrovani
 */

function ajxMousePreloader(action) {

	var $ajxMousePreloader = $('.ajx-mouse-preloader'),
		preloader = {},
		ajxMousePreloader_rightPos = 0,
		ajxMousePreloader_width = 0,
		x = App.props.currMouseposition.x + 10,
		y = App.props.currMouseposition.y + 10;

	var pos = {
		'left': x + 'px',
		'top': y + 'px',
		'margin-left': 0
	}

	action = action ? action : 'hide';

	if ($ajxMousePreloader.length == 0) {
		$ajxMousePreloader = $('<div class="ajx-mouse-preloader"><span class="spinner ajx-mouse-preloader_spinner"></span><span class="ajx-mouse-preloader_label">' + dictionary.GetValue('ajx-mouse-preloader') + '</span></div>');

		$('body').append($ajxMousePreloader);

		$ajxMousePreloader.css(pos);
	}

	ajxMousePreloader_width = $ajxMousePreloader.outerWidth(true);
	ajxMousePreloader_rightPos = x + ajxMousePreloader_width + 20;

	if (ajxMousePreloader_rightPos > window.innerWidth) {
		pos['margin-left'] = ((ajxMousePreloader_width + 20) * (-1)) + 'px';
	}

	preloader = new ElxPreloader($ajxMousePreloader.find('.spinner'));

	if (action == 'show') {
		preloader.start();
		$ajxMousePreloader.addClass('show');
	} else {
		preloader.stop();
		$ajxMousePreloader.remove();
	}

	$(document).on('mousemove', function (event) {
		x = App.props.currMouseposition.x + 10;
		y = App.props.currMouseposition.y + 10;

		pos.left = x + 'px';
		pos.top = y + 'px';

		ajxMousePreloader_rightPos = x + ajxMousePreloader_width + 20;

		if (ajxMousePreloader_rightPos > window.innerWidth) {
			pos['margin-left'] = ((ajxMousePreloader_width + 20) * (-1)) + 'px';
		}

		if (ajxMousePreloader_rightPos < window.innerWidth) {
			pos['margin-left'] = 0;
		}

		$ajxMousePreloader.css(pos);
	});
}

/* ========================================================================================================================== */
/* ========================================================================================================================== */

// hlidani Html5 storage
function HtmlStorageCacheControl(minutes) {

	var rtn = { result: { id: 0, msg: '' } };

	var test = hasConsent('dataContainer');
	if (!test) {
		rtn.result.msg = 'No consent';
		return rtn;
	}

	var stTimestamp = sessionStorage.getItem('timestamp');
	var stCacheUrl = sessionStorage.getItem('cacheUrl');
	var stLinkToPageUrl = sessionStorage.getItem('linkToPageUrl');
	var currUrl = window.location.pathname + window.location.search;

	if ($.isEmptyObject(stCacheUrl)) {
		rtn.result.msg = 'CacheUrl v storage neni definovan';
		return rtn;
	}

	// pokud neodpovida url na kterou se vracim te co je ulozena v session storage tak session storage mazu
	if ((stCacheUrl !== currUrl) && (!$.isEmptyObject(stLinkToPageUrl)) && (stLinkToPageUrl !== currUrl)) {
		sessionStorage.clear();
		rtn.result.id = 1;
		rtn.result.msg = 'Storage byla vymazana';
	}


	if ($.isEmptyObject(stTimestamp)) {
		rtn.result.msg = 'Timestamp v storage neni definovan';
		return rtn;
	}

	var minutes = minutes ? minutes : 30;
	var timestamp = new Date(stTimestamp);
	var currDate = new Date();
	timestamp.setMinutes(timestamp.getMinutes() + minutes);

	// pokud vyprsel casovy interval tak session storage mazu
	if (currDate > timestamp) {
		sessionStorage.clear();
		rtn.result.id = 1;
		rtn.result.msg = 'Storage byla vymazana';
	}

	return rtn;
}

// hide URL field on the iPhone/iPod touch
function hideUrlBar() {
	// hide URL field on the iPhone/iPod touch
	var p = String(navigator.platform);

	var container = document.getElementById("container");
	if (p === 'iPad' || p === 'iPhone' || p === 'iPod touch') {
		var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
		if (parseInt(v[1], 10) >= 7) {
			// iOS >=7
			if (container) {
				container.style.top = (0) + "px";
				container.style.left = (0) + "px";
				container.style.width = (window.innerWidth) + "px";
				container.style.height = (window.innerHeight) + "px";
			}
			if (obj) {
				obj.setViewerSize(window.innerWidth, window.innerHeight);
			}
			window.scrollTo(0, 0);
		} else {
			if (container) {
				var cheight;
				switch (window.innerHeight) {
					case 208: cheight = 268; break; // landscape
					case 260: cheight = 320; break; // landscape, fullscreen
					case 336: cheight = 396; break; // portrait, in call status bar
					case 356: cheight = 416; break; // portrait 
					case 424: cheight = 484; break; // portrait iPhone5, in call status bar
					case 444: cheight = 504; break; // portrait iPhone5 
					default: cheight = window.innerHeight;
				}
				if ((cheight) && ((container.offsetHeight != cheight) || (window.innerHeight != cheight))) {
					container.style.height = cheight + "px";
				}
			}
			document.getElementsByTagName("body")[0].style.marginTop = "1px";
			window.scrollTo(0, 1);
		}
	}
}
if (window.addEventListener) {
	window.addEventListener("load", hideUrlBar);
	window.addEventListener("resize", hideUrlBar);
	window.addEventListener("orientationchange", hideUrlBar);
}

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!! Slouzi pro 3d pohledy produktu - END
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

function lazyImageShowPreloader() {
	var $lazyImage = $('.b-lazy'),
		preloader = new ElxPreloader($lazyImage.next('.spinner'));

	preloader.start();
}

function lazyImage(action) {
	var bLazy = new Blazy({
		success: function (ele) {
			$(ele).removeClass('loading');
			$(ele).next('.spinner').remove();
		}
	});

	if (typeof action === 'undefined') {
		action = '';
	}

	if (action === 'load') {
		lazyImageShowPreloader();
	}

	if (action === 'reload') {
		bLazy.revalidate();
	}

	var checkAllInicialized = setTimeout(function () {
		if (typeof bLazy._util.count !== 'undefined' && bLazy._util.count !== $('.b-lazy.loading').length) {
			lazyImage('reload');
		}
	}, 500);
}

(function ($) {
	$(document).ready(function () {
		lazyImage('load');
	});
})(jQuery);

// metoda ktera do stranky prida tlacitko pro zobrazeni wizarda
function btnShowWizard() {
	var btnId = 'btnShowWizard';

	if ($('#' + btnId).length > 0) {
		return;
	}

	var button = '<button id="' + btnId + '" class="btn btn-show-wizard js-tooltip" title="Zobrazit novinky" onclick="introPage.start();"><i class="icon-info btn_icon"></i></button>';

	$('#siteTools').prepend(button);
};
