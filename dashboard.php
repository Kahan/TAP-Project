<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table{
            width: 100%;
            margin: 5%
        }
        th,td{
            border: 1px solid;
            text-align: left;
            padding: 10px;
            
        }
        form .form-group{
            display: flex;
            justify-content: center;
        }
        #applicant-dropbox{
            margin: 0 1%;
            text-align: center;
            text-align-last: center;
        }
        main.container{
            padding: 5%
        }
    </style>
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Grade Applicants</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                        <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="admin-dashboard.php">Dashboard</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <form action="">             
            <div class="form-group">
                <input class="btn btn-primary btn-sm" type="button" value="Prev" id="previous" onclick="previous()" />
                <select id='applicant-dropbox' name="applicants" onchange="showCustomer(this.value)">
                    <option value="">Select an applicant:</option>
                    <option value="1">1</option>
                    <option value="10">500</option>
                    <option value="15">1000</option>
                </select>
                <input class="btn btn-primary btn-sm" type="button" value="Next" id="next" onclick="next()" />
            </div>

            <div class="form-group">
                <div id="txtHint">Customer info will be listed here...</div>
            </div>
  
            <div class="form-group">
                <input class="btn btn-outline-primary btn-sm" type="button" value="Show Selected Applicants" id="show-applicants" onclick="forward()" />
            </div>
        </form>
    </main>

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="load-applicants.js"></script>
</body>

</html>