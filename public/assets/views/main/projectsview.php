<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Projects</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/assets/styles/homepage.css">
    </head>
    <body>

        <div class="container users-form margin-thirty">
            <br><br><br><br>
        <h2>Projects</h2>
            <br><br>
            <div id="projects-container" class="margin-ten"></div>
        </div>


        <script>
            $(document).ready(function () {
                $.ajax({
                    url: `http://localhost:8888/projects`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('#projects-container').html('')
                        $.each(data, function (key, value) {
                            $('#projects-container').append(`
                                <div class="user-container margin-thirty">
                                    <span class="user">${value['title']}</span>
                                    <br><br>
                                    <span class="user">${value['description']}</span>
                                    <br><br><br>

                            
                                </div>`)
                        });
                    }
                });

            })


        </script>

    </body>
</html>