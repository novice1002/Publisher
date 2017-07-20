<?php
/*
 Template Name: AMP Template 3
 */
$paged = intval(get_query_var('paged'));
$posts_per_page = 20;
if(empty($paged) || $paged == 0) {
    $paged = 1;
}
$max_page = intval((wp_count_posts()->publish)/$posts_per_page);
$offset = ($paged - 1) * $posts_per_page;
?>
<!doctype html>
<html amp lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="canonical" href="https://tintucso.org" />
            <script custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js" async></script>
            <script custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js" async></script>
            <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
            <script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async></script>
        <script src="https://cdn.ampproject.org/v0.js" async></script>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|PT+Serif:400,700">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"NewsArticle","mainEntityOfPage":"https:\/\/tintucso.org","publisher":{"@type":"Organization","name":"TinTucSo.ORG - Tin t\u1ee9c c\u00f4ng ngh\u1ec7 m\u1edbi c\u1eadp nh\u1eadt li\u00ean t\u1ee5c","logo":{"@type":"ImageObject","url":"https:\/\/tintucso.org\/wp-content\/uploads\/2017\/04\/logo-380x72.png","height":36,"width":190}},"headline":"TNews365 - Tin t&#x1ee9;c c&#xf4;ng ngh&#x1ec7; c&#x1ead;p nh&#x1ead;t li&#xea;n t&#x1ee5;c 24h","datePublished":"2017-03-22T14:43:56+00:00","dateModified":"2017-03-22T15:01:15+00:00","author":{"@type":"Person","name":"Tin Tức Số"},"image":{"@type":"ImageObject","url":"https:\/\/tintucso.org\/wp-content\/uploads\/2017\/04\/default-1200x628.jpg","width":1200,"height":628}}</script>
            <title>TinTucSo.ORG - Tin tức công nghệ cập nhật liên tục 24h</title>
        <meta name="description"  content="Trang thu thập thông tin từ các diễn đàn, các trang công nghệ hàng đầu tại Việt Nam" />
<meta property="og:title" content="TinTucSo.ORG - Tin tức công nghệ cập nhật liên tục 24h" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://tintucso.org" />
<meta property="og:image" content="hhttps://tintucso.org/wp-content/uploads/2017/04/default-1200x628.jpg" />
<meta property="og:site_name" content="ITNews365" />
<meta property="fb:app_id" content="946922052078572" />
<meta property="og:description" content="Trang thu thập thông tin từ các diễn đàn, các trang công nghệ hàng đầu tại Việt Nam" />
<meta property="article:publisher" content="https://facebook.com/itnews365.net" />
<meta property="article:author" content="https://www.facebook.com/itnews365.net" />
<meta property="article:published_time" content="2017-03-22T14:43:56Z" />
<meta property="article:modified_time" content="2017-03-22T15:01:15Z" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="TinTucSo.ORG - Tin tức công nghệ cập nhật liên tục 24h" />
<meta name="twitter:description" content="rang thu thập thông tin từ các diễn đàn, các trang công nghệ hàng đầu tại Việt Nam" />
<meta name="twitter:image" content="https://tintucso.org/wp-content/uploads/2017/04/default-1200x628.jpg" />
<meta itemprop="image" content="https://tintucso.org/wp-content/uploads/2017/04/default-1200x628.jpg" />

                                    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
                                        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
                                        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
            <style amp-custom>
        
/* Global Styling */
body{
    font: 16px/1.4 Sans-serif;
}
a {
    color: #312C7E;
    text-decoration: none
}
.clearfix, .cb{
    clear: both
}

/* Template Styles */
.amp-wp-content, .amp-wp-title-bar div {
        max-width: 1000px;
    margin: 0 auto;
    }

/* Slide Navigation code */

amp-sidebar {
    width: 280px;
    background: #131313;
    font-family: 'Roboto Slab', serif;
}
.amp-sidebar-image {
  line-height: 100px;
  vertical-align:middle;
}
.amp-close-image {
   top: 15px;
   left: 225px;
   cursor: pointer;
}
.navigation_heading{
    padding: 20px 20px 15px 20px;
    color: #aaa;
    font-size: 10px;
    font-family: sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 1px solid #555;
    display: inline-block;
    width: 100%;
}
amp-accordion>section[expanded]>:nth-child(n){
background:#666;
}
amp-accordion>section[expanded]>:nth-child(n) li:last-child{
    margin-bottom:10px
}
amp-accordion>section[expanded]>:nth-child(n) li{
    animation: openingmenu .3s normal forwards ease-in-out;
    -webkit-transform: translate3d(0, 0, 60%) scale(1);
    transform: translate3d(0, 0, 60%) scale(1);
}
@keyframes openingmenu {
    0% {
    padding:0px;
    }
    100% {
    padding:0px 0px 0px 10px;

    }
}

