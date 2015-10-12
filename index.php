<?php



$query_arr = ['2x20', '3x20', '2x50', '3x50', '2x100', '3x100'];
if(isset( $_GET['zadaci'] ) AND in_array($_GET["zadaci"], $query_arr)){
	include('include/header.php');
	include('config/conf' . htmlspecialchars($_GET["zadaci"]) . '.php');
	include('zadaci.php');
}else {include('include/header.php');


echo '<div class="container">';
echo '<h1>Ćao druže!</h1>';
echo '<p>Izaberi vrstu zadataka, riješi ih tačno i osvoji nagradu!!</p>';
echo '</div>';
include('include/footer.php');
}
