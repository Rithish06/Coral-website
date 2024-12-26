<?php include_once('./layout/header.php'); ?>

<?php
$folder = './assets/images/gallery/';
$images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
//var_dump($images);
?>
<div id="overlay"></div>

<div id="myDialog">
  <span class="close" onclick="closeDialog()">&times;</span>
  <img src="assets/images/ivf-offer.jpg" class="dialog" alt="Banner Image">
</div>
<style>
  #myDialog {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 500px;
    /* background: white;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3); */
    padding: 20px;
    z-index: 1000;
  }
  
  #myDialog img {
    width: 520px;
    /* height: 300px; */
  }
  
  #myDialog .close {
       /* float: right; */
       font-size: 52px;
    cursor: pointer;
    color: white;
    display: flex;
    justify-content: flex-end;
    /* align-items: flex-end; */
    margin-right: -114px;
  }
  
  #overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
  }
</style>
<script>
    // Automatically open the dialog when the page loads
       // Automatically open the dialog when the page loads
    window.onload = function() {
      openDialog();
    };
    function openDialog() {
      document.getElementById("myDialog").style.display = "block";
      document.getElementById("overlay").style.display = "block";
    }

    function closeDialog() {
      document.getElementById("myDialog").style.display = "none";
      document.getElementById("overlay").style.display = "none";
    }
    };
</script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        // Show the modal on page load
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('popupModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
<div class="banner">
    <img src="/assets/images/Rectangle 17331.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           Gallary
       </div>
   </div>
</div>
<div class="container my-5">
   
    
    <div class="row">
        <?php foreach($images as $image) { ?>
         <div class="col-md-4 py-2">
             <a href="<?php echo $image ?>?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 py-2 text-center" >
    		<img src="<?php echo $image ?>?image=251" class="img-fluid">
	    </a>
         </div>
           
        <?php } ?>
	<!--
	<a href="assets/images/gallery/524061b8f5e9011ab0efae444be53570.jpg?image=252" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 py-2">
		<img src="assets/images/gallery/524061b8f5e9011ab0efae444be53570.jpg?image=252" class="img-fluid">
	</a>
	<a href="assets/images/gallery/b476962fa89ca403b140999166b18961.png?image=253" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 py-2">
		<img src="assets/images/gallery/b476962fa89ca403b140999166b18961.png?image=253" class="img-fluid">
	</a>
	<a href="assets/images/gallery/b2b51036da3fa14eabd5aeac83d5765c.png?image=253" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 py-2">
		<img src="assets/images/gallery/b2b51036da3fa14eabd5aeac83d5765c.png?image=253" class="img-fluid">
	</a>
	-->
</div>
</div>
<script>

  
</script>
<?php include_once('./layout/footer.php'); ?>
