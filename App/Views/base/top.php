<!DOCTYPE html>
<html lang="cs">
<head>
    <title><?= $title ?> | WoDMT2.cz</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{% block keywords %}{% endblock %}">
    <meta name="description" content="{% block description %}{% endblock %}">
    <link rel="stylesheet" type="text/css" href="/styles.css"/>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lte IE 7]>
    <script src="js/IE8.js" type="text/javascript"></script>
    <![endif]-->

    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/>
    <![endif]-->

</head>

<body>
<div id="header">
    <div id="header" class="view">
        <div id="srvstatusbar">
            <div id="srvstatusbar_left">
                <div id="srvstatusbar_item">
                    <div id="srvstatusbar_item_seperator" class="right"></div>
                    <div id="srvstatusbar_item_content">
                        <div id="srvstatusbar_item_content_icon_online"></div>
                        <p class="textstyle_srvstatusbar left">Kanál 1</p>
                    </div>
                </div>
                <div id="srvstatusbar_item">
                    <div id="srvstatusbar_item_seperator" class="right"></div>
                    <div id="srvstatusbar_item_content">
                        <div id="srvstatusbar_item_content_icon_offline"></div>
                        <p class="textstyle_srvstatusbar left">Kanál 2</p>
                    </div>
                </div>
                <div id="srvstatusbar_item">
                    <div id="srvstatusbar_item_seperator" class="right"></div>
                    <div id="srvstatusbar_item_content">
                        <div id="srvstatusbar_item_content_icon_offline" ></div>
                        <p class="textstyle_srvstatusbar left">Kanál 3</p>
                    </div>
                </div>
                <div id="srvstatusbar_item">
                    <div id="srvstatusbar_item_seperator" class="right"></div>
                    <div id="srvstatusbar_item_content">
                        <div id="srvstatusbar_item_content_icon_offline" ></div>
                        <p class="textstyle_srvstatusbar left">Kanál 4</p>
                    </div>
                </div>
            </div>
            <div id="srvstatusbar_item">
                <div id="srvstatusbar_item_seperator" class="left"></div>
                <div id="srvstatusbar_item_content">
                    <p class="textstyle_srvstatusbar left">Online hráčů: <span style="color: #fc9c85;">458</span></p>
                </div>
            </div>
        </div>
        <a id="header_logo"></a>
        <div id="navigation">
            <a href="/" id="navigation_item_1" class="navigation_item"></a>
            <a href="/home/index" id="navigation_item_2" class="navigation_item"></a>
            <a href="/register" id="navigation_item_3" class="navigation_item"></a>
            <a href="index.php?s=download" id="navigation_item_center" class="navigation_item"></a>
            <a href="market/" id="navigation_item_4" class="navigation_item"></a>
            <a href="destek/" id="navigation_item_5" class="navigation_item"></a>
            <a href="http://www.fullmmo.net" id="navigation_item_6" class="navigation_item"></a>
        </div>
    </div>
</div>