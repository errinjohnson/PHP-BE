<?php
$pageTitle = "CodeLouisville PHP Project";
$pageSection = "main";
include('../inc/head.php');
include('inc/header.php');
?>
<?php
  $course = [
    "hardware" => "Mouse, Keyboard, PC | Notebook, Display",
    "level" => "beginner",
    "medium" => "in-class video | handouts",
     "equipment" => "in-class computers",
    "classSize" => 2,
    "supplies" => "pens, paper and folders"
  ];

?>
<div class="row wrapper">
<h1>Hardware Basics</h1>
<h3><?php echo $course["hardware"]; ?></h3>

<table class="panel">
<tr>
<th>Skill Level:</th>
<td><?php echo $course["level"]; ?></td>
</tr>
<tr>
<th>Medium:</th>
<td><?php echo $course["medium"];?></td>
</tr>
<tr>
<th>Equipment:</th>
<td><?php echo $course["equipment"];?></td>
</tr>
<tr>
<th>Class Size:</th>
<td><?php echo $course["classSize"];?></td>
</tr>
<tr>
<th>Supplies | Students:</th>
<td><?php echo $course["supplies"];?></td>
</tr>
</table>
</div>

<?php include('../inc/footer.php'); ?>
<?php include('../inc/script.php'); ?>

