<div class="row">
	<div class="col-md-6">
		<div class="panel panel-info" style="border-radius: 0px">
		  <div class="panel-heading" style="color: white; border-radius: 0px"><strong>Topik Baru</strong></div>
		  <div class="panel-body" style="border-radius: 0px">
				<?php
				$sql_topic = $db->database_prepare("SELECT * FROM as_topics ORDER BY created_date, topic_id DESC LIMIT 10")->execute();
				while ($dt_topic = $db->database_fetch_array($sql_topic)){
					echo "<p style='border-bottom: 1px solid #999999;'><a href='detail-$dt_topic[topic_id]-$dt_topic[title_seo].html' class='black'>$dt_topic[title]</a></p>";
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-info" style="border-radius: 0px">
			<div class="panel-heading" style="color: white; border-radius: 0px"><strong>Topik Populer</strong></div>
			<div class="panel-body" style="border-radius: 0px">
				<?php
				$sql_topic = $db->database_prepare("SELECT * FROM as_topics ORDER BY hits DESC LIMIT 10")->execute();
				while ($dt_topic = $db->database_fetch_array($sql_topic)){
					echo "<p style='border-bottom: 1px solid #999999;'><a href='detail-$dt_topic[topic_id]-$dt_topic[title_seo].html' class='black'>$dt_topic[title] ($dt_topic[hits] times)</a></p>";
				}
				?>
			</div>
		</div>
	</div>
</div>
