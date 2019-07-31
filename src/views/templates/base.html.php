<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gradebook</title>
	    <link rel="stylesheet" href="<?= BASE_URL . '/public/css/reset.css';?>">
	    <link rel="stylesheet" href="<?= BASE_URL . '/public/css/style.css';?>">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    </head>
    <body>
		<!-- Pranesimu rodymas(erros) -->
        <?php if (isset($_SESSION['messages'])): ?>
        <section id="messages-section">
            <div class="uk-container">
                <?php foreach (['primary', 'success', 'warning', 'danger'] as $alertClass):?>
                <?php if (isset($_SESSION['messages'][$alertClass])):?>
                <div class="uk-alert-<?= $alertClass;?>" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <ul class="uk-list">
                        <?php foreach ($_SESSION['messages'][$alertClass] as $alert): ?>
                        <li><?= $alert; ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <?php endif;?>
            <?php endforeach;?>
            <?php unset($_SESSION['messages']);?>
        </section>
        <?php endif;?>

        <?php if (isset($_SESSION['user'])): ?>
	        <div class="user_status_style">
		        <div class="user_status_style_name">Name: <i><?= $_SESSION['user']['name']; ?></i></div>
		        <div class="user_status_style_name">Email: <i><?= $_SESSION['user']['email']; ?></i></div>
		        <a class="user_status_style_logout" href="<?= BASE_URL; ?>/user/logout"><i class="fas fa-sign-out-alt"></i></a>
	        </div>
        <?php endif;?>

        <?php if (isset($form)): ?>
            <?= $form;?>
        <?php endif;?>

        <?php if (isset($list)): ?>
        <section id="list-section">
            <div class="uk-container">
                <?= $list; ?>
            </div>
        </section>
        <?php endif;?>


        <?php if (isset($dashboard)): ?>
        <section id="dashboard-section">
            <div class="uk-container">

            </div>
        </section>
        <?php endif;?>


        <?php if (isset($status)): ?>
        <section id="status-section">
            <div class="uk-container">
                <?= $status;?>
            </div>
        </section>
        <?php endif;?>

        <?php if (isset($javascript)): ?>
	        <script defer type="text/javascript" src="<?= BASE_URL . '/public/js/'.$javascript.'.js';?>"></script>
        <?php endif;?>
    </body>
</html>

