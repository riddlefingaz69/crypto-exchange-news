<?php
header("Content-Type:text/css");
$color = "#f0f"; // Change your Color Here

function checkhexcolor($color)
{
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if (isset($_GET['color']) AND $_GET['color'] != '') {
    $color = "#" . $_GET['color'];
}

if (!$color OR !checkhexcolor($color)) {
    $color = "#336699";
}

?>



.header .sign-in {
width: 100%;
background: <?php echo $color ?>;
border-radius: 50px;
text-align: center;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.header .sign-in a {
display: inline-block;
padding: 13px 0;
text-transform: uppercase;
color: #fff;
text-decoration: none;
width: 100%;
text-decoration: none;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
font-weight: 600;
}
.header .sign-in:hover {
background: #fff;
}
.header .sign-in:hover a {
color: <?php echo $color ?>;
}


/* sticky header */
.fixed-header {
position: fixed;
background: #041b32;
z-index: 5;
}
.fixed-header ul li ul li {
padding-left: 10px;
}


/* search */
.search-area {}
.search-area input {
width: 100%;
padding: 12px;
border: 0;
}


/* home banner */
.banner {
height: 100vh;
padding: 30vh 0 0;
background-size: cover;
}
.banner .banner-content h1 {
font-size: 60px;
color: #fff;
font-weight: 700;
line-height: 80px;
margin-bottom: 15px;
}
.banner .banner-content h1 span {
font-weight: 300;
}
.banner .banner-content p {
color: #a8a8c9;
margin-bottom: 37px;
}
.banner .banner-content .exchange-button {
display: inline-block;
width: 350px;
position: relative;
margin-right: 10px;
}
.banner .banner-content .exchange-button:last-child {
margin-right: 0;
width: 350px;
}
.banner .banner-content .exchange-button input {
border: 1px solid #47476f;
background: transparent;
height: 60px;
width: 100%;
border-radius: 50px;
padding: 0 30px;
color: #fff;
outline: none;
}
.banner .banner-content .exchange-button input::placeholder {
color: #fff;
opacity: .6;
}


.banner .banner-content .exchange-button select {
background: #1e98ff;
border: 0;
height: 60px;
padding: 0 30px;
color: #fff;
font-weight: 600;
border-radius: 50px;
outline: none;
position: absolute;
top: 0;
right: 0;
width: 185px;
-webkit-appearance: none;
-moz-appearance: none;
cursor: pointer;
}
.exchange-now {
margin-bottom: 160px;
}
.exchange-now button {
background: <?php echo $color ?>;
border: 0;
height: 60px;
color: #fff;
font-size: 16px;
text-transform: uppercase;
width: 200px;
border-radius: 50px;
margin-top: 30px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
outline: none;
cursor: pointer;
font-size: 14px;
font-weight: 600;
}
.exchange-now button:hover {
background: #fff;
color: <?php echo $color ?>;
}
.banner .brands {
padding-bottom: 50px;
display: none;
}
.banner .brands ul {
list-style: none;
padding: 0;
margin: 0;
text-align: center;
}
.banner .brands ul li {
display: inline-block;
margin-right: 130px;
}
.banner .brands ul li:last-child {
margin-right: 0;
}
.banner .brands ul li .single-banner {
width: 260px;
}
.banner .brands ul li .single-banner img {
width: 100%;
}


/* payout */
.payout-area {
padding: 120px 0 106px;
background: #f9f9f9;
}

.payout-area .area-title {
text-align: center;
margin-bottom: 78px;
}
.payout-area .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -6px;
margin-bottom: 10px;
}
.payout-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.payout-area .nav-tabs {
border: none;
display: -webkit-inline-box;
position: relative;
left: 50%;
margin-left: -285px;
}
.payout-area .nav-tabs .nav-item:nth-child(2) .nav-link {
background: #1e98ff;
}
.payout-area .nav-tabs .nav-item:nth-child(3) .nav-link {
background: <?php echo $color ?>;
}
.payout-area .nav-tabs .nav-item {
margin-bottom: 0;
}
.payout-area .nav-tabs .nav-link {
background: #19194b;
color: #fff;
border: none;
text-align: center;
padding: 12px 26px 4px;
margin-right: 10px;
width: 180px
}
.payout-area .nav-tabs .nav-link span {
font-size: 26px;
}
.payout-area tbody tr {
background: #fff;
}
.payout-area .table-striped tbody tr:nth-of-type(odd) {
background: #f0f3f7;
}
.payout-area .table td, .payout-area .table th {
border-top: 0;
padding: 19px 0 19px 20px;
color: #37465b;
font-size: 14px;
}
.payout-area #home .table thead {
background: #19194b;
}
.payout-area #profile .table thead {
background: #1e98ff;
}
.payout-area #contact .table thead {
background: <?php echo $color ?>;
}
.payout-area .table thead th {
color: #fff;
font-weight: 500;
}
.payout-area .table td span, .payout-area .table th span {
color: <?php echo $color ?>;
font-weight: 600;
}
.payout-area .table td i, .payout-area .table th i {
margin-right: 6px;
}
.payout-area .table td:nth-child(1) i, .payout-area .table th:nth-child(1) i,
.payout-area .table td:nth-child(4) i, .payout-area .table th:nth-child(4) i {
color: #1e98ff;
}
.payout-area .table td:nth-child(2) i, .payout-area .table th:nth-child(2) i {
color: #ff7200;
}


