<ul>
	<?php foreach ($achievements as $achievement): ?>
	<li><?php echo $achievement->datetime->format('m/d h:i A') ?> - <a href="<?php echo $h->pageUrl('User:' . $achievement->author->getName()) ?>"><?php echo $achievement->author->getName() ?></a>
	achieved <a href="<?php echo $h->pageUrl('Special:AchievementDetails/' . $h->slugifyUrlId($achievement->goal->id, $achievement->goal->title)) ?>"
	><?php echo $achievement->goal->title ?></a></li>
	<?php endforeach ?>
</ul>