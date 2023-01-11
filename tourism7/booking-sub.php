<?php 
include('./admin/config/dbconn.php');
if(isset($_POST['bookcheck1']))
{   $hotel_id = $_POST['hotel_id'];
    
    
    $indate=$_POST['in-date1'];
    $outdate=$_POST['out-date1'];
    
    $update_query = "select * from booking where hotel_id='$hotel_id'";
    $run = mysqli_query($conn,$update_query);
    $insert_query = "INSERT into login.booking(hotel_id,indate,outdate) values('$hotel_id','$indate','$outdate')";
    $count=0;
    $row=mysqli_fetch_array($run);
    $bookcount=mysqli_num_rows($run);
                    if($bookcount==0)
                    {
                        
                        $run1 = mysqli_query($conn,$insert_query);
                    
                        if($run1)
                        {  
                            echo "Successfully Booked hotels for that specific date.....";   
                            
                        }
                        
                    
                    }  
                    else  
                        while($row2=mysqli_fetch_array($run)) { 

                            if($row2['indate']<=$indate && $row2['outdate']>=$outdate)
                            {
                                echo "The room was already Booked!!!";
                                
                            }
                            else
                            {
                                $count=$count+1;
                            }
                         } 
                         if($row==$count)
                         {
                            echo "Hotel has been booked for the specific date.....";
                            $run3 = mysqli_query($conn,$insert_query);
                            if($run3)
                            {
                                echo "booked and added user successfully....";
                                
                            }
                            
                         }
} 





?>