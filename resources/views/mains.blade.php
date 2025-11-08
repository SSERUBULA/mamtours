<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comrades Car Rental and Hire | Rental Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

/* Body styling */
body {
    background-color: #f4f6f8;
    color: #333;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Container styling */
.container {
    width: 90%;
    max-width: 1000px;
    margin: 40px auto;
    background: #fff;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

/* Header text */
.text {
    text-align: center;
    margin-bottom: 25px;
}

.text h2 {
    color: #1a73e8;
    font-size: 28px;
    margin-bottom: 8px;
}

.text p {
    color: #666;
    font-size: 15px;
}

/* Section title */
.table-section h2 {
    color: #333;
    font-size: 22px;
    margin-bottom: 15px;
    text-align: center;
}

/* Table styling */
.rental-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.rental-table th,
.rental-table td {
    padding: 12px 15px;
    text-align: left;
}

.rental-table thead {
    background-color: #1a73e8;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.rental-table tbody tr {
    border-bottom: 1px solid #ddd;
    transition: background 0.3s ease;
}

.rental-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.rental-table tbody tr:hover {
    background-color: #e9f3ff;
}

/* Footer */
footer {
    text-align: center;
    margin-top: auto;
    background: #1a73e8;
    color: #fff;
    padding: 15px 0;
    font-size: 14px;
}

footer a {
    color: #fff;
    text-decoration: underline;
}

footer a:hover {
    color: #dfe6f0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .rental-table thead {
        display: none;
    }

    .rental-table, .rental-table tbody, .rental-table tr, .rental-table td {
        display: block;
        width: 100%;
    }

    .rental-table tr {
        margin-bottom: 15px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .rental-table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .rental-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        width: 45%;
        text-align: left;
        font-weight: bold;
        color: #333;
    }
}

    </style>
</head>
<body>

    <div class="container">
        <div class="text">
        </div>

        <!-- Table Display -->
        <!-- <section class="table-section">
            <h2>Rental Form Submissions</h2>
            <table class="rental-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Telephone</th>
                        <th>Address</th>
                        <th>Car</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mains as $main)
                    <tr>
                        <td>{{$main->id}}</td>
                        <td>{{$main->Full_Name}}</td>
                        <td>{{$main->Telephone}}</td>
                        <td>{{$main->Address}}</td>
                        <td>{{$main->Car}}</td>
                        <td>
                            <a href="{{route('edit',$main->id)}}"><button>Edit</button></a>
                        </td>
                        <td>
                            <form action="{{ route('mains.destroy', $main->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Del</button>
                            </form>    
                        </td>
                    </tr>  
                    @endforeach  
                </tbody>
            </table>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Comrades Car Rental and Hire | <a href="contactus">Contact Us</a></p>
    </footer> -->

</body>
</html> -->
