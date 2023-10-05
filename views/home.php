<title><?php echo $title; ?></title>
<h1>Home Page</h1>

<ul>
    <?php foreach ($users as $value) { ?>
        <li><?php echo $value['Nome'];?></li>
    <?php } ?>
</ul>