/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='/edge/header/images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'Logo-Rectangle',
            type:'rect',
            rect:['1px','0px','300px','70px','auto','auto'],
            borderRadius:["10px","10px","10px","10px"],
            fill:["rgba(51,51,51,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'Noverse-Text',
               type:'text',
               rect:['107px','-8px','auto','auto','auto','auto'],
               text:"noverse",
               font:['Lucida Sans Unicode, Lucida Grande, sans-serif',48,"rgba(255,255,255,1.00)","normal","none",""]
            },
            {
               id:'Noverse-Symbol',
               type:'image',
               rect:['5px','6px','93px','47px','auto','auto'],
               fill:["rgba(0,0,0,0)",im+"symbol.png",'0px','0px']
            }]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_Noverse-Symbol}": [
            ["style", "top", '12px'],
            ["style", "height", '47px'],
            ["style", "left", '8px'],
            ["style", "width", '93px']
         ],
         "${_Noverse-Text}": [
            ["style", "top", '-2px'],
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "font-family", 'Lucida Sans Unicode, Lucida Grande, sans-serif'],
            ["style", "left", '308px'],
            ["style", "font-size", '48px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,0.00)'],
            ["style", "width", '300px'],
            ["style", "height", '70px'],
            ["style", "overflow", 'hidden']
         ],
         "${_Logo-Rectangle}": [
            ["style", "top", '0px'],
            ["style", "height", '70px'],
            ["color", "background-color", 'rgba(51,51,51,1.00)']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 4018,
         autoPlay: true,
         timeline: [
            { id: "eid12", tween: [ "style", "${_Noverse-Text}", "left", '308px', { fromValue: '308px'}], position: 16, duration: 0, easing: "easeOutBounce" },
            { id: "eid13", tween: [ "style", "${_Noverse-Text}", "left", '308px', { fromValue: '308px'}], position: 2014, duration: 0, easing: "easeOutBounce" },
            { id: "eid10", tween: [ "style", "${_Noverse-Text}", "left", '108px', { fromValue: '308px'}], position: 2021, duration: 1997, easing: "easeOutBounce" },
            { id: "eid18", tween: [ "style", "${_Noverse-Symbol}", "left", '315px', { fromValue: '315px'}], position: 10, duration: 0, easing: "easeOutBounce" },
            { id: "eid8", tween: [ "style", "${_Noverse-Symbol}", "left", '8px', { fromValue: '315px'}], position: 17, duration: 1997, easing: "easeOutBounce" },
            { id: "eid15", tween: [ "style", "${_Noverse-Symbol}", "top", '12px', { fromValue: '12px'}], position: 4018, duration: 0, easing: "easeOutBounce" },
            { id: "eid16", tween: [ "style", "${_Noverse-Text}", "top", '-2px', { fromValue: '-2px'}], position: 4018, duration: 0, easing: "easeOutBounce" }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "Noverse-Logo-Edge");
