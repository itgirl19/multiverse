<?php include 'header.php'; ?>

    <h1 id="admin_header">admin</h1>
    <div id="admin_button_div">
        <a class="admin_button" href ="voegproduct.inc.php">voeg product toe</a>
        <a class="admin_button" href ="veranderproduct.php">verander product</a>
    </div>

<?php
$conn = mysqli_connect("localhost", "root", "AArw3c8WciwJRFT", "multiverse");
$result = mysqli_query($conn,"SELECT * FROM `vrbrillen`");

while($row = mysqli_fetch_array($result)) {
    print '<form method="post">';
    print '<div class="col-4 col-s-6 colzelf">';
    print '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" height="200" width="200" class="img-thumnail" /></br>';
    print $row['name'] . ' | €' . $row['price'];
    print '<br>';
    print '<a href="specification.php?id=' . $row['id'] . '">More info</a>';
    print '</div>';
}
?>