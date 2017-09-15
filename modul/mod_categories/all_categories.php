<div class="page-header">
  <center>
    <h1 style="padding-top: -10px">Kategori Forum</h1>
  </center>
</div>
<div class="row">
  <?php
  $kolom = 4;
  $i = 0;
  $nm = md5(date('Ymdhis'));
  $sql_frm_cat = $db->database_prepare("SELECT * FROM as_frm_categories WHERE status = 'Y' ORDER BY category_name ASC")->execute();
  $colour_scope = array('#e0e0e0','#265a88','#419641','#2aabd2','#eb9316','#c12e2a');
  $t_color = 'white';
  while ($data_frm_cat = $db->database_fetch_array($sql_frm_cat)){
    $i++;
	$number = rand(0,5);
	$color = $colour_scope[$number];
    // if ($i == 1) {
      // $color = '#e0e0e0';
      // $t_color = 'black';
    // } elseif ($i == 2) {
      // $color = '#265a88';
      // $t_color = 'white';
    // } elseif ($i == 3) {
      // $color = '#419641';
      // $t_color = 'white';
    // } elseif ($i == 4) {
      // $color = '#2aabd2';
      // $t_color = 'white';
    // } elseif ($i == 5) {
      // $color = '#eb9316';
      // $t_color = 'white';
    // } elseif ($i == 6) {
      // $color = '#c12e2a';
      // $t_color = 'white';
    // }
    echo "<div class='col-md-2'><div style='border: 2px solid $color; padding: 50px 10px;margin: 10px; background-color: $color;'><center><a style='color: $t_color; text-decoration: none;' href='cat-detail-$data_frm_cat[frm_category_id]-0-1-$data_frm_cat[category_seo].html' class='black'>$data_frm_cat[category_name]</a><center></div></div>";
  }
  ?>
</div>
