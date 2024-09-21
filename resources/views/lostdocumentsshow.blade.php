<!DOCTYPE html>
<html>
<head>
    <title>Document Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .details div {
            width: 48%;
            margin-bottom: 10px;
        }
        .details strong {
            display: block;
            color: #555;
            margin-bottom: 5px;
        }
        .details img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Document Details</h2>

    <div class="details">
        <div>
            <strong>ID:</strong> {{ $document->id }}
        </div>
        <div>
            <strong>First Name:</strong> {{ $document->first_name }}
        </div>
        <div>
            <strong>Last Name:</strong> {{ $document->last_name }}
        </div>
        <div>
            <strong>Gender:</strong> {{ $document->gender }}
        </div>
        <div>
            <strong>ID Number:</strong> {{ $document->doc_no }}
        </div>
        <div>
            <strong>County:</strong> {{ $document->doc_county }}
        </div>
        <div>
            <strong>Location Found:</strong> {{ $document->doc_location }}
        </div>
        <div>
            <strong>Document Image:</strong> 
            @if($document->doc_link)
                <img src="{{ asset('storage/' . $document->doc_link) }}" alt="Document Image">
            @else
                <p>No image available</p>
            @endif
        </div>
    </div>

    <a href="" class="back-link">Back to List</a>
</div>

</body>
</html>
