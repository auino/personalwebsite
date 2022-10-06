<?php
	$content = file_get_contents("/static/configuration/configuration.json");
	//$content = json_decode($content, true);
?>
{% load static from staticfiles %}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$content?> {{surname}}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:title" content="{{name}} {{surname}}"/>
		<meta property="og:image" content="{{avatar}}"/>
		<meta property="og:description" content="Personal profile page of {{name}} {{surname}}, {{role}}."/>
		<meta property="og:url" content="{{baseurl}}" />
		<link rel="stylesheet" href="{% static 'css/style.css' %}">
		<script async src="{{dataurl}}" type="text/javascript"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		{% if stats.enabled %}
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '{{stats.analytics}}', 'auto');
		ga('send', 'pageview');
		</script>
		{% if stats.privacypolicy.enabled %}
		<script async src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script defer src="{% static 'js/jquery.cookiesdirective.js' %}"></script>
		{% endif %}
		{% endif %}
		{% if social.enabled %}
		<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
		{% endif %}
		<style>
		html {
			background-color: {{colors.background}};
			color: {{colors.text}};
		}
		a {
			color: {{colors.links}};
		}
		div#fork {
			position: absolute;
			top: 0;
			right: 0;
		}
		img#fork {
			max-width: 150px;
		}
		{% if stats.enabled and stats.privacypolicy.enabled %}
		a.privacypolicy {
			color: {{stats.privacypolicy.linkcolor}};
		}
		{% endif %}
		{% if social.enabled %}
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
		{% endif %}
		</style>
	</head>
	<body>
		{% if fork.enabled %}
		<div id="fork">
			<a href="{{fork.url}}"><img id="fork" src="{% static 'img/fork-large.png' %}" srcset="{% static 'img/fork-small.png' %} 480w, {% static 'img/fork-large.png' %} 1080w" sizes="50vw" alt="{{fork.text}}"/></a>
		</div>
		{% endif %}
		<div class="person animated bounceInDown" itemscope itemtype="http://schema.org/Person">
			<div class="avatar">
				<img itemprop="image" src="{{avatar.large}}" srcset="{{avatar.small}} 480w, {{avatar.large}} 1080w" sizes="50vw" alt="Avatar of {{name}} {{surname}}"/>
			</div>
			<div class="content">
				<h1 class="title" itemprop="name">{{name}}<br/>{{surname}}</h1>
				{% if role %}
				<p itemprop="jobTitle">
					{{role}}
				</p>
				{% endif %}
				{% if social.enabled %}
				<ul class="social-icons">
					{% for link in social.data %}
					<li><a class="social" href="{{link.url}}" title="{{link.name}}" {{target}}><i class="fab {{link.faicon}}"></i></a></li>
					{% endfor %}
				</ul>
				{% endif %}
				{% if links.enabled %}
				<p>
					{{links.title}}<br>
					{% for link in links.list %}
					<a href="{{link.url}}">{{link.name}}</a><br>
					{% endfor %}
				</p>
				{% endif %}
				{% if email.address %}
				<p>{{email.question}} <a href="mailto:{{email.address.name}}@{{email.address.domain}}{% if email.tag %}?subject=[{{email.tag}}]{% endif %}">Email me</a>.</p>
				{% endif %}
			</div>
		</div>
		{% if stats.privacypolicy.enabled %}
		<script defer type="text/javascript">
		$(document).ready(function() {
			$.cookiesDirective({
				{% if stats.privacypolicy.link %}
				privacyPolicyUri: '{{stats.privacypolicy.link}}',
				{% endif %}
				message: 'This website makes use of Google Analytics to place cookies on your computer. By surfing the website, we\'ll assume that you accept to receive all cookies from this website.<br/>If you would like to change your preferences you may follow the <a class="privacypolicy" href="http://www.aboutcookies.org/Default.aspx?page=1" target="_new">relative instructions</a>.',
				explicitConsent: true,
				position : 'bottom',
				duration: {{stats.privacypolicy.duration}},
				cookieScripts: 'Google Analytics', 
				backgroundColor: '{{colors.text}}',
				linkColor: '{{stats.privacypolicy.linkcolor}}'
			});
		});
		</script>
		{% endif %}
	</body>
</html>
