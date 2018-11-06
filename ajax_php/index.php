<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Country</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">

    <script>
        function showSuggestion(str){
            // console.log(str);
            if(str.length == 0 ){
                document.getElementById('output').innerHTML = "";
            }

            else{
                //ajax request
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('output').innerHTML = this.responceText;
                    }
                }

                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Your Country</h1>
        <form action="">
        Search Country: <input type="text" class="form-control" onkeydown="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>