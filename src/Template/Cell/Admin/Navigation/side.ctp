<!--?php debug($nav); ?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
	<div class="sidebar-brand-icon rotate-n-15">
	  <!--i class="fas fa-laugh-wink"></i-->
	</div>
	<div class="sidebar-brand-text mx-3">Tomato CMS</div>
  </a>

  <?php foreach($nav as $index => $key):?>
	
	<?php if($key=='divider'): ?>
		<!-- Divider -->
		<hr class="sidebar-divider my-0">
	<?php endif; ?>
	
	<?php if(isset($key['heading']) && ($key['heading']['show'])): ?>
	  <!-- Divider -->
	  <hr class="sidebar-divider">
	  <!-- Heading -->
	  <div class="sidebar-heading">
		<?php if($key['heading']['icon_class'] !=''): ?>
			<i class="<?= $key['heading']['icon_class'] ?>"></i>
			<span><?= $key['heading']['text'] ?></span>
		<?php endif; ?>
		<?= $key['heading']['text'] ?>
	  </div>
	<?php endif; ?>
	
	<?php if(isset($key['active_element']) && ($key['active_element']['show'])): ?>
		<!-- Nav Item -->
		<?php if($key['active_element']['icon_class'] !=''){
		  $text = '
			<i class="'.$key['active_element']['icon_class'].'"></i>
			<span>'.$key['active_element']['text'].'</span>';
		} else {
			$text = '
			<span>'.$key['active_element']['text'].'</span>';
		}
	  ?>
	  <li class="nav-item">
		<?= $this->Html->link($text, $key['active_element']['link'], ['class' => 'nav-link', 'escape' => false]); ?>
	  </li>
	<?php endif; ?>
	
  <?php endforeach; ?>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
	<button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->