@keyframes closingmenu {
    0% {
    padding:0px 0px 0px 20px;
    }
    100% {
    padding:0px;
    }
}
.toggle-navigationv2 ul {
    list-style-type: none;
    margin: 15px 0 0 0;
    padding: 0;
}
.toggle-navigationv2 ul li a{
    padding: 10px 15px 10px 20px;
    display: inline-block;
    font-size: 14px;
    color:#eee;
    width:100%
}
amp-accordion>section[expanded] li a{
    padding: 8px 15px 8px 20px;
    font-size: 14px;
}
amp-accordion>section[expanded] li a:before{
    content: "\25b8";
    left: -7px;
    top: -2px;
    position: relative;
    font-size: 10px;
    color: #a9a9a9;
}
.toggle-navigationv2 ul li a:hover,.toggle-navigationv2 ul h6:hover{
    transition: 1s all;
    background: #666;
    color: #fff;
}
.toggle-navigationv2 ul h6{
    padding: 10px 15px 10px 20px;
    background: #131313;
    border:0;
    font-size: 14px;
    font-weight:normal;
}
.toggle-navigationv2 ul h6 a:after{
    position: absolute;
    right: 20px;
    top: 0;
    color: #999;
    font-size: 13px;
    line-height: 38px;
    transition: 1s all;
    transform:rotate(-90deg);
    content: '\25be';
}
.toggle-navigationv2 ul h6 a{
    color:#eee;
}
.toggle-navigationv2 section[expanded] h6 a:after{
    content: '\25be';
    font-size: 13px;
    transform:rotate(0);
    transition: 1s all;
    color:#ccc
}
.toggle-navigationv2 section[expanded] h6{
    transition: 1s all;
    background:#666
}
.toggle-navigationv2 .social_icons{
    margin-top: 25px;
    border-top: 1px solid #555;
    padding: 25px 0px;
    color: #fff;
    width: 100%;
}
.menu-all-pages-container:after{
    content: "";
    clear: both
}
.toggle-text{
    color: #fff;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 3px;
    display: inherit;
    text-align: center;
}
.toggle-text:before{
    content: "...";
    font-size: 32px;
    position: ;
    font-family: georgia;
    line-height: 0px;
    margin-left: 0px;
    letter-spacing: 1px;
    top: -3px;
    position: relative;
    padding-right: 10px;
}
.toggle-navigation:hover,
.toggle-navigation:active,
.toggle-navigation:focus{
    display: inline-block;
    width: 100%;
}


/* Pagination */
.amp-wp-content.pagination-holder {
    background: none;
    padding: 0;
    box-shadow: none;
    height: auto;
    min-height: auto;
}
#pagination{
    width: 100%;
    margin-top: 20px;
}
#pagination .next, #pagination .prev{ margin: 0px 6% 10px 6%; }
#pagination .next a, #pagination .prev a{
    opacity:0.9;
    background: #f42f42;
    width: 100%;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 16px;
    line-height: 1;
    padding: 18px 0%;
    border-radius: 4px;
}
/* Sticky Social bar in Single */

.sticky_social{
    width: 100%;
    bottom: 0;
    display: block;
    left: 0;
    box-shadow: 0px 4px 7px #000;
    background: #fff;
    padding: 7px 0px 0px 0px;
    position: fixed;
    margin: 0;
    z-index: 10;
    text-align: center;
}
.whatsapp-share-icon {
    height: 40px;
    display: inline-block;
    background: #5cbe4a;
    margin: 0;
}

.sticky_social .whatsapp-share-icon {
    padding: 4px 0px 14px 0px;
    height: 10px;
    top: -4px;
    position: relative;
}
/* Header */
#header{
    background: #fff;
    text-align: center;
    height:50px;
    box-shadow:0 0 32px rgba(0,0,0,.15);
}
header{
    padding-bottom:50px;
}
#headerwrap{
    position: fixed;
    z-index:1000;
    width: 100%;
    top:0;
}
#header h1{ text-align: center; font-size: 16px; position: relative; font-weight: bold; line-height: 53px; padding: 0; margin: 0; text-transform: uppercase }

main .amp-wp-content{
    font-size: 18px;
    line-height: 29px;
    color:#111
}
.single-post main .amp-wp-article-content h1{ font-size:2em}
.single-post main .amp-wp-article-content h1,
.single-post main .amp-wp-article-content h2,
.single-post main .amp-wp-article-content h3,
.single-post main .amp-wp-article-content h4,
.single-post main .amp-wp-article-content h5,
.single-post main .amp-wp-article-content h6{
    font-family: 'Roboto Slab', serif;
    margin: 0px 0px 5px 0px;
    line-height: 1.6;
}
.home-post_image {
    float: left;
    width:33%;
    padding-right: 2%;
}
.amp-wp-title {
    margin-top: 0px;
}
h2.amp-wp-title {
    font-family: 'Roboto Slab', serif;
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 7px;
    line-height: 1.3;
}
h2.amp-wp-title a{
    color: #000;
}
.amp-wp-tags{     list-style-type: none;
    padding: 0;
    margin: 0 0 9px 0;
    display: inline-flex; }
.amp-wp-tags li{
    display: inline;
    background: #F6F6F6;
    color: #9e9e9e;
    line-height: 1;
    border-radius: 50px;
    padding: 8px 18px;
    font-size: 12px;
    margin-right: 8px;
    top: -3px;
    position: relative;
}
.amp-loop-list{ position:relative;     border-bottom: 1px solid #ededed;
    padding: 25px 15px 25px 15px }
