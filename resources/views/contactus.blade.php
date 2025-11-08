<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comrades Car Rental and Hire | Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <div class="header4">
        <div class="logo-container">
         <img src="mamlogo.png", alt="          " class="logo">
         <header>MAM TOURS AND TRAVELS</header></br>
         <nav>
            <a href="home">Home</a>
            <a href="aboutus">About</a>
            <a href="contactus">Contact</a>
           </nav>
         </div>
    </div>        
</header>
<body>
    
            <div class="text1">
                <h2>Rental Booking Form</h2>
                <p>You can fill in the form below and get a car from MAM Tours.</p>
            </div>
             <div class="dog">
               <form action="{{ route('dashboard.store') }}" method="post">
                @csrf
                    <input type="text" placeholder="Name" name="name"></br></br>
                    <input type="number" placeholder="Telephone" name="number"></br></br>
                    <input type="text" placeholder="Address" name="address"></br></br>
                    <input type="text" placeholder="Car" name="car"></br></br>
                </div>
                <button class="submit">Submit</button> 
            </form>
            

    <footer>
        <section class="Contact">
                <h2>Our contact Information</h2>
                <p>Feel free to reach out to us</p>
                <p3>Email: <i><a href="@mamtours.com">@mamtours.com</a></i></p3> 
                <p>Phone: +256 755-943973</p>
                <p>Address:  Martin Rd, Kampala, Uganda</p>
                <nav>
                  <a href="home">Home</a></p>
                  <a href="aboutus">About Us</a></p>
                </nav>
    </footer>
</body>
</html>