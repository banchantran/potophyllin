<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>

	<title>Thuốc trị sùi mào gà – Thuốc Podophyllin của Thái Lan</title>
    <meta name="description" content="Bạn đang tìm kiếm giải pháp an toàn hiệu quả đặc trị bệnh sủi mào gà tại nhà mà không cần đến cơ sở y tế.">
    <meta name="title" content="Sùi mào gà, điều trị sùi mào gà, bệnh sùi mào gà, thuốc trị sùi mào gà">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('common');
		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
        <div id="header">
            <?php echo $this->element('intro'); ?>
			<?php echo $this->element('header'); ?>
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

    <div id="footer">
        <?php echo $this->element('footer'); ?>
    </div>
    <script src="https://uhchat.net/code.php?f=c97910"></script>
<?php
echo $this->Html->script('jquery');
echo $this->Html->script('html5shiv');
echo $this->Html->script('common');
?>
</body>
</html>
