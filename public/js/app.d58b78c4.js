(function(e){function n(n){for(var c,r,o=n[0],i=n[1],d=n[2],f=0,s=[];f<o.length;f++)r=o[f],Object.prototype.hasOwnProperty.call(u,r)&&u[r]&&s.push(u[r][0]),u[r]=0;for(c in i)Object.prototype.hasOwnProperty.call(i,c)&&(e[c]=i[c]);l&&l(n);while(s.length)s.shift()();return a.push.apply(a,d||[]),t()}function t(){for(var e,n=0;n<a.length;n++){for(var t=a[n],c=!0,r=1;r<t.length;r++){var o=t[r];0!==u[o]&&(c=!1)}c&&(a.splice(n--,1),e=i(i.s=t[0]))}return e}var c={},r={app:0},u={app:0},a=[];function o(e){return i.p+"js/"+({}[e]||e)+"."+{"chunk-39d11866":"bb266059","chunk-448f35bc":"1c24ace8","chunk-2d209b8d":"ab233a29","chunk-2d21d404":"f75e75ce","chunk-69cd9d8e":"b754574e","chunk-69d05eda":"9250855f","chunk-69d0ca64":"f518daa9","chunk-69d10e0a":"fc1b6f8e","chunk-69d13908":"193837c1","chunk-69d16de3":"a334966f","chunk-69e59ec2":"57b51b6d","chunk-db5a6d34":"f879b4e6","chunk-24b05e66":"61aa1df5","chunk-2580534d":"269e3352","chunk-1bb47bc4":"a64dbac5","chunk-2d224d0f":"ef72f8da","chunk-5aedf05d":"ca9e9dca","chunk-ebcc7288":"7d54824a","chunk-ebf2fee2":"f1a1b4d5"}[e]+".js"}function i(n){if(c[n])return c[n].exports;var t=c[n]={i:n,l:!1,exports:{}};return e[n].call(t.exports,t,t.exports,i),t.l=!0,t.exports}i.e=function(e){var n=[],t={"chunk-39d11866":1,"chunk-24b05e66":1,"chunk-2580534d":1,"chunk-5aedf05d":1};r[e]?n.push(r[e]):0!==r[e]&&t[e]&&n.push(r[e]=new Promise((function(n,t){for(var c="css/"+({}[e]||e)+"."+{"chunk-39d11866":"b24dcc75","chunk-448f35bc":"31d6cfe0","chunk-2d209b8d":"31d6cfe0","chunk-2d21d404":"31d6cfe0","chunk-69cd9d8e":"31d6cfe0","chunk-69d05eda":"31d6cfe0","chunk-69d0ca64":"31d6cfe0","chunk-69d10e0a":"31d6cfe0","chunk-69d13908":"31d6cfe0","chunk-69d16de3":"31d6cfe0","chunk-69e59ec2":"31d6cfe0","chunk-db5a6d34":"31d6cfe0","chunk-24b05e66":"85e964b6","chunk-2580534d":"e54ce997","chunk-1bb47bc4":"31d6cfe0","chunk-2d224d0f":"31d6cfe0","chunk-5aedf05d":"85e964b6","chunk-ebcc7288":"31d6cfe0","chunk-ebf2fee2":"31d6cfe0"}[e]+".css",u=i.p+c,a=document.getElementsByTagName("link"),o=0;o<a.length;o++){var d=a[o],f=d.getAttribute("data-href")||d.getAttribute("href");if("stylesheet"===d.rel&&(f===c||f===u))return n()}var s=document.getElementsByTagName("style");for(o=0;o<s.length;o++){d=s[o],f=d.getAttribute("data-href");if(f===c||f===u)return n()}var l=document.createElement("link");l.rel="stylesheet",l.type="text/css",l.onload=n,l.onerror=function(n){var c=n&&n.target&&n.target.src||u,a=new Error("Loading CSS chunk "+e+" failed.\n("+c+")");a.code="CSS_CHUNK_LOAD_FAILED",a.request=c,delete r[e],l.parentNode.removeChild(l),t(a)},l.href=u;var h=document.getElementsByTagName("head")[0];h.appendChild(l)})).then((function(){r[e]=0})));var c=u[e];if(0!==c)if(c)n.push(c[2]);else{var a=new Promise((function(n,t){c=u[e]=[n,t]}));n.push(c[2]=a);var d,f=document.createElement("script");f.charset="utf-8",f.timeout=120,i.nc&&f.setAttribute("nonce",i.nc),f.src=o(e);var s=new Error;d=function(n){f.onerror=f.onload=null,clearTimeout(l);var t=u[e];if(0!==t){if(t){var c=n&&("load"===n.type?"missing":n.type),r=n&&n.target&&n.target.src;s.message="Loading chunk "+e+" failed.\n("+c+": "+r+")",s.name="ChunkLoadError",s.type=c,s.request=r,t[1](s)}u[e]=void 0}};var l=setTimeout((function(){d({type:"timeout",target:f})}),12e4);f.onerror=f.onload=d,document.head.appendChild(f)}return Promise.all(n)},i.m=e,i.c=c,i.d=function(e,n,t){i.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},i.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,n){if(1&n&&(e=i(e)),8&n)return e;if(4&n&&"object"===typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(i.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var c in e)i.d(t,c,function(n){return e[n]}.bind(null,c));return t},i.n=function(e){var n=e&&e.__esModule?function(){return e["default"]}:function(){return e};return i.d(n,"a",n),n},i.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},i.p="/",i.oe=function(e){throw console.error(e),e};var d=window["webpackJsonp"]=window["webpackJsonp"]||[],f=d.push.bind(d);d.push=n,d=d.slice();for(var s=0;s<d.length;s++)n(d[s]);var l=f;a.push([0,"chunk-vendors"]),t()})({0:function(e,n,t){e.exports=t("cd49")},"034f":function(e,n,t){"use strict";var c=t("85ec"),r=t.n(c);r.a},"04ee":function(e,n,t){window._=t("2ef0")},"0613":function(e,n,t){"use strict";var c=t("2b0e"),r=t("2f62"),u=t("afbc"),a={namespaced:!0,state:function(){return{isSignedIn:!0,accessToken:"sss"}},mutations:{updateAccessToken:function(e,n){e.accessToken="Bearer   "+n},updateSignInStatus:function(e,n){e.isSignedIn=n}},actions:{signIn:function(e,n){e.commit("updateAccessToken",n),e.commit("updateSignInStatus",!0)},signOut:function(e){e.commit("updateAccessToken",""),e.commit("updateSignInStatus",!1),u["a"].push("/signin")}},getters:{accessToken:function(e){return e.accessToken},isSignedIn:function(e){return e.isSignedIn}}},o={namespaced:!0,state:function(){return{profile:{}}},mutations:{clear:function(e){e.profile={}},completeUpdate:function(e,n){e.profile=n}},getters:{isCompletedInfo:function(e){return void 0===e.profile.info_completed||e.profile.is_completed_info},isVerifiedNumber:function(e){return void 0===e.profile.number_verified||e.profile.is_verified_number}}},i=t("bfa9"),d=new i["a"]({key:"teach-and-learn",storage:window.localStorage});c["default"].use(r["a"]);n["a"]=new r["a"].Store({modules:{Auth:a,Profile:o},plugins:[d.plugin]})},"85ec":function(e,n,t){},afbc:function(e,n,t){"use strict";t("b0c0"),t("d3b7");var c=t("2b0e"),r=t("8c4f"),u=t("0613");c["default"].use(r["a"]);var a=[{path:"/signup",name:"Signup",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69d05eda")]).then(t.bind(null,"7910"))}},{path:"/signin",name:"Signin",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-2d209b8d")]).then(t.bind(null,"a9ed"))}},{path:"/verify-number",name:"Verify-number",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69d0ca64")]).then(t.bind(null,"85d2"))}},{path:"/",name:"Main-application",component:function(){return t.e("chunk-39d11866").then(t.bind(null,"f0a7"))},redirect:"Home",children:[{path:"/",name:"Home",component:function(){return t.e("chunk-ebcc7288").then(t.bind(null,"bb51"))}},{path:"/profile-edit",name:"Profile-edit",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69d16de3")]).then(t.bind(null,"8b77"))}},{path:"/profile-info",name:"Profile-info",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69e59ec2")]).then(t.bind(null,"f153"))}},{path:"/university-services",name:"university-services",component:function(){return t.e("chunk-ebf2fee2").then(t.bind(null,"95f9"))}},{path:"/university-services/teaching-materials",name:"teaching-materials",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-db5a6d34"),t.e("chunk-2580534d"),t.e("chunk-2d224d0f")]).then(t.bind(null,"e26b"))}},{path:"/teaching-schools",name:"teaching-schools",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-db5a6d34"),t.e("chunk-2580534d"),t.e("chunk-1bb47bc4")]).then(t.bind(null,"0986"))}},{path:"/teaching-schools/results",name:"teaching-schools-results",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-db5a6d34"),t.e("chunk-5aedf05d")]).then(t.bind(null,"e2c7"))}},{path:"/university-services/show-teachers",name:"show-teachers",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69cd9d8e")]).then(t.bind(null,"173b"))}},{path:"/university-services/show-univirsities-teachers",name:"show-univirsities-teachers",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69d10e0a")]).then(t.bind(null,"7fce"))}},{path:"/university-services/show-teachers/results",name:"show-teachers-results",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-db5a6d34"),t.e("chunk-24b05e66")]).then(t.bind(null,"b298"))}},{path:"/university-services/teaching-materials/complete-teacher-info",name:"complete-teacher-info",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-2d21d404")]).then(t.bind(null,"d101"))}},{path:"/student-notification",name:"student-notification",component:function(){return Promise.all([t.e("chunk-448f35bc"),t.e("chunk-69d13908")]).then(t.bind(null,"953f"))}}]}],o=new r["a"]({mode:"history",base:"/",routes:a});o.beforeEach((function(e,n,t){"Signup"===e.name||"Signin"===e.name||"Home"===e.name||"Verify-number"===e.name||u["a"].getters["Auth/isSignedIn"]?"Signup"!==e.name&&"Signin"!==e.name||!u["a"].getters["Auth/isSignedIn"]?t():t({name:"Home"}):t({name:"Signin"})})),n["a"]=o},cd49:function(e,n,t){"use strict";t.r(n);t("e260"),t("e6cf"),t("cca6"),t("a79d");var c=t("2b0e"),r=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{attrs:{id:"app"}},[t("transition",{attrs:{name:"fade",mode:"out-in"}},[t("router-view")],1)],1)},u=[],a={},o=a,i=(t("034f"),t("2877")),d=Object(i["a"])(o,r,u,!1,null,null,null),f=d.exports,s=t("afbc"),l=t("0613"),h=t("5f5b");c["default"].use(h["a"]);var p=t("8e5f"),m=t.n(p);t("e607");c["default"].component("multiselect",m.a);var b=t("ecee"),k=t("c074"),g=t("ad3d");b["c"].add(k["a"]),c["default"].component("font-awesome-icon",g["a"]);var v=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{class:"wrapper "},[t("div",{class:"wrapper-content wrapper-content--w"+e.wraperWidth},[e._t("default")],2)])},y=[],w={props:{wraperWidth:{type:String,default:"md"}}},S=w,P=Object(i["a"])(S,v,y,!1,null,null,null),_=P.exports;c["default"].component("wrapper",_);t("04ee"),t("e4c9");var O=t("f309");c["default"].use(O["a"]);var T=new O["a"]({}),j="/storage/";c["default"].prototype.$baseUrl=j,c["default"].config.productionTip=!1,c["default"].prototype.$fullUrl=function(e){return j+e},new c["default"]({router:s["a"],store:l["a"],vuetify:T,render:function(e){return e(f)}}).$mount("#app")},e4c9:function(e,n,t){}});
//# sourceMappingURL=app.d58b78c4.js.map