/*********************************************************************
Newsfeed page
*********************************************************************/
/* blog */
.blog-area {
padding: 60px 0 150px;
}
.blog-feed-area {
padding: 120px 0 118px
}
.blog-area .single-blog {
margin-bottom: 37px;
}
.blog-area .single-blog .part-text {}
.blog-area .single-blog .part-text h2 {
font-size: 40px;
font-weight: 600;
margin-top: 12px;
}
.blog-area .single-blog .part-text h2 a {
color: #19194b;
text-decoration: none;
}
.blog-area .single-blog .part-text p {
font-size: 16px;
color: #8080a3;
margin-top: 24px;
}
.blog-area .single-blog .part-img {}
.blog-area .single-blog .part-img img {
width: 100%;
}
.blog-area .single-blog .part-summary {
margin-top: 24px;
}
.blog-area .single-blog .part-summary a {
color: #8080a3;
font-size: 14px;
margin-right: 40px;
}
.blog-area .single-blog .part-summary i {
margin-right: 7px;
}
.blog-area .rex-pagination {
text-align: center;
margin-top: 47px;
}
.blog-area .rex-pagination .pagination {
padding: 0;
margin: 0;
list-style: none;
}
.blog-area .rex-pagination .pagination li {
display: inline-block;
padding: 5px;
}
.blog-area .rex-pagination a {
width: 40px;
height: 40px;
border-radius: 50%;
border: 1px solid #e5e5e5;
display: inline-block;
padding-top: 8px;
margin-right: 7px;
text-decoration: none;
color: #b7bdc5;
}
.blog-area .rex-pagination a:last-child {
margin-right: 0;
}
.blog-area .rex-pagination a:hover {
color: #fff;
background: #1e98ff;
}
.blog-right-side .px-8 {
padding: 0 8px 0 8px;
}
.blog-right-side .pl-15 {
padding-left: 15px;
}
.blog-right-side .pr-15 {
padding-right: 15px;
}
.blog-right-side .pr-8 {
padding-right: 8px
}
.blog-right-side .ista-widget {
padding: 37px;
border: 2px solid #e3e3e3;
margin-bottom: 40px;
}
.blog-right-side .social-widget {
border: 2px solid #e3e3e3;
padding: 30px;
margin-bottom: 40px;
}
.blog-right-side .cat-widget {
border: 2px solid #e3e3e3;
padding: 30px;
margin-bottom: 40px;
}
.blog-right-side .post-widget {
border: 2px solid #e3e3e3;
padding: 30px;
margin-bottom: 40px;
}
.blog-right-side .tag-widget {
border: 2px solid #e3e3e3;
padding: 30px;
}
.blog-right-side .tag-widget .title,
.blog-right-side .post-widget .title,
.blog-right-side .cat-widget .title,
.blog-right-side .social-widget .title,
.blog-right-side .ista-widget .title {
text-align: center;
}
.blog-right-side .tag-widget .title h3,
.blog-right-side .post-widget .title h3,
.blog-right-side .cat-widget .title h3,
.blog-right-side .social-widget .title h3,
.blog-right-side .ista-widget .title h3 {
color: #19194b;
font-size: 28px;
font-weight: 600;
margin-bottom: 40px;
position: relative;
display: inline-block;
}
.blog-right-side .social-widget .title h3 {
margin-bottom: 33px;
}
.blog-right-side .tag-widget .title h3:after,
.blog-right-side .post-widget .title h3:after,
.blog-right-side .cat-widget .title h3:after,
.blog-right-side .cat-widget .title h3:after,
.blog-right-side .social-widget .title h3:after,
.blog-right-side .ista-widget .title h3:after {
position: absolute;
left: -55px;
height: 2px;
background: #ebebeb;
width: 40px;
content: '';
top: 50%;
}
.blog-right-side .tag-widget .title h3:before,
.blog-right-side .post-widget .title h3:before,
.blog-right-side .cat-widget .title h3:before,
.blog-right-side .social-widget .title h3:before,
.blog-right-side .ista-widget .title h3:before {
position: absolute;
right: -55px;
height: 2px;
background: #ebebeb;
width: 40px;
content: '';
top: 50%;
}
.blog-right-side .ista-widget .single-img {
margin-bottom: 16px;
}
.blog-right-side .ista-widget img {
width: 100%;
}
.blog-right-side .social-widget {
text-align: center;
}
.blog-right-side .social-widget .social a {
display: inline-block;
width: 40px;
height: 40px;
color: #555555;
border: 2px solid #e3e3e3;
border-radius: 50%;
padding-top: 7px;
margin: 4px;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.blog-right-side .social-widget .social a:last-child {
margin-right: 0;
}
.blog-right-side .social-widget .social a:hover {
background: #359ef2;
border: 2px solid #359ef2;
color: #fff;
}
.blog-right-side .cat-widget .category {

}
.blog-right-side .cat-widget .category ul {
margin: 0;
padding: 0;
list-style: none;
}
.blog-right-side .cat-widget .category ul li {
border-bottom: 1px solid #e3e3e3;
}
.blog-right-side .cat-widget .category ul li:first-child a {
padding-top: 0;
}
.blog-right-side .cat-widget .category ul li:last-child a {
padding-bottom: 0;
}
.blog-right-side .cat-widget .category ul li:last-child {
border-bottom: none;
}
.blog-right-side .cat-widget .category ul li a {
display: block;
color: #8080a3;
text-decoration: none;
padding: 12px 0;
font-size: 14px;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.blog-right-side .cat-widget .category ul li a:hover {
color: #359ef2;
}
.blog-right-side .cat-widget .category ul li a span {
float: right;
}
.blog-right-side .post-widget .single-post {
margin-bottom: 21px;
}
.blog-right-side .post-widget .single-post:last-child {
margin-bottom: 0;
}
.blog-right-side .post-widget .single-post .part-img {
width: 80px;
float: left;
}
.blog-right-side .post-widget .single-post .part-img img {
width: 100%;
}
.blog-right-side .post-widget .single-post .part-text {
margin-left: 100px;
}
.blog-right-side .post-widget .single-post .part-text a {
color: #19194b;
font-weight: 500;
text-decoration: none;
font-size: 16px;
}
.blog-right-side .post-widget .single-post .part-text h5 {
color: #8080a3;
font-size: 14px;
}
.blog-right-side .post-widget .single-post .part-text h5 span {
margin-right: 10px;
}
.blog-right-side .tag-widget .tags a {
display: inline-block;
font-size: 14px;
border: 1px solid #e3e3e3;
padding: 10px 15px;
margin-bottom: 10px;
margin-right: 7px;
color: #8080a3;
text-decoration: none;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.blog-right-side .tag-widget .tags a:hover {
background: #359ef2;
color: #fff;
}


/**********************************************************************
Blog feeds page
***********************************************************************/

/* blog details */
.blog-area {
position: relative;
}
.blog-details h2 {
font-size: 40px;
font-weight: 600;
color: #19194b;
margin-bottom: 25px;
margin-top: -7px;
}
.blog-details p {
color: #8080a3;
font-size: 16px;
}
.blog-details .p-highlight {
position: relative;
padding: 30px 30px 30px 95px;
background: #19194b;
border-radius: 10px;
margin-top: 42px;
margin-bottom: 34px;
}
.blog-details .p-highlight p {
color: #fff;
font-size: 14px;
margin: 0;
}
.blog-details .p-highlight a {
font-size: 14px;
display: inline-block;
text-decoration: none;
margin-top: 17px;
color: #1e98ff;
}
.blog-details .p-highlight i {
color: #3f3f76;
font-size: 30px;
position: absolute;
left: 40px;
top: 50%;
margin-top: -15px;
}
.blog-left-side .tags-nd-share {
padding-bottom: 40px;
border-bottom: 2px solid #e3e3e3;
margin-top: 37px;
}
.blog-left-side .tags-nd-share .part-tag {
display: inline-block;
}
.blog-left-side .blog-details img{

width: 100%;
margin-bottom: 40px;

}
.blog-left-side .tags-nd-share .part-tag h4,
.blog-left-side .tags-nd-share .part-tag h4,
.blog-left-side .tags-nd-share .part-share h4 {
color: #19194b;
font-size: 18px;
margin-bottom: 25px;
}
.blog-left-side .tags-nd-share .part-tag a {
border: 2px solid #e3e3e3;
display: inline-block;
color: #b6b6d4;
border-radius: 6px;
padding: 10px 20px;
font-size: 14px;
}
.blog-left-side .tags-nd-share .part-share {
display: inline-block;
float: left;
}
.blog-left-side .tags-nd-share .part-share a {
color: #939aa4;
font-size: 18px;
display: inline-block;
margin-right: 9px;
line-height: 0;
}
.blog-left-side .comments {
border-bottom: 2px solid #e5e5e5;
padding-bottom: 32px;
}
.blog-left-side .comments:last-child {
border-bottom: none;
}
.blog-left-side .comments .title {
margin-bottom: 34px;
}
.blog-left-side .comments .title h3 {
color: #19194b;
font-size: 26px;
margin-top: 34px;
}
.blog-left-side .comments .single-comment {
margin-top: 32px;
}
.blog-left-side .comments .single-comment .part-img {
width: 100px;
float: left;
margin-right: 30px;
}
.blog-left-side .comments .single-comment .part-img img {
width: 100%;
border-radius: 50%;
}
.blog-left-side .comments .single-comment .part-text {
margin-left: 130px;
}
.blog-left-side .comments .single-comment .part-text h4 {
color: #1e98ff;
font-size: 14px;
margin-bottom: 17px;
}
.blog-left-side .comments .single-comment .part-text h5 {
color: #19194b;
font-size: 18px;
}
.blog-left-side .comments .single-comment .part-text p {
font-size: 14px;
color: #8080a3;
}
.blog-left-side .comments .form-area {}
.blog-left-side .comments .form-area .input-box {
position: relative;
margin-bottom: 20px;
}
.blog-left-side .comments .form-area .input-box textarea {
width: 100%;
height: 150px;
padding: 20px 30px;
border-radius: 30px;
border: 2px solid #e5e5e5;
outline: none;
margin-bottom: -6px;
}
.blog-left-side .comments .form-area .input-box input {
border-radius: 50px;
padding: 0 30px;
height: 60px;
outline: none;
width: 100%;
border: 2px solid #e5e5e5;
}
.blog-left-side .comments .form-area .input-box i {
font-size: 16px;
position: absolute;
right: 30px;
top: 20px;
opacity: .6;
}
.blog-left-side .comments .form-area button {
background-color: rgb(255, 22, 121);
box-shadow: 0px 10px 30px 0px rgba(255, 22, 121, 0.6);
width: 220px;
height: 60px;
display: inline-block;
border-radius: 50px;
color: #fff;
text-transform: uppercase;
font-weight: 700;
text-align: center;
text-decoration: none;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
border: 0;
margin-top: 20px;
outline: none;
cursor: pointer;
}
.blog-left-side .comments .form-area button:hover {
background-color: #fff;
color: rgb(255, 22, 121);
}


/* register */
.register-area {
padding: 100px 0 132px;
position: relative;
}
.register-area .register-form .register-title h2 {
font-size: 40px;
color: #19194b;
font-weight: 600;
position: relative;
margin-bottom: 76px;
}
.register-area .register-form .register-title h2:after {
position: absolute;
content: '';
height: 4px;
background: #1e98ff;
width: 50px;
left: 0;
bottom: -25px;
}
.register-area .register-form .register-title h2:before {
position: absolute;
content: '';
height: 4px;
background: #eeeeee;
width: 100px;
left: 0;
bottom: -25px;
}
.register-area .register-form {
padding: 80px 0;
border: 2px solid #e5e5e5;
}
.register-area .register-form form {}
.register-area .register-form form .name,
.register-area .register-form form .mail,
.register-area .register-form form .password {
padding: 30px;
border: 1px solid #e5e5e5;
position: relative;
}
.register-area .register-form form .name h4,
.register-area .register-form form .mail h4,
.register-area .register-form form .password h4 {
color: #19194b;
font-size: 14px;
font-weight: 600;
}
.register-area .register-form form .name input,
.register-area .register-form form .mail input,
.register-area .register-form form .password input {
width: 100%;
border: 0;
color: #555;
outline: none;
}
.register-area .register-form form .name input::placeholder,
.register-area .register-form form .mail input::placeholder,
.register-area .register-form form .password input::placeholder {
opacity: .6;
}
.register-area .register-form form .name i,
.register-area .register-form form .mail i,
.register-area .register-form form .password i {
position: absolute;
right: 30px;
top: 50%;
margin-top: -8px;
color: #1e98ff;
}
.register-area .register-form form .two-buttons {}
.register-area .register-form form .two-buttons button {
height: 60px;
width: 46%;
margin-left: 2%;
border: 0;
background: #1e98ff;
color: #fff;
text-transform: uppercase;
font-size: 14px;
border-radius: 50px;
margin-top: 30px;
border: 2px solid #1e98ff;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
cursor: pointer;
}
.register-area .register-form form .two-buttons button:last-child {
background: <?php echo $color ?>;
border: 2px solid <?php echo $color ?>;
}
.register-area .register-form form .two-buttons button:hover {
background: #fff;
color: #1e98ff;
border: 2px solid #1e98ff;
}


/* confirmation */
.confirmation-area {
padding: 120px 0 107px;
position: relative;
}
.processing-area {
padding: 120px 0;
position: relative;
}
.confirmation-area a {
text-decoration: none;
font-weight: 600;
}
.confirmation-area .single-filter {
text-align: center;
padding: 23px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
background: #fff;
border: 1px solid #e5e5e5;
}
.confirmation-area .single-filter i {
color: #1e98ff;
}.confirmation-area .single-filter h4 {
color: #a2a2c0;
}
.confirmation-area .nav-tabs a:focus .single-filter {
background: #1e98ff;
}
.confirmation-area .nav-tabs a:focus .single-filter i {
color: #fff;
}
.confirmation-area .nav-tabs a:focus .single-filter h4 {
color: #fff;
}
.confirmation-area .single-filter i {
color: #1e98ff;
font-size: 40px;
line-height: 100%;
margin-bottom: 21px;
display: inline-block;
}
.confirmation-area .single-filter h4 {
font-size: 14px;
color: #a2a2c0;
text-transform: uppercase;
margin-bottom: 0;
}
.confirmation-area .part-scan img {
width: 100%;
}
.confirmation-area .part-text h2 {
font-size: 50px;
color: #19194b;
font-weight: 600;
margin-bottom: 13px;
}
.confirmation-area .part-text h3 {
font-size: 20px;
color: #19194b;
margin-bottom: 32px;
}
.confirmation-area .part-input {
display: inline-block;
position: relative;
margin-bottom: 21px;
}
.confirmation-area .part-input input {
width: 305px;
border: none;
}
.confirmation-area .part-input input::placeholder {
color: #8080a3;
}
.confirmation-area .part-input button {
position: absolute;
right: -56px;
border-radius: 50%;
border: 2px solid #e5e5e5;
color: #1e98ff;
width: 40px;
height: 40px;
background: transparent;
top: 50%;
margin-top: -20px;
cursor: pointer;
outline: none;
}
.confirmation-area .part-input button i {}
.confirmation-area .part-link {
display: block;
width: 360px;
}
.confirmation-area .part-link a {}
.confirmation-area .part-link a:last-child {
float: right;
}
#part-bottom {
margin-top: 50px;
}
.confirmation-area .transaction-id {
margin-bottom: 22px;
margin-top: 8px;
}
.confirmation-area .transaction-id ul {
padding: 0;
margin: 0;
list-style: none;
}
.confirmation-area .transaction-id ul li {
display: inline-block;
color: #1e98ff;
font-size: 14px;
font-weight: 600;
}
.confirmation-area .transaction-id ul li:last-child {
color: #68688f;
margin-left: 80px;
margin-top: 2px;
}
.confirmation-area .exchange-button {
display: inline-block;
width: 100%;
position: relative;
margin-right: 10px;
margin-bottom: 20px;
}
.confirmation-area .exchange-button:first-child {
margin-bottom: 30px;
}
.confirmation-area .exchange-button input {
border: 1px solid #e5e5e5;
background: transparent;
height: 60px;
width: 100%;
border-radius: 50px;
padding: 0 30px;
color: #000;
outline: none;
padding-right: 140px;
}
.confirmation-area .exchange-button input::placeholder {
color: #858eb4;
}
.confirmation-area .exchange-button select {
background: #1e98ff;
border: 0;
height: 60px;
/*padding: 0 30px;*/
padding: 0 45px;
color: #fff;
font-weight: 600;
border-radius: 50px;
outline: none;
position: absolute;
top: 0;
right: 0;
/*width: 120px;*/
width: 200px;
-webkit-appearance: none;
}


.confirmation-area .nav-tabs .nav-link {
padding: 0;
}
.confirmation-area .nav-tabs {
border-bottom: 0;
}
.confirmation-area .tab-content>.tab-pane {
padding-top: 44px;
}
.confirmation-area .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active .single-filter {
background: #1e98ff;
}
.confirmation-area .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active .single-filter i,
.confirmation-area .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active .single-filter h4 {
color: #fff;
}


.exchange-button .icon {
position: absolute;
top: 17px;
right: 25px;
color: #fff;
}
.next {
margin-bottom: 0;
}
.next button {
background: <?php echo $color ?>;
border: 2px solid <?php echo $color ?>;
height: 60px;
color: #fff;
font-size: 16px;
text-transform: uppercase;
width: 220px;
border-radius: 50px;
margin-top: 30px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
outline: none;
cursor: pointer;
font-size: 14px;
font-weight: 600;
}
.next button:hover {
background: #fff;
color: <?php echo $color ?>;
border: 2px solid <?php echo $color ?>;
}

.checkbox-element {
display: inline-block;
}
.checkbox-wrapper {
display: inline-block;
}
.checkbox-inner {
display: inline;
position: relative;
padding-left: 30px;
cursor: pointer;
font-size: 14px;
line-height: 24px;
color: #585869;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
.checkbox-inner input {
position: absolute;
opacity: 0;
cursor: pointer;
}
.checkbox-inner .checkmark {
position: absolute;
top: 0;
left: 0;
border-radius: 50%;
height: 20px;
width: 20px;
background-color: transparent;
border: 4px solid rgba(0, 0, 0, 0.1);
}
.checkbox-inner input:checked ~ .checkmark {
background-color: transparent;
}
.checkbox-inner .checkmark:after {
content: "";
position: absolute;
display: none;
}
.checkbox-inner input:checked ~ .checkmark:after {
display: block;
}
.checkbox-inner .checkmark:after {
left: 50%;
margin-left: -6px;
top: 50%;
width: 12px;
margin-top: -6px;
height: 12px;
border: solid <?php echo $color ?>;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
background: <?php echo $color ?>;
border-radius: 50%;
}
.confirmation-area .part-content h2 {
font-size: 50px;
color: #19194b;
font-weight: 600;
margin-bottom: 21px;
margin-top: -10px;
letter-spacing: -1px;
}
.confirmation-area .part-content ul {
margin: 0;
padding: 0;
list-style: none;
}
.confirmation-area .part-content ul li {
font-size: 14px;
color: #68688f;
text-transform: uppercase;
}
.confirmation-area .part-content ul li span {
color: #1e98ff;
margin-right: 50px;
font-weight: 600;
}


/* how it works */
.how-it-works {
padding: 120px 0 0px;
background: #f9f9f9;
}
.how-it-works .area-title {
text-align: center;
margin-bottom: 78px;
}
.how-it-works .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -6px;
margin-bottom: 10px;
}
.how-it-works .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.how-it-works .single-coin-box {
border: 2px solid rgba(0, 0, 0, 0.1);
border-radius: 6px;
padding: 40px 40px 15px 40px;
position: relative;
margin: 0 45px;
margin-bottom: 100px;
}
.how-it-works .single-coin-box:hover {
border-color: #00a2ff;
}
.how-it-works .single-coin-box:hover .content h4 {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-1 {
position: relative;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-1:after {
position: absolute;
right: -70px;
top: 50%;
height: 2px;
width: 70px;
background-color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-1:before {
position: absolute;
right: -73px;
top: 50%;
font-size: 16px;
line-height: 16px;
text-align: right;
color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-1:hover:before {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-1:hover:after {
background-color: #00a2ff;
}
.how-it-works .single-coin-box.blue {
position: relative;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-2:hover {
border-color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-2:hover:before {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-2:hover:after {
background-color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-2:hover .content h4 {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-2 .icon {
background-color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-2:after {
position: absolute;
right: 50%;
bottom: -70px;
height: 70px;
width: 2px;
background-color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateX(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.how-it-works .single-coin-box.cbox-2:before {
position: absolute;
left: 48.5%;
bottom: -85px;
font-size: 16px;
line-height: 16px;
color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-3 {
position: relative;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-3:hover:before {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-3:hover:after {
background-color: #00a2ff }
.how-it-works .single-coin-box.cbox-3:after {
position: absolute;
top: -35px;
left: 50%;
width: 2px;
height: 70px;
background-color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.how-it-works .single-coin-box.cbox-3:before {
position: absolute;
top: -75px;
left: 50.3%;
font-size: 16px;
line-height: 16px;
color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateX(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%);
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-4 {
position: relative;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box.cbox-4:hover:after {
background-color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-4:hover:before {
color: #00a2ff;
}
.how-it-works .single-coin-box.cbox-4:after {
position: absolute;
left: -70px;
top: 50%;
height: 2px;
width: 70px;
background-color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in; }
.how-it-works .single-coin-box.cbox-4:before {
position: absolute;
left: -73px;
top: 50%;
font-size: 16px;
line-height: 16px;
text-align: left;
color: rgba(0, 0, 0, 0.1);
content: '';
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box .icon {
position: absolute;
background-color: #00a2ff;
left: 40px;
top: 40px;
width: 100px;
height: 100px;
border-radius: 50%;
color: #fff;
text-align: center;
line-height: 100px;
}
.how-it-works .single-coin-box .icon i {
font-size: 40px;
line-break: 40px;
}
.how-it-works .single-coin-box .icon i:before {
font-size: 40px;
line-break: 40px;
}
.how-it-works .single-coin-box .content {
padding-left: 130px;
}
.how-it-works .single-coin-box .content h4 {
font-size: 21px;
line-height: 32px;
color: #000000;
text-transform: capitalize;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}
.how-it-works .single-coin-box .content p {
font-size: 14px;
line-height: 26px;
color: #717c8c;
}


/* terms */
.term-area {
padding: 110px 0 74px;
position: relative;
}
.term-area .terms {
/*text-align: center;*/
}
.term-area .terms h2 {
font-size: 60px;
font-weight: 700;
color: #19194b;
margin-bottom: 20px;
}
.term-area .terms p {
color: #8080a3;
margin-bottom: 42px;
}
.term-area .terms h3 {
font-size: 30px;
color: #19194b;
font-weight: 600;
margin-bottom: 16px;
}

/* contact-area */
.contact-area {
padding: 120px 0;
position: relative;
}
.contact-area .shadows {
-webkit-box-shadow: 10px 10px 44px -8px rgba(0,0,0,0.22);
-moz-box-shadow: 10px 10px 44px -8px rgba(0,0,0,0.22);
box-shadow: 10px 10px 44px -8px rgba(0,0,0,0.22);
}
.contact-area .address-bar {
background: #19194b;
padding: 76px 65px 110px;
}.contact-area .address-bar h3 {
font-size: 40px;
color: #fff;
font-weight: 600;
margin-bottom: 36px;
}
.contact-area .address-bar p {
color: #a9a9cf;
margin-bottom: 28px;
}
.contact-area .address-bar p span {
color: #fff;
margin-right: 10px;
}
.contact-area .address-bar p span i {}
.contact-area .address-bar p span:last-child {
color: <?php echo $color ?>;
}
.contact-area .form-bar {
text-align: center;
}
.contact-area .form-bar h3 {
font-size: 40px;
color: #19194b;
margin-bottom: 40px;
font-weight: 600;
}
.contact-area .form-bar form {}

.contact-area .form-bar form  .email{
width: 96%;
/*height: 60px;*/
/*border-radius: 20px;*/
/*border: 2px solid #e5e5e5;*/
/*padding: 0 30px;*/
/*margin-bottom: 20px;*/
/*outline: none;*/
}
.contact-area .form-bar form input {
width: 48%;
height: 60px;
border-radius: 20px;
border: 2px solid #e5e5e5;
padding: 0 30px;
margin-bottom: 20px;
outline: none;
}
.contact-area .form-bar form input:first-child {
margin-right: 3%;
}
.contact-area .form-bar form textarea {
width: 96%;
height: 130px;
border-radius: 30px;
border: 2px solid #e5e5e5;
padding: 24px 30px;
outline: none;
}
.contact-area .form-bar form button {
height: 60px;
width: 200px;
border: 0;
color: #fff;
font-size: 14px;
text-transform: uppercase;
background: <?php echo $color ?>;
border-radius: 50px;
margin-top: 32px;
cursor: pointer;
outline: none;
}
.contact-area .form-bar form button:hover {
box-shadow: 0px 10px 30px 0px <?php echo $color ?>;;
background: #fff;
color: <?php echo $color ?>;
}


/* page title */
.page-title-area {
background-size: cover;
}
.page-title-area .page-title {
/*padding: 336px 0 241px;*/
padding: 150px 0 100px;
}
.page-title-area .page-title h1 {
/*font-size: 78px;*/
font-size: 50px;
color: #fff;
font-weight: 600;
text-transform: capitalize;
}
.page-title-area .page-title h2 {
color: #91a4df;
font-size: 18px;
text-transform: uppercase;
}
/* all pages-title */
.currency-title {
padding: 328px 0 241px;
}


/*=====================================================
2. About Page
======================================================*/
/* about area */
.about-area {
padding: 130px 0 130px;
}
.about-area .part-img {
height: 100%;
}
.about-area .part-img img {
width: 100%;
height: 500px;
position: relative;
top: 50%;
margin-top: -250px;
}
.about-area .part-content {}
.about-area .part-content h2 {
font-size: 60px;
color: #19194b;
text-transform: capitalize;
font-weight: 700;
margin-bottom: 36px;
margin-top: -13px;
letter-spacing: -1px;
}
.about-area .part-content p {
font-size: 16px;
color: #8080a3;
}


/* service area */
.service-area {
padding: 120px 0 80px;
background: #f9f9f9;
}
.service-area .area-title {
text-align: center;
margin-bottom: 78px;
}
.service-area .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -6px;
margin-bottom: 10px;
}
.service-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.service-area .single-service {
padding: 40px 40px 34px;
background: #fff;
margin-bottom: 40px;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.service-area .single-service:hover {
-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
}
.service-area .single-service .part-icon {
height: 90px;
}
.service-area .single-service .part-icon i {
font-size: 90px;
line-height: 100%;
color: #1e98ff;
}
.service-area .single-service .part-text {
margin-top: 40px;
}
.service-area .single-service .part-text h3 {
font-size: 24px;
color: #19194b;
text-transform: capitalize;
margin-top: -5px;
margin-bottom: 16px;
font-weight: 600;
}
.service-area .single-service .part-text p {
font-size: 16px;
color: #8080a3;
}
.service-area .single-service .part-text a {
color: #1e98ff;
text-transform: uppercase;
font-size: 16px;
text-decoration: none;
font-weight: 600;
margin-top: -4px;
display: inherit;
}
.service-area .single-service .part-text a:hover {}


/* mentors area */
.our-mentors {
padding: 120px 0;
}
.our-mentors .area-title {
text-align: center;
margin-bottom: 78px;
}
.our-mentors .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -12px;
margin-bottom: 11px;
}
.our-mentors .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.our-mentors .single-member {
border-radius: 4px;
background-color: rgb(255, 255, 255);
box-shadow: 0px 8px 30px 0px rgba(0, 0, 0, 0.1);
-webkit-box-shadow: 0px 8px 30px 0px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0px 8px 30px 0px rgba(0, 0, 0, 0.1);
overflow: hidden;
margin-bottom: 40px;
}
.our-mentors .single-member:hover .part-img img {
filter: grayscale(100%);
}
.our-mentors .single-member .part-img {}
.our-mentors .single-member .part-img img {
width: 100%;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.our-mentors .single-member .part-info {
text-align: center;
padding: 31px 0 24px;
}
.our-mentors .single-member .part-info h4 {
font-size: 20px;
color: #19194b;
font-weight: 600;
}
.our-mentors .single-member .part-info h5 {
font-size: 14px;
color: #1e98ff;
}


/* process area */
.process-area {
background: #f9f9f9;
padding: 120px 0;
position: relative;
}
.process-area .area-title {
text-align: center;
margin-bottom: 72px;
}
.process-area .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -10px;
margin-bottom: 11px;
}
.process-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.process-area .all-process {

}
.process-area .single-process {
text-align: center;
display: flex;
padding-bottom: 40px;
padding-top: 40px;
border-bottom: 2px solid #e6e6e6;
}
.process-area .single-process:nth-child(1) {
padding-top: 0;
}
.process-area .single-process:nth-child(2) {
border-bottom: 0;
padding-bottom: 0;
}
.process-area .single-process .crypto-title {
display: inline-block;
text-align: left;
margin-right: 88px;
}
.process-area .single-process .crypto-title .part-icon {

}
.process-area .single-process .crypto-title .part-icon i {
font-size: 40px;
color: #1e98ff;
}
.process-area .single-process .crypto-title .part-text {
display: inline-block;
}
.process-area .single-process .crypto-title .part-text h3 {
color: #19194b;
font-size: 28px;
display: inline-block;
}
.process-area .single-process .currency {
display: inline-block;
margin-right: 110px;
padding-top: 30px;
position: relative;
}
.process-area .single-process .currency:after {
position: absolute;
left: 0;
top: 57%;
height: 2px;
width: 100%;
background-color: #1e98ff;
content: '';
-ms-transform: translateY(-50%);
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
-webkit-transition: all 0.3s ease-in;
}
.process-area .single-process .currency:before {
position: absolute;
left: 93%;
top: 57%;
font-size: 18px;
line-height: 16px;
text-align: right;
color: #1e98ff;
content: '';
-ms-transform: translateY(-50%);
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 700;
}
.process-area .single-process .currency .part-text h3 {
color: #19194b;
font-size: 20px;
font-weight: 600;
}
.process-area .single-process .currency .part-icon {
display: inline-block;
}
.process-area .single-process .currency .part-icon img {}
.process-area .single-process .rexchange {
display: inline-block;
text-align: left;
margin-right: 100px;
}
.process-area .single-process .rexchange h3 {
color: #1e98ff;
font-weight: 600;
}
.process-area .single-process .rexchange h4 {
display: inline-block;
color: #19194b;
font-size: 20px;
font-weight: 600;
}
.process-area .single-process .exchange {
display: inline-block;
text-align: left;
}
.process-area .single-process .exchange h3 {
color: #1e98ff;
font-weight: 600;
}
.process-area .single-process .exchange ul {
padding: 0;
margin: 0;
list-style: none;
}
.process-area .single-process .exchange ul li {
color: #19194b;
font-size: 20px;
font-weight: 300;
}
.process-area .single-process .exchange ul li span {}
.support-button {
position: absolute;
bottom: 0;
left: 50%;
z-index: 3;
margin-bottom: -30px;
margin-left: -110px;
}
.more-question-button {
position: relative;
left: 50%;
margin-left: -110px;
}
.more-question-button a,
.support-button a {
background-color: rgb(255, 22, 121);
box-shadow: 0px 10px 30px 0px rgba(255, 22, 121, 0.6);
width: 220px;
height: 60px;
display: inline-block;
border-radius: 50px;
color: #fff;
text-transform: uppercase;
font-weight: 700;
text-align: center;
margin-top: -30px;
padding-top: 18px;
text-decoration: none;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.more-question-button a {
margin-top: 0;
}
.more-question-button a:hover,
.support-button a:hover {
background: #fff;
color: rgb(255, 22, 121);
}


/* feature area */
.feature-area {
padding: 120px 0 78px;
}
.feature-area .area-title {
text-align: center;
margin-bottom: 78px;
}
.feature-area .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -10px;
margin-bottom: 11px;
}
.feature-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.feature-area .single-feature {
margin-bottom: 40px;
}
.feature-area .single-feature:hover .part-text h3 {
color: #1e98ff;
}
.feature-area .single-feature .part-img {
margin: 0 35px;
margin-bottom: 20px;
}
.feature-area .single-feature .part-img img {
width: 100%;
}
.feature-area .single-feature .part-text {
text-align: center;
}
.feature-area .single-feature .part-text h3 {
font-size: 28px;
color: #19194b;
font-weight: 600;
margin-bottom: 24px;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
}
.feature-area .single-feature .part-text p {
font-size: 16px;
color: #8080a3;
}


/* signup area */
.signup-area {
padding: 120px 0;
background: url('../img/signup-bg.jpg') no-repeat center center;
background-size: cover;
}
.signup-area .area-title {
text-align: center;
margin-bottom: 72px;
}
.signup-area .area-title h2 {
color: #fff;
font-size: 50px;
font-weight: 700;
margin-top: -10px;
margin-bottom: 11px;
}
.signup-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.signup-area .form {}
.signup-area .form .signup-form {}
.signup-area .form .signup-form .name-area,
.signup-area .form .signup-form .mail-area {
margin-bottom: 20px;
position: relative;
}
.signup-area .form .signup-form .name-area p,
.signup-area .form .signup-form .mail-area p {
color: #fff;
font-size: 16px;
text-transform: capitalize;
display: inline-block;
}
.signup-area .form .signup-form .name-area span,
.signup-area .form .signup-form .mail-area span {
float: right;
font-size: 14px;
text-decoration: none;
}
.signup-area .form .signup-form .name-area input,
.signup-area .form .signup-form .mail-area input {
width: 100%;
height: 60px;
border-radius: 50px;
border: 0;
background: #2b2b5c;
padding: 0 30px;
color: #fff;
outline: none;
padding-right: 60px;
}
.signup-area .form .signup-form .name-area input::placeholder,
.signup-area .form .signup-form .mail-area input::placeholder {
color: #a0a0c0;
}
.signup-area .form .signup-form .name-area i,
.signup-area .form .signup-form .mail-area i {
position: absolute;
bottom: 30px;
right: 30px;
font-size: 16px;
color: #fff;
margin-bottom: -8px;
}
.signup-area .form .signup-form .submit-button {
cursor: pointer;
background: <?php echo $color ?>;
color: #fff;
text-transform: uppercase;
font-size: 16px;
font-weight: 600;
height: 60px;
width: 300px;
border: 0;
border-radius: 50px;
position: relative;
left: 50%;
margin-left: -150px;
outline: none;
transition: .4s;
-webkit-transition: .4s;
margin-top: 20px;
-moz-transition: .4s;
}
.signup-area .form .signup-form .submit-button:hover {
background: #fff;
color: <?php echo $color ?>;
}
.signup-area .signup-otherways {
position: relative;
}
.signup-area .signup-otherways:after {
position: absolute;
content: '';
right: -60px;
height: 120%;
width: 2px;
background: #434371;
top: 60%;
margin-top: -40%;
}
.signup-area .signup-otherways a {
display: inline-block;
padding: 18px 0px;
background: #f25500;
text-align: center;
color: #fff;
text-transform: uppercase;
font-weight: 500;
border-radius: 50px;
text-decoration: none;
width: 100%;
margin-bottom: 30px;
border: 1px solid transparent;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.signup-area .signup-otherways a:hover {
background: transparent;
color: #f25500;
border: 1px solid #f25500;
}
.signup-area .signup-otherways a:nth-child(2) {
background: #0050bd;
}
.signup-area .signup-otherways a:hover:nth-child(2) {
border: 1px solid #0050bd;
background: transparent;
color: #0050bd;
}
.signup-area .signup-otherways a:nth-child(3) {
background: #00c7f2;
margin-bottom: 0;
}
.signup-area .signup-otherways a:hover:nth-child(3) {
background: transparent;
color: #00c7f2;
border: 1px solid #00c7f2;
}


/* client comments */
.client-comments {
padding: 120px 0 205px;
position: relative;
}
.client-comments .all-comments {
border-radius: 10px;
background-color: rgb(255, 255, 255);
box-shadow: 0px 10px 30px 0px rgba(158, 158, 158, 0.2);
display: flex;
margin: 0 auto;
position: relative;
}
.client-comments .all-comments:after {
position: absolute;
content: '';
left: 40px;
right: 40px;
height: 30px;
bottom: -30px;
background: transparent;
border-radius: 0 0 10px 10px;
box-shadow: 0px 10px 30px 0px rgba(158, 158, 158, 0.2);
}
.client-comments .all-comments:before {
position: absolute;
content: '';
left: 80px;
right: 80px;
height: 30px;
bottom: -60px;
background: transparent;
border-radius: 0 0 10px 10px;
box-shadow: 0px 10px 30px 0px rgba(158, 158, 158, 0.2);
}
.client-comments .all-comments .single-comment {
padding: 50px;
position: relative;
}
.client-comments .all-comments .single-comment:before {}
.client-comments .all-comments .single-comment .part-img {
width: 120px;
height: 120px;
border-radius: 50%;
position: relative;
left: 50%;
margin-left: -60px;
margin-bottom: 27px;
}
.client-comments .all-comments .single-comment .part-img img {
width: 100%;
overflow: hidden;
}
.client-comments .all-comments .single-comment .part-text {
text-align: center;
}
.client-comments .all-comments .single-comment .part-text h3 {
color: #19194b;
font-size: 22px;
margin-bottom: 10PX;
}
.client-comments .all-comments .single-comment .part-text h4 {
color: #1e98ff;
text-transform: uppercase;
font-weight: 600;
font-size: 14px;
margin-bottom: 23px;
}
.client-comments .all-comments .single-comment .part-text p {
color: #8080a3;
font-size: 14px;
}
.client-comments .all-comments .owl-nav {}
.client-comments .all-comments .owl-nav .owl-next {
display: inline-block;
position: absolute;
right: -40px;
top: 50%;
margin-top: -40px;
height: 56px;
}
.client-comments .all-comments .owl-nav .owl-prev {
display: inline-block;
position: absolute;
left: -40px;
top: 50%;
margin-top: -40px;
height: 56px;
}
.client-comments .all-comments .owl-nav .owl-prev:after {
position: absolute;
content: '';
width: 50%;
left: 50%;
top: 0;
height: 100%;
background: #fff;
}
.client-comments .all-comments .owl-nav .owl-prev i,
.client-comments .all-comments .owl-nav .owl-next i {
font-size: 80px;
color: #1e98ff;
line-height: 100%;
}
/*.client-comments .all-comments .owl-nav .owl-next i {
width: 100%;
height: 100%;
}*/


.why-choose-us {
padding: 120px 0;
background: #f9f9f9;
}
.why-choose-us .choose-single {
background: #fff;
padding: 40px;
margin-bottom: 30px;
border-radius: 10px;
}
.why-choose-us .choose-single:hover {
-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.32);
}
.why-choose-us .choose-single .part-icon {
width: 90px;
height: 90px;
position: relative;
left: 50%;
margin-left: -45px;
margin-bottom: 30px;
}
.why-choose-us .choose-single .part-icon img {
width: 100%;
height: 100%;
}
.why-choose-us .choose-single .part-text {
text-align: center;
}
.faq-area .single-faq h3 {
font-size: 27px;
color: #19194b;
display: inline-flex;
}
.faq-area .single-faq3 h3 {
font-size: 27px;
color: #19194b;
display: inline-flex;
}


/*****************************************************************
profile page
*****************************************************************/

/* profile area */
.profile-area {
padding: 120px 0 30px;
position: relative;
}
.profile-area .table-2,
.profile-area .table-3 {
padding-top: 100px;
}
.profile-area .title h3 {
color: #19194b;
font-size: 40px;
font-weight: 600;
margin-bottom: 46px;
margin-top: -6px;
}
.profile-area button {
height: 50px;
width: 210px;
border-radius: 50px;
border: 2px solid #e5e5e5;
background: transparent;
text-transform: uppercase;
color: #aaaace;
float: right;
cursor: pointer;
outline: none;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.profile-area button:hover {
border: 2px solid #1e98ff;
color: #1e98ff;
}
.profile-area button span {
margin-right: 10px;
}
.profile-area .chart {
/*border-bottom: 2px solid #e5e5e5;*/
padding-bottom: 53px;
}
.profile-area .table-3 .chart {
border-bottom: 0;
}
.profile-area .chart thead th {
border-top: 0;
padding-top: 26px;
padding-bottom: 26px;
}
.profile-area .chart tbody td,
.profile-area .chart thead th {
font-size: 14px;
color: #68688f;
font-weight: normal;
padding-top: 26px;
padding-bottom: 26px;
}
.profile-area .chart tbody th {
color: #1e98ff;
font-size: 14px;
font-weight: 600;
padding: 26px 0;
}
.profile-area .chart thead th:first-child {
padding-left: 0;
}


/*****************************************************************
currency page
*****************************************************************/
/* currency area */
.currency-area {
padding: 120px 0 148px;
position: relative;
}
.currency-area .chart .table-link {}
.currency-area .chart .table-link ul {
padding: 0;
margin: 0;
list-style: none;
}
.currency-area .chart .table-link ul li {
display: inline-block;
}
.currency-area .chart .table-link ul li a {
font-size: 14px;
color: #1e98ff;
display: inline-block;
padding: 15px 30px;
text-decoration: none;
}
/*.currency-area .chart .table-link ul li a:hover {
background: #1e98ff;
color: #fff;
}
.currency-area .chart .table-link ul li:first-child a {
background: #1e98ff;
color: #fff;
}*/
.currency-area .chart thead th {
border-top: 0;
padding-top: 26px;
padding-bottom: 26px;
}
.currency-area .chart tbody td,
.currency-area .chart thead th {
font-size: 14px;
color: #68688f;
font-weight: normal;
padding-top: 26px;
padding-bottom: 26px;
}
.currency-area .chart tbody th {
color: #1e98ff;
font-size: 14px;
font-weight: 600;
padding: 26px 0;
}
.currency-area .chart tbody td:nth-child(4),
.currency-area .chart tbody td:nth-child(5),
.currency-area .chart tbody td:nth-child(6),
.currency-area .chart tbody td:nth-child(7) {
color: #1e98ff;
}
.currency-area .chart tbody tr:first-child td:nth-child(4),
.currency-area .chart tbody tr:first-child td:nth-child(5),
.currency-area .chart tbody tr:first-child td:nth-child(6),
.currency-area .chart tbody tr:first-child td:nth-child(7) {
color: inherit;
}
.currency-area .chart tbody tr:last-child {
border-bottom: 2px solid #e5e5e5;
}
.currency-area .currency-img {
margin-top: 57px;
}
.currency-area .currency-img {
position: relative;
}
.currency-area .currency-img .currency-text {
position: absolute;
top: 0;
padding: 40px 50px;
}
.currency-area .currency-img .currency-text h3 {
color: #fff;
font-weight: 400;
line-height: 1.3;
}
.currency-area .currency-img .currency-text h3 span {
font-weight: 600;
}
.currency-area .currency-img .currency-text p {
color: #fff;
}
.currency-area .currency-img img {
width: 100%;
}


/*****************************************************************
affiliate program page
*****************************************************************/
.affilate-area {
position: relative;
padding: 40px 0 23px;
}
.affilate-area .tables {
padding: 80px 0;
<!--border-bottom: 2px solid #e5e5e5;-->
}
.affilate-area .tables:nth-child(1) {
padding-bottom: 25px;
}
.affilate-area .tables:nth-child(3) {
border-bottom: 0;
padding-bottom: 50px;
}
.affilate-area .tables .title h3 {
font-size: 40px;
color: #19194b;
font-weight: 600;
margin-top: -5px;
}
.affilate-area .tables:nth-child(2) .title h3 {
margin-bottom: 30px;
margin-top: -5px;
}
.affilate-area .tables .chart tbody td,
.affilate-area .tables .chart thead th {
font-size: 14px;
color: #68688f;
font-weight: normal;
padding-top: 26px;
padding-bottom: 26px;
border-top: 0;
}
.affilate-area .tables .chart tbody th {
color: #1e98ff;
font-size: 14px;
font-weight: 600;
padding: 26px 0;
}
.affilate-area .chart .table-link ul li:first-child a {
background: #1e98ff;
color: #fff;
}
.affilate-area .affiliate .input-box {
width: 612px;
position: relative;
display: inline-block;
}
.affilate-area .affiliate .input-box input {
width: 100%;
height: 60px;
border-radius: 50px;
border: 2px solid #e5e5e5;
padding: 0 20px;
outline: none;
padding-right: 70px;
}
.affilate-area .affiliate .input-box button {
position: absolute;
width: 60px;
height: 60px;
border-radius: 50px;
border: 2px solid #e2e2e2;
background: transparent;
right: 0;
top: 0;
color: #929292;
outline: none;
cursor: pointer;
}
.affilate-area .affiliate .links {
display: inline-block;
}
.affilate-area .affiliate .links a {
width: 60px;
height: 60px;
display: inline-block;
text-align: center;
padding-top: 19px;
color: #fff;
border-radius: 50px;
text-decoration: none;
margin-left: 16px;
}
.affilate-area .affiliate .links a:nth-child(1) {
background: #305dcd;
-webkit-box-shadow: 0px 10px 30px 0px rgba(48, 93, 205, 0.6);
-moz-box-shadow: 0px 10px 30px 0px rgba(48, 93, 205, 0.6);
box-shadow: 0px 10px 30px 0px rgba(48, 93, 205, 0.6);
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.affilate-area .affiliate .links a:hover:nth-child(1) {
background: #fff;
color: #305dcd;
}
.affilate-area .affiliate .links a:nth-child(2) {
background: #00a2ff;
-webkit-box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
-moz-box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.affilate-area .affiliate .links a:hover:nth-child(2) {
background: #fff;
color: #00a2ff;
}
.affilate-area .affiliate .links a:nth-child(3) {
background: <?php echo $color ?>;
width: auto;
padding: 19px 30px 0;
text-transform: uppercase;
font-weight: 600;
-webkit-box-shadow: 0px 10px 30px 0px rgba(255, 22, 121, 0.6);
-moz-box-shadow: 0px 10px 30px 0px rgba(255, 22, 121, 0.6);
box-shadow: 0px 10px 30px 0px rgba(255, 22, 121, 0.6);
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.affilate-area .affiliate .links a:hover:nth-child(3) {
background: #fff;
color: <?php echo $color ?>;
}
.affilate-area .affiliate .links a:nth-child(4) {
width: auto;
padding: 19px 30px 0;
text-transform: uppercase;
font-weight: 600;
background: #00a2ff;
-webkit-box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
-moz-box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
box-shadow: 0px 10px 30px 0px rgba(0, 162, 255, 0.6);
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.affilate-area .affiliate .links a:hover:nth-child(4) {
background: #fff;
color: #00a2ff;
}


/*****************************************************************
faq page
*****************************************************************/
/* faq */
.faq-area {
padding: 120px 0 80px;
position: relative;
}
.faq-area .area-title {
text-align: center;
margin-bottom: 78px;
}
.faq-area .area-title h2 {
color: #19194b;
font-size: 50px;
font-weight: 700;
margin-top: -10px;
margin-bottom: 11px;
}
.faq-area .area-title p {
color: #8080a3;
font-size: 16px;
font-weight: 400;
}
.faq-area .single-faq {
padding: 35px 35px;
border: 1px solid #e5e5e5;
border-radius: 10px;
margin-bottom: 40px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.faq-area .single-faq:hover {
border: 1px solid #1e98ff;
}
.faq-area .single-faq:hover h3 {
color: #1e98ff;
}
.faq-area .single-faq h3 {
font-size: 22px;
color: #19194b;
margin-bottom: 18px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
}
.faq-area .single-faq h3 span {
background: #1e98ff;
border-radius: 50%;
color: #fff;
display: table;
text-align: center;
font-size: 16px;
padding: 16px 15px;
margin-right: 20px;
}
.faq-area .single-faq p {}
.faq-area .faq-menu {
text-align: center;
background: #f4f4f4;
border-radius: 50px;
margin-bottom: 40px;
display: inline-block;
}
.faq-area .faq-menu ul {
padding: 0;
margin: 0;
list-style: none;
}
.faq-area .faq-menu ul li {
display: inline-block;
text-transform: uppercase;
color: #8f8fac;
font-size: 14px;
padding: 20px 40px;
border-radius: 50px;
transition: .4s;
-webkit-transition: .4s;
-moz-transition: .4s;
cursor: pointer;
}
.faq-area .faq-menu ul li:hover {
color: #fff;
background: #1e98ff;
}
.faq-area .faq-menu ul li.active {
color: #fff;
background: #1e98ff;
}


/* footer */
.footer {
position: relative;
background-color: #161a2f;
color: #fff;
overflow: hidden;
}
.footer .footer-top {
padding: 120px 0 52px;
}
.footer .footer-bottom {
padding: 30px 0;
background: #0f1323;
}
.footer .footer-bottom p {
margin-bottom: 0;
}
.footer .footer-bg {
width: 100%;
position: absolute;
top: 0;
left: 0;
overflow: hidden;
height: 100%;
display: none;
}
.footer .footer-bg img {
width: 100%;
height: auto;
}
.footer .single-links {
margin-bottom: 62px;
}
.footer .single-links .title h3 {
font-size: 28px;
margin-top: -5px;
font-weight: 700;
margin-bottom: 31px;
}
.footer .single-links .links {}
.footer .single-links .social-links ul,
.footer .single-links .links ul {
padding: 0;
margin: 0;
list-style: none;
}
.footer .single-links .social-links ul li {
display: inline-block;
}
.footer .single-links .links ul li {
display: block;
padding: 5px 0;
}
.footer .single-links .social-links ul li a,
.footer .single-links .links ul li a {
color: #fff;
text-decoration: none;
margin-right: 14px;
}
.footer .single-links .links ul li a:hover {}

.footer-logo{
margin-bottom: 25px;
display: block;
}

.no-text-decoration{
text-decoration: none !important;
}
.cursor-default{
cursor: default;
}

.post-navigation {
margin-top: 55px;
display: flex;
flex-direction: column;
text-align: center;
align-items: center;

}

.post-navigation .pagination li {
display: inline-block;
margin: 0 5px;
}

.post-navigation .pagination li.active a, .post-navigation .pagination .dashboard-nav .left-content-area .nav.nav-tabs li.nav-item.nav-link:hover a, .dashboard-nav .left-content-area .nav.nav-tabs .post-navigation .pagination li.nav-item.nav-link:hover a {
background-color: #1e98ff;
border: 1px solid #1e98ff;
color: #fff;
}

.post-navigation .pagination li:first-child {
margin-left: 0;
}

.post-navigation .pagination li a {
display: block;
width: 40px;
height: 40px;
border-radius: 50%;
line-height: 40px;
text-align: center;
color: #b7bdc5;
background-color: #fff;
border: 1px solid #b7bdc5;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.post-navigation .pagination li a:hover {
background-color: #1e98ff;
color: #fff;
border: 2px solid #1e98ff;
}
.error{
color: red;
}
.padding-left-10{padding-left: 10px}
.padding-left-20{padding-left: 20px}
.padding-left-30{padding-left: 30px}

.margin-top-10{margin-top: 10px}
.margin-top-20{margin-top: 20px}
.margin-top-30{margin-top: 30px}



.our-mentors .single-member .part-title{
text-align: center;
padding: 15px 0 15px;
}
.btn-wrapper{
margin-top: 10px;
}

.submit-btn {
width: 100%;
height: 45px;
text-align: center;
font-weight: 700;
font-size: 14px;
line-height: 40px;
color: #fff;
text-transform: uppercase;
background-color: <?php echo $color ?>;
border: none;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
cursor: pointer;}
.submit-btn:hover {
background-color: #1e3056; }
.submit-btn.btn-rounded {
border-radius: 30px; }
.submit-btn.btn-center {
display: block;
margin: 0 auto;
margin-top: 25px; }
.submit-btn:focus {
outline: none; }

.section-title-inner {
text-align: center;
margin-bottom: 45px; }
.section-title-inner .subtitle {
font-size: 18px;
line-height: 28px;
text-transform: uppercase;
font-weight: 700;
color: <?php echo $color ?>;
margin-bottom: 20px;
display: block; }
.section-title-inner .title {
font-size: 48px;
font-weight: 700;
line-height: 58px; }

.table-responsive {
display: table;
}
.green{
color: #1c7430 !important;
}
.red{
color: #ff353d !important;
}
.profile-area .chart tbody tr.green td{
color: #1c7430 ;
}
.profile-area .chart tbody tr.red td{
color: #ff353d ;
}


.base-color{
color: <?php echo $color ?>;
}
.custom-button{
background: <?php echo $color ?>;
border: 2px solid <?php echo $color ?>;
height: 60px;
color: #fff;
font-size: 16px;
text-transform: uppercase;
width: 220px;
border-radius: 50px;
margin-top: 30px;
-webkit-transition: .4s;
-moz-transition: .4s;
transition: .4s;
outline: none;
cursor: pointer;
font-size: 14px;
font-weight: 600;
}

span.custom-round {
background: #1e98ff;
border: 0;
height: 60px;
padding: 16px 50px;
color: #fff;
font-weight: 600;
border-radius: 50px;
outline: none;
position: absolute;
top: 0;
right: 0;
width: 221px;
-webkit-appearance: none;
-moz-appearance: none;
cursor: pointer;
}

/*select-2 custom css*/
.select2-container {
box-sizing: border-box;
display: inline-block;
margin: 0;
position: relative;
position: absolute;
top: 0;
right: 0;
vertical-align: middle;
}

.select2-container .select2-selection--single {
box-sizing: border-box;
cursor: pointer;
display: block;
user-select: none;
-webkit-user-select: none;
background: #1e98ff;
border: 0;
height: 60px;
padding: 0 30px;
color: #fff;
font-weight: 600;
border-radius: 50px;
outline: none;
position: absolute;
top: 0;
text-align: center;
right: 0;
width: 220px;
line-height: 58px;
-webkit-appearance: none;
}
.select2-container .select2-selection--single .select2-selection__rendered{
color: #fff;
}
.select2-container--bootstrap.select2-container--open.select2-container--below .select2-selection {
border-radius: 50px;
}
.select2-container--open .select2-dropdown--below,
.select2-container--open .select2-dropdown--above {
width: 214px !important;
left: -214px;
top: 60px;
}
.select2-container--open .select2-dropdown--above {
margin-top: 60px;
}
.select2-container--open .select2-dropdown--below {
margin-top: 0;
}

.custom-span{
/*color: red;*/
/*margin-right: 0px;*/
}

.funkyradio div {
clear: both;
overflow: hidden;
}

.funkyradio label {
width: 100%;
border-radius: 3px;
border: 1px solid #D1D3D4;
font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
position: relative;
line-height: 2.5em;
text-indent: 3.25em;
margin-top: 2em;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
position: absolute;
display: block;
top: 0;
bottom: 0;
left: 0;
content: '';
width: 2.5em;
background: #D1D3D4;
border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
content: '\2714';
text-indent: .9em;
color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
content: '\2714';
text-indent: .9em;
color: #333;
background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before,
.funkyradio-default input[type="checkbox"]:checked ~ label:before {
color: #333;
background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
color: #fff;
background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
color: #fff;
background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
color: #fff;
background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
color: #fff;
background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
color: #fff;
background-color: #5bc0de;
}

<!--login area-->

.login-page-area .login-form-wrapper .btn-wrapper .left-content .submit-btn:hover {
background-color: <?php echo $color ?>;
}
.login-page-area .login-form-wrapper .btn-wrapper .right-content .anchor:hover {
color: <?php echo $color ?>;
}
.login-page-area .login-form-wrapper .from-footer a {
color: <?php echo $color ?>;
}
.input-field.error {
border: 1px solid <?php echo $color ?>;
}

.input-field.error::-webkit-input-placeholder {
/* WebKit browsers */
color: <?php echo $color ?>;
}

.input-field.error:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: <?php echo $color ?>;
}

.input-field.error::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: <?php echo $color ?>;
}

.input-field.error:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: <?php echo $color ?>;
}

.input-field.error:focus {
border-color: <?php echo $color ?>;
}

.checkbox-inner .checkmark {
border: 2px solid <?php echo $color ?>;
}

.checkbox-inner .checkmark:after {
border: solid <?php echo $color ?>;
}
.login-page-area .login-form-wrapper .btn-wrapper .left-content .submit-btn:hover
{
background-color: <?php echo $color ?>;
}
.footer i{
color: <?php echo $color ?>;
}
.address-bar i{
color: <?php echo $color ?>;
}