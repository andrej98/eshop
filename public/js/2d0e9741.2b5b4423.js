(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["2d0e9741"],{"8e31":function(t,e,o){"use strict";o.r(e);var a=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("q-layout",[o("q-layout-header",[o("q-toolbar",[o("q-btn",{staticClass:"q-mr-md",attrs:{flat:"",round:"",dense:"",icon:"menu"},on:{click:function(e){t.left=!t.left}}}),o("q-toolbar-title",[t._v("Elektro.sk - ADMIN")]),o("q-btn",{staticClass:"q-mr-md",attrs:{flat:"",round:"",dense:"",icon:"logout"},on:{click:t.logout}})],1)],1),o("q-layout-drawer",{attrs:{side:"left"},model:{value:t.left,callback:function(e){t.left=e},expression:"left"}},[o("main-layout-drawer")],1),o("q-page-container",[o("div",{staticClass:"row full-width justify-center"},[o("router-view",{staticClass:"c-container"}),o("q-ajax-bar")],1)]),o("q-layout-footer",[o("div",{staticClass:"text-center q-pa-md"},[t._v("Copyright (C) 2020, Andrej")])])],1)},i=[];a._withStripped=!0;var n=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"bg-grey-1 full-height q-px-md q-py-lg"},[o("div",{staticClass:"q-subheading q-mb-sm"},[t._v("Products")]),o("q-list",{staticClass:"no-border",attrs:{link:""}},[o("q-item",{staticClass:"q-body-1",attrs:{to:"/products/index"}},[o("q-item-main",[t._v("List")])],1),o("q-item",{staticClass:"q-body-1",attrs:{to:"/products/create"}},[o("q-item-main",[t._v("Create")])],1),o("q-item",{staticClass:"q-body-1",nativeOn:{click:function(e){return t.eshop(e)}}},[o("q-item-main",[t._v("Eshop")])],1)],1)],1)},s=[];n._withStripped=!0;var l={methods:{eshop:function(){window.location.href="http://127.0.0.1:8000/"}}},r=l,c=o("2877"),u=Object(c["a"])(r,n,s,!1,null,null,null);u.options.__file="Drawer.vue";var d=u.exports,f=o("bc3a"),p=o.n(f),m={components:{MainLayoutDrawer:d},methods:{logout:function(){var t=this;p.a.post("http://127.0.0.1:8000/logout").then(function(e){t.$q.notify({type:"positive",timeout:2e3,message:"logged out"})}).catch(function(t){console.log(t)}),window.location.href="http://127.0.0.1:8000/login"}},computed:{left:{get:function(){return this.$store.state.moduleUI.layout.drawerState},set:function(t){this.$store.commit("moduleUI/updateDrawerState",t)}}}},q=m,h=Object(c["a"])(q,a,i,!1,null,null,null);h.options.__file="Main.vue";e["default"]=h.exports}}]);