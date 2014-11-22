<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Viechbook</title>

    <link href="/core-admin-template/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="/core-admin-template/javascripts/application.js" type="text/javascript"></script>
</head>



<body>
<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="/" style="margin-left: 37px;">Viechbook</a>
    </div>

    <div style="text-align: center; padding-top: 15px; position: fixed; left:45%; display: block; text-align: center;">
       The mission is the message is sound...
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-collapse-top">
        <div class="navbar-right">

            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-avatar" data-toggle="dropdown">
              <span>
                <?= $this->Html->image('avatar1.jpg', array('class' => 'menu-avatar') ) ?><span><?= $currentUser["username"] ?><i class="icon-caret-down"></i></span>
                <span class="badge badge-dark-red"></span>
              </span>
                    </a>
                    <ul class="dropdown-menu">

                        <!-- the first element is the one with the big avatar, add a with-image class to it -->
						<? /*
                        <li><a href="#"><i class="icon-user"></i> <span>Profile</span></a></li>
                        <li><a href="#"><i class="icon-cog"></i> <span>Settings</span></a></li>
 						*/ ?>
                        <li><a href="/users/messages"><i class="icon-envelope"></i> <span>Messages</span> <span class="label label-dark-red pull-right">1</span></a></li>
						<li><a href="/users/profile/<?= $currentUser['id'] ?>"><i class="icon-user"></i> <span>Profile</span></a></li>
						<li><a href="/users/logout"><i class="icon-off"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>




    </div><!-- /.navbar-collapse -->


</nav>
<div class="sidebar-background">
    <div class="primary-sidebar-background"></div>
</div>

<div class="primary-sidebar">

    <!-- Main nav -->
    <a class="navbar-brand" href="#" style="padding-top:0px;">
        <?= $this->Html->image("soundviech.jpg", array('style' => "max-width: 95%; height: auto;")); ?>
    </a>
    <ul class="nav navbar-collapse collapse navbar-collapse-primary">
        <li class="">
            <a href="/pages/users">
                <i class="icon-user icon-2x"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="">
            <a href="/pages/events">
                <i class="icon-calendar icon-2x"></i>
                <span>Events</span>
            </a>
        </li>

    </ul>
</div>

<div class="main-content">
	<div class="container padded">
        <? $flash = $this->Session->flash(); ?>
		<? if( !empty($flash) ) { ?>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<?= $flash ?>
			</div>
		<? } ?>

		<?php echo $this->fetch('content'); ?>
    </div>
</div>

<script src="/js/Vendor/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    /*
    var theViech = function() {
        var registrations = [];

        this.register = function(messageType, callback) {
            registrations.push( {type: messageType, callback: callback} );
        };

        this.receive = function(message) {
            $.each(registrations, function (index, registration) {
                console.debug(registrations);
                if( registration.type == message.type ) {
                    registration.callback(message);
                }
            });
        };
    };

    function testCallback(message) {
        alert(message.content);
    }

    var viech = new theViech();
    viech.register(0, testCallback);

    var testMessage = { type: 0, content: "ablub" };
    */
    //var connection = new WebSocket('ws://viechbook.dev://thesource', ['soap']);
</script>