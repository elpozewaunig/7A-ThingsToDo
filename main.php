<?php
include 'modules/common/master_include.php';
check_login();
check_user();

if(isset($_SESSION['save_success'])) {
  if($_SESSION['save_success']) {
    $save_success = true;
  }
  else {
    $save_success = false;
  }
  unset($_SESSION['save_success']);
}
?>

<!DOCTYPE html>
<html>

<head>
<title> <?= title ?> - <?= subtitle ?> </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="<?= icon ?>">
<link rel="apple-touch-icon" href="<?= touch_icon ?>">

<?php
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/common.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/mobile.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/table.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/tablefilter_override.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/subjects.css')."\">";

echo "<noscript> <link rel=\"stylesheet\" href=\"".versionify('stylesheets/table_nojs.css')."\"> </noscript>"; // add fallback stylesheet if JS is disabled

echo "<link rel=\"stylesheet\" media=\"print\" href=\"".versionify('stylesheets/print.css')."\">";
?>
  
</head>

<body>
  
  <?php
  generate_topbar();
  ?>
  
  <br>
  
<div class="content">  

<?php 
include 'modules/table_build.php';
  
$work = file('data/work/work.txt');
      
if (isset($_COOKIE['user']) == false || valid_user($_COOKIE['user']) == false) {
  $user = "all";
}
else {
  $user = $_COOKIE['user'];
}

table_build($work, $user);

if(isset($save_success)) {
  
echo <<<SAVE_MESSAGE
<script>
var element = document.getElementById('
SAVE_MESSAGE;

if($save_success) {
  echo "success";
}
else {
  echo "error";
}

echo <<<SAVE_MESSAGE
');
element.style.display = "block";
element.style.opacity = 1;

setTimeout( function() {
  element.style.transition = "opacity 0.5s ease-in-out";
  element.style.opacity = 0;
  setTimeout( function() {
    element.style.display = "none";
  }, 500)
}, 4000);
</script>
SAVE_MESSAGE;

}

?>

<script src="node_modules/tablefilter/dist/tablefilter/tablefilter.js"></script>

<script data-config>
<?php
if ($user == "all") {
echo <<<TABLEFILTERCONFIG
    var filtersConfig = {
        base_path: 'node_modules/tablefilter/dist/tablefilter/',
        state: {
          types: ['cookie'],
          filters: true
        },
        col_0: 'select',
        col_1: 'none',
        col_2: 'none',
        col_3: 'none',
        popup_filters: true,
        alternate_rows: true,
        rows_counter: false,
        btn_reset: false,
        loader: false,
        status_bar: false,
        mark_active_columns: true,
        highlight_keywords: false,
        col_types: [
            'string', 'string', 'string', { type: 'date', locale: 'de' }
        ],
        extensions: [{ name: 'sort',
          types: ['none', 'none', 'none', { type: 'date', locale: 'de' }]
         }]
    };
TABLEFILTERCONFIG;
}
else {
echo <<<TABLEFILTERCONFIG
    var filtersConfig = {
        base_path: 'node_modules/tablefilter/dist/tablefilter/',
        state: {
          types: ['local_storage'],
          filters: true
        },
        col_0: 'select',
        col_1: 'select',
        col_2: 'none',
        col_3: 'none',
        col_4: 'none',
        popup_filters: true,
        alternate_rows: true,
        rows_counter: false,
        btn_reset: false,
        loader: false,
        status_bar: false,
        mark_active_columns: true,
        highlight_keywords: false,
        col_types: [
            'string', 'string', 'string', 'string', { type: 'date', locale: 'de' }
        ],
        extensions: [{ name: 'sort',
          types: ['none', 'none', 'none', 'none', { type: 'date', locale: 'de' }]
         }]
    };
TABLEFILTERCONFIG;
}
?>

    var tf = new TableFilter('work', filtersConfig);
    tf.init();

</script> 
 
</div>

<?php 
include 'modules/bottombar.php';
 ?>
 
</body>
</html>