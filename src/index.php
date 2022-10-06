<?php
	$configuration = file_get_contents("./static/configuration/configuration.json");
	$configuration = json_decode($configuration, true);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$configuration['name']?> <?=$configuration['surname']?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:title" content="<?=$configuration['name']?> <?=$configuration['surname']?>"/>
		<meta property="og:image" content="<?=$configuration['avatar']['large']?>"/>
		<meta property="og:description" content="Personal profile page of <?=$configuration['name']?> <?=$configuration['surname']?>, <?=$configuration['role']?>."/>
		<meta property="og:url" content="<?=$configuration['baseurl']?>" />
		<link rel="stylesheet" href="/static/css/style.css">
		<script async src="{{dataurl}}" type="text/javascript"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<? if($configuration['stats']['enabled']) { ?>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '<?=$configuration['stats']['analytics']?>', 'auto');
		ga('send', 'pageview');
		</script>
		<? if($configuration['stats']['privacypolicy']['enabled']) { ?>
		<script async src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script defer src="/static/js/jquery.cookiesdirective.js"></script>
		<? } ?>
		<? } ?>
		<? if($configuration['social']['enabled']) { ?>
		<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
		<? } ?>
		<style>
		html {
			background-color: <?=$configuration['colors']['background']?>;
			color: <?=$configuration['colors']['text']?>;
		}
		a {
			color: <?=$configuration['colors']['links']?>;
		}
		div#fork {
			position: absolute;
			top: 0;
			right: 0;
		}
		img#fork {
			max-width: 150px;
		}
		<? if($configuration['stats']['enabled'] && $configuration['stats']['privacypolicy']['enabled']) { ?>
		a.privacypolicy {
			color: <?=$configuration['stats']['privacypolicy']['linkcolor']?>;
		}
		<? } ?>
		<? if($configuration['social']['enabled']) { ?>
		.social-icons {
			font-size: 20px;
		}
		.social {
			width: 20px;
			height: 20px;
		}
		a.social {
			display: inline;
		}
		<? } ?>
		</style>
	</head>
	<body>
		<? if($configuration['fork']['enabled']) { ?>
		<div id="fork">
			<a href="<?=$configuration['fork']['url']?>"><img id="fork" src="/static/img/fork-large.png" srcset="/static/img/fork-small.png 480w, /static/img/fork-large.png 1080w" sizes="50vw" alt="<?=$configuration['fork']['text']?>"/></a>
		</div>
		<? } ?>
		<div class="person animated bounceInDown" itemscope itemtype="http://schema.org/Person">
			<div class="avatar">
				<img itemprop="image" src="<?=$configuration['avatar']['large']?>" srcset="<?=$configuration['avatar']['small']?> 480w, <?=$configuration['avatar']['large']?> 1080w" sizes="50vw" alt="Avatar of <?=$configuration['name']?> <?=$configuration['surname']?>"/>
			</div>
			<div class="content">
				<h1 class="title" itemprop="name"><?=$configuration['name']?><br/><?=$configuration['surname']?></h1>
				<? if($configuration['role']) { ?>
				<p itemprop="jobTitle">
					<?=$configuration['role']?>
				</p>
				<? } ?>
				<? if($configuration['social']['enabled']) { ?>
				<ul class="social-icons">
					<? foreach($configuration['social']['data'] as $link) { ?>
					<li><a class="social" href="<?=$link['url']?>" title="<?=$link['name']?>" target="<?=$link['target']?>"><i class="fab <?=$link['faicon']?>"></i></a></li>
					<? } ?>
				</ul>
				<? } ?>
				<? if($configuration['links']['enabled']) { ?>
				<p>
					<?=$configuration['links']['title']?><br>
					{% for link in links.list %}
					<a href="{{link.url}}">{{link.name}}</a><br>
					{% endfor %}
				</p>
				<? } ?>
				<? if($configuration['email']['address']) { ?>
				<p><?=$configuration['email']['question']?> <a href="mailto:<?=$configuration['email']['address']['name']?>@<?=$configuration['email']['address']['domain']?><? if($configuration['email']['tag']) { ?>?subject=[<?=$configuration['email']['tag']?>]<? } ?>">Email me</a>.</p>
				<? } ?>
			</div>
		</div>
		<? if($configuration['stats']['privacypolicy']['enabled']) { ?>
		<script defer type="text/javascript">
		$(document).ready(function() {
			$.cookiesDirective({
				<? if($configuration['stats']['privacypolicy']['link']) { ?>
				privacyPolicyUri: '<?=$configuration['stats']['privacypolicy']['link']?>',
				<? } ?>
				message: 'This website makes use of Google Analytics to place cookies on your computer. By surfing the website, we\'ll assume that you accept to receive all cookies from this website.<br/>If you would like to change your preferences you may follow the <a class="privacypolicy" href="http://www.aboutcookies.org/Default.aspx?page=1" target="_new">relative instructions</a>.',
				explicitConsent: true,
				position : 'bottom',
				duration: <?=$configuration['stats']['privacypolicy']['duration']?>,
				cookieScripts: 'Google Analytics', 
				backgroundColor: '<?=$configuration['colors']['text']?>',
				linkColor: '<?=$configuration['stats']['privacypolicy']['linkcolor']?>'
			});
		});
		</script>
		<? } ?>
	</body>
</html>