body .amp-loop-list-noimg .amp-wp-post-content{
    width:100%
}
.amp-loop-list .amp-wp-post-content{
    float: left;
    width: 65%;
}
.amp-loop-list .featured_time{
    color:#b3b3b3;
    padding-left:0
}
.amp-wp-post-content p{
    color: grey;
    line-height: 1.5;
    font-size: 14px;
    margin: 8px 0 10px;
    font-family:'PT Serif', serif
}
/* Footer */
#footer{
    background: #151515;
    color: #eee;
    font-size: 13px;
    text-align: center;
    letter-spacing: 0.2px;
    padding: 35px 0 35px 0;
    margin-top: 30px;
}
#footer a{ color:#fff }
#footer p:first-child{
    margin-bottom: 12px;
}
#footer .social_icons{
    margin: 0px 20px 25px 20px;
    border-bottom: 1px solid #3c3c3c;
    padding-bottom: 25px;
}
#footer p{
    margin: 0
}
.rightslink, #footer .rightslink a{
    font-size:13px;
    color:#999
}
.poweredby{ padding-top:10px;
font-size:10px;
}
#footer .poweredby a{
color:#666
}
.footer_menu ul{
    list-style-type: none;
    padding: 0;
    text-align: center;
    margin: 0px 20px 25px 20px;
    line-height: 27px;
    font-size: 13px
}
.footer_menu ul li{
    display:inline;
    margin:0 10px;
}
.footer_menu ul li:first-child{
    margin-left:0
}
.footer_menu ul li:last-child{
    margin-right:0
}
.footer_menu ul ul{ display:none }
/* Single */
.single-post main{
    margin: 20px 17px 17px 17px;
}
.amp-wp-article-content{
    font-family:'PT Serif', serif;
}
.single-post .post-featured-img,
.single-post .amp-wp-article-content amp-img{
    margin:0 -17px 17px -17px
}
.ampforwp-title{
    padding: 0px 0px 0px 0px;
    margin-top: 12px;
    margin-bottom: 12px;
}
.comment-button-wrapper{
    margin-bottom: 50px;
    margin-top: 30px;
    text-align:center
}
.comment-button-wrapper a{
    color: #fff;
    background: #312c7e;
    font-size: 14px;
    padding: 12px 22px 12px 22px;
    font-family: 'Roboto Slab', serif;
    border-radius: 2px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
h1.amp-wp-title {
    margin: 0;
    color: #333333;
    font-size: 48px;
    line-height: 58px;
    font-family: 'Roboto Slab', serif;
}
.post-pagination-meta{
    min-height:75px
}
.single-post .post-pagination-meta{
    font-size:15px;
    font-family:sans-serif;
    min-height:auto;
    margin-top:-5px;
    line-height:26px;
}
.single-post .post-pagination-meta span{
    font-weight:bold
}
.single-post .amp_author_area .amp_author_area_wrapper{
    display: inline-block;
    width: 100%;
    line-height: 1.4;
    margin-top: 22px;
    font-size: 16px;
    color:#333;
    font-family: sans-serif;
}
.single-post .amp_author_area amp-img{
    margin: 0;
    float: left;
    margin-right: 12px;
    border-radius: 60px;
}
.amp-wp-article-tags .ampforwp-tax-tag, .amp-wp-article-tags .ampforwp-tax-tag a{
    font-size: 12px;
    color: #555;
    font-family: sans-serif;
    margin: 20px 0 0 0;
}

.amp-wp-article-tags span{
    background: #eeeeee;
    margin-right: 10px;
    padding: 5px 12px 5px 12px;
    border-radius: 3px;
}
.ampforwp-social-icons{
    margin-bottom: 28px;
    margin-top: 25px;
    height: 40px;
}
.ampforwp-social-icons amp-social-share{
    border-radius:60px;
    background-size:22px;
    margin-right:6px;
}
.ampforwp-social-icons-wrapper .whatsapp-share-icon{
    padding: 11px 12px 9px 12px;
    top: -13px;
    position: relative;
    line-height:1;
    height: 20px;
    border-radius: 60px;
}
.amp-wp-tax-tag {
    list-style: none;
    display: inline-block;
}
figure{
    margin: 0 0 20px 0;
}
figure amp-img{
    max-width:100%;
}
figcaption{
    font-size: 11px;
    margin-bottom: 11px;
    background: #eee;
    padding: 6px 8px;
}
.single-post figcaption{
    margin-top: -17px;
    margin-left: -17px;
    margin-right: -17px;
}
.amp-wp-byline amp-img {
    display: none;
}

.amp-wp-author{
    margin-right: 1px;
}
.amp-wp-meta, .amp-wp-meta a {
    font-size: 13px;
    color: #acacac;
    margin: 20px 0px 20px 0px;
    padding: 0;
}
.amp-ad-wrapper {
    text-align: center
}
.the_content p{
    margin-top: 0px;
    margin-bottom: 30px;
}
.amp-wp-tax-tag{

}
main .amp-wp-content.featured-image-content {
    padding: 0px;
    border: 0;
    margin-bottom: 0;
    box-shadow: none
}
.archives_body main{ margin-top:30px }
/* Related Posts */
main .amp-wp-content.relatedpost {
    background: none;
    box-shadow: none;
    padding:0px 0 0 0;
    margin:1.8em auto 1.5em auto
}
.single-post .related_posts h3, .single-post .comments_list h3 {
    font-size: 20px;
    color: #777;
    font-family:'Roboto Slab', serif;
    border-bottom: 1px solid #eee;
    font-weight: 400;
    padding-bottom: 1px;
    margin-bottom: 10px;
}

.related_posts ol{
    list-style-type:none;
    margin:0;
    padding:0
}
.related_posts ol li{
    display:inline-block;
    width:100%;
    margin-bottom: 12px;
    padding: 0px;
}
.related_posts .related_link a{
    color: #444;
    font-size: 16px;
    font-family: 'Roboto Slab', serif;
    font-weight: 600;
}
.related_posts ol li amp-img{
    width:100px;
    float:left;
    margin-right:15px
}
.related_posts ol li p{
    font-size: 12px;
    color: #999;
    line-height: 1.2;
    margin: 12px 0 0 0;
}
.no_related_thumbnail{
    padding: 15px 18px;
}
.no_related_thumbnail .related_link{
    margin: 16px 18px 20px 19px;
}
/* Comments */
.page-numbers{
    padding: 9px 10px;
    background: #fff;
    font-size: 14px;
}
.comment-body .comment-content{
    font-family:'PT Serif', serif;
    margin-top: 2px;
}
main .amp-wp-content.comments_list {
    background: none;
    box-shadow: none;
    padding:0
}
.comments_list div{
    display:inline-block;
}
.comments_list ul{
    margin:0;
    padding:0
}
.comments_list ul.children{
    padding-bottom:10px;
    margin-left: 3%;
    width: 96%;
}
.comments_list ul li p{
    margin:0;
    font-size:16px;
    clear:both;
    padding-top:5px;
}
.comments_list ul li{
    font-size: 12px;
    list-style-type: none;
    margin-bottom: 22px;
    padding-bottom: 20px;
    max-width: 1000px;
    border-bottom: 1px solid #eee;
}
.comments_list ul ul li {
    border-left: 2px solid #eee;
    padding-left: 15px;
    border-bottom: 0;
    padding-bottom: 0px;
}
.comments_list ul li .comment-body .comment-author{
    margin-right:5px
}
.comment-author{ float:left }
.single-post footer.comment-meta{
        color:#666;
        padding-bottom: 0;
}
.comment-metadata a{ color:#888 }
.comments_list li li{
    margin: 20px 20px 10px 20px;
    background: #f7f7f7;
    box-shadow: none;
    border: 1px solid #eee;
}
.comments_list li li li{
    margin:20px 20px 10px 20px
}
/* ADS */
.amp_ad_1{
    margin-top: 15px;
    margin-bottom: 10px;
}
.single-post .amp_ad_1{
    margin-bottom: -15px;
}
.amp-ad-2{ margin-bottom: -5px;    margin-top: 20px; }
html .single-post .ampforwp-incontent-ad-1 {
    margin-bottom: 10px;
}
.amp-ad-3{
    margin-bottom:10px;
}
.amp-ad-4{
    margin-top:2px;
}
/* Notifications */
#amp-user-notification1 p {
    display: inline-block;
}
amp-user-notification {
    padding: 5px;
    text-align: center;
    background: #fff;
    border-top: 1px solid;
}
amp-user-notification button {
    padding: 8px 10px;
    background: #000;
    color: #fff;
    margin-left: 5px;
        border: 0;
}
amp-user-notification button:hover {
    cursor: pointer
}
.amp-wp-content blockquote {
    background-color: #fff;
    border-left: 3px solid;
    margin: 0;
    padding: 15px 20px;
    background: #f3f3f3;
}
.amp-wp-content blockquote p{
    margin-bottom:0
}
pre {
    white-space: pre-wrap;
}


#designthree{
    background-color: #FFF;
    overflow: visible;
/*    animation: closing .3s normal forwards ease-in-out,closingFix .6s normal forwards ease-in-out;
    -webkit-transform-origin: right center;
    transform-origin: right center;*/
}
/* Sidebar */
#sidebar[aria-hidden="false"]+#designthree {
    max-height: 100vh;
    overflow: hidden;
    animation: opening .3s normal forwards ease-in-out;
    -webkit-transform: translate3d(60%, 0, 0) scale(0.8);
    transform: translate3d(60%, 0, 0) scale(0.8);
}
@keyframes opening {
    0% {
        transform: translate3d(0, 0, 0) scale(1);
    }
    100% {
        transform: translate3d(60%, 0, 0) scale(0.8);
    }
}

