<table class="users oppor">
    <tr>
        <th>id</th>
        <th>login</th>
        <th>email</th>
        <th>role</th>
        <th>Del User</th>
        <th>Promote User</th>
        <th>Decline User</th>
        <th>Pass to log data</th>
        <th>Del users messages</th>
        <th>Reduction users messages</th>
        <th>Del other admins</th>
        <th>Del other managers</th>
    </tr>
    <?= $admin->getPageOpportunity(isset($_GET["p"]) ? $_GET["p"] : 1) ?>
</table>
<div class="pages">
    <?php foreach(range(1,$admin->getNumPages()) as $number): ?>
        <a class="pageButton" href="/opportunity?p=<?= $number ?>"><?=$number?></a>
    <?php endforeach; ?>
</div>
