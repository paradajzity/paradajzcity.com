<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'TomatoCMS Admin';

//java check
if ($java==null) {
	$java = 'default';
}

//css check
if ($css==null) {
	$css = '';
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="TomatoCMS Admin">
	<meta name="author" content="Željko Popović">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
	
	 <!-- Custom styles for this template-->
    <?= $this->Html->css('css/sb-admin-2.min.css') ?>
	
	<!-- Custom fonts for this template-->
	<?= $this->Html->css('vendor/fontawesome-free/css/all.min.css') ?>
	<?= $this->Html->css('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>
	
	<!-- Custom styles for this page -->
	<?php if($css!=''){$this->Html->css($css);} ?>
	
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?= $cell = $this->cell('Admin/Navigation::side'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?= $cell = $this->cell('Admin/Navigation::top'); ?>
		
		<?= $this->Flash->render() ?>
		
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?= $this->fetch('content') ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; TomatoCMS powered by CakePHP 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?= $cell = $this->cell('Admin/Navigation::logout'); ?>

  <?= $cell = $this->cell('Admin/ScriptLoader::'.$java); ?>
</body>

</html>
