<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

		<h1>Selamat Datang ! di SAI UINSA</h1>
		<h4>Masih banyak kekurangan</h4>
		<h6>Tetapi untuk fitur CRUD aplikasi ini, kami rasa sudah cukup baik</h6>

        
		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>