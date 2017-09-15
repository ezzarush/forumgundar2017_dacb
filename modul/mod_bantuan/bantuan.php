<h1 class="mt-4 mb-3">Tentang
	<small>Alumniku</small>
</h1>

    <div class="panel-group" id="faqAccordion">
        <?php
		if(empty($data[0]['id_bantuan'])){
		while($row = $db->database_fetch_array($sql_topic)){
		?>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
					 <h4 class="panel-title">
						<a href="#" class="ing">Q: <?=$row['pertanyaan'];?></a>
				  </h4>

				</div>
				<div id="question0" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">Answer</span></h5>

						<p><?=$row['jawaban'];?></p>
					</div>
				</div>
			</div>
		<?php		
		}
		}else{
			echo 'Data Tidak Ada, Silakan Tambah Bantuan Pada Panel Admin';
		}
		?>
    </div>
