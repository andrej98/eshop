(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["2d0e9741"],{"8e31":function(t,e,a){"use strict";a.r(e);var r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("q-layout",[a("q-layout-header",[a("q-toolbar",[a("q-btn",{staticClass:"q-mr-md",attrs:{flat:"",round:"",dense:"",icon:"menu"},on:{click:function(e){t.left=!t.left}}}),a("q-toolbar-title",[t._v("Elektro.sk - ADMIN")])],1)],1),a("q-layout-drawer",{attrs:{side:"left"},model:{value:t.left,callback:function(e){t.left=e},expression:"left"}},[a("main-layout-drawer")],1),a("q-page-container",[a("div",{staticClass:"row full-width justify-center"},[a("router-view",{staticClass:"c-container"}),a("q-ajax-bar")],1)]),a("q-layout-footer",[a("div",{staticClass:"text-center q-pa-md"},[t._v("Copyright (C) 2020, Andrej")])])],1)},s=[];r._withStripped=!0;var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"bg-grey-1 full-height q-px-md q-py-lg"},[a("div",{staticClass:"q-subheading q-mb-sm"},[t._v("Products")]),a("q-list",{staticClass:"no-border",attrs:{link:""}},[a("q-item",{staticClass:"q-body-1",attrs:{to:"/products/index"}},[a("q-item-main",[t._v("List")])],1),a("q-item",{staticClass:"q-body-1",attrs:{to:"/products/create"}},[a("q-item-main",[t._v("Create")])],1)],1)],1)},l=[];i._withStripped=!0;var o=a("2877"),n={},u=Object(o["a"])(n,i,l,!1,null,null,null);u.options.__file="Drawer.vue";var c=u.exports,d={components:{MainLayoutDrawer:c},computed:{left:{get:function(){return this.$store.state.moduleUI.layout.drawerState},set:function(t){this.$store.commit("moduleUI/updateDrawerState",t)}}}},f=d,p=Object(o["a"])(f,r,s,!1,null,null,null);p.options.__file="Main.vue";e["default"]=p.exports}}]);