@keyframes closing {
    0% {
        transform: translate3d(60%, 0, 0) scale(0.8);
    }
    100% {
        transform: translate3d(0, 0, 0) scale(1);
    }
}

@keyframes closingFix {
    0% {
        max-height: 100vh;
        overflow: hidden;
    }
    100% {
        max-height: none;
        overflow: visible;
    }
}

.hamburgermenu{
    float:left;
    position:relative;
    z-index: 9999;
}
/* Category 3 */
.amp-category-block{ margin: 30px 0px 10px 0px }
.amp-category-block a{ color:#666}
.amp-category-block ul{ list-style-type:none}
.category-widget-gutter h4{ margin-bottom: 0px;}
.category-widget-gutter ul{ margin-top: 10px; list-style-type:none; padding:0 }
.amp-category-block-btn{ display: block; text-align: center; font-size: 13px; margin-top: 15px; border-bottom: 1px solid #f1f1f1; text-decoration: none; padding-bottom: 8px;}
.design_2_wrapper .amp-category-block{ max-width: 840px; margin: 1.5em auto; }
.amp-category-block-title{
    border-bottom: double #ddd;
    margin-bottom: 12px;
    padding-bottom: 1px;
    text-align: center;
    font-size: 12px;
    text-transform: uppercase;
    color: #666;
}
.amp-category-block ul, .category-widget-wrapper{
    max-width: 1000px;
    margin: 0 auto;
    padding:0px 15px 5px 15px
}
.amp-category-post{
    width: 32%;
    display:inline-table;
}
.amp-category-post amp-img{
    margin-bottom:5px;
}
.amp-category-block li:nth-child(3){
    margin: 0 1%;
}
.searchmenu{
    margin-right: 15px;
    margin-top: 11px;
    position: absolute;
    top: 0;
    right: 0;
}
.searchmenu button{
    background:transparent;
    border:none
}
.headerlogo{
    margin: 0 auto;
    width: 80%;
    text-align: center;
}
.headerlogo amp-img{
    margin-top:6px
}
.headerlogo a{
    color:#F42;
}
/*Navigation Menu*/
.toast {
    display: block;
    position: relative;
    height: 50px;
    padding-left: 20px;
    padding-right: 15px;
    width: 49px;
    background:none;
    border:0
}

.toast:after,
.toast:before,
.toast span {
    position: absolute;
    display: block;
    width: 19px;
    height: 2px;
    border-radius: 2px;
    background-color: #F42;
    -webkit-transform: translate3d(0, 0, 0) rotate(0deg);
    transform: translate3d(0, 0, 0) rotate(0deg);
}

.toast:after,
.toast:before {
    content: '';
    left: 20px;
    -webkit-transition: all ease-in .4s;
    transition: all ease-in .4s;
}

.toast span {
    opacity: 1;
    top: 24px;
    -webkit-transition: all ease-in-out .4s;
    transition: all ease-in-out .4s;
}

.toast:before {
    top: 17px;
}

.toast:after {
    top: 31px;
}

#sidebar[aria-hidden="false"]+#designthree .toast span {
    opacity: 0;
    -webkit-transform: translate3d(200%, 0, 0);
    transform: translate3d(200%, 0, 0);
}

#sidebar[aria-hidden="false"]+#designthree .toast:before {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate(43deg);
    transform: rotate(43deg);
}

