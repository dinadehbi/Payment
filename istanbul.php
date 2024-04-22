<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="fly.css">
    <link rel="icon" type="image/x-icon" href="logo.png">

</head>
<body>
    <header>
        <img src="logo.png" alt="Company Logo" height="200px" width="200px">
        <a href="#" class="link1">Home</a>
        <a href="#" class="link1">Tours Page</a>
        <a href="#" class="link1">News</a>
        <a href="#" class="link1">Contact</a>
        <div class="con3">
            <img src="user.svg" alt="User Icon" class="user">
            <a href="SignUp.php" class="link1" style="border:none;">SignUp</a>
        </div>
    </header>
    <section>
        <div class="div8">
            <a href="index.php"><button class="GoBack"><< Go Back</button></a>
            <div>
                <strong>Review Trip Details and Book</strong> <br>
                <p>You're on the final step. Only a few more minutes to finish!</p>
            </div>
        </div>
        <div class="container1">  
            <div class="container2">
                <div class="div9">
                    <img src="plane2.png" alt="Plane Icon" class="plane2" > <p class="flypara"> Flight Summary</p>
                </div>
                <hr>
                <div class="ticket-info">
                    <div class="div10">
                        <div class="div11">
                            <p class="flypara"> Departure | </p><p>Thu, Apr 25</p>
                        </div>
                        <div class="div11">
                            <img src="chrono.png" alt="Clock Icon" class="chrono">
                            <p class="flypara">04h 20m</p>
                        </div>
                    </div>


                    <div class="container3">
                        <div class="div12">
                            <img src="turkich.png" alt="Turkish Airlines Logo" height="40px" width="70px">
                            <div class="div13">
                                <p>Turkish Airlines</p>
                                <div class="info">
                                    <span>Flight No: 9602 | EQP</span><img src="info.png" alt="Info Icon" height="20px" width="20px">
                                </div>
                            </div>
                        </div>
                        <div class="div14">
                            <div class="div15"><p>07h 50m</p></div>
                            <div class="div16">
                                <span class="flypara">04:25 PM</span>
                                <img src="blueplane.png" alt="Blue Plane Icon" class="plane">
                                <span>-------------------------------------</span>
                                <img src="maps.png" alt="Map Icon" class="plane">
                                <p class="flypara">07:15 AM</p>
                            </div>
                            <div class="div17">
                                <p class="flypara">TNG(Ibn Batuta)</p>
                                <p class="flypara">IST(sabiha)</p>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="lastdiv">
                                <span style="color: rgb(0, 89, 118);">Flight Detail</span>
                                <img src="add.png" alt="Add Icon">
                            </div>
                
                <!-- Return Ticket Info -->
                <div class="ticket-info">
                    <div class="div10">
                        <div class="div11">
                            <p class="flypara"> Return | </p><p>Thu, May 02</p>
                        </div>
                        <div class="div11">
                            <img src="chrono.png" alt="Clock Icon" class="chrono">
                            <p class="flypara">08h 45m</p>
                        </div>
                    </div>
                    <div class="container3">
                        <div class="div12">
                            <img src="turkich.png" alt="Turkish Airlines Logo" height="40px" width="70px">
                            <div class="div13">
                                <p>Turkish Airlines</p>
                                <div class="info">
                                    <span>Flight No: 9305 | EQP</span><img src="info.png" alt="Info Icon" height="20px" width="20px">
                                </div>
                            </div>
                        </div>
                        <div class="div14">
                            <div class="div15"><p>08h 54m</p></div>
                            <div class="div16">
                                <span class="flypara">12:30 PM</span>
                                <img src="blueplane.png" alt="Blue Plane Icon" class="plane">
                                <span>------------------------------------</span>
                                <img src="maps.png" alt="Map Icon" class="plane">
                                <p class="flypara">02:15 AM</p>
                            </div>
                            <div class="div17">
                                <p class="flypara">IST(sabiha)</p>
                                <p class="flypara">TAN(Ibn Batuta)</p>
                            </div>
                           
                        </div>
                      
                    </div>
                  
                </div>
                <div class="lastdiv">
                                <span style="color: rgb(0, 89, 118);">Flight Detail</span>
                                <img src="add.png" alt="Add Icon">
                            </div>

                <!-- Price Details -->
               
            </div>  
            
            
            <div class="Pricediv">
                <div class="div19">
                    <h1 style="color: rgb(0, 89, 118);">Price Details</h1>                <hr>

                </div>
                <hr>  
  
                <div class="div18" >
                    <div style="display:flex; justify-content: center; align-items: center;">
                    <img src="adult.png" class="plane2">
                        <p class="flypara">1 Adult</p>
                        </div>
                        <p class="flypara">$400</p>
                </div>
                <hr>
                <div class="div18">
                    <div style="display:flex; justify-content: center; align-items: center;">
                    <img src="discount.png">
                        <span style="color: green;" class="flypara">Discount</span>
                    </div>
                        <p style="color: green;"  class="flypara">-0.00$</p>
                </div>
                <hr>
                <div class="div18">
                    <div style="display:flex; justify-content: center; align-items: center;">
                    <img src="price.png" height="30px" width="30px">
                        <span class="flypara">Total Price (USD)</span>
                        </div>

                        <span   class="flypara">400$</span>
                        </div>
                 <hr>
                <form  method="post" action="checkout.php" class="div19">
                        <button class="GoBack">Pay Now</button>
                </form>
        </div>
    </section>
</body>
</html>
