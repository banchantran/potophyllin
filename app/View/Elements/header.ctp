<ul class="nav">
    <li class="<?php echo $this->action == 'home' ? 'active' : ''; ?>"><a href="<?php echo Router::url('/'); ?>">Trang chủ</a></li>
    <li class="<?php echo $this->action == 'info' ? 'active' : ''; ?>"><a href="<?php echo Router::url('/info'); ?>">Bệnh sùi mào gà</a></li>
    <li class="<?php echo $this->action == 'book' ? 'active' : ''; ?>"><a href="<?php echo Router::url('/book'); ?>">Đặt hàng</a></li>
    <li class="<?php echo $this->action == 'contact' ? 'active' : ''; ?>"><a href="<?php echo Router::url('/contact'); ?>">Liên hệ</a></li>
</ul>
<p>
    <img src="<?php echo Router::url('/img/icon.png'); ?>" alt="icon">
    <span>Podophyllin trị sùi mào gà</span>
</p>