#sidebar[aria-hidden="false"]+#designthree .toast:after {
    -webkit-transform-origin: left top;
    transform-origin: left top;
    -webkit-transform: rotate(-43deg);
    transform: rotate(-43deg);
}

/* CSS3 icon */
[class*=icono-] {
    display: inline-block;
    vertical-align: middle;
    position: relative;
    font-style: normal;
    color: #f42;
    text-align: left;
    text-indent: -9999px;
    direction: ltr
}
[class*=icono-]:after, [class*=icono-]:before {
    content: '';
    pointer-events: none;
}
.icono-search {
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%)
}
.icono-share {
    height: 9px;
    position: relative;
    width: 9px;
    color: #dadada;
    border-radius: 50%;
    box-shadow: inset 0 0 0 32px, 22px -11px 0 0, 22px 11px 0 0;
    top: -15px;
    margin-right: 35px;
}
.icono-share:after, .icono-share:before {
    position: absolute;
    width: 24px;
    height: 1px;
    box-shadow: inset 0 0 0 32px;
    left: 0;
}
.icono-share:before {
    top: 0px;
    -webkit-transform: rotate(-25deg);
    -ms-transform: rotate(-25deg);
    transform: rotate(-25deg);
}
.icono-share:after {
    top: 8px;
    -webkit-transform: rotate(25deg);
    -ms-transform: rotate(25deg);
    transform: rotate(25deg);
}
.icono-search {
    border: 1px solid;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    margin: 4px 4px 8px 8px;
}
.icono-search:before{
    position: absolute;
    left: 50%;
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
     transform: rotate(270deg);
    width: 2px;
    height: 9px;
    box-shadow: inset 0 0 0 32px;
    top: 0px;
    border-radius: 0 0 1px 1px;
    left: 14px;
}
.closebutton{
    background: transparent;
    border: 0;
    color: rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.7);
    border-radius: 30px;
    width: 32px;
    height: 32px;
    font-size: 12px;
    text-align: center;
    position: absolute;
    top: 12px;
    right: 20px;
    outline:none
}
amp-lightbox{
    background: rgba(0, 0, 0,0.85);
}
.searchform label{
    color: #f7f7f7;
    display: block;
    font-size: 10px;
    letter-spacing: 0.3px;
    line-height: 0;
    opacity:0.6
}
.searchform{
    background: transparent;
    left: 20%;
    position: absolute;
    top: 35%;
    width: 60%;
    max-width: 100%;
    transition-delay: 0.5s;
}
.searchform input{
    background: transparent;
    border: 1px solid #666;
    color: #f7f7f7;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    letter-spacing: 0.3px;
    text-transform: capitalize;
    padding: 20px 0px 20px 30px;
    margin-top: 15px;
    width: 100%;
}
#searchsubmit{opacity:0}

