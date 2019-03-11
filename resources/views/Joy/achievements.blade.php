



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


<div class="container-fluid">


<table class="table table-hover table-striped table-bordered table-light ">
        <thead class="thead-light">
          <tr>
            <th scope="col">Award</th>
            <th scope="col">Category</th>
            <th scope="col">Work</th>
            <th scope="col">Result</th>
          </tr>
        </thead>
        <tbody class="tableStyle">
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




<style>

.tableStyle{
    font-weight: 700;
    font-family:'Courier New', Courier, monospace
}

body{
  /**  background: #b92b27;  /* fallback for old browsers */
/**background: -webkit-linear-gradient(to right, #1565C0, #b92b27);  /* Chrome 10-25, Safari 5.1-6 */
/**background: linear-gradient(to right, #1565C0, #b92b27); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background-color: rgba(243, 247, 242, 0.658)
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
.table{
    background-color: rgba(243, 247, 242, 0.658)
}

</style>

<script>

function resultClick(href){
    window.open(href);
}
</script>
</html>