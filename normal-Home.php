<?php
/*
 Template Name: normal page
 */
$paged = intval(get_query_var('paged'));
$posts_per_page = 40;
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
	<link rel="canonical" href="https://itnews365.net" />
	<script custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" async></script>
	<script src="https://cdn.ampproject.org/v0.js" async></script>
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
	<noscript>
		<style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
	</noscript>
	<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"NewsArticle","mainEntityOfPage":"https:\/\/itnews365.net\/amp\/","publisher":{"@type":"Organization","name":"ITNews365","logo":{"@type":"ImageObject","url":"https:\/\/itnews365.net\/wp-content\/uploads\/2016\/09\/itnews365-140x48.png","height":36,"width":190}},"headline":"TNews365 - Tin t&#x1ee9;c c&#xf4;ng ngh&#x1ec7; c&#x1ead;p nh&#x1ead;t li&#xea;n t&#x1ee5;c 24h","datePublished":"2016-09-25T19:56:17+00:00","dateModified":"2017-02-03T17:32:01+00:00","author":{"@type":"Person","name":"ITNews365"},"image":{"@type":"ImageObject","url":"https:\/\/itnews365.net\/wp-content\/uploads\/2016\/09\/xiaomi-nha-hang-mi-5s-voi-diem-hieu-nang-antutu-cao-ky-luc-1.jpg","width":600,"height":406}}</script>
	<title>Trang chủ | ITNews365</title> 
	<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
	<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
	<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	<style amp-custom>
		
/* Global Styling */
body{
	background: #f1f1f1;
    font: 16px/1.4 Sans-serif;
}
a {
	color: #312C7E;
	text-decoration: none
}
.clearfix, .cb{
    clear: both
}
amp-iframe { max-width: 100%; margin-bottom : 20px; }

/* Template Styles */
.amp-wp-content, .amp-wp-title-bar div {
        max-width: 1000px;
    margin: 0 auto;
    }

/* Slide Navigation code */
.nav_container{
    padding: 18px 15px;
    background: #312C7E;
    color: #fff;
    text-align: center
}
amp-sidebar {
  width: 250px;
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

.toggle-navigationv2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.toggle-navigationv2 ul ul li a  {
    padding-left: 35px;
    background: #fff;
    display: inline-block
}
.toggle-navigationv2 ul li a{
    padding: 15px 25px;
    width: 100%;
    display: inline-block;
    background: #fafafa;
    font-size: 14px;
    border-bottom: 1px solid #efefef;
}
.close-nav{
    font-size: 12px;
    background: rgba(0, 0, 0, 0.25);
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px;
    border-radius: 100px;
    line-height: 8px;
    margin: 14px;
    left: 191px;
    color: #fff;
}
.close-nav:hover{
    background: rgba(0, 0, 0, 0.45);
}
.toggle-navigation ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    width: 100%
}
.menu-all-pages-container:after{
    content: "";
    clear: both
}
.toggle-navigation ul li{
    font-size: 13px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.11);
    padding: 11px 0px;
    width: 25%;
    float: left;
    text-align: center;
    margin-top: 6px
}
.toggle-navigation ul ul{
    display: none
}
.toggle-navigation ul li a{
    color: #eee;
    padding: 15px;
}
.toggle-navigation{
    display: none;
    background: #444;
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
.nav_container:hover + .toggle-navigation,
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
    margin-top: 15px;
    display: inline-block;
}
#pagination .next{
    float: right;
    margin-bottom: 10px;
}
#pagination .prev{
    float: left;
}
#pagination .next a, #pagination .prev a{
    margin-bottom: 12px;
    background: #fefefe;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    box-shadow: 0 2px 3px rgba(0,0,0,.05);
    padding: 11px 15px;
    font-size: 12px;
    color: #fff;
    background-color: #00d6c7;
}

/* Sticky Social bar in Single */
.ampforwp-social-icons-wrapper{
    margin: 0.65em 0px 0.65em 0px;
    height: 28px;
}
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
    width: 50px;
    height: 20px;
    display: inline-block;
    background: #5cbe4a;
    padding: 4px 0px;
    position: relative;
    top: -4px;
}
/* Header */
#header{
    background: #fff;
    text-align: center;
}
#header h1{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    line-height: 1;
    padding: 15px;
    margin: 0;
}
.amp-logo{
    margin: 15px 0px 10px 0px;
}

