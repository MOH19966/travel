(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-1b847690"],{"0eeb":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"card profile-card profile-card--fixed-height"},[s("h3",{staticClass:"profile-card__name mt-2"},[t._v(t._s(t.school.name))]),s("p",{staticClass:"profile-card__detail mt-n1"},[t._v(t._s(t.school.materialName))]),s("div",{staticClass:"w-75 ml-auto mr-auto mt-2"},[s("table",{staticClass:"profile__details-table--sm",staticStyle:{width:"100%"}},[s("tr",[s("td",{staticClass:"profile__property-name "},[t._v("عدد الساعات")]),s("td",[t._v(t._s(t.school.hours))])]),s("tr",[s("td",{staticClass:"profile__property-name"},[t._v("المنطقة")]),s("td",[t._v(t._s(t.school.city)+"، "+t._s(t.school.area))])])])])])},r=[],o={props:["school"],methods:{enroll:function(t){}}},l=o,c=s("2877"),n=Object(c["a"])(l,a,r,!1,null,null,null);e["a"]=n.exports},e2c7:function(t,e,s){"use strict";s.r(e);var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("wrapper",{attrs:{"wraper-width":"soft"}},[s("p",{staticClass:"text-right mt-4"},[t._v(" المدارس التي بحاجة لدعم ")]),s("p",{staticClass:"text-right"},[s("router-link",{attrs:{to:"/"}},[t._v("العودة ")])],1),s("div",{staticClass:"row my-4"},t._l(t.schools,(function(t){return s("div",{key:t.id,staticClass:"col-lg-4 col-sm-2"},[s("schoolCard",{attrs:{school:t}})],1)})),0)])},r=[],o=(s("d81d"),s("96cf"),s("1da1")),l=s("0eeb"),c=s("50ba"),n={components:{schoolCard:l["a"]},data:function(){return{schools:[]}},mounted:function(){this.getResults()},methods:{getResults:function(){var t=this;return Object(o["a"])(regeneratorRuntime.mark((function e(){var s,a;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,Object(c["a"])().post("schools/material/select",{material:t.$route.query.materialsIds});case 2:s=e.sent,a=s.data,t.schools=a.shortages,t.schools=t.transformToViewModel(t.schools);case 6:case"end":return e.stop()}}),e)})))()},transformToViewModel:function(t){return t.map((function(t){return{name:t.school_name,materialName:t.material_name,geadeName:t.grade_name,hours:t.houres,city:t.city,area:t.area}}))}}},i=n,u=s("2877"),d=Object(u["a"])(i,a,r,!1,null,null,null);e["default"]=d.exports}}]);
//# sourceMappingURL=chunk-1b847690.efe879ad.js.map