<?= showFlashMessage() ?>
<?= showMessage() ?>

   <section class="bg-primary text-white">

      <div class="container text-center">

        <h1>Welcome!</h1>
  
      <?php if ($isLogin): ?>
         <h3>
          <p>Halo, <strong><?= $username ?>!</strong></p>
          <p>Silahkan pilih menu dibagian atas.</p></h3>
    
      <?php else: ?>
        <h3>Selamat datang di aplikasi SMS Gateway</h3>
          <h3>Untuk menggunakan aplikasi ini silakan login</h3>
          <h1><?= anchor('login', 'Login', ['class' => 'btn btn-primary', 'role' => 'button']) ?></h1>
        
  
      <?php endif ?>
              

      </div>
    </section>