main  {
   padding: 30px 15% 10px 15%;
}
main .amp-wp-content{
    margin-bottom: 12px;
    background: #fefefe;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    box-shadow: 0 2px 3px rgba(0,0,0,.05);
    padding: 15px;
}
.home-post_image {
    float: right;
    margin-left: 15px;
    margin-bottom: -6px;
}
.amp-wp-title {
    margin-top: 0px;
}
h2.amp-wp-title {
    line-height: 30px;
}
h2.amp-wp-title a{
    font-weight: 300;
    color: #000;
    font-size: 20px;
}
h2.amp-wp-title , .amp-wp-post-content p{
    margin: 0 0 0 5px;
}
.amp-wp-post-content p{
    font-size: 12px;
    color: #999;
    line-height: 20px;
    margin: 3px 0 0 5px;
}
main .amp-archive-heading {
    background : none;
    box-shadow: none;
    padding: 5px;
}
/* Footer */
#footer{
    background : #fff;
    font-size: 13px;
    text-align: center;
    letter-spacing: 0.2px;
    padding: 20px 0;
}
#footer p:first-child{
    margin-bottom: 12px;
}
#footer p{
    margin: 0
}
/* Single */
.comment-button-wrapper{
    margin-bottom: 40px;
    margin-top: 25px;
    text-align:center
}
.comment-button-wrapper a{
    color: #fff;
    background: #312c7e;
    font-size: 13px;
    padding: 10px 20px 10px 20px;
    box-shadow: 0 0px 3px rgba(0,0,0,.04);
    border-radius: 80px;
}
h1.amp-wp-title {
    text-align: center;
    margin: 0.7em 0px 0.6em 0px;
    font-size: 1.5em;
}
.amp-wp-content.post-title-meta,
.amp-wp-content.post-pagination-meta {
    background: none;
    padding:  0;
    box-shadow:none
}
.post-pagination-meta{
    min-height:75px
}
.single-post .post-pagination-meta{
    min-height:auto
}
.single-post .ampforwp-social-icons{
    display:inline-block
}
.post-pagination-meta .amp-wp-tax-category,
.post-title-meta .amp-wp-tax-tag {
    display : none;
}
.amp-meta-wrapper{
	border-bottom: 1px solid #DADADA;
    padding-bottom:10px;
    display:inline-block;
    width:100%;
    margin-bottom:0
}
.amp-wp-meta  {
    padding-left: 0;
}
.amp-wp-tax-category {
    float:right
}
.amp-wp-tax-tag,
.amp-wp-meta li {
    list-style: none;
    display: inline-block;
}
li.amp-wp-tax-category {
    float: right
}
.amp-wp-byline, .amp-wp-posted-on {
    float: left
}

