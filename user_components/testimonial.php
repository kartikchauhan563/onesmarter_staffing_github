<div class="testimonials mb-5">
        
        <div class="container">
            
        <center id="servicestext">Candidate of the Week
                    <hr class="reddivider">
                </center>
        <div id="demo" class="carousel slide" data-ride="carousel">
    
    
    
            <div class="carousel-inner">
            <?php
            $result = mysqli_query($con,"SELECT * FROM employeestory");
    
            $counter=0;
                foreach ($result as $result) { ?>
                <div class="carousel-item  <?php if($counter==0){ echo "active";}else{ echo " ";} $counter++;?>">
                    <div class="carousel-caption">
                        <p><?php echo $result['message'];?></p> <img src="./assets/placeholder.jpeg">
                        <div id="image-caption"><?php echo $result['employeename'];?></div>
                    </div>
                </div>
               
                <?php } ?>
    
    
    
    
            </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
        </div>
    </div>
        </div>