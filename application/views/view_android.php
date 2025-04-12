<h2>Android Pricing</h2>
<?php foreach ($pricing as $row): ?>
    <div class="pricing-box">
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['price']; ?></p>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endforeach; ?>
