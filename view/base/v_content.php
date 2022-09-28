<nav class="site-nav">
    <div class="container navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>"><?= __('Home')?></a>
            </li>
            <?php if(isset($_SESSION['user_data']) and $_SESSION['user_data']): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>messages/add"><?= __('Add')?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>profile"><?= __('Profile')?></a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>contacts"><?= __('Contacts')?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>contacts"><?= __('Not Exists')?></a>
            </li>
        </ul>
        <ul class="nav navtwo">
            <li class="nav-item navtwoitem"> <?= __('Console') ?> </li>
            <li class="nav-item">   
                <form action="" id="trans">
                    <select name="ln" id="translate">
                        <option value="en" <?php if ($_SESSION['ln'] == "en"): ?> selected <?php endif; ?> >EN</option >
                        <option value="ua" <?php if ($_SESSION['ln'] == "ua"): ?> selected <?php endif; ?> >UA</option >
                        <option value="pl" <?php if ($_SESSION['ln'] == "pl"): ?> selected <?php endif; ?> >PL</option >
                    </select>
                </form>
            </li>
        </ul>
    </div>
</nav>
<div class="site-content">
    <div class="container">
        <main>
            <h1><?=$title?></h1>
            <hr>
