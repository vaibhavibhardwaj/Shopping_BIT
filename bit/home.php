<?php
include("header.php");
?>
    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center">
                    WELCOME TO P2P LIBRARY
                </h3>
            </div>
			
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> My WishList</h4>
                    </div>    
                     
					 <div class="panel-body">
					 <?php
					    $book = profilewishlist("$user");
                        while($row = mysqli_fetch_array($book))
						{
						    echo "<li>".$row['bookname'];
						}
					 ?>
					<br>
					<a href='addwish.php' class = 'btn btn-info'> Add Wish</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> My Matches</h4>
                    </div>    
                     
					<div class="panel-body">
                    <?php
					 
                        $matches = matches("$user");
						$profiles=$matches['profilebooks'];
						foreach( $profiles as $row )
						{	    
						    echo "<dt>Profile:".$row['profile'];
						    echo"<br>";
							echo "<dd>Contains:".$row['bookname'];
						    $data=$row['data'];
						    while($row1 = mysqli_fetch_array($data))
						    {
						        echo"<br>";
						        echo "<dd>Requires:".$row1['bookname'];
                            }
						}
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> My Books</h4>
                    </div>    
                     
					<div class="panel-body">
					<?php
					 
                        $wishlist = profilebook("$user");
						while($row = mysqli_fetch_array($wishlist))
						{
						    echo "<li>".$row['bookname'];
						}   
                    ?>
                    <br>
					<a href='addbook.php' class = 'btn btn-info'> Add Book</a>
					</div>
				</div>
			</div>
		</div>
        <!-- /.row -->

        <!-- Portfolio Section -->
       
        <!-- /.row -->

    
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                  
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
