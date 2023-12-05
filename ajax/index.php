<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
    <form action="" class="form-group" id="form">
    <label for="name">Name</label>
    <input type="hidden" class="form-control" id="id">
    <input type="text" class="form-control" id="uname">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass">
    <input type="submit" class="btn btn-primary" id="btn">
    </form>
    </div>
    <div class="col-md-6">
        <table class="table">
            <thead class="table-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>DELETE</th>
            </thead>
            <tbody id="tab">
                
            </tbody>    
        </table>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>