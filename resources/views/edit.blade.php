<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comrades Car Rental and Hire | Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
        </section>
            <div class="text">
                <h2>Rental Form</h2>
                <p>Edit with Integrity and purpose to ensure consistency</p>
            </div>
            <div class="form box">
            <form action="{{ route('update',$mains->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="forms">
                    <p>Full name</p>
                    <input type="text" value="{{$mains->Full_Name}}" name="name" required>
                    <p>Telephone Number</p>
                    <input type="number" value="{{$mains->Telephone}}" name="number" required>
                    <p>Postal address</p>
                    <input type="text" value="{{$mains->Address}}" name="address" required>
                    <p>Car</p>
                   <input type="text" value="{{$mains->Car}}" name="car" required></br></br>
                   <button>Update</button>
                </div>
            </form>
        </div>
    <footer>
        <p>&copy; 2025 MAM Tours and Travels</p>
    </footer>
    
</body>
</html>