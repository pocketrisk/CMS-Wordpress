<html><head>
<script type="text/javascript" src="https://bam.nr-data.net/1/01586dee7d?a=3780205&amp;v=1071.385e752&amp;to=J1YLTEIJVF8EQUkKXwlcSktYCU8%3D&amp;rst=3289&amp;ref=https://www.pocketrisk.com/&amp;ap=21&amp;be=1219&amp;fe=3242&amp;dc=1765&amp;perf=%7B%22timing%22:%7B%22of%22:1523438636838,%22n%22:0,%22u%22:1108,%22ue%22:1108,%22f%22:4,%22dn%22:4,%22dne%22:4,%22c%22:4,%22ce%22:4,%22rq%22:7,%22rp%22:1087,%22rpe%22:1104,%22dl%22:1138,%22di%22:1765,%22ds%22:1765,%22de%22:1832,%22dc%22:3241,%22l%22:3241,%22le%22:3270%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1071.min.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;appId=248746058583074&amp;version=v2.0"></script><script async="" src="//connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://tag.perfectaudience.com/serve/5347a41d41e2db915f000038.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"01586dee7d","applicationID":"3780205","transactionName":"J1YLTEIJVF8EQUkKXwlcSktYCU8=","queueTime":0,"applicationTime":21,"agent":""}</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta content="https://www.pocketrisk.com/pdf/footer" name="pdfkit-footer_html">
<meta content="A client risk tolerance questionnaire for financial advisors." name="description">
<link href="<?php $uploads = wp_upload_dir(); echo $uploads['url']; ?>/favicon.ico" rel="icon" type="image/x-ico">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/semantic.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/base.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/layout.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/pricing.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/home.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/blank_questionnaire.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/page_header.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/questions.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/report.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/embedded.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/form.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/static_pages.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/intro_report.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/client.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/client_show.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/account.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/pricing.css">
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/csss/report_print_grid.css">
<style>
a.item {
display: none;
}
</style>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/new_file.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38077242-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

<script type="text/javascript">
      (function() {
        window._pa = window._pa || {};
        // _pa.orderId = "myOrderId"; // OPTIONAL: attach unique conversion identifier to conversions
        // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
        // _pa.productId = "myProductId"; // OPTIONAL: Include product ID for use with dynamic ads
        var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
        pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.perfectaudience.com/serve/5347a41d41e2db915f000038.js";
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
      })();
    </script>

<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1505169306455292');
fbq('track', "PageView");</script>
<noscript>&lt;img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1505169306455292&amp;ev=PageView&amp;noscript=1"
/&gt;</noscript>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_live_0PAhOhyBQOgb6n6mkzxxme9F');
  </script>
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="khc0X0aUwxmtTeDPKoScELgD4B8tb/VrkBKePfb2EiU8B9QNUhK/boiv7+wXKgSQdkC/U3vlfpy6NlGLWaP2fw==">
<script>
    $(document).ready(function() {
      $('[data-toggle="modal"]').click(function(e) {
        var target = $(e.currentTarget).data('target');
        $(target).modal('show');
      });
    });
  </script>
<script type="text/javascript" async="" src="https://pixel-geo.prfct.co/tagjs?a_id=21371&amp;source=js_tag"></script><img src="https://pixel-geo.prfct.co/seg/?add=1611024,1611034,1611035,4403939&amp;source=js_tag&amp;a_id=21371" width="1" height="1" border="0"><img src="https://secure.adnxs.com/seg?t=2&amp;add=4403939" width="1" height="1" border="0" style="display: none !important;"><img src="https://secure.adnxs.com/seg?t=2&amp;add=1611035" width="1" height="1" border="0" style="display: none !important;"><img src="https://secure.adnxs.com/seg?t=2&amp;add=1611034" width="1" height="1" border="0" style="display: none !important;"><img src="https://secure.adnxs.com/seg?t=2&amp;add=1611024" width="1" height="1" border="0" style="display: none !important;"><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_customer_chat_bounce_in{animation-duration:250ms;animation-name:fb_bounce_in}.fb_customer_chat_bounce_out{animation-duration:250ms;animation-name:fb_fade_out}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_mobile_overlay_active{background-color:#fff;height:100%;overflow:hidden;position:fixed;visibility:hidden;width:100%}@keyframes fb_fade_out{from{opacity:1}to{opacity:0}}@keyframes fb_bounce_in{0%{opacity:0;transform:scale(.8, .8);transform-origin:100% 100%}10%{opacity:.1}20%{opacity:.2}30%{opacity:.3}40%{opacity:.4}50%{opacity:.5}60%{opacity:.6}70%{opacity:.7}80%{opacity:.8;transform:scale(1.03, 1.03)}90{opacity:.9}100%{opacity:1;transform:scale(1, 1)}}</style></head>
<body id="home" class="static class_home">
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/FdM1l_dpErI.js?version=42#channel=f1ea6808ba09284&amp;origin=https%3A%2F%2Fwww.pocketrisk.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=248746058583074&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
<div class="ui vertical sidebar right menu">
<div class="ui dropdown item" tabindex="0">
How It Works <i class="dropdown icon"></i>
<a class="item" href="<?php echo  get_home_url();?>/how-it-works">Product overview</a>
<a class="item" href="<?php echo  get_home_url();?>/connect-your-model-portfolios">Connect your model portfolios</a>
<a class="item" href="<?php echo  get_home_url();?>/methodology">Methodology</a>
<a class="item" href="<?php echo  get_home_url();?>/compliance">Compliance</a>
<a class="item" href="<?php echo  get_home_url();?>/why-advisors-choose-pocket-risk">Why advisors choose Pocket Risk</a>
</div>
</div>
<a class="item" href="/pricing">Pricing and Free Trial</a>
</div>
<script>
      $(document).ready(function() {
        $('.toc.item').click(function() {
          $('.ui.sidebar').sidebar('toggle');
        });
        $('.ui.menu .ui.dropdown').dropdown({
          on: 'hover'
        });
      });
    </script>
<div class="pusher">
<header class="ui  menu">
<div class="ui container">
<a class="header item logo" href="<?php echo get_home_url();?>"><img height="38px" class="logo" src="<?php echo $uploads['url']; ?>/new_logo.png" alt="Logo inverted"></a>
<div class="right menu">
<div class="ui dropdown item" tabindex="0">
How It Works <i class="dropdown icon"></i>
<div class="menu transition hidden" tabindex="-1">
<a class="item" href="<?php echo  get_home_url();?>/how-it-works">Product overview</a>
<a class="item" href="<?php echo  get_home_url();?>/connect-your-model-portfolios">Connect your model portfolios</a>
<a class="item" href="<?php echo  get_home_url();?>/methodology">Methodology</a>
<a class="item" href="<?php echo  get_home_url();?>/compliance">Compliance</a>
<a class="item" href="<?php echo  get_home_url();?>/why-advisors-choose-pocket-risk">Why advisors choose Pocket Risk</a>
</div>
</div>
<a class="item" href="<?php echo  get_home_url();?>/pricing">Pricing and Free Trial</a>
<a class="item" href="<?php echo  get_home_url();?>/pricing">Log In</a>
<a class="toc item">
<i class="sidebar icon"></i>
</a>
</div>
</div>
</header>
