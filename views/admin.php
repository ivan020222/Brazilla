<?php
$subscriptions = allSubscriptions('storage/subscriptions.ser');
// Debug subscriptions array
//print_r($subscriptions);
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
 <span class="navbar-brand">Admin</span>
 <ul class="navbar-nav px-3 ml-auto">
 <li class="nav-item text-nowrap">
 <a class="nav-link" href="logout.php">Sign out</a>
 </li>
 </ul>
</nav>
<main role="main" class="container pt-3">
<h1>Мої підписники</h1>
 <table class="table table-striped table-sm">
 <thead>
 <tr>
 <th>#</th>
 <th>Ім'я</th>
 <th>E-mail</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($subscriptions as $index => $subscription): ?>
 <tr>
 <td><?= $index + 1 ?></td>
 <td><?= $subscription['name'] ?></td>
 <td><?= $subscription['email'] ?></td>
 </tr>
 <?php endforeach; ?>
 </tbody>
 </table>
</main>