<?php
	$configuration = file_get_contents("./static/configuration/configuration.json");
	$configuration = json_decode($configuration, true);
?>
{"subject":"acct:auino@mastodon.uno","aliases":["https://mastodon.uno/@auino","https://mastodon.uno/users/auino"],"links":[{"rel":"http://webfinger.net/rel/profile-page","type":"text/html","href":"https://mastodon.uno/@auino"},{"rel":"self","type":"application/activity+json","href":"https://mastodon.uno/users/auino"},{"rel":"http://ostatus.org/schema/1.0/subscribe","template":"https://mastodon.uno/authorize_interaction?uri={uri}"}]}