.amp-wp-content amp-img {
    max-width: 100%;
}
figure{
    margin: 0;
}
figcaption{
    font-size: 11px;
    margin-bottom: 11px;
    background: #eee;
    padding: 6px 8px;
}
.amp-wp-byline amp-img {
    display: none;
}
.amp-wp-author:before {
    content: "By ";
    color: #555;
}
.amp-wp-author{
    margin-right: 1px;
}
.amp-wp-meta {
    font-size: 12px;
    color: #555;
}
.amp-ad-wrapper {
    text-align: center
}
.single-post main{
    padding:12px 15% 10px 15%
}
.the_content p{
    margin-top: 5px;
    color: #333;
    font-size: 15px;
    line-height: 26px;
    margin-bottom: 15px;
}
.amp-wp-tax-tag{
    font-size: 13px;
    border: 0;
    display: inline-block;
    margin: 0.5em 0px 0.7em 0px;
    width: 100%;
}
main .amp-wp-content.featured-image-content {
	padding: 0px;
	border: 0;
	margin-bottom: 0;
	box-shadow: none
}
.amp-wp-content.post-pagination-meta{
    max-width: 1030px;
}
.single-post .ampforwp-social-icons.ampforwp-social-icons-wrapper {
    display: block;
    margin: 2em auto 0.9em auto ;
    max-width: 1030px;
}
.amp-wp-article-header.amp-wp-article-category.ampforwp-meta-taxonomy {
    margin: 10px auto;
    max-width: 1030px;
}
/* Related Posts */
main .amp-wp-content.relatedpost {
	background: none;
	box-shadow: none;
	max-width: 1030px;
    padding:0px 0 0 0;
    margin:1.8em auto 1.5em auto
}
.related_posts h3, .comments_list h3{
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 0.4px;
    margin: 15px 0 10px 0;
    color: #333;
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
    background: #fefefe;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    box-shadow: 0 2px 3px rgba(0,0,0,.05);
    padding: 0px;
}
.related_posts .related_link{
    margin-top:18px;
    margin-bottom:10px;
    margin-right:10px
}
.related_posts .related_link a{
    font-weight: 300;
    color: #000;
    font-size: 18px;
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
.ampforwp-comment-wrapper{
    margin:1.8em 0px 1.5em 0px
}
main .amp-wp-content.comments_list {
	background: none;
	box-shadow: none;
	max-width: 1030px;
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
    margin-left: 4%;
    width: 96%;
}
.comments_list ul li p{
    margin:0;
    font-size:15px;
    clear:both;
    padding-top:16px;
}
.comments_list ul li{
    font-size:13px;
    list-style-type:none;
    margin-bottom: 12px;
    background: #fefefe;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05);
    box-shadow: 0 2px 3px rgba(0,0,0,.05);
    padding: 0px;
    max-width: 1000px;
    width:96%;
}
.comments_list ul li .comment-body{
    padding: 25px;
    width: 91%;
}
.comments_list ul li .comment-body .comment-author{
    margin-right:5px
}
.comment-author{ float:left }
.single-post footer.comment-meta{
    /* float:right */
		padding-bottom: 0;
}
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
.amp_home_body .amp_ad_1{
    margin-top: 10px;
    margin-bottom: -20px;
}
.single-post .amp_ad_1{
    margin-top: 10px;
    margin-bottom: -20px;
}
html .single-post .ampforwp-incontent-ad-1 {
    margin-bottom: 10px;
}
.amp-ad-4{
    margin-top:10px;
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
    padding: 15px 20px 8px 24px;
    background: #f3f3f3;
}
pre {
	white-space: pre-wrap;
}
/* Responsive */
    @media screen and (max-width: 800px) {
        .single-post main{
            padding: 12px 10px 10px 10px
        }
    }
@media screen and (max-width: 630px) {
		.related_posts ol li p{
			display:none
		}
    .related_link {
        margin: 16px 18px 20px 19px;
    }
}
@media screen and (max-width: 510px) {
				.ampforwp-tax-category span{
					display:none
				}
	    .related_posts ol li p{
        line-height: 1.6;
        margin: 7px 0 0 0;
    }
    .related_posts .related_link {
        margin: 17px 18px 17px 19px;
    }
    .comments_list ul li .comment-body{
        width:auto
    }
}
@media screen and (max-width: 425px) {
    .related_posts .related_link p{
        display:none
    }
    .related_posts .related_link {
        margin: 13px 18px 14px 19px;
    }
    .related_posts .related_link a{
        font-size: 18px;
        line-height: 1.7;
    }
		.amp-meta-wrapper{
			display: inline-block;
	    margin-bottom: 0px;
	    margin-top: 8px;
			width:100%
		}
		.ampforwp-tax-category{
			padding-bottom:0
		}
		h1.amp-wp-title{
			margin: 16px 0px 13px 0px;
		}
		.amp-wp-byline{
			padding:0
		}
		.amp-meta-wrapper .amp-wp-meta-date{
			display:none
		}
		.related_posts .related_link a {
    	font-size: 17px;
    	line-height: 1.5;
		}
}
@media screen and (max-width: 375px) {
	#pagination .next a, #pagination .prev a{
		padding: 10px 6px;
		font-size: 11px;
		color: #666;
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
	.related_posts .related_link a {
			font-size: 15px;
	}
		.single-post main{
				padding: 10px 5px 10px 5px
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
	h1.amp-wp-title{
		font-size:17px;
		padding:0px 4px
	}
}
@media screen and (max-width: 400px) {
    .amp-wp-title{
        font-size: 19px;
        margin: 21px 10px -1px 10px;
    }
}
    @media screen and (max-width: 767px) {
           .amp-wp-post-content p{
                 display: block
            }
           .amp-wp-post-content p{
               display: none
            }

            main{
                padding: 25px 18px 25px 18px;
            }
        .toggle-navigation ul li{
            width: 50%
        }
        }
    @media screen and (max-width: 495px) {
        h2.amp-wp-title a{
            font-size: 17px;
            line-height: 26px;
        }
    }

/* Style Modifer */
.amp-wp-tax-tag a,
a,
.amp-wp-author {
    color: #00d6c7;;
}
.amp-wp-content blockquote{
	border-color:#00d6c7;;
}
.nav_container, .comment-button-wrapper a {
    background:  #00d6c7;;
}
.nav_container a{
    color:#fff}
amp-user-notification  {
	border-color:  #00d6c7;;
}
amp-user-notification button {
	background-color:  #00d6c7;;
}
/**/
.alignleft{
	margin-right: 12px;
	margin-bottom:5px;
	float: left;
}
.alignright{
	float:right;
	margin-left: 12px;
	margin-bottom:5px;
}
.aligncenter{
	text-align:center;
	margin: 0 auto
}
.amp-wp-author:before{
	content: " Bởi  ";
}
.ampforwp-tax-category span:first-child:after {
    content: ' ';
}
.ampforwp-tax-category span:after,
.ampforwp-tax-tag span:after {
	content: ', ';
}
.ampforwp-tax-category span:last-child:after,
.ampforwp-tax-tag span:last-child:after  {
	content: ' ';
}
    /* New V0.8.7(drag and drop) style */
	.amp-wp-article-content img {
	    max-width: 100%;
	}
	/* Custom Style Code */
	/******* Paste your Custom CSS in this Editor *******//* Inline styles */
.close-nav{
    width: 200px;
    text-align: center;
}
.amp-wp-inline-256659ade2cf5854eb8a79d0057ffb1c{text-align:right;}.amp-wp-inline-2f0158eb062d1ac553a7edcb8a744628{text-align:center;}	</style>
</head>
<body data-rsssl=1 class="single-post ">
	<header class="container">
		<div id="headerwrap">
			<div id="header">

				<a href="https://itnews365.net/amp-home/">
					<amp-img src="https://itnews365.net/wp-content/uploads/2017/02/itnews365-190x36.png" width="190" height="36" alt="logo" class="amp-logo"></amp-img>
				</a>

			</div>
		</div>
	</header>

	<div on='tap:sidebar.toggle' role="button" tabindex="0" class="nav_container">
		<a href="#" class="toggle-text">Menu</a>
	</div>

	<amp-sidebar id='sidebar'
    layout="nodisplay"
    side="right">
		<div class="toggle-navigationv2">
			<div role="button" tabindex="0" on='tap:sidebar.close' class="close-nav">X</div>
			<div class="menu-main-menu-container">
				<ul id="menu-main-menu" class="menu">
					<li id="menu-item-190" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-190">
						<a href="https://itnews365.net/tin-itc/">Tin ITC</a>
					</li>
					<li id="menu-item-189" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-189">
						<a href="https://itnews365.net/mobile/">Mobile</a>
					</li>
					<li id="menu-item-187" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-187">
						<a href="https://itnews365.net/computer/">Computer</a>
					</li>
					<li id="menu-item-188" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-188">
						<a href="https://itnews365.net/do-choi-so/">Đồ chơi số</a>
					</li>
					<li id="menu-item-4896" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4896">
						<a href="https://itnews365.net/thu-thuat/">Thủ thuật</a>
					</li>
					<li id="menu-item-186" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-186">
						<a href="https://itnews365.net/app-game/">App &#8211; Game</a>
					</li>
					<li id="menu-item-15838" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-15838">
						<a href="https://itnews365.net/tim-hieu/">Tìm hiểu</a>
					</li>
				</ul>
			</div>
		</div>
	</amp-sidebar>

	<main>
			<header class="amp-wp-article-header ampforwp-title">
			</header>
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
			<div class="amp-wp-content">
				<div class="related_posts">
					<ol class="clearfix">
						<li class="has_related_thumbnail">
							<a href="<?php echo get_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

								<amp-img src="<?php echo ( (has_post_thumbnail() == 1) ? get_the_post_thumbnail_url($post = $post->ID,$size = 'thumbnail') : "https://itnews365.net/wp-content/themes/Newspaper/images/no-thumb/thumbnail.png"); ?>" width="150" height="150" layout="responsive"></amp-img>
							</a>
							<div class="related_link">
								<a href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
								</a>
								<p>
									<?php echo get_the_excerpt(); ?>
								</p>
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
	<footer class="container">
		<div id="footer">
			<p>
				<a href="#header">Đầu trang</a>
			</p>
			<p>ITNews365</p>
		</div>
	</footer>
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