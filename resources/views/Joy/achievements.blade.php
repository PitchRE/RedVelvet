



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Joy</title>
</head>


<div class="container">
<section>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Award</th>
                    <th>Category</th>
                    <th>Work</th>
                    <th>Result</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                    @foreach($result as $results)
                    <tr>
                        <td>{{ $results['Award']}}</td>
                        <td>{{ $results['Category']}}</td>
                        <td>{{ $results['Work']}}</td>
                        @if ($results['hasReference'] == 1)
                        <td onClick="resultClick('{{$results['Reference']}}')" class="{{ $results['Result']}} refExist">{{ $results['Result']}}</td>
                   @else
                   <td class="{{ $results['Result']}}">{{ $results['Result']}}</td>
                   @endif
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</section>














</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function () {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({ 'padding-right': scrollWidth });
    }).resize();
</script>



<style>


    
    h1 {
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 100;
        text-align: center;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 13px;
        color: #fff;
        font-weight: 100;
        text-align: center;
        margin-bottom: 33px;
    }

    h3 {
        font-size: 15px;
        color: #fff;
        font-weight: 100;
        text-align: left;
        margin-bottom: 15px;
    }

    table {
        width: 100%;
        table-layout: auto;
    }

    .tbl-header {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .tbl-content {
        height: 200px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
    }

    td {
        padding: 15px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }

    .amount {
        padding: 15px;
        text-align: right;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }

    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

    body {
        background: -webkit-linear-gradient(left, #25c481, #25b7c4);
        background: linear-gradient(to right, #25c481, #25b7c4);
        font-family: 'Roboto', sans-serif;
    }

    section {
        margin: 50px;
    }



    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .Win {
    background-color: rgba(34, 209, 18, 0.404)
}
.Win:hover {
    background-color: rgb(30, 228, 13);
}
.Nominated {
    background-color: rgba(241, 63, 50, 0.521);
}
.Nominated:hover {
    background-color: rgb(243, 21, 6);
}

.refExist{
    cursor: pointer;
}

</style>

<script>

function resultClick(href){
    window.open(href);
}
</script>
</html>