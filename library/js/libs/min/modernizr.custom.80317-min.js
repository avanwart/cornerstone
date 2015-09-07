window.Modernizr=function(e,t,n){function r(e){y.cssText=e}function o(e,t){return r(b.join(e+";")+(t||""))}function a(e,t){return typeof e===t}function i(e,t){return!!~(""+e).indexOf(t)}function c(e,t){for(var r in e){var o=e[r];if(!i(o,"-")&&y[o]!==n)return"pfx"==t?o:!0}return!1}function l(e,t,r){for(var o in e){var i=t[e[o]];if(i!==n)return r===!1?e[o]:a(i,"function")?i.bind(r||t):i}return!1}function s(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),o=(e+" "+w.join(r+" ")+r).split(" ");return a(t,"string")||a(t,"undefined")?c(o,t):(o=(e+" "+x.join(r+" ")+r).split(" "),l(o,t,n))}var u="2.8.3",d={},f=!0,p=t.documentElement,m="modernizr",h=t.createElement(m),y=h.style,v,g={}.toString,b=" -webkit- -moz- -o- -ms- ".split(" "),E="Webkit Moz O ms",w=E.split(" "),x=E.toLowerCase().split(" "),C={},j={},S={},N=[],T=N.slice,k,F=function(e,n,r,o){var a,i,c,l,s=t.createElement("div"),u=t.body,d=u||t.createElement("body");if(parseInt(r,10))for(;r--;)c=t.createElement("div"),c.id=o?o[r]:m+(r+1),s.appendChild(c);return a=["&#173;",'<style id="s',m,'">',e,"</style>"].join(""),s.id=m,(u?s:d).innerHTML+=a,d.appendChild(s),u||(d.style.background="",d.style.overflow="hidden",l=p.style.overflow,p.style.overflow="hidden",p.appendChild(d)),i=n(s,e),u?s.parentNode.removeChild(s):(d.parentNode.removeChild(d),p.style.overflow=l),!!i},D={}.hasOwnProperty,M;M=a(D,"undefined")||a(D.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(e,t){return D.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=T.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var a=new o,i=t.apply(a,n.concat(T.call(arguments)));return Object(i)===i?i:a}return t.apply(e,n.concat(T.call(arguments)))};return r}),C.flexbox=function(){return s("flexWrap")},C.flexboxlegacy=function(){return s("boxDirection")},C.websqldatabase=function(){return!!e.openDatabase},C.indexedDB=function(){return!!s("indexedDB",e)},C.rgba=function(){return r("background-color:rgba(150,255,150,.5)"),i(y.backgroundColor,"rgba")},C.backgroundsize=function(){return s("backgroundSize")},C.borderradius=function(){return s("borderRadius")},C.boxshadow=function(){return s("boxShadow")},C.opacity=function(){return o("opacity:.55"),/^0.55$/.test(y.opacity)},C.video=function(){var e=t.createElement("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(r){}return n};for(var O in C)M(C,O)&&(k=O.toLowerCase(),d[k]=C[O](),N.push((d[k]?"":"no-")+k));return d.addTest=function(e,t){if("object"==typeof e)for(var r in e)M(e,r)&&d.addTest(r,e[r]);else{if(e=e.toLowerCase(),d[e]!==n)return d;t="function"==typeof t?t():t,"undefined"!=typeof f&&f&&(p.className+=" "+(t?"":"no-")+e),d[e]=t}return d},r(""),h=v=null,function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=g.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t=y[e[m]];return t||(t={},h++,e[m]=h,y[h]=t),t}function a(e,n,r){if(n||(n=t),v)return n.createElement(e);r||(r=o(n));var a;return a=r.cache[e]?r.cache[e].cloneNode():f.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!a.canHaveChildren||d.test(e)||a.tagUrn?a:r.frag.appendChild(a)}function i(e,n){if(e||(e=t),v)return e.createDocumentFragment();n=n||o(e);for(var a=n.frag.cloneNode(),i=0,c=r(),l=c.length;l>i;i++)a.createElement(c[i]);return a}function c(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return g.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(g,t.frag)}function l(e){e||(e=t);var r=o(e);return g.shivCSS&&!p&&!r.hasCSS&&(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),v||c(e,r),e}var s="3.7.0",u=e.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,p,m="_html5shiv",h=0,y={},v;!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",p="hidden"in e,v=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){p=!0,v=!0}}();var g={elements:u.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:s,shivCSS:u.shivCSS!==!1,supportsUnknownElements:v,shivMethods:u.shivMethods!==!1,type:"default",shivDocument:l,createElement:a,createDocumentFragment:i};e.html5=g,l(t)}(this,t),d._version=u,d._prefixes=b,d._domPrefixes=x,d._cssomPrefixes=w,d.testProp=function(e){return c([e])},d.testAllProps=s,d.testStyles=F,p.className=p.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+N.join(" "):""),d}(this,this.document),function(e,t,n){function r(e){return"[object Function]"==m.call(e)}function o(e){return"string"==typeof e}function a(){}function i(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function c(){var e=h.shift();y=1,e?e.t?f(function(){("c"==e.t?T.injectCss:T.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),c()):y=0}function l(e,n,r,o,a,l,s){function u(t){if(!m&&i(d.readyState)&&(E.r=m=1,!y&&c(),d.onload=d.onreadystatechange=null,t)){"img"!=e&&f(function(){b.removeChild(d)},50);for(var r in j[n])j[n].hasOwnProperty(r)&&j[n][r].onload()}}var s=s||T.errorTimeout,d=t.createElement(e),m=0,v=0,E={t:r,s:n,e:a,a:l,x:s};1===j[n]&&(v=1,j[n]=[]),"object"==e?d.data=n:(d.src=n,d.type=e),d.width=d.height="0",d.onerror=d.onload=d.onreadystatechange=function(){u.call(this,v)},h.splice(o,0,E),"img"!=e&&(v||2===j[n]?(b.insertBefore(d,g?null:p),f(u,s)):j[n].push(d))}function s(e,t,n,r,a){return y=0,t=t||"j",o(e)?l("c"==t?w:E,e,t,this.i++,n,r,a):(h.splice(this.i++,0,e),1==h.length&&c()),this}function u(){var e=T;return e.loader={load:s,i:0},e}var d=t.documentElement,f=e.setTimeout,p=t.getElementsByTagName("script")[0],m={}.toString,h=[],y=0,v="MozAppearance"in d.style,g=v&&!!t.createRange().compareNode,b=g?d:p.parentNode,d=e.opera&&"[object Opera]"==m.call(e.opera),d=!!t.attachEvent&&!d,E=v?"object":d?"script":"img",w=d?"script":E,x=Array.isArray||function(e){return"[object Array]"==m.call(e)},C=[],j={},S={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},N,T;T=function(e){function t(e){var e=e.split("!"),t=C.length,n=e.pop(),r=e.length,n={url:n,origUrl:n,prefixes:e},o,a,i;for(a=0;r>a;a++)i=e[a].split("="),(o=S[i.shift()])&&(n=o(n,i));for(a=0;t>a;a++)n=C[a](n);return n}function i(e,o,a,i,c){var l=t(e),s=l.autoCallback;l.url.split(".").pop().split("?").shift(),l.bypass||(o&&(o=r(o)?o:o[e]||o[i]||o[e.split("/").pop().split("?")[0]]),l.instead?l.instead(e,o,a,i,c):(j[l.url]?l.noexec=!0:j[l.url]=1,a.load(l.url,l.forceCSS||!l.forceJS&&"css"==l.url.split(".").pop().split("?").shift()?"c":n,l.noexec,l.attrs,l.timeout),(r(o)||r(s))&&a.load(function(){u(),o&&o(l.origUrl,c,i),s&&s(l.origUrl,c,i),j[l.url]=2})))}function c(e,t){function n(e,n){if(e){if(o(e))n||(s=function(){var e=[].slice.call(arguments);u.apply(this,e),d()}),i(e,s,t,0,c);else if(Object(e)===e)for(p in f=function(){var t=0,n;for(n in e)e.hasOwnProperty(n)&&t++;return t}(),e)e.hasOwnProperty(p)&&(!n&&!--f&&(r(s)?s=function(){var e=[].slice.call(arguments);u.apply(this,e),d()}:s[p]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),d()}}(u[p])),i(e[p],s,t,p,c))}else!n&&d()}var c=!!e.test,l=e.load||e.both,s=e.callback||a,u=s,d=e.complete||a,f,p;n(c?e.yep:e.nope,!!l),l&&n(l)}var l,s,d=this.yepnope.loader;if(o(e))i(e,0,d,0);else if(x(e))for(l=0;l<e.length;l++)s=e[l],o(s)?i(s,0,d,0):x(s)?T(s):Object(s)===s&&c(s,d);else Object(e)===e&&c(e,d)},T.addPrefix=function(e,t){S[e]=t},T.addFilter=function(e){C.push(e)},T.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",N=function(){t.removeEventListener("DOMContentLoaded",N,0),t.readyState="complete"},0)),e.yepnope=u(),e.yepnope.executeStack=c,e.yepnope.injectJs=function(e,n,r,o,l,s){var u=t.createElement("script"),d,m,o=o||T.errorTimeout;u.src=e;for(m in r)u.setAttribute(m,r[m]);n=s?c:n||a,u.onreadystatechange=u.onload=function(){!d&&i(u.readyState)&&(d=1,n(),u.onload=u.onreadystatechange=null)},f(function(){d||(d=1,n(1))},o),l?u.onload():p.parentNode.insertBefore(u,p)},e.yepnope.injectCss=function(e,n,r,o,i,l){var o=t.createElement("link"),s,n=l?c:n||a;o.href=e,o.rel="stylesheet",o.type="text/css";for(s in r)o.setAttribute(s,r[s]);i||(p.parentNode.insertBefore(o,p),f(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};