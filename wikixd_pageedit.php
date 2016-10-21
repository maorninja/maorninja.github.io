<?php

if ($isHidden) return;

$c1 = ircColor(Settings::pluginGet("color1"));
$c2 = ircColor(Settings::pluginGet("color2"));

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];

$fpage = ircForumPrefix($forum);
$link = getServerDomainNoSlash().actionLink("wiki", $page['id'], '', '_');

if ($page['new'] == 2)
	ircReport("\003{$c2}New wiki page: \003{$c1}"
		.url2title($page['id'])
		." \003{$c2}created by \003{$c1}{$uncolor} \003{$c2} -- {$link}");
else
	ircReport("\003{$c2}Wiki page \003{$c1}".url2title($page['id'])." \003{$c2}edited by \003{$c1}{$uncolor} \003{$c2}(rev. {$rev}) -- {$link}");
	
?>