/* AMP carousel */
.amp-carousel-button-prev,
.amp-carousel-button-next{
    top:30px;border-radius:60px;
}
.amp-featured-wrapper{
    background:#333
}
.amp-featured-area{
    margin: 0 auto;
    max-width: 450px;
    max-height: 270px;
}
.amp-carousel-slide h1 {
    font-size: 30px;
    font-family: 'PT Serif', serif;
    margin: 0;
    font-weight: normal;
    line-height: 38px;
    color: #fff;
    padding: 10px 20px 20px 20px;
}
.amp-carousel-slide amp-img:before{
    z-index:100;
    bottom: 0;
    content: "";
    display: block;
    height: 100%;
    position: absolute;
    width: 100%;
    background: -webkit-gradient(linear, 50% 0%, 50% 75%, color-stop(0%, rgba(0,0,0,0)), color-stop(150%, #000000)) repeat scroll 0 0 rgba(0,0,0,0.2);
    background: -webkit-linear-gradient(rgba(0,0,0,0),#000000 75%) repeat scroll 0 0 rgba(0,0,0,0);
    background: -moz-linear-gradient(rgba(0,0,0,0),#000000 75%) repeat scroll 0 0 rgba(0,0,0,0);
    background: -o-linear-gradient(rgba(0,0,0,0),#000000 75%) repeat scroll 0 0 rgba(0,0,0,0);
    background: linear-gradient(rgba(0,0,0,0),#000000 75%) repeat scroll 0 0 rgba(0,0,0,0);
}
.featured_title{
    position:absolute;
    z-index:110;
    bottom:0
}
.featured_time{
    font-size: 12px;
    color: #fff;
    opacity: 0.8;
    padding-left: 20px;
}
.featured_meta{
    color:#acacac;
    font-size:12px;
    margin:0 15px;
}
.featured_meta_left{
    float:left
}
.featured_meta_right{
    float:right
}

/* Tables */
table a:link { color: #666; font-weight: bold; text-decoration: none; }
table a:visited { color: #999999; font-weight: bold; text-decoration: none; }
table a:active,
table a:hover { color: #bd5a35; text-decoration: underline; }
table { font-family: Arial, Helvetica, sans-serif; color: #666; font-size: 12px; text-shadow: 1px 1px 0px #fff; background: #eee; margin: 20px; width: 95%; }
table th { padding: 21px 25px 22px 25px; border-top: 1px solid #fafafa; border-bottom: 1px solid #e0e0e0; background: #ededed; background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb)); background: -moz-linear-gradient(top, #ededed, #ebebeb); }
table th:first-child { text-align: left; padding-left: 20px; }
table tr:first-child th:first-child { -moz-border-radius-topleft: 3px; -webkit-border-top-left-radius: 3px; border-top-left-radius: 3px; }
table tr:first-child th:last-child { -moz-border-radius-topright: 3px; -webkit-border-top-right-radius: 3px; border-top-right-radius: 3px; }
table tr { text-align: center; padding-left: 20px; }
table td:first-child { text-align: left; padding-left: 20px; border-left: 0; }
table td { padding: 18px; border-top: 1px solid #ffffff; border-bottom: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; background: #fafafa; background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa)); background: -moz-linear-gradient(top, #fbfbfb, #fafafa); }
table tr.even td { background: #f6f6f6; background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6)); background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6); }
table tr:last-child td {border-bottom: 0;}
table tr:last-child td:first-child { -moz-border-radius-bottomleft: 3px; -webkit-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px; }
table tr:last-child td:last-child { -moz-border-radius-bottomright: 3px; -webkit-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px; }
table tr:hover td { background: #f2f2f2; background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0)); background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0); }

/* Responsive */
@media screen and (min-width:1034px){
    .single-post figcaption{
        margin: -17px 17px 0 -17px;
    }
}
@media screen and (max-width: 768px) {
    .amp-wp-meta{ margin:10px 0px 15px 0px }
    .home-post_image{ width: 40%; }
    .amp-loop-list .amp-wp-post-content{ width: 58%; }
    .amp-loop-list .featured_time{line-height:1}
    .single-post main .amp-wp-content h1{  line-height:1.4;  font-size: 30px;}
}

@media screen and (max-width: 600px) {
.amp-loop-list .amp-wp-tags{display:none}
}
@media screen and (max-width: 530px) {
    .home-post_image{ width: 35%; }
    .amp-loop-list .amp-wp-post-content{ width: 63%; }
    .amp-wp-post-content p { font-size: 12px; }
    .related_posts ol li p { line-height: 1.6; margin: 7px 0 0 0;}
    .comments_list ul li .comment-body {width:auto}
    .amp-category-block li:nth-child(3) {margin:0}
}
@media screen and (max-width: 425px) {
    .home-post_image{
    /*    width: 125px;*/
        width: 31.6%;
        overflow: hidden;
        height: 100px;
    /*    margin-right: 13px; */
        margin-right: 3%;
    }
    .home-post_image amp-img{    width: 144%;
        left: -20%; }

    h2.amp-wp-title{    margin-bottom: 7px;  line-height: 1.31578947; font-size: 19px;
        position:relative;top:-3px }

    h2.amp-wp-title a{ color:#262626}
    .amp-loop-list{padding:25px 15px 22px 15px}
    .amp-loop-list .amp-wp-post-content{ width: 63%; }
    .amp-loop-list .amp-wp-post-content p,
    .related_posts .related_link p{
        display:none
    }
    .related_posts .related_link a{
        font-size: 18px;
        line-height: 1.7;
    }
    .ampforwp-tax-category{
        padding-bottom:0
    }
    .amp-wp-byline{
        padding:0
    }
    .related_posts .related_link a {
        font-size: 17px;
        line-height: 1.5;
    }
    .single-post main .amp-wp-content h1{ line-height: 1.3; font-size: 26px;}
    .icono-share{display:none}
    .ampforwp-social-icons amp-social-share{ margin-right: 3px;}
    main .amp-wp-content{ font-size: 16px; line-height: 26px;}
    .single-post .amp_author_area .amp_author_area_wrapper{font-size:13px;}
    .amp-category-post{ font-size:12px; color:#666 }
}
@media screen and (max-width: 400px) {
    .amp-wp-title{
        font-size: 19px;
    }
}
@media screen and (max-width: 375px) {
    .single-post main .amp-wp-content h1{ line-height: 1.3; font-size: 24px;}
    .home-post_image{ height: 79px; }
    .amp-carousel-slide h1{
        font-size: 28px;
        line-height: 32px;
    }
    #pagination .next a, #pagination .prev a{
        color: #666;
        font-size: 14px;
        padding: 15px 0px;
        margin-top: -5px;
    }
    .related_posts h3, .comments_list h3{
        margin-top:15px;
    }
    #pagination .next{
        margin-bottom:15px;
    }
    .related_posts .related_link a {
        font-size: 15px;
    line-height: 1.6;
    }
}
@media screen and (max-width: 340px) {
    .single-post main .amp-wp-content h1{ line-height: 1.3; font-size: 22px;}
    .amp-loop-list {
        padding: 20px 15px 18px 15px;
    }
    h2.amp-wp-title{
        line-height: 1.31578947;
        font-size: 17px;
    }
    .related_posts .related_link a {
        font-size: 15px;
    }
    .the_content .amp-ad-wrapper{
        text-align: center;
        margin-left: -13px;
    }
}
@media screen and (max-width: 320px) {
    .related_posts .related_link a {
    font-size: 13px;
    }
    .ampforwp-social-icons amp-social-share{ margin-right: 1px; }

}


/* Style Modifer */
a {  color: #F42F42 }
.amp-wp-content blockquote { border-color:  #00d6c7; }
amp-user-notification { border-color:  #F42F42;}
amp-user-notification button { background-color:  #F42F42;}
.single-post amp-img.alignleft{ margin-right: 15px; margin-bottom:5px; float: left;}
.single-post amp-img.alignright{ float:right; margin-left: 15px; margin-bottom:5px;}
.single-post amp-img.aligncenter{ text-align:center; margin: 0 auto}
.amp-wp-author:before{ content: " Published by  ";}
.ampforwp-tax-category span:last-child:after { content: ' ';}
.ampforwp-tax-category span:after{ content: ', ';}
.amp-wp-article-content img { max-width: 100%;}
/* Social icons */
@font-face {
  font-family: 'icomoon';
  src:  url('https://tintucso.org/wp-content/plugins/accelerated-mobile-pages/templates/design-manager/design-3/fonts/icomoon.eot?b9qrme');
  src:  url('https://tintucso.org/wp-content/plugins/accelerated-mobile-pages/templates/design-manager/design-3/fonts/icomoon.eot?b9qrme#iefix') format('embedded-opentype'),
    url('https://tintucso.org/wp-content/plugins/accelerated-mobile-pages/templates/design-manager/design-3/fonts/icomoon.ttf?b9qrme') format('truetype'),
    url('https://tintucso.org/wp-content/plugins/accelerated-mobile-pages/templates/design-manager/design-3/fonts/icomoon.woff?b9qrme') format('woff'),
    url('https://tintucso.org/wp-content/plugins/accelerated-mobile-pages/templates/design-manager/design-3/fonts/icomoon.svg?b9qrme#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-twitter:before {
  content: "\f099";background:#1da1f2
}
.icon-facebook:before {
  content: "\f09a";background:#3b5998
}
.icon-facebook-f:before {
  content: "\f09a";background:#3b5998
}
.icon-pinterest:before {
  content: "\f0d2";background:#bd081c
}
.icon-google-plus:before {
  content: "\f0d5";background:#dd4b39
}
.icon-linkedin:before {
  content: "\f0e1";background:#0077b5
}
.icon-youtube-play:before {
  content: "\f16a";background:#cd201f
}
.icon-instagram:before {
  content: "\f16d";background:#c13584
}
.icon-tumblr:before {
  content: "\f173";background:#35465c
}
.icon-vk:before {
  content: "\f189";background:#45668e
}
.icon-whatsapp:before {
  content: "\f232";background:#075e54
}
.icon-reddit-alien:before {
  content: "\f281";background:#ff4500
}
.icon-snapchat-ghost:before {
  content: "\f2ac"; background:#fffc00
}
.social_icons{
    font-size: 15px;
    display: inline-block;
}
.social_icons ul{
    list-style-type:none;
    padding:0;margin:0;
    text-align:center
}
.social_icons li{
    display:inline-block;
    margin:5px;
}
.social_icons li:before{
    color:#fff;
    padding: 10px;
    display: inline-block;
    border-radius: 70px;
    width: 18px;
    height: 18px;
    line-height: 20px;
    text-align: center;
}
#ampsomething { display: none; }
#header, .headerlogo a{ background:#FFFFFF  }
.comment-button-wrapper a, #pagination .next a, #pagination .prev a{
    background: #F42F42 ;
}
.toast:after, .toast:before, .toast span{
    background: #F42F42 ;
}
 [class*=icono-], .headerlogo a{ color: #F42F42 }
#pagination .next a, #pagination .prev a , #pagination .next a, #pagination .prev a , .comment-button-wrapper a {
    color:  #fff ;
}

/* Custom Style Code */
    /******* Paste your Custom CSS in this Editor *******/
.single-post main .amp-wp-article-content h1, .single-post main .amp-wp-article-content h2, .single-post main .amp-wp-article-content h3,
.single-post main .amp-wp-article-content h4, .single-post main .amp-wp-article-content h5,.single-post main .amp-wp-article-content h6,
h1.amp-wp-title,.related_posts .related_link a,main .amp-wp-content,.single-post .post-pagination-meta,.toggle-navigationv2 ul li a{
    font-family: 'Roboto';
}
.close-nav{
    width: 200px;
    text-align: center;
}
#pagination .next a, #pagination .prev a{
    display:inline-block;
}
.home-post_image{
    float: left;
    margin-right: 15px;
}
.itnews_iframe{
    margin:0px auto;
}
.amp_subtitle{
    font-size: 22px;
}
h1.amp-wp-title{
    font-size:42px;
    text-align:center;
}/* Inline styles */
.amp-wp-inline-0786f4623984c46e15421e6979be740d{text-align:left;}.amp-wp-inline-256659ade2cf5854eb8a79d0057ffb1c{text-align:right;}.amp-wp-inline-086b83d24e4412010a175ea3dba11ca3{max-width:640px;}.ampforwp_wc_shortcode{padding:0}
.ampforwp_wc_shortcode li{ font-size:12px; line-height: 1; float: left;max-width: 150px;list-style-type: none;margin: 10px;}
.single-post .ampforwp_wc_shortcode li amp-img{margin:0}
.ampforwp-wc-title{ margin: 10px 0px; }
.ampforwp-wc-price{ color:#444 }
        </style>
</head>
<body data-rsssl=1 class="design_3_wrapper single-post ">
<amp-sidebar id='sidebar'
    layout="nodisplay"
    side="left">
        <div class="toggle-navigationv2">

              <div class="navigation_heading">Menu</div>
      <div class="menu-amp-menu-container"><ul id="menu-amp-menu" class="menu"><li id="menu-item-17390" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-1 better-anim-fade menu-item-17390"><a href="https://tintucso.org/tin-tuc/">Tin tức</a></li>
<li id="menu-item-17389" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-2 better-anim-fade menu-item-17389"><a href="https://tintucso.org/dien-thoai/">Điện thoại</a></li>
<li id="menu-item-27356" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-6113 better-anim-fade menu-item-27356"><a href="https://tintucso.org/may-tinh-bang/">Máy tính bảng</a></li>
<li id="menu-item-17393" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-3 better-anim-fade menu-item-17393"><a href="https://tintucso.org/may-tinh/">Máy tính</a></li>
<li id="menu-item-17391" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-4 better-anim-fade menu-item-17391"><a href="https://tintucso.org/do-choi-so/">Đồ chơi số</a></li>
<li id="menu-item-17392" class="menu-item menu-item-type-taxonomy menu-item-object-category better-anim-fade menu-item-17392"><a href="https://tintucso.org/ung-dung/">Ứng dụng</a></li>
<li id="menu-item-17394" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-1883 better-anim-fade menu-item-17394"><a href="https://tintucso.org/thu-thuat/">Thủ thuật</a></li>
<li id="menu-item-17395" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-term-5020 better-anim-fade menu-item-17395"><a href="https://tintucso.org/kham-pha/">Khám phá</a></li>
</ul></div>          <div class="social_icons">
            <ul>

                                                      <a href="#" target ="_blank"><li class="icon-twitter"></li></a>
                            
                                                        <a href="#" target ="_blank"><li class="icon-facebook"></li></a>
                            
                                                        <a href="#" target ="_blank"><li class="icon-pinterest"></li></a>
                            
                            
                            
                                                        <a href="#" target ="_blank"><li class="icon-youtube-play"></li></a>
                            
                            
                            
                            

                            
                            
            </ul>
          </div>
  </div>
</amp-sidebar>

<div id="designthree" class="designthree main_container">
<header class="container">
  <div id="headerwrap">
      <div id="header">
        <div class="hamburgermenu">
            <button class="toast pull-left" on='tap:sidebar.toggle'><span></span></button>
        </div>
        <div class="headerlogo">
        
                  <a href="https://tintucso.org/amp-home/"    >

            
                <amp-img src="https://tintucso.org/wp-content/uploads/2017/04/logo-380x72.png" width="190" height="36" alt="logo" class="amp-logo"></amp-img>

            
          </a>
                </div>
                <div class="searchmenu">
                    <button on="tap:search-icon">
                        <i class="icono-search"></i>
                    </button>
                </div>
         </div>
  </div>
</header>
<main>
<?php 
    $args_my_query = array(
        'post_type'    =>    'post',
        'orderby'    => 'DESC',
        'posts_per_page' =>  $posts_per_page,
        'offset' => $offset
    );
    $amp_query = new WP_Query( $args_my_query );
    if ( $amp_query -> have_posts() ) : while ( $amp_query -> have_posts() ) : $amp_query -> the_post();
 ?>
                        <div class="amp-wp-content relatedpost">
                            <div class="related_posts">
                                        <ol class="clearfix">
                                            <li class="has_related_thumbnail">
                                                <a href="<?php echo get_permalink().'amp/'; ?>" rel="bookmark" title="<?php the_title(); ?>">
                                                    <amp-img src="<?php echo ( (has_post_thumbnail() == 1) ? get_the_post_thumbnail_url($post = $post->ID,$size = 'thumbnail') : "https://tintucso.org/wp-content/themes/Newspaper/images/no-thumb/thumbnail.png"); ?>" width="150" height="150" layout="responsive"></amp-img>
                                                </a>
                                                <div class="related_link">
                                                    <a href="<?php echo get_permalink().'amp/'; ?>">
                                                    <?php the_title(); ?>
                                                    </a>
                                                    <p><?php echo get_the_excerpt(); ?></p>
                                                </div>
                                            </li>
                                        </ol>
                            </div>
                        </div>
<?php endwhile;endif; ?>
<?php

        if($max_page > 1) {

            echo '<div id="pagination" class="page-nav"><div class="prev">';
            previous_posts_link($pagenavi_options['prev_text']);
            echo '</div><div class="next">';
            next_posts_link($pagenavi_options['next_text'], $max_page);

            echo '</div></div>';

        }
?>
</main>

  <footer class="footer_wrapper container">
      <div id="footer">
        
                  <div class="social_icons">
            <ul>

                          <a href="#" target ="_blank"><li class="icon-twitter"></li></a>
              
                            <a href="#" target ="_blank"><li class="icon-facebook"></li></a>
              
                            <a href="#" target ="_blank"><li class="icon-pinterest"></li></a>
              
              
              
                            <a href="#" target ="_blank"><li class="icon-youtube-play"></li></a>
              
              
              
              
              
              
            </ul>
          </div>
                    <p class="rightslink">
            ITNews365               | <a href="https://tintucso.org" rel="nofollow">Xem phiên bản bình thường </a>           </p>
                    <p class="poweredby">
              <a href="https://ampforwp.com" rel="nofollow">Powered by AMPforWP</a>
          <p>
                  </div>
  </footer>
</div><!--Design3 Ends-->

        <!--Plugin Version :0.9.45.3 -->
    
                        <amp-lightbox id="search-icon" layout="nodisplay">
                            <form role="search" method="get" id="searchform" class="searchform" target="_top" action="https://tintucso.org">
<div>
<label class="screen-reader-text" for="s">Type your search query and hit enter: </label>
<input type="text" placeholder="AMP" value="1" name="amp" class="hide" id="ampsomething" />
<input type="text" placeholder="Type Here" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Tìm kiếm" />
</div>
</form>                         <button on="tap:search-icon.close" class="closebutton">X</button>
                            <i class="icono-cross"></i>
                        </amp-lightbox>
                        <amp-analytics type="googleanalytics" id="analytics1">
                            <script type="application/json">
                            {
                              "vars": {
                                "account": "UA-84695571-1"
                              },
                              "triggers": {
                                "trackPageview": {
                                  "on": "visible",
                                  "request": "pageview"
                                }
                              }
                            }
                            </script>
                        </amp-analytics>
                        </